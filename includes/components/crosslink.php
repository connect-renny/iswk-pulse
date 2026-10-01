<?php
/**
 * Full-width call-out linking to another page.
 *
 * @var string $class   Section class (e.g. "gallery-crosslink")
 * @var string $id      Section id
 * @var string $icon    Sprite symbol id, without "#" (the page's sprite must define it)
 * @var string $title   Heading (plain text)
 * @var string $body    Paragraph content (trusted HTML)
 * @var string $href    Link target
 * @var string $cta     Button label (plain text)
 */
?>
      <section class="<?= e($class) ?>" id="<?= e($id) ?>">
        <div class="page-shell">
          <div class="section-shell">
            <div class="crosslink-panel" data-aos="fade-up">
              <span class="crosslink-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <use href="#<?= e($icon) ?>"></use>
                </svg>
              </span>
              <div class="crosslink-copy">
                <h2 class="crosslink-title"><?= e($title) ?></h2>
                <p>
                  <?= $body ?>

                </p>
              </div>
              <a class="crosslink-btn" href="<?= e($href) ?>">
                <?= e($cta) ?>

                <i class="bi bi-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
