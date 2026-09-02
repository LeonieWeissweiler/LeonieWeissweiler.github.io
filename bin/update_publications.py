#!/usr/bin/env python3
"""Regenerate _data/publications.yml from Leonie Weissweiler's Google Scholar profile.

Usage:  python3 bin/update_publications.py [--profile <scholar_user_id>]

The profile listing gives title / authors / venue / year, but truncates long
author lists with "...". For those entries only, we fetch the per-paper detail
page to recover the full list — a handful of extra requests, spaced out.

Scholar serves a CAPTCHA to datacenter IPs, so this may fail from CI. When it
does, the script exits non-zero and leaves the existing YAML untouched rather
than writing a half-empty list.
"""
import argparse
import html
import os
import re
import sys
import time
import urllib.error
import urllib.request

PROFILE = "o4fK4n4AAAAJ"
UA = ("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 "
      "(KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36")
OUT = os.path.join(os.path.dirname(os.path.dirname(os.path.abspath(__file__))),
                   "_data", "publications.yml")


class Blocked(RuntimeError):
    pass


def fetch(url, tries=3):
    for attempt in range(tries):
        try:
            req = urllib.request.Request(url, headers={"User-Agent": UA,
                                                       "Accept-Language": "en-US,en;q=0.9"})
            body = urllib.request.urlopen(req, timeout=45).read().decode("utf-8", "replace")
        except urllib.error.HTTPError as e:
            if e.code in (429, 403):
                raise Blocked(f"Scholar returned HTTP {e.code} — this IP is rate-limited.")
            raise
        if "gs_captcha" in body or "/sorry/" in body:
            raise Blocked("Scholar served a CAPTCHA — this IP is rate-limited.")
        if body.strip():
            return body
        time.sleep(2 + attempt * 3)
    raise Blocked("Scholar returned an empty response three times.")


def text(fragment):
    return html.unescape(re.sub(r"<[^>]+>", "", fragment)).replace("\xa0", " ").strip()


def scrape_profile(user):
    """Yield one dict per article on the profile, walking the 100-per-page listing."""
    entries, start = [], 0
    while True:
        page = fetch(f"https://scholar.google.com/citations?user={user}&hl=en"
                     f"&cstart={start}&pagesize=100&sortby=pubdate")
        # attribute order inside the <a> is not guaranteed, so capture the whole
        # attribute blob and pull href out of it separately
        rows = re.findall(
            r'<tr class="gsc_a_tr">.*?<a ([^>]*class="gsc_a_at"[^>]*)>(.*?)</a>'
            r'.*?<div class="gs_gray">(.*?)</div>\s*<div class="gs_gray">(.*?)</div>'
            r'.*?<span class="gsc_a_h[^"]*">(\d{4}|)</span>', page, re.S)
        if not rows:
            break
        for attrs, title, authors, venue, year in rows:
            href = re.search(r'href="([^"]*)"', attrs)
            entries.append({
                "detail": "https://scholar.google.com" + html.unescape(href.group(1)) if href else "",
                "title": text(title),
                "authors": text(authors),
                # the listing repeats the year at the end of the venue line
                "venue": re.sub(r",?\s*\d{4}\s*$", "", text(venue)).strip(" ,"),
                "year": year,
            })
        if len(rows) < 100:
            break
        start += 100
    if not entries:
        raise Blocked("Parsed zero articles — Scholar's markup may have changed.")
    return entries


def enrich(entry):
    """Pull full author names, a link, and (if needed) the venue from the detail page.

    The listing abbreviates authors to initials and truncates long lists, so the
    detail page is the only place to get a consistent full-name list. The venue
    on the listing is the nicer, hand-curated one ("... (EMNLP)"), so keep that
    unless Scholar truncated it with an ellipsis.
    """
    page = fetch(entry["detail"])
    fields = re.findall(r'<div class="gsc_oci_field">(.*?)</div>\s*'
                        r'<div class="gsc_oci_value">(.*?)</div>', page, re.S)
    info = {text(k).lower(): text(v) for k, v in fields}

    if info.get("authors"):
        entry["authors"] = info["authors"]
    if "…" in entry["venue"] or "..." in entry["venue"]:
        for key in ("journal", "conference", "book", "source", "publisher"):
            if info.get(key):
                entry["venue"] = info[key]
                break
    link = re.search(r'<a [^>]*class="gsc_oci_title_link"[^>]*href="([^"]+)"', page)
    if link:
        entry["url"] = html.unescape(link.group(1))


def yaml_quote(s):
    return '"' + s.replace("\\", "\\\\").replace('"', '\\"') + '"'


def render(entries):
    lines = [
        "# Auto-generated from Google Scholar by bin/update_publications.py —",
        "# do not edit by hand; your changes will be overwritten on the next run.",
        "#",
        "# Source: https://scholar.google.com/citations?user=" + PROFILE,
        f"# Last updated: {time.strftime('%Y-%m-%d')}",
        "",
    ]
    for e in entries:
        lines.append(f"- title: {yaml_quote(e['title'])}")
        lines.append(f"  authors: {yaml_quote(e['authors'])}")
        lines.append(f"  venue: {yaml_quote(e['venue'])}")
        lines.append(f"  year: {yaml_quote(e['year'])}")
        if e.get("url"):
            lines.append(f"  url: {yaml_quote(e['url'])}")
        lines.append("")
    return "\n".join(lines)


def main():
    ap = argparse.ArgumentParser()
    ap.add_argument("--profile", default=PROFILE)
    args = ap.parse_args()

    try:
        entries = scrape_profile(args.profile)
        print(f"{len(entries)} publications; fetching detail pages", file=sys.stderr)
        for i, e in enumerate(entries, 1):
            print(f"  [{i}/{len(entries)}] {e['title'][:60]}", file=sys.stderr)
            enrich(e)
            time.sleep(3)
    except Blocked as exc:
        print(f"ERROR: {exc}\n"
              f"       {OUT} left unchanged. Re-run from a residential connection.",
              file=sys.stderr)
        return 1

    # newest first; entries without a year (preprints) sort to the top
    entries.sort(key=lambda e: e["year"] or "9999", reverse=True)
    for e in entries:
        e.pop("detail", None)

    with open(OUT, "w", encoding="utf-8", newline="\n") as fh:
        fh.write(render(entries))
    print(f"wrote {OUT} ({len(entries)} entries)", file=sys.stderr)
    return 0


if __name__ == "__main__":
    sys.exit(main())
