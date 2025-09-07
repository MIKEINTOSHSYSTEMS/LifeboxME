<?php
$dalTabletraining_attendance = array();
$dalTabletraining_attendance["attendance_id"] = array("type"=>3,"varname"=>"attendance_id", "name" => "attendance_id", "autoInc" => "1");
$dalTabletraining_attendance["day_number"] = array("type"=>3,"varname"=>"day_number", "name" => "day_number", "autoInc" => "0");
$dalTabletraining_attendance["attended"] = array("type"=>11,"varname"=>"attended", "name" => "attended", "autoInc" => "0");
$dalTabletraining_attendance["attendance_date"] = array("type"=>7,"varname"=>"attendance_date", "name" => "attendance_date", "autoInc" => "0");
$dalTabletraining_attendance["notes"] = array("type"=>201,"varname"=>"notes", "name" => "notes", "autoInc" => "0");
$dalTabletraining_attendance["recorded_at"] = array("type"=>135,"varname"=>"recorded_at", "name" => "recorded_at", "autoInc" => "0");
$dalTabletraining_attendance["recorded_by"] = array("type"=>3,"varname"=>"recorded_by", "name" => "recorded_by", "autoInc" => "0");
$dalTabletraining_attendance["participation_id"] = array("type"=>3,"varname"=>"participation_id", "name" => "participation_id", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_training_attendance"] = &$dalTabletraining_attendance;
?>