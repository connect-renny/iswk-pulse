<?php
/**
 * Small template helpers used by the partials and components.
 */

/** Escape a value for HTML text or attribute output. */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Asset URL with a cache-busting version taken from the file's modified
 * time, so browsers pick up a rebuilt style.css / edited main.js on their own.
 *
 *   asset('assets/css/style.css')  →  assets/css/style.css?v=1759316400
 */
function asset(string $path): string
{
    $mtime = @filemtime(dirname(INCLUDES_PATH) . '/' . $path);
    return $mtime ? $path . '?v=' . $mtime : $path;
}

/** Basename of the script being served, e.g. "gallery.php". */
function current_script(): string
{
    return basename($_SERVER['SCRIPT_NAME'] ?? $_SERVER['PHP_SELF'] ?? '');
}

/**
 * Render a reusable component from includes/components/.
 *
 *   component('hero', ['slides' => [['src' => '…', 'alt' => '…']]]);
 *
 * Each key in $props becomes a local variable inside the component file.
 */
function component(string $name, array $props = []): void
{
    $file = INCLUDES_PATH . '/components/' . $name . '.php';
    if (!is_file($file)) {
        throw new RuntimeException("Unknown component: {$name}");
    }
    (static function (string $__file, array $__props): void {
        extract($__props, EXTR_SKIP);
        require $__file;
    })($file, $props);
}
