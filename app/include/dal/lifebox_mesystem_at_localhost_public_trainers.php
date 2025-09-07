<?php
$dalTabletrainers = array();
$dalTabletrainers["trainer_id"] = array("type"=>3,"varname"=>"trainer_id", "name" => "trainer_id", "autoInc" => "1");
$dalTabletrainers["first_name"] = array("type"=>200,"varname"=>"first_name", "name" => "first_name", "autoInc" => "0");
$dalTabletrainers["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name", "autoInc" => "0");
$dalTabletrainers["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTabletrainers["organization"] = array("type"=>200,"varname"=>"organization", "name" => "organization", "autoInc" => "0");
$dalTabletrainers["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTabletrainers["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletrainers["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_trainers"] = &$dalTabletrainers;
?>