<?php
$dalTableparticipant_attendance_detail = array();
$dalTableparticipant_attendance_detail["participant_id"] = array("type"=>3,"varname"=>"participant_id", "name" => "participant_id", "autoInc" => "0");
$dalTableparticipant_attendance_detail["participant_name"] = array("type"=>201,"varname"=>"participant_name", "name" => "participant_name", "autoInc" => "0");
$dalTableparticipant_attendance_detail["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "0");
$dalTableparticipant_attendance_detail["training_name"] = array("type"=>201,"varname"=>"training_name", "name" => "training_name", "autoInc" => "0");
$dalTableparticipant_attendance_detail["day_number"] = array("type"=>3,"varname"=>"day_number", "name" => "day_number", "autoInc" => "0");
$dalTableparticipant_attendance_detail["attendance_date"] = array("type"=>7,"varname"=>"attendance_date", "name" => "attendance_date", "autoInc" => "0");
$dalTableparticipant_attendance_detail["attended"] = array("type"=>11,"varname"=>"attended", "name" => "attended", "autoInc" => "0");
$dalTableparticipant_attendance_detail["notes"] = array("type"=>201,"varname"=>"notes", "name" => "notes", "autoInc" => "0");
$dalTableparticipant_attendance_detail["recorded_at"] = array("type"=>135,"varname"=>"recorded_at", "name" => "recorded_at", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_participant_attendance_detail"] = &$dalTableparticipant_attendance_detail;
?>