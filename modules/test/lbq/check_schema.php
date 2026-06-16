<?php
require __DIR__ . '/src/db.php';
$tables = ['training_participation', 'lbquiz_responses', 'lbquiz_tests', 'training_participants'];
foreach ($tables as $t) {
    echo "=== $t ===\n";
    $cols = $pdo->query("SELECT column_name, data_type, is_nullable FROM information_schema.columns WHERE table_name = '$t' AND table_schema = 'public' ORDER BY ordinal_position")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($cols as $c) {
        echo "  {$c['column_name']} ({$c['data_type']})\n";
    }
    echo "\n";
}
