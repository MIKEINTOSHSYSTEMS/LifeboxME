<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';

$quiz = new Quiz($pdo);

$ajax = !empty($_GET['ajax']);
$question_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$success = false;
$error = '';

// Log the attempt
error_log("Delete attempt for question ID: {$question_id}, AJAX: " . ($ajax ? 'true' : 'false'));

if ($question_id > 0) {
    try {
        // First check if the question exists
        $question = $quiz->getQuestion($question_id);
        if (!$question) {
            $error = 'Question not found.';
            error_log("Question {$question_id} not found");
        } else {
            // Delete related records first
            try {
                // Start transaction
                $pdo->beginTransaction();

                // Delete answers
                $stmt = $pdo->prepare("DELETE FROM public.quiz_answers WHERE questionid = ?");
                $stmt->execute([$question_id]);
                error_log("Deleted answers for question {$question_id}");

                // Delete test question mappings
                $stmt = $pdo->prepare("DELETE FROM lbquiz_test_questions WHERE quiz_question_id = ?");
                $stmt->execute([$question_id]);
                error_log("Deleted test mappings for question {$question_id}");

                // Finally delete the question
                $result = $quiz->deleteQuestion($question_id);
                if ($result > 0) {
                    error_log("Question {$question_id} deleted successfully by admin");
                    $pdo->commit();
                    $success = true;
                } else {
                    $pdo->rollBack();
                    $error = 'Failed to delete question.';
                    error_log("Failed to delete question {$question_id}");
                }
            } catch (PDOException $e) {
                $pdo->rollBack();
                $error = 'Database error: ' . $e->getMessage();
                error_log("Database error while deleting question {$question_id}: " . $e->getMessage());
            }
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        error_log("Exception while deleting question {$question_id}: " . $e->getMessage());
    }
} else {
    $error = 'Invalid question ID.';
    error_log("Invalid question ID: " . $question_id);
}

if ($ajax) {
    header('Content-Type: application/json');
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Question deleted successfully']);
    } else {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => $error]);
    }
    exit;
}

// For non-AJAX requests, redirect back
header("Location: questions.php");
exit;
