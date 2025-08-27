<?php
session_start();
if (empty($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$qid = intval($_GET['qid'] ?? 0);
if (!$qid) {
  header('Location: questions.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $test_id = intval($_POST['test_id'] ?? 0);
  if ($test_id) {
    $quiz->addQuestionToTest($test_id, $qid);
    header('Location: test_edit.php?id=' . $test_id);
    exit;
  }
}

$tests = $quiz->listTests(200);
$stmt = $pdo->prepare("SELECT * FROM public.quiz_questions WHERE id = :id");
$stmt->execute([':id' => $qid]);
$q = $stmt->fetch();
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Map Question</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="p-4">
  <div class="container">
    <h4>Map question: <?= strip_tags($q['question']) ?></h4>
    <form method="post">
      <div class="mb-2">
        <label class="form-label">Choose test</label>
        <select class="form-select" name="test_id">
          <?php foreach ($tests as $t): ?>
            <option value="<?= htmlspecialchars($t['id']) ?>"><?= htmlspecialchars($t['title']) ?> (ID <?= htmlspecialchars($t['id']) ?>)</option>
          <?php endforeach; ?>
        </select>
      </div>
      <button class="btn btn-success">Map</button>
    </form>
  </div>
</body>

</html>