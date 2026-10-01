<?php
/**
 * Hero banner slider.
 *
 * @var array $slides  List of ['src' => image path, 'alt' => alt text]
 */
?>
      <section class="hero">
        <div class="page-shell">
          <div class="swiper swiper-banner">
            <div class="swiper-wrapper">
<?php foreach ($slides as $slide): ?>
              <div class="swiper-slide">
                <figure class="hero-slide">
                  <img
                    src="<?= e($slide['src']) ?>"
                    alt="<?= e($slide['alt']) ?>"
                  />
                </figure>
              </div>
<?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
