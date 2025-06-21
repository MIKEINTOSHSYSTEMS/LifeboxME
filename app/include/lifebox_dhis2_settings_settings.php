<?php
$tdatalifebox_dhis2_settings = array();
$tdatalifebox_dhis2_settings[".searchableFields"] = array();
$tdatalifebox_dhis2_settings[".ShortName"] = "lifebox_dhis2_settings";
$tdatalifebox_dhis2_settings[".OwnerID"] = "";
$tdatalifebox_dhis2_settings[".OriginalTable"] = "Lifebox_DHIS2_Settings";


$tdatalifebox_dhis2_settings[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"dhis2_orgunits_fetcher\"],\"print\":[\"print\"]}" );
$tdatalifebox_dhis2_settings[".originalPagesByType"] = $tdatalifebox_dhis2_settings[".pagesByType"];
$tdatalifebox_dhis2_settings[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"dhis2_orgunits_fetcher\"],\"print\":[\"print\"]}" ) );
$tdatalifebox_dhis2_settings[".originalPages"] = $tdatalifebox_dhis2_settings[".pages"];
$tdatalifebox_dhis2_settings[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"dhis2_orgunits_fetcher\",\"print\":\"print\"}" );
$tdatalifebox_dhis2_settings[".originalDefaultPages"] = $tdatalifebox_dhis2_settings[".defaultPages"];

//	field labels
$fieldLabelslifebox_dhis2_settings = array();
$fieldToolTipslifebox_dhis2_settings = array();
$pageTitleslifebox_dhis2_settings = array();
$placeHolderslifebox_dhis2_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifebox_dhis2_settings["English"] = array();
	$fieldToolTipslifebox_dhis2_settings["English"] = array();
	$placeHolderslifebox_dhis2_settings["English"] = array();
	$pageTitleslifebox_dhis2_settings["English"] = array();
	if (count($fieldToolTipslifebox_dhis2_settings["English"]))
		$tdatalifebox_dhis2_settings[".isUseToolTips"] = true;
}


	$tdatalifebox_dhis2_settings[".NCSearch"] = true;



$tdatalifebox_dhis2_settings[".shortTableName"] = "lifebox_dhis2_settings";
$tdatalifebox_dhis2_settings[".nSecOptions"] = 0;

$tdatalifebox_dhis2_settings[".mainTableOwnerID"] = "";
$tdatalifebox_dhis2_settings[".entityType"] = 6;
$tdatalifebox_dhis2_settings[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalifebox_dhis2_settings[".strOriginalTableName"] = "Lifebox_DHIS2_Settings";

	



$tdatalifebox_dhis2_settings[".showAddInPopup"] = false;

$tdatalifebox_dhis2_settings[".showEditInPopup"] = false;

$tdatalifebox_dhis2_settings[".showViewInPopup"] = false;

$tdatalifebox_dhis2_settings[".listAjax"] = false;
//	temporary
//$tdatalifebox_dhis2_settings[".listAjax"] = false;

	$tdatalifebox_dhis2_settings[".audit"] = false;

	$tdatalifebox_dhis2_settings[".locking"] = false;


$pages = $tdatalifebox_dhis2_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifebox_dhis2_settings[".edit"] = true;
	$tdatalifebox_dhis2_settings[".afterEditAction"] = 1;
	$tdatalifebox_dhis2_settings[".closePopupAfterEdit"] = 1;
	$tdatalifebox_dhis2_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifebox_dhis2_settings[".add"] = true;
$tdatalifebox_dhis2_settings[".afterAddAction"] = 1;
$tdatalifebox_dhis2_settings[".closePopupAfterAdd"] = 1;
$tdatalifebox_dhis2_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifebox_dhis2_settings[".list"] = true;
}



$tdatalifebox_dhis2_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifebox_dhis2_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifebox_dhis2_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifebox_dhis2_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifebox_dhis2_settings[".printFriendly"] = true;
}



$tdatalifebox_dhis2_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifebox_dhis2_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifebox_dhis2_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifebox_dhis2_settings[".isUseAjaxSuggest"] = false;





$tdatalifebox_dhis2_settings[".ajaxCodeSnippetAdded"] = false;

$tdatalifebox_dhis2_settings[".buttonsAdded"] = false;

$tdatalifebox_dhis2_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifebox_dhis2_settings[".isUseTimeForSearch"] = false;


$tdatalifebox_dhis2_settings[".badgeColor"] = "BC8F8F";


$tdatalifebox_dhis2_settings[".allSearchFields"] = array();
$tdatalifebox_dhis2_settings[".filterFields"] = array();
$tdatalifebox_dhis2_settings[".requiredSearchFields"] = array();





$tdatalifebox_dhis2_settings[".printerPageOrientation"] = 0;
$tdatalifebox_dhis2_settings[".nPrinterPageScale"] = 100;

$tdatalifebox_dhis2_settings[".nPrinterSplitRecords"] = 40;

$tdatalifebox_dhis2_settings[".geocodingEnabled"] = false;




$tdatalifebox_dhis2_settings[".isDisplayLoading"] = true;






$tdatalifebox_dhis2_settings[".pageSize"] = 20;

$tdatalifebox_dhis2_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifebox_dhis2_settings[".strOrderBy"] = $tstrOrderBy;

$tdatalifebox_dhis2_settings[".orderindexes"] = array();
	foreach ( my_json_decode("[]") as $orderItem ) {
		$tdatalifebox_dhis2_settings[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatalifebox_dhis2_settings[".sqlHead"] = "";
$tdatalifebox_dhis2_settings[".sqlFrom"] = "";
$tdatalifebox_dhis2_settings[".sqlWhereExpr"] = "";
$tdatalifebox_dhis2_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifebox_dhis2_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifebox_dhis2_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatalifebox_dhis2_settings[".highlightSearchResults"] = true;

$tableKeyslifebox_dhis2_settings = array();
$tdatalifebox_dhis2_settings[".Keys"] = $tableKeyslifebox_dhis2_settings;


$tdatalifebox_dhis2_settings[".hideMobileList"] = array();






$tables_data["Lifebox_DHIS2_Settings"]=&$tdatalifebox_dhis2_settings;
$field_labels["Lifebox_DHIS2_Settings"] = &$fieldLabelslifebox_dhis2_settings;
$fieldToolTips["Lifebox_DHIS2_Settings"] = &$fieldToolTipslifebox_dhis2_settings;
$placeHolders["Lifebox_DHIS2_Settings"] = &$placeHolderslifebox_dhis2_settings;
$page_titles["Lifebox_DHIS2_Settings"] = &$pageTitleslifebox_dhis2_settings;


changeTextControlsToDate( "Lifebox_DHIS2_Settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Lifebox_DHIS2_Settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Lifebox_DHIS2_Settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/lifebox_dhis2_settings_ops.php" ) );



	
				;



$tdatalifebox_dhis2_settings[".sqlquery"] = $queryData_lifebox_dhis2_settings;



$tdatalifebox_dhis2_settings[".hasEvents"] = false;

?>