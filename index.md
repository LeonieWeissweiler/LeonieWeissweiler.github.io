---
layout: default
title: Home
description: Leonie Weissweiler — Assistant Professor for Natural Language Processing at Leipzig University.
permalink: /
---

{% include page-styles.html %}

<style>
  /* ── Hero: name + role left, photo + socials right ── */
  .about-hero {
    display: grid;
    grid-template-columns: 1.6fr 1fr;
    gap: 3.5rem;
    /* stretch, not start: the columns share a height so the logo can grow to
       meet the bottom of the socials in the right-hand column */
    align-items: stretch;
    margin-bottom: 3.5rem;
  }

  .about-hero-left {
    display: flex;
    flex-direction: column;
  }

  .about-hero h1 {
    font-family: var(--lion-heading-font);
    font-size: clamp(2.6rem, 5.5vw, 4rem);
    font-weight: 400;
    color: var(--lion-ink);
    letter-spacing: -0.01em;
    line-height: 1.05;
    margin: 0 0 0.5rem;
  }

  .about-ipa {
    font-family: 'Lora', Georgia, serif;
    font-size: 1.3rem;
    color: var(--lion-muted);
    margin: 0 0 1.25rem;
  }

  /* Deliberately set in the heading face, not the body face, so it reads as a
     subtitle to the name rather than as the first line of the bio. */
  .about-role {
    font-family: var(--lion-heading-font);
    /* As large as fits on one line. Bespoke Slab sets ~15% wider than Playfair
       did, so this is retuned for it: the longer line needs ~1.44vw across the
       two-column range, and 1.14rem against the 642px column once the page
       stops growing. Both backed off ~3% for safety. */
    font-size: clamp(0.78rem, 1.4vw, 1.1rem);
    font-weight: 400;
    color: var(--lion-ink);
    line-height: 1.4;
    margin: 1.5rem 0 0;
    text-wrap: balance;
  }

  /* tight below: the leftover height here is what the lab logo grows into */
  .about-role-next { margin: 0.35rem 0 0.6rem; }

  .about-role a {
    color: var(--lion-dark);
    text-decoration: none;
    border-bottom: 1px solid var(--lion-dark);
    transition: opacity 0.2s;
  }

  .about-role a:hover { opacity: 0.7; }

  /* LION Lab logo, linking to the group site. Takes all the height left over
     in the left column, so its bottom lands level with the last social link. */
  .about-lablogo {
    /* flex-basis 0 so this box is purely the leftover height, never its own
       content height — otherwise the image sizes itself from its width and
       pushes the column taller than the socials beside it. */
    flex: 1 1 0;
    min-height: 0;
    margin: 0;
    position: relative;
    transition: opacity 0.2s;
  }

  .about-lablogo img {
    /* absolute so the image contributes no height of its own */
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    /* contain keeps the 5250:2000 ratio; it grows until it runs out of either
       height or width, whichever comes first */
    object-fit: contain;
    object-position: left bottom;
    display: block;
  }

  .about-lablogo:hover { opacity: 0.75; }

  /* Right column: photo, with the socials tucked underneath it. */
  .about-hero-right {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 1.6rem;
  }

  /* Six links across the photo's width. The source order (see index markup)
     is chosen to wrap them 3 + 3; the column gap is kept fairly tight so that
     split survives down to a narrower viewport before it breaks up again. */
  .about-social {
    /* same width as the photo above it, so their edges line up */
    width: 92%;
    /* A 3-column grid rather than wrapping flex: the split stays 3 + 3 at any
       container width, instead of flipping to 4 + 2 once there's room for a
       fourth. space-between puts column 1 flush left and column 3 flush right,
       so Email's left edge and LinkedIn's right edge meet the photo's edges. */
    display: grid;
    grid-template-columns: auto auto auto;
    justify-content: space-between;
    gap: 0.75rem 1.125rem;
    align-items: center;
  }

  /* right-align the third column so X sits under LinkedIn, both flush right */
  .about-social a:nth-child(3n) { justify-self: end; }

  /* The three columns need ~309px including gaps. Below ~1150px the column
     tightens, so drop the minimum gap; space-between re-widens it wherever
     there is room. */
  @media (max-width: 1150px) {
    .about-social { column-gap: 0.4rem; }
  }

  /* Below ~1040px three columns no longer fit and the labels would wrap inside
     their cells. Fall back to two columns over three rows rather than
     collapsing the whole hero — there is still plenty of horizontal room here.
     Column 1 stays flush left and column 2 flush right, so Email's left edge
     and LinkedIn's right edge still meet the photo's. */
  @media (max-width: 1040px) and (min-width: 901px) {
    .about-social { grid-template-columns: auto auto; }
    .about-social a:nth-child(3n) { justify-self: auto; }
    .about-social a:nth-child(2n) { justify-self: end; }
  }

  .about-social a {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.82rem;
    letter-spacing: 0.06em;
    color: var(--lion-body);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: color 0.2s;
  }

  .about-social a:hover { color: var(--lion-dark); }

  .about-social img {
    width: 20px;
    height: 20px;
    object-fit: contain;
    flex-shrink: 0;
    opacity: 0.7;
  }

  .about-social a:hover img { opacity: 1; }

  /* Photo with corner bracket decoration */
  .about-photo-wrap {
    position: relative;
    /* same width as the social row beneath, so their edges line up */
    width: 92%;
  }

  .about-photo {
    width: 100%;
    height: auto;
    display: block;
  }

  .about-photo-wrap::before {
    content: '';
    position: absolute;
    top: -8px; left: -8px;
    width: 32px; height: 32px;
    border-top: 3px solid var(--lion-dark);
    border-left: 3px solid var(--lion-dark);
    z-index: 1;
  }

  .about-photo-wrap::after {
    content: '';
    position: absolute;
    bottom: -8px; right: -8px;
    width: 32px; height: 32px;
    border-bottom: 3px solid var(--lion-dark);
    border-right: 3px solid var(--lion-dark);
    z-index: 1;
  }

  /* ── News preview ── */
  .news-item {
    padding: 1.4rem 0;
    border-bottom: 1px solid var(--lion-border);
  }

  .news-item:first-of-type { border-top: 1px solid var(--lion-border); }

  .news-item-date {
    font-family: var(--lion-caps-font, Georgia, serif);
    font-size: 0.72rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--lion-dark);
    margin-bottom: 0.3rem;
  }

  .news-item-body {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.9rem;
    color: var(--lion-body);
    line-height: 1.7;
    margin: 0;
  }

  .news-item-body a {
    color: var(--lion-dark);
    text-decoration: none;
    border-bottom: 1px solid var(--lion-dark);
    transition: opacity 0.2s;
  }

  .news-item-body a:hover { opacity: 0.7; }

  .see-all-link {
    font-family: var(--lion-caps-font, Georgia, serif);
    font-size: 0.82rem;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--lion-dark);
    text-decoration: none;
    border-bottom: 1px solid var(--lion-dark);
    margin-top: 1.5rem;
    display: inline-block;
    transition: opacity 0.2s;
  }

  .see-all-link:hover { opacity: 0.7; }

  /* Stack at 900px — below this the two-column hero genuinely runs out of
     width. Between 900 and 1040 the socials drop to two columns instead. */
  @media (max-width: 900px) {
    .about-hero {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
    /* Stacked: left-align the photo and socials with everything else, and let
       the logo go back to a fixed size — there is no leftover height to fill. */
    .about-hero-right { align-items: flex-start; }
    .about-photo-wrap { width: 260px; }
    /* stacked: the column is full-page width, so a fixed 3-up grid would leave
       huge gaps — let them pack naturally instead */
    .about-social {
      width: 100%;
      min-width: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }
    .about-social a:nth-child(3n) { justify-self: auto; }
    .about-lablogo { flex: 0 0 auto; position: static; margin-bottom: 0.5rem; }
    .about-lablogo img { position: static; width: 240px; height: auto; aspect-ratio: 5250 / 2000; }
  }
</style>

<div class="lion-page">

  <!-- Hero -->
  <div class="about-hero">
    <div class="about-hero-left">
      <h1>Leonie Weissweiler</h1>
      <p class="about-ipa">/ˈleːoni ˈvaɪ̯svaɪ̯lɐ/</p>
      <div class="lion-page-rule"></div>

      <p class="about-role">
        Assistant Professor for Natural Language Processing at
        <a href="https://www.uni-leipzig.de/personenprofil/mitarbeiter/jun-prof-dr-leonie-weissweiler" target="_blank" rel="noopener">Leipzig University</a>
      </p>
      <p class="about-role about-role-next">
        Head of <a href="https://lionlabnlp.github.io/" target="_blank" rel="noopener">LION Lab</a>
      </p>

      <a class="about-lablogo" href="https://lionlabnlp.github.io/" target="_blank" rel="noopener">
        <img src="{{ '/assets/img/logos/lionlab-full-colour.svg' | relative_url }}" alt="LION Lab">
      </a>
    </div>

    <div class="about-hero-right">
      <div class="about-photo-wrap">
        <img class="about-photo"
             src="{{ '/assets/img/profile.jpg' | relative_url }}"
             alt="Leonie Weissweiler">
      </div>

      <div class="about-social">
        <a href="mailto:leonie.weissweiler@uni-leipzig.de">
          <img src="{{ '/assets/img/logos/email.png' | relative_url }}" alt="">
          Email
        </a>
        <a href="https://scholar.google.com/citations?user=o4fK4n4AAAAJ&hl=en" target="_blank" rel="noopener">
          <img src="{{ '/assets/img/logos/scholar.png' | relative_url }}" alt="">
          Google Scholar
        </a>
        <!-- Order is chosen so the six wrap 3 + 3 rather than 2 + 3 + 1:
             the short "X" closes the first line after the long "Google Scholar". -->
        <a href="https://x.com/LAWeissweiler" target="_blank" rel="noopener">
          <img src="{{ '/assets/img/logos/twitter.svg' | relative_url }}" alt="">
          X
        </a>
        <a href="https://github.com/LeonieWeissweiler" target="_blank" rel="noopener">
          <img src="{{ '/assets/img/logos/github.svg' | relative_url }}" alt="">
          GitHub
        </a>
        <a href="https://bsky.app/profile/weissweiler.bsky.social" target="_blank" rel="noopener">
          <img src="{{ '/assets/img/logos/bluesky.svg' | relative_url }}" alt="">
          Bluesky
        </a>
        <a href="https://www.linkedin.com/in/leonie-wei%C3%9Fweiler-16b080417/" target="_blank" rel="noopener">
          <img src="{{ '/assets/img/logos/linkedin.png' | relative_url }}" alt="">
          LinkedIn
        </a>
      </div>
    </div>
  </div>

  <!-- Bio -->
  <div class="lion-prose">
    <p>
      I am an assistant professor of Natural Language Processing at
      <a href="https://www.uni-leipzig.de/en" target="_blank" rel="noopener">Leipzig University</a>,
      head of the <a href="https://lionlabnlp.github.io/" target="_blank" rel="noopener">LION (Linguistically-Oriented NLP) Lab</a>,
      and a PI of <a href="https://scads.ai/" target="_blank" rel="noopener">ScaDS.AI</a>.
      I'm also a liaison professor (Vertrauensdozentin) for the
      <a href="https://www.studienstiftung.de/en/" target="_blank" rel="noopener">German Academic Scholarship Foundation</a>
      (Studienstiftung des deutschen Volkes).
    </p>
    <p>
      Before moving to Leipzig, I was a postdoc at
      <a href="https://www.uu.se/en/department/linguistics-and-philology/research/computational-linguistics" target="_blank" rel="noopener">Uppsala University Computational Linguistics</a>,
      working with <a href="https://jnivre.github.io/" target="_blank" rel="noopener">Joakim Nivre</a>
      and funded by the
      <a href="https://www.dfg.de/en/research-funding/funding-opportunities/programmes/individual/walter-benjamin" target="_blank" rel="noopener">Walter Benjamin Fellowship</a>
      of the <a href="https://www.dfg.de/en" target="_blank" rel="noopener">German Research Foundation (DFG)</a>.
      Before that, I was a postdoc at
      <a href="https://liberalarts.utexas.edu/linguistics/" target="_blank" rel="noopener">UT Austin Linguistics</a>,
      working with <a href="https://mahowak.github.io/" target="_blank" rel="noopener">Kyle Mahowald</a>,
      funded by the DFG and the
      <a href="https://www2.daad.de/ausland/studieren/stipendium/de/70-stipendien-finden-und-bewerben/?detail=57243862" target="_blank" rel="noopener">German Academic Exchange Service (DAAD)</a>.
    </p>
    <p>
      I completed my PhD in 2024 at the
      <a href="https://www.cis.uni-muenchen.de" target="_blank" rel="noopener">Center for Information and Language Processing</a>
      at <a href="https://www.en.uni-muenchen.de/index.html" target="_blank" rel="noopener">LMU Munich</a>,
      where my thesis was about <i>Computational Approaches to Construction Grammar and Morphology</i>.
      My supervisor was <a href="https://schuetze.cis.lmu.de/" target="_blank" rel="noopener">Hinrich Schütze</a>.
    </p>
    <p>
      Previously, I completed my B.Sc. and M.Sc. degrees in Computational Linguistics and Computer
      Science at LMU, with scholarships from the
      <a href="https://www.studienstiftung.de/en/" target="_blank" rel="noopener">German Academic Scholarship Foundation</a>
      and the
      <a href="https://www.elitenetzwerk.bayern.de/en/home/funding-programs/max-weber-program" target="_blank" rel="noopener">Max Weber Program</a>.
      My M.Sc. thesis, supervised by Hinrich Schütze, was on the application of Complementary Learning
      Systems Theory to NLP. I spent the final year of my bachelor's degree as a visiting student at
      <a href="https://www.homerton.cam.ac.uk/" target="_blank" rel="noopener">Homerton College</a>,
      <a href="https://www.cam.ac.uk/" target="_blank" rel="noopener">University of Cambridge</a>,
      where I wrote my B.Sc. thesis on Character-Level RNNs under the supervision of
      <a href="https://sites.google.com/site/annakorhonen/" target="_blank" rel="noopener">Anna Korhonen</a>.
    </p>
  </div>

  <hr class="lion-divider">

  <!-- Research interests -->
  <p class="lion-section-label">Research Interests</p>

  <ul class="lion-list">
    <li>Construction Grammar and NLP</li>
    <li>Emergent structure in language</li>
    <li>Interactions between Cognitive Linguistics and NLP</li>
    <li>Computational typology and morphosyntax</li>
    <li>Evaluation and interpretability for low-resource languages</li>
  </ul>

  {% include work-with-me.html %}

  <!-- News preview -->
  <p class="lion-section-label">Latest News</p>

  {% for item in site.data.news limit:5 %}
  <div class="news-item">
    {% if item.date and item.date != "" %}<p class="news-item-date">{{ item.date }}</p>{% endif %}
    <p class="news-item-body">{{ item.body }}</p>
  </div>
  {% endfor %}

  <a href="/news" class="see-all-link">All news →</a>

</div>
