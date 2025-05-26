<?php
$dalTabletraining_trainers = array();
$dalTabletraining_trainers["training_trainer_id"] = array("type"=>3,"varname"=>"training_trainer_id", "name" => "training_trainer_id", "autoInc" => "1");
$dalTabletraining_trainers["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "0");
$dalTabletraining_trainers["trainer_id"] = array("type"=>3,"varname"=>"trainer_id", "name" => "trainer_id", "autoInc" => "0");
$dalTabletraining_trainers["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletraining_trainers["training_trainer_id"]["key"]=true;

$dal_info["lifebox_mesystem_at_localhost_public_training_trainers"] = &$dalTabletraining_trainers;
?>