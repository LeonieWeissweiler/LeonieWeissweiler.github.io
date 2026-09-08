---
layout: default
title: Publications
description: Selected publications by Leonie Weissweiler.
permalink: /publications/
---

{% include page-styles.html %}

<style>
  .pub-entry {
    display: grid;
    grid-template-columns: 60px 1fr;
    gap: 1.5rem;
    padding: 1.75rem 0;
    border-bottom: 1px solid var(--lion-border);
  }

  .pub-entry:first-of-type { border-top: 1px solid var(--lion-border); }

  .pub-year {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.75rem;
    letter-spacing: 0.1em;
    color: var(--lion-dark);
    padding-top: 0.2rem;
    text-align: right;
    margin: 0;
  }

  .pub-title {
    font-family: var(--lion-heading-font);
    font-size: 1.05rem;
    font-weight: 400;
    color: var(--lion-ink);
    margin: 0 0 0.3rem;
    line-height: 1.35;
  }

  /* Linked titles keep the heading's colour and pick up an accent underline on
     hover — without this they render as default blue underlined links. */
  .pub-title a {
    color: inherit;
    text-decoration: none;
    border-bottom: 1px solid transparent;
    transition: color 0.2s, border-color 0.2s;
  }

  .pub-title a:hover {
    color: var(--lion-dark);
    border-bottom-color: var(--lion-dark);
  }

  .pub-authors {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.85rem;
    color: var(--lion-muted);
    margin: 0 0 0.2rem;
  }

  .pub-authors strong {
    color: var(--lion-body);
    font-weight: 600;
  }

  .pub-venue {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.82rem;
    color: var(--lion-faint);
    margin: 0;
  }

  .pub-venue em {
    font-style: normal;
    color: var(--lion-dark);
  }

  .pub-links {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 1.1rem;
    margin-top: 0.6rem;
  }

  .pub-links a,
  .pub-toggle {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.72rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--lion-dark);
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    text-decoration: none;
    transition: opacity 0.2s;
  }

  .pub-links a:hover,
  .pub-toggle:hover { opacity: 0.7; }

  .pub-abstract {
    font-family: 'Lora', Georgia, serif;
    font-size: 0.83rem;
    color: var(--lion-body);
    line-height: 1.75;
    margin-top: 0.75rem;
    border-left: 2px solid var(--lion-border);
    padding-left: 1rem;
    display: none;
  }

  .pub-abstract.open { display: block; }

  @media (max-width: 600px) {
    .pub-entry { grid-template-columns: 1fr; gap: 0.3rem; }
    .pub-year { text-align: left; }
  }
</style>

<div class="lion-page">

  <div class="lion-page-header">
    <h1>Publications</h1>
    <div class="lion-page-rule"></div>
  </div>

  <p class="lion-section-label">Selected Publications</p>

  <div class="pub-entry">
    <p class="pub-year">2025</p>
    <div>
      <p class="pub-title">MultiBLiMP 1.0: A Massively Multilingual Benchmark of Linguistic Minimal Pairs</p>
      <p class="pub-authors">Jaap Jumelet, <strong>Leonie Weissweiler</strong>, Joakim Nivre, Arianna Bisazza</p>
      <p class="pub-venue"><em>Transactions of the Association for Computational Linguistics (TACL)</em></p>
      <div class="pub-links">
        <a href="https://direct.mit.edu/tacl/article-pdf/doi/10.1162/TACL.a.600/2577913/tacl.a.600.pdf" target="_blank" rel="noopener">PDF</a>
        <button class="pub-toggle" onclick="togglePubAbstract(this)">Abstract ↓</button>
      </div>
      <p class="pub-abstract">
        We introduce MultiBLiMP 1.0, a massively multilingual benchmark of linguistic minimal pairs,
        covering 101 languages and 2 types of subject-verb agreement, containing more than 128,000
        minimal pairs. Our minimal pairs are created using a fully automated pipeline, leveraging the
        large-scale linguistic resources of Universal Dependencies and UniMorph. MultiBLiMP evaluates
        abilities of LLMs at an unprecedented multilingual scale, and highlights the shortcomings of
        the current state-of-the-art in modelling low-resource languages.
      </p>
    </div>
  </div>

  <div class="pub-entry">
    <p class="pub-year">2025</p>
    <div>
      <p class="pub-title">Hybrid Human-LLM Corpus Construction and LLM Evaluation for the Caused-Motion Construction</p>
      <p class="pub-authors"><strong>Leonie Weissweiler</strong>, Abdullatif Köksal, Hinrich Schütze</p>
      <p class="pub-venue"><em>Northern European Journal of Language Technology (NEJLT)</em></p>
      <div class="pub-links">
        <a href="https://nejlt.ep.liu.se/article/view/5256/5192" target="_blank" rel="noopener">PDF</a>
        <button class="pub-toggle" onclick="togglePubAbstract(this)">Abstract ↓</button>
      </div>
      <p class="pub-abstract">
        The caused-motion construction (CMC, "She sneezed the foam off her cappuccino") is one of the
        most well-studied constructions in Construction Grammar (CxG). It is a prime example for
        describing how constructions must carry meaning, as otherwise the fact that "sneeze" in this
        context takes two arguments and causes motion cannot be explained. We form the hypothesis that
        this remains challenging even for state-of-the-art Large Language Models (LLMs), for which we
        devise a test based on substituting the verb with a prototypical motion verb. To be able to
        perform this test at a statistically significant scale, in the absence of adequate CxG corpora,
        we develop a novel pipeline of NLP-assisted collection of linguistically annotated text. We show
        how dependency parsing and LLMs can be used to significantly reduce annotation cost and thus
        enable the annotation of rare phenomena at scale. We then evaluate OpenAI, Gemma3, Llama3, OLMo2,
        Mistral and Aya models for their understanding of the CMC using the newly collected corpus. We
        find that most models struggle with understanding the motion component that the CMC adds to a
        sentence.
      </p>
    </div>
  </div>

  <div class="pub-entry">
    <p class="pub-year">2024</p>
    <div>
      <p class="pub-title">Constructions Are So Difficult That Even Large Language Models Get Them Right for the Wrong Reasons</p>
      <p class="pub-authors">Shijia Zhou, <strong>Leonie Weissweiler</strong>, Taiqi He, Hinrich Schütze, David Mortensen, Lori Levin</p>
      <p class="pub-venue"><em>LREC-COLING 2024</em></p>
      <div class="pub-links">
        <a href="https://aclanthology.org/2024.lrec-main.336v2.pdf" target="_blank" rel="noopener">PDF</a>
        <button class="pub-toggle" onclick="togglePubAbstract(this)">Abstract ↓</button>
      </div>
      <p class="pub-abstract">
        In this paper, we make a contribution that can be understood from two perspectives: from an NLP
        perspective, we introduce a small challenge dataset for NLI with large lexical overlap, which
        minimises the possibility of models discerning entailment solely based on token distinctions, and
        show that GPT-4 and Llama 2 fail it with strong bias. We then create further challenging sub-tasks
        in an effort to explain this failure. From a Computational Linguistics perspective, we identify a
        group of constructions with three classes of adjectives which cannot be distinguished by surface
        features. This enables us to probe for LLM's understanding of these constructions in various ways,
        and we find that they fail in a variety of ways to distinguish between them, suggesting that they
        don't adequately represent their meaning or capture the lexical properties of phrasal heads.
      </p>
    </div>
  </div>

  <div class="pub-entry">
    <p class="pub-year">2023</p>
    <div>
      <p class="pub-title">Counting the Bugs in ChatGPT's Wugs: A Multilingual Investigation into the Morphological Capabilities of a Large Language Model</p>
      <p class="pub-authors"><strong>Leonie Weissweiler</strong>*, Valentin Hofmann*, Anjali Kantharuban, Anna Cai, Ritam Dutt, Amey Hengle, Anubha Kabra, Atharva Kulkarni, Abhishek Vijayakumar, Haofei Yu, Hinrich Schütze, Kemal Oflazer, David Mortensen</p>
      <p class="pub-venue"><em>EMNLP 2023</em></p>
      <div class="pub-links">
        <a href="https://arxiv.org/ftp/arxiv/papers/2310/2310.15113.pdf" target="_blank" rel="noopener">PDF</a>
        <button class="pub-toggle" onclick="togglePubAbstract(this)">Abstract ↓</button>
      </div>
      <p class="pub-abstract">
        Large language models (LLMs) have recently reached an impressive level of linguistic capability,
        prompting comparisons with human language skills. However, there have been relatively few
        systematic inquiries into the linguistic capabilities of the latest generation of LLMs, and those
        studies that do exist (i) ignore the remarkable ability of humans to generalize, (ii) focus only
        on English, and (iii) investigate syntax or semantics and overlook other capabilities that lie at
        the heart of human language, like morphology. Here, we close these gaps by conducting the first
        rigorous analysis of the morphological capabilities of ChatGPT in four typologically varied
        languages (specifically, English, German, Tamil, and Turkish). We apply a version of Berko's
        (1958) wug test to ChatGPT, using novel, uncontaminated datasets for the four examined languages.
        We find that ChatGPT massively underperforms purpose-built systems, particularly in English.
        Overall, our results — through the lens of morphology — cast a new light on the linguistic
        capabilities of ChatGPT, suggesting that claims of human-like language skills are premature and
        misleading.
      </p>
    </div>
  </div>

  <div class="pub-entry">
    <p class="pub-year">2023</p>
    <div>
      <p class="pub-title">Construction Grammar Provides Unique Insight into Neural Language Models</p>
      <p class="pub-authors"><strong>Leonie Weissweiler</strong>, Taiqi He, Naoki Otani, David R. Mortensen, Lori Levin, Hinrich Schütze</p>
      <p class="pub-venue"><em>First International Workshop on Construction Grammars and NLP (CxGs+NLP, GURT/SyntaxFest 2023)</em></p>
      <div class="pub-links">
        <a href="https://aclanthology.org/2023.cxgsnlp-1.10.pdf" target="_blank" rel="noopener">PDF</a>
        <button class="pub-toggle" onclick="togglePubAbstract(this)">Abstract ↓</button>
      </div>
      <p class="pub-abstract">
        Construction Grammar (CxG) has recently been used as the basis for probing studies that have
        investigated the performance of large pretrained language models (PLMs) with respect to the
        structure and meaning of constructions. In this position paper, we make suggestions for the
        continuation and augmentation of this line of research. We look at probing methodology that was
        not designed with CxG in mind, as well as probing methodology that was designed for specific
        constructions. We analyse selected previous work in detail, and provide our view of the most
        important challenges and research questions that this promising new field faces.
      </p>
    </div>
  </div>

  <div class="pub-entry">
    <p class="pub-year">2022</p>
    <div>
      <p class="pub-title">The Better Your Syntax, the Better Your Semantics? Probing Pretrained Language Models for the English Comparative Correlative</p>
      <p class="pub-authors"><strong>Leonie Weissweiler</strong>, Valentin Hofmann, Abdullatif Köksal, Hinrich Schütze</p>
      <p class="pub-venue"><em>EMNLP 2022</em></p>
      <div class="pub-links">
        <a href="https://preview.aclanthology.org/emnlp-22-ingestion/2022.emnlp-main.746.pdf" target="_blank" rel="noopener">PDF</a>
        <a href="https://github.com/LeonieWeissweiler/ComparativeCorrelative" target="_blank" rel="noopener">Code</a>
        <button class="pub-toggle" onclick="togglePubAbstract(this)">Abstract ↓</button>
      </div>
      <p class="pub-abstract">
        Construction Grammar (CxG) is a paradigm from cognitive linguistics emphasising the connection
        between syntax and semantics. Rather than rules that operate on lexical items, it posits
        constructions as the central building blocks of language, i.e., linguistic units of different
        granularity that combine syntax and semantics. As a first step towards assessing the compatibility
        of CxG with the syntactic and semantic knowledge demonstrated by state-of-the-art pretrained
        language models (PLMs), we present an investigation of their capability to classify and understand
        one of the most commonly studied constructions, the English comparative correlative (CC). We
        conduct experiments examining the classification accuracy of a syntactic probe on the one hand and
        the models' behaviour in a semantic application task on the other, with BERT, RoBERTa, and DeBERTa
        as the example PLMs. Our results show that all three investigated PLMs are able to recognise the
        structure of the CC but fail to use its meaning. While human-like performance of PLMs on many NLP
        tasks has been alleged, this indicates that PLMs still suffer from substantial shortcomings in
        central domains of linguistic knowledge.
      </p>
    </div>
  </div>

  <hr class="lion-divider">

  <!-- ── Full list ────────────────────────────────────────────────
       Generated from _data/publications.yml, which is refreshed from
       Google Scholar by bin/update_publications.py. Don't hand-edit
       the data file — edit the Scholar profile instead. -->
  <p class="lion-section-label">All Publications</p>

  <div class="lion-prose" style="margin-bottom: 2.5rem;">
    <p>
      Synced from my
      <a href="https://scholar.google.com/citations?user=o4fK4n4AAAAJ&hl=en" target="_blank" rel="noopener">Google Scholar profile</a>.
    </p>
  </div>

  {% for pub in site.data.publications %}
  <div class="pub-entry">
    <p class="pub-year">{{ pub.year }}</p>
    <div>
      <p class="pub-title">
        {% if pub.url %}<a href="{{ pub.url }}" target="_blank" rel="noopener">{{ pub.title }}</a>{% else %}{{ pub.title }}{% endif %}
      </p>
      <p class="pub-authors">{{ pub.authors | replace: 'Leonie Weissweiler', '<strong>Leonie Weissweiler</strong>' }}</p>
      <p class="pub-venue"><em>{{ pub.venue }}</em></p>
    </div>
  </div>
  {% endfor %}

</div>

<script>
  function togglePubAbstract(btn) {
    const abstract = btn.closest('.pub-links').nextElementSibling;
    abstract.classList.toggle('open');
    btn.textContent = abstract.classList.contains('open') ? 'Hide abstract ↑' : 'Abstract ↓';
  }
</script>
