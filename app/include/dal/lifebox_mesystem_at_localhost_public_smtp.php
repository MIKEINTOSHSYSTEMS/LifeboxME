<?php
$dalTablesmtp = array();
$dalTablesmtp["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesmtp["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablesmtp["host"] = array("type"=>200,"varname"=>"host", "name" => "host", "autoInc" => "0");
$dalTablesmtp["port"] = array("type"=>3,"varname"=>"port", "name" => "port", "autoInc" => "0");
$dalTablesmtp["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablesmtp["smtpfrom"] = array("type"=>200,"varname"=>"smtpfrom", "name" => "smtpfrom", "autoInc" => "0");
$dalTablesmtp["secure"] = array("type"=>200,"varname"=>"secure", "name" => "secure", "autoInc" => "0");
$dalTablesmtp["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablesmtp["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_smtp"] = &$dalTablesmtp;
?>