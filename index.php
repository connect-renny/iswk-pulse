<?php
require __DIR__ . '/includes/bootstrap.php';

$page = [
    'inauguration' => true,
];

require INCLUDES_PATH . '/header.php';
?>
    <main>
      <!-- ═══ Hero banner ═══ -->
      <?php component('hero', ['slides' => [
        ['src' => 'assets/images/hero-slider-01.jpg', 'alt' => 'A family looking towards their school framed by a heart of clouds'],
      ]]); ?>

      <!-- ═══ Together band ═══ -->
      <section class="together">
        <div class="page-shell">
          <div class="together-band">
            <div class="together-inner">
              <div class="together-head" data-aos="fade-up">
                <img
                  class="together-script"
                  src="assets/images/together.png"
                  alt="Together,"
                />
                <h2 class="together-title">
                  <span>We Inspire. We Grow.</span>
                  <span class="text-gold">We Make an Impact.</span>
                </h2>
              </div>

              <span class="together-rule"></span>

              <ul class="together-facts" data-aos="fade-up">
                <li class="fact-item">
                  <span class="fact-icon">
                    <img src="assets/images/facts-icon-01.jpg" alt="" />
                  </span>
                  <span class="fact-label">Nurturing <br />Minds</span>
                </li>
                <li class="fact-item">
                  <span class="fact-icon">
                    <img src="assets/images/facts-icon-02.jpg" alt="" />
                  </span>
                  <span class="fact-label">Building <br />Values</span>
                </li>
                <li class="fact-item">
                  <span class="fact-icon">
                    <img src="assets/images/facts-icon-03.jpg" alt="" />
                  </span>
                  <span class="fact-label">Inspiring <br />Excellence</span>
                </li>
                <li class="fact-item">
                  <span class="fact-icon">
                    <img src="assets/images/facts-icon-04.jpg" alt="" />
                  </span>
                  <span class="fact-label">Shaping <br />Futures</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Home-School Partnership ═══ -->
      <section class="partnership" id="home-school-partnership">
        <div class="page-shell">
          <div class="partnership-inner">
            <h2 class="partnership-title" data-aos="fade-up">
              Strengthening the Home–School Partnership
            </h2>

            <div class="partnership-intro" data-aos="fade-up">
              <p>
                At <strong>Indian School Al Wadi Al Kabir (ISWK)</strong>, we
                believe that every child flourishes when
                <strong
                  >home and school work together with trust, empathy and shared
                  purpose.</strong
                >
              </p>
              <p>
                <strong>PULSE</strong> is our dedicated parent engagement
                platform, thoughtfully aligned with the
                <strong>CBSE Parenting Calendar Framework</strong> and inspired
                by the vision of <strong>NEP 2020</strong>. It brings together
                meaningful opportunities for parents to stay informed, learn,
                connect, participate and access support throughout their
                child&rsquo;s educational journey.
              </p>
              <p>
                From <strong>Balvatika</strong> to <strong>Class XII</strong>,
                PULSE offers age-appropriate guidance and engagement through:
              </p>
            </div>

            <ul class="partnership-grid" data-aos="fade-up">
              <li class="partner-item">
                <span class="partner-icon">
                  <img src="assets/images/partnership-icon-01.png" alt="" />
                </span>
                <h3 class="partner-title">
                  Parent Connect &amp; Skill Builder Sessions
                </h3>
              </li>
              <li class="partner-item">
                <span class="partner-icon">
                  <img src="assets/images/partnership-icon-02.png" alt="" />
                </span>
                <h3 class="partner-title">
                  Parent–Teacher Meetings &amp; Engagement Opportunities
                </h3>
              </li>
              <li class="partner-item">
                <span class="partner-icon">
                  <img src="assets/images/partnership-icon-03.png" alt="" />
                </span>
                <h3 class="partner-title">
                  Counselling, Wellbeing &amp; Inclusive Education Support
                </h3>
              </li>
              <li class="partner-item">
                <span class="partner-icon">
                  <img src="assets/images/partnership-icon-04.png" alt="" />
                </span>
                <h3 class="partner-title">
                  Parent Volunteer &amp; Parent–Child Engagement Programmes
                </h3>
              </li>
              <li class="partner-item">
                <span class="partner-icon">
                  <img src="assets/images/partnership-icon-05.png" alt="" />
                </span>
                <h3 class="partner-title">
                  Parenting Resources, Articles, Videos &amp; Podcasts
                </h3>
              </li>
              <li class="partner-item">
                <span class="partner-icon">
                  <img src="assets/images/partnership-icon-06.png" alt="" />
                </span>
                <h3 class="partner-title">
                  Career Guidance, Digital Wellness &amp; Life-Skills Support
                </h3>
              </li>
              <li class="partner-item">
                <span class="partner-icon">
                  <img src="assets/images/partnership-icon-07.png" alt="" />
                </span>
                <h3 class="partner-title">
                  Parent Voice, Feedback &amp; Meaningful Conversations
                </h3>
              </li>
            </ul>

            <p class="partnership-outro" data-aos="fade-up">
              The Parenting Calendar is designed around the evolving
              <strong
                >academic, social, emotional and developmental needs</strong
              >
              of children at every stage, empowering parents to become confident
              partners in their child&rsquo;s growth.
            </p>
          </div>
        </div>
      </section>

      <!-- ═══ Explore. Connect. Learn. Support. Grow. ═══ -->
      <section class="explore" id="explore">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="explore-title" data-aos="fade-up">
              <span class="text-explore">Explore.</span>
              <span class="text-connect">Connect.</span>
              <span class="text-learn">Learn.</span>
              <span class="text-support">Support.</span>
              <span class="text-grow">Grow.</span>
            </h2>

            <div class="explore-cards" data-aos="fade-up">
              <figure class="explore-media">
                <img
                  src="assets/images/explore-connect.jpg"
                  alt="A child launching a paper plane into the sunset"
                />
              </figure>
              <div class="explore-quote">
                <p>
                  Together, we nurture potential.<br />
                  Together, we shape character.<br />
                  Together, we transform lives.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ A message of Vision &amp; Mission ═══ -->
      <section class="message" id="vision-mission">
        <div class="page-shell">
          <div class="section-shell">
            <h2 class="message-title" data-aos="fade-up">
              A message of Vision &amp; Mission
            </h2>

            <div class="message-body">
              <div class="message-letter" data-aos="fade-up">
                <p class="letter-salutation">Dear Parents,</p>
                <p>
                  Every child&rsquo;s journey is shaped not only by what they
                  learn in classrooms, but also by the love, encouragement,
                  values, and support they receive at home. At Indian School Al
                  Wadi Al Kabir, we deeply believe that when parents and
                  educators walk together with trust, understanding, and shared
                  purpose, children flourish with confidence, happiness, and
                  strength.
                </p>
                <p>
                  The ISWK Parenting Calendar 2026–2027 is born from this belief
                  — a heartfelt effort to strengthen the precious partnership
                  between home and school, and to nurture every learner
                  holistically from Nursery to Class XII.
                </p>
                <p>
                  Inspired by the CBSE Parenting Calendar framework and
                  thoughtfully customized for the ISWK community, this initiative
                  goes beyond schedules and activities. It is a commitment to
                  creating meaningful spaces for connection, reflection,
                  collaboration, and shared growth. Through Parent Connect
                  programmes, workshops, counselling initiatives, inclusive
                  education support, and engagement activities, we hope to
                  empower parents as valued partners in every child&rsquo;s
                  learning and life journey.
                </p>
                <p class="letter-highlight">
                  Together, we inspire. Together, we grow. Together, we make an
                  impact.
                </p>
                <p>Best Wishes</p>
                <p class="letter-sign">
                  <strong>D N Rao</strong><br />
                  (Principal)
                </p>
              </div>

              <figure class="message-photo" data-aos="fade-up">
                <img
                  src="assets/images/principle-message.png"
                  alt="D N Rao, Principal of Indian School Al Wadi Al Kabir"
                />
              </figure>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Our Shared Commitment ═══ -->
      <section class="commitment" id="shared-commitment">
        <div class="page-shell">
          <div class="commitment-panel">
            <div class="section-shell">
              <h2 class="commitment-title" data-aos="fade-up">
                Our Shared Commitment
              </h2>

              <div class="commitment-grid">
                <article class="commitment-item" data-aos="fade-up">
                  <figure class="commitment-media">
                    <img
                      src="assets/images/commitment-01.jpg"
                      alt="A mother and father reading with their daughter at home"
                    />
                  </figure>
                  <p>
                    <strong
                      >At ISWK, we believe with unwavering conviction:</strong
                    ><br />
                    When Home and School Partner with Purpose, every child
                    doesn&rsquo;t simply learn&mdash;they belong, flourish,
                    discover, and thrive beyond boundaries.
                  </p>
                </article>

                <article class="commitment-item" data-aos="fade-up">
                  <figure class="commitment-media">
                    <img
                      src="assets/images/commitment-02.jpg"
                      alt="A teacher guiding a student in a classroom"
                    />
                  </figure>
                  <p>
                    Through PULSE, we build a culture of trust, wellbeing,
                    collaboration, and shared responsibility, where families and
                    educators walk together to shape confident, compassionate,
                    resilient, and future-ready individuals.
                  </p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Together, we don't just educate children ═══ -->
      <section class="educate" id="together-educate">
        <div class="page-shell">
          <div class="educate-panel">
            <div class="section-shell">
              <img
                class="educate-script"
                src="assets/images/together.png"
                alt="Together,"
                data-aos="fade-up"
              />
              <h2 class="educate-title" data-aos="fade-up">
                We don&rsquo;t just educate children&hellip;
              </h2>

              <ul class="educate-grid" data-aos="fade-up">
                <li class="educate-item">
                  <span class="educate-icon">
                    <img src="assets/images/educate-icon-01.png" alt="" />
                  </span>
                  <h3 class="educate-label">We shape <br />futures</h3>
                </li>
                <li class="educate-item">
                  <span class="educate-icon">
                    <img src="assets/images/educate-icon-02.png" alt="" />
                  </span>
                  <h3 class="educate-label">We strengthen <br />families</h3>
                </li>
                <li class="educate-item">
                  <span class="educate-icon">
                    <img src="assets/images/educate-icon-03.png" alt="" />
                  </span>
                  <h3 class="educate-label">
                    We build a community <br />where every child <br />belongs
                  </h3>
                </li>
              </ul>

              <span class="educate-ornament" aria-hidden="true">
                <img src="assets/images/educate-shape.png" alt="" />
              </span>
            </div>
          </div>

          <figure class="educate-visual" data-aos="fade-up">
            <img
              src="assets/images/educate-banner.jpg"
              alt="Indian School Al Wadi Al Kabir lit up at dusk"
            />
          </figure>
        </div>
      </section>
    </main>

<?php require INCLUDES_PATH . '/footer.php'; ?>
