<?php
$tdatalbapt_unified_activities = array();
$tdatalbapt_unified_activities[".searchableFields"] = array();
$tdatalbapt_unified_activities[".ShortName"] = "lbapt_unified_activities";
$tdatalbapt_unified_activities[".OwnerID"] = "";
$tdatalbapt_unified_activities[".OriginalTable"] = "public.lbapt_unified_activities";


$tdatalbapt_unified_activities[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalbapt_unified_activities[".originalPagesByType"] = $tdatalbapt_unified_activities[".pagesByType"];
$tdatalbapt_unified_activities[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalbapt_unified_activities[".originalPages"] = $tdatalbapt_unified_activities[".pages"];
$tdatalbapt_unified_activities[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalbapt_unified_activities[".originalDefaultPages"] = $tdatalbapt_unified_activities[".defaultPages"];

//	field labels
$fieldLabelslbapt_unified_activities = array();
$fieldToolTipslbapt_unified_activities = array();
$pageTitleslbapt_unified_activities = array();
$placeHolderslbapt_unified_activities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_unified_activities["English"] = array();
	$fieldToolTipslbapt_unified_activities["English"] = array();
	$placeHolderslbapt_unified_activities["English"] = array();
	$pageTitleslbapt_unified_activities["English"] = array();
	$fieldLabelslbapt_unified_activities["English"]["strategic_area_id"] = "Strategic Area Id";
	$fieldToolTipslbapt_unified_activities["English"]["strategic_area_id"] = "";
	$placeHolderslbapt_unified_activities["English"]["strategic_area_id"] = "";
	$fieldLabelslbapt_unified_activities["English"]["activity_id"] = "Activity Id";
	$fieldToolTipslbapt_unified_activities["English"]["activity_id"] = "";
	$placeHolderslbapt_unified_activities["English"]["activity_id"] = "";
	$fieldLabelslbapt_unified_activities["English"]["activity_type"] = "Activity Type";
	$fieldToolTipslbapt_unified_activities["English"]["activity_type"] = "";
	$placeHolderslbapt_unified_activities["English"]["activity_type"] = "";
	$fieldLabelslbapt_unified_activities["English"]["key_objective"] = "Key Objective";
	$fieldToolTipslbapt_unified_activities["English"]["key_objective"] = "";
	$placeHolderslbapt_unified_activities["English"]["key_objective"] = "";
	$fieldLabelslbapt_unified_activities["English"]["activity"] = "Activity";
	$fieldToolTipslbapt_unified_activities["English"]["activity"] = "";
	$placeHolderslbapt_unified_activities["English"]["activity"] = "";
	$fieldLabelslbapt_unified_activities["English"]["kpi"] = "Kpi";
	$fieldToolTipslbapt_unified_activities["English"]["kpi"] = "";
	$placeHolderslbapt_unified_activities["English"]["kpi"] = "";
	$fieldLabelslbapt_unified_activities["English"]["status_id"] = "Status";
	$fieldToolTipslbapt_unified_activities["English"]["status_id"] = "";
	$placeHolderslbapt_unified_activities["English"]["status_id"] = "";
	$fieldLabelslbapt_unified_activities["English"]["planned_timeframe_q1"] = "Planned Timeframe Q1";
	$fieldToolTipslbapt_unified_activities["English"]["planned_timeframe_q1"] = "";
	$placeHolderslbapt_unified_activities["English"]["planned_timeframe_q1"] = "";
	$fieldLabelslbapt_unified_activities["English"]["planned_timeframe_q2"] = "Planned Timeframe Q2";
	$fieldToolTipslbapt_unified_activities["English"]["planned_timeframe_q2"] = "";
	$placeHolderslbapt_unified_activities["English"]["planned_timeframe_q2"] = "";
	$fieldLabelslbapt_unified_activities["English"]["planned_timeframe_q3"] = "Planned Timeframe Q3";
	$fieldToolTipslbapt_unified_activities["English"]["planned_timeframe_q3"] = "";
	$placeHolderslbapt_unified_activities["English"]["planned_timeframe_q3"] = "";
	$fieldLabelslbapt_unified_activities["English"]["planned_timeframe_q4"] = "Planned Timeframe Q4";
	$fieldToolTipslbapt_unified_activities["English"]["planned_timeframe_q4"] = "";
	$placeHolderslbapt_unified_activities["English"]["planned_timeframe_q4"] = "";
	$fieldLabelslbapt_unified_activities["English"]["achievement_q1"] = "Achievement Q1";
	$fieldToolTipslbapt_unified_activities["English"]["achievement_q1"] = "";
	$placeHolderslbapt_unified_activities["English"]["achievement_q1"] = "";
	$fieldLabelslbapt_unified_activities["English"]["achievement_q2"] = "Achievement Q2";
	$fieldToolTipslbapt_unified_activities["English"]["achievement_q2"] = "";
	$placeHolderslbapt_unified_activities["English"]["achievement_q2"] = "";
	$fieldLabelslbapt_unified_activities["English"]["achievement_q3"] = "Achievement Q3";
	$fieldToolTipslbapt_unified_activities["English"]["achievement_q3"] = "";
	$placeHolderslbapt_unified_activities["English"]["achievement_q3"] = "";
	$fieldLabelslbapt_unified_activities["English"]["achievement_q4"] = "Achievement Q4";
	$fieldToolTipslbapt_unified_activities["English"]["achievement_q4"] = "";
	$placeHolderslbapt_unified_activities["English"]["achievement_q4"] = "";
	$fieldLabelslbapt_unified_activities["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_unified_activities["English"]["created_at"] = "";
	$placeHolderslbapt_unified_activities["English"]["created_at"] = "";
	$fieldLabelslbapt_unified_activities["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_unified_activities["English"]["updated_at"] = "";
	$placeHolderslbapt_unified_activities["English"]["updated_at"] = "";
	if (count($fieldToolTipslbapt_unified_activities["English"]))
		$tdatalbapt_unified_activities[".isUseToolTips"] = true;
}


	$tdatalbapt_unified_activities[".NCSearch"] = true;



$tdatalbapt_unified_activities[".shortTableName"] = "lbapt_unified_activities";
$tdatalbapt_unified_activities[".nSecOptions"] = 0;

$tdatalbapt_unified_activities[".mainTableOwnerID"] = "";
$tdatalbapt_unified_activities[".entityType"] = 0;
$tdatalbapt_unified_activities[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_unified_activities[".strOriginalTableName"] = "public.lbapt_unified_activities";

	



$tdatalbapt_unified_activities[".showAddInPopup"] = false;

$tdatalbapt_unified_activities[".showEditInPopup"] = false;

$tdatalbapt_unified_activities[".showViewInPopup"] = false;

$tdatalbapt_unified_activities[".listAjax"] = false;
//	temporary
//$tdatalbapt_unified_activities[".listAjax"] = false;

	$tdatalbapt_unified_activities[".audit"] = false;

	$tdatalbapt_unified_activities[".locking"] = false;


$pages = $tdatalbapt_unified_activities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_unified_activities[".edit"] = true;
	$tdatalbapt_unified_activities[".afterEditAction"] = 1;
	$tdatalbapt_unified_activities[".closePopupAfterEdit"] = 1;
	$tdatalbapt_unified_activities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_unified_activities[".add"] = true;
$tdatalbapt_unified_activities[".afterAddAction"] = 1;
$tdatalbapt_unified_activities[".closePopupAfterAdd"] = 1;
$tdatalbapt_unified_activities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_unified_activities[".list"] = true;
}



$tdatalbapt_unified_activities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_unified_activities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_unified_activities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_unified_activities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_unified_activities[".printFriendly"] = true;
}



$tdatalbapt_unified_activities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_unified_activities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_unified_activities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_unified_activities[".isUseAjaxSuggest"] = true;





$tdatalbapt_unified_activities[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_unified_activities[".buttonsAdded"] = false;

$tdatalbapt_unified_activities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_unified_activities[".isUseTimeForSearch"] = false;


$tdatalbapt_unified_activities[".badgeColor"] = "DB7093";


$tdatalbapt_unified_activities[".allSearchFields"] = array();
$tdatalbapt_unified_activities[".filterFields"] = array();
$tdatalbapt_unified_activities[".requiredSearchFields"] = array();

$tdatalbapt_unified_activities[".googleLikeFields"] = array();
$tdatalbapt_unified_activities[".googleLikeFields"][] = "strategic_area_id";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "activity_id";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "activity_type";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "key_objective";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "activity";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "kpi";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "status_id";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "planned_timeframe_q1";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "planned_timeframe_q2";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "planned_timeframe_q3";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "planned_timeframe_q4";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "achievement_q1";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "achievement_q2";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "achievement_q3";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "achievement_q4";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "created_at";
$tdatalbapt_unified_activities[".googleLikeFields"][] = "updated_at";



$tdatalbapt_unified_activities[".tableType"] = "list";

$tdatalbapt_unified_activities[".printerPageOrientation"] = 0;
$tdatalbapt_unified_activities[".nPrinterPageScale"] = 100;

$tdatalbapt_unified_activities[".nPrinterSplitRecords"] = 40;

$tdatalbapt_unified_activities[".geocodingEnabled"] = false;










$tdatalbapt_unified_activities[".pageSize"] = 20;

$tdatalbapt_unified_activities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_unified_activities[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_unified_activities[".orderindexes"] = array();


$tdatalbapt_unified_activities[".sqlHead"] = "SELECT strategic_area_id,  	activity_id,  	activity_type,  	key_objective,  	activity,  	kpi,  	status_id,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	created_at,  	updated_at";
$tdatalbapt_unified_activities[".sqlFrom"] = "FROM \"public\".lbapt_unified_activities";
$tdatalbapt_unified_activities[".sqlWhereExpr"] = "";
$tdatalbapt_unified_activities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_unified_activities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_unified_activities[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_unified_activities[".highlightSearchResults"] = true;

$tableKeyslbapt_unified_activities = array();
$tdatalbapt_unified_activities[".Keys"] = $tableKeyslbapt_unified_activities;


$tdatalbapt_unified_activities[".hideMobileList"] = array();




//	strategic_area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "strategic_area_id";
	$fdata["GoodName"] = "strategic_area_id";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","strategic_area_id");
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


	$tdatalbapt_unified_activities["strategic_area_id"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "strategic_area_id";
//	activity_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "activity_id";
	$fdata["GoodName"] = "activity_id";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","activity_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "activity_id";

		$fdata["sourceSingle"] = "activity_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activity_id";

	
	
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


	$tdatalbapt_unified_activities["activity_id"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "activity_id";
//	activity_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "activity_type";
	$fdata["GoodName"] = "activity_type";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","activity_type");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "activity_type";

		$fdata["sourceSingle"] = "activity_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activity_type";

	
	
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


	$tdatalbapt_unified_activities["activity_type"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "activity_type";
//	key_objective
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "key_objective";
	$fdata["GoodName"] = "key_objective";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","key_objective");
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


	$tdatalbapt_unified_activities["key_objective"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "key_objective";
//	activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "activity";
	$fdata["GoodName"] = "activity";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","activity");
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


	$tdatalbapt_unified_activities["activity"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "activity";
//	kpi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "kpi";
	$fdata["GoodName"] = "kpi";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","kpi");
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


	$tdatalbapt_unified_activities["kpi"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "kpi";
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","status_id");
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
	$edata["LinkFieldType"] = 0;
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_unified_activities["status_id"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "status_id";
//	planned_timeframe_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "planned_timeframe_q1";
	$fdata["GoodName"] = "planned_timeframe_q1";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","planned_timeframe_q1");
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


	$tdatalbapt_unified_activities["planned_timeframe_q1"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "planned_timeframe_q1";
//	planned_timeframe_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "planned_timeframe_q2";
	$fdata["GoodName"] = "planned_timeframe_q2";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","planned_timeframe_q2");
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


	$tdatalbapt_unified_activities["planned_timeframe_q2"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "planned_timeframe_q2";
//	planned_timeframe_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "planned_timeframe_q3";
	$fdata["GoodName"] = "planned_timeframe_q3";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","planned_timeframe_q3");
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


	$tdatalbapt_unified_activities["planned_timeframe_q3"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "planned_timeframe_q3";
//	planned_timeframe_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "planned_timeframe_q4";
	$fdata["GoodName"] = "planned_timeframe_q4";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","planned_timeframe_q4");
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


	$tdatalbapt_unified_activities["planned_timeframe_q4"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "planned_timeframe_q4";
//	achievement_q1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "achievement_q1";
	$fdata["GoodName"] = "achievement_q1";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","achievement_q1");
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


	$tdatalbapt_unified_activities["achievement_q1"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "achievement_q1";
//	achievement_q2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "achievement_q2";
	$fdata["GoodName"] = "achievement_q2";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","achievement_q2");
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


	$tdatalbapt_unified_activities["achievement_q2"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "achievement_q2";
//	achievement_q3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "achievement_q3";
	$fdata["GoodName"] = "achievement_q3";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","achievement_q3");
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


	$tdatalbapt_unified_activities["achievement_q3"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "achievement_q3";
//	achievement_q4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "achievement_q4";
	$fdata["GoodName"] = "achievement_q4";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","achievement_q4");
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


	$tdatalbapt_unified_activities["achievement_q4"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "achievement_q4";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","created_at");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatalbapt_unified_activities["created_at"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_unified_activities";
	$fdata["Label"] = GetFieldLabel("public_lbapt_unified_activities","updated_at");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatalbapt_unified_activities["updated_at"] = $fdata;
		$tdatalbapt_unified_activities[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_unified_activities"]=&$tdatalbapt_unified_activities;
$field_labels["public_lbapt_unified_activities"] = &$fieldLabelslbapt_unified_activities;
$fieldToolTips["public_lbapt_unified_activities"] = &$fieldToolTipslbapt_unified_activities;
$placeHolders["public_lbapt_unified_activities"] = &$placeHolderslbapt_unified_activities;
$page_titles["public_lbapt_unified_activities"] = &$pageTitleslbapt_unified_activities;


changeTextControlsToDate( "public.lbapt_unified_activities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_unified_activities"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_unified_activities"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_unified_activities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "strategic_area_id,  	activity_id,  	activity_type,  	key_objective,  	activity,  	kpi,  	status_id,  	planned_timeframe_q1,  	planned_timeframe_q2,  	planned_timeframe_q3,  	planned_timeframe_q4,  	achievement_q1,  	achievement_q2,  	achievement_q3,  	achievement_q4,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_unified_activities";
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
	"m_strName" => "strategic_area_id",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto6["m_sql"] = "strategic_area_id";
$proto6["m_srcTableName"] = "public.lbapt_unified_activities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "activity_id",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto8["m_sql"] = "activity_id";
$proto8["m_srcTableName"] = "public.lbapt_unified_activities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "activity_type",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto10["m_sql"] = "activity_type";
$proto10["m_srcTableName"] = "public.lbapt_unified_activities";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "key_objective",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto12["m_sql"] = "key_objective";
$proto12["m_srcTableName"] = "public.lbapt_unified_activities";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "activity",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto14["m_sql"] = "activity";
$proto14["m_srcTableName"] = "public.lbapt_unified_activities";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "kpi",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto16["m_sql"] = "kpi";
$proto16["m_srcTableName"] = "public.lbapt_unified_activities";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto18["m_sql"] = "status_id";
$proto18["m_srcTableName"] = "public.lbapt_unified_activities";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q1",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto20["m_sql"] = "planned_timeframe_q1";
$proto20["m_srcTableName"] = "public.lbapt_unified_activities";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q2",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto22["m_sql"] = "planned_timeframe_q2";
$proto22["m_srcTableName"] = "public.lbapt_unified_activities";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q3",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto24["m_sql"] = "planned_timeframe_q3";
$proto24["m_srcTableName"] = "public.lbapt_unified_activities";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_timeframe_q4",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto26["m_sql"] = "planned_timeframe_q4";
$proto26["m_srcTableName"] = "public.lbapt_unified_activities";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q1",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto28["m_sql"] = "achievement_q1";
$proto28["m_srcTableName"] = "public.lbapt_unified_activities";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q2",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto30["m_sql"] = "achievement_q2";
$proto30["m_srcTableName"] = "public.lbapt_unified_activities";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q3",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto32["m_sql"] = "achievement_q3";
$proto32["m_srcTableName"] = "public.lbapt_unified_activities";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "achievement_q4",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto34["m_sql"] = "achievement_q4";
$proto34["m_srcTableName"] = "public.lbapt_unified_activities";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto36["m_sql"] = "created_at";
$proto36["m_srcTableName"] = "public.lbapt_unified_activities";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_unified_activities",
	"m_srcTableName" => "public.lbapt_unified_activities"
));

$proto38["m_sql"] = "updated_at";
$proto38["m_srcTableName"] = "public.lbapt_unified_activities";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "public.lbapt_unified_activities";
$proto41["m_srcTableName"] = "public.lbapt_unified_activities";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "strategic_area_id";
$proto41["m_columns"][] = "activity_id";
$proto41["m_columns"][] = "activity_type";
$proto41["m_columns"][] = "key_objective";
$proto41["m_columns"][] = "activity";
$proto41["m_columns"][] = "kpi";
$proto41["m_columns"][] = "status_id";
$proto41["m_columns"][] = "planned_timeframe_q1";
$proto41["m_columns"][] = "planned_timeframe_q2";
$proto41["m_columns"][] = "planned_timeframe_q3";
$proto41["m_columns"][] = "planned_timeframe_q4";
$proto41["m_columns"][] = "achievement_q1";
$proto41["m_columns"][] = "achievement_q2";
$proto41["m_columns"][] = "achievement_q3";
$proto41["m_columns"][] = "achievement_q4";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "updated_at";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "\"public\".lbapt_unified_activities";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "public.lbapt_unified_activities";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbapt_unified_activities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_unified_activities = createSqlQuery_lbapt_unified_activities();


	
				;

																	

$tdatalbapt_unified_activities[".sqlquery"] = $queryData_lbapt_unified_activities;



$tdatalbapt_unified_activities[".hasEvents"] = false;

?>