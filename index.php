<?php

/**
 * Redirect to public/index.php
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// If the path is the root or points to this file, redirect to public/index.php
if ($uri === '/' || $uri === '/index.php') {
    $_SERVER['SCRIPT_NAME'] = '/public/index.php';
    require_once __DIR__.'/public/index.php';
} else {
    // Otherwise, redirect to the public folder with the same URI
    header('Location: /public'.$uri);
    exit;
} 