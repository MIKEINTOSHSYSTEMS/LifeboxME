<?php
$dalTableparticipant_attendance_summary = array();
$dalTableparticipant_attendance_summary["participant_id"] = array("type"=>3,"varname"=>"participant_id", "name" => "participant_id", "autoInc" => "0");
$dalTableparticipant_attendance_summary["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "0");
$dalTableparticipant_attendance_summary["first_name"] = array("type"=>200,"varname"=>"first_name", "name" => "first_name", "autoInc" => "0");
$dalTableparticipant_attendance_summary["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name", "autoInc" => "0");
$dalTableparticipant_attendance_summary["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableparticipant_attendance_summary["training_name"] = array("type"=>201,"varname"=>"training_name", "name" => "training_name", "autoInc" => "0");
$dalTableparticipant_attendance_summary["start_date"] = array("type"=>7,"varname"=>"start_date", "name" => "start_date", "autoInc" => "0");
$dalTableparticipant_attendance_summary["end_date"] = array("type"=>7,"varname"=>"end_date", "name" => "end_date", "autoInc" => "0");
$dalTableparticipant_attendance_summary["total_days"] = array("type"=>3,"varname"=>"total_days", "name" => "total_days", "autoInc" => "0");
$dalTableparticipant_attendance_summary["days_recorded"] = array("type"=>20,"varname"=>"days_recorded", "name" => "days_recorded", "autoInc" => "0");
$dalTableparticipant_attendance_summary["days_attended"] = array("type"=>20,"varname"=>"days_attended", "name" => "days_attended", "autoInc" => "0");
$dalTableparticipant_attendance_summary["attendance_percentage"] = array("type"=>14,"varname"=>"attendance_percentage", "name" => "attendance_percentage", "autoInc" => "0");
$dalTableparticipant_attendance_summary["attendance_status"] = array("type"=>201,"varname"=>"attendance_status", "name" => "attendance_status", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_participant_attendance_summary"] = &$dalTableparticipant_attendance_summary;
?>