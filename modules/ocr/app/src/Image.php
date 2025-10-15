<?php

/**
 * Image manipulation utilities
 */

class Image
{
    public const TRIM_COLOR_THRESHOLD = 180;

    public static function save_to_file(GdImage $image, string $filename): bool
    {
        $blob = self::get_blob($image);
        return file_put_contents($filename, $blob) !== false;
    }

    public static function get_blob(GdImage $image): string
    {
        ob_start();
        imagepng($image);
        $blob = ob_get_clean();
        imagedestroy($image);
        return $blob;
    }

    public static function get_color(GdImage $image, int $x, int $y, string $color = "red"): int
    {
        // Validate coordinates
        $width = imagesx($image);
        $height = imagesy($image);

        if ($x < 0 || $x >= $width || $y < 0 || $y >= $height) {
            throw new OutOfBoundsException("Coordinates ($x, $y) are out of image bounds ($width x $height)");
        }

        $color_index = imagecolorat($image, $x, $y);
        if ($color_index === false) {
            throw new RuntimeException("Failed to get color at ($x, $y)");
        }

        $colors = imagecolorsforindex($image, $color_index);
        if (!isset($colors[$color])) {
            throw new InvalidArgumentException("Invalid color component: $color");
        }

        return $colors[$color];
    }

    public static function resize(GdImage $image, ?int $width = null, ?int $height = null): GdImage
    {
        // Validate input
        if ($width === null && $height === null) {
            throw new InvalidArgumentException("Either width or height must be specified");
        }

        if ($width !== null && $width <= 0) {
            throw new InvalidArgumentException("Width must be positive");
        }

        if ($height !== null && $height <= 0) {
            throw new InvalidArgumentException("Height must be positive");
        }

        // Get original dimensions
        $orig_width = imagesx($image);
        $orig_height = imagesy($image);

        if ($orig_width === false || $orig_height === false) {
            throw new RuntimeException("Failed to get image dimensions");
        }

        // Calculate new dimensions
        if ($width === null) {
            $ratio = $height / $orig_height;
            $width = (int)($orig_width * $ratio);
        }

        if ($height === null) {
            $ratio = $width / $orig_width;
            $height = (int)($orig_height * $ratio);
        }

        // Create resized image
        $resized_image = imagecreatetruecolor($width, $height);
        if ($resized_image === false) {
            throw new RuntimeException("Failed to create resized image");
        }

        // Preserve transparency for PNG images
        imagealphablending($resized_image, false);
        imagesavealpha($resized_image, true);
        $transparent = imagecolorallocatealpha($resized_image, 255, 255, 255, 127);
        imagefilledrectangle($resized_image, 0, 0, $width, $height, $transparent);

        // Resize image
        $success = imagecopyresized(
            $resized_image,
            $image,
            0,
            0,
            0,
            0,
            $width,
            $height,
            $orig_width,
            $orig_height
        );

        if (!$success) {
            imagedestroy($resized_image);
            throw new RuntimeException("Failed to resize image");
        }

        return $resized_image;
    }

    public static function trim(GdImage $image): GdImage
    {
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width === false || $height === false) {
            throw new RuntimeException("Failed to get image dimensions");
        }

        $start_x = null;
        $start_y = null;
        $end_x = null;
        $end_y = null;

        // Find top and bottom boundaries
        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                try {
                    $color = self::get_color($image, $x, $y);
                    if ($color <= self::TRIM_COLOR_THRESHOLD) {
                        if ($start_y === null) {
                            $start_y = $y;
                        }
                        $end_y = $y + 1;
                        break;
                    }
                } catch (Exception $e) {
                    // Skip invalid pixels
                    continue;
                }
            }
        }

        // Find left and right boundaries
        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                try {
                    $color = self::get_color($image, $x, $y);
                    if ($color <= self::TRIM_COLOR_THRESHOLD) {
                        if ($start_x === null) {
                            $start_x = $x;
                        }
                        $end_x = $x + 1;
                        break;
                    }
                } catch (Exception $e) {
                    // Skip invalid pixels
                    continue;
                }
            }
        }

        // Handle empty image case
        if ($start_x === null || $start_y === null || $end_x === null || $end_y === null) {
            return $image;
        }

        // Ensure boundaries are within image
        $start_x = max(0, $start_x);
        $start_y = max(0, $start_y);
        $end_x = min($width, $end_x);
        $end_y = min($height, $end_y);

        $crop_width = $end_x - $start_x;
        $crop_height = $end_y - $start_y;

        // Perform crop
        $cropped = imagecrop($image, [
            "x" => $start_x,
            "y" => $start_y,
            "width" => $crop_width,
            "height" => $crop_height
        ]);

        if ($cropped === false) {
            throw new RuntimeException("Failed to crop image");
        }

        return $cropped;
    }

    /**
     * Convert image to pure black and white
     */
    public static function binarize(GdImage $image, int $threshold = 128): GdImage
    {
        $width = imagesx($image);
        $height = imagesy($image);

        $binary = imagecreatetruecolor($width, $height);
        $white = imagecolorallocate($binary, 255, 255, 255);
        $black = imagecolorallocate($binary, 0, 0, 0);

        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                $color = self::get_color($image, $x, $y);
                $new_color = $color > $threshold ? $white : $black;
                imagesetpixel($binary, $x, $y, $new_color);
            }
        }

        return $binary;
    }

    /**
     * Get image dimensions
     */
    public static function getDimensions(GdImage $image): array
    {
        return [
            'width' => imagesx($image),
            'height' => imagesy($image)
        ];
    }
}
