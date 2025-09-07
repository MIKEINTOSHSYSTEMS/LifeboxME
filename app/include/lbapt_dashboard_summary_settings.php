<?php
$tdatalbapt_dashboard_summary = array();
$tdatalbapt_dashboard_summary[".searchableFields"] = array();
$tdatalbapt_dashboard_summary[".ShortName"] = "lbapt_dashboard_summary";
$tdatalbapt_dashboard_summary[".OwnerID"] = "";
$tdatalbapt_dashboard_summary[".OriginalTable"] = "public.lbapt_dashboard_summary";


$tdatalbapt_dashboard_summary[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbapt_dashboard_summary[".originalPagesByType"] = $tdatalbapt_dashboard_summary[".pagesByType"];
$tdatalbapt_dashboard_summary[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbapt_dashboard_summary[".originalPages"] = $tdatalbapt_dashboard_summary[".pages"];
$tdatalbapt_dashboard_summary[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbapt_dashboard_summary[".originalDefaultPages"] = $tdatalbapt_dashboard_summary[".defaultPages"];

//	field labels
$fieldLabelslbapt_dashboard_summary = array();
$fieldToolTipslbapt_dashboard_summary = array();
$pageTitleslbapt_dashboard_summary = array();
$placeHolderslbapt_dashboard_summary = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_dashboard_summary["English"] = array();
	$fieldToolTipslbapt_dashboard_summary["English"] = array();
	$placeHolderslbapt_dashboard_summary["English"] = array();
	$pageTitleslbapt_dashboard_summary["English"] = array();
	$fieldLabelslbapt_dashboard_summary["English"]["summary_id"] = "SummaryID";
	$fieldToolTipslbapt_dashboard_summary["English"]["summary_id"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["summary_id"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["strategic_area_id"] = "Strategic Area";
	$fieldToolTipslbapt_dashboard_summary["English"]["strategic_area_id"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["strategic_area_id"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["total_activities"] = "Total Activities";
	$fieldToolTipslbapt_dashboard_summary["English"]["total_activities"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["total_activities"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["completed"] = "Completed";
	$fieldToolTipslbapt_dashboard_summary["English"]["completed"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["completed"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["in_progress"] = "In Progress";
	$fieldToolTipslbapt_dashboard_summary["English"]["in_progress"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["in_progress"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["not_started"] = "Not Started";
	$fieldToolTipslbapt_dashboard_summary["English"]["not_started"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["not_started"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["on_track_percentage"] = "On Track Percentage";
	$fieldToolTipslbapt_dashboard_summary["English"]["on_track_percentage"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["on_track_percentage"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_dashboard_summary["English"]["created_at"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["created_at"] = "";
	$fieldLabelslbapt_dashboard_summary["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_dashboard_summary["English"]["updated_at"] = "";
	$placeHolderslbapt_dashboard_summary["English"]["updated_at"] = "";
	if (count($fieldToolTipslbapt_dashboard_summary["English"]))
		$tdatalbapt_dashboard_summary[".isUseToolTips"] = true;
}


	$tdatalbapt_dashboard_summary[".NCSearch"] = true;



$tdatalbapt_dashboard_summary[".shortTableName"] = "lbapt_dashboard_summary";
$tdatalbapt_dashboard_summary[".nSecOptions"] = 0;

$tdatalbapt_dashboard_summary[".mainTableOwnerID"] = "";
$tdatalbapt_dashboard_summary[".entityType"] = 0;
$tdatalbapt_dashboard_summary[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_dashboard_summary[".strOriginalTableName"] = "public.lbapt_dashboard_summary";

	



$tdatalbapt_dashboard_summary[".showAddInPopup"] = false;

$tdatalbapt_dashboard_summary[".showEditInPopup"] = false;

$tdatalbapt_dashboard_summary[".showViewInPopup"] = false;

$tdatalbapt_dashboard_summary[".listAjax"] = false;
//	temporary
//$tdatalbapt_dashboard_summary[".listAjax"] = false;

	$tdatalbapt_dashboard_summary[".audit"] = true;

	$tdatalbapt_dashboard_summary[".locking"] = false;


$pages = $tdatalbapt_dashboard_summary[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_dashboard_summary[".edit"] = true;
	$tdatalbapt_dashboard_summary[".afterEditAction"] = 1;
	$tdatalbapt_dashboard_summary[".closePopupAfterEdit"] = 1;
	$tdatalbapt_dashboard_summary[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_dashboard_summary[".add"] = true;
$tdatalbapt_dashboard_summary[".afterAddAction"] = 1;
$tdatalbapt_dashboard_summary[".closePopupAfterAdd"] = 1;
$tdatalbapt_dashboard_summary[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_dashboard_summary[".list"] = true;
}



$tdatalbapt_dashboard_summary[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_dashboard_summary[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_dashboard_summary[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_dashboard_summary[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_dashboard_summary[".printFriendly"] = true;
}



$tdatalbapt_dashboard_summary[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_dashboard_summary[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_dashboard_summary[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_dashboard_summary[".isUseAjaxSuggest"] = true;





$tdatalbapt_dashboard_summary[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_dashboard_summary[".buttonsAdded"] = false;

$tdatalbapt_dashboard_summary[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_dashboard_summary[".isUseTimeForSearch"] = false;


$tdatalbapt_dashboard_summary[".badgeColor"] = "00C2C5";


$tdatalbapt_dashboard_summary[".allSearchFields"] = array();
$tdatalbapt_dashboard_summary[".filterFields"] = array();
$tdatalbapt_dashboard_summary[".requiredSearchFields"] = array();

$tdatalbapt_dashboard_summary[".googleLikeFields"] = array();
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "summary_id";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "strategic_area_id";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "total_activities";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "completed";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "in_progress";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "not_started";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "on_track_percentage";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "created_at";
$tdatalbapt_dashboard_summary[".googleLikeFields"][] = "updated_at";



$tdatalbapt_dashboard_summary[".tableType"] = "list";

$tdatalbapt_dashboard_summary[".printerPageOrientation"] = 0;
$tdatalbapt_dashboard_summary[".nPrinterPageScale"] = 100;

$tdatalbapt_dashboard_summary[".nPrinterSplitRecords"] = 40;

$tdatalbapt_dashboard_summary[".geocodingEnabled"] = false;










$tdatalbapt_dashboard_summary[".pageSize"] = 20;

$tdatalbapt_dashboard_summary[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_dashboard_summary[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_dashboard_summary[".orderindexes"] = array();


$tdatalbapt_dashboard_summary[".sqlHead"] = "SELECT summary_id,  	strategic_area_id,  	total_activities,  	completed,  	in_progress,  	not_started,  	on_track_percentage,  	created_at,  	updated_at";
$tdatalbapt_dashboard_summary[".sqlFrom"] = "FROM \"public\".lbapt_dashboard_summary";
$tdatalbapt_dashboard_summary[".sqlWhereExpr"] = "";
$tdatalbapt_dashboard_summary[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_dashboard_summary[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_dashboard_summary[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_dashboard_summary[".highlightSearchResults"] = true;

$tableKeyslbapt_dashboard_summary = array();
$tableKeyslbapt_dashboard_summary[] = "summary_id";
$tdatalbapt_dashboard_summary[".Keys"] = $tableKeyslbapt_dashboard_summary;


$tdatalbapt_dashboard_summary[".hideMobileList"] = array();




//	summary_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "summary_id";
	$fdata["GoodName"] = "summary_id";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","summary_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "summary_id";

		$fdata["sourceSingle"] = "summary_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "summary_id";

	
	
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


	$tdatalbapt_dashboard_summary["summary_id"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "summary_id";
//	strategic_area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "strategic_area_id";
	$fdata["GoodName"] = "strategic_area_id";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","strategic_area_id");
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


	$tdatalbapt_dashboard_summary["strategic_area_id"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "strategic_area_id";
//	total_activities
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_activities";
	$fdata["GoodName"] = "total_activities";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","total_activities");
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


	$tdatalbapt_dashboard_summary["total_activities"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "total_activities";
//	completed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "completed";
	$fdata["GoodName"] = "completed";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","completed");
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


	$tdatalbapt_dashboard_summary["completed"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "completed";
//	in_progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "in_progress";
	$fdata["GoodName"] = "in_progress";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","in_progress");
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


	$tdatalbapt_dashboard_summary["in_progress"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "in_progress";
//	not_started
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "not_started";
	$fdata["GoodName"] = "not_started";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","not_started");
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


	$tdatalbapt_dashboard_summary["not_started"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "not_started";
//	on_track_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "on_track_percentage";
	$fdata["GoodName"] = "on_track_percentage";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","on_track_percentage");
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


	$tdatalbapt_dashboard_summary["on_track_percentage"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "on_track_percentage";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","created_at");
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


	$tdatalbapt_dashboard_summary["created_at"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_dashboard_summary";
	$fdata["Label"] = GetFieldLabel("public_lbapt_dashboard_summary","updated_at");
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


	$tdatalbapt_dashboard_summary["updated_at"] = $fdata;
		$tdatalbapt_dashboard_summary[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_dashboard_summary"]=&$tdatalbapt_dashboard_summary;
$field_labels["public_lbapt_dashboard_summary"] = &$fieldLabelslbapt_dashboard_summary;
$fieldToolTips["public_lbapt_dashboard_summary"] = &$fieldToolTipslbapt_dashboard_summary;
$placeHolders["public_lbapt_dashboard_summary"] = &$placeHolderslbapt_dashboard_summary;
$page_titles["public_lbapt_dashboard_summary"] = &$pageTitleslbapt_dashboard_summary;


changeTextControlsToDate( "public.lbapt_dashboard_summary" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_dashboard_summary"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_dashboard_summary"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbapt_strategic_areas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbapt_strategic_areas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbapt_strategic_areas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbapt_dashboard_summary"][0] = $masterParams;
				$masterTablesData["public.lbapt_dashboard_summary"][0]["masterKeys"] = array();
	$masterTablesData["public.lbapt_dashboard_summary"][0]["masterKeys"][]="strategic_area_id";
				$masterTablesData["public.lbapt_dashboard_summary"][0]["detailKeys"] = array();
	$masterTablesData["public.lbapt_dashboard_summary"][0]["detailKeys"][]="strategic_area_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_dashboard_summary()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "summary_id,  	strategic_area_id,  	total_activities,  	completed,  	in_progress,  	not_started,  	on_track_percentage,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_dashboard_summary";
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
	"m_strName" => "summary_id",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto6["m_sql"] = "summary_id";
$proto6["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "strategic_area_id",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto8["m_sql"] = "strategic_area_id";
$proto8["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "total_activities",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto10["m_sql"] = "total_activities";
$proto10["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "completed",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto12["m_sql"] = "completed";
$proto12["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "in_progress",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto14["m_sql"] = "in_progress";
$proto14["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "not_started",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto16["m_sql"] = "not_started";
$proto16["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "on_track_percentage",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto18["m_sql"] = "on_track_percentage";
$proto18["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto20["m_sql"] = "created_at";
$proto20["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_dashboard_summary",
	"m_srcTableName" => "public.lbapt_dashboard_summary"
));

$proto22["m_sql"] = "updated_at";
$proto22["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.lbapt_dashboard_summary";
$proto25["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "summary_id";
$proto25["m_columns"][] = "strategic_area_id";
$proto25["m_columns"][] = "total_activities";
$proto25["m_columns"][] = "completed";
$proto25["m_columns"][] = "in_progress";
$proto25["m_columns"][] = "not_started";
$proto25["m_columns"][] = "on_track_percentage";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".lbapt_dashboard_summary";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.lbapt_dashboard_summary";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbapt_dashboard_summary";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_dashboard_summary = createSqlQuery_lbapt_dashboard_summary();


	
				;

									

$tdatalbapt_dashboard_summary[".sqlquery"] = $queryData_lbapt_dashboard_summary;



$tdatalbapt_dashboard_summary[".hasEvents"] = false;

?>