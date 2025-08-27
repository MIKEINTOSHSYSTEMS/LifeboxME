<?php
// src/config.php
return [
    'db' => [
        // change DSN to your DB name; example below uses database 'lifeboxme_quiz'
        'dsn' => 'pgsql:host=127.0.0.1;port=5432;dbname=lifebox_mesystem',
        'user' => 'postgres',
        'pass' => 'mikeintosh',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ],
    ],
    'app' => [
        'base_url' => '/lifebox-quiz/public'  // adjust to your hosting path
    ]
];
