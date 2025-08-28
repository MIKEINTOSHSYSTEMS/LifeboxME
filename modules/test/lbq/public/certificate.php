<?php
session_start();
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

// Check if user is logged in
if (empty($_SESSION['participant_id'])) {
    header('Location: login.php');
    exit;
}

$participant_id = $_SESSION['participant_id'];
$response_id = intval($_GET['response_id'] ?? 0);

if (!$response_id) {
    header('Location: dashboard.php');
    exit;
}

// Get response details
$response = $quiz->getResponse($response_id);
if (!$response) {
    echo "Response not found";
    exit;
}

// Verify the response belongs to the current user
$stmt = $pdo->prepare("
    SELECT COUNT(*) 
    FROM lbquiz_responses r
    JOIN training_participation p ON p.participation_id = r.participation_id
    WHERE r.id = :response_id AND p.participant_id = :participant_id
");
$stmt->execute([
    ':response_id' => $response_id,
    ':participant_id' => $participant_id
]);

if ($stmt->fetchColumn() == 0) {
    echo "You don't have access to this certificate.";
    exit;
}

// Get test information
$test = $quiz->getTest($response['test_id']);

// Get participant information - FIXED: Removed reference to non-existent ts.title
$stmt = $pdo->prepare("
    SELECT tp.*, p.training_id
    FROM training_participants tp
    JOIN training_participation p ON p.participant_id = tp.participant_id
    WHERE p.participation_id = :participation_id
");
$stmt->execute([':participation_id' => $response['participation_id']]);
$participant = $stmt->fetch();

// Get average scores for this training
$stmt = $pdo->prepare("
    SELECT 
        AVG(CASE WHEN t.is_pretest = true THEN r.score END) as avg_pretest,
        AVG(CASE WHEN t.is_pretest = false THEN r.score END) as avg_posttest,
        COUNT(r.id) as test_count
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    WHERE r.participation_id = :participation_id
");
$stmt->execute([':participation_id' => $response['participation_id']]);
$score_data = $stmt->fetch();

// Generate QR code data (URL to verify certificate)
$verification_url = "https://" . $_SERVER['HTTP_HOST'] . "/verify_certificate.php?code=" . urlencode($response['checksum']);
$qr_code_data = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($verification_url);

// Set certificate number
$certificate_number = "LB-" . str_pad($response_id, 6, '0', STR_PAD_LEFT);

// Check if PDF export is requested
$is_pdf_export = isset($_GET['export']) && $_GET['export'] === 'pdf';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certificate - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #0d6efd;
            --success: #198754;
            --gold: #ffd700;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
        }

        .certificate-container {
            background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%);
            border: 20px solid var(--gold);
            padding: 3rem;
            position: relative;
            min-height: 297mm;
            /* A4 height */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 6rem;
            color: rgba(0, 0, 0, 0.03);
            font-weight: bold;
            z-index: 1;
            white-space: nowrap;
        }

        .certificate-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
        }

        .certificate-body {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            z-index: 2;
        }

        .certificate-footer {
            text-align: center;
            margin-top: 3rem;
            position: relative;
            z-index: 2;
        }

        .signature-area {
            margin-top: 3rem;
        }

        .certificate-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .certificate-subtitle {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 2rem;
        }

        .participant-name {
            font-size: 2rem;
            font-weight: bold;
            color: #212529;
            margin-bottom: 1rem;
        }

        .certificate-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .score-display {
            font-size: 3rem;
            font-weight: bold;
            color: var(--success);
            margin: 1.5rem 0;
        }

        .certificate-details {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin: 2rem 0;
        }

        .verification-info {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 2rem;
        }

        .gold-border {
            border: 2px solid var(--gold);
            padding: 1rem;
        }

        @media print {
            body {
                background-color: white;
            }

            .certificate-container {
                border: none;
                box-shadow: none;
                padding: 0;
            }

            .no-print {
                display: none !important;
            }

            .watermark {
                color: rgba(0, 0, 0, 0.03) !important;
            }
        }

        @media (max-width: 768px) {
            .certificate-container {
                padding: 1.5rem;
                border-width: 10px;
            }

            .certificate-title {
                font-size: 2rem;
            }

            .participant-name {
                font-size: 1.5rem;
            }

            .score-display {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="no-print">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="../lblogo-dark.svg" alt="LifeBox Logo" height="30" class="d-inline-block align-text-top me-2">
                    LifeBox Test Center
                </a>
                <div class="d-flex align-items-center">
                    <span class="navbar-text text-white me-3 d-none d-md-block">
                        <i class="bi bi-person-circle me-1"></i>
                        <?= htmlspecialchars($_SESSION['participant_name'] ?? 'User') ?>
                    </span>
                    <a href="test_results.php?response_id=<?= $response_id ?>" class="btn btn-outline-light btn-sm me-2">
                        <i class="bi bi-arrow-left me-1"></i> Back to Results
                    </a>
                    <button onclick="window.print()" class="btn btn-light btn-sm">
                        <i class="bi bi-printer me-1"></i> Print
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="certificate-container">
                    <!-- Watermark -->
                    <div class="watermark">LIFEBOX CERTIFICATION</div>

                    <!-- Header -->
                    <div class="certificate-header">
                        <img src="../lblogo-dark.svg" alt="LifeBox Logo" height="80" class="mb-3">
                        <div class="certificate-title">Certificate of Achievement</div>
                        <div class="certificate-subtitle">This certifies that</div>
                    </div>

                    <!-- Body -->
                    <div class="certificate-body">
                        <div class="participant-name">
                            <?= htmlspecialchars($participant['first_name'] . ' ' . $participant['last_name']) ?>
                        </div>

                        <div class="certificate-text">
                            has successfully completed the <?= htmlspecialchars($test['is_pretest'] ? 'Pre-test' : 'Post-test') ?> for
                        </div>

                        <div class="certificate-text fw-bold">
                            "<?= htmlspecialchars($test['title']) ?>"
                        </div>

                        <div class="certificate-text">
                            with an overall score of
                        </div>

                        <div class="score-display">
                            <?= $response['score'] ?>%
                        </div>

                        <div class="certificate-details">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <strong>Training Session:</strong><br>
                                    Training #<?= $participant['training_id'] ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Date Completed:</strong><br>
                                    <?= date('F j, Y', strtotime($response['submitted_at'])) ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Certificate Number:</strong><br>
                                    <?= $certificate_number ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Test Type:</strong><br>
                                    <span class="badge bg-<?= $test['is_pretest'] ? 'info' : 'success' ?>">
                                        <?= $test['is_pretest'] ? 'Pre-test' : 'Post-test' ?>
                                    </span>
                                </div>
                            </div>

                            <?php if ($score_data['test_count'] > 1): ?>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <strong>Performance Summary:</strong>
                                        <div class="mt-2">
                                            <span class="badge bg-info me-2">Pre-test Average: <?= $score_data['avg_pretest'] !== null ? round($score_data['avg_pretest'], 1) : 'N/A' ?>%</span>
                                            <span class="badge bg-success">Post-test Average: <?= $score_data['avg_posttest'] !== null ? round($score_data['avg_posttest'], 1) : 'N/A' ?>%</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="certificate-footer">
                        <div class="row signature-area">
                            <div class="col-md-6 mb-3">
                                <div class="gold-border">
                                    <div class="fw-bold"><?= htmlspecialchars($participant['first_name'] . ' ' . $participant['last_name']) ?></div>
                                    <div class="text-muted">Participant</div>
                                    <div class="mt-3">Date: <?= date('m/d/Y') ?></div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="gold-border">
                                    <div class="fw-bold">LifeBox Certification Authority</div>
                                    <div class="text-muted">Authorized Signature</div>
                                    <div class="mt-3">
                                        <img src="/assets/img/lb_favicon.svg" alt="Authorized Signature" height="40">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="verification-info">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div>Verify this certificate at: <?= $verification_url ?></div>
                                    <div>Certificate ID: <?= $response['checksum'] ?></div>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <img src="<?= $qr_code_data ?>" alt="QR Code" width="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="text-center mt-4 no-print">
                    <button onclick="window.print()" class="btn btn-primary me-2">
                        <i class="bi bi-printer me-1"></i> Print Certificate
                    </button>
                    <a href="test_results.php?response_id=<?= $response_id ?>" class="btn btn-outline-primary me-2">
                        <i class="bi bi-arrow-left me-1"></i> Back to Results
                    </a>
                    <a href="dashboard.php" class="btn btn-outline-secondary">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Automatically trigger print if PDF export is requested
        <?php if ($is_pdf_export): ?>
            window.onload = function() {
                window.print();
            };
        <?php endif; ?>
    </script>
</body>

</html>