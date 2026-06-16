<?php
/**
 * One-time migration: populate lbquiz_test_sessions from existing lbquiz_tests.training_id
 * Run once after creating the pivot table to ensure backward compatibility.
 * 
 * Usage: php migrate_test_sessions.php
 * Or:    Access via browser after securing the file
 */

require __DIR__ . '/src/db.php';

echo "Migrating existing tests to pivot table...\n";

$stmt = $pdo->query("SELECT id, training_id FROM lbquiz_tests WHERE training_id IS NOT NULL AND training_id > 0");
$tests = $stmt->fetchAll();

$count = 0;
foreach ($tests as $t) {
    $check = $pdo->prepare("SELECT COUNT(*) FROM lbquiz_test_sessions WHERE test_id = :test_id AND training_id = :training_id");
    $check->execute([':test_id' => $t['id'], ':training_id' => $t['training_id']]);
    if ($check->fetchColumn() == 0) {
        $insert = $pdo->prepare("INSERT INTO lbquiz_test_sessions (test_id, training_id) VALUES (:test_id, :training_id) ON CONFLICT DO NOTHING");
        $insert->execute([':test_id' => $t['id'], ':training_id' => $t['training_id']]);
        $count++;
    }
}

echo "Migrated $count existing test-training mappings.\n";
echo "Done.\n";