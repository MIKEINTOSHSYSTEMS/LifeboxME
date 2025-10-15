<?php
require_once __DIR__ . '/autoload.php';

// This file provides an API endpoint for AJAX uploads
// The main functionality is already in index.php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

try {
    $uploader = new FileUploader();
    $security = new Security();

    if (!isset($_FILES['image'])) {
        throw new Exception('No file uploaded');
    }

    $uploadedFile = $uploader->processUpload($_FILES['image']);

    echo json_encode([
        'success' => true,
        'file_path' => $uploadedFile,
        'message' => 'File uploaded successfully'
    ]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
