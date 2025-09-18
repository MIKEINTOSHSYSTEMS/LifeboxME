<?php
$tdatalbapt_kpis_tracking_view = array();
$tdatalbapt_kpis_tracking_view[".searchableFields"] = array();
$tdatalbapt_kpis_tracking_view[".ShortName"] = "lbapt_kpis_tracking_view";
$tdatalbapt_kpis_tracking_view[".OwnerID"] = "";
$tdatalbapt_kpis_tracking_view[".OriginalTable"] = "public.lbapt_kpis_tracking_view";


$tdatalbapt_kpis_tracking_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalbapt_kpis_tracking_view[".originalPagesByType"] = $tdatalbapt_kpis_tracking_view[".pagesByType"];
$tdatalbapt_kpis_tracking_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalbapt_kpis_tracking_view[".originalPages"] = $tdatalbapt_kpis_tracking_view[".pages"];
$tdatalbapt_kpis_tracking_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalbapt_kpis_tracking_view[".originalDefaultPages"] = $tdatalbapt_kpis_tracking_view[".defaultPages"];

//	field labels
$fieldLabelslbapt_kpis_tracking_view = array();
$fieldToolTipslbapt_kpis_tracking_view = array();
$pageTitleslbapt_kpis_tracking_view = array();
$placeHolderslbapt_kpis_tracking_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_kpis_tracking_view["English"] = array();
	$fieldToolTipslbapt_kpis_tracking_view["English"] = array();
	$placeHolderslbapt_kpis_tracking_view["English"] = array();
	$pageTitleslbapt_kpis_tracking_view["English"] = array();
	$fieldLabelslbapt_kpis_tracking_view["English"]["strategic_area"] = "Strategic Area";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["strategic_area"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["strategic_area"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["number_of_kpis"] = "Number Of Kpis";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["number_of_kpis"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["number_of_kpis"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["planned_timeframe_q1"] = "Planned Timeframe Q1";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["planned_timeframe_q1"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["planned_timeframe_q1"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["planned_timeframe_q2"] = "Planned Timeframe Q2";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["planned_timeframe_q2"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["planned_timeframe_q2"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["planned_timeframe_q3"] = "Planned Timeframe Q3";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["planned_timeframe_q3"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["planned_timeframe_q3"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["planned_timeframe_q4"] = "Planned Timeframe Q4";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["planned_timeframe_q4"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["planned_timeframe_q4"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["achievement_q1"] = "Achievement Q1";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["achievement_q1"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["achievement_q1"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["achievement_q2"] = "Achievement Q2";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["achievement_q2"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["achievement_q2"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["achievement_q3"] = "Achievement Q3";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["achievement_q3"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["achievement_q3"] = "";
	$fieldLabelslbapt_kpis_tracking_view["English"]["achievement_q4"] = "Achievement Q4";
	$fieldToolTipslbapt_kpis_tracking_view["English"]["achievement_q4"] = "";
	$placeHolderslbapt_kpis_tracking_view["English"]["achievement_q4"] = "";
	if (count($fieldToolTipslbapt_kpis_tracking_view["English"]))
		$tdatalbapt_kpis_tracking_view[".isUseToolTips"] = true;
}


	$tdatalbapt_kpis_tracking_view[".NCSearch"] = true;



$tdatalbapt_kpis_tracking_view[".shortTableName"] = "lbapt_kpis_tracking_view";
$tdatalbapt_kpis_tracking_view[".nSecOptions"] = 0;

$tdatalbapt_kpis_tracking_view[".mainTableOwnerID"] = "";
$tdatalbapt_kpis_tracking_view[".entityType"] = 0;
$tdatalbapt_kpis_tracking_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_kpis_tracking_view[".strOriginalTableName"] = "public.lbapt_kpis_tracking_view";

	



$tdatalbapt_kpis_tracking_view[".showAddInPopup"] = false;

$tdatalbapt_kpis_tracking_view[".showEditInPopup"] = false;

$tdatalbapt_kpis_tracking_view[".showViewInPopup"] = false;

$tdatalbapt_kpis_tracking_view[".listAjax"] = false;
//	temporary
//$tdatalbapt_kpis_tracking_view[".listAjax"] = false;

	$tdatalbapt_kpis_tracking_view[".audit"] = true;

	$tdatalbapt_kpis_tracking_view[".locking"] = false;


$pages = $tdatalbapt_kpis_tracking_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_kpis_tracking_view[".edit"] = true;
	$tdatalbapt_kpis_tracking_view[".afterEditAction"] = 1;
	$tdatalbapt_kpis_tracking_view[".closePopupAfterEdit"] = 1;
	$tdatalbapt_kpis_tracking_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_kpis_tracking_view[".add"] = true;
$tdatalbapt_kpis_tracking_view[".afterAddAction"] = 1;
$tdatalbapt_kpis_tracking_view[".closePopupAfterAdd"] = 1;
$tdatalbapt_kpis_tracking_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_kpis_tracking_view[".list"] = true;
}



$tdatalbapt_kpis_tracking_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_kpis_tracking_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_kpis_tracking_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_kpis_tracking_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_kpis_tracking_view[".printFriendly"] = true;
}



$tdatalbapt_kpis_tracking_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_kpis_tracking_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_kpis_tracking_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_kpis_tracking_view[".isUseAjaxSuggest"] = true;



			

$tdatalbapt_kpis_tracking_view[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_kpis_tracking_view[".buttonsAdded"] = false;

$tdatalbapt_kpis_tracking_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_kpis_tracking_view[".isUseTimeForSearch"] = false;


$tdatalbapt_kpis_tracking_view[".badgeColor"] = "7B68EE";


$tdatalbapt_kpis_tracking_view[".allSearchFields"] = array();
$tdatalbapt_kpis_tracking_view[".filterFields"] = array();
$tdatalbapt_kpis_tracking_view[".requiredSearchFields"] = array();

$tdatalbapt_kpis_tracking_view[".googleLikeFields"] = array();
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "strategic_area";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "number_of_kpis";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "planned_timeframe_q1";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "planned_timeframe_q2";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "planned_timeframe_q3";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "planned_timeframe_q4";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "achievement_q1";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "achievement_q2";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "achievement_q3";
$tdatalbapt_kpis_tracking_view[".googleLikeFields"][] = "achievement_q4";



$tdatalbapt_kpis_tracking_view[".tableType"] = "list";

$tdatalbapt_kpis_tracking_view[".printerPageOrientation"] = 0;
$tdatalbapt_kpis_tracking_view[".nPrinterPageScale"] = 100;

$tdatalbapt_kpis_tracking_view[".nPrinterSplitRecords"] = 40;

$tdatalbapt_kpis_tracking_view[".geocodingEnabled"] = false;










$tdatalbapt_kpis_tracking_view[".pageSize"] = 20;

$tdatalbapt_kpis_tracking_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_kpis_tracking_view[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_kpis_tracking_view[".orderindexes"] = array();


$tdatalbapt_kpis_tracking_view[".sqlHead"] = "SELECT strategic_area,  	number_of_kpis,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4";
$tdatalbapt_kpis_tracking_view[".sqlFrom"] = "FROM \"public\".lbapt_kpis_tracking_view";
$tdatalbapt_kpis_tracking_view[".sqlWhereExpr"] = "";
$tdatalbapt_kpis_tracking_view[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatalbapt_kpis_tracking_view[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_kpis_tracking_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_kpis_tracking_view[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_kpis_tracking_view[".highlightSearchResults"] = true;

$tableKeyslbapt_kpis_tracking_view = array();
$tdatalbapt_kpis_tracking_view[".Keys"] = $tableKeyslbapt_kpis_tracking_view;


$tdatalbapt_kpis_tracking_view[".hideMobileList"] = array();




//	strategic_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "strategic_area";
	$fdata["GoodName"] = "strategic_area";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","strategic_area");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "strategic_area";

		$fdata["sourceSingle"] = "strategic_area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "strategic_area";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatalbapt_kpis_tracking_view["strategic_area"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "strategic_area";
//	number_of_kpis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "number_of_kpis";
	$fdata["GoodName"] = "number_of_kpis";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","number_of_kpis");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "number_of_kpis";

		$fdata["sourceSingle"] = "number_of_kpis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "number_of_kpis";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatalbapt_kpis_tracking_view["number_of_kpis"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "number_of_kpis";
//	planned_timeframe_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "planned_timeframe_q1";
	$fdata["GoodName"] = "planned_timeframe_q1";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","planned_timeframe_q1");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q1";

		$fdata["sourceSingle"] = "planned_timeframe_q1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["planned_timeframe_q1"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "planned_timeframe_q1";
//	planned_timeframe_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "planned_timeframe_q2";
	$fdata["GoodName"] = "planned_timeframe_q2";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","planned_timeframe_q2");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q2";

		$fdata["sourceSingle"] = "planned_timeframe_q2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["planned_timeframe_q2"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "planned_timeframe_q2";
//	planned_timeframe_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "planned_timeframe_q3";
	$fdata["GoodName"] = "planned_timeframe_q3";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","planned_timeframe_q3");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q3";

		$fdata["sourceSingle"] = "planned_timeframe_q3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["planned_timeframe_q3"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "planned_timeframe_q3";
//	planned_timeframe_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "planned_timeframe_q4";
	$fdata["GoodName"] = "planned_timeframe_q4";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","planned_timeframe_q4");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_timeframe_q4";

		$fdata["sourceSingle"] = "planned_timeframe_q4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_timeframe_q4";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["planned_timeframe_q4"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "planned_timeframe_q4";
//	achievement_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "achievement_q1";
	$fdata["GoodName"] = "achievement_q1";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","achievement_q1");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q1";

		$fdata["sourceSingle"] = "achievement_q1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["achievement_q1"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "achievement_q1";
//	achievement_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "achievement_q2";
	$fdata["GoodName"] = "achievement_q2";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","achievement_q2");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q2";

		$fdata["sourceSingle"] = "achievement_q2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["achievement_q2"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "achievement_q2";
//	achievement_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "achievement_q3";
	$fdata["GoodName"] = "achievement_q3";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","achievement_q3");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q3";

		$fdata["sourceSingle"] = "achievement_q3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["achievement_q3"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "achievement_q3";
//	achievement_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "achievement_q4";
	$fdata["GoodName"] = "achievement_q4";
	$fdata["ownerTable"] = "public.lbapt_kpis_tracking_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_kpis_tracking_view","achievement_q4");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "achievement_q4";

		$fdata["sourceSingle"] = "achievement_q4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "achievement_q4";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalbapt_kpis_tracking_view["achievement_q4"] = $fdata;
		$tdatalbapt_kpis_tracking_view[".searchableFields"][] = "achievement_q4";


$tables_data["public.lbapt_kpis_tracking_view"]=&$tdatalbapt_kpis_tracking_view;
$field_labels["public_lbapt_kpis_tracking_view"] = &$fieldLabelslbapt_kpis_tracking_view;
$fieldToolTips["public_lbapt_kpis_tracking_view"] = &$fieldToolTipslbapt_kpis_tracking_view;
$placeHolders["public_lbapt_kpis_tracking_view"] = &$placeHolderslbapt_kpis_tracking_view;
$page_titles["public_lbapt_kpis_tracking_view"] = &$pageTitleslbapt_kpis_tracking_view;


changeTextControlsToDate( "public.lbapt_kpis_tracking_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_kpis_tracking_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_kpis_tracking_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_kpis_tracking_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "strategic_area,  	number_of_kpis,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_kpis_tracking_view";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "strategic_area",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto6["m_sql"] = "strategic_area";
$proto6["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_kpis",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto8["m_sql"] = "number_of_kpis";
$proto8["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q1",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto10["m_sql"] = "planned_timeframe_q1";
$proto10["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q2",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto12["m_sql"] = "planned_timeframe_q2";
$proto12["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q3",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto14["m_sql"] = "planned_timeframe_q3";
$proto14["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q4",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto16["m_sql"] = "planned_timeframe_q4";
$proto16["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q1",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto18["m_sql"] = "achievement_q1";
$proto18["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q2",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto20["m_sql"] = "achievement_q2";
$proto20["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q3",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto22["m_sql"] = "achievement_q3";
$proto22["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q4",
	"m_strTable" => "public.lbapt_kpis_tracking_view",
	"m_srcTableName" => "public.lbapt_kpis_tracking_view"
));

$proto24["m_sql"] = "achievement_q4";
$proto24["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.lbapt_kpis_tracking_view";
$proto27["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "strategic_area";
$proto27["m_columns"][] = "number_of_kpis";
$proto27["m_columns"][] = "planned_timeframe_q1";
$proto27["m_columns"][] = "planned_timeframe_q2";
$proto27["m_columns"][] = "planned_timeframe_q3";
$proto27["m_columns"][] = "planned_timeframe_q4";
$proto27["m_columns"][] = "achievement_q1";
$proto27["m_columns"][] = "achievement_q2";
$proto27["m_columns"][] = "achievement_q3";
$proto27["m_columns"][] = "achievement_q4";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".lbapt_kpis_tracking_view";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.lbapt_kpis_tracking_view";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbapt_kpis_tracking_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_kpis_tracking_view = createSqlQuery_lbapt_kpis_tracking_view();


	
				;

										

$tdatalbapt_kpis_tracking_view[".sqlquery"] = $queryData_lbapt_kpis_tracking_view;



$tdatalbapt_kpis_tracking_view[".hasEvents"] = false;

?>