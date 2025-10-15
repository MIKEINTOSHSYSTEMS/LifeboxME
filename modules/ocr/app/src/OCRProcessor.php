<?php

/**
 * Main OCR processing class with enhanced debugging and multi-font support
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
     * Process image with OCR using multiple fonts
     */
    public function processImage(string $imagePath, string $language = 'eng', bool $optimizeSpeed = true): array
    {
        $startTime = microtime(true);

        Config::log("OCRProcessor: Starting image processing");
        Config::log("OCRProcessor: Image path: " . $imagePath);
        Config::log("OCRProcessor: Language: " . $language);
        Config::log("OCRProcessor: Optimize for speed: " . ($optimizeSpeed ? 'Yes' : 'No'));

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

            // Perform OCR using the existing OCR class with all available fonts
            Config::log("OCRProcessor: Starting OCR analysis with multiple fonts");
            $ocr = new OCR($optimizeSpeed);

            // Get the best result from all available fonts
            $result = $ocr->read($processedImage);

            $processingTime = microtime(true) - $startTime;

            // Ensure text is a string, not an array
            $extractedText = is_array($result['text']) ? implode("\n", $result['text']) : ($result['text'] ?? '');
            $extractedText = $extractedText ?: '';

            Config::log("OCRProcessor: OCR completed in " . round($processingTime, 2) . " seconds");
            Config::log("OCRProcessor: Confidence score: " . ($result['score'] ?? 0));
            Config::log("OCRProcessor: Best font: " . ($result['font'] ?? 'Unknown'));
            Config::log("OCRProcessor: Fonts processed: " . ($result['fonts_processed'] ?? 0));
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
                'best_font' => $result['font'] ?? null,
                'fonts_processed' => $result['fonts_processed'] ?? 0,
                'debug_info' => [
                    'language_used' => $language,
                    'best_font_used' => $result['font'] ?? 'Unknown',
                    'font_path_used' => $result['font_path'] ?? null,
                    'file_size' => filesize($imagePath),
                    'extracted_length' => strlen($extractedText),
                    'fonts_processed_count' => $result['fonts_processed'] ?? 0,
                    'optimize_speed' => $optimizeSpeed
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
     * Get appropriate fonts for language (now returns multiple fonts)
     */
    private function getFontsForLanguage(string $language): array
    {
        $allFonts = Config::getAvailableFonts();
        Config::log("OCRProcessor: Found " . count($allFonts) . " total fonts");

        // Filter fonts by language characteristics if needed
        // For now, return all available fonts
        $selectedFonts = $allFonts;

        // Log the fonts being used
        foreach ($selectedFonts as $font) {
            Config::log("OCRProcessor: Available font: " . Config::getFontDisplayName($font));
        }

        return $selectedFonts;
    }

    /**
     * Get available languages
     */
    public function getSupportedLanguages(): array
    {
        return Config::SUPPORTED_LANGUAGES;
    }

    /**
     * Get available fonts information for display
     */
    public function getAvailableFontsInfo(): array
    {
        $fonts = Config::getAvailableFonts();
        $fontInfo = [];

        foreach ($fonts as $fontPath) {
            $fontInfo[] = [
                'path' => $fontPath,
                'name' => Config::getFontDisplayName($fontPath),
                'size' => filesize($fontPath)
            ];
        }

        return $fontInfo;
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

        // Check if we have fonts
        $fonts = Config::getAvailableFonts();
        $requirements['fonts'] = [
            'status' => !empty($fonts),
            'message' => count($fonts) . " fonts found in fonts directory"
        ];

        return $requirements;
    }

    /**
     * Estimate processing time based on file size and number of fonts
     */
    public function estimateProcessingTime(int $fileSize, bool $optimizeSpeed = true): string
    {
        // Base time + time per MB
        $baseTime = 29.3; // seconds
        $timePerMB = 47.9; // seconds per MB

        // Adjust based on number of fonts (fewer fonts = faster)
        $totalFonts = count(Config::getAvailableFonts());
        $fontsFactor = $optimizeSpeed ? min(1, $totalFonts) : $totalFonts; // Limit to 5 fonts in speed mode
        $timePerFont = 0.5; // seconds per font

        $sizeInMB = $fileSize / (1024 * 1024);
        $estimatedSeconds = $baseTime + ($sizeInMB * $timePerMB) + ($fontsFactor * $timePerFont);

        // Cap at reasonable maximum
        $estimatedSeconds = min($estimatedSeconds, $optimizeSpeed ? 30 : 60);

        return number_format($estimatedSeconds, 1);
    }

    /**
     * Test individual fonts to see which works best for a specific image
     */
    public function testFonts(string $imagePath, int $maxFonts = 10): array
    {
        Config::log("OCRProcessor: Testing fonts for image: " . $imagePath);

        $fonts = Config::getAvailableFonts();
        $results = [];
        $tested = 0;

        foreach ($fonts as $fontPath) {
            if ($tested >= $maxFonts) {
                break;
            }

            try {
                Config::log("OCRProcessor: Testing font: " . Config::getFontDisplayName($fontPath));

                $ocr = new OCR(false); // Don't optimize for individual font testing
                $startTime = microtime(true);

                $result = $ocr->read_by_font($imagePath, $fontPath);
                $processingTime = microtime(true) - $startTime;

                $results[] = [
                    'font' => Config::getFontDisplayName($fontPath),
                    'font_path' => $fontPath,
                    'score' => $result['score'],
                    'processing_time' => $processingTime,
                    'text_length' => strlen($result['autocorrected'] ?? ''),
                    'confidence' => $result['score'] > 80 ? 'high' : ($result['score'] > 60 ? 'medium' : 'low')
                ];

                Config::log("OCRProcessor: Font " . Config::getFontDisplayName($fontPath) . " score: " . $result['score']);

                $tested++;
            } catch (Exception $e) {
                Config::log("OCRProcessor: Failed to test font " . Config::getFontDisplayName($fontPath) . ": " . $e->getMessage(), 'WARNING');
                continue;
            }
        }

        // Sort by score descending
        usort($results, function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        return $results;
    }
}
