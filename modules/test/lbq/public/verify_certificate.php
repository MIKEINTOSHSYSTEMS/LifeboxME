<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$verification_code = $_GET['code'] ?? '';

if (empty($verification_code)) {
    die("Invalid verification code");
}

// Find the response with this checksum
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, tp.first_name, tp.last_name
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Certificate - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
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
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="verification-container">
            <div class="text-center mb-4">
                <img src="../lblogo-white.svg" alt="LifeBox Logo" height="60">
                <h1 class="h3 mt-3">Certificate Verification</h1>
            </div>

            <div class="alert alert-success text-center">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span class="verification-success">This certificate is valid and verified</span>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Certificate Details</h5>
                </div>
                <div class="card-body">
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

                    <div class="mt-3">
                        <p><strong>Verification Code:</strong><br>
                            <code><?= $verification_code ?></code>
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="/" class="btn btn-primary">Return to LifeBox Test Center</a>
            </div>
        </div>
    </div>
</body>

</html>