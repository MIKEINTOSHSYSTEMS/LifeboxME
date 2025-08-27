```sql
-- 1. ENUM for Question Types
-- ----------------------------
DROP TYPE IF EXISTS "public"."lbexam_question_type_enum";
CREATE TYPE "public"."lbexam_question_type_enum" AS ENUM (
    'Single choice',
    'Multiple choice',
    'Decision matrix',
    'Fill in blanks'
);
ALTER TYPE "public"."lbexam_question_type_enum" OWNER TO "postgres";

-- 2. SEQUENCES
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."lbexam_question_banks_bank_id_seq";
CREATE SEQUENCE "public"."lbexam_question_banks_bank_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

DROP SEQUENCE IF EXISTS "public"."lbexam_questions_question_id_seq";
CREATE SEQUENCE "public"."lbexam_questions_question_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

DROP SEQUENCE IF EXISTS "public"."lbexam_options_option_id_seq";
CREATE SEQUENCE "public"."lbexam_options_option_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

DROP SEQUENCE IF EXISTS "public"."lbexam_exams_exam_id_seq";
CREATE SEQUENCE "public"."lbexam_exams_exam_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

DROP SEQUENCE IF EXISTS "public"."lbexam_exam_questions_eq_id_seq";
CREATE SEQUENCE "public"."lbexam_exam_questions_eq_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

DROP SEQUENCE IF EXISTS "public"."lbexam_attempts_attempt_id_seq";
CREATE SEQUENCE "public"."lbexam_attempts_attempt_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

DROP SEQUENCE IF EXISTS "public"."lbexam_attempt_answers_answer_id_seq";
CREATE SEQUENCE "public"."lbexam_attempt_answers_answer_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- 3. TABLES
-- ----------------------------

-- Question Banks (group questions by topic/category)
DROP TABLE IF EXISTS "public"."lbexam_question_banks";
CREATE TABLE "public"."lbexam_question_banks" (
  "bank_id" int4 NOT NULL DEFAULT nextval('lbexam_question_banks_bank_id_seq'::regclass),
  "bank_name" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "description" text COLLATE "pg_catalog"."default",
  "course_id" int4, -- Optional link to a specific course
  "is_active" bool DEFAULT true,
  "created_by" int4, -- user ID
  "created_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  "updated_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT "lbexam_question_banks_pkey" PRIMARY KEY ("bank_id")
);

-- Questions Table
DROP TABLE IF EXISTS "public"."lbexam_questions";
CREATE TABLE "public"."lbexam_questions" (
  "question_id" int4 NOT NULL DEFAULT nextval('lbexam_questions_question_id_seq'::regclass),
  "bank_id" int4 NOT NULL,
  "question_text" text COLLATE "pg_catalog"."default" NOT NULL,
  "question_type" "public"."lbexam_question_type_enum" NOT NULL,
  "points" numeric(5,2) DEFAULT 1.00, -- Points for this question
  "explanation" text COLLATE "pg_catalog"."default", -- Explanation for the answer
  "is_active" bool DEFAULT true,
  "created_by" int4,
  "created_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  "updated_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT "lbexam_questions_pkey" PRIMARY KEY ("question_id")
);

-- Options/Answers for Questions (For MC, SC, Matrix)
DROP TABLE IF EXISTS "public"."lbexam_options";
CREATE TABLE "public"."lbexam_options" (
  "option_id" int4 NOT NULL DEFAULT nextval('lbexam_options_option_id_seq'::regclass),
  "question_id" int4 NOT NULL,
  "option_text" text COLLATE "pg_catalog"."default" NOT NULL,
  "is_correct" bool DEFAULT false,
  "option_order" int4 DEFAULT 0, -- For ordering options
  "matrix_row" varchar(100) COLLATE "pg_catalog"."default", -- For decision matrix type
  "matrix_column" varchar(100) COLLATE "pg_catalog"."default", -- For decision matrix type
  "created_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  "updated_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT "lbexam_options_pkey" PRIMARY KEY ("option_id")
);

-- Exams/Tests Definition (links a test to a training session and defines its properties)
DROP TABLE IF EXISTS "public"."lbexam_exams";
CREATE TABLE "public"."lbexam_exams" (
  "exam_id" int4 NOT NULL DEFAULT nextval('lbexam_exams_exam_id_seq'::regclass),
  "training_id" int4 NOT NULL, -- from training_sessions
  "exam_title" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "exam_type" varchar(20) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 'Post-Test' CHECK (exam_type IN ('Pre-Test', 'Post-Test', 'Quiz')), -- Pre/Post Test or general Quiz
  "description" text COLLATE "pg_catalog"."default",
  "time_limit_minutes" int4 DEFAULT 30, -- 0 for no time limit
  "passing_score" numeric(5,2) DEFAULT 70.00, -- Percentage
  "max_attempts" int4 DEFAULT 1,
  "shuffle_questions" bool DEFAULT false,
  "shuffle_options" bool DEFAULT false,
  "show_correct_answers" bool DEFAULT false, -- Whether to show answers after submission
  "is_active" bool DEFAULT true,
  "available_from" timestamptz(6), -- When the exam becomes available
  "available_to" timestamptz(6), -- When the exam becomes unavailable
  "created_by" int4,
  "created_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  "updated_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT "lbexam_exams_pkey" PRIMARY KEY ("exam_id"),
  CONSTRAINT "unique_exam_per_training_type" UNIQUE ("training_id", "exam_type") -- Optional: Ensure one Pre and one Post test per session
);

-- Exam Questions (Links questions to exams, allows overriding points per exam)
DROP TABLE IF EXISTS "public"."lbexam_exam_questions";
CREATE TABLE "public"."lbexam_exam_questions" (
  "eq_id" int4 NOT NULL DEFAULT nextval('lbexam_exam_questions_eq_id_seq'::regclass),
  "exam_id" int4 NOT NULL,
  "question_id" int4 NOT NULL,
  "points" numeric(5,2), -- Can override the question's default points
  "question_order" int4 DEFAULT 0,
  "created_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT "lbexam_exam_questions_pkey" PRIMARY KEY ("eq_id"),
  CONSTRAINT "unique_question_per_exam" UNIQUE ("exam_id", "question_id")
);

-- Exam Attempts (Records each time a participant takes an exam)
DROP TABLE IF EXISTS "public"."lbexam_attempts";
CREATE TABLE "public"."lbexam_attempts" (
  "attempt_id" int4 NOT NULL DEFAULT nextval('lbexam_attempts_attempt_id_seq'::regclass),
  "exam_id" int4 NOT NULL,
  "participation_id" int4 NOT NULL, -- from training_participation
  "attempt_number" int4 NOT NULL DEFAULT 1,
  "started_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  "finished_at" timestamptz(6),
  "time_taken_seconds" int4 DEFAULT 0,
  "score" numeric(5,2) DEFAULT 0.00, -- Calculated score
  "status" varchar(20) COLLATE "pg_catalog"."default" DEFAULT 'In Progress' CHECK (status IN ('In Progress', 'Submitted', 'Graded', 'Abandoned')),
  "graded_by" int4, -- user ID who graded it (for manual questions)
  "graded_at" timestamptz(6),
  "created_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  "updated_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT "lbexam_attempts_pkey" PRIMARY KEY ("attempt_id")
);

-- Attempt Answers (Stores the participant's answers)
DROP TABLE IF EXISTS "public"."lbexam_attempt_answers";
CREATE TABLE "public"."lbexam_attempt_answers" (
  "answer_id" int4 NOT NULL DEFAULT nextval('lbexam_attempt_answers_answer_id_seq'::regclass),
  "attempt_id" int4 NOT NULL,
  "eq_id" int4 NOT NULL, -- from lbexam_exam_questions
  "question_id" int4 NOT NULL, -- from lbexam_questions (redundant but useful for queries)
  "answer_text" text COLLATE "pg_catalog"."default", -- For 'Fill in blanks' or text responses
  "option_id" int4, -- For 'Single choice', links to lbexam_options
  "option_ids" _int4, -- For 'Multiple choice', array of selected option IDs
  "matrix_answers" jsonb, -- For 'Decision matrix', stores {row: {col: selected_option_id}}
  "points_awarded" numeric(5,2) DEFAULT 0.00, -- Points awarded for this specific answer
  "is_correct" bool, -- Was the answer correct?
  "graded_manually" bool DEFAULT false, -- Needed manual grading?
  "feedback" text COLLATE "pg_catalog"."default", -- Instructor feedback
  "created_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  "updated_at" timestamptz(6) DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT "lbexam_attempt_answers_pkey" PRIMARY KEY ("answer_id")
);

-- 4. FOREIGN KEY CONSTRAINTS
-- ----------------------------
ALTER TABLE "public"."lbexam_question_banks" ADD CONSTRAINT "lbexam_banks_course_fk" FOREIGN KEY ("course_id") REFERENCES "public"."training_courses" ("course_id") ON DELETE SET NULL;
ALTER TABLE "public"."lbexam_question_banks" ADD CONSTRAINT "lbexam_banks_created_by_fk" FOREIGN KEY ("created_by") REFERENCES "public"."users" ("ID") ON DELETE SET NULL;

ALTER TABLE "public"."lbexam_questions" ADD CONSTRAINT "lbexam_questions_bank_fk" FOREIGN KEY ("bank_id") REFERENCES "public"."lbexam_question_banks" ("bank_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_questions" ADD CONSTRAINT "lbexam_questions_created_by_fk" FOREIGN KEY ("created_by") REFERENCES "public"."users" ("ID") ON DELETE SET NULL;

ALTER TABLE "public"."lbexam_options" ADD CONSTRAINT "lbexam_options_question_fk" FOREIGN KEY ("question_id") REFERENCES "public"."lbexam_questions" ("question_id") ON DELETE CASCADE;

ALTER TABLE "public"."lbexam_exams" ADD CONSTRAINT "lbexam_exams_training_fk" FOREIGN KEY ("training_id") REFERENCES "public"."training_sessions" ("training_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_exams" ADD CONSTRAINT "lbexam_exams_created_by_fk" FOREIGN KEY ("created_by") REFERENCES "public"."users" ("ID") ON DELETE SET NULL;

ALTER TABLE "public"."lbexam_exam_questions" ADD CONSTRAINT "lbexam_exam_questions_exam_fk" FOREIGN KEY ("exam_id") REFERENCES "public"."lbexam_exams" ("exam_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_exam_questions" ADD CONSTRAINT "lbexam_exam_questions_question_fk" FOREIGN KEY ("question_id") REFERENCES "public"."lbexam_questions" ("question_id") ON DELETE CASCADE;

ALTER TABLE "public"."lbexam_attempts" ADD CONSTRAINT "lbexam_attempts_exam_fk" FOREIGN KEY ("exam_id") REFERENCES "public"."lbexam_exams" ("exam_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_attempts" ADD CONSTRAINT "lbexam_attempts_participation_fk" FOREIGN KEY ("participation_id") REFERENCES "public"."training_participation" ("participation_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_attempts" ADD CONSTRAINT "lbexam_attempts_graded_by_fk" FOREIGN KEY ("graded_by") REFERENCES "public"."users" ("ID") ON DELETE SET NULL;

ALTER TABLE "public"."lbexam_attempt_answers" ADD CONSTRAINT "lbexam_attempt_answers_attempt_fk" FOREIGN KEY ("attempt_id") REFERENCES "public"."lbexam_attempts" ("attempt_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_attempt_answers" ADD CONSTRAINT "lbexam_attempt_answers_eq_fk" FOREIGN KEY ("eq_id") REFERENCES "public"."lbexam_exam_questions" ("eq_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_attempt_answers" ADD CONSTRAINT "lbexam_attempt_answers_question_fk" FOREIGN KEY ("question_id") REFERENCES "public"."lbexam_questions" ("question_id") ON DELETE CASCADE;
ALTER TABLE "public"."lbexam_attempt_answers" ADD CONSTRAINT "lbexam_attempt_answers_option_fk" FOREIGN KEY ("option_id") REFERENCES "public"."lbexam_options" ("option_id") ON DELETE SET NULL;

-- 5. INDEXES for Performance
-- ----------------------------
CREATE INDEX "idx_lbexam_questions_bank_id" ON "public"."lbexam_questions" USING btree ("bank_id");
CREATE INDEX "idx_lbexam_options_question_id" ON "public"."lbexam_options" USING btree ("question_id");
CREATE INDEX "idx_lbexam_options_is_correct" ON "public"."lbexam_options" USING btree ("is_correct") WHERE ("is_correct" = true);
CREATE INDEX "idx_lbexam_exams_training_id" ON "public"."lbexam_exams" USING btree ("training_id");
CREATE INDEX "idx_lbexam_exams_available_dates" ON "public"."lbexam_exams" USING btree ("available_from", "available_to") WHERE ("is_active" = true);
CREATE INDEX "idx_lbexam_exam_questions_exam_id" ON "public"."lbexam_exam_questions" USING btree ("exam_id");
CREATE INDEX "idx_lbexam_exam_questions_question_id" ON "public"."lbexam_exam_questions" USING btree ("question_id");
CREATE INDEX "idx_lbexam_attempts_exam_id" ON "public"."lbexam_attempts" USING btree ("exam_id");
CREATE INDEX "idx_lbexam_attempts_participation_id" ON "public"."lbexam_attempts" USING btree ("participation_id");
CREATE INDEX "idx_lbexam_attempts_status" ON "public"."lbexam_attempts" USING btree ("status");
CREATE INDEX "idx_lbexam_attempt_answers_attempt_id" ON "public"."lbexam_attempt_answers" USING btree ("attempt_id");
CREATE INDEX "idx_lbexam_attempt_answers_question_id" ON "public"."lbexam_attempt_answers" USING btree ("question_id");

-- 6. TRIGGERS for auto-updating timestamps
-- ----------------------------
CREATE TRIGGER "update_lbexam_question_banks_modtime" BEFORE UPDATE ON "public"."lbexam_question_banks" FOR EACH ROW EXECUTE FUNCTION "public"."update_modified_column"();
CREATE TRIGGER "update_lbexam_questions_modtime" BEFORE UPDATE ON "public"."lbexam_questions" FOR EACH ROW EXECUTE FUNCTION "public"."update_modified_column"();
CREATE TRIGGER "update_lbexam_options_modtime" BEFORE UPDATE ON "public"."lbexam_options" FOR EACH ROW EXECUTE FUNCTION "public"."update_modified_column"();
CREATE TRIGGER "update_lbexam_exams_modtime" BEFORE UPDATE ON "public"."lbexam_exams" FOR EACH ROW EXECUTE FUNCTION "public"."update_modified_column"();
CREATE TRIGGER "update_lbexam_attempts_modtime" BEFORE UPDATE ON "public"."lbexam_attempts" FOR EACH ROW EXECUTE FUNCTION "public"."update_modified_column"();
CREATE TRIGGER "update_lbexam_attempt_answers_modtime" BEFORE UPDATE ON "public"."lbexam_attempt_answers" FOR EACH ROW EXECUTE FUNCTION "public"."update_modified_column"();

-- 7. FUNCTIONS & PROCEDURES
-- ----------------------------

-- Function to calculate the score for an attempt and update the attempt record
CREATE OR REPLACE FUNCTION "public"."lbexam_calculate_attempt_score"("p_attempt_id" int4)
  RETURNS "pg_catalog"."void" AS $BODY$
DECLARE
    v_total_possible_points numeric := 0;
    v_points_earned numeric := 0;
    v_final_score numeric := 0;
    v_exam_id int4;
    v_requires_grading boolean := false;
BEGIN
    -- Get the exam ID and check if any questions need manual grading
    SELECT exam_id INTO v_exam_id FROM lbexam_attempts WHERE attempt_id = p_attempt_id;

    -- Check if any answers in this attempt require manual grading (e.g., fill-in blanks that aren't auto-graded yet)
    SELECT EXISTS (
        SELECT 1 FROM lbexam_attempt_answers aa
        JOIN lbexam_questions q ON aa.question_id = q.question_id
        WHERE aa.attempt_id = p_attempt_id
        AND (q.question_type = 'Fill in blanks' AND aa.graded_manually = false AND aa.is_correct IS NULL)
        -- Add other question types that might need manual grading here
    ) INTO v_requires_grading;

    -- If grading is required, set status to 'Submitted' and exit
    IF v_requires_grading THEN
        UPDATE lbexam_attempts 
        SET status = 'Submitted', 
            finished_at = CASE WHEN finished_at IS NULL THEN NOW() ELSE finished_at END
        WHERE attempt_id = p_attempt_id;
        RETURN;
    END IF;

    -- Calculate total possible points and points earned for the attempt
    SELECT 
        COALESCE(SUM(eq.points), 0),
        COALESCE(SUM(aa.points_awarded), 0)
    INTO v_total_possible_points, v_points_earned
    FROM lbexam_attempt_answers aa
    INNER JOIN lbexam_exam_questions eq ON aa.eq_id = eq.eq_id
    WHERE aa.attempt_id = p_attempt_id;

    -- Avoid division by zero
    IF v_total_possible_points > 0 THEN
        v_final_score := (v_points_earned / v_total_possible_points) * 100;
    ELSE
        v_final_score := 0;
    END IF;

    -- Update the attempt record
    UPDATE lbexam_attempts 
    SET 
        score = v_final_score,
        status = 'Graded',
        finished_at = CASE WHEN finished_at IS NULL THEN NOW() ELSE finished_at END,
        updated_at = NOW()
    WHERE attempt_id = p_attempt_id;

    -- Update the main training_participation table with the score
    -- Determine if it's a Pre or Post test and update the corresponding column
    UPDATE training_participation tp
    SET 
        pre_test_score = CASE 
                            WHEN e.exam_type = 'Pre-Test' THEN v_final_score 
                            ELSE pre_test_score 
                         END,
        post_test_score = CASE 
                             WHEN e.exam_type = 'Post-Test' THEN v_final_score 
                             ELSE post_test_score 
                          END,
        updated_at = NOW()
    FROM lbexam_attempts a
    INNER JOIN lbexam_exams e ON a.exam_id = e.exam_id
    WHERE a.attempt_id = p_attempt_id
    AND tp.participation_id = a.participation_id;

END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- Function to auto-grade answers where possible (Single, Multiple Choice, maybe Matrix)
-- This function is called by a trigger AFTER INSERT on attempt_answers
CREATE OR REPLACE FUNCTION "public"."lbexam_auto_grade_answer"()
  RETURNS "pg_catalog"."trigger" AS $BODY$
DECLARE
    v_question_type lbexam_question_type_enum;
    v_correct_option_id int4;
    v_correct_option_ids int4[];
    v_points_possible numeric;
    v_points_awarded numeric := 0;
    v_is_correct boolean := false;
    v_matrix_answers_json jsonb;
    v_correct_matrix_answers_json jsonb;
BEGIN
    -- Get question type and points possible
    SELECT q.question_type, eq.points 
    INTO v_question_type, v_points_possible
    FROM lbexam_questions q
    INNER JOIN lbexam_exam_questions eq ON eq.question_id = q.question_id
    WHERE eq.eq_id = NEW.eq_id;

    -- Auto-grading logic based on question type
    CASE v_question_type
        WHEN 'Single choice' THEN
            -- Find the correct option ID for this question
            SELECT option_id INTO v_correct_option_id
            FROM lbexam_options
            WHERE question_id = NEW.question_id AND is_correct = true
            LIMIT 1; -- Should only be one correct for single choice

            -- Check if the selected option is correct
            IF NEW.option_id = v_correct_option_id THEN
                v_is_correct := true;
                v_points_awarded := v_points_possible;
            END IF;

        WHEN 'Multiple choice' THEN
            -- Get all correct option IDs for this question
            SELECT ARRAY_AGG(option_id) INTO v_correct_option_ids
            FROM lbexam_options
            WHERE question_id = NEW.question_id AND is_correct = true;

            -- For multiple choice, we need to check if the selected array (NEW.option_ids)
            -- contains ALL the correct answers and NO incorrect ones.
            -- This is a strict comparison: must match exactly.
            IF NEW.option_ids @> v_correct_option_ids AND NEW.option_ids <@ v_correct_option_ids THEN
                v_is_correct := true;
                v_points_awarded := v_points_possible;
            END IF;
            -- Optional: Implement partial credit logic here if needed.

        WHEN 'Fill in blanks' THEN
            -- Auto-grading fill-in blanks is complex and often requires manual review.
            -- This is a placeholder. You might implement a simple text match or regex comparison.
            -- For now, we mark it as needing manual grading.
            NEW.graded_manually := true;
            NEW.is_correct := NULL;
            NEW.points_awarded := 0;
            RETURN NEW; -- Exit early, skip the update below

        WHEN 'Decision matrix' THEN
            -- Matrix grading is highly complex and custom.
            -- This would require comparing the stored JSON structure in NEW.matrix_answers
            -- with a correct JSON structure stored elsewhere (e.g., in the question or options table).
            -- Mark for manual grading by default.
            NEW.graded_manually := true;
            NEW.is_correct := NULL;
            NEW.points_awarded := 0;
            RETURN NEW; -- Exit early, skip the update below
    END CASE;

    -- Update the answer record with the grading results
    NEW.is_correct := v_is_correct;
    NEW.points_awarded := v_points_awarded;
    NEW.graded_manually := false; -- It was auto-graded
    NEW.updated_at := NOW();

    RETURN NEW;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- Trigger to call the auto-grading function on answer submission
CREATE TRIGGER "trg_lbexam_auto_grade_answer" BEFORE INSERT OR UPDATE OF option_id, option_ids, answer_text, matrix_answers 
ON "public"."lbexam_attempt_answers"
FOR EACH ROW
EXECUTE FUNCTION "public"."lbexam_auto_grade_answer"();

-- Function to finalize an attempt (call the score calculation)
CREATE OR REPLACE FUNCTION "public"."lbexam_finalize_attempt"("p_attempt_id" int4)
  RETURNS "pg_catalog"."void" AS $BODY$
BEGIN
    PERFORM public.lbexam_calculate_attempt_score(p_attempt_id);
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- 8. VIEWS for Reporting
-- ----------------------------

-- View: Detailed Exam Results
DROP VIEW IF EXISTS "public"."lbexam_vw_exam_results";
CREATE VIEW "public"."lbexam_vw_exam_results" AS
SELECT 
    a.attempt_id,
    e.exam_id,
    e.exam_title,
    e.exam_type,
    t.training_id,
    c.course_name,
    tp.participation_id,
    part.first_name || ' ' || part.last_name AS participant_name,
    part.email AS participant_email,
    f.facility_name,
    co.country_name,
    a.attempt_number,
    a.started_at,
    a.finished_at,
    a.time_taken_seconds,
    a.score AS final_score_percentage,
    e.passing_score,
    CASE WHEN a.score >= e.passing_score THEN 'Pass' ELSE 'Fail' END AS pass_fail_status,
    a.status AS attempt_status
FROM lbexam_attempts a
INNER JOIN lbexam_exams e ON a.exam_id = e.exam_id
INNER JOIN training_participation tp ON a.participation_id = tp.participation_id
INNER JOIN training_participants part ON tp.participant_id = part.participant_id
INNER JOIN training_sessions t ON e.training_id = t.training_id
INNER JOIN training_courses c ON t.course_id = c.course_id
LEFT JOIN facilities f ON t.facility_id = f.facility_id
LEFT JOIN countries co ON part.country_id = co.country_id
ORDER BY a.finished_at DESC;

-- View: Question Analysis per Exam
DROP VIEW IF EXISTS "public"."lbexam_vw_question_analysis";
CREATE VIEW "public"."lbexam_vw_question_analysis" AS
SELECT 
    eq.exam_id,
    e.exam_title,
    eq.question_id,
    q.question_text,
    q.question_type,
    COUNT(a.answer_id) AS total_attempts,
    COUNT(a.answer_id) FILTER (WHERE a.is_correct = true) AS correct_answers,
    ROUND((COUNT(a.answer_id) FILTER (WHERE a.is_correct = true) * 100.0 / NULLIF(COUNT(a.answer_id), 0)), 2) AS percent_correct
FROM lbexam_exam_questions eq
INNER JOIN lbexam_questions q ON eq.question_id = q.question_id
INNER JOIN lbexam_exams e ON eq.exam_id = e.exam_id
LEFT JOIN lbexam_attempt_answers a ON eq.eq_id = a.eq_id AND a.attempt_id IN (SELECT attempt_id FROM lbexam_attempts WHERE status = 'Graded')
GROUP BY eq.exam_id, e.exam_title, eq.question_id, q.question_text, q.question_type
ORDER BY percent_correct ASC; -- Show hardest questions first

-- 9. SAMPLE DATA (Optional - for testing)
-- ----------------------------
-- INSERT INTO lbexam_question_banks (bank_name, description, course_id, is_active, created_by) VALUES 
-- ('Basic Patient Safety', 'Questions on fundamental surgical safety principles', 1, true, 1),
-- ('Pulse Oximetry Fundamentals', 'Questions on the use and principles of pulse oximeters', NULL, true, 1);

-- ... (Further sample data can be added here) ...


-- 10. FINALIZATION: Update sequences to current values if needed
-- ----------------------------
-- SELECT setval('"public"."lbexam_question_banks_bank_id_seq"', COALESCE((SELECT MAX(bank_id) + 1 FROM lbexam_question_banks), 1), false);
-- ... (Repeat for other sequences) ...
```

## Key Features of This Implementation

1. **Seamless Integration:** Uses the `lbexam_` prefix and connects to your existing `training_sessions`, `training_participation`, `training_participants`, `training_courses`, and `users` tables via foreign keys.
2. **Flexible Question Types:** Supports the four types you specified (`Single choice`, `Multiple choice`, `Decision matrix`, `Fill in blanks`) with appropriate storage structures (`option_id`, `option_ids` array, `jsonb` matrix, `answer_text`).
3. **Automatic & Manual Grading:** Includes functions (`lbexam_auto_grade_answer`, `lbexam_calculate_attempt_score`) to automatically grade simple question types (Single/Multiple choice) and flag complex ones (Matrix, Fill-in) for manual review. The final score is automatically calculated out of 100 and written back to the `training_participation` table's `pre_test_score` or `post_test_score` column.
4. **Exam Management:** Allows setting time limits, number of attempts, availability windows, passing scores, and question shuffling.
5. **Comprehensive Tracking:** Tracks every attempt and answer in detail.
6. **Useful Views:** Provides ready-made views (`lbexam_vw_exam_results`, `lbexam_vw_question_analysis`) for reporting and analysis in PHPRunner.
7. **Triggers for Automation:** Automatically handles timestamp updates and initiates the grading process when answers are submitted.

## Next Steps for PHPRunner Integration

1. **Run the SQL:** Execute this entire script in your PostgreSQL database to create the new structures.
2. **Add Pages in PHPRunner:**
    * Create a single form or a set of forms for managing `lbexam_question_banks`.
    * Create a master-detail relationship: **Questions** (master) linked to **Options/Answers** (detail). The form for adding a question should change its fields based on the selected `question_type` (e.g., show a grid for matrix options, show a single textarea for fill-in correct answer).
    * Create a form for **Exams**, linking them to `training_sessions`.
    * Create a form for **Assigning Questions** to exams (`lbexam_exam_questions`).
    * Create a report for **Exam Results** (`lbexam_vw_exam_results`).
    * Create a report for **Question Analysis** (`lbexam_vw_question_analysis`).
3. **Build the Exam Interface:** This will be a custom page in PHPRunner where a participant (logged in) can:
    * See available exams for their training sessions.
    * Start an attempt, which inserts a record into `lbexam_attempts`.
    * Be presented with questions one-by-one or on a single page (based on the exam settings), saving answers to `lbexam_attempt_answers` as they go.
    * Submit the exam, which triggers the `lbexam_finalize_attempt` function.
4. **Grading Interface:** Build an interface for admins/instructors to manually grade questions flagged as `graded_manually = true`.

This design provides a robust, scalable foundation for adding exams and testing to your Lifebox ME System.
