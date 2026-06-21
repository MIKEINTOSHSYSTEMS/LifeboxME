<?php
require __DIR__ . '/session_helper.php';
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';

// Check if user is logged in
//if (!is_logged_in()) {
//  header('Location: login.php');
//  exit;
//}

$quiz = new Quiz($pdo);

// Get stats for dashboard
$stats = $pdo->query("
    SELECT
        (SELECT COUNT(*) FROM lbquiz_tests) as total_tests,
        (SELECT COUNT(*) FROM lbquiz_tests WHERE is_active = true) as active_tests,
        (SELECT COUNT(*) FROM lbquiz_tests WHERE is_active = false) as inactive_tests,
        (SELECT COUNT(*) FROM public.quiz_questions) as total_questions,
        (SELECT COUNT(*) FROM lbquiz_responses) as total_responses,
        (SELECT COUNT(*) FROM lbquiz_responses WHERE submitted_at IS NOT NULL) as completed_responses,
        (SELECT COUNT(*) FROM training_participants) as total_participants,
        (SELECT COUNT(DISTINCT r.participation_id) FROM lbquiz_responses r) as participants_tested,
        (SELECT AVG(CASE WHEN t.is_pretest = true THEN r.score END) FROM lbquiz_responses r JOIN lbquiz_tests t ON t.id = r.test_id WHERE r.submitted_at IS NOT NULL) as avg_pre_test,
        (SELECT AVG(CASE WHEN t.is_pretest = false THEN r.score END) FROM lbquiz_responses r JOIN lbquiz_tests t ON t.id = r.test_id WHERE r.submitted_at IS NOT NULL) as avg_post_test,
        (SELECT COUNT(*) FROM lbquiz_tests t WHERE (SELECT COUNT(*) FROM lbquiz_test_questions tq JOIN quiz_questions q ON q.id = tq.quiz_question_id WHERE tq.test_id = t.id) = 0) as tests_without_questions,
        (SELECT COUNT(DISTINCT t.id) FROM lbquiz_tests t JOIN lbquiz_responses r ON r.test_id = t.id) as tests_with_responses
")->fetch();

// Get recent tests with session info from pivot table
$tests = $pdo->query("
    SELECT t.*,
           (SELECT string_agg(DISTINCT tc2.course_name, '; ')
            FROM (SELECT t.training_id AS tid UNION SELECT training_id FROM lbquiz_test_sessions WHERE test_id = t.id) u
            JOIN training_sessions ts3 ON ts3.training_id = u.tid
            JOIN training_courses tc2 ON tc2.course_id = ts3.course_id) as course_names,
           (SELECT COUNT(*) FROM lbquiz_test_questions tq JOIN quiz_questions q ON q.id = tq.quiz_question_id WHERE tq.test_id = t.id) as question_count,
           (SELECT COUNT(*) FROM lbquiz_responses r WHERE r.test_id = t.id) as response_count
    FROM lbquiz_tests t
    ORDER BY t.created_at DESC
    LIMIT 8
")->fetchAll();

// Get recent responses for activity feed
$recent_responses = $pdo->query("
    SELECT r.id, r.score, r.submitted_at, r.created_at, t.title as test_title,
           tp.participant_id, part.first_name, part.last_name,
           t.is_pretest
    FROM lbquiz_responses r
    JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_participation tp ON tp.participation_id = r.participation_id
    LEFT JOIN training_participants part ON part.participant_id = tp.participant_id
    ORDER BY COALESCE(r.submitted_at, r.created_at) DESC
    LIMIT 8
")->fetchAll();

// Get score distribution
$score_dist = $pdo->query("
    SELECT
        COUNT(*) FILTER (WHERE r.score >= 80 AND r.submitted_at IS NOT NULL) as excellent,
        COUNT(*) FILTER (WHERE r.score >= 60 AND r.score < 80 AND r.submitted_at IS NOT NULL) as good,
        COUNT(*) FILTER (WHERE r.score >= 40 AND r.score < 60 AND r.submitted_at IS NOT NULL) as fair,
        COUNT(*) FILTER (WHERE r.score < 40 AND r.submitted_at IS NOT NULL) as poor
    FROM lbquiz_responses r
")->fetch();

// Get trainings for dropdown
$trainings = $pdo->query("
    SELECT ts.training_id, tc.course_name, ts.training_type, ts.quarter, ts.start_date, ts.end_date
    FROM training_sessions ts
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    ORDER BY ts.start_date DESC
    LIMIT 50
")->fetchAll();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = trim($_POST['title'] ?? '');
  $training_ids = $_POST['training_ids'] ?? [];
  $description = trim($_POST['description'] ?? '');
  $time_limit = !empty($_POST['time_limit_minutes']) ? intval($_POST['time_limit_minutes']) : null;
  $is_pretest = !empty($_POST['is_pretest']);
  $is_active = !empty($_POST['is_active']);

  if ($title && !empty($training_ids)) {
    $test_id = $quiz->createTest($training_ids, $title, $description, $time_limit, $is_pretest, $is_active);
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

  <style>
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
      --info-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
      --warning-gradient: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
      --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
      --primary-color: #77DFEAFF;
    }

    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    @media (min-width: 768px) {
      .px-md-4 {
        padding-right: 7.5rem !important;
        padding-left: 1.5rem !important;
      }
    }

    .dashboard-card {
      transition: all 0.3s ease;
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      overflow: hidden;
    }

    .dashboard-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .stat-card {
      color: white;
      padding: 1.5rem;
      border-radius: 15px;
      position: relative;
      overflow: hidden;
    }

    .stat-card::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: rgba(255, 255, 255, 0.1);
      transform: rotate(45deg);
      transition: all 0.3s ease;
    }

    .stat-card:hover::before {
      transform: rotate(45deg) translate(20px, 20px);
    }

    .stat-icon {
      font-size: 2.5rem;
      opacity: 0.8;
      margin-bottom: 1rem;
    }

    .stat-number {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      font-size: 0.9rem;
      opacity: 0.9;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .progress-bar-animated {
      animation: progressAnimation 2s ease-in-out;
    }

    @keyframes progressAnimation {
      0% {
        width: 0%;
      }

      100% {
        width: var(--final-width);
      }
    }

    .chart-container {
      background: white;
      border-radius: 15px;
      padding: 1.5rem;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      height: 100%;
    }

    .quick-action-btn {
      transition: all 0.3s ease;
      border: none;
      border-radius: 12px;
      padding: 1rem;
      text-align: center;
      color: white;
      font-weight: 600;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .quick-action-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .test-card {
      transition: all 0.3s ease;
      border: none;
      border-radius: 12px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
    }

    .test-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .create-test-form {
      background: white;
      border-radius: 15px;
      padding: 1.5rem;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      height: 100%;
    }

    .nav-tabs .nav-link {
      border: none;
      border-radius: 10px;
      margin-right: 0.5rem;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
    }

    .nav-tabs .nav-link.active {
      background: var(--primary-gradient);
      color: white;
    }

    .animate-fade-in {
      animation: fadeIn 0.6s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .pulse {
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
    }
  </style>
</head>

<body>
  <?php include 'sidebar.php'; ?>
  <div class="container-fluid">
    <main class="px-md-4 py-4">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center pt-3 pb-4 mb-4">
        <div>

          <!--<h1 class="h2 mb-1 fw-bold text-dark animate-fade-in">Dashboard Overview</h1>
                    <br></br>
            <h1 class="h2 mb-1 fw-bold animate-fade-in">Overview Dashboard</h1>
            -->

          <p class="text-muted">Welcome back! <strong class="d-block"><?= htmlspecialchars($display_name) ?></strong> <br></br> Here's what's happening with Lifebox Tests today.</p>
        </div>
        <div class="btn-toolbar">
          <button class="btn btn-primary pulse" onclick="window.location.reload()">
            <i class="bi bi-arrow-clockwise me-2"></i>Refresh
          </button>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="row mb-4 animate-fade-in">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: var(--primary-gradient);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['total_tests'] ?></div>
                <div class="stat-label">Total Tests</div>
                <small><?= $stats['active_tests'] ?> active / <?= $stats['inactive_tests'] ?> inactive</small>
              </div>
              <i class="bi bi-journal-text stat-icon"></i>
            </div>
            <a href="tests.php" class="stretched-link text-white text-decoration-none"></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: var(--success-gradient);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['total_questions'] ?></div>
                <div class="stat-label">Total Questions</div>
              </div>
              <i class="bi bi-question-circle stat-icon"></i>
            </div>
            <a href="questions.php" class="stretched-link text-white text-decoration-none"></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: var(--info-gradient);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['total_participants'] ?></div>
                <div class="stat-label">Participants</div>
                <small><?= $stats['participants_tested'] ?> have taken tests</small>
              </div>
              <i class="bi bi-people stat-icon"></i>
            </div>
            <a href="participants.php" class="stretched-link text-white text-decoration-none"></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: var(--warning-gradient);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['completed_responses'] ?></div>
                <div class="stat-label">Completed Tests</div>
                <small>out of <?= $stats['total_responses'] ?> total responses</small>
              </div>
              <i class="bi bi-check-circle stat-icon"></i>
            </div>
            <a href="responses.php" class="stretched-link text-white text-decoration-none"></a>
          </div>
        </div>
      </div>

      <!-- Secondary Stats -->
      <div class="row mb-4 animate-fade-in">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: linear-gradient(135deg, #6c63ff 0%, #3f3d9e 100%);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['tests_with_responses'] ?></div>
                <div class="stat-label">Tests With Responses</div>
              </div>
              <i class="bi bi-bar-chart stat-icon"></i>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['tests_without_questions'] ?></div>
                <div class="stat-label">Tests w/o Questions</div>
                <small>need attention</small>
              </div>
              <i class="bi bi-exclamation-triangle stat-icon"></i>
            </div>
            <a href="tests.php" class="stretched-link text-white text-decoration-none"></a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: linear-gradient(135deg, #27ae60 0%, #1e8449 100%);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['avg_pre_test'] ? round($stats['avg_pre_test'], 1) . '%' : 'N/A' ?></div>
                <div class="stat-label">Avg Pre-Test Score</div>
              </div>
              <i class="bi bi-graph-up-arrow stat-icon"></i>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="stat-card" style="background: linear-gradient(135deg, #2980b9 0%, #1a5276 100%);">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number"><?= $stats['avg_post_test'] ? round($stats['avg_post_test'], 1) . '%' : 'N/A' ?></div>
                <div class="stat-label">Avg Post-Test Score</div>
              </div>
              <i class="bi bi-graph-up-arrow stat-icon"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts and Quick Actions -->
      <div class="row mb-4 animate-fade-in">
        <div class="col-lg-8 mb-4">
          <div class="chart-container">
            <h5 class="card-title mb-3">Score Distribution</h5>
            <?php $total_scored = $score_dist['excellent'] + $score_dist['good'] + $score_dist['fair'] + $score_dist['poor']; ?>
            <?php if ($total_scored > 0): ?>
              <div class="row text-center">
                <div class="col-3 mb-3">
                  <div class="p-3 rounded" style="background: #d4edda;">
                    <div class="fs-2 fw-bold text-success"><?= $score_dist['excellent'] ?></div>
                    <small class="text-muted">Excellent (≥80%)</small>
                    <div class="progress mt-2" style="height: 6px;">
                      <div class="progress-bar bg-success" style="width: <?= round($score_dist['excellent'] / $total_scored * 100) ?>%;"></div>
                    </div>
                  </div>
                </div>
                <div class="col-3 mb-3">
                  <div class="p-3 rounded" style="background: #fff3cd;">
                    <div class="fs-2 fw-bold text-warning"><?= $score_dist['good'] ?></div>
                    <small class="text-muted">Good (60-79%)</small>
                    <div class="progress mt-2" style="height: 6px;">
                      <div class="progress-bar bg-warning" style="width: <?= round($score_dist['good'] / $total_scored * 100) ?>%;"></div>
                    </div>
                  </div>
                </div>
                <div class="col-3 mb-3">
                  <div class="p-3 rounded" style="background: #f8d7da;">
                    <div class="fs-2 fw-bold text-danger"><?= $score_dist['fair'] ?></div>
                    <small class="text-muted">Fair (40-59%)</small>
                    <div class="progress mt-2" style="height: 6px;">
                      <div class="progress-bar bg-danger" style="width: <?= round($score_dist['fair'] / $total_scored * 100) ?>%;"></div>
                    </div>
                  </div>
                </div>
                <div class="col-3 mb-3">
                  <div class="p-3 rounded" style="background: #e2e3e5;">
                    <div class="fs-2 fw-bold text-secondary"><?= $score_dist['poor'] ?></div>
                    <small class="text-muted">Poor (&lt;40%)</small>
                    <div class="progress mt-2" style="height: 6px;">
                      <div class="progress-bar bg-secondary" style="width: <?= round($score_dist['poor'] / $total_scored * 100) ?>%;"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-2">
                <small class="text-muted">Based on <?= $total_scored ?> scored responses</small>
              </div>
            <?php else: ?>
              <p class="text-muted text-center">No scored responses yet.</p>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="chart-container">
            <h5 class="card-title mb-3">Quick Actions</h5>
            <div class="row g-3">
              <div class="col-6">
                <a href="questions.php" class="quick-action-btn d-block" style="background: var(--primary-gradient);">
                  <i class="bi bi-question-circle d-block mb-2" style="font-size: 1.5rem;"></i>
                  Questions
                </a>
              </div>
              <div class="col-6">
                <a href="tests.php" class="quick-action-btn d-block" style="background: var(--success-gradient);">
                  <i class="bi bi-journal-text d-block mb-2" style="font-size: 1.5rem;"></i>
                  Tests
                </a>
              </div>
              <div class="col-6">
                <a href="responses.php" class="quick-action-btn d-block" style="background: var(--info-gradient);">
                  <i class="bi bi-clipboard-data d-block mb-2" style="font-size: 1.5rem;"></i>
                  Responses
                </a>
              </div>
              <div class="col-6">
                <a href="participants.php" class="quick-action-btn d-block" style="background: var(--warning-gradient);">
                  <i class="bi bi-people d-block mb-2" style="font-size: 1.5rem;"></i>
                  Participants
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Tests and Recent Responses -->
      <div class="row animate-fade-in">
        <div class="col-lg-8 mb-4">
          <div class="chart-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="card-title mb-0">Recent Tests</h5>
              <a href="tests.php" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-eye me-1"></i>View All
              </a>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Test</th>
                    <th>Course(s)</th>
                    <th>Questions</th>
                    <th>Responses</th>
                    <th>Status</th>
                    <th>Created</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tests as $t): ?>
                    <tr class="test-card">
                      <td>
                        <a href="test_edit.php?id=<?= $t['id'] ?>" class="text-decoration-none fw-bold">
                          <?= htmlspecialchars($t['title']) ?>
                        </a>
                        <br>
                        <small class="text-muted">ID: <?= $t['id'] ?></small>
                      </td>
                      <td><small><?= htmlspecialchars($t['course_names'] ?? 'N/A') ?></small></td>
                      <td><span class="badge bg-<?= $t['question_count'] > 0 ? 'info' : 'secondary' ?>"><?= $t['question_count'] ?></span></td>
                      <td><span class="badge bg-<?= $t['response_count'] > 0 ? 'success' : 'secondary' ?>"><?= $t['response_count'] ?></span></td>
                      <td>
                        <span class="badge bg-<?= $t['is_active'] ? 'success' : 'secondary' ?>">
                          <?= $t['is_active'] ? 'Active' : 'Inactive' ?>
                        </span>
                        <br>
                        <span class="badge bg-<?= $t['is_pretest'] ? 'info' : 'primary' ?>">
                          <?= $t['is_pretest'] ? 'Pre' : 'Post' ?>
                        </span>
                      </td>
                      <td><small><?= $t['created_at'] ? date('M j, Y', strtotime($t['created_at'])) : 'N/A' ?></small></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="chart-container">
            <h5 class="card-title mb-3">Recent Activity</h5>
            <?php if (count($recent_responses) > 0): ?>
              <div class="list-group list-group-flush">
                <?php foreach ($recent_responses as $r): ?>
                  <div class="list-group-item px-0 border-start-0 border-end-0">
                    <div class="d-flex justify-content-between align-items-start">
                      <div class="me-2">
                        <small class="fw-bold"><?= htmlspecialchars($r['test_title']) ?></small>
                        <br>
                        <small class="text-muted">
                          <?= htmlspecialchars($r['first_name'] . ' ' . $r['last_name']) ?>
                          <span class="badge bg-<?= $r['is_pretest'] === 't' ? 'info' : 'primary' ?>" style="font-size:0.6rem;">
                            <?= $r['is_pretest'] === 't' ? 'Pre' : 'Post' ?>
                          </span>
                        </small>
                      </div>
                      <div class="text-end">
                        <?php if ($r['submitted_at']): ?>
                          <span class="badge bg-<?= $r['score'] >= 60 ? 'success' : ($r['score'] >= 40 ? 'warning' : 'danger') ?>">
                            <?= $r['score'] ?>%
                          </span>
                          <br>
                          <small class="text-muted"><?= date('M j', strtotime($r['submitted_at'])) ?></small>
                        <?php else: ?>
                          <span class="badge bg-secondary">In Progress</span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="text-center mt-3">
                <a href="responses.php" class="btn btn-sm btn-outline-primary">View All Responses</a>
              </div>
            <?php else: ?>
              <p class="text-muted text-center">No responses yet.</p>
            <?php endif; ?>
          </div>
          <div class="chart-container mt-3">
            <h5 class="card-title mb-3">Create New Test</h5>
            <form method="post">
              <div class="mb-3">
                <label for="title" class="form-label">Test Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
              </div>
              <div class="mb-3">
                <label for="training_ids" class="form-label">Training Sessions</label>
                <select class="form-select" id="training_ids" name="training_ids[]" multiple required style="min-height: 100px;">
                  <?php foreach ($trainings as $tr): ?>
                    <option value="<?= $tr['training_id'] ?>">
                      <?= htmlspecialchars($tr['course_name'] ?? 'Training') ?> -
                      Session <?= htmlspecialchars($tr['training_id'] ?? '') ?>
                    </option>
                  <?php endforeach; ?>
                </select>
                <small class="text-muted">Hold Ctrl (or Cmd) to select multiple</small>
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
              <div class="row mb-3">
                <div class="col-6">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_pretest" name="is_pretest">
                    <label class="form-check-label" for="is_pretest">Pre Test</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
                    <label class="form-check-label" for="is_active">Active</label>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-plus-circle me-2"></i>Create Test
              </button>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Animate elements on page load
    document.addEventListener('DOMContentLoaded', function() {
      // Animate progress bars
      const progressBars = document.querySelectorAll('.progress-bar-animated');
      progressBars.forEach(bar => {
        bar.style.width = '0%';
        setTimeout(() => {
          bar.style.width = bar.style.getPropertyValue('--final-width');
        }, 100);
      });

      // Add hover effects
      const cards = document.querySelectorAll('.dashboard-card, .test-card');
      cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
          card.style.transform = 'translateY(-8px)';
        });
        card.addEventListener('mouseleave', () => {
          card.style.transform = 'translateY(0)';
        });
      });

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        });
      });
    });

    // Refresh animation
    function refreshPage() {
      document.body.style.opacity = '0';
      setTimeout(() => {
        window.location.reload();
      }, 300);
    }
  </script>
</body>

</html>