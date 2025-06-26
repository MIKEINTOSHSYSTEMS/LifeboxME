<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbllifebox_mesystem_at_localhost_public_antibiotics;
	var $tbllifebox_mesystem_at_localhost_public_case_antibiotics;
	var $tbllifebox_mesystem_at_localhost_public_clean_cut_implementation_summary_view;
	var $tbllifebox_mesystem_at_localhost_public_clean_cut_implementations;
	var $tbllifebox_mesystem_at_localhost_public_countries;
	var $tbllifebox_mesystem_at_localhost_public_daily_attendance_view;
	var $tbllifebox_mesystem_at_localhost_public_device_distribution_log;
	var $tbllifebox_mesystem_at_localhost_public_device_distribution_summary_view;
	var $tbllifebox_mesystem_at_localhost_public_device_distributions;
	var $tbllifebox_mesystem_at_localhost_public_device_inventory_changes;
	var $tbllifebox_mesystem_at_localhost_public_devices;
	var $tbllifebox_mesystem_at_localhost_public_diagnoses;
	var $tbllifebox_mesystem_at_localhost_public_donors;
	var $tbllifebox_mesystem_at_localhost_public_facilities;
	var $tbllifebox_mesystem_at_localhost_public_follow_ups;
	var $tbllifebox_mesystem_at_localhost_public_languages;
	var $tbllifebox_mesystem_at_localhost_public_lifebox_staff;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme__audit;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme__locking;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_dhis2_analytics_data;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_dhis2_analytics_settings;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_dhis2_dataitems;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_dhis2_orgunits;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_settings;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_uggroups;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_ugmembers;
	var $tbllifebox_mesystem_at_localhost_public_lifeboxme_ugrights;
	var $tbllifebox_mesystem_at_localhost_public_months;
	var $tbllifebox_mesystem_at_localhost_public_participant_attendance_detail;
	var $tbllifebox_mesystem_at_localhost_public_participant_attendance_summary;
	var $tbllifebox_mesystem_at_localhost_public_participant_role;
	var $tbllifebox_mesystem_at_localhost_public_partners;
	var $tbllifebox_mesystem_at_localhost_public_payment_methods;
	var $tbllifebox_mesystem_at_localhost_public_procedures;
	var $tbllifebox_mesystem_at_localhost_public_programs;
	var $tbllifebox_mesystem_at_localhost_public_quarters;
	var $tbllifebox_mesystem_at_localhost_public_regions;
	var $tbllifebox_mesystem_at_localhost_public_sex;
	var $tbllifebox_mesystem_at_localhost_public_surgical_case_summary_view;
	var $tbllifebox_mesystem_at_localhost_public_surgical_cases;
	var $tbllifebox_mesystem_at_localhost_public_trainers;
	var $tbllifebox_mesystem_at_localhost_public_training_approaches;
	var $tbllifebox_mesystem_at_localhost_public_training_attendance;
	var $tbllifebox_mesystem_at_localhost_public_training_courses;
	var $tbllifebox_mesystem_at_localhost_public_training_languages;
	var $tbllifebox_mesystem_at_localhost_public_training_leads;
	var $tbllifebox_mesystem_at_localhost_public_training_participants;
	var $tbllifebox_mesystem_at_localhost_public_training_participation;
	var $tbllifebox_mesystem_at_localhost_public_training_partners;
	var $tbllifebox_mesystem_at_localhost_public_training_sessions;
	var $tbllifebox_mesystem_at_localhost_public_training_summary_view;
	var $tbllifebox_mesystem_at_localhost_public_training_trainers;
	var $tbllifebox_mesystem_at_localhost_public_training_types;
	var $tbllifebox_mesystem_at_localhost_public_transaction_types;
	var $tbllifebox_mesystem_at_localhost_public_users;
	var $tbllifebox_mesystem_at_localhost_public_venues;
	var $tbllifebox_mesystem_at_localhost_public_ward_antibiotics;
	var $tbllifebox_mesystem_at_localhost_public_ward_rounds;
	var $tbllifebox_mesystem_at_localhost_public_webreport_admin;
	var $tbllifebox_mesystem_at_localhost_public_webreport_style;
	var $tbllifebox_mesystem_at_localhost_public_webreports;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "antibiotics", "varname" => "lifebox_mesystem_at_localhost_public_antibiotics", "altvarname" => "antibiotics", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "case_antibiotics", "varname" => "lifebox_mesystem_at_localhost_public_case_antibiotics", "altvarname" => "case_antibiotics", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "clean_cut_implementation_summary_view", "varname" => "lifebox_mesystem_at_localhost_public_clean_cut_implementation_summary_view", "altvarname" => "clean_cut_implementation_summary_view", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "clean_cut_implementations", "varname" => "lifebox_mesystem_at_localhost_public_clean_cut_implementations", "altvarname" => "clean_cut_implementations", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "countries", "varname" => "lifebox_mesystem_at_localhost_public_countries", "altvarname" => "countries", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "daily_attendance_view", "varname" => "lifebox_mesystem_at_localhost_public_daily_attendance_view", "altvarname" => "daily_attendance_view", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "device_distribution_log", "varname" => "lifebox_mesystem_at_localhost_public_device_distribution_log", "altvarname" => "device_distribution_log", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "device_distribution_summary_view", "varname" => "lifebox_mesystem_at_localhost_public_device_distribution_summary_view", "altvarname" => "device_distribution_summary_view", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "device_distributions", "varname" => "lifebox_mesystem_at_localhost_public_device_distributions", "altvarname" => "device_distributions", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "device_inventory_changes", "varname" => "lifebox_mesystem_at_localhost_public_device_inventory_changes", "altvarname" => "device_inventory_changes", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "devices", "varname" => "lifebox_mesystem_at_localhost_public_devices", "altvarname" => "devices", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "diagnoses", "varname" => "lifebox_mesystem_at_localhost_public_diagnoses", "altvarname" => "diagnoses", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "donors", "varname" => "lifebox_mesystem_at_localhost_public_donors", "altvarname" => "donors", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "facilities", "varname" => "lifebox_mesystem_at_localhost_public_facilities", "altvarname" => "facilities", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "follow_ups", "varname" => "lifebox_mesystem_at_localhost_public_follow_ups", "altvarname" => "follow_ups", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "languages", "varname" => "lifebox_mesystem_at_localhost_public_languages", "altvarname" => "languages", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifebox_staff", "varname" => "lifebox_mesystem_at_localhost_public_lifebox_staff", "altvarname" => "lifebox_staff", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme__audit", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme__audit", "altvarname" => "lifeboxme__audit", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme__locking", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme__locking", "altvarname" => "lifeboxme__locking", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_dhis2_analytics_data", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_dhis2_analytics_data", "altvarname" => "lifeboxme_dhis2_analytics_data", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_dhis2_analytics_settings", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_dhis2_analytics_settings", "altvarname" => "lifeboxme_dhis2_analytics_settings", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_dhis2_dataitems", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_dhis2_dataitems", "altvarname" => "lifeboxme_dhis2_dataitems", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_dhis2_orgunits", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_dhis2_orgunits", "altvarname" => "lifeboxme_dhis2_orgunits", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_settings", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_settings", "altvarname" => "lifeboxme_settings", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_uggroups", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_uggroups", "altvarname" => "lifeboxme_uggroups", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_ugmembers", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_ugmembers", "altvarname" => "lifeboxme_ugmembers", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "lifeboxme_ugrights", "varname" => "lifebox_mesystem_at_localhost_public_lifeboxme_ugrights", "altvarname" => "lifeboxme_ugrights", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "months", "varname" => "lifebox_mesystem_at_localhost_public_months", "altvarname" => "months", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "participant_attendance_detail", "varname" => "lifebox_mesystem_at_localhost_public_participant_attendance_detail", "altvarname" => "participant_attendance_detail", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "participant_attendance_summary", "varname" => "lifebox_mesystem_at_localhost_public_participant_attendance_summary", "altvarname" => "participant_attendance_summary", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "participant_role", "varname" => "lifebox_mesystem_at_localhost_public_participant_role", "altvarname" => "participant_role", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "partners", "varname" => "lifebox_mesystem_at_localhost_public_partners", "altvarname" => "partners", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "payment_methods", "varname" => "lifebox_mesystem_at_localhost_public_payment_methods", "altvarname" => "payment_methods", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "procedures", "varname" => "lifebox_mesystem_at_localhost_public_procedures", "altvarname" => "procedures", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "programs", "varname" => "lifebox_mesystem_at_localhost_public_programs", "altvarname" => "programs", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "quarters", "varname" => "lifebox_mesystem_at_localhost_public_quarters", "altvarname" => "quarters", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "regions", "varname" => "lifebox_mesystem_at_localhost_public_regions", "altvarname" => "regions", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "sex", "varname" => "lifebox_mesystem_at_localhost_public_sex", "altvarname" => "sex", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "surgical_case_summary_view", "varname" => "lifebox_mesystem_at_localhost_public_surgical_case_summary_view", "altvarname" => "surgical_case_summary_view", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "surgical_cases", "varname" => "lifebox_mesystem_at_localhost_public_surgical_cases", "altvarname" => "surgical_cases", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "trainers", "varname" => "lifebox_mesystem_at_localhost_public_trainers", "altvarname" => "trainers", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_approaches", "varname" => "lifebox_mesystem_at_localhost_public_training_approaches", "altvarname" => "training_approaches", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_attendance", "varname" => "lifebox_mesystem_at_localhost_public_training_attendance", "altvarname" => "training_attendance", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_courses", "varname" => "lifebox_mesystem_at_localhost_public_training_courses", "altvarname" => "training_courses", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_languages", "varname" => "lifebox_mesystem_at_localhost_public_training_languages", "altvarname" => "training_languages", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_leads", "varname" => "lifebox_mesystem_at_localhost_public_training_leads", "altvarname" => "training_leads", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_participants", "varname" => "lifebox_mesystem_at_localhost_public_training_participants", "altvarname" => "training_participants", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_participation", "varname" => "lifebox_mesystem_at_localhost_public_training_participation", "altvarname" => "training_participation", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_partners", "varname" => "lifebox_mesystem_at_localhost_public_training_partners", "altvarname" => "training_partners", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_sessions", "varname" => "lifebox_mesystem_at_localhost_public_training_sessions", "altvarname" => "training_sessions", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_summary_view", "varname" => "lifebox_mesystem_at_localhost_public_training_summary_view", "altvarname" => "training_summary_view", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_trainers", "varname" => "lifebox_mesystem_at_localhost_public_training_trainers", "altvarname" => "training_trainers", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "training_types", "varname" => "lifebox_mesystem_at_localhost_public_training_types", "altvarname" => "training_types", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "transaction_types", "varname" => "lifebox_mesystem_at_localhost_public_transaction_types", "altvarname" => "transaction_types", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "users", "varname" => "lifebox_mesystem_at_localhost_public_users", "altvarname" => "users", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "venues", "varname" => "lifebox_mesystem_at_localhost_public_venues", "altvarname" => "venues", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "ward_antibiotics", "varname" => "lifebox_mesystem_at_localhost_public_ward_antibiotics", "altvarname" => "ward_antibiotics", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "ward_rounds", "varname" => "lifebox_mesystem_at_localhost_public_ward_rounds", "altvarname" => "ward_rounds", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "webreport_admin", "varname" => "lifebox_mesystem_at_localhost_public_webreport_admin", "altvarname" => "webreport_admin", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "webreport_style", "varname" => "lifebox_mesystem_at_localhost_public_webreport_style", "altvarname" => "webreport_style", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
		$this->lstTables[] = array("name" => "webreports", "varname" => "lifebox_mesystem_at_localhost_public_webreports", "altvarname" => "webreports", "connId" => "lifebox_mesystem_at_localhost", "schema" => "public", "connName" => "lifebox_mesystem at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>