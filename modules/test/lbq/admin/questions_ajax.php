<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$course_id = isset($_GET['course_id']) ? intval($_GET['course_id']) : 0;
$qtypes = [
    1 => 'Single choice',
    2 => 'Multiple choice',
    3 => 'Decision matrix',
    4 => 'Fill in blanks'
];

if (!$course_id) {
    echo '<p class="text-muted small text-center my-3">Select a course to see questions.</p>';
    exit;
}

$questions = $quiz->getQuestionsByCourse($course_id, 20);

if (empty($questions)) {
    echo '<p class="text-muted small text-center my-3">No questions yet for this course.</p>';
    exit;
}

foreach ($questions as $rq):
?>
<div class="card inline-question-item mb-2">
    <div class="card-body py-2 px-3">
        <div class="d-flex justify-content-between align-items-start">
            <small class="text-truncate" style="max-width: 85%;">
                <a href="question_edit.php?id=<?= $rq['id'] ?>" class="text-decoration-none">
                    <strong>#<?= $rq['id'] ?></strong> <?= mb_strimwidth(strip_tags($rq['question']), 0, 50, '...') ?>
                </a>
            </small>
            <span class="badge bg-info" style="font-size: 0.6rem;"><?= $qtypes[$rq['qtype']] ?? '?' ?></span>
        </div>
        <small class="text-muted">Answers: <?= $rq['answer_count'] ?></small>
    </div>
</div>
<?php endforeach; ?>
