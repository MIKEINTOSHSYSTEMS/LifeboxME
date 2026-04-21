<?php
/* modules/test/lbq/admin/tests.php*/
/*
session_start();
if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}*/
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';
$quiz = new Quiz($pdo);

// Get trainings for dropdown
$trainings = $pdo->query("
    SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
    FROM public.training_sessions ts
    LEFT JOIN public.training_courses tc ON tc.course_id = ts.course_id
    ORDER BY tc.course_name ASC, ts.training_id ASC, ts.quarter ASC, ts.start_date DESC
")->fetchAll();

// Get all course names for dropdown
$courses = $pdo->query("
    SELECT DISTINCT tc.course_name
    FROM public.training_courses tc
    JOIN public.training_sessions ts ON ts.course_id = tc.course_id
    JOIN lbquiz_tests t ON t.training_id = ts.training_id
    ORDER BY tc.course_name
")->fetchAll(PDO::FETCH_COLUMN);

// Handle filter form
$filters = [];
$where = [];

if (!empty($_GET['course_name'])) {
    $filters['course_name'] = $_GET['course_name'];
    $where[] = "tc.course_name = :course_name";
}
if (!empty($_GET['training_id'])) {
    $filters['training_id'] = $_GET['training_id'];
    $where[] = "ts.training_id = :training_id";
}
if (isset($_GET['is_active']) && $_GET['is_active'] !== '') {
    $filters['is_active'] = (int)$_GET['is_active'];
    $where[] = "t.is_active = :is_active";
}
if (isset($_GET['is_pretest']) && $_GET['is_pretest'] !== '') {
    $filters['is_pretest'] = (int)$_GET['is_pretest'];
    $where[] = "t.is_pretest = :is_pretest";
}
if (!empty($_GET['time_limit'])) {
    if ($_GET['time_limit'] === 'limited') {
        $where[] = "t.time_limit_minutes IS NOT NULL AND t.time_limit_minutes > 0";
    } elseif ($_GET['time_limit'] === 'unlimited') {
        $where[] = "t.time_limit_minutes IS NULL OR t.time_limit_minutes = 0";
    }
}

// Build SQL query with filters - FIXED: Use proper table references and count
$sql = "
    SELECT t.*, ts.training_type, ts.start_date, ts.end_date, tc.course_name,
           (SELECT COUNT(*) FROM lbquiz_test_questions tq WHERE tq.test_id = t.id) as question_count,
           (SELECT COUNT(*) FROM lbquiz_responses r WHERE r.test_id = t.id) as response_count
    FROM lbquiz_tests t
    LEFT JOIN public.training_sessions ts ON ts.training_id = t.training_id
    LEFT JOIN public.training_courses tc ON tc.course_id = ts.course_id
";

if (!empty($where)) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$sql .= " ORDER BY t.created_at DESC";

$stmt = $pdo->prepare($sql);

// Bind parameters with proper types
foreach ($filters as $key => $value) {
    if ($key === 'is_active' || $key === 'is_pretest') {
        $stmt->bindValue(":$key", $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue(":$key", $value, PDO::PARAM_STR);
    }
}

$stmt->execute();
$tests = $stmt->fetchAll();

// Ensure question_count is always an integer
foreach ($tests as &$test) {
    $test['question_count'] = intval($test['question_count']);
    $test['response_count'] = intval($test['response_count']);
}
unset($test);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $training_id = intval($_POST['training_id'] ?? 0);
    $description = trim($_POST['description'] ?? '');
    $time_limit = !empty($_POST['time_limit_minutes']) ? intval($_POST['time_limit_minutes']) : null;
    $is_pretest = !empty($_POST['is_pretest']);
    $is_active = !empty($_POST['is_active']);

    if ($title && $training_id) {
        $test_id = $quiz->createTest($training_id, $title, $description, $time_limit, $is_pretest, $is_active);
        if ($test_id) {
            header("Location: test_edit.php?id=$test_id");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tests Management - LifeBox Test Center</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <style>
        @media (min-width: 768px) {
            .px-md-4 {
                padding-right: 7.5rem !important;
                padding-left: 1.5rem !important;
            }
        }

        .question-count-badge {
            font-weight: 600;
        }

        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tests Management</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createTestModal">
                            <i class="bi bi-plus-circle"></i> Create New Test
                        </button>
                    </div>
                </div>

                <!-- Filter Form -->
                <form method="get" class="card mb-4 p-3">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Course</label>
                            <select name="course_name" class="form-select">
                                <option value="">All Courses</option>
                                <?php foreach ($courses as $course): ?>
                                    <option value="<?= htmlspecialchars($course) ?>" <?= ($filters['course_name'] ?? '') === $course ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($course) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Training Session</label>
                            <select name="training_id" class="form-select">
                                <option value="">All Sessions</option>
                                <?php foreach ($trainings as $tr): ?>
                                    <option value="<?= $tr['training_id'] ?>" <?= ($filters['training_id'] ?? '') == $tr['training_id'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($tr['course_name'] ?? 'Training') ?> - Session <?= $tr['training_id'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Status</label>
                            <select name="is_active" class="form-select">
                                <option value="">All</option>
                                <option value="1" <?= (isset($filters['is_active']) && $filters['is_active'] == 1) ? 'selected' : '' ?>>Active</option>
                                <option value="0" <?= (isset($filters['is_active']) && $filters['is_active'] == 0) ? 'selected' : '' ?>>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Type</label>
                            <select name="is_pretest" class="form-select">
                                <option value="">All</option>
                                <option value="1" <?= (isset($filters['is_pretest']) && $filters['is_pretest'] == 1) ? 'selected' : '' ?>>Pre Test</option>
                                <option value="0" <?= (isset($filters['is_pretest']) && $filters['is_pretest'] == 0) ? 'selected' : '' ?>>Post Test</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Time Limit</label>
                            <select name="time_limit" class="form-select">
                                <option value="">All</option>
                                <option value="limited" <?= ($_GET['time_limit'] ?? '') === 'limited' ? 'selected' : '' ?>>Limited</option>
                                <option value="unlimited" <?= ($_GET['time_limit'] ?? '') === 'unlimited' ? 'selected' : '' ?>>Unlimited</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-filter"></i> Apply Filters</button>
                        <a href="tests.php" class="btn btn-sm btn-outline-secondary">Reset</a>
                    </div>
                </form>

                <!-- Tests Table -->
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Tests (<?= count($tests) ?>)</h5>
                    </div>
                    <div class="card-body">
                        <?php if (count($tests) > 0): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Training Session</th>
                                            <th>Course</th>
                                            <th>Questions</th>
                                            <th>Responses</th>
                                            <th>Time Limit</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tests as $t): ?>
                                            <tr>
                                                <td><?= $t['id'] ?></td>
                                                <td><?= htmlspecialchars($t['title']) ?></td>
                                                <td>
                                                    Session: <?= htmlspecialchars($t['training_id'] ?? 'N/A') ?><br>
                                                    <small class="text-muted">
                                                        <?= $t['start_date'] ? date('M j, Y', strtotime($t['start_date'])) : 'N/A' ?> -
                                                        <?= $t['end_date'] ? date('M j, Y', strtotime($t['end_date'])) : 'N/A' ?>
                                                    </small>
                                                </td>
                                                <td><?= htmlspecialchars($t['course_name'] ?? 'N/A') ?></td>
                                                <td class="text-center">
                                                    <span class="badge bg-info question-count-badge"><?= $t['question_count'] ?></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-secondary"><?= $t['response_count'] ?></span>
                                                </td>
                                                <td><?= $t['time_limit_minutes'] ? $t['time_limit_minutes'] . ' min' : 'No limit' ?></td>
                                                <td>
                                                    <span class="badge bg-<?= $t['is_active'] ? 'success' : 'secondary' ?>">
                                                        <?= $t['is_active'] ? 'Active' : 'Inactive' ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-<?= $t['is_pretest'] ? 'info' : 'primary' ?>">
                                                        <?= $t['is_pretest'] ? 'Pre Test' : 'Post Test' ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="test_edit.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-outline-primary" title="Edit Test">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <a href="responses.php?test_id=<?= $t['id'] ?>" class="btn btn-sm btn-outline-secondary" title="View Responses">
                                                            <i class="bi bi-clipboard-data"></i>
                                                        </a>
                                                        <?php if ($t['question_count'] > 0): ?>
                                                            <a href="../public/take_test.php?test_id=<?= $t['id'] ?>" class="btn btn-sm btn-outline-success" target="_blank" title="Preview Test">
                                                                <i class="bi bi-eye"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                No tests found. <a href="#" data-bs-toggle="modal" data-bs-target="#createTestModal">Create your first test</a>.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Create Test Modal -->
    <div class="modal fade" id="createTestModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Test Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="col-md-6">
                                <label for="training_id" class="form-label">Training Session</label>
                                <select class="form-select" id="training_id" name="training_id" required>
                                    <option value="">Select Training Session</option>
                                    <?php foreach ($trainings as $tr): ?>
                                        <option value="<?= $tr['training_id'] ?>">
                                            <?= htmlspecialchars($tr['course_name'] ?? 'Training') ?> - Session <?= $tr['training_id'] ?> - Quarter <?= htmlspecialchars($tr['quarter'] ?? '') ?>
                                            (<?= $tr['start_date'] ? date('M Y', strtotime($tr['start_date'])) : 'N/A' ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="time_limit_minutes" class="form-label">Time Limit (minutes)</label>
                                <input type="number" class="form-control" id="time_limit_minutes" name="time_limit_minutes"
                                    min="0" placeholder="0 for no time limit">
                                <small class="text-muted">Leave empty or 0 for no time limit</small>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check form-switch mt-4">
                                    <input class="form-check-input" type="checkbox" id="is_pretest" name="is_pretest">
                                    <label class="form-check-label" for="is_pretest">This is a Pre Test</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check form-switch mt-4">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
                                    <label class="form-check-label" for="is_active">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Test</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>