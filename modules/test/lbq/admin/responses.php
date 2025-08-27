<?php
session_start();
if (empty($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

// Get filters
$test_id = intval($_GET['test_id'] ?? 0);
$training_id = intval($_GET['training_id'] ?? 0);
$participant_id = intval($_GET['participant_id'] ?? 0);
$score_min = floatval($_GET['score_min'] ?? 0);
$score_max = floatval($_GET['score_max'] ?? 100);
$date_from = $_GET['date_from'] ?? '';
$date_to = $_GET['date_to'] ?? '';

// Build query with filters
$sql = "SELECT r.*, t.title as test_title, t.training_id, 
               tp.participant_id, part.first_name, part.last_name, part.email,
               ts.training_type as training_title
        FROM lbquiz_responses r 
        JOIN lbquiz_tests t ON t.id = r.test_id
        LEFT JOIN training_participation tp ON tp.participation_id = r.participation_id
        LEFT JOIN training_participants part ON part.participant_id = tp.participant_id
        LEFT JOIN training_sessions ts ON ts.training_id = t.training_id
        WHERE 1=1";
$params = [];

if ($test_id) {
  $sql .= " AND r.test_id = :test_id";
  $params[':test_id'] = $test_id;
}

if ($training_id) {
  $sql .= " AND t.training_id = :training_id";
  $params[':training_id'] = $training_id;
}

if ($participant_id) {
  $sql .= " AND tp.participant_id = :participant_id";
  $params[':participant_id'] = $participant_id;
}

if ($score_min > 0) {
  $sql .= " AND r.score >= :score_min";
  $params[':score_min'] = $score_min;
}

if ($score_max < 100) {
  $sql .= " AND r.score <= :score_max";
  $params[':score_max'] = $score_max;
}

if (!empty($date_from)) {
  $sql .= " AND r.submitted_at >= :date_from";
  $params[':date_from'] = $date_from . ' 00:00:00';
}

if (!empty($date_to)) {
  $sql .= " AND r.submitted_at <= :date_to";
  $params[':date_to'] = $date_to . ' 23:59:59';
}

$sql .= " ORDER BY r.submitted_at DESC, r.created_at DESC LIMIT 500";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$rows = $stmt->fetchAll();

// Get tests for filter dropdown
$tests = $quiz->listTests(100);

// Get trainings for filter dropdown
$trainings = $pdo->query("
    SELECT training_id, training_type as title 
    FROM training_sessions 
    ORDER BY start_date DESC 
    LIMIT 100
")->fetchAll();

// Get participants for filter dropdown
$participants = $pdo->query("
    SELECT participant_id, first_name, last_name, email 
    FROM training_participants 
    ORDER BY created_at DESC 
    LIMIT 100
")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responses - LifeBox Test Center</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .response-row:hover {
      background-color: #f8f9fa;
    }

    .score-cell {
      font-weight: bold;
    }

    .score-high {
      color: #198754;
    }

    .score-medium {
      color: #fd7e14;
    }

    .score-low {
      color: #dc3545;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Test Responses</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="dashboard.php" class="btn btn-sm btn-outline-secondary">
              <i class="bi bi-arrow-left"></i> Back to Dashboard
            </a>
          </div>
        </div>

        <!-- Filters -->
        <div class="card mb-4">
          <div class="card-header bg-white">
            <h5 class="card-title mb-0">Filter Responses</h5>
          </div>
          <div class="card-body">
            <form method="get" class="row g-3">
              <div class="col-md-3">
                <label for="test_id" class="form-label">Test</label>
                <select class="form-select" id="test_id" name="test_id">
                  <option value="">All Tests</option>
                  <?php foreach ($tests as $t): ?>
                    <option value="<?= $t['id'] ?>" <?= $test_id == $t['id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($t['title']) ?> (ID: <?= $t['id'] ?>)
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="training_id" class="form-label">Training</label>
                <select class="form-select" id="training_id" name="training_id">
                  <option value="">All Trainings</option>
                  <?php foreach ($trainings as $tr): ?>
                    <option value="<?= $tr['training_id'] ?>" <?= $training_id == $tr['training_id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($tr['title'] ?? 'Training #' . $tr['training_id']) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="participant_id" class="form-label">Participant</label>
                <select class="form-select" id="participant_id" name="participant_id">
                  <option value="">All Participants</option>
                  <?php foreach ($participants as $p): ?>
                    <option value="<?= $p['participant_id'] ?>" <?= $participant_id == $p['participant_id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($p['first_name'] . ' ' . $p['last_name'] . ' (' . $p['email'] . ')') ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="score_range" class="form-label">Score Range</label>
                <div class="input-group">
                  <input type="number" class="form-control" name="score_min" placeholder="Min"
                    value="<?= $score_min > 0 ? $score_min : '' ?>" min="0" max="100" step="0.1">
                  <span class="input-group-text">to</span>
                  <input type="number" class="form-control" name="score_max" placeholder="Max"
                    value="<?= $score_max < 100 ? $score_max : '' ?>" min="0" max="100" step="0.1">
                </div>
              </div>
              <div class="col-md-4">
                <label for="date_from" class="form-label">Date From</label>
                <input type="date" class="form-control" id="date_from" name="date_from" value="<?= $date_from ?>">
              </div>
              <div class="col-md-4">
                <label for="date_to" class="form-label">Date To</label>
                <input type="date" class="form-control" id="date_to" name="date_to" value="<?= $date_to ?>">
              </div>
              <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary me-2">Apply Filters</button>
                <a href="responses.php" class="btn btn-outline-secondary">Clear Filters</a>
              </div>
            </form>
          </div>
        </div>

        <!-- Responses Table -->
        <div class="card">
          <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Responses (<?= count($rows) ?>)</h5>
            <div>
              <button class="btn btn-sm btn-outline-secondary" onclick="exportToCSV()">
                <i class="bi bi-download"></i> Export CSV
              </button>
            </div>
          </div>
          <div class="card-body">
            <?php if (count($rows) > 0): ?>
              <div class="table-responsive">
                <table class="table table-hover" id="responses-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Test</th>
                      <th>Training</th>
                      <th>Participant</th>
                      <th>Score</th>
                      <th>Raw Points</th>
                      <th>Started At</th>
                      <th>Submitted At</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($rows as $r): ?>
                      <tr class="response-row">
                        <td><?= htmlspecialchars($r['id']) ?></td>
                        <td>
                          <?= htmlspecialchars($r['test_title']) ?><br>
                          <small class="text-muted">ID: <?= $r['test_id'] ?></small>
                        </td>
                        <td>
                          <?= htmlspecialchars($r['training_title'] ?? 'Training #' . $r['training_id']) ?><br>
                          <small class="text-muted">ID: <?= $r['training_id'] ?></small>
                        </td>
                        <td>
                          <?php if ($r['participant_id']): ?>
                            <?= htmlspecialchars($r['first_name'] . ' ' . $r['last_name']) ?><br>
                            <small class="text-muted"><?= htmlspecialchars($r['email']) ?></small>
                          <?php else: ?>
                            <span class="text-muted">N/A</span>
                          <?php endif; ?>
                        </td>
                        <td class="score-cell 
                                                    <?= $r['score'] >= 70 ? 'score-high' : ($r['score'] >= 50 ? 'score-medium' : 'score-low') ?>">
                          <?= $r['submitted_at'] ? htmlspecialchars($r['score']) . '%' : 'N/A' ?>
                        </td>
                        <td><?= $r['submitted_at'] ? htmlspecialchars($r['points_raw']) : 'N/A' ?></td>
                        <td><?= $r['started_at'] ? date('M j, Y g:i A', strtotime($r['started_at'])) : 'N/A' ?></td>
                        <td><?= $r['submitted_at'] ? date('M j, Y g:i A', strtotime($r['submitted_at'])) : 'Not submitted' ?></td>
                        <td>
                          <a href="response_detail.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php else: ?>
              <div class="alert alert-info">
                No responses found matching your filters.
              </div>
            <?php endif; ?>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function exportToCSV() {
      // Simple CSV export implementation
      let csv = [];
      let rows = document.querySelectorAll("#responses-table tr");

      for (let i = 0; i < rows.length; i++) {
        let row = [],
          cols = rows[i].querySelectorAll("td, th");

        for (let j = 0; j < cols.length; j++) {
          // Remove action column
          if (j !== cols.length - 1) {
            row.push('"' + cols[j].innerText.replace(/"/g, '""') + '"');
          }
        }

        csv.push(row.join(","));
      }

      // Download CSV file
      let csvContent = "data:text/csv;charset=utf-8," + csv.join("\n");
      let encodedUri = encodeURI(csvContent);
      let link = document.createElement("a");
      link.setAttribute("href", encodedUri);
      link.setAttribute("download", "test_responses_<?= date('Y-m-d') ?>.csv");
      document.body.appendChild(link);
      link.click();
    }
  </script>
</body>

</html>