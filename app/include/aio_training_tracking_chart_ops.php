<?php
$topsaio_training_tracking_chart = array();
		$topsaio_training_tracking_chart["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
  -- Participant Identification
  pas.\"participant_id\" AS \"participant_id\",
  tp.\"title_salutation\" AS \"title\",
  pas.\"first_name\" AS \"first_name\",
  tp.\"middle_name\" AS \"middle_name\",
  pas.\"last_name\" AS \"last_name\",
  s.\"sex_name\" AS \"gender\",
  pr.\"role_name\" AS \"participant_role\",
  
  -- Participant Contact Info
  c.\"country_name\" AS \"country\",
  f.\"facility_name\" AS \"facility\",
  tp.\"phone\" AS \"phone\",
  pas.\"email\" AS \"email\",
  
  -- Training Information
  pas.\"training_id\" AS \"training_id\",
  tc.\"course_name\" AS \"training_name\",
  p.\"program_name\" AS \"program\",
  STRING_AGG(part.\"partner_name\", ', ') AS \"partners\",
  tt.\"type_name\" AS \"training_type\",
  ta.\"approach_name\" AS \"training_approach\",
  lang.\"language_name\" AS \"training_language\",
  ls.lifebox_staff_details AS \"training_lead\",
  
  -- Training Dates
  ts.\"quarter\" AS \"quarter\",  
  ts.\"start_date\" AS \"start_date\",
  ts.\"end_date\" AS \"end_date\",
  
  -- Attendance Details
  pas.\"total_days\" AS \"total_days\",
  pas.\"days_recorded\" AS \"days_recorded\",
  pas.\"days_attended\" AS \"days_attended\",
  pas.\"attendance_percentage\" AS \"attendance_percentage\",
  pas.\"attendance_status\" AS \"attendance_status\",
  
  -- Assessment Results
  pas.\"pre_test_score\" AS \"pre_test_score\",
  pas.\"post_test_score\" AS \"post_test_score\",
  pas.\"ceu_points\" AS \"ceu_points\"
FROM
  \"public\".\"participant_attendance_summary\" pas
JOIN
  \"public\".\"training_participants\" tp
  ON pas.\"participant_id\" = tp.\"participant_id\"
JOIN
  \"public\".\"sex\" s
  ON tp.\"sex_id\" = s.\"sex_id\"
JOIN
  \"public\".\"participant_role\" pr
  ON tp.\"role_id\" = pr.\"role_id\"
JOIN
  \"public\".\"facilities\" f
  ON tp.\"facility_id\" = f.\"facility_id\"
JOIN
  \"public\".\"countries\" c
  ON tp.\"country_id\" = c.\"country_id\"
JOIN
  \"public\".\"training_sessions\" ts
  ON pas.\"training_id\" = ts.\"training_id\"
LEFT JOIN
  \"public\".\"training_languages\" tl
  ON ts.\"training_id\" = tl.\"training_id\"
LEFT JOIN
  \"public\".\"languages\" lang
  ON tl.\"language_id\" = lang.\"language_id\"
LEFT JOIN
  \"public\".\"training_partners\" tpart
  ON ts.\"training_id\" = tpart.\"training_id\"
LEFT JOIN
  \"public\".\"partners\" part
  ON tpart.\"partner_id\" = part.\"partner_id\"
LEFT JOIN
  \"public\".\"programs\" p
  ON ts.\"program_id\" = p.\"program_id\"
LEFT JOIN
  \"public\".\"training_leads\" tlead
  ON ts.\"training_id\" = tlead.\"training_id\"
LEFT JOIN (
  SELECT
    staff_id,
    CONCAT(first_name, ' ', last_name, ' | ', email) AS lifebox_staff_details
  FROM 
    \"public\".lifebox_staff
) ls ON tlead.\"staff_id\" = ls.staff_id
JOIN
  \"public\".\"training_courses\" tc
  ON ts.\"course_id\" = tc.\"course_id\"
JOIN
  \"public\".\"training_types\" tt
  ON ts.\"training_type_id\" = tt.\"training_type_id\"
JOIN
  \"public\".\"training_approaches\" ta
  ON ts.\"approach_id\" = ta.\"approach_id\"
GROUP BY
  pas.\"participant_id\",
  tp.\"title_salutation\",
  pas.\"first_name\",
  tp.\"middle_name\",
  pas.\"last_name\",
  s.\"sex_name\",
  pr.\"role_name\",
  c.\"country_name\",
  f.\"facility_name\",
  tp.\"phone\",
  pas.\"email\",
  pas.\"training_id\",
  ts.\"quarter\", 
  tc.\"course_name\",
  p.\"program_name\",
  lang.\"language_name\",
  tt.\"type_name\",
  ta.\"approach_name\",
  ls.lifebox_staff_details,
  ts.\"start_date\",
  ts.\"end_date\",
  pas.\"total_days\",
  pas.\"days_recorded\",
  pas.\"days_attended\",
  pas.\"attendance_percentage\",
  pas.\"attendance_status\",
  pas.\"pre_test_score\",
  pas.\"post_test_score\",
  pas.\"ceu_points\"
ORDER BY
  pas.\"participant_id\",
  pas.\"last_name\",
  pas.\"first_name\",
  ts.\"start_date\";",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
		$tables_data["aio_training_tracking Chart"][".operations"] = &$topsaio_training_tracking_chart;
?>