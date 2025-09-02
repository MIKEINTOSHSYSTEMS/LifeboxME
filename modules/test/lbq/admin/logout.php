<?php

require __DIR__ . '/session_helper.php';
session_unset();
session_destroy();
header('Location: login.php');

/*
session_start();
session_destroy();
header('Location: login.php');
*/
exit;
