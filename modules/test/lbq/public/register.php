<?php
// register.php
session_start();
require_once __DIR__ . '/../src/db.php';

// Initialize variables
$step = isset($_GET['step']) ? (int)$_GET['step'] : 1;
$errors = [];
$formData = [
    'title_salutation' => '',
    'first_name' => '',
    'middle_name' => '',
    'last_name' => '',
    'sex_id' => '',
    'email' => '',
    'phone' => '',
    'phone_code' => '+251', // Default to Ethiopia
    'country_id' => '',
    'facility_id' => '',
    'role_id' => '',
    'venue_id' => ''
];

if (isset($_SESSION['current_step'])) {
    $step = $_SESSION['current_step'];
    unset($_SESSION['current_step']);
}

// Load saved form data from session if available
if (isset($_SESSION['registration_data'])) {
    $formData = array_merge($formData, $_SESSION['registration_data']);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $errors[] = "Invalid form submission. Please try again.";
    } else {
        // Collect form data
        $formData = array_merge($formData, $_POST);

        // Save form data to session for multi-step persistence
        $_SESSION['registration_data'] = $formData;

        // Validate based on current step
        switch ($step) {
            case 1:
                // Validate personal information
                if (empty(trim($formData['first_name']))) {
                    $errors[] = "First name is required.";
                }
                if (empty(trim($formData['last_name']))) {
                    $errors[] = "Last name is required.";
                }
                if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Valid email address is required.";
                } else {
                    // Check if email already exists
                    $stmt = $pdo->prepare("SELECT COUNT(*) FROM training_participants WHERE email = :email");
                    $stmt->execute([':email' => $formData['email']]);
                    if ($stmt->fetchColumn() > 0) {
                        $errors[] = "This email is already registered.";
                    }
                }
                if (empty($formData['phone'])) {
                    $errors[] = "Phone number is required.";
                }
                break;

            case 2:
                // Validate professional information
                if (empty($formData['country_id'])) {
                    $errors[] = "Country is required.";
                }
                if (empty($formData['facility_id'])) {
                    $errors[] = "Facility is required.";
                }
                if (empty($formData['role_id'])) {
                    $errors[] = "Role is required.";
                }
                break;

            case 3:
                // Validate captcha
                if (empty($_POST['g-recaptcha-response'])) {
                    $errors[] = "Please complete the CAPTCHA verification.";
                } else {
                    $captchaResponse = $_POST['g-recaptcha-response'];
                    $secretKey = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';

                    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");
                    $responseData = json_decode($verifyResponse);

                    if (!$responseData->success) {
                        $errors[] = "CAPTCHA verification failed. Please try again.";
                    }
                }
                break;
        }

        // If no errors, proceed to next step or complete registration
        if (empty($errors)) {
            if ($step < 3) {
                $step++;
                // Instead of header redirect, we'll let the page reload with the new step
                // This avoids issues with form resubmission
                $_SESSION['current_step'] = $step;
            } else {
                // Final step - complete registration
                try {
                    $pdo->beginTransaction();

                    // Get the full phone number from the intl-tel-input
                    $fullPhone = $_POST['full_phone'] ?? '';

                    // Insert into training_participants
                    $stmt = $pdo->prepare("
                        INSERT INTO training_participants 
                        (title_salutation, first_name, middle_name, last_name, sex_id, email, phone, 
                         country_id, facility_id, role_id, venue_id, training_date, created_at, updated_at)
                        VALUES (:title, :fname, :mname, :lname, :sex, :email, :phone, 
                                :country, :facility, :role, :venue, CURRENT_DATE, NOW(), NOW())
                        RETURNING participant_id
                    ");

                    $stmt->execute([
                        ':title' => $formData['title_salutation'],
                        ':fname' => trim($formData['first_name']),
                        ':mname' => trim($formData['middle_name']),
                        ':lname' => trim($formData['last_name']),
                        ':sex' => $formData['sex_id'],
                        ':email' => $formData['email'],
                        ':phone' => $fullPhone,
                        ':country' => $formData['country_id'],
                        ':facility' => $formData['facility_id'],
                        ':role' => $formData['role_id'],
                        ':venue' => $formData['venue_id']
                    ]);

                    $participantId = $stmt->fetchColumn();

                    // Send confirmation email
                    if (sendConfirmationEmail($formData, $fullPhone, $pdo)) {
                        $pdo->commit();

                        // Clear session data
                        unset($_SESSION['registration_data']);
                        unset($_SESSION['current_step']);

                        // Redirect to success page
                        $_SESSION['registration_success'] = true;
                        $_SESSION['participant_data'] = $formData;
                        header("Location: register_success.php");
                        exit;
                    } else {
                        throw new Exception("Failed to send confirmation email.");
                    }
                } catch (Exception $e) {
                    $pdo->rollBack();
                    $errors[] = "Registration failed: " . $e->getMessage();
                }
            }
        }
    }
}

// Generate CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Function to send confirmation email without PHPMailer
function sendConfirmationEmail($data, $fullPhone, $pdo)
{
    // Get SMTP settings from database
    $stmt = $pdo->query("SELECT * FROM smtp ORDER BY id DESC LIMIT 1");
    $smtpSettings = $stmt->fetch();

    if (!$smtpSettings) {
        return false; // No SMTP settings configured
    }

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
    $subject = "Registration Confirmation - Lifebox Training";
    $message = "
        <h2>Registration Confirmation</h2>
        <p>Thank you for registering for the Lifebox Training Program.</p>
        
        <h3>Your Details:</h3>
        <table border='1' cellpadding='8' style='border-collapse: collapse;'>
            <tr><th>Field</th><th>Value</th></tr>
            <tr><td>Name</td><td>" . htmlspecialchars($data['title_salutation'] . ' ' . $data['first_name'] . ' ' . $data['middle_name'] . ' ' . $data['last_name']) . "</td></tr>
            <tr><td>Gender</td><td>" . htmlspecialchars($sexName) . "</td></tr>
            <tr><td>Email</td><td>" . htmlspecialchars($data['email']) . "</td></tr>
            <tr><td>Phone</td><td>" . htmlspecialchars($fullPhone) . "</td></tr>
            <tr><td>Country</td><td>" . htmlspecialchars($countryName) . "</td></tr>
            <tr><td>Facility</td><td>" . htmlspecialchars($facilityName) . "</td></tr>
            <tr><td>Role</td><td>" . htmlspecialchars($roleName) . "</td></tr>
            <tr><td>Venue</td><td>" . htmlspecialchars($venueName) . "</td></tr>
            <tr><td>Training Date</td><td>" . date('Y-m-d') . "</td></tr>
        </table>
        
        <p>We will contact you with further details about the training program.</p>
        <p>Best regards,<br>Lifebox Team</p>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $smtpSettings['smtpfrom'] . "\r\n";
    $headers .= "Reply-To: " . $smtpSettings['smtpfrom'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email using mail() function
    return mail($data['email'], $subject, $message, $headers);
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Lifebox Training</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- International Telephone Input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #ecf0f1;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        body {
            background: linear-gradient(135deg, var(--light-bg) 0%, #eef2f7 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
        }

        .registration-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2.5rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .registration-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .registration-header img {
            height: 70px;
            margin-bottom: 1rem;
        }

        .registration-header h2 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .registration-header p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }

        .step-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2.5rem;
            position: relative;
        }

        .step-progress::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 4px;
            background: #e9ecef;
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            text-align: center;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .step.active {
            background: var(--secondary-color);
            color: white;
            transform: scale(1.1);
        }

        .step.completed {
            background: #27ae60;
            color: white;
        }

        .step-label {
            display: block;
            margin-top: 0.5rem;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .form-step {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .form-step.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            color: var(--dark-text);
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

        .phone-input-group {
            display: flex;
            gap: 10px;
        }

        .phone-input-group select {
            flex: 0 0 140px;
        }

        .phone-input-group input {
            flex: 1;
        }

        .btn {
            border-radius: var(--border-radius);
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .btn-primary:hover {
            background: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: #95a5a6;
            border-color: #95a5a6;
        }

        .btn-success {
            background: #27ae60;
            border-color: #27ae60;
        }

        .btn-outline-secondary {
            border-color: #95a5a6;
            color: #95a5a6;
        }

        .btn-outline-secondary:hover {
            background: #95a5a6;
            color: white;
        }

        .review-card {
            border: 2px solid #e9ecef;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            background: var(--light-bg);
        }

        .review-card h5 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .review-item {
            margin-bottom: 0.5rem;
        }

        .review-item strong {
            color: var(--primary-color);
            min-width: 120px;
            display: inline-block;
        }

        .select2-container--default .select2-selection--single {
            height: auto;
            padding: 0.75rem 1rem;
            border: 2px solid #e9ecef;
            border-radius: var(--border-radius);
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
        }

        .alert {
            border-radius: var(--border-radius);
            margin-bottom: 1.5rem;
        }

        .flag-icon {
            width: 20px;
            height: 15px;
            margin-right: 8px;
            display: inline-block;
            vertical-align: middle;
            background-size: cover;
            background-position: center;
        }

        /* International Telephone Input Styling */
        .iti {
            width: 100%;
        }

        .iti__flag {
            background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/img/flags.png");
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/img/flags@2x.png");
            }
        }

        @media (max-width: 768px) {
            .registration-container {
                padding: 1.5rem;
                margin: 1rem;
            }

            .phone-input-group {
                flex-direction: column;
            }

            .phone-input-group select {
                flex: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container registration-container">
        <div class="registration-header">
            <img src="../lblogo-dark.svg" alt="Lifebox Logo">
            <h2>Register for Lifebox Training</h2>
            <p class="text-muted">Complete the form below to register for our training program</p>
        </div>

        <!-- Progress Steps -->
        <div class="step-progress">
            <div class="step <?= $step >= 1 ? 'active' : '' ?> <?= $step > 1 ? 'completed' : '' ?>">
                1
                <span class="step-label">Personal Info</span>
            </div>
            <div class="step <?= $step >= 2 ? 'active' : '' ?> <?= $step > 2 ? 'completed' : '' ?>">
                2
                <span class="step-label">Professional Info</span>
            </div>
            <div class="step <?= $step >= 3 ? 'active' : '' ?>">
                3
                <span class="step-label">Verification</span>
            </div>
        </div>

        <!-- Error Messages -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" id="registrationForm">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <input type="hidden" name="step" id="currentStep" value="<?= $step ?>">

            <!-- Step 1: Personal Information -->
            <div class="form-step <?= $step === 1 ? 'active' : '' ?>" id="step1">
                <h4 class="form-section-title"><i class="fas fa-user me-2"></i>Personal Information</h4>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="title_salutation" class="form-label">Title</label>
                        <select class="form-select" id="title_salutation" name="title_salutation">
                            <option value="">Select Title</option>
                            <?php foreach ($salutations as $value => $label): ?>
                                <option value="<?= $value ?>" <?= $formData['title_salutation'] === $value ? 'selected' : '' ?>>
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
                            value="<?= htmlspecialchars($formData['first_name'], ENT_QUOTES, 'UTF-8') ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name"
                            value="<?= htmlspecialchars($formData['middle_name'], ENT_QUOTES, 'UTF-8') ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="last_name" class="form-label">Last Name *</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            value="<?= htmlspecialchars($formData['last_name'], ENT_QUOTES, 'UTF-8') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="sex_id" class="form-label">Gender</label>
                        <select class="form-select" id="sex_id" name="sex_id">
                            <option value="">Select Gender</option>
                            <?php foreach ($sexOptions as $value => $label): ?>
                                <option value="<?= $value ?>" <?= $formData['sex_id'] == $value ? 'selected' : '' ?>>
                                    <?= $label ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?= htmlspecialchars($formData['email'], ENT_QUOTES, 'UTF-8') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number *</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                        <input type="hidden" id="full_phone" name="full_phone">
                        <small class="form-text text-muted">Enter your phone number with country code</small>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <div></div>
                    <button type="button" class="btn btn-primary" id="nextToStep2">Next <i class="fas fa-arrow-right ms-1"></i></button>
                </div>
            </div>

            <!-- Step 2: Professional Information -->
            <div class="form-step <?= $step === 2 ? 'active' : '' ?>" id="step2">
                <h4 class="form-section-title"><i class="fas fa-briefcase me-2"></i>Professional Information</h4>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="country_id" class="form-label">Country *</label>
                        <select class="form-select select2" id="country_id" name="country_id" required>
                            <option value="">Select Country</option>
                            <?php foreach ($countryOptions as $value => $label): ?>
                                <option value="<?= $value ?>" <?= $formData['country_id'] == $value ? 'selected' : '' ?>>
                                    <?= $label ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="facility_id" class="form-label">Facility *</label>
                        <div class="input-group">
                            <select class="form-select select2" id="facility_id" name="facility_id" required>
                                <option value="">Select Facility</option>
                                <?php foreach ($facilityOptions as $value => $label): ?>
                                    <option value="<?= $value ?>" <?= $formData['facility_id'] == $value ? 'selected' : '' ?>>
                                        <?= $label ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addFacilityModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="role_id" class="form-label">Role *</label>
                        <div class="input-group">
                            <select class="form-select select2" id="role_id" name="role_id" required>
                                <option value="">Select Role</option>
                                <?php foreach ($roleOptions as $value => $label): ?>
                                    <option value="<?= $value ?>" <?= $formData['role_id'] == $value ? 'selected' : '' ?>>
                                        <?= $label ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addRoleModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="venue_id" class="form-label">Preferred Training Venue</label>
                        <select class="form-select select2" id="venue_id" name="venue_id">
                            <option value="">Select Venue</option>
                            <?php foreach ($venueOptions as $value => $label): ?>
                                <option value="<?= $value ?>" <?= $formData['venue_id'] == $value ? 'selected' : '' ?>>
                                    <?= $label ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary" id="prevToStep1"><i class="fas fa-arrow-left me-1"></i> Previous</button>
                    <button type="button" class="btn btn-primary" id="nextToStep3">Next <i class="fas fa-arrow-right ms-1"></i></button>
                </div>
            </div>

            <!-- Step 3: Verification -->
            <div class="form-step <?= $step === 3 ? 'active' : '' ?>" id="step3">
                <h4 class="form-section-title"><i class="fas fa-shield-alt me-2"></i>Verification</h4>

                <div class="review-card">
                    <h5>Please review your information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="review-item">
                                <strong>Name:</strong>
                                <span id="review-name"><?= htmlspecialchars($formData['title_salutation'] . ' ' . $formData['first_name'] . ' ' . $formData['middle_name'] . ' ' . $formData['last_name'], ENT_QUOTES, 'UTF-8') ?></span>
                            </div>
                            <div class="review-item">
                                <strong>Email:</strong>
                                <span id="review-email"><?= htmlspecialchars($formData['email'], ENT_QUOTES, 'UTF-8') ?></span>
                            </div>
                            <div class="review-item">
                                <strong>Phone:</strong>
                                <span id="review-phone"><?= htmlspecialchars($formData['phone_code'] . $formData['phone'], ENT_QUOTES, 'UTF-8') ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="review-item">
                                <strong>Country:</strong>
                                <span id="review-country"><?= !empty($formData['country_id']) && isset($countryOptions[$formData['country_id']]) ? htmlspecialchars($countryOptions[$formData['country_id']], ENT_QUOTES, 'UTF-8') : 'Not specified' ?></span>
                            </div>
                            <div class="review-item">
                                <strong>Facility:</strong>
                                <span id="review-facility"><?= !empty($formData['facility_id']) && isset($facilityOptions[$formData['facility_id']]) ? htmlspecialchars($facilityOptions[$formData['facility_id']], ENT_QUOTES, 'UTF-8') : 'Not specified' ?></span>
                            </div>
                            <div class="review-item">
                                <strong>Role:</strong>
                                <span id="review-role"><?= !empty($formData['role_id']) && isset($roleOptions[$formData['role_id']]) ? htmlspecialchars($roleOptions[$formData['role_id']], ENT_QUOTES, 'UTF-8') : 'Not specified' ?></span>
                            </div>
                            <div class="review-item">
                                <strong>Venue:</strong>
                                <span id="review-venue"><?= !empty($formData['venue_id']) && isset($venueOptions[$formData['venue_id']]) ? htmlspecialchars($venueOptions[$formData['venue_id']], ENT_QUOTES, 'UTF-8') : 'Not specified' ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="terms_agree" name="terms_agree" required>
                    <label class="form-check-label" for="terms_agree">
                        I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and conditions</a>
                    </label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary" id="prevToStep2"><i class="fas fa-arrow-left me-1"></i> Previous</button>
                    <button type="submit" class="btn btn-success">Complete Registration <i class="fas fa-check ms-1"></i></button>
                </div>
            </div>
        </form>
    </div>

    <!-- Add Facility Modal -->
    <div class="modal fade" id="addFacilityModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Facility</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addFacilityForm">
                        <div class="mb-3">
                            <label for="new_facility_name" class="form-label">Facility Name</label>
                            <input type="text" class="form-control" id="new_facility_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_facility_country" class="form-label">Country</label>
                            <select class="form-select" id="new_facility_country" required>
                                <option value="">Select Country</option>
                                <?php foreach ($countryOptions as $value => $label): ?>
                                    <option value="<?= $value ?>"><?= $label ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="new_facility_type" class="form-label">Facility Type</label>
                            <input type="text" class="form-control" id="new_facility_type">
                        </div>
                        <div class="mb-3">
                            <label for="new_facility_address" class="form-label">Address</label>
                            <textarea class="form-control" id="new_facility_address" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveFacilityBtn">Save Facility</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Role Modal -->
    <div class="modal fade" id="addRoleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addRoleForm">
                        <div class="mb-3">
                            <label for="new_role_name" class="form-label">Role Name</label>
                            <input type="text" class="form-control" id="new_role_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_role_description" class="form-label">Description</label>
                            <textarea class="form-control" id="new_role_description" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveRoleBtn">Save Role</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms and Conditions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5>Lifebox Training Program Agreement</h5>
                    <p>By registering for the Lifebox Training Program, you agree to the following terms and conditions:</p>
                    <ol>
                        <li>You commit to attending the full duration of the training program.</li>
                        <li>You agree to use the knowledge gained for improving patient safety in your facility.</li>
                        <li>You consent to the collection and processing of your personal data for training purposes.</li>
                        <li>You understand that completion of training does not guarantee certification if assessment criteria are not met.</li>
                        <li>Lifebox reserves the right to modify the training schedule if necessary.</li>
                    </ol>
                    <p>For more details, please contact the Lifebox team at info@lifebox.org.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- International Telephone Input JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('.select2').select2({
                theme: 'bootstrap-5',
                width: '100%'
            });

            // Initialize International Telephone Input
            const phoneInput = window.intlTelInput(document.querySelector("#phone"), {
                initialCountry: "et", // Default to Ethiopia
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            // Update hidden full_phone field before form submission
            $('#registrationForm').on('submit', function() {
                const fullNumber = phoneInput.getNumber();
                $('#full_phone').val(fullNumber);
                updateReviewSection(); // Ensure review section is updated before submission
            });

            // Step Navigation
            $('#nextToStep2').click(function() {
                if (validateStep1()) {
                    // Update phone number in review section
                    const fullNumber = phoneInput.getNumber();
                    $('#review-phone').text(fullNumber);

                    // Proceed to step 2
                    $('#currentStep').val(2);
                    $('.form-step').removeClass('active');
                    $('#step2').addClass('active');
                    updateProgress(2);
                }
            });

            $('#nextToStep3').click(function() {
                if (validateStep2()) {
                    // Update review section with all data
                    updateReviewSection();

                    // Proceed to step 3
                    $('#currentStep').val(3);
                    $('.form-step').removeClass('active');
                    $('#step3').addClass('active');
                    updateProgress(3);
                }
            });

            $('#prevToStep1').click(function() {
                $('#currentStep').val(1);
                $('.form-step').removeClass('active');
                $('#step1').addClass('active');
                updateProgress(1);
            });

            $('#prevToStep2').click(function() {
                $('#currentStep').val(2);
                $('.form-step').removeClass('active');
                $('#step2').addClass('active');
                updateProgress(2);
            });

            // Function to update the review section with current form data
            function updateReviewSection() {
                // Update personal information
                const title = $('#title_salutation').val() || '';
                const firstName = $('#first_name').val() || '';
                const middleName = $('#middle_name').val() || '';
                const lastName = $('#last_name').val() || '';
                $('#review-name').text(`${title} ${firstName} ${middleName} ${lastName}`.trim());

                $('#review-email').text($('#email').val() || '');

                const fullNumber = phoneInput.getNumber();
                $('#review-phone').text(fullNumber || '');

                // Update professional information
                const countryId = $('#country_id').val();
                const countryText = countryId ? $('#country_id option:selected').text() : 'Not specified';
                $('#review-country').text(countryText);

                const facilityId = $('#facility_id').val();
                const facilityText = facilityId ? $('#facility_id option:selected').text() : 'Not specified';
                $('#review-facility').text(facilityText);

                const roleId = $('#role_id').val();
                const roleText = roleId ? $('#role_id option:selected').text() : 'Not specified';
                $('#review-role').text(roleText);

                const venueId = $('#venue_id').val();
                const venueText = venueId ? $('#venue_id option:selected').text() : 'Not specified';
                $('#review-venue').text(venueText);
            }

            // Handle facility addition
            $('#saveFacilityBtn').click(function() {
                const facilityName = $('#new_facility_name').val();
                const countryId = $('#new_facility_country').val();

                if (!facilityName || !countryId) {
                    Swal.fire('Error', 'Please provide both facility name and country', 'error');
                    return;
                }

                // AJAX request to add facility
                $.ajax({
                    url: 'add_facility.php',
                    method: 'POST',
                    data: {
                        facility_name: facilityName,
                        country_id: countryId,
                        facility_type: $('#new_facility_type').val(),
                        address: $('#new_facility_address').val(),
                        csrf_token: "<?= $_SESSION['csrf_token'] ?>"
                    },
                    success: function(response) {
                        if (response.success) {
                            // Add new option to select
                            const newOption = new Option(facilityName, response.facility_id, true, true);
                            $('#facility_id').append(newOption).trigger('change');

                            // Close modal and reset form
                            $('#addFacilityModal').modal('hide');
                            $('#addFacilityForm')[0].reset();

                            Swal.fire('Success', 'Facility added successfully', 'success');
                        } else {
                            Swal.fire('Error', response.message || 'Failed to add facility', 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('Error', 'An error occurred while adding the facility', 'error');
                    }
                });
            });

            // Handle role addition
            $('#saveRoleBtn').click(function() {
                const roleName = $('#new_role_name').val();

                if (!roleName) {
                    Swal.fire('Error', 'Please provide a role name', 'error');
                    return;
                }

                // AJAX request to add role
                $.ajax({
                    url: 'add_role.php',
                    method: 'POST',
                    data: {
                        role_name: roleName,
                        description: $('#new_role_description').val(),
                        csrf_token: "<?= $_SESSION['csrf_token'] ?>"
                    },
                    success: function(response) {
                        if (response.success) {
                            // Add new option to select
                            const newOption = new Option(roleName, response.role_id, true, true);
                            $('#role_id').append(newOption).trigger('change');

                            // Close modal and reset form
                            $('#addRoleModal').modal('hide');
                            $('#addRoleForm')[0].reset();

                            Swal.fire('Success', 'Role added successfully', 'success');
                        } else {
                            Swal.fire('Error', response.message || 'Failed to add role', 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('Error', 'An error occurred while adding the role', 'error');
                    }
                });
            });

            // Form validation functions
            function validateStep1() {
                let isValid = true;
                const errors = [];

                // Reset error states
                $('#first_name, #last_name, #email, #phone').removeClass('is-invalid');

                // Validate first name
                if (!$('#first_name').val().trim()) {
                    $('#first_name').addClass('is-invalid');
                    errors.push('First name is required');
                    isValid = false;
                }

                // Validate last name
                if (!$('#last_name').val().trim()) {
                    $('#last_name').addClass('is-invalid');
                    errors.push('Last name is required');
                    isValid = false;
                }

                // Validate email
                const email = $('#email').val();
                if (!email) {
                    $('#email').addClass('is-invalid');
                    errors.push('Email is required');
                    isValid = false;
                } else if (!isValidEmail(email)) {
                    $('#email').addClass('is-invalid');
                    errors.push('Please enter a valid email address');
                    isValid = false;
                }

                // Validate phone
                if (!phoneInput.isValidNumber()) {
                    $('#phone').addClass('is-invalid');
                    errors.push('Please enter a valid phone number');
                    isValid = false;
                }

                // Show errors if any
                if (!isValid) {
                    Swal.fire({
                        title: 'Please fix the errors',
                        html: '<ul class="text-start"><li>' + errors.join('</li><li>') + '</li></ul>',
                        icon: 'error'
                    });
                }

                return isValid;
            }

            function validateStep2() {
                let isValid = true;
                const errors = [];

                // Reset error states
                $('#country_id, #facility_id, #role_id').removeClass('is-invalid');

                // Validate country
                if (!$('#country_id').val()) {
                    $('#country_id').addClass('is-invalid');
                    errors.push('Country is required');
                    isValid = false;
                }

                // Validate facility
                if (!$('#facility_id').val()) {
                    $('#facility_id').addClass('is-invalid');
                    errors.push('Facility is required');
                    isValid = false;
                }

                // Validate role
                if (!$('#role_id').val()) {
                    $('#role_id').addClass('is-invalid');
                    errors.push('Role is required');
                    isValid = false;
                }

                // Show errors if any
                if (!isValid) {
                    Swal.fire({
                        title: 'Please fix the errors',
                        html: '<ul class="text-start"><li>' + errors.join('</li><li>') + '</li></ul>',
                        icon: 'error'
                    });
                }

                return isValid;
            }

            function isValidEmail(email) {
                const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            function updateProgress(step) {
                // Update step indicators
                $('.step').removeClass('active completed');

                for (let i = 1; i <= 3; i++) {
                    const stepEl = $('.step').eq(i - 1);
                    if (i < step) {
                        stepEl.addClass('completed');
                    } else if (i === step) {
                        stepEl.addClass('active');
                    }
                }

                // Scroll to top of form
                window.scrollTo(0, 0);
            }
        });
    </script>
</body>

</html>