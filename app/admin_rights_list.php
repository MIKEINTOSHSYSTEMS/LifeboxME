<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$lang = mlang_getcurrentlang();
foreach( ProjectSettings::getProjectTables() as $table ) {
	$tableName = $table[ 'name' ];
	$shortTable = $table[ 'shortName' ];
	
	if( Security::isAdminTable( $tableName ) ) {
		continue;
	}
	$caption = $table[ 'caption' ][ $lang ];
	$tables[ $tableName ] = array( $shortTable, " " . $caption );
}
$tables[ GLOBAL_PAGES ] = array( GLOBAL_PAGES_SHORT, " " . GLOBAL_PAGES);

global $runnerPageInfo;
_loadTablePages();
$pageMask = $runnerPageInfo['tableMasks'];

require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = "admin_rights_list";
$options["pageTable"] = GLOBAL_PAGES;
$options["id"] = postvalue_number("id") ? postvalue_number("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$options["requestGoto"] = postvalue_number("goto");


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage( GLOBAL_PAGES , $options);

if( postvalue("a") == "saveRights" )
{
	//	CSRF protection
	if( !isPostRequest() )
		return;
	$modifiedRights = runner_json_decode(postvalue('data'));
	$pageObject->saveRights( $modifiedRights );
	return;
}


$pageObject->addButtonHandlers();

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



?>
