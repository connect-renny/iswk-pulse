"""Build the Gallery page from the client's photo/video drop.

    python tools/gallery/build_gallery.py            # convert media + rewrite gallery.html
    python tools/gallery/build_gallery.py --html     # rewrite gallery.html only

Every photo is re-encoded to a baseline JPG (HEIC/PNG included), turned upright
from its EXIF orientation, stripped of metadata (GPS included) and saved twice:
a 1600px copy for the lightbox and an 800px copy for the grid tile. Videos are
re-encoded to H.264/AAC MP4 at 720p (HEVC and 4K HDR do not play in most
browsers) with a poster frame.

Needs: pip install pillow pillow-heif imageio-ffmpeg
"""
import html
import re
import subprocess
import sys
from pathlib import Path

import imageio_ffmpeg
import pillow_heif
from PIL import Image, ImageOps

pillow_heif.register_heif_opener()

ROOT = Path(__file__).resolve().parents[2]  # the HTML folder
DOCS = ROOT.parent / "docs"
IMG_OUT = ROOT / "assets" / "images" / "gallery"
VID_OUT = ROOT / "assets" / "videos" / "gallery"
PAGE = ROOT / "gallery.html"

FULL_EDGE, THUMB_EDGE = 1600, 800
FULL_Q, THUMB_Q = 80, 74

FS = "FS-20260924T055319Z-1-001/FS/Photographs - videos"
MS = "MS-20260924T052453Z-1-001/MS/Photographs - videos"
PS = "PS-20260924T052450Z-1-001/PS/Photographs - videos of Parent Engagement & Parent Connect hours"
SS = "SS-20260924T052449Z-1-001/SS/Photographs - videos"

STAGES = {
    "fs": "Foundation Stage",
    "ps": "Preparatory Stage",
    "ms": "Middle Stage",
    "ss": "Senior Stage",
}

# event key -> filter label (the chips in gallery.html use the same keys)
EVENTS = {
    "connect": "Parent Connect Hours",
    "mothers-day": "Mother's Day",
    "sultans-feast": "Sultan's Feast",
    "engagement": "Parent Engagement",
    "volunteer": "Parent Volunteers",
}

# Handwritten sticky notes, exact copies and burst shots stay out of the wall.
# The notes are parent compliments; they belong with the testimonials.
SKIP = {
    f"{FS}/Class 1/Parent Connect/20260808_102324.jpg",  # sticky notes
    f"{FS}/Class 2/PARENT CONNECT/20260808_101900.jpg",  # sticky notes
    *(f"{FS}/KG II/Parent Connect/{n}" for n in (
        "IMG_4166.JPG", "IMG_4171.JPG", "IMG_4193.JPG", "IMG_4194(1).JPG",
        "IMG_4194.JPG", "IMG_4198.JPG", "IMG_4200.JPG", "IMG_4213.JPG",
        "IMG_4222.JPG", "IMG_4224.JPG", "IMG_4227.JPG", "IMG_4239.JPG",
        "IMG_5682.HEIC",
    )),
    f"{PS}/PARENT CONNECT/20260808_092427.jpg",
    # the two collage posts repeat the session photos under sponsor branding;
    # the title card is kept as the album cover
    f"{PS}/ABLE DEPT/Copy of You Are The First Therapist Post (1).png",
    f"{PS}/ABLE DEPT/Copy of You Are The First Therapist Post (2).png",
}

# Snapchat saves with no orientation tag, lying on their side
ROTATE_CCW = {
    f"{FS}/Class 2/MOTHER_S DAY/Snapchat-1568592142.jpg",
    f"{FS}/Class 2/MOTHER_S DAY/Snapchat-227959187.jpg",
    f"{FS}/Class 2/MOTHER_S DAY/Snapchat-250152004.jpg",
}

# the SS folder mixes a guest-speaker assembly in with the Parent Connect Hour
SS_SPEAKER = {"155980.jpg", "155981.jpg"}

# (source folder, file slug, stage, event, caption)
ALBUMS = [
    (f"{FS}/KG I/mother _s day 26", "fs-kg1-mothers-day", "fs", "mothers-day",
     "KG I Mother's Day celebration"),
    (f"{FS}/KG I/PARENT CONNECT 26", "fs-kg1-parent-connect", "fs", "connect",
     "KG I Parent Connect Hour"),
    (f"{FS}/KG II/Parent Connect", "fs-kg2-parent-connect", "fs", "connect",
     "KG II Parent Connect Hour"),
    (f"{FS}/Class 1/Mother_s Day", "fs-class1-mothers-day", "fs", "mothers-day",
     "Class 1 Mother's Day celebration"),
    (f"{FS}/Class 1/Parent Connect", "fs-class1-parent-connect", "fs", "connect",
     "Class 1 Parent Connect Hour"),
    (f"{FS}/Class 2/MOTHER_S DAY", "fs-class2-mothers-day", "fs", "mothers-day",
     "Class 2 Mother's Day celebration"),
    (f"{FS}/Class 2/compliments from parents", "fs-class2-mothers-day", "fs",
     "mothers-day", "Class 2 Mother's Day — a parent's feedback"),
    (f"{FS}/Class 2/PARENT CONNECT", "fs-class2-parent-connect", "fs", "connect",
     "Class 2 Parent Connect Hour"),
    (f"{FS}/Class 2/SULTAN_S FEAST", "fs-class2-sultans-feast", "fs",
     "sultans-feast", "Class 2 Sultan's Feast with parents"),
    (f"{PS}/PARENT CONNECT", "ps-parent-connect", "ps", "connect",
     "Preparatory Stage Parent Connect Hour"),
    (f"{PS}/ABLE DEPT", "ps-able-first-therapist", "ps", "engagement",
     "“You Are the First Therapist” — ABLE Department"),
    (f"{PS}/PARENT VOLUNTEER", "ps-parent-volunteer", "ps", "volunteer",
     "Parent volunteer session"),
    (MS, "ms-parent-connect", "ms", "connect",
     "Middle Stage Parent Connect Hour"),
    (SS, "ss-parent-connect", "ss", "connect",
     "Senior Stage Parent Connect Hour"),
]

IMG_EXT = {".jpg", ".jpeg", ".png", ".heic"}
VID_EXT = {".mp4", ".mov"}


def rel(p):
    return p.relative_to(DOCS).as_posix()


def collect():
    """Walk the albums and return one record per published photo/video."""
    items = []
    for folder, slug, stage, event, caption in ALBUMS:
        src_dir = DOCS / folder
        files = sorted(
            (p for p in src_dir.iterdir() if p.is_file()),
            key=lambda p: p.name.lower(),
        )
        # the "compliments" folder only contributes its feedback video; its
        # photos are copies of Parent Connect shots or sticky notes
        if "compliments" in folder:
            files = [p for p in files if p.suffix.lower() in VID_EXT]

        n_img = n_vid = 0
        for p in files:
            ext = p.suffix.lower()
            if rel(p) in SKIP or ext not in IMG_EXT | VID_EXT:
                continue

            item = {"src": p, "stage": stage, "event": event, "caption": caption}
            if slug.startswith("ss-") and p.name in SS_SPEAKER:
                item.update(event="engagement",
                            caption="Senior Stage guest speaker session")
                s = "ss-guest-speaker"
            else:
                s = slug

            if ext in VID_EXT:
                n_vid += 1
                item.update(kind="video", name=f"{s}-video-{n_vid:02d}")
                if "feedback" in p.name.lower():
                    item["name"] = f"{s}-parent-feedback"
            else:
                n_img += 1
                item.update(kind="image", name=f"{s}-{n_img:02d}")
            items.append(item)

    # SS speaker shots were numbered inside the Parent Connect run; renumber
    counts = {}
    for it in items:
        if it["kind"] == "image":
            base = re.sub(r"-\d+$", "", it["name"])
            counts[base] = counts.get(base, 0) + 1
            it["name"] = f"{base}-{counts[base]:02d}"
    return items


def save_jpg(im, path, edge, q):
    im = im.copy()
    im.thumbnail((edge, edge), Image.LANCZOS)
    path.parent.mkdir(parents=True, exist_ok=True)
    # no exif= argument, so nothing from the camera is carried over
    im.save(path, "JPEG", quality=q, optimize=True, progressive=True)
    return im.size


def do_image(it):
    im = Image.open(it["src"])
    im = ImageOps.exif_transpose(im)
    if rel(it["src"]) in ROTATE_CCW:
        im = im.rotate(90, expand=True)
    if im.mode != "RGB":
        im = im.convert("RGB")
    it["w"], it["h"] = save_jpg(im, IMG_OUT / f"{it['name']}.jpg", FULL_EDGE, FULL_Q)
    save_jpg(im, IMG_OUT / "thumbs" / f"{it['name']}.jpg", THUMB_EDGE, THUMB_Q)


def probe_hdr(src):
    ff = imageio_ffmpeg.get_ffmpeg_exe()
    out = subprocess.run([ff, "-hide_banner", "-i", str(src)],
                         capture_output=True, text=True, errors="replace").stderr
    return "arib-std-b67" in out or "smpte2084" in out


def do_video(it):
    ff = imageio_ffmpeg.get_ffmpeg_exe()
    VID_OUT.mkdir(parents=True, exist_ok=True)
    out = VID_OUT / f"{it['name']}.mp4"

    # fit inside 1280x1280, so portrait phone clips come out 720 wide
    vf = ["scale='min(1280,iw)':'min(1280,ih)':force_original_aspect_ratio=decrease:force_divisible_by=2"]
    if probe_hdr(it["src"]):
        # iPhone HLG → SDR, otherwise the clip plays washed out and grey
        vf = ["zscale=t=linear:npl=100", "format=gbrpf32le", "zscale=p=bt709",
              "tonemap=hable:desat=0", "zscale=t=bt709:m=bt709:r=tv"] + vf
    vf += ["fps='min(30,source_fps)'", "format=yuv420p"]

    subprocess.run([
        ff, "-y", "-loglevel", "error", "-i", str(it["src"]),
        "-map", "0:v:0", "-map", "0:a:0?", "-map_metadata", "-1",
        "-vf", ",".join(vf),
        "-c:v", "libx264", "-preset", "slow", "-crf", "27", "-profile:v", "high",
        "-c:a", "aac", "-b:a", "96k", "-ac", "2",
        "-movflags", "+faststart", str(out),
    ], check=True)

    poster = IMG_OUT / "posters" / f"{it['name']}.jpg"
    poster.parent.mkdir(parents=True, exist_ok=True)
    tmp = poster.with_suffix(".png")
    subprocess.run([ff, "-y", "-loglevel", "error", "-ss", "1", "-i", str(out),
                    "-frames:v", "1", str(tmp)], check=True)
    im = Image.open(tmp).convert("RGB")
    it["w"], it["h"] = im.size
    save_jpg(im, poster, THUMB_EDGE, THUMB_Q)
    tmp.unlink()


def interleave(items):
    """Round-robin across albums so 'All moments' opens on a mix, not 50 shots
    of one room."""
    groups = {}
    for it in items:
        key = re.sub(r"-(video-)?\d+$|-parent-feedback$", "", it["name"])
        groups.setdefault(key, []).append(it)
    queues = list(groups.values())
    out = []
    while any(queues):
        for q in queues:
            if q:
                out.append(q.pop(0))
    return out


def tile_html(it, k):
    esc = html.escape
    tag = EVENTS[it["event"]]
    stage = STAGES[it["stage"]]
    cap = it["caption"]
    portrait = it["h"] > it["w"] * 1.15
    shape = ""
    if portrait:
        shape = " gallery-item-tall"
    elif k % 9 == 0:
        shape = " gallery-item-big"
    elif k % 9 == 5:
        shape = " gallery-item-wide"

    if it["kind"] == "video":
        full = f"assets/videos/gallery/{it['name']}.mp4"
        thumb = f"assets/images/gallery/posters/{it['name']}.jpg"
        media = ' data-media="video"'
        badge = ('\n                <span class="gallery-play" aria-hidden="true">'
                 '\n                  <i class="bi bi-play-fill"></i>'
                 '\n                </span>')
        zoom = "bi-play-circle"
        hint = "Play the video"
        media_attr = f'\n                data-poster="{thumb}"'
    else:
        full = f"assets/images/gallery/{it['name']}.jpg"
        thumb = f"assets/images/gallery/thumbs/{it['name']}.jpg"
        media = ""
        badge = ""
        zoom = "bi-arrows-fullscreen"
        hint = "Open in the viewer"
        media_attr = ""

    return f"""            <li
              class="gallery-item{shape}"
              data-category="{it['event']}"
              data-stage="{it['stage']}"{media}
              data-aos="fade-up"
              data-aos-delay="{(k % 4) * 60}"
            >
              <button
                type="button"
                class="gallery-tile"
                data-full="{full}"{media_attr}
                data-caption="{esc(cap)}"
                data-tag="{esc(tag)} · {stage}"
              >
                <img
                  src="{thumb}"
                  alt="{esc(cap)}"
                  width="{it['w']}"
                  height="{it['h']}"
                  loading="lazy"
                  decoding="async"
                />
                <span class="gallery-veil"></span>{badge}
                <span class="gallery-meta">
                  <span class="gallery-tag">{esc(tag)}</span>
                  <span class="gallery-caption">{esc(cap)}</span>
                </span>
                <span class="gallery-zoom" aria-hidden="true">
                  <i class="bi {zoom}"></i>
                </span>
                <span class="visually-hidden">{hint}</span>
              </button>
            </li>
"""


def write_page(items):
    body = "".join(tile_html(it, k) for k, it in enumerate(items))
    page = PAGE.read_text(encoding="utf-8")
    start, end = "<!-- gallery:items:start -->", "<!-- gallery:items:end -->"
    a, b = page.index(start) + len(start), page.index(end)
    page = page[:a] + "\n" + body + "            " + page[b:]
    PAGE.write_text(page, encoding="utf-8")


def dims_from_disk(it):
    p = (IMG_OUT / "posters" if it["kind"] == "video" else IMG_OUT) / f"{it['name']}.jpg"
    it["w"], it["h"] = Image.open(p).size


def main():
    html_only = "--html" in sys.argv
    items = collect()
    for n, it in enumerate(items, 1):
        if html_only:
            dims_from_disk(it)
            continue
        print(f"[{n}/{len(items)}] {it['kind']:5} {it['name']}  <-  {rel(it['src'])}",
              flush=True)
        (do_video if it["kind"] == "video" else do_image)(it)

    items = interleave(items)
    write_page(items)
    n_v = sum(it["kind"] == "video" for it in items)
    print(f"gallery.html: {len(items)} tiles ({len(items) - n_v} photos, {n_v} videos)")


if __name__ == "__main__":
    main()
