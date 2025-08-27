<?php
session_start();
if (empty($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);
$tests = $quiz->listTests(50);

// Get stats for dashboard
$stmt = $pdo->query("SELECT COUNT(*) as total FROM lbquiz_tests");
$total_tests = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM public.quiz_questions");
$total_questions = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM lbquiz_responses");
$total_responses = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM lbquiz_responses WHERE submitted_at IS NOT NULL");
$completed_tests = $stmt->fetch()['total'];
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

    .sidebar {
      min-height: 100vh;
      background-color: #f8f9fa;
      border-right: 1px solid #dee2e6;
    }

    .nav-link {
      color: #495057;
      border-radius: 5px;
      margin-bottom: 5px;
    }

    .nav-link:hover,
    .nav-link.active {
      background-color: #0d6efd;
      color: white;
    }

    .stat-icon {
      font-size: 2rem;
      opacity: 0.7;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->

      <!--
      <div class="col-md-3 col-lg-2 sidebar p-0">
        <div class="d-flex flex-column p-3">
          <a href="dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <span class="fs-4 fw-bold text-primary">LifeBox Test Center</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link active">
                <i class="bi bi-speedometer2 me-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a href="tests.php" class="nav-link">
                <i class="bi bi-journal-text me-2"></i>
                Tests
              </a>
            </li>
            <li>
              <a href="questions.php" class="nav-link">
                <i class="bi bi-question-circle me-2"></i>
                Questions
              </a>
            </li>
            <li>
              <a href="responses.php" class="nav-link">
                <i class="bi bi-clipboard-data me-2"></i>
                Responses
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
              <img src="https://via.placeholder.com/32" alt="Admin" width="32" height="32" class="rounded-circle me-2">
              <strong>Admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
              <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>

  -->
      <?php include 'sidebar.php'; ?>
      <!-- Main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
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
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Responses</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_responses ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-clipboard-data stat-icon text-info"></i>
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

        <!-- Recent Tests and Create Test Form -->
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Recent Tests</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Training ID</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($tests as $t): ?>
                        <tr>
                          <td><?= htmlspecialchars($t['id']) ?></td>
                          <td><?= htmlspecialchars($t['title']) ?></td>
                          <td><?= htmlspecialchars($t['training_id'] ?? 'N/A') ?></td>
                          <td>
                            <span class="badge bg-<?= $t['is_active'] ? 'success' : 'secondary' ?>">
                              <?= $t['is_active'] ? 'Active' : 'Inactive' ?>
                            </span>
                            <span class="badge bg-<?= $t['is_pretest'] ? 'info' : 'primary' ?> ms-1">
                              <?= $t['is_pretest'] ? 'Pretest' : 'Posttest' ?>
                            </span>
                          </td>
                          <td>
                            <a class="btn btn-sm btn-outline-primary" href="test_edit.php?id=<?= urlencode($t['id']) ?>">
                              <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-outline-secondary" href="responses.php?test_id=<?= urlencode($t['id']) ?>">
                              <i class="bi bi-clipboard-data"></i> Responses
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
                <form method="post" action="tests.php">
                  <div class="mb-3">
                    <label for="title" class="form-label">Test Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                  </div>
                  <div class="mb-3">
                    <label for="training_id" class="form-label">Training ID</label>
                    <input type="number" class="form-control" id="training_id" name="training_id" required>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="time_limit_minutes" class="form-label">Time Limit (minutes)</label>
                    <input type="number" class="form-control" id="time_limit_minutes" name="time_limit_minutes" min="0">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_pretest" name="is_pretest">
                    <label class="form-check-label" for="is_pretest">This is a pretest</label>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked>
                    <label class="form-check-label" for="is_active">Active</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Create Test</button>
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