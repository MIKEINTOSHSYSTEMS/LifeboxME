<?php
require __DIR__ . '/../src/db.php';
require __DIR__ . '/session_helper.php';

$page       = max(1, intval($_GET['page'] ?? 1));
$limit      = max(5, min(200, intval($_GET['limit'] ?? 10)));
$offset     = ($page - 1) * $limit;

$search      = trim($_GET['search'] ?? '');
$country_id  = intval($_GET['country_id'] ?? 0);
$facility_id = intval($_GET['facility_id'] ?? 0);
$role_id     = intval($_GET['role_id'] ?? 0);

$sort_column = $_GET['sort']  ?? 'participant_id';
$order       = $_GET['order'] ?? 'DESC';

$allowed_columns = [
    'participant_id', 'title_salutation', 'first_name', 'middle_name', 'last_name',
    'sex_name', 'role_name', 'facility_name', 'phone', 'email',
    'country_name', 'venue_name', 'training_date', 'created_at', 'updated_at'
];
if (!in_array($sort_column, $allowed_columns, true)) {
    $sort_column = 'participant_id';
}
$order = strtoupper($order) === 'ASC' ? 'ASC' : 'DESC';

$sql = "
    SELECT p.*,
           c.country_name,
           f.facility_name,
           pr.role_name,
           v.venue_name,
           s.sex_name
    FROM training_participants p
    LEFT JOIN countries c ON c.country_id    = p.country_id
    LEFT JOIN facilities f ON f.facility_id  = p.facility_id
    LEFT JOIN participant_role pr ON pr.role_id = p.role_id
    LEFT JOIN venues v ON v.venue_id          = p.venue_id
    LEFT JOIN sex s ON s.sex_id               = p.sex_id
    WHERE 1 = 1
";

$count_sql = "
    SELECT COUNT(*)
    FROM training_participants p
    WHERE 1 = 1
";

$params       = [];
$count_params = [];

if (!empty($search)) {
    $searchCond = " AND (p.first_name ILIKE :search OR p.last_name ILIKE :search OR p.email ILIKE :search OR p.phone ILIKE :search)";
    $sql       .= $searchCond;
    $count_sql .= $searchCond;
    $params[':search']       = $count_params[':search']       = '%' . $search . '%';
}

if ($country_id > 0) {
    $sql       .= " AND p.country_id = :country_id";
    $count_sql .= " AND p.country_id = :country_id";
    $params[':country_id']   = $count_params[':country_id']   = $country_id;
}

if ($facility_id > 0) {
    $sql       .= " AND p.facility_id = :facility_id";
    $count_sql .= " AND p.facility_id = :facility_id";
    $params[':facility_id']  = $count_params[':facility_id']  = $facility_id;
}

if ($role_id > 0) {
    $sql       .= " AND p.role_id = :role_id";
    $count_sql .= " AND p.role_id = :role_id";
    $params[':role_id']      = $count_params[':role_id']      = $role_id;
}

$sql .= " ORDER BY {$sort_column} {$order} LIMIT :limit OFFSET :offset";

$params[':limit']  = $limit;
$params[':offset'] = $offset;

$stmt = $pdo->prepare($sql);
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value, in_array($key, [':limit', ':offset']) ? PDO::PARAM_INT : PDO::PARAM_STR);
}
$stmt->execute();
$participants = $stmt->fetchAll();

$stmt = $pdo->prepare($count_sql);
foreach ($count_params as $key => $value) {
    $stmt->bindValue($key, $value);
}
$stmt->execute();
$total_count = (int)$stmt->fetchColumn();
$total_pages = max(1, (int)ceil($total_count / $limit));

$countries  = $pdo->query("SELECT country_id, country_name FROM countries ORDER BY country_name")->fetchAll();
$facilities = $pdo->query("SELECT facility_id, facility_name FROM facilities ORDER BY facility_name")->fetchAll();
$roles      = $pdo->query("SELECT role_id, role_name FROM participant_role ORDER BY role_name")->fetchAll();

function sortLink($column, $label, $currentSort, $currentOrder)
{
    $nextOrder = ($currentSort === $column && $currentOrder === 'ASC') ? 'DESC' : 'ASC';
    $arrow     = '';
    if ($currentSort === $column) {
        $arrow = $currentOrder === 'ASC'
            ? ' <i class="bi bi-arrow-up-short"></i>'
            : ' <i class="bi bi-arrow-down-short"></i>';
    } else {
        $arrow = ' <i class="bi bi-arrow-down-up text-muted opacity-50"></i>';
    }
    $q = array_merge($_GET, ['sort' => $column, 'order' => $nextOrder]);
    return '<a href="?' . http_build_query($q) . '" class="text-decoration-none text-dark d-flex align-items-center gap-1">' . htmlspecialchars($label) . $arrow . '</a>';
}

$flash_message = $_SESSION['flash_message'] ?? '';
$flash_type = $_SESSION['flash_type'] ?? 'success';
unset($_SESSION['flash_message'], $_SESSION['flash_type']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Participants - LifeBox Test Center</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">

    <style>
        th.sortable {
            white-space: nowrap;
            user-select: none;
        }
        th.sortable a:hover {
            color: #0d6efd !important;
        }
        .text-truncate-cell {
            max-width: 180px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .text-truncate-cell-sm {
            max-width: 120px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .participant-row {
            cursor: pointer;
        }
        .participant-row:hover {
            background-color: rgba(13, 110, 253, 0.05) !important;
        }
        .participant-row.selected {
            background-color: rgba(13, 110, 253, 0.12) !important;
        }
        .checkbox-column {
            width: 40px;
            text-align: center;
            vertical-align: middle;
        }
        .checkbox-column .form-check-input {
            cursor: pointer;
        }
        th .form-check-input {
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .table-wrap {
                font-size: 0.85rem;
            }
            .text-truncate-cell {
                max-width: 100px;
            }
            .text-truncate-cell-sm {
                max-width: 70px;
            }
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
            <h1 class="h2">Training Participants</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button class="btn btn-sm btn-outline-secondary me-2" onclick="exportSelected()" id="exportBtn" disabled>
                    <i class="bi bi-download"></i> Export Selected (<span id="selectedCount">0</span>)
                </button>
                <a href="dashboard.php" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Dashboard
                </a>
            </div>
        </div>

        <?php if ($flash_message): ?>
        <div class="alert alert-<?= $flash_type ?> alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i> <?= htmlspecialchars($flash_message) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- Filters -->
        <div class="card mb-4">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0"><i class="bi bi-funnel"></i> Filter Participants</h5>
            </div>
            <div class="card-body">
                <form method="get" class="row g-3">
                    <div class="col-md-4">
                        <label for="search" class="form-label">Search</label>
                        <input type="text" class="form-control" id="search" name="search"
                            value="<?= htmlspecialchars($search) ?>"
                            placeholder="Name, email, or phone...">
                    </div>
                    <div class="col-md-2">
                        <label for="country_id" class="form-label">Country</label>
                        <select class="form-select" id="country_id" name="country_id">
                            <option value="">All Countries</option>
                            <?php foreach ($countries as $c): ?>
                                <option value="<?= $c['country_id'] ?>" <?= $country_id == $c['country_id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($c['country_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="facility_id" class="form-label">Facility</label>
                        <select class="form-select" id="facility_id" name="facility_id">
                            <option value="">All Facilities</option>
                            <?php foreach ($facilities as $f): ?>
                                <option value="<?= $f['facility_id'] ?>" <?= $facility_id === (int)$f['facility_id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($f['facility_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="role_id" class="form-label">Role</label>
                        <select class="form-select" id="role_id" name="role_id">
                            <option value="">All Roles</option>
                            <?php foreach ($roles as $r): ?>
                                <option value="<?= $r['role_id'] ?>" <?= $role_id === (int)$r['role_id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($r['role_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="limit" class="form-label">Per page</label>
                        <select class="form-select" id="limit" name="limit">
                            <?php foreach ([5, 10, 20, 50, 100] as $pp): ?>
                                <option value="<?= $pp ?>" <?= $limit === $pp ? 'selected' : '' ?>><?= $pp ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-funnel"></i> Apply Filters</button>
                        <a href="participants.php" class="btn btn-outline-secondary">Clear</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Participants Table -->
        <div class="card">
            <div class="card-header bg-white d-flex justify-content-between align-items-center flex-wrap gap-2">
                <h5 class="card-title mb-0">
                    Participants
                    <span class="badge bg-secondary"><?= $total_count ?> total</span>
                </h5>
                <div class="d-flex align-items-center gap-2">
                    <small class="text-muted">
                        Showing <?= $offset + 1 ?>&ndash;<?= min($offset + $limit, $total_count) ?> of <?= $total_count ?>
                    </small>
                </div>
            </div>
            <div class="card-body p-0">
                <?php if (count($participants) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 table-wrap" id="participantsTable">
                            <thead class="table-light">
                                <tr>
                                    <th class="checkbox-column">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                        </div>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'participant_id' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('participant_id', 'ID', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'title_salutation' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('title_salutation', 'Title', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'first_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('first_name', 'First Name', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'middle_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('middle_name', 'Middle', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'last_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('last_name', 'Last Name', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'sex_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('sex_name', 'Sex', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'role_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('role_name', 'Role', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'facility_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('facility_name', 'Facility', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'phone' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('phone', 'Phone', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'email' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('email', 'Email', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'country_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('country_name', 'Country', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'venue_name' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('venue_name', 'Venue', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'training_date' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('training_date', 'Reg. Date', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'created_at' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('created_at', 'Created', $sort_column, $order) ?>
                                    </th>
                                    <th class="sortable <?= $sort_column === 'updated_at' ? 'highlight-sort' : '' ?>">
                                        <?= sortLink('updated_at', 'Updated', $sort_column, $order) ?>
                                    </th>
                                    <th style="width:60px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($participants as $p): ?>
                                <tr class="participant-row" data-participant-id="<?= htmlspecialchars($p['participant_id']) ?>">
                                    <td class="checkbox-column" onclick="event.stopPropagation()">
                                        <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" value="<?= htmlspecialchars($p['participant_id']) ?>">
                                        </div>
                                    </td>
                                    <td class="fw-semibold"><?= htmlspecialchars($p['participant_id']) ?></td>
                                    <td><?= htmlspecialchars($p['title_salutation'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?></td>
                                    <td class="text-truncate-cell" title="<?= htmlspecialchars($p['first_name']) ?>">
                                        <?= htmlspecialchars($p['first_name']) ?>
                                    </td>
                                    <td class="text-truncate-cell-sm" title="<?= htmlspecialchars($p['middle_name'] ?? '') ?>">
                                        <?= htmlspecialchars($p['middle_name'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?>
                                    </td>
                                    <td class="text-truncate-cell" title="<?= htmlspecialchars($p['last_name']) ?>">
                                        <?= htmlspecialchars($p['last_name']) ?>
                                    </td>
                                    <td><?= htmlspecialchars($p['sex_name'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?></td>
                                    <td>
                                        <span class="text-truncate-cell d-inline-block" title="<?= htmlspecialchars($p['role_name'] ?? '') ?>">
                                            <?= htmlspecialchars($p['role_name'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-truncate-cell d-inline-block" title="<?= htmlspecialchars($p['facility_name'] ?? '') ?>">
                                            <?= htmlspecialchars($p['facility_name'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?>
                                        </span>
                                    </td>
                                    <td class="text-truncate-cell-sm" title="<?= htmlspecialchars($p['phone'] ?? '') ?>">
                                        <?= htmlspecialchars($p['phone'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?>
                                    </td>
                                    <td>
                                        <span class="text-truncate-cell d-inline-block" title="<?= htmlspecialchars($p['email'] ?? '') ?>">
                                            <?= htmlspecialchars($p['email'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?>
                                        </span>
                                    </td>
                                    <td><?= htmlspecialchars($p['country_name'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?></td>
                                    <td><?= htmlspecialchars($p['venue_name'] ?? '') ?: '<span class="text-muted">&mdash;</span>' ?></td>
                                    <td class="text-nowrap"><?= $p['training_date'] ? date('M j, Y', strtotime($p['training_date'])) : '<span class="text-muted">&mdash;</span>' ?></td>
                                    <td class="text-nowrap small"><?= $p['created_at'] ? date('M j, Y', strtotime($p['created_at'])) : '<span class="text-muted">&mdash;</span>' ?></td>
                                    <td class="text-nowrap small"><?= $p['updated_at'] ? date('M j, Y', strtotime($p['updated_at'])) : '<span class="text-muted">&mdash;</span>' ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary view-participant"
                                            data-participant-id="<?= htmlspecialchars($p['participant_id']) ?>"
                                            onclick="event.stopPropagation()"
                                            title="View details">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                    <div class="d-flex justify-content-between align-items-center px-3 py-3 border-top">
                        <small class="text-muted">
                            Page <?= $page ?> of <?= $total_pages ?>
                        </small>
                        <nav>
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => 1])) ?>">&laquo;</a>
                                </li>
                                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>">&lsaquo;</a>
                                </li>
                                <?php
                                $start = max(1, $page - 2);
                                $end = min($total_pages, $page + 2);
                                for ($i = $start; $i <= $end; $i++):
                                ?>
                                    <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                                        <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $i])) ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>">&rsaquo;</a>
                                </li>
                                <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $total_pages])) ?>">&raquo;</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <?php endif; ?>

                <?php else: ?>
                    <div class="alert alert-info m-4">
                        <i class="bi bi-info-circle"></i> No participants found matching your filters.
                        <a href="participants.php" class="alert-link">Clear filters</a>.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<!-- Participant Detail Modal -->
<div class="modal fade" id="participantModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-person-vcard"></i> Participant Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="participant-detail">
                <div class="text-center py-4">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-muted mt-2">Loading participant details...</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function() {
    'use strict';

    var participantModalEl = document.getElementById('participantModal');
    var participantModal = participantModalEl ? new bootstrap.Modal(participantModalEl) : null;
    var modalBody = document.getElementById('participant-detail');

    // --- Row click: open detail modal ---
    document.querySelectorAll('.participant-row').forEach(function(row) {
        row.addEventListener('click', function() {
            var id = this.getAttribute('data-participant-id');
            if (!id) return;
            modalBody.innerHTML =
                '<div class="text-center py-4">' +
                '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>' +
                '<p class="text-muted mt-2">Loading participant details...</p>' +
                '</div>';
            fetch('participant_detail.php?id=' + encodeURIComponent(id))
                .then(function(r) {
                    if (!r.ok) throw new Error('Failed to load details');
                    return r.text();
                })
                .then(function(html) {
                    modalBody.innerHTML = html;
                    participantModal.show();
                })
                .catch(function(err) {
                    modalBody.innerHTML = '<div class="alert alert-danger">Error: ' + err.message + '</div>';
                    participantModal.show();
                });
        });
    });

    // Also handle view-participant button clicks (stop propagation to avoid double-open)
    document.querySelectorAll('.view-participant').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            var id = this.getAttribute('data-participant-id');
            if (!id) return;
            modalBody.innerHTML =
                '<div class="text-center py-4">' +
                '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>' +
                '<p class="text-muted mt-2">Loading participant details...</p>' +
                '</div>';
            fetch('participant_detail.php?id=' + encodeURIComponent(id))
                .then(function(r) {
                    if (!r.ok) throw new Error('Failed to load details');
                    return r.text();
                })
                .then(function(html) {
                    modalBody.innerHTML = html;
                    participantModal.show();
                })
                .catch(function(err) {
                    modalBody.innerHTML = '<div class="alert alert-danger">Error: ' + err.message + '</div>';
                    participantModal.show();
                });
        });
    });

    // --- Checkbox: Select All ---
    var selectAll = document.getElementById('selectAll');
    var rowCheckboxes = document.querySelectorAll('.row-checkbox');
    var exportBtn = document.getElementById('exportBtn');
    var selectedCount = document.getElementById('selectedCount');

    function updateExportButton() {
        var checked = document.querySelectorAll('.row-checkbox:checked');
        var count = checked.length;
        selectedCount.textContent = count;
        exportBtn.disabled = count === 0;
    }

    if (selectAll) {
        selectAll.addEventListener('change', function() {
            var isChecked = this.checked;
            rowCheckboxes.forEach(function(cb) {
                cb.checked = isChecked;
                var row = cb.closest('.participant-row');
                if (row) row.classList.toggle('selected', isChecked);
            });
            updateExportButton();
        });
    }

    rowCheckboxes.forEach(function(cb) {
        cb.addEventListener('change', function() {
            var row = this.closest('.participant-row');
            if (row) row.classList.toggle('selected', this.checked);
            // Uncheck selectAll if any unchecked
            if (selectAll) {
                selectAll.checked = document.querySelectorAll('.row-checkbox:not(:checked)').length === 0;
            }
            updateExportButton();
        });
    });

    // --- Export Selected ---
    window.exportSelected = function() {
        var checked = document.querySelectorAll('.row-checkbox:checked');
        if (checked.length === 0) {
            alert('Please select at least one participant to export.');
            return;
        }
        var headers = [
            'Participant ID', 'Title/Salutation', 'First Name', 'Middle Name', 'Last Name',
            'Sex', 'Role', 'Facility', 'Phone', 'Email', 'Country', 'Venue',
            'Registration Date', 'Created At', 'Updated At'
        ];
        var csv = [headers.join(',')];

        checked.forEach(function(cb) {
            var row = cb.closest('.participant-row');
            if (!row) return;
            var cols = row.querySelectorAll('td');
            var data = [];
            // cols[0] = checkbox, cols[1..] = data, last col = action button
            for (var j = 1; j < cols.length - 1; j++) {
                var text = cols[j].innerText.trim();
                if (text === '\u2014' || text === '') text = '';
                if (text.includes(',') || text.includes('"') || text.includes('\n')) {
                    text = '"' + text.replace(/"/g, '""') + '"';
                }
                data.push(text);
            }
            csv.push(data.join(','));
        });

        var csvContent = "data:text/csv;charset=utf-8," + encodeURIComponent(csv.join('\n'));
        var link = document.createElement("a");
        link.setAttribute("href", csvContent);
        link.setAttribute("download", "participants_<?= date('Y-m-d-h-i-s') ?>.csv");
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    };

    // --- Reset modal content on close ---
    if (participantModalEl) {
        participantModalEl.addEventListener('hidden.bs.modal', function() {
            modalBody.innerHTML = '<div class="text-center py-4"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';
        });
    }
})();
</script>

</body>
</html>
