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
                LEFT JOIN public.training_sessions s ON s.training_id = t.training_id 
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
        if ($time_limit === null) {
            $stmt->bindValue(':time', null, PDO::PARAM_NULL);
        } else {
            $stmt->bindValue(':time', $time_limit, PDO::PARAM_INT);
        }

        $stmt->bindValue(':pre', (bool)$is_pretest, PDO::PARAM_BOOL);
        $stmt->bindValue(':active', (bool)$is_active, PDO::PARAM_BOOL);

        $stmt->execute();
        $row = $stmt->fetch();
        return $row ? $row['id'] : null;
    }


    public function updateTest($id, $title, $description, $time_limit, $is_active, $is_pretest)
    {
        $stmt = $this->pdo->prepare("UPDATE lbquiz_tests 
                                    SET title = :title, description = :desc, time_limit_minutes = :time, 
                                    is_active = :active, is_pretest = :pre 
                                    WHERE id = :id");
        $stmt->execute([
            ':title' => $title,
            ':desc' => $description,
            ':time' => $time_limit,
            ':active' => $is_active,
            ':pre' => $is_pretest,
            ':id' => $id
        ]);
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
                JOIN public.quiz_questions q ON q.id = tq.quiz_question_id
                WHERE tq.test_id = :test_id
                ORDER BY tq.position ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':test_id' => $test_id]);
        $rows = $stmt->fetchAll();
        foreach ($rows as &$r) {
            $s = $this->pdo->prepare("SELECT id, text, picture, correct FROM public.quiz_answers WHERE questionid = :qid ORDER BY id");
            $s->execute([':qid' => $r['quiz_question_id']]);
            $r['answers'] = $s->fetchAll();
        }
        return $rows;
    }

    public function listQuestionsNotInTest($test_id, $filters = [])
    {
        $sql = "SELECT q.*, 
                (SELECT string_agg(text, ', ') FROM public.quiz_answers WHERE questionid = q.id) as answer_preview
                FROM public.quiz_questions q 
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
            $params[':qtype'] = $filters['qtype'];
        }

        if (!empty($filters['search'])) {
            $params[':search'] = '%' . $filters['search'] . '%';
        }

        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function addQuestionToTest($test_id, $quiz_question_id, $weight = 1.0, $position = 9999)
    {
        // First get the max position for this test
        $stmt = $this->pdo->prepare("SELECT COALESCE(MAX(position), 0) + 1 as new_position 
                                    FROM lbquiz_test_questions WHERE test_id = :t");
        $stmt->execute([':t' => $test_id]);
        $row = $stmt->fetch();
        $position = $row['new_position'];

        $stmt = $this->pdo->prepare("INSERT INTO lbquiz_test_questions (test_id, quiz_question_id, weight, position) 
                                    VALUES (:t, :q, :w, :p) ON CONFLICT DO NOTHING");
        $stmt->execute([':t' => $test_id, ':q' => $quiz_question_id, ':w' => $weight, ':p' => $position]);
    }

    public function removeQuestionFromTest($test_id, $quiz_question_id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM lbquiz_test_questions WHERE test_id = :t AND quiz_question_id = :q");
        $stmt->execute([':t' => $test_id, ':q' => $quiz_question_id]);
    }

    public function updateQuestionPosition($test_id, $quiz_question_id, $new_position)
    {
        $stmt = $this->pdo->prepare("UPDATE lbquiz_test_questions SET position = :pos 
                                    WHERE test_id = :t AND quiz_question_id = :q");
        $stmt->execute([':pos' => $new_position, ':t' => $test_id, ':q' => $quiz_question_id]);
    }

    public function createResponse($participation_id, $test_id, $userid = null, $raw_answers_json)
    {
        $checksum = hash('sha256', $participation_id . '|' . $test_id . '|' . microtime(true));
        $stmt = $this->pdo->prepare("INSERT INTO lbquiz_responses (participation_id, test_id, userid, raw_answers, checksum) 
                                    VALUES (:pid, :tid, :uid, :raw, :ck) RETURNING id");
        $stmt->execute([
            ':pid' => $participation_id,
            ':tid' => $test_id,
            ':uid' => $userid,
            ':raw' => $raw_answers_json,
            ':ck' => $checksum
        ]);
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

        // For PostgreSQL, we need to use proper boolean values
        // Convert PHP boolean to PostgreSQL boolean (true/false)
        $correct_value = $correct ? 'true' : 'false';

        $stmt->execute([
            ':qid' => $question_id,
            ':t' => $text,
            ':p' => $picture,
            ':c' => $correct_value  // Use string representation
        ]);
        $row = $stmt->fetch();
        return $row ? $row['id'] : null;
    }

    public function updateAnswer($answer_id, $text, $correct = false, $picture = null)
    {
        $stmt = $this->pdo->prepare("UPDATE public.quiz_answers 
                                SET text = :t, picture = :p, correct = :c 
                                WHERE id = :id");

        // Convert PHP boolean to PostgreSQL boolean (true/false)
        $correct_value = $correct ? 'true' : 'false';

        $stmt->execute([
            ':t' => $text,
            ':p' => $picture,
            ':c' => $correct_value,  // Use string representation
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
                                    JOIN public.quiz_questions q ON q.id = rd.quiz_question_id
                                    WHERE rd.response_id = :rid
                                    ORDER BY rd.id");
        $stmt->execute([':rid' => $response_id]);
        return $stmt->fetchAll();
    }
}
