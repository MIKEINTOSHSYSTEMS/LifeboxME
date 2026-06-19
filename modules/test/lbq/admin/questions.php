<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';
$quiz = new Quiz($pdo);

$qtype_filter = $_GET['qtype'] ?? '';
$search_filter = $_GET['search'] ?? '';
$course_filter = $_GET['course_id'] ?? '';
$test_filter = $_GET['test_id'] ?? '';

// Pagination
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$per_page = isset($_GET['per_page']) && $_GET['per_page'] === 'all' ? 'all' : max(5, min(200, intval($_GET['per_page'] ?? 20)));

// Count query
$count_sql = "SELECT COUNT(*) FROM public.quiz_questions q WHERE 1=1";
$count_params = [];
if (!empty($qtype_filter)) {
    $count_sql .= " AND q.qtype = :qtype";
    $count_params[':qtype'] = $qtype_filter;
}
if (!empty($search_filter)) {
    $count_sql .= " AND q.question ILIKE :search";
    $count_params[':search'] = '%' . $search_filter . '%';
}
if (!empty($course_filter)) {
    $count_sql .= " AND q.course_id = :course_id";
    $count_params[':course_id'] = $course_filter;
}
if (!empty($test_filter)) {
    $count_sql .= " AND EXISTS (SELECT 1 FROM lbquiz_test_questions tq WHERE tq.quiz_question_id = q.id AND tq.test_id = :test_id)";
    $count_params[':test_id'] = $test_filter;
}
$count_stmt = $pdo->prepare($count_sql);
$count_stmt->execute($count_params);
$total_rows = (int)$count_stmt->fetchColumn();

// Pagination vars
$total_pages = $per_page === 'all' ? 1 : max(1, (int)ceil($total_rows / $per_page));
$page = min($page, $total_pages);
$offset = $per_page === 'all' ? 0 : ($page - 1) * $per_page;
$limit = $per_page === 'all' ? $total_rows : $per_page;

// Main query
$sql = "SELECT q.*, c.course_name,
        (SELECT COUNT(*) FROM public.quiz_answers WHERE questionid = q.id) as answer_count,
        (SELECT string_agg(DISTINCT t.title || ' (' || COALESCE(tc2.course_name, 'No Course') || ')', '; ')
         FROM lbquiz_test_questions tq
         JOIN lbquiz_tests t ON t.id = tq.test_id
         LEFT JOIN training_sessions ts ON ts.training_id = (COALESCE(t.training_id, (SELECT MIN(ts2.training_id) FROM lbquiz_test_sessions ts2 WHERE ts2.test_id = t.id)))
         LEFT JOIN training_courses tc2 ON tc2.course_id = ts.course_id
         WHERE tq.quiz_question_id = q.id
        ) as test_info
        FROM public.quiz_questions q
        LEFT JOIN public.training_courses c ON c.course_id = q.course_id
        WHERE 1=1";
$params = [];

if (!empty($qtype_filter)) {
  $sql .= " AND q.qtype = :qtype";
  $params[':qtype'] = $qtype_filter;
}
if (!empty($search_filter)) {
  $sql .= " AND q.question ILIKE :search";
  $params[':search'] = '%' . $search_filter . '%';
}
if (!empty($course_filter)) {
  $sql .= " AND q.course_id = :course_id";
  $params[':course_id'] = $course_filter;
}
if (!empty($test_filter)) {
  $sql .= " AND EXISTS (SELECT 1 FROM lbquiz_test_questions tq WHERE tq.quiz_question_id = q.id AND tq.test_id = :test_id)";
  $params[':test_id'] = $test_filter;
}
$sql .= " ORDER BY q.id DESC LIMIT $limit OFFSET $offset";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$rows = $stmt->fetchAll();

// Batch fetch all answers for displayed questions
$answers_by_qid = [];
if (!empty($rows)) {
    $qids = array_column($rows, 'id');
    $placeholders = implode(',', array_fill(0, count($qids), '?'));
    $aStmt = $pdo->prepare("SELECT id, questionid, text, correct FROM public.quiz_answers WHERE questionid IN ($placeholders) ORDER BY id");
    $aStmt->execute($qids);
    foreach ($aStmt->fetchAll() as $a) {
        $answers_by_qid[$a['questionid']][] = $a;
    }
}

$qtypes = [
  1 => 'Single choice',
  2 => 'Multiple choice',
  3 => 'Decision matrix',
  4 => 'Fill in blanks'
];

$letter_labels = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

$courses_filter = $pdo->query("SELECT course_id, course_name FROM public.training_courses ORDER BY course_name")->fetchAll();
$tests_filter = $pdo->query("SELECT id, title FROM lbquiz_tests ORDER BY title")->fetchAll();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Questions Management - LifeBox Test Center</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">

  <style>
    .question-card { border-left: 4px solid #0d6efd; }
    .preview-text { font-size: 0.9rem; color: #6c757d; }
    .course-badge { font-size: 0.75rem; }
    .answer-item { font-size: 0.88rem; padding: 2px 0; }
    .answer-item.correct { color: #198754; font-weight: 600; }
    .answer-item .letter-badge { display: inline-block; width: 22px; height: 22px; line-height: 22px; text-align: center; border-radius: 50%; font-size: 0.75rem; font-weight: 700; margin-right: 6px; }
    .answer-item.correct .letter-badge { background: #198754; color: #fff; }
    .answer-item:not(.correct) .letter-badge { background: #e9ecef; color: #495057; }
  </style>
</head>

<body>
<?php include 'sidebar.php'; ?>
  <div class="container-fluid">
      <main class="px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Questions Management</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="question_edit.php" class="btn btn-sm btn-primary">
              <i class="bi bi-plus-circle"></i> Add New Question
            </a>
          </div>
        </div>

        <!-- Filters -->
        <div class="card mb-4">
          <div class="card-body">
            <form method="get" class="row g-3">
              <div class="col-md-3">
                <label for="qtype" class="form-label">Type</label>
                <select class="form-select" id="qtype" name="qtype">
                  <option value="">All Types</option>
                  <?php foreach ($qtypes as $id => $name): ?>
                    <option value="<?= $id ?>" <?= $qtype_filter == $id ? 'selected' : '' ?>><?= $name ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="course_id" class="form-label">Course</label>
                <select class="form-select" id="course_id" name="course_id">
                  <option value="">All Courses</option>
                  <?php foreach ($courses_filter as $c): ?>
                    <option value="<?= $c['course_id'] ?>" <?= $course_filter == $c['course_id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($c['course_name']) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="test_id" class="form-label">Test</label>
                <select class="form-select" id="test_id" name="test_id">
                  <option value="">All Tests</option>
                  <?php foreach ($tests_filter as $t): ?>
                    <option value="<?= $t['id'] ?>" <?= $test_filter == $t['id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($t['title']) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="search" class="form-label">Search</label>
                <input type="text" class="form-control" id="search" name="search"
                  value="<?= htmlspecialchars($search_filter) ?>" placeholder="Search question text...">
              </div>
              <div class="col-12 d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-filter"></i> Filter</button>
                <a href="questions.php" class="btn btn-outline-secondary">Reset</a>
              </div>
            </form>
          </div>
        </div>

        <!-- Questions List -->
        <div class="card">
          <div class="card-header bg-white d-flex justify-content-between align-items-center flex-wrap gap-2">
            <h5 class="card-title mb-0">Questions (<?= $total_rows ?>)</h5>
            <div class="d-flex align-items-center gap-2">
              <span class="text-muted small">Show</span>
              <select id="per_page" class="form-select form-select-sm" style="width: auto;" onchange="changePerPage(this.value)">
                <?php foreach ([5, 10, 15, 20, 50, 100] as $pp): ?>
                  <option value="<?= $pp ?>" <?= $per_page !== 'all' && (int)$per_page === $pp ? 'selected' : '' ?>><?= $pp ?></option>
                <?php endforeach; ?>
                <option value="all" <?= $per_page === 'all' ? 'selected' : '' ?>>All</option>
              </select>
              <span class="text-muted small">per page</span>
            </div>
          </div>
          <div class="card-body">
            <?php if (count($rows) > 0): ?>
              <div class="list-group">
                <?php foreach ($rows as $r): ?>
                  <?php $qAnswers = $answers_by_qid[$r['id']] ?? []; ?>
                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= strip_tags($r['question']) ?></h5>
                      <div class="text-end text-nowrap ms-2">
                        <span class="badge bg-info"><?= $qtypes[$r['qtype']] ?? 'Unknown' ?></span>
                        <?php if (!empty($r['course_name'])): ?>
                          <span class="badge bg-primary course-badge"><?= htmlspecialchars($r['course_name']) ?></span>
                        <?php else: ?>
                          <span class="badge bg-secondary course-badge">No Course</span>
                        <?php endif; ?>
                      </div>
                    </div>
                    <?php if (in_array($r['qtype'], [1, 2]) && !empty($qAnswers)): ?>
                      <div class="mb-1 preview-text">
                        <strong>Choices:</strong>
                        <div class="mt-1">
                          <?php foreach ($qAnswers as $ai => $a): ?>
                            <?php $letter = $letter_labels[$ai] ?? '?'; ?>
                            <div class="answer-item <?= $a['correct'] ? 'correct' : '' ?>">
                              <span class="letter-badge"><?= $letter ?></span>
                              <?= htmlspecialchars_decode(strip_tags($a['text'])) ?>
                              <?php if ($a['correct']): ?>
                                <i class="bi bi-check-circle-fill text-success ms-1" style="font-size:0.75rem"></i>
                              <?php endif; ?>
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    <?php elseif ($r['qtype'] == 4): ?>
                      <div class="mb-1 preview-text">
                        <strong>Answers:</strong>
                        <?php if (!empty($qAnswers)): ?>
                          <?php foreach ($qAnswers as $ai => $a): ?>
                            <span class="badge bg-<?= $a['correct'] ? 'success' : 'secondary' ?> me-1">
                              <?= mb_strimwidth(strip_tags($a['text']), 0, 50, '...') ?>
                            </span>
                          <?php endforeach; ?>
                        <?php else: ?>
                          <em class="text-muted">No answers configured</em>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>
                    <small class="text-muted">
                      ID: <?= $r['id'] ?> | Answers: <?= count($qAnswers) ?> |
                      Created: <?= date('M j, Y', strtotime($r['created_at'])) ?>
                    </small>
                    <?php if (!empty($r['test_info'])): ?>
                      <div class="mt-1">
                        <small class="text-muted">
                          <i class="bi bi-link-45deg"></i> Tests:
                          <?php foreach (explode('; ', $r['test_info']) as $ti): ?>
                            <span class="badge bg-light text-dark me-1"><?= htmlspecialchars($ti) ?></span>
                          <?php endforeach; ?>
                        </small>
                      </div>
                    <?php endif; ?>
                    <div class="mt-2">
                      <a href="question_edit.php?id=<?= urlencode($r['id']) ?>" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i> Edit
                      </a>
                      <a href="map_question.php?qid=<?= urlencode($r['id']) ?>" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-link"></i> Map to Test
                      </a>
                      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $r['id'] ?>">
                        <i class="bi bi-trash"></i> Delete
                      </button>
                    </div>
                  </div>

                  <!-- Delete Confirmation Modal -->
                  <div class="modal fade" id="deleteModal<?= $r['id'] ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Confirm Delete</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this question? This action cannot be undone.
                          <div class="alert alert-warning mt-2">
                            <strong>Warning:</strong> Deleting this question will also remove it from any tests it's currently mapped to.
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <a href="question_delete.php?id=<?= urlencode($r['id']) ?>" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

              <?php if ($total_pages > 1): ?>
              <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                <small class="text-muted">
                  Page <?= $page ?> of <?= $total_pages ?>
                  (<?= $total_rows ?> total questions)
                </small>
                <nav>
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                      <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => 1])) ?>">&laquo;</a>
                    </li>
                    <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                      <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>">&lsaquo;</a>
                    </li>
                    <?php
                    $start = max(1, $page - 2);
                    $end = min($total_pages, $page + 2);
                    for ($i = $start; $i <= $end; $i++):
                    ?>
                      <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                        <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $i])) ?>"><?= $i ?></a>
                      </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                      <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>">&rsaquo;</a>
                    </li>
                    <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                      <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $total_pages])) ?>">&raquo;</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <?php endif; ?>

            <?php else: ?>
              <div class="alert alert-info">
                No questions found. <a href="question_edit.php">Create your first question</a>.
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
  </script>
</body>

</html>
