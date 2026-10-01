<?php
require __DIR__ . '/includes/bootstrap.php';

$page = [
    'title'       => 'PULSE Live Zone | PULSE',
    'description' => 'PULSE Live Zone — a curated space for parent voice, conversations, polls and timely engagement at Indian School Al Wadi Al Kabir.',
    'nav'         => 'pulse-live-zone',
    'sprite'      => 'pulse-live-zone',
];

require INCLUDES_PATH . '/header.php';
?>
    <main>
      <!-- ═══ Hero banner ═══ -->
      <?php component('hero', ['slides' => [
        ['src' => 'assets/images/hero-slider-live-zone.jpg', 'alt' => 'Parents listening to a podcast, joining an online session and learning with their children and teachers, around a PULSE Live chat emblem'],
      ]]); ?>

      <!-- ═══ Intro ═══ -->
      <section class="live-intro" id="pulse-live-zone">
        <div class="page-shell">
          <div class="section-shell">
            <button type="button" class="listen-btn" data-aos="fade-up">
              <span class="listen-icon">
                <i class="bi bi-volume-up-fill" aria-hidden="true"></i>
              </span>
              Listen
            </button>

            <p class="live-badge" data-aos="fade-up">
              <span class="live-dot" aria-hidden="true"></span>
              Live Zone
            </p>

            <h1 class="page-title" data-aos="fade-up">PULSE Live Zone</h1>

            <p class="live-tagline" data-aos="fade-up">
              Curated Conversations. Meaningful Voices. Shared Understanding.
            </p>

            <ul class="live-verbs" data-aos="fade-up">
              <li>Listen.</li>
              <li>Connect.</li>
              <li>Reflect.</li>
              <li>Respond.</li>
            </ul>

            <div class="prose" data-aos="fade-up">
              <p class="live-lead">
                The journey of education is enriched when schools and families
                remain connected through meaningful conversations.
              </p>
              <p>
                PULSE Live Zone is our dynamic space for parent voice, curated
                conversations and timely engagement &mdash; bringing together
                questions, reflections, perspectives and topics that are
                relevant to our parent community.
              </p>
              <p>
                Through carefully selected themes, polls, questions, responses
                and conversations, this space keeps the home&ndash;school
                partnership current, connected and purposeful.
              </p>
            </div>

            <figure class="live-visual" data-aos="fade-up">
              <img
                src="assets/images/live-zone-visual.jpg"
                alt="Indian School Al Wadi Al Kabir, surrounded by icons for conversation, listening, learning and community"
              />
            </figure>
          </div>
        </div>
      </section>

      <!-- ═══ What's live? ═══ -->
      <section class="whats-live" id="whats-live">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="section-heading" data-aos="fade-up">
              What&rsquo;s Live?
            </h2>
            <p class="section-lead-copy" data-aos="fade-up">
              From time to time, PULSE Live Zone may feature:
            </p>

            <ul class="live-grid" data-aos="fade-up">
              <li class="live-card live-card-feature">
                <span class="live-card-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-megaphone"></use>
                  </svg>
                </span>
                <h3 class="live-card-name">Parent Voice</h3>
                <p>
                  Selected parent perspectives, reflections and experiences that
                  contribute to meaningful community conversations.
                </p>
              </li>

              <li class="live-card">
                <span class="live-card-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-question-chat"></use>
                  </svg>
                </span>
                <h3 class="live-card-name">You Ask. We Respond.</h3>
                <p>
                  Answers to questions and themes identified through parent
                  interactions and engagement.
                </p>
              </li>

              <li class="live-card">
                <span class="live-card-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-poll"></use>
                  </svg>
                </span>
                <h3 class="live-card-name">PULSE Poll</h3>
                <p>
                  Quick, focused polls that invite parents to share their
                  perspectives on relevant aspects of school and learning.
                </p>
              </li>

              <li class="live-card">
                <span class="live-card-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-sprout"></use>
                  </svg>
                </span>
                <h3 class="live-card-name">In Focus</h3>
                <p>
                  A particular topic, stage or aspect of the child&rsquo;s
                  journey explored through a parent-friendly lens.
                </p>
              </li>

              <li class="live-card">
                <span class="live-card-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-star"></use>
                  </svg>
                </span>
                <h3 class="live-card-name">Community Highlights</h3>
                <p>
                  Moments of collaboration, participation and shared achievement
                  from across our ISWK parent community.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- ═══ A space that listens with purpose ═══ -->
      <section class="listens" id="a-space-that-listens">
        <div class="page-shell">
          <div class="section-shell">
            <div class="listens-panel">
              <h2 class="listens-title" data-aos="fade-up">
                A Space That Listens <span>With Purpose</span>
              </h2>

              <p class="listens-text" data-aos="fade-up">
                PULSE Live Zone is thoughtfully moderated and curated by the
                school to ensure that every featured conversation is relevant,
                constructive, respectful and aligned with the needs of our
                students and families.
              </p>

              <p class="listens-emphasis" data-aos="fade-up">
                The purpose is not simply to collect opinions. It is to create
                opportunities for
                <strong>understanding, reflection and meaningful engagement.</strong>
              </p>

              <ul class="flow-steps" data-aos="fade-up">
                <li class="flow-step">
                  <span class="flow-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-speak"></use>
                    </svg>
                  </span>
                  Your Voice
                </li>
                <li class="flow-arrow" aria-hidden="true">
                  <svg viewBox="0 0 48 24">
                    <path
                      d="M2 12h40m0 0l-9-7m9 7l-9 7"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </li>
                <li class="flow-step">
                  <span class="flow-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-ear"></use>
                    </svg>
                  </span>
                  Our Listening
                </li>
                <li class="flow-arrow" aria-hidden="true">
                  <svg viewBox="0 0 48 24">
                    <path
                      d="M2 12h40m0 0l-9-7m9 7l-9 7"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </li>
                <li class="flow-step">
                  <span class="flow-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-community"></use>
                    </svg>
                  </span>
                  Shared Understanding
                </li>
              </ul>

              <p class="hopes-intro" data-aos="fade-up">
                Through this evolving space, we hope to:
              </p>

              <ul class="hopes-list" data-aos="fade-up">
                <li>
                  <span class="hopes-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-ear"></use>
                    </svg>
                  </span>
                  <span>
                    <strong>Listen</strong> to the perspectives of our parent
                    community.
                  </span>
                </li>
                <li>
                  <span class="hopes-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-bulb"></use>
                    </svg>
                  </span>
                  <span>
                    <strong>Understand</strong> emerging questions, interests
                    and needs.
                  </span>
                </li>
                <li>
                  <span class="hopes-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-share"></use>
                    </svg>
                  </span>
                  <span>
                    <strong>Share</strong> relevant information and perspectives.
                  </span>
                </li>
                <li>
                  <span class="hopes-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-link"></use>
                    </svg>
                  </span>
                  <span>
                    <strong>Connect</strong> families with the wider school
                    community.
                  </span>
                </li>
                <li>
                  <span class="hopes-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-shield-heart"></use>
                    </svg>
                  </span>
                  <span>
                    <strong>Strengthen</strong> the partnership between home and
                    school.
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ A living conversation ═══ -->
      <section class="living" id="a-living-conversation">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="section-heading" data-aos="fade-up">
              A Living Conversation
            </h2>
            <p class="section-lead-copy" data-aos="fade-up">
              The content of PULSE Live Zone will evolve throughout the year,
              reflecting the questions, themes, experiences and priorities that
              emerge across our parent community.
            </p>

            <ul class="living-list" data-aos="fade-up">
              <li>
                <span class="living-mark" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <use href="#i-chat"></use>
                  </svg>
                </span>
                Some conversations may invite a quick response.
              </li>
              <li>
                <span class="living-mark" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <use href="#i-bulb"></use>
                  </svg>
                </span>
                Some may offer a new perspective.
              </li>
              <li>
                <span class="living-mark" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <use href="#i-question-chat"></use>
                  </svg>
                </span>
                Some may answer a question many parents are asking.
              </li>
              <li>
                <span class="living-mark" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <use href="#i-sprout"></use>
                  </svg>
                </span>
                Some may simply give us an opportunity to pause and think.
              </li>
            </ul>

            <p class="living-closing" data-aos="fade-up">
              Because meaningful partnership is built
              <strong>one conversation at a time.</strong>
            </p>
          </div>
        </div>
      </section>

      <!-- ═══ Voices from our community (testimonials) ═══
           Real parent compliments from the client's "PHOTOGRAPHS FOR THE
           PARENT PAGE" Drive folder (the FS and PS "Compliments from
           parents" docs, including four handwritten Parent Connect notes,
           transcribed). Long messages are trimmed to excerpts marked with an
           ellipsis. MS and SS sent no compliments yet. -->
      <section class="voices" id="voices-from-our-community">
        <div class="page-shell">
          <div class="section-shell">
            <p class="voices-eyebrow" data-aos="fade-up">
              <span class="voices-eyebrow-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <use href="#i-speak"></use>
                </svg>
              </span>
              Parent Voice
            </p>

            <h2 class="section-heading" data-aos="fade-up">
              Voices from Our Community
            </h2>

            <p class="section-lead-copy" data-aos="fade-up">
              Reflections shared by parents across our stages &mdash; in their
              own words, and published only with their permission.
            </p>

            <div class="voices-slider" data-aos="fade-up">
              <div class="swiper swiper-voices">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          Thank you for encouraging
                          Harshika and preparing her
                          so well. Your patience and
                          hard work helped her shine
                          among 11 competitors. Truly
                          grateful for the positive
                          learning environment you
                          create for all the children.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">MJ</span>
                        <span class="voice-meta">
                          <span class="voice-name">Mohan &amp; Jayapradha</span>
                          <span class="voice-role">Parents, Class I D &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          Thank you for hosting us
                          today during the Connect
                          Hour. We appreciate the
                          opportunity to engage and
                          share our thoughts.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">SP</span>
                        <span class="voice-meta">
                          <span class="voice-name">Sanchit R Poonacha</span>
                          <span class="voice-role">Parent, Class III F &middot; Preparatory Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          It was a wonderful session.
                          This will help to connect
                          the parents and teachers. I
                          am happy that my kid is
                          studying in a wonderful
                          place.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">PC</span>
                        <span class="voice-meta">
                          <span class="voice-name">A Parent</span>
                          <span class="voice-role">Parent Connect, Class II F &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          I would like to express my
                          sincere appreciation for the
                          wonderful Mother&rsquo;s Day
                          celebration&hellip; Such
                          events not only create
                          joyful memories but also
                          help children understand the
                          importance of love, respect,
                          and gratitude towards their
                          mothers.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">NF</span>
                        <span class="voice-meta">
                          <span class="voice-name">Nazia Fatma</span>
                          <span class="voice-role">Shifa&rsquo;s mother, Class II F &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          Today&rsquo;s meeting is
                          helpful to mingle with
                          teachers and parents
                          non-academically. It&rsquo;s
                          always better to share
                          thoughts.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">DP</span>
                        <span class="voice-meta">
                          <span class="voice-name">Dileswari Pradhan</span>
                          <span class="voice-role">Parent, Class V B &middot; Preparatory Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          It&rsquo;s a very
                          interactive session. Feeling
                          good to share my thoughts.
                          Looking forward to the next
                          session. Thank you.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">VK</span>
                        <span class="voice-meta">
                          <span class="voice-name">Mrs. Vrushali Kharbade</span>
                          <span class="voice-role">Parent Connect, Class II F &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          It was an immense pleasure
                          for Garvit, Vishal and
                          myself to be part of the
                          beautiful event&hellip;
                          after all the research done
                          to present Arabic dishes for
                          the event, we have added new
                          items to our home menu.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">YD</span>
                        <span class="voice-meta">
                          <span class="voice-name">Yashica Dixit</span>
                          <span class="voice-role">Parent, Class II J &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          It was a very thoughtful and
                          meaningful initiative by the
                          school.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">TP</span>
                        <span class="voice-meta">
                          <span class="voice-name">Trupti Pawar</span>
                          <span class="voice-role">Parent, Class III H &middot; Preparatory Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          The effort and heart put
                          into the event were evident
                          in every detail&hellip;
                          Programs like these not only
                          create lasting memories but
                          also reinforce the strong
                          bond between the teachers
                          and parents.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">AM</span>
                        <span class="voice-meta">
                          <span class="voice-name">Amrita</span>
                          <span class="voice-role">Parent, Class II D &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          It was a very good and
                          helpful session regarding
                          the kid and school. I felt
                          it very helpful and
                          encouraging. Such
                          conversations should be
                          there on a regular basis.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">SW</span>
                        <span class="voice-meta">
                          <span class="voice-name">Sawansh&rsquo;s Parent</span>
                          <span class="voice-role">Parent Connect, Class II F &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          Thank you all for being so
                          patient and understanding.
                          Your approach and care for
                          Garvit means a lot to us as
                          parents. He is blessed to be
                          under the beautiful
                          team&rsquo;s guidance.
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">YD</span>
                        <span class="voice-meta">
                          <span class="voice-name">Yashica Vishal Dixit</span>
                          <span class="voice-role">Parent, Class II J &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="swiper-slide">
                    <figure class="voice-card">
                      <span class="voice-mark" aria-hidden="true">
                        <i class="bi bi-quote"></i>
                      </span>
                      <blockquote class="voice-quote">
                        <p>
                          Today&rsquo;s session was
                          very interactive and
                          helpful. Thanks for the
                          arrangement and best wishes
                          to all students &amp; the
                          teachers! Thank you
                          ma&rsquo;am for all that you
                          do!
                        </p>
                      </blockquote>
                      <figcaption class="voice-by">
                        <span class="voice-avatar" aria-hidden="true">PC</span>
                        <span class="voice-meta">
                          <span class="voice-name">A Parent</span>
                          <span class="voice-role">Parent Connect, Class II F &middot; Foundation Stage</span>
                        </span>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>

              <div class="voices-controls">
                <button
                  type="button"
                  class="voices-arrow voices-prev"
                  aria-label="Previous testimonials"
                >
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>

                <div class="voices-pagination"></div>

                <button
                  type="button"
                  class="voices-arrow voices-next"
                  aria-label="Next testimonials"
                >
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Share your feedback ═══
           The form is front-end only: no endpoint is wired yet, so the submit
           handler in main.js validates and shows a confirmation. Point its
           `action` at the real endpoint (or a Google Form) before launch. -->
      <section class="feedback" id="share-your-feedback">
        <div class="page-shell">
          <div class="section-shell">
            <div class="feedback-panel">
              <div class="feedback-intro" data-aos="fade-up">
                <span class="feedback-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-pen"></use>
                  </svg>
                </span>

                <h2 class="feedback-title">Share Your Feedback</h2>

                <p class="feedback-text">
                  A question, a reflection, a suggestion or a word of
                  appreciation &mdash; whatever is on your mind, this is where
                  it reaches us.
                </p>

                <ul class="feedback-points">
                  <li>
                    <span class="feedback-tick">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-check"></use>
                      </svg>
                    </span>
                    <span>Every message is read by the PULSE team.</span>
                  </li>
                  <li>
                    <span class="feedback-tick">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-check"></use>
                      </svg>
                    </span>
                    <span>
                      Recurring themes shape
                      <strong>You Ask. We Respond.</strong>
                    </span>
                  </li>
                  <li>
                    <span class="feedback-tick">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-check"></use>
                      </svg>
                    </span>
                    <span>
                      Selected reflections may feature in
                      <strong>Parent Voice.</strong>
                    </span>
                  </li>
                </ul>

                <p class="feedback-privacy">
                  <span class="feedback-privacy-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-lock"></use>
                    </svg>
                  </span>
                  <span>
                    Nothing you write is published without your permission, and
                    you can ask us to withdraw it at any time.
                  </span>
                </p>
              </div>

              <form
                class="feedback-form"
                action="#"
                method="post"
                novalidate
                data-aos="fade-up"
              >
                <fieldset class="fb-topic">
                  <legend class="fb-legend">
                    What would you like to share?
                  </legend>
                  <div class="fb-chips">
                    <label class="fb-chip">
                      <input
                        type="radio"
                        name="topic"
                        value="feedback"
                        checked
                      />
                      <span>Feedback</span>
                    </label>
                    <label class="fb-chip">
                      <input type="radio" name="topic" value="question" />
                      <span>A question</span>
                    </label>
                    <label class="fb-chip">
                      <input type="radio" name="topic" value="suggestion" />
                      <span>A suggestion</span>
                    </label>
                    <label class="fb-chip">
                      <input type="radio" name="topic" value="appreciation" />
                      <span>Appreciation</span>
                    </label>
                  </div>
                </fieldset>

                <div class="fb-row">
                  <p class="fb-field">
                    <label for="fb-name">
                      Name <span class="fb-optional">(optional)</span>
                    </label>
                    <input
                      type="text"
                      id="fb-name"
                      name="name"
                      autocomplete="name"
                      placeholder="Your name"
                    />
                  </p>

                  <p class="fb-field">
                    <label for="fb-email">
                      Email
                      <span class="fb-optional">(optional, for a reply)</span>
                    </label>
                    <input
                      type="email"
                      id="fb-email"
                      name="email"
                      autocomplete="email"
                      placeholder="you@example.com"
                    />
                  </p>
                </div>

                <p class="fb-field">
                  <label for="fb-stage">Your child&rsquo;s stage</label>
                  <select id="fb-stage" name="stage">
                    <option value="">Select a stage</option>
                    <option value="foundation">
                      Foundation Stage (KG 1 &ndash; Grade 2)
                    </option>
                    <option value="preparatory">
                      Preparatory Stage (Grades 3 &ndash; 5)
                    </option>
                    <option value="middle">
                      Middle Stage (Grades 6 &ndash; 8)
                    </option>
                    <option value="secondary">
                      Secondary Stage (Grades 9 &ndash; 10)
                    </option>
                    <option value="senior-secondary">
                      Senior Secondary Stage (Grades 11 &ndash; 12)
                    </option>
                    <option value="multiple">More than one stage</option>
                  </select>
                </p>

                <p class="fb-field">
                  <label for="fb-message">
                    Your message <span class="fb-required">*</span>
                  </label>
                  <textarea
                    id="fb-message"
                    name="message"
                    rows="5"
                    required
                    placeholder="Tell us what is on your pulse&hellip;"
                  ></textarea>
                </p>

                <p class="fb-consent">
                  <input type="checkbox" id="fb-consent" name="consent" />
                  <label for="fb-consent">
                    You may share my words &mdash; with my first name and stage
                    only &mdash; in PULSE Live Zone.
                  </label>
                </p>

                <button type="submit" class="fb-submit">
                  Send to PULSE
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-send"></use>
                  </svg>
                </button>

                <p class="fb-status" role="status" aria-live="polite" hidden></p>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ What's on your pulse? ═══ -->
      <section class="on-your-pulse" id="whats-on-your-pulse">
        <div class="page-shell">
          <div class="section-shell">
            <div class="pulse-panel">
              <span class="pulse-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <use href="#i-pulse"></use>
                </svg>
              </span>

              <h2 class="pulse-title" data-aos="fade-up">
                What&rsquo;s On Your Pulse?
              </h2>

              <p class="pulse-text" data-aos="fade-up">
                Stay connected to the conversations, insights and updates that
                matter to your family and your child&rsquo;s learning journey.
              </p>

              <p class="pulse-note" data-aos="fade-up">
                <span class="pulse-note-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-refresh"></use>
                  </svg>
                </span>
                Check back regularly. New conversations and features will be
                added throughout the year.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Closing signature ═══ -->
      <section class="live-closing" id="live-zone-signature">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="sign-title" data-aos="fade-up">PULSE Live Zone</h2>
            <p class="sign-text" data-aos="fade-up">
              A curated space for parent voice and meaningful engagement.
            </p>
            <p class="sign-verbs" data-aos="fade-up">
              Listen. Connect. Reflect. Respond.
            </p>
            <p class="sign-strap" data-aos="fade-up">
              One Partnership. One Purpose. <strong>One ISWK Family.</strong>
            </p>
          </div>
        </div>
      </section>
    </main>

<?php require INCLUDES_PATH . '/footer.php'; ?>
