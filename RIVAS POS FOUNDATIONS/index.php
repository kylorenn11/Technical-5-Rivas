<?php

// InfinityFree places uploaded files in htdocs. This root front controller
// uses the real Laravel entry point when Composer dependencies are present.
// If Composer cannot be run on the host, it uses the included static fallback
// so the activity pages remain immediately viewable after upload.

if (is_file(__DIR__ . '/vendor/autoload.php') && is_file(__DIR__ . '/bootstrap/app.php')) {
    require __DIR__ . '/public/index.php';
    exit;
}

require __DIR__ . '/public/infinityfree_fallback.php';
