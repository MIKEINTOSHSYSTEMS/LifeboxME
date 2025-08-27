<?php
session_start();
if (empty($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$test_id = intval($_GET['id'] ?? 0);
if (!$test_id) {
  header('Location: dashboard.php');
  exit;
}

$test = $quiz->getTest($test_id);
$mapped = $quiz->getTestQuestions($test_id);

// Get available questions with filters
$filters = [];
if (isset($_GET['qtype_filter'])) {
  $filters['qtype'] = intval($_GET['qtype_filter']);
}
if (isset($_GET['search_questions'])) {
  $filters['search'] = trim($_GET['search_questions']);
}
$not_mapped = $quiz->listQuestionsNotInTest($test_id, $filters);

// Get trainings for dropdown
$trainings = $pdo->query("
    SELECT training_id, training_type as title, course_id, program_id, quarter, start_date, end_date
    FROM training_sessions 
    ORDER BY start_date DESC 
    LIMIT 200
")->fetchAll();

// Add or remove mapping or update test
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['add_question'])) {
    $qid = intval($_POST['question_id']);
    $weight = floatval($_POST['weight'] ?? 1.0);
    $quiz->addQuestionToTest($test_id, $qid, $weight);
    header("Location: test_edit.php?id=$test_id");
    exit;
  } elseif (!empty($_POST['remove_question'])) {
    $qid = intval($_POST['question_id']);
    $quiz->removeQuestionFromTest($test_id, $qid);
    header("Location: test_edit.php?id=$test_id");
    exit;
  } elseif (!empty($_POST['update_test'])) {
    $title = trim($_POST['title'] ?? '');
    $training_id = intval($_POST['training_id'] ?? 0);
    $description = trim($_POST['description'] ?? '');
    $time_limit = !empty($_POST['time_limit_minutes']) ? intval($_POST['time_limit_minutes']) : null;
    $is_pretest = !empty($_POST['is_pretest']) ? true : false;
    $is_active = !empty($_POST['is_active']) ? true : false;

    $quiz->updateTest($test_id, $title, $description, $time_limit, $is_active, $is_pretest, $training_id);
    header("Location: test_edit.php?id=$test_id");
    exit;
  } elseif (!empty($_POST['update_question_weight'])) {
    $qid = intval($_POST['question_id']);
    $weight = floatval($_POST['weight'] ?? 1.0);
    $position = intval($_POST['position'] ?? 9999);

    // For simplicity, we'll just remove and re-add with new weight
    $quiz->removeQuestionFromTest($test_id, $qid);
    $quiz->addQuestionToTest($test_id, $qid, $weight, $position);
    header("Location: test_edit.php?id=$test_id");
    exit;
  } elseif (!empty($_POST['bulk_add_questions'])) {
    $question_ids = $_POST['bulk_question_ids'] ?? [];
    foreach ($question_ids as $qid) {
      $quiz->addQuestionToTest($test_id, intval($qid));
    }
    header("Location: test_edit.php?id=$test_id");
    exit;
  }
}

// Question types for filter
$qtypes = [
  1 => 'Single choice',
  2 => 'Multiple choice',
  3 => 'Decision matrix',
  4 => 'Fill in blanks'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Test - LifeBox Test Center</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .question-item {
      border-left: 4px solid #0d6efd;
      margin-bottom: 10px;
    }

    .sortable-ghost {
      opacity: 0.5;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Test - <?= htmlspecialchars($test['title']) ?></h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="dashboard.php" class="btn btn-sm btn-outline-secondary">
              <i class="bi bi-arrow-left"></i> Back to Dashboard
            </a>
          </div>
        </div>

        <!-- Test Details Form -->
        <div class="card mb-4">
          <div class="card-header bg-white">
            <h5 class="card-title mb-0">Test Details</h5>
          </div>
          <div class="card-body">
            <form method="post">
              <div class="row mb-3">
                <div class="col-md-8">
                  <label for="title" class="form-label">Test Title</label>
                  <input type="text" class="form-control" id="title" name="title"
                    value="<?= htmlspecialchars($test['title']) ?>" required>
                </div>
                <div class="col-md-4">
                  <label for="training_id" class="form-label">Training</label>
                  <select class="form-select" id="training_id" name="training_id" required>
                    <option value="">Select Training</option>
                    <?php foreach ($trainings as $tr): ?>
                      <option value="<?= $tr['training_id'] ?>"
                        <?= $test['training_id'] == $tr['training_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($tr['title'] . ' (ID: ' . $tr['training_id'] . ')') ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-8">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description"
                    rows="2"><?= htmlspecialchars($test['description'] ?? '') ?></textarea>
                </div>
                <div class="col-md-4">
                  <label for="time_limit_minutes" class="form-label">Time Limit (minutes)</label>
                  <input type="number" class="form-control" id="time_limit_minutes" name="time_limit_minutes"
                    value="<?= $test['time_limit_minutes'] ?? '' ?>" min="0"
                    placeholder="0 for no time limit">
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_pretest" name="is_pretest"
                      <?= $test['is_pretest'] ? 'checked' : '' ?>>
                    <label class="form-check-label" for="is_pretest">This is a pretest</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                      <?= $test['is_active'] ? 'checked' : '' ?>>
                    <label class="form-check-label" for="is_active">Active</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <button type="submit" name="update_test" class="btn btn-primary w-100">Update Test Details</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="row">
          <!-- Mapped Questions -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Mapped Questions (<?= count($mapped) ?>)</h5>
                <small>Total Points: <?= array_sum(array_column($mapped, 'weight')) ?></small>
              </div>
              <div class="card-body">
                <?php if (count($mapped) > 0): ?>
                  <div id="mapped-questions">
                    <?php foreach ($mapped as $m): ?>
                      <div class="card question-item mb-2">
                        <div class="card-body py-2">
                          <div class="d-flex justify-content-between align-items-start">
                            <div class="flex-grow-1">
                              <h6 class="card-title mb-1"><?= strip_tags($m['question']) ?></h6>
                              <p class="card-text mb-1 small">
                                <span class="badge bg-info"><?= $qtypes[$m['qtype']] ?? 'Unknown' ?></span>
                                <span class="badge bg-secondary">Weight: <?= $m['weight'] ?></span>
                                <span class="badge bg-light text-dark">Position: <?= $m['position'] ?></span>
                              </p>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-primary"
                                data-bs-toggle="modal" data-bs-target="#editWeightModal<?= $m['quiz_question_id'] ?>">
                                <i class="bi bi-pencil"></i>
                              </button>
                              <form method="post" class="d-inline">
                                <input type="hidden" name="question_id" value="<?= $m['quiz_question_id'] ?>">
                                <button type="submit" name="remove_question" class="btn btn-sm btn-outline-danger">
                                  <i class="bi bi-trash"></i>
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Edit Weight Modal -->
                      <div class="modal fade" id="editWeightModal<?= $m['quiz_question_id'] ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit Question Weight</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post">
                              <div class="modal-body">
                                <p class="mb-2"><?= strip_tags($m['question']) ?></p>
                                <div class="mb-3">
                                  <label for="weight<?= $m['quiz_question_id'] ?>" class="form-label">Weight</label>
                                  <input type="number" class="form-control" id="weight<?= $m['quiz_question_id'] ?>"
                                    name="weight" value="<?= $m['weight'] ?>" step="0.1" min="0.1" required>
                                </div>
                                <div class="mb-3">
                                  <label for="position<?= $m['quiz_question_id'] ?>" class="form-label">Position</label>
                                  <input type="number" class="form-control" id="position<?= $m['quiz_question_id'] ?>"
                                    name="position" value="<?= $m['position'] ?>" min="0" required>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <input type="hidden" name="question_id" value="<?= $m['quiz_question_id'] ?>">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="update_question_weight" class="btn btn-primary">Save Changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php else: ?>
                  <div class="alert alert-info">
                    No questions mapped to this test yet.
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Available Questions -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Available Questions</h5>
              </div>
              <div class="card-body">
                <!-- Question Filters -->
                <form method="get" class="row g-2 mb-3">
                  <input type="hidden" name="id" value="<?= $test_id ?>">
                  <div class="col-md-6">
                    <select class="form-select" name="qtype_filter">
                      <option value="">All Types</option>
                      <?php foreach ($qtypes as $id => $name): ?>
                        <option value="<?= $id ?>" <?= ($filters['qtype'] ?? '') == $id ? 'selected' : '' ?>>
                          <?= $name ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control" name="search_questions"
                        placeholder="Search questions..." value="<?= $filters['search'] ?? '' ?>">
                      <button class="btn btn-outline-secondary" type="submit">
                        <i class="bi bi-search"></i>
                      </button>
                    </div>
                  </div>
                </form>

                <!-- Bulk Add Form -->
                <form method="post" class="mb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Select questions to add:</h6>
                    <button type="submit" name="bulk_add_questions" class="btn btn-sm btn-success">
                      <i class="bi bi-plus-circle"></i> Add Selected
                    </button>
                  </div>

                  <?php if (count($not_mapped) > 0): ?>
                    <div class="list-group" style="max-height: 400px; overflow-y: auto;">
                      <?php foreach ($not_mapped as $n): ?>
                        <div class="list-group-item">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                              name="bulk_question_ids[]" value="<?= $n['id'] ?>"
                              id="q<?= $n['id'] ?>">
                            <label class="form-check-label w-100" for="q<?= $n['id'] ?>">
                              <div class="d-flex justify-content-between">
                                <span><?= strip_tags($n['question']) ?></span>
                                <span class="badge bg-info"><?= $qtypes[$n['qtype']] ?? 'Unknown' ?></span>
                              </div>
                              <small class="text-muted">ID: <?= $n['id'] ?></small>
                            </label>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  <?php else: ?>
                    <div class="alert alert-info">
                      No available questions found.
                    </div>
                  <?php endif; ?>
                </form>

                <hr>

                <!-- Single Add Form -->
                <h6 class="mb-2">Or add a specific question:</h6>
                <form method="post" class="row g-2">
                  <div class="col-md-8">
                    <select class="form-select" name="question_id" required>
                      <option value="">Select Question</option>
                      <?php foreach ($not_mapped as $n): ?>
                        <option value="<?= $n['id'] ?>">
                          <?= strip_tags($n['question']) ?> (<?= $qtypes[$n['qtype']] ?? 'Unknown' ?>)
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <input type="number" class="form-control" name="weight" value="1.0" step="0.1" min="0.1"
                      placeholder="Weight" required>
                  </div>
                  <div class="col-md-2">
                    <button type="submit" name="add_question" class="btn btn-primary w-100">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple drag and drop functionality for question ordering
    document.addEventListener('DOMContentLoaded', function() {
      const mappedQuestions = document.getElementById('mapped-questions');

      if (mappedQuestions) {
        // This would be enhanced with a proper drag-and-drop library in production
        // For now, we'll just add some visual feedback
        const items = mappedQuestions.querySelectorAll('.question-item');

        items.forEach(item => {
          item.style.cursor = 'grab';
          item.addEventListener('dragstart', function(e) {
            this.style.opacity = '0.5';
          });

          item.addEventListener('dragend', function() {
            this.style.opacity = '1';
          });
        });
      }
    });
  </script>
</body>

</html>