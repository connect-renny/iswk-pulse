"""Build the Bulletin Library on enrichment-resources.html from the client's drop.

    python tools/bulletins/build_bulletins.py            # convert files + rewrite the page
    python tools/bulletins/build_bulletins.py --html     # rewrite the page only

Every bulletin is published as a PDF under assets/bulletins/ (the July issues
arrived as PNG/JPG and are wrapped into a single-page PDF so "Read bulletin"
behaves the same everywhere; the PDFs' embedded artwork is recompressed), and page 1 is rendered to a cover under
assets/bulletins/covers/. The cards between the bulletins:items markers in
enrichment-resources.html are regenerated from BULLETINS below, so add next
month's issues there and re-run rather than hand-editing the markup.

Needs: pip install pillow pymupdf
"""
import html
import re
import shutil
import sys
from pathlib import Path

import pymupdf
from PIL import Image, ImageChops, ImageStat

ROOT = Path(__file__).resolve().parents[2]  # the HTML folder
SRC = ROOT.parent / "docs" / "30SEP2026" / "PARENT CONNECT BULLETIN" / "PARENT CONNECT BULLETIN"
OUT = ROOT / "assets" / "bulletins"
COVERS = OUT / "covers"
PAGE = ROOT / "enrichment-resources.html"

COVER_W, COVER_H, COVER_Q = 640, 480, 80
PDF_Q = 85

STAGES = {
    "fs": "Foundation Stage",
    "ps": "Preparatory Stage",
    "ms": "Middle Stage",
    "ss": "Senior Stage",
}

MONTHS = {"04": "April", "07": "July", "08": "August"}

# (slug, stage, group, yyyy-mm, title, source relative to SRC, trim box or None)
# Order is the order on the page: by stage, newest first.
# Titles are the headline printed on each bulletin.
BULLETINS = [
    # ── Foundation Stage (Nursery, KG, Classes 1-2) ──
    ("2026-08-fs-nursery-happy-school-journey", "fs", "Nursery", "2026-08",
     "Preparing Your Child for a Happy School Journey",
     "AUGUST/NURSERY - PARENT CONNECT BULLETIN.pdf", None),
    ("2026-07-fs-nursery-happy-habits-at-home", "fs", "Nursery", "2026-07",
     "Happy Habits at Home",
     "JULY/Nursery.png", None),
    # the artwork's ribbon says "Nursery" but the client filed it as KG
    ("2026-07-fs-kg-building-positive-routines", "fs", "KG", "2026-07",
     "Building Positive Routines and Learning Habits",
     "JULY/KG.jpg", None),
    ("2026-07-fs-classes-1-2-healthy-digital-habits", "fs", "Classes 1 & 2", "2026-07",
     "Building Healthy Digital Habits and Focus",
     "JULY/CLASSES 1 & 2.png", None),
    ("2026-04-fs-nursery-language-through-play", "fs", "Nursery", "2026-04",
     "Enhancing Language Skills Through Play",
     "APRIL/PARENT CONNECT BULLETIN - NURSERY.pdf", None),
    # ── Preparatory Stage (Classes 3-5) ──
    ("2026-08-ps-classes-3-5-solving-problems-independently", "ps", "Classes 3 – 5", "2026-08",
     "Build Confidence in Solving Problems Independently",
     "AUGUST/PS - PARENT CONNECT BULLETIN.pdf", None),
    ("2026-07-ps-classes-3-5-disciplined-technology-use", "ps", "Classes 3 – 5", "2026-07",
     "Promoting Disciplined Technology Use and Sustained Attention",
     "JULY/PS.png", None),
    # ── Middle Stage (Classes 6-8) ──
    ("2026-08-ms-classes-6-8-healthy-friendships", "ms", "Classes 6 – 8", "2026-08",
     "Build Healthy Friendships and Make Responsible Choices",
     "AUGUST/MS - PARENT CONNECT BULLETIN.pdf", None),
    # a phone screenshot: 41px black bars either side
    ("2026-07-ms-classes-6-8-preteen-behaviour-peer-influence", "ms", "Classes 6 – 8", "2026-07",
     "Understanding Preteen Behaviour and Peer Influence",
     "JULY/Parent Connect Bulletin classes   6-8.png", (41, 0, 900, 1672)),
    ("2026-04-ms-classes-6-8-responsible-technology-use", "ms", "Classes 6 – 8", "2026-04",
     "Promoting Responsible Use of Technology & Safe Online Behaviour",
     "APRIL/PARENT CONNECT BULLETIN - MS.pdf", None),
    # ── Senior Stage (Classes 9-12) ──
    # the cover reads "Grade IX & XII"; its timeline covers grades 9 to 12
    ("2026-08-ss-classes-9-12-career-awareness", "ss", "Classes 9 – 12", "2026-08",
     "Supporting Career Awareness & Decision Making",
     "AUGUST/SS -PARENT CONNECT BULLETIN.pdf", None),
    ("2026-07-ss-classes-9-11-balanced-screen-time", "ss", "Classes 9 & 11", "2026-07",
     "Encourage Healthy, Balanced and Responsible Screen Time Habits",
     "JULY/Parent Connect Bulletin classes     9 & 11.jpg", None),
    ("2026-04-ss-classes-9-11-conceptual-understanding", "ss", "Classes 9 & 11", "2026-04",
     "Strengthen Conceptual Understanding Rather Than Rote Learning",
     "APRIL/PARENT CONNECT BULLETIN - CLASSES 9 & 11.pdf", None),
    ("2026-04-ss-classes-10-12-financial-literacy", "ss", "Classes 10 & 12", "2026-04",
     "Financial Literacy: Building Smart Habits for a Secure Future",
     "APRIL/PARENT CONNECT BULLETIN - CLASSES 10 & 12.pdf", None),
]

START = "<!-- bulletins:items:start -->"
END = "<!-- bulletins:items:end -->"


def render_diff(a, b):
    """Mean per-channel difference (0-255) between two PDFs rendered at 50 dpi."""
    pymupdf.TOOLS.mupdf_display_errors(False)
    total = 0.0
    da, db = pymupdf.open(a), pymupdf.open(b)
    for pa, pb in zip(da, db):
        ia, ib = (
            Image.frombytes("RGB", (p.width, p.height), p.samples)
            for p in (pa.get_pixmap(dpi=50), pb.get_pixmap(dpi=50))
        )
        total = max(total, sum(ImageStat.Stat(ImageChops.difference(ia, ib)).mean) / 3)
    pymupdf.TOOLS.mupdf_display_errors(True)
    return total


def build_files():
    OUT.mkdir(parents=True, exist_ok=True)
    COVERS.mkdir(parents=True, exist_ok=True)
    for slug, _stage, _group, _ym, _title, src, trim in BULLETINS:
        src = SRC / src
        pdf = OUT / f"{slug}.pdf"
        if src.suffix.lower() == ".pdf":
            # the exports embed their artwork as lossless PNG (the April
            # Nursery issue is 8 MB); JPEG q85 is visually identical at a
            # fraction of the size. Kept only when it saves space AND still
            # renders like the original: the rewrite drops the gradient
            # Pattern behind the Classes 10 & 12 issue, leaving it on white.
            doc = pymupdf.open(src)
            doc.rewrite_images(dpi_threshold=400, dpi_target=300, quality=PDF_Q)
            doc.save(pdf, garbage=4, deflate=True)
            doc.close()
            if pdf.stat().st_size > src.stat().st_size * 0.9 or render_diff(src, pdf) > 2:
                shutil.copyfile(src, pdf)
        else:
            im = Image.open(src).convert("RGB")
            if trim:
                im = im.crop(trim)
            # an A4-wide page at whatever resolution the artwork has
            im.save(pdf, "PDF", resolution=im.width / 8.27, quality=90)

        doc = pymupdf.open(pdf)
        page = doc[0]
        zoom = COVER_W / page.rect.width
        pix = page.get_pixmap(matrix=pymupdf.Matrix(zoom, zoom))
        cover = Image.frombytes("RGB", (pix.width, pix.height), pix.samples)
        # the card shows a 4:3 window onto the masthead and headline, so only
        # that much is kept (2x the ~310px card width)
        cover = cover.crop((0, 0, COVER_W, COVER_H))
        cover.save(COVERS / f"{slug}.jpg", "JPEG", quality=COVER_Q, optimize=True, progressive=True)
        print(f"{slug}: {doc.page_count}p, {pdf.stat().st_size // 1024} KB, cover {cover.size}")


def card(entry, first_of_stage, indent):
    slug, stage, group, ym, title, _src, _trim = entry
    year, month = ym.split("-")
    when = f"{MONTHS[month]} {year}"
    esc = html.escape
    cover = COVERS / f"{slug}.jpg"
    w, h = Image.open(cover).size
    anchor = f'\n  id="{stage}-bulletins"' if first_of_stage else ""
    open_li = (
        f'<li\n  class="bulletin-card bulletin-{stage}"\n  data-stage="{stage}"{anchor}\n>'
        if first_of_stage
        else f'<li class="bulletin-card bulletin-{stage}" data-stage="{stage}">'
    )
    lines = f"""{open_li}
  <figure class="bulletin-media">
    <img
      src="assets/bulletins/covers/{slug}.jpg"
      alt="Cover of the {esc(when)} Parent Connect Bulletin for {esc(group)}"
      width="{w}"
      height="{h}"
      loading="lazy"
      decoding="async"
    />
    <figcaption class="bulletin-tag">{STAGES[stage]}</figcaption>
  </figure>
  <div class="bulletin-body">
    <p class="bulletin-meta">
      <span>{esc(group)}</span>
      <time datetime="{ym}">{when}</time>
    </p>
    <h3 class="bulletin-name">{esc(title)}</h3>
    <footer class="bulletin-foot">
      <a
        class="bulletin-link"
        href="assets/bulletins/{slug}.pdf"
        target="_blank"
        rel="noopener"
      >
        Read bulletin
        <i class="bi bi-arrow-right" aria-hidden="true"></i>
        <span class="visually-hidden">(PDF, opens in a new tab)</span>
      </a>
      <button
        type="button"
        class="like-btn"
        data-like-id="{slug}"
        aria-pressed="false"
      >
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <use href="#i-thumb"></use>
        </svg>
        <span class="like-count">0</span>
        <span class="visually-hidden">Like this bulletin</span>
      </button>
    </footer>
  </div>
</li>"""
    return "\n".join(indent + ln if ln else ln for ln in lines.split("\n"))


def build_html():
    text = PAGE.read_text(encoding="utf-8")
    m = re.search(rf"([ \t]*){re.escape(START)}\n.*?[ \t]*{re.escape(END)}", text, re.S)
    if not m:
        sys.exit(f"markers not found in {PAGE.name}")
    indent = m.group(1)
    seen, parts = set(), []
    for entry in BULLETINS:
        stage = entry[1]
        if stage not in seen:
            parts.append(f"{indent}<!-- {STAGES[stage]} -->")
        parts.append(card(entry, stage not in seen, indent))
        parts.append("")
        seen.add(stage)
    block = f"{indent}{START}\n" + "\n".join(parts).rstrip() + f"\n{indent}{END}"
    PAGE.write_text(text[: m.start()] + block + text[m.end():], encoding="utf-8")
    print(f"{PAGE.name}: {len(BULLETINS)} bulletins")


if __name__ == "__main__":
    if "--html" not in sys.argv:
        build_files()
    build_html()
