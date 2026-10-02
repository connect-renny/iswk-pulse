<?php
/**
 * Common page opening: <head>, inauguration curtain, icon sprite, site header.
 *
 * Expects $page to be set by the including page:
 *   title        string  Document title (plain text).        Default DEFAULT_TITLE
 *   description  string  Meta description (plain text).      Default DEFAULT_DESCRIPTION
 *   nav          string  Key in $NAV_ITEMS to mark active.   Optional
 *   inauguration bool    Show the launch curtain, once per   Default false
 *                        session (INAUGURATION_ENABLED in
 *                        config.php switches it off site-wide).
 *   sprite       string  File in includes/sprites/ (no ext). Optional
 */

$page = array_merge([
    'title'        => DEFAULT_TITLE,
    'description'  => DEFAULT_DESCRIPTION,
    'nav'          => null,
    'inauguration' => false,
    'sprite'       => null,
], $page ?? []);

$page['inauguration'] = INAUGURATION_ENABLED && $page['inauguration'];

require INCLUDES_PATH . '/partials/head.php';
?>
  <body>
<?php
if ($page['inauguration']) {
    require INCLUDES_PATH . '/partials/inauguration.php';
}
if ($page['sprite']) {
    require INCLUDES_PATH . '/sprites/' . $page['sprite'] . '.php';
}
require INCLUDES_PATH . '/partials/site-header.php';
