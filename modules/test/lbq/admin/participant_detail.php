<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/session_helper.php';

$participant_id = intval($_GET['id'] ?? 0);
if (!$participant_id) {
    http_response_code(400);
    echo 'Participant ID required';
    exit;
}

// Get participant details with complete information
$stmt = $pdo->prepare("
    SELECT p.*,
           c.country_name,
           f.facility_name,
           f.facility_type,
           f.city as facility_city,
           pr.role_name,
           v.venue_name,
           v.city as venue_city,
           v.state_province,
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
    echo 'Participant not found';
    exit;
}

// Get participant's training participations with full session and course info
$stmt = $pdo->prepare("
    SELECT tp.*,
           ts.training_id,
           ts.training_type,
           ts.training_approach,
           ts.program,
           ts.quarter,
           ts.start_date,
           ts.end_date,
           ts.ceu_points as session_ceu,
           ts.remarks,
           tc.course_name,
           tc.course_id,
           tc.description as course_description,
           f2.facility_name as session_facility,
           v2.venue_name as session_venue
    FROM training_participation tp
    LEFT JOIN training_sessions ts ON ts.training_id = tp.training_id
    LEFT JOIN training_courses tc ON tc.course_id = ts.course_id
    LEFT JOIN facilities f2 ON f2.facility_id = ts.facility_id
    LEFT JOIN venues v2 ON v2.venue_id = ts.venue_id
    WHERE tp.participant_id = :id
    ORDER BY ts.start_date DESC NULLS LAST
");
$stmt->execute([':id' => $participant_id]);
$participations = $stmt->fetchAll();

// Get participant's test responses via training_participation
$stmt = $pdo->prepare("
    SELECT r.*, t.title as test_title, t.is_pretest, t.training_id,
           ts2.training_type, tc2.course_name, tp2.participation_id,
           (SELECT COUNT(*) FROM lbquiz_response_details rd WHERE rd.response_id = r.id) as question_count
    FROM lbquiz_responses r
    JOIN training_participation tp2 ON tp2.participation_id = r.participation_id
    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
    LEFT JOIN training_sessions ts2 ON ts2.training_id = t.training_id
    LEFT JOIN training_courses tc2 ON tc2.course_id = ts2.course_id
    WHERE tp2.participant_id = :id
    ORDER BY r.submitted_at DESC NULLS LAST
");
$stmt->execute([':id' => $participant_id]);
$responses = $stmt->fetchAll();
?>
<div class="row g-3">
    <!-- Personal Information -->
    <div class="col-md-5">
        <div class="card h-100">
            <div class="card-header bg-white d-flex align-items-center gap-2">
                <i class="bi bi-person-badge fs-5 text-primary"></i>
                <h5 class="card-title mb-0">Personal Information</h5>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <colgroup>
                        <col width="140">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th class="text-muted fw-normal">Participant ID</th>
                            <td class="fw-semibold"><?= htmlspecialchars($participant['participant_id']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Full Name</th>
                            <td>
                                <?= htmlspecialchars(trim(implode(' ', array_filter([
                                    $participant['title_salutation'] ?? '',
                                    $participant['first_name'],
                                    $participant['middle_name'] ?? '',
                                    $participant['last_name']
                                ])))) ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Sex</th>
                            <td><?= htmlspecialchars($participant['sex_name'] ?? 'N/A') ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Role</th>
                            <td>
                                <span class="badge bg-info bg-opacity-10 text-info fs-6 fw-normal px-2 py-1">
                                    <?= htmlspecialchars($participant['role_name'] ?? 'N/A') ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Facility</th>
                            <td>
                                <?= htmlspecialchars($participant['facility_name'] ?? 'N/A') ?>
                                <?php if (!empty($participant['facility_city'])): ?>
                                    <br><small class="text-muted"><?= htmlspecialchars($participant['facility_city']) ?></small>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Country</th>
                            <td><?= htmlspecialchars($participant['country_name'] ?? 'N/A') ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Venue</th>
                            <td>
                                <?= htmlspecialchars($participant['venue_name'] ?? 'N/A') ?>
                                <?php if (!empty($participant['venue_city'])): ?>
                                    <br><small class="text-muted"><?= htmlspecialchars($participant['venue_city']) ?><?= !empty($participant['state_province']) ? ', ' . htmlspecialchars($participant['state_province']) : '' ?></small>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Email</th>
                            <td>
                                <?php if (!empty($participant['email'])): ?>
                                    <a href="mailto:<?= htmlspecialchars($participant['email']) ?>" class="text-decoration-none">
                                        <?= htmlspecialchars($participant['email']) ?>
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted">N/A</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Phone</th>
                            <td>
                                <?php if (!empty($participant['phone'])): ?>
                                    <a href="tel:<?= htmlspecialchars($participant['phone']) ?>" class="text-decoration-none">
                                        <?= htmlspecialchars($participant['phone']) ?>
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted">N/A</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Registration Date</th>
                            <td><?= $participant['training_date'] ? date('F j, Y', strtotime($participant['training_date'])) : 'N/A' ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Created</th>
                            <td><?= $participant['created_at'] ? date('M j, Y g:i A', strtotime($participant['created_at'])) : 'N/A' ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted fw-normal">Last Updated</th>
                            <td><?= $participant['updated_at'] ? date('M j, Y g:i A', strtotime($participant['updated_at'])) : 'N/A' ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <!-- Training Participation -->
        <div class="card mb-3">
            <div class="card-header bg-white d-flex align-items-center gap-2">
                <i class="bi bi-mortarboard fs-5 text-success"></i>
                <h5 class="card-title mb-0">Training Participation</h5>
                <span class="badge bg-success ms-auto"><?= count($participations) ?> session(s)</span>
            </div>
            <div class="card-body p-0">
                <?php if (count($participations) > 0): ?>
                    <div class="table-responsive" style="max-height: 440px;">
                        <table class="table table-sm table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Course</th>
                                    <th>Session</th>
                                    <th>Quarter</th>
                                    <th>Dates</th>
                                    <th>Pre Test</th>
                                    <th>Post Test</th>
                                    <th>CEU</th>
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
                                            <small class="text-muted">#<?= $part['training_id'] ?>
                                                <?php if (!empty($part['training_approach'])): ?>
                                                    &middot; <?= htmlspecialchars($part['training_approach']) ?>
                                                <?php endif; ?>
                                            </small>
                                        </td>
                                        <td>
                                            <?php if (!empty($part['quarter'])): ?>
                                                <span class="badge bg-light text-dark"><?= htmlspecialchars($part['quarter']) ?></span>
                                            <?php else: ?>
                                                <span class="text-muted">—</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="small">
                                            <?php if ($part['start_date']): ?>
                                                <?= date('M j', strtotime($part['start_date'])) ?> &ndash;
                                                <?= $part['end_date'] ? date('M j, Y', strtotime($part['end_date'])) : 'TBD' ?>
                                            <?php else: ?>
                                                <span class="text-muted">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($part['pre_test_score'] !== null): ?>
                                                <span class="badge bg-<?= $part['pre_test_score'] >= 70 ? 'success' : ($part['pre_test_score'] >= 50 ? 'warning text-dark' : 'danger') ?>">
                                                    <?= $part['pre_test_score'] ?>%
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary bg-opacity-25 text-secondary fw-normal">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($part['post_test_score'] !== null): ?>
                                                <span class="badge bg-<?= $part['post_test_score'] >= 70 ? 'success' : ($part['post_test_score'] >= 50 ? 'warning text-dark' : 'danger') ?>">
                                                    <?= $part['post_test_score'] ?>%
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary bg-opacity-25 text-secondary fw-normal">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $part['ceu_points'] ?? ($part['session_ceu'] ?? '0') ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="p-3 text-muted">
                        <i class="bi bi-info-circle"></i> No training participations found.
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Test Responses -->
        <div class="card">
            <div class="card-header bg-white d-flex align-items-center gap-2">
                <i class="bi bi-file-text fs-5 text-warning"></i>
                <h5 class="card-title mb-0">Test Responses/Results</h5>
                <span class="badge bg-warning text-dark ms-auto"><?= count($responses) ?> response(s)</span>
            </div>
            <div class="card-body p-0">
                <?php if (count($responses) > 0): ?>
                    <div class="table-responsive" style="max-height: 280px;">
                        <table class="table table-sm table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Test</th>
                                    <th>Course</th>
                                    <th>Type</th>
                                    <th>Score</th>
                                    <th>Q's</th>
                                    <th>Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($responses as $resp): ?>
                                    <tr>
                                        <td>
                                            <strong><?= htmlspecialchars($resp['test_title'] ?? 'N/A') ?></strong>
                                            <br>
                                            <small class="text-muted">ID: <?= $resp['test_id'] ?></small>
                                        </td>
                                        <td>
                                            <?= htmlspecialchars($resp['course_name'] ?? 'N/A') ?>
                                            <br>
                                            <small class="text-muted"><?= htmlspecialchars($resp['training_type'] ?? '') ?></small>
                                        </td>
                                        <td>
                                            <span class="badge bg-<?= $resp['is_pretest'] ? 'info' : 'primary' ?>">
                                                <?= $resp['is_pretest'] ? 'Pre Test' : 'Post Test' ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?php if ($resp['submitted_at']): ?>
                                                <?php $scoreVal = floatval($resp['score'] ?? 0); ?>
                                                <span class="badge bg-<?= $scoreVal >= 70 ? 'success' : ($scoreVal >= 50 ? 'warning text-dark' : 'danger') ?> fs-6">
                                                    <?= round($scoreVal, 1) ?>%
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary bg-opacity-25 text-secondary fw-normal">Pending</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $resp['question_count'] ?? 0 ?></td>
                                        <td class="small">
                                            <?php if ($resp['submitted_at']): ?>
                                                <?= date('M j, Y', strtotime($resp['submitted_at'])) ?>
                                                <br>
                                                <small class="text-muted"><?= date('g:i A', strtotime($resp['submitted_at'])) ?></small>
                                            <?php else: ?>
                                                <span class="text-muted">Not submitted</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="p-3 text-muted">
                        <i class="bi bi-info-circle"></i> No test responses found.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Performance Summary -->
<div class="row g-3 mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-white d-flex align-items-center gap-2">
                <i class="bi bi-graph-up-arrow fs-5 text-danger"></i>
                <h5 class="card-title mb-0">Performance Summary</h5>
            </div>
            <div class="card-body">
                <?php
                $preTests = array_filter($responses, fn($r) => !empty($r['is_pretest']) && $r['submitted_at']);
                $postTests = array_filter($responses, fn($r) => empty($r['is_pretest']) && $r['submitted_at']);
                $totalTests = count($responses);
                $completedTests = count(array_filter($responses, fn($r) => $r['submitted_at']));
                $avgPre = $preTests ? round(array_sum(array_column($preTests, 'score')) / count($preTests), 1) : 0;
                $avgPost = $postTests ? round(array_sum(array_column($postTests, 'score')) / count($postTests), 1) : 0;
                $improvement = $avgPost - $avgPre;
                ?>
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <div class="p-3 rounded-3 text-white h-100 d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <small class="opacity-75">Total Tests Taken</small>
                            <h2 class="mb-0 mt-1 fw-bold"><?= $totalTests ?></h2>
                            <small class="opacity-75"><?= $completedTests ?> completed</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 rounded-3 text-white h-100 d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                            <small class="opacity-75">Average Pre-Test</small>
                            <h2 class="mb-0 mt-1 fw-bold"><?= $avgPre ?>%</h2>
                            <small class="opacity-75"><?= count($preTests) ?> attempt(s)</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 rounded-3 text-white h-100 d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                            <small class="opacity-75">Average Post-Test</small>
                            <h2 class="mb-0 mt-1 fw-bold"><?= $avgPost ?>%</h2>
                            <small class="opacity-75"><?= count($postTests) ?> attempt(s)</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 rounded-3 text-white h-100 d-flex flex-column align-items-center justify-content-center <?= $improvement >= 0 ? '' : '' ?>" style="background: <?= $improvement >= 0 ? 'linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%)' : 'linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%)' ?>;">
                            <small class="opacity-75">Improvement</small>
                            <h2 class="mb-0 mt-1 fw-bold"><?= ($improvement > 0 ? '+' : '') . $improvement ?>%</h2>
                            <small class="opacity-75"><?= $improvement >= 0 ? 'Progressing' : 'Needs attention' ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
