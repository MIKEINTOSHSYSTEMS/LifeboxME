<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';
$quiz = new Quiz($pdo);

$allow_sort = [
    'r.id', 't.title', 'r.score', 'r.points_raw',
    'r.started_at', 'r.submitted_at', 'part.first_name', 'part.last_name'
];

// AJAX: get training sessions for a test
if (isset($_GET['ajax']) && $_GET['ajax'] === 'get_test_sessions' && isset($_GET['test_id'])) {
    header('Content-Type: application/json');
    echo json_encode($quiz->getTestSessions(intval($_GET['test_id'])));
    exit;
}

// AJAX: get participants for test (+ optional training)
if (isset($_GET['ajax']) && $_GET['ajax'] === 'get_participants') {
    header('Content-Type: application/json');
    $t = intval($_GET['test_id'] ?? 0);
    $tr = intval($_GET['training_id'] ?? 0);
    if (!$t) { echo '[]'; exit; }
    $sql = "SELECT DISTINCT part.participant_id, part.first_name, part.last_name, part.email
            FROM training_participants part
            JOIN training_participation tp ON tp.participant_id = part.participant_id
            JOIN lbquiz_responses r ON r.participation_id = tp.participation_id
            WHERE r.test_id = :test_id";
    $params = [':test_id' => $t];
    if ($tr) {
        $sql .= " AND tp.training_id = :training_id";
        $params[':training_id'] = $tr;
    }
    $sql .= " ORDER BY part.first_name, part.last_name";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    echo json_encode($stmt->fetchAll());
    exit;
}

// --- Filters ---
$test_id       = intval($_GET['test_id'] ?? 0);
$training_id   = intval($_GET['training_id'] ?? 0);
$participant_id= intval($_GET['participant_id'] ?? 0);
$score_min     = floatval($_GET['score_min'] ?? 0);
$score_max     = floatval($_GET['score_max'] ?? 100);
$date_from     = $_GET['date_from'] ?? '';
$date_to       = $_GET['date_to'] ?? '';
$is_pretest    = $_GET['is_pretest'] ?? '';        // ''=all, '1'=pretest, '0'=posttest
$search        = trim($_GET['search'] ?? '');
$sort_col      = in_array($_GET['sort'] ?? '', $allow_sort, true) ? $_GET['sort'] : 'r.submitted_at';
$sort_dir      = strtoupper($_GET['dir'] ?? 'DESC') === 'ASC' ? 'ASC' : 'DESC';
$page          = max(1, intval($_GET['page'] ?? 1));
$per_page      = $_GET['per_page'] ?? '20';
$per_page      = $per_page === 'all' ? 'all' : max(1, intval($per_page));

// --- Count query ---
$count_sql = "SELECT COUNT(*) FROM lbquiz_responses r
              JOIN lbquiz_tests t ON t.id = r.test_id
              LEFT JOIN training_participation tp ON tp.participation_id = r.participation_id
              LEFT JOIN training_participants part ON part.participant_id = tp.participant_id
              WHERE 1=1";
$count_params = [];

if ($test_id) {
    $count_sql .= " AND r.test_id = :test_id";
    $count_params[':test_id'] = $test_id;
}
if ($training_id) {
    $count_sql .= " AND (t.training_id = :training_id OR EXISTS (SELECT 1 FROM lbquiz_test_sessions ts WHERE ts.test_id = t.id AND ts.training_id = :training_id2))";
    $count_params[':training_id'] = $training_id;
    $count_params[':training_id2'] = $training_id;
}
if ($participant_id) {
    $count_sql .= " AND tp.participant_id = :participant_id";
    $count_params[':participant_id'] = $participant_id;
}
if ($score_min > 0) {
    $count_sql .= " AND r.score >= :score_min";
    $count_params[':score_min'] = $score_min;
}
if ($score_max < 100) {
    $count_sql .= " AND r.score <= :score_max";
    $count_params[':score_max'] = $score_max;
}
if (!empty($date_from)) {
    $count_sql .= " AND r.submitted_at >= :date_from";
    $count_params[':date_from'] = $date_from . ' 00:00:00';
}
if (!empty($date_to)) {
    $count_sql .= " AND r.submitted_at <= :date_to";
    $count_params[':date_to'] = $date_to . ' 23:59:59';
}
if ($is_pretest !== '') {
    $count_sql .= " AND t.is_pretest = :is_pretest";
    $count_params[':is_pretest'] = $is_pretest === '1' ? 't' : 'f';
}
if ($search !== '') {
    $count_sql .= " AND (r.id::text ILIKE :search
                    OR t.title ILIKE :search2
                    OR (part.first_name || ' ' || part.last_name) ILIKE :search3
                    OR part.email ILIKE :search4
                    OR r.score::text ILIKE :search5)";
    $search_term = '%' . $search . '%';
    $count_params[':search'] = $search_term;
    $count_params[':search2'] = $search_term;
    $count_params[':search3'] = $search_term;
    $count_params[':search4'] = $search_term;
    $count_params[':search5'] = $search_term;
}

$count_stmt = $pdo->prepare($count_sql);
$count_stmt->execute($count_params);
$total_rows = (int)$count_stmt->fetchColumn();

// --- Data query ---
$sql = "SELECT r.*, t.title as test_title, t.is_pretest, t.training_id as test_primary_training,
               tp.participant_id, tp.training_id as response_training_id,
               part.first_name, part.last_name, part.email,
               ts.training_type, ts.quarter, ts.start_date, ts.end_date,
               tc.course_name
        FROM lbquiz_responses r
        JOIN lbquiz_tests t ON t.id = r.test_id
        LEFT JOIN training_participation tp ON tp.participation_id = r.participation_id
        LEFT JOIN training_participants part ON part.participant_id = tp.participant_id
        LEFT JOIN training_sessions ts ON ts.training_id = tp.training_id
        LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
        WHERE 1=1";
$params = [];

if ($test_id) {
    $sql .= " AND r.test_id = :test_id";
    $params[':test_id'] = $test_id;
}
if ($training_id) {
    $sql .= " AND (t.training_id = :training_id OR EXISTS (SELECT 1 FROM lbquiz_test_sessions ts WHERE ts.test_id = t.id AND ts.training_id = :training_id2))";
    $params[':training_id'] = $training_id;
    $params[':training_id2'] = $training_id;
}
if ($participant_id) {
    $sql .= " AND tp.participant_id = :participant_id";
    $params[':participant_id'] = $participant_id;
}
if ($score_min > 0) {
    $sql .= " AND r.score >= :score_min";
    $params[':score_min'] = $score_min;
}
if ($score_max < 100) {
    $sql .= " AND r.score <= :score_max";
    $params[':score_max'] = $score_max;
}
if (!empty($date_from)) {
    $sql .= " AND r.submitted_at >= :date_from";
    $params[':date_from'] = $date_from . ' 00:00:00';
}
if (!empty($date_to)) {
    $sql .= " AND r.submitted_at <= :date_to";
    $params[':date_to'] = $date_to . ' 23:59:59';
}
if ($is_pretest !== '') {
    $sql .= " AND t.is_pretest = :is_pretest";
    $params[':is_pretest'] = $is_pretest === '1' ? 't' : 'f';
}
if ($search !== '') {
    $sql .= " AND (r.id::text ILIKE :search
                    OR t.title ILIKE :search2
                    OR (part.first_name || ' ' || part.last_name) ILIKE :search3
                    OR part.email ILIKE :search4
                    OR r.score::text ILIKE :search5)";
    $search_term = '%' . $search . '%';
    $params[':search'] = $search_term;
    $params[':search2'] = $search_term;
    $params[':search3'] = $search_term;
    $params[':search4'] = $search_term;
    $params[':search5'] = $search_term;
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
$stmt->execute($params);
$rows = $stmt->fetchAll();

// --- Dropdown data ---
$tests = $quiz->listTests(100);

if ($test_id) {
    $trainings = $quiz->getTestSessions($test_id);
} else {
    $trainings = $pdo->query("
        SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
        FROM training_sessions ts
        LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
        ORDER BY tc.course_name ASC, ts.training_id ASC, ts.start_date ASC
    ")->fetchAll();
}

// Participants filtered by test (+ training) for dropdown
$part_sql = "SELECT DISTINCT part.participant_id, part.first_name, part.last_name, part.email
             FROM training_participants part
             JOIN training_participation tp ON tp.participant_id = part.participant_id
             JOIN lbquiz_responses r ON r.participation_id = tp.participation_id
             WHERE 1=1";
$part_params = [];
if ($test_id) {
    $part_sql .= " AND r.test_id = :test_id";
    $part_params[':test_id'] = $test_id;
}
if ($training_id) {
    $part_sql .= " AND tp.training_id = :training_id";
    $part_params[':training_id'] = $training_id;
}
$part_sql .= " ORDER BY part.first_name, part.last_name";
$part_stmt = $pdo->prepare($part_sql);
$part_stmt->execute($part_params);
$participants = $part_stmt->fetchAll();

// Build query string for pagination links (exclude page)
$query_params = $_GET;
unset($query_params['page']);
$query_string = http_build_query($query_params);

// Helper: sort link
function sortLink($col, $label, $current_col, $current_dir, $qs) {
    $new_dir = ($current_col === $col && $current_dir === 'ASC') ? 'DESC' : 'ASC';
    $icon = '';
    if ($current_col === $col) {
        $icon = $current_dir === 'ASC' ? ' &#9650;' : ' &#9660;';
    }
    $q = $qs . '&sort=' . urlencode($col) . '&dir=' . $new_dir;
    return '<a href="responses.php?' . $q . '" class="text-dark text-decoration-none">' . $label . $icon . '</a>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responses - LifeBox Test Center</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">
  <style>
    .response-row:hover { background-color: #f8f9fa; }
    .score-cell { font-weight: bold; }
    .score-high { color: #198754; }
    .score-medium { color: #fd7e14; }
    .score-low { color: #dc3545; }
    .sort-link:hover { text-decoration: underline !important; }
    th.sortable { white-space: nowrap; }
    @media (min-width: 768px) {
      .px-md-4 { padding-right: 7.5rem !important; padding-left: 1.5rem !important; }
    }
  </style>
</head>

<body>
<?php include 'sidebar.php'; ?>
  <div class="container-fluid">
      <main class="px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Test Responses</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="dashboard.php" class="btn btn-sm btn-outline-secondary">
              <i class="bi bi-arrow-left"></i> Back to Dashboard
            </a>
          </div>
        </div>

        <!-- Filters -->
        <div class="card mb-4">
          <div class="card-header bg-white">
            <h5 class="card-title mb-0">Filter Responses</h5>
          </div>
          <div class="card-body">
            <form method="get" class="row g-3">
              <div class="col-md-3">
                <label for="test_id" class="form-label">Test</label>
                <select class="form-select" id="test_id" name="test_id">
                  <option value="">All Tests</option>
                  <?php foreach ($tests as $t): ?>
                    <option value="<?= $t['id'] ?>" <?= $test_id == $t['id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($t['title']) ?> (ID: <?= $t['id'] ?>)
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="training_id" class="form-label">Training</label>
                <select class="form-select" id="training_id" name="training_id">
                  <option value="">All Trainings</option>
                  <?php foreach ($trainings as $tr): ?>
                    <option value="<?= $tr['training_id'] ?>" <?= $training_id == $tr['training_id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($tr['course_name'] ?? 'Training', ENT_QUOTES, 'UTF-8') ?> - Session
                      <?= htmlspecialchars($tr['training_id'] ?? '', ENT_QUOTES, 'UTF-8') ?> - Quarter
                      <?= htmlspecialchars($tr['quarter'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                      (<?= $tr['start_date'] ? date('M Y', strtotime($tr['start_date'])) : 'N/A' ?>)
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="participant_id" class="form-label">Participant</label>
                <select class="form-select" id="participant_id" name="participant_id">
                  <option value="">All Participants</option>
                  <?php foreach ($participants as $p): ?>
                    <option value="<?= $p['participant_id'] ?>" <?= $participant_id == $p['participant_id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($p['first_name'] . ' ' . $p['last_name'] . ' (' . $p['email'] . ')') ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="is_pretest" class="form-label">Test Type</label>
                <select class="form-select" id="is_pretest" name="is_pretest">
                  <option value="">All</option>
                  <option value="1" <?= $is_pretest === '1' ? 'selected' : '' ?>>Pre Test</option>
                  <option value="0" <?= $is_pretest === '0' ? 'selected' : '' ?>>Post Test</option>
                </select>
              </div>
              <div class="col-md-3">
                <label for="score_range" class="form-label">Score Range</label>
                <div class="input-group">
                  <input type="number" class="form-control" name="score_min" placeholder="Min"
                    value="<?= $score_min ?>" min="0" max="100" step="0.1">
                  <span class="input-group-text">to</span>
                  <input type="number" class="form-control" name="score_max" placeholder="Max"
                    value="<?= $score_max ?>" min="0" max="100" step="0.1">
                </div>
              </div>
              <div class="col-md-3">
                <label for="search" class="form-label">Search</label>
                <input type="text" class="form-control" id="search" name="search" placeholder="Search all columns..."
                  value="<?= htmlspecialchars($search) ?>">
              </div>
              <div class="col-md-3">
                <label for="date_from" class="form-label">Date From</label>
                <input type="date" class="form-control" id="date_from" name="date_from" value="<?= $date_from ?>">
              </div>
              <div class="col-md-3">
                <label for="date_to" class="form-label">Date To</label>
                <input type="date" class="form-control" id="date_to" name="date_to" value="<?= $date_to ?>">
              </div>
              <div class="col-12 d-flex align-items-end gap-2">
                <button type="submit" class="btn btn-primary">Apply Filters</button>
                <a href="responses.php" class="btn btn-outline-secondary">Clear Filters</a>
              </div>
            </form>
          </div>
        </div>

        <!-- Responses Table -->
        <div class="card">
          <div class="card-header bg-white d-flex justify-content-between align-items-center flex-wrap gap-2">
            <h5 class="card-title mb-0">Responses (<?= $total_rows ?>)</h5>
            <div class="d-flex align-items-center gap-2">
              <span class="text-muted small">Show</span>
              <select id="per_page" class="form-select form-select-sm" style="width: auto;" onchange="changePerPage(this.value)">
                <?php foreach ([5, 10, 15, 20, 50, 100] as $pp): ?>
                  <option value="<?= $pp ?>" <?= ($per_page !== 'all' && (int)$per_page === $pp) ? 'selected' : '' ?>><?= $pp ?></option>
                <?php endforeach; ?>
                <option value="all" <?= $per_page === 'all' ? 'selected' : '' ?>>All</option>
              </select>
              <span class="text-muted small">per page</span>
              <button class="btn btn-sm btn-outline-secondary" onclick="exportToCSV()">
                <i class="bi bi-download"></i> CSV
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <?php if (count($rows) > 0): ?>
              <div class="table-responsive">
                <table class="table table-hover mb-0" id="responses-table">
                  <thead class="table-light">
                    <tr>
                      <th class="sortable"><?= sortLink('r.id', 'ID', $sort_col, $sort_dir, $query_string) ?></th>
                      <th class="sortable"><?= sortLink('t.title', 'Test', $sort_col, $sort_dir, $query_string) ?></th>
                      <th>Training</th>
                      <th class="sortable"><?= sortLink('part.first_name', 'Participant', $sort_col, $sort_dir, $query_string) ?></th>
                      <th class="sortable"><?= sortLink('r.score', 'Score', $sort_col, $sort_dir, $query_string) ?></th>
                      <th class="sortable"><?= sortLink('r.points_raw', 'Raw Points', $sort_col, $sort_dir, $query_string) ?></th>
                      <th class="sortable"><?= sortLink('r.started_at', 'Started At', $sort_col, $sort_dir, $query_string) ?></th>
                      <th class="sortable"><?= sortLink('r.submitted_at', 'Submitted At', $sort_col, $sort_dir, $query_string) ?></th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($rows as $r): ?>
                      <tr class="response-row">
                        <td><?= htmlspecialchars($r['id']) ?></td>
                        <td>
                          <?= htmlspecialchars($r['test_title']) ?><br>
                          <small class="text-muted">ID: <?= $r['test_id'] ?>
                            <span class="badge bg-<?= $r['is_pretest'] === 't' ? 'info' : 'primary' ?>" style="font-size:0.65rem;">
                              <?= $r['is_pretest'] === 't' ? 'Pre' : 'Post' ?>
                            </span>
                          </small>
                        </td>
                        <td>
                          <?php if ($r['response_training_id']): ?>
                            <?= htmlspecialchars($r['course_name'] ?? 'Training', ENT_QUOTES, 'UTF-8') ?> - Session
                            <?= htmlspecialchars($r['response_training_id'] ?? '', ENT_QUOTES, 'UTF-8') ?><br>
                            <small class="text-muted">Quarter <?= htmlspecialchars($r['quarter'] ?? '') ?>
                              (<?= $r['start_date'] ? date('M Y', strtotime($r['start_date'])) : 'N/A' ?>)
                            </small>
                          <?php else: ?>
                            <span class="text-muted">N/A</span>
                          <?php endif; ?>
                        </td>
                        <td>
                          <?php if ($r['participant_id']): ?>
                            <?= htmlspecialchars($r['first_name'] . ' ' . $r['last_name']) ?><br>
                            <small class="text-muted"><?= htmlspecialchars($r['email']) ?></small>
                          <?php else: ?>
                            <span class="text-muted">N/A</span>
                          <?php endif; ?>
                        </td>
                        <td class="score-cell <?= $r['score'] >= 70 ? 'score-high' : ($r['score'] >= 50 ? 'score-medium' : 'score-low') ?>">
                          <?= $r['submitted_at'] ? htmlspecialchars($r['score']) . '%' : 'N/A' ?>
                        </td>
                        <td><?= $r['submitted_at'] ? htmlspecialchars($r['points_raw']) : 'N/A' ?></td>
                        <td><?= $r['started_at'] ? date('M j, Y g:i A', strtotime($r['started_at'])) : 'N/A' ?></td>
                        <td><?= $r['submitted_at'] ? date('M j, Y g:i A', strtotime($r['submitted_at'])) : 'Not submitted' ?></td>
                        <td>
                          <a href="response_detail.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

              <!-- Pagination -->
              <?php if ($total_pages > 1): ?>
              <div class="d-flex justify-content-between align-items-center p-3 border-top">
                <small class="text-muted">
                  Page <?= $page ?> of <?= $total_pages ?>
                  (<?= $total_rows ?> total responses)
                </small>
                <nav>
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                      <a class="page-link" href="responses.php?<?= $query_string ?>&page=1">&laquo;</a>
                    </li>
                    <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                      <a class="page-link" href="responses.php?<?= $query_string ?>&page=<?= $page - 1 ?>">&lsaquo;</a>
                    </li>
                    <?php
                    $start = max(1, $page - 2);
                    $end = min($total_pages, $page + 2);
                    for ($i = $start; $i <= $end; $i++):
                    ?>
                      <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                        <a class="page-link" href="responses.php?<?= $query_string ?>&page=<?= $i ?>"><?= $i ?></a>
                      </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                      <a class="page-link" href="responses.php?<?= $query_string ?>&page=<?= $page + 1 ?>">&rsaquo;</a>
                    </li>
                    <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                      <a class="page-link" href="responses.php?<?= $query_string ?>&page=<?= $total_pages ?>">&raquo;</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <?php endif; ?>

            <?php else: ?>
              <div class="p-4">
                <div class="alert alert-info mb-0">
                  No responses found matching your filters.
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function changePerPage(val) {
      var params = new URLSearchParams(window.location.search);
      params.set('per_page', val);
      params.delete('page');
      window.location.search = params.toString();
    }

    // Cascade training dropdown on test change
    document.getElementById('test_id').addEventListener('change', function() {
      var testId = this.value;
      var trainingSelect = document.getElementById('training_id');

      if (!testId) {
        window.location.href = 'responses.php';
        return;
      }

      fetch('responses.php?ajax=get_test_sessions&test_id=' + testId)
        .then(function(r) { return r.json(); })
        .then(function(sessions) {
          trainingSelect.innerHTML = '<option value="">All Trainings</option>';
          sessions.forEach(function(s) {
            var opt = document.createElement('option');
            opt.value = s.training_id;
            opt.textContent = (s.course_name || 'Training') + ' - Session ' + s.training_id + ' - Quarter ' + (s.quarter || '') + ' (' + (s.start_date ? new Date(s.start_date).toLocaleString('default', { month: 'short', year: 'numeric' }) : 'N/A') + ')';
            if (s.training_id == <?= $training_id ?>) opt.selected = true;
            trainingSelect.appendChild(opt);
          });
          // Also refresh participants
          updateParticipants(testId, trainingSelect.value);
        });
    });

    // Cascade participant dropdown on test OR training change
    document.getElementById('training_id').addEventListener('change', function() {
      var testId = document.getElementById('test_id').value;
      if (testId) {
        updateParticipants(testId, this.value);
      }
    });

    function updateParticipants(testId, trainingId) {
      var url = 'responses.php?ajax=get_participants&test_id=' + testId;
      if (trainingId) url += '&training_id=' + trainingId;

      fetch(url)
        .then(function(r) { return r.json(); })
        .then(function(participants) {
          var sel = document.getElementById('participant_id');
          sel.innerHTML = '<option value="">All Participants</option>';
          participants.forEach(function(p) {
            var opt = document.createElement('option');
            opt.value = p.participant_id;
            opt.textContent = p.first_name + ' ' + p.last_name + ' (' + p.email + ')';
            if (p.participant_id == <?= $participant_id ?>) opt.selected = true;
            sel.appendChild(opt);
          });
        });
    }

    function exportToCSV() {
      var csv = [];
      var rows = document.querySelectorAll("#responses-table tr");
      for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        for (var j = 0; j < cols.length; j++) {
          if (j !== cols.length - 1) {
            row.push('"' + cols[j].innerText.replace(/"/g, '""') + '"');
          }
        }
        csv.push(row.join(","));
      }
      var csvContent = "data:text/csv;charset=utf-8," + csv.join("\n");
      var encodedUri = encodeURI(csvContent);
      var link = document.createElement("a");
      link.setAttribute("href", encodedUri);
      link.setAttribute("download", "test_responses_<?= date('Y-m-d') ?>.csv");
      document.body.appendChild(link);
      link.click();
    }
  </script>
</body>

</html>
