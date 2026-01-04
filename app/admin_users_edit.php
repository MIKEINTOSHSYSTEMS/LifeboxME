<?php 
@ini_set("display_errors","1");

$requestTable = 'admin_users';
$strTableName = 'admin_users';
$requestPage = "edit";
$keyFields = array( 
	'ID' 
);


require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/editpage.php');

add_nocache_headers();

if( Security::hasLogin() ) {
	if( !EditPage::processEditPageSecurity( $strTableName ) )
		return;
}

EditPage::handleBrokenRequest();

// parse control parameters
$pageMode = EditPage::readEditModeFromRequest();

$xt = new Xtempl();	
	
$id = postvalue_number("id");
$id = intval($id) == 0 ? 1 : $id;


// $keys could not be set properly if editid params were no passed
$keys = array();
foreach( $keyFields as $idx => $f ) {
	$keys[ $f ]	= postvalue( 'editid' . ($idx + 1) );
}

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["keys"] = $keys;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_EDIT;
$params["pageName"] = postvalue("page");
$params["tName"] = $strTableName;
$params["action"] = postvalue("a");
$params["selectedFields"] = postvalue("fields");
$params["captchaName"] = CaptchaId;
$params["captchaValue"] = postvalue( 'value_'. CaptchaId . '_' . $id );
$params["selection"] = postvalue("selection");
$params["rowIds"] = runner_json_decode( postvalue("rowIds") );

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();

//	locking parameters
$params["lockingAction"] = postvalue("action");
$params["lockingSid"] = postvalue("sid");
$params["lockingKeys"] = postvalue("keys");
$params["lockingStart"] = postvalue("startEdit");

if( $pageMode == EDIT_INLINE )
{
	$params["screenWidth"] = postvalue("screenWidth");
	$params["screenHeight"] = postvalue("screenHeight");
	$params["orientation"] = postvalue("orientation");
}	

if( $pageMode == EDIT_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	$params["dashPage"] = postvalue("dashPage");
	
	if(	postvalue("mapRefresh") )
	{
		$params["mapRefresh"] = true;
		$params["vpCoordinates"] = runner_json_decode( postvalue("vpCoordinates") );
	}	
}

if(( $pageMode == EDIT_POPUP || $pageMode == EDIT_INLINE ) && postvalue("dashTName"))
{
	$params["dashTName"] = postvalue("dashTName");
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashPage"] = postvalue("dashPage");
}

if( $pageMode == EDIT_ONTHEFLY ) {
	//table where lookup is set
	$params["lookupTable"] = postvalue("table");
	//field with lookup is set
	$params["lookupField"] = postvalue("field");
	 //the ptype od the page where lookup is set
	$params["lookupPageType"] = postvalue("pageType");
	
	if( postvalue('parentsExist') ) {
		//the parent controls values data
		$params["parentCtrlsData"] = runner_json_decode( postvalue("parentCtrlsData") );
	}
}


$params["forSpreadsheetGrid"] = postvalue("spreadsheetGrid");
$params["hostPageName"] = postvalue("hostPageName");
$params["listPage"] = postvalue("listPage");
$params["gantt"] = postvalue("gantt");

$pageObject = EditPage::EditPageFactory($params);

if( $pageObject->isLockingRequest() )
{
	$pageObject->doLockingAction();
	exit();
}

$pageObject->init();

$pageObject->process();
?>