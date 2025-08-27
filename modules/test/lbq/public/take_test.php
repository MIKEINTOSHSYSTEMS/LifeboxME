<?php
session_start();
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

// Redirect if not logged in
if (empty($_SESSION['participant_id'])) {
  header('Location: login.php');
  exit;
}

$participant_id = $_SESSION['participant_id'];

// Get test_id and participation_id from query parameters or form
$test_id = isset($_GET['test_id']) ? intval($_GET['test_id']) : 0;
$participation_id = isset($_GET['participation_id']) ? intval($_GET['participation_id']) : 0;

// If no test_id provided, show test selection
if (!$test_id) {
  // Get participant's available tests
  $stmt = $pdo->prepare("
        SELECT t.*, p.participation_id, tr.title as training_title
        FROM lbquiz_tests t
        JOIN training_participation p ON p.training_id = t.training_id
        JOIN training_sessions tr ON tr.training_id = t.training_id
        WHERE p.participant_id = :pid AND t.is_active = true
        ORDER BY t.created_at DESC
    ");
  $stmt->execute([':pid' => $participant_id]);
  $available_tests = $stmt->fetchAll();

  // Show test selection page
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select Test - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>

  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php">LifeBox Test Center</a>
      </div>
    </nav>

    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header bg-white">
              <h4 class="card-title mb-0">Select a Test</h4>
            </div>
            <div class="card-body">
              <?php if (count($available_tests) > 0): ?>
                <div class="list-group">
                  <?php foreach ($available_tests as $test): ?>
                    <div class="list-group-item">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?= htmlspecialchars($test['title']) ?></h5>
                        <span class="badge bg-<?= $test['is_pretest'] ? 'info' : 'primary' ?>">
                          <?= $test['is_pretest'] ? 'Pretest' : 'Posttest' ?>
                        </span>
                      </div>
                      <p class="mb-1"><?= htmlspecialchars($test['description'] ?? '') ?></p>
                      <small class="text-muted">
                        Training: <?= htmlspecialchars($test['training_title']) ?> •
                        Time limit: <?= $test['time_limit_minutes'] ? $test['time_limit_minutes'] . ' minutes' : 'None' ?>
                      </small>
                      <div class="mt-2">
                        <a href="take_test.php?test_id=<?= $test['id'] ?>&participation_id=<?= $test['participation_id'] ?>"
                          class="btn btn-sm btn-primary">Start Test</a>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php else: ?>
                <div class="alert alert-info">
                  You don't have any available tests at the moment.
                </div>
                <div class="text-center">
                  <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
<?php
  exit;
}

// Get test details
$test = $quiz->getTest($test_id);
$questions = $quiz->getTestQuestions($test_id);

// Check if test exists and is active
if (!$test || !$test['is_active']) {
  echo "Test not found or inactive.";
  exit;
}

// Check if user has access to this test
$stmt = $pdo->prepare("
    SELECT COUNT(*) 
    FROM training_participation p
    JOIN lbquiz_tests t ON t.training_id = p.training_id
    WHERE p.participant_id = :pid AND p.participation_id = :part_id AND t.id = :test_id
");
$stmt->execute([
  ':pid' => $participant_id,
  ':part_id' => $participation_id,
  ':test_id' => $test_id
]);

if ($stmt->fetchColumn() == 0) {
  echo "You don't have access to this test.";
  exit;
}

// Check if time limit is set
$time_limit = $test['time_limit_minutes'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Take Test - <?= htmlspecialchars($test['title'] ?? 'Test') ?> - LifeBox Test Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    .question-container {
      margin-bottom: 2rem;
      padding: 1.5rem;
      border: 1px solid #dee2e6;
      border-radius: 0.5rem;
      background-color: #fff;
    }

    .question-number {
      font-weight: bold;
      color: #0d6efd;
      margin-right: 0.5rem;
    }

    .timer-container {
      position: sticky;
      top: 0;
      z-index: 1000;
      background-color: #f8f9fa;
      padding: 0.5rem 1rem;
      border-bottom: 1px solid #dee2e6;
    }

    .answer-option {
      padding: 0.75rem;
      margin-bottom: 0.5rem;
      border: 1px solid #dee2e6;
      border-radius: 0.25rem;
      cursor: pointer;
      transition: all 0.2s;
    }

    .answer-option:hover {
      background-color: #f8f9fa;
    }

    .answer-option.selected {
      background-color: #e7f1ff;
      border-color: #0d6efd;
    }

    .matrix-table th,
    .matrix-table td {
      text-align: center;
      vertical-align: middle;
    }

    .matrix-option {
      cursor: pointer;
    }

    .matrix-option.selected {
      background-color: #e7f1ff;
    }

    .navigation-buttons {
      position: sticky;
      bottom: 0;
      background-color: #fff;
      padding: 1rem 0;
      border-top: 1px solid #dee2e6;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <!-- Timer and Header -->
    <div class="timer-container d-flex justify-content-between align-items-center">
      <h4><?= htmlspecialchars($test['title']) ?></h4>
      <?php if ($time_limit > 0): ?>
        <div class="d-flex align-items-center">
          <i class="bi bi-clock me-2"></i>
          <span id="timer" class="fw-bold">Time remaining: <?= $time_limit ?>:00</span>
        </div>
      <?php endif; ?>
    </div>

    <!-- Progress Bar -->
    <div class="progress mb-4" style="height: 10px;">
      <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;"
        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <!-- Test Form -->
    <form id="testForm" action="submit_test.php" method="post">
      <input type="hidden" name="test_id" value="<?= $test_id ?>">
      <input type="hidden" name="participation_id" value="<?= $participation_id ?>">

      <!-- Questions -->
      <?php foreach ($questions as $index => $q): ?>
        <div class="question-container" id="question-<?= $index ?>">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <h5>
              <span class="question-number">Q<?= $index + 1 ?>:</span>
              <?= strip_tags($q['question']) ?>
            </h5>
            <span class="badge bg-secondary"><?= $q['weight'] ?> points</span>
          </div>

          <?php if (!empty($q['videolink'])): ?>
            <div class="mb-3">
              <video controls width="100%">
                <source src="<?= htmlspecialchars($q['videolink']) ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          <?php endif; ?>

          <input type="hidden" name="questions[<?= $index ?>][id]" value="<?= $q['quiz_question_id'] ?>">
          <input type="hidden" name="questions[<?= $index ?>][type]" value="<?= $q['qtype'] ?>">

          <!-- Question Type 1: Single Choice -->
          <?php if ($q['qtype'] == 1): ?>
            <div class="answer-options">
              <?php foreach ($q['answers'] as $a): ?>
                <div class="form-check answer-option" onclick="selectSingleOption(this, <?= $index ?>, <?= $a['id'] ?>)">
                  <input class="form-check-input" type="radio"
                    name="questions[<?= $index ?>][answer]"
                    id="q<?= $index ?>_a<?= $a['id'] ?>"
                    value="<?= $a['id'] ?>" style="display: none;">
                  <label class="form-check-label w-100" for="q<?= $index ?>_a<?= $a['id'] ?>">
                    <?= htmlspecialchars($a['text']) ?>
                  </label>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Question Type 2: Multiple Choice -->
          <?php elseif ($q['qtype'] == 2): ?>
            <div class="answer-options">
              <?php foreach ($q['answers'] as $a): ?>
                <div class="form-check answer-option" onclick="toggleMultiOption(this, <?= $index ?>, <?= $a['id'] ?>)">
                  <input class="form-check-input" type="checkbox"
                    name="questions[<?= $index ?>][answers][]"
                    id="q<?= $index ?>_a<?= $a['id'] ?>"
                    value="<?= $a['id'] ?>" style="display: none;">
                  <label class="form-check-label w-100" for="q<?= $index ?>_a<?= $a['id'] ?>">
                    <?= htmlspecialchars($a['text']) ?>
                  </label>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Question Type 4: Fill in Blanks -->
          <?php elseif ($q['qtype'] == 4): ?>
            <div class="form-group">
              <textarea class="form-control"
                name="questions[<?= $index ?>][answer_text]"
                rows="4"
                placeholder="Type your answer here..."></textarea>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

      <!-- Navigation Buttons -->
      <div class="navigation-buttons">
        <div class="d-flex justify-content-between">
          <button type="button" class="btn btn-secondary" id="prevBtn" onclick="navigate(-1)">Previous</button>
          <button type="button" class="btn btn-primary" id="nextBtn" onclick="navigate(1)">Next</button>
          <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">Submit Test</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Variables for test management
    const totalQuestions = <?= count($questions) ?>;
    let currentQuestion = 0;
    const answeredQuestions = new Set();

    // Timer functionality
    <?php if ($time_limit > 0): ?>
      let timeLeft = <?= $time_limit * 60 ?>; // Convert to seconds
      const timerElement = document.getElementById('timer');
      const timerInterval = setInterval(updateTimer, 1000);

      function updateTimer() {
        if (timeLeft <= 0) {
          clearInterval(timerInterval);
          alert('Time is up! Your test will be submitted automatically.');
          document.getElementById('testForm').submit();
          return;
        }

        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        timerElement.textContent = `Time remaining: ${minutes}:${seconds.toString().padStart(2, '0')}`;

        // Change color when time is running out
        if (timeLeft < 300) { // 5 minutes
          timerElement.classList.add('text-danger');
        }

        timeLeft--;
      }
    <?php endif; ?>

    // Initialize the test view
    document.addEventListener('DOMContentLoaded', function() {
      updateProgressBar();
      showQuestion(currentQuestion);
      updateNavigationButtons();
    });

    // Show/hide questions
    function showQuestion(index) {
      // Hide all questions
      document.querySelectorAll('.question-container').forEach(q => {
        q.style.display = 'none';
      });

      // Show the current question
      document.getElementById(`question-${index}`).style.display = 'block';

      // Update current question index
      currentQuestion = index;
      updateNavigationButtons();
    }

    // Navigate between questions
    function navigate(direction) {
      const newIndex = currentQuestion + direction;

      if (newIndex >= 0 && newIndex < totalQuestions) {
        showQuestion(newIndex);
      }
    }

    // Update navigation buttons based on current position
    function updateNavigationButtons() {
      document.getElementById('prevBtn').style.display = currentQuestion === 0 ? 'none' : 'block';

      if (currentQuestion === totalQuestions - 1) {
        document.getElementById('nextBtn').style.display = 'none';
        document.getElementById('submitBtn').style.display = 'block';
      } else {
        document.getElementById('nextBtn').style.display = 'block';
        document.getElementById('submitBtn').style.display = 'none';
      }
    }

    // Update progress bar
    function updateProgressBar() {
      const progress = (answeredQuestions.size / totalQuestions) * 100;
      document.getElementById('progress-bar').style.width = `${progress}%`;
      document.getElementById('progress-bar').setAttribute('aria-valuenow', progress);
    }

    // Selection functions for different question types
    function selectSingleOption(element, questionIndex, answerId) {
      // Deselect all options in this question
      const options = element.parentElement.querySelectorAll('.answer-option');
      options.forEach(opt => opt.classList.remove('selected'));

      // Select the clicked option
      element.classList.add('selected');
      element.querySelector('input[type="radio"]').checked = true;

      // Mark as answered
      answeredQuestions.add(questionIndex);
      updateProgressBar();
    }

    function toggleMultiOption(element, questionIndex, answerId) {
      element.classList.toggle('selected');
      const checkbox = element.querySelector('input[type="checkbox"]');
      checkbox.checked = !checkbox.checked;

      // Mark as answered if at least one option is selected
      const anySelected = Array.from(
        element.parentElement.querySelectorAll('input[type="checkbox"]')
      ).some(cb => cb.checked);

      if (anySelected) {
        answeredQuestions.add(questionIndex);
      } else {
        answeredQuestions.delete(questionIndex);
      }

      updateProgressBar();
    }

    // Auto-save progress periodically
    setInterval(function() {
      // This would typically send data to the server
      console.log('Auto-saving progress...');
    }, 30000); // Every 30 seconds

    // Warn user if they try to leave the page
    window.addEventListener('beforeunload', function(e) {
      if (answeredQuestions.size > 0 && answeredQuestions.size < totalQuestions) {
        const message = 'You have unsaved answers. Are you sure you want to leave?';
        e.returnValue = message;
        return message;
      }
    });
  </script>
</body>

</html>