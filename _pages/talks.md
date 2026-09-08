---
layout: default
title: Talks
description: Recorded talks by Leonie Weissweiler.
permalink: /talks/
---

{% include page-styles.html %}

<style>
  .talk-entry {
    display: grid;
    grid-template-columns: 340px 1fr;
    gap: 2.5rem;
    align-items: start;
    padding: 2.25rem 0;
    border-bottom: 1px solid var(--lion-border);
  }

  .talk-entry:first-of-type { border-top: 1px solid var(--lion-border); }

  .talk-video {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 9;
  }

  .talk-video iframe {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    border: none;
  }

  .talk-title {
    font-family: var(--lion-heading-font);
    font-size: 1.15rem;
    font-weight: 400;
    color: var(--lion-ink);
    margin: 0 0 0.5rem;
    line-height: 1.35;
  }

  .talk-meta {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.88rem;
    color: var(--lion-muted);
    line-height: 1.7;
    margin: 0;
  }

  .talk-meta a {
    color: var(--lion-dark);
    text-decoration: none;
    border-bottom: 1px solid var(--lion-dark);
    transition: opacity 0.2s;
  }

  .talk-meta a:hover { opacity: 0.7; }

  @media (max-width: 800px) {
    .talk-entry { grid-template-columns: 1fr; gap: 1.25rem; }
  }
</style>

<div class="lion-page">

  <div class="lion-page-header">
    <h1>Talks</h1>
    <div class="lion-page-rule"></div>
  </div>

  <div class="talk-entry">
    <div class="talk-video">
      <iframe src="https://www.youtube.com/embed/BpujjPe_lYU"
              title="Computational Approaches to Construction Grammar"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div>
      <p class="talk-title">Computational Approaches to Construction Grammar</p>
      <p class="talk-meta">Dissertation defence talk at LMU Munich, 3 July 2024.</p>
    </div>
  </div>

  <div class="talk-entry">
    <div class="talk-video">
      <iframe src="https://www.youtube.com/embed/RjExD1DgDKU"
              title="Finding the Limits of LLMs with Constructions"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div>
      <p class="talk-title">Finding the Limits of LLMs with Constructions</p>
      <p class="talk-meta">Given at NYU, Boston University, MIT, UPenn, CMU, and Cornell.</p>
    </div>
  </div>

  <div class="talk-entry">
    <div class="talk-video">
      <iframe src="https://www.youtube.com/embed/3TQCrsXTY0A"
              title="Everything is a Construction: New Goals for Syntactic and Semantic Probing"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div>
      <p class="talk-title">Everything is a Construction: New Goals for Syntactic and Semantic Probing</p>
      <p class="talk-meta">Given at ETH Zürich, University of Vienna, and Bar Ilan University.</p>
    </div>
  </div>

  <div class="talk-entry">
    <div class="talk-video">
      <iframe src="https://www.youtube.com/embed/tBQKswYlQNs"
              title="The Past, Present, and Future of NLP from a Linguistic Perspective"
              allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div>
      <p class="talk-title">The Past, Present, and Future of NLP from a Linguistic Perspective</p>
      <p class="talk-meta">
        Given at the
        <a href="https://scads.ai/education/summer-schools/scads-ai-summer-school-2022/" target="_blank" rel="noopener">8th International ScaDS Summer School 2022</a>
        and <a href="https://munich-nlp.github.io/" target="_blank" rel="noopener">MunichNLP</a>.
        <a href="/files_top/scads.pdf">Slides</a>.
      </p>
    </div>
  </div>

</div>
