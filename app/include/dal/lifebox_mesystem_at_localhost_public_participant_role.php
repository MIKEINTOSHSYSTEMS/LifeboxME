<?php
$dalTableparticipant_role = array();
$dalTableparticipant_role["role_id"] = array("type"=>3,"varname"=>"role_id", "name" => "role_id", "autoInc" => "1");
$dalTableparticipant_role["role_name"] = array("type"=>200,"varname"=>"role_name", "name" => "role_name", "autoInc" => "0");
$dalTableparticipant_role["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableparticipant_role["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTableparticipant_role["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableparticipant_role["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_participant_role"] = &$dalTableparticipant_role;
?>