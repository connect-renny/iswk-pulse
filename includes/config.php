<?php
/**
 * Site-wide settings shared by every page.
 */

const SITE_NAME = 'PULSE';

// Cache-busting versions — bump when the compiled CSS / main.js change.
const CSS_VERSION = '20260929d';
const JS_VERSION  = '20260929';

const DEFAULT_TITLE       = 'PULSE — Together, We Shape Tomorrow';
const DEFAULT_DESCRIPTION = 'PULSE — Parenting Updates, Learning, Support & Engagement. Together, we shape tomorrow.';

/**
 * Primary navigation, in display order.
 * Keys are the page slugs a page sets as $page['nav'] to mark its item active.
 * Labels are trusted HTML (they carry the <br /> line breaks).
 */
$NAV_ITEMS = [
    'our-parenting-journey' => [
        'href'  => 'our-parenting-journey.php',
        'icon'  => 'nav-icon-01.png',
        'label' => 'Our Parenting <br />Journey',
    ],
    'parenting-across-every-stage' => [
        'href'  => 'parenting-across-every-stage.php',
        'icon'  => 'nav-icon-02.png',
        'label' => 'Parenting <br />Across Every Stage',
    ],
    'enrichment-resources' => [
        'href'  => 'enrichment-resources.php',
        'icon'  => 'nav-icon-03.png',
        'label' => 'Enrichment &amp; <br />Resources',
    ],
    'parent-volunteer-programme' => [
        'href'  => 'parent-volunteer-programme.php',
        'icon'  => 'nav-icon-04.png',
        'label' => 'Parent Volunteer <br />Programme',
    ],
    'pulse-live-zone' => [
        'href'  => 'pulse-live-zone.php',
        'icon'  => 'nav-icon-05.png',
        'label' => 'Pulse <br />Live ZOne',
    ],
];
