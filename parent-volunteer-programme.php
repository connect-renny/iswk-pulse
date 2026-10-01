<?php
require __DIR__ . '/includes/bootstrap.php';

$page = [
    'title'       => 'Parent Volunteer Programme | PULSE',
    'description' => 'Parent Volunteer Engagement Programme — share your time, talent and experience to enrich student learning at Indian School Al Wadi Al Kabir.',
    'nav'         => 'parent-volunteer-programme',
    'sprite'      => 'parent-volunteer-programme',
];

require INCLUDES_PATH . '/header.php';
?>
    <main>
      <!-- ═══ Hero banner ═══ -->
      <?php component('hero', ['slides' => [
        ['src' => 'assets/images/hero-slider-parent-volunteer.jpg', 'alt' => 'Parent volunteers and students at celebrations, exhibitions, mentoring, field trips and talks, around the PULSE emblem'],
      ]]); ?>

      <!-- ═══ Programme introduction ═══ -->
      <section class="vol-intro" id="parent-volunteer-programme">
        <div class="page-shell">
          <div class="section-shell">
            <button type="button" class="listen-btn" data-aos="fade-up">
              <span class="listen-icon">
                <i class="bi bi-volume-up-fill" aria-hidden="true"></i>
              </span>
              Listen
            </button>

            <h1 class="page-title" data-aos="fade-up">
              Parent Volunteer <span>Engagement Programme</span>
            </h1>

            <p class="vol-tagline" data-aos="fade-up">
              Stronger Together, Better Tomorrow
            </p>

            <p class="vol-pledge" data-aos="fade-up">
              <span class="vol-pledge-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <use href="#i-hand-heart"></use>
                </svg>
              </span>
              A shared commitment to enrich learning, inspire growth and build a
              stronger school community.
            </p>

            <div class="vol-block">
              <figure class="vol-poster" data-aos="fade-up">
                <img
                  src="assets/images/volunteer-poster.jpg"
                  alt="Parent Volunteer Engagement Programme poster — Stronger Together, Better Tomorrow"
                />
                <figcaption>
                  <a
                    class="poster-open"
                    href="assets/images/volunteer-poster.jpg"
                    target="_blank"
                    rel="noopener"
                  >
                    View the full poster
                    <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                  </a>
                </figcaption>
              </figure>

              <div class="vol-copy" data-aos="fade-up">
                <p>
                  At our school, we firmly believe that education flourishes
                  when it is nurtured through a strong and meaningful
                  partnership between parents and educators. In alignment with
                  the vision of NEP 2020 and the CBSE framework for holistic,
                  experiential, and competency-based learning, we are pleased to
                  introduce the Parent Volunteer Engagement Programme as a
                  structured initiative to actively involve parents in the
                  learning ecosystem.
                </p>
                <p>
                  This initiative is designed to move beyond traditional parent
                  participation and create purposeful opportunities for parents
                  to contribute their time, expertise, and experiences in ways
                  that directly enrich student learning. We recognize that every
                  parent brings a unique professional background, life
                  experience, and skill set that can add immense value to our
                  school community.
                </p>
                <p>
                  Through this programme, parents can engage in diverse roles
                  such as supporting school events, mentoring students,
                  conducting workshops, contributing to career guidance,
                  assisting in experiential learning projects, and sharing
                  real-world insights across various domains including
                  academics, arts, technology, life skills, and more.
                </p>
                <p>
                  The objective of this initiative is to provide students with
                  authentic exposure to real-world perspectives, enhance their
                  confidence and curiosity, and strengthen their preparedness
                  for future challenges. At the same time, it creates a
                  collaborative platform where parents become active partners in
                  shaping a vibrant and future-ready learning environment.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ How can you contribute? ═══ -->
      <section class="contribute" id="how-can-you-contribute">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="section-heading" data-aos="fade-up">
              How Can You Contribute?
            </h2>
            <p class="section-lead-copy" data-aos="fade-up">
              There are many ways to take part &mdash; choose the one that fits
              your expertise, your interest and the time you can give.
            </p>

            <ul class="contribute-grid" data-aos="fade-up">
              <li class="contribute-item">
                <span class="contribute-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-celebrate"></use>
                  </svg>
                </span>
                <h3 class="contribute-name">
                  School Events &amp; Celebrations
                </h3>
                <p>
                  Be part of events and experiences that bring our school
                  community together.
                </p>
              </li>
              <li class="contribute-item">
                <span class="contribute-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-trophy"></use>
                  </svg>
                </span>
                <h3 class="contribute-name">Competitions &amp; Exhibitions</h3>
                <p>Share your expertise as a judge, mentor or facilitator.</p>
              </li>
              <li class="contribute-item">
                <span class="contribute-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-mentor"></use>
                  </svg>
                </span>
                <h3 class="contribute-name">Career Guidance &amp; Mentoring</h3>
                <p>
                  Inspire senior students through your professional journey,
                  experiences and insights.
                </p>
              </li>
              <li class="contribute-item">
                <span class="contribute-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-presentation"></use>
                  </svg>
                </span>
                <h3 class="contribute-name">Expert Talks &amp; Workshops</h3>
                <p>
                  Share your knowledge and expertise through meaningful student
                  learning experiences.
                </p>
              </li>
              <li class="contribute-item">
                <span class="contribute-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-globe"></use>
                  </svg>
                </span>
                <h3 class="contribute-name">
                  Experiential Learning &amp; Projects
                </h3>
                <p>
                  Help students connect classroom learning with real-world
                  contexts through visits, projects and authentic experiences.
                </p>
              </li>
              <li class="contribute-item">
                <span class="contribute-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-palette"></use>
                  </svg>
                </span>
                <h3 class="contribute-name">Skills &amp; Life Learning</h3>
                <p>
                  Facilitate sessions in areas such as arts, technology,
                  entrepreneurship, life skills and other areas of expertise.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- ═══ Your experience can become a child's inspiration ═══ -->
      <section class="inspiration" id="your-experience">
        <div class="page-shell">
          <div class="section-shell">
            <div class="inspiration-panel">
              <h2 class="inspiration-title" data-aos="fade-up">
                Your Experience Can Become
                <span>a Child&rsquo;s Inspiration</span>
              </h2>

              <ul class="inspiration-list" data-aos="fade-up">
                <li>
                  <span class="inspiration-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-chat"></use>
                    </svg>
                  </span>
                  A conversation with a professional.
                </li>
                <li>
                  <span class="inspiration-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-building"></use>
                    </svg>
                  </span>
                  A glimpse into a workplace.
                </li>
                <li>
                  <span class="inspiration-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-star"></use>
                    </svg>
                  </span>
                  A new skill discovered.
                </li>
                <li>
                  <span class="inspiration-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-question"></use>
                    </svg>
                  </span>
                  A question answered.
                </li>
                <li>
                  <span class="inspiration-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-bulb"></use>
                    </svg>
                  </span>
                  A possibility imagined.
                </li>
              </ul>

              <p class="inspiration-closing" data-aos="fade-up">
                Sometimes, one parent&rsquo;s contribution can
                <strong>open a whole new world for a child.</strong>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Become a parent volunteer ═══ -->
      <section class="volunteer-cta" id="become-a-parent-volunteer">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="section-heading" data-aos="fade-up">
              Become a Parent Volunteer
            </h2>
            <p class="section-lead-copy" data-aos="fade-up">
              We warmly invite you to share your area of expertise, interest or
              willingness to contribute and become an active member of our
              learning community.
            </p>

            <div class="cta-grid" data-aos="fade-up">
              <article class="cta-card cta-card-primary">
                <span class="cta-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-clipboard-check"></use>
                  </svg>
                </span>
                <h3 class="cta-name">Register your interest</h3>
                <p>
                  Fill in the short volunteer form to tell us how you would like
                  to contribute.
                </p>
                <a
                  class="cta-btn"
                  href="https://forms.gle/CfJkULLF7pJ2oJgN9"
                  target="_blank"
                  rel="noopener"
                >
                  Open the volunteer form
                  <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                </a>
              </article>

              <article class="cta-card">
                <span class="cta-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-mail"></use>
                  </svg>
                </span>
                <h3 class="cta-name">For further information</h3>
                <p>
                  Parents who are interested in contributing to the programme or
                  learning more about volunteer opportunities may kindly contact
                  the Head of Learning &amp; Development for further details.
                </p>
                <a
                  class="cta-btn cta-btn-ghost"
                  href="mailto:head.learning@iswkoman.com"
                >
                  head.learning@iswkoman.com
                  <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Closing band ═══ -->
      <section class="vol-closing" id="together">
        <div class="page-shell">
          <div class="section-shell">
            <div class="closing-band">
              <span class="closing-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <use href="#i-community"></use>
                </svg>
              </span>

              <p class="closing-strap" data-aos="fade-up">
                Your time. Your talent. Your experience.
                <strong>Their possibilities.</strong>
              </p>

              <ul class="closing-lines" data-aos="fade-up">
                <li>Together, we bring learning to life.</li>
                <li>Together, we connect classrooms with the real world.</li>
                <li>
                  Together, we empower our children to learn, explore and
                  thrive.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php require INCLUDES_PATH . '/footer.php'; ?>
