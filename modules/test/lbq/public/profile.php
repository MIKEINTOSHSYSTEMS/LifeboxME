<?php
// profile.php
session_start();
require_once __DIR__ . '/../src/db.php';

// Check if user is logged in
if (empty($_SESSION['participant_id'])) {
    header("Location: login.php");
    exit;
}

$participantId = $_SESSION['participant_id'];
$errors = [];
$success = false;
$successMessage = '';

// Fetch participant data
try {
    $stmt = $pdo->prepare("
        SELECT * FROM training_participants 
        WHERE participant_id = :id
    ");
    $stmt->execute([':id' => $participantId]);
    $participant = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$participant) {
        throw new Exception("Participant not found");
    }
} catch (Exception $e) {
    $errors[] = "Error loading profile: " . $e->getMessage();
    error_log("Profile load error: " . $e->getMessage());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $errors[] = "Invalid form submission. Please try again.";
    } else {
        // Check if this is an email send request
        $sendEmail = isset($_POST['send_email']) && $_POST['send_email'] == '1';

        // If just sending email, use existing data instead of form data
        if ($sendEmail) {
            $formData = [
                'title_salutation' => $participant['title_salutation'] ?? '',
                'first_name' => $participant['first_name'] ?? '',
                'middle_name' => $participant['middle_name'] ?? '',
                'last_name' => $participant['last_name'] ?? '',
                'sex_id' => $participant['sex_id'] ?? null,
                'email' => $participant['email'] ?? '',
                'phone' => $participant['phone'] ?? '',
                'country_id' => $participant['country_id'] ?? null,
                'facility_id' => $participant['facility_id'] ?? null,
                'role_id' => $participant['role_id'] ?? null,
                'venue_id' => $participant['venue_id'] ?? null
            ];

            // Send confirmation email
            $emailSent = sendConfirmationEmail($formData, $participant['phone'], $pdo);

            if ($emailSent) {
                $success = true;
                $successMessage = "Confirmation email sent successfully to " . htmlspecialchars($participant['email']);
            } else {
                $errors[] = "Failed to send confirmation email. Please try again.";
            }

            // Skip the rest of the form processing for email-only requests
            goto render_page;
        }

        // Collect and sanitize form data
        $formData = [
            'title_salutation' => trim($_POST['title_salutation'] ?? ''),
            'first_name' => trim($_POST['first_name'] ?? ''),
            'middle_name' => trim($_POST['middle_name'] ?? ''),
            'last_name' => trim($_POST['last_name'] ?? ''),
            'sex_id' => nullIfEmpty($_POST['sex_id'] ?? null),
            'email' => filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL),
            'phone' => $_POST['phone'] ?? '',
            'country_id' => nullIfEmpty($_POST['country_id'] ?? null),
            'facility_id' => nullIfEmpty($_POST['facility_id'] ?? null),
            'role_id' => nullIfEmpty($_POST['role_id'] ?? null),
            'venue_id' => nullIfEmpty($_POST['venue_id'] ?? null)
        ];

        // Validate required fields
        if (empty($formData['first_name'])) {
            $errors[] = "First name is required.";
        }
        if (empty($formData['last_name'])) {
            $errors[] = "Last name is required.";
        }
        if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Valid email address is required.";
        }
        if (empty($formData['phone'])) {
            $errors[] = "Phone number is required.";
        }

        // Check if email already exists (excluding current user)
        if (empty($errors)) {
            try {
                $stmt = $pdo->prepare("
                    SELECT COUNT(*) FROM training_participants 
                    WHERE email = :email AND participant_id != :id
                ");
                $stmt->execute([
                    ':email' => $formData['email'],
                    ':id' => $participantId
                ]);
                if ($stmt->fetchColumn() > 0) {
                    $errors[] = "This email is already registered by another user.";
                }
            } catch (Exception $e) {
                $errors[] = "Error checking email availability.";
            }
        }

        // Update profile if no errors
        if (empty($errors)) {
            try {
                $pdo->beginTransaction();

                $updateStmt = $pdo->prepare("
                    UPDATE training_participants 
                    SET title_salutation = :title,
                        first_name = :fname,
                        middle_name = :mname,
                        last_name = :lname,
                        sex_id = :sex,
                        email = :email,
                        phone = :phone,
                        country_id = :country,
                        facility_id = :facility,
                        role_id = :role,
                        venue_id = :venue,
                        updated_at = NOW()
                    WHERE participant_id = :id
                ");

                $updateStmt->execute([
                    ':title' => $formData['title_salutation'],
                    ':fname' => $formData['first_name'],
                    ':mname' => $formData['middle_name'],
                    ':lname' => $formData['last_name'],
                    ':sex' => $formData['sex_id'],
                    ':email' => $formData['email'],
                    ':phone' => $formData['phone'],
                    ':country' => $formData['country_id'],
                    ':facility' => $formData['facility_id'],
                    ':role' => $formData['role_id'],
                    ':venue' => $formData['venue_id'],
                    ':id' => $participantId
                ]);

                $pdo->commit();
                $success = true;
                $successMessage = "Your profile has been updated successfully!";

                // Refresh participant data
                $stmt = $pdo->prepare("SELECT * FROM training_participants WHERE participant_id = :id");
                $stmt->execute([':id' => $participantId]);
                $participant = $stmt->fetch(PDO::FETCH_ASSOC);

                // Update session data if needed
                $_SESSION['participant_data'] = array_merge($_SESSION['participant_data'] ?? [], $formData);
            } catch (Exception $e) {
                $pdo->rollBack();
                $errors[] = "Error updating profile: " . $e->getMessage();
                error_log("Profile update error: " . $e->getMessage());
            }
        }
    }
}

// Generate CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

function nullIfEmpty($value)
{
    return ($value === '' || $value === null) ? null : $value;
}

// Function to send confirmation email using SMTP
function sendConfirmationEmail($data, $phone, $pdo)
{
    // Include the SMTP functions
    require_once __DIR__ . '/../src/smtp_functions.php';

    // Get SMTP settings from database (default to ID 2)
    $smtpConfig = get_smtp_config($pdo, 2);

    if (!$smtpConfig) {
        error_log("No SMTP configuration found");
        return false; // No SMTP settings configured
    }

    // Force plain authentication since TLS is not working
    $smtpConfig['secure'] = 'plain';

    // Get additional data for email
    $countryName = '';
    $facilityName = '';
    $roleName = '';
    $venueName = '';
    $sexName = '';

    if (!empty($data['country_id'])) {
        $stmt = $pdo->prepare("SELECT country_name FROM countries WHERE country_id = :id");
        $stmt->execute([':id' => $data['country_id']]);
        $countryName = $stmt->fetchColumn() ?: 'Not specified';
    }

    if (!empty($data['facility_id'])) {
        $stmt = $pdo->prepare("SELECT facility_name FROM facilities WHERE facility_id = :id");
        $stmt->execute([':id' => $data['facility_id']]);
        $facilityName = $stmt->fetchColumn() ?: 'Not specified';
    }

    if (!empty($data['role_id'])) {
        $stmt = $pdo->prepare("SELECT role_name FROM participant_role WHERE role_id = :id");
        $stmt->execute([':id' => $data['role_id']]);
        $roleName = $stmt->fetchColumn() ?: 'Not specified';
    }

    if (!empty($data['venue_id'])) {
        $stmt = $pdo->prepare("SELECT venue_name FROM venues WHERE venue_id = :id");
        $stmt->execute([':id' => $data['venue_id']]);
        $venueName = $stmt->fetchColumn() ?: 'Not specified';
    }

    if (!empty($data['sex_id'])) {
        $stmt = $pdo->prepare("SELECT sex_name FROM sex WHERE sex_id = :id");
        $stmt->execute([':id' => $data['sex_id']]);
        $sexName = $stmt->fetchColumn() ?: 'Not specified';
    }

    // Email content
    $subject = "Profile Confirmation - Lifebox Training";

    // HTML email body
    $body = '<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background-color: #0078d4; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; }
        .footer { margin-top: 20px; padding-top: 10px; border-top: 1px solid #eee; font-size: 0.9em; color: #777; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Profile Confirmation</h1>
        </div>
        <div class="content">
            <p>Hello ' . htmlspecialchars($data['first_name']) . ',</p>
            <p>This email confirms your current profile information in the Lifebox Training Program.</p>
            
            <h3>Your Profile Details:</h3>
            <table>
                <tr><th>Field</th><th>Value</th></tr>
                <tr><td>Name</td><td>' . htmlspecialchars($data['title_salutation'] . ' ' . $data['first_name'] . ' ' . $data['middle_name'] . ' ' . $data['last_name']) . '</td></tr>
                <tr><td>Gender</td><td>' . htmlspecialchars($sexName) . '</td></tr>
                <tr><td>Email</td><td>' . htmlspecialchars($data['email']) . '</td></tr>
                <tr><td>Phone</td><td>' . htmlspecialchars($phone) . '</td></tr>
                <tr><td>Country</td><td>' . htmlspecialchars($countryName) . '</td></tr>
                <tr><td>Facility</td><td>' . htmlspecialchars($facilityName) . '</td></tr>
                <tr><td>Role</td><td>' . htmlspecialchars($roleName) . '</td></tr>
                <tr><td>Venue</td><td>' . htmlspecialchars($venueName) . '</td></tr>
                <tr><td>Profile Last Updated</td><td>' . date('Y-m-d H:i:s') . '</td></tr>
            </table>
            
            <p>If any of this information is incorrect, please log in to your account and update your profile.</p>
        </div>
        <div class="footer">
            <p>This is an automated message. Please do not reply.</p>
            <p>&copy; ' . date('Y') . ' Lifebox M&E System</p>
        </div>
    </div>
</body>
</html>';

    // Send email using SMTP
    $result = send_smtp_email($smtpConfig, $data['email'], $subject, $body);

    if ($result['ok']) {
        error_log("Profile confirmation email sent successfully to " . $data['email']);
        return true;
    } else {
        error_log("Failed to send profile confirmation email: " . $result['log']);

        // Fallback to PHP mail() function if SMTP fails
        return send_email_fallback($data, $phone, $subject, $body);
    }
}

// Fallback function using PHP's mail()
function send_email_fallback($data, $phone, $subject, $body)
{
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: lifebox@cloud.merqconsultancy.org" . "\r\n";
    $headers .= "Reply-To: lifebox@cloud.merqconsultancy.org" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $result = mail($data['email'], $subject, $body, $headers);

    if ($result) {
        error_log("Profile confirmation email sent via fallback method to " . $data['email']);
        return true;
    } else {
        error_log("Failed to send profile confirmation email via fallback method to " . $data['email']);
        return false;
    }
}

// Function to fetch options for dropdowns
function getDropdownOptions($pdo, $table, $valueField, $textField, $where = '')
{
    $sql = "SELECT $valueField, $textField FROM $table";
    if (!empty($where)) {
        $sql .= " WHERE $where";
    }
    $sql .= " ORDER BY $textField";

    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
}

// Get options for dropdowns
$salutations = ['Mr.' => 'Mr.', 'Ms.' => 'Ms.', 'Dr.' => 'Dr.', 'Prof.' => 'Prof.', 'Eng.' => 'Eng.', 'Nurse' => 'Nurse'];
$sexOptions = getDropdownOptions($pdo, 'sex', 'sex_id', 'sex_name', 'is_active = true');
$countryOptions = getDropdownOptions($pdo, 'countries', 'country_id', 'country_name');
$facilityOptions = getDropdownOptions($pdo, 'facilities', 'facility_id', 'facility_name', 'is_active = true');
$roleOptions = getDropdownOptions($pdo, 'participant_role', 'role_id', 'role_name', 'is_active = true');
$venueOptions = getDropdownOptions($pdo, 'venues', 'venue_id', 'venue_name', 'is_active = true');

render_page:
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - Lifebox Training</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/style/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">


    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --light-bg: #f8f9fa;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        body {
            background: linear-gradient(135deg, var(--light-bg) 0%, #eef2f7 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding: 20px 0;
        }

        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2.5rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .profile-header img {
            height: 70px;
            margin-bottom: 1rem;
        }

        .profile-header h2 {
            color: var(--primary-color);
            font-weight: 700;
        }

        .form-section-title {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary-color);
            font-weight: 600;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-select {
            border-radius: var(--border-radius);
            padding: 0.75rem 1rem;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .btn {
            border-radius: var(--border-radius);
            padding: 0.75rem 1.5rem;
            font-weight: 600;
        }

        .btn-primary {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .btn-primary:hover {
            background: #2980b9;
            border-color: #2980b9;
        }

        .btn-success {
            background: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background: #218838;
            border-color: #1e7e34;
        }

        .profile-info {
            background: var(--light-bg);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .profile-info-item {
            margin-bottom: 0.5rem;
        }

        .profile-info-item strong {
            color: var(--primary-color);
            min-width: 120px;
            display: inline-block;
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">
                <img src="../lblogo-white.svg" alt="LifeBox Logo" height="30" class="d-inline-block align-text-top me-2">
                Test Center
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            <i class="bi bi-speedometer2 me-1"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="take_test.php">
                            <i class="bi bi-pencil-square me-1"></i> Available Tests
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_results.php">
                            <i class="bi bi-bar-chart me-1"></i> My Results
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <i class="bi bi-person-circle me-1"></i> My Profile
                        </a>
                    </li>
    -->
                </ul>
                <div class="d-flex align-items-center">
                    <span class="navbar-text text-white me-3 d-none d-md-block">
                        <a class="nav-link" href="profile.php">
                            <i class="bi bi-person-circle me-1"></i>
                            <?= htmlspecialchars($participant['title_salutation'] . $participant['first_name'] . ' ' . $participant['last_name'] ?? '') ?>
                        </a>
                    </span>
                    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <br></br>

    <div class="container profile-container">
        <div class="profile-header">
            <img src="../lblogo-dark.svg" alt="Lifebox Logo">
            <h2>Edit Your Profile</h2>
            <p class="text-muted">Update your personal and professional information</p>
        </div>

        <!-- Success Message -->
        <?php if ($success): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle me-2"></i>
                <?= $successMessage ?>
            </div>
        <?php endif; ?>

        <!-- Error Messages -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <ul class="mb-0">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Current Profile Information -->
        <div class="profile-info">
            <h5><i class="fas fa-user-circle me-2"></i>Current Profile Information</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="profile-info-item">
                        <strong>Participant ID:</strong>
                        <span><?= htmlspecialchars($participant['participant_id'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="profile-info-item">
                        <strong>Name:</strong>
                        <span><?= htmlspecialchars(($participant['title_salutation'] ?? '') . ' ' . ($participant['first_name'] ?? '') . ' ' . ($participant['middle_name'] ?? '') . ' ' . ($participant['last_name'] ?? ''), ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="profile-info-item">
                        <strong>Email:</strong>
                        <span><?= htmlspecialchars($participant['email'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-info-item">
                        <strong>Phone:</strong>
                        <span><?= htmlspecialchars($participant['phone'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="profile-info-item">
                        <strong>Registered:</strong>
                        <span><?= htmlspecialchars($participant['created_at'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="profile-info-item">
                        <strong>Last Updated:</strong>
                        <span><?= htmlspecialchars($participant['updated_at'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" id="profileForm">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

            <h4 class="form-section-title"><i class="fas fa-user me-2"></i>Personal Information</h4>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="title_salutation" class="form-label">Title</label>
                    <select class="form-select" id="title_salutation" name="title_salutation">
                        <option value="">Select Title</option>
                        <?php foreach ($salutations as $value => $label): ?>
                            <option value="<?= $value ?>" <?= ($participant['title_salutation'] ?? '') === $value ? 'selected' : '' ?>>
                                <?= $label ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="first_name" class="form-label">First Name *</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="<?= htmlspecialchars($participant['first_name'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="middle_name" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name"
                        value="<?= htmlspecialchars($participant['middle_name'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                </div>
                <div class="col-md-4">
                    <label for="last_name" class="form-label">Last Name *</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="<?= htmlspecialchars($participant['last_name'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="sex_id" class="form-label">Gender</label>
                    <select class="form-select" id="sex_id" name="sex_id">
                        <option value="">Select Gender</option>
                        <?php foreach ($sexOptions as $value => $label): ?>
                            <option value="<?= $value ?>" <?= ($participant['sex_id'] ?? '') == $value ? 'selected' : '' ?>>
                                <?= $label ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address *</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="<?= htmlspecialchars($participant['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number *</label>
                    <input type="tel" class="form-control" id="phone" name="phone"
                        value="<?= htmlspecialchars($participant['phone'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
                </div>
            </div>

            <h4 class="form-section-title"><i class="fas fa-briefcase me-2"></i>Professional Information</h4>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="country_id" class="form-label">Country</label>
                    <select class="form-select select2" id="country_id" name="country_id">
                        <option value="">Select Country</option>
                        <?php foreach ($countryOptions as $value => $label): ?>
                            <option value="<?= $value ?>" <?= ($participant['country_id'] ?? '') == $value ? 'selected' : '' ?>>
                                <?= $label ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="facility_id" class="form-label">Facility</label>
                    <select class="form-select select2" id="facility_id" name="facility_id">
                        <option value="">Select Facility</option>
                        <?php foreach ($facilityOptions as $value => $label): ?>
                            <option value="<?= $value ?>" <?= ($participant['facility_id'] ?? '') == $value ? 'selected' : '' ?>>
                                <?= $label ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="role_id" class="form-label">Role</label>
                    <select class="form-select select2" id="role_id" name="role_id">
                        <option value="">Select Role</option>
                        <?php foreach ($roleOptions as $value => $label): ?>
                            <option value="<?= $value ?>" <?= ($participant['role_id'] ?? '') == $value ? 'selected' : '' ?>>
                                <?= $label ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="venue_id" class="form-label">Preferred Training Venue</label>
                    <select class="form-select select2" id="venue_id" name="venue_id">
                        <option value="">Select Venue</option>
                        <?php foreach ($venueOptions as $value => $label): ?>
                            <option value="<?= $value ?>" <?= ($participant['venue_id'] ?? '') == $value ? 'selected' : '' ?>>
                                <?= $label ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="dashboard.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Back to Dashboard
                </a>
                <div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Update Profile
                    </button>
                    <button type="submit" name="send_email" value="1" class="btn btn-success ms-2">
                        <i class="fas fa-envelope me-1"></i> Send Confirmation Email
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('.select2').select2({
                theme: 'bootstrap-5',
                width: '100%',
                placeholder: "Select an option"
            });

            // Form validation
            $('#profileForm').on('submit', function(e) {
                // Check if this is an email send request
                if ($('button[name="send_email"]').is(':focus')) {
                    if (!confirm('Are you sure you want to send a confirmation email to ' + $('#email').val() + '?')) {
                        e.preventDefault();
                        return false;
                    }
                    return true; // Continue with form submission
                }

                let isValid = true;
                const errors = [];

                // Validate required fields
                if (!$('#first_name').val().trim()) {
                    errors.push('First name is required');
                    isValid = false;
                }
                if (!$('#last_name').val().trim()) {
                    errors.push('Last name is required');
                    isValid = false;
                }
                if (!$('#email').val().trim()) {
                    errors.push('Email is required');
                    isValid = false;
                }
                if (!$('#phone').val().trim()) {
                    errors.push('Phone number is required');
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault();
                    alert('Please fix the following errors:\n' + errors.join('\n'));
                }
            });
        });
    </script>
</body>

</html>