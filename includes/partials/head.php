<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="<?= e($page['description']) ?>" />
    <meta name="author" content="" />
    <title><?= e($page['title']) ?></title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <link rel="apple-touch-icon" href="assets/images/favicon.png" />

    <!-- Bootstrap Icon -->
    <link href="assets/css/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/swiper-bundle.css" rel="stylesheet" />
    <link href="assets/css/aos.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= asset('assets/css/style.css') ?>" rel="stylesheet" />
<?php if ($page['inauguration']): ?>

    <!-- Inauguration curtain: show it unless this session has already seen it
         (?launch=1 replays it). Runs before first paint so it never flashes. -->
    <script>
      try {
        if (/[?&]launch=1(&|$)/.test(location.search) || !sessionStorage.getItem("pulse-launched")) {
          document.documentElement.classList.add("is-launching");
        }
      } catch (e) {
        document.documentElement.classList.add("is-launching");
      }
    </script>
<?php endif; ?>
  </head>
