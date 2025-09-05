<?php
/*
session_start();
if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}*/
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';
$quiz = new Quiz($pdo);

$question_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$question = $question_id ? $quiz->getQuestion($question_id) : null;
$answers = $question_id ? $quiz->getQuestionAnswers($question_id) : [];

$qtypes = [
    1 => 'Single choice',
    2 => 'Multiple choice',
    3 => 'Decision matrix',
    4 => 'Fill in blanks'
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question_text = trim($_POST['question']);
    $qtype = intval($_POST['qtype']);
    $videolink = trim($_POST['videolink']) ?: null;

    if ($question_id) {
        // Update existing question
        $quiz->updateQuestion($question_id, $question_text, $qtype, $videolink);
    } else {
        // Create new question
        $question_id = $quiz->createQuestion($question_text, $qtype, $videolink);
    }

    // Handle answers
    if ($question_id && in_array($qtype, [1, 2, 3])) {
        $answer_texts = $_POST['answer_text'] ?? [];
        $answer_correct = $_POST['answer_correct'] ?? [];
        $answer_ids = $_POST['answer_id'] ?? [];

        // Update existing answers
        foreach ($answer_ids as $index => $answer_id) {
            if ($answer_id) {
                $text = trim($answer_texts[$index]);
                $correct = isset($answer_correct[$index]);

                if (!empty($text)) {
                    $quiz->updateAnswer($answer_id, $text, $correct);
                } else {
                    $quiz->deleteAnswer($answer_id);
                }
            }
        }

        // Add new answers
        $new_answer_texts = $_POST['new_answer_text'] ?? [];
        $new_answer_correct = $_POST['new_answer_correct'] ?? [];

        foreach ($new_answer_texts as $index => $text) {
            $text = trim($text);
            if (!empty($text)) {
                $correct = isset($new_answer_correct[$index]);
                $quiz->addAnswer($question_id, $text, $correct);
            }
        }
    }

    header("Location: question_edit.php?id=" . $question_id);
    exit;
}

// If no question ID but we're editing, redirect to create mode
if ($question_id && !$question) {
    header("Location: question_edit.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $question_id ? 'Edit' : 'Create' ?> Question - LifeBox Test Center</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <style>
        .answer-row {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        .answer-row:hover {
            background-color: #e9ecef;
        }

        .sortable-ghost {
            opacity: 0.5;
        }

        .matrix-section {
            display: none;
        }
    </style>
    <style>
        @media (min-width: 768px) {
            .px-md-4 {
                padding-right: 7.5rem !important;
                padding-left: 1.5rem !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><?= $question_id ? 'Edit' : 'Create' ?> Question</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="questions.php" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to Questions
                        </a>
                    </div>
                </div>

                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>

                <div class="card">
                    <div class="card-body">
                        <form method="post" id="questionForm">
                            <div class="mb-3">
                                <label for="question" class="form-label">Question Text</label>
                                <textarea class="form-control" id="question" name="question" rows="3" required><?= $question ? htmlspecialchars($question['question']) : '' ?></textarea>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="qtype" class="form-label">Question Type</label>
                                    <select class="form-select" id="qtype" name="qtype" required>
                                        <option value="">Select Question Type</option>
                                        <?php foreach ($qtypes as $id => $name): ?>
                                            <option value="<?= $id ?>" <?= ($question && $question['qtype'] == $id) ? 'selected' : '' ?>>
                                                <?= $name ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="videolink" class="form-label">Video Link (Optional)</label>
                                    <input type="url" class="form-control" id="videolink" name="videolink"
                                        value="<?= $question ? htmlspecialchars($question['videolink'] ?? '') : '' ?>"
                                        placeholder="https://example.com/video.mp4">
                                </div>
                            </div>

                            <!-- Answers Section -->
                            <div id="answers-section" class="<?= ($question && in_array($question['qtype'], [1, 2])) ? '' : 'd-none' ?>">
                                <h5>Answers</h5>
                                <div class="alert alert-info">
                                    <i class="bi bi-info-circle"></i> Check the box next to answers that are correct.
                                </div>
                                <div id="answers-container" class="mb-3">
                                    <?php if ($question && in_array($question['qtype'], [1, 2])): ?>
                                        <?php foreach ($answers as $index => $answer): ?>
                                            <div class="answer-row" data-index="<?= $index ?>">
                                                <input type="hidden" name="answer_id[]" value="<?= $answer['id'] ?>">
                                                <div class="row align-items-center">
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control" name="answer_text[]"
                                                            value="<?= htmlspecialchars($answer['text']) ?>" placeholder="Answer text" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" name="answer_correct[]"
                                                                value="<?= $index ?>" <?= $answer['correct'] ? 'checked' : '' ?>>
                                                            <label class="form-check-label">Correct Answer</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="button" class="btn btn-danger btn-sm remove-answer">
                                                            <i class="bi bi-trash"></i> Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <button type="button" id="add-answer" class="btn btn-sm btn-outline-primary mb-3">
                                    <i class="bi bi-plus-circle"></i> Add Answer
                                </button>
                            </div>

                            <!-- Matrix Section -->
                            <div id="matrix-section" class="<?= ($question && $question['qtype'] == 3) ? '' : 'd-none' ?>">
                                <h5>Matrix Configuration</h5>
                                <div class="alert alert-info">
                                    <i class="bi bi-info-circle"></i> Matrix questions require special configuration.
                                    Please contact support for matrix question setup.
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle"></i> <?= $question_id ? 'Update' : 'Create' ?> Question
                                </button>
                                <a href="questions.php" class="btn btn-secondary">
                                    <i class="bi bi-x-circle"></i> Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const qtypeSelect = document.getElementById('qtype');
            const answersSection = document.getElementById('answers-section');
            const matrixSection = document.getElementById('matrix-section');

            function toggleSections() {
                const selectedType = parseInt(qtypeSelect.value);
                answersSection.classList.toggle('d-none', !(selectedType === 1 || selectedType === 2));
                matrixSection.classList.toggle('d-none', selectedType !== 3);
            }

            qtypeSelect.addEventListener('change', toggleSections);
            toggleSections();

            // Add answer row
            document.getElementById('add-answer').addEventListener('click', function() {
                const container = document.getElementById('answers-container');
                const index = container.children.length;
                const newIndex = Date.now(); // Unique index

                const row = document.createElement('div');
                row.className = 'answer-row';
                row.innerHTML = `
                    <input type="hidden" name="answer_id[]" value="">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="new_answer_text[]" placeholder="Answer text" required>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="new_answer_correct[]" value="${newIndex}">
                                <label class="form-check-label">Correct Answer</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-sm remove-answer">
                                <i class="bi bi-trash"></i> Remove
                            </button>
                        </div>
                    </div>
                `;

                container.appendChild(row);

                // Add event listener to remove button
                row.querySelector('.remove-answer').addEventListener('click', function() {
                    row.remove();
                });
            });

            // Add event listeners to existing remove buttons
            document.querySelectorAll('.remove-answer').forEach(button => {
                button.addEventListener('click', function() {
                    this.closest('.answer-row').remove();
                });
            });

            // Form validation
            document.getElementById('questionForm').addEventListener('submit', function(e) {
                const qtype = parseInt(qtypeSelect.value);
                const answerCount = document.querySelectorAll('#answers-container .answer-row').length;

                if ((qtype === 1 || qtype === 2) && answerCount === 0) {
                    e.preventDefault();
                    alert('Please add at least one answer for this question type.');
                    return false;
                }
            });
        });
    </script>
</body>

</html>