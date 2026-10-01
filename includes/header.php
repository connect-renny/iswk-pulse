<?php
/**
 * Common page opening: <head>, preloader, icon sprite, site header.
 *
 * Expects $page to be set by the including page:
 *   title       string  Document title (plain text).        Default DEFAULT_TITLE
 *   description string  Meta description (plain text).      Default DEFAULT_DESCRIPTION
 *   nav         string  Key in $NAV_ITEMS to mark active.   Optional
 *   preloader   bool    Show the logo preloader overlay.    Default false
 *   sprite      string  File in includes/sprites/ (no ext). Optional
 */

$page = array_merge([
    'title'       => DEFAULT_TITLE,
    'description' => DEFAULT_DESCRIPTION,
    'nav'         => null,
    'preloader'   => false,
    'sprite'      => null,
], $page ?? []);

require INCLUDES_PATH . '/partials/head.php';
?>
  <body>
<?php
if ($page['preloader']) {
    require INCLUDES_PATH . '/partials/preloader.php';
}
if ($page['sprite']) {
    require INCLUDES_PATH . '/sprites/' . $page['sprite'] . '.php';
}
require INCLUDES_PATH . '/partials/site-header.php';
