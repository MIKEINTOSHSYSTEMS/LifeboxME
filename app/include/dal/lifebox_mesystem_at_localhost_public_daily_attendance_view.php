<?php
$dalTabledaily_attendance_view = array();
$dalTabledaily_attendance_view["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "0");
$dalTabledaily_attendance_view["training_name"] = array("type"=>201,"varname"=>"training_name", "name" => "training_name", "autoInc" => "0");
$dalTabledaily_attendance_view["start_date"] = array("type"=>7,"varname"=>"start_date", "name" => "start_date", "autoInc" => "0");
$dalTabledaily_attendance_view["end_date"] = array("type"=>7,"varname"=>"end_date", "name" => "end_date", "autoInc" => "0");
$dalTabledaily_attendance_view["total_days"] = array("type"=>3,"varname"=>"total_days", "name" => "total_days", "autoInc" => "0");
$dalTabledaily_attendance_view["day_number"] = array("type"=>3,"varname"=>"day_number", "name" => "day_number", "autoInc" => "0");
$dalTabledaily_attendance_view["calendar_date"] = array("type"=>7,"varname"=>"calendar_date", "name" => "calendar_date", "autoInc" => "0");
$dalTabledaily_attendance_view["total_participants"] = array("type"=>20,"varname"=>"total_participants", "name" => "total_participants", "autoInc" => "0");
$dalTabledaily_attendance_view["participants_present"] = array("type"=>20,"varname"=>"participants_present", "name" => "participants_present", "autoInc" => "0");
$dalTabledaily_attendance_view["attendance_percentage"] = array("type"=>14,"varname"=>"attendance_percentage", "name" => "attendance_percentage", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_daily_attendance_view"] = &$dalTabledaily_attendance_view;
?>