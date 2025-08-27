<?php
return [
    'tablePrefix' => '',
    'charset' => 'utf8mb4',
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 86400,
    'schemaCache' => 'cache',
    'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=lifeboxme_forms', // dev
    'dsn' => 'mysql:host=192.168.47.5;port=3306;dbname=lifeboxme_forms', // prod
    'username' => 'lifeboxme_system',
    'password' => 'lifeboxme_system',
];
