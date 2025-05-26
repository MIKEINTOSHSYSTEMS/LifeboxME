<?php
$dalTabletraining_sessions = array();
$dalTabletraining_sessions["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "1");
$dalTabletraining_sessions["course_id"] = array("type"=>3,"varname"=>"course_id", "name" => "course_id", "autoInc" => "0");
$dalTabletraining_sessions["training_type"] = array("type"=>13,"varname"=>"training_type", "name" => "training_type", "autoInc" => "0");
$dalTabletraining_sessions["training_approach"] = array("type"=>13,"varname"=>"training_approach", "name" => "training_approach", "autoInc" => "0");
$dalTabletraining_sessions["program"] = array("type"=>13,"varname"=>"program", "name" => "program", "autoInc" => "0");
$dalTabletraining_sessions["quarter"] = array("type"=>13,"varname"=>"quarter", "name" => "quarter", "autoInc" => "0");
$dalTabletraining_sessions["start_date"] = array("type"=>7,"varname"=>"start_date", "name" => "start_date", "autoInc" => "0");
$dalTabletraining_sessions["end_date"] = array("type"=>7,"varname"=>"end_date", "name" => "end_date", "autoInc" => "0");
$dalTabletraining_sessions["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "0");
$dalTabletraining_sessions["host_country_id"] = array("type"=>3,"varname"=>"host_country_id", "name" => "host_country_id", "autoInc" => "0");
$dalTabletraining_sessions["ceu_points"] = array("type"=>14,"varname"=>"ceu_points", "name" => "ceu_points", "autoInc" => "0");
$dalTabletraining_sessions["num_participants"] = array("type"=>3,"varname"=>"num_participants", "name" => "num_participants", "autoInc" => "0");
$dalTabletraining_sessions["avg_pre_test_score"] = array("type"=>14,"varname"=>"avg_pre_test_score", "name" => "avg_pre_test_score", "autoInc" => "0");
$dalTabletraining_sessions["avg_post_test_score"] = array("type"=>14,"varname"=>"avg_post_test_score", "name" => "avg_post_test_score", "autoInc" => "0");
$dalTabletraining_sessions["remarks"] = array("type"=>201,"varname"=>"remarks", "name" => "remarks", "autoInc" => "0");
$dalTabletraining_sessions["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletraining_sessions["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTabletraining_sessions["training_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_training_sessions"] = &$dalTabletraining_sessions;
?>