<?php
$dalTabledonors = array();
$dalTabledonors["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledonors["organization_name"] = array("type"=>200,"varname"=>"organization_name", "name" => "organization_name", "autoInc" => "0");
$dalTabledonors["country_id"] = array("type"=>3,"varname"=>"country_id", "name" => "country_id", "autoInc" => "0");
$dalTabledonors["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTabledonors["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone", "autoInc" => "0");
$dalTabledonors["address_information"] = array("type"=>200,"varname"=>"address_information", "name" => "address_information", "autoInc" => "0");
$dalTabledonors["contact_person"] = array("type"=>200,"varname"=>"contact_person", "name" => "contact_person", "autoInc" => "0");
$dalTabledonors["donor_status"] = array("type"=>11,"varname"=>"donor_status", "name" => "donor_status", "autoInc" => "0");
$dalTabledonors["donor_type"] = array("type"=>200,"varname"=>"donor_type", "name" => "donor_type", "autoInc" => "0");
$dalTabledonors["notes"] = array("type"=>200,"varname"=>"notes", "name" => "notes", "autoInc" => "0");
$dalTabledonors["id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_donors"] = &$dalTabledonors;
?>