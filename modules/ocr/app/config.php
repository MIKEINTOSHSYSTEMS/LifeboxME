<?php

/**
 * OCR Application Configuration with Debugging
 */

class Config
{
    // File upload settings
    public const MAX_FILE_SIZE = 10 * 1024 * 1024; // 10MB
    public const ALLOWED_MIME_TYPES = [
        'image/jpeg',
        'image/jpg',
        'image/png'
    ];
    public const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png'];

    // Directory paths
    public const UPLOAD_TMP_DIR = __DIR__ . '/uploads/tmp/';
    public const UPLOAD_PROCESSED_DIR = __DIR__ . '/uploads/processed/';
    public const OUTPUT_DIR = __DIR__ . '/outputs/';

    // OCR settings
    public const DEFAULT_LANGUAGE = 'eng';
    public const SUPPORTED_LANGUAGES = ['eng', 'fra', 'spa', 'deu'];

    // Security
    public const ENCRYPTION_KEY = 'your-secure-key-here-change-in-production';

    // Cleanup settings (hours)
    public const TMP_FILE_MAX_AGE = 24;

    // Debug settings
    public const DEBUG_MODE = true;
    public const LOG_FILE = __DIR__ . '/logs/debug.log';

    // Performance settings
    public const OPTIMIZE_FOR_SPEED = true;
    public const MAX_PROCESSING_TIME = 300; // seconds

    public static function init(): void
    {
        // Set timezone to Addis Ababa
        date_default_timezone_set('Africa/Addis_Ababa');

        // Create directories if they don't exist
        $directories = [
            self::UPLOAD_TMP_DIR,
            self::UPLOAD_PROCESSED_DIR,
            self::OUTPUT_DIR,
            __DIR__ . '/logs/'
        ];

        foreach ($directories as $directory) {
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
        }

        // Set error reporting based on debug mode
        if (self::DEBUG_MODE) {
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            ini_set('log_errors', '1');
            ini_set('error_log', self::LOG_FILE);
        } else {
            error_reporting(E_ALL);
            ini_set('display_errors', '0');
            ini_set('log_errors', '1');
            ini_set('error_log', self::LOG_FILE);
        }

        // Performance optimizations
        if (self::OPTIMIZE_FOR_SPEED) {
            ini_set('max_execution_time', self::MAX_PROCESSING_TIME);
        }
    }

    public static function log(string $message, string $level = 'INFO'): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] [$level] $message\n";

        // Always log to file if debug mode is enabled
        if (self::DEBUG_MODE) {
            file_put_contents(self::LOG_FILE, $logMessage, FILE_APPEND | LOCK_EX);
        }

        // Also output to console if running in CLI
        if (php_sapi_name() === 'cli') {
            echo $logMessage;
        }
    }

    /*
    public static function log(string $message, string $level = 'INFO'): void
    {
        if (self::DEBUG_MODE) {
            $timestamp = date('Y-m-d H:i:s');
            $logMessage = "[$timestamp] [$level] $message\n";
            file_put_contents(self::LOG_FILE, $logMessage, FILE_APPEND | LOCK_EX);
        }
    }
    */

    public static function getBaseUrl(): string
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $script = $_SERVER['SCRIPT_NAME'];
        $basePath = dirname($script);

        // Ensure base path ends with slash
        if ($basePath !== '/') {
            $basePath .= '/';
        }

        return $protocol . '://' . $host . $basePath;
    }

    /**
     * Get all available fonts recursively
     */
    public static function getAvailableFonts(): array
    {
        $fonts = [];
        $fontFiles = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(__DIR__ . '/fonts/active')
        );

        foreach ($fontFiles as $file) {
            if ($file->isFile() && $file->getExtension() === 'ttf') {
                $fonts[] = $file->getPathname();
            }
        }

        // Sort fonts for consistent ordering
        sort($fonts);
        return $fonts;
    }

    /**
     * Get font display name from path
     */
    public static function getFontDisplayName(string $fontPath): string
    {
        $filename = basename($fontPath, '.ttf');
        // Convert filename to readable format
        $name = str_replace(['-', '_'], ' ', $filename);
        return ucwords($name);
    }
}

// Initialize configuration
Config::init();
