<?php
require_once __DIR__ . '/autoload.php';

echo "Testing OCR System\n";
echo "==================\n";

try {
    // Check requirements
    $processor = new OCRProcessor();
    $requirements = $processor->checkRequirements();

    echo "System Requirements:\n";
    foreach ($requirements as $key => $req) {
        echo "- $key: " . ($req['status'] ? '✓' : '✗') . " - {$req['message']}\n";
    }

    // Check if we have fonts
    $fonts = glob("fonts/*.ttf");
    echo "Fonts found: " . count($fonts) . "\n";
    foreach ($fonts as $font) {
        echo "  - " . basename($font) . "\n";
    }

    // Test with a simple image if available
    $testImage = __DIR__ . '/example-text/text-ubuntu.png';
    if (file_exists($testImage)) {
        echo "\nTesting OCR with sample image...\n";
        $result = $processor->processImage($testImage, 'eng');

        echo "OCR Result:\n";
        echo "- Confidence: " . $result['confidence'] . "%\n";
        echo "- Processing Time: " . $result['processing_time'] . "s\n";
        echo "- Text Length: " . strlen($result['text']) . " characters\n";
        echo "- Extracted Text:\n";
        echo "----------------------------------------\n";
        echo $result['text'] . "\n";
        echo "----------------------------------------\n";
    } else {
        echo "\nNo test image found at: $testImage\n";
        echo "Please upload an image through the web interface to test OCR.\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}
