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

// Get participant information
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

// Generate a checksum if one doesn't exist
if (empty($response['checksum'])) {
    $checksum = md5($response_id . $participant_id . time());

    // Update the response with the new checksum
    $updateStmt = $pdo->prepare("UPDATE lbquiz_responses SET checksum = :checksum WHERE id = :response_id");
    $updateStmt->execute([':checksum' => $checksum, ':response_id' => $response_id]);

    // Refresh the response data
    $response['checksum'] = $checksum;
}

// Generate QR code data (URL to verify certificate)
$verification_url = "https://" . $_SERVER['HTTP_HOST'] . "/modules/test/lbq/public/verify_certificate.php?code=" . urlencode($response['checksum']);
$qr_code_data = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($verification_url);

// Set certificate number
$certificate_number = "LB-" . str_pad($response_id, 6, '0', STR_PAD_LEFT);

// Check if PDF export is requested
$is_pdf_export = isset($_GET['export']) && $_GET['export'] === 'pdf';

// Border options
$border_options = [
    'classic' => 'Classic Gold',
    'modern' => 'Modern Blue',
    'elegant' => 'Elegant Maroon',
    'minimal' => 'Minimalist',
    'custom' => 'Custom Image'
];

// Get selected border from GET or default to classic
$selected_border = isset($_GET['border']) && array_key_exists($_GET['border'], $border_options)
    ? $_GET['border']
    : 'classic';

$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/modules/test/lbq/public/";

// Handle custom image upload

//$custom_border_url = null;  // Default to null if no custom image is provided

//$custom_border_url = $base_url . "custcert.png";
//$custom_border_url = $base_url . "custcertgold.png";
$custom_border_url = $base_url . "assets/templates/custcertgoldart.png";

//$custom_border_url = "http://lifeboxme/modules/test/lbq/public/custcert.png";
//$custom_border_url = null;


if ($selected_border === 'custom' && isset($_GET['custom_img'])) {
    $custom_border_url = filter_var($_GET['custom_img'], FILTER_SANITIZE_URL);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certificate - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Parisienne&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        :root {
            --primary: #0079a7;
            --success: #198754;
            --gold: #d4af37;
            --dark-gold: #b8860b;
            --light-gold: #f8e9a9;
            --parchment: #f5e8c8;
            --dark-burgundy: #800020;
            --royal-blue: #1a4b8c;
            --light-blue: #a7c5ed;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
            color: #333;
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: #0079a7ed !important;
        }

        .certificate-container {
            background:
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.4) 5px, transparent 25px),
                radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.4) 5px, transparent 25px),
                linear-gradient(135deg, var(--parchment) 0%, #f9f3e3 100%);
            border: 25px solid transparent;
            padding: 40px;
            position: relative;
            width: 297mm;
            min-height: 210mm;
            margin: 0 auto;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.5);
            background-clip: padding-box;
            page-break-inside: avoid;
        }

        /* Border Styles */
        .border-classic {
            border-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0 L100,0 L100,100 L0,100 Z' fill='none' stroke='%23d4af37' stroke-width='10' stroke-dasharray='10,5' /%3E%3Cpath d='M20,20 L80,20 L80,80 L20,80 Z' fill='none' stroke='%23d4af37' stroke-width='5' /%3E%3C/svg%3E") 25 round;
        }

        .border-modern {
            border-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0 L100,0 L100,100 L0,100 Z' fill='none' stroke='%231a4b8c' stroke-width='8' stroke-dasharray='15,10,5,10' /%3E%3Cpath d='M15,15 L85,15 L85,85 L15,85 Z' fill='none' stroke='%23a7c5ed' stroke-width='3' /%3E%3C/svg%3E") 25 round;
        }

        .border-elegant {
            border-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0 L100,0 L100,100 L0,100 Z' fill='none' stroke='%23800020' stroke-width='12' /%3E%3Cpath d='M10,10 L90,10 L90,90 L10,90 Z' fill='none' stroke='%23d4af37' stroke-width='5' stroke-dasharray='8,4' /%3E%3C/svg%3E") 25 round;
        }

        .border-minimal {
            border: 2px solid #ccc;
        }

        .border-custom {
            border: 50px solid transparent;
            <?php if ($custom_border_url): ?>border-image: url('<?= $custom_border_url ?>') 200 round;
            <?php else: ?>border-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0 L100,0 L100,100 L0,100 Z' fill='none' stroke='%230d6efd' stroke-width='8' stroke-dasharray='10,5' /%3E%3Cpath d='M20,20 L80,20 L80,80 L20,80 Z' fill='none' stroke='%230d6efd' stroke-width='3' /%3E%3C/svg%3E") 25 round;
            <?php endif; ?>
        }

        .ornamental-border {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 2px solid var(--gold);
            pointer-events: none;
        }

        .corner {
            position: absolute;
            width: 80px;
            height: 80px;
        }

        .corner-tl {
            top: -5px;
            left: -5px;
            border-top: 4px solid var(--gold);
            border-left: 4px solid var(--gold);
        }

        .corner-tr {
            top: -5px;
            right: -5px;
            border-top: 4px solid var(--gold);
            border-right: 4px solid var(--gold);
        }

        .corner-bl {
            bottom: -5px;
            left: -5px;
            border-bottom: 4px solid var(--gold);
            border-left: 4px solid var(--gold);
        }

        .corner-br {
            bottom: -5px;
            right: -5px;
            border-bottom: 4px solid var(--gold);
            border-right: 4px solid var(--gold);
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 6rem;
            font-family: 'Cinzel', serif;
            color: rgba(0, 0, 0, 0.03);
            font-weight: bold;
            z-index: 1;
            white-space: nowrap;
        }

        .seal {
            position: absolute;
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, var(--light-gold) 0%, var(--gold) 70%);
            border: 3px solid var(--dark-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.5);
            z-index: 2;
        }

        .seal-tl {
            top: 30px;
            left: 30px;
        }

        .seal-tr {
            top: 30px;
            right: 30px;
        }

        .seal-content {
            text-align: center;
            color: var(--dark-burgundy);
            font-family: 'Cinzel', serif;
            font-size: 0.7rem;
            font-weight: bold;
            text-transform: uppercase;
            padding: 10px;
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
            margin-top: -3rem;
            position: relative;
            z-index: 2;
        }

        .signature-area {
            margin-bottom: -22rem;
        }

        .certificate-title {
            font-family: 'Cinzel', serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--dark-burgundy);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.1);
        }

        .certificate-subtitle {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--dark-gold);
            margin-bottom: 2rem;
            font-style: italic;
        }

        .participant-name {
            font-family: 'Dancing Script', cursive;
            font-size: 3.5rem;
            font-weight: bold;
            color: var(--dark-burgundy);
            margin-bottom: 1.5rem;
            padding: 15px 30px;
            display: inline-block;
            border-top: 2px solid var(--gold);
            border-bottom: 2px solid var(--gold);
            position: relative;
        }

        .participant-name:before,
        .participant-name:after {
            content: "✦";
            color: var(--gold);
            font-size: 1.5rem;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .participant-name:before {
            left: 0;
        }

        .participant-name:after {
            right: 0;
        }

        .certificate-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: #555;
        }

        .score-display {
            font-family: 'Cinzel', serif;
            font-size: 4rem;
            font-weight: bold;
            color: var(--dark-gold);
            margin: 1.5rem 0;
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.1);
            position: relative;
            display: inline-block;
            padding: 0 20px;
        }

        .score-display:before,
        .score-display:after {
            content: "✧";
            color: var(--gold);
            font-size: 2rem;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .score-display:before {
            left: -25px;
        }

        .score-display:after {
            right: -25px;
        }

        .certificate-details {
            background-color: rgb(247 239 217 / 0.047%);
            padding: 2rem;
            border-radius: 0.5rem;
            margin: 2.5rem 0;
            border: 1px solid var(--light-gold);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .verification-info {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: -2rem;
            padding: 15px;
            background: rgba(242, 242, 242, 0.07);
            border-radius: 5px;
        }

        .gold-border {
            border: 0px solid var(--gold);
            padding: 1.5rem;
            background: rgba(242, 242, 242, 0.079);
            /* position: relative;*/
        }

        .gold-border:before {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border: 1px solid var(--light-gold);
            pointer-events: none;
        }

        .signature-line {
            border-top: 1px solid #333;
            width: 200px;
            margin: 5px auto;
        }

        .border-selector {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .border-option {
            display: inline-block;
            width: 80px;
            height: 80px;
            margin: 5px;
            border: 15px solid transparent;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .border-option:hover {
            transform: scale(1.1);
        }

        .border-option.classic {
            border-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0 L100,0 L100,100 L0,100 Z' fill='none' stroke='%23d4af37' stroke-width='10' stroke-dasharray='10,5' /%3E%3Cpath d='M20,20 L80,20 L80,80 L20,80 Z' fill='none' stroke='%23d4af37' stroke-width='5' /%3E%3C/svg%3E") 25 round;
        }

        .border-option.modern {
            border-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0 L100,0 L100,100 L0,100 Z' fill='none' stroke='%231a4b8c' stroke-width='8' stroke-dasharray='15,10,5,10' /%3E%3Cpath d='M15,15 L85,15 L85,85 L15,85 Z' fill='none' stroke='%23a7c5ed' stroke-width='3' /%3E%3C/svg%3E") 25 round;
        }

        .border-option.elegant {
            border-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0 L100,0 L100,100 L0,100 Z' fill='none' stroke='%23800020' stroke-width='12' /%3E%3Cpath d='M10,10 L90,10 L90,90 L10,90 Z' fill='none' stroke='%23d4af37' stroke-width='5' stroke-dasharray='8,4' /%3E%3C/svg%3E") 25 round;
        }

        .border-option.minimal {
            border: 2px solid #ccc;
        }

        .border-option.custom {
            border: 2px solid #0079a7ed;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Arial" font-size="10">Custom</text></svg>');
            background-size: cover;
        }

        .border-option.active {
            outline: 3px solid var(--primary);
            outline-offset: 2px;
        }

        .custom-image-input {
            display: none;
            margin-top: -7rem;
        }

        .mt-4 {
            margin-top: 10rem !important;
        }

        @media print {
            body {
                background-color: transparent;
            }

            .certificate-container {
                border: none;
                box-shadow: none;
                padding: 0;
                margin: 0;
                width: 100%;
                min-height: 100vh;
            }

            .no-print {
                display: none !important;
            }

            .watermark {
                color: rgba(0, 0, 0, 0.03) !important;
            }

            .certificate-container {
                page-break-after: always;
                page-break-inside: avoid;
            }
        }

        @media (max-width: 768px) {
            .certificate-container {
                padding: 1.5rem;
                border-width: 15px;
                width: 100%;
            }

            .certificate-title {
                font-size: 2.5rem;
            }

            .participant-name {
                font-size: 2.5rem;
            }

            .score-display {
                font-size: 3rem;
            }

            .seal {
                width: 80px;
                height: 80px;
            }

            .seal-content {
                font-size: 0.5rem;
            }
        }

        @media (max-width: 1024px) {
            .certificate-container {
                width: 100%;
            }
        }

        /* Landscape orientation for printing */
        @page {
            size: A4 portrait;
            margin: 0;
        }

        /* PDF specific styles */
        @media all {
            .page-break {
                display: none;
            }
        }

        @media print {
            .page-break {
                page-break-before: always;
            }

            html,
            body {
                width: 297mm;
                height: 210mm;
            }

            .certificate-container {
                width: 297mm;
                min-height: 210mm;
                margin: 0;
                padding: 15mm;
            }
        }
    </style>
</head>

<body>
    <div class="no-print">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="../lblogo-white.svg" alt="LifeBox Logo" height="30" class="d-inline-block align-text-top me-2">
                    Test Center
                </a>
                <div class="d-flex align-items-center">
                    <span class="navbar-text text-white me-3 d-none d-md-block">
                        <i class="bi bi-person-circle me-1"></i>
                        <?= htmlspecialchars($_SESSION['participant_name'] ?? 'User') ?>
                    </span>
                    <a href="test_results.php?response_id=<?= $response_id ?>" class="btn btn-outline-light btn-sm me-2">
                        <i class="bi bi-arrow-left me-1"></i> Back to Results
                    </a>
                    <button onclick="window.print()" class="btn btn-light btn-sm me-2">
                        <i class="bi bi-printer me-1"></i> Print
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <div class="container py-4 no-print">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="border-selector">
                    <h5 class="text-center mb-3">Select Certificate Border Style:</h5>
                    <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
                        <?php foreach ($border_options as $key => $name): ?>
                            <div class="border-option-container text-center <?= $selected_border === $key ? 'active' : '' ?>">
                                <div class="border-option <?= $key ?> <?= $selected_border === $key ? 'active' : '' ?>"
                                    data-border="<?= $key ?>" title="<?= $name ?>"
                                    onclick="selectBorder('<?= $key ?>')">
                                </div>
                                <div class="border-name mt-2 small fw-medium <?= $selected_border === $key ? 'text-info' : 'text-muted' ?>">
                                    <?= $name ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="customImageInput" class="custom-image-input <?= $selected_border === 'custom' ? 'd-block' : 'd-none' ?>">
                        <div class="input-group mt-4">
                            <span class="input-group-text bg-light"><i class="bi bi-link-45deg"></i></span>
                            <input type="text" id="customImageUrl" class="form-control" placeholder="Enter image URL (recommended: 1970x1400px for best results)"
                                value="<?= $custom_border_url ?>" onchange="updateCustomBorder(this.value)">
                            <button class="btn btn-outline-secondary" type="button" onclick="document.getElementById('customImageFile').click()">
                                <i class="bi bi-upload me-1"></i> Upload
                            </button>
                            <input type="file" id="customImageFile" accept="image/*" style="display: none;" onchange="handleImageUpload(this)">
                        </div>
                        <div class="form-text">For best results, use a border image with a 1970x1400px aspect ratio</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="certificate-container border-<?= $selected_border ?>" id="certificate">
                    <!-- Decorative corners -->
                    <div class="corner corner-tl"></div>
                    <div class="corner corner-tr"></div>
                    <div class="corner corner-bl"></div>
                    <div class="corner corner-br"></div>

                    <!-- Decorative seals -->
                    <div class="seal seal-tl">
                        <div class="seal-content">
                            LifeBox<br>Excellence<br>In<br>Learning
                        </div>
                    </div>
                    <div class="seal seal-tr">
                        <div class="seal-content">
                            Achievement<br>Certified<br><?= date('Y') ?>
                        </div>
                    </div>

                    <!-- Ornamental border -->
                    <div class="ornamental-border"></div>

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

                        <div class="certificate-text fw-bold" style="font-family: 'Cinzel', serif;">
                            "<?= htmlspecialchars($test['title']) ?>"
                        </div>

                        <div class="certificate-text">
                            with a score of
                        </div>

                        <div class="score-display">
                            <?= $response['score'] ?>%
                        </div>
                        <br></br>
                        <span class="badge bg-<?= $response['score'] >= 70 ? 'success' : ($response['score'] >= 50 ? 'warning' : 'danger') ?>">
                            <?= $response['score'] >= 70 ? 'Excellent' : ($response['score'] >= 50 ? 'Good' : 'Needs Improvement') ?>
                        </span>

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
                                    <div class="signature-line"></div>
                                    <div class="mt-3">Date: <?= date('m/d/Y') ?></div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="gold-border">
                                    <div class="fw-bold">LifeBox Certification Authority</div>
                                    <div class="text-muted">Authorized Signature</div>
                                    <div class="signature-line"></div>
                                    <div class="mt-3">
                                        <!--                                        <img src="/assets/img/lb_favicon.svg" alt="Authorized Signature" height="40">-->
                                        <img src="../assets/imgs/lbtc_sign.png" alt="Authorized Signature" width="25%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- QR Code - Centered at bottom -->
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-8 text-center">
                                <div class="verification-info">
                                    <!--
                                    <div class="mb-2">Verify this certificate at: <?= $verification_url ?></div>
                                    <div class="mb-2">Certificate ID: <?= $response['checksum'] ?></div>
                                    -->
                                    <img src="<?= $qr_code_data ?>" alt="QR Code" width="120" class="mt-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="verification-info"><small>Certificate ID: <?= $response['checksum'] ?></small></div>
                </div>

                <!-- Action Buttons -->
                <div class="text-center mt-4 no-print">
                    <button onclick="window.print()" class="btn btn-secondary me-2">
                        <i class="bi bi-printer me-1"></i> Print Certificate
                    </button>
                    <button onclick="downloadAsPNG()" class="btn btn-success me-2">
                        <i class="bi bi-image me-1"></i> Download as PNG
                    </button>
                    <button onclick="downloadAsPDF()" class="btn btn-danger me-2">
                        <i class="bi bi-file-pdf me-1"></i> Download as PDF
                    </button>
                    <a href="test_results.php?response_id=<?= $response_id ?>" class="btn btn-outline-warning me-2">
                        <i class="bi bi-arrow-left me-1"></i> Back to Results
                    </a>
                    <a href="dashboard.php" class="btn btn-info">
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

        // Border selection function
        function selectBorder(borderType) {
            // Update URL parameter
            const url = new URL(window.location);
            url.searchParams.set('border', borderType);

            // If custom border is selected, show the input field
            if (borderType === 'custom') {
                document.getElementById('customImageInput').classList.remove('d-none');
                document.getElementById('customImageInput').classList.add('d-block');
            } else {
                document.getElementById('customImageInput').classList.remove('d-block');
                document.getElementById('customImageInput').classList.add('d-none');
                // Remove custom image parameter if switching away from custom
                url.searchParams.delete('custom_img');
                window.history.replaceState({}, '', url);

                // Update the certificate border
                document.getElementById('certificate').className = 'certificate-container border-' + borderType;
            }

            // Update active class on border options
            document.querySelectorAll('.border-option').forEach(option => {
                if (option.dataset.border === borderType) {
                    option.classList.add('active');
                } else {
                    option.classList.remove('active');
                }
            });

            // Reload the page with the new border parameter
            window.location.href = url.toString();
        }

        // Update custom border with URL
        function updateCustomBorder(imageUrl) {
            const url = new URL(window.location);
            url.searchParams.set('custom_img', imageUrl);
            window.location.href = url.toString();
        }

        // Handle image upload
        function handleImageUpload(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('customImageUrl').value = e.target.result;
                    updateCustomBorder(e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Download as PNG
        function downloadAsPNG() {
            html2canvas(document.getElementById('certificate'), {
                scale: 2,
                useCORS: true,
                logging: false,
                backgroundColor: null
            }).then(canvas => {
                const link = document.createElement('a');
                link.download = 'certificate-<?= $certificate_number ?>.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
            });
        }

        // Download as PDF
        function downloadAsPDF() {
            const {
                jsPDF
            } = window.jspdf;

            html2canvas(document.getElementById('certificate'), {
                scale: 2,
                useCORS: true,
                logging: false,
                backgroundColor: null
            }).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF('l', 'mm', 'a4');
                const imgProps = pdf.getImageProperties(imgData);
                const pdfWidth = pdf.internal.pageSize.getWidth();
                const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('certificate-<?= $certificate_number ?>.pdf');
            });
        }
    </script>
</body>

</html>