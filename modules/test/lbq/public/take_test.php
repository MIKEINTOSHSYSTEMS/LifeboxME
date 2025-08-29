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

// Get test_id and participation_id from query parameters
$test_id = isset($_GET['test_id']) ? intval($_GET['test_id']) : 0;
$participation_id = isset($_GET['participation_id']) ? intval($_GET['participation_id']) : 0;

// If no test_id provided, show test selection
if (!$test_id) {
  // Get participant's available tests
  $stmt = $pdo->prepare("
        SELECT t.*, p.participation_id, t.title as training_title
        FROM lbquiz_tests t
        JOIN training_participation p ON p.training_id = t.training_id
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
    <link href="/assets/style/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  </head>

  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php">
          <img src="../lblogo-white.svg" alt="LifeBox Logo" height="30" class="d-inline-block align-text-top me-2">
          Test Center
        </a>
        <div class="d-flex align-items-center">
          <span class="navbar-text text-white me-3 d-none d-md-block">
            <i class="bi bi-person-circle me-1"></i>
            <?= htmlspecialchars($_SESSION['participant_name'] ?? 'User') ?>
          </span>
          <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
      </div>
    </nav>

    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card shadow">
            <div class="card-header bg-white py-3">
              <h4 class="card-title mb-0">Select a Test</h4>
            </div>
            <div class="card-body">
              <?php if (count($available_tests) > 0): ?>
                <div class="row">
                  <?php foreach ($available_tests as $test): ?>
                    <div class="col-md-6 mb-4">
                      <div class="card h-100 test-card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title"><?= htmlspecialchars($test['title']) ?></h5>
                            <span class="badge bg-<?= $test['is_pretest'] ? 'info' : 'primary' ?>">
                              <?= $test['is_pretest'] ? 'Pretest' : 'Posttest' ?>
                            </span>
                          </div>
                          <p class="card-text text-muted"><?= htmlspecialchars($test['description'] ?? '') ?></p>
                          <div class="mb-2">
                            <small class="text-muted">
                              <i class="bi bi-journal-text me-1"></i>
                              Training: <?= htmlspecialchars($test['training_title']) ?>
                            </small>
                          </div>
                          <div class="mb-2">
                            <small class="text-muted">
                              <i class="bi bi-clock me-1"></i>
                              Time limit: <?= $test['time_limit_minutes'] ? $test['time_limit_minutes'] . ' minutes' : 'None' ?>
                            </small>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent">
                          <a href="take_test.php?test_id=<?= $test['id'] ?>&participation_id=<?= $test['participation_id'] ?>"
                            class="btn btn-success w-100">
                            Start Test
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php else: ?>
                <div class="alert alert-info text-center">
                  <i class="bi bi-info-circle me-2"></i>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

// Get participant details
$stmt = $pdo->prepare("
    SELECT tp.*, t.training_id, t.title as training_title
    FROM training_participants tp
    JOIN training_participation tpp ON tpp.participant_id = tp.participant_id
    JOIN lbquiz_tests t ON t.training_id = tpp.training_id
    WHERE tp.participant_id = :pid AND tpp.participation_id = :part_id AND t.id = :test_id
");
$stmt->execute([
  ':pid' => $participant_id,
  ':part_id' => $participation_id,
  ':test_id' => $test_id
]);
$participant = $stmt->fetch();

// Check if time limit is set
$time_limit = $test['time_limit_minutes'] ?? 0;

// Randomize questions if needed
shuffle($questions);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Take Test - <?= htmlspecialchars($test['title'] ?? 'Test') ?> - LifeBox Test Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <style>
    :root {
      --primary: #0079a5;
      --secondary: #ff6b35;
      --success: #198754;
      --danger: #dc3545;
      --warning: #ffc107;
      --info: #0dcaf0;
      --light: #f8f9fa;
      --dark: #212529;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f7fb;
    }

    .test-header {
      background: linear-gradient(135deg, var(--primary), #ff6b35);
      color: white;
      padding: 1rem;
      border-radius: 0.5rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .bg-primary {
      
      background-color: #0079a7ed !important;
    }

    .timer-container {
      background-color: #09739E;
      border-radius: 50px;
      padding: 0.5rem 1.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: inline-flex;
      align-items: center;
      font-weight: bold;
    }

    .timer-warning {
      color: var(--danger);
      animation: pulse 1s infinite;
    }

    @keyframes pulse {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0.5;
      }

      100% {
        opacity: 1;
      }
    }

    .question-container {
      margin-bottom: 2rem;
      padding: 1.5rem;
      border: none;
      border-radius: 0.5rem;
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .question-container:hover {
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .question-number {
      font-weight: bold;
      color: var(--primary);
      margin-right: 0.5rem;
      background-color: #e9f2ff;
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
    }

    .answer-option {
      padding: 1rem;
      margin-bottom: 0.75rem;
      border: 2px solid #e9ecef;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: all 0.2s;
    }

    .answer-option:hover {
      border-color: var(--primary);
      background-color: #f8f9fa;
    }

    .answer-option.selected {
      background-color: #e7f1ff;
      border-color: var(--primary);
    }

    .navigation-buttons {
      position: sticky;
      bottom: 0;
      background-color: #fff;
      padding: 1rem 0;
      border-top: 1px solid #dee2e6;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
    }

    .progress-bar-container {
      height: 10px;
      border-radius: 5px;
      overflow: hidden;
    }

    .intro-card {
      background-color: white;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      margin-bottom: 2rem;
    }

    .test-info-badge {
      background-color: #e9f2ff;
      color: var(--primary);
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-size: 0.9rem;
      margin-right: 0.5rem;
      margin-bottom: 0.5rem;
      display: inline-flex;
      align-items: center;
    }

    .test-info-badge i {
      margin-right: 0.5rem;
    }

    @media (max-width: 768px) {
      .test-header {
        padding: 0.75rem;
      }

      .question-container {
        padding: 1rem;
      }

      .timer-container {
        padding: 0.4rem 1rem;
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>
  <!-- Test Introduction -->
  <div id="testIntro" class="container py-4">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="intro-card">
          <div class="text-center mb-4">
            <img src="../lblogo-dark.svg" alt="LifeBox Logo" height="60" class="mb-3">
            <h2 class="text-info"><?= htmlspecialchars($test['title']) ?></h2>
            <p class="lead"><?= htmlspecialchars($test['description'] ?? '') ?></p>
          </div>

          <div class="mb-4">
            <h5 class="mb-3">Test Information</h5>
            <div class="d-flex flex-wrap">
              <span class="test-info-badge">
                <i class="bi bi-person-circle"></i>
                Participant: <?= htmlspecialchars($participant['first_name'] . ' ' . $participant['last_name']) ?>
              </span>
              <span class="test-info-badge">
                <i class="bi bi-journal-text"></i>
                Training: <?= htmlspecialchars($participant['training_title'] ?? 'N/A') ?>
              </span>
              <span class="test-info-badge">
                <i class="bi bi-question-circle"></i>
                Questions: <?= count($questions) ?>
              </span>
              <?php if ($time_limit > 0): ?>
                <span class="test-info-badge">
                  <i class="bi bi-clock"></i>
                  Time Limit: <?= $time_limit ?> minutes
                </span>
              <?php endif; ?>
            </div>
          </div>

          <div class="mb-4">
            <h5 class="mb-3">Instructions</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                Answer all questions to the best of your ability
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <?php if ($time_limit > 0): ?>
                  The test will automatically submit when the time is up
                <?php else: ?>
                  There is no time limit for this test
                <?php endif; ?>
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                You can navigate between questions using the Previous and Next buttons
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                Your progress will be saved automatically
              </li>
            </ul>
          </div>

          <div class="text-center mt-4">
            <button id="startTestBtn" class="btn btn-primary btn-lg px-5 py-2">
              <i class="bi bi-play-circle me-2"></i>
              Start Test
            </button>
            <br><a href="../public/dashboard.php"> Go to your Dashboard</a></br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Test Interface (Initially Hidden) -->
  <div id="testInterface" class="container-fluid d-none">
    <!-- Header with Timer -->
    <div class="test-header">
      <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex align-items-center mb-2 mb-md-0">
          <img src="../lblogo-white.svg" alt="LifeBox Logo" height="30" class="me-2">
          <div>
            <h5 class="mb-0"><?= htmlspecialchars($test['title']) ?></h5>
            <small><?= htmlspecialchars($participant['first_name'] . ' ' . $participant['last_name']) ?></small>
          </div>
        </div>

        <?php if ($time_limit > 0): ?>
          <div class="timer-container">
            <i class="bi bi-clock me-2"></i>
            <span id="timer">Time remaining: <?= $time_limit ?>:00</span>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Progress Bar -->
    <div class="container mb-4">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <small>Progress: <span id="progress-text">0</span>%</small>
        <small>Answered: <span id="answered-count">0</span>/<?= count($questions) ?></small>
      </div>
      <div class="progress-bar-container">
        <div id="progress-bar" class="progress-bar bg-primary" role="progressbar" style="width: 0%;"
          aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <!-- Test Form -->
    <form id="testForm" action="submit_test.php" method="post">
      <input type="hidden" name="test_id" value="<?= $test_id ?>">
      <input type="hidden" name="participation_id" value="<?= $participation_id ?>">

      <!-- Questions -->
      <div class="container">
        <?php foreach ($questions as $index => $q): ?>
          <div class="question-container" id="question-<?= $index ?>">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <h5>
                <span class="question-number">Q<?= $index + 1 ?></span>
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
                  <div class="answer-option" onclick="selectSingleOption(this, <?= $index ?>, <?= $a['id'] ?>)">
                    <div class="form-check">
                      <input class="form-check-input" type="radio"
                        name="questions[<?= $index ?>][answer]"
                        id="q<?= $index ?>_a<?= $a['id'] ?>"
                        value="<?= $a['id'] ?>">
                      <label class="form-check-label w-100" for="q<?= $index ?>_a<?= $a['id'] ?>">
                        <?= htmlspecialchars($a['text']) ?>
                      </label>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

              <!-- Question Type 2: Multiple Choice -->
            <?php elseif ($q['qtype'] == 2): ?>
              <div class="answer-options">
                <?php foreach ($q['answers'] as $a): ?>
                  <div class="answer-option" onclick="toggleMultiOption(this, <?= $index ?>, <?= $a['id'] ?>)">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"
                        name="questions[<?= $index ?>][answers][]"
                        id="q<?= $index ?>_a<?= $a['id'] ?>"
                        value="<?= $a['id'] ?>">
                      <label class="form-check-label w-100" for="q<?= $index ?>_a<?= $a['id'] ?>">
                        <?= htmlspecialchars($a['text']) ?>
                      </label>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

              <!-- Question Type 4: Fill in Blanks -->
            <?php elseif ($q['qtype'] == 4): ?>
              <div class="form-group">
                <textarea class="form-control"
                  name="questions[<?= $index ?>][answer_text]"
                  rows="4"
                  placeholder="Type your answer here..."
                  oninput="markQuestionAnswered(<?= $index ?>)"></textarea>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Navigation Buttons -->
      <div class="navigation-buttons">
        <div class="container">
          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-secondary" id="prevBtn" onclick="navigate(-1)">
              <i class="bi bi-arrow-left me-1"></i> Previous
            </button>
            <button type="button" class="btn btn-primary" id="nextBtn" onclick="navigate(1)">
              Next <i class="bi bi-arrow-right ms-1"></i>
            </button>
            <button type="submit" class="btn btn-success" id="submitBtn">
              <i class="bi bi-check-circle me-1"></i> Submit Test
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Variables for test management
    const totalQuestions = <?= count($questions) ?>;
    let currentQuestion = 0;
    const answeredQuestions = new Set();
    let testStarted = false;

    // Timer functionality
    <?php if ($time_limit > 0): ?>
      let timeLeft = <?= $time_limit * 60 ?>; // Convert to seconds
      let timerInterval;
    <?php endif; ?>

    // Initialize the test view
    document.addEventListener('DOMContentLoaded', function() {
      // Set up event listeners
      document.getElementById('startTestBtn').addEventListener('click', startTest);
      document.getElementById('submitBtn').addEventListener('click', function(e) {
        e.preventDefault();
        confirmSubmit();
      });

      // Initialize the first question view
      updateProgressBar();
      showQuestion(currentQuestion);
      updateNavigationButtons();
    });

    // Start the test
    function startTest() {
      testStarted = true;
      document.getElementById('testIntro').classList.add('d-none');
      document.getElementById('testInterface').classList.remove('d-none');

      <?php if ($time_limit > 0): ?>
        // Start the timer
        timerInterval = setInterval(updateTimer, 1000);
      <?php endif; ?>

      // Scroll to the first question
      window.scrollTo(0, 0);
    }

    // Update timer
    <?php if ($time_limit > 0): ?>

      function updateTimer() {
        if (timeLeft <= 0) {
          clearInterval(timerInterval);
          Swal.fire({
            title: 'Time is up!',
            text: 'Your test will be submitted automatically.',
            icon: 'info',
            confirmButtonText: 'OK'
          }).then(() => {
            document.getElementById('testForm').submit();
          });
          return;
        }

        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        document.getElementById('timer').textContent = `Time remaining: ${minutes}:${seconds.toString().padStart(2, '0')}`;

        // Change color when time is running out
        if (timeLeft < 300) { // 5 minutes
          document.getElementById('timer').classList.add('timer-warning');
        }

        timeLeft--;
      }
    <?php endif; ?>

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

      // Scroll to the question
      document.getElementById(`question-${index}`).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
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
      document.getElementById('nextBtn').style.display = currentQuestion === totalQuestions - 1 ? 'none' : 'block';
      document.getElementById('submitBtn').style.display = currentQuestion === totalQuestions - 1 ? 'block' : 'none';
    }

    // Update progress bar
    function updateProgressBar() {
      const progress = (answeredQuestions.size / totalQuestions) * 100;
      document.getElementById('progress-bar').style.width = `${progress}%`;
      document.getElementById('progress-bar').setAttribute('aria-valuenow', progress);
      document.getElementById('progress-text').textContent = Math.round(progress);
      document.getElementById('answered-count').textContent = answeredQuestions.size;
    }

    // Mark a question as answered
    function markQuestionAnswered(questionIndex) {
      answeredQuestions.add(questionIndex);
      updateProgressBar();
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
      markQuestionAnswered(questionIndex);
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

    // Confirm before submitting
    function confirmSubmit() {
      const unanswered = totalQuestions - answeredQuestions.size;

      if (unanswered > 0) {
        Swal.fire({
          title: 'Unanswered Questions',
          text: `You have ${unanswered} unanswered question(s). Are you sure you want to submit?`,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, Submit',
          cancelButtonText: 'Continue Test'
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('testForm').submit();
          }
        });
      } else {
        Swal.fire({
          title: 'Submit Test',
          text: 'Are you sure you want to submit your test?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Yes, Submit',
          cancelButtonText: 'Review Again'
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('testForm').submit();
          }
        });
      }
    }

    // Auto-save progress periodically
    setInterval(function() {
      if (testStarted && answeredQuestions.size > 0) {
        // This would typically send data to the server
        console.log('Auto-saving progress...');
      }
    }, 30000); // Every 30 seconds

    // Warn user if they try to leave the page
    window.addEventListener('beforeunload', function(e) {
      if (testStarted && answeredQuestions.size > 0 && answeredQuestions.size < totalQuestions) {
        const message = 'You have unsaved answers. Are you sure you want to leave?';
        e.returnValue = message;
        return message;
      }
    });
  </script>
</body>

</html>