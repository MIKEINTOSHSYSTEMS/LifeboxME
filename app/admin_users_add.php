<?php 
@ini_set("display_errors","1");

$requestTable = 'admin_users';
$strTableName = 'admin_users';
$requestPage = "add";

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/addpage.php');
require_once('classes/add_calendar.php');
require_once('classes/add_gantt.php');

add_nocache_headers();

if( Security::hasLogin() ) {
	if( !AddPage::processAddPageSecurity( $strTableName ) )
		return;
}

AddPage::handleBrokenRequest();


$pageMode = AddPage::readAddModeFromRequest();

$xt = new Xtempl();

$id = postvalue_number("id");
$id = $id ? $id : 1;
	 	
//an array of AddPage constructor's params 
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_ADD;
$params["tName"] = $strTableName;
$params["pageName"] = postvalue("page");
$params["action"] = postvalue("a");
$params["needSearchClauseObj"] = false;
$params["afterAdd_id"] = postvalue("afteradd");

$params["hostPageName"] = postvalue("hostPageName");
$params["listPage"] = postvalue("listPage");

$params["newRowId"] = postvalue("newRowId");

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();


$params["captchaName"] = CaptchaId;
$params["captchaValue"] = postvalue( 'value_'. CaptchaId . '_' . $id );
$params["dashElementName"] = postvalue("dashelement");
$params["fromDashboard"] = postvalue("fromDashboard");
$params["dashTName"] = $params["fromDashboard"] ? $params["fromDashboard"] : postvalue("dashTName");
$params["dashPage"] = postvalue("dashPage");

$params["forSpreadsheetGrid"] = postvalue("spreadsheetGrid");

if ( $pageMode == ADD_POPUP ) {
	$params["forListPageLookup"] = postvalue('forLookup');
}

if( $pageMode == ADD_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	$params["dashPage"] = postvalue("dashPage");
}


if( $pageMode == ADD_INLINE )
{
	// Inline add in a 'List page with search' lookup
	$params["forListPageLookup"] = postvalue('forLookup');
	
	$params["screenWidth"] = postvalue("screenWidth");
	$params["screenHeight"] = postvalue("screenHeight");
	$params["orientation"] = postvalue("orientation");
	
	$params["masterPageType"] = postvalue("masterpagetype");
}	


if( $pageMode == ADD_ONTHEFLY || ( $pageMode == ADD_INLINE || $pageMode == ADD_POPUP ) && postvalue('forLookup') )	
{
	//table where lookup is set
	$params["lookupTable"] = postvalue("table");
	//field with lookup is set	
	$params["lookupField"] = postvalue("field");
	 //the ptype od the page where lookup is set
	$params["lookupPageType"] = postvalue("pageType");
	
	if( postvalue('parentsExist') )
	{
		//the parent controls values data
		$params["parentCtrlsData"] = runner_json_decode( postvalue("parentCtrlsData") );		
	}		
}

if( $params['pageName'] == CALENDAR_ADD_PAGE ) {
	$pageObject = new AddCalendarPage( $params );
} else if( postvalue( 'gantt' ) ) {
	$params['parentValue'] = postvalue( 'parent' );
	$pageObject = new AddGanttPage( $params );
} else {
	$pageObject = new AddPage( $params );

}
$pageObject->init();

$pageObject->process();	
?>