<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
require __DIR__ . '/session_helper.php';
$quiz = new Quiz($pdo);

$question_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$preselected_course_id = isset($_GET['course_id']) ? intval($_GET['course_id']) : 0;
$saved_success = isset($_GET['saved']) ? intval($_GET['saved']) : 0;

$question = $question_id ? $quiz->getQuestion($question_id) : null;
$answers = $question_id ? $quiz->getQuestionAnswers($question_id) : [];

$qtypes = [
    1 => 'Single choice',
    2 => 'Multiple choice',
    3 => 'Decision matrix',
    4 => 'Fill in blanks'
];

$courses = $quiz->listCourses();

// Get test info for existing questions
$question_tests = $question_id ? $quiz->getQuestionTests($question_id) : [];

// Recently added questions for inline display
$inline_course_id = $question ? $question['course_id'] : $preselected_course_id;
$recent_questions = $inline_course_id ? $quiz->getQuestionsByCourse($inline_course_id, 10) : [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question_text = trim($_POST['question']);
    $qtype = intval($_POST['qtype']);
    $videolink = trim($_POST['videolink']) ?: null;
    $course_id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;
    $save_another = isset($_POST['save_another']);
    $is_new_question = !$question_id;

    if (!$course_id) {
        $error = "Please select a training course.";
    } elseif ($question_id) {
        $quiz->updateQuestion($question_id, $question_text, $qtype, $videolink, $course_id);
    } else {
        $question_id = $quiz->createQuestion($question_text, $qtype, $videolink, $course_id);
        if (!$question_id) {
            echo "Failed to create question.";
            exit;
        }
    }

    if (empty($error) && $question_id && in_array($qtype, [1, 2, 3])) {
        $answer_texts = $_POST['answer_text'] ?? [];
        $answer_ids = $_POST['answer_id'] ?? [];

        if ($qtype == 1) {
            $answer_correct = $_POST['answer_correct'] ?? '';
            $new_answer_correct = $_POST['new_answer_correct'] ?? '';
        } else {
            $answer_correct = $_POST['answer_correct'] ?? [];
            $new_answer_correct = $_POST['new_answer_correct'] ?? [];
        }

        foreach ($answer_ids as $index => $answer_id) {
            if ($answer_id) {
                $text = trim($answer_texts[$index]);
                $correct = $qtype == 1 ? ($answer_correct == $index) : isset($answer_correct[$index]);
                if (!empty($text)) {
                    $quiz->updateAnswer($answer_id, $text, $correct);
                } else {
                    $quiz->deleteAnswer($answer_id);
                }
            }
        }

        $new_answer_texts = $_POST['new_answer_text'] ?? [];
        foreach ($new_answer_texts as $index => $text) {
            $text = trim($text);
            if (!empty($text)) {
                $correct = $qtype == 1 ? ($new_answer_correct == $index) : isset($new_answer_correct[$index]);
                $quiz->addAnswer($question_id, $text, $correct);
            }
        }
    }

    if (empty($error) && $save_another && $is_new_question) {
        $redirect = 'question_edit.php?saved=1';
        if ($course_id > 0) {
            $redirect .= '&course_id=' . $course_id;
        }
        header("Location: $redirect");
        exit;
    }

    if (empty($error)) {
        $_SESSION['flash_message'] = $is_new_question ? 'Question created successfully!' : 'Question updated successfully!';
        header("Location: questions.php");
        exit;
    }
}

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

        .inline-question-item {
            border-left: 3px solid #0d6efd;
            transition: background 0.2s;
        }

        .inline-question-item:hover {
            background: #f0f4ff;
        }

        @media (min-width: 768px) {
            .px-md-4 {
                padding-right: 7.5rem !important;
                padding-left: 1.5rem !important;
            }
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="container-fluid">
        <main class="px-md-4 py-4">
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
            <?php if ($saved_success): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill"></i> Question saved! Add another one below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="row">
                <!-- Main Form -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" id="questionForm">
                                <!-- Course Selection -->
                                <div class="card mb-4 border-primary">
                                    <div class="card-header bg-primary text-white py-2">
                                        <h6 class="mb-0"><i class="bi bi-bookmarks"></i> Training Course</h6>
                                    </div>
                                    <div class="card-body">
                                        <select class="form-select form-select-lg" id="course_id" name="course_id" required>
                                            <option value="">-- Select Training Course --</option>
                                            <?php foreach ($courses as $c): ?>
                                                <option value="<?= $c['course_id'] ?>"
                                                    <?= ($question && $question['course_id'] == $c['course_id']) || ($preselected_course_id == $c['course_id']) ? 'selected' : '' ?>>
                                                    <?= htmlspecialchars($c['course_name']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if (!empty($question_tests)): ?>
                                            <div class="mt-2 small text-muted">
                                                <i class="bi bi-info-circle"></i> Mapped to tests:
                                                <?php foreach ($question_tests as $qt): ?>
                                                    <span class="badge bg-secondary me-1"><?= htmlspecialchars($qt['course_name'] ?? 'N/A') ?> - <?= htmlspecialchars($qt['title']) ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="question" class="form-label">Question Text</label>
                                    <textarea class="form-control tinymce-editor" id="question" name="question" rows="3"><?= $question ? htmlspecialchars($question['question']) : '' ?></textarea>
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
                                            <?php $letterLabels = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']; ?>
                                            <?php foreach ($answers as $index => $answer): ?>
                                                <div class="answer-row" data-index="<?= $index ?>">
                                                    <input type="hidden" name="answer_id[]" value="<?= $answer['id'] ?>">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-1 text-center">
                                                            <span class="answer-letter badge bg-secondary"><?= $letterLabels[$index] ?? '?' ?></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea class="form-control tinymce-answer" name="answer_text[]" rows="2" placeholder="Answer text"><?= htmlspecialchars($answer['text']) ?></textarea>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="<?= $question['qtype'] == 1 ? 'radio' : 'checkbox' ?>" name="<?= $question['qtype'] == 1 ? 'answer_correct' : 'answer_correct[]' ?>"
                                                                    value="<?= $index ?>" <?= $answer['correct'] ? 'checked' : '' ?>>
                                                                <label class="form-check-label">Correct</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-danger btn-sm remove-answer">
                                                                <i class="bi bi-trash"></i>
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
                                <div id="matrix-section" class="d-none">
                                    <h5>Matrix Configuration</h5>
                                    <div class="alert alert-info">
                                        <i class="bi bi-info-circle"></i> Matrix questions require special configuration. Contact support.
                                    </div>
                                </div>

                                <div class="mt-4 d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle"></i> <?= $question_id ? 'Update' : 'Create' ?> Question
                                    </button>
                                    <?php if (!$question_id): ?>
                                        <button type="submit" name="save_another" value="1" class="btn btn-success">
                                            <i class="bi bi-plus-circle"></i> Save & Add Another
                                        </button>
                                    <?php endif; ?>
                                    <a href="questions.php" class="btn btn-secondary">
                                        <i class="bi bi-x-circle"></i> Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Inline Recently Added Questions -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h6 class="mb-0"><i class="bi bi-list-check"></i> Questions for this Course</h6>
                        </div>
                        <div class="card-body p-2" id="recent-questions-list">
                            <?php if ($inline_course_id && !empty($recent_questions)): ?>
                                <?php foreach ($recent_questions as $rq): ?>
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
                            <?php else: ?>
                                <p class="text-muted small text-center my-3" id="no-questions-msg">
                                    <?= $inline_course_id ? 'No questions yet for this course.' : 'Select a course to see questions.' ?>
                                </p>
                            <?php endif; ?>
                            <div id="recent-loading" class="text-center py-3 d-none">
                                <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                                <small class="text-muted">Loading...</small>
                            </div>
                        </div>
                    </div>

                    <!-- Help Tooltips -->
                    <div class="card mt-3">
                        <div class="card-header bg-light d-flex align-items-center gap-2">
                            <i class="bi bi-question-circle text-info"></i>
                            <h6 class="mb-0">Tips &amp; Shortcuts</h6>
                        </div>
                        <div class="card-body p-3">
                            <p class="small text-muted mb-2"><strong><i class="bi bi-pencil"></i> Adding &amp; Editing</strong></p>
                            <ul class="small mb-3 ps-3">
                                <li>Select a <strong>Training Course</strong> first</li>
                                <li>Write the question in the editor above</li>
                                <li>Choose the <strong>Question Type</strong></li>
                                <li>Add answer choices and mark the <strong>Correct</strong> one(s)</li>
                            </ul>

                            <p class="small text-muted mb-2"><strong><i class="bi bi-clipboard"></i> Pasting Content</strong></p>
                            <ul class="small mb-3 ps-3">
                                <li><kbd>Ctrl</kbd>+<kbd>V</kbd> &mdash; keeps formatting (bold, links, etc.)</li>
                                <li><kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>V</kbd> &mdash; pastes as plain text only (Recommended when pasting answers)</li>
                            </ul>

                            <p class="small text-muted mb-2"><strong><i class="bi bi-images"></i> Images &amp; Video</strong></p>
                            <ul class="small mb-0 ps-3">
                                <li>Paste an image &mdash; it auto-uploads to the server</li>
                                <li>Use the <strong>Insert/Edit Image</strong> toolbar button</li>
                                <li>Click a pasted image to <strong>resize</strong> with drag handles</li>
                                <li>Video links can be added via the <strong>Video Link</strong> field or embedded in the editor</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/tinymce/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        var baseConfig = {
            license_key: 'gpl',
            menubar: false,
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help wordcount',
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | link image media table | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            images_upload_url: 'upload_handler.php',
            automatic_uploads: true,
            file_picker_types: 'image',
            paste_data_images: true
        };

        tinymce.init(Object.assign({}, baseConfig, {
            selector: '#question',
            height: 400
        }));

        tinymce.init(Object.assign({}, baseConfig, {
            selector: '.tinymce-answer',
            height: 144
        }));
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const qtypeSelect = document.getElementById('qtype');
            const answersSection = document.getElementById('answers-section');
            const matrixSection = document.getElementById('matrix-section');
            const courseSelect = document.getElementById('course_id');

            function toggleSections() {
                const selectedType = parseInt(qtypeSelect.value);
                answersSection.classList.toggle('d-none', !(selectedType === 1 || selectedType === 2));
                matrixSection.classList.toggle('d-none', selectedType !== 3);
            }

            qtypeSelect.addEventListener('change', function() {
                toggleSections();
                const selectedType = parseInt(this.value);
                const isSingle = selectedType === 1;
                const inputType = isSingle ? 'radio' : 'checkbox';
                const name = isSingle ? 'answer_correct' : 'answer_correct[]';
                document.querySelectorAll('.answer-row input[name^="answer_correct"]').forEach(input => {
                    input.type = inputType;
                    input.name = name;
                });
            });
            toggleSections();

            const letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

            function reindexLetters() {
                const rows = document.querySelectorAll('#answers-container .answer-row');
                rows.forEach(function(row, idx) {
                    const badge = row.querySelector('.answer-letter');
                    if (badge) {
                        badge.textContent = letters[idx] || '?';
                    }
                    const radio = row.querySelector('input[type="radio"][name^="answer_correct"], input[type="radio"][name^="new_answer_correct"]');
                    if (radio) {
                        radio.value = idx;
                    }
                    // Update checkboxes too for multi-choice
                    const checkboxes = row.querySelectorAll('input[type="checkbox"][name^="answer_correct"], input[type="checkbox"][name^="new_answer_correct"]');
                    checkboxes.forEach(function(cb) {
                        cb.value = idx;
                    });
                });
            }

            // Add answer row
            document.getElementById('add-answer').addEventListener('click', function() {
                const container = document.getElementById('answers-container');
                const qtype = parseInt(document.getElementById('qtype').value);
                const isSingle = qtype === 1;
                const inputType = isSingle ? 'radio' : 'checkbox';
                const name = isSingle ? 'new_answer_correct' : 'new_answer_correct[]';
                const rowCount = container.querySelectorAll('.answer-row').length;
                const letter = letters[rowCount] || '?';

                const row = document.createElement('div');
                row.className = 'answer-row';
                row.innerHTML = `
                    <input type="hidden" name="answer_id[]" value="">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center">
                            <span class="answer-letter badge bg-secondary">${letter}</span>
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control tinymce-answer" name="new_answer_text[]" rows="2" placeholder="Answer text"></textarea>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="${inputType}" name="${name}" value="${rowCount}">
                                <label class="form-check-label">Correct</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-sm remove-answer"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                `;
                container.appendChild(row);

                const textarea = row.querySelector('textarea');
                if (textarea && typeof tinymce !== 'undefined') {
                    tinymce.init(Object.assign({}, baseConfig, {
                        target: textarea,
                        height: 144
                    }));
                }

                row.querySelector('.remove-answer').addEventListener('click', function() {
                    const ta = row.querySelector('textarea');
                    if (ta && typeof tinymce !== 'undefined' && tinymce.get(ta.id)) {
                        tinymce.remove('#' + ta.id);
                    }
                    row.remove();
                    reindexLetters();
                });
            });

            document.querySelectorAll('.remove-answer').forEach(button => {
                button.addEventListener('click', function() {
                    this.closest('.answer-row').remove();
                    reindexLetters();
                });
            });

            // Inline question list refresher on course change
            const recentList = document.getElementById('recent-questions-list');
            const loadingEl = document.getElementById('recent-loading');
            const noMsg = document.getElementById('no-questions-msg');

            function refreshQuestions(courseId) {
                if (!courseId) {
                    recentList.innerHTML = '<p class="text-muted small text-center my-3">Select a course to see questions.</p>';
                    return;
                }
                loadingEl.classList.remove('d-none');
                fetch('questions_ajax.php?course_id=' + courseId)
                    .then(function(r) {
                        return r.text();
                    })
                    .then(function(html) {
                        loadingEl.classList.add('d-none');
                        var existing = recentList.querySelector('#recent-loading');
                        var msgEl = recentList.querySelector('#no-questions-msg');
                        // Replace content but keep loading indicator
                        var loader = recentList.querySelector('#recent-loading');
                        recentList.innerHTML = html;
                        if (loader) recentList.appendChild(loader);
                    })
                    .catch(function() {
                        loadingEl.classList.add('d-none');
                    });
            }

            courseSelect.addEventListener('change', function() {
                refreshQuestions(this.value);
            });

            // Form validation
            document.getElementById('questionForm').addEventListener('submit', function(e) {
                if (typeof tinymce !== 'undefined') {
                    tinymce.triggerSave();
                }

                const courseId = document.getElementById('course_id').value;
                if (!courseId) {
                    e.preventDefault();
                    alert('Please select a training course.');
                    return false;
                }

                const questionTextarea = document.getElementById('question');
                if (!questionTextarea.value.trim()) {
                    e.preventDefault();
                    alert('Please enter the question text.');
                    return false;
                }

                const qtype = parseInt(qtypeSelect.value);
                const answerCount = document.querySelectorAll('#answers-container .answer-row').length;

                if ((qtype === 1 || qtype === 2) && answerCount === 0) {
                    e.preventDefault();
                    alert('Please add at least one answer for this question type.');
                    return false;
                }

                if (qtype === 1 || qtype === 2) {
                    const answerRows = document.querySelectorAll('#answers-container .answer-row');
                    let hasEmptyAnswer = false;
                    answerRows.forEach(row => {
                        const ta = row.querySelector('textarea[name^="answer_text"]');
                        if (ta && !ta.value.trim()) {
                            hasEmptyAnswer = true;
                        }
                    });
                    if (hasEmptyAnswer) {
                        e.preventDefault();
                        alert('Please fill in all answer texts.');
                        return false;
                    }
                }
            });
        });
    </script>
</body>

</html>