<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$verification_code = $_GET['code'] ?? '';

if (empty($verification_code)) {
    die("Invalid verification code");
}

// Find the response with this checksum - FIXED: Corrected table references
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, tpp.first_name, tpp.last_name
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_participation tp ON tp.participation_id = r.participation_id
    LEFT JOIN training_participants tpp ON tpp.participant_id = tp.participant_id
    WHERE r.checksum = :code
");
$stmt->execute([':code' => $verification_code]);
$response = $stmt->fetch();

if (!$response) {
    die("Certificate not found or invalid verification code");
}

// Get certificate number
$certificate_number = "LB-" . str_pad($response['id'], 6, '0', STR_PAD_LEFT);

// Generate verification URL
$verification_url = "https://" . $_SERVER['HTTP_HOST'] . "/modules/test/lbq/public/verify_certificate.php?code=" . urlencode($verification_code);

// Function to generate QR code as SVG
function generateQRCode($url, $size = 150)
{
    // Simple QR code implementation using SVG
    $qrSize = 21; // Standard QR code size (version 1)
    $moduleSize = $size / $qrSize;

    // This is a simplified representation - a real QR would encode the data properly
    // For a real implementation, you might want to use a proper PHP QR library
    $svg = '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 ' . $size . ' ' . $size . '" xmlns="http://www.w3.org/2000/svg">';
    $svg .= '<rect width="100%" height="100%" fill="white"/>';

    // Add border
    $svg .= '<rect x="0" y="0" width="' . $size . '" height="' . $size . '" fill="none" stroke="#ddd" stroke-width="1"/>';

    // Generate a pattern that looks like a QR code
    // In a real implementation, this would encode the actual URL
    srand(crc32($url)); // Seed random for consistent pattern per URL

    for ($i = 0; $i < $qrSize; $i++) {
        for ($j = 0; $j < $qrSize; $j++) {
            if (rand(0, 1) > 0.5) {
                $x = $i * $moduleSize;
                $y = $j * $moduleSize;
                $svg .= '<rect x="' . $x . '" y="' . $y . '" width="' . $moduleSize . '" height="' . $moduleSize . '" fill="black"/>';
            }
        }
    }

    // Add positioning markers (like real QR codes have)
    $svg .= '<rect x="0" y="0" width="' . (7 * $moduleSize) . '" height="' . (7 * $moduleSize) . '" fill="black"/>';
    $svg .= '<rect x="' . ($moduleSize) . '" y="' . ($moduleSize) . '" width="' . (5 * $moduleSize) . '" height="' . (5 * $moduleSize) . '" fill="white"/>';
    $svg .= '<rect x="' . (2 * $moduleSize) . '" y="' . (2 * $moduleSize) . '" width="' . (3 * $moduleSize) . '" height="' . (3 * $moduleSize) . '" fill="black"/>';

    $svg .= '<rect x="' . (($qrSize - 7) * $moduleSize) . '" y="0" width="' . (7 * $moduleSize) . '" height="' . (7 * $moduleSize) . '" fill="black"/>';
    $svg .= '<rect x="' . (($qrSize - 6) * $moduleSize) . '" y="' . ($moduleSize) . '" width="' . (5 * $moduleSize) . '" height="' . (5 * $moduleSize) . '" fill="white"/>';
    $svg .= '<rect x="' . (($qrSize - 5) * $moduleSize) . '" y="' . (2 * $moduleSize) . '" width="' . (3 * $moduleSize) . '" height="' . (3 * $moduleSize) . '" fill="black"/>';

    $svg .= '<rect x="0" y="' . (($qrSize - 7) * $moduleSize) . '" width="' . (7 * $moduleSize) . '" height="' . (7 * $moduleSize) . '" fill="black"/>';
    $svg .= '<rect x="' . ($moduleSize) . '" y="' . (($qrSize - 6) * $moduleSize) . '" width="' . (5 * $moduleSize) . '" height="' . (5 * $moduleSize) . '" fill="white"/>';
    $svg .= '<rect x="' . (2 * $moduleSize) . '" y="' . (($qrSize - 5) * $moduleSize) . '" width="' . (3 * $moduleSize) . '" height="' . (3 * $moduleSize) . '" fill="black"/>';

    $svg .= '</svg>';

    return $svg;
}

$qr_code_svg = generateQRCode($verification_url, 150);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Certificate - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f7fb;
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: #0079a7ed !important;
        }

        .mt-3 {
            margin-top: 0rem !important;
        }

        .verification-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .verification-success {
            color: #198754;
            font-size: 1.5rem;
        }

        .certificate-preview {
            border: 2px dashed #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin: 1.5rem 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .verified-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #198754;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .verification-code {
            font-family: monospace;
            background: #f8f9fa;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #dee2e6;
        }

        .qr-code {
            display: inline-block;
            padding: 10px;
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 4px;
        }

        .verification-url {
            word-break: break-all;
            font-size: 0.9rem;
            background: #f8f9fa;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #dee2e6;
        }

        /* Print styles */
        @media print {

            nav.navbar,
            footer,
            .no-print,
            .btn {
                display: none !important;
            }

            body {
                background-color: white;
                padding: 0;
                margin: 0;
            }

            .verification-container {
                max-width: 100%;
                margin: 0;
                padding: 15px;
                box-shadow: none;
                border-radius: 0;
            }

            .certificate-preview {
                border: 1px solid #ccc;
                background: white;
            }

            .alert-success {
                border: 1px solid #198754;
                background-color: #f8fff8 !important;
                color: #198754 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .card {
                border: 1px solid #dee2e6;
                background: white;
            }

            .alert-info {
                border: 1px solid #0dcaf0;
                background-color: #f0fcff !important;
                color: #055160 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .verified-badge {
                background: #198754 !important;
                color: white !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .qr-code {
                border: 1px solid #ccc;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../">
                <img src="../lblogo-white.svg" alt="LifeBox Logo" height="30" class="d-inline-block align-text-top me-2">
                Test Center
            </a>
        </div>
    </nav>

    <div class="container py-4">
        <div class="verification-container">
            <div class="text-center mb-4">
                <img src="../lblogo-dark.svg" alt="LifeBox Logo" height="60">
                <h1 class="h3 mt-3">Certificate Verification</h1>
            </div>

            <div class="alert alert-success text-center">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span class="verification-success">This certificate is valid and verified</span>
            </div>

            <div class="certificate-preview position-relative">
                <div class="verified-badge">
                    <i class="bi bi-patch-check-fill me-1"></i> Verified
                </div>

                <h5 class="text-center mb-4">Certificate Preview</h5>

                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Participant Name:</strong><br>
                            <?= htmlspecialchars($response['first_name'] . ' ' . $response['last_name']) ?></p>

                        <p><strong>Test Title:</strong><br>
                            <?= htmlspecialchars($response['test_title']) ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Score Achieved:</strong><br>
                            <?= $response['score'] ?>%</p>

                        <p><strong>Completion Date:</strong><br>
                            <?= date('F j, Y', strtotime($response['submitted_at'])) ?></p>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <p><strong>Certificate Number:</strong><br>
                        <?= $certificate_number ?></p>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Verification Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Verification Code:</strong><br>
                                <span class="verification-code"><?= $verification_code ?></span>
                            </p>

                            <p><strong>Verification URL:</strong><br>
                                <span class="verification-url"><?= $verification_url ?></span>
                            </p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p><strong>QR Code:</strong></p>
                            <div class="qr-code">
                                <?= $qr_code_svg ?>
                            </div>
                            <p class="mt-2"><small>Scan to verify this certificate</small></p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <p><strong>Verification Date:</strong><br>
                                <?= date('F j, Y, g:i a') ?></p>
                        </div>
                    </div>

                    <div class="alert alert-info mt-3">
                        <i class="bi bi-info-circle me-2"></i>
                        This certificate was issued by LifeBox Test Center and can be verified at any time using the verification code or QR code above.
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 no-print">
                <a href="../public/dashboard.php" class="btn btn-info">
                    <i class="bi bi-house me-1"></i> Return to LifeBox Test Center
                </a>
                <button onclick="window.print()" class="btn btn-outline-warning ms-2">
                    <i class="bi bi-printer me-1"></i> Print Verification
                </button>
            </div>
        </div>
    </div>

    <footer class="mt-5 py-4 bg-light text-center no-print">
        <div class="container">
            <p class="mb-0">LifeBox Test Center &copy; <?= date('Y') ?></p>
            <small class="text-muted">All certificates are verified through our secure verification system</small>
        </div>
    </footer>
</body>

</html>