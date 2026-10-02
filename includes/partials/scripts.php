    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper slider -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Smooth Scroll -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.39/dist/lenis.min.js"></script>
    <!-- Custom scroll -->
    <script src="assets/js/aos.js"></script>
    <!-- Custom JS -->
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    <script>
      // AOS animation — on a launch visit, wait for the curtain to lift so the
      // first screen animates in front of the visitor, not behind the curtain.
      if (document.documentElement.classList.contains("is-launching")) {
        document.addEventListener("pulse:launched", function () {
          AOS.init();
        });
      } else {
        AOS.init();
      }
    </script>
