<?php
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

// Handle filters
$qtype_filter = $_GET['qtype'] ?? '';
$search_filter = $_GET['search'] ?? '';

// Build query with filters
$sql = "SELECT q.*, 
        (SELECT COUNT(*) FROM public.quiz_answers WHERE questionid = q.id) as answer_count,
        (SELECT string_agg(text, ', ') FROM public.quiz_answers WHERE questionid = q.id) as answer_preview
        FROM public.quiz_questions q 
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

$sql .= " ORDER BY q.id DESC LIMIT 200";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$rows = $stmt->fetchAll();

// Get question types for filter
$qtypes = [
  1 => 'Single choice',
  2 => 'Multiple choice',
  3 => 'Decision matrix',
  4 => 'Fill in blanks'
];
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
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

  <style>
    .question-card {
      border-left: 4px solid #0d6efd;
    }

    .preview-text {
      font-size: 0.9rem;
      color: #6c757d;
    }
  </style>
  <style>
    @media (min-width: 768px) {
      .px-md-4 {
        padding-right: 7.5rem !important;
        padding-left: 1.5rem !important;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
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
              <div class="col-md-4">
                <label for="qtype" class="form-label">Question Type</label>
                <select class="form-select" id="qtype" name="qtype">
                  <option value="">All Types</option>
                  <?php foreach ($qtypes as $id => $name): ?>
                    <option value="<?= $id ?>" <?= $qtype_filter == $id ? 'selected' : '' ?>>
                      <?= $name ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-6">
                <label for="search" class="form-label">Search Questions</label>
                <input type="text" class="form-control" id="search" name="search"
                  value="<?= htmlspecialchars($search_filter) ?>"
                  placeholder="Search question text...">
              </div>
              <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary me-2">Filter</button>
                <a href="questions.php" class="btn btn-outline-secondary">Reset</a>
              </div>
            </form>
          </div>
        </div>

        <!-- Questions List -->
        <div class="card">
          <div class="card-header bg-white">
            <h5 class="card-title mb-0">Questions (<?= count($rows) ?>)</h5>
          </div>
          <div class="card-body">
            <?php if (count($rows) > 0): ?>
              <div class="list-group">
                <?php foreach ($rows as $r): ?>
                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= strip_tags($r['question']) ?></h5>
                      <small>
                        <span class="badge bg-info"><?= $qtypes[$r['qtype']] ?? 'Unknown' ?></span>
                      </small>
                    </div>
                    <p class="mb-1 preview-text">
                      <strong>Answers:</strong> <?= htmlspecialchars($r['answer_preview'] ?? 'No answers') ?>
                    </p>
                    <small class="text-muted">
                      ID: <?= $r['id'] ?> |
                      Answers: <?= $r['answer_count'] ?> |
                      Created: <?= date('M j, Y', strtotime($r['created_at'])) ?>
                    </small>
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
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>