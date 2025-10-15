<?php

/**
 * Generates character images for OCR reference
 */

class CharacterImageGenerator
{
    public function generate(string $letter, string $font_filename, int $size = LetterData::ACCURACY): GdImage
    {
        // Validate inputs
        if (!file_exists($font_filename)) {
            throw new InvalidArgumentException("Font file not found: $font_filename");
        }

        if ($size <= 0) {
            throw new InvalidArgumentException("Size must be positive");
        }

        // Initialize image with error handling
        $im = imagecreatetruecolor($size * 3, $size * 3);
        if ($im === false) {
            throw new RuntimeException("Failed to create image");
        }

        // Initialize colors
        $white = imagecolorallocate($im, 255, 255, 255);
        $black = imagecolorallocate($im, 0, 0, 0);

        if ($white === false || $black === false) {
            imagedestroy($im);
            throw new RuntimeException("Failed to allocate colors");
        }

        imagefilledrectangle($im, 0, 0, $size * 3, $size * 3, $white);

        // Calculate text position for better centering
        $bbox = imagettfbbox($size - 1, 0, $font_filename, $letter);
        if ($bbox === false) {
            imagedestroy($im);
            throw new RuntimeException("Failed to calculate text bounds");
        }

        $text_width = $bbox[2] - $bbox[0];
        $text_height = $bbox[1] - $bbox[7];

        $x = ($size * 3 - $text_width) / 2;
        $y = ($size * 3 + $text_height) / 2;

        // Add letter to image
        $result = imagettftext($im, $size - 1, 0, (int)$x, (int)$y, $black, $font_filename, $letter);
        if ($result === false) {
            imagedestroy($im);
            throw new RuntimeException("Failed to render text");
        }

        // Apply filters
        imagefilter($im, IMG_FILTER_GRAYSCALE);
        imagefilter($im, IMG_FILTER_CONTRAST, -100);

        // Trim and return
        $trimmed = Image::trim($im);
        imagedestroy($im);

        return $trimmed;
    }

    /**
     * Generate multiple characters at once
     */
    public function generateMultiple(array $characters, string $font_filename, int $size = LetterData::ACCURACY): array
    {
        $results = [];

        foreach ($characters as $char) {
            try {
                $results[$char] = $this->generate($char, $font_filename, $size);
            } catch (Exception $e) {
                // Log error but continue with other characters
                error_log("Failed to generate character '$char': " . $e->getMessage());
                continue;
            }
        }

        return $results;
    }
}
