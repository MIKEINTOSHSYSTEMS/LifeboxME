<?php
$tdatalifebox_dhis2_dataitems = array();
$tdatalifebox_dhis2_dataitems[".searchableFields"] = array();
$tdatalifebox_dhis2_dataitems[".ShortName"] = "lifebox_dhis2_dataitems";
$tdatalifebox_dhis2_dataitems[".OwnerID"] = "";
$tdatalifebox_dhis2_dataitems[".OriginalTable"] = "Lifebox_DHIS2_dataItems";


$tdatalifebox_dhis2_dataitems[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalifebox_dhis2_dataitems[".originalPagesByType"] = $tdatalifebox_dhis2_dataitems[".pagesByType"];
$tdatalifebox_dhis2_dataitems[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalifebox_dhis2_dataitems[".originalPages"] = $tdatalifebox_dhis2_dataitems[".pages"];
$tdatalifebox_dhis2_dataitems[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalifebox_dhis2_dataitems[".originalDefaultPages"] = $tdatalifebox_dhis2_dataitems[".defaultPages"];

//	field labels
$fieldLabelslifebox_dhis2_dataitems = array();
$fieldToolTipslifebox_dhis2_dataitems = array();
$pageTitleslifebox_dhis2_dataitems = array();
$placeHolderslifebox_dhis2_dataitems = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifebox_dhis2_dataitems["English"] = array();
	$fieldToolTipslifebox_dhis2_dataitems["English"] = array();
	$placeHolderslifebox_dhis2_dataitems["English"] = array();
	$pageTitleslifebox_dhis2_dataitems["English"] = array();
	$fieldLabelslifebox_dhis2_dataitems["English"]["id"] = "Id";
	$fieldToolTipslifebox_dhis2_dataitems["English"]["id"] = "";
	$placeHolderslifebox_dhis2_dataitems["English"]["id"] = "";
	$fieldLabelslifebox_dhis2_dataitems["English"]["displayName"] = "Display Name";
	$fieldToolTipslifebox_dhis2_dataitems["English"]["displayName"] = "";
	$placeHolderslifebox_dhis2_dataitems["English"]["displayName"] = "";
	$fieldLabelslifebox_dhis2_dataitems["English"]["name"] = "Name";
	$fieldToolTipslifebox_dhis2_dataitems["English"]["name"] = "";
	$placeHolderslifebox_dhis2_dataitems["English"]["name"] = "";
	$fieldLabelslifebox_dhis2_dataitems["English"]["shortName"] = "Short Name";
	$fieldToolTipslifebox_dhis2_dataitems["English"]["shortName"] = "";
	$placeHolderslifebox_dhis2_dataitems["English"]["shortName"] = "";
	$fieldLabelslifebox_dhis2_dataitems["English"]["displayShortName"] = "Display Short Name";
	$fieldToolTipslifebox_dhis2_dataitems["English"]["displayShortName"] = "";
	$placeHolderslifebox_dhis2_dataitems["English"]["displayShortName"] = "";
	$fieldLabelslifebox_dhis2_dataitems["English"]["dimensionItemType"] = "Dimension Item Type";
	$fieldToolTipslifebox_dhis2_dataitems["English"]["dimensionItemType"] = "";
	$placeHolderslifebox_dhis2_dataitems["English"]["dimensionItemType"] = "";
	if (count($fieldToolTipslifebox_dhis2_dataitems["English"]))
		$tdatalifebox_dhis2_dataitems[".isUseToolTips"] = true;
}


	$tdatalifebox_dhis2_dataitems[".NCSearch"] = true;



$tdatalifebox_dhis2_dataitems[".shortTableName"] = "lifebox_dhis2_dataitems";
$tdatalifebox_dhis2_dataitems[".nSecOptions"] = 0;

$tdatalifebox_dhis2_dataitems[".mainTableOwnerID"] = "";
$tdatalifebox_dhis2_dataitems[".entityType"] = 7;
$tdatalifebox_dhis2_dataitems[".connId"] = "rest";


$tdatalifebox_dhis2_dataitems[".strOriginalTableName"] = "Lifebox_DHIS2_dataItems";

	



$tdatalifebox_dhis2_dataitems[".showAddInPopup"] = false;

$tdatalifebox_dhis2_dataitems[".showEditInPopup"] = false;

$tdatalifebox_dhis2_dataitems[".showViewInPopup"] = false;

$tdatalifebox_dhis2_dataitems[".listAjax"] = false;
//	temporary
//$tdatalifebox_dhis2_dataitems[".listAjax"] = false;

	$tdatalifebox_dhis2_dataitems[".audit"] = true;

	$tdatalifebox_dhis2_dataitems[".locking"] = false;


$pages = $tdatalifebox_dhis2_dataitems[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifebox_dhis2_dataitems[".edit"] = true;
	$tdatalifebox_dhis2_dataitems[".afterEditAction"] = 1;
	$tdatalifebox_dhis2_dataitems[".closePopupAfterEdit"] = 1;
	$tdatalifebox_dhis2_dataitems[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifebox_dhis2_dataitems[".add"] = true;
$tdatalifebox_dhis2_dataitems[".afterAddAction"] = 1;
$tdatalifebox_dhis2_dataitems[".closePopupAfterAdd"] = 1;
$tdatalifebox_dhis2_dataitems[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifebox_dhis2_dataitems[".list"] = true;
}



$tdatalifebox_dhis2_dataitems[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifebox_dhis2_dataitems[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifebox_dhis2_dataitems[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifebox_dhis2_dataitems[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifebox_dhis2_dataitems[".printFriendly"] = true;
}



$tdatalifebox_dhis2_dataitems[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifebox_dhis2_dataitems[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifebox_dhis2_dataitems[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifebox_dhis2_dataitems[".isUseAjaxSuggest"] = true;



			

$tdatalifebox_dhis2_dataitems[".ajaxCodeSnippetAdded"] = false;

$tdatalifebox_dhis2_dataitems[".buttonsAdded"] = false;

$tdatalifebox_dhis2_dataitems[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifebox_dhis2_dataitems[".isUseTimeForSearch"] = false;


$tdatalifebox_dhis2_dataitems[".badgeColor"] = "778899";


$tdatalifebox_dhis2_dataitems[".allSearchFields"] = array();
$tdatalifebox_dhis2_dataitems[".filterFields"] = array();
$tdatalifebox_dhis2_dataitems[".requiredSearchFields"] = array();

$tdatalifebox_dhis2_dataitems[".googleLikeFields"] = array();
$tdatalifebox_dhis2_dataitems[".googleLikeFields"][] = "id";
$tdatalifebox_dhis2_dataitems[".googleLikeFields"][] = "displayName";
$tdatalifebox_dhis2_dataitems[".googleLikeFields"][] = "name";
$tdatalifebox_dhis2_dataitems[".googleLikeFields"][] = "shortName";
$tdatalifebox_dhis2_dataitems[".googleLikeFields"][] = "displayShortName";
$tdatalifebox_dhis2_dataitems[".googleLikeFields"][] = "dimensionItemType";




$tdatalifebox_dhis2_dataitems[".printerPageOrientation"] = 0;
$tdatalifebox_dhis2_dataitems[".nPrinterPageScale"] = 100;

$tdatalifebox_dhis2_dataitems[".nPrinterSplitRecords"] = 40;

$tdatalifebox_dhis2_dataitems[".geocodingEnabled"] = false;




$tdatalifebox_dhis2_dataitems[".isDisplayLoading"] = true;






$tdatalifebox_dhis2_dataitems[".pageSize"] = 20;

$tdatalifebox_dhis2_dataitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifebox_dhis2_dataitems[".strOrderBy"] = $tstrOrderBy;

$tdatalifebox_dhis2_dataitems[".orderindexes"] = array();
	foreach ( my_json_decode("[]") as $orderItem ) {
		$tdatalifebox_dhis2_dataitems[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatalifebox_dhis2_dataitems[".sqlHead"] = "";
$tdatalifebox_dhis2_dataitems[".sqlFrom"] = "";
$tdatalifebox_dhis2_dataitems[".sqlWhereExpr"] = "";
$tdatalifebox_dhis2_dataitems[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifebox_dhis2_dataitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifebox_dhis2_dataitems[".arrGroupsPerPage"] = $arrGPP;

$tdatalifebox_dhis2_dataitems[".highlightSearchResults"] = true;

$tableKeyslifebox_dhis2_dataitems = array();
$tableKeyslifebox_dhis2_dataitems[] = "id";
$tdatalifebox_dhis2_dataitems[".Keys"] = $tableKeyslifebox_dhis2_dataitems;


$tdatalifebox_dhis2_dataitems[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_dataItems","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/id";

	
	
		$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_dataitems["id"] = $fdata;
		$tdatalifebox_dhis2_dataitems[".searchableFields"][] = "id";
//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_dataItems","displayName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/displayName";

	
	
		$fdata["FullName"] = "displayName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Lifebox_DHIS2_dataItems";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
	$edata["LookupOrderBy"] = "displayName";

		$edata["LookupDesc"] = true;

	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_dataitems["displayName"] = $fdata;
		$tdatalifebox_dhis2_dataitems[".searchableFields"][] = "displayName";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_dataItems","name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/name";

	
	
		$fdata["FullName"] = "name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_dataitems["name"] = $fdata;
		$tdatalifebox_dhis2_dataitems[".searchableFields"][] = "name";
//	shortName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "shortName";
	$fdata["GoodName"] = "shortName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_dataItems","shortName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/shortName";

	
	
		$fdata["FullName"] = "shortName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_dataitems["shortName"] = $fdata;
		$tdatalifebox_dhis2_dataitems[".searchableFields"][] = "shortName";
//	displayShortName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "displayShortName";
	$fdata["GoodName"] = "displayShortName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_dataItems","displayShortName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/displayShortName";

	
	
		$fdata["FullName"] = "displayShortName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_dataitems["displayShortName"] = $fdata;
		$tdatalifebox_dhis2_dataitems[".searchableFields"][] = "displayShortName";
//	dimensionItemType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dimensionItemType";
	$fdata["GoodName"] = "dimensionItemType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lifebox_DHIS2_dataItems","dimensionItemType");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/dimensionItemType";

	
	
		$fdata["FullName"] = "dimensionItemType";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Lifebox_DHIS2_dataItems";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dimensionItemType";

	

	
	$edata["LookupOrderBy"] = "dimensionItemType";

		$edata["LookupDesc"] = true;

	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifebox_dhis2_dataitems["dimensionItemType"] = $fdata;
		$tdatalifebox_dhis2_dataitems[".searchableFields"][] = "dimensionItemType";


$tables_data["Lifebox_DHIS2_dataItems"]=&$tdatalifebox_dhis2_dataitems;
$field_labels["Lifebox_DHIS2_dataItems"] = &$fieldLabelslifebox_dhis2_dataitems;
$fieldToolTips["Lifebox_DHIS2_dataItems"] = &$fieldToolTipslifebox_dhis2_dataitems;
$placeHolders["Lifebox_DHIS2_dataItems"] = &$placeHolderslifebox_dhis2_dataitems;
$page_titles["Lifebox_DHIS2_dataItems"] = &$pageTitleslifebox_dhis2_dataitems;


changeTextControlsToDate( "Lifebox_DHIS2_dataItems" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Lifebox_DHIS2_dataItems"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Lifebox_DHIS2_dataItems"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/lifebox_dhis2_dataitems_ops.php" ) );



	
				;

						

$tdatalifebox_dhis2_dataitems[".sqlquery"] = $queryData_lifebox_dhis2_dataitems;



$tdatalifebox_dhis2_dataitems[".hasEvents"] = false;

?>