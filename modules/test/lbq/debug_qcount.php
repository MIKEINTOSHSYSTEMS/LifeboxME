<?php
require __DIR__ . '/src/db.php';

echo "--- Tests with question counts ---\n";
$tests = $pdo->query("SELECT t.id, t.title, (SELECT COUNT(*) FROM lbquiz_test_questions tq WHERE tq.test_id = t.id) as qcount FROM lbquiz_tests t ORDER BY t.id")->fetchAll();
foreach ($tests as $t) {
    echo "Test #" . $t['id'] . ": " . $t['title'] . " - qcount=" . $t['qcount'] . "\n";
}

echo "\n--- lbquiz_test_questions ---\n";
$tqs = $pdo->query("SELECT tq.*, q.question as qtext FROM lbquiz_test_questions tq LEFT JOIN quiz_questions q ON q.id = tq.quiz_question_id ORDER BY tq.id LIMIT 30")->fetchAll();
foreach ($tqs as $tq) {
    echo "  id=" . $tq['id'] . " test_id=" . $tq['test_id'] . " quiz_question_id=" . $tq['quiz_question_id'] . " question=" . ($tq['qtext'] ?? 'NULL') . "\n";
}

echo "\n--- Check for orphaned questions (deleted from quiz_questions but still in test_questions) ---\n";
$orphans = $pdo->query("SELECT tq.* FROM lbquiz_test_questions tq LEFT JOIN quiz_questions q ON q.id = tq.quiz_question_id WHERE q.id IS NULL")->fetchAll();
echo "Orphaned records: " . count($orphans) . "\n";
foreach ($orphans as $o) {
    echo "  id=" . $o['id'] . " test_id=" . $o['test_id'] . " quiz_question_id=" . $o['quiz_question_id'] . "\n";
}
