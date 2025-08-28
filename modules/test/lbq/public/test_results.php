<?php
session_start();
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

// Check if user is logged in
if (empty($_SESSION['participant_id'])) {
    header('Location: login.php');
    exit;
}

$participant_id = $_SESSION['participant_id'];
$response_id = intval($_GET['response_id'] ?? 0);

if (!$response_id) {
    header('Location: dashboard.php');
    exit;
}

// Get response details
$response = $quiz->getResponse($response_id);
if (!$response) {
    echo "Response not found";
    exit;
}

// Verify the response belongs to the current user
$stmt = $pdo->prepare("
    SELECT COUNT(*) 
    FROM lbquiz_responses r
    JOIN training_participation p ON p.participation_id = r.participation_id
    WHERE r.id = :response_id AND p.participant_id = :participant_id
");
$stmt->execute([
    ':response_id' => $response_id,
    ':participant_id' => $participant_id
]);

if ($stmt->fetchColumn() == 0) {
    echo "You don't have access to these results.";
    exit;
}

// Get response details with correct answers
$response_details = $quiz->getResponseDetails($response_id);

// Get test information
$test = $quiz->getTest($response['test_id']);

// Get participant information
$stmt = $pdo->prepare("
    SELECT tp.*, p.training_id
    FROM training_participants tp
    JOIN training_participation p ON p.participant_id = tp.participant_id
    WHERE p.participation_id = :participation_id
");
$stmt->execute([':participation_id' => $response['participation_id']]);
$participant = $stmt->fetch();

// Calculate statistics
$total_questions = count($response_details);
$correct_answers = 0;
$incorrect_answers = 0;
$unanswered = 0;

foreach ($response_details as $detail) {
    if ($detail['points_awarded'] > 0) {
        $correct_answers++;
    } elseif (empty($detail['answer_ids']) && empty($detail['answer_text'])) {
        $unanswered++;
    } else {
        $incorrect_answers++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Results - LifeBox Test Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        :root {
            --primary: #0079a5;
            --secondary: #ff6b35;
            --success: #198754;
            --danger: #dc3545;
            --warning: #ffc107;
            --info: #0dcaf0;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
        }

        .result-header {
            background: linear-gradient(135deg, var(--primary), #0a58ca);
            color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }

        .stats-card {
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .question-card {
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--secondary);
            transition: all 0.3s;
        }

        .question-card.correct {
            border-left-color: var(--success);
        }

        .question-card.incorrect {
            border-left-color: var(--danger);
        }

        .question-card.unanswered {
            border-left-color: var(--warning);
        }

        .answer-option {
            padding: 0.75rem;
            margin-bottom: 0.5rem;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }

        .answer-option.correct {
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .answer-option.incorrect {
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .answer-option.selected {
            border: 2px solid var(--primary);
        }

        .badge-score {
            font-size: 0.85rem;
            padding: 0.35em 0.65em;
        }

        .certificate-btn {
            background: linear-gradient(135deg, var(--success), #0f6848);
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 500;
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s;
        }

        .certificate-btn:hover {
            background: linear-gradient(135deg, #0f6848, var(--success));
            transform: translateY(-2px);
            color: white;
        }

        .performance-chart {
            max-height: 300px;
        }

        @media (max-width: 768px) {
            .result-header {
                padding: 1.5rem;
            }

            .stats-card {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">
                <img src="../lblogo-white.svg" alt="LifeBox Logo" height="30" class="d-inline-block align-text-top me-2">
                LifeBox Test Center
            </a>
            <div class="d-flex align-items-center">
                <span class="navbar-text text-white me-3 d-none d-md-block">
                    <i class="bi bi-person-circle me-1"></i>
                    <?= htmlspecialchars($_SESSION['participant_name'] ?? 'User') ?>
                </span>
                <a href="dashboard.php" class="btn btn-outline-light btn-sm">Back to Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <!-- Result Header -->
        <div class="result-header">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>Test Results: <?= htmlspecialchars($test['title']) ?></h2>
                    <p class="lead mb-0"><?= htmlspecialchars($test['description'] ?? '') ?></p>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="display-4 fw-bold"><?= $response['score'] ?>%</div>
                    <span class="badge bg-<?= $response['score'] >= 70 ? 'success' : ($response['score'] >= 50 ? 'warning' : 'danger') ?>">
                        <?= $response['score'] >= 70 ? 'Excellent' : ($response['score'] >= 50 ? 'Good' : 'Needs Improvement') ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-primary mb-2">
                            <i class="bi bi-check-circle-fill display-4"></i>
                        </div>
                        <h3 class="card-title"><?= $correct_answers ?></h3>
                        <p class="card-text text-muted">Correct Answers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-danger mb-2">
                            <i class="bi bi-x-circle-fill display-4"></i>
                        </div>
                        <h3 class="card-title"><?= $incorrect_answers ?></h3>
                        <p class="card-text text-muted">Incorrect Answers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-warning mb-2">
                            <i class="bi bi-question-circle-fill display-4"></i>
                        </div>
                        <h3 class="card-title"><?= $unanswered ?></h3>
                        <p class="card-text text-muted">Unanswered</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card h-100">
                    <div class="card-body text-center">
                        <div class="text-info mb-2">
                            <i class="bi bi-clock-fill display-4"></i>
                        </div>
                        <h3 class="card-title"><?= $total_questions ?></h3>
                        <p class="card-text text-muted">Total Questions</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Summary -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Performance Summary</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="performanceChart" class="performance-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Test Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Test Type:</strong>
                            <span class="badge bg-<?= $test['is_pretest'] ? 'info' : 'success' ?>">
                                <?= $test['is_pretest'] ? 'Pre-test' : 'Post-test' ?>
                            </span>
                        </div>
                        <div class="mb-3">
                            <strong>Completed On:</strong>
                            <br>
                            <?= date('F j, Y g:i A', strtotime($response['submitted_at'])) ?>
                        </div>
                        <div class="mb-3">
                            <strong>Time Taken:</strong>
                            <br>
                            <?php
                            $start_time = strtotime($response['started_at']);
                            $end_time = strtotime($response['submitted_at']);
                            $time_taken = $end_time - $start_time;
                            $hours = floor($time_taken / 3600);
                            $minutes = floor(($time_taken % 3600) / 60);
                            $seconds = $time_taken % 60;

                            if ($hours > 0) {
                                echo sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
                            } else {
                                echo sprintf('%02d:%02d', $minutes, $seconds);
                            }
                            ?>
                        </div>
                        <div class="text-center mt-4">
                            <a href="certificate.php?response_id=<?= $response_id ?>" class="certificate-btn">
                                <i class="bi bi-award me-2"></i> View Certificate
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question Review -->
        <div class="card">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Question Review</h5>
            </div>
            <div class="card-body">
                <?php foreach ($response_details as $index => $detail):
                    $question = $quiz->getQuestion($detail['quiz_question_id']);
                    $answers = $quiz->getQuestionAnswers($detail['quiz_question_id']);

                    // Determine if the answer was correct
                    $is_correct = $detail['points_awarded'] > 0;
                    $is_answered = !empty($detail['answer_ids']) || !empty($detail['answer_text']);
                ?>
                    <div class="question-card card <?= $is_correct ? 'correct' : ($is_answered ? 'incorrect' : 'unanswered') ?>">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h5>
                                    <span class="question-number">Q<?= $index + 1 ?></span>
                                    <?= strip_tags($question['question']) ?>
                                </h5>
                                <span class="badge bg-<?= $is_correct ? 'success' : ($is_answered ? 'danger' : 'warning') ?>">
                                    <?= $is_correct ? 'Correct' : ($is_answered ? 'Incorrect' : 'Unanswered') ?>
                                </span>
                            </div>

                            <?php if (!empty($question['videolink'])): ?>
                                <div class="mb-3">
                                    <video controls width="100%">
                                        <source src="<?= htmlspecialchars($question['videolink']) ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            <?php endif; ?>

                            <div class="answer-review">
                                <h6 class="mb-3">Your Answer:</h6>

                                <?php if ($question['qtype'] == 1 || $question['qtype'] == 2): ?>
                                    <!-- Single or Multiple Choice -->
                                    <?php
                                    $selected_answers = [];
                                    if (!empty($detail['answer_ids'])) {
                                        // Convert PostgreSQL array to PHP array
                                        $selected_answers = str_replace(['{', '}'], '', $detail['answer_ids']);
                                        $selected_answers = explode(',', $selected_answers);
                                    }
                                    ?>

                                    <?php foreach ($answers as $answer): ?>
                                        <?php $is_selected = in_array($answer['id'], $selected_answers); ?>
                                        <?php $is_correct_answer = $answer['correct'] == 't' || $answer['correct'] === true; ?>

                                        <div class="answer-option <?= $is_correct_answer ? 'correct' : ($is_selected ? 'incorrect' : '') ?> <?= $is_selected ? 'selected' : '' ?>">
                                            <div class="form-check">
                                                <input class="form-check-input" type="<?= $question['qtype'] == 1 ? 'radio' : 'checkbox' ?>"
                                                    <?= $is_selected ? 'checked' : '' ?> disabled>
                                                <label class="form-check-label w-100">
                                                    <?= htmlspecialchars($answer['text']) ?>
                                                    <?php if ($is_correct_answer): ?>
                                                        <span class="badge bg-success ms-2">Correct</span>
                                                    <?php endif; ?>
                                                    <?php if ($is_selected && !$is_correct_answer): ?>
                                                        <span class="badge bg-danger ms-2">Your choice</span>
                                                    <?php endif; ?>
                                                </label>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                <?php elseif ($question['qtype'] == 4): ?>
                                    <!-- Fill in the blank -->
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" disabled><?= htmlspecialchars($detail['answer_text'] ?? 'No answer provided') ?></textarea>
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge bg-info">Text response - manually graded</span>
                                    </div>
                                <?php endif; ?>

                                <div class="mt-3">
                                    <strong>Points awarded:</strong> <?= $detail['points_awarded'] ?> / <?= $detail['points_awarded'] > 0 ? $detail['points_awarded'] : '?' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="text-center mt-4">
            <a href="take_test.php?test_id=<?= $test['id'] ?>&participation_id=<?= $response['participation_id'] ?>" class="btn btn-primary me-2">
                <i class="bi bi-arrow-repeat me-1"></i> Retake Test
            </a>
            <a href="certificate.php?response_id=<?= $response_id ?>" class="btn btn-success me-2">
                <i class="bi bi-award me-1"></i> View Certificate
            </a>
            <a href="all_results.php" class="btn btn-outline-primary">
                <i class="bi bi-list-ul me-1"></i> View All Results
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Performance chart
        const ctx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Correct', 'Incorrect', 'Unanswered'],
                datasets: [{
                    data: [<?= $correct_answers ?>, <?= $incorrect_answers ?>, <?= $unanswered ?>],
                    backgroundColor: [
                        'rgba(25, 135, 84, 0.8)',
                        'rgba(220, 53, 69, 0.8)',
                        'rgba(255, 193, 7, 0.8)'
                    ],
                    borderColor: [
                        'rgb(25, 135, 84)',
                        'rgb(220, 53, 69)',
                        'rgb(255, 193, 7)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = Math.round((value / total) * 100);
                                return `${label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>