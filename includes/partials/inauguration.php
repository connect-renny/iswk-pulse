    <!-- ═══ Inauguration curtain ═══ -->
    <!-- Launch ceremony over the home page: shown once per browser session
         (head.php decides before first paint), animated by the
         "Inauguration curtain" block in main.js. Add ?launch=1 to replay. -->
    <div
      class="inauguration"
      role="dialog"
      aria-modal="true"
      aria-labelledby="inaugurationTitle"
    >
      <div class="inauguration-stage"></div>
      <div class="curtain-panel curtain-left"></div>
      <div class="curtain-panel curtain-right"></div>
      <div class="inauguration-warmth" aria-hidden="true"></div>
      <div class="inauguration-beam" aria-hidden="true">
        <span class="beam-cone"></span>
        <span class="beam-dust"></span>
      </div>
      <div class="curtain-valance" aria-hidden="true"></div>

      <div class="inauguration-content">
        <span class="inauguration-logo">
          <img src="assets/images/pulse-logo.png" alt="<?= SITE_NAME ?>" />
        </span>
        <p class="inauguration-eyebrow">Indian School Al Wadi Al Kabir</p>
        <h2 class="inauguration-title" id="inaugurationTitle">
          Welcome to <?= SITE_NAME ?>
        </h2>
        <button type="button" class="inauguration-enter">
          <span>Enter Site</span>
        </button>
      </div>

      <canvas class="inauguration-confetti" aria-hidden="true"></canvas>
    </div>

