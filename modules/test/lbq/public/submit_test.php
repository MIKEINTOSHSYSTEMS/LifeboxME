<?php
session_start();
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

// Check if user is logged in
if (empty($_SESSION['participant_id'])) {
    echo "Please log in to submit a test.";
    exit;
}

$test_id = intval($_POST['test_id'] ?? 0);
$participation_id = intval($_POST['participation_id'] ?? 0);
$questions = $_POST['questions'] ?? [];

if (!$test_id || !$participation_id) {
    echo "Missing test_id or participation_id";
    exit;
}

// Prepare answers for storage
$answers = [];
foreach ($questions as $index => $question) {
    $qid = intval($question['id']);
    $qtype = intval($question['type']);

    $answer_data = [
        'quiz_question_id' => $qid
    ];

    if ($qtype == 1) {
        // Single choice
        $answer_data['answer_ids'] = [intval($question['answer'] ?? 0)];
    } elseif ($qtype == 2) {
        // Multiple choice
        $answer_data['answer_ids'] = array_map('intval', $question['answers'] ?? []);
    } elseif ($qtype == 4) {
        // Fill in the blank
        $answer_data['answer_text'] = trim($question['answer_text'] ?? '');
    }

    $answers[] = $answer_data;
}

$raw = json_encode($answers);
$resp_id = $quiz->createResponse($participation_id, $test_id, $_SESSION['participant_id'], $raw);

if (!$resp_id) {
    echo "Failed to create response";
    exit;
}

$quiz->insertResponseDetails($resp_id, $answers);

// Call scoring function explicitly (DB trigger also exists)
$stmt = $pdo->prepare("SELECT public.calculate_and_store_score(:rid)");
$stmt->execute([':rid' => $resp_id]);

header("Location: result.php?response_id=" . intval($resp_id));
exit;
