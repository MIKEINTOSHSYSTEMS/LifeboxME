<?php
session_start();
if (empty($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

// Get stats for dashboard
$total_tests = $pdo->query("SELECT COUNT(*) as total FROM lbquiz_tests")->fetch()['total'];
$total_questions = $pdo->query("SELECT COUNT(*) as total FROM public.quiz_questions")->fetch()['total'];
$total_responses = $pdo->query("SELECT COUNT(*) as total FROM lbquiz_responses")->fetch()['total'];
$completed_tests = $pdo->query("SELECT COUNT(*) as total FROM lbquiz_responses WHERE submitted_at IS NOT NULL")->fetch()['total'];
$total_participants = $pdo->query("SELECT COUNT(*) as total FROM training_participants")->fetch()['total'];

// Get average scores
$avg_scores = $pdo->query("
    SELECT 
        AVG(CASE WHEN t.is_pretest = true THEN r.score END) as avg_pre_test,
        AVG(CASE WHEN t.is_pretest = false THEN r.score END) as avg_post_test,
        COUNT(DISTINCT r.id) as total_responses
    FROM lbquiz_responses r
    JOIN lbquiz_tests t ON t.id = r.test_id
    WHERE r.submitted_at IS NOT NULL
")->fetch();

// Get recent tests with course information
$tests = $pdo->query("
    SELECT t.*, ts.training_type, tc.course_name, ts.start_date, ts.end_date,
           (SELECT COUNT(*) FROM lbquiz_test_questions tq WHERE tq.test_id = t.id) as question_count,
           (SELECT COUNT(*) FROM lbquiz_responses r WHERE r.test_id = t.id) as response_count
    FROM lbquiz_tests t
    LEFT JOIN training_sessions ts ON ts.training_id = t.training_id
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    ORDER BY t.created_at DESC
    LIMIT 10
")->fetchAll();

// Get trainings for dropdown with course information

$trainings = $pdo->query("
    SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
    FROM training_sessions ts
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    -- WHERE ts.start_date >= CURRENT_DATE - INTERVAL '1 year'
    ORDER BY tc.course_name ASC, ts.start_date DESC
")->fetchAll();


/*
$trainings = $pdo->query("
    SELECT ts.training_id, tc.course_name, ts.training_type, ts.start_date, ts.end_date
    FROM training_sessions ts
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    WHERE ts.start_date >= CURRENT_DATE - INTERVAL '6 months'
    ORDER BY ts.start_date DESC
    LIMIT 100
")->fetchAll();

*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = trim($_POST['title'] ?? '');
  $training_id = intval($_POST['training_id'] ?? 0);
  $description = trim($_POST['description'] ?? '');
  $time_limit = !empty($_POST['time_limit_minutes']) ? intval($_POST['time_limit_minutes']) : null;
  $is_pretest = !empty($_POST['is_pretest']);
  $is_active = !empty($_POST['is_active']);

  if ($title && $training_id) {
    $test_id = $quiz->createTest($training_id, $title, $description, $time_limit, $is_pretest, $is_active);
    if ($test_id) {
      header("Location: test_edit.php?id=$test_id");
      exit;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LifeBox Test Center - Admin Dashboard</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

  <style>
    .dashboard-card {
      transition: transform 0.3s;
      border-radius: 10px;
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .dashboard-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .stat-icon {
      font-size: 2rem;
      opacity: 0.7;
    }

    .progress {
      height: 8px;
    }

    .score-badge {
      font-size: 1.1rem;
      padding: 0.5rem 1rem;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard Overview</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-outline-secondary" onclick="window.location.reload()">
              <i class="bi bi-arrow-clockwise"></i> Refresh
            </button>
          </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-primary h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Tests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_tests ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-journal-text stat-icon text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-success h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Questions</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_questions ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-question-circle stat-icon text-success"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-info h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Participants</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_participants ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-people stat-icon text-info"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-warning h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Completed Tests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $completed_tests ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-check-circle stat-icon text-warning"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Average Scores -->
        <div class="row mb-4">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Average Test Scores</h5>
              </div>
              <div class="card-body">
                <div class="row text-center">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <h6>Pre Test Average</h6>
                      <span class="score-badge badge bg-info">
                        <?= round($avg_scores['avg_pre_test'] ?? 0, 1) ?>%
                      </span>
                      <div class="progress mt-2">
                        <div class="progress-bar bg-info" role="progressbar"
                          style="width: <?= $avg_scores['avg_pre_test'] ?? 0 ?>%;"
                          aria-valuenow="<?= $avg_scores['avg_pre_test'] ?? 0 ?>"
                          aria-valuemin="0" aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <h6>Post Test Average</h6>
                      <span class="score-badge badge bg-primary">
                        <?= round($avg_scores['avg_post_test'] ?? 0, 1) ?>%
                      </span>
                      <div class="progress mt-2">
                        <div class="progress-bar bg-primary" role="progressbar"
                          style="width: <?= $avg_scores['avg_post_test'] ?? 0 ?>%;"
                          aria-valuenow="<?= $avg_scores['avg_post_test'] ?? 0 ?>"
                          aria-valuemin="0" aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php if ($avg_scores['total_responses'] > 0): ?>
                  <div class="text-center mt-2">
                    <small class="text-muted">
                      Based on <?= $avg_scores['total_responses'] ?> test responses
                    </small>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Quick Actions</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 mb-2">
                    <a href="questions.php" class="btn btn-outline-primary w-100">
                      <i class="bi bi-question-circle"></i> Manage Questions
                    </a>
                  </div>
                  <div class="col-md-6 mb-2">
                    <a href="tests.php" class="btn btn-outline-success w-100">
                      <i class="bi bi-journal-text"></i> Manage Tests
                    </a>
                  </div>
                  <div class="col-md-6 mb-2">
                    <a href="responses.php" class="btn btn-outline-info w-100">
                      <i class="bi bi-clipboard-data"></i> View Responses
                    </a>
                  </div>
                  <div class="col-md-6 mb-2">
                    <a href="participants.php" class="btn btn-outline-warning w-100">
                      <i class="bi bi-people"></i> View Participants
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Tests and Create Test Form -->
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Recent Tests</h5>
                <a href="tests.php" class="btn btn-sm btn-outline-secondary">View All</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Course</th>
                        <th>Questions</th>
                        <th>Responses</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($tests as $t): ?>
                        <tr>
                          <td><?= $t['id'] ?></td>
                          <td><?= htmlspecialchars($t['title']) ?></td>
                          <td><?= htmlspecialchars($t['course_name'] ?? 'N/A') ?></td>
                          <td><?= $t['question_count'] ?></td>
                          <td><?= $t['response_count'] ?></td>
                          <td>
                            <span class="badge bg-<?= $t['is_active'] ? 'success' : 'secondary' ?>">
                              <?= $t['is_active'] ? 'Active' : 'Inactive' ?>
                            </span>
                          </td>
                          <td>
                            <span class="badge bg-<?= $t['is_pretest'] ? 'info' : 'primary' ?>">
                              <?= $t['is_pretest'] ? 'Pre Test' : 'Post Test' ?>
                            </span>
                          </td>
                          <td>
                            <a href="test_edit.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-outline-primary">
                              <i class="bi bi-pencil"></i> Edit
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Create New Test</h5>
              </div>
              <div class="card-body">
                <form method="post">
                  <div class="mb-3">
                    <label for="title" class="form-label">Test Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                  </div>
                  <div class="mb-3">
                    <label for="training_id" class="form-label">Training Session</label>
                    <select class="form-select" id="training_id" name="training_id" required>
                      <option value="">Select Training Session</option>
                      <?php foreach ($trainings as $tr): ?>
                        <option value="<?= $tr['training_id'] ?>">
                          <?= htmlspecialchars($tr['course_name'] ?? 'Training', ENT_QUOTES, 'UTF-8') ?> - Session
                          <?= htmlspecialchars($tr['training_id'] ?? '', ENT_QUOTES, 'UTF-8') ?> - Quarter
                          <?= htmlspecialchars($tr['quarter'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                          (<?= $tr['start_date'] ? date('M Y', strtotime($tr['start_date'])) : 'N/A' ?>)
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="time_limit_minutes" class="form-label">Time Limit (minutes)</label>
                    <input type="number" class="form-control" id="time_limit_minutes" name="time_limit_minutes"
                      min="0" placeholder="0 for no time limit">
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="is_pretest" name="is_pretest">
                      <label class="form-check-label" for="is_pretest">This is a Pre Test</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
                      <label class="form-check-label" for="is_active">Active</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-plus-circle"></i> Create Test
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>