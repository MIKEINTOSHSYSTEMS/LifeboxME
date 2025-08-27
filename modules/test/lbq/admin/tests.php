<?php
session_start();
if (empty($_SESSION['admin'])) { header('Location: login.php'); exit; }
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $training_id = intval($_POST['training_id'] ?? 0);

    // normalize boolean values
    $is_pre = !empty($_POST['is_pretest']) && $_POST['is_pretest'] === 'on';
    $is_active = !empty($_POST['is_active']) && $_POST['is_active'] === 'on';

    if ($title && $training_id) {
        $quiz->createTest(
            $training_id,
            $title,
            null,        // description
            null,        // time limit
            $is_pre,     // is_pretest
            $is_active   // is_active
        );
        header('Location: dashboard.php');
        exit;
    }
}

header('Location: dashboard.php');
exit;
