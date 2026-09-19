<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);

    echo '<h1>Laravel Error</h1>';
    echo '<p><strong>Message:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><strong>File:</strong> ' . htmlspecialchars($e->getFile()) . '</p>';
    echo '<p><strong>Line:</strong> ' . $e->getLine() . '</p>';
}
