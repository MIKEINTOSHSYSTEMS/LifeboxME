<?php
/*
session_start();
if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
*/
//require __DIR__ . '/session_helper.php';
require __DIR__ . '/../src/db.php';
require __DIR__ . '/session_helper.php';

// Get filters and pagination
$page = max(1, intval($_GET['page'] ?? 1));
$limit = intval($_GET['limit'] ?? 5);
$offset = ($page - 1) * $limit;

$search = trim($_GET['search'] ?? '');
$country_id = intval($_GET['country_id'] ?? 0);
$facility_id = intval($_GET['facility_id'] ?? 0);
$role_id = intval($_GET['role_id'] ?? 0);

// Build query with filters - UPDATED TO JOIN WITH RELATED TABLES
$sql = "
    SELECT 
        p.*,
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
    WHERE 1=1
";

$count_sql = "
    SELECT COUNT(*) 
    FROM training_participants p
    WHERE 1=1
";

$params = [];
$count_params = [];

if (!empty($search)) {
    $sql .= " AND (p.first_name ILIKE :search OR p.last_name ILIKE :search OR p.email ILIKE :search OR p.phone ILIKE :search)";
    $count_sql .= " AND (p.first_name ILIKE :search OR p.last_name ILIKE :search OR p.email ILIKE :search OR p.phone ILIKE :search)";
    $params[':search'] = $count_params[':search'] = '%' . $search . '%';
}

if ($country_id > 0) {
    $sql .= " AND p.country_id = :country_id";
    $count_sql .= " AND p.country_id = :country_id";
    $params[':country_id'] = $count_params[':country_id'] = $country_id;
}

if ($facility_id > 0) {
    $sql .= " AND p.facility_id = :facility_id";
    $count_sql .= " AND p.facility_id = :facility_id";
    $params[':facility_id'] = $count_params[':facility_id'] = $facility_id;
}

if ($role_id > 0) {
    $sql .= " AND p.role_id = :role_id";
    $count_sql .= " AND p.role_id = :role_id";
    $params[':role_id'] = $count_params[':role_id'] = $role_id;
}

//$sql .= " ORDER BY p.created_at DESC LIMIT :limit OFFSET :offset";
//$sql .= " ORDER BY p.created_at ASC LIMIT :limit OFFSET :offset";
$sql .= " ORDER BY p.participant_id DESC LIMIT :limit OFFSET :offset";

$params[':limit'] = $limit;
$params[':offset'] = $offset;

// Get participants
$stmt = $pdo->prepare($sql);
foreach ($params as $key => $value) {
    if ($key === ':limit' || $key === ':offset') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value);
    }
}
$stmt->execute();
$participants = $stmt->fetchAll();

// Get total count
$stmt = $pdo->prepare($count_sql);
foreach ($count_params as $key => $value) {
    $stmt->bindValue($key, $value);
}
$stmt->execute();
$total_count = $stmt->fetchColumn();
$total_pages = ceil($total_count / $limit);

// Get countries for filter
$countries = $pdo->query("SELECT country_id, country_name FROM countries ORDER BY country_name")->fetchAll();

// Get facilities for filter
$facilities = $pdo->query("SELECT facility_id, facility_name FROM facilities ORDER BY facility_name")->fetchAll();

// Get roles for filter
$roles = $pdo->query("SELECT role_id, role_name FROM participant_role ORDER BY role_name")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Participants - LifeBox Test Center</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <style>
        .participant-table th {
            position: sticky;
            top: 0;
            background-color: #f8f9fa;
            z-index: 10;
        }

        .table-responsive {
            /*max-height: 70vh;*/
            max-height: max-content;
        }

        .text-truncate-custom {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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
            <?php //include 'navbar.php'; 
            ?>

            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Training Participants</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="dashboard.php" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to Dashboard
                        </a>
                    </div>
                </div>

                <!-- Filters and Search -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Filter Participants</h5>
                    </div>
                    <div class="card-body">
                        <form method="get" class="row g-3">
                            <div class="col-md-4">
                                <label for="search" class="form-label">Search</label>
                                <input type="text" class="form-control" id="search" name="search"
                                    value="<?= htmlspecialchars($search) ?>"
                                    placeholder="Name, email, or phone">
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
                                        <option value="<?= $f['facility_id'] ?>" <?= $facility_id == $f['facility_id'] ? 'selected' : '' ?>>
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
                                        <option value="<?= $r['role_id'] ?>" <?= $role_id == $r['role_id'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($r['role_name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="limit" class="form-label">Items per page</label>
                                <select class="form-select" id="limit" name="limit">
                                    <option value="5" <?= $limit == 5 ? 'selected' : '' ?>>5</option>
                                    <option value="10" <?= $limit == 10 ? 'selected' : '' ?>>10</option>
                                    <option value="20" <?= $limit == 20 ? 'selected' : '' ?>>20</option>
                                    <option value="50" <?= $limit == 50 ? 'selected' : '' ?>>50</option>
                                    <option value="100" <?= $limit == 100 ? 'selected' : '' ?>>100</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-2">Apply Filters</button>
                                <a href="participants.php" class="btn btn-outline-secondary">Clear Filters</a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Participants Table -->
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">
                            Participants
                            <span class="badge bg-secondary"><?= $total_count ?> total</span>
                        </h5>
                        <div>
                            <span class="me-2">
                                Showing <?= $offset + 1 ?> - <?= min($offset + $limit, $total_count) ?> of <?= $total_count ?>
                            </span>
                            <button class="btn btn-sm btn-outline-secondary" onclick="exportToCSV()">
                                <i class="bi bi-download"></i> Export CSV
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <?php if (count($participants) > 0): ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover participant-table">
                                    <thead>
                                        <tr>
                                            <th>Participant ID</th>
                                            <th>Title/Salutation</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Sex</th>
                                            <th>Role</th>
                                            <th>Facility</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Venue</th>
                                            <th>Registration Date</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($participants as $p): ?>
                                            <tr>
                                                <td><?= htmlspecialchars($p['participant_id']) ?></td>
                                                <td><?= htmlspecialchars($p['title_salutation'] ?? 'N/A') ?></td>
                                                <td><?= htmlspecialchars($p['first_name']) ?></td>
                                                <td><?= htmlspecialchars($p['middle_name'] ?? 'N/A') ?></td>
                                                <td><?= htmlspecialchars($p['last_name']) ?></td>
                                                <td><?= htmlspecialchars($p['sex_name'] ?? 'N/A') ?></td>
                                                <!-- UPDATED: Display actual names instead of IDs -->
                                                <td>
                                                    <span class="text-truncate-custom" title="<?= htmlspecialchars($p['role_name'] ?? 'N/A') ?>">
                                                        <?= htmlspecialchars($p['role_name'] ?? 'N/A') ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-truncate-custom" title="<?= htmlspecialchars($p['facility_name'] ?? 'N/A') ?>">
                                                        <?= htmlspecialchars($p['facility_name'] ?? 'N/A') ?>
                                                    </span>
                                                </td>
                                                <td><?= htmlspecialchars($p['phone'] ?? 'N/A') ?></td>
                                                <td>
                                                    <span class="text-truncate-custom" title="<?= htmlspecialchars($p['email'] ?? 'N/A') ?>">
                                                        <?= htmlspecialchars($p['email'] ?? 'N/A') ?>
                                                    </span>
                                                </td>
                                                <td><?= htmlspecialchars($p['country_name'] ?? 'N/A') ?></td>
                                                <td><?= htmlspecialchars($p['venue_name'] ?? 'N/A') ?></td>
                                                <td><?= $p['training_date'] ? date('M j, Y', strtotime($p['training_date'])) : 'N/A' ?></td>
                                                <td><?= $p['created_at'] ? date('M j, Y', strtotime($p['created_at'])) : 'N/A' ?></td>
                                                <td><?= $p['updated_at'] ? date('M j, Y', strtotime($p['updated_at'])) : 'N/A' ?></td>

                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary view-participant"
                                                        data-bs-toggle="modal" data-bs-target="#participantModal"
                                                        data-participant-id="<?= $p['participant_id'] ?>">
                                                        <i class="bi bi-eye"></i> View
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <?php if ($total_pages > 1): ?>
                                <nav class="d-flex justify-content-center mt-4">
                                    <ul class="pagination">
                                        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                                            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>">Previous</a>
                                        </li>

                                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                                <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $i])) ?>"><?= $i ?></a>
                                            </li>
                                        <?php endfor; ?>

                                        <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                                            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="alert alert-info m-4">
                                No participants found matching your filters.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Participant Detail Modal -->
    <div class="modal fade" id="participantModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Participant Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="participant-detail">
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
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
        // View participant details
        document.querySelectorAll('.view-participant').forEach(button => {
            button.addEventListener('click', function() {
                const participantId = this.getAttribute('data-participant-id');
                const modalBody = document.getElementById('participant-detail');

                // Show loading spinner
                modalBody.innerHTML = `
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                `;

                // Fetch participant details
                fetch('participant_detail.php?id=' + participantId)
                    .then(response => response.text())
                    .then(data => {
                        modalBody.innerHTML = data;
                    })
                    .catch(error => {
                        modalBody.innerHTML = `
                            <div class="alert alert-danger">
                                Error loading participant details: ${error}
                            </div>
                        `;
                    });
            });
        });

        function exportToCSV() {
            // Enhanced CSV export with proper headers
            let csv = [];

            // Add headers
            let headers = [
                'Participant ID',
                'Title/Salutation',
                'First Name',
                'Middle Name',
                'Last Name',
                'Sex',
                'Role',
                'Facility',
                'Phone',
                'Email',
                'Country',
                'Venue',
                'Registration Date',
                'Created At',
                'Updated At'
            ];
            csv.push(headers.join(","));

            // Add data rows
            let rows = document.querySelectorAll(".participant-table tbody tr");

            for (let i = 0; i < rows.length; i++) {
                let row = [],
                    cols = rows[i].querySelectorAll("td");

                for (let j = 0; j < cols.length; j++) {
                    // Skip the actions column (last column)
                    if (j !== cols.length - 1) {
                        let text = cols[j].innerText.trim();
                        // Handle text with commas by wrapping in quotes
                        if (text.includes(',')) {
                            text = '"' + text.replace(/"/g, '""') + '"';
                        }
                        row.push(text);
                    }
                }

                csv.push(row.join(","));
            }

            // Download CSV file
            let csvContent = "data:text/csv;charset=utf-8," + csv.join("\n");
            let encodedUri = encodeURI(csvContent);
            let link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "participants_<?= date('Y-m-d') ?>.csv");
            document.body.appendChild(link);
            link.click();
        }
    </script>
</body>

</html>