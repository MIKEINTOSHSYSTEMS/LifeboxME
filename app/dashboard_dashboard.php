<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$requestTable = 'Dashboard';
$strTableName = 'Dashboard';
$requestPage = "dashboard";


require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/dashboardpage.php');

add_nocache_headers();

if( Security::hasLogin() ) {
	if( !Security::processPageSecurity( $strTableName, 'S' ) )
		return;
}

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["mode"] = postvalue("mode");
$params["pageType"] = PAGE_DASHBOARD;
$params["pageName"] = postvalue("page");

$params["action"] = postvalue("a");
$params["elementName"] = postvalue("elementName");

$pageObject = new DashboardPage($params);
$pageObject->init();

$pageObject->process();
?>