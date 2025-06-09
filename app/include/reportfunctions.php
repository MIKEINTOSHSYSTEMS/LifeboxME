<?php
require_once(getabspath("include/xml.php"));
require_once(getabspath("classes/cipherer.php"));
require_once(getabspath("classes/searchclause.php"));



/**
 * @param String name - entity name
 * @param int $report - WR_REPORT or WR_CHART
 */
function wrGetEntityArray( $name, $type ) {
	$strXml = wrLoadSelectedEntity( $name, $type );
	if( !$strXml ) {
		return array();
	}
	$xml = new xml();
	$entArray = $xml->xml_to_array( $strXml );
	if( !$entArray ) {
		return array();
	}
	$_SESSION["webobject"]["table_type"] = $entArray["table_type"];
	$_SESSION["object_sql"] = $entArray["sql"];
	if( $entArray["table_type"] == "custom" ) {
		$_SESSION["object_sql"] = wrGetCustomSQL( $entArray["tables"][0] );
	}
	return $entArray;
}

function getChartArray($name)
{
	$xml = new xml();
	$chrt_strXML = wrLoadSelectedEntity( $name, WR_CHART );
	$arr = $xml->xml_to_array($chrt_strXML);
	return $arr;
}

function GetUserGroups() {
	global $cman;
	if( !Security::permissionsAvailable() ) {
		return array();
	}
	if( Security::dynamicPermissions() ) {
		$arr = array(
			array(-1, "<"."Admin".">"),
			array(-2, "<"."Default".">"),
			array(-3, "<"."Guest".">")
		);

		$groupIdField = "GroupID";
		$groupLabelField = "Label";
		$groupProviderField = "Provider";

		$dataSource = Security::getUgGroupsDatasource();
		$dc = new DsCommand();
		if( storageGet( "groups_provider_field" ) ) {
			$dc->order[] = array( "column" => $groupProviderField, "dir" => "ASC" );
		}
		$dc->order[] = array( "column" => $groupLabelField, "dir" => "ASC" );
		$qResult = $dataSource->getList($dc );

		while( $data = $qResult->fetchAssoc() )
		{
			$arr[] = array($data[ $groupIdField ], $data[ $groupLabelField ] );
		}
	} else {
		//	static permissions
		$arr = array();
		$arr[]=array("Default","<Default>");
	}
	return $arr;
}

function GetUserGroup()
{
	if( !Security::permissionsAvailable() ) {
		return array();
	}

	if( Security::dynamicPermissions() )
	{
		if( !Security::isGuest() )
		{
			$userRights = &Security::dynamicUserRights();
			return $userRights[".Groups"];
		}
		else {
			return array(-3);
		}
	}
	else
	{
		if( !Security::isGuest() )
		{
			return array("Default");
		}
		else
		{
			return array("Guest");
		}
	}
}

/**
 * @param Int  type - WR_CHART or WR_REPORT
 */
function CheckLastID( $type ) {
	// select max(id) from webreports where rpt_type=<type>

	$dc = new DsCommand();
	$dc->filter = DataCondition::FieldEquals( "rpt_type", wrSqlType( $type ) );
	$dc->totals[] = array(
		"field" => "rpt_id",
		"alias" => "id",
		"total" => "max"
	);

	$dataSource = wrMainDataSource();

	$rs = $dataSource->getTotals( $dc );
	if( $rs ) {
		$data = $rs->fetchAssoc();
		if( $data ) {
			return $data["id"] + 1;
		}
	}
	return 1;
}

function GetNumberFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(IsNumberType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function WRGetNBFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(!IsBinaryType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

/**
 * @param Int type - WR_CHART or WR_REPORT
 * @return String 'chart' or 'report'
 */
function wrSqlType( $type ) {
	return $type == WR_REPORT ? 'report' : 'chart';
}

/**
 * return list of reports or charts
 * @param Int type - WR_REPORT or WR_CHART
 */
function wrGetEntityList( $type ) {
	$dc = new DsCommand();
	$dc->filter = DataCondition::FieldEquals( "rpt_type", wrSqlType( $type ) );
	$dc->order[] = array( 
		"dir" => "ASC",
		"column" => "rpt_title"
	);

	$dataSource = wrMainDataSource();

	$rs = $dataSource->getList( $dc );
	if( !$rs ) {
		return array();
	}

	$userGroups = Security::getUserGroupIds();
	
	$ret = array();
	$xml = new xml();
	while( $row = $rs->fetchAssoc() ) {	
		$entArr = $xml->xml_to_array( escapeEntities( $row["rpt_content"] ) );
		$permissions = wrGetEntityPermissions( $entArr, $userGroups );

		if( !$entArr["tmp_active"] )
		{
			$ret[] = array(
				"name"		=> $row[ "rpt_name" ],
				"title"		=> $row[ "rpt_title" ],
				"owner"		=> $row[ "rpt_owner" ],
				"status"	=> $row[ "rpt_status" ],
				"view"		=> $permissions["view"],
				"edit"		=> $permissions["edit"]
			);
		}
	}
	return $ret;
}

function wrGetContent( $rpt_content ) {
	if( !$rpt_content ) {
		return array();
	}
	$xml = new xml();
	$entity = $xml->xml_to_array( escapeEntities( $rpt_content ) );
	if( !$entity ) {
		return array();
	}
}

function wrGetEntityPermissions( &$entity, $userGroups = NULL ) {
	if( !$userGroups )
		$userGroups = Security::getUserGroupIds();
	
	$permissions = array( "view" => 0, "edit" => 0 );

	if ( isset( $entity['permissions'] ) ) {
		foreach ( $entity['permissions'] as $prm ) {
			if ( $userGroups[ $prm['id'] ] ) {
				$permissions['view'] = ( $prm['view'] == "true" ) ? 1 : 0;
				$permissions['edit'] = ( $prm['edit'] == "true" ) ? 1 : 0;
			}
		}
	} else {
		$permissions['view'] = 1;
	}
	return $permissions;
}


/**
 * returns XML-string or null
 * @param String name - entity name
 * @param int $type - WR_REPORT or WR_CHART
 */
function wrLoadSelectedEntity( $name, $type)
{
	$reportData = wrGetEntityRecord( $name, $type );
	if( $reportData ) {
		return escapeEntities( $reportData["rpt_content"] );
	}
	return null;
}

function wrDeleteEntity( $name, $type )
{
	$dc = new DsCommand();
	$dc->filter = DataCondition::_And( array( 
		DataCondition::FieldEquals( "rpt_name", $name ),
		DataCondition::FieldEquals( "rpt_type", wrSqlType( $type ) )
	) );

	$dataSource = wrMainDataSource();
	$dataSource->deleteSingle( $dc, false );
}


/**
 * @param Int $type WR_REPORT or WR_CHART
 * 
 * @param Boolean $saveas
 */
function wrSaveEntity( $type, $oldName, $newName, $title, $status, $strXML, $saveas )
{
	$oldName = GoodFieldName( $oldName );
	$newName = GoodFieldName( $newName );
	
	$data = wrGetEntityRecord( $oldName, $type );

	$dataSource = wrMainDataSource();

	$dc = new DsCommand();
	$dc->values[ "rpt_name" ] = $newName;
	$dc->values[ "rpt_title" ] = $title;
	$dc->values[ "rpt_content" ] = $strXML;
	$dc->values[ "rpt_status" ] = $status;
	$dc->values[ "rpt_mdate" ] = now();
	
	if ( $data && ( !$saveas || $oldName == $newName ) ) {
		$dc->filter = DataCondition::_And( array( 
			DataCondition::FieldEquals( "rpt_name", $oldName ),
			DataCondition::FieldEquals( "rpt_type", wrSqlType( $type ) )
		) );
		$dataSource->updateSingle( $dc, false );
	} else {
		$dc->values[ "rpt_cdate" ] = now();
		$dc->values[ "rpt_owner" ] = Security::getUserName();
		if( !$dc->values[ "rpt_owner" ] ) { 
			//	.NET fix
			$dc->values[ "rpt_owner" ] = "";
		}
		$dc->values[ "rpt_type" ] = wrSqlType( $type );
		$dataSource->insertSingle( $dc );
	}

	if( $type == WR_REPORT && !$saveas && $oldName && $oldName != $newName ) {
		//	renamed report, update style
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "repname", $oldName );
		$dc->values["repname"] = $newName;
		$styleDs = wrStyleDataSource();
		$styleDs->updateSingle( $dc, false );
	}
}


function testAdvSearch($table)
{
	if(is_wr_project())
	{
		if($table=="public.antibiotics")
		{
			return 1;
		}
		if($table=="public.case_antibiotics")
		{
			return 1;
		}
		if($table=="public.clean_cut_implementations")
		{
			return 1;
		}
		if($table=="public.countries")
		{
			return 1;
		}
		if($table=="public.device_distributions")
		{
			return 1;
		}
		if($table=="public.diagnoses")
		{
			return 1;
		}
		if($table=="public.facilities")
		{
			return 1;
		}
		if($table=="public.follow_ups")
		{
			return 1;
		}
		if($table=="public.languages")
		{
			return 1;
		}
		if($table=="public.lifebox_staff")
		{
			return 1;
		}
		if($table=="public.partners")
		{
			return 1;
		}
		if($table=="public.procedures")
		{
			return 1;
		}
		if($table=="public.regions")
		{
			return 1;
		}
		if($table=="public.surgical_cases")
		{
			return 1;
		}
		if($table=="public.trainers")
		{
			return 1;
		}
		if($table=="public.training_courses")
		{
			return 1;
		}
		if($table=="public.training_languages")
		{
			return 1;
		}
		if($table=="public.training_leads")
		{
			return 1;
		}
		if($table=="public.training_partners")
		{
			return 1;
		}
		if($table=="public.training_sessions")
		{
			return 1;
		}
		if($table=="public.training_trainers")
		{
			return 1;
		}
		if($table=="public.ward_antibiotics")
		{
			return 1;
		}
		if($table=="public.ward_rounds")
		{
			return 1;
		}
		if($table=="public.clean_cut_implementation_summary_view")
		{
			return 1;
		}
		if($table=="public.device_distribution_summary_view")
		{
			return 1;
		}
		if($table=="public.surgical_case_summary_view")
		{
			return 1;
		}
		if($table=="public.training_summary_view")
		{
			return 1;
		}
		if($table=="public.programs")
		{
			return 1;
		}
		if($table=="public.training_approaches")
		{
			return 1;
		}
		if($table=="public.training_types")
		{
			return 1;
		}
		if($table=="public.quarters")
		{
			return 1;
		}
		if($table=="public.participant_role")
		{
			return 1;
		}
		if($table=="public.sex")
		{
			return 1;
		}
		if($table=="public.training_participants")
		{
			return 1;
		}
		if($table=="public.venues")
		{
			return 1;
		}
		if($table=="public.training_attendance")
		{
			return 1;
		}
		if($table=="public.participant_attendance_detail")
		{
			return 1;
		}
		if($table=="public.participant_attendance_summary")
		{
			return 1;
		}
		if($table=="public.training_participation")
		{
			return 1;
		}
		if($table=="public.daily_attendance_view")
		{
			return 1;
		}
		if($table=="public.users")
		{
			return 1;
		}
		if($table=="admin_rights")
		{
			return 1;
		}
		if($table=="admin_members")
		{
			return 1;
		}
		if($table=="admin_users")
		{
			return 1;
		}
		if($table=="public.lifeboxme__audit")
		{
			return 1;
		}
		if($table=="public.lifeboxme__locking")
		{
			return 1;
		}
		if($table=="public.months")
		{
			return 1;
		}
		if($table=="public.devices")
		{
			return 1;
		}
		if($table=="public.payment_methods")
		{
			return 1;
		}
		if($table=="public.transaction_types")
		{
			return 1;
		}
		if($table=="public.donors")
		{
			return 1;
		}
		if($table=="public.device_distribution_log")
		{
			return 1;
		}
		if($table=="public.device_inventory_changes")
		{
			return 1;
		}
	}
	elseif(is_wr_db())
	{
		global $dal;
		$table_list=WRGetTablesList();
		foreach($table_list as $key=>$value)
		{
			if($table==$value)
			{
				return 1;
			}
		}
	}
	elseif(is_wr_custom())
	{
		return 1;
	}
	return 0;
}

/**
 * convert cars.Make to [cars].[Make]
 */
function WRAddFieldWrappers($field)
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$t = "";
	$f = "";
	WRSplitFieldName($field, $t, $f);

	if(!$t)
	{
		return $connection->addFieldWrappers($f);
	}
	return $connection->addTableWrappers($t).".".$connection->addFieldWrappers($f);
}

function WRSplitFieldName($str, &$table, &$field)
{
	$table="";
	$field=$str;
	$pos=strrpos($field,".");
	if($pos===false)
		return;
	$table=substr($str,0,$pos);
	$field=substr($str,$pos+1);
}

function is_groupby_chart()
{
	if(!(@$_SESSION['webcharts']))
		return false;
	$root=&$_SESSION['webcharts'];
	if(!is_array($root["group_by_condition"]))
		return false;
	return ($root["group_by_condition"]["group_by_toggle"]=="true");
}

function WRChartLabel($str)
{
	$table="";
	$field="";
	WRSplitFieldName($str,$table,$field);
	return $field;
	if(!$table)
		return $field;
	return $table.".".$field;
}

function is_wr_db()
{
	if(@$_SESSION["webobject"]["table_type"]=="db")
		return true;
	else
		return false;
}

function is_wr_project()
{
	if(@$_SESSION["webobject"]["table_type"]=="project")
		return true;
	else
		return false;
}

function is_wr_custom()
{
	if(@$_SESSION["webobject"]["table_type"]=="custom")
		return true;
	else
		return false;
}

function WRGetTablesList()
{
	if(!isset($_SESSION["WRTableList"]))
	{
		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$_SESSION["WRTableList"] = $connection->getTableList();
	}
	return $_SESSION["WRTableList"];
}

function WRGetFieldsList($table)
{
	if(is_wr_project()){
		$pSet = new ProjectSettings($table);
		return $pSet->getFieldsList();
	}

	if(is_wr_db())
	{
		global $dal;
		if($dal->Table($table))
			return $dal->GetFieldsList($table);
		return dbinfoFieldsList($table);
	}

	if(is_wr_custom())
	{
		$res = array();
		$sql = $_SESSION["object_sql"];

		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$arr = $connection->getFieldsList($sql);

		foreach($arr as $val)
		{
			$res[] = $val["fieldname"];
		}
		return $res;
	}
}

function dbinfoFieldsList($table)
{
	if( isset($_SESSION["WRFieldList"][$table]) )
		return $_SESSION["WRFieldList"][$table];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = array();
	foreach($arr as $val)
	{
		$res[] = $val["fieldname"];
	}

	$_SESSION["WRFieldList"][$table] = $res;
	return $res;
}

function WRCustomGetFieldType($table,$field)
{
	global $conn;
	if(is_wr_project())
	{
		$pSet = new ProjectSettings($_SESSION['webreports']['tables'][0]);
		$type = $pSet->getFieldType($field);
		if($type)
			return $type;
	}
	if(is_wr_db())
	{
		global $dal;
		if($dal->Table($table))
			return $dal->GetFieldType($table,$field);
		return dbinfoFieldsType($table,$field);
	}

	if(is_wr_custom())
	{
		$res = "";
		$sql = $_SESSION["object_sql"];
		if($sql)
		{
			//The default connection is temporary used #9875
			$connection = getDefaultConnection();

			$arr = $connection->getFieldsList( $sql );
			foreach($arr as $val)
			{
				if($val["fieldname"] == $field)
					$res = $val["type"];
			}
		}
		return $res;
	}
}

function WRGetAllCustomFieldType()
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$res = array();
	$sql = $_SESSION["object_sql"];
	$arr = $connection->getFieldsList($sql);
	foreach($arr as $val)
	{
		$res[ $val["fieldname"] ] = $val["type"];
	}
	return $res;
}

function WRGetFieldType($fld)
{
	$table="";
	$field="";
	WRSplitFieldName($fld,$table,$field);
	return WRCustomGetFieldType($table,$field);
}

function dbinfoFieldsType($table,$field)
{
	if( isset($_SESSION["WRFieldType"][ $table ][ $field ]) )
		return $_SESSION["WRFieldType"][ $table ][ $field ];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = "";
	foreach($arr as $val)
	{
		if( $val["fieldname"] == $field )
			$res = $val["type"];

		$_SESSION["WRFieldType"][$table][$val["fieldname"]]=$val["type"]   ;
	}
	return $res;
}

function WRUseTimepicker($table,$field)
{
	return false;
}

function WRUseListLookup($table,$field)
{
	return false;
}

function getCaptionTable($table)
{
	global $strTableName;
	if(!$table)
		$table=$strTableName;
	if($table=="public.antibiotics")
	{
		return "Antibiotics";
	}
	if($table=="public.case_antibiotics")
	{
		return "Case Antibiotics";
	}
	if($table=="public.clean_cut_implementations")
	{
		return "Clean Cut Implementations";
	}
	if($table=="public.countries")
	{
		return "Countries";
	}
	if($table=="public.device_distributions")
	{
		return "Device Distributions";
	}
	if($table=="public.diagnoses")
	{
		return "Diagnoses";
	}
	if($table=="public.facilities")
	{
		return "Facilities";
	}
	if($table=="public.follow_ups")
	{
		return "Follow Ups";
	}
	if($table=="public.languages")
	{
		return "Languages";
	}
	if($table=="public.lifebox_staff")
	{
		return "Lifebox Staff";
	}
	if($table=="public.partners")
	{
		return "Partners";
	}
	if($table=="public.procedures")
	{
		return "Procedures";
	}
	if($table=="public.regions")
	{
		return "Regions";
	}
	if($table=="public.surgical_cases")
	{
		return "Surgical Cases";
	}
	if($table=="public.trainers")
	{
		return "Trainers";
	}
	if($table=="public.training_courses")
	{
		return "Training Courses";
	}
	if($table=="public.training_languages")
	{
		return "Training Languages";
	}
	if($table=="public.training_leads")
	{
		return "Training Leads";
	}
	if($table=="public.training_partners")
	{
		return "Training Partners";
	}
	if($table=="public.training_sessions")
	{
		return "Training Sessions";
	}
	if($table=="public.training_trainers")
	{
		return "Training Trainers";
	}
	if($table=="public.ward_antibiotics")
	{
		return "Ward Antibiotics";
	}
	if($table=="public.ward_rounds")
	{
		return "Ward Rounds";
	}
	if($table=="public.clean_cut_implementation_summary_view")
	{
		return "Clean Cut Implementation Summary View";
	}
	if($table=="public.device_distribution_summary_view")
	{
		return "Device Distribution Summary View";
	}
	if($table=="public.surgical_case_summary_view")
	{
		return "Surgical Case Summary View";
	}
	if($table=="public.training_summary_view")
	{
		return "Training Summary View";
	}
	if($table=="public.programs")
	{
		return "Programs";
	}
	if($table=="public.training_approaches")
	{
		return "Training Approaches";
	}
	if($table=="public.training_types")
	{
		return "Training Types";
	}
	if($table=="public.quarters")
	{
		return "Quarters";
	}
	if($table=="public.participant_role")
	{
		return "Participant Role";
	}
	if($table=="public.sex")
	{
		return "Sex";
	}
	if($table=="public.training_participants")
	{
		return "Training Participants";
	}
	if($table=="public.venues")
	{
		return "Venues";
	}
	if($table=="public.training_attendance")
	{
		return "Training Attendance";
	}
	if($table=="public.participant_attendance_detail")
	{
		return "Participant Attendance Detail";
	}
	if($table=="public.participant_attendance_summary")
	{
		return "Participant Attendance Summary";
	}
	if($table=="public.training_participation")
	{
		return "Training Participation";
	}
	if($table=="public.daily_attendance_view")
	{
		return "Daily Attendance View";
	}
	if($table=="public.users")
	{
		return "Users";
	}
	if($table=="admin_rights")
	{
		return "Admin Rights";
	}
	if($table=="admin_members")
	{
		return "Admin Members";
	}
	if($table=="admin_users")
	{
		return "Admin Users";
	}
	if($table=="public.lifeboxme__audit")
	{
		return "Lifeboxme  Audit";
	}
	if($table=="public.lifeboxme__locking")
	{
		return "Lifeboxme  Locking";
	}
	if($table=="public.months")
	{
		return "Months";
	}
	if($table=="public.devices")
	{
		return "Devices";
	}
	if($table=="public.payment_methods")
	{
		return "Payment Methods";
	}
	if($table=="public.transaction_types")
	{
		return "Transaction Types";
	}
	if($table=="public.donors")
	{
		return "Donors";
	}
	if($table=="public.device_distribution_log")
	{
		return "Device Distribution Log";
	}
	if($table=="public.device_inventory_changes")
	{
		return "Device Inventory Changes";
	}
	return $table;
}


function getChartTablesList()
{
	return WRGetQueryTables('webcharts');
}

function getReportTablesList()
{
	return WRGetQueryTables('webreports');
}

function WRGetQueryTables($type)
{
	$root=&$_SESSION[$type];
	$ret=array($root['tables'][0]);
	if (strlen(@$root['table_relations']["relations"]) && strpos($root['table_relations']['join_tables'], ",") !== false)
	{
		$joined = explode(",", $root['table_relations']['join_tables']);
		foreach($joined as $t)
		{
			if(strlen($t))
				$ret[]=$t;
		}
	}
	return $ret;
}

function GetDefaultViewFormat($type)
{
	if(IsBinaryType($type))
		return FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return FORMAT_DATE_SHORT;
	else
		return FORMAT_NONE;
}

function GetDefaultEditFormat($type)
{
	if(IsBinaryType($type))
		return EDIT_FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return EDIT_FORMAT_DATE;
	else
		return EDIT_FORMAT_TEXT_FIELD;
}

function GetGenericViewFormat($table,$field)
{
	return GetDefaultViewFormat(WRGetFieldType($table.".".$field));
}


function GetGenericEditFormat($table,$field)
{
	return GetDefaultEditFormat(WRGetFieldType($table.".".$field));
}

function GenericStrWhereAdv($strTable, $strField, $SearchFor, $strSearchOption, $SearchFor2, $etype)
{
	global $dal;
	$sfield=$strField;
	$stable="";
	if(is_wr_db())
	{
		WRSplitFieldName($strField,$stable,$sfield);
		$type=WRGetFieldType($strField);
	}
	else
		$type=WRCustomGetFieldType($strTable,$strField);

	if(GetDatabaseType() != nDATABASE_MSSQLServer)
		$ismssql=false;
	else
		$ismssql=true;

		$btexttype=IsTextType($type);
	if(GetDatabaseType() == nDATABASE_MySQL)
		$btexttype=false;

	if(IsBinaryType($type))
		return "";

	if(GetDatabaseType() == nDATABASE_MSSQLServer)
	{
		if($btexttype && $strSearchOption!="Contains" && $strSearchOption!="Starts with ..." )
			return "";
	}
	if($strSearchOption=='Empty')
	{
		if(IsCharType($type) && (!$ismssql || !$btexttype))
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)."='')";
		elseif ($ismssql && $btexttype)
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)." LIKE '')";
		else
			return WRAddFieldWrappers($strField)." is null";
	}
	if(GetDatabaseType() == nDATABASE_PostgreSQL)
		$like="ilike";
	else
		$like="like";
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($strTable);
		if($pSet->multiSelect($sfield))
			$SearchFor=splitLookupValues($SearchFor);
		else
			$SearchFor=array($SearchFor);
		$ret="";
		foreach($SearchFor as $searchItem)
		{
			$value = $searchItem;
			if(!($value=="null" || $value=="Null" || $value==""))
			{
				if(strlen($ret))
					$ret.=" or ";
				if($strSearchOption=="Equals")
				{
					$value=WRmake_db_value($sfield,$value,$strTable);
					if(!($value=="null" || $value=="Null"))
						$ret.=WRAddFieldWrappers($strField).'='.$value;
				}
				else
				{
					$connection = getWebreportConnection();
					if(strpos($value,",")!==false || strpos($value,'"')!==false)
						$value = '"'.str_replace('"','""',$value).'"';
					$ret.=WRAddFieldWrappers($strField)." = ".$connection->prepareString($value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value.",%");
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString($value.",%");
				}
			}
		}
		if(strlen($ret))
			$ret="(".$ret.")";
		return $ret;
	}
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_CHECKBOX)
	{
		if($SearchFor=="none")
			return "";
		if(NeedQuotes($type))
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>'0' and ".WRAddFieldWrappers($strField)."<>'' and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."='0' or ".WRAddFieldWrappers($strField)."='' or ".WRAddFieldWrappers($strField)." is null)";
		}
		else
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>0 and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."=0 or ".WRAddFieldWrappers($strField)." is null)";
		}
	}
	$value1=WRmake_db_value($sfield,$SearchFor,$strTable);
	$value2=false;
	if($strSearchOption=="Between")
		$value2=WRmake_db_value($sfield,$SearchFor2,$strTable);
	if($strSearchOption!="Contains" && $strSearchOption!="Starts with ..." && ($value1==="null" || $value2==="null" ))
		return "";

	$connection = getWebreportConnection();
	if(IsCharType($type) && !$btexttype)
	{
		$value1=$connection->upper($value1);
		$value2=$connection->upper($value2);
		$strField=$connection->upper(WRAddFieldWrappers($strField));
	}
	elseif ($ismssql && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField="convert(varchar,".WRAddFieldWrappers($strField).")";
	elseif(GetDatabaseType() == nDATABASE_PostgreSQL && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField = "CAST(".WRAddFieldWrappers($strField)." AS TEXT)";
	else
		$strField=WRAddFieldWrappers($strField);
	$ret="";
	if($strSearchOption=="Contains")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString("%".$SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString("%".$SearchFor."%");
	}
	else if($strSearchOption=="Equals")
	{
		return $strField."=".$value1;
	}
	else if($strSearchOption=="Starts with ...")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString($SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString($SearchFor."%");
	}
	else if($strSearchOption=="More than ...") return $strField.">".$value1;
	else if($strSearchOption=="Less than ...") return $strField."<".$value1;
	else if($strSearchOption=="Equal or more than ...") return $strField.">=".$value1;
	else if($strSearchOption=="Equal or less than ...") return $strField."<=".$value1;
	else if($strSearchOption=="Between")
	{
		$ret=$strField.">=".$value1;
		$ret.=" and ".$strField."<=".$value2;
		return $ret;
	}
	return "";
}



function GetAdvSearchOptions($table,$field)
{
	$format=GetGenericEditFormat($table,$field);
	$options=array();
	if($format==EDIT_FORMAT_DATE)
	{
		$options[]=array("type"=>"Equals","label"=>"Equals");
		$options[]=array("type"=>"More than ...","label"=>"More than");
		$options[]=array("type"=>"Less than ...","label"=>"Less than");
		$options[]=array("type"=>"Equal or more than ...","label"=>"Equal or more than");
		$options[]=array("type"=>"Equal or less than ...","label"=>"Equal or less than");
		$options[]=array("type"=>"Between","label"=>"Between");
		$options[]=array("type"=>"Empty","label"=>"Empty");
	}
	elseif($format==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($table, PAGE_REPORT);
		if($pSet->multiSelect($field))
			$options[]=array("type"=>"Contains","label"=>"Contains");
		else
			$options[]=array("type"=>"Equals","label"=>"Equals");
	}
	elseif($format==EDIT_FORMAT_TEXT_FIELD
	|| $format==EDIT_FORMAT_TEXT_AREA
	|| $format==EDIT_FORMAT_PASSWORD
	|| $format==EDIT_FORMAT_HIDDEN
	|| $format==EDIT_FORMAT_READONLY	)
	{
		$options[]=array("type"=>"Contains","label"=>"Contains");
		$options[]=array("type"=>"Equals","label"=>"Equals");
		$options[]=array("type"=>"Starts with ...","label"=>"Starts with");
		$options[]=array("type"=>"More than ...","label"=>"More than");
		$options[]=array("type"=>"Less than ...","label"=>"Less than");
		$options[]=array("type"=>"Equal or more than ...","label"=>"Equal or more than");
		$options[]=array("type"=>"Equal or less than ...","label"=>"Equal or less than");
		$options[]=array("type"=>"Between","label"=>"Between");
		$options[]=array("type"=>"Empty","label"=>"Empty");
	}
	else
	{
		$options[]=array("type"=>"Equals","label"=>"Equals");
}
	return $options;
}

function CalcSearchParam( $sessPrefix )
{
	$sWhere = "";

	if(@$_SESSION[$sessPrefix."_search"]==2)
//	 advanced search
	{
		foreach(@$_SESSION[$sessPrefix."_asearchfor"] as $f => $sfor)
		{
			$strSearchFor=trim($sfor);
			$strSearchFor2="";
			$type=@$_SESSION[$sessPrefix."_asearchfortype"][$f];
			if(array_key_exists($f,@$_SESSION[$sessPrefix."_asearchfor2"]))
				$strSearchFor2=trim(@$_SESSION[$sessPrefix."_asearchfor2"][$f]);
			if($strSearchFor!="" || true)
			{
				if (!$sWhere)
				{
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
						$sWhere="1=1";
					else
						$sWhere="1=0";
				}
				$strSearchOption=trim($_SESSION[$sessPrefix."_asearchopt"][$f]);
				$where = GenericStrWhereAdv(@$_SESSION[$sessPrefix."_asearchtable"][$f], $f, $strSearchFor, $strSearchOption, $strSearchFor2,$type);
				if($where)
				{
					if($_SESSION[$sessPrefix."_asearchnot"][$f])
						$where="not (".$where.")";
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
	   					$sWhere .= " and ".$where;
					else
	   					$sWhere .= " or ".$where;
				}
			}
		}
	}
	return $sWhere;
}

function WRViewFormat($field,$table="")
{
	$pSet = new ProjectSettings($table);
	return $pSet->getViewFormat($field);
}

function get_chart_series_fields(&$arr_data_series,&$arr_label_series)
{
	if(is_groupby_chart())
		return get_chart_groupbyseries_fields($arr_data_series,$arr_label_series);
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();

	$arr_join_tables = getChartTablesList();

	for ($i=0; $i < count($arr_join_tables); $i++ )
	{
		$t = $arr_join_tables[$i];
		$arr_fields = GetNumberFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_data_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_data_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
		$arr_fields = WRGetNBFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_label_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_label_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
	}
	if(!($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function get_chart_groupbyseries_fields(&$arr_data_series,&$arr_label_series)
{
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();
	for ($i=0; $i < count($root['group_by_condition'])-1; $i++)
	{
		$arr = &$root['group_by_condition'][$i];
		$field=$arr["field_opt"];
		$strLabel=WRChartLabel($field);
		$isLabel=false;
		$isData=false;
		if($arr["group_by_value"]!="-1" && $arr["group_by_value"]!="GROUP BY")
		{
			$field=$arr["group_by_value"]."(".$field.")";
			$isData=true;
			$isLabel=true;
		}
		else if($arr["group_by_value"]=="GROUP BY")
		{
			$type = WRGetFieldType($field);
			if(IsNumberType($type))
				$isData=true;
			$isLabel=true;
		}

		$ret = array("field"=>$field,"label"=>$strLabel);
		if($isLabel)
			$arr_label_series[]=$ret;
		if($isData)
			$arr_data_series[]=$ret;
	}
	if(!($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function WRProcessLargeText($text,$field,$recid,$chars,$mode,$strLabel, $isProgectTable = false)
{
	if(!$chars)
		return $text;
	if($mode!=MODE_LIST && $mode!=MODE_PRINT || strlen($text)<$chars+10)
		return $text;

	if($isProgectTable)
		$shortening = GetShorteningForLargeText($text, $cNumberOfChars);
	else
		$shortening = substr($text,0,$chars);

	if($mode==MODE_PRINT)
	{
		return $shortening."...";
	}
//	List page
	$id="textbox_".GoodFieldName($field).$recid;
	$textbox="<span style=\"display:none\" id=\"".$id."\">".$text."</span>";
	$link="<a href=# onclick=\"

	var offset = $(this).offset();
	offset.left -= $(window).scrollLeft();
	offset.top -= $(window).scrollTop();
	$('#".$id."').clone().dialog(
	{
title: '".jsreplace($strLabel)."',
		draggable: true,
		resizable: true,
		bgiframe: true,
		modal: false,
		minheight:400,
		position:[offset.left-50,offset.top-50]
	}
	);
	return false;
	\">&nbsp;"."More"."...</a>";
	return $shortening.$link.$textbox;
}

function JumpTo()
{
	return "$(\"#jumpto\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
		var jumpto = $(\"#jumpto\"), menujump = $(\"#menujump\"), framejump = $(\"#framejump\");
		if (jumpto.top + jumpto.height() + menujump.height() + $(window).scrollTop() > $(window).height()) {
			if(menujump.height() - jumpto.offset().top + $(window).scrollTop()>0)
			{
				menujump.css(\"top\", $(window).scrollTop()+\"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", $(window).scrollTop()+\"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
			else
			{
				menujump.css(\"top\", ($(this).offset().top - menujump.height()) + \"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", ($(this).offset().top - framejump.height()) + \"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
		} else {
			menujump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
			framejump.css(\"width\", menujump.width());
			framejump.css(\"height\", menujump.height());
			framejump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
		}
		framejump.show();
		menujump.show();
	});

	$(\"#jumpto\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(\"#menujump td\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
	});

	$(\"#menujump td\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(document.body).click(function(){
		$(\"#menujump\").hide();
		$(\"#framejump\").hide();
	});	";
}

function alertDialog()
{
return	"$(\"#alert\").dialog({
		open: function(event,ui){
			var alertParent = $(\"#alert\").parent(\".ui-dialog\"), aframe = $(\"#aframe\");
			w = alertParent.width();
			h = alertParent.height();
			t = alertParent.offset().top;
			l = alertParent.offset().left;
			aframe.css(\"width\",w+6);
			aframe.css(\"height\",h+6);
			aframe.css(\"top\",t + \"px\");
			aframe.css(\"left\",l + \"px\");
			aframe.show();
		},
		beforeclose: function(event,ui){
			$(\"#aframe\").hide();
		},
		title: \"Message\",
		draggable: false,
		resizable: false,
		bgiframe: true,
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$(this).dialog(\"close\");
			}
		}
	});";
}

function DBGetTableKeys($table)
{
	global $dal;
	if($dal->Table($table))
		return $dal->GetDBTableKeys($table);
	return array();
}

function colorPickerMouse()
{
return "

function GiveDec(Hex)
{
   if(Hex == \"A\")
	  Value = 10;
   else
   if(Hex == \"B\")
	  Value = 11;
   else
   if(Hex == \"C\")
	  Value = 12;
   else
   if(Hex == \"D\")
	  Value = 13;
   else
   if(Hex == \"E\")
	  Value = 14;
   else
   if(Hex == \"F\")
	  Value = 15;
   else
	  Value = eval(Hex);

   return Value;
}

function GiveHex(Dec)
{
   if(Dec == 10)
	  Value = \"A\";
   else
   if(Dec == 11)
	  Value = \"B\";
   else
   if(Dec == 12)
	  Value = \"C\";
   else
   if(Dec == 13)
	  Value = \"D\";
   else
   if(Dec == 14)
	  Value = \"E\";
   else
   if(Dec == 15)
	  Value = \"F\";
   else
	  Value = \"\" + Dec;

   return Value;
}

function HexToDec(value)
{
   Input = value.toUpperCase();

   a = GiveDec(Input.substring(0, 1));
   b = GiveDec(Input.substring(1, 2));
   c = GiveDec(Input.substring(2, 3));
   d = GiveDec(Input.substring(3, 4));
   e = GiveDec(Input.substring(4, 5));
   f = GiveDec(Input.substring(5, 6));

   x = (a * 16) + b; // Red
   y = (c * 16) + d; // Green
   z = (e * 16) + f; // Blue

	return [x,y,z]
}

function DecToHex(Red, Green, Blue)
{
   a = GiveHex(Math.floor(Red / 16));
   b = GiveHex(Red % 16);
   c = GiveHex(Math.floor(Green / 16));
   d = GiveHex(Green % 16);
   e = GiveHex(Math.floor(Blue / 16));
   f = GiveHex(Blue % 16);

   z = a + b + c + d + e + f;

	return z;
}

function rgbToHex(str)
{
	if(str==undefined)
		return \"\";
	if(str.substr(0,1)==\"#\")
		return str.substr(1);
	str=str.substring(4);
	str=str.replace(\")\",\"\");
	arr = new Array();
	arr=str.split(\",\");
	return DecToHex(arr[0],arr[1],arr[2]);
}

	$(\".ColorPickerDivSample\").css(\"cursor\",\"pointer\");

	$(\"#colorPickerVtd td\").each(function(){
        $(this).css(\"border\",\"1px solid \" + $(this).css(\"backgroundColor\"));
    })
		.css(\"cursor\",\"pointer\");

	$(\".selector,.ColorPickerDivSample\").click(function(){
	    click_color_event(this);
	});

	$(\"#colorPickerVtd\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
	}).mouseout(function(){
		closetimerpicker = window.setTimeout(function (){
				$('#colorPickerVtd').hide();
				$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(\"div.ColorPickerDivSample.active\").attr(\"color1\"));
			}, timeoutpicker);
	});

	$(\"#colorPickerVtd td\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
		$(this).css(\"border\", \"1px dotted #fff\");
		$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(this).css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").mouseout(function(){
		$(this).css(\"border\", \"1px solid \"+$(\"div.ColorPickerDivSample.active\").css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").click(function(){
		if ( this.id == \"nocolor\" ) {
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", \"\");
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", \"\");
		} else {
			bgcol=$(this).css(\"backgroundColor\");
			if(bgcol.substring(0,1)!=\"#\")
				bgcol=rgbToHex(bgcol);
			else
				bgcol=bgcol.substring(1);
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", bgcol);
			arr = HexToDec(bgcol);
			red = parseInt( arr[0] * 0.85 );
			green = parseInt( arr[1] * 0.85 );
			blue = parseInt( arr[2] * 0.85 );
			hex = DecToHex( red, green, blue );
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", hex);
		}
		$(\"#colorPickerVtd\").hide();
	});

	function click_color_event(th)
	{
		if($(th).css(\"cursor\")==\"pointer\")
	    {
			if(closetimerpicker) {
				window.clearTimeout(closetimerpicker);
				closetimerpicker = null;
		}
		if($(th).attr(\"class\")==\"selector\")
			bc=$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").css(\"background-color\");
		else
			bc=$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").css(\"background-color\");

		var activeDiv = $(\"div.ColorPickerDivSample.active\"), colorPicker = $(\"#colorPickerVtd\");
		if(activeDiv.length){
			activeDiv.css(\"background-color\", activeDiv.attr(\"color1\"));
			activeDiv.removeClass(\"active\");
		}

		if($(th).attr(\"class\")==\"selector\")
			$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").addClass(\"active\");
		else
			$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").addClass(\"active\");


		colorPicker.css(\"top\", $(th).offset().top + \"px\");
		colorPicker.css(\"left\", $(th).offset().left + $(th).width() + 3 + \"px\");
		colorPicker.show();
		$(\"td\", colorPicker).each(function(){
			$(this).css(\"border\", \"1px solid \"+$(this).css(\"background-color\"));
			if(bc==$(this).css(\"background-color\"))
				$(this).css(\"border\", \"1px dotted #fff\");
		});
	    }
	}

	";
}

function MoveTdTotal()
{
return "
function total_td_move(th,direct)
{
	tr=$(th).parent().parent().parent();

	if(direct==\"up\")
		tr2=$(tr).prev();
	else
		tr2=$(tr).next();
	// || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).type=='checkbox'
	if(!$(tr2).find(\"td\").eq(3).find(\"input\").get(0) || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).disabled)
		tr2=\"\";
	if(tr2!=\"\")
	{
		if(direct==\"up\")
			$(tr).insertBefore(tr2);
		else
			$(tr).insertAfter(tr2);
	}
}";
}

/**
 * @param String str
 * @param Connection connection
 * @return String
 */
function PrepareString4DB($str, $connection)
{
	if($connection->dbType != nDATABASE_Oracle)
	{
		return $connection->prepareString($str);
	}

	if( strlen($str) < 4000 )
		return $connection->prepareString($str);

	$chunklen = 3900;
	$chunks = floor(strlen($str) / $chunklen);
	if( strlen($str) % $chunklen != 0 )
		$chunks++;

	$out = "";
	for($i = 0; $i < $chunks; $i++)
	{
		if(strlen($out))
			$out.="||";

		$out.="to_clob(";
		$out.= $connection->prepareString( substr($str, $i*$chunklen, $chunklen) );
		$out.=")";
	}
	return $out;
}

function WRmake_db_value($field,$value,$table="")
{
	$ret=WRprepare_for_db($field,$value,$table);

	if($ret===false)
		return $ret;
	return WRadd_db_quotes($field,$ret,$table);
}

function WRadd_db_quotes($field,$value,$table="")
{
	$connection = getWebreportConnection();

	$type = WRGetFieldType($table.".".$field);
	if(IsBinaryType($type))
	{
		return $connection->addSlashesBinary($value);
	}
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "null";
	if(NeedQuotes($type))
	{
		if(!IsDateFieldType($type))
			$value=$connection->prepareString($value);
		else
			$value=$connection->addDateQuotes($value);
	}
	else
	{
		$strvalue = (string)$value;
		$strvalue = str_replace(",",".",$strvalue);
		if(is_numeric($strvalue))
			$value=$strvalue;
		else
			$value=0;
	}
	return $value;
}

function WRprepare_for_db($field,$value,$table="")
{
	$type=WRGetFieldType($table.".".$field);
	if(is_array($value))
		$value=combinevalues($value);
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "";
	if(IsDateFieldType($type))
		$value=localdatetime2db($value);
	return $value;
}

function DBGetTablesList()
{
	global $dal;
	$tables = WRGetTablesList();
	$ret=array();

	foreach($tables as $value)
	{
		$val_lower=wr_getTableName(strtolower($value));
		if(substr($val_lower,-6)!="_audit" && substr($val_lower,-8)!="_locking" && substr($val_lower,-9)!="_ugrights" && substr($val_lower,-9)!="_uggroups"
		&& substr($val_lower,-10)!="_ugmembers" && $val_lower!="admin_rights" && $val_lower!="admin_users"
		&& $val_lower!="admin_members" && $val_lower!="webreports" && $val_lower!="webreport_style"
		&& $val_lower!="webreport_admin" && $val_lower!="webreport_settings" && $val_lower!="webreport_sql")
			$ret[]=$value;
	}
	return $ret;
}

function WRGetTableListAdmin( $db_type )
{
	$dc = new DsCommand();
	$dc->filter = DataCondition::FieldEquals( "db_type", $db_type );

	$dataSource = wrAdminDataSource();

	$rs = $dataSource->getList( $dc );
	if( !$rs ) {
		return array();
	}
	$ret = array();
	while( $data = $rs->fetchAssoc() )
	{
		$ret[] = array( 
			"tablename" => $data[ "tablename" ], 
			"group" => $data[ "group_name" ]
		);
	}
	return $ret;
}

function GetTablesListReport()
{
	$arr=array();
	$securityFlag = true;
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.antibiotics");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.antibiotics";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.antibiotics";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.case_antibiotics");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.case_antibiotics";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.case_antibiotics";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.clean_cut_implementations");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.clean_cut_implementations";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.clean_cut_implementations";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.countries");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.countries";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.countries";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.device_distributions");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.device_distributions";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.device_distributions";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.diagnoses");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.diagnoses";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.diagnoses";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.facilities");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.facilities";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.facilities";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.follow_ups");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.follow_ups";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.follow_ups";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.languages");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.languages";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.languages";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.lifebox_staff");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.lifebox_staff";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.lifebox_staff";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.partners");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.partners";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.partners";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.procedures");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.procedures";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.procedures";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.regions");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.regions";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.regions";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.surgical_cases");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.surgical_cases";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.surgical_cases";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.trainers");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.trainers";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.trainers";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_courses");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_courses";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_courses";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_languages");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_languages";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_languages";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_leads");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_leads";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_leads";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_partners");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_partners";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_partners";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_sessions");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_sessions";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_sessions";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_trainers");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_trainers";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_trainers";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ward_antibiotics");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ward_antibiotics";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ward_antibiotics";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ward_rounds");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ward_rounds";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ward_rounds";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.clean_cut_implementation_summary_view");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.clean_cut_implementation_summary_view";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.clean_cut_implementation_summary_view";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.device_distribution_summary_view");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.device_distribution_summary_view";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.device_distribution_summary_view";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.surgical_case_summary_view");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.surgical_case_summary_view";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.surgical_case_summary_view";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_summary_view");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_summary_view";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_summary_view";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.programs");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.programs";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.programs";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_approaches");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_approaches";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_approaches";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.quarters");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.quarters";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.quarters";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.participant_role");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.participant_role";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.participant_role";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.sex");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.sex";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.sex";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_participants");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_participants";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_participants";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.venues");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.venues";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.venues";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_attendance");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_attendance";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_attendance";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.participant_attendance_detail");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.participant_attendance_detail";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.participant_attendance_detail";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.participant_attendance_summary");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.participant_attendance_summary";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.participant_attendance_summary";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.training_participation");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.training_participation";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.training_participation";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.daily_attendance_view");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.daily_attendance_view";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.daily_attendance_view";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.users");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.users";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.users";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_rights");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_rights";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_rights";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_members");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_members";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_members";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_users");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_users";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_users";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.lifeboxme__audit");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.lifeboxme__audit";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.lifeboxme__audit";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.lifeboxme__locking");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.lifeboxme__locking";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.lifeboxme__locking";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.months");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.months";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.months";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.devices");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.devices";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.devices";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.payment_methods");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.payment_methods";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.payment_methods";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.transaction_types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.transaction_types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.transaction_types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.donors");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.donors";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.donors";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.device_distribution_log");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.device_distribution_log";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.device_distribution_log";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.device_inventory_changes");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.device_inventory_changes";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.device_inventory_changes";
	}
	return $arr;
}

function GetTablesListCustom()
{
	$connection = getWebreportConnection();// #9875
	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("sqlname" => $data["sqlname"], "isStorProc" => IsStoredProcedure($data["sqlcontent"]));
	}
	return $arr;
}

function DBGetTablesListByGroup($db="db")
{
	if($db=="db")
		$tables = DBGetTablesList();
	elseif($db=="project")
		$tables = GetTablesListReport();
	else
		$tables = GetTablesListCustom();
	$ret=array();
	if($db=="db")
		$tables_admin = WRGetTableListAdmin("db");
	elseif($db=="project")
		$tables_admin = WRGetTableListAdmin("project");
	else
		$tables_admin = WRGetTableListAdmin("custom");

	$userGroups = GetUserGroup();

//	all tables
	foreach($tables as $table_name)
	{
		if($db=="custom")
			$tablename=$table_name["sqlname"];
		else
			$tablename=$table_name;
//	permissions
		foreach($tables_admin as $tablerights)
		{
			if($tablerights["tablename"]!=$tablename)
				continue;
//	user groups
			$found=false;
			if(!($userGroups))
			{
//	no groups at all
				$found=true;
			}
			elseif($tablerights["group"]=="")
			{
//	initial table initialization
				$found=true;
			}
			else
			{
				foreach($userGroups as $group)
				{
					if((string)$group == $tablerights["group"])
					{
						$found=true;
						break;
					}
				}
			}
			if($found)
			{
				$ret[]=$table_name;
				break;
			}
		}
	}
	return $ret;
}

function isWRAdmin()
{
	if( !Security::permissionsAvailable() ) {
		return @$_SESSION["WRAdmin"];
	}
	$sUserGroup=@$_SESSION["GroupID"];
	if( !Security::dynamicPermissions() ) {
	} else {
		return IsAdmin();
	}
}

function sortUserGroup($a,$b)
{
	if($a[1]<$b[1])
		return -1;
	else
		return 1;
}

function Convert_Old_Chart($arr)
{
	switch($arr["chart_type"]["type"])
	{
		case "3d_column":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "3d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "2d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_column":
			$arr["chart_type"]["type"]="2d_column";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "line":
			$arr["chart_type"]["type"]="line";
			if(!isset($arr["appearance"]["linestyle"]))
				$arr["appearance"]["linestyle"]=0;
			break;
		case "spline":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=1;
			break;
		case "step_line":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=2;
			break;
		case "area_stacked":
			$arr["chart_type"]["type"]="area";
			$arr["appearance"]["isstacked"]="true";
			break;
	}
	if(!isset($arr['appearance']["cscroll"]))
	{
		$arr['appearance']["cscroll"]="true";
		$arr['appearance']["autoupdate"]="false";
		$arr['appearance']["maxbarscroll"]="10";
		$arr['appearance']["update_interval"]="5";
	}

	for($i=0;$i<4;$i++)
	{
		if(isset($arr['appearance']['color'.($i+1).'1']))
			$arr['parameters'][$i]['series_color']=$arr['appearance']['color'.($i+1).'1'];
	}
	return $arr;
}

function WRGetListCustomSQL()
{
	$connection = getWebreportConnection();// #9875

	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("id" => $data["id"], "sqlname" => $data["sqlname"], "sqlcontent" => $data["sqlcontent"]);
	}
	return $arr;
}

function WRgetCurrentCustomSQL($id)
{
	if( !$id )
		return array(0, "", "");

	$data = wrGetCustomSQLRecordById( $id );
	if( $data )
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);
	return "";
}

/**
 * ???
 */
function getCustomSQLbyName( $name )
{
	$data = wrGetCustomSQLRecordByName( $name );
	if( $data )
		return array( $data["id"], $data["sqlname"], $data["sqlcontent"] );
	return "";
}

function update_report_totals()
{
	$root=&$_SESSION["webreports"];
//	ensure all fields in reports are listed in the tables
	$tables=getReportTablesList();
	if(is_wr_custom())
		$fields = WRGetFieldsList('');
	$arr_unset=array();
	foreach($root["totals"] as $idx=>$fld)
	{
		if(array_search($fld["table"],$tables)!==false || is_null($fld["table"]) && is_wr_custom())
		{
			if(!is_wr_custom())
				$fields = WRGetFieldsList($fld["table"]);
			if(array_search($fld["name"], $fields)!==false)
				continue;
		}
//	remove $total if found
		$arr_unset[]=$idx;
	}
	foreach($arr_unset as $idx=>$fld)
	{
		unset($root["totals"][$fld]);
	}

//	ensure all fields appear in the totals
	$all_fields=array();
	foreach($tables as $t)
	{
		$fields=WRGetFieldsList($t);
		foreach($fields as $f)
		{
			if(is_wr_db())
				$all_fields[]=$t.".".$f;
			else
				$all_fields[]=$f;
		}
	}

//	ensure all series  fields appear in the totals
	foreach($all_fields as $fieldItem)
	{
		$f = $fieldItem;
		$table="";
		$fld="";
		if(is_wr_db())
			WRSplitFieldName($f,$table,$fld);
		else
		{
			$table=$tables[0];
			$fld=$f;
			$f=$table."_".$f;
		}
		if(array_key_exists(GoodFieldName($f),$root["totals"]))
			continue;
		$pSet = new ProjectSettings($table, PAGE_LIST);
        $root['totals'][GoodFieldName($f)] = array();
        $root['totals'][GoodFieldName($f)]["name"] = $fld;
        $root['totals'][GoodFieldName($f)]["table"] = $table;
		$root['totals'][GoodFieldName($f)]["label"] = $pSet->label($fld);
        $root['totals'][GoodFieldName($f)]["show"] = "true";
        $root['totals'][GoodFieldName($f)]["min"] = "false";
        $root['totals'][GoodFieldName($f)]["max"] = "false";
        $root['totals'][GoodFieldName($f)]["sum"] = "false";
        $root['totals'][GoodFieldName($f)]["avg"] = "false";
		$root['totals'][GoodFieldName($f)]["curr"] = "false";
        $root['totals'][GoodFieldName($f)]["search"] = "";
        $root['totals'][GoodFieldName($f)]["view_format"] = GetGenericViewFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["edit_format"] = GetGenericEditFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["display_field"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["linkfield"] = $pSet->getLinkField($fld);
        $root['totals'][GoodFieldName($f)]["show_thumbnail"] = $pSet->showThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["need_encode"] = $pSet->NeedEncode($fld);
        $root['totals'][GoodFieldName($f)]["thumbnail"] = $pSet->getStrThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgwidth"] = $pSet->getImageWidth($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgheight"] = $pSet->getImageHeight($fld);
        $root['totals'][GoodFieldName($f)]["hlprefix"] = $pSet->getLinkPrefix($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_filename"] = $pSet->getFilenameField($fld);
        $root['totals'][GoodFieldName($f)]["lookupobj_lookuptype"] = $pSet->getLookupType($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_customdispaly"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_table"] = $pSet->getLookupTable($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_where"] = prepareLookupWhere( $fld, $pSet );
	}
	$_SESSION["webreports"]=$root;
}

function Reload_Report($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webreports']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	if(postvalue("edit")=="style" && isset($_SESSION['webreports']))
		return true;
	$arr = wrGetEntityArray( $name, WR_REPORT );
	if(!$arr)
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webreports'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webreports']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webreports']['settings']['name'];
}

function Reload_Chart($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webcharts']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	$arr = wrGetEntityArray( $name, WR_CHART );
	if(!$arr)
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webcharts'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webcharts']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webcharts']['settings']['name'];
}

function wr_getTableName($name)
{
	$pos = strrpos($name,".");
	if($pos !== false)
		$name = substr($name, $pos+1);
	return $name;
}

/**
 * Get the conneciton object corresponding to the wizard werbreport tables
 * @return Connetion
 */
function getWebreportConnection()
{
	global $cman;
	return $cman->getForWebReports();
}

/**
 * @param xTempl xt
 * @param String prefix
 */
function SetWRLangVars($xt, $prefix)
{
	$xt->assign("lang_label", true);

	$var = GoodFieldName( mlang_getcurrentlang() )."_langattrs";
	$xt->assign($var, "selected");

	$is508 = isEnableSection508();
	if($is508)
		$xt->assign_section("lang_label","<label for=\"lang\">","</label>");

	$xt->assign("langselector_attrs","name=lang ".($is508==true ? "id=\"lang\" " : "")
		."onchange=\"javascript: window.location='".GetTableLink($prefix)."?language='+this.options[this.selectedIndex].value\"");
}

/**
 * @param String tName
 * @param Array sortFields
 * @param ProjectSettings pSet
 * @param Boolean editmode
 * @return DsCommand
 */
function getProjectWRSubsetDataCommand( $tName, &$sortFields, $pSet, $editmode = false ) {
	$subsetDataCommand = new DsCommand();

	$subsetDataCommand->order = array();
	foreach ( $sortFields as $field ) {
		$subsetDataCommand->order[] = array( "column" => $field['name'], "dir" => $field['desc'] ? "DESC" : "ASC" );
	}

	$subsetDataCommand->filter = Security::SelectCondition( "S", $pSet );

	if ( !$editmode ) {
		/*$cipherer = new RunnerCipherer( $tName );

		$params = array();
		$params['tName'] = $tName;
		$params['cipherer'] = $cipherer;
		$params['searchFieldsArr'] = WRGetFieldsList( $tName );

		$searchClauseObj = new SearchClause( $params );
		$searchClauseObj->parseRequest();*/
		;

		$searchClauseObj = SearchClause::getSearchObject( $tName );
		$searchClauseObj->searchFieldsArr = WRGetFieldsList( $tName );

		$subsetDataCommand->filter = DataCondition::_And( array(
			$subsetDataCommand->filter,
			$searchClauseObj->getSearchDataCondition()
		));
	}

	return $subsetDataCommand;
}

/**
 * return report record from the database, null or false when record doesn't exist
 * @param String name - entity name
 * @param int $report - WR_REPORT or WR_CHART
 */
function wrGetEntityRecord( $name, $type ) {
	$dc = new DsCommand();
	$dc->filter = DataCondition::_And( array( 
		DataCondition::FieldEquals( "rpt_name", $name ),
		DataCondition::FieldEquals( "rpt_type", wrSqlType( $type ) )
	) );

	$dataSource = wrMainDataSource();

	$rs = $dataSource->getSingle( $dc );
	if( $rs ) {
		return $rs->fetchAssoc();
	}
	return null;
}

/**
 * @return String - custom SQL from webreport_sql table or null
 */
function wrGetCustomSQLRecordByName( $name ) {
	$dc = new DsCommand();
	$dc->filter = DataCondition::FieldEquals( "sqlname", $name );

	$dataSource = wrSqlDataSource();

	$rs = $dataSource->getSingle( $dc );
	if( $rs ) {
		return $rs->fetchAssoc();
	}
	return null;
}

function wrGetCustomSQLRecordById( $id ) {
	$dc = new DsCommand();
	$dc->filter = DataCondition::FieldEquals( "id", $id );

	$dataSource = wrSqlDataSource();

	$rs = $dataSource->getSingle( $dc );
	if( $rs ) {
		return $rs->fetchAssoc();
	}
	return null;
}


function wrGetCustomSQL( $name ) {
	$data = wrGetCustomSQLRecordByName( $name );
	if( $data ) {
		return $data[ "sqlcontent" ];
	}
	return "";
}


/**
 * @param String $name - report name
 * @return DataResult - all style records belong to the report
 */
function wrGetStyleRS( $name ) {
	$dc = new DsCommand();
	$dc->filter = DataCondition::FieldEquals( "repname", $name );
	$dc->order[] = array(
		"column" => "report_style_id",
		"dir" => "ASC"
	);
	$dataSource = wrStyleDataSource();
	return $dataSource->getList( $dc );

}

function wrMainDataSource() {
	global $cman;
	return getDbTableDataSource( "webreports", $cman->getSavedSearchesConnId() );
}

function wrSqlDataSource() {
	global $cman;
	return getDbTableDataSource( "webreport_sql", $cman->getSavedSearchesConnId() );
}

function wrAdminDataSource() {
	global $cman;
	return getDbTableDataSource( "webreport_admin", $cman->getSavedSearchesConnId() );
}

function wrStyleDataSource() {
	global $cman;
	return getDbTableDataSource( "webreport_style", $cman->getSavedSearchesConnId() );
}



?>