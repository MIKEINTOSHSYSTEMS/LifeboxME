<?php

/**
 * Letter data analysis for OCR comparison
 */

class LetterData
{
    public const ACCURACY = 40;
    public const COLOR_ACCURACY = 80;
    private array $data;
    private static array $reference_data = [];
    private GdImage $image;

    public function __construct(GdImage $image, bool $filter = true)
    {
        if ($filter) {
            $image = Image::trim($image);
            $image = Image::resize(
                image: $image,
                width: self::ACCURACY,
            );
        }

        $this->image = $image;
        $this->data = [];

        $width = imagesx($image);
        $height = imagesy($image);

        // Validate image dimensions
        if ($width === false || $height === false) {
            throw new RuntimeException("Failed to get image dimensions");
        }

        // Extract pixel data
        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                try {
                    $colors = imagecolorat($image, $x, $y);
                    $color = ($colors >> 16) & 0xFF;
                    $this->data[] = $color;
                } catch (Exception $e) {
                    // Default to white for invalid pixels
                    $this->data[] = 255;
                }
            }
        }
    }

    public function compare(LetterData $letter): float
    {
        $this_data = $this->data;
        $this_image = $this->get_image();

        $this_height = imagesy($this_image);
        $that_height = imagesy($letter->get_image());

        if ($this_height === false || $that_height === false) {
            throw new RuntimeException("Failed to get image height for comparison");
        }

        $height_diff = abs($this_height - $that_height);
        $diff_percent = $this_height > 0 ? $height_diff / $this_height : 1;

        // Resize if heights are similar enough
        if ($diff_percent <= 0.2) {
            $target_width = imagesx($letter->get_image());
            if ($target_width !== false && $that_height !== false) {
                $this_image = Image::resize(
                    image: $this->get_image(),
                    width: $target_width,
                    height: $that_height
                );

                $this_letterdata = new LetterData($this_image, false);
                $this_data = $this_letterdata->get_data();
            }
        }

        $that_data = $letter->data;

        $total_pixels = count($this_data) + count($that_data);
        if ($total_pixels === 0) {
            return 0.0;
        }

        // Compare reference letter to read letter
        $different_pixels = $this->count_pixel_diff($this_data, $that_data);

        // Compare read letter to reference letter
        $different_pixels += $this->count_pixel_diff($that_data, $this_data);

        $score = 100 - $different_pixels / $total_pixels * 100;
        return max(0.0, min(100.0, $score));
    }

    private function count_pixel_diff(array $data1, array $data2): int
    {
        $different_pixels = 0;
        $data2_count = count($data2);

        foreach ($data1 as $index => $color) {
            if ($index >= $data2_count) {
                $different_pixels++;
                continue;
            }

            $data1_is_black = $color <= self::COLOR_ACCURACY;
            $data2_is_black = $data2[$index] <= self::COLOR_ACCURACY;

            if ($data1_is_black != $data2_is_black) {
                $different_pixels++;
            }
        }

        return $different_pixels;
    }

    /**
     * Generate reference material
     */
    public static function generate_reference_material(string $font_filename): array
    {
        if (isset(self::$reference_data[$font_filename])) {
            return self::$reference_data[$font_filename];
        }

        $all_letters = [];
        $generator = new CharacterImageGenerator();

        $characters = str_split("QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0987654321?.,:/-");

        foreach ($characters as $letter) {
            try {
                $gdimage = $generator->generate($letter, $font_filename);
                $letter_data = new LetterData($gdimage);
                $all_letters[$letter] = $letter_data;
            } catch (Exception $e) {
                error_log("Failed to generate reference for '$letter': " . $e->getMessage());
                continue;
            }
        }

        self::$reference_data[$font_filename] = $all_letters;
        return $all_letters;
    }

    public function get_data(): array
    {
        return $this->data;
    }

    public function get_image(): GdImage
    {
        return $this->image;
    }

    public function has_black_line_through(): bool
    {
        $image = $this->get_image();
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width === false || $height === false || $width === 0) {
            return false;
        }

        for ($y = 0; $y < $height; $y++) {
            $black_pixels = 0;
            for ($x = 0; $x < $width; $x++) {
                try {
                    $color = Image::get_color($image, $x, $y);
                    if ($color <= self::COLOR_ACCURACY) {
                        $black_pixels++;
                    }
                } catch (Exception $e) {
                    continue;
                }
            }
            if ($black_pixels / $width > 0.9) {
                return true;
            }
        }

        return false;
    }

    public function has_white_line_through(): bool
    {
        $image = $this->get_image();
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width === false || $height === false) {
            return false;
        }

        for ($y = 0; $y < $height; $y++) {
            $white_pixels = 0;
            for ($x = 0; $x < $width; $x++) {
                try {
                    $color = Image::get_color($image, $x, $y);
                    if ($color > 140) {
                        $white_pixels++;
                    }
                } catch (Exception $e) {
                    continue;
                }
            }
            if ($white_pixels === $width) {
                return true;
            }
        }

        return false;
    }

    public function black_percentage(): float
    {
        $image = $this->get_image();
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width === false || $height === false || $width * $height === 0) {
            return 0.0;
        }

        $black_pixels = 0;
        $total_pixels = $width * $height;

        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                try {
                    $color = Image::get_color($image, $x, $y);
                    if ($color <= self::COLOR_ACCURACY) {
                        $black_pixels++;
                    }
                } catch (Exception $e) {
                    continue;
                }
            }
        }

        return ($black_pixels / $total_pixels) * 100;
    }

    public function has_top_serif(): bool
    {
        $image = $this->get_image();
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width === false || $height === false || $height < 5 || $width === 0) {
            return false;
        }

        $top_region_height = min(5, $height);

        for ($y = 0; $y < $top_region_height; $y++) {
            $black_pixels = 0;
            for ($x = 0; $x < $width; $x++) {
                try {
                    $color = Image::get_color($image, $x, $y);
                    if ($color <= self::COLOR_ACCURACY) {
                        $black_pixels++;
                    }
                } catch (Exception $e) {
                    continue;
                }
            }
            if ($black_pixels / $width > 0.4) {
                return true;
            }
        }

        return false;
    }

    public function has_left_vertical_line(): bool
    {
        $image = $this->get_image();
        $height = imagesy($image);

        if ($height === false || $height === 0) {
            return false;
        }

        $black_pixels = 0;

        for ($y = 0; $y < $height; $y++) {
            try {
                $color = Image::get_color($image, 0, $y);
                if ($color <= self::COLOR_ACCURACY) {
                    $black_pixels++;
                }
            } catch (Exception $e) {
                continue;
            }
        }

        return ($black_pixels / $height) > 0.9;
    }

    /**
     * Get image dimensions for debugging
     */
    public function get_dimensions(): array
    {
        $image = $this->get_image();
        return [
            'width' => imagesx($image),
            'height' => imagesy($image)
        ];
    }

    /**
     * Clean up resources
     */
    public function __destruct()
    {
        if (isset($this->image)) {
            imagedestroy($this->image);
        }
    }
}
