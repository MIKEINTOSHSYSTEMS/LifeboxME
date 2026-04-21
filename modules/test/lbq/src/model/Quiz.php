<?php
// src/model/Quiz.php
class Quiz
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listTests($limit = 100, $active_only = false)
    {
        $sql = "SELECT t.*, s.*,
                (SELECT COUNT(*) FROM lbquiz_test_questions tq WHERE tq.test_id = t.id) as question_count
                FROM lbquiz_tests t
                LEFT JOIN training_sessions s ON s.training_id = t.training_id
                WHERE 1=1";

        if ($active_only) {
            $sql .= " AND t.is_active = true";
        }

        $sql .= " ORDER BY t.created_at DESC LIMIT :lim";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':lim', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getTest($test_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM lbquiz_tests WHERE id = :id");
        $stmt->execute([':id' => $test_id]);
        return $stmt->fetch();
    }

    public function createTest($training_id, $title, $description = null, $time_limit = null, $is_pretest = false, $is_active = true)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO lbquiz_tests
        (training_id, title, description, time_limit_minutes, is_pretest, is_active)
        VALUES (:tid, :title, :desc, :time, :pre, :active) RETURNING id"
        );

        $stmt->bindValue(':tid', $training_id, PDO::PARAM_INT);
        $stmt->bindValue(':title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':desc', $description, PDO::PARAM_STR);

        // Handle null time limit
        if ($time_limit === null || $time_limit === '') {
            $stmt->bindValue(':time', null, PDO::PARAM_NULL);
        } else {
            $stmt->bindValue(':time', (int)$time_limit, PDO::PARAM_INT);
        }

        // Use proper PostgreSQL boolean casting
        $stmt->bindValue(':pre', $is_pretest ? 'true' : 'false', PDO::PARAM_STR);
        $stmt->bindValue(':active', $is_active ? 'true' : 'false', PDO::PARAM_STR);

        $stmt->execute();
        $row = $stmt->fetch();
        return $row ? $row['id'] : null;
    }

    public function updateTest($id, $title, $description, $time_limit, $is_active, $is_pretest, $training_id = null)
    {
        // Build the SQL dynamically based on what's provided
        $sql = "UPDATE lbquiz_tests SET 
                title = :title, 
                description = :desc, 
                time_limit_minutes = :time,
                is_active = :active, 
                is_pretest = :pre";

        $params = [
            ':title' => $title,
            ':desc' => $description,
            ':time' => ($time_limit === null || $time_limit === '') ? null : (int)$time_limit,
            ':active' => $is_active ? 'true' : 'false',
            ':pre' => $is_pretest ? 'true' : 'false',
            ':id' => (int)$id
        ];

        if ($training_id !== null && $training_id > 0) {
            $sql .= ", training_id = :tid";
            $params[':tid'] = (int)$training_id;
        }

        $sql .= " WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($params);

        return $stmt->rowCount();
    }

    public function deleteTest($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM lbquiz_tests WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->rowCount();
    }

    public function getTestQuestions($test_id)
    {
        $sql = "SELECT tq.*, q.question, q.qtype, q.videolink
                FROM lbquiz_test_questions tq
                JOIN quiz_questions q ON q.id = tq.quiz_question_id
                WHERE tq.test_id = :test_id
                ORDER BY tq.position ASC, tq.id ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':test_id' => $test_id]);
        $rows = $stmt->fetchAll();

        foreach ($rows as &$r) {
            $s = $this->pdo->prepare("SELECT id, text, picture, correct FROM public.quiz_answers WHERE questionid = :qid ORDER BY id");
            $s->execute([':qid' => $r['quiz_question_id']]);
            $r['answers'] = $s->fetchAll();

            // Ensure weight is float
            $r['weight'] = floatval($r['weight']);
            // Ensure position is int
            $r['position'] = intval($r['position']);
        }
        return $rows;
    }

    public function listQuestionsNotInTest($test_id, $filters = [])
    {
        $sql = "SELECT q.*,
                (SELECT string_agg(text, ', ') FROM quiz_answers WHERE questionid = q.id) as answer_preview
                FROM quiz_questions q
                WHERE q.id NOT IN (SELECT quiz_question_id FROM lbquiz_test_questions WHERE test_id = :test_id)";

        // Add filters if provided
        if (!empty($filters['qtype'])) {
            $sql .= " AND q.qtype = :qtype";
        }

        if (!empty($filters['search'])) {
            $sql .= " AND q.question ILIKE :search";
        }

        $sql .= " ORDER BY q.id DESC";

        $stmt = $this->pdo->prepare($sql);
        $params = [':test_id' => $test_id];

        if (!empty($filters['qtype'])) {
            $params[':qtype'] = (int)$filters['qtype'];
        }

        if (!empty($filters['search'])) {
            $params[':search'] = '%' . $filters['search'] . '%';
        }

        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function addQuestionToTest($test_id, $quiz_question_id, $weight = 1.0, $position = null)
    {
        // Check if already exists
        $stmt = $this->pdo->prepare("SELECT id FROM lbquiz_test_questions WHERE test_id = :t AND quiz_question_id = :q");
        $stmt->execute([':t' => $test_id, ':q' => $quiz_question_id]);
        $exists = $stmt->fetch();

        if ($exists) {
            // Update existing
            $stmt = $this->pdo->prepare("UPDATE lbquiz_test_questions SET weight = :w WHERE test_id = :t AND quiz_question_id = :q");
            $stmt->execute([':w' => (float)$weight, ':t' => $test_id, ':q' => $quiz_question_id]);
            return true;
        } else {
            // Insert new - use provided position or calculate next position
            if ($position === null) {
                $stmt = $this->pdo->prepare("SELECT COALESCE(MAX(position), 0) + 1 as new_position
                                            FROM lbquiz_test_questions WHERE test_id = :t");
                $stmt->execute([':t' => $test_id]);
                $row = $stmt->fetch();
                $position = $row ? (int)$row['new_position'] : 1;
            }

            $stmt = $this->pdo->prepare("INSERT INTO lbquiz_test_questions (test_id, quiz_question_id, weight, position)
                                        VALUES (:t, :q, :w, :p)");
            $stmt->execute([
                ':t' => $test_id,
                ':q' => $quiz_question_id,
                ':w' => (float)$weight,
                ':p' => (int)$position
            ]);
            return true;
        }
    }

    public function removeQuestionFromTest($test_id, $quiz_question_id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM lbquiz_test_questions WHERE test_id = :t AND quiz_question_id = :q");
        $stmt->execute([':t' => $test_id, ':q' => $quiz_question_id]);

        // Reorder remaining questions to ensure no gaps
        $this->reorderTestQuestions($test_id);

        return $stmt->rowCount();
    }

    public function updateQuestionWeight($test_id, $quiz_question_id, $weight, $position = null)
    {
        try {
            $this->pdo->beginTransaction();

            $sql = "UPDATE lbquiz_test_questions SET weight = :w";
            $params = [
                ':w' => $weight,
                ':t' => $test_id,
                ':q' => $quiz_question_id
            ];

            if ($position !== null) {
                $sql .= ", position = :p";
                $params[':p'] = $position;
            }

            $sql .= " WHERE test_id = :t AND quiz_question_id = :q";

            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute($params);
            $rowCount = $stmt->rowCount();

            // Log the update for debugging
            error_log("Update weight/position - SQL: $sql, Params: " . json_encode($params) . ", Rows affected: $rowCount");

            // If position was updated, reorder to ensure consistency
            if ($position !== null) {
                $this->reorderTestQuestions($test_id);
            }

            $this->pdo->commit();
            return $rowCount;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            error_log("Error updating question weight/position: " . $e->getMessage());
            throw $e; // Re-throw to be caught by the caller
        }
    }

    public function updateQuestionPosition($test_id, $quiz_question_id, $new_position)
    {
        $stmt = $this->pdo->prepare("UPDATE lbquiz_test_questions SET position = :pos
                                    WHERE test_id = :t AND quiz_question_id = :q");
        $stmt->execute([':pos' => (int)$new_position, ':t' => $test_id, ':q' => $quiz_question_id]);

        // Reorder to ensure no gaps
        $this->reorderTestQuestions($test_id);

        return $stmt->rowCount();
    }

    public function reorderTestQuestions($test_id)
    {
        // Get all questions for this test ordered by current position
        $stmt = $this->pdo->prepare("
            SELECT id, position 
            FROM lbquiz_test_questions 
            WHERE test_id = :test_id 
            ORDER BY position ASC, id ASC
        ");
        $stmt->execute([':test_id' => $test_id]);
        $questions = $stmt->fetchAll();

        // Update positions to be sequential starting from 1
        $updateStmt = $this->pdo->prepare("
            UPDATE lbquiz_test_questions 
            SET position = :new_pos 
            WHERE id = :id
        ");

        foreach ($questions as $index => $question) {
            $newPosition = $index + 1;
            if ($question['position'] != $newPosition) {
                $updateStmt->execute([
                    ':new_pos' => $newPosition,
                    ':id' => $question['id']
                ]);
            }
        }

        return true;
    }

    public function bulkUpdateWeights($test_id, $operation, $value)
    {
        try {
            // Get all questions for this test
            $stmt = $this->pdo->prepare("
                SELECT quiz_question_id, weight 
                FROM lbquiz_test_questions 
                WHERE test_id = :test_id
            ");
            $stmt->execute([':test_id' => $test_id]);
            $questions = $stmt->fetchAll();

            $updateStmt = $this->pdo->prepare("
                UPDATE lbquiz_test_questions 
                SET weight = :new_weight 
                WHERE test_id = :test_id AND quiz_question_id = :qid
            ");

            $updated = 0;
            foreach ($questions as $question) {
                $currentWeight = floatval($question['weight']);
                $newWeight = $currentWeight;

                switch ($operation) {
                    case 'set':
                        $newWeight = floatval($value);
                        break;
                    case 'multiply':
                        $newWeight = $currentWeight * floatval($value);
                        break;
                    case 'add':
                        $newWeight = $currentWeight + floatval($value);
                        break;
                }

                // Ensure weight is not negative or zero
                $newWeight = max(0.1, $newWeight);

                $updateStmt->execute([
                    ':new_weight' => $newWeight,
                    ':test_id' => $test_id,
                    ':qid' => $question['quiz_question_id']
                ]);

                $updated += $updateStmt->rowCount();
            }

            return $updated;
        } catch (PDOException $e) {
            error_log("Error in bulk weight update: " . $e->getMessage());
            return 0;
        }
    }

    public function createResponse($participation_id, $test_id, $raw_answers_json, $userid = null)
    {
        $checksum = hash('sha256', $participation_id . '|' . $test_id . '|' . microtime(true));

        $stmt = $this->pdo->prepare("INSERT INTO lbquiz_responses
                                (participation_id, test_id, userid, raw_answers, checksum)
                                VALUES (:pid, :tid, :uid, :raw, :ck) RETURNING id");

        $params = [
            ':pid' => $participation_id,
            ':tid' => $test_id,
            ':raw' => $raw_answers_json,
            ':ck' => $checksum
        ];

        // Handle userid (can be null)
        if ($userid !== null) {
            $params[':uid'] = (int)$userid;
        } else {
            $params[':uid'] = null;
        }

        $stmt->execute($params);
        $resp = $stmt->fetch();
        return $resp ? $resp['id'] : null;
    }

    public function insertResponseDetails($response_id, $details)
    {
        $stmt = $this->pdo->prepare("INSERT INTO lbquiz_response_details
                                    (response_id, quiz_question_id, answer_ids, answer_text, points_awarded)
                                    VALUES (:rid, :qid, :aids, :atext, 0)");
        foreach ($details as $d) {
            // answer_ids in Postgres array literal form
            if (isset($d['answer_ids']) && is_array($d['answer_ids'])) {
                $aids = '{' . implode(',', array_map('intval', $d['answer_ids'])) . '}';
            } else {
                $aids = '{}';
            }
            $stmt->execute([
                ':rid' => $response_id,
                ':qid' => $d['quiz_question_id'],
                ':aids' => $aids,
                ':atext' => $d['answer_text'] ?? null
            ]);
        }
    }

    public function getResponse($response_id)
    {
        $stmt = $this->pdo->prepare("SELECT r.*, t.title as test_title
                                    FROM lbquiz_responses r
                                    LEFT JOIN lbquiz_tests t ON t.id = r.test_id
                                    WHERE r.id = :id");
        $stmt->execute([':id' => $response_id]);
        return $stmt->fetch();
    }

    public function listResponses($test_id = null, $limit = 200)
    {
        $sql = "SELECT r.*, t.title as test_title
                FROM lbquiz_responses r
                LEFT JOIN lbquiz_tests t ON t.id = r.test_id";

        if ($test_id) {
            $sql .= " WHERE r.test_id = :test_id";
        }

        $sql .= " ORDER BY r.created_at DESC LIMIT :lim";

        $stmt = $this->pdo->prepare($sql);

        if ($test_id) {
            $stmt->bindValue(':test_id', $test_id, PDO::PARAM_INT);
        }

        $stmt->bindValue(':lim', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getQuestion($question_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM public.quiz_questions WHERE id = :id");
        $stmt->execute([':id' => $question_id]);
        return $stmt->fetch();
    }

    public function createQuestion($question, $qtype, $videolink = null)
    {
        $stmt = $this->pdo->prepare("INSERT INTO public.quiz_questions (question, qtype, videolink) 
                                    VALUES (:q, :t, :v) RETURNING id");
        $stmt->execute([':q' => $question, ':t' => $qtype, ':v' => $videolink]);
        $row = $stmt->fetch();
        return $row ? $row['id'] : null;
    }

    public function updateQuestion($id, $question, $qtype, $videolink = null)
    {
        $stmt = $this->pdo->prepare("UPDATE public.quiz_questions 
                                    SET question = :q, qtype = :t, videolink = :v 
                                    WHERE id = :id");
        $stmt->execute([':q' => $question, ':t' => $qtype, ':v' => $videolink, ':id' => $id]);
        return $stmt->rowCount();
    }

    public function deleteQuestion($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM public.quiz_questions WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->rowCount();
    }

    public function getQuestionAnswers($question_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM public.quiz_answers WHERE questionid = :qid ORDER BY id");
        $stmt->execute([':qid' => $question_id]);
        return $stmt->fetchAll();
    }

    public function addAnswer($question_id, $text, $correct = false, $picture = null)
    {
        $stmt = $this->pdo->prepare("INSERT INTO public.quiz_answers (questionid, text, picture, correct) 
                                VALUES (:qid, :t, :p, :c) RETURNING id");

        // Use proper PostgreSQL boolean representation
        $correct_value = $correct ? 'true' : 'false';

        $stmt->execute([
            ':qid' => $question_id,
            ':t' => $text,
            ':p' => $picture,
            ':c' => $correct_value
        ]);
        $row = $stmt->fetch();
        return $row ? $row['id'] : null;
    }

    public function updateAnswer($answer_id, $text, $correct = false, $picture = null)
    {
        $stmt = $this->pdo->prepare("UPDATE public.quiz_answers 
                                SET text = :t, picture = :p, correct = :c 
                                WHERE id = :id");

        // Use proper PostgreSQL boolean representation
        $correct_value = $correct ? 'true' : 'false';

        $stmt->execute([
            ':t' => $text,
            ':p' => $picture,
            ':c' => $correct_value,
            ':id' => $answer_id
        ]);
        return $stmt->rowCount();
    }

    public function deleteAnswer($answer_id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM public.quiz_answers WHERE id = :id");
        $stmt->execute([':id' => $answer_id]);
        return $stmt->rowCount();
    }

    public function getResponseDetails($response_id)
    {
        $stmt = $this->pdo->prepare("SELECT rd.*, q.question, q.qtype
                                    FROM lbquiz_response_details rd
                                    JOIN quiz_questions q ON q.id = rd.quiz_question_id
                                    WHERE rd.response_id = :rid
                                    ORDER BY rd.id");
        $stmt->execute([':rid' => $response_id]);
        return $stmt->fetchAll();
    }
}
