---
layout: default
title: News
description: News and updates from Leonie Weissweiler.
permalink: /news/
---

{% include page-styles.html %}

<style>
  .news-entry {
    display: grid;
    grid-template-columns: 140px 1fr;
    gap: 2rem;
    padding: 1.6rem 0;
    border-bottom: 1px solid var(--lion-border);
  }

  /* Entries without a date span the full width instead of leaving a gutter. */
  .news-entry.news-entry-nodate { grid-template-columns: 1fr; gap: 0; }

  .news-entry:first-of-type { border-top: 1px solid var(--lion-border); }

  .news-entry-date {
    font-family: var(--lion-caps-font, Georgia, serif);
    font-size: 0.75rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--lion-dark);
    padding-top: 0.2rem;
    margin: 0;
  }

  .news-entry-body {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.92rem;
    color: var(--lion-body);
    line-height: 1.75;
    margin: 0;
  }

  .news-entry-body a {
    color: var(--lion-dark);
    text-decoration: none;
    border-bottom: 1px solid var(--lion-dark);
    transition: opacity 0.2s;
  }

  .news-entry-body a:hover { opacity: 0.7; }

  @media (max-width: 600px) {
    .news-entry { grid-template-columns: 1fr; gap: 0.4rem; }
  }
</style>

<div class="lion-page">

  <div class="lion-page-header">
    <h1>News</h1>
    <div class="lion-page-rule"></div>
  </div>

  {% for item in site.data.news %}
  <div class="news-entry{% unless item.date and item.date != '' %} news-entry-nodate{% endunless %}">
    {% if item.date and item.date != '' %}<p class="news-entry-date">{{ item.date }}</p>{% endif %}
    <div>
      <p class="news-entry-body">{{ item.body }}</p>
    </div>
  </div>
  {% endfor %}

</div>
