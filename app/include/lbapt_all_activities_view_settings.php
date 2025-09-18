<?php
$tdatalbapt_all_activities_view = array();
$tdatalbapt_all_activities_view[".searchableFields"] = array();
$tdatalbapt_all_activities_view[".ShortName"] = "lbapt_all_activities_view";
$tdatalbapt_all_activities_view[".OwnerID"] = "";
$tdatalbapt_all_activities_view[".OriginalTable"] = "public.lbapt_all_activities_view";


$tdatalbapt_all_activities_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalbapt_all_activities_view[".originalPagesByType"] = $tdatalbapt_all_activities_view[".pagesByType"];
$tdatalbapt_all_activities_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalbapt_all_activities_view[".originalPages"] = $tdatalbapt_all_activities_view[".pages"];
$tdatalbapt_all_activities_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalbapt_all_activities_view[".originalDefaultPages"] = $tdatalbapt_all_activities_view[".defaultPages"];

//	field labels
$fieldLabelslbapt_all_activities_view = array();
$fieldToolTipslbapt_all_activities_view = array();
$pageTitleslbapt_all_activities_view = array();
$placeHolderslbapt_all_activities_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_all_activities_view["English"] = array();
	$fieldToolTipslbapt_all_activities_view["English"] = array();
	$placeHolderslbapt_all_activities_view["English"] = array();
	$pageTitleslbapt_all_activities_view["English"] = array();
	$fieldLabelslbapt_all_activities_view["English"]["strategic_area"] = "Strategic Area";
	$fieldToolTipslbapt_all_activities_view["English"]["strategic_area"] = "";
	$placeHolderslbapt_all_activities_view["English"]["strategic_area"] = "";
	$fieldLabelslbapt_all_activities_view["English"]["key_objective"] = "Key Objective";
	$fieldToolTipslbapt_all_activities_view["English"]["key_objective"] = "";
	$placeHolderslbapt_all_activities_view["English"]["key_objective"] = "";
	$fieldLabelslbapt_all_activities_view["English"]["activity"] = "Activity";
	$fieldToolTipslbapt_all_activities_view["English"]["activity"] = "";
	$placeHolderslbapt_all_activities_view["English"]["activity"] = "";
	$fieldLabelslbapt_all_activities_view["English"]["kpi"] = "KPI";
	$fieldToolTipslbapt_all_activities_view["English"]["kpi"] = "";
	$placeHolderslbapt_all_activities_view["English"]["kpi"] = "";
	$fieldLabelslbapt_all_activities_view["English"]["status"] = "Status";
	$fieldToolTipslbapt_all_activities_view["English"]["status"] = "";
	$placeHolderslbapt_all_activities_view["English"]["status"] = "";
	$fieldLabelslbapt_all_activities_view["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_all_activities_view["English"]["created_at"] = "";
	$placeHolderslbapt_all_activities_view["English"]["created_at"] = "";
	$fieldLabelslbapt_all_activities_view["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_all_activities_view["English"]["updated_at"] = "";
	$placeHolderslbapt_all_activities_view["English"]["updated_at"] = "";
	if (count($fieldToolTipslbapt_all_activities_view["English"]))
		$tdatalbapt_all_activities_view[".isUseToolTips"] = true;
}


	$tdatalbapt_all_activities_view[".NCSearch"] = true;



$tdatalbapt_all_activities_view[".shortTableName"] = "lbapt_all_activities_view";
$tdatalbapt_all_activities_view[".nSecOptions"] = 0;

$tdatalbapt_all_activities_view[".mainTableOwnerID"] = "";
$tdatalbapt_all_activities_view[".entityType"] = 0;
$tdatalbapt_all_activities_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_all_activities_view[".strOriginalTableName"] = "public.lbapt_all_activities_view";

	



$tdatalbapt_all_activities_view[".showAddInPopup"] = false;

$tdatalbapt_all_activities_view[".showEditInPopup"] = false;

$tdatalbapt_all_activities_view[".showViewInPopup"] = false;

$tdatalbapt_all_activities_view[".listAjax"] = false;
//	temporary
//$tdatalbapt_all_activities_view[".listAjax"] = false;

	$tdatalbapt_all_activities_view[".audit"] = true;

	$tdatalbapt_all_activities_view[".locking"] = false;


$pages = $tdatalbapt_all_activities_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_all_activities_view[".edit"] = true;
	$tdatalbapt_all_activities_view[".afterEditAction"] = 1;
	$tdatalbapt_all_activities_view[".closePopupAfterEdit"] = 1;
	$tdatalbapt_all_activities_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_all_activities_view[".add"] = true;
$tdatalbapt_all_activities_view[".afterAddAction"] = 1;
$tdatalbapt_all_activities_view[".closePopupAfterAdd"] = 1;
$tdatalbapt_all_activities_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_all_activities_view[".list"] = true;
}



$tdatalbapt_all_activities_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_all_activities_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_all_activities_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_all_activities_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_all_activities_view[".printFriendly"] = true;
}



$tdatalbapt_all_activities_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_all_activities_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_all_activities_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_all_activities_view[".isUseAjaxSuggest"] = true;



			

$tdatalbapt_all_activities_view[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_all_activities_view[".buttonsAdded"] = false;

$tdatalbapt_all_activities_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_all_activities_view[".isUseTimeForSearch"] = false;


$tdatalbapt_all_activities_view[".badgeColor"] = "1E90FF";


$tdatalbapt_all_activities_view[".allSearchFields"] = array();
$tdatalbapt_all_activities_view[".filterFields"] = array();
$tdatalbapt_all_activities_view[".requiredSearchFields"] = array();

$tdatalbapt_all_activities_view[".googleLikeFields"] = array();
$tdatalbapt_all_activities_view[".googleLikeFields"][] = "strategic_area";
$tdatalbapt_all_activities_view[".googleLikeFields"][] = "key_objective";
$tdatalbapt_all_activities_view[".googleLikeFields"][] = "activity";
$tdatalbapt_all_activities_view[".googleLikeFields"][] = "kpi";
$tdatalbapt_all_activities_view[".googleLikeFields"][] = "status";
$tdatalbapt_all_activities_view[".googleLikeFields"][] = "created_at";
$tdatalbapt_all_activities_view[".googleLikeFields"][] = "updated_at";



$tdatalbapt_all_activities_view[".tableType"] = "list";

$tdatalbapt_all_activities_view[".printerPageOrientation"] = 0;
$tdatalbapt_all_activities_view[".nPrinterPageScale"] = 100;

$tdatalbapt_all_activities_view[".nPrinterSplitRecords"] = 40;

$tdatalbapt_all_activities_view[".geocodingEnabled"] = false;










$tdatalbapt_all_activities_view[".pageSize"] = 20;

$tdatalbapt_all_activities_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_all_activities_view[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_all_activities_view[".orderindexes"] = array();


$tdatalbapt_all_activities_view[".sqlHead"] = "SELECT strategic_area,  	key_objective,  	activity,  	kpi,  	status,  	created_at,  	updated_at";
$tdatalbapt_all_activities_view[".sqlFrom"] = "FROM \"public\".lbapt_all_activities_view";
$tdatalbapt_all_activities_view[".sqlWhereExpr"] = "";
$tdatalbapt_all_activities_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_all_activities_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_all_activities_view[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_all_activities_view[".highlightSearchResults"] = true;

$tableKeyslbapt_all_activities_view = array();
$tdatalbapt_all_activities_view[".Keys"] = $tableKeyslbapt_all_activities_view;


$tdatalbapt_all_activities_view[".hideMobileList"] = array();




//	strategic_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "strategic_area";
	$fdata["GoodName"] = "strategic_area";
	$fdata["ownerTable"] = "public.lbapt_all_activities_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_all_activities_view","strategic_area");
	$fdata["FieldType"] = 201;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lbapt_strategic_areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "area_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "area_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "strategic_area";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_all_activities_view["strategic_area"] = $fdata;
		$tdatalbapt_all_activities_view[".searchableFields"][] = "strategic_area";
//	key_objective
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "key_objective";
	$fdata["GoodName"] = "key_objective";
	$fdata["ownerTable"] = "public.lbapt_all_activities_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_all_activities_view","key_objective");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "strategic_area";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_all_activities_view["key_objective"] = $fdata;
		$tdatalbapt_all_activities_view[".searchableFields"][] = "key_objective";
//	activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "activity";
	$fdata["GoodName"] = "activity";
	$fdata["ownerTable"] = "public.lbapt_all_activities_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_all_activities_view","activity");
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


	$tdatalbapt_all_activities_view["activity"] = $fdata;
		$tdatalbapt_all_activities_view[".searchableFields"][] = "activity";
//	kpi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kpi";
	$fdata["GoodName"] = "kpi";
	$fdata["ownerTable"] = "public.lbapt_all_activities_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_all_activities_view","kpi");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "strategic_area";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_all_activities_view["kpi"] = $fdata;
		$tdatalbapt_all_activities_view[".searchableFields"][] = "kpi";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.lbapt_all_activities_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_all_activities_view","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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

	
		
	$edata["LinkField"] = "status_name";
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "strategic_area";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbapt_all_activities_view["status"] = $fdata;
		$tdatalbapt_all_activities_view[".searchableFields"][] = "status";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_all_activities_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_all_activities_view","created_at");
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


	$tdatalbapt_all_activities_view["created_at"] = $fdata;
		$tdatalbapt_all_activities_view[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_all_activities_view";
	$fdata["Label"] = GetFieldLabel("public_lbapt_all_activities_view","updated_at");
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


	$tdatalbapt_all_activities_view["updated_at"] = $fdata;
		$tdatalbapt_all_activities_view[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_all_activities_view"]=&$tdatalbapt_all_activities_view;
$field_labels["public_lbapt_all_activities_view"] = &$fieldLabelslbapt_all_activities_view;
$fieldToolTips["public_lbapt_all_activities_view"] = &$fieldToolTipslbapt_all_activities_view;
$placeHolders["public_lbapt_all_activities_view"] = &$placeHolderslbapt_all_activities_view;
$page_titles["public_lbapt_all_activities_view"] = &$pageTitleslbapt_all_activities_view;


changeTextControlsToDate( "public.lbapt_all_activities_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_all_activities_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_all_activities_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_all_activities_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "strategic_area,  	key_objective,  	activity,  	kpi,  	status,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_all_activities_view";
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
	"m_strTable" => "public.lbapt_all_activities_view",
	"m_srcTableName" => "public.lbapt_all_activities_view"
));

$proto6["m_sql"] = "strategic_area";
$proto6["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "key_objective",
	"m_strTable" => "public.lbapt_all_activities_view",
	"m_srcTableName" => "public.lbapt_all_activities_view"
));

$proto8["m_sql"] = "key_objective";
$proto8["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "activity",
	"m_strTable" => "public.lbapt_all_activities_view",
	"m_srcTableName" => "public.lbapt_all_activities_view"
));

$proto10["m_sql"] = "activity";
$proto10["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "kpi",
	"m_strTable" => "public.lbapt_all_activities_view",
	"m_srcTableName" => "public.lbapt_all_activities_view"
));

$proto12["m_sql"] = "kpi";
$proto12["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.lbapt_all_activities_view",
	"m_srcTableName" => "public.lbapt_all_activities_view"
));

$proto14["m_sql"] = "status";
$proto14["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_all_activities_view",
	"m_srcTableName" => "public.lbapt_all_activities_view"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_all_activities_view",
	"m_srcTableName" => "public.lbapt_all_activities_view"
));

$proto18["m_sql"] = "updated_at";
$proto18["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.lbapt_all_activities_view";
$proto21["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "strategic_area";
$proto21["m_columns"][] = "key_objective";
$proto21["m_columns"][] = "activity";
$proto21["m_columns"][] = "kpi";
$proto21["m_columns"][] = "status";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "updated_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".lbapt_all_activities_view";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.lbapt_all_activities_view";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbapt_all_activities_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_all_activities_view = createSqlQuery_lbapt_all_activities_view();


	
				;

							

$tdatalbapt_all_activities_view[".sqlquery"] = $queryData_lbapt_all_activities_view;



include_once(getabspath("include/lbapt_all_activities_view_events.php"));
$tdatalbapt_all_activities_view[".hasEvents"] = true;

?>