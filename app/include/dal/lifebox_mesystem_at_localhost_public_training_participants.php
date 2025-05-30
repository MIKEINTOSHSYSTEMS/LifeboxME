<?php
$dalTabletraining_participants = array();
$dalTabletraining_participants["participant_id"] = array("type"=>3,"varname"=>"participant_id", "name" => "participant_id", "autoInc" => "1");
$dalTabletraining_participants["first_name"] = array("type"=>200,"varname"=>"first_name", "name" => "first_name", "autoInc" => "0");
$dalTabletraining_participants["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name", "autoInc" => "0");
$dalTabletraining_participants["sex_id"] = array("type"=>3,"varname"=>"sex_id", "name" => "sex_id", "autoInc" => "0");
$dalTabletraining_participants["role_id"] = array("type"=>3,"varname"=>"role_id", "name" => "role_id", "autoInc" => "0");
$dalTabletraining_participants["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "0");
$dalTabletraining_participants["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone", "autoInc" => "0");
$dalTabletraining_participants["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTabletraining_participants["country_id"] = array("type"=>3,"varname"=>"country_id", "name" => "country_id", "autoInc" => "0");
$dalTabletraining_participants["training_date"] = array("type"=>7,"varname"=>"training_date", "name" => "training_date", "autoInc" => "0");
$dalTabletraining_participants["ceu_points"] = array("type"=>14,"varname"=>"ceu_points", "name" => "ceu_points", "autoInc" => "0");
$dalTabletraining_participants["pre_test_score"] = array("type"=>14,"varname"=>"pre_test_score", "name" => "pre_test_score", "autoInc" => "0");
$dalTabletraining_participants["post_test_score"] = array("type"=>14,"varname"=>"post_test_score", "name" => "post_test_score", "autoInc" => "0");
$dalTabletraining_participants["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletraining_participants["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTabletraining_participants["venue_id"] = array("type"=>3,"varname"=>"venue_id", "name" => "venue_id", "autoInc" => "0");
$dalTabletraining_participants["title_salutation"] = array("type"=>200,"varname"=>"title_salutation", "name" => "title_salutation", "autoInc" => "0");
$dalTabletraining_participants["middle_name"] = array("type"=>200,"varname"=>"middle_name", "name" => "middle_name", "autoInc" => "0");
$dalTabletraining_participants["participant_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_training_participants"] = &$dalTabletraining_participants;
?>