<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';
$quiz = new Quiz($pdo);

$allow_sort = ['t.id', 't.title', 't.is_active', 't.is_pretest', 't.time_limit_minutes', 't.created_at', 'qcount', 'rcount'];

// AJAX endpoint: get training sessions filtered by course
if (isset($_GET['ajax']) && $_GET['ajax'] === 'get_trainings_by_course' && isset($_GET['course_name'])) {
    header('Content-Type: application/json');
    $stmt = $pdo->prepare("
        SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
        FROM training_sessions ts
        LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
        WHERE tc.course_name = :c
        ORDER BY ts.start_date DESC
    ");
    $stmt->execute([':c' => $_GET['course_name']]);
    echo json_encode($stmt->fetchAll());
    exit;
}

// Get trainings for dropdown
$trainings = $pdo->query("
    SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
    FROM training_sessions ts
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    ORDER BY tc.course_name ASC, ts.training_id ASC, ts.quarter ASC, ts.start_date DESC
")->fetchAll();

// Get all course names for dropdown
$courses = $pdo->query("
    SELECT DISTINCT tc.course_name
    FROM training_courses tc
    JOIN training_sessions ts ON ts.course_id = tc.course_id
    WHERE ts.training_id IN (
        SELECT training_id FROM lbquiz_tests WHERE training_id IS NOT NULL
        UNION
        SELECT training_id FROM lbquiz_test_sessions
    )
    ORDER BY tc.course_name
")->fetchAll(PDO::FETCH_COLUMN);

// --- Filters ---
$filters = [];
$where = [];

$filter_course    = $_GET['course_name'] ?? '';
$filter_training  = $_GET['training_id'] ?? '';
$filter_active    = isset($_GET['is_active']) && $_GET['is_active'] !== '' ? (int)$_GET['is_active'] : null;
$filter_pretest   = isset($_GET['is_pretest']) && $_GET['is_pretest'] !== '' ? (int)$_GET['is_pretest'] : null;
$filter_time      = $_GET['time_limit'] ?? '';
$search           = trim($_GET['search'] ?? '');
$sort_col         = $_GET['sort'] ?? 't.created_at';
if (!in_array($sort_col, $allow_sort, true)) $sort_col = 't.created_at';
$sort_dir         = strtoupper($_GET['dir'] ?? 'DESC') === 'ASC' ? 'ASC' : 'DESC';
$page             = max(1, intval($_GET['page'] ?? 1));
$per_page         = $_GET['per_page'] ?? '20';
$per_page         = $per_page === 'all' ? 'all' : max(1, intval($per_page));

if ($filter_course !== '') {
    $where[] = "EXISTS (
        SELECT 1 FROM training_sessions ts_f
        JOIN training_courses tc_f ON tc_f.course_id = ts_f.course_id
        WHERE (ts_f.training_id = t.training_id OR ts_f.training_id IN (SELECT ts5.training_id FROM lbquiz_test_sessions ts5 WHERE ts5.test_id = t.id))
        AND tc_f.course_name = :course_name
    )";
    $filters[':course_name'] = $filter_course;
}
if ($filter_training !== '') {
    $where[] = "(t.training_id = :training_id OR EXISTS (SELECT 1 FROM lbquiz_test_sessions ts2 WHERE ts2.test_id = t.id AND ts2.training_id = :training_id2))";
    $filters[':training_id'] = $filter_training;
    $filters[':training_id2'] = $filter_training;
}
if ($filter_active !== null) {
    $where[] = "t.is_active = :is_active";
    $filters[':is_active'] = $filter_active;
}
if ($filter_pretest !== null) {
    $where[] = "t.is_pretest = :is_pretest";
    $filters[':is_pretest'] = $filter_pretest;
}
if ($filter_time === 'limited') {
    $where[] = "t.time_limit_minutes IS NOT NULL AND t.time_limit_minutes > 0";
} elseif ($filter_time === 'unlimited') {
    $where[] = "t.time_limit_minutes IS NULL OR t.time_limit_minutes = 0";
}
if ($search !== '') {
    $where[] = "(t.title ILIKE :search OR t.id::text ILIKE :search2)";
    $st = '%' . $search . '%';
    $filters[':search'] = $st;
    $filters[':search2'] = $st;
}

// --- Count query ---
$count_sql = "SELECT COUNT(*)
    FROM lbquiz_tests t";
if (!empty($where)) {
    $count_sql .= " WHERE " . implode(" AND ", $where);
}
$count_stmt = $pdo->prepare($count_sql);
foreach ($filters as $k => $v) {
    $count_stmt->bindValue($k, $v, is_int($v) ? PDO::PARAM_INT : PDO::PARAM_STR);
}
$count_stmt->execute();
$total_rows = (int)$count_stmt->fetchColumn();

// --- Data query ---
$sql = "
    SELECT t.*,
           (SELECT COUNT(*) FROM lbquiz_test_questions tq JOIN quiz_questions q ON q.id = tq.quiz_question_id WHERE tq.test_id = t.id) as qcount,
           (SELECT COUNT(*) FROM lbquiz_responses r WHERE r.test_id = t.id) as rcount,
           (SELECT string_agg(DISTINCT tc2.course_name || ' - Session ' || u.tid || ' - Q' || COALESCE(ts3.quarter, '') || ' (' || COALESCE(to_char(ts3.start_date, 'Mon YYYY'), 'N/A') || ')', '; ')
            FROM (
                SELECT t.training_id AS tid
                UNION
                SELECT ts4.training_id FROM lbquiz_test_sessions ts4 WHERE ts4.test_id = t.id
            ) u
            JOIN training_sessions ts3 ON ts3.training_id = u.tid
            LEFT JOIN training_courses tc2 ON tc2.course_id = ts3.course_id
           ) as session_info
    FROM lbquiz_tests t
";

if (!empty($where)) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$sql .= " ORDER BY $sort_col $sort_dir";

$total_pages = 1;
if ($per_page === 'all') {
    $offset = 0;
    $limit = $total_rows ?: 500;
} else {
    $total_pages = max(1, (int)ceil($total_rows / $per_page));
    $page = min($page, $total_pages);
    $offset = ($page - 1) * $per_page;
    $limit = $per_page;
    $sql .= " LIMIT $limit OFFSET $offset";
}

$stmt = $pdo->prepare($sql);
foreach ($filters as $k => $v) {
    $stmt->bindValue($k, $v, is_int($v) ? PDO::PARAM_INT : PDO::PARAM_STR);
}
$stmt->execute();
$tests = $stmt->fetchAll();

// Ensure counts are integers
foreach ($tests as &$test) {
    $test['qcount'] = intval($test['qcount']);
    $test['rcount'] = intval($test['rcount']);
}
unset($test);

// POST: create test
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $training_ids = $_POST['training_ids'] ?? [];
    $description = trim($_POST['description'] ?? '');
    $time_limit = !empty($_POST['time_limit_minutes']) ? intval($_POST['time_limit_minutes']) : null;
    $is_pretest = !empty($_POST['is_pretest']);
    $is_active = !empty($_POST['is_active']);
    if ($title && !empty($training_ids)) {
        $test_id = $quiz->createTest($training_ids, $title, $description, $time_limit, $is_pretest, $is_active);
        if ($test_id) {
            header("Location: test_edit.php?id=$test_id");
            exit;
        }
    }
}

// Duplicate handler
if (isset($_GET['duplicate'])) {
    $source_id = intval($_GET['duplicate']);
    $new_id = $quiz->duplicateTest($source_id);
    if ($new_id) {
        $_SESSION['flash_message'] = "Test duplicated successfully!";
        $_SESSION['flash_type'] = "success";
        header("Location: test_edit.php?id=$new_id");
    } else {
        $_SESSION['flash_message'] = "Failed to duplicate test.";
        $_SESSION['flash_type'] = "danger";
        header("Location: tests.php");
    }
    exit;
}

// Flash messages
$flash_message = $_SESSION['flash_message'] ?? '';
$flash_type = $_SESSION['flash_type'] ?? 'info';
unset($_SESSION['flash_message'], $_SESSION['flash_type']);

// Build query string for pagination/sort links (exclude page)
$query_params = $_GET;
unset($query_params['page']);
$query_string = http_build_query($query_params);

// Sort helper
function sortLink($col, $label, $current_col, $current_dir, $qs) {
    $new_dir = ($current_col === $col && $current_dir === 'ASC') ? 'DESC' : 'ASC';
    $icon = '';
    if ($current_col === $col) {
        $icon = $current_dir === 'ASC' ? ' &#9650;' : ' &#9660;';
    }
    $q = $qs . '&sort=' . urlencode($col) . '&dir=' . $new_dir;
    return '<a href="tests.php?' . $q . '" class="text-dark text-decoration-none sort-link">' . $label . $icon . '</a>';
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
        .sort-link:hover { text-decoration: underline !important; }
        th.sortable { white-space: nowrap; }
        .table td { vertical-align: middle; }
        .question-count-badge { font-weight: 600; }
        @media (min-width: 768px) {
            .px-md-4 { padding-right: 7.5rem !important; padding-left: 1.5rem !important; }
        }
    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
    <div class="container-fluid">
            <main class="px-md-4 py-4">
                <?php if ($flash_message): ?>
                    <div class="alert alert-<?= htmlspecialchars($flash_type) ?> alert-dismissible fade show" role="alert">
                        <?= htmlspecialchars($flash_message) ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tests Management</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createTestModal">
                            <i class="bi bi-plus-circle"></i> Create New Test
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <form method="get" class="card mb-4 p-3">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Course</label>
                            <select name="course_name" class="form-select" id="filter_course">
                                <option value="">All Courses</option>
                                <?php foreach ($courses as $course): ?>
                                    <option value="<?= htmlspecialchars($course) ?>" <?= $filter_course === $course ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($course) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Training Session</label>
                            <select name="training_id" class="form-select" id="filter_training">
                                <option value="">All Sessions</option>
                                <?php foreach ($trainings as $tr): ?>
                                    <option value="<?= $tr['training_id'] ?>" <?= $filter_training == $tr['training_id'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($tr['course_name'] ?? 'Training') ?> - Session <?= $tr['training_id'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Status</label>
                            <select name="is_active" class="form-select">
                                <option value="">All</option>
                                <option value="1" <?= $filter_active === 1 ? 'selected' : '' ?>>Active</option>
                                <option value="0" <?= $filter_active === 0 ? 'selected' : '' ?>>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Type</label>
                            <select name="is_pretest" class="form-select">
                                <option value="">All</option>
                                <option value="1" <?= $filter_pretest === 1 ? 'selected' : '' ?>>Pre Test</option>
                                <option value="0" <?= $filter_pretest === 0 ? 'selected' : '' ?>>Post Test</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Time Limit</label>
                            <select name="time_limit" class="form-select">
                                <option value="">All</option>
                                <option value="limited" <?= $filter_time === 'limited' ? 'selected' : '' ?>>Limited</option>
                                <option value="unlimited" <?= $filter_time === 'unlimited' ? 'selected' : '' ?>>Unlimited</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Search</label>
                            <input type="text" class="form-control" name="search" placeholder="Search by title or ID..."
                                value="<?= htmlspecialchars($search) ?>">
                        </div>
                    </div>
                    <div class="mt-3 d-flex gap-2">
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-filter"></i> Apply Filters</button>
                        <a href="tests.php" class="btn btn-sm btn-outline-secondary">Reset</a>
                    </div>
                </form>

                <!-- Tests Table -->
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <h5 class="card-title mb-0">Tests (<?= $total_rows ?>)</h5>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted small">Show</span>
                            <select id="per_page" class="form-select form-select-sm" style="width: auto;" onchange="changePerPage(this.value)">
                                <?php foreach ([5, 10, 15, 20, 50, 100] as $pp): ?>
                                    <option value="<?= $pp ?>" <?= ($per_page !== 'all' && (int)$per_page === $pp) ? 'selected' : '' ?>><?= $pp ?></option>
                                <?php endforeach; ?>
                                <option value="all" <?= $per_page === 'all' ? 'selected' : '' ?>>All</option>
                            </select>
                            <span class="text-muted small">per page</span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <?php if (count($tests) > 0): ?>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="sortable"><?= sortLink('t.id', 'ID', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th class="sortable"><?= sortLink('t.title', 'Title', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th>Training Sessions</th>
                                            <th class="sortable"><?= sortLink('qcount', 'Questions', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th class="sortable"><?= sortLink('rcount', 'Responses', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th class="sortable"><?= sortLink('t.time_limit_minutes', 'Time Limit', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th class="sortable"><?= sortLink('t.is_active', 'Status', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th class="sortable"><?= sortLink('t.is_pretest', 'Type', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th class="sortable"><?= sortLink('t.created_at', 'Created At', $sort_col, $sort_dir, $query_string) ?></th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tests as $t): ?>
                                            <tr>
                                                <td><?= $t['id'] ?></td>
                                                <td><?= htmlspecialchars($t['title']) ?></td>
                                                <td>
                                                    <?php if (!empty($t['session_info'])): ?>
                                                        <?php foreach (explode('; ', $t['session_info']) as $si): ?>
                                                            <div><?= htmlspecialchars($si) ?></div>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        Session: <?= htmlspecialchars($t['training_id'] ?? 'N/A') ?>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-info question-count-badge"><?= $t['qcount'] ?></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-secondary"><?= $t['rcount'] ?></span>
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
                                                <td><?= $t['created_at'] ? date('M j, Y g:i A', strtotime($t['created_at'])) : 'N/A' ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="test_edit.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-outline-primary" title="Edit Test">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <a href="tests.php?duplicate=<?= $t['id'] ?>" class="btn btn-sm btn-outline-info" title="Duplicate Test" onclick="return confirm('Duplicate this test with all questions?');">
                                                            <i class="bi bi-files"></i>
                                                        </a>
                                                        <a href="responses.php?test_id=<?= $t['id'] ?>" class="btn btn-sm btn-outline-secondary" title="View Responses">
                                                            <i class="bi bi-clipboard-data"></i>
                                                        </a>
                                                        <?php if ($t['qcount'] > 0): ?>
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

                            <?php if ($total_pages > 1): ?>
                            <div class="d-flex justify-content-between align-items-center p-3 border-top">
                                <small class="text-muted">
                                    Page <?= $page ?> of <?= $total_pages ?>
                                    (<?= $total_rows ?> total tests)
                                </small>
                                <nav>
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                                            <a class="page-link" href="tests.php?<?= $query_string ?>&page=1">&laquo;</a>
                                        </li>
                                        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                                            <a class="page-link" href="tests.php?<?= $query_string ?>&page=<?= $page - 1 ?>">&lsaquo;</a>
                                        </li>
                                        <?php
                                        $start = max(1, $page - 2);
                                        $end = min($total_pages, $page + 2);
                                        for ($i = $start; $i <= $end; $i++):
                                        ?>
                                            <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                                                <a class="page-link" href="tests.php?<?= $query_string ?>&page=<?= $i ?>"><?= $i ?></a>
                                            </li>
                                        <?php endfor; ?>
                                        <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                                            <a class="page-link" href="tests.php?<?= $query_string ?>&page=<?= $page + 1 ?>">&rsaquo;</a>
                                        </li>
                                        <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                                            <a class="page-link" href="tests.php?<?= $query_string ?>&page=<?= $total_pages ?>">&raquo;</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <?php endif; ?>

                        <?php else: ?>
                            <div class="p-4">
                                <div class="alert alert-info mb-0">
                                    No tests found. <a href="#" data-bs-toggle="modal" data-bs-target="#createTestModal">Create your first test</a>.
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
    </div>

    <!-- Create Test Modal -->
    <div class="modal fade" id="createTestModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-lg-down">
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
                                <label for="training_ids" class="form-label">Training Sessions</label>
                                <select class="form-select" id="training_ids" name="training_ids[]" multiple required style="min-height: 120px;">
                                    <?php foreach ($trainings as $tr): ?>
                                        <option value="<?= $tr['training_id'] ?>">
                                            <?= htmlspecialchars($tr['course_name'] ?? 'Training') ?> - Session <?= $tr['training_id'] ?> - Quarter <?= htmlspecialchars($tr['quarter'] ?? '') ?>
                                            (<?= $tr['start_date'] ? date('M Y', strtotime($tr['start_date'])) : 'N/A' ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-muted">Hold Ctrl (or Cmd) to select multiple sessions</small>
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
    <script>
        function changePerPage(val) {
            var params = new URLSearchParams(window.location.search);
            params.set('per_page', val);
            params.delete('page');
            window.location.search = params.toString();
        }

        // Cascade training dropdown on course change
        document.getElementById('filter_course').addEventListener('change', function() {
            var course = this.value;
            var trainingSelect = document.getElementById('filter_training');

            if (!course) {
                trainingSelect.innerHTML = '<option value="">All Sessions</option>';
                <?php foreach ($trainings as $tr): ?>
                    var opt = document.createElement('option');
                    opt.value = <?= $tr['training_id'] ?>;
                    opt.textContent = '<?= htmlspecialchars(addslashes($tr['course_name'] ?? 'Training')) ?> - Session <?= $tr['training_id'] ?>';
                    trainingSelect.appendChild(opt);
                <?php endforeach; ?>
                return;
            }

            fetch('tests.php?ajax=get_trainings_by_course&course_name=' + encodeURIComponent(course))
                .then(function(r) { return r.json(); })
                .then(function(sessions) {
                    trainingSelect.innerHTML = '<option value="">All Sessions</option>';
                    sessions.forEach(function(s) {
                        var opt = document.createElement('option');
                        opt.value = s.training_id;
                        opt.textContent = (s.course_name || 'Training') + ' - Session ' + s.training_id;
                        if (s.training_id == <?= $filter_training ?: 0 ?>) opt.selected = true;
                        trainingSelect.appendChild(opt);
                    });
                });
        });
    </script>
</body>
</html>
