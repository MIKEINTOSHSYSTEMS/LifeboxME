<?php
// res/admin/index.php
require_once '../database.php';
require_once '../notifications.php';
require_once '../session_helper.php';

if (!is_logged_in() || !($_SESSION['is_admin'] ?? false)) {
    http_response_code(403);
    die('Access denied. You must be an administrator to view this page.');
}

$notificationManager = new NotificationManager($pdo);

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        $notificationManager->deleteNotification($_POST['id']);
    } elseif (isset($_POST['toggle'])) {
        $notificationManager->toggleNotification($_POST['id'], $_POST['status']);
    } elseif (isset($_POST['save'])) {
        $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'type' => $_POST['type'],
            'is_active' => isset($_POST['is_active']),
            'start_date' => $_POST['start_date'] ?: null,
            'end_date' => $_POST['end_date'] ?: null,
            'priority' => $_POST['priority'],
            'action_url' => $_POST['action_url'] ?: null,
            'action_text' => $_POST['action_text'] ?: null
        ];

        if (empty($_POST['id'])) {
            $notificationManager->createNotification($data);
        } else {
            $notificationManager->updateNotification($_POST['id'], $data);
        }
    }
}

$notifications = $notificationManager->getAllNotifications();

// Fix for line 108 - properly handle the case when there's no notification to edit
$editingNotification = null;
if (isset($_GET['edit'])) {
    $filtered = array_filter($notifications, function ($n) {
        return $n['id'] == $_GET['edit'];
    });
    $editingNotification = !empty($filtered) ? reset($filtered) : null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Notifications - Lifebox M&E System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">
    <style>
        :root {
            --primary-color: #048ba7;
            --secondary-color: #2c3e50;
            --accent-color: #ec6542;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            padding: 15px 20px;
            font-weight: 600;
        }

        .badge-info {
            background-color: var(--primary-color);
        }

        .badge-warning {
            background-color: var(--accent-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #037693;
            border-color: #037693;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: var(--secondary-color);
        }

        .priority-badge {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            font-weight: bold;
            color: white;
        }

        .priority-high {
            background-color: #dc3545;
        }

        .priority-medium {
            background-color: #fd7e14;
        }

        .priority-low {
            background-color: #28a745;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-active {
            background-color: #d4edda;
            color: #155724;
        }

        .status-inactive {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(["setCookieDomain", "*.lifebox.merqconsultancy.org"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://lifebox.merqconsultancy.org/analytics/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

    <!-- Matomo Image Tracker-->
    <img referrerpolicy="no-referrer-when-downgrade" src="https://lifebox.merqconsultancy.org/analytics/matomo.php?idsite=1&amp;rec=1" style="border:0" alt="" />
    <!-- End Matomo -->

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//lifebox.merqconsultancy.org/analytics/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

    <!-- Matomo Tag Manager -->
    <script>
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({
            'mtm.startTime': (new Date().getTime()),
            'event': 'mtm.Start'
        });
        (function() {
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = 'https://lifebox.merqconsultancy.org/analytics/js/container_DPKCUiEL.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Tag Manager -->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="/assets/img/lblogo.svg" alt="Lifebox Logo" height="30" class="d-inline-block align-top me-2">
                Manage Notifications
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home me-1"></i> Back to Site</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <!--<h1 class="display-5 fw-bold text-primary">Manage Notifications</h1>-->
                <p class="lead">Create and manage system-wide notifications that appear to users.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 animate__animated animate__fadeIn">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-bell me-2"></i>
                            <?= $editingNotification ? 'Edit Notification' : 'Create New Notification' ?>
                        </span>
                        <?php if ($editingNotification): ?>
                            <span class="badge bg-warning">Editing</span>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?= $editingNotification['id'] ?? '' ?>">

                            <div class="mb-3">
                                <label class="form-label">Title *</label>
                                <input type="text" class="form-control" name="title"
                                    value="<?= htmlspecialchars($editingNotification['title'] ?? '') ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Content *</label>
                                <textarea class="form-control summernote" name="content" rows="5" required>
                                    <?= htmlspecialchars($editingNotification['content'] ?? '') ?>
                                </textarea>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Notification Type *</label>
                                    <select class="form-select" name="type" required>
                                        <option value="info" <?= (($editingNotification['notification_type'] ?? '') === 'info') ? 'selected' : '' ?>>Info</option>
                                        <option value="warning" <?= (($editingNotification['notification_type'] ?? '') === 'warning') ? 'selected' : '' ?>>Warning</option>
                                        <option value="primary" <?= (($editingNotification['notification_type'] ?? '') === 'primary') ? 'selected' : '' ?>>Primary</option>
                                        <option value="danger" <?= (($editingNotification['notification_type'] ?? '') === 'danger') ? 'selected' : '' ?>>Danger</option>
                                        <option value="success" <?= (($editingNotification['notification_type'] ?? '') === 'success') ? 'selected' : '' ?>>Success</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Priority (0-10)</label>
                                    <input type="number" class="form-control" name="priority"
                                        value="<?= $editingNotification['priority'] ?? 0 ?>" min="0" max="10">
                                </div>

                                <div class="col-md-5">
                                    <div class="form-check form-switch pt-4">
                                        <input class="form-check-input" type="checkbox" name="is_active"
                                            id="is_active" <?= ($editingNotification['is_active'] ?? true) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="is_active">Active Notification</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Start Date (optional)</label>
                                    <input type="datetime-local" class="form-control" name="start_date"
                                        value="<?= !empty($editingNotification['start_date']) ?
                                                    date('Y-m-d\TH:i', strtotime($editingNotification['start_date'])) : '' ?>">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">End Date (optional)</label>
                                    <input type="datetime-local" class="form-control" name="end_date"
                                        value="<?= !empty($editingNotification['end_date']) ?
                                                    date('Y-m-d\TH:i', strtotime($editingNotification['end_date'])) : '' ?>">
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-md-8">
                                    <label class="form-label">Action URL (optional)</label>
                                    <input type="url" class="form-control" name="action_url"
                                        value="<?= htmlspecialchars($editingNotification['action_url'] ?? '') ?>">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Action Text (optional)</label>
                                    <input type="text" class="form-control" name="action_text"
                                        value="<?= htmlspecialchars($editingNotification['action_text'] ?? 'Learn More') ?>">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" name="save" class="btn btn-primary px-4">
                                    <i class="fas fa-save me-2"></i>
                                    <?= $editingNotification ? 'Update' : 'Create' ?> Notification
                                </button>

                                <?php if ($editingNotification): ?>
                                    <a href="index.php" class="btn btn-outline-secondary">
                                        <i class="fas fa-times me-2"></i> Cancel
                                    </a>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4 animate__animated animate__fadeIn animate__delay-1s">
                    <div class="card-header">
                        <i class="fas fa-info-circle me-2"></i> Notification Guidelines
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Priority:</strong> Higher numbers appear first (0-10)
                            </li>
                            <li class="list-group-item">
                                <strong>Active:</strong> Only active notifications are shown
                            </li>
                            <li class="list-group-item">
                                <strong>Dates:</strong> Set timeframe for automatic display
                            </li>
                            <li class="list-group-item">
                                <strong>Types:</strong> Change color and icon of notification
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card animate__animated animate__fadeIn animate__delay-2s">
            <div class="card-header">
                <i class="fas fa-list me-2"></i> Current Notifications
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Dates</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($notifications as $notification): ?>
                                <tr>
                                    <td><?= htmlspecialchars($notification['title']) ?></td>
                                    <td>
                                        <span class="badge bg-<?= $notification['notification_type'] ?>">
                                            <?= ucfirst($notification['notification_type']) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php
                                        $priorityClass = '';
                                        if ($notification['priority'] >= 7) {
                                            $priorityClass = 'priority-high';
                                        } elseif ($notification['priority'] >= 4) {
                                            $priorityClass = 'priority-medium';
                                        } else {
                                            $priorityClass = 'priority-low';
                                        }
                                        ?>
                                        <span class="priority-badge <?= $priorityClass ?>">
                                            <?= $notification['priority'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <form method="POST" class="d-inline">
                                            <input type="hidden" name="id" value="<?= $notification['id'] ?>">
                                            <input type="hidden" name="status" value="<?= $notification['is_active'] ? '0' : '1' ?>">
                                            <button type="submit" name="toggle" class="btn btn-sm p-0 border-0 bg-transparent">
                                                <span class="status-badge <?= $notification['is_active'] ? 'status-active' : 'status-inactive' ?>">
                                                    <?= $notification['is_active'] ? 'Active' : 'Inactive' ?>
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <small class="text-muted">
                                            <?= $notification['start_date'] ? date('M j, Y', strtotime($notification['start_date'])) : 'No start' ?><br>
                                            <?= $notification['end_date'] ? date('M j, Y', strtotime($notification['end_date'])) : 'No end' ?>
                                        </small>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="?edit=<?= $notification['id'] ?>" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form method="POST" class="d-inline">
                                                <input type="hidden" name="id" value="<?= $notification['id'] ?>">
                                                <button type="submit" name="delete" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Are you sure you want to delete this notification?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p class="text-muted mb-0">Lifebox M&E System &copy; <?= date('Y') ?></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
</body>

</html>