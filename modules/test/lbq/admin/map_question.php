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

$qid = intval($_GET['qid'] ?? 0);
if (!$qid) {
  header('Location: questions.php');
  exit;
}

// Get question details
$stmt = $pdo->prepare("SELECT * FROM public.quiz_questions WHERE id = :id");
$stmt->execute([':id' => $qid]);
$question = $stmt->fetch();

if (!$question) {
  header('Location: questions.php');
  exit;
}

// Get question answers
$answers = $pdo->prepare("SELECT * FROM public.quiz_answers WHERE questionid = :qid ORDER BY id");
$answers->execute([':qid' => $qid]);
$answers = $answers->fetchAll();

// Get tests with training and course information
$tests = $pdo->query("
    SELECT t.*, ts.training_type, tc.course_name, ts.start_date, ts.end_date,
           (SELECT COUNT(*) FROM lbquiz_test_questions tq WHERE tq.test_id = t.id) as question_count
    FROM lbquiz_tests t
    LEFT JOIN training_sessions ts ON ts.training_id = t.training_id
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    WHERE t.is_active = true
    ORDER BY ts.start_date DESC, t.created_at DESC
")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $test_id = intval($_POST['test_id'] ?? 0);
  $weight = floatval($_POST['weight'] ?? 1.0);

  if ($test_id) {
    $quiz->addQuestionToTest($test_id, $qid, $weight);
    header('Location: test_edit.php?id=' . $test_id);
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
  <title>Map Question to Test - LifeBox Test Center</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

  <style>
    .question-card {
      border-left: 4px solid #0d6efd;
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .test-card {
      border: 1px solid #dee2e6;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 10px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .test-card:hover {
      border-color: #0d6efd;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transform: translateY(-2px);
    }

    .test-card.selected {
      border-color: #0d6efd;
      background-color: rgba(13, 110, 253, 0.1);
    }

    .answer-item {
      padding: 8px 12px;
      margin-bottom: 5px;
      border-radius: 6px;
      border: 1px solid #dee2e6;
      background-color: #f8f9fa;
    }

    .answer-item.correct {
      border-color: #198754;
      background-color: rgba(25, 135, 84, 0.1);
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
          <h1 class="h2">Map Question to Test</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="questions.php" class="btn btn-sm btn-outline-secondary">
              <i class="bi bi-arrow-left"></i> Back to Questions
            </a>
          </div>
        </div>

        <div class="row">
          <!-- Question Details -->
          <div class="col-md-5 mb-4">
            <div class="card question-card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Question Details</h5>
              </div>
              <div class="card-body">
                <h6>Question Text:</h6>
                <p class="mb-3"><?= nl2br(htmlspecialchars($question['question'])) ?></p>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <strong>Question ID:</strong> <?= $question['id'] ?>
                  </div>
                  <div class="col-md-6">
                    <strong>Type:</strong>
                    <span class="badge bg-info"><?= $qtypes[$question['qtype']] ?? 'Unknown' ?></span>
                  </div>
                </div>

                <?php if (!empty($question['videolink'])): ?>
                  <div class="mb-3">
                    <strong>Video Link:</strong>
                    <a href="<?= htmlspecialchars($question['videolink']) ?>" target="_blank" class="text-decoration-none">
                      <i class="bi bi-play-circle"></i> View Video
                    </a>
                  </div>
                <?php endif; ?>

                <?php if (count($answers) > 0): ?>
                  <h6>Answers:</h6>
                  <div class="answers-container">
                    <?php foreach ($answers as $answer): ?>
                      <div class="answer-item <?= $answer['correct'] ? 'correct' : '' ?>">
                        <?= nl2br(htmlspecialchars($answer['text'])) ?>
                        <?php if ($answer['correct']): ?>
                          <span class="badge bg-success float-end">Correct</span>
                        <?php endif; ?>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Test Selection -->
          <div class="col-md-7 mb-4">
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Select Test to Map To</h5>
              </div>
              <div class="card-body">
                <form method="post" id="mapForm">
                  <div class="mb-3">
                    <label for="test_id" class="form-label">Choose Test</label>
                    <select class="form-select" id="test_id" name="test_id" required>
                      <option value="">Select a Test</option>
                      <?php foreach ($tests as $t): ?>
                        <option value="<?= $t['id'] ?>">
                          <?= htmlspecialchars($t['title']) ?> -
                          <?= htmlspecialchars($t['course_name'] ?? 'Training') ?>
                          (<?= $t['start_date'] ? date('M Y', strtotime($t['start_date'])) : 'N/A' ?>)
                          - <?= $t['question_count'] ?> questions
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="weight" class="form-label">Question Weight</label>
                    <input type="number" class="form-control" id="weight" name="weight"
                      value="1.0" step="0.1" min="0.1" required>
                    <div class="form-text">
                      The weight determines how many points this question is worth in the test.
                    </div>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">
                      <i class="bi bi-link-45deg"></i> Map Question to Test
                    </button>
                  </div>
                </form>

                <hr>

                <h6 class="mb-3">Available Tests:</h6>
                <div class="tests-list" style="max-height: 300px; overflow-y: auto;">
                  <?php if (count($tests) > 0): ?>
                    <?php foreach ($tests as $t): ?>
                      <div class="test-card" onclick="document.getElementById('test_id').value='<?= $t['id'] ?>'; highlightCard(this)">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="flex-grow-1">
                            <h6 class="mb-1"><?= htmlspecialchars($t['title'] ?? '', ENT_QUOTES, 'UTF-8') ?></h6>
                            <p class="mb-1 small text-muted">
                              <?= htmlspecialchars($t['course_name'] ?? 'Training', ENT_QUOTES, 'UTF-8') ?> -
                              <?= htmlspecialchars($t['training_type'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </p>
                            <p class="mb-0 small">
                              <span class="badge bg-<?= $t['is_pretest'] ? 'info' : 'primary' ?>">
                                <?= $t['is_pretest'] ? 'Pre Test' : 'Post Test' ?>
                              </span>
                              <span class="badge bg-secondary">
                                <?= (int) $t['question_count'] ?> questions
                              </span>
                              <span class="badge bg-light text-dark">
                                <?= $t['time_limit_minutes'] ? (int) $t['time_limit_minutes'] . ' min' : 'No limit' ?>
                              </span>
                            </p>
                          </div>
                          <div class="text-end">
                            <small class="text-muted">
                              <?= !empty($t['start_date']) ? date('M j, Y', strtotime($t['start_date'])) : 'N/A' ?>
                            </small>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <div class="alert alert-info">
                      No active tests found. <a href="tests.php">Create a test first</a>.
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function highlightCard(card) {
      // Remove highlight from all cards
      document.querySelectorAll('.test-card').forEach(c => {
        c.classList.remove('selected');
      });
      // Add highlight to clicked card
      card.classList.add('selected');

      // Scroll to form
      document.getElementById('mapForm').scrollIntoView({
        behavior: 'smooth'
      });
    }

    // Auto-highlight when select changes
    document.getElementById('test_id').addEventListener('change', function() {
      const testId = this.value;
      document.querySelectorAll('.test-card').forEach(card => {
        const cardTestId = card.getAttribute('onclick').match(/'(\d+)'/)[1];
        if (cardTestId === testId) {
          card.classList.add('selected');
          card.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
          });
        } else {
          card.classList.remove('selected');
        }
      });
    });

    // Form validation
    document.getElementById('mapForm').addEventListener('submit', function(e) {
      const testId = document.getElementById('test_id').value;
      const weight = document.getElementById('weight').value;

      if (!testId) {
        e.preventDefault();
        alert('Please select a test to map this question to.');
        return false;
      }

      if (weight <= 0) {
        e.preventDefault();
        alert('Please enter a valid weight (greater than 0).');
        return false;
      }
    });
  </script>
</body>

</html>