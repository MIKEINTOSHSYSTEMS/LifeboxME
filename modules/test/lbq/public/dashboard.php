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
    SELECT r.*, t.title as test_title, t.is_pretest
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
    <style>
        .dashboard-card {
            transition: transform 0.3s;
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            font-size: 2rem;
            opacity: 0.7;
        }

        .test-card {
            border-left: 4px solid #0d6efd;
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">LifeBox Test Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tests.php">Available Tests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="results.php">My Results</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>
                            <?= htmlspecialchars($participant['first_name'] . ' ' . $participant['last_name']) ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2>Welcome, <?= htmlspecialchars($participant['first_name']) ?>!</h2>
                <p class="text-muted">This is your test center dashboard where you can access available tests and view your results.</p>
            </div>
            <div class="col-md-4 text-end">
                <p class="mb-0"><strong>Email:</strong> <?= htmlspecialchars($participant['email']) ?></p>
                <p class="mb-0"><strong>Phone:</strong> <?= htmlspecialchars($participant['phone'] ?? 'Not provided') ?></p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="card dashboard-card border-left-primary h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Training Sessions</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($trainings) ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-journal-text stat-icon text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card dashboard-card border-left-success h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tests Completed</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= count(array_filter($results, function ($r) {
                                        return $r['submitted_at'] !== null;
                                    })) ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-check-circle stat-icon text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card dashboard-card border-left-info h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Average Score</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $scores = array_filter(array_column($results, 'score'));
                                    $avg = count($scores) > 0 ? round(array_sum($scores) / count($scores), 1) : 0;
                                    echo $avg . '%';
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-graph-up stat-icon text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Available Tests -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Available Tests</h5>
                    </div>
                    <div class="card-body">
                        <?php if (count($trainings) > 0): ?>
                            <div class="list-group">
                                <?php foreach ($trainings as $training): ?>
                                    <?php
                                    // Check if tests exist for this training
                                    $stmt = $pdo->prepare("SELECT * FROM lbquiz_tests WHERE training_id = :tid AND is_active = true");
                                    $stmt->execute([':tid' => $training['training_id']]);
                                    $tests = $stmt->fetchAll();
                                    ?>

                                    <?php if (count($tests) > 0): ?>
                                        <div class="list-group-item">
                                            <h6 class="mb-1"><?= htmlspecialchars($training['training_title'] ?? 'Training #' . $training['training_id']) ?></h6>
                                            <p class="mb-1 text-muted small"><?= htmlspecialchars($training['training_description'] ?? '') ?></p>

                                            <?php foreach ($tests as $test): ?>
                                                <div class="test-card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <strong><?= htmlspecialchars($test['title']) ?></strong>
                                                            <br>
                                                            <small class="text-muted">
                                                                <?= $test['is_pretest'] ? 'Pretest' : 'Posttest' ?> •
                                                                <?= $test['time_limit_minutes'] ? $test['time_limit_minutes'] . ' minutes' : 'No time limit' ?>
                                                            </small>
                                                        </div>
                                                        <a href="take_test.php?test_id=<?= $test['id'] ?>&participation_id=<?= $training['participation_id'] ?>"
                                                            class="btn btn-sm btn-primary">Take Test</a>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                You don't have any available tests at the moment.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Recent Results -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Recent Results</h5>
                    </div>
                    <div class="card-body">
                        <?php if (count($results) > 0): ?>
                            <div class="list-group">
                                <?php foreach ($results as $result): ?>
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1"><?= htmlspecialchars($result['test_title']) ?></h6>
                                            <small class="text-muted">
                                                <?= $result['is_pretest'] ? 'Pretest' : 'Posttest' ?>
                                            </small>
                                        </div>
                                        <p class="mb-1">
                                            <strong>Score:</strong>
                                            <?php if ($result['submitted_at']): ?>
                                                <span class="badge bg-<?= $result['score'] >= 70 ? 'success' : ($result['score'] >= 50 ? 'warning' : 'danger') ?>">
                                                    <?= $result['score'] ?>%
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Not submitted</span>
                                            <?php endif; ?>
                                        </p>
                                        <small class="text-muted">
                                            <?php if ($result['submitted_at']): ?>
                                                Completed on <?= date('M j, Y g:i A', strtotime($result['submitted_at'])) ?>
                                            <?php else: ?>
                                                Started on <?= date('M j, Y g:i A', strtotime($result['started_at'])) ?>
                                            <?php endif; ?>
                                        </small>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="text-center mt-3">
                                <a href="results.php" class="btn btn-sm btn-outline-primary">View All Results</a>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                You haven't taken any tests yet.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>