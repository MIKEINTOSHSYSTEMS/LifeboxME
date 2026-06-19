<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';
$quiz = new Quiz($pdo);

$qtype_filter = $_GET['qtype'] ?? '';
$search_filter = $_GET['search'] ?? '';
$course_filter = $_GET['course_id'] ?? '';
$test_filter = $_GET['test_id'] ?? '';

$sql = "SELECT q.*, c.course_name,
        (SELECT COUNT(*) FROM public.quiz_answers WHERE questionid = q.id) as answer_count,
        (SELECT string_agg(text, ', ') FROM public.quiz_answers WHERE questionid = q.id) as answer_preview,
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
$sql .= " ORDER BY q.id DESC LIMIT 200";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$rows = $stmt->fetchAll();

$qtypes = [
  1 => 'Single choice',
  2 => 'Multiple choice',
  3 => 'Decision matrix',
  4 => 'Fill in blanks'
];

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
          <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Questions (<?= count($rows) ?>)</h5>
          </div>
          <div class="card-body">
            <?php if (count($rows) > 0): ?>
              <div class="list-group">
                <?php foreach ($rows as $r): ?>
                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= strip_tags($r['question']) ?></h5>
                      <div class="text-end">
                        <span class="badge bg-info"><?= $qtypes[$r['qtype']] ?? 'Unknown' ?></span>
                        <?php if (!empty($r['course_name'])): ?>
                          <span class="badge bg-primary course-badge"><?= htmlspecialchars($r['course_name']) ?></span>
                        <?php else: ?>
                          <span class="badge bg-secondary course-badge">No Course</span>
                        <?php endif; ?>
                      </div>
                    </div>
                    <p class="mb-1 preview-text">
                      <strong>Answers:</strong> <?= htmlspecialchars_decode($r['answer_preview'] ?? 'No answers') ?>
                    </p>
                    <small class="text-muted">
                      ID: <?= $r['id'] ?> | Answers: <?= $r['answer_count'] ?> |
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
</body>

</html>
