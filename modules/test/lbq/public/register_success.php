<?php
session_start();

if (!isset($_SESSION['registration_success']) || !$_SESSION['registration_success']) {
    header('Location: register.php');
    exit;
}

$participantData = $_SESSION['participant_data'] ?? [];
unset($_SESSION['registration_success']);
unset($_SESSION['participant_data']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful - Lifebox Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #eef2f7 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .success-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2.5rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .checkmark {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 1rem;
        }

        h2 {
            color: #2c3e50;
            font-weight: 700;
        }

        .btn-primary {
            background: #3498db;
            border-color: #3498db;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container success-container">
        <div class="checkmark">
            <i class="fas fa-check-circle"></i>
        </div>
        <h2>Registration Successful!</h2>
        <p class="lead">Thank you for registering for the Lifebox Training Program.</p>
        <p>A confirmation email has been sent to <strong><?= htmlspecialchars($participantData['email'] ?? '', ENT_QUOTES, 'UTF-8') ?></strong>.</p>
        <p>We will contact you with further details about the training schedule.</p>
        <div class="mt-4">
            <a href="index.php" class="btn btn-primary">Return to Homepage</a>
        </div>
    </div>
</body>

</html>