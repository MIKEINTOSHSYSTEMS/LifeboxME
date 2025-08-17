<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "public.antibiotics";
$nonAdminTablesArr[] = "public.case_antibiotics";
$nonAdminTablesArr[] = "public.clean_cut_implementations";
$nonAdminTablesArr[] = "public.countries";
$nonAdminTablesArr[] = "public.device_distributions";
$nonAdminTablesArr[] = "public.diagnoses";
$nonAdminTablesArr[] = "public.facilities";
$nonAdminTablesArr[] = "public.follow_ups";
$nonAdminTablesArr[] = "public.languages";
$nonAdminTablesArr[] = "public.lifebox_staff";
$nonAdminTablesArr[] = "public.partners";
$nonAdminTablesArr[] = "public.procedures";
$nonAdminTablesArr[] = "public.regions";
$nonAdminTablesArr[] = "public.surgical_cases";
$nonAdminTablesArr[] = "public.trainers";
$nonAdminTablesArr[] = "public.training_courses";
$nonAdminTablesArr[] = "public.training_languages";
$nonAdminTablesArr[] = "public.training_leads";
$nonAdminTablesArr[] = "public.training_partners";
$nonAdminTablesArr[] = "public.training_sessions";
$nonAdminTablesArr[] = "public.training_trainers";
$nonAdminTablesArr[] = "public.ward_antibiotics";
$nonAdminTablesArr[] = "public.ward_rounds";
$nonAdminTablesArr[] = "public.clean_cut_implementation_summary_view";
$nonAdminTablesArr[] = "public.device_distribution_summary_view";
$nonAdminTablesArr[] = "public.surgical_case_summary_view";
$nonAdminTablesArr[] = "public.training_summary_view";
$nonAdminTablesArr[] = "public.programs";
$nonAdminTablesArr[] = "public.training_approaches";
$nonAdminTablesArr[] = "public.training_types";
$nonAdminTablesArr[] = "public.quarters";
$nonAdminTablesArr[] = "public.participant_role";
$nonAdminTablesArr[] = "public.sex";
$nonAdminTablesArr[] = "public.training_participants";
$nonAdminTablesArr[] = "public.venues";
$nonAdminTablesArr[] = "public.training_attendance";
$nonAdminTablesArr[] = "public.participant_attendance_detail";
$nonAdminTablesArr[] = "public.participant_attendance_summary";
$nonAdminTablesArr[] = "public.training_participation";
$nonAdminTablesArr[] = "public.daily_attendance_view";
$nonAdminTablesArr[] = "public.users";
$nonAdminTablesArr[] = "public.lifeboxme__audit";
$nonAdminTablesArr[] = "public.lifeboxme__locking";
$nonAdminTablesArr[] = "public.months";
$nonAdminTablesArr[] = "public.devices";
$nonAdminTablesArr[] = "public.payment_methods";
$nonAdminTablesArr[] = "public.transaction_types";
$nonAdminTablesArr[] = "public.donors";
$nonAdminTablesArr[] = "public.device_distribution_log";
$nonAdminTablesArr[] = "public.device_inventory_changes";
$nonAdminTablesArr[] = "aio_training_tracking";
$nonAdminTablesArr[] = "Dashboard";
$nonAdminTablesArr[] = "Lifebox_DHIS2_OrgUnits";
$nonAdminTablesArr[] = "public.lifeboxme_dhis2_orgunits";
$nonAdminTablesArr[] = "Lifebox_DHIS2_Settings";
$nonAdminTablesArr[] = "Lifebox_DHIS2_dataItems";
$nonAdminTablesArr[] = "public.lifeboxme_dhis2_dataitems";
$nonAdminTablesArr[] = "public.lifeboxme_dhis2_analytics_settings";
$nonAdminTablesArr[] = "public.lifeboxme_dhis2_analytics_data";
$nonAdminTablesArr[] = "aio_training_tracking Chart";
$nonAdminTablesArr[] = "aio_training_tracking Chart by sex";
$nonAdminTablesArr[] = "public.smtp";
$nonAdminTablesArr[] = "public.lbapt_annual_plan_tracker";
$nonAdminTablesArr[] = "public.lbapt_beginnings_fund";
$nonAdminTablesArr[] = "public.lbapt_communications";
$nonAdminTablesArr[] = "public.lbapt_cri";
$nonAdminTablesArr[] = "public.lbapt_dashboard_summary";
$nonAdminTablesArr[] = "public.lbapt_development";
$nonAdminTablesArr[] = "public.lbapt_elma";
$nonAdminTablesArr[] = "public.lbapt_governance";
$nonAdminTablesArr[] = "public.lbapt_kpis_on_track";
$nonAdminTablesArr[] = "public.lbapt_operations";
$nonAdminTablesArr[] = "public.lbapt_programs";
$nonAdminTablesArr[] = "public.lbapt_sample_workflow";
$nonAdminTablesArr[] = "public.lbapt_status";
$nonAdminTablesArr[] = "public.lbapt_strategic_areas";
$nonAdminTablesArr[] = "public.lbapt_all_activities_view";
$nonAdminTablesArr[] = "public.lbapt_dashboard_summary_view";
$nonAdminTablesArr[] = "public.lbapt_kpis_tracking_view";
$nonAdminTablesArr[] = "public.lbapt_unified_activities";
$nonAdminTablesArr[] = "public.years";
$nonAdminTablesArr[] = "public.lbapt_finance";
$nonAdminTablesArr[] = "public.lbapt_hr";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "public.lifeboxme_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "public.lifeboxme_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "public.lifeboxme_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}