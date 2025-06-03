<?php
$dalTableusers = array();
$dalTableusers["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID", "autoInc" => "1");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableusers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTableusers["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTableusers["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTableusers["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id", "autoInc" => "0");
$dalTableusers["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic", "autoInc" => "0");
$dalTableusers["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTableusers["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTableusers["first_name"] = array("type"=>200,"varname"=>"first_name", "name" => "first_name", "autoInc" => "0");
$dalTableusers["middle_name"] = array("type"=>200,"varname"=>"middle_name", "name" => "middle_name", "autoInc" => "0");
$dalTableusers["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name", "autoInc" => "0");
$dalTableusers["sex"] = array("type"=>200,"varname"=>"sex", "name" => "sex", "autoInc" => "0");
$dalTableusers["designation_role"] = array("type"=>200,"varname"=>"designation_role", "name" => "designation_role", "autoInc" => "0");
$dalTableusers["region"] = array("type"=>200,"varname"=>"region", "name" => "region", "autoInc" => "0");
$dalTableusers["country"] = array("type"=>200,"varname"=>"country", "name" => "country", "autoInc" => "0");
$dalTableusers["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone", "autoInc" => "0");
$dalTableusers["prefix_title"] = array("type"=>200,"varname"=>"prefix_title", "name" => "prefix_title", "autoInc" => "0");
$dalTableusers["api_key"] = array("type"=>200,"varname"=>"api_key", "name" => "api_key", "autoInc" => "0");
$dalTableusers["ID"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_users"] = &$dalTableusers;
?>