          <!-- Primary navigation -->
          <nav class="navbar-nav" id="primaryNav" aria-label="Primary">
            <ul class="nav-list">
<?php foreach ($NAV_ITEMS as $key => $item):
    $is_active  = $page['nav'] === $key;
    // aria-current only when this link is the page being viewed — a child
    // page (e.g. Gallery) highlights its parent section without claiming it.
    $is_current = $item['href'] === current_script();
?>
              <li class="nav-item">
                <a
                  class="nav-link<?= $is_active ? ' active' : '' ?>"
                  href="<?= e($item['href']) ?>"<?= $is_current ? ' aria-current="page"' : '' ?>

                >
                  <span class="nav-icon">
                    <img src="assets/images/<?= e($item['icon']) ?>" alt="" />
                  </span>
                  <span class="nav-label"><?= $item['label'] ?></span>
                </a>
              </li>
<?php endforeach; ?>
            </ul>
          </nav>
