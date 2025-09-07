<?php
$tdatalbapt_annual_plan_tracker = array();
$tdatalbapt_annual_plan_tracker[".searchableFields"] = array();
$tdatalbapt_annual_plan_tracker[".ShortName"] = "lbapt_annual_plan_tracker";
$tdatalbapt_annual_plan_tracker[".OwnerID"] = "";
$tdatalbapt_annual_plan_tracker[".OriginalTable"] = "public.lbapt_annual_plan_tracker";


$tdatalbapt_annual_plan_tracker[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbapt_annual_plan_tracker[".originalPagesByType"] = $tdatalbapt_annual_plan_tracker[".pagesByType"];
$tdatalbapt_annual_plan_tracker[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbapt_annual_plan_tracker[".originalPages"] = $tdatalbapt_annual_plan_tracker[".pages"];
$tdatalbapt_annual_plan_tracker[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbapt_annual_plan_tracker[".originalDefaultPages"] = $tdatalbapt_annual_plan_tracker[".defaultPages"];

//	field labels
$fieldLabelslbapt_annual_plan_tracker = array();
$fieldToolTipslbapt_annual_plan_tracker = array();
$pageTitleslbapt_annual_plan_tracker = array();
$placeHolderslbapt_annual_plan_tracker = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_annual_plan_tracker["English"] = array();
	$fieldToolTipslbapt_annual_plan_tracker["English"] = array();
	$placeHolderslbapt_annual_plan_tracker["English"] = array();
	$pageTitleslbapt_annual_plan_tracker["English"] = array();
	$fieldLabelslbapt_annual_plan_tracker["English"]["tracker_id"] = "T-ID";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["tracker_id"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["tracker_id"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["strategic_area_id"] = "Strategic Area";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["strategic_area_id"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["strategic_area_id"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["key_objective"] = "Key Objective";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["key_objective"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["key_objective"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["activity"] = "Activity";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["activity"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["activity"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["kpi"] = "KPI";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["kpi"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["kpi"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["status_id"] = "Status";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["status_id"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["status_id"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["planned_timeframe_q1"] = "PT-Q1";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["planned_timeframe_q1"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["planned_timeframe_q1"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["planned_timeframe_q2"] = "PT-Q2";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["planned_timeframe_q2"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["planned_timeframe_q2"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["planned_timeframe_q3"] = "PT-Q3";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["planned_timeframe_q3"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["planned_timeframe_q3"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["planned_timeframe_q4"] = "PT-Q4";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["planned_timeframe_q4"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["planned_timeframe_q4"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["achievement_q1"] = "A-Q1";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["achievement_q1"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["achievement_q1"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["achievement_q2"] = "A-Q2";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["achievement_q2"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["achievement_q2"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["achievement_q3"] = "A-Q3";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["achievement_q3"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["achievement_q3"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["achievement_q4"] = "A-Q4";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["achievement_q4"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["achievement_q4"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["notes"] = "Notes";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["notes"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["notes"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["created_at"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["created_at"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["updated_at"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["updated_at"] = "";
	$fieldLabelslbapt_annual_plan_tracker["English"]["fyear"] = "FYear";
	$fieldToolTipslbapt_annual_plan_tracker["English"]["fyear"] = "";
	$placeHolderslbapt_annual_plan_tracker["English"]["fyear"] = "";
	if (count($fieldToolTipslbapt_annual_plan_tracker["English"]))
		$tdatalbapt_annual_plan_tracker[".isUseToolTips"] = true;
}


	$tdatalbapt_annual_plan_tracker[".NCSearch"] = true;



$tdatalbapt_annual_plan_tracker[".shortTableName"] = "lbapt_annual_plan_tracker";
$tdatalbapt_annual_plan_tracker[".nSecOptions"] = 0;

$tdatalbapt_annual_plan_tracker[".mainTableOwnerID"] = "";
$tdatalbapt_annual_plan_tracker[".entityType"] = 0;
$tdatalbapt_annual_plan_tracker[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_annual_plan_tracker[".strOriginalTableName"] = "public.lbapt_annual_plan_tracker";

	



$tdatalbapt_annual_plan_tracker[".showAddInPopup"] = false;

$tdatalbapt_annual_plan_tracker[".showEditInPopup"] = false;

$tdatalbapt_annual_plan_tracker[".showViewInPopup"] = false;

$tdatalbapt_annual_plan_tracker[".listAjax"] = false;
//	temporary
//$tdatalbapt_annual_plan_tracker[".listAjax"] = false;

	$tdatalbapt_annual_plan_tracker[".audit"] = true;

	$tdatalbapt_annual_plan_tracker[".locking"] = false;


$pages = $tdatalbapt_annual_plan_tracker[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_annual_plan_tracker[".edit"] = true;
	$tdatalbapt_annual_plan_tracker[".afterEditAction"] = 1;
	$tdatalbapt_annual_plan_tracker[".closePopupAfterEdit"] = 1;
	$tdatalbapt_annual_plan_tracker[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_annual_plan_tracker[".add"] = true;
$tdatalbapt_annual_plan_tracker[".afterAddAction"] = 1;
$tdatalbapt_annual_plan_tracker[".closePopupAfterAdd"] = 1;
$tdatalbapt_annual_plan_tracker[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_annual_plan_tracker[".list"] = true;
}



$tdatalbapt_annual_plan_tracker[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_annual_plan_tracker[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_annual_plan_tracker[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_annual_plan_tracker[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_annual_plan_tracker[".printFriendly"] = true;
}



$tdatalbapt_annual_plan_tracker[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_annual_plan_tracker[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_annual_plan_tracker[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_annual_plan_tracker[".isUseAjaxSuggest"] = true;





$tdatalbapt_annual_plan_tracker[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_annual_plan_tracker[".buttonsAdded"] = false;

$tdatalbapt_annual_plan_tracker[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_annual_plan_tracker[".isUseTimeForSearch"] = false;


$tdatalbapt_annual_plan_tracker[".badgeColor"] = "00C2C5";


$tdatalbapt_annual_plan_tracker[".allSearchFields"] = array();
$tdatalbapt_annual_plan_tracker[".filterFields"] = array();
$tdatalbapt_annual_plan_tracker[".requiredSearchFields"] = array();

$tdatalbapt_annual_plan_tracker[".googleLikeFields"] = array();
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "tracker_id";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "strategic_area_id";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "key_objective";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "activity";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "kpi";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "status_id";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "fyear";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "planned_timeframe_q1";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "planned_timeframe_q2";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "planned_timeframe_q3";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "planned_timeframe_q4";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "achievement_q1";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "achievement_q2";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "achievement_q3";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "achievement_q4";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "notes";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "created_at";
$tdatalbapt_annual_plan_tracker[".googleLikeFields"][] = "updated_at";



$tdatalbapt_annual_plan_tracker[".tableType"] = "list";

$tdatalbapt_annual_plan_tracker[".printerPageOrientation"] = 0;
$tdatalbapt_annual_plan_tracker[".nPrinterPageScale"] = 100;

$tdatalbapt_annual_plan_tracker[".nPrinterSplitRecords"] = 40;

$tdatalbapt_annual_plan_tracker[".geocodingEnabled"] = false;










$tdatalbapt_annual_plan_tracker[".pageSize"] = 20;

$tdatalbapt_annual_plan_tracker[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_annual_plan_tracker[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_annual_plan_tracker[".orderindexes"] = array();


$tdatalbapt_annual_plan_tracker[".sqlHead"] = "SELECT tracker_id,  	strategic_area_id,  	key_objective,  	activity,  	kpi,  	status_id,  	fyear,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	notes,  	created_at,  	updated_at";
$tdatalbapt_annual_plan_tracker[".sqlFrom"] = "FROM \"public\".lbapt_annual_plan_tracker";
$tdatalbapt_annual_plan_tracker[".sqlWhereExpr"] = "";
$tdatalbapt_annual_plan_tracker[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_annual_plan_tracker[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_annual_plan_tracker[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_annual_plan_tracker[".highlightSearchResults"] = true;

$tableKeyslbapt_annual_plan_tracker = array();
$tableKeyslbapt_annual_plan_tracker[] = "tracker_id";
$tdatalbapt_annual_plan_tracker[".Keys"] = $tableKeyslbapt_annual_plan_tracker;


$tdatalbapt_annual_plan_tracker[".hideMobileList"] = array();




//	tracker_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tracker_id";
	$fdata["GoodName"] = "tracker_id";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","tracker_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tracker_id";

		$fdata["sourceSingle"] = "tracker_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tracker_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatalbapt_annual_plan_tracker["tracker_id"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "tracker_id";
//	strategic_area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "strategic_area_id";
	$fdata["GoodName"] = "strategic_area_id";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","strategic_area_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "strategic_area_id";

		$fdata["sourceSingle"] = "strategic_area_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "strategic_area_id";

	
	
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
	$edata["LookupTable"] = "public.lbapt_strategic_areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "strategic_area_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "area_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["filterTotalFields"] = "tracker_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_annual_plan_tracker["strategic_area_id"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "strategic_area_id";
//	key_objective
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "key_objective";
	$fdata["GoodName"] = "key_objective";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","key_objective");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "key_objective";

		$fdata["sourceSingle"] = "key_objective";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "key_objective";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalbapt_annual_plan_tracker["key_objective"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "key_objective";
//	activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "activity";
	$fdata["GoodName"] = "activity";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","activity");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "activity";

		$fdata["sourceSingle"] = "activity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activity";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalbapt_annual_plan_tracker["activity"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "activity";
//	kpi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "kpi";
	$fdata["GoodName"] = "kpi";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","kpi");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "kpi";

		$fdata["sourceSingle"] = "kpi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kpi";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalbapt_annual_plan_tracker["kpi"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "kpi";
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","status_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "status_id";

		$fdata["sourceSingle"] = "status_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
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
	$edata["LookupTable"] = "public.lbapt_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["filterTotalFields"] = "tracker_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_annual_plan_tracker["status_id"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "status_id";
//	fyear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fyear";
	$fdata["GoodName"] = "fyear";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","fyear");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fyear";

		$fdata["sourceSingle"] = "fyear";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fyear";

	
	
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
	$edata["LookupTable"] = "public.years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

				$edata["LookupWhere"] = "is_active = true";


	
	$edata["LookupOrderBy"] = "year";

		$edata["LookupDesc"] = true;

	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterTotalFields"] = "tracker_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_annual_plan_tracker["fyear"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "fyear";
//	planned_timeframe_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "planned_timeframe_q1";
	$fdata["GoodName"] = "planned_timeframe_q1";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","planned_timeframe_q1");
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


	$tdatalbapt_annual_plan_tracker["planned_timeframe_q1"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "planned_timeframe_q1";
//	planned_timeframe_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "planned_timeframe_q2";
	$fdata["GoodName"] = "planned_timeframe_q2";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","planned_timeframe_q2");
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


	$tdatalbapt_annual_plan_tracker["planned_timeframe_q2"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "planned_timeframe_q2";
//	planned_timeframe_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "planned_timeframe_q3";
	$fdata["GoodName"] = "planned_timeframe_q3";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","planned_timeframe_q3");
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


	$tdatalbapt_annual_plan_tracker["planned_timeframe_q3"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "planned_timeframe_q3";
//	planned_timeframe_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "planned_timeframe_q4";
	$fdata["GoodName"] = "planned_timeframe_q4";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","planned_timeframe_q4");
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


	$tdatalbapt_annual_plan_tracker["planned_timeframe_q4"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "planned_timeframe_q4";
//	achievement_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "achievement_q1";
	$fdata["GoodName"] = "achievement_q1";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","achievement_q1");
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


	$tdatalbapt_annual_plan_tracker["achievement_q1"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "achievement_q1";
//	achievement_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "achievement_q2";
	$fdata["GoodName"] = "achievement_q2";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","achievement_q2");
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


	$tdatalbapt_annual_plan_tracker["achievement_q2"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "achievement_q2";
//	achievement_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "achievement_q3";
	$fdata["GoodName"] = "achievement_q3";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","achievement_q3");
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


	$tdatalbapt_annual_plan_tracker["achievement_q3"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "achievement_q3";
//	achievement_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "achievement_q4";
	$fdata["GoodName"] = "achievement_q4";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","achievement_q4");
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


	$tdatalbapt_annual_plan_tracker["achievement_q4"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "achievement_q4";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","notes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "notes";

		$fdata["sourceSingle"] = "notes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalbapt_annual_plan_tracker["notes"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "notes";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatalbapt_annual_plan_tracker["created_at"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_annual_plan_tracker";
	$fdata["Label"] = GetFieldLabel("public_lbapt_annual_plan_tracker","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatalbapt_annual_plan_tracker["updated_at"] = $fdata;
		$tdatalbapt_annual_plan_tracker[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_annual_plan_tracker"]=&$tdatalbapt_annual_plan_tracker;
$field_labels["public_lbapt_annual_plan_tracker"] = &$fieldLabelslbapt_annual_plan_tracker;
$fieldToolTips["public_lbapt_annual_plan_tracker"] = &$fieldToolTipslbapt_annual_plan_tracker;
$placeHolders["public_lbapt_annual_plan_tracker"] = &$placeHolderslbapt_annual_plan_tracker;
$page_titles["public_lbapt_annual_plan_tracker"] = &$pageTitleslbapt_annual_plan_tracker;


changeTextControlsToDate( "public.lbapt_annual_plan_tracker" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_annual_plan_tracker"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_annual_plan_tracker"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbapt_status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbapt_status";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbapt_status";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbapt_annual_plan_tracker"][0] = $masterParams;
				$masterTablesData["public.lbapt_annual_plan_tracker"][0]["masterKeys"] = array();
	$masterTablesData["public.lbapt_annual_plan_tracker"][0]["masterKeys"][]="status_id";
				$masterTablesData["public.lbapt_annual_plan_tracker"][0]["detailKeys"] = array();
	$masterTablesData["public.lbapt_annual_plan_tracker"][0]["detailKeys"][]="status_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbapt_strategic_areas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbapt_strategic_areas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbapt_strategic_areas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbapt_annual_plan_tracker"][1] = $masterParams;
				$masterTablesData["public.lbapt_annual_plan_tracker"][1]["masterKeys"] = array();
	$masterTablesData["public.lbapt_annual_plan_tracker"][1]["masterKeys"][]="strategic_area_id";
				$masterTablesData["public.lbapt_annual_plan_tracker"][1]["detailKeys"] = array();
	$masterTablesData["public.lbapt_annual_plan_tracker"][1]["detailKeys"][]="strategic_area_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_annual_plan_tracker()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tracker_id,  	strategic_area_id,  	key_objective,  	activity,  	kpi,  	status_id,  	fyear,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	notes,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_annual_plan_tracker";
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
	"m_strName" => "tracker_id",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto6["m_sql"] = "tracker_id";
$proto6["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "strategic_area_id",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto8["m_sql"] = "strategic_area_id";
$proto8["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "key_objective",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto10["m_sql"] = "key_objective";
$proto10["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "activity",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto12["m_sql"] = "activity";
$proto12["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "kpi",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto14["m_sql"] = "kpi";
$proto14["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto16["m_sql"] = "status_id";
$proto16["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fyear",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto18["m_sql"] = "fyear";
$proto18["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q1",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto20["m_sql"] = "planned_timeframe_q1";
$proto20["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q2",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto22["m_sql"] = "planned_timeframe_q2";
$proto22["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q3",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto24["m_sql"] = "planned_timeframe_q3";
$proto24["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q4",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto26["m_sql"] = "planned_timeframe_q4";
$proto26["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q1",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto28["m_sql"] = "achievement_q1";
$proto28["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q2",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto30["m_sql"] = "achievement_q2";
$proto30["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q3",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto32["m_sql"] = "achievement_q3";
$proto32["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q4",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto34["m_sql"] = "achievement_q4";
$proto34["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto36["m_sql"] = "notes";
$proto36["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto38["m_sql"] = "created_at";
$proto38["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_annual_plan_tracker",
	"m_srcTableName" => "public.lbapt_annual_plan_tracker"
));

$proto40["m_sql"] = "updated_at";
$proto40["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "public.lbapt_annual_plan_tracker";
$proto43["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "tracker_id";
$proto43["m_columns"][] = "strategic_area_id";
$proto43["m_columns"][] = "key_objective";
$proto43["m_columns"][] = "activity";
$proto43["m_columns"][] = "kpi";
$proto43["m_columns"][] = "status_id";
$proto43["m_columns"][] = "planned_timeframe_q1";
$proto43["m_columns"][] = "planned_timeframe_q2";
$proto43["m_columns"][] = "planned_timeframe_q3";
$proto43["m_columns"][] = "planned_timeframe_q4";
$proto43["m_columns"][] = "achievement_q1";
$proto43["m_columns"][] = "achievement_q2";
$proto43["m_columns"][] = "achievement_q3";
$proto43["m_columns"][] = "achievement_q4";
$proto43["m_columns"][] = "notes";
$proto43["m_columns"][] = "created_at";
$proto43["m_columns"][] = "updated_at";
$proto43["m_columns"][] = "fyear";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "\"public\".lbapt_annual_plan_tracker";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "public.lbapt_annual_plan_tracker";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbapt_annual_plan_tracker";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_annual_plan_tracker = createSqlQuery_lbapt_annual_plan_tracker();


	
				;

																		

$tdatalbapt_annual_plan_tracker[".sqlquery"] = $queryData_lbapt_annual_plan_tracker;



include_once(getabspath("include/lbapt_annual_plan_tracker_events.php"));
$tdatalbapt_annual_plan_tracker[".hasEvents"] = true;

?>