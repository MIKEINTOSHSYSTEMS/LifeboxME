<?php

/**
 * Main OCR processing class with enhanced debugging
 */

class OCRProcessor
{
    private FileUploader $uploader;
    private Security $security;

    public function __construct()
    {
        $this->uploader = new FileUploader();
        $this->security = new Security();
    }

    /**
     * Process image with OCR
     */
    public function processImage(string $imagePath, string $language = 'eng'): array
    {
        $startTime = microtime(true);

        Config::log("OCRProcessor: Starting image processing");
        Config::log("OCRProcessor: Image path: " . $imagePath);
        Config::log("OCRProcessor: Language: " . $language);

        // Validate input
        if (!file_exists($imagePath)) {
            Config::log("OCRProcessor: Image file not found: " . $imagePath, 'ERROR');
            throw new Exception('Image file not found: ' . $imagePath);
        }

        if (!in_array($language, Config::SUPPORTED_LANGUAGES)) {
            Config::log("OCRProcessor: Unsupported language, using default", 'WARNING');
            $language = Config::DEFAULT_LANGUAGE;
        }

        try {
            Config::log("OCRProcessor: Starting image preprocessing");

            // Preprocess image
            $processedImage = $this->preprocessImage($imagePath);
            Config::log("OCRProcessor: Image preprocessing completed");

            // Perform OCR using the existing OCR class
            Config::log("OCRProcessor: Starting OCR analysis");
            $ocr = new OCR();
            $result = $ocr->read_by_font($processedImage, $this->getFontForLanguage($language));

            $processingTime = microtime(true) - $startTime;

            // Ensure text is a string, not an array
            $extractedText = is_array($result['autocorrected']) ? implode("\n", $result['autocorrected']) : ($result['autocorrected'] ?? '');
            $extractedText = is_array($result['output']) ? implode("\n", $result['output']) : ($extractedText ?? '');

            Config::log("OCRProcessor: OCR completed in " . round($processingTime, 2) . " seconds");
            Config::log("OCRProcessor: Confidence score: " . ($result['score'] ?? 0));
            Config::log("OCRProcessor: Extracted text length: " . strlen($extractedText));
            Config::log("OCRProcessor: Extracted text preview: " . substr($extractedText, 0, 100) . (strlen($extractedText) > 100 ? '...' : ''));

            if (empty(trim($extractedText))) {
                Config::log("OCRProcessor: WARNING - No text extracted from image", 'WARNING');
            }

            return [
                'text' => $extractedText,
                'confidence' => $result['score'] ?? 0,
                'processing_time' => $processingTime,
                'original_path' => $imagePath,
                'processed_path' => $processedImage,
                'debug_info' => [
                    'language_used' => $language,
                    'font_used' => $this->getFontForLanguage($language),
                    'file_size' => filesize($imagePath),
                    'extracted_length' => strlen($extractedText),
                    'line_count' => $result['line_count'] ?? 0,
                    'letter_count' => $result['letter_count'] ?? 0
                ]
            ];
        } catch (Exception $e) {
            Config::log("OCRProcessor: Error during processing: " . $e->getMessage(), 'ERROR');
            throw new Exception('OCR processing failed: ' . $e->getMessage());
        }
    }

    /**
     * Preprocess image for better OCR results
     */
    private function preprocessImage(string $imagePath): string
    {
        Config::log("OCRProcessor: Preprocessing image: " . $imagePath);

        $image = imagecreatefromstring(file_get_contents($imagePath));
        if ($image === false) {
            throw new Exception('Failed to load image');
        }

        // Get original dimensions
        $width = imagesx($image);
        $height = imagesy($image);
        Config::log("OCRProcessor: Original image dimensions: {$width}x{$height}");

        // Convert to grayscale if needed
        if (imageistruecolor($image)) {
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            Config::log("OCRProcessor: Converted to grayscale");
        }

        // Enhance contrast
        imagefilter($image, IMG_FILTER_CONTRAST, -30);
        imagefilter($image, IMG_FILTER_BRIGHTNESS, 10);
        Config::log("OCRProcessor: Enhanced contrast and brightness");

        // Save processed image
        $filename = pathinfo($imagePath, PATHINFO_FILENAME);
        $processedPath = Config::UPLOAD_PROCESSED_DIR . $filename . '_processed.png';

        if (!imagepng($image, $processedPath)) {
            imagedestroy($image);
            throw new Exception('Failed to save processed image');
        }

        imagedestroy($image);
        Config::log("OCRProcessor: Processed image saved: " . $processedPath);

        return $processedPath;
    }

    /**
     * Get appropriate font for language
     */
    private function getFontForLanguage(string $language): string
    {
        $fontMap = [
            'eng' => 'fonts/Ubuntu-Regular.ttf',
            'fra' => 'fonts/Ubuntu-Regular.ttf',
            'spa' => 'fonts/Ubuntu-Regular.ttf',
            'deu' => 'fonts/Ubuntu-Regular.ttf'
        ];

        $font = $fontMap[$language] ?? $fontMap['eng'];
        Config::log("OCRProcessor: Selected font: " . $font);

        return $font;
    }

    /**
     * Get available languages
     */
    public function getSupportedLanguages(): array
    {
        return Config::SUPPORTED_LANGUAGES;
    }

    /**
     * Validate if OCR requirements are met
     */
    public function checkRequirements(): array
    {
        $requirements = [];

        // Check GD extension
        $requirements['gd'] = [
            'status' => extension_loaded('gd'),
            'message' => 'GD extension is required for image processing'
        ];

        // Check file permissions
        $directories = [
            Config::UPLOAD_TMP_DIR,
            Config::UPLOAD_PROCESSED_DIR,
            Config::OUTPUT_DIR
        ];

        foreach ($directories as $dir) {
            $requirements['directory_' . basename($dir)] = [
                'status' => is_writable($dir),
                'message' => "Directory $dir must be writable"
            ];
        }

        return $requirements;
    }
}
