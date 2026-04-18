<?php

$publicDir = __DIR__;
$uriPath = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');
$requestedPath = realpath($publicDir . $uriPath);
$publicRealPath = realpath($publicDir);

if ($uriPath !== '/' && $requestedPath && is_file($requestedPath) && strpos($requestedPath, $publicRealPath) === 0) {
    return false;
}

require_once $publicDir . '/index.php';