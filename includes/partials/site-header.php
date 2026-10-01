    <!-- ═══ Header ═══ -->
    <header class="header">
      <div class="navbar-main">
        <div class="header-inner">
          <!-- Brand badge -->
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/pulse-logo.png" alt="<?= SITE_NAME ?>" />
          </a>

<?php require INCLUDES_PATH . '/partials/navigation.php'; ?>

          <!-- Actions -->
          <div class="header-actions">
            <button
              type="button"
              class="btn-circle btn-circle-navy search-toggle"
              aria-label="Search"
              aria-controls="searchPanel"
              aria-expanded="false"
            >
              <i class="bi bi-search" aria-hidden="true"></i>
            </button>
            <a
              class="btn-circle btn-circle-gold"
              href="index.php"
              aria-label="Home"
            >
              <i class="bi bi-house-door-fill" aria-hidden="true"></i>
            </a>
            <button
              type="button"
              class="navbar-toggler"
              aria-label="Toggle navigation"
              aria-controls="primaryNav"
              aria-expanded="false"
            >
              <span></span><span></span><span></span>
            </button>
          </div>
        </div>

<?php require INCLUDES_PATH . '/partials/search.php'; ?>
      </div>
    </header>

    <!-- ═══ Mobile nav backdrop ═══ -->
    <div class="nav-backdrop" hidden></div>

