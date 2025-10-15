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
    <title>Lifebox M&E Smart OCR - Advanced Text Extraction Tool</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-mode.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Enhanced Header -->
        <header class="header">
            <div class="header-content">
                <div class="logo-section">
                    <div class="logo">
                        <div class="logo-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="logo-text">
                            <span class="logo-main">Lifebox M&E</span>
                            <span class="logo-sub">
                                <h3>Smart OCR Pro</h3>
                            </span>
                        </div>
                    </div>
                    <div class="beta-badge">BETA v0.7</div>
                </div>

                <form method="post" class="theme-toggle-form">
                    <button type="submit" name="toggle_theme" class="theme-toggle" aria-label="Toggle theme">
                        <span class="theme-icon">
                            <i class="fas fa-<?= $currentTheme === 'light' ? 'moon' : 'sun' ?>"></i>
                        </span>
                        <span class="theme-text">
                            <?= $currentTheme === 'light' ? 'Dark Mode' : 'Light Mode' ?>
                        </span>
                    </button>
                </form>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Status Alerts -->
            <?php if ($error): ?>
                <div class="alert alert-error">
                    <div class="alert-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="alert-content">
                        <strong>Error:</strong> <?= htmlspecialchars($error) ?>
                    </div>
                    <button class="alert-close" onclick="this.parentElement.remove()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            <?php endif; ?>

            <?php if ($estimatedTime): ?>
                <div class="alert alert-info">
                    <div class="alert-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="alert-content">
                        <!--Estimated processing time: <strong><?= $estimatedTime ?> seconds</strong>-->
                        Total Processing time: <strong><?= number_format($ocrResult['processing_time'], 2) ?>sseconds</strong>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($ocrResult): ?>
                <div class="alert alert-success">
                    <div class="alert-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="alert-content">
                        <strong>Success!</strong> OCR processing completed!
                        <?php if (empty(trim($ocrResult['text']))): ?>
                            <br><small>No text was extracted. Try a different image or check debug console.</small>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Enhanced App Grid -->
            <div class="app-grid">
                <!-- Upload Section -->
                <section class="upload-section card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <h2>Upload Image</h2>
                    </div>
                    <p class="section-description">Upload JPG, JPEG, or PNG images for text extraction</p>

                    <form id="uploadForm" method="post" enctype="multipart/form-data" class="upload-form">
                        <div class="file-upload-area" id="dropZone">
                            <div class="upload-placeholder">
                                <div class="upload-icon">
                                    <i class="fas fa-file-image"></i>
                                </div>
                                <h3>Drop your image here</h3>
                                <p class="upload-hint">or click to browse files</p>
                                <div class="upload-supported">
                                    <span class="supported-formats">Supported: JPG, JPEG, PNG</span>
                                    <span class="max-size">Max: 10MB</span>
                                </div>
                            </div>
                            <div class="upload-preview" id="uploadPreview" style="display: none;">
                                <img id="previewThumbnail" class="preview-thumbnail">
                                <div class="preview-info">
                                    <span id="previewFileName" class="file-name"></span>
                                    <span id="previewFileSize" class="file-size"></span>
                                </div>
                                <button type="button" class="preview-remove" onclick="clearFileInput()">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <input type="file" id="imageFile" name="image_file" accept=".jpg,.jpeg,.png" required class="file-input">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="language" class="form-label">
                                    <i class="fas fa-language"></i>
                                    OCR Language
                                </label>
                                <select id="language" name="language" class="form-select">
                                    <option value="eng">English</option>
                                    <option value="fra">French</option>
                                    <option value="spa">Spanish</option>
                                    <option value="deu">German</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-bolt"></i>
                                    Processing Options
                                </label>
                                <div class="performance-options">
                                    <label class="checkbox-label modern-checkbox">
                                        <input type="checkbox" name="optimize_speed" value="1" checked>
                                        <span class="checkmark">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="checkbox-text">
                                            <span class="checkbox-title">Optimize for Speed</span>
                                            <span class="checkbox-description">Faster processing with slightly reduced accuracy</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full upload-button" id="scanButton">
                            <span class="btn-icon">
                                <i class="fas fa-search"></i>
                            </span>
                            <span class="btn-text">Scan Image</span>
                            <div class="btn-loading" style="display: none;">
                                <div class="loading-spinner-small"></div>
                                Processing...
                            </div>
                        </button>
                    </form>
                </section>

                <!-- Camera Section -->
                <section class="camera-section card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                        <h2>Camera Capture</h2>
                    </div>
                    <p class="section-description">Capture images directly from your camera</p>

                    <div class="camera-container">
                        <div class="camera-wrapper">
                            <video id="cameraPreview" autoplay playsinline class="camera-video" style="display: none;"></video>
                            <canvas id="cameraCanvas" class="camera-canvas" style="display: none;"></canvas>

                            <div id="cameraPlaceholder" class="camera-placeholder">
                                <div class="camera-icon">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <h3>Camera Ready</h3>
                                <p>Start camera to begin capture</p>
                            </div>

                            <div class="camera-overlay">
                                <div class="camera-frame"></div>
                            </div>
                        </div>

                        <div class="camera-controls">
                            <button type="button" id="startCamera" class="btn btn-secondary camera-btn">
                                <span class="btn-icon">
                                    <i class="fas fa-play"></i>
                                </span>
                                Start Camera
                            </button>
                            <button type="button" id="captureImage" class="btn btn-primary camera-btn" disabled>
                                <span class="btn-icon">
                                    <i class="fas fa-camera"></i>
                                </span>
                                Capture
                            </button>
                            <button type="button" id="stopCamera" class="btn btn-danger camera-btn" style="display: none;">
                                <span class="btn-icon">
                                    <i class="fas fa-stop"></i>
                                </span>
                                Stop
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
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-image"></i>
                        </div>
                        <h2>Image Preview</h2>
                    </div>
                    <div class="preview-container">
                        <?php if ($uploadedFileUrl): ?>
                            <div class="preview-image-wrapper">
                                <img src="<?= htmlspecialchars($uploadedFileUrl) ?>" alt="Uploaded image" class="preview-image" id="previewImage">
                                <div class="preview-actions">
                                    <button class="preview-action-btn" onclick="zoomIn()">
                                        <i class="fas fa-search-plus"></i>
                                    </button>
                                    <button class="preview-action-btn" onclick="zoomOut()">
                                        <i class="fas fa-search-minus"></i>
                                    </button>
                                    <button class="preview-action-btn" onclick="resetZoom()">
                                        <i class="fas fa-sync"></i>
                                    </button>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="preview-placeholder">
                                <div class="preview-icon">
                                    <i class="fas fa-image"></i>
                                </div>
                                <h3>No Image Selected</h3>
                                <p>Upload an image or use camera to see preview</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>

                <!-- Results Section -->
                <section class="results-section card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h2>Extracted Text</h2>
                    </div>

                    <div class="results-header">
                        <div class="results-info">
                            <?php if ($ocrResult): ?>
                                <div class="result-badges">
                                    <span class="confidence-badge">
                                        <i class="fas fa-chart-line"></i>
                                        Confidence: <?= number_format($ocrResult['confidence'], 1) ?>%
                                    </span>
                                    <span class="processing-time">
                                        <i class="fas fa-clock"></i>
                                        Time: <?= number_format($ocrResult['processing_time'], 2) ?>s
                                    </span>
                                    <?php if (isset($ocrResult['fonts_processed'])): ?>
                                        <span class="fonts-badge">
                                            <i class="fas fa-font"></i>
                                            Fonts: <?= $ocrResult['fonts_processed'] ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (isset($ocrResult['best_font'])): ?>
                                        <span class="font-badge">
                                            <i class="fas fa-text-height"></i>
                                            Best Font: <?= htmlspecialchars($ocrResult['best_font']) ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="results-actions">
                            <?php if ($ocrResult && !empty(trim($ocrResult['text']))): ?>
                                <button type="button" id="copyText" class="btn btn-secondary btn-sm result-action-btn">
                                    <span class="btn-icon">
                                        <i class="fas fa-copy"></i>
                                    </span>
                                    Copy Text
                                </button>
                                <a href="download.php" class="btn btn-primary btn-sm result-action-btn" id="downloadLink">
                                    <span class="btn-icon">
                                        <i class="fas fa-download"></i>
                                    </span>
                                    Download
                                </a>
                                <button type="button" id="clearText" class="btn btn-danger btn-sm result-action-btn">
                                    <span class="btn-icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    Clear
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="text-results">
                        <div class="text-area-container">
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
                            <div class="text-area-overlay" id="textAreaOverlay" style="display: none;">
                                <div class="overlay-content">
                                    <i class="fas fa-spinner fa-spin"></i>
                                    <p>Processing OCR...</p>
                                </div>
                            </div>
                        </div>

                        <?php if ($ocrResult && empty(trim($ocrResult['text']))): ?>
                            <div class="alert alert-warning">
                                <div class="alert-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="alert-content">
                                    <strong>No text extracted.</strong> Possible reasons:
                                    <ul class="alert-list">
                                        <li>Image doesn't contain readable text</li>
                                        <li>Text is too small or blurry</li>
                                        <li>Unsupported font or language</li>
                                        <li>Low image quality or contrast</li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($ocrResult && !empty(trim($ocrResult['text']))): ?>
                        <div class="text-stats">
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-font"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="stat-value" id="charCount"><?= mb_strlen($ocrResult['text']) ?></span>
                                    <span class="stat-label">Characters</span>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-file-word"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="stat-value" id="wordCount"><?= str_word_count($ocrResult['text']) ?></span>
                                    <span class="stat-label">Words</span>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-bars"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="stat-value" id="lineCount"><?= substr_count($ocrResult['text'], "\n") + 1 ?></span>
                                    <span class="stat-label">Lines</span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </section>

                <!-- Debug Console Section -->
                <section class="debug-section card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <h2>Debug Console</h2>
                    </div>

                    <div class="debug-controls">
                        <div class="debug-buttons">
                            <button type="button" id="clearDebug" class="btn btn-secondary btn-sm debug-btn">
                                <span class="btn-icon">
                                    <i class="fas fa-trash"></i>
                                </span>
                                Clear Console
                            </button>
                            <button type="button" id="toggleDebug" class="btn btn-secondary btn-sm debug-btn">
                                <span class="btn-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                                <span class="toggle-text">Collapse</span>
                            </button>
                            <button type="button" id="exportDebug" class="btn btn-secondary btn-sm debug-btn">
                                <span class="btn-icon">
                                    <i class="fas fa-download"></i>
                                </span>
                                Export Logs
                            </button>
                        </div>
                        <div class="debug-info">
                            <span class="debug-timezone">
                                <i class="fas fa-globe"></i>
                                Africa/Addis_Ababa
                            </span>
                            <span class="debug-status" id="debugStatus">
                                <i class="fas fa-circle"></i>
                                Ready
                            </span>
                        </div>
                    </div>

                    <div class="debug-console" id="debugConsole">
                        <div class="debug-messages" id="debugMessages">
                            <?php foreach ($debugLog as $logEntry): ?>
                                <div class="debug-message">
                                    <span class="debug-timestamp">[<?= date('H:i:s') ?>]</span>
                                    <span class="debug-content"><?= htmlspecialchars($logEntry) ?></span>
                                </div>
                            <?php endforeach; ?>
                            <?php if (empty($debugLog)): ?>
                                <div class="debug-message debug-info">
                                    <i class="fas fa-info-circle"></i>
                                    No debug messages yet. Processing logs will appear here.
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>

            <!-- User Guide Section -->
            <section class="guide-section card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h2>How to Use This Tool</h2>
                </div>

                <div class="guide-content">
                    <div class="guide-steps">
                        <div class="guide-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3>Upload or Capture Image</h3>
                                <p>Use the upload section to select an image file or use your camera to capture text directly.</p>
                            </div>
                        </div>
                        <div class="guide-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3>Configure Settings</h3>
                                <p>Select the appropriate language and choose between speed optimization or higher accuracy.</p>
                            </div>
                        </div>
                        <div class="guide-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3>Process Image</h3>
                                <p>Click "Scan Image" to start the OCR process. Processing time depends on image size and complexity.</p>
                            </div>
                        </div>
                        <div class="guide-step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h3>Review & Export</h3>
                                <p>Check the extracted text, copy it to clipboard, or download as a text file.</p>
                            </div>
                        </div>
                    </div>

                    <div class="guide-tips">
                        <h3>Pro Tips for Better Results:</h3>
                        <ul>
                            <li>Use high-contrast, clear images with good lighting</li>
                            <li>Ensure text is horizontal and not rotated</li>
                            <li>For camera capture, hold the device steady</li>
                            <li>Use "Optimize for Speed" for simple documents</li>
                            <li>Disable speed optimization for complex layouts</li>
                            <li>Check the debug console for processing details</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>

        <!-- Enhanced Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-main">
                    <div class="footer-brand">
                        <div class="footer-logo">
                            <i class="fas fa-search"></i>
                            <span>Lifebox M&E Smart OCR</span>
                        </div>
                        <div class="version-info">Version 0.7.0 BETA</div>
                    </div>

                    <div class="footer-links">
                        <a href="https://merqconsultancy.org" target="_blank" class="footer-link">
                            <i class="fas fa-external-link-alt"></i>
                            Powered By: MERQ Consultancy
                        </a>
                        <span class="footer-separator">|</span>
                        <span class="footer-dev">
                            <i class="fas fa-code"></i>
                            Under Active Development
                        </span>
                    </div>
                </div>

                <div class="footer-secondary">
                    <div class="footer-time">
                        <i class="fas fa-clock"></i>
                        Server Time: <?= date('Y-m-d H:i:s') ?> (Africa/Addis_Ababa)
                    </div>
                    <div class="footer-features">
                        <i class="fas fa-rocket"></i>
                        More features coming soon: Batch processing, PDF support, Advanced editing
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Enhanced Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay hidden">
        <div class="loading-container">
            <div class="loading-animation">
                <div class="loading-spinner-large"></div>
                <div class="loading-pulse"></div>
            </div>
            <div class="loading-content">
                <h3 class="loading-title">Processing OCR</h3>
                <p class="loading-text">Analyzing your image and extracting text...</p>
                <div class="loading-progress">
                    <div class="progress-bar">
                        <div class="progress-fill" id="progressFill"></div>
                    </div>
                    <div class="progress-text" id="progressText">Initializing...</div>
                </div>
                <div class="loading-details" id="loadingDetails"></div>
                <?php if ($estimatedTime): ?>
                    <div class="loading-estimate">
                        <i class="fas fa-clock"></i>
                        Estimated time: <?= $estimatedTime ?> seconds
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div id="toastContainer" class="toast-container"></div>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/upload.js"></script>
    <script src="assets/js/camera.js"></script>
    <script src="assets/js/debug.js"></script>
</body>

</html>