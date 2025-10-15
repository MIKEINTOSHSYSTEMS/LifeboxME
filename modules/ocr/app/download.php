<?php
require_once __DIR__ . '/autoload.php';

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if there's a result to download
if (!isset($_SESSION['last_ocr_result'])) {
    http_response_code(404);
    exit('No OCR result found to download.');
}

$result = $_SESSION['last_ocr_result'];
$filename = $result['filename'] . '_extracted.txt';
$text = $result['text'];

// Set headers for download
header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . strlen($text));
header('Pragma: no-cache');
header('Expires: 0');

// Output the text
echo $text;
exit;
