<?php
$dalTabledevice_inventory_changes = array();
$dalTabledevice_inventory_changes["device_id"] = array("type"=>3,"varname"=>"device_id", "name" => "device_id", "autoInc" => "0");
$dalTabledevice_inventory_changes["device_type"] = array("type"=>200,"varname"=>"device_type", "name" => "device_type", "autoInc" => "0");
$dalTabledevice_inventory_changes["model"] = array("type"=>200,"varname"=>"model", "name" => "model", "autoInc" => "0");
$dalTabledevice_inventory_changes["current_quantity"] = array("type"=>3,"varname"=>"current_quantity", "name" => "current_quantity", "autoInc" => "0");
$dalTabledevice_inventory_changes["total_quantity"] = array("type"=>3,"varname"=>"total_quantity", "name" => "total_quantity", "autoInc" => "0");
$dalTabledevice_inventory_changes["total_distributed"] = array("type"=>20,"varname"=>"total_distributed", "name" => "total_distributed", "autoInc" => "0");
$dalTabledevice_inventory_changes["calculated_available"] = array("type"=>20,"varname"=>"calculated_available", "name" => "calculated_available", "autoInc" => "0");
$dalTabledevice_inventory_changes["last_transaction"] = array("type"=>135,"varname"=>"last_transaction", "name" => "last_transaction", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_device_inventory_changes"] = &$dalTabledevice_inventory_changes;
?>