# ISWK PULSE

Static website for **PULSE** — the parent-engagement initiative of Indian School Al Wadi Al Kabir (ISWK), Oman.

Hand-built HTML + SCSS on Bootstrap 5. No build framework, no server: the compiled site is exactly what sits in this repository, so it can be served from any static host (GitHub Pages, Netlify, or a plain web server).

## Pages

| File | Page |
| --- | --- |
| `index.html` | Home — hero slider, Home–School Partnership, Vision & Mission, Our Shared Commitment |
| `our-parenting-journey.html` | Sub page 1 — Our Parenting Journey |
| `parenting-across-every-stage.html` | Sub page 2 — Parenting Across Every Stage (Primary / Senior tab switch) |
| `enrichment-resources.html` | Sub page 3 — Enrichment & Resources, incl. the Parent Connect bulletin library |
| `parent-volunteer-programme.html` | Sub page 4 — Parent Volunteer Programme |
| `pulse-live-zone.html` | Sub page 5 — PULSE Live Zone |
| `gallery.html` | Gallery — filterable photo/video mosaic with a lightbox |

## Layout

```
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

## Preview

```bash
npx http-server -p 8787 -c-1 .
```

## Content generators

Two Python scripts rewrite marked regions of the HTML in place; re-run them rather than hand-editing the generated markup.

- `tools/gallery/build_gallery.py` — processes the client photo/video drop into web assets and rewrites everything between `<!-- gallery:items:start -->` and `<!-- gallery:items:end -->` in `gallery.html`. Needs Pillow, pillow-heif and imageio-ffmpeg. `--html` skips re-encoding media.
- `tools/bulletins/build_bulletins.py` — processes bulletin PDFs/images into `assets/bulletins/` and rewrites between `<!-- bulletins:items:start -->` and `<!-- bulletins:items:end -->` in `enrichment-resources.html`.

## Conventions

- Brand colours: navy `#052754`, gold `#e8a838`, amber `#eea403`.
- 20px page gutters (`.page-shell`); content shells are `.section-shell` (1320px) or `.partnership-inner` (1290px).
- Header/nav breakpoints are **1849 / 1509 / 1279**; content breakpoints are 1599 / 1399 / 1199. Keep `_header.scss` and `_navigation.scss` in step.
- Poppins is the only bundled face.

## Status

Live content is in place for all seven pages. Known placeholders, pending client assets and open questions are flagged with `STAND-IN:` / `TODO` comments in the HTML at the point they apply.
