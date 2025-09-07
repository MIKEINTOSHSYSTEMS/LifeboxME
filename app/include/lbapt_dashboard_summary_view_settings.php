<?php
$tdatalbapt_dashboard_summary_view = array();
$tdatalbapt_dashboard_summary_view[".searchableFields"] = array();
$tdatalbapt_dashboard_summary_view[".ShortName"] = "lbapt_dashboard_summary_view";
$tdatalbapt_dashboard_summary_view[".OwnerID"] = "";
$tdatalbapt_dashboard_summary_view[".OriginalTable"] = "public.lbapt_dashboard_summary_view";


$tdatalbapt_dashboard_summary_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalbapt_dashboard_summary_view[".originalPagesByType"] = $tdatalbapt_dashboard_summary_view[".pagesByType"];
$tdatalbapt_dashboard_summary_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalbapt_dashboard_summary_view[".originalPages"] = $tdatalbapt_dashboard_summary_view[".pages"];
$tdatalbapt_dashboard_summary_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalbapt_dashboard_summary_view[".originalDefaultPages"] = $tdatalbapt_dashboard_summary_view[".defaultPages"];

//	field labels
$fieldLabelslbapt_dashboard_summary_view = array();
$fieldToolTipslbapt_dashboard_summary_view = array();
$pageTitleslbapt_dashboard_summary_view = array();
$placeHolderslbapt_dashboard_summary_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_dashboard_summary_view["English"] = array();
	$fieldToolTipslbapt_dashboard_summary_view["English"] = array();
	$placeHolderslbapt_dashboard_summary_view["English"] = array();
	$pageTitleslbapt_dashboard_summary_view["English"] = array();
	$fieldLabelslbapt_dashboard_summary_view["English"]["strategic_area"] = "Strategic Area";
	$fieldToolTipslbapt_dashboard_summary_view["English"]["strategic_area"] = "";
	$placeHolderslbapt_dashboard_summary_view["English"]["strategic_area"] = "";
	$fieldLabelslbapt_dashboard_summary_view["English"]["total_activities"] = "Total Activities";
	$fieldToolTipslbapt_dashboard_summary_view["English"]["total_activities"] = "";
	$placeHolderslbapt_dashboard_summary_view["English"]["total_activities"] = "";
	$fieldLabelslbapt_dashboard_summary_view["English"]["completed"] = "Completed";
	$fieldToolTipslbapt_dashboard_summary_view["English"]["completed"] = "";
	$placeHolderslbapt_dashboard_summary_view["English"]["completed"] = "";
	$fieldLabelslbapt_dashboard_summary_view["English"]["in_progress"] = "In Progress";
	$fieldToolTipslbapt_dashboard_summary_view["English"]["in_progress"] = "";
	$placeHolderslbapt_dashboard_summary_view["English"]["in_progress"] = "";
	$fieldLabelslbapt_dashboard_summary_view["English"]["not_started"] = "Not Started";
	$fieldToolTipslbapt_dashboard_summary_view["English"]["not_started"] = "";
	$placeHolderslbapt_dashboard_summary_view["English"]["not_started"] = "";
	$fieldLabelslbapt_dashboard_summary_view["English"]["on_track_percentage"] = "On Track Percentage";
	$fieldToolTipslbapt_dashboard_summary_view["English"]["on_track_percentage"] = "";
	$placeHolderslbapt_dashboard_summary_view["English"]["on_track_percentage"] = "";
	if (count($fieldToolTipslbapt_dashboard_summary_view["English"]))
		$tdatalbapt_dashboard_summary_view[".isUseToolTips"] = true;
}


	$tdatalbapt_dashboard_summary_view[".NCSearch"] = true;



$tdatalbapt_dashboard_summary_view[".shortTableName"] = "lbapt_dashboard_summary_view";
$tdatalbapt_dashboard_summary_view[".nSecOptions"] = 0;

$tdatalbapt_dashboard_summary_view[".mainTableOwnerID"] = "";
$tdatalbapt_dashboard_summary_view[".entityType"] = 0;
$tdatalbapt_dashboard_summary_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_dashboard_summary_view[".strOriginalTableName"] = "public.lbapt_dashboard_summary_view";

	



$tdatalbapt_dashboard_summary_view[".showAddInPopup"] = false;

$tdatalbapt_dashboard_summary_view[".showEditInPopup"] = false;

$tdatalbapt_dashboard_summary_view[".showViewInPopup"] = false;

$tdatalbapt_dashboard_summary_view[".listAjax"] = false;
//	temporary
//$tdatalbapt_dashboard_summary_view[".listAjax"] = false;

	$tdatalbapt_dashboard_summary_view[".audit"] = true;

	$tdatalbapt_dashboard_summary_view[".locking"] = false;


$pages = $tdatalbapt_dashboard_summary_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_dashboard_summary_view[".edit"] = true;
	$tdatalbapt_dashboard_summary_view[".afterEditAction"] = 1;
	$tdatalbapt_dashboard_summary_view[".closePopupAfterEdit"] = 1;
	$tdatalbapt_dashboard_summary_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_dashboard_summary_view[".add"] = true;
$tdatalbapt_dashboard_summary_view[".afterAddAction"] = 1;
$tdatalbapt_dashboard_summary_view[".closePopupAfterAdd"] = 1;
$tdatalbapt_dashboard_summary_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_dashboard_summary_view[".list"] = true;
}



$tdatalbapt_dashboard_summary_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_dashboard_summary_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_dashboard_summary_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_dashboard_summary_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_dashboard_summary_view[".printFriendly"] = true;
}



$tdatalbapt_dashboard_summary_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_dashboard_summary_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_dashboard_summary_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_dashboard_summary_view[".isUseAjaxSuggest"] = true;





$tdatalbapt_dashboard_summary_view[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_dashboard_summary_view[".buttonsAdded"] = false;

$tdatalbapt_dashboard_summary_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_dashboard_summary_view[".isUseTimeForSearch"] = false;


$tdatalbapt_dashboard_summary_view[".badgeColor"] = "CD853F";


$tdatalbapt_dashboard_summary_view[".allSearchFields"] = array();
$tdatalbapt_dashboard_summary_view[".filterFields"] = array();
$tdatalbapt_dashboard_summary_view[".requiredSearchFields"] = array();

$tdatalbapt_dashboard_summary_view[".googleLikeFields"] = array();
$tdatalbapt_dashboard_summary_view[".googleLikeFields"][] = "strategic_area";
$tdatalbapt_dashboard_summary_view[".googleLikeFields"][] = "total_activities";
$tdatalbapt_dashboard_summary_view[".googleLikeFields"][] = "completed";
$tdatalbapt_dashboard_summary_view[".googleLikeFields"][] = "in_progress";
$tdatalbapt_dashboard_summary_view[".googleLikeFields"][] = "not_started";
$tdatalbapt_dashboard_summary_view[".googleLikeFields"][] = "on_track_percentage";



$tdatalbapt_dashboard_summary_view[".tableType"] = "list";

$tdatalbapt_dashboard_summary_view[".printerPageOrientation"] = 0;
$tdatalbapt_dashboard_summary_view[".nPrinterPageScale"] = 100;

$tdatalbapt_dashboard_summary_view[".nPrinterSplitRecords"] = 40;

$tdatalbapt_dashboard_summary_view[".geocodingEnabled"] = false;




$tdatalbapt_dashboard_summary_view[".isDisplayLoading"] = true;






$tdatalbapt_dashboard_summary_view[".pageSize"] = 20;

$tdatalbapt_dashboard_summary_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_dashboard_summary_view[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_dashboard_summary_view[".orderindexes"] = array();


$tdatalbapt_dashboard_summary_view[".sqlHead"] = "SELECT strategic_area,  	total_activities,  	completed,  	in_progress,  	not_started,  	on_track_percentage";
$tdatalbapt_dashboard_summary_view[".sqlFrom"] = "FROM \"public\".lbapt_dashboard_summary_view";
$tdatalbapt_dashboard_summary_view[".sqlWhereExpr"] = "";
$tdatalbapt_dashboard_summary_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_dashboard_summary_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_dashboard_summary_view[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_dashboard_summary_view[".highlightSearchResults"] = true;

$tableKeyslbapt_dashboard_summary_view = array();
$tdatalbapt_dashboard_summary_view[".Keys"] = $tableKeyslbapt_dashboard_summary_view;


$tdatalbapt_dashboard_summary_view[".hideMobileList"] = array();




//	strategic_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "strategic_area";
	$fdata["GoodName"] = "strategic_area";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary_view","strategic_area");
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


	$tdatalbapt_dashboard_summary_view["strategic_area"] = $fdata;
		$tdatalbapt_dashboard_summary_view[".searchableFields"][] = "strategic_area";
//	total_activities
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "total_activities";
	$fdata["GoodName"] = "total_activities";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary_view","total_activities");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_activities";

		$fdata["sourceSingle"] = "total_activities";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_activities";

	
	
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


	$tdatalbapt_dashboard_summary_view["total_activities"] = $fdata;
		$tdatalbapt_dashboard_summary_view[".searchableFields"][] = "total_activities";
//	completed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "completed";
	$fdata["GoodName"] = "completed";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary_view","completed");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "completed";

		$fdata["sourceSingle"] = "completed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "completed";

	
	
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


	$tdatalbapt_dashboard_summary_view["completed"] = $fdata;
		$tdatalbapt_dashboard_summary_view[".searchableFields"][] = "completed";
//	in_progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "in_progress";
	$fdata["GoodName"] = "in_progress";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary_view","in_progress");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "in_progress";

		$fdata["sourceSingle"] = "in_progress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "in_progress";

	
	
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


	$tdatalbapt_dashboard_summary_view["in_progress"] = $fdata;
		$tdatalbapt_dashboard_summary_view[".searchableFields"][] = "in_progress";
//	not_started
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "not_started";
	$fdata["GoodName"] = "not_started";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary_view","not_started");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "not_started";

		$fdata["sourceSingle"] = "not_started";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_started";

	
	
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


	$tdatalbapt_dashboard_summary_view["not_started"] = $fdata;
		$tdatalbapt_dashboard_summary_view[".searchableFields"][] = "not_started";
//	on_track_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "on_track_percentage";
	$fdata["GoodName"] = "on_track_percentage";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary_view","on_track_percentage");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "on_track_percentage";

		$fdata["sourceSingle"] = "on_track_percentage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "on_track_percentage";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
		$fdata["filterTotalFields"] = "total_activities";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_dashboard_summary_view["on_track_percentage"] = $fdata;
		$tdatalbapt_dashboard_summary_view[".searchableFields"][] = "on_track_percentage";


$tables_data["public.lbapt_dashboard_summary_view"]=&$tdatalbapt_dashboard_summary_view;
$field_labels["public_lbapt_dashboard_summary_view"] = &$fieldLabelslbapt_dashboard_summary_view;
$fieldToolTips["public_lbapt_dashboard_summary_view"] = &$fieldToolTipslbapt_dashboard_summary_view;
$placeHolders["public_lbapt_dashboard_summary_view"] = &$placeHolderslbapt_dashboard_summary_view;
$page_titles["public_lbapt_dashboard_summary_view"] = &$pageTitleslbapt_dashboard_summary_view;


changeTextControlsToDate( "public.lbapt_dashboard_summary_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_dashboard_summary_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_dashboard_summary_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_dashboard_summary_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "strategic_area,  	total_activities,  	completed,  	in_progress,  	not_started,  	on_track_percentage";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_dashboard_summary_view";
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
	"m_strTable" => "public.lbapt_dashboard_summary_view",
	"m_srcTableName" => "public.lbapt_dashboard_summary_view"
));

$proto6["m_sql"] = "strategic_area";
$proto6["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "total_activities",
	"m_strTable" => "public.lbapt_dashboard_summary_view",
	"m_srcTableName" => "public.lbapt_dashboard_summary_view"
));

$proto8["m_sql"] = "total_activities";
$proto8["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "completed",
	"m_strTable" => "public.lbapt_dashboard_summary_view",
	"m_srcTableName" => "public.lbapt_dashboard_summary_view"
));

$proto10["m_sql"] = "completed";
$proto10["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "in_progress",
	"m_strTable" => "public.lbapt_dashboard_summary_view",
	"m_srcTableName" => "public.lbapt_dashboard_summary_view"
));

$proto12["m_sql"] = "in_progress";
$proto12["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "not_started",
	"m_strTable" => "public.lbapt_dashboard_summary_view",
	"m_srcTableName" => "public.lbapt_dashboard_summary_view"
));

$proto14["m_sql"] = "not_started";
$proto14["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "on_track_percentage",
	"m_strTable" => "public.lbapt_dashboard_summary_view",
	"m_srcTableName" => "public.lbapt_dashboard_summary_view"
));

$proto16["m_sql"] = "on_track_percentage";
$proto16["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.lbapt_dashboard_summary_view";
$proto19["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "strategic_area";
$proto19["m_columns"][] = "total_activities";
$proto19["m_columns"][] = "completed";
$proto19["m_columns"][] = "in_progress";
$proto19["m_columns"][] = "not_started";
$proto19["m_columns"][] = "on_track_percentage";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".lbapt_dashboard_summary_view";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.lbapt_dashboard_summary_view";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbapt_dashboard_summary_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_dashboard_summary_view = createSqlQuery_lbapt_dashboard_summary_view();


	
				;

						

$tdatalbapt_dashboard_summary_view[".sqlquery"] = $queryData_lbapt_dashboard_summary_view;



$tdatalbapt_dashboard_summary_view[".hasEvents"] = false;

?>