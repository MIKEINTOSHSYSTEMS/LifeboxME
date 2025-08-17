<?php
$tdatalbapt_strategic_areas = array();
$tdatalbapt_strategic_areas[".searchableFields"] = array();
$tdatalbapt_strategic_areas[".ShortName"] = "lbapt_strategic_areas";
$tdatalbapt_strategic_areas[".OwnerID"] = "";
$tdatalbapt_strategic_areas[".OriginalTable"] = "public.lbapt_strategic_areas";


$tdatalbapt_strategic_areas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbapt_strategic_areas[".originalPagesByType"] = $tdatalbapt_strategic_areas[".pagesByType"];
$tdatalbapt_strategic_areas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbapt_strategic_areas[".originalPages"] = $tdatalbapt_strategic_areas[".pages"];
$tdatalbapt_strategic_areas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbapt_strategic_areas[".originalDefaultPages"] = $tdatalbapt_strategic_areas[".defaultPages"];

//	field labels
$fieldLabelslbapt_strategic_areas = array();
$fieldToolTipslbapt_strategic_areas = array();
$pageTitleslbapt_strategic_areas = array();
$placeHolderslbapt_strategic_areas = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_strategic_areas["English"] = array();
	$fieldToolTipslbapt_strategic_areas["English"] = array();
	$placeHolderslbapt_strategic_areas["English"] = array();
	$pageTitleslbapt_strategic_areas["English"] = array();
	$fieldLabelslbapt_strategic_areas["English"]["strategic_area_id"] = "Strategic Area Id";
	$fieldToolTipslbapt_strategic_areas["English"]["strategic_area_id"] = "";
	$placeHolderslbapt_strategic_areas["English"]["strategic_area_id"] = "";
	$fieldLabelslbapt_strategic_areas["English"]["area_name"] = "Area Name";
	$fieldToolTipslbapt_strategic_areas["English"]["area_name"] = "";
	$placeHolderslbapt_strategic_areas["English"]["area_name"] = "";
	$fieldLabelslbapt_strategic_areas["English"]["area_description"] = "Area Description";
	$fieldToolTipslbapt_strategic_areas["English"]["area_description"] = "";
	$placeHolderslbapt_strategic_areas["English"]["area_description"] = "";
	$fieldLabelslbapt_strategic_areas["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_strategic_areas["English"]["created_at"] = "";
	$placeHolderslbapt_strategic_areas["English"]["created_at"] = "";
	$fieldLabelslbapt_strategic_areas["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_strategic_areas["English"]["updated_at"] = "";
	$placeHolderslbapt_strategic_areas["English"]["updated_at"] = "";
	if (count($fieldToolTipslbapt_strategic_areas["English"]))
		$tdatalbapt_strategic_areas[".isUseToolTips"] = true;
}


	$tdatalbapt_strategic_areas[".NCSearch"] = true;



$tdatalbapt_strategic_areas[".shortTableName"] = "lbapt_strategic_areas";
$tdatalbapt_strategic_areas[".nSecOptions"] = 0;

$tdatalbapt_strategic_areas[".mainTableOwnerID"] = "";
$tdatalbapt_strategic_areas[".entityType"] = 0;
$tdatalbapt_strategic_areas[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_strategic_areas[".strOriginalTableName"] = "public.lbapt_strategic_areas";

	



$tdatalbapt_strategic_areas[".showAddInPopup"] = false;

$tdatalbapt_strategic_areas[".showEditInPopup"] = false;

$tdatalbapt_strategic_areas[".showViewInPopup"] = false;

$tdatalbapt_strategic_areas[".listAjax"] = false;
//	temporary
//$tdatalbapt_strategic_areas[".listAjax"] = false;

	$tdatalbapt_strategic_areas[".audit"] = false;

	$tdatalbapt_strategic_areas[".locking"] = false;


$pages = $tdatalbapt_strategic_areas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_strategic_areas[".edit"] = true;
	$tdatalbapt_strategic_areas[".afterEditAction"] = 1;
	$tdatalbapt_strategic_areas[".closePopupAfterEdit"] = 1;
	$tdatalbapt_strategic_areas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_strategic_areas[".add"] = true;
$tdatalbapt_strategic_areas[".afterAddAction"] = 1;
$tdatalbapt_strategic_areas[".closePopupAfterAdd"] = 1;
$tdatalbapt_strategic_areas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_strategic_areas[".list"] = true;
}



$tdatalbapt_strategic_areas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_strategic_areas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_strategic_areas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_strategic_areas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_strategic_areas[".printFriendly"] = true;
}



$tdatalbapt_strategic_areas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_strategic_areas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_strategic_areas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_strategic_areas[".isUseAjaxSuggest"] = true;





$tdatalbapt_strategic_areas[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_strategic_areas[".buttonsAdded"] = false;

$tdatalbapt_strategic_areas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_strategic_areas[".isUseTimeForSearch"] = false;


$tdatalbapt_strategic_areas[".badgeColor"] = "BC8F8F";


$tdatalbapt_strategic_areas[".allSearchFields"] = array();
$tdatalbapt_strategic_areas[".filterFields"] = array();
$tdatalbapt_strategic_areas[".requiredSearchFields"] = array();

$tdatalbapt_strategic_areas[".googleLikeFields"] = array();
$tdatalbapt_strategic_areas[".googleLikeFields"][] = "strategic_area_id";
$tdatalbapt_strategic_areas[".googleLikeFields"][] = "area_name";
$tdatalbapt_strategic_areas[".googleLikeFields"][] = "area_description";
$tdatalbapt_strategic_areas[".googleLikeFields"][] = "created_at";
$tdatalbapt_strategic_areas[".googleLikeFields"][] = "updated_at";



$tdatalbapt_strategic_areas[".tableType"] = "list";

$tdatalbapt_strategic_areas[".printerPageOrientation"] = 0;
$tdatalbapt_strategic_areas[".nPrinterPageScale"] = 100;

$tdatalbapt_strategic_areas[".nPrinterSplitRecords"] = 40;

$tdatalbapt_strategic_areas[".geocodingEnabled"] = false;










$tdatalbapt_strategic_areas[".pageSize"] = 20;

$tdatalbapt_strategic_areas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_strategic_areas[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_strategic_areas[".orderindexes"] = array();


$tdatalbapt_strategic_areas[".sqlHead"] = "SELECT strategic_area_id,  	area_name,  	area_description,  	created_at,  	updated_at";
$tdatalbapt_strategic_areas[".sqlFrom"] = "FROM \"public\".lbapt_strategic_areas";
$tdatalbapt_strategic_areas[".sqlWhereExpr"] = "";
$tdatalbapt_strategic_areas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_strategic_areas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_strategic_areas[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_strategic_areas[".highlightSearchResults"] = true;

$tableKeyslbapt_strategic_areas = array();
$tableKeyslbapt_strategic_areas[] = "strategic_area_id";
$tdatalbapt_strategic_areas[".Keys"] = $tableKeyslbapt_strategic_areas;


$tdatalbapt_strategic_areas[".hideMobileList"] = array();




//	strategic_area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "strategic_area_id";
	$fdata["GoodName"] = "strategic_area_id";
	$fdata["ownerTable"] = "public.lbapt_strategic_areas";
	$fdata["Label"] = GetFieldLabel("public_lbapt_strategic_areas","strategic_area_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatalbapt_strategic_areas["strategic_area_id"] = $fdata;
		$tdatalbapt_strategic_areas[".searchableFields"][] = "strategic_area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "public.lbapt_strategic_areas";
	$fdata["Label"] = GetFieldLabel("public_lbapt_strategic_areas","area_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "area_name";

		$fdata["sourceSingle"] = "area_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area_name";

	
	
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


	$tdatalbapt_strategic_areas["area_name"] = $fdata;
		$tdatalbapt_strategic_areas[".searchableFields"][] = "area_name";
//	area_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "area_description";
	$fdata["GoodName"] = "area_description";
	$fdata["ownerTable"] = "public.lbapt_strategic_areas";
	$fdata["Label"] = GetFieldLabel("public_lbapt_strategic_areas","area_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "area_description";

		$fdata["sourceSingle"] = "area_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area_description";

	
	
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


	$tdatalbapt_strategic_areas["area_description"] = $fdata;
		$tdatalbapt_strategic_areas[".searchableFields"][] = "area_description";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_strategic_areas";
	$fdata["Label"] = GetFieldLabel("public_lbapt_strategic_areas","created_at");
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


	$tdatalbapt_strategic_areas["created_at"] = $fdata;
		$tdatalbapt_strategic_areas[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_strategic_areas";
	$fdata["Label"] = GetFieldLabel("public_lbapt_strategic_areas","updated_at");
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


	$tdatalbapt_strategic_areas["updated_at"] = $fdata;
		$tdatalbapt_strategic_areas[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_strategic_areas"]=&$tdatalbapt_strategic_areas;
$field_labels["public_lbapt_strategic_areas"] = &$fieldLabelslbapt_strategic_areas;
$fieldToolTips["public_lbapt_strategic_areas"] = &$fieldToolTipslbapt_strategic_areas;
$placeHolders["public_lbapt_strategic_areas"] = &$placeHolderslbapt_strategic_areas;
$page_titles["public_lbapt_strategic_areas"] = &$pageTitleslbapt_strategic_areas;


changeTextControlsToDate( "public.lbapt_strategic_areas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_strategic_areas"] = array();
//	public.lbapt_annual_plan_tracker
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_annual_plan_tracker";
		$detailsParam["dOriginalTable"] = "public.lbapt_annual_plan_tracker";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_annual_plan_tracker";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_annual_plan_tracker");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_beginnings_fund
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_beginnings_fund";
		$detailsParam["dOriginalTable"] = "public.lbapt_beginnings_fund";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_beginnings_fund";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_beginnings_fund");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_communications
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_communications";
		$detailsParam["dOriginalTable"] = "public.lbapt_communications";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_communications";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_communications");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_cri
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_cri";
		$detailsParam["dOriginalTable"] = "public.lbapt_cri";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_cri";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_cri");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_dashboard_summary
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_dashboard_summary";
		$detailsParam["dOriginalTable"] = "public.lbapt_dashboard_summary";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_dashboard_summary";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_dashboard_summary");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_development
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_development";
		$detailsParam["dOriginalTable"] = "public.lbapt_development";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_development";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_development");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_elma
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_elma";
		$detailsParam["dOriginalTable"] = "public.lbapt_elma";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_elma";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_elma");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_governance
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_governance";
		$detailsParam["dOriginalTable"] = "public.lbapt_governance";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_governance";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_governance");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_kpis_on_track
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_kpis_on_track";
		$detailsParam["dOriginalTable"] = "public.lbapt_kpis_on_track";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_kpis_on_track";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_kpis_on_track");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_operations
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_operations";
		$detailsParam["dOriginalTable"] = "public.lbapt_operations";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_operations";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_operations");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_programs
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_programs";
		$detailsParam["dOriginalTable"] = "public.lbapt_programs";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_programs";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_programs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_sample_workflow
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_sample_workflow";
		$detailsParam["dOriginalTable"] = "public.lbapt_sample_workflow";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_sample_workflow";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_sample_workflow");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_finance
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_finance";
		$detailsParam["dOriginalTable"] = "public.lbapt_finance";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_finance";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_finance");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//	public.lbapt_hr
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_hr";
		$detailsParam["dOriginalTable"] = "public.lbapt_hr";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_hr";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_hr");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["masterKeys"][]="strategic_area_id";

				$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_strategic_areas"][$dIndex]["detailKeys"][]="strategic_area_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_strategic_areas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_strategic_areas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "strategic_area_id,  	area_name,  	area_description,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_strategic_areas";
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
	"m_strTable" => "public.lbapt_strategic_areas",
	"m_srcTableName" => "public.lbapt_strategic_areas"
));

$proto6["m_sql"] = "strategic_area_id";
$proto6["m_srcTableName"] = "public.lbapt_strategic_areas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "public.lbapt_strategic_areas",
	"m_srcTableName" => "public.lbapt_strategic_areas"
));

$proto8["m_sql"] = "area_name";
$proto8["m_srcTableName"] = "public.lbapt_strategic_areas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "area_description",
	"m_strTable" => "public.lbapt_strategic_areas",
	"m_srcTableName" => "public.lbapt_strategic_areas"
));

$proto10["m_sql"] = "area_description";
$proto10["m_srcTableName"] = "public.lbapt_strategic_areas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_strategic_areas",
	"m_srcTableName" => "public.lbapt_strategic_areas"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.lbapt_strategic_areas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_strategic_areas",
	"m_srcTableName" => "public.lbapt_strategic_areas"
));

$proto14["m_sql"] = "updated_at";
$proto14["m_srcTableName"] = "public.lbapt_strategic_areas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.lbapt_strategic_areas";
$proto17["m_srcTableName"] = "public.lbapt_strategic_areas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "strategic_area_id";
$proto17["m_columns"][] = "area_name";
$proto17["m_columns"][] = "area_description";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".lbapt_strategic_areas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.lbapt_strategic_areas";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbapt_strategic_areas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_strategic_areas = createSqlQuery_lbapt_strategic_areas();


	
				;

					

$tdatalbapt_strategic_areas[".sqlquery"] = $queryData_lbapt_strategic_areas;



$tdatalbapt_strategic_areas[".hasEvents"] = false;

?>