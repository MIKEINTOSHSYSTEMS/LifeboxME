# Lifebox Quiz - LBQuiz

This project adds an lbquiz exam system integrated with an existing Lifebox DB.

## Quick install

1. Backup your DB.
2. Run SQL:
   ```
   psql -h 127.0.0.1 -U postgres -d lifeboxme_quiz -f lbquiz_schema.sql
   ```
3. Edit `src/config.php` and set DSN, user, pass, base_url.
4. Copy the `public` folder into your web server docroot (or create vhost pointing to `lifebox-quiz/public`).
5. Ensure PHP has `pdo_pgsql` enabled.
6. Visit `/admin/login.php` (default demo admin: admin / adminpass — change immediately).
7. Create tests in Admin > Create Test, map questions, and use `public/take_test.php?test_id=...&training_id=...` to take tests.

## Notes
- The scoring function maps responses to training_participation pre/post fields if they exist.
- The app **reuses** `quiz_questions`, `quiz_answers` etc. No existing table is modified.
- Replace demo authentication with your production auth system.
