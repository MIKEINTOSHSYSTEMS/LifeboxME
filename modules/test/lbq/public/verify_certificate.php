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
    die("Certificate not found or invalid verification code | This incedent will be reported!!!");
}

// Get certificate number
$certificate_number = "LB-" . str_pad($response['id'], 6, '0', STR_PAD_LEFT);
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

    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f7fb;
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: #0079a7ed !important;
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
            background: #0079a7ed;
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
                background: #0079a7ed !important;
                color: white !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../public/dashboard.php">
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
                        </div>
                        <div class="col-md-6">
                            <p><strong>Verification Date:</strong><br>
                                <?= date('F j, Y, g:i a') ?></p>
                        </div>
                    </div>

                    <div class="alert alert-info mt-3">
                        <i class="bi bi-info-circle me-2"></i>
                        This certificate was issued by LifeBox Test Center and can be verified at any time using the verification code above.
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