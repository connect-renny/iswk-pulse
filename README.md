# ISWK PULSE

Static website for **PULSE** — the parent-engagement initiative of Indian School Al Wadi Al Kabir (ISWK), Oman.

Hand-built PHP + SCSS on Bootstrap 5. No framework or database: each page is a plain PHP file that pulls the shared header, navigation, footer and reusable sections from `includes/`, so it runs on any host with PHP 8 (Apache/XAMPP, or PHP's built-in server).

## Pages

| File | Page |
| --- | --- |
| `index.php` | Home — hero slider, Home–School Partnership, Vision & Mission, Our Shared Commitment |
| `our-parenting-journey.php` | Sub page 1 — Our Parenting Journey |
| `parenting-across-every-stage.php` | Sub page 2 — Parenting Across Every Stage (Primary / Senior tab switch) |
| `enrichment-resources.php` | Sub page 3 — Enrichment & Resources, incl. the Parent Connect bulletin library |
| `parent-volunteer-programme.php` | Sub page 4 — Parent Volunteer Programme |
| `pulse-live-zone.php` | Sub page 5 — PULSE Live Zone |
| `gallery.php` | Gallery — filterable photo/video mosaic with a lightbox |

## Layout

```
includes/
  bootstrap.php   loaded first by every page (config + helpers)
  config.php      site constants, CSS/JS cache-bust versions, navigation items
  functions.php   e() escaping, component() renderer
  header.php      common page opening: <head>, preloader, sprite, site header
  footer.php      common page closing: site footer, back-to-top, scripts
  partials/       head, preloader, site-header, navigation, search,
                  site-footer, scripts
  components/     reusable sections: hero, crosslink, commitment-statement,
                  gallery-lightbox
  sprites/        per-page inline SVG icon sprites
assets/
  audio/       Listen-button recordings (MP3)
  bulletins/   Parent Connect bulletin PDFs + cover images
  css/         compiled style.css / style.min.css (+ source maps) and vendor CSS
  fonts/       Poppins (woff/woff2)
  images/      page artwork, icons, and images/gallery/{,thumbs}
  js/          main.js plus vendor bundles (bootstrap, jquery, swiper, aos)
  videos/      gallery videos (MP4) and posters/
scss/          source stylesheets — abstracts, base, breakpoints,
               components, layout, pages, theme + style.scss entry point
tools/
  gallery/build_gallery.py     regenerates the gallery tiles from the photo drop
  bulletins/build_bulletins.py regenerates the bulletin cards from the PDF drop
```

## Build

Styles are the only build step. From the repository root:

```bash
sass scss/style.scss assets/css/style.css     --style=expanded
sass scss/style.scss assets/css/style.min.css --style=compressed
```

Only `@import` deprecation warnings are expected. **Commit the compiled CSS** — the site is served straight from this repo.

## Pages & includes

Every page follows the same shape:

```php
<?php
require __DIR__ . '/includes/bootstrap.php';

$page = [
    'title'       => 'Gallery | PULSE',          // defaults to the home title
    'description' => '…',                        // defaults to the site description
    'nav'         => 'enrichment-resources',     // key in $NAV_ITEMS to highlight
    'preloader'   => false,                      // logo preloader (home only)
    'sprite'      => 'gallery',                  // includes/sprites/gallery.php
];

require INCLUDES_PATH . '/header.php';
?>
    <main>
      <?php component('hero', ['slides' => [
        ['src' => 'assets/images/hero-slider-parent.jpg', 'alt' => '…'],
      ]]); ?>
      …page sections…
    </main>

<?php require INCLUDES_PATH . '/footer.php'; ?>
```

- **Navigation** lives in `$NAV_ITEMS` (`includes/config.php`) — add or rename menu items there once.
- **Components** take their content as props: `component('crosslink', [...])` — see the docblock at the top of each file in `includes/components/` for the props it expects.
- **Icon sprites** stay per page because a few symbol ids (`i-speak`, `i-ear`) draw different icons on different pages. A `crosslink` icon must exist in that page's sprite.
- Bump `CSS_VERSION` / `JS_VERSION` in `config.php` after rebuilding the CSS or editing `main.js`.
- `.htaccess` 301-redirects the old `*.html` URLs to `*.php` and blocks direct requests to `includes/`.

## Preview

Serve the repo from XAMPP (`http://localhost/iswk-pulse/`) or with PHP's built-in server:

```bash
php -S localhost:8787
```

## Content generators

Two Python scripts rewrite marked regions of the HTML in place; re-run them rather than hand-editing the generated markup.

- `tools/gallery/build_gallery.py` — processes the client photo/video drop into web assets and rewrites everything between `<!-- gallery:items:start -->` and `<!-- gallery:items:end -->` in `gallery.php`. Needs Pillow, pillow-heif and imageio-ffmpeg. `--html` skips re-encoding media.
- `tools/bulletins/build_bulletins.py` — processes bulletin PDFs/images into `assets/bulletins/` and rewrites between `<!-- bulletins:items:start -->` and `<!-- bulletins:items:end -->` in `enrichment-resources.php`.

## Conventions

- Brand colours: navy `#052754`, gold `#e8a838`, amber `#eea403`.
- 20px page gutters (`.page-shell`); content shells are `.section-shell` (1320px) or `.partnership-inner` (1290px).
- Header/nav breakpoints are **1849 / 1509 / 1279**; content breakpoints are 1599 / 1399 / 1199. Keep `_header.scss` and `_navigation.scss` in step.
- Poppins is the only bundled face.

## Status

Live content is in place for all seven pages. Known placeholders, pending client assets and open questions are flagged with `STAND-IN:` / `TODO` comments in the HTML at the point they apply.
