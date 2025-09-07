<?php
$tdatalbapt_status = array();
$tdatalbapt_status[".searchableFields"] = array();
$tdatalbapt_status[".ShortName"] = "lbapt_status";
$tdatalbapt_status[".OwnerID"] = "";
$tdatalbapt_status[".OriginalTable"] = "public.lbapt_status";


$tdatalbapt_status[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbapt_status[".originalPagesByType"] = $tdatalbapt_status[".pagesByType"];
$tdatalbapt_status[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbapt_status[".originalPages"] = $tdatalbapt_status[".pages"];
$tdatalbapt_status[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbapt_status[".originalDefaultPages"] = $tdatalbapt_status[".defaultPages"];

//	field labels
$fieldLabelslbapt_status = array();
$fieldToolTipslbapt_status = array();
$pageTitleslbapt_status = array();
$placeHolderslbapt_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbapt_status["English"] = array();
	$fieldToolTipslbapt_status["English"] = array();
	$placeHolderslbapt_status["English"] = array();
	$pageTitleslbapt_status["English"] = array();
	$fieldLabelslbapt_status["English"]["status_id"] = "Status Id";
	$fieldToolTipslbapt_status["English"]["status_id"] = "";
	$placeHolderslbapt_status["English"]["status_id"] = "";
	$fieldLabelslbapt_status["English"]["status_name"] = "Status Name";
	$fieldToolTipslbapt_status["English"]["status_name"] = "";
	$placeHolderslbapt_status["English"]["status_name"] = "";
	$fieldLabelslbapt_status["English"]["status_description"] = "Status Description";
	$fieldToolTipslbapt_status["English"]["status_description"] = "";
	$placeHolderslbapt_status["English"]["status_description"] = "";
	$fieldLabelslbapt_status["English"]["created_at"] = "Created At";
	$fieldToolTipslbapt_status["English"]["created_at"] = "";
	$placeHolderslbapt_status["English"]["created_at"] = "";
	$fieldLabelslbapt_status["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbapt_status["English"]["updated_at"] = "";
	$placeHolderslbapt_status["English"]["updated_at"] = "";
	if (count($fieldToolTipslbapt_status["English"]))
		$tdatalbapt_status[".isUseToolTips"] = true;
}


	$tdatalbapt_status[".NCSearch"] = true;



$tdatalbapt_status[".shortTableName"] = "lbapt_status";
$tdatalbapt_status[".nSecOptions"] = 0;

$tdatalbapt_status[".mainTableOwnerID"] = "";
$tdatalbapt_status[".entityType"] = 0;
$tdatalbapt_status[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbapt_status[".strOriginalTableName"] = "public.lbapt_status";

	



$tdatalbapt_status[".showAddInPopup"] = false;

$tdatalbapt_status[".showEditInPopup"] = false;

$tdatalbapt_status[".showViewInPopup"] = false;

$tdatalbapt_status[".listAjax"] = false;
//	temporary
//$tdatalbapt_status[".listAjax"] = false;

	$tdatalbapt_status[".audit"] = true;

	$tdatalbapt_status[".locking"] = false;


$pages = $tdatalbapt_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbapt_status[".edit"] = true;
	$tdatalbapt_status[".afterEditAction"] = 1;
	$tdatalbapt_status[".closePopupAfterEdit"] = 1;
	$tdatalbapt_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbapt_status[".add"] = true;
$tdatalbapt_status[".afterAddAction"] = 1;
$tdatalbapt_status[".closePopupAfterAdd"] = 1;
$tdatalbapt_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbapt_status[".list"] = true;
}



$tdatalbapt_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbapt_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbapt_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbapt_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbapt_status[".printFriendly"] = true;
}



$tdatalbapt_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbapt_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbapt_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbapt_status[".isUseAjaxSuggest"] = true;





$tdatalbapt_status[".ajaxCodeSnippetAdded"] = false;

$tdatalbapt_status[".buttonsAdded"] = false;

$tdatalbapt_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbapt_status[".isUseTimeForSearch"] = false;


$tdatalbapt_status[".badgeColor"] = "E67349";


$tdatalbapt_status[".allSearchFields"] = array();
$tdatalbapt_status[".filterFields"] = array();
$tdatalbapt_status[".requiredSearchFields"] = array();

$tdatalbapt_status[".googleLikeFields"] = array();
$tdatalbapt_status[".googleLikeFields"][] = "status_id";
$tdatalbapt_status[".googleLikeFields"][] = "status_name";
$tdatalbapt_status[".googleLikeFields"][] = "status_description";
$tdatalbapt_status[".googleLikeFields"][] = "created_at";
$tdatalbapt_status[".googleLikeFields"][] = "updated_at";



$tdatalbapt_status[".tableType"] = "list";

$tdatalbapt_status[".printerPageOrientation"] = 0;
$tdatalbapt_status[".nPrinterPageScale"] = 100;

$tdatalbapt_status[".nPrinterSplitRecords"] = 40;

$tdatalbapt_status[".geocodingEnabled"] = false;










$tdatalbapt_status[".pageSize"] = 20;

$tdatalbapt_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbapt_status[".strOrderBy"] = $tstrOrderBy;

$tdatalbapt_status[".orderindexes"] = array();


$tdatalbapt_status[".sqlHead"] = "SELECT status_id,  	status_name,  	status_description,  	created_at,  	updated_at";
$tdatalbapt_status[".sqlFrom"] = "FROM \"public\".lbapt_status";
$tdatalbapt_status[".sqlWhereExpr"] = "";
$tdatalbapt_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbapt_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbapt_status[".arrGroupsPerPage"] = $arrGPP;

$tdatalbapt_status[".highlightSearchResults"] = true;

$tableKeyslbapt_status = array();
$tableKeyslbapt_status[] = "status_id";
$tdatalbapt_status[".Keys"] = $tableKeyslbapt_status;


$tdatalbapt_status[".hideMobileList"] = array();




//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "public.lbapt_status";
	$fdata["Label"] = GetFieldLabel("public_lbapt_status","status_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatalbapt_status["status_id"] = $fdata;
		$tdatalbapt_status[".searchableFields"][] = "status_id";
//	status_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status_name";
	$fdata["GoodName"] = "status_name";
	$fdata["ownerTable"] = "public.lbapt_status";
	$fdata["Label"] = GetFieldLabel("public_lbapt_status","status_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_name";

		$fdata["sourceSingle"] = "status_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatalbapt_status["status_name"] = $fdata;
		$tdatalbapt_status[".searchableFields"][] = "status_name";
//	status_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status_description";
	$fdata["GoodName"] = "status_description";
	$fdata["ownerTable"] = "public.lbapt_status";
	$fdata["Label"] = GetFieldLabel("public_lbapt_status","status_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "status_description";

		$fdata["sourceSingle"] = "status_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_description";

	
	
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


	$tdatalbapt_status["status_description"] = $fdata;
		$tdatalbapt_status[".searchableFields"][] = "status_description";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbapt_status";
	$fdata["Label"] = GetFieldLabel("public_lbapt_status","created_at");
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


	$tdatalbapt_status["created_at"] = $fdata;
		$tdatalbapt_status[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbapt_status";
	$fdata["Label"] = GetFieldLabel("public_lbapt_status","updated_at");
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


	$tdatalbapt_status["updated_at"] = $fdata;
		$tdatalbapt_status[".searchableFields"][] = "updated_at";


$tables_data["public.lbapt_status"]=&$tdatalbapt_status;
$field_labels["public_lbapt_status"] = &$fieldLabelslbapt_status;
$fieldToolTips["public_lbapt_status"] = &$fieldToolTipslbapt_status;
$placeHolders["public_lbapt_status"] = &$placeHolderslbapt_status;
$page_titles["public_lbapt_status"] = &$pageTitleslbapt_status;


changeTextControlsToDate( "public.lbapt_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbapt_status"] = array();
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


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
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


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
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


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
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


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_development
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_development";
		$detailsParam["dOriginalTable"] = "public.lbapt_development";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_development";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_development");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_elma
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_elma";
		$detailsParam["dOriginalTable"] = "public.lbapt_elma";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_elma";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_elma");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_governance
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_governance";
		$detailsParam["dOriginalTable"] = "public.lbapt_governance";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_governance";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_governance");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_operations
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_operations";
		$detailsParam["dOriginalTable"] = "public.lbapt_operations";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_operations";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_operations");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_programs
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_programs";
		$detailsParam["dOriginalTable"] = "public.lbapt_programs";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_programs";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_programs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_sample_workflow
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_sample_workflow";
		$detailsParam["dOriginalTable"] = "public.lbapt_sample_workflow";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_sample_workflow";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_sample_workflow");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_finance
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_finance";
		$detailsParam["dOriginalTable"] = "public.lbapt_finance";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_finance";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_finance");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//	public.lbapt_hr
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbapt_hr";
		$detailsParam["dOriginalTable"] = "public.lbapt_hr";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbapt_hr";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbapt_hr");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbapt_status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["masterKeys"][]="status_id";

				$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbapt_status"][$dIndex]["detailKeys"][]="status_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbapt_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbapt_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "status_id,  	status_name,  	status_description,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbapt_status";
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
	"m_strName" => "status_id",
	"m_strTable" => "public.lbapt_status",
	"m_srcTableName" => "public.lbapt_status"
));

$proto6["m_sql"] = "status_id";
$proto6["m_srcTableName"] = "public.lbapt_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name",
	"m_strTable" => "public.lbapt_status",
	"m_srcTableName" => "public.lbapt_status"
));

$proto8["m_sql"] = "status_name";
$proto8["m_srcTableName"] = "public.lbapt_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status_description",
	"m_strTable" => "public.lbapt_status",
	"m_srcTableName" => "public.lbapt_status"
));

$proto10["m_sql"] = "status_description";
$proto10["m_srcTableName"] = "public.lbapt_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbapt_status",
	"m_srcTableName" => "public.lbapt_status"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.lbapt_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbapt_status",
	"m_srcTableName" => "public.lbapt_status"
));

$proto14["m_sql"] = "updated_at";
$proto14["m_srcTableName"] = "public.lbapt_status";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.lbapt_status";
$proto17["m_srcTableName"] = "public.lbapt_status";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "status_id";
$proto17["m_columns"][] = "status_name";
$proto17["m_columns"][] = "status_description";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".lbapt_status";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.lbapt_status";
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
$proto0["m_srcTableName"]="public.lbapt_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbapt_status = createSqlQuery_lbapt_status();


	
				;

					

$tdatalbapt_status[".sqlquery"] = $queryData_lbapt_status;



$tdatalbapt_status[".hasEvents"] = false;

?>