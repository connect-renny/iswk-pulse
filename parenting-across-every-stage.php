<?php
require __DIR__ . '/includes/bootstrap.php';

$page = [
    'title'       => 'Parenting Across Every Stage | PULSE',
    'description' => 'Parenting Across Every Stage — Vice Principal messages, stage-wise developmental guidance, the home–school partnership and the ISWK Parenting Calendar for Primary and Senior School.',
    'nav'         => 'parenting-across-every-stage',
    'sprite'      => 'parenting-across-every-stage',
];

require INCLUDES_PATH . '/header.php';
?>
    <main>
      <!-- ═══ Hero banner ═══ -->
      <?php component('hero', ['slides' => [
        ['src' => 'assets/images/hero-slider-parent-every-stage.jpg', 'alt' => 'A father watching his young son build with wooden blocks at home'],
      ]]); ?>

      <!-- ═══ Page intro &amp; stage switch ═══ -->
      <section class="stage-intro" id="parenting-across-every-stage">
        <div class="page-shell">
          <div class="section-shell">
            <h1 class="page-title" data-aos="fade-up">
              Parenting Across Every Stage
            </h1>

            <p class="stage-lead" data-aos="fade-up">
              Children do not grow in a straight line, and neither does
              parenting. What a five-year-old needs is not what a
              fifteen-year-old needs. Choose your child&rsquo;s school stage
              below to find the guidance, classroom practices and parenting
              calendar that belong to that phase of the journey.
            </p>

            <div
              class="stage-switch"
              role="tablist"
              aria-label="Choose a school stage"
              data-aos="fade-up"
            >
              <button
                type="button"
                class="stage-tab is-active"
                id="tab-primary"
                role="tab"
                aria-selected="true"
                aria-controls="panel-primary"
              >
                <span class="stage-tab-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-sprout"></use>
                  </svg>
                </span>
                <span class="stage-tab-text">
                  <span class="stage-tab-name">Primary School</span>
                  <span class="stage-tab-meta">Balvatika &ndash; Class V</span>
                </span>
              </button>
              <button
                type="button"
                class="stage-tab"
                id="tab-senior"
                role="tab"
                aria-selected="false"
                aria-controls="panel-senior"
              >
                <span class="stage-tab-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-rocket"></use>
                  </svg>
                </span>
                <span class="stage-tab-text">
                  <span class="stage-tab-name">Senior School</span>
                  <span class="stage-tab-meta">Classes VI &ndash; XII</span>
                </span>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- ══════════════════════════════════════════════════════════════════
           PRIMARY SCHOOL
           ══════════════════════════════════════════════════════════════════ -->
      <div
        class="stage-panel is-active"
        id="panel-primary"
        role="tabpanel"
        aria-labelledby="tab-primary"
      >
        <!-- ═══ Vice Principal message ═══ -->
        <section class="vp-message" id="primary-vp-message">
          <div class="page-shell">
            <div class="section-shell">
              <p class="stage-eyebrow" data-aos="fade-up">
                <span class="stage-eyebrow-mark"></span>
                Primary School &mdash; Vice Principal&rsquo;s Message
              </p>

              <h2 class="vp-title" data-aos="fade-up">
                Building Strong Foundations
                <span class="text-gold-deep">for Lifelong Learning</span>
              </h2>

              <div class="vp-body">
                <figure class="vp-photo" data-aos="fade-up">
                  <img
                    src="assets/images/vp-primary-ernst-schwan.jpg"
                    alt="Ernst Schwan, Vice Principal, Primary School"
                  />
                  <figcaption class="vp-caption">
                    <strong>Ernst Schwan</strong>
                    <span>Vice Principal &ndash; Primary School</span>
                  </figcaption>
                </figure>

                <div class="vp-letter" data-aos="fade-up">
                  <div class="vp-letter-body" data-lenis-prevent>
                    <span class="vp-quote-mark" aria-hidden="true">
                      <i class="bi bi-quote"></i>
                    </span>
                    <p class="letter-salutation">Dear Parents,</p>
                    <p>
                      The primary years are among the most precious and
                      transformative stages in a child&rsquo;s life &mdash; a
                      time when curiosity is boundless, imagination flourishes,
                      and every question, experience, and discovery becomes a
                      stepping stone towards growth. It is during these
                      formative years that we lay the foundations not only for
                      academic achievement, but also for confidence, resilience,
                      empathy, independence, and a lifelong love for learning.
                    </p>
                    <p>
                      At Indian School Al Wadi Al Kabir, we believe that every
                      child is unique, capable, and filled with immense
                      potential. Our endeavour is to provide a safe, nurturing,
                      inclusive, and stimulating environment where children feel
                      valued and inspired to learn. Through joyful exploration,
                      meaningful play, engaging conversations, hands-on
                      experiences, collaboration, and opportunities to think and
                      create, we seek to transform learning into an experience
                      that children look forward to each day.
                    </p>
                    <p>
                      Education in the primary years extends far beyond
                      textbooks and classrooms. It is about teaching children
                      how to think, not merely what to think; encouraging them
                      to ask questions, make connections, solve problems,
                      express themselves with confidence, and learn from both
                      success and setbacks. Equally important is nurturing
                      kindness, respect, responsibility, perseverance, and
                      compassion &mdash; values that will guide them long after
                      they leave the classroom.
                    </p>
                    <p>
                      At the heart of this journey lies the invaluable
                      partnership between home and school. When parents and
                      educators work together with trust, consistency, and a
                      shared sense of purpose, children receive a powerful
                      message: their learning matters, their efforts are valued,
                      and they are never alone in their journey. A word of
                      encouragement at home, a conversation about the day,
                      appreciation for effort, or the celebration of a small
                      achievement can leave an impact far greater than we
                      sometimes realise.
                    </p>
                    <p>
                      As parents, you are your child&rsquo;s first teachers and
                      lifelong mentors. The values you model, the curiosity you
                      encourage, the routines you establish, and the confidence
                      you place in your child profoundly shape the learner
                      &mdash; and the person &mdash; they become. Let us
                      therefore celebrate progress rather than perfection,
                      encourage questions rather than simply seek answers, and
                      give our children the confidence to try, stumble, learn,
                      and try again.
                    </p>
                    <p>
                      As we continue this enriching journey together, let us
                      remember that the greatest gift we can give our children
                      is not merely knowledge, but the confidence to discover,
                      the courage to dream, the resilience to persevere, and the
                      values to make a positive difference in the world around
                      them.
                    </p>
                    <p>
                      Together, let us build strong foundations today for the
                      confident, compassionate, responsible, and capable
                      individuals of tomorrow.
                    </p>
                  </div>
                  <p class="letter-sign">
                    Warm regards,<br />
                    <strong>Ernst Schwan</strong><br />
                    Vice Principal &ndash; Primary School
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- ═══ Understanding your child at this stage ═══ -->
        <section class="understanding" id="primary-understanding">
          <div class="page-shell">
            <div class="section-shell">
              <h2 class="section-heading" data-aos="fade-up">
                Understanding Your Child at This Stage
              </h2>
              <p class="section-lead-copy" data-aos="fade-up">
                Every stage of childhood brings unique opportunities for growth.
                Understanding your child&rsquo;s developmental needs helps build
                confidence, curiosity, and lifelong learning.
              </p>

              <div class="need-layout" data-aos="fade-up">
                <article class="need-card need-card-foundation">
                  <header class="need-head">
                    <span class="need-badge">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-puzzle"></use>
                      </svg>
                    </span>
                    <h3 class="need-name">Foundation Stage</h3>
                    <p class="need-meta">Balvatika 1 &ndash; Class II</p>
                  </header>
                  <ul class="need-list">
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-shield-heart"></use>
                      </svg>
                      Secure relationships and emotional safety
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-home"></use>
                      </svg>
                      Routines and predictable boundaries
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-chat"></use>
                      </svg>
                      Language-rich interaction
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-play"></use>
                      </svg>
                      Play, movement and exploration
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-hand"></use>
                      </svg>
                      Independence in everyday tasks
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-people-heart"></use>
                      </svg>
                      Positive social behaviours
                    </li>
                  </ul>
                </article>

                <figure class="need-media">
                  <img
                    src="assets/images/stage-parent-child-journey.jpg?v=2"
                    alt="A mother reading with her young daughter, linked by a bridge of learning to two primary students studying together"
                  />
                </figure>

                <article class="need-card need-card-preparatory">
                  <header class="need-head">
                    <span class="need-badge">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-sprout"></use>
                      </svg>
                    </span>
                    <h3 class="need-name">Preparatory Stage</h3>
                    <p class="need-meta">Classes III &ndash; V</p>
                  </header>
                  <ul class="need-list">
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-sprout"></use>
                      </svg>
                      Growing independence
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-book"></use>
                      </svg>
                      Strong foundational literacy and numeracy
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-bulb"></use>
                      </svg>
                      Curiosity and questioning
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-stairs"></use>
                      </svg>
                      Learning-to-learn habits
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-people"></use>
                      </svg>
                      Collaboration and communication
                    </li>
                    <li>
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-speak"></use>
                      </svg>
                      Confidence in expressing ideas and feelings
                    </li>
                  </ul>
                </article>
              </div>
            </div>
          </div>
        </section>

        <!-- ═══ From Home to Classroom ═══ -->
        <section class="partner-table" id="primary-home-to-classroom">
          <div class="page-shell">
            <div class="partner-panel">
              <div class="section-shell">
                <h2 class="partner-heading" data-aos="fade-up">
                  From Home to Classroom
                </h2>
                <p class="partner-tagline" data-aos="fade-up">
                  One Learning Partnership
                </p>

                <div class="partner-rows" data-aos="fade-up">
                  <div class="partner-colhead">
                    <span class="partner-colname">School Supports</span>
                    <span class="partner-colname"
                      >Parents Can Strengthen at Home</span
                    >
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-book"></use>
                        </svg>
                      </span>
                      Foundational learning
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Reading, conversation &amp; practice
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-people-heart"></use>
                        </svg>
                      </span>
                      Social-emotional development
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Listening, empathy &amp; positive reinforcement
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-sprout"></use>
                        </svg>
                      </span>
                      Independence
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Age-appropriate responsibilities
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-chat"></use>
                        </svg>
                      </span>
                      Communication
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Meaningful conversations
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-bulb"></use>
                        </svg>
                      </span>
                      Curiosity
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Questioning and exploration
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-list-check"></use>
                        </svg>
                      </span>
                      Learning habits
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Routines, organization &amp; consistency
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-heartbeat"></use>
                        </svg>
                      </span>
                      Well-being
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Sleep, nutrition, movement &amp; emotional support
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-shield-check"></use>
                        </svg>
                      </span>
                      Digital awareness
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Healthy and supervised digital habits
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- ═══ Integrated Classroom Strategies ═══ -->
        <section class="strategies" id="primary-classroom-strategies">
          <div class="page-shell">
            <div class="section-shell">
              <h2 class="section-heading" data-aos="fade-up">
                Integrated Classroom Strategies
              </h2>
              <p class="section-subheading" data-aos="fade-up">
                Teacher-Led Learning Framework
              </p>
              <p class="section-lead-copy" data-aos="fade-up">
                Teachers play a vital role in creating meaningful learning
                experiences that go beyond academics, nurturing curiosity,
                confidence, positive habits, and essential life skills among
                young learners. Classroom practices are designed to integrate
                social-emotional learning, values, collaboration, creativity,
                and responsible behaviour, helping children develop strong
                foundations for lifelong learning.
              </p>

              <h3 class="goals-title" data-aos="fade-up">
                Key Developmental Goals &amp; Educational Purpose
              </h3>

              <ul class="goals-grid" data-aos="fade-up">
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-user-check"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Self-awareness &amp; Confidence</h4>
                  <p>
                    Helping children understand their strengths, express
                    themselves, and develop a positive sense of identity.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-people-heart"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Social Skills &amp; Empathy</h4>
                  <p>
                    Encouraging teamwork, kindness, respect, and appreciation of
                    diverse perspectives.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-brain"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Emotional Regulation</h4>
                  <p>
                    Supporting learners in recognising and managing emotions
                    effectively.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-list-check"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">
                    Learning Habits &amp; Responsibility
                  </h4>
                  <p>
                    Developing curiosity, independence, organisation, and
                    ownership of learning.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-scale"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Values &amp; Citizenship</h4>
                  <p>
                    Nurturing integrity, respect, compassion, and responsible
                    choices in everyday situations.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-heartbeat"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Health, Wellness &amp; Safety</h4>
                  <p>
                    Promoting healthy habits, mindfulness, and awareness of
                    personal well-being.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-shield-check"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Digital Awareness</h4>
                  <p>
                    Building safe, ethical, and responsible use of technology
                    from an early age.
                  </p>
                </li>
              </ul>

              <!-- Foundation stage -->
              <div class="stage-band" data-aos="fade-up">
                <span class="stage-band-line" aria-hidden="true"></span>
                <span class="stage-band-label stage-band-foundation"
                  >Foundation Stage</span
                >
                <span class="stage-band-line" aria-hidden="true"></span>
              </div>

              <ul class="grade-grid" data-aos="fade-up">
                <li class="grade-card grade-card-foundation">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-puzzle"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Balvatika 1</h4>
                  <p class="grade-tagline">Learning Through Exploration</p>
                  <ul class="grade-list">
                    <li>
                      Habit formation through kindness, sharing, and
                      responsibility-based storytelling
                    </li>
                    <li>
                      Play-based literacy and numeracy exposure through games
                      and music
                    </li>
                    <li>
                      Sensory and movement-based learning experiences for
                      physical development
                    </li>
                    <li>
                      Early safety awareness (personal safety, surroundings,
                      basic boundaries)
                    </li>
                    <li>
                      Emotional vocabulary building through feelings
                      identification activities
                    </li>
                    <li>
                      Hygiene, nutrition, and self-care routines through
                      experiential learning
                    </li>
                  </ul>
                </li>

                <li class="grade-card grade-card-foundation">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-brain"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Balvatika 2</h4>
                  <p class="grade-tagline">
                    Social Understanding &amp; Early Regulation
                  </p>
                  <ul class="grade-list">
                    <li>
                      Social interaction skills through role play, storytelling,
                      and guided peer activities
                    </li>
                    <li>
                      Decision-making through simple choice-based scenarios and
                      guided reflection
                    </li>
                    <li>
                      Healthy habits reinforcement through structured hygiene
                      and nutrition practices
                    </li>
                    <li>
                      Emotional regulation through sharing circles and guided
                      expression activities
                    </li>
                    <li>
                      Early mindfulness exposure through simple breathing and
                      calming strategies
                    </li>
                  </ul>
                </li>

                <li class="grade-card grade-card-foundation">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-sprout"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Balvatika 3</h4>
                  <p class="grade-tagline">
                    Emerging Independence &amp; Self-Awareness
                  </p>
                  <ul class="grade-list">
                    <li>
                      Socio-emotional learning through empathy-based discussions
                      and reflection tasks
                    </li>
                    <li>
                      Introduction to positive discipline through
                      self-regulation and responsibility tasks
                    </li>
                    <li>
                      Gratitude practice and mindfulness routines to build
                      resilience
                    </li>
                    <li>
                      Encouragement of independent thinking and emotional
                      articulation
                    </li>
                    <li>
                      Strengthening readiness for formal schooling through
                      structured routines
                    </li>
                  </ul>
                </li>

                <li class="grade-card grade-card-foundation">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-pencil"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Grades 1 &ndash; 2</h4>
                  <p class="grade-tagline">Foundational Skill Building</p>
                  <ul class="grade-list">
                    <li>
                      Storytelling, reading exposure, and early creative writing
                      experiences
                    </li>
                    <li>
                      Positive behaviour reinforcement through appreciation
                      systems and reflection tools
                    </li>
                    <li>
                      STEM exposure through hands-on activities and learning
                      games
                    </li>
                    <li>
                      Cultural awareness through stories, festivals, and
                      community connections
                    </li>
                    <li>
                      Reflection practices through simple journals and guided
                      sharing
                    </li>
                    <li>
                      Independence skills such as self-management and task
                      responsibility
                    </li>
                  </ul>
                </li>
              </ul>

              <!-- Preparatory stage -->
              <div class="stage-band" data-aos="fade-up">
                <span class="stage-band-line" aria-hidden="true"></span>
                <span class="stage-band-label stage-band-preparatory"
                  >Preparatory Stage</span
                >
                <span class="stage-band-line" aria-hidden="true"></span>
              </div>

              <ul class="grade-grid grade-grid-single" data-aos="fade-up">
                <li class="grade-card grade-card-preparatory">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-star"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Grades 3 &ndash; 5</h4>
                  <p class="grade-tagline">
                    Active Learning &amp; Self-Expression
                  </p>
                  <ul class="grade-list">
                    <li>
                      Public speaking, elocution, and communication skill
                      development
                    </li>
                    <li>
                      Student-led learning activities and collaborative projects
                    </li>
                    <li>
                      Environmental awareness through experiential and
                      nature-based learning
                    </li>
                    <li>
                      Inquiry-based thinking through questioning, reflection,
                      and discussion
                    </li>
                    <li>Creative integration of arts, music, and academics</li>
                    <li>
                      Life skills development including self-care and
                      responsibility at home and school
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- ═══ Parenting Calendar ═══ -->
        <section class="calendar" id="primary-parenting-calendar">
          <div class="page-shell">
            <div class="section-shell">
              <div class="calendar-head" data-aos="fade-up">
                <span class="calendar-badge">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-calendar"></use>
                  </svg>
                </span>
                <div>
                  <h2 class="section-heading calendar-title">
                    Parenting Calendar
                  </h2>
                  <p class="calendar-sub">
                    Structured Parenting Calendar AY 2026&ndash;27 &mdash; a
                    collaborative home&ndash;school partnership for student
                    holistic growth.
                  </p>
                </div>
              </div>

              <figure class="calendar-frame" data-aos="fade-up">
                <div class="calendar-scroll" data-lenis-prevent>
                  <img
                    src="assets/images/parenting-calendar-primary.jpg"
                    alt="Structured Parenting Calendar AY 2026-27 for Nursery, KG, Classes 1-2 and Classes 3-5, listing month-by-month parent engagement activities"
                  />
                </div>
                <figcaption class="calendar-note">
                  <span class="calendar-hint">
                    <i class="bi bi-arrows-move" aria-hidden="true"></i>
                    Scroll or drag the calendar to explore every month.
                  </span>
                  <a
                    class="calendar-open"
                    href="assets/images/parenting-calendar-primary.jpg"
                    target="_blank"
                    rel="noopener"
                  >
                    Open full size
                    <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                  </a>
                </figcaption>
              </figure>
            </div>
          </div>
        </section>
      </div>

      <!-- ══════════════════════════════════════════════════════════════════
           SENIOR SCHOOL
           ══════════════════════════════════════════════════════════════════ -->
      <div
        class="stage-panel stage-panel-senior"
        id="panel-senior"
        role="tabpanel"
        aria-labelledby="tab-senior"
        hidden
      >
        <!-- ═══ Vice Principal message ═══ -->
        <section class="vp-message" id="senior-vp-message">
          <div class="page-shell">
            <div class="section-shell">
              <p class="stage-eyebrow" data-aos="fade-up">
                <span class="stage-eyebrow-mark"></span>
                Senior School &mdash; Vice Principal&rsquo;s Message
              </p>

              <h2 class="vp-title" data-aos="fade-up">
                Growing
                <span class="text-gold-deep">with Purpose</span>
              </h2>

              <div class="vp-body">
                <figure class="vp-photo" data-aos="fade-up">
                  <img
                    src="assets/images/vp-senior-jayaprakash-pillai.jpg"
                    alt="Jayaprakash K Pillai, Vice Principal, Senior School"
                  />
                  <figcaption class="vp-caption">
                    <strong>Jayaprakash K Pillai</strong>
                    <span>Vice Principal &ndash; Senior School</span>
                  </figcaption>
                </figure>

                <div class="vp-letter" data-aos="fade-up">
                  <div class="vp-letter-body" data-lenis-prevent>
                    <span class="vp-quote-mark" aria-hidden="true">
                      <i class="bi bi-quote"></i>
                    </span>
                    <p class="letter-salutation">Dear Parents,</p>
                    <p>
                      The journey through middle and senior school is a
                      significant chapter in every learner&rsquo;s life. It is a
                      time when the foundations laid during the formative years
                      begin to take shape in new and meaningful ways. Our young
                      learners grow in independence, discover their strengths,
                      develop their own perspectives, and gradually begin to
                      make choices that influence their future.
                    </p>
                    <p>
                      At Indian School Al Wadi Al Kabir, we believe that
                      education is not merely about academic achievement; it is
                      about nurturing confident, curious, responsible, and
                      compassionate young people. As our learners progress
                      through the middle and senior years, we strive to provide
                      them with opportunities to think critically, take
                      initiative, demonstrate leadership, embrace challenges,
                      and become increasingly responsible for their own learning
                      and growth.
                    </p>
                    <p>
                      These years also bring new experiences and challenges. As
                      children move towards young adulthood, the partnership
                      between home and school becomes even more meaningful.
                      While the nature of parental support may evolve, the need
                      for connection, encouragement, and understanding remains
                      constant. Open conversations, mutual trust, and a
                      supportive environment help adolescents navigate
                      challenges, develop self-discipline, and make thoughtful
                      and informed choices.
                    </p>
                    <p>
                      At this stage, supporting our young people is not about
                      directing every step, but about listening, guiding,
                      encouraging, and giving them the space to learn through
                      experience.
                    </p>
                    <p>
                      Together, home and school can build upon the strong
                      foundations established during the early years and nurture
                      young people who are resilient, compassionate,
                      responsible, and future-ready. Our shared purpose is to
                      help every learner recognise their potential, pursue their
                      aspirations with confidence and purpose, and step into the
                      wider world while remaining grounded in strong values.
                    </p>
                    <p>
                      As we continue this journey together, let us celebrate not
                      only what our learners achieve, but also who they are
                      becoming.
                    </p>
                  </div>
                  <p class="letter-sign">
                    Warm regards,<br />
                    <strong>Jayaprakash K Pillai</strong><br />
                    Vice Principal &ndash; Senior School
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- ═══ Understanding the adolescent journey ═══ -->
        <section class="understanding" id="senior-understanding">
          <div class="page-shell">
            <div class="section-shell">
              <h2 class="section-heading" data-aos="fade-up">
                Understanding the Adolescent Journey
              </h2>
              <p class="section-lead-copy" data-aos="fade-up">
                Growing up is more than achieving academic success &mdash; it is
                about building character, making responsible choices, and
                discovering purpose. Together, parents and educators can help
                every adolescent navigate this journey with confidence,
                resilience, and hope.
              </p>

              <ul class="journey-grid" data-aos="fade-up">
                <li class="journey-card journey-card-middle">
                  <figure class="journey-media">
                    <img
                      src="assets/images/journey-middle-school.jpg"
                      width="1024"
                      height="768"
                      alt="Illustration of middle school students growing in identity, independence and belonging"
                    />
                  </figure>
                  <div class="journey-body">
                    <span class="journey-badge">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-globe"></use>
                      </svg>
                    </span>
                    <h3 class="journey-name">
                      Middle School <span>Classes VI &ndash; VIII</span>
                    </h3>
                    <p class="journey-tagline">
                      Identity &bull; Independence &bull; Belonging
                    </p>
                    <ul class="journey-list">
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-sprout"></use>
                        </svg>
                        Transition to adolescence
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-users"></use>
                        </svg>
                        Peer relationships
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-brain"></use>
                        </svg>
                        Emotional regulation
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-notebook"></use>
                        </svg>
                        Study habits
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-shield-check"></use>
                        </svg>
                        Digital citizenship
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-user-check"></use>
                        </svg>
                        Self-awareness
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-check-circle"></use>
                        </svg>
                        Responsibility
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="journey-card journey-card-secondary">
                  <figure class="journey-media">
                    <img
                      src="assets/images/journey-secondary-school.jpg"
                      width="1024"
                      height="768"
                      alt="Illustration of secondary school students studying, setting goals and looking after their wellbeing"
                    />
                  </figure>
                  <div class="journey-body">
                    <span class="journey-badge">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-flag"></use>
                      </svg>
                    </span>
                    <h3 class="journey-name">
                      Secondary School <span>Classes IX &ndash; X</span>
                    </h3>
                    <p class="journey-tagline">
                      Purpose &bull; Performance &bull; Resilience
                    </p>
                    <ul class="journey-list">
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-book"></use>
                        </svg>
                        Academic ownership
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-clipboard-check"></use>
                        </svg>
                        Examination readiness
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-lotus"></use>
                        </svg>
                        Stress management
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-target"></use>
                        </svg>
                        Goal setting
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-signpost"></use>
                        </svg>
                        Decision-making
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-heartbeat"></use>
                        </svg>
                        Healthy routines
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-bulb"></use>
                        </svg>
                        Career awareness
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="journey-card journey-card-senior">
                  <figure class="journey-media">
                    <img
                      src="assets/images/journey-senior-secondary-school.jpg"
                      width="1024"
                      height="768"
                      alt="Illustration of senior secondary school students planning their future paths and careers"
                    />
                  </figure>
                  <div class="journey-body">
                    <span class="journey-badge">
                      <svg viewBox="0 0 24 24" aria-hidden="true">
                        <use href="#i-rocket"></use>
                      </svg>
                    </span>
                    <h3 class="journey-name">
                      Senior Secondary School <span>Classes XI &ndash; XII</span>
                    </h3>
                    <p class="journey-tagline">
                      Direction &bull; Decision &bull; Future Readiness
                    </p>
                    <ul class="journey-list">
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-compass"></use>
                        </svg>
                        Subject and career choices
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-mortarboard"></use>
                        </svg>
                        Higher education pathways
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-clock"></use>
                        </svg>
                        Time and workload management
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-lotus"></use>
                        </svg>
                        Examination well-being
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-user-check"></use>
                        </svg>
                        Independent decision-making
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-tools"></use>
                        </svg>
                        Life skills
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-door"></use>
                        </svg>
                        Transition beyond school
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- ═══ The parent's role evolves ═══ -->
        <section class="role-shift" id="senior-role-shift">
          <div class="page-shell">
            <div class="role-panel">
              <div class="section-shell">
                <h2 class="role-title" data-aos="fade-up">
                  The Parent&rsquo;s Role Evolves
                </h2>

                <div class="role-flow" data-aos="fade-up">
                  <div class="role-column role-column-from">
                    <p class="role-label">From</p>
                    <ul class="role-steps">
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-list-check"></use>
                        </svg>
                        Managing
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-search"></use>
                        </svg>
                        Monitoring
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-signpost"></use>
                        </svg>
                        Directing
                      </li>
                    </ul>
                  </div>

                  <span class="role-arrow" aria-hidden="true">
                    <svg viewBox="0 0 64 24">
                      <path
                        d="M2 12h56m0 0l-10-8m10 8l-10 8"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>

                  <div class="role-column role-column-to">
                    <p class="role-label">Towards</p>
                    <ul class="role-steps">
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-ear"></use>
                        </svg>
                        Listening
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-compass"></use>
                        </svg>
                        Guiding
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-star"></use>
                        </svg>
                        Empowering
                      </li>
                    </ul>
                  </div>
                </div>

                <p class="role-note" data-aos="fade-up">
                  As children grow, parenting does not become less important
                  &mdash; <strong>it becomes different.</strong>
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- ═══ Home-School Partnership for the Adolescent Learner ═══ -->
        <section class="partner-table" id="senior-home-school-partnership">
          <div class="page-shell">
            <div class="partner-panel">
              <div class="section-shell">
                <h2 class="partner-heading" data-aos="fade-up">
                  Home&ndash;School Partnership
                </h2>
                <p class="partner-tagline" data-aos="fade-up">
                  For the Adolescent Learner
                </p>

                <div class="partner-rows" data-aos="fade-up">
                  <div class="partner-colhead">
                    <span class="partner-colname"
                      >School &amp; Student Need</span
                    >
                    <span class="partner-colname">Parent Partnership</span>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-book"></use>
                        </svg>
                      </span>
                      Academic progress
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Encourage ownership rather than comparison
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-heartbeat"></use>
                        </svg>
                      </span>
                      Well-being
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Notice changes and maintain open dialogue
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-notebook"></use>
                        </svg>
                      </span>
                      Study habits
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Support routines without micromanaging
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-clipboard-check"></use>
                        </svg>
                      </span>
                      Assessment
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Focus on feedback, progress and next steps
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-shield-check"></use>
                        </svg>
                      </span>
                      Digital citizenship
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Establish responsible boundaries
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-users"></use>
                        </svg>
                      </span>
                      Peer relationships
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Listen without immediate judgement
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-compass"></use>
                        </svg>
                      </span>
                      Career exploration
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Facilitate informed choices
                    </div>
                  </div>

                  <div class="partner-row">
                    <div class="partner-cell partner-cell-school">
                      <span class="partner-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                          <use href="#i-rocket"></use>
                        </svg>
                      </span>
                      Future readiness
                    </div>
                    <span class="partner-link" aria-hidden="true"></span>
                    <div class="partner-cell partner-cell-home">
                      Encourage independence and resilience
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- ═══ Integrated Classroom Strategies ═══ -->
        <section class="strategies" id="senior-classroom-strategies">
          <div class="page-shell">
            <div class="section-shell">
              <h2 class="section-heading" data-aos="fade-up">
                Integrated Classroom Strategies
              </h2>
              <p class="section-subheading" data-aos="fade-up">
                Teacher-Led Learning Framework
              </p>
              <p class="section-lead-copy" data-aos="fade-up">
                Teachers play a critical role in guiding adolescents through a
                period of significant academic, emotional, and personal
                transformation. Classroom experiences are intentionally designed
                to strengthen critical thinking, self-management, leadership
                skills, ethical decision-making, and future readiness while
                supporting learners in navigating challenges with confidence and
                resilience.
              </p>

              <h3 class="goals-title" data-aos="fade-up">
                Key Developmental Goals &amp; Educational Purpose
              </h3>

              <ul class="goals-grid" data-aos="fade-up">
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-user-check"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Identity &amp; Self-Discovery</h4>
                  <p>
                    Helping students understand their aspirations, strengths,
                    values, and evolving sense of purpose.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-brain"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">
                    Emotional Intelligence &amp; Resilience
                  </h4>
                  <p>
                    Developing the ability to manage emotions, cope with
                    challenges, and maintain mental well-being.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-search"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">
                    Critical Thinking &amp; Decision-Making
                  </h4>
                  <p>
                    Encouraging inquiry, reflection, problem-solving, and
                    informed choices.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-flag"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Collaboration &amp; Leadership</h4>
                  <p>
                    Building communication skills, teamwork, accountability, and
                    leadership capacity.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-target"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">
                    Academic Ownership &amp; Growth Mindset
                  </h4>
                  <p>
                    Promoting self-directed learning, goal setting,
                    perseverance, and continuous improvement.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-shield-check"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">
                    Digital Citizenship &amp; Responsible Choices
                  </h4>
                  <p>
                    Preparing students to navigate the digital world safely,
                    ethically, and responsibly.
                  </p>
                </li>
                <li class="goal-item">
                  <span class="goal-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-briefcase"></use>
                    </svg>
                  </span>
                  <h4 class="goal-name">Career &amp; Life Readiness</h4>
                  <p>
                    Supporting students in developing skills, confidence, and
                    awareness for higher education and future pathways.
                  </p>
                </li>
              </ul>

              <!-- Middle stage -->
              <div class="stage-band" data-aos="fade-up">
                <span class="stage-band-line" aria-hidden="true"></span>
                <span class="stage-band-label stage-band-middle"
                  >Middle Stage</span
                >
                <span class="stage-band-line" aria-hidden="true"></span>
              </div>

              <ul class="grade-grid grade-grid-single" data-aos="fade-up">
                <li class="grade-card grade-card-middle">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-globe"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Grades 6 &ndash; 8</h4>
                  <p class="grade-tagline">Personal &amp; Academic Growth</p>
                  <ul class="grade-list">
                    <li>
                      Academic skill enhancement through structured study
                      strategies and revision techniques
                    </li>
                    <li>
                      Digital citizenship, online safety, and responsible
                      technology use
                    </li>
                    <li>
                      Personality development through self-discovery and guided
                      decision-making
                    </li>
                    <li>
                      Leadership building through peer mentoring and
                      collaborative tasks
                    </li>
                    <li>
                      Emotional intelligence development through reflection and
                      guided expression
                    </li>
                    <li>
                      Community engagement and service-oriented learning
                      experiences
                    </li>
                  </ul>
                </li>
              </ul>

              <!-- Secondary stage -->
              <div class="stage-band" data-aos="fade-up">
                <span class="stage-band-line" aria-hidden="true"></span>
                <span class="stage-band-label stage-band-secondary"
                  >Secondary Stage</span
                >
                <span class="stage-band-line" aria-hidden="true"></span>
              </div>

              <ul class="grade-grid grade-grid-single" data-aos="fade-up">
                <li class="grade-card grade-card-secondary">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-rocket"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Grades 9 &ndash; 10</h4>
                  <p class="grade-tagline">
                    Life Preparation &amp; Identity Formation
                  </p>
                  <ul class="grade-list">
                    <li>
                      Career awareness through exposure sessions, projects, and
                      mentorship opportunities
                    </li>
                    <li>
                      Life skills development including decision-making,
                      confidence building, and resilience
                    </li>
                    <li>
                      Student-led initiatives such as debates, podcasts, and
                      research projects
                    </li>
                    <li>Digital responsibility and cyber ethics education</li>
                    <li>
                      Emotional well-being support through structured reflection
                      tools
                    </li>
                    <li>
                      Practical life readiness skills including time management
                      and financial awareness
                    </li>
                  </ul>
                </li>
              </ul>

              <!-- Senior secondary stage -->
              <div class="stage-band" data-aos="fade-up">
                <span class="stage-band-line" aria-hidden="true"></span>
                <span class="stage-band-label stage-band-seniorsec"
                  >Senior Secondary Stage</span
                >
                <span class="stage-band-line" aria-hidden="true"></span>
              </div>

              <ul class="grade-grid grade-grid-single" data-aos="fade-up">
                <li class="grade-card grade-card-seniorsec">
                  <span class="grade-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <use href="#i-mortarboard"></use>
                    </svg>
                  </span>
                  <h4 class="grade-name">Grades 11 &ndash; 12</h4>
                  <p class="grade-tagline">Future Readiness &amp; Well-Being</p>
                  <ul class="grade-list">
                    <li>
                      Career readiness through counseling, internships, and
                      expert interactions
                    </li>
                    <li>
                      Mental health support systems including peer-led
                      well-being initiatives
                    </li>
                    <li>
                      Digital well-being and responsible online engagement
                      practices
                    </li>
                    <li>
                      Substance awareness and preventive education through
                      student-led clubs
                    </li>
                    <li>
                      Emotional resilience, stress management, and life balance
                      strategies
                    </li>
                    <li>
                      Skill development for higher education and real-world
                      transition readiness
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- ═══ Parenting Calendar ═══ -->
        <section class="calendar" id="senior-parenting-calendar">
          <div class="page-shell">
            <div class="section-shell">
              <div class="calendar-head" data-aos="fade-up">
                <span class="calendar-badge">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <use href="#i-calendar"></use>
                  </svg>
                </span>
                <div>
                  <h2 class="section-heading calendar-title">
                    Parenting Calendar
                  </h2>
                  <p class="calendar-sub">
                    Structured Parenting Calendar AY 2026&ndash;27 &mdash; a
                    collaborative home&ndash;school partnership for student
                    holistic growth.
                  </p>
                </div>
              </div>

              <figure class="calendar-frame" data-aos="fade-up">
                <div class="calendar-scroll" data-lenis-prevent>
                  <img
                    src="assets/images/parenting-calendar-senior.jpg"
                    alt="Structured Parenting Calendar AY 2026-27 for Classes 6-8, 9 and 11, and 10 and 12, listing month-by-month parent engagement activities"
                  />
                </div>
                <figcaption class="calendar-note">
                  <span class="calendar-hint">
                    <i class="bi bi-arrows-move" aria-hidden="true"></i>
                    Scroll or drag the calendar to explore every month.
                  </span>
                  <a
                    class="calendar-open"
                    href="assets/images/parenting-calendar-senior.jpg"
                    target="_blank"
                    rel="noopener"
                  >
                    Open full size
                    <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                  </a>
                </figcaption>
              </figure>

              <!-- The "Please Note" line is baked into the calendar artwork; if
                   a clean asset replaces it, restore the note as text here. -->
            </div>
          </div>
        </section>
      </div>

      <!-- ═══ Coping With Changes — cross link ═══ -->
      <?php component('crosslink', [
        'class' => 'stage-crosslink',
        'id'    => 'coping-with-changes-link',
        'icon'  => 'i-handshake',
        'title' => 'Coping With Changes',
        'body'  => 'As education evolves in alignment with NEP 2020 and the
                  National Curriculum Framework, we are committed to ensuring
                  that parents feel informed, supported, and actively involved
                  throughout this journey. See how ISWK supports parents through
                  clear communication, consultation, workshops, Parent Connect
                  Hours and PTMs.',
        'href'  => 'our-parenting-journey.php#coping-with-changes',
        'cta'   => 'Explore support',
      ]); ?>

      <!-- ═══ Our Commitment (closing statement) ═══ -->
      <?php component('commitment-statement'); ?>
    </main>

<?php require INCLUDES_PATH . '/footer.php'; ?>
