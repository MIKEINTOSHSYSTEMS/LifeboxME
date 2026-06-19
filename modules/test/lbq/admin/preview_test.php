<?php
session_start();
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$test_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if (!$test_id) {
    die('No test specified.');
}

$test = $quiz->getTest($test_id);
if (!$test) {
    die('Test not found.');
}

$questions = $quiz->getTestQuestions($test_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preview: <?= htmlspecialchars($test['title']) ?> - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
        }
        .preview-banner {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .preview-banner .badge-preview {
            background: rgba(255,255,255,0.2);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
        }
        .question-card {
            background: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid #0d6efd;
        }
        .question-number {
            font-weight: 700;
            color: #0d6efd;
            background: #e9f2ff;
            padding: 0.2rem 0.7rem;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-right: 0.5rem;
        }
        .answer-option {
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border: 2px solid #e9ecef;
            border-radius: 0.5rem;
            transition: all 0.15s;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .answer-option.correct {
            border-color: #198754;
            background: #d1e7dd;
        }
        .answer-option .correct-badge {
            font-size: 0.75rem;
            margin-left: auto;
            flex-shrink: 0;
        }
        .answer-letter-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #e9ecef;
            color: #495057;
            font-size: 0.8rem;
            font-weight: 700;
            flex-shrink: 0;
        }
        .answer-option.correct .answer-letter-badge {
            background: #198754;
            color: #fff;
        }
        .qtype-badge {
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.2rem 0.6rem;
        }
        .test-info-bar {
            background: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            align-items: center;
        }
        .test-info-bar .stat {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            color: #495057;
            font-size: 0.9rem;
        }
        .test-info-bar .stat i {
            color: #0d6efd;
        }
    </style>
</head>
<body>

<div class="preview-banner">
    <div class="d-flex align-items-center gap-2">
        <i class="bi bi-eye fs-5"></i>
        <strong>Preview Mode</strong>
        <span class="badge-preview"><?= htmlspecialchars($test['title']) ?></span>
    </div>
    <div>
        <a href="tests.php" class="btn btn-sm btn-light me-2"><i class="bi bi-arrow-left"></i> Back to Tests</a>
        <a href="test_edit.php?id=<?= $test_id ?>" class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i> Edit Test</a>
    </div>
</div>

<div class="container py-4">

    <div class="test-info-bar">
        <div class="stat"><i class="bi bi-question-circle"></i> <?= count($questions) ?> question(s)</div>
        <div class="stat"><i class="bi bi-clock"></i> <?= $test['time_limit_minutes'] ? $test['time_limit_minutes'] . ' min limit' : 'No time limit' ?></div>
        <div class="stat"><i class="bi bi-arrow-repeat"></i> <?= ($test['no_tries'] ?? 0) > 0 ? $test['no_tries'] . ' attempts max' : 'Unlimited attempts' ?></div>
        <div class="stat"><i class="bi bi-award"></i> Pass mark: <?= ($test['pass_mark'] ?? 0) > 0 ? $test['pass_mark'] . '%' : 'N/A' ?></div>
        <div class="stat"><i class="bi bi-shield-check"></i> Certificate: <?= !empty($test['cert_enabled']) ? 'Enabled' : 'Disabled' ?></div>
        <div class="stat">
            <i class="bi bi-toggle-on"></i>
            <span class="badge bg-<?= $test['is_active'] ? 'success' : 'secondary' ?>"><?= $test['is_active'] ? 'Active' : 'Inactive' ?></span>
        </div>
        <div class="stat">
            <i class="bi bi-tag"></i>
            <span class="badge bg-<?= $test['is_pretest'] ? 'info' : 'primary' ?>"><?= $test['is_pretest'] ? 'Pre Test' : 'Post Test' ?></span>
        </div>
        <?php if (!empty($test['description'])): ?>
            <div class="stat"><i class="bi bi-info-circle"></i> <?= htmlspecialchars($test['description']) ?></div>
        <?php endif; ?>
    </div>

    <?php if (count($questions) === 0): ?>
        <div class="alert alert-warning">
            <i class="bi bi-exclamation-triangle me-2"></i>
            This test has no questions yet. <a href="test_edit.php?id=<?= $test_id ?>" class="alert-link">Add questions</a>.
        </div>
    <?php endif; ?>

    <?php foreach ($questions as $index => $q): ?>
        <div class="question-card">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="mb-0">
                    <span class="question-number">Q<?= $index + 1 ?></span>
                    <?= htmlspecialchars_decode($q['question']) ?>
                </h5>
                <div class="d-flex gap-1 flex-shrink-0">
                    <span class="badge bg-secondary qtype-badge">
                        <?php
                            $typeLabels = [1 => 'Single Choice', 2 => 'Multiple Choice', 4 => 'Fill-in-the-Blanks'];
                            echo $typeLabels[$q['qtype']] ?? 'Type ' . $q['qtype'];
                        ?>
                    </span>
                    <span class="badge bg-info qtype-badge"><?= $q['weight'] ?> pts</span>
                </div>
            </div>

            <?php if (!empty($q['videolink'])): ?>
                <div class="mb-3">
                    <video controls width="100%" style="max-height:300px">
                        <source src="<?= htmlspecialchars($q['videolink']) ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            <?php endif; ?>

            <?php $pLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']; ?>

            <!-- Single Choice -->
            <?php if ($q['qtype'] == 1): ?>
                <div>
                    <?php foreach ($q['answers'] as $pAi => $a): ?>
                        <div class="answer-option <?= $a['correct'] ? 'correct' : '' ?>">
                            <span class="answer-letter-badge"><?= $pLetters[$pAi] ?? '?' ?></span>
                            <div class="form-check flex-grow-1 mb-0">
                                <input class="form-check-input" type="radio" disabled
                                    <?= $a['correct'] ? 'checked' : '' ?>>
                                <label class="form-check-label w-100">
                                    <?= htmlspecialchars_decode($a['text']) ?>
                                </label>
                            </div>
                            <?php if ($a['correct']): ?>
                                <span class="correct-badge badge bg-success">Correct Answer</span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

            <!-- Multiple Choice -->
            <?php elseif ($q['qtype'] == 2): ?>
                <div>
                    <?php foreach ($q['answers'] as $pAi => $a): ?>
                        <div class="answer-option <?= $a['correct'] ? 'correct' : '' ?>">
                            <span class="answer-letter-badge"><?= $pLetters[$pAi] ?? '?' ?></span>
                            <div class="form-check flex-grow-1 mb-0">
                                <input class="form-check-input" type="checkbox" disabled
                                    <?= $a['correct'] ? 'checked' : '' ?>>
                                <label class="form-check-label w-100">
                                    <?= htmlspecialchars_decode($a['text']) ?>
                                </label>
                            </div>
                            <?php if ($a['correct']): ?>
                                <span class="correct-badge badge bg-success">Correct Answer</span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

            <!-- Fill-in-the-Blanks -->
            <?php elseif ($q['qtype'] == 4): ?>
                <div>
                    <textarea class="form-control" rows="4" placeholder="Type your answer here..." disabled></textarea>
                    <?php $correctTexts = array_filter(array_map(function($a) {
                        return $a['correct'] ? htmlspecialchars_decode($a['text']) : null;
                    }, $q['answers'])); ?>
                    <?php if (!empty($correctTexts)): ?>
                        <div class="mt-2 text-success small">
                            <i class="bi bi-check-circle me-1"></i>
                            Expected answer(s): <?= implode(' | ', $correctTexts) ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <?php if (count($questions) > 0): ?>
        <div class="text-center py-3">
            <a href="tests.php" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Back to Tests</a>
            <a href="test_edit.php?id=<?= $test_id ?>" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit Test</a>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
