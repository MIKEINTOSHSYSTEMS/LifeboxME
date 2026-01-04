<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

if( !Security::processAdminPageSecurity( false ) )
	return;

require_once('include/xtempl.php');
require_once("classes/searchclause.php");

require_once("classes/searchcontrol.php");
require_once("classes/panelsearchcontrol.php");

require_once("classes/searchpanelsimple.php");	

require_once('classes/listpage.php');
require_once('classes/listpage_simple.php');
require_once('classes/memberspage.php');


$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_ADMIN_MEMBERS;
$options["pageTable"] = GLOBAL_PAGES;
$options["id"] = postvalue_number("id");
$options["mode"] = MEMBERS_PAGE;
$options["xt"] = &$xt;
$options["requestGoto"] = postvalue_number("goto");
$options["providerType"] = stDB;


$pageObject = ListPage::createListPage( GLOBAL_PAGES, $options );
if( postvalue("a") == "saveMembers" )
{
	//	CSRF protection
	if( !isPostRequest() )
		return;
	$modifiedMembers = runner_json_decode( postvalue('values') );
	$pageObject->saveMembers( $modifiedMembers );
	return;
}

 // add button events if exist
$pageObject->addButtonHandlers();

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
?>