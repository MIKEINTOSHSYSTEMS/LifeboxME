<?php
/*
session_start();
if (empty($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}*/
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$test_id = intval($_GET['id'] ?? 0);
if (!$test_id) {
  header('Location: tests.php');
  exit;
}

$test = $quiz->getTest($test_id);
if (!$test) {
  header('Location: tests.php');
  exit;
}

// Get training session details
$training = $pdo->prepare("
    SELECT ts.*, tc.course_name 
    FROM training_sessions ts 
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id 
    WHERE ts.training_id = :tid
");
$training->execute([':tid' => $test['training_id']]);
$training = $training->fetch();

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
    SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
    FROM training_sessions ts
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    ORDER BY tc.course_name ASC, ts.training_id ASC, ts.quarter ASC, ts.start_date DESC
")->fetchAll();

// Handle form submissions
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
    $is_pretest = !empty($_POST['is_pretest']);
    $is_active = !empty($_POST['is_active']);

    $quiz->updateTest($test_id, $title, $description, $time_limit, $is_active, $is_pretest, $training_id);
    header("Location: test_edit.php?id=$test_id");
    exit;
  } elseif (!empty($_POST['bulk_update_weights'])) {
    $operation = $_POST['bulk_operation'] ?? 'set';
    $value = floatval($_POST['bulk_update_value'] ?? 1.0);

    foreach ($mapped as $question) {
      $current_weight = floatval($question['weight']);
      $new_weight = 1.0;

      switch ($operation) {
        case 'set':
          $new_weight = $value;
          break;
        case 'multiply':
          $new_weight = $current_weight * $value;
          break;
        case 'add':
          $new_weight = $current_weight + $value;
          break;
      }

      // Ensure minimum weight
      $new_weight = max(0.1, $new_weight);

      $stmt = $pdo->prepare("
            UPDATE lbquiz_test_questions 
            SET weight = :weight 
            WHERE test_id = :test_id AND quiz_question_id = :question_id
        ");
      $stmt->execute([
        ':weight' => $new_weight,
        ':test_id' => $test_id,
        ':question_id' => $question['quiz_question_id']
      ]);
    }
    header("Location: test_edit.php?id=$test_id");
    exit;
  } elseif (!empty($_POST['update_question_weight'])) {
    $qid = intval($_POST['question_id']);
    $weight = floatval($_POST['weight'] ?? 1.0);
    $position = intval($_POST['position'] ?? 9999);

    // Update the question weight and position directly
    $stmt = $pdo->prepare("
            UPDATE lbquiz_test_questions 
            SET weight = :weight, position = :position 
            WHERE test_id = :test_id AND quiz_question_id = :question_id
        ");
    $stmt->execute([
      ':weight' => $weight,
      ':position' => $position,
      ':test_id' => $test_id,
      ':question_id' => $qid
    ]);
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

  <style>
    .question-item {
      border-left: 4px solid #0d6efd;
      margin-bottom: 10px;
      transition: all 0.3s ease;
    }

    .question-item:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .stats-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .modal-backdrop {
      z-index: 1040 !important;
    }

    .modal {
      z-index: 1050 !important;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <div>
            <h1 class="h2">Edit Test: <?= htmlspecialchars($test['title']) ?></h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tests.php">Tests</a></li>
                <li class="breadcrumb-item active">Edit Test</li>
              </ol>
            </nav>
          </div>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="tests.php" class="btn btn-sm btn-outline-secondary">
              <i class="bi bi-arrow-left"></i> Back to Tests
            </a>
          </div>
        </div>

        <!-- Test Stats -->
        <div class="row mb-4">
          <div class="col-md-3">
            <div class="stats-card">
              <h6>Total Questions</h6>
              <h3><?= count($mapped) ?></h3>
              <small>Points: <?= array_sum(array_column($mapped, 'weight')) ?></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-card" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
              <h6>Training Session</h6>
              <h5><?= htmlspecialchars($training['course_name'] ?? 'N/A') ?></h5>
              <small><?= htmlspecialchars($training['training_id'] ?? 'N/A') ?></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-card" style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);">
              <h6>Time Limit</h6>
              <h3><?= $test['time_limit_minutes'] ? $test['time_limit_minutes'] . ' min' : 'No limit' ?></h3>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-card" style="background: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);">
              <h6>Test Type</h6>
              <h4>
                <span class="badge bg-<?= $test['is_pretest'] ? 'info' : 'primary' ?>">
                  <?= $test['is_pretest'] ? 'Pre Test' : 'Post Test' ?>
                </span>
              </h4>
              <small>Status: <?= $test['is_active'] ? 'Active' : 'Inactive' ?></small>
            </div>
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
                  <label for="training_id" class="form-label">Training Session</label>
                  <select class="form-select" id="training_id" name="training_id" required>
                    <option value="">Select Training</option>
                    <?php foreach ($trainings as $tr): ?>
                      <option value="<?= $tr['training_id'] ?>"
                        <?= $test['training_id'] == $tr['training_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($tr['course_name'] ?? 'Training', ENT_QUOTES, 'UTF-8') ?> - Session
                        <?= htmlspecialchars($tr['training_id'] ?? '', ENT_QUOTES, 'UTF-8') ?> - Quarter
                        <?= htmlspecialchars($tr['quarter'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                        (<?= $tr['start_date'] ? date('M Y', strtotime($tr['start_date'])) : 'N/A' ?>)
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
                    <label class="form-check-label" for="is_pretest">This is a Pre Test</label>
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
                  <button type="submit" name="update_test" class="btn btn-primary w-100">
                    <i class="bi bi-check-circle"></i> Update Test
                  </button>
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
                <h5 class="card-title mb-0">Test Questions (<?= count($mapped) ?>)</h5>
                <small>Total Points: <?= array_sum(array_column($mapped, 'weight')) ?></small>
              </div>
              <div class="card-body">
                <?php if (count($mapped) > 0): ?>
                  <div id="mapped-questions">
                    <?php foreach ($mapped as $index => $m): ?>
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
                                data-bs-toggle="modal" data-bs-target="#editWeightModal<?= $index ?>">
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
                    <?php endforeach; ?>
                  </div>
                <?php else: ?>
                  <div class="alert alert-info">
                    No questions mapped to this test yet. Add questions from the available questions section.
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
                <!-- Bulk Operations Section -->
                <div class="card mb-4">
                  <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Bulk Operations</h5>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header bg-light">
                            <h6 class="card-title mb-0">Bulk Add Questions</h6>
                          </div>
                          <div class="card-body">
                            <form method="post" id="bulkAddForm">
                              <div class="mb-3">
                                <label class="form-label">Select questions to add:</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="selectAllQuestions">
                                  <label class="form-check-label" for="selectAllQuestions">
                                    Select All Questions
                                  </label>
                                </div>
                                <div class="questions-list" style="max-height: 200px; overflow-y: auto; margin-top: 10px;">
                                  <?php if (count($not_mapped) > 0): ?>
                                    <?php foreach ($not_mapped as $n): ?>
                                      <div class="form-check">
                                        <input class="form-check-input question-checkbox" type="checkbox"
                                          name="bulk_question_ids[]" value="<?= $n['id'] ?>"
                                          id="bulk_q<?= $n['id'] ?>">
                                        <label class="form-check-label" for="bulk_q<?= $n['id'] ?>">
                                          <?= substr(strip_tags($n['question']), 0, 80) ?>...
                                          <span class="badge bg-info"><?= $qtypes[$n['qtype']] ?? 'Unknown' ?></span>
                                        </label>
                                      </div>
                                    <?php endforeach; ?>
                                  <?php else: ?>
                                    <div class="alert alert-info">
                                      No available questions found.
                                    </div>
                                  <?php endif; ?>
                                </div>
                              </div>
                              <div class="mb-3">
                                <label for="bulk_weight" class="form-label">Weight for all selected questions</label>
                                <input type="number" class="form-control" id="bulk_weight" name="bulk_weight"
                                  value="1.0" step="0.1" min="0.1" required>
                              </div>
                              <button type="submit" name="bulk_add_questions" class="btn btn-success w-100">
                                <i class="bi bi-plus-circle"></i> Add Selected Questions
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                      <br></br>
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header bg-light">
                            <h6 class="card-title mb-0">Bulk Update Weights</h6>
                          </div>
                          <div class="card-body">
                            <form method="post" id="bulkUpdateForm">
                              <div class="mb-3">
                                <label class="form-label">Select operation:</label>
                                <select class="form-select" name="bulk_operation">
                                  <option value="set">Set all weights to</option>
                                  <option value="multiply">Multiply all weights by</option>
                                  <option value="add">Add to all weights</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="bulk_update_value" class="form-label">Value</label>
                                <input type="number" class="form-control" id="bulk_update_value" name="bulk_update_value"
                                  value="1.0" step="0.1" required>
                              </div>
                              <button type="submit" name="bulk_update_weights" class="btn btn-warning w-100">
                                <i class="bi bi-gear"></i> Update All Weights
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <!-- Single Add Form -->
                <h6 class="mb-2">Add specific question:</h6>
                <form method="post" class="row g-2">
                  <div class="col-md-7">
                    <select class="form-select" name="question_id" required>
                      <option value="">Select Question</option>
                      <?php foreach ($not_mapped as $n): ?>
                        <option value="<?= $n['id'] ?>">
                          <?= substr(strip_tags($n['question']), 0, 50) ?>...
                          (<?= $qtypes[$n['qtype']] ?? 'Unknown' ?>)
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control" name="weight" value="1.0" step="0.1" min="0.1"
                      placeholder="Weight" required>
                  </div>
                  <div class="col-md-2">
                    <button type="submit" name="add_question" class="btn btn-primary w-100">
                      <i class="bi bi-plus"></i> Add
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Modals for each question (placed at the end of body) -->
  <?php foreach ($mapped as $index => $m): ?>
    <div class="modal fade" id="editWeightModal<?= $index ?>" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Question Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post">
            <div class="modal-body">
              <p class="mb-2"><?= strip_tags($m['question']) ?></p>
              <div class="mb-3">
                <label for="weight<?= $index ?>" class="form-label">Weight</label>
                <input type="number" class="form-control" id="weight<?= $index ?>"
                  name="weight" value="<?= $m['weight'] ?>" step="0.1" min="0.1" required>
              </div>
              <div class="mb-3">
                <label for="position<?= $index ?>" class="form-label">Position</label>
                <input type="number" class="form-control" id="position<?= $index ?>"
                  name="position" value="<?= $m['position'] ?>" min="1" required>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Add some interactivity
      const mappedQuestions = document.getElementById('mapped-questions');

      if (mappedQuestions) {
        mappedQuestions.addEventListener('click', function(e) {
          if (e.target.classList.contains('remove-answer') ||
            e.target.parentElement.classList.contains('remove-answer')) {
            if (!confirm('Are you sure you want to remove this question from the test?')) {
              e.preventDefault();
            }
          }
        });
      }

      // Filter form submission
      document.querySelectorAll('form[method="get"]').forEach(form => {
        form.addEventListener('submit', function() {
          const button = this.querySelector('button[type="submit"]');
          button.disabled = true;
          button.innerHTML = '<i class="bi bi-hourglass-split"></i> Loading...';
        });
      });

      // Prevent modal flickering by ensuring only one modal is open at a time
      const modals = document.querySelectorAll('.modal');
      modals.forEach(modal => {
        modal.addEventListener('show.bs.modal', function() {
          // Close any other open modals
          const openModals = document.querySelectorAll('.modal.show');
          openModals.forEach(openModal => {
            if (openModal !== modal) {
              const bsModal = bootstrap.Modal.getInstance(openModal);
              if (bsModal) {
                bsModal.hide();
              }
            }
          });
        });
      });
    });
  </script>
</body>

</html>