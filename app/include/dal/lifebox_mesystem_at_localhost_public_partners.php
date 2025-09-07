<?php
$dalTablepartners = array();
$dalTablepartners["partner_id"] = array("type"=>3,"varname"=>"partner_id", "name" => "partner_id", "autoInc" => "1");
$dalTablepartners["partner_name"] = array("type"=>200,"varname"=>"partner_name", "name" => "partner_name", "autoInc" => "0");
$dalTablepartners["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablepartners["website"] = array("type"=>200,"varname"=>"website", "name" => "website", "autoInc" => "0");
$dalTablepartners["contact_email"] = array("type"=>200,"varname"=>"contact_email", "name" => "contact_email", "autoInc" => "0");
$dalTablepartners["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTablepartners["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablepartners["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_partners"] = &$dalTablepartners;
?>