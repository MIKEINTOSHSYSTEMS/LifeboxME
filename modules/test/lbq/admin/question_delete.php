<?php
session_start();
if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$question_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($question_id) {
    // Check if question exists
    $question = $quiz->getQuestion($question_id);

    if ($question) {
        // Delete the question (this will cascade to answers due to foreign key constraint)
        $quiz->deleteQuestion($question_id);

        // Log the deletion
        error_log("Question {$question_id} deleted by admin");
    }
}

header("Location: questions.php");
exit;
