<?php
session_start();
if (empty($_SESSION['admin'])) {
    http_response_code(403);
    echo "Access denied";
    exit;
}
require __DIR__ . '/../src/db.php';

$participant_id = intval($_GET['id'] ?? 0);
if (!$participant_id) {
    http_response_code(400);
    echo "Participant ID required";
    exit;
}

// Get participant details with complete information
$stmt = $pdo->prepare("
    SELECT p.*, 
           c.country_name, 
           f.facility_name,
           pr.role_name,
           v.venue_name,
           s.sex_name
    FROM training_participants p
    LEFT JOIN countries c ON c.country_id = p.country_id
    LEFT JOIN facilities f ON f.facility_id = p.facility_id
    LEFT JOIN participant_role pr ON pr.role_id = p.role_id
    LEFT JOIN venues v ON v.venue_id = p.venue_id
    LEFT JOIN sex s ON s.sex_id = p.sex_id
    WHERE p.participant_id = :id
");
$stmt->execute([':id' => $participant_id]);
$participant = $stmt->fetch();

if (!$participant) {
    http_response_code(404);
    echo "Participant not found";
    exit;
}

// Get participant's training participations with course information
$stmt = $pdo->prepare("
    SELECT tp.*, ts.training_id, ts.training_type, ts.start_date, ts.end_date,
           tc.course_name, tc.course_id,
           COALESCE(ts.avg_pre_test_score, 0) as avg_pre_test_score,
           COALESCE(ts.avg_post_test_score, 0) as avg_post_test_score
    FROM training_participation tp
    LEFT JOIN training_sessions ts ON ts.training_id = tp.training_id
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    WHERE tp.participant_id = :id
    ORDER BY ts.start_date DESC
");
$stmt->execute([':id' => $participant_id]);
$participations = $stmt->fetchAll();

// Get participant's test responses with detailed information
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, t.is_pretest, t.training_id,
           ts.training_type, tc.course_name,
           (SELECT COUNT(*) FROM lbquiz_response_details rd WHERE rd.response_id = r.id) as question_count
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_sessions ts ON ts.training_id = t.training_id
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    WHERE r.userid = :id OR r.participation_id IN (
        SELECT participation_id FROM training_participation WHERE participant_id = :id
    )
    ORDER BY r.submitted_at DESC
");
$stmt->execute([':id' => $participant_id]);
$responses = $stmt->fetchAll();
?>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Personal Information</h5>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <tr>
                        <th width="140">Participant ID</th>
                        <td><?= htmlspecialchars($participant['participant_id']) ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>
                            <?= htmlspecialchars($participant['title_salutation'] ?? '') ?>
                            <?= htmlspecialchars($participant['first_name']) ?>
                            <?= htmlspecialchars($participant['middle_name'] ?? '') ?>
                            <?= htmlspecialchars($participant['last_name']) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Sex</th>
                        <td><?= htmlspecialchars($participant['sex_name'] ?? 'N/A') ?></td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td><?= htmlspecialchars($participant['role_name'] ?? 'N/A') ?></td>
                    </tr>
                    <tr>
                        <th>Facility</th>
                        <td><?= htmlspecialchars($participant['facility_name'] ?? 'N/A') ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= htmlspecialchars($participant['email'] ?? 'N/A') ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?= htmlspecialchars($participant['phone'] ?? 'N/A') ?></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><?= htmlspecialchars($participant['country_name'] ?? 'N/A') ?></td>
                    </tr>
                    <tr>
                        <th>Venue</th>
                        <td><?= htmlspecialchars($participant['venue_name'] ?? 'N/A') ?></td>
                    </tr>
                    <tr>
                        <th>Registration Date</th>
                        <td><?= $participant['training_date'] ? date('M j, Y', strtotime($participant['training_date'])) : 'N/A' ?></td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td><?= $participant['created_at'] ? date('M j, Y g:i A', strtotime($participant['created_at'])) : 'N/A' ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Training Participation -->
        <div class="card mb-4">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Training Participation</h5>
            </div>
            <div class="card-body">
                <?php if (count($participations) > 0): ?>
                    <div class="table-responsive" style="max-height: 300px;">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Training</th>
                                    <th>Dates</th>
                                    <th>Pre Test</th>
                                    <th>Post Test</th>
                                    <th>CEU Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($participations as $part): ?>
                                    <tr>
                                        <td>
                                            <strong><?= htmlspecialchars($part['course_name'] ?? 'N/A') ?></strong>
                                            <br>
                                            <small class="text-muted">ID: <?= $part['course_id'] ?? 'N/A' ?></small>
                                        </td>
                                        <td>
                                            <?= htmlspecialchars($part['training_type'] ?? 'Training') ?>
                                            <br>
                                            <small class="text-muted">Session: <?= $part['training_id'] ?></small>
                                        </td>
                                        <td>
                                            <?= $part['start_date'] ? date('M j', strtotime($part['start_date'])) : 'N/A' ?> -
                                            <?= $part['end_date'] ? date('M j, Y', strtotime($part['end_date'])) : 'N/A' ?>
                                        </td>
                                        <td>
                                            <?php if ($part['pre_test_score'] !== null): ?>
                                                <span class="badge bg-<?= $part['pre_test_score'] >= 70 ? 'success' : ($part['pre_test_score'] >= 50 ? 'warning' : 'danger') ?>">
                                                    <?= $part['pre_test_score'] ?>%
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($part['post_test_score'] !== null): ?>
                                                <span class="badge bg-<?= $part['post_test_score'] >= 70 ? 'success' : ($part['post_test_score'] >= 50 ? 'warning' : 'danger') ?>">
                                                    <?= $part['post_test_score'] ?>%
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $part['ceu_points'] ?? '0' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p class="text-muted">No training participations found.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Test Responses -->
        <div class="card">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Test Responses</h5>
            </div>
            <div class="card-body">
                <?php if (count($responses) > 0): ?>
                    <div class="table-responsive" style="max-height: 300px;">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Test</th>
                                    <th>Course</th>
                                    <th>Type</th>
                                    <th>Score</th>
                                    <th>Questions</th>
                                    <th>Submitted At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($responses as $resp): ?>
                                    <tr>
                                        <td>
                                            <strong><?= htmlspecialchars($resp['test_title']) ?></strong>
                                            <br>
                                            <small class="text-muted">ID: <?= $resp['test_id'] ?></small>
                                        </td>
                                        <td>
                                            <?= htmlspecialchars($resp['course_name'] ?? 'N/A') ?>
                                            <br>
                                            <small class="text-muted">Training: <?= htmlspecialchars($resp['training_type'] ?? 'N/A') ?></small>
                                        </td>
                                        <td>
                                            <span class="badge bg-<?= $resp['is_pretest'] ? 'info' : 'primary' ?>">
                                                <?= $resp['is_pretest'] ? 'Pre Test' : 'Post Test' ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?php if ($resp['submitted_at']): ?>
                                                <span class="badge bg-<?= $resp['score'] >= 70 ? 'success' : ($resp['score'] >= 50 ? 'warning' : 'danger') ?>">
                                                    <?= $resp['score'] ?>%
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Not submitted</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $resp['question_count'] ?></td>
                                        <td><?= $resp['submitted_at'] ? date('M j, Y g:i A', strtotime($resp['submitted_at'])) : 'Not submitted' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p class="text-muted">No test responses found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Performance Summary -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Performance Summary</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="stats-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <h6>Total Tests Taken</h6>
                            <h3><?= count($responses) ?></h3>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="stats-card" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                            <h6>Average Pre Test Score</h6>
                            <h3>
                                <?php
                                $preTests = array_filter($responses, fn($r) => $r['is_pretest'] && $r['submitted_at']);
                                $avgPre = $preTests ? array_sum(array_column($preTests, 'score')) / count($preTests) : 0;
                                echo round($avgPre, 1) . '%';
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="stats-card" style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);">
                            <h6>Average Post Test Score</h6>
                            <h3>
                                <?php
                                $postTests = array_filter($responses, fn($r) => !$r['is_pretest'] && $r['submitted_at']);
                                $avgPost = $postTests ? array_sum(array_column($postTests, 'score')) / count($postTests) : 0;
                                echo round($avgPost, 1) . '%';
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="stats-card" style="background: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);">
                            <h6>Improvement</h6>
                            <h3>
                                <?php
                                $improvement = $avgPost - $avgPre;
                                echo ($improvement > 0 ? '+' : '') . round($improvement, 1) . '%';
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>