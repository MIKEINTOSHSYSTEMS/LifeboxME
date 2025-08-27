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

// Get participant details - FIXED table/column references
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

// Get participant's training participations - FIXED column reference
$stmt = $pdo->prepare("
    SELECT tp.*, ts.training_type as training_title, ts.start_date, ts.end_date,
           COALESCE(ts.avg_pre_test_score, 0) as avg_pre_test_score,
           COALESCE(ts.avg_post_test_score, 0) as avg_post_test_score
    FROM training_participation tp
    LEFT JOIN training_sessions ts ON ts.training_id = tp.training_id
    WHERE tp.participant_id = :id
    ORDER BY tp.created_at DESC
");
$stmt->execute([':id' => $participant_id]);
$participations = $stmt->fetchAll();

// Get participant's test responses
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, t.is_pretest
    FROM lbquiz_responses r
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
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
        <h5>Personal Information</h5>
        <table class="table table-sm">
            <tr>
                <th>Participant ID</th>
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
        </table>
    </div>

    <div class="col-md-6">
        <h5>Training Participation</h5>
        <?php if (count($participations) > 0): ?>
            <div class="table-responsive" style="max-height: 300px;">
                <table class="table table-sm">
                    <thead>
                        <tr>
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
                                <td><?= htmlspecialchars($part['training_title'] ?? 'Training #' . $part['training_id']) ?></td>
                                <td>
                                    <?= $part['start_date'] ? date('M j', strtotime($part['start_date'])) : 'N/A' ?> -
                                    <?= $part['end_date'] ? date('M j, Y', strtotime($part['end_date'])) : 'N/A' ?>
                                </td>
                                <td><?= $part['pre_test_score'] !== null ? $part['pre_test_score'] . '%' : 'N/A' ?></td>
                                <td><?= $part['post_test_score'] !== null ? $part['post_test_score'] . '%' : 'N/A' ?></td>
                                <td><?= $part['ceu_points'] ?? '0' ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-muted">No training participations found.</p>
        <?php endif; ?>

        <h5 class="mt-4">Test Responses</h5>
        <?php if (count($responses) > 0): ?>
            <div class="table-responsive" style="max-height: 300px;">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Test</th>
                            <th>Type</th>
                            <th>Score</th>
                            <th>Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($responses as $resp): ?>
                            <tr>
                                <td><?= htmlspecialchars($resp['test_title']) ?></td>
                                <td>
                                    <span class="badge bg-<?= $resp['is_pretest'] ? 'info' : 'primary' ?>">
                                        <?= $resp['is_pretest'] ? 'Pretest' : 'Posttest' ?>
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