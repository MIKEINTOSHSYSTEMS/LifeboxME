<?php
session_start();
if (!empty($_POST)) {
  $user = trim($_POST['username'] ?? '');
  $pass = trim($_POST['password'] ?? '');

  // WARNING: demo-only. Replace with proper auth in production
  //if ($user === 'admin' && $pass === 'adminpass') {
  if ($user === 'admin' && $pass === 'merqadmin') {
    $_SESSION['admin'] = true;
    header('Location: dashboard.php');
    exit;
  } else {
    $error = "Invalid credentials";
  }
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
  <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
  <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">

</head>

<body class="bg-light">
  <div class="container py-5">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          <h4>Admin Login</h4>
        </div>
        <div class="card-body">
          <?php if (!empty($error)): ?><div class="alert alert-danger"><?= htmlspecialchars($error) ?></div><?php endif; ?>
          <form method="post">
            <div class="mb-3"><input class="form-control" name="username" placeholder="Username" required></div>
            <div class="mb-3"><input type="password" class="form-control" name="password" placeholder="Password" required></div>
            <button class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>