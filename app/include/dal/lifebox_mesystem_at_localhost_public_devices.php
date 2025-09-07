<?php
$dalTabledevices = array();
$dalTabledevices["device_id"] = array("type"=>3,"varname"=>"device_id", "name" => "device_id", "autoInc" => "1");
$dalTabledevices["device_type"] = array("type"=>200,"varname"=>"device_type", "name" => "device_type", "autoInc" => "0");
$dalTabledevices["model"] = array("type"=>200,"varname"=>"model", "name" => "model", "autoInc" => "0");
$dalTabledevices["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTabledevices["serial_number"] = array("type"=>200,"varname"=>"serial_number", "name" => "serial_number", "autoInc" => "0");
$dalTabledevices["manufacturer"] = array("type"=>200,"varname"=>"manufacturer", "name" => "manufacturer", "autoInc" => "0");
$dalTabledevices["production_date"] = array("type"=>7,"varname"=>"production_date", "name" => "production_date", "autoInc" => "0");
$dalTabledevices["warranty_expiry"] = array("type"=>7,"varname"=>"warranty_expiry", "name" => "warranty_expiry", "autoInc" => "0");
$dalTabledevices["unit_price"] = array("type"=>14,"varname"=>"unit_price", "name" => "unit_price", "autoInc" => "0");
$dalTabledevices["total_quantity"] = array("type"=>3,"varname"=>"total_quantity", "name" => "total_quantity", "autoInc" => "0");
$dalTabledevices["available_quantity"] = array("type"=>3,"varname"=>"available_quantity", "name" => "available_quantity", "autoInc" => "0");
$dalTabledevices["status"] = array("type"=>11,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTabledevices["facility_id"] = array("type"=>3,"varname"=>"facility_id", "name" => "facility_id", "autoInc" => "0");
$dalTabledevices["warehouse_location"] = array("type"=>200,"varname"=>"warehouse_location", "name" => "warehouse_location", "autoInc" => "0");
$dalTabledevices["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabledevices["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_devices"] = &$dalTabledevices;
?>