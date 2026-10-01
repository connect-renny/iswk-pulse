// Smooth Scroll

const lenis = new Lenis();
lenis.on("scroll", (e) => {
  console.log(e);
});
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Preloader
window.addEventListener("load", function () {
  setTimeout(function () {
    var loaderOverlay = document.querySelector(".loader-overlay");
    if (!loaderOverlay) {
      return;
    }
    loaderOverlay.style.transition = "opacity 0.5s";
    loaderOverlay.style.opacity = "0";

    setTimeout(function () {
      loaderOverlay.style.display = "none";
      if (typeof swiperBanner !== "undefined" && swiperBanner.autoplay) {
        swiperBanner.autoplay.start();
      }
    }, 500); // Adjust the time for display:none to match your transition time
  }, 2000); // Adjust the initial delay time
});

// Mobile nav toggle
var navToggler = document.querySelector(".navbar-toggler");
var navMenu = document.getElementById("primaryNav");
var navBackdrop = document.querySelector(".nav-backdrop");

function setNav(open) {
  navMenu.classList.toggle("is-open", open);
  navToggler.classList.toggle("is-open", open);
  navToggler.setAttribute("aria-expanded", open);

  if (navBackdrop) {
    // hidden keeps it out of the a11y tree between opens
    navBackdrop.hidden = !open;
    navBackdrop.classList.toggle("is-open", open);
  }

  // Lenis owns the scroll, so overflow:hidden alone would not hold the page
  if (open) {
    lenis.stop();
  } else {
    lenis.start();
  }
}

if (navToggler && navMenu) {
  navToggler.addEventListener("click", function () {
    setNav(!navMenu.classList.contains("is-open"));
  });

  navMenu.querySelectorAll(".nav-link").forEach(function (link) {
    link.addEventListener("click", function () {
      setNav(false);
    });
  });

  if (navBackdrop) {
    navBackdrop.addEventListener("click", function () {
      setNav(false);
    });
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && navMenu.classList.contains("is-open")) {
      setNav(false);
    }
  });

  // a drawer left open while resizing past the breakpoint would strand the page
  window.addEventListener("resize", function () {
    if (window.innerWidth > 1199 && navMenu.classList.contains("is-open")) {
      setNav(false);
    }
  });
}

// Footer year
var yearEl = document.querySelector(".year");
if (yearEl) {
  yearEl.textContent = new Date().getFullYear();
}

// Navbar fixed on scroll
window.addEventListener("scroll", function () {
  var sticky = document.querySelector(".navbar-main");
  var scroll = window.pageYOffset || document.documentElement.scrollTop;

  if (scroll >= 10) {
    sticky.classList.add("navbar-fixed");
  } else {
    sticky.classList.remove("navbar-fixed");
  }
});

// Scroll to top----------------

// Get the return-top button element
var returnTopButton = document.getElementById("return-top");

// Function to handle the scroll event
function handleScroll() {
  if (window.scrollY >= 50) {
    // If page is scrolled more than 50px
    returnTopButton.style.opacity = "1"; // Fade in the arrow
  } else {
    returnTopButton.style.opacity = "0"; // Else fade out the arrow
  }
}

// Add a scroll event listener to the window
window.addEventListener("scroll", handleScroll);

// Function to scroll to the top when the button is clicked
function scrollToTop() {
  // When arrow is clicked
  window.scrollTo({
    top: 0, // Scroll to the top of the page
    behavior: "smooth", // Smooth scrolling behavior
  });
}

// Add a click event listener to the return-top button
returnTopButton.addEventListener("click", scrollToTop);

// Key Features slider
if (document.querySelector(".swiper-features")) {
  new Swiper(".swiper-features", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 6,
    watchOverflow: true,
    navigation: {
      nextEl: ".features-next",
      prevEl: ".features-prev",
    },
    pagination: {
      el: ".features-pagination",
      clickable: true,
    },
    breakpoints: {
      576: { slidesPerView: 2, slidesPerGroup: 2 },
      992: { slidesPerView: 3, slidesPerGroup: 3 },
      1200: { slidesPerView: 4, slidesPerGroup: 4 },
    },
  });

  // one card open at a time, matching the comp's expanded state
  document.querySelectorAll(".feature-toggle").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var card = btn.closest(".feature-card");
      var wasOpen = card.classList.contains("is-open");
      document.querySelectorAll(".feature-card.is-open").forEach(function (c) {
        c.classList.remove("is-open");
      });
      card.classList.toggle("is-open", !wasOpen);
    });
  });
}

// Key Messages slider
if (document.querySelector(".swiper-messages")) {
  new Swiper(".swiper-messages", {
    slidesPerView: 1,
    loop: true,
    speed: 700,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".messages-pagination",
      clickable: true,
    },
  });
}

// Header search
var searchToggle = document.querySelector(".search-toggle");
var searchPanel = document.getElementById("searchPanel");

if (searchToggle && searchPanel) {
  var searchInput = searchPanel.querySelector(".search-input");

  function setSearch(open) {
    searchToggle.setAttribute("aria-expanded", open);

    if (open) {
      searchPanel.hidden = false;
      // flush styles so the transition has a start value; a forced reflow is
      // synchronous, unlike rAF which never fires in a backgrounded tab
      void searchPanel.offsetWidth;
      searchPanel.classList.add("is-open");
      searchInput.focus({ preventScroll: true });
    } else {
      searchPanel.classList.remove("is-open");
      searchInput.blur();
      window.setTimeout(function () {
        if (!searchPanel.classList.contains("is-open")) {
          searchPanel.hidden = true;
        }
      }, 340); // just past the 0.28s close transition
    }
  }

  searchToggle.addEventListener("click", function (e) {
    e.stopPropagation();
    setSearch(searchPanel.hidden);
  });

  searchPanel
    .querySelector(".search-close")
    .addEventListener("click", function () {
      setSearch(false);
    });

  // clicks inside the panel must not reach the document handler below
  searchPanel.addEventListener("click", function (e) {
    e.stopPropagation();
  });

  document.addEventListener("click", function () {
    if (!searchPanel.hidden) {
      setSearch(false);
    }
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && !searchPanel.hidden) {
      setSearch(false);
      searchToggle.focus();
    }
  });
}

// Stage switch (Parenting Across Every Stage)
var stageSwitch = document.querySelector(".stage-switch");

if (stageSwitch) {
  var stageTabs = Array.prototype.slice.call(
    stageSwitch.querySelectorAll(".stage-tab")
  );

  function setStage(tab) {
    stageTabs.forEach(function (t) {
      var on = t === tab;
      var panel = document.getElementById(t.getAttribute("aria-controls"));

      t.classList.toggle("is-active", on);
      t.setAttribute("aria-selected", on);

      if (panel) {
        panel.hidden = !on;
        panel.classList.toggle("is-active", on);
      }
    });

    // the hidden panel had no layout, so AOS needs its offsets measured again
    if (typeof AOS !== "undefined") {
      AOS.refreshHard();
    }

    // only pull the page back when the switch has scrolled out of sight
    var box = stageSwitch.getBoundingClientRect();
    if (box.top < 0 || box.bottom > window.innerHeight) {
      var top = box.top + window.pageYOffset - 140;
      if (typeof lenis !== "undefined") {
        lenis.scrollTo(top);
      } else {
        window.scrollTo({ top: top, behavior: "smooth" });
      }
    }
  }

  stageTabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      setStage(tab);
    });
  });

  // arrow keys move between tabs, as expected of a tablist
  stageSwitch.addEventListener("keydown", function (e) {
    if (e.key !== "ArrowLeft" && e.key !== "ArrowRight") {
      return;
    }

    var i = stageTabs.indexOf(document.activeElement);
    if (i === -1) {
      return;
    }

    e.preventDefault();
    var next = stageTabs[(i + (e.key === "ArrowRight" ? 1 : -1) + stageTabs.length) % stageTabs.length];
    next.focus();
    setStage(next);
  });
}

// Like buttons (Enrichment & Resources)
// Counts live in this browser only; swap readCount/writeCount for the real
// endpoint when the backend is available.
var likeButtons = document.querySelectorAll(".like-btn");

if (likeButtons.length) {
  var LIKE_KEY = "pulse-likes";

  function readLikes() {
    try {
      return JSON.parse(localStorage.getItem(LIKE_KEY)) || {};
    } catch (e) {
      return {};
    }
  }

  function writeLikes(store) {
    try {
      localStorage.setItem(LIKE_KEY, JSON.stringify(store));
    } catch (e) {
      // private browsing or blocked storage — the toggle still works per page
    }
  }

  var likes = readLikes();

  likeButtons.forEach(function (btn) {
    var id = btn.dataset.likeId;
    var count = btn.querySelector(".like-count");
    var base = parseInt(count.textContent, 10) || 0;

    function paint(liked) {
      btn.classList.toggle("is-liked", liked);
      btn.setAttribute("aria-pressed", liked);
      count.textContent = base + (liked ? 1 : 0);
    }

    paint(!!likes[id]);

    btn.addEventListener("click", function () {
      likes = readLikes();
      var liked = !likes[id];

      if (liked) {
        likes[id] = 1;
      } else {
        delete likes[id];
      }

      writeLikes(likes);
      paint(liked);
    });
  });
}

// Bulletin stage filter
var libraryFilters = document.querySelector(".library-filters");

if (libraryFilters) {
  var chips = libraryFilters.querySelectorAll(".filter-chip");
  var cards = document.querySelectorAll(".bulletin-card");
  var emptyNote = document.querySelector(".library-empty");

  chips.forEach(function (chip) {
    chip.addEventListener("click", function () {
      var want = chip.dataset.filter;
      var shown = 0;

      chips.forEach(function (c) {
        var on = c === chip;
        c.classList.toggle("is-active", on);
        c.setAttribute("aria-pressed", on);
      });

      cards.forEach(function (card) {
        var show = want === "all" || card.dataset.stage === want;
        card.hidden = !show;
        if (show) {
          shown++;
        }
      });

      if (emptyNote) {
        emptyNote.hidden = shown > 0;
      }

      if (typeof AOS !== "undefined") {
        AOS.refreshHard();
      }
    });
  });
}

// Gallery album filter + lightbox (Gallery)
var galleryGrid = document.getElementById("galleryGrid");
var lightbox = document.getElementById("galleryLightbox");

if (galleryGrid) {
  var galleryItems = [].slice.call(galleryGrid.querySelectorAll(".gallery-item"));
  var galleryEmpty = document.querySelector(".gallery-empty");
  var galleryMore = document.querySelector(".gallery-more");
  var galleryMoreBtn = document.querySelector(".gallery-more-btn");
  var galleryCount = document.querySelector(".gallery-count");

  // nearly two hundred tiles would make one very long wall, so the grid opens
  // a page at a time
  var GALLERY_PAGE = 24;
  var galleryWant = { event: "all", stage: "all" };
  var galleryLimit = GALLERY_PAGE;
  var galleryMatched = galleryItems;

  function galleryMatches(item) {
    var ev = galleryWant.event;
    var st = galleryWant.stage;
    var evOk =
      ev === "all" ||
      (ev === "video" ? item.dataset.media === "video" : item.dataset.category === ev);
    return evOk && (st === "all" || item.dataset.stage === st);
  }

  function galleryRender() {
    galleryMatched = galleryItems.filter(galleryMatches);

    galleryItems.forEach(function (item) {
      item.hidden = true;
    });
    galleryMatched.forEach(function (item, i) {
      item.hidden = i >= galleryLimit;
    });

    var total = galleryMatched.length;
    var shown = Math.min(galleryLimit, total);

    if (galleryEmpty) {
      galleryEmpty.hidden = total > 0;
    }
    if (galleryMore) {
      galleryMore.hidden = total === 0;
      galleryMoreBtn.hidden = shown >= total;
      galleryCount.textContent = "Showing " + shown + " of " + total;
    }

    if (typeof AOS !== "undefined") {
      AOS.refreshHard();
    }
  }

  // ── album filters: one chip row per axis (occasion, stage) ────────────────
  document.querySelectorAll("[data-filter-group]").forEach(function (group) {
    var chips = group.querySelectorAll("button[data-filter]");

    chips.forEach(function (chip) {
      chip.addEventListener("click", function () {
        chips.forEach(function (c) {
          var on = c === chip;
          c.classList.toggle("is-active", on);
          c.setAttribute("aria-pressed", on);
        });

        galleryWant[group.dataset.filterGroup] = chip.dataset.filter;
        galleryLimit = GALLERY_PAGE;
        galleryRender();
      });
    });
  });

  if (galleryMoreBtn) {
    galleryMoreBtn.addEventListener("click", function () {
      var from = galleryLimit;
      galleryLimit += GALLERY_PAGE;
      galleryRender();

      // hand focus to the first new tile so keyboard users land where they read
      var next = galleryMatched[from];
      if (next) {
        next.querySelector(".gallery-tile").focus({ preventScroll: true });
      }
    });
  }

  galleryRender();

  // ── lightbox ──────────────────────────────────────────────────────────────
  if (lightbox) {
    var lbImg = lightbox.querySelector("img.lightbox-img");
    var lbVideo = lightbox.querySelector(".lightbox-video");
    var lbTag = lightbox.querySelector(".lightbox-tag");
    var lbTitle = lightbox.querySelector(".lightbox-title");
    var lbCount = lightbox.querySelector(".lightbox-count");
    var lbClose = lightbox.querySelector(".lightbox-close");
    var lbPrev = lightbox.querySelector("[data-lightbox-prev]");
    var lbNext = lightbox.querySelector("[data-lightbox-next]");

    // the viewer steps through everything the current filters match, pages
    // not yet revealed included, so the order is rebuilt every time it opens
    var lbOrder = [];
    var lbAt = 0;
    var lbOpener = null;

    function lbShow(i) {
      var tile = lbOrder[i];
      if (!tile) {
        return;
      }

      lbAt = i;

      var isVideo = !!tile.dataset.poster;
      lbImg.hidden = isVideo;
      lbVideo.hidden = !isVideo;
      lbVideo.pause();

      if (isVideo) {
        lbImg.removeAttribute("src");
        lbVideo.poster = tile.dataset.poster;
        lbVideo.src = tile.dataset.full;
        lbVideo.setAttribute("aria-label", tile.dataset.caption);
        // opened by a click, so the browser allows playback with sound
        lbVideo.play().catch(function () {});
      } else {
        lbVideo.removeAttribute("src");
        lbVideo.load();
        lbImg.src = tile.dataset.full;
        lbImg.alt = tile.dataset.caption;
      }

      lbTag.textContent = tile.dataset.tag;
      lbTitle.textContent = tile.dataset.caption;
      lbCount.textContent = i + 1 + " of " + lbOrder.length;

      var solo = lbOrder.length < 2;
      lbPrev.hidden = solo;
      lbNext.hidden = solo;
    }

    function lbStep(by) {
      // wrap, so the arrows never dead-end
      lbShow((lbAt + by + lbOrder.length) % lbOrder.length);
    }

    function lbOpen(tile) {
      lbOrder = galleryMatched.map(function (item) {
        return item.querySelector(".gallery-tile");
      });

      lbOpener = tile;
      lbShow(lbOrder.indexOf(tile));

      lightbox.hidden = false;
      // force a reflow between unhide and the class so the fade actually runs;
      // requestAnimationFrame would not fire on a backgrounded tab
      void lightbox.offsetWidth;
      lightbox.classList.add("is-open");

      // Lenis owns the scroll, so overflow:hidden alone would not hold the page
      if (typeof lenis !== "undefined") {
        lenis.stop();
      }
      lbClose.focus();
    }

    function lbHide() {
      lightbox.classList.remove("is-open");

      lbVideo.pause();

      window.setTimeout(function () {
        lightbox.hidden = true;
        lbImg.removeAttribute("src");
        lbVideo.removeAttribute("src");
        lbVideo.load();
      }, 300);

      if (typeof lenis !== "undefined") {
        lenis.start();
      }
      if (lbOpener) {
        lbOpener.focus();
        lbOpener = null;
      }
    }

    galleryItems.forEach(function (item) {
      var tile = item.querySelector(".gallery-tile");
      if (tile) {
        tile.addEventListener("click", function () {
          lbOpen(tile);
        });
      }
    });

    lightbox.querySelectorAll("[data-lightbox-close]").forEach(function (el) {
      el.addEventListener("click", lbHide);
    });
    lbPrev.addEventListener("click", function () {
      lbStep(-1);
    });
    lbNext.addEventListener("click", function () {
      lbStep(1);
    });

    document.addEventListener("keydown", function (e) {
      if (lightbox.hidden) {
        return;
      }

      if (e.key === "Escape") {
        lbHide();
      } else if (e.key === "ArrowLeft") {
        lbStep(-1);
      } else if (e.key === "ArrowRight") {
        lbStep(1);
      } else if (e.key === "Tab") {
        // keep focus inside the dialog while it is open
        var focusable = [lbClose, lbPrev, lbNext, lbVideo].filter(function (b) {
          return !b.hidden;
        });
        var first = focusable[0];
        var last = focusable[focusable.length - 1];

        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    });

    // swipe between photographs on touch
    var lbTouchX = null;

    lightbox.addEventListener(
      "touchstart",
      function (e) {
        // a drag along the video's seek bar is scrubbing, not a swipe
        lbTouchX = e.target === lbVideo ? null : e.changedTouches[0].clientX;
      },
      { passive: true }
    );

    lightbox.addEventListener(
      "touchend",
      function (e) {
        if (lbTouchX === null) {
          return;
        }

        var dx = e.changedTouches[0].clientX - lbTouchX;
        lbTouchX = null;

        if (Math.abs(dx) > 45) {
          lbStep(dx < 0 ? 1 : -1);
        }
      },
      { passive: true }
    );
  }
}

// Testimonials slider — PULSE Live Zone
// `rewind` rather than `loop`: looping clones the slides and reorders the DOM,
// which would break the nth-child accent colours on .voice-card.
if (document.querySelector(".swiper-voices")) {
  new Swiper(".swiper-voices", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 24,
    rewind: true,
    speed: 600,
    watchOverflow: true,
    autoHeight: false,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: ".voices-next",
      prevEl: ".voices-prev",
    },
    pagination: {
      el: ".voices-pagination",
      clickable: true,
    },
    breakpoints: {
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

// Feedback form — PULSE Live Zone
// Front-end only for now: there is no endpoint behind `action`, so this
// validates, then confirms. Remove the preventDefault once the form posts
// somewhere real.
var feedbackForm = document.querySelector(".feedback-form");

if (feedbackForm) {
  var fbStatus = feedbackForm.querySelector(".fb-status");
  var fbMessage = feedbackForm.querySelector("#fb-message");
  var fbEmail = feedbackForm.querySelector("#fb-email");

  function fbSetStatus(text, ok) {
    fbStatus.textContent = text;
    fbStatus.classList.toggle("is-ok", ok);
    fbStatus.classList.toggle("is-error", !ok);
    fbStatus.hidden = false;
  }

  function fbFlag(field, invalid) {
    field.closest(".fb-field").classList.toggle("is-invalid", invalid);
  }

  feedbackForm.addEventListener("submit", function (e) {
    e.preventDefault();
    feedbackForm.classList.add("was-validated");

    var emptyMessage = fbMessage.value.trim() === "";
    // an address is optional, but a typed one still has to be usable
    var badEmail = fbEmail.value.trim() !== "" && !fbEmail.checkValidity();

    fbFlag(fbMessage, emptyMessage);
    fbFlag(fbEmail, badEmail);

    if (emptyMessage || badEmail) {
      fbSetStatus(
        emptyMessage
          ? "Please write your message before sending."
          : "Please check the email address you have entered.",
        false
      );
      (emptyMessage ? fbMessage : fbEmail).focus();
      return;
    }

    fbSetStatus(
      "Thank you — your message has reached the PULSE team. We read every response.",
      true
    );

    feedbackForm.reset();
    feedbackForm.classList.remove("was-validated");
    feedbackForm
      .querySelectorAll(".fb-field.is-invalid")
      .forEach(function (field) {
        field.classList.remove("is-invalid");
      });
  });

  // clear a field's error state as soon as the parent starts fixing it, and
  // retire the message with it so a stale error is not left standing
  [fbMessage, fbEmail].forEach(function (field) {
    field.addEventListener("input", function () {
      fbFlag(field, false);

      if (fbStatus.classList.contains("is-error")) {
        fbStatus.hidden = true;
        fbStatus.textContent = "";
        fbStatus.classList.remove("is-error");
      }
    });
  });
}

// Listen buttons: one shared player, so starting a section stops the last one.
// Buttons without a data-audio file (pages still awaiting recordings) are inert.
var listenButtons = document.querySelectorAll(".listen-btn[data-audio]");

if (listenButtons.length) {
  var player = new Audio();
  var playingBtn = null;
  player.preload = "none";

  function clock(sec) {
    if (!isFinite(sec) || sec < 0) return "";
    var s = Math.floor(sec);
    return Math.floor(s / 60) + ":" + String(s % 60).padStart(2, "0");
  }

  // state: idle | loading | playing | paused
  var LISTEN_UI = {
    idle: ["bi-volume-up-fill", "Listen"],
    loading: ["bi-hourglass-split", "Loading"],
    playing: ["bi-pause-fill", "Pause"],
    paused: ["bi-play-fill", "Resume"],
  };

  function paintListen(btn, state) {
    btn.classList.toggle("is-playing", state === "playing");
    btn.classList.toggle("is-loading", state === "loading");
    btn.setAttribute("aria-pressed", state === "playing" || state === "loading");
    btn.querySelector(".listen-icon i").className = "bi " + LISTEN_UI[state][0];
    btn.querySelector(".listen-label").textContent = LISTEN_UI[state][1];
    if (state === "idle") btn.querySelector(".listen-time").textContent = "";
  }

  listenButtons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      if (playingBtn === btn && !player.paused) {
        player.pause();
        return;
      }
      if (playingBtn !== btn) {
        if (playingBtn) paintListen(playingBtn, "idle");
        playingBtn = btn;
        player.src = btn.dataset.audio;
      }
      paintListen(btn, "loading");
      player.play().catch(function () {
        paintListen(btn, "idle");
      });
    });
  });

  player.addEventListener("playing", function () {
    if (playingBtn) paintListen(playingBtn, "playing");
  });

  player.addEventListener("pause", function () {
    if (playingBtn && !player.ended) paintListen(playingBtn, "paused");
  });

  player.addEventListener("timeupdate", function () {
    if (!playingBtn) return;
    playingBtn.querySelector(".listen-time").textContent = clock(
      player.duration - player.currentTime
    );
  });

  player.addEventListener("ended", function () {
    if (playingBtn) paintListen(playingBtn, "idle");
    playingBtn = null;
  });
}
