<?php

/**
 * Autoloader for OCR Application
 */

spl_autoload_register(function (string $class): void {
    $file = __DIR__ . '/src/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Include configuration
require_once __DIR__ . '/config.php';
