<?php
$dalTabletraining_approaches = array();
$dalTabletraining_approaches["approach_id"] = array("type"=>3,"varname"=>"approach_id", "name" => "approach_id", "autoInc" => "1");
$dalTabletraining_approaches["approach_name"] = array("type"=>200,"varname"=>"approach_name", "name" => "approach_name", "autoInc" => "0");
$dalTabletraining_approaches["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTabletraining_approaches["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTabletraining_approaches["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletraining_approaches["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTabletraining_approaches["approach_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_training_approaches"] = &$dalTabletraining_approaches;
?>