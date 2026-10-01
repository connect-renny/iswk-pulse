    <!-- ═══ Lightbox ═══ -->
    <div
      class="lightbox"
      id="galleryLightbox"
      role="dialog"
      aria-modal="true"
      aria-label="Gallery viewer"
      hidden
    >
      <div class="lightbox-backdrop" data-lightbox-close></div>

      <button
        type="button"
        class="lightbox-btn lightbox-close"
        data-lightbox-close
        aria-label="Close the viewer"
      >
        <i class="bi bi-x-lg" aria-hidden="true"></i>
      </button>

      <button
        type="button"
        class="lightbox-btn lightbox-nav lightbox-prev"
        data-lightbox-prev
        aria-label="Previous"
      >
        <i class="bi bi-chevron-left" aria-hidden="true"></i>
      </button>

      <button
        type="button"
        class="lightbox-btn lightbox-nav lightbox-next"
        data-lightbox-next
        aria-label="Next"
      >
        <i class="bi bi-chevron-right" aria-hidden="true"></i>
      </button>

      <figure class="lightbox-figure">
        <img class="lightbox-img" src="" alt="" />
        <video
          class="lightbox-img lightbox-video"
          controls
          playsinline
          preload="none"
          hidden
        ></video>
        <figcaption class="lightbox-caption">
          <span class="lightbox-tag"></span>
          <span class="lightbox-title"></span>
          <span class="lightbox-count" aria-live="polite"></span>
        </figcaption>
      </figure>
    </div>
