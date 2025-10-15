<?php

/**
 * Security utilities for OCR application
 */

class Security
{
    /**
     * Sanitize filename
     */
    public static function sanitizeFilename(string $filename): string
    {
        // Remove path traversal characters
        $filename = basename($filename);

        // Replace spaces and special characters
        $filename = preg_replace('/[^a-zA-Z0-9\._-]/', '_', $filename);

        // Limit length
        if (strlen($filename) > 255) {
            $filename = substr($filename, 0, 255);
        }

        return $filename;
    }

    /**
     * Validate file type
     */
    public static function validateFileType(string $filePath): bool
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $filePath);
        finfo_close($finfo);

        return in_array($mimeType, Config::ALLOWED_MIME_TYPES);
    }

    /**
     * Validate file extension
     */
    public static function validateFileExtension(string $filename): bool
    {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        return in_array($extension, Config::ALLOWED_EXTENSIONS);
    }

    /**
     * Generate secure random filename
     */
    public static function generateRandomFilename(string $extension): string
    {
        $randomBytes = random_bytes(16);
        return bin2hex($randomBytes) . '.' . $extension;
    }

    /**
     * Prevent path traversal
     */
    public static function securePath(string $path): string
    {
        $path = realpath($path);
        $basePath = realpath(__DIR__ . '/../');

        if (strpos($path, $basePath) !== 0) {
            throw new Exception('Invalid path detected');
        }

        return $path;
    }

    /**
     * Clean user input
     */
    public static function cleanInput(string $input): string
    {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
}
