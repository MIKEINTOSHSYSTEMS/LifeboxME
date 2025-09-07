<?php
$dalTabletraining_participation = array();
$dalTabletraining_participation["participation_id"] = array("type"=>3,"varname"=>"participation_id", "name" => "participation_id", "autoInc" => "1");
$dalTabletraining_participation["participant_id"] = array("type"=>3,"varname"=>"participant_id", "name" => "participant_id", "autoInc" => "0");
$dalTabletraining_participation["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "0");
$dalTabletraining_participation["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletraining_participation["pre_test_score"] = array("type"=>14,"varname"=>"pre_test_score", "name" => "pre_test_score", "autoInc" => "0");
$dalTabletraining_participation["post_test_score"] = array("type"=>14,"varname"=>"post_test_score", "name" => "post_test_score", "autoInc" => "0");
$dalTabletraining_participation["ceu_points"] = array("type"=>14,"varname"=>"ceu_points", "name" => "ceu_points", "autoInc" => "0");

$dal_info["lifebox_mesystem_at_localhost_public_training_participation"] = &$dalTabletraining_participation;
?>