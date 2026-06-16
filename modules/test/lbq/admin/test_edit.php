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

// Get training session details (all sessions via pivot)
$test_sessions = $quiz->getTestSessions($test_id);
$test_session_ids = $quiz->getTestSessionIds($test_id);

$mapped = $quiz->getTestQuestions($test_id);

// Get available questions with filters
$filters = [];
if (isset($_GET['qtype_filter']) && !empty($_GET['qtype_filter'])) {
  $filters['qtype'] = intval($_GET['qtype_filter']);
}
if (isset($_GET['search_questions']) && !empty($_GET['search_questions'])) {
  $filters['search'] = trim($_GET['search_questions']);
}
$not_mapped = $quiz->listQuestionsNotInTest($test_id, $filters);

// Get trainings for dropdown
$trainings = $pdo->query("
    SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
    FROM public.training_sessions ts
    LEFT JOIN public.training_courses tc ON tc.course_id = ts.course_id
    ORDER BY tc.course_name ASC, ts.training_id ASC, ts.quarter ASC, ts.start_date DESC
");

// Initialize debug array
$debug_messages = [];
$message = '';
$message_type = '';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $debug_messages[] = "=== POST REQUEST DETECTED ===";
  $debug_messages[] = "POST keys: " . implode(', ', array_keys($_POST));
  $debug_messages[] = "POST data: " . print_r($_POST, true);

  // UPDATE TEST - DIRECT DATABASE UPDATE
  if (isset($_POST['update_test'])) {
    $debug_messages[] = "=== UPDATE TEST TRIGGERED ===";

    $title = trim($_POST['title'] ?? '');
    $training_ids = $_POST['training_ids'] ?? [];
    $description = trim($_POST['description'] ?? '');
    $time_limit = !empty($_POST['time_limit_minutes']) ? intval($_POST['time_limit_minutes']) : null;
    $is_pretest = isset($_POST['is_pretest']) && $_POST['is_pretest'] === 'on';
    $is_active = isset($_POST['is_active']) && $_POST['is_active'] === 'on';

    $training_ids = array_values(array_map('intval', $training_ids));
    $training_ids = array_filter($training_ids, fn($v) => $v > 0);
    $primary_id = !empty($training_ids) ? $training_ids[0] : 0;

    $debug_messages[] = "Test ID: $test_id";
    $debug_messages[] = "Title: $title";
    $debug_messages[] = "Training IDs: " . implode(', ', $training_ids);
    $debug_messages[] = "Primary ID: $primary_id";
    $debug_messages[] = "Description: $description";
    $debug_messages[] = "Time Limit: " . ($time_limit ?? 'null');
    $debug_messages[] = "Is Pretest: " . ($is_pretest ? 'TRUE' : 'FALSE');
    $debug_messages[] = "Is Active: " . ($is_active ? 'TRUE' : 'FALSE');

    try {
      $updateSql = "UPDATE lbquiz_tests SET 
                      title = :title, 
                      description = :desc, 
                      time_limit_minutes = :time_limit,
                      is_pretest = :is_pretest, 
                      is_active = :is_active";

      $params = [
        ':title' => $title,
        ':desc' => $description,
        ':time_limit' => $time_limit,
        ':is_pretest' => $is_pretest ? 't' : 'f',
        ':is_active' => $is_active ? 't' : 'f',
        ':id' => $test_id
      ];

      if ($primary_id > 0) {
        $updateSql .= ", training_id = :training_id";
        $params[':training_id'] = $primary_id;
      }

      $updateSql .= " WHERE id = :id";

      $debug_messages[] = "SQL: " . $updateSql;
      $debug_messages[] = "Params: " . print_r($params, true);

      $stmt = $pdo->prepare($updateSql);
      $result = $stmt->execute($params);

      $rowCount = $stmt->rowCount();
      $debug_messages[] = "Execute result: " . ($result ? 'TRUE' : 'FALSE');
      $debug_messages[] = "Rows affected: $rowCount";

      // Sync pivot table
      if (!empty($training_ids)) {
        $quiz->syncTestSessions($test_id, $training_ids);
        $debug_messages[] = "Pivot table synced with IDs: " . implode(', ', $training_ids);
      }

      if ($rowCount > 0) {
        $message = "✅ Test updated successfully!";
        $message_type = "success";

        $test = $quiz->getTest($test_id);
        $debug_messages[] = "Updated test data: " . print_r($test, true);
      } else {
        $message = "⚠️ No changes were made to the test.";
        $message_type = "warning";

        $checkStmt = $pdo->prepare("SELECT * FROM lbquiz_tests WHERE id = ?");
        $checkStmt->execute([$test_id]);
        $currentData = $checkStmt->fetch();
        $debug_messages[] = "Current data in database: " . print_r($currentData, true);
      }
    } catch (PDOException $e) {
      $debug_messages[] = "❌ PDO ERROR: " . $e->getMessage();
      $message = "❌ Database error: " . $e->getMessage();
      $message_type = "danger";
    } catch (Exception $e) {
      $debug_messages[] = "❌ ERROR: " . $e->getMessage();
      $message = "❌ Error: " . $e->getMessage();
      $message_type = "danger";
    }

    $_SESSION['debug_messages'] = $debug_messages;
    $_SESSION['flash_message'] = $message;
    $_SESSION['flash_type'] = $message_type;
    header("Location: test_edit.php?id=$test_id");
    exit;
  }

  // BULK ADD QUESTIONS
  if (isset($_POST['bulk_add_questions'])) {
    $debug_messages[] = "BULK ADD BUTTON CLICKED";

    $question_ids = $_POST['bulk_question_ids'] ?? [];
    $weight = floatval($_POST['bulk_weight'] ?? 1.0);

    $debug_messages[] = "Test ID: " . $test_id;
    $debug_messages[] = "Question IDs: " . implode(', ', $question_ids);
    $debug_messages[] = "Weight: " . $weight;

    $added_count = 0;
    $errors = [];

    if (empty($question_ids)) {
      $message = "No questions selected to add.";
      $message_type = "warning";
      $debug_messages[] = "ERROR: No questions selected";
    } else {
      $debug_messages[] = "Processing " . count($question_ids) . " questions...";

      foreach ($question_ids as $qid) {
        $qid_int = intval($qid);
        $debug_messages[] = "--- Processing question ID: $qid_int ---";

        if ($qid_int > 0) {
          try {
            // Check if question exists
            $qCheck = $pdo->prepare("SELECT id FROM quiz_questions WHERE id = ?");
            $qCheck->execute([$qid_int]);
            if (!$qCheck->fetch()) {
              $debug_messages[] = "ERROR: Question $qid_int does not exist";
              $errors[] = "Question ID $qid_int does not exist";
              continue;
            }
            $debug_messages[] = "Question exists";

            // Check if already mapped
            $checkStmt = $pdo->prepare("SELECT id FROM lbquiz_test_questions WHERE test_id = ? AND quiz_question_id = ?");
            $checkStmt->execute([$test_id, $qid_int]);
            $exists = $checkStmt->fetch();

            if ($exists) {
              $debug_messages[] = "Already mapped (ID: {$exists['id']})";
              $errors[] = "Question ID $qid_int already exists in this test";
            } else {
              // Get next position
              $posStmt = $pdo->prepare("SELECT COALESCE(MAX(position), 0) + 1 as new_position FROM lbquiz_test_questions WHERE test_id = ?");
              $posStmt->execute([$test_id]);
              $posRow = $posStmt->fetch();
              $position = $posRow ? $posRow['new_position'] : 1;

              $debug_messages[] = "Position: $position";

              // INSERT
              $insertStmt = $pdo->prepare("
                  INSERT INTO lbquiz_test_questions (test_id, quiz_question_id, weight, position) 
                  VALUES (?, ?, ?, ?)
                  RETURNING id
              ");
              $insertStmt->execute([$test_id, $qid_int, $weight, $position]);
              $newRow = $insertStmt->fetch();

              if ($newRow) {
                $debug_messages[] = "✅ SUCCESS: Added with ID: {$newRow['id']}";
                $added_count++;
              } else {
                $debug_messages[] = "❌ FAILED: No ID returned";
                $errors[] = "Failed to add question ID $qid_int";
              }
            }
          } catch (PDOException $e) {
            $debug_messages[] = "❌ PDO ERROR: " . $e->getMessage();
            $errors[] = "Database error: " . $e->getMessage();
          } catch (Exception $e) {
            $debug_messages[] = "❌ ERROR: " . $e->getMessage();
            $errors[] = "Error: " . $e->getMessage();
          }
        }
      }

      $debug_messages[] = "=== SUMMARY ===";
      $debug_messages[] = "Added: $added_count";
      $debug_messages[] = "Errors: " . count($errors);

      if ($added_count > 0) {
        $message = "✅ Successfully added $added_count question(s)!";
        $message_type = "success";
        if (!empty($errors)) {
          $message .= " Errors: " . implode("; ", $errors);
          $message_type = "warning";
        }
      } else {
        $message = "❌ No questions added. " . implode("; ", $errors);
        $message_type = "danger";
      }
    }

    $_SESSION['debug_messages'] = $debug_messages;
    $_SESSION['flash_message'] = $message;
    $_SESSION['flash_type'] = $message_type;
    header("Location: test_edit.php?id=$test_id");
    exit;
  }

  // Handle other POST actions
  if (!empty($_POST['add_question'])) {
    $qid = intval($_POST['question_id']);
    $weight = floatval($_POST['weight'] ?? 1.0);
    try {
      $posStmt = $pdo->prepare("SELECT COALESCE(MAX(position), 0) + 1 as new_position FROM lbquiz_test_questions WHERE test_id = ?");
      $posStmt->execute([$test_id]);
      $posRow = $posStmt->fetch();
      $position = $posRow ? $posRow['new_position'] : 1;

      $checkStmt = $pdo->prepare("SELECT id FROM lbquiz_test_questions WHERE test_id = ? AND quiz_question_id = ?");
      $checkStmt->execute([$test_id, $qid]);

      if ($checkStmt->fetch()) {
        $_SESSION['flash_message'] = "Question already in test!";
        $_SESSION['flash_type'] = "warning";
      } else {
        $insertStmt = $pdo->prepare("INSERT INTO lbquiz_test_questions (test_id, quiz_question_id, weight, position) VALUES (?, ?, ?, ?)");
        $insertStmt->execute([$test_id, $qid, $weight, $position]);
        $_SESSION['flash_message'] = "Question added successfully!";
        $_SESSION['flash_type'] = "success";
      }
    } catch (Exception $e) {
      $_SESSION['flash_message'] = "Error: " . $e->getMessage();
      $_SESSION['flash_type'] = "danger";
    }
    header("Location: test_edit.php?id=$test_id");
    exit;
  }

  if (!empty($_POST['remove_question'])) {
    $qid = intval($_POST['question_id']);
    try {
      $stmt = $pdo->prepare("DELETE FROM lbquiz_test_questions WHERE test_id = ? AND quiz_question_id = ?");
      $stmt->execute([$test_id, $qid]);
      $_SESSION['flash_message'] = "Question removed!";
      $_SESSION['flash_type'] = "success";
    } catch (Exception $e) {
      $_SESSION['flash_message'] = "Error: " . $e->getMessage();
      $_SESSION['flash_type'] = "danger";
    }
    header("Location: test_edit.php?id=$test_id");
    exit;
  }

  // FIXED: Update question weight and position - check for button presence, not value
  if (isset($_POST['update_question_weight'])) {
    $debug_messages[] = "=== UPDATE QUESTION WEIGHT TRIGGERED ===";
    $debug_messages[] = "Button was clicked!";
    $qid = intval($_POST['question_id'] ?? 0);
    $weight = floatval($_POST['weight'] ?? 1.0);
    $position = intval($_POST['position'] ?? 0);

    $debug_messages[] = "Test ID: $test_id";
    $debug_messages[] = "Question ID: $qid";
    $debug_messages[] = "Weight: $weight";
    $debug_messages[] = "Position: $position";

    if ($qid <= 0) {
      $debug_messages[] = "❌ ERROR: Invalid question ID";
      $_SESSION['flash_message'] = "Error: Invalid question ID!";
      $_SESSION['flash_type'] = "danger";
    } else {
      try {
        // DIRECT UPDATE with simple query
        $updateSql = "UPDATE lbquiz_test_questions SET weight = ?, position = ? WHERE test_id = ? AND quiz_question_id = ?";
        $debug_messages[] = "SQL: " . $updateSql;
        $debug_messages[] = "Params: [$weight, $position, $test_id, $qid]";

        $stmt = $pdo->prepare($updateSql);
        $result = $stmt->execute([$weight, $position, $test_id, $qid]);

        $rowCount = $stmt->rowCount();
        $debug_messages[] = "Execute result: " . ($result ? 'TRUE' : 'FALSE');
        $debug_messages[] = "Rows affected: $rowCount";

        if ($rowCount > 0) {
          $_SESSION['flash_message'] = "✅ Question updated! Weight: $weight, Position: $position";
          $_SESSION['flash_type'] = "success";
        } else {
          // Check if the record exists
          $checkStmt = $pdo->prepare("SELECT weight, position FROM lbquiz_test_questions WHERE test_id = ? AND quiz_question_id = ?");
          $checkStmt->execute([$test_id, $qid]);
          $current = $checkStmt->fetch();

          if (!$current) {
            $debug_messages[] = "❌ Record not found!";
            $_SESSION['flash_message'] = "Error: Question not found in this test!";
            $_SESSION['flash_type'] = "danger";
          } else {
            $debug_messages[] = "Current values: weight={$current['weight']}, position={$current['position']}";
            if ($current['weight'] == $weight && $current['position'] == $position) {
              $_SESSION['flash_message'] = "⚠️ No changes made - values are the same.";
              $_SESSION['flash_type'] = "warning";
            } else {
              $_SESSION['flash_message'] = "❌ Failed to update. No rows affected.";
              $_SESSION['flash_type'] = "danger";
            }
          }
        }
      } catch (PDOException $e) {
        $debug_messages[] = "❌ PDO ERROR: " . $e->getMessage();
        $debug_messages[] = "Error info: " . print_r($e->errorInfo, true);
        $_SESSION['flash_message'] = "❌ Database error: " . $e->getMessage();
        $_SESSION['flash_type'] = "danger";
      } catch (Exception $e) {
        $debug_messages[] = "❌ ERROR: " . $e->getMessage();
        $_SESSION['flash_message'] = "❌ Error: " . $e->getMessage();
        $_SESSION['flash_type'] = "danger";
      }
    }

    $_SESSION['debug_messages'] = $debug_messages;
    header("Location: test_edit.php?id=$test_id");
    exit;
  }

  if (isset($_POST['bulk_update_weights'])) {
    $operation = $_POST['bulk_operation'] ?? 'set';
    $value = floatval($_POST['bulk_update_value'] ?? 1.0);

    try {
      $updated_count = $quiz->bulkUpdateWeights($test_id, $operation, $value);
      $_SESSION['flash_message'] = "Updated $updated_count questions!";
      $_SESSION['flash_type'] = "success";
    } catch (Exception $e) {
      $_SESSION['flash_message'] = "Error: " . $e->getMessage();
      $_SESSION['flash_type'] = "danger";
    }
    header("Location: test_edit.php?id=$test_id");
    exit;
  }
}

// Check for flash messages
$flash_message = $_SESSION['flash_message'] ?? '';
$flash_type = $_SESSION['flash_type'] ?? 'info';
// FORCE DEBUG DISPLAY
$debug_output = $_SESSION['debug_messages'] ?? [];
unset($_SESSION['flash_message'], $_SESSION['flash_type'], $_SESSION['debug_messages']);

// Refresh test data and mapped questions after potential changes
$test = $quiz->getTest($test_id);
$mapped = $quiz->getTestQuestions($test_id);

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
  <style>
    .question-item {
      border-left: 4px solid #0d6efd;
      margin-bottom: 10px;
    }

    .stats-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-radius: 10px;
      padding: 20px;
    }

    .debug-panel {
      background-color: #1e1e1e;
      color: #d4d4d4;
      border-radius: 5px;
      padding: 15px;
      margin-bottom: 20px;
      font-family: monospace;
      font-size: 12px;
      max-height: 400px;
      overflow-y: auto;
      display: none !important; /* Hidden by default, can be toggled on for debugging use display: block */
    }

    /* Modal fix - prevent flickering */
    .modal {
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-backdrop {
      opacity: 0.5 !important;
    }

    @media (min-width: 768px) {
      .px-md-4 {
        padding-right: 7.5rem !important;
        padding-left: 1.5rem !important;
      }
    }
  </style>
</head>

<body>
<?php include 'sidebar.php'; ?>
  <div class="container-fluid">
      <main class="px-md-4 py-4">
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

        <?php if ($flash_message): ?>
          <div class="alert alert-<?= htmlspecialchars($flash_type) ?> alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($flash_message) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <?php if (!empty($debug_output)): ?>
          <div class="debug-panel">
            <h6 style="color: #fff;">🔍 Debug Output:</h6>
            <pre><?php foreach ($debug_output as $line): ?><?= htmlspecialchars($line) . "\n" ?><?php endforeach; ?></pre>
          </div>
        <?php endif; ?>

        <!-- Test Stats -->
        <div class="row mb-4">
          <div class="col-md-3">
            <div class="stats-card">
              <h6>Total Questions</h6>
              <h3><?= count($mapped) ?></h3>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-card" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
              <h6>Training Sessions</h6>
              <?php if (!empty($test_sessions)): ?>
                <?php foreach ($test_sessions as $s): ?>
                  <div><small><?= htmlspecialchars($s['course_name'] ?? 'Training') ?> - Session <?= $s['training_id'] ?></small></div>
                <?php endforeach; ?>
              <?php else: ?>
                <h5><?= htmlspecialchars($test['training_id'] ?? 'N/A') ?></h5>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-card" style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);">
              <h6>Time Limit</h6>
              <h3><?= $test['time_limit_minutes'] ? $test['time_limit_minutes'] . ' min' : 'No limit' ?></h3>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-card" style="background: linear-gradient(135deg, #277c99 0%, #44a08d 100%);">
              <h6>Type</h6>
              <h4><span class="badge bg-<?= $test['is_pretest'] ? 'info' : 'primary' ?>"><?= $test['is_pretest'] ? 'Pre Test' : 'Post Test' ?></span></h4>
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
                  <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($test['title']) ?>" required>
                </div>
                <div class="col-md-4">
                  <label for="training_ids" class="form-label">Training Sessions</label>
                  <select class="form-select" id="training_ids" name="training_ids[]" multiple style="min-height: 120px;">
                    <?php foreach ($trainings as $tr): ?>
                      <option value="<?= $tr['training_id'] ?>" <?= in_array($tr['training_id'], $test_session_ids) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($tr['course_name'] ?? 'Training') ?> - Session <?= $tr['training_id'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <small class="text-muted">Hold Ctrl (or Cmd) to select multiple sessions</small>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-8">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="2"><?= htmlspecialchars($test['description'] ?? '') ?></textarea>
                </div>
                <div class="col-md-4">
                  <label for="time_limit_minutes" class="form-label">Time Limit (minutes)</label>
                  <input type="number" class="form-control" id="time_limit_minutes" name="time_limit_minutes" value="<?= $test['time_limit_minutes'] ?? '' ?>" min="0" placeholder="0 for no limit">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-4">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_pretest" name="is_pretest" <?= $test['is_pretest'] ? 'checked' : '' ?>>
                    <label class="form-check-label" for="is_pretest">This is a Pre Test</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?= $test['is_active'] ? 'checked' : '' ?>>
                    <label class="form-check-label" for="is_active">Active</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <button type="submit" name="update_test" value="1" class="btn btn-primary w-100">
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
                  <?php foreach ($mapped as $index => $m): ?>
                    <div class="card question-item mb-2">
                      <div class="card-body py-2">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="flex-grow-1">
                            <h6 class="card-title mb-1"><strong>ID: <?= $m['quiz_question_id'] ?></strong> - <?= strip_tags($m['question']) ?></h6>
                            <p class="card-text mb-1 small">
                              <span class="badge bg-info"><?= $qtypes[$m['qtype']] ?? 'Unknown' ?></span>
                              <span class="badge bg-secondary">Weight: <?= $m['weight'] ?></span>
                              <span class="badge bg-light text-dark">Position: <?= $m['position'] ?></span>
                            </p>
                          </div>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $m['quiz_question_id'] ?>">
                              <i class="bi bi-pencil"></i>
                            </button>
                            <form method="post" class="d-inline" onsubmit="return confirm('Remove this question?');">
                              <input type="hidden" name="question_id" value="<?= $m['quiz_question_id'] ?>">
                              <button type="submit" name="remove_question" value="1" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="alert alert-info">No questions mapped yet.</div>
                <?php endif; ?>

                <!-- Bulk Update Weights -->
                <?php if (count($mapped) > 0): ?>
                  <div class="card mt-3">
                    <div class="card-header bg-light">
                      <h6 class="card-title mb-0">Bulk Update Weights</h6>
                    </div>
                    <div class="card-body">
                      <form method="post">
                        <div class="mb-3">
                          <select class="form-select" name="bulk_operation">
                            <option value="set">Set all weights to</option>
                            <option value="multiply">Multiply all weights by</option>
                            <option value="add">Add to all weights</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <input type="number" class="form-control" name="bulk_update_value" value="1.0" step="0.1" required>
                        </div>
                        <button type="submit" name="bulk_update_weights" value="1" class="btn btn-warning w-100">
                          <i class="bi bi-gear"></i> Update All Weights
                        </button>
                      </form>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Available Questions -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Available Questions (<?= count($not_mapped) ?>)</h5>
              </div>
              <div class="card-body">
                <!-- Filters -->
                <form method="get" class="row g-2 mb-3">
                  <input type="hidden" name="id" value="<?= $test_id ?>">
                  <div class="col-md-6">
                    <select class="form-select" name="qtype_filter">
                      <option value="">All Types</option>
                      <?php foreach ($qtypes as $id => $name): ?>
                        <option value="<?= $id ?>" <?= ($filters['qtype'] ?? '') == $id ? 'selected' : '' ?>><?= $name ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control" name="search_questions" placeholder="Search..." value="<?= htmlspecialchars($filters['search'] ?? '') ?>">
                      <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                      <?php if (!empty($filters)): ?>
                        <a href="test_edit.php?id=<?= $test_id ?>" class="btn btn-outline-secondary"><i class="bi bi-x-circle"></i></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </form>

                <!-- BULK ADD FORM -->
                <div class="card mb-4 border-success">
                  <div class="card-header bg-success text-white">
                    <h6 class="card-title mb-0">Bulk Add Questions</h6>
                  </div>
                  <div class="card-body">
                    <form method="post" id="bulkAddForm">
                      <div class="mb-3">
                        <div class="form-check mb-2">
                          <input class="form-check-input" type="checkbox" id="selectAllQuestions">
                          <label class="form-check-label" for="selectAllQuestions"><strong>Select All</strong></label>
                        </div>
                        <div class="border rounded p-2" style="max-height: 250px; overflow-y: auto;">
                          <?php if (count($not_mapped) > 0): ?>
                            <?php foreach ($not_mapped as $n): ?>
                              <div class="form-check">
                                <input class="form-check-input question-checkbox" type="checkbox" name="bulk_question_ids[]" value="<?= $n['id'] ?>" id="bulk_q<?= $n['id'] ?>">
                                <label class="form-check-label" for="bulk_q<?= $n['id'] ?>">
                                  <strong>ID: <?= $n['id'] ?></strong> - <?= substr(strip_tags($n['question']), 0, 60) ?>...
                                  <span class="badge bg-info"><?= $qtypes[$n['qtype']] ?? 'Unknown' ?></span>
                                </label>
                              </div>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <div class="alert alert-info mb-0">No available questions.</div>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Weight:</label>
                        <input type="number" class="form-control" name="bulk_weight" value="1.0" step="0.1" min="0.1" required>
                      </div>
                      <button type="submit" name="bulk_add_questions" value="1" class="btn btn-success w-100">
                        <i class="bi bi-plus-circle"></i> Add Selected Questions
                      </button>
                    </form>
                  </div>
                </div>

                <!-- Single Add Form -->
                <h6>Add single question:</h6>
                <form method="post" class="row g-2">
                  <div class="col-md-7">
                    <select class="form-select" name="question_id" required>
                      <option value="">Select Question</option>
                      <?php foreach ($not_mapped as $n): ?>
                        <option value="<?= $n['id'] ?>">ID: <?= $n['id'] ?> - <?= substr(strip_tags($n['question']), 0, 40) ?>...</option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control" name="weight" value="1.0" step="0.1" min="0.1" required>
                  </div>
                  <div class="col-md-2">
                    <button type="submit" name="add_question" value="1" class="btn btn-primary w-100">
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

  <!-- Single Modal Container - Rendered once for all questions -->
  <div id="modalContainer"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Store question data for modals
    const mappedQuestions = <?= json_encode($mapped) ?>;

    // Function to create modal HTML
    function createModalHTML(question) {
      return `
        <div class="modal fade" id="editModal${question.quiz_question_id}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Question Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="post">
                <div class="modal-body">
                  <p class="mb-2"><strong>ID: ${question.quiz_question_id}</strong> - ${stripTags(question.question)}</p>
                  <div class="mb-3">
                    <label class="form-label">Weight</label>
                    <input type="number" class="form-control" name="weight" value="${question.weight}" step="0.1" min="0.1" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="number" class="form-control" name="position" value="${question.position}" min="1" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="question_id" value="${question.quiz_question_id}">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" name="update_question_weight" value="1" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      `;
    }

    // Helper function to strip HTML tags
    function stripTags(html) {
      const tmp = document.createElement('div');
      tmp.innerHTML = html;
      return tmp.textContent || tmp.innerText || '';
    }

    // Initialize modals
    document.addEventListener('DOMContentLoaded', function() {
      const modalContainer = document.getElementById('modalContainer');

      // Create all modals
      mappedQuestions.forEach(question => {
        modalContainer.insertAdjacentHTML('beforeend', createModalHTML(question));
      });

      // Initialize all modals
      const modals = document.querySelectorAll('.modal');
      modals.forEach(modal => {
        new bootstrap.Modal(modal, {
          backdrop: true,
          keyboard: true,
          focus: true
        });
      });

      // Prevent modal flickering by ensuring backdrop is properly managed
      document.addEventListener('show.bs.modal', function(e) {
        // Remove any existing modal backdrops
        const backdrops = document.querySelectorAll('.modal-backdrop');
        if (backdrops.length > 1) {
          for (let i = 1; i < backdrops.length; i++) {
            backdrops[i].remove();
          }
        }
      });

      // Select all functionality
      const selectAll = document.getElementById('selectAllQuestions');
      const checkboxes = document.querySelectorAll('.question-checkbox');

      if (selectAll) {
        selectAll.addEventListener('change', function() {
          checkboxes.forEach(cb => cb.checked = this.checked);
        });

        checkboxes.forEach(cb => {
          cb.addEventListener('change', function() {
            selectAll.checked = Array.from(checkboxes).every(c => c.checked);
          });
        });
      }

      // Bulk add form validation
      document.getElementById('bulkAddForm')?.addEventListener('submit', function(e) {
        const selected = document.querySelectorAll('.question-checkbox:checked').length;
        if (selected === 0) {
          e.preventDefault();
          alert('Please select at least one question to add.');
        }
      });
    });
  </script>
</body>

</html>