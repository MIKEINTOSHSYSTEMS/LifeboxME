<?php
session_start();
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

if (empty($_SESSION['participant_id'])) {
    header('Location: login.php');
    exit;
}

$participant_id = $_SESSION['participant_id'];

// Filters
$filter_course    = $_GET['course'] ?? '';
$filter_test      = $_GET['test_id'] ?? '';
$filter_type      = $_GET['type'] ?? '';   // pre / post / ''
$filter_date_from = $_GET['date_from'] ?? '';
$filter_date_to   = $_GET['date_to'] ?? '';

// Pagination
$results_per_page = 10;
$current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($current_page - 1) * $results_per_page;

// Build WHERE clauses
$where = [];
$params = [];
$participant_sql = "(r.userid = :pid OR r.participation_id IN (SELECT participation_id FROM training_participation WHERE participant_id = :pid))";
$where[] = $participant_sql;
$params[':pid'] = $participant_id;

if ($filter_course !== '') {
    $where[] = "tc.course_name = :course";
    $params[':course'] = $filter_course;
}
if ($filter_test !== '') {
    $where[] = "t.id = :test_id";
    $params[':test_id'] = intval($filter_test);
}
if ($filter_type === 'pre') {
    $where[] = "t.is_pretest = true";
} elseif ($filter_type === 'post') {
    $where[] = "t.is_pretest = false";
}
if ($filter_date_from !== '') {
    $where[] = "r.submitted_at >= :date_from";
    $params[':date_from'] = $filter_date_from . ' 00:00:00';
}
if ($filter_date_to !== '') {
    $where[] = "r.submitted_at <= :date_to";
    $params[':date_to'] = $filter_date_to . ' 23:59:59';
}

$where_sql = implode(' AND ', $where);

// Count
$count_sql = "SELECT COUNT(*) FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_sessions ts ON ts.training_id = COALESCE(t.training_id, (SELECT MIN(ts2.training_id) FROM lbquiz_test_sessions ts2 WHERE ts2.test_id = t.id))
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    WHERE $where_sql";
$stmt = $pdo->prepare($count_sql);
foreach ($params as $k => $v) {
    $stmt->bindValue($k, $v);
}
$stmt->execute();
$total_results = $stmt->fetchColumn();
$total_pages = ceil($total_results / $results_per_page);

// Data
$data_sql = "SELECT r.*, t.title as test_title, t.is_pretest, t.cert_enabled, t.pass_mark,
    tc.course_name
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_sessions ts ON ts.training_id = COALESCE(t.training_id, (SELECT MIN(ts2.training_id) FROM lbquiz_test_sessions ts2 WHERE ts2.test_id = t.id))
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    WHERE $where_sql
    ORDER BY r.submitted_at DESC
    LIMIT :lim OFFSET :off";
$stmt = $pdo->prepare($data_sql);
foreach ($params as $k => $v) {
    $stmt->bindValue($k, $v);
}
$stmt->bindValue(':lim', $results_per_page, PDO::PARAM_INT);
$stmt->bindValue(':off', $offset, PDO::PARAM_INT);
$stmt->execute();
$results = $stmt->fetchAll();

// Participant details
$stmt = $pdo->prepare("SELECT * FROM training_participants WHERE participant_id = :id");
$stmt->execute([':id' => $participant_id]);
$participant = $stmt->fetch();

// Stats
$stats_sql = "SELECT COUNT(*) as total_tests, AVG(r.score) as average_score,
    MAX(r.score) as highest_score, MIN(r.score) as lowest_score
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_sessions ts ON ts.training_id = COALESCE(t.training_id, (SELECT MIN(ts2.training_id) FROM lbquiz_test_sessions ts2 WHERE ts2.test_id = t.id))
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    WHERE $where_sql";
$stmt = $pdo->prepare($stats_sql);
foreach ($params as $k => $v) {
    $stmt->bindValue($k, $v);
}
$stmt->execute();
$stats = $stmt->fetch();

// Filter dropdown data
$courses = $pdo->prepare("SELECT DISTINCT tc.course_name
    FROM training_courses tc
    JOIN training_sessions ts ON ts.course_id = tc.course_id
    JOIN training_participation tp ON tp.training_id = ts.training_id
    WHERE tp.participant_id = :pid
    ORDER BY tc.course_name");
$courses->execute([':pid' => $participant_id]);
$course_list = $courses->fetchAll(PDO::FETCH_COLUMN);

$tests_filter = $pdo->prepare("SELECT DISTINCT t.id, t.title
    FROM lbquiz_tests t
    JOIN lbquiz_responses r ON r.test_id = t.id
    WHERE r.userid = :pid1 OR r.participation_id IN (SELECT participation_id FROM training_participation WHERE participant_id = :pid2)
    ORDER BY t.title");
$tests_filter->execute([':pid1' => $participant_id, ':pid2' => $participant_id]);
$test_list = $tests_filter->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Results - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">
    <style>
        :root { --primary: #0079a5; --secondary: #ff6b35; --success: #198754; --danger: #dc3545; --warning: #ffc107; --info: #0dcaf0; --light: #f8f9fa; --dark: #212529; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f5f7fb; }
        .results-header { background: linear-gradient(135deg, var(--primary), #0a58ca); color: white; padding: 2rem; border-radius: 0.5rem; margin-bottom: 2rem; }
        .bg-primary { background-color: #0079a7ed !important; }
        .stats-card { border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.05); transition: all 0.3s; }
        .stats-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .result-item { border-radius: 0.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin-bottom: 1rem; transition: all 0.3s; border-left: 4px solid var(--secondary); }
        .result-item:hover { box-shadow: 0 5px 15px rgba(0,0,0,0.1); transform: translateY(-2px); }
        .result-item.pretest { border-left-color: var(--info); }
        .result-item.posttest { border-left-color: var(--success); }
        .badge-score { font-size: 0.85rem; padding: 0.35em 0.65em; }
        .progress { height: 10px; border-radius: 5px; }
        .pagination { margin-bottom: 0; }
        .page-item.active .page-link { background-color: var(--primary); border-color: var(--primary); }
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
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="bi bi-speedometer2 me-1"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="take_test.php"><i class="bi bi-pencil-square me-1"></i> Available Tests</a></li>
                    <li class="nav-item"><a class="nav-link active" href="all_results.php"><i class="bi bi-bar-chart me-1"></i> All Results</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <span class="navbar-text text-white me-3 d-none d-md-block">
                        <a class="nav-link" href="profile.php"><i class="bi bi-person-circle me-1"></i> <?= htmlspecialchars(($participant['title_salutation'] ?? '') . ' ' . ($participant['first_name'] ?? '') . ' ' . ($participant['middle_name'] ?? '') . ' ' . ($participant['last_name'] ?? '')) ?></a>
                    </span>
                    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="results-header">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>All Test Results</h2>
                    <p class="lead mb-0">Review your complete test history and performance</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="dashboard.php" class="btn btn-light"><i class="bi bi-arrow-left me-1"></i> Back to Dashboard</a>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-primary mb-2"><i class="bi bi-check-circle-fill display-4"></i></div>
                        <h3 class="card-title"><?= $stats['total_tests'] ?></h3>
                        <p class="card-text text-muted">Total Tests</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-success mb-2"><i class="bi bi-graph-up display-4"></i></div>
                        <h3 class="card-title"><?= $stats['average_score'] !== null ? round($stats['average_score'], 1) . '%' : 'N/A' ?></h3>
                        <p class="card-text text-muted">Average Score</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-warning mb-2"><i class="bi bi-trophy-fill display-4"></i></div>
                        <h3 class="card-title"><?= $stats['highest_score'] !== null ? $stats['highest_score'] . '%' : 'N/A' ?></h3>
                        <p class="card-text text-muted">Highest Score</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-info mb-2"><i class="bi bi-clock-history display-4"></i></div>
                        <h3 class="card-title"><?= $stats['lowest_score'] !== null ? $stats['lowest_score'] . '%' : 'N/A' ?></h3>
                        <p class="card-text text-muted">Lowest Score</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Real Filters -->
        <div class="card mb-4">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0"><i class="bi bi-funnel me-1"></i> Filter Results</h5>
            </div>
            <div class="card-body">
                <form method="get" class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">Course</label>
                        <select name="course" class="form-select">
                            <option value="">All Courses</option>
                            <?php foreach ($course_list as $c): ?>
                                <option value="<?= htmlspecialchars($c) ?>" <?= $filter_course === $c ? 'selected' : '' ?>><?= htmlspecialchars($c) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Test</label>
                        <select name="test_id" class="form-select">
                            <option value="">All Tests</option>
                            <?php foreach ($test_list as $tl): ?>
                                <option value="<?= $tl['id'] ?>" <?= $filter_test == $tl['id'] ? 'selected' : '' ?>><?= htmlspecialchars($tl['title']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Type</label>
                        <select name="type" class="form-select">
                            <option value="">All</option>
                            <option value="pre" <?= $filter_type === 'pre' ? 'selected' : '' ?>>Pre-test</option>
                            <option value="post" <?= $filter_type === 'post' ? 'selected' : '' ?>>Post-test</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">From</label>
                        <input type="date" name="date_from" class="form-control" value="<?= htmlspecialchars($filter_date_from) ?>">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">To</label>
                        <input type="date" name="date_to" class="form-control" value="<?= htmlspecialchars($filter_date_to) ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-filter"></i> Apply</button>
                        <a href="all_results.php" class="btn btn-outline-secondary btn-sm">Reset</a>
                    </div>
                </form>
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
                        <?php foreach ($results as $result):
                            $can_cert = !empty($result['cert_enabled']) && ($result['pass_mark'] ?? 0) > 0 && ($result['score'] ?? 0) >= $result['pass_mark'];
                        ?>
                            <div class="list-group-item border-0 px-0 result-item <?= $result['is_pretest'] ? 'pretest' : 'posttest' ?>">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="mb-0"><?= htmlspecialchars($result['test_title']) ?></h6>
                                        <?php if (!empty($result['course_name'])): ?>
                                            <small class="text-muted"><?= htmlspecialchars($result['course_name']) ?></small>
                                        <?php endif; ?>
                                    </div>
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
                                                role="progressbar" style="width: <?= $result['score'] ?>%;"
                                                aria-valuenow="<?= $result['score'] ?>" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fw-bold text-<?= $result['score'] >= 70 ? 'success' : ($result['score'] >= 50 ? 'warning' : 'danger') ?>">
                                        <?= round($result['score'], 1) ?>%
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge badge-score bg-secondary">Response ID: <?= $result['id'] ?></span>
                                        <?php if ($can_cert): ?>
                                            <span class="badge badge-score bg-success"><i class="bi bi-award"></i> Certified</span>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <a href="test_results.php?response_id=<?= $result['id'] ?>" class="btn btn-sm btn-outline-primary me-1">
                                            <i class="bi bi-eye me-1"></i> Details
                                        </a>
                                        <?php if ($can_cert): ?>
                                            <a href="certificate.php?response_id=<?= $result['id'] ?>" class="btn btn-sm btn-success">
                                                <i class="bi bi-award me-1"></i> Certificate
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if ($total_pages > 1): ?>
                        <nav aria-label="Results pagination" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item <?= $current_page == 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $current_page - 1 ?>&<?= http_build_query(array_filter(['course' => $filter_course, 'test_id' => $filter_test, 'type' => $filter_type, 'date_from' => $filter_date_from, 'date_to' => $filter_date_to])) ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li class="page-item <?= $i == $current_page ? 'active' : '' ?>">
                                        <a class="page-link" href="?page=<?= $i ?>&<?= http_build_query(array_filter(['course' => $filter_course, 'test_id' => $filter_test, 'type' => $filter_type, 'date_from' => $filter_date_from, 'date_to' => $filter_date_to])) ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li class="page-item <?= $current_page == $total_pages ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $current_page + 1 ?>&<?= http_build_query(array_filter(['course' => $filter_course, 'test_id' => $filter_test, 'type' => $filter_type, 'date_from' => $filter_date_from, 'date_to' => $filter_date_to])) ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="alert alert-info text-center">
                        <i class="bi bi-info-circle me-2"></i>
                        No results found. <a href="take_test.php" class="alert-link">Take a test</a>.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
