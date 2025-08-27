<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$rid = intval($_GET['response_id'] ?? 0);
if (!$rid) {
    echo "No result id";
    exit;
}

$response = $quiz->getResponse($rid);
if (!$response) {
    echo "Response not found";
    exit;
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Test Result</h3>
                <p><strong>Score:</strong> <?= htmlspecialchars($response['score']) ?> / 100</p>
                <p><strong>Raw points:</strong> <?= htmlspecialchars($response['points_raw']) ?></p>
                <p><strong>Submitted at:</strong> <?= htmlspecialchars($response['submitted_at']) ?></p>
                <a href="take_test.php?test_id=<?= urlencode($response['test_id']) ?>" class="btn btn-secondary">Take again</a>
            </div>
        </div>
    </div>
</body>

</html>