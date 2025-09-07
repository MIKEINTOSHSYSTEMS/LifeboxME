<?php
$dalTabletraining_courses = array();
$dalTabletraining_courses["course_id"] = array("type"=>3,"varname"=>"course_id", "name" => "course_id", "autoInc" => "1");
$dalTabletraining_courses["course_name"] = array("type"=>200,"varname"=>"course_name", "name" => "course_name", "autoInc" => "0");
$dalTabletraining_courses["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTabletraining_courses["duration_hours"] = array("type"=>3,"varname"=>"duration_hours", "name" => "duration_hours", "autoInc" => "0");
$dalTabletraining_courses["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTabletraining_courses["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletraining_courses["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_training_courses"] = &$dalTabletraining_courses;
?>