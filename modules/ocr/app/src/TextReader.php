<?php

/**
 * Text reading and segmentation utilities
 */

class TextReader
{
    private int $color_accuracy = 80;
    private int $min_line_height = 5;
    private int $min_letter_width = 2;

    public function get_lines(GdImage $image): array
    {
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width === false || $height === false) {
            throw new RuntimeException("Failed to get image dimensions");
        }

        $line_start = null;
        $line_end = null;
        $lines = [];

        for ($y = 0; $y < $height; $y++) {
            $has_text = false;

            for ($x = 0; $x < $width; $x++) {
                try {
                    $color = Image::get_color($image, $x, $y);
                    if ($color <= $this->color_accuracy) {
                        $has_text = true;
                        break;
                    }
                } catch (Exception $e) {
                    continue;
                }
            }

            if ($has_text) {
                if ($line_start === null) {
                    $line_start = $y;
                }
            } else {
                if ($line_start !== null) {
                    $line_end = $y;

                    // Only add line if it has sufficient height
                    $line_height = $line_end - $line_start;
                    if ($line_height >= $this->min_line_height) {
                        $lines[] = [
                            "start" => $line_start,
                            "end" => $line_end,
                            "height" => $line_height
                        ];
                    }

                    $line_start = null;
                }
            }
        }

        // Handle last line if image ends with text
        if ($line_start !== null) {
            $line_end = $height;
            $line_height = $line_end - $line_start;

            if ($line_height >= $this->min_line_height) {
                $lines[] = [
                    "start" => $line_start,
                    "end" => $line_end,
                    "height" => $line_height
                ];
            }
        }

        return $lines;
    }

    public function get_letters(GdImage $image): array
    {
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width === false || $height === false) {
            throw new RuntimeException("Failed to get image dimensions");
        }

        $letter_start = null;
        $letter_end = null;
        $letters = [];

        for ($x = 0; $x < $width; $x++) {
            $has_text = false;

            for ($y = 0; $y < $height; $y++) {
                try {
                    $color = Image::get_color($image, $x, $y);
                    if ($color <= $this->color_accuracy) {
                        $has_text = true;
                        break;
                    }
                } catch (Exception $e) {
                    continue;
                }
            }

            if ($has_text) {
                if ($letter_start === null) {
                    $letter_start = $x;
                }
            } else {
                if ($letter_start !== null) {
                    $letter_end = $x;
                    $letter_width = $letter_end - $letter_start;

                    // Only add letter if it has sufficient width
                    if ($letter_width >= $this->min_letter_width) {
                        $letters[] = [
                            "start" => $letter_start,
                            "end" => $letter_end,
                            "width" => $letter_width
                        ];
                    }

                    $letter_start = null;
                }
            }
        }

        // Handle last letter if line ends with text
        if ($letter_start !== null) {
            $letter_end = $width;
            $letter_width = $letter_end - $letter_start;

            if ($letter_width >= $this->min_letter_width) {
                $letters[] = [
                    "start" => $letter_start,
                    "end" => $letter_end,
                    "width" => $letter_width
                ];
            }
        }

        return $letters;
    }

    /**
     * Extract line images from text image
     */
    public function lines_to_images(GdImage $image): array
    {
        $lines = $this->get_lines($image);
        $width = imagesx($image);

        if ($width === false) {
            throw new RuntimeException("Failed to get image width");
        }

        $line_images = [];

        foreach ($lines as $line_data) {
            $height = $line_data['end'] - $line_data['start'];

            $line_image = imagecrop($image, [
                "x" => 0,
                "y" => $line_data['start'],
                "width" => $width,
                "height" => $height
            ]);

            if ($line_image !== false) {
                $line_images[] = $line_image;
            }
        }

        return $line_images;
    }

    /**
     * Extract letter images from line image
     */
    public function line_to_letters(GdImage $image): array
    {
        $letters = $this->get_letters($image);
        $height = imagesy($image);

        if ($height === false) {
            throw new RuntimeException("Failed to get image height");
        }

        $letter_images = [];

        foreach ($letters as $i => $letter_data) {
            $width = $letter_data['end'] - $letter_data['start'];

            // Calculate space between letters
            $previous = $letters[$i - 1] ?? null;
            if ($previous) {
                $space = $letter_data['start'] - $previous['end'];
            } else {
                $space = 0;
            }

            // Determine if this is a word space
            if ($space > $height / 3.5) {
                $space = " ";
            } else {
                $space = "";
            }

            $too_wide = $height * 1.3;

            // Handle wide characters (likely multiple letters)
            if ($width > $too_wide) {
                // Split wide character into multiple parts
                $part_count = ceil($width / $too_wide);
                $part_width = (int)($width / $part_count);

                for ($part = 0; $part < $part_count; $part++) {
                    $part_start = $letter_data['start'] + ($part * $part_width);
                    $part_end = min($part_start + $part_width, $letter_data['end']);
                    $actual_width = $part_end - $part_start;

                    $letter_image = imagecrop($image, [
                        "x" => $part_start,
                        "y" => 0,
                        "width" => $actual_width,
                        "height" => $height
                    ]);

                    if ($letter_image !== false) {
                        $letter_images[] = [
                            "image" => $letter_image,
                            "space" => $part === 0 ? $space : ""
                        ];
                    }
                }
            } else {
                // Normal letter
                $letter_image = imagecrop($image, [
                    "x" => $letter_data['start'],
                    "y" => 0,
                    "width" => $width,
                    "height" => $height
                ]);

                if ($letter_image !== false) {
                    $letter_images[] = [
                        "image" => $letter_image,
                        "space" => $space
                    ];
                }
            }
        }

        return $letter_images;
    }

    /**
     * Set color accuracy threshold
     */
    public function set_color_accuracy(int $accuracy): void
    {
        $this->color_accuracy = max(0, min(255, $accuracy));
    }

    /**
     * Set minimum dimensions for line/letter detection
     */
    public function set_min_dimensions(int $line_height, int $letter_width): void
    {
        $this->min_line_height = max(1, $line_height);
        $this->min_letter_width = max(1, $letter_width);
    }

    /**
     * Get segmentation statistics
     */
    public function get_segmentation_stats(GdImage $image): array
    {
        $lines = $this->get_lines($image);
        $total_letters = 0;

        foreach ($lines as $line) {
            $line_image = imagecrop($image, [
                "x" => 0,
                "y" => $line['start'],
                "width" => imagesx($image),
                "height" => $line['height']
            ]);

            if ($line_image !== false) {
                $letters = $this->get_letters($line_image);
                $total_letters += count($letters);
                imagedestroy($line_image);
            }
        }

        return [
            'line_count' => count($lines),
            'total_letters' => $total_letters,
            'avg_letters_per_line' => count($lines) > 0 ? $total_letters / count($lines) : 0
        ];
    }
}
