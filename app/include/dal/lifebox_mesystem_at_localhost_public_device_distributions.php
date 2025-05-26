<?php
$dalTabledevice_distributions = array();
$dalTabledevice_distributions["distribution_id"] = array("type"=>3,"varname"=>"distribution_id", "name" => "distribution_id", "autoInc" => "1");
$dalTabledevice_distributions["region_id"] = array("type"=>3,"varname"=>"region_id", "name" => "region_id", "autoInc" => "0");
$dalTabledevice_distributions["country_id"] = array("type"=>3,"varname"=>"country_id", "name" => "country_id", "autoInc" => "0");
$dalTabledevice_distributions["device_type"] = array("type"=>13,"varname"=>"device_type", "name" => "device_type", "autoInc" => "0");
$dalTabledevice_distributions["order_reference"] = array("type"=>200,"varname"=>"order_reference", "name" => "order_reference", "autoInc" => "0");
$dalTabledevice_distributions["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "0");
$dalTabledevice_distributions["monthly_surgical_volume"] = array("type"=>3,"varname"=>"monthly_surgical_volume", "name" => "monthly_surgical_volume", "autoInc" => "0");
$dalTabledevice_distributions["contact_name"] = array("type"=>200,"varname"=>"contact_name", "name" => "contact_name", "autoInc" => "0");
$dalTabledevice_distributions["contact_email"] = array("type"=>200,"varname"=>"contact_email", "name" => "contact_email", "autoInc" => "0");
$dalTabledevice_distributions["distribution_month"] = array("type"=>3,"varname"=>"distribution_month", "name" => "distribution_month", "autoInc" => "0");
$dalTabledevice_distributions["distribution_year"] = array("type"=>3,"varname"=>"distribution_year", "name" => "distribution_year", "autoInc" => "0");
$dalTabledevice_distributions["payment_method"] = array("type"=>13,"varname"=>"payment_method", "name" => "payment_method", "autoInc" => "0");
$dalTabledevice_distributions["quantity"] = array("type"=>3,"varname"=>"quantity", "name" => "quantity", "autoInc" => "0");
$dalTabledevice_distributions["notes"] = array("type"=>201,"varname"=>"notes", "name" => "notes", "autoInc" => "0");
$dalTabledevice_distributions["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabledevice_distributions["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTabledevice_distributions["distribution_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_device_distributions"] = &$dalTabledevice_distributions;
?>