<?php

/**
 * Handles file uploads and camera image processing
 */

class FileUploader
{
    private Security $security;

    public function __construct()
    {
        $this->security = new Security();
    }

    /**
     * Process uploaded file
     */
    public function processUpload(array $file): ?string
    {
        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception($this->getUploadError($file['error']));
        }

        // Validate file size
        if ($file['size'] > Config::MAX_FILE_SIZE) {
            throw new Exception('File size exceeds maximum allowed limit of 10MB');
        }

        // Validate file extension
        if (!$this->security->validateFileExtension($file['name'])) {
            throw new Exception('Invalid file type. Only JPG, JPEG, and PNG files are allowed.');
        }

        // Generate secure filename
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $filename = $this->security->generateRandomFilename($extension);
        $destination = Config::UPLOAD_TMP_DIR . $filename;

        // Move uploaded file
        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            throw new Exception('Failed to save uploaded file');
        }

        // Validate file type using MIME
        if (!$this->security->validateFileType($destination)) {
            unlink($destination);
            throw new Exception('Invalid file content detected');
        }

        return $destination;
    }

    /**
     * Process camera image data
     */
    public function processCameraImage(string $imageData): ?string
    {
        // Remove data URL prefix
        if (strpos($imageData, 'data:image') === 0) {
            $parts = explode(',', $imageData);
            $imageData = $parts[1];
        }

        // Decode base64 data
        $decodedData = base64_decode($imageData);
        if ($decodedData === false) {
            throw new Exception('Invalid image data');
        }

        // Validate image data
        $image = imagecreatefromstring($decodedData);
        if ($image === false) {
            throw new Exception('Invalid image format');
        }

        // Generate filename and save
        $filename = $this->security->generateRandomFilename('png');
        $destination = Config::UPLOAD_TMP_DIR . $filename;

        if (!imagepng($image, $destination)) {
            imagedestroy($image);
            throw new Exception('Failed to save camera image');
        }

        imagedestroy($image);
        return $destination;
    }

    /**
     * Get upload error message
     */
    private function getUploadError(int $errorCode): string
    {
        return match ($errorCode) {
            UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded',
            UPLOAD_ERR_NO_FILE => 'No file was uploaded',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
            UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload',
            default => 'Unknown upload error',
        };
    }

    /**
     * Clean up temporary files
     */
    public function cleanupOldFiles(int $maxAgeHours = 24): int
    {
        $cleaned = 0;
        $maxAge = $maxAgeHours * 3600;

        $directories = [
            Config::UPLOAD_TMP_DIR,
            Config::UPLOAD_PROCESSED_DIR,
            Config::OUTPUT_DIR
        ];

        foreach ($directories as $directory) {
            if (!is_dir($directory)) continue;

            $files = glob($directory . '*');
            foreach ($files as $file) {
                if (is_file($file) && (time() - filemtime($file)) > $maxAge) {
                    if (unlink($file)) {
                        $cleaned++;
                    }
                }
            }
        }

        return $cleaned;
    }
}
