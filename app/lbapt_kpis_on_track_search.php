<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


$requestTable = 'public.lbapt_kpis_on_track';
$strTableName = 'public.lbapt_kpis_on_track';

require_once("include/dbcommon.php");
add_nocache_headers();

require_once("classes/searchclause.php");
require_once("classes/searchcontrol.php");
require_once("classes/advancedsearchcontrol.php");
require_once("classes/panelsearchcontrol.php");

$requestTable = 'public.lbapt_kpis_on_track';
$strTableName = 'public.lbapt_kpis_on_track';
$requestPage = "search";


if( Security::hasLogin() ) {
	Security::processLogoutRequest();

	if( !isLogged() )
	{ 
		Security::saveRedirectURL();
		redirectToLogin();
	}
	$accessGranted = CheckTablePermissions($strTableName, "S");

	if(!$accessGranted) {
		HeaderRedirect("menu");
	}
}

require_once('include/xtempl.php');
require_once('classes/searchpage.php');
require_once('classes/searchpage_dash.php');

$xt = new Xtempl();	
$pageMode = SearchPage::readSearchModeFromRequest();



$params = array();
$params['xt'] = &$xt;
$params['id'] = postvalue_number("id");
$params['mode'] = $pageMode;
$params['tName'] = $strTableName;
$params["pageName"] = postvalue("page");
$params["returnPage"] = postvalue("returnPage");
$params['pageType'] = PAGE_SEARCH;
$params['chartName'] = $cname;
$params['reportName'] = $rname;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = GettableURL( $strTableName );

$params['searchControllerId'] = postvalue('searchControllerId') ? postvalue('searchControllerId') : $id;
$params['ctrlField'] = postvalue('ctrlField');

$params['needSettings'] = postvalue('isNeedSettings');

if( $pageMode == SEARCH_DASHBOARD )
{
	$params["dashTName"] = postvalue("table");
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashPage"] = postvalue("dashPage");
}

// e.g. crosstable params
$params["extraPageParams"] = SearchPage::getExtraPageParams();

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();


if( GetEntityType( $strTableName ) == titDASHBOARD ) {
	$pageObject = new SearchPageDash($params);
} else {
	$pageObject = new SearchPage($params);
}

if( $pageMode == SEARCH_LOAD_CONTROL )
{
	$pageObject->displaySearchControl();
	return;
}

$pageObject->init();
$pageObject->process();

if( ProjectSettings::ext() == 'aspx' && $pageMode == SEARCH_DASHBOARD ) {
	exit();
}

?>