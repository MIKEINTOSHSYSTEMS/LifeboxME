<?php
session_start();
require __DIR__ . '/../src/db.php';

// Check if user is logged in
if (empty($_SESSION['participant_id'])) {
    header('Location: login.php');
    exit;
}

$participant_id = $_SESSION['participant_id'];

// Get participant details
$stmt = $pdo->prepare("SELECT * FROM training_participants WHERE participant_id = :id");
$stmt->execute([':id' => $participant_id]);
$participant = $stmt->fetch();

// Get participant's training sessions
$stmt = $pdo->prepare("
    SELECT p.*, t.title as training_title, t.description as training_description
    FROM training_participation p
    LEFT JOIN lbquiz_tests t ON t.training_id = p.training_id
    WHERE p.participant_id = :id
    ORDER BY p.created_at DESC
");
$stmt->execute([':id' => $participant_id]);
$trainings = $stmt->fetchAll();

// Get test results
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, t.is_pretest, t.training_id
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    WHERE r.userid = :id OR r.participation_id IN (
        SELECT participation_id FROM training_participation WHERE participant_id = :id
    )
    ORDER BY r.submitted_at DESC
    LIMIT 10
");
$stmt->execute([':id' => $participant_id]);
$results = $stmt->fetchAll();

// Calculate average scores for each training
$training_scores = [];
foreach ($trainings as $training) {
    $stmt = $pdo->prepare("
        SELECT 
            AVG(CASE WHEN t.is_pretest = true THEN r.score END) as avg_pretest,
            AVG(CASE WHEN t.is_pretest = false THEN r.score END) as avg_posttest,
            COUNT(r.id) as test_count
        FROM lbquiz_responses r
        LEFT JOIN lbquiz_tests t ON t.id = r.test_id
        WHERE r.participation_id = :participation_id
    ");
    $stmt->execute([':participation_id' => $training['participation_id']]);
    $score_data = $stmt->fetch();

    $training_scores[$training['participation_id']] = [
        'avg_pretest' => round($score_data['avg_pretest'] ?? 0, 1),
        'avg_posttest' => round($score_data['avg_posttest'] ?? 0, 1),
        'test_count' => $score_data['test_count'] ?? 0
    ];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dashboard - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/style/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6c757d;
            --success: #198754;
            --danger: #dc3545;
            --warning: #ffc107;
            --info: #0dcaf0;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
        }

        .dashboard-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            font-size: 2.5rem;
            opacity: 0.8;
        }

        .test-card {
            border-left: 4px solid var(--primary);
            transition: all 0.3s;
        }

        .test-card:hover {
            border-left: 4px solid var(--info);
        }

        .navbar-brand {
            font-weight: 600;
        }

        .welcome-section {
            background: linear-gradient(135deg, #ff6b35, #1282ad);
            color: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .badge-score {
            font-size: 0.85rem;
            padding: 0.35em 0.65em;
        }

        .progress {
            height: 10px;
            border-radius: 5px;
        }

        .result-item {
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }

        .result-item:hover {
            border-left: 3px solid var(--primary);
            background-color: #f8f9fa;
        }

        .certificate-btn {
            background: linear-gradient(135deg, var(--light), #0f6848);
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }

        .certificate-btn:hover {
            background: linear-gradient(135deg, #0f6848, var(--light));
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .welcome-section {
                padding: 1.5rem;
            }

            .stat-icon {
                font-size: 2rem;
            }

            .dashboard-card {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">
                <img src="../lblogo-white.svg" alt="LifeBox Logo" height="30" class="d-inline-block align-text-top me-2">
                Test Center
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            <i class="bi bi-speedometer2 me-1"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="take_test.php">
                            <i class="bi bi-pencil-square me-1"></i> Available Tests
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#results-section">
                            <i class="bi bi-bar-chart me-1"></i> My Results
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <i class="bi bi-person-circle me-1"></i> My Profile
                        </a>
                    </li>
    -->
                </ul>
                <div class="d-flex align-items-center">
                    <span class="navbar-text text-white me-3 d-none d-md-block">
                        <a class="nav-link" href="profile.php">
                            <i class="bi bi-person-circle me-1"></i>
                            <?= htmlspecialchars($participant['title_salutation'] . $participant['first_name'] . ' ' . $participant['last_name'] ?? '') ?>
                        </a>
                    </span>
                    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>Welcome back, <?= htmlspecialchars($participant['title_salutation'] . $participant['first_name'] ?? '') ?>!</h2>
                    <p class="lead mb-0">Ready to continue your learning journey?</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="take_test.php" class="btn btn-light btn-lg mt-3 mt-md-0">
                        <i class="bi bi-pencil-square me-2"></i> Take a Test
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats Overview -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="dashboard-card card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="card-subtitle mb-2 text-muted">Completed Tests</h6>
                                <h3 class="card-title"><?= count($results) ?></h3>
                            </div>
                            <div class="stat-icon text-primary">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="dashboard-card card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="card-subtitle mb-2 text-muted">Active Trainings</h6>
                                <h3 class="card-title"><?= count($trainings) ?></h3>
                            </div>
                            <div class="stat-icon text-info">
                                <i class="bi bi-journal-bookmark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="dashboard-card card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="card-subtitle mb-2 text-muted">Average Score</h6>
                                <h3 class="card-title">
                                    <?php
                                    $avg_score = 0;
                                    if (count($results) > 0) {
                                        $scores = array_column($results, 'score');
                                        $scores = array_filter($scores); // Remove null values
                                        if (count($scores) > 0) {
                                            $avg_score = round(array_sum($scores) / count($scores), 1);
                                        }
                                    }
                                    echo $avg_score;
                                    ?>%
                                </h3>
                            </div>
                            <div class="stat-icon text-success">
                                <i class="bi bi-graph-up"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Training Sessions -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card dashboard-card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">My Training Sessions</h5>
                    </div>
                    <div class="card-body">
                        <?php if (count($trainings) > 0): ?>
                            <div class="list-group list-group-flush">
                                <?php foreach ($trainings as $training):
                                    $scores = $training_scores[$training['participation_id']] ?? ['avg_pretest' => 0, 'avg_posttest' => 0, 'test_count' => 0];
                                ?>
                                    <div class="list-group-item border-0 px-0">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="mb-1"><?= htmlspecialchars($training['training_title'] ?? 'Training #' . $training['training_id']) ?></h6>
                                            <span class="badge bg-primary">Training</span>
                                        </div>
                                        <p class="text-muted small mb-2"><?= htmlspecialchars($training['training_description'] ?? '') ?></p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <?php if ($scores['test_count'] > 0): ?>
                                                    <span class="badge badge-score bg-info me-2">
                                                        Pre-test: <?= $scores['avg_pretest'] ?>%
                                                    </span>
                                                    <span class="badge badge-score bg-success">
                                                        Post-test: <?= $scores['avg_posttest'] ?>%
                                                    </span>
                                                <?php else: ?>
                                                    <span class="badge badge-score bg-secondary">
                                                        No tests taken yet
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <a href="take_test.php?participation_id=<?= $training['participation_id'] ?>"
                                                class="btn btn-sm btn-outline-primary">
                                                <?= $scores['test_count'] > 0 ? 'Retake Test' : 'Take Test' ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle me-2"></i>
                                You are not enrolled in any training sessions yet.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Results Section -->
                <div id="results-section" class="card dashboard-card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Recent Test Results</h5>
                    </div>
                    <div class="card-body">
                        <?php if (count($results) > 0): ?>
                            <div class="list-group list-group-flush">
                                <?php foreach ($results as $result): ?>
                                    <div class="list-group-item border-0 px-0 result-item">
                                        <div class="d-flex justify-content-between align-items-start mb-1">
                                            <h6 class="mb-0"><?= htmlspecialchars($result['test_title']) ?></h6>
                                            <span class="badge bg-<?= $result['is_pretest'] ? 'info' : 'success' ?>">
                                                <?= $result['is_pretest'] ? 'Pre-test' : 'Post-test' ?>
                                            </span>
                                        </div>
                                        <p class="text-muted small mb-2">
                                            Taken on: <?= date('M j, Y g:i A', strtotime($result['submitted_at'])) ?>
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 me-3">
                                                <div class="progress">
                                                    <div class="progress-bar bg-<?= $result['score'] >= 70 ? 'success' : ($result['score'] >= 50 ? 'warning' : 'danger') ?>"
                                                        role="progressbar"
                                                        style="width: <?= $result['score'] ?>%;"
                                                        aria-valuenow="<?= $result['score'] ?>"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-bold text-<?= $result['score'] >= 70 ? 'success' : ($result['score'] >= 50 ? 'warning' : 'danger') ?>">
                                                <?= $result['score'] ?>%
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <a href="test_results.php?response_id=<?= $result['id'] ?>" class="btn btn-sm btn-outline-primary me-2">
                                                <i class="bi bi-eye me-1"></i> View Details
                                            </a>
                                            <a href="certificate.php?response_id=<?= $result['id'] ?>" class="btn btn-sm certificate-btn">
                                                <i class="bi bi-award me-1"></i> Certificate
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="text-center mt-3">
                                <a href="all_results.php" class="btn btn-outline-primary">View All Results</a>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle me-2"></i>
                                You haven't taken any tests yet. <a href="take_test.php" class="alert-link">Take your first test</a>.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card dashboard-card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="take_test.php" class="btn btn-primary">
                                <i class="bi bi-pencil-square me-2"></i> Take a Test
                            </a>
                            <a href="#results-section" class="btn btn-outline-primary">
                                <i class="bi bi-bar-chart me-2"></i> View Results
                            </a>
                            <!--<a href="certificates.php" class="btn btn-outline-success">-->
                            <a href="all_results.php" class="btn btn-outline-success">
                                <i class="bi bi-award me-2"></i> My Certificates
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card dashboard-card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Performance Summary</h5>
                    </div>
                    <div class="card-body">
                        <?php if (count($results) > 0): ?>
                            <canvas id="performanceChart" height="250"></canvas>
                            <div class="mt-3 text-center">
                                <p class="mb-1">Overall Average: <strong><?= $avg_score ?>%</strong></p>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-<?= $avg_score >= 70 ? 'success' : ($avg_score >= 50 ? 'warning' : 'danger') ?>"
                                        role="progressbar"
                                        style="width: <?= $avg_score ?>%;"
                                        aria-valuenow="<?= $avg_score ?>"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle me-2"></i>
                                No performance data available yet.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Initialize performance chart if results exist
        <?php if (count($results) > 0): ?>
            const ctx = document.getElementById('performanceChart').getContext('2d');
            const performanceChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?= json_encode(array_map(function ($r) {
                                return substr($r['test_title'], 0, 20) . (strlen($r['test_title']) > 20 ? '...' : '');
                            }, $results)) ?>,
                    datasets: [{
                        label: 'Test Scores (%)',
                        data: <?= json_encode(array_column($results, 'score')) ?>,
                        backgroundColor: [
                            'rgba(13, 110, 253, 0.7)',
                            'rgba(25, 135, 84, 0.7)',
                            'rgba(255, 193, 7, 0.7)',
                            'rgba(220, 53, 69, 0.7)',
                            'rgba(13, 202, 240, 0.7)',
                            'rgba(108, 117, 125, 0.7)',
                            'rgba(111, 66, 193, 0.7)',
                            'rgba(253, 126, 20, 0.7)',
                            'rgba(32, 201, 151, 0.7)',
                            'rgba(214, 51, 132, 0.7)'
                        ],
                        borderColor: [
                            'rgb(13, 110, 253)',
                            'rgb(25, 135, 84)',
                            'rgb(255, 193, 7)',
                            'rgb(220, 53, 69)',
                            'rgb(13, 202, 240)',
                            'rgb(108, 117, 125)',
                            'rgb(111, 66, 193)',
                            'rgb(253, 126, 20)',
                            'rgb(32, 201, 151)',
                            'rgb(214, 51, 132)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    }
                }
            });
        <?php endif; ?>
    </script>
</body>

</html>