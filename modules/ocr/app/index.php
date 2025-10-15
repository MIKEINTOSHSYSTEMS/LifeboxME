<?php
require_once __DIR__ . '/autoload.php';

// Start session for temporary file management
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize file uploader
$uploader = new FileUploader();
$security = new Security();

// Initialize debug log
$debugLog = [];

// Handle theme preference - FIXED VERSION
$currentTheme = $_COOKIE['theme'] ?? 'light';
if (isset($_POST['toggle_theme'])) {
    $currentTheme = $currentTheme === 'light' ? 'dark' : 'light';
    setcookie('theme', $currentTheme, time() + (86400 * 30), "/");
    // Refresh to apply theme immediately
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Process OCR if form submitted
$ocrResult = null;
$error = null;
$uploadedFileUrl = null;
$estimatedTime = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image_file'])) {
    try {
        $startTime = microtime(true);
        Config::log("Starting OCR process for uploaded file");
        $debugLog[] = "Starting OCR process for uploaded file";

        $uploadedFile = $uploader->processUpload($_FILES['image_file']);
        $debugLog[] = "File uploaded successfully: " . basename($uploadedFile);

        // Generate proper URL for the uploaded file
        $uploadedFileUrl = Config::getBaseUrl() . 'uploads/tmp/' . basename($uploadedFile);
        $debugLog[] = "Generated file URL: " . $uploadedFileUrl;

        // File Upload Section
        if ($uploadedFile) {
            $ocr = new OCRProcessor();
            $language = $_POST['language'] ?? Config::DEFAULT_LANGUAGE;
            $optimizeSpeed = isset($_POST['optimize_speed']) && $_POST['optimize_speed'] == '1';
            $debugLog[] = "Using language: " . $language;
            $debugLog[] = "Optimize for speed: " . ($optimizeSpeed ? 'Yes' : 'No');

            // Estimate processing time based on file size and optimization
            $fileSize = filesize($uploadedFile);
            $estimatedTime = $ocr->estimateProcessingTime($fileSize, $optimizeSpeed);
            $debugLog[] = "Estimated processing time: " . $estimatedTime . " seconds";

            $ocrResult = $ocr->processImage($uploadedFile, $language, $optimizeSpeed);
            $actualTime = microtime(true) - $startTime;
            $debugLog[] = "OCR processing completed. Confidence: " . $ocrResult['confidence'] . "%, Time: " . round($actualTime, 2) . "s";
            $debugLog[] = "Best font: " . ($ocrResult['best_font'] ?? 'Unknown');
            $debugLog[] = "Fonts processed: " . ($ocrResult['fonts_processed'] ?? 0);
            $debugLog[] = "Extracted text length: " . strlen($ocrResult['text']);

            // Store result in session for download
            $_SESSION['last_ocr_result'] = [
                'text' => $ocrResult['text'],
                'filename' => pathinfo($uploadedFile, PATHINFO_FILENAME)
            ];

            $debugLog[] = "Results stored in session";
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        Config::log("OCR Error: " . $e->getMessage(), 'ERROR');
        $debugLog[] = "ERROR: " . $e->getMessage();
    }
}

// Handle camera capture
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['camera_image'])) {
    try {
        $startTime = microtime(true);
        Config::log("Starting OCR process for camera capture");
        $debugLog[] = "Starting OCR process for camera capture";

        $imageData = $_POST['camera_image'];
        $uploadedFile = $uploader->processCameraImage($imageData);
        $debugLog[] = "Camera image processed: " . basename($uploadedFile);

        // camera section:
        if ($uploadedFile) {
            $ocr = new OCRProcessor();
            $language = $_POST['language'] ?? Config::DEFAULT_LANGUAGE;
            $optimizeSpeed = isset($_POST['optimize_speed']) && $_POST['optimize_speed'] == '1';
            $debugLog[] = "Using language: " . $language;
            $debugLog[] = "Optimize for speed: " . ($optimizeSpeed ? 'Yes' : 'No');

            // Estimate processing time for camera image
            $estimatedTime = $ocr->estimateProcessingTime(500000, $optimizeSpeed); // Assume ~500KB for camera images
            $debugLog[] = "Estimated processing time: " . $estimatedTime . " seconds";

            $ocrResult = $ocr->processImage($uploadedFile, $language, $optimizeSpeed);
            $actualTime = microtime(true) - $startTime;
            $debugLog[] = "OCR processing completed. Confidence: " . $ocrResult['confidence'] . "%, Time: " . round($actualTime, 2) . "s";
            $debugLog[] = "Best font: " . ($ocrResult['best_font'] ?? 'Unknown');
            $debugLog[] = "Fonts processed: " . ($ocrResult['fonts_processed'] ?? 0);
            $debugLog[] = "Extracted text length: " . strlen($ocrResult['text']);

            $_SESSION['last_ocr_result'] = [
                'text' => $ocrResult['text'],
                'filename' => 'camera_capture'
            ];

            $debugLog[] = "Results stored in session";

            // Generate URL for camera image
            $uploadedFileUrl = Config::getBaseUrl() . 'uploads/tmp/' . basename($uploadedFile);
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        Config::log("Camera OCR Error: " . $e->getMessage(), 'ERROR');
        $debugLog[] = "ERROR: " . $e->getMessage();
    }
}

// Store debug log in session for JavaScript access
$_SESSION['debug_log'] = $debugLog;
?>
<!DOCTYPE html>
<html lang="en" data-theme="<?= htmlspecialchars($currentTheme) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E Smart OCR Web Application</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-mode.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 class="logo">
                <span class="logo-icon">🔍</span>
                Lifebox M&E Smart 👁️‍🗨️©️®️
            </h1>
            <form method="post" class="theme-toggle-form">
                <button type="submit" name="toggle_theme" class="theme-toggle">
                    <span class="theme-icon"><?= $currentTheme === 'light' ? '🌙' : '☀️' ?></span>
                    <?= $currentTheme === 'light' ? 'Dark Mode' : 'Light Mode' ?>
                </button>
            </form>
        </header>

        <main class="main-content">
            <?php if ($error): ?>
                <div class="alert alert-error">
                    <span class="alert-icon">⚠️</span>
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <?php if ($estimatedTime): ?>
                <div class="alert alert-info">
                    <span class="alert-icon">⏱️</span>
                    Estimated processing time: <?= $estimatedTime ?> seconds
                </div>
                <div class="alert alert-info">
                    <span class="alert-icon">⏱️</span>
                    Total processing time: <?= number_format($ocrResult['processing_time'], 2) ?>s
                </div>
            <?php endif; ?>

            <?php if ($ocrResult): ?>
                <div class="alert alert-success">
                    <span class="alert-icon">✅</span>
                    OCR processing completed successfully!
                    <?php if (empty(trim($ocrResult['text']))): ?>
                        <br><small>But no text was extracted. Please try a different image or check the debug console.</small>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="app-grid">
                <!-- Upload Section -->
                <section class="upload-section card">
                    <h2>Upload Image</h2>
                    <p class="section-description">Upload a JPG, JPEG, or PNG image for text extraction</p>

                    <form id="uploadForm" method="post" enctype="multipart/form-data" class="upload-form">
                        <div class="file-upload-area" id="dropZone">
                            <div class="upload-placeholder">
                                <span class="upload-icon">📁</span>
                                <p>Drag & drop your image here</p>
                                <p class="upload-hint">or click to browse</p>
                            </div>
                            <input type="file" id="imageFile" name="image_file" accept=".jpg,.jpeg,.png" required class="file-input">
                        </div>

                        <div class="form-group">
                            <label for="language">OCR Language:</label>
                            <select id="language" name="language" class="form-select">
                                <option value="eng">English</option>
                                <option value="fra">French</option>
                                <option value="spa">Spanish</option>
                                <option value="deu">German</option>
                            </select>
                        </div>

                        <div class="performance-options">
                            <label class="checkbox-label">
                                <input type="checkbox" name="optimize_speed" value="1" checked>
                                <span class="checkmark"></span>
                                Optimize for Speed (Faster processing)
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full" id="scanButton">
                            <span class="btn-icon">🔍</span>
                            Scan Image
                        </button>
                    </form>
                </section>

                <!-- Camera Section -->
                <section class="camera-section card">
                    <h2>Camera Capture</h2>
                    <p class="section-description">Capture an image directly from your camera</p>

                    <div class="camera-container">
                        <video id="cameraPreview" autoplay playsinline class="camera-video" style="display: none;"></video>
                        <canvas id="cameraCanvas" class="camera-canvas" style="display: none;"></canvas>

                        <div id="cameraPlaceholder" class="camera-placeholder">
                            <span class="camera-icon">📷</span>
                            <p>Camera not active</p>
                        </div>

                        <div class="camera-controls">
                            <button type="button" id="startCamera" class="btn btn-secondary">
                                <span class="btn-icon">📷</span>
                                Start Camera
                            </button>
                            <button type="button" id="captureImage" class="btn btn-primary" disabled>
                                <span class="btn-icon">⭕</span>
                                Capture
                            </button>
                        </div>
                    </div>

                    <form id="cameraForm" method="post" class="hidden">
                        <input type="hidden" name="camera_image" id="cameraImageData">
                        <input type="hidden" name="language" id="cameraLanguage">
                        <input type="hidden" name="optimize_speed" value="1">
                    </form>
                </section>

                <!-- Preview Section -->
                <section class="preview-section card">
                    <h2>Image Preview</h2>
                    <div class="preview-container">
                        <?php if ($uploadedFileUrl): ?>
                            <img src="<?= htmlspecialchars($uploadedFileUrl) ?>" alt="Uploaded image" class="preview-image" id="previewImage">
                        <?php else: ?>
                            <div class="preview-placeholder">
                                <span class="preview-icon">🖼️</span>
                                <p>No image selected</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>

                <!-- Results Section -->
                <section class="results-section card">
                    <h2>Extracted Text</h2>
                    <div class="results-header">
                        <div class="results-info">
                            <?php if ($ocrResult): ?>
                                <span class="confidence-badge">
                                    Confidence: <?= number_format($ocrResult['confidence'], 1) ?>%
                                </span>
                                <span class="processing-time">
                                    Time: <?= number_format($ocrResult['processing_time'], 2) ?>s
                                </span>
                                <?php if (isset($ocrResult['fonts_processed'])): ?>
                                    <span class="fonts-badge">
                                        Fonts: <?= $ocrResult['fonts_processed'] ?>
                                    </span>
                                <?php endif; ?>
                                <?php if (isset($ocrResult['best_font'])): ?>
                                    <span class="font-badge">
                                        Best Font: <?= htmlspecialchars($ocrResult['best_font']) ?>
                                    </span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="results-actions">
                            <?php if ($ocrResult && !empty(trim($ocrResult['text']))): ?>
                                <button type="button" id="copyText" class="btn btn-secondary btn-sm">
                                    <span class="btn-icon">📋</span>
                                    Copy
                                </button>
                                <a href="download.php" class="btn btn-primary btn-sm" id="downloadLink">
                                    <span class="btn-icon">💾</span>
                                    Download
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="text-results">
                        <textarea
                            id="extractedText"
                            class="text-area"
                            placeholder="Extracted text will appear here..."
                            <?= $ocrResult ? '' : 'disabled' ?>><?=
                                                                $ocrResult ? (
                                                                    is_array($ocrResult['text']) ?
                                                                    implode("\n", $ocrResult['text']) :
                                                                    htmlspecialchars($ocrResult['text'])
                                                                ) : ''
                                                                ?></textarea>

                        <?php if ($ocrResult && empty(trim($ocrResult['text']))): ?>
                            <div class="alert alert-warning" style="margin-top: 1rem;">
                                <span class="alert-icon">⚠️</span>
                                No text was extracted from the image. This could be because:
                                <ul style="margin: 0.5rem 0 0 1rem;">
                                    <li>The image doesn't contain readable text</li>
                                    <li>The text is too small or blurry</li>
                                    <li>The font is not supported</li>
                                    <li>Check the debug console for more details</li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($ocrResult && !empty(trim($ocrResult['text']))): ?>
                        <div class="text-stats">
                            <div class="stat-item">
                                <span class="stat-label">Characters:</span>
                                <span class="stat-value" id="charCount"><?= mb_strlen($ocrResult['text']) ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-label">Words:</span>
                                <span class="stat-value" id="wordCount"><?= str_word_count($ocrResult['text']) ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-label">Lines:</span>
                                <span class="stat-value" id="lineCount"><?= substr_count($ocrResult['text'], "\n") + 1 ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                </section>

                <!-- Debug Console Section -->
                <section class="debug-section card">
                    <h2>Debug Console</h2>
                    <div class="debug-controls">
                        <button type="button" id="clearDebug" class="btn btn-secondary btn-sm">
                            <span class="btn-icon">🗑️</span>
                            Clear
                        </button>
                        <button type="button" id="toggleDebug" class="btn btn-secondary btn-sm">
                            <span class="btn-icon">🔍</span>
                            Toggle Console
                        </button>
                        <span class="debug-timezone">Timezone: Africa/Addis_Ababa</span>
                    </div>
                    <div class="debug-console" id="debugConsole">
                        <div class="debug-messages">
                            <?php foreach ($debugLog as $logEntry): ?>
                                <div class="debug-message">
                                    <span class="debug-timestamp">[<?= date('H:i:s') ?>]</span>
                                    <?= htmlspecialchars($logEntry) ?>
                                </div>
                            <?php endforeach; ?>
                            <?php if (empty($debugLog)): ?>
                                <div class="debug-message debug-info">
                                    No debug messages yet. Processing logs will appear here.
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer class="footer">
            <p>&copy; <?= date('Y') ?>Lifebox M&E Smart OCR Application. All rights reserved.</p>
            <p class="footer-time">Server Time: <?= date('Y-m-d H:i:s') ?> (Africa/Addis_Ababa)</p>
        </footer>
    </div>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay hidden">
        <div class="loading-spinner"></div>
        <p class="loading-text">Processing OCR... Please wait</p>
        <div class="loading-details" id="loadingDetails"></div>
        <?php if ($estimatedTime): ?>
            <div class="loading-estimate">
                Estimated time: <?= $estimatedTime ?> seconds
            </div>
        <?php endif; ?>
    </div>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/upload.js"></script>
    <script src="assets/js/camera.js"></script>
    <script src="assets/js/debug.js"></script>
</body>

</html>