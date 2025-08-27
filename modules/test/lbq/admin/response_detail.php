<?php
session_start();
if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
require __DIR__ . '/../src/db.php';
require __DIR__ . '/../src/model/Quiz.php';
$quiz = new Quiz($pdo);

$response_id = intval($_GET['id'] ?? 0);
if (!$response_id) {
    header('Location: responses.php');
    exit;
}

// Get response details
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, t.training_id, t.description as test_description,
           t.time_limit_minutes, t.is_pretest, t.is_active,
           ts.training_type as training_title,
           tp.participant_id, part.first_name, part.last_name, part.email,
           part.phone, part.title_salutation
    FROM lbquiz_responses r 
    JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_participation tp ON tp.participation_id = r.participation_id
    LEFT JOIN training_participants part ON part.participant_id = tp.participant_id
    LEFT JOIN training_sessions ts ON ts.training_id = t.training_id
    WHERE r.id = :id
");
$stmt->execute([':id' => $response_id]);
$response = $stmt->fetch();

if (!$response) {
    header('Location: responses.php');
    exit;
}

// Get response details with questions and answers - FIXED THE QUERY
$stmt = $pdo->prepare("
    SELECT rd.*, q.question, q.qtype, 
           tq.weight, tq.position,
           -- Get all answers for this question
           (SELECT json_agg(json_build_object('id', a.id, 'text', a.text, 'correct', a.correct))
            FROM quiz_answers a 
            WHERE a.questionid = q.id) as all_answers,
           -- Get selected answer IDs as array
           rd.answer_ids as selected_answer_ids
    FROM lbquiz_response_details rd
    JOIN lbquiz_test_questions tq ON tq.test_id = rd.response_id AND tq.quiz_question_id = rd.quiz_question_id
    JOIN quiz_questions q ON q.id = rd.quiz_question_id
    WHERE rd.response_id = :id
    ORDER BY tq.position, rd.id
");
$stmt->execute([':id' => $response_id]);
$response_details = $stmt->fetchAll();

// Process the answers
foreach ($response_details as &$detail) {
    // Decode the JSON arrays
    $detail['all_answers'] = json_decode($detail['all_answers'] ?? '[]', true) ?: [];
    $detail['selected_answer_ids'] = $detail['selected_answer_ids'] ?: [];

    // For single answer questions, convert to array
    if (!is_array($detail['selected_answer_ids']) && !empty($detail['selected_answer_ids'])) {
        $detail['selected_answer_ids'] = [$detail['selected_answer_ids']];
    }

    // Calculate points for this question
    $detail['calculated_points'] = 0;
    $detail['max_points'] = $detail['weight'];

    if (!empty($detail['selected_answer_ids']) && !empty($detail['all_answers'])) {
        $correct_answers = array_filter($detail['all_answers'], function ($a) {
            return $a['correct'];
        });
        $selected_correct = array_filter($detail['all_answers'], function ($a) use ($detail) {
            return $a['correct'] && in_array($a['id'], $detail['selected_answer_ids']);
        });
        $selected_incorrect = array_filter($detail['all_answers'], function ($a) use ($detail) {
            return !$a['correct'] && in_array($a['id'], $detail['selected_answer_ids']);
        });

        // Simple scoring: points based on correct selections
        if (count($selected_incorrect) === 0) {
            $detail['calculated_points'] = (count($selected_correct) / max(1, count($correct_answers))) * $detail['weight'];
        }
    }
}

// Calculate score breakdown
$total_possible = 0;
$total_earned = 0;

foreach ($response_details as $detail) {
    $total_possible += $detail['weight'];
    $total_earned += $detail['points_awarded'] ?? $detail['calculated_points'];
}

$calculated_score = $total_possible > 0 ? round(($total_earned / $total_possible) * 100, 2) : 0;

// Question types
$qtypes = [
    1 => 'Single Choice',
    2 => 'Multiple Choice',
    3 => 'Decision Matrix',
    4 => 'Fill in Blanks'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Response Details - LifeBox Test Center</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .question-card {
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .question-card.correct {
            border-left-color: var(--success-color);
            background-color: rgba(40, 167, 69, 0.05);
        }

        .question-card.incorrect {
            border-left-color: var(--danger-color);
            background-color: rgba(220, 53, 69, 0.05);
        }

        .question-card.partial {
            border-left-color: var(--warning-color);
            background-color: rgba(255, 193, 7, 0.05);
        }

        .answer-item {
            padding: 0.75rem;
            border-radius: 8px;
            margin-bottom: 0.5rem;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .answer-item.correct {
            border-color: var(--success-color);
            background-color: rgba(40, 167, 69, 0.1);
        }

        .answer-item.selected {
            border-color: var(--primary-color);
            background-color: rgba(0, 121, 165, 0.1);
        }

        .answer-item.incorrect {
            border-color: var(--danger-color);
            background-color: rgba(220, 53, 69, 0.1);
        }

        .answer-item.selected-incorrect {
            border-color: var(--danger-color);
            background-color: rgba(220, 53, 69, 0.2);
        }

        .score-badge {
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 20px;
        }

        .timeline {
            border-left: 3px solid var(--primary-color);
            margin-left: 1rem;
            padding-left: 2rem;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -2.4rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--primary-color);
            border: 3px solid white;
            box-shadow: 0 0 0 2px var(--primary-color);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div>
                        <h1 class="h2">Response Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="responses.php">Responses</a></li>
                                <li class="breadcrumb-item active">Response #<?= $response_id ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="responses.php" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to Responses
                        </a>
                    </div>
                </div>

                <!-- Response Summary -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Test Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Test:</strong> <?= htmlspecialchars($response['test_title']) ?><br>
                                        <strong>Type:</strong>
                                        <span class="badge bg-<?= $response['is_pretest'] ? 'info' : 'primary' ?>">
                                            <?= $response['is_pretest'] ? 'Pretest' : 'Posttest' ?>
                                        </span><br>
                                        <strong>Training:</strong> <?= htmlspecialchars($response['training_title'] ?? 'N/A') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Time Limit:</strong>
                                        <?= $response['time_limit_minutes'] ? $response['time_limit_minutes'] . ' minutes' : 'No limit' ?><br>
                                        <strong>Status:</strong>
                                        <span class="badge bg-<?= $response['is_active'] ? 'success' : 'secondary' ?>">
                                            <?= $response['is_active'] ? 'Active' : 'Inactive' ?>
                                        </span><br>
                                        <strong>Test ID:</strong> <?= $response['test_id'] ?>
                                    </div>
                                </div>
                                <?php if ($response['test_description']): ?>
                                    <hr>
                                    <strong>Description:</strong><br>
                                    <?= htmlspecialchars($response['test_description']) ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Score Summary</h5>
                            </div>
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <span class="score-badge badge bg-<?=
                                                                        $response['score'] >= 70 ? 'success' : ($response['score'] >= 50 ? 'warning' : 'danger')
                                                                        ?>">
                                        <?= $response['score'] ?>%
                                    </span>
                                </div>
                                <div class="progress mb-2" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?= $response['score'] ?>%;"
                                        aria-valuenow="<?= $response['score'] ?>"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                                <small class="text-muted">
                                    <?= round($total_earned, 2) ?> points earned of <?= $total_possible ?> possible
                                </small>
                                <?php if (abs($response['score'] - $calculated_score) > 0.1): ?>
                                    <div class="alert alert-warning mt-2 p-2">
                                        <small>
                                            <i class="bi bi-exclamation-triangle"></i>
                                            Score discrepancy detected. Calculated: <?= $calculated_score ?>%
                                        </small>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Participant Information -->
                <?php if ($response['participant_id']): ?>
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">Participant Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Name:</strong>
                                    <?= htmlspecialchars($response['title_salutation'] ?? '') ?>
                                    <?= htmlspecialchars($response['first_name']) ?>
                                    <?= htmlspecialchars($response['last_name']) ?><br>
                                    <strong>Participant ID:</strong> <?= $response['participant_id'] ?>
                                </div>
                                <div class="col-md-6">
                                    <strong>Email:</strong> <?= htmlspecialchars($response['email'] ?? 'N/A') ?><br>
                                    <strong>Phone:</strong> <?= htmlspecialchars($response['phone'] ?? 'N/A') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Timeline -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Timeline</h5>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item">
                                <strong>Started:</strong><br>
                                <?= $response['started_at'] ? date('M j, Y g:i A', strtotime($response['started_at'])) : 'N/A' ?>
                            </div>
                            <?php if ($response['submitted_at']): ?>
                                <div class="timeline-item">
                                    <strong>Submitted:</strong><br>
                                    <?= date('M j, Y g:i A', strtotime($response['submitted_at'])) ?>
                                    <?php if ($response['started_at']): ?>
                                        <br>
                                        <small class="text-muted">
                                            Duration:
                                            <?php
                                            $start = new DateTime($response['started_at']);
                                            $end = new DateTime($response['submitted_at']);
                                            $interval = $start->diff($end);
                                            echo $interval->format('%h hours %i minutes %s seconds');
                                            ?>
                                        </small>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="timeline-item">
                                <strong>Created:</strong><br>
                                <?= date('M j, Y g:i A', strtotime($response['created_at'])) ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Questions and Answers -->
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Questions & Answers</h5>
                        <span class="badge bg-secondary">
                            <?= count($response_details) ?> Questions
                        </span>
                    </div>
                    <div class="card-body">
                        <?php if (count($response_details) > 0): ?>
                            <?php foreach ($response_details as $index => $detail):
                                $points = $detail['points_awarded'] ?? $detail['calculated_points'];
                                $is_correct = $points >= $detail['weight'];
                                $is_partial = $points > 0 && $points < $detail['weight'];
                                $card_class = $is_correct ? 'correct' : ($is_partial ? 'partial' : 'incorrect');
                            ?>
                                <div class="card question-card mb-4 <?= $card_class ?>">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <h6 class="card-title mb-0">
                                                Question #<?= $index + 1 ?>
                                                <span class="badge bg-info"><?= $qtypes[$detail['qtype']] ?? 'Unknown' ?></span>
                                            </h6>
                                            <div class="text-end">
                                                <span class="badge bg-<?=
                                                                        $is_correct ? 'success' : ($is_partial ? 'warning' : 'danger')
                                                                        ?>">
                                                    <?= round($points, 2) ?> / <?= $detail['weight'] ?> points
                                                </span>
                                                <span class="badge bg-secondary ms-1">
                                                    Weight: <?= $detail['weight'] ?>
                                                </span>
                                            </div>
                                        </div>

                                        <p class="card-text mb-3"><?= nl2br(htmlspecialchars($detail['question'])) ?></p>

                                        <?php if (!empty($detail['all_answers'])): ?>
                                            <div class="mb-3">
                                                <strong>Answers:</strong>
                                                <?php foreach ($detail['all_answers'] as $answer):
                                                    $is_selected = in_array($answer['id'], $detail['selected_answer_ids']);
                                                    $answer_class = '';
                                                    if ($answer['correct']) $answer_class = 'correct';
                                                    if ($is_selected && !$answer['correct']) $answer_class = 'selected-incorrect';
                                                    if ($is_selected && $answer['correct']) $answer_class = 'selected';
                                                ?>
                                                    <div class="answer-item <?= $answer_class ?>">
                                                        <?= nl2br(htmlspecialchars($answer['text'])) ?>
                                                        <?php if ($answer['correct']): ?>
                                                            <span class="badge bg-success ms-2">Correct Answer</span>
                                                        <?php endif; ?>
                                                        <?php if ($is_selected): ?>
                                                            <span class="badge bg-primary ms-2">Selected</span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php elseif (!empty($detail['answer_text'])): ?>
                                            <div class="mb-3">
                                                <strong>Participant's Answer:</strong>
                                                <div class="answer-item selected">
                                                    <?= nl2br(htmlspecialchars($detail['answer_text'])) ?>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="alert alert-warning">
                                                No answer provided or question format not recognized
                                            </div>
                                        <?php endif; ?>

                                        <div class="mt-3">
                                            <strong>Points Awarded:</strong>
                                            <?= round($points, 2) ?> of <?= $detail['weight'] ?>
                                            <?php if ($points > 0): ?>
                                                <span class="badge bg-<?=
                                                                        $points == $detail['weight'] ? 'success' : 'warning'
                                                                        ?>">
                                                    <?= round(($points / $detail['weight']) * 100, 1) ?>%
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="alert alert-info">
                                No question details found for this response.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Raw Data (for debugging) -->
                <div class="card mt-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">
                            <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#rawData">
                                <i class="bi bi-code-slash"></i> Raw Response Data
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="rawData">
                        <div class="card-body">
                            <pre class="bg-light p-3 rounded" style="font-size: 0.8rem;"><?= htmlspecialchars(json_encode($response, JSON_PRETTY_PRINT)) ?></pre>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>