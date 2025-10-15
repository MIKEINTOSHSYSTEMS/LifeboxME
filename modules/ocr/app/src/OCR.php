<?php

/**
 * Main OCR processing engine
 */

class OCR
{
    private TextReader $textReader;
    private float $min_confidence = 60.0;

    public function __construct()
    {
        $this->textReader = new TextReader();
    }

    public function read(string $filename): array
    {
        // Validate file exists
        if (!file_exists($filename)) {
            throw new InvalidArgumentException("File not found: $filename");
        }

        $fonts = glob("fonts/*.ttf");
        if (empty($fonts)) {
            throw new RuntimeException("No font files found in fonts directory");
        }

        $best_font = null;
        $best_score = 0.0;
        $best_text = "";

        foreach ($fonts as $font_filename) {
            try {
                $data = $this->read_by_font($filename, $font_filename);

                if ($data['score'] > $best_score) {
                    $best_score = $data['score'];
                    $best_font = basename($font_filename);
                    $best_text = $data['autocorrected'];
                }
            } catch (Exception $e) {
                error_log("OCR failed with font $font_filename: " . $e->getMessage());
                continue;
            }
        }

        return [
            "score" => $best_score,
            "font" => $best_font,
            "text" => $best_text,
            "confidence" => $best_score >= $this->min_confidence ? 'high' : 'low'
        ];
    }

    public function read_by_font(string $filename, string $font_filename): array
    {
        Config::log("OCR: Starting read_by_font with font: " . $font_filename);

        // Load and preprocess image
        $read_this = imagecreatefrompng($filename);
        if ($read_this === false) {
            throw new RuntimeException("Failed to load image: $filename");
        }

        // Apply preprocessing filters
        imagefilter($read_this, IMG_FILTER_GRAYSCALE);
        imagefilter($read_this, IMG_FILTER_CONTRAST, -100);

        // Extract lines and process
        $lines = $this->textReader->lines_to_images($read_this);
        Config::log("OCR: Found " . count($lines) . " text lines");

        $output = [];
        $score = 0.0;
        $letter_count = 0;

        foreach ($lines as $line_index => $line) {
            Config::log("OCR: Processing line " . ($line_index + 1));
            $letters = $this->textReader->line_to_letters($line);
            Config::log("OCR: Line " . ($line_index + 1) . " has " . count($letters) . " letters");

            $line_text = "";

            foreach ($letters as $letter_index => $letter) {
                $letter_image = $letter['image'];
                $space = $letter['space'];

                try {
                    $letter_data = new LetterData($letter_image);
                    $which = self::which($letter_data, $font_filename);
                    $line_text .= $space . $which['letter'];

                    $score += $which['score'];
                    $letter_count++;

                    if ($letter_index % 10 === 0) { // Log every 10th letter to avoid too much logging
                        Config::log("OCR: Processed letter " . ($letter_index + 1) . ": '" . $which['letter'] . "' (score: " . round($which['score'], 2) . ")");
                    }
                } catch (Exception $e) {
                    error_log("Letter processing failed: " . $e->getMessage());
                    $line_text .= $space . '?';
                    $letter_count++;
                }
            }
            $output[] = trim($line_text);
        }

        // Clean up main image
        imagedestroy($read_this);

        // Calculate average score
        $average_score = $letter_count > 0 ? $score / $letter_count : 0.0;
        Config::log("OCR: Average letter score: " . round($average_score, 2));

        // Apply autocorrection
        Config::log("OCR: Applying autocorrection to " . count($output) . " lines");
        $autocorrected = [];
        foreach ($output as $line) {
            $autocorrected[] = $this->autocorrect($line);
        }

        // Combine lines into single text
        $autocorrected_text = implode("\n", $autocorrected);
        Config::log("OCR: Autocorrected text length: " . strlen($autocorrected_text));

        return [
            "output" => $output,
            "autocorrected" => $autocorrected_text, // Return as string, not array
            "score" => $average_score,
            "letter_count" => $letter_count,
            "line_count" => count($lines)
        ];
    }

    public static function which(LetterData $letter, string $font_filename): array
    {
        $reference_data = LetterData::generate_reference_material($font_filename);

        $best_guess = '?';
        $best_score = 0.0;

        foreach ($reference_data as $letter_name => $reference_letter) {
            try {
                $score = $reference_letter->compare($letter);
                if ($score > $best_score) {
                    $best_guess = $letter_name;
                    $best_score = $score;
                }
            } catch (Exception $e) {
                continue;
            }
        }

        // Apply heuristics for common misclassifications
        if (!$letter->has_top_serif()) {
            if (in_array($best_guess, ["f"])) {
                $best_guess = "t";
                $best_score *= 1.1;
            }
        }

        if (!$letter->has_left_vertical_line()) {
            if (in_array($best_guess, ["R"])) {
                $best_guess = "a";
                $best_score *= 1.1;
            }
        }

        if ($letter->has_black_line_through()) {
            if (in_array($best_guess, ["o", "O", "0", "c"])) {
                $best_guess = "e";
                $best_score *= 1.1;
            }
        }

        if ($letter->has_white_line_through()) {
            if (in_array($best_guess, ["l", "I"])) {
                $best_guess = "i";
                $best_score *= 1.1;
            }
        } else {
            if (in_array($best_guess, ["i"])) {
                $best_guess = "l";
                $best_score *= 1.1;
            }
        }

        if ($letter->black_percentage() > 59) {
            if (in_array($best_guess, ["f", "1", "t"])) {
                $best_guess = ",";
                $best_score *= 1.1;
            }
        }

        return [
            "letter" => $best_guess,
            "score" => min(100.0, $best_score)
        ];
    }

    public function autocorrect(string $text): string
    {
        if (empty(trim($text))) {
            return $text;
        }

        $words = explode(" ", $text);
        $output = [];

        foreach ($words as $word) {
            if ($word === "l") {
                $word = "I";
            }

            $letters = str_split($word);
            $word_length = count($letters);

            if ($word_length === 0) {
                $output[] = "";
                continue;
            }

            $lowercase_letter_count = 0;
            $uppercase_letter_count = 0;

            foreach ($letters as $letter) {
                if (preg_match('/[a-z]/', $letter)) {
                    $lowercase_letter_count++;
                } elseif (preg_match('/[A-Z]/', $letter)) {
                    $uppercase_letter_count++;
                }
            }

            $is_ucfirst = ucfirst($word) === $word;

            // Apply character replacements based on context
            if ($lowercase_letter_count / $word_length >= 0.5) {
                $word = str_replace([
                    "0",
                    "1",
                    "5",
                ], [
                    "o",
                    "l",
                    "s",
                ], $word);

                $is_ucfirst = ucfirst($word) === $word;
                $word = mb_strtolower($word);
            }

            if ($uppercase_letter_count / $word_length >= 0.6) {
                $word = str_replace([
                    "0",
                    "1",
                    "5",
                ], [
                    "O",
                    "I",
                    "S",
                ], $word);

                $word = mb_strtoupper($word);
            }

            if ($is_ucfirst) {
                $word = ucfirst($word);
            }

            $output[] = $word;
        }

        return implode(" ", $output);
    }

    /**
     * Set minimum confidence threshold
     */
    public function set_min_confidence(float $confidence): void
    {
        $this->min_confidence = max(0.0, min(100.0, $confidence));
    }

    /**
     * Get OCR engine information
     */
    public function get_engine_info(): array
    {
        return [
            'name' => 'PHP OCR Engine',
            'version' => '2.0',
            'features' => [
                'font_based_recognition',
                'heuristic_correction',
                'multi_line_processing'
            ]
        ];
    }
}
