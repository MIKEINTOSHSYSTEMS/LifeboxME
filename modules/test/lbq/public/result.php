<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';

$quiz = new Quiz($pdo);

$rid = isset($_GET['response_id']) ? intval($_GET['response_id']) : 0;
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Result - LifeBox Test Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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

    .result-container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary {
      font-weight: bold;
    }

    .card-header {
      background-color: #f8f9fa;
    }

    .card-body {
      background-color: #ffffff;
      padding: 1.5rem;
      border-radius: 0.5rem;
    }

    .test-result-title {
      font-size: 2rem;
      font-weight: 700;
      color: #333;
    }

    .result-info {
      margin-bottom: 1.5rem;
      font-size: 1.1rem;
    }

    .btn-container {
      text-align: center;
      margin-top: 1.5rem;
    }

    .footer {
      background-color: #f8f9fa;
      padding: 1.5rem;
      text-align: center;
    }

    .btn-print {
      font-size: 1.1rem;
      font-weight: bold;
    }

    .alert-info {
      background-color: #d1ecf1;
      border-color: #bee5eb;
      color: #0c5460;
    }

    .alert-success {
      background-color: #d4edda;
      border-color: #c3e6cb;
      color: #155724;
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
    <div class="result-container">
      <div class="text-center mb-4">
        <img src="../lblogo-dark.svg" alt="LifeBox Logo" height="60">
        <h1 class="test-result-title mt-3">Test Result</h1>
      </div>

      <div class="alert alert-success text-center">
        <i class="bi bi-check-circle-fill me-2"></i>
        <span class="verification-success">Test completed successfully</span>
      </div>

      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Your Test Result</h5>
        </div>
        <div class="card-body">
          <p class="result-info"><strong>Score:</strong> <?= htmlspecialchars($response['score']) ?> / 100</p>
          <p class="result-info"><strong>Raw points:</strong> <?= htmlspecialchars($response['points_raw']) ?></p>
          <p class="result-info"><strong>Submitted at:</strong> <?= htmlspecialchars($response['submitted_at']) ?></p>
        </div>
      </div>

      <div class="btn-container">
        <a href="test_results.php?response_id=<?= urlencode($rid) ?>" class="btn btn-info btn-lg mx-2">Go to Test Results</a>
        <a href="take_test.php?test_id=<?= urlencode($response['test_id']) ?>" class="btn btn-warning btn-lg mx-2">Take again</a>
      </div>
    </div>
  </div>

  <footer class="footer mt-5 py-4">
    <div class="container">
      <p class="mb-0">LifeBox Test Center &copy; <?= date('Y') ?></p>
      <small class="text-muted">All tests are verified through our secure system</small>
    </div>
  </footer>
</body>

</html>