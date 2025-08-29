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

// Pagination setup
$results_per_page = 10;
$current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($current_page - 1) * $results_per_page;

// Get total number of results
$stmt = $pdo->prepare("
    SELECT COUNT(*) 
    FROM lbquiz_responses r
    WHERE r.userid = :id OR r.participation_id IN (
        SELECT participation_id FROM training_participation WHERE participant_id = :id
    )
");
$stmt->execute([':id' => $participant_id]);
$total_results = $stmt->fetchColumn();
$total_pages = ceil($total_results / $results_per_page);

// Get paginated results
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, t.is_pretest, t.training_id
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    WHERE r.userid = :id OR r.participation_id IN (
        SELECT participation_id FROM training_participation WHERE participant_id = :id
    )
    ORDER BY r.submitted_at DESC
    LIMIT :limit OFFSET :offset
");
$stmt->bindValue(':id', $participant_id, PDO::PARAM_INT);
$stmt->bindValue(':limit', $results_per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$results = $stmt->fetchAll();

// Get participant details
$stmt = $pdo->prepare("SELECT * FROM training_participants WHERE participant_id = :id");
$stmt->execute([':id' => $participant_id]);
$participant = $stmt->fetch();

// Calculate overall statistics
$stmt = $pdo->prepare("
    SELECT 
        COUNT(*) as total_tests,
        AVG(r.score) as average_score,
        MAX(r.score) as highest_score,
        MIN(r.score) as lowest_score
    FROM lbquiz_responses r
    WHERE r.userid = :id OR r.participation_id IN (
        SELECT participation_id FROM training_participation WHERE participant_id = :id
    )
");
$stmt->execute([':id' => $participant_id]);
$stats = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Results - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        :root {
            --primary: #0079a5;
            --secondary: #ff6b35;
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

        .results-header {
            background: linear-gradient(135deg, var(--primary), #0a58ca);
            color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }

        .bg-primary {

            background-color: #0079a7ed !important;
        }

        .stats-card {
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .result-item {
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 1rem;
            transition: all 0.3s;
            border-left: 4px solid var(--secondary);
        }

        .result-item:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .result-item.pretest {
            border-left-color: var(--info);
        }

        .result-item.posttest {
            border-left-color: var(--success);
        }

        .badge-score {
            font-size: 0.85rem;
            padding: 0.35em 0.65em;
        }

        .progress {
            height: 10px;
            border-radius: 5px;
        }

        .pagination {
            margin-bottom: 0;
        }

        .page-item.active .page-link {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .filter-badge {
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-badge:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .results-header {
                padding: 1.5rem;
            }

            .stats-card {
                margin-bottom: 1rem;
            }

            .result-item {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
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
                        <a class="nav-link" href="dashboard.php">
                            <i class="bi bi-speedometer2 me-1"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="take_test.php">
                            <i class="bi bi-pencil-square me-1"></i> Available Tests
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="all_results.php">
                            <i class="bi bi-bar-chart me-1"></i> All Results
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <span class="navbar-text text-white me-3 d-none d-md-block">
                        <i class="bi bi-person-circle me-1"></i>
                        <?= htmlspecialchars($participant['first_name'] . ' ' . $participant['last_name']) ?>
                    </span>
                    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <!-- Results Header -->
        <div class="results-header">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>All Test Results</h2>
                    <p class="lead mb-0">Review your complete test history and performance</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="dashboard.php" class="btn btn-light">
                        <i class="bi bi-arrow-left me-1"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-primary mb-2">
                            <i class="bi bi-check-circle-fill display-4"></i>
                        </div>
                        <h3 class="card-title"><?= $stats['total_tests'] ?></h3>
                        <p class="card-text text-muted">Total Tests</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-success mb-2">
                            <i class="bi bi-graph-up display-4"></i>
                        </div>
                        <h3 class="card-title"><?= round($stats['average_score'], 1) ?>%</h3>
                        <p class="card-text text-muted">Average Score</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-warning mb-2">
                            <i class="bi bi-trophy-fill display-4"></i>
                        </div>
                        <h3 class="card-title"><?= $stats['highest_score'] ?>%</h3>
                        <p class="card-text text-muted">Highest Score</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-info mb-2">
                            <i class="bi bi-clock-history display-4"></i>
                        </div>
                        <h3 class="card-title"><?= $stats['lowest_score'] ?>%</h3>
                        <p class="card-text text-muted">Lowest Score</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Results Filter -->
        <div class="card mb-4">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Filter Results</h5>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="filter-badge badge bg-primary">All Tests</span>
                    <span class="filter-badge badge bg-info">Pre-tests</span>
                    <span class="filter-badge badge bg-success">Post-tests</span>
                    <span class="filter-badge badge bg-warning">Scores ≥ 90%</span>
                    <span class="filter-badge badge bg-danger">Scores ≤ 50%</span>
                </div>
            </div>
        </div>

        <!-- Results List -->
        <div class="card">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Test History</h5>
                <span class="badge bg-secondary"><?= $total_results ?> results</span>
            </div>
            <div class="card-body">
                <?php if (count($results) > 0): ?>
                    <div class="list-group list-group-flush">
                        <?php foreach ($results as $result): ?>
                            <div class="list-group-item border-0 px-0 result-item <?= $result['is_pretest'] ? 'pretest' : 'posttest' ?>">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h6 class="mb-0"><?= htmlspecialchars($result['test_title']) ?></h6>
                                    <span class="badge bg-<?= $result['is_pretest'] ? 'info' : 'success' ?>">
                                        <?= $result['is_pretest'] ? 'Pre-test' : 'Post-test' ?>
                                    </span>
                                </div>
                                <p class="text-muted small mb-2">
                                    Taken on: <?= date('M j, Y g:i A', strtotime($result['submitted_at'])) ?>
                                </p>
                                <div class="d-flex align-items-center mb-2">
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
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge badge-score bg-secondary">
                                            Response ID: <?= $result['id'] ?>
                                        </span>
                                    </div>
                                    <div>
                                        <a href="test_results.php?response_id=<?= $result['id'] ?>" class="btn btn-sm btn-outline-primary me-2">
                                            <i class="bi bi-eye me-1"></i> Details
                                        </a>
                                        <a href="certificate.php?response_id=<?= $result['id'] ?>" class="btn btn-sm btn-success">
                                            <i class="bi bi-award me-1"></i> Certificate
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                        <nav aria-label="Results pagination" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item <?= $current_page == 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $current_page - 1 ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li class="page-item <?= $i == $current_page ? 'active' : '' ?>">
                                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>

                                <li class="page-item <?= $current_page == $total_pages ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $current_page + 1 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="alert alert-info text-center">
                        <i class="bi bi-info-circle me-2"></i>
                        You haven't taken any tests yet. <a href="take_test.php" class="alert-link">Take your first test</a>.
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Export Options -->
        <div class="text-center mt-4">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary">
                    <i class="bi bi-download me-1"></i> Export Results
                </button>
                <button type="button" class="btn btn-outline-success">
                    <i class="bi bi-file-pdf me-1"></i> Export as PDF
                </button>
                <button type="button" class="btn btn-outline-secondary">
                    <i class="bi bi-printer me-1"></i> Print Results
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Simple filtering functionality
        document.querySelectorAll('.filter-badge').forEach(badge => {
            badge.addEventListener('click', function() {
                const filterText = this.textContent.trim();
                Swal.fire({
                    title: 'Filter by ' + filterText,
                    text: 'This feature will be implemented in the next version',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            });
        });

        // Export functionality
        document.querySelectorAll('.btn').forEach(btn => {
            if (btn.textContent.includes('Export') || btn.textContent.includes('Print')) {
                btn.addEventListener('click', function() {
                    const actionText = this.textContent.trim();
                    Swal.fire({
                        title: actionText,
                        text: 'This feature will be implemented in the next version',
                        icon: 'info',
                        confirmButtonText: 'OK'
                    });
                });
            }
        });
    </script>
</body>

</html>