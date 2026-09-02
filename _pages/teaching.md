---
layout: default
title: Teaching
description: Courses, thesis supervision, and teaching history of Leonie Weissweiler.
permalink: /teaching/
---

{% include page-styles.html %}

<style>
  .course-entry {
    padding: 1.75rem 0;
    border-bottom: 1px solid var(--lion-border);
  }

  .course-entry:first-of-type { border-top: 1px solid var(--lion-border); }

  .course-name {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 1.1rem;
    font-weight: 400;
    color: var(--lion-ink);
    margin: 0 0 0.3rem;
  }

  .course-meta {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.75rem;
    color: var(--lion-faint);
    letter-spacing: 0.04em;
    margin: 0 0 0.75rem;
  }

  .course-desc {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.88rem;
    color: var(--lion-body);
    line-height: 1.75;
    margin: 0;
  }

  /* Completed supervision is a credential, not a call to action — kept as a
     compact plain list so it doesn't compete with the courses above. */
  .thesis-list {
    list-style: none;
    margin: 0; padding: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .thesis-list li {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.88rem;
    color: var(--lion-body);
    line-height: 1.55;
    padding-left: 3.4rem;
    position: relative;
  }

  .thesis-list .thesis-level {
    position: absolute;
    left: 0;
    top: 0.15em;
    font-family: var(--lion-caps-font, Georgia, serif);
    font-size: 0.62rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--lion-muted);
  }

  .thesis-list .thesis-when {
    color: var(--lion-faint);
    font-size: 0.82rem;
    white-space: nowrap;
  }

  .thesis-list a {
    color: var(--lion-dark);
    text-decoration: none;
    border-bottom: 1px solid var(--lion-dark);
    transition: opacity 0.2s;
  }

  .thesis-list a:hover { opacity: 0.7; }

  @media (max-width: 600px) {
    .thesis-list li { padding-left: 0; }
    .thesis-list .thesis-level { position: static; display: block; margin-bottom: 0.1rem; }
  }

  /* Past teaching, grouped by semester */
  .semester-block {
    display: grid;
    grid-template-columns: 140px 1fr;
    gap: 2rem;
    padding: 1.1rem 0;
    border-bottom: 1px solid var(--lion-border);
  }

  .semester-block:first-of-type { border-top: 1px solid var(--lion-border); }

  .semester-label {
    font-family: var(--lion-caps-font, Georgia, serif);
    font-size: 0.75rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--lion-dark);
    padding-top: 0.15rem;
    margin: 0;
  }

  .semester-courses {
    list-style: none;
    margin: 0; padding: 0;
    font-family: 'Lora', Georgia, serif;
    font-size: 0.9rem;
    color: var(--lion-body);
    line-height: 1.7;
  }

  @media (max-width: 600px) {
    .semester-block { grid-template-columns: 1fr; gap: 0.3rem; }
  }
</style>

<div class="lion-page">

  <div class="lion-page-header">
    <h1>Teaching</h1>
    <div class="lion-page-rule"></div>
  </div>

  <p class="lion-section-label">Courses at Leipzig University</p>

  <div class="course-entry">
    <p class="course-name">Natural Language Processing</p>
    <p class="course-meta">Lecture · B.Sc. Digital Humanities, B.Sc. Computer Science · Summer Semester</p>
    <p class="course-desc">
      This course introduces students to the field of Natural Language Processing. We start with
      classic NLP tasks, then cover prerequisites to language models such as preprocessing and
      tokenisation. We move on to transformers and large language models, and finally cover topics
      from computational linguistics and their application to LLMs.
    </p>
  </div>

  <div class="course-entry">
    <p class="course-name">Foundations of Machine Learning</p>
    <p class="course-meta">Lecture · B.Sc. Digital Humanities, B.Sc. Computer Science · Winter Semester</p>
    <p class="course-desc">
      For a given task and measure of success, a computer program learns when its performance
      improves with experience. This course introduces machine learning as a guided search through
      a space of potential hypotheses. Students gain a broad overview of learning paradigms —
      including linear regression, decision trees, support vector machines, Bayesian learning,
      and neural networks — and understand the mathematical foundations that determine
      discrimination power and learning complexity.
    </p>
  </div>

  <div class="course-entry">
    <p class="course-name">Current Topics in Natural Language Processing</p>
    <p class="course-meta">Seminar · M.Sc. Digital Humanities, M.Sc. Computer Science, M.Sc. Data Science · Irregular</p>
    <p class="course-desc">
      This seminar covers a different topic from current NLP research each time it is offered.
      Students each present a paper, and at the end of the semester write up a project proposal
      for a new research project building on the current state of the topic.
      The most recent edition focused on <em>Massively Multilingual Language Models</em>.
    </p>
  </div>

  <hr class="lion-divider">

  <p class="lion-section-label">Completed Thesis Supervision</p>

  <ul class="thesis-list">
    <li>
      <span class="thesis-level">M.Sc.</span>
      Language Models and Construction Grammar
      <span class="thesis-when">· 09/2023 – 02/2024</span>
    </li>
    <li>
      <span class="thesis-level">M.Sc.</span>
      Introducing Syntactic Inductive Biases in Language Model Pre-Training
      <span class="thesis-when">· 09/2022 – 01/2023</span>
    </li>
    <li>
      <span class="thesis-level">M.Sc.</span>
      Language Model Compression with Teaching Assistants
      <span class="thesis-when">· 01–10/2022</span> ·
      <a href="https://xinpeng-wang.github.io/" target="_blank" rel="noopener">Xinpeng Wang</a>,
      now at <a href="https://mainlp.github.io/" target="_blank" rel="noopener">MaiNLP</a>
    </li>
    <li>
      <span class="thesis-level">B.Sc.</span>
      Creating a Multilingual Gold Standard for Case Marker Extraction
      <span class="thesis-when">· 03–06/2022</span>
    </li>
    <li>
      <span class="thesis-level">B.Sc.</span>
      Unsupervised Induction of Construction Grammars
      <span class="thesis-when">· 03–06/2022</span>
    </li>
    <li>
      <span class="thesis-level">M.Sc.</span>
      Investigating Emergent Linguistic Structure in BERT using Attention Patterns
      <span class="thesis-when">· 03–07/2021</span>
    </li>
  </ul>

  <hr class="lion-divider">

  <p class="lion-section-label">Previous Teaching at LMU Munich</p>

  <div class="semester-block">
    <p class="semester-label">WS 2023/24</p>
    <ul class="semester-courses">
      <li>Übung zu Profilierungsmodul II</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">SS 2023</p>
    <ul class="semester-courses">
      <li>Kolloquium Computerlinguistisches Arbeiten</li>
      <li>Blockseminar Evaluation of Large Language Models</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">WS 2022/23</p>
    <ul class="semester-courses">
      <li>Übung zu Profilierungsmodul II</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">SS 2022</p>
    <ul class="semester-courses">
      <li>Kolloquium Computerlinguistisches Arbeiten</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">WS 2021/22</p>
    <ul class="semester-courses">
      <li>Übung zu Vertiefung der Grundlagen der Computerlinguistik</li>
      <li>Übung zu Profilierungsmodul II</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">SS 2021</p>
    <ul class="semester-courses">
      <li>Kolloquium Computerlinguistisches Arbeiten</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">WS 2020/21</p>
    <ul class="semester-courses">
      <li>Übung zu Vertiefung der Grundlagen der Computerlinguistik</li>
      <li>Übung zu Profilierungsmodul II</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">SS 2017</p>
    <ul class="semester-courses">
      <li>Kolloquium Computerlinguistisches Arbeiten</li>
      <li>Übung zu Mathematische Grundlagen der Computerlinguistik</li>
    </ul>
  </div>

  <div class="semester-block">
    <p class="semester-label">WS 2016/17</p>
    <ul class="semester-courses">
      <li>Übung zur Einführung in die Programmierung</li>
    </ul>
  </div>

</div>
