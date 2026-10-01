<?php
require __DIR__ . '/includes/bootstrap.php';

$page = [
    'title'       => 'Enrichment & Resources | PULSE',
    'description' => 'Parent Connect Bulletins — practical guidance for every stage of your child\'s journey, with curated resources for the Foundation, Preparatory, Middle and Senior stages.',
    'nav'         => 'enrichment-resources',
    'sprite'      => 'enrichment-resources',
];

require INCLUDES_PATH . '/header.php';
?>
    <main>
      <!-- ═══ Hero banner ═══
           STAND-IN: reuses the home page banner until the artwork for this
           page is supplied. -->
      <?php component('hero', ['slides' => [
        ['src' => 'assets/images/hero-slider-enrichment-resources.jpg', 'alt' => 'Parents and children together'],
      ]]); ?>

      <!-- ═══ Parent Connect Bulletins ═══ -->
      <section class="bulletins-intro" id="parent-connect-bulletins">
        <div class="page-shell">
          <div class="section-shell">
            <p class="res-eyebrow" data-aos="fade-up">
              <span class="res-eyebrow-mark"></span>
              Enrichment &amp; Resources
            </p>

            <h1 class="page-title" data-aos="fade-up">
              Parent Connect Bulletins
            </h1>

            <p class="bulletins-subtitle" data-aos="fade-up">
              Practical Guidance for Every Stage of Your Child&rsquo;s Journey
            </p>

            <p class="bulletins-lead" data-aos="fade-up">
              Parenting evolves as children grow &mdash; and so does the support
              they need.
            </p>

            <div class="prose" data-aos="fade-up">
              <p>
                At ISWK, we believe that meaningful home&ndash;school
                partnership is strengthened when parents have access to timely,
                relevant and practical guidance. Parent Connect Bulletins brings
                together carefully curated resources from our Parenting
                Calendar, offering parents simple ideas, practical strategies
                and thoughtful guidance to support their child&rsquo;s learning,
                wellbeing, relationships and growing independence.
              </p>
              <p>
                From the early years to the board examination years, each
                resource is designed around the developmental needs and
                priorities of that stage, helping parents understand what
                matters now and how they can support their child at home.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ A resource for every step ═══ -->
      <section class="every-step" id="a-resource-for-every-step">
        <div class="page-shell">
          <div class="section-shell">
            <div class="step-panel">
              <h2 class="step-title" data-aos="fade-up">
                A Resource for Every Step
              </h2>

              <p class="step-text" data-aos="fade-up">
                Whether you are looking for ideas to establish a positive
                routine, support independent learning, navigate adolescence,
                strengthen resilience or help your child manage academic
                pressure, there is a Parent Connect resource for every stage and
                every step.
              </p>

              <ul class="step-flow" data-aos="fade-up">
                <li class="step-item">
                  <span class="step-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-book"></use>
                    </svg>
                  </span>
                  <span class="step-name">Read.</span>
                </li>
                <li class="step-item">
                  <span class="step-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-bulb"></use>
                    </svg>
                  </span>
                  <span class="step-name">Reflect.</span>
                </li>
                <li class="step-item">
                  <span class="step-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-check-circle"></use>
                    </svg>
                  </span>
                  <span class="step-name">Apply.</span>
                </li>
                <li class="step-item">
                  <span class="step-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-handshake"></use>
                    </svg>
                  </span>
                  <span class="step-name">Connect.</span>
                </li>
              </ul>

              <p class="step-closing" data-aos="fade-up">
                Because when parents are informed, empowered and connected,
                children are better supported to
                <strong>learn, grow, flourish and thrive.</strong>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Explore resources by stage ═══ -->
      <section class="stage-resources" id="explore-resources-by-stage">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="section-heading" data-aos="fade-up">
              Explore Resources by Stage
            </h2>
            <p class="section-lead-copy" data-aos="fade-up">
              Each stage has its own set of Parent Connect resources, shaped
              around what matters most at that point in your child&rsquo;s
              journey.
            </p>

            <ul class="stage-cards" data-aos="fade-up">
              <li class="stage-card stage-card-fs">
                <header class="stage-card-head">
                  <span class="stage-card-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-sprout"></use>
                    </svg>
                  </span>
                  <span class="stage-code">FS</span>
                </header>
                <h3 class="stage-card-name">Foundation Stage</h3>
                <p class="stage-card-tagline">Nurturing the Foundations</p>
                <p class="stage-card-text">
                  Resources for parents of our youngest learners, focusing on
                  emotional security, positive routines, language development,
                  school readiness, early literacy, social skills, healthy
                  screen habits, fine-motor development, listening, attention,
                  kindness and early independence.
                </p>
                <footer class="stage-card-foot">
                  <a class="stage-card-link" href="#fs-bulletins">
                    View bulletins
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </a>
                  <button
                    type="button"
                    class="like-btn"
                    data-like-id="stage-fs"
                    aria-pressed="false"
                  >
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-thumb"></use>
                    </svg>
                    <span class="like-count">0</span>
                    <span class="visually-hidden">Like Foundation Stage</span>
                  </button>
                </footer>
              </li>

              <li class="stage-card stage-card-ps">
                <header class="stage-card-head">
                  <span class="stage-card-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-book"></use>
                    </svg>
                  </span>
                  <span class="stage-code">PS</span>
                </header>
                <h3 class="stage-card-name">Preparatory Stage</h3>
                <p class="stage-card-tagline">
                  Building Confident &amp; Independent Learners
                </p>
                <p class="stage-card-text">
                  Practical guidance to help children develop strong learning
                  habits, focus, confidence, problem-solving skills, resilience,
                  responsible technology use, positive peer relationships, time
                  management and increasing independence.
                </p>
                <footer class="stage-card-foot">
                  <a class="stage-card-link" href="#ps-bulletins">
                    View bulletins
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </a>
                  <button
                    type="button"
                    class="like-btn"
                    data-like-id="stage-ps"
                    aria-pressed="false"
                  >
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-thumb"></use>
                    </svg>
                    <span class="like-count">0</span>
                    <span class="visually-hidden">Like Preparatory Stage</span>
                  </button>
                </footer>
              </li>

              <li class="stage-card stage-card-ms">
                <header class="stage-card-head">
                  <span class="stage-card-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-globe"></use>
                    </svg>
                  </span>
                  <span class="stage-code">MS</span>
                </header>
                <h3 class="stage-card-name">Middle Stage</h3>
                <p class="stage-card-tagline">
                  Understanding, Guiding &amp; Empowering
                </p>
                <p class="stage-card-text">
                  Resources to help parents navigate the pre-teen and adolescent
                  years &mdash; from emotional regulation, peer influence and
                  healthy friendships to digital responsibility, self-identity,
                  resilience, boundaries, self-discipline, study planning and
                  future academic readiness.
                </p>
                <footer class="stage-card-foot">
                  <a class="stage-card-link" href="#ms-bulletins">
                    View bulletins
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </a>
                  <button
                    type="button"
                    class="like-btn"
                    data-like-id="stage-ms"
                    aria-pressed="false"
                  >
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-thumb"></use>
                    </svg>
                    <span class="like-count">0</span>
                    <span class="visually-hidden">Like Middle Stage</span>
                  </button>
                </footer>
              </li>

              <li class="stage-card stage-card-ss">
                <header class="stage-card-head">
                  <span class="stage-card-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-rocket"></use>
                    </svg>
                  </span>
                  <span class="stage-code">SS</span>
                </header>
                <h3 class="stage-card-name">Senior Stage</h3>
                <p class="stage-card-tagline">
                  Preparing for Purpose &amp; Future Readiness
                </p>
                <p class="stage-card-text">
                  Guidance for parents supporting adolescents through academic
                  ownership, career awareness, responsible decision-making,
                  resilience, stress management, financial literacy, examination
                  preparation, emotional balance and the transition towards
                  higher education and life beyond school.
                </p>
                <footer class="stage-card-foot">
                  <a class="stage-card-link" href="#ss-bulletins">
                    View bulletins
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                  </a>
                  <button
                    type="button"
                    class="like-btn"
                    data-like-id="stage-ss"
                    aria-pressed="false"
                  >
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-thumb"></use>
                    </svg>
                    <span class="like-count">0</span>
                    <span class="visually-hidden">Like Senior Stage</span>
                  </button>
                </footer>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- ═══ Bulletin library ═══
           The cards are generated by tools/bulletins/build_bulletins.py from
           the client's Parent Connect Bulletins; edit its BULLETINS table and
           re-run it rather than editing the cards by hand. -->
      <section class="bulletin-library" id="bulletin-library">
        <div class="page-shell">
          <div class="section-shell">
            <div class="library-head" data-aos="fade-up">
              <span class="library-badge">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <use href="#i-file-text"></use>
                </svg>
              </span>
              <div>
                <h2 class="section-heading">Bulletin Library</h2>
                <p class="section-lead-copy library-sub">
                  Browse every Parent Connect Bulletin, or filter to the stage
                  your child is in.
                </p>
              </div>
            </div>

            <div
              class="library-filters"
              role="group"
              aria-label="Filter bulletins by stage"
              data-aos="fade-up"
            >
              <button
                type="button"
                class="filter-chip is-active"
                data-filter="all"
                aria-pressed="true"
              >
                All bulletins
              </button>
              <button
                type="button"
                class="filter-chip filter-chip-fs"
                data-filter="fs"
                aria-pressed="false"
              >
                Foundation
              </button>
              <button
                type="button"
                class="filter-chip filter-chip-ps"
                data-filter="ps"
                aria-pressed="false"
              >
                Preparatory
              </button>
              <button
                type="button"
                class="filter-chip filter-chip-ms"
                data-filter="ms"
                aria-pressed="false"
              >
                Middle
              </button>
              <button
                type="button"
                class="filter-chip filter-chip-ss"
                data-filter="ss"
                aria-pressed="false"
              >
                Senior
              </button>
            </div>

            <ul class="bulletin-grid" data-aos="fade-up">
              <!-- bulletins:items:start -->
              <!-- Foundation Stage -->
              <li
                class="bulletin-card bulletin-fs"
                data-stage="fs"
                id="fs-bulletins"
              >
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-08-fs-nursery-happy-school-journey.jpg"
                    alt="Cover of the August 2026 Parent Connect Bulletin for Nursery"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Foundation Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Nursery</span>
                    <time datetime="2026-08">August 2026</time>
                  </p>
                  <h3 class="bulletin-name">Preparing Your Child for a Happy School Journey</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-08-fs-nursery-happy-school-journey.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-08-fs-nursery-happy-school-journey"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-fs" data-stage="fs">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-07-fs-nursery-happy-habits-at-home.jpg"
                    alt="Cover of the July 2026 Parent Connect Bulletin for Nursery"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Foundation Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Nursery</span>
                    <time datetime="2026-07">July 2026</time>
                  </p>
                  <h3 class="bulletin-name">Happy Habits at Home</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-07-fs-nursery-happy-habits-at-home.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-07-fs-nursery-happy-habits-at-home"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-fs" data-stage="fs">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-07-fs-kg-building-positive-routines.jpg"
                    alt="Cover of the July 2026 Parent Connect Bulletin for KG"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Foundation Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>KG</span>
                    <time datetime="2026-07">July 2026</time>
                  </p>
                  <h3 class="bulletin-name">Building Positive Routines and Learning Habits</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-07-fs-kg-building-positive-routines.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-07-fs-kg-building-positive-routines"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-fs" data-stage="fs">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-07-fs-classes-1-2-healthy-digital-habits.jpg"
                    alt="Cover of the July 2026 Parent Connect Bulletin for Classes 1 &amp; 2"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Foundation Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 1 &amp; 2</span>
                    <time datetime="2026-07">July 2026</time>
                  </p>
                  <h3 class="bulletin-name">Building Healthy Digital Habits and Focus</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-07-fs-classes-1-2-healthy-digital-habits.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-07-fs-classes-1-2-healthy-digital-habits"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-fs" data-stage="fs">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-04-fs-nursery-language-through-play.jpg"
                    alt="Cover of the April 2026 Parent Connect Bulletin for Nursery"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Foundation Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Nursery</span>
                    <time datetime="2026-04">April 2026</time>
                  </p>
                  <h3 class="bulletin-name">Enhancing Language Skills Through Play</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-04-fs-nursery-language-through-play.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-04-fs-nursery-language-through-play"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <!-- Preparatory Stage -->
              <li
                class="bulletin-card bulletin-ps"
                data-stage="ps"
                id="ps-bulletins"
              >
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-08-ps-classes-3-5-solving-problems-independently.jpg"
                    alt="Cover of the August 2026 Parent Connect Bulletin for Classes 3 – 5"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Preparatory Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 3 – 5</span>
                    <time datetime="2026-08">August 2026</time>
                  </p>
                  <h3 class="bulletin-name">Build Confidence in Solving Problems Independently</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-08-ps-classes-3-5-solving-problems-independently.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-08-ps-classes-3-5-solving-problems-independently"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-ps" data-stage="ps">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-07-ps-classes-3-5-disciplined-technology-use.jpg"
                    alt="Cover of the July 2026 Parent Connect Bulletin for Classes 3 – 5"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Preparatory Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 3 – 5</span>
                    <time datetime="2026-07">July 2026</time>
                  </p>
                  <h3 class="bulletin-name">Promoting Disciplined Technology Use and Sustained Attention</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-07-ps-classes-3-5-disciplined-technology-use.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-07-ps-classes-3-5-disciplined-technology-use"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <!-- Middle Stage -->
              <li
                class="bulletin-card bulletin-ms"
                data-stage="ms"
                id="ms-bulletins"
              >
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-08-ms-classes-6-8-healthy-friendships.jpg"
                    alt="Cover of the August 2026 Parent Connect Bulletin for Classes 6 – 8"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Middle Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 6 – 8</span>
                    <time datetime="2026-08">August 2026</time>
                  </p>
                  <h3 class="bulletin-name">Build Healthy Friendships and Make Responsible Choices</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-08-ms-classes-6-8-healthy-friendships.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-08-ms-classes-6-8-healthy-friendships"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-ms" data-stage="ms">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-07-ms-classes-6-8-preteen-behaviour-peer-influence.jpg"
                    alt="Cover of the July 2026 Parent Connect Bulletin for Classes 6 – 8"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Middle Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 6 – 8</span>
                    <time datetime="2026-07">July 2026</time>
                  </p>
                  <h3 class="bulletin-name">Understanding Preteen Behaviour and Peer Influence</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-07-ms-classes-6-8-preteen-behaviour-peer-influence.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-07-ms-classes-6-8-preteen-behaviour-peer-influence"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-ms" data-stage="ms">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-04-ms-classes-6-8-responsible-technology-use.jpg"
                    alt="Cover of the April 2026 Parent Connect Bulletin for Classes 6 – 8"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Middle Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 6 – 8</span>
                    <time datetime="2026-04">April 2026</time>
                  </p>
                  <h3 class="bulletin-name">Promoting Responsible Use of Technology &amp; Safe Online Behaviour</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-04-ms-classes-6-8-responsible-technology-use.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-04-ms-classes-6-8-responsible-technology-use"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <!-- Senior Stage -->
              <li
                class="bulletin-card bulletin-ss"
                data-stage="ss"
                id="ss-bulletins"
              >
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-08-ss-classes-9-12-career-awareness.jpg"
                    alt="Cover of the August 2026 Parent Connect Bulletin for Classes 9 – 12"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Senior Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 9 – 12</span>
                    <time datetime="2026-08">August 2026</time>
                  </p>
                  <h3 class="bulletin-name">Supporting Career Awareness &amp; Decision Making</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-08-ss-classes-9-12-career-awareness.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-08-ss-classes-9-12-career-awareness"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-ss" data-stage="ss">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-07-ss-classes-9-11-balanced-screen-time.jpg"
                    alt="Cover of the July 2026 Parent Connect Bulletin for Classes 9 &amp; 11"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Senior Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 9 &amp; 11</span>
                    <time datetime="2026-07">July 2026</time>
                  </p>
                  <h3 class="bulletin-name">Encourage Healthy, Balanced and Responsible Screen Time Habits</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-07-ss-classes-9-11-balanced-screen-time.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-07-ss-classes-9-11-balanced-screen-time"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-ss" data-stage="ss">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-04-ss-classes-9-11-conceptual-understanding.jpg"
                    alt="Cover of the April 2026 Parent Connect Bulletin for Classes 9 &amp; 11"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Senior Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 9 &amp; 11</span>
                    <time datetime="2026-04">April 2026</time>
                  </p>
                  <h3 class="bulletin-name">Strengthen Conceptual Understanding Rather Than Rote Learning</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-04-ss-classes-9-11-conceptual-understanding.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-04-ss-classes-9-11-conceptual-understanding"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>

              <li class="bulletin-card bulletin-ss" data-stage="ss">
                <figure class="bulletin-media">
                  <img
                    src="assets/bulletins/covers/2026-04-ss-classes-10-12-financial-literacy.jpg"
                    alt="Cover of the April 2026 Parent Connect Bulletin for Classes 10 &amp; 12"
                    width="640"
                    height="480"
                    loading="lazy"
                    decoding="async"
                  />
                  <figcaption class="bulletin-tag">Senior Stage</figcaption>
                </figure>
                <div class="bulletin-body">
                  <p class="bulletin-meta">
                    <span>Classes 10 &amp; 12</span>
                    <time datetime="2026-04">April 2026</time>
                  </p>
                  <h3 class="bulletin-name">Financial Literacy: Building Smart Habits for a Secure Future</h3>
                  <footer class="bulletin-foot">
                    <a
                      class="bulletin-link"
                      href="assets/bulletins/2026-04-ss-classes-10-12-financial-literacy.pdf"
                      target="_blank"
                      rel="noopener"
                    >
                      Read bulletin
                      <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden">(PDF, opens in a new tab)</span>
                    </a>
                    <button
                      type="button"
                      class="like-btn"
                      data-like-id="2026-04-ss-classes-10-12-financial-literacy"
                      aria-pressed="false"
                    >
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-thumb"></use>
                      </svg>
                      <span class="like-count">0</span>
                      <span class="visually-hidden">Like this bulletin</span>
                    </button>
                  </footer>
                </div>
              </li>
              <!-- bulletins:items:end -->
            </ul>

            <p class="library-empty" hidden>
              No bulletins for this stage yet &mdash; please check back soon.
            </p>
          </div>
        </div>
      </section>

      <!-- ═══ Gallery — cross link ═══ -->
      <?php component('crosslink', [
        'class' => 'gallery-crosslink',
        'id'    => 'gallery-link',
        'icon'  => 'i-images',
        'title' => 'Gallery',
        'body'  => 'Moments from Parent Connect Hours, Mother&rsquo;s Day
                  celebrations, the Sultan&rsquo;s Feast and parent engagement
                  sessions across the Foundation, Preparatory, Middle and Senior
                  stages &mdash; the everyday scenes that show what partnership
                  looks like at Indian School Al Wadi Al Kabir.',
        'href'  => 'gallery.php',
        'cta'   => 'View the gallery',
      ]); ?>
    </main>

<?php require INCLUDES_PATH . '/footer.php'; ?>
