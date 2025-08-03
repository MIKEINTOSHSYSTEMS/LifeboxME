<?php
require_once 'res/session_helper.php';

session_unset();
session_destroy();

// Redirect back to home page
header('Location: index.php');
exit;
