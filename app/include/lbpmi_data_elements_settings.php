<?php
$tdatalbpmi_data_elements = array();
$tdatalbpmi_data_elements[".searchableFields"] = array();
$tdatalbpmi_data_elements[".ShortName"] = "lbpmi_data_elements";
$tdatalbpmi_data_elements[".OwnerID"] = "";
$tdatalbpmi_data_elements[".OriginalTable"] = "public.lbpmi_data_elements";


$tdatalbpmi_data_elements[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_data_elements[".originalPagesByType"] = $tdatalbpmi_data_elements[".pagesByType"];
$tdatalbpmi_data_elements[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_data_elements[".originalPages"] = $tdatalbpmi_data_elements[".pages"];
$tdatalbpmi_data_elements[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_data_elements[".originalDefaultPages"] = $tdatalbpmi_data_elements[".defaultPages"];

//	field labels
$fieldLabelslbpmi_data_elements = array();
$fieldToolTipslbpmi_data_elements = array();
$pageTitleslbpmi_data_elements = array();
$placeHolderslbpmi_data_elements = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_data_elements["English"] = array();
	$fieldToolTipslbpmi_data_elements["English"] = array();
	$placeHolderslbpmi_data_elements["English"] = array();
	$pageTitleslbpmi_data_elements["English"] = array();
	$fieldLabelslbpmi_data_elements["English"]["data_element_id"] = "Data Element Id";
	$fieldToolTipslbpmi_data_elements["English"]["data_element_id"] = "";
	$placeHolderslbpmi_data_elements["English"]["data_element_id"] = "";
	$fieldLabelslbpmi_data_elements["English"]["data_element_name"] = "Data Element Name";
	$fieldToolTipslbpmi_data_elements["English"]["data_element_name"] = "";
	$placeHolderslbpmi_data_elements["English"]["data_element_name"] = "";
	$fieldLabelslbpmi_data_elements["English"]["data_element_description"] = "Data Element Description";
	$fieldToolTipslbpmi_data_elements["English"]["data_element_description"] = "";
	$placeHolderslbpmi_data_elements["English"]["data_element_description"] = "";
	$fieldLabelslbpmi_data_elements["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_data_elements["English"]["created_at"] = "";
	$placeHolderslbpmi_data_elements["English"]["created_at"] = "";
	$fieldLabelslbpmi_data_elements["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbpmi_data_elements["English"]["updated_at"] = "";
	$placeHolderslbpmi_data_elements["English"]["updated_at"] = "";
	if (count($fieldToolTipslbpmi_data_elements["English"]))
		$tdatalbpmi_data_elements[".isUseToolTips"] = true;
}


	$tdatalbpmi_data_elements[".NCSearch"] = true;



$tdatalbpmi_data_elements[".shortTableName"] = "lbpmi_data_elements";
$tdatalbpmi_data_elements[".nSecOptions"] = 0;

$tdatalbpmi_data_elements[".mainTableOwnerID"] = "";
$tdatalbpmi_data_elements[".entityType"] = 0;
$tdatalbpmi_data_elements[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_data_elements[".strOriginalTableName"] = "public.lbpmi_data_elements";

	



$tdatalbpmi_data_elements[".showAddInPopup"] = false;

$tdatalbpmi_data_elements[".showEditInPopup"] = false;

$tdatalbpmi_data_elements[".showViewInPopup"] = false;

$tdatalbpmi_data_elements[".listAjax"] = false;
//	temporary
//$tdatalbpmi_data_elements[".listAjax"] = false;

	$tdatalbpmi_data_elements[".audit"] = false;

	$tdatalbpmi_data_elements[".locking"] = false;


$pages = $tdatalbpmi_data_elements[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_data_elements[".edit"] = true;
	$tdatalbpmi_data_elements[".afterEditAction"] = 1;
	$tdatalbpmi_data_elements[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_data_elements[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_data_elements[".add"] = true;
$tdatalbpmi_data_elements[".afterAddAction"] = 1;
$tdatalbpmi_data_elements[".closePopupAfterAdd"] = 1;
$tdatalbpmi_data_elements[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_data_elements[".list"] = true;
}



$tdatalbpmi_data_elements[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_data_elements[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_data_elements[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_data_elements[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_data_elements[".printFriendly"] = true;
}



$tdatalbpmi_data_elements[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_data_elements[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_data_elements[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_data_elements[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_data_elements[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_data_elements[".buttonsAdded"] = false;

$tdatalbpmi_data_elements[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_data_elements[".isUseTimeForSearch"] = false;


$tdatalbpmi_data_elements[".badgeColor"] = "9ACD32";


$tdatalbpmi_data_elements[".allSearchFields"] = array();
$tdatalbpmi_data_elements[".filterFields"] = array();
$tdatalbpmi_data_elements[".requiredSearchFields"] = array();

$tdatalbpmi_data_elements[".googleLikeFields"] = array();
$tdatalbpmi_data_elements[".googleLikeFields"][] = "data_element_id";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "data_element_name";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "data_element_description";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "created_at";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "updated_at";



$tdatalbpmi_data_elements[".tableType"] = "list";

$tdatalbpmi_data_elements[".printerPageOrientation"] = 0;
$tdatalbpmi_data_elements[".nPrinterPageScale"] = 100;

$tdatalbpmi_data_elements[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_data_elements[".geocodingEnabled"] = false;










$tdatalbpmi_data_elements[".pageSize"] = 20;

$tdatalbpmi_data_elements[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_data_elements[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_data_elements[".orderindexes"] = array();


$tdatalbpmi_data_elements[".sqlHead"] = "SELECT data_element_id,  	data_element_name,  	data_element_description,  	created_at,  	updated_at";
$tdatalbpmi_data_elements[".sqlFrom"] = "FROM \"public\".lbpmi_data_elements";
$tdatalbpmi_data_elements[".sqlWhereExpr"] = "";
$tdatalbpmi_data_elements[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_data_elements[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_data_elements[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_data_elements[".highlightSearchResults"] = true;

$tableKeyslbpmi_data_elements = array();
$tableKeyslbpmi_data_elements[] = "data_element_id";
$tdatalbpmi_data_elements[".Keys"] = $tableKeyslbpmi_data_elements;


$tdatalbpmi_data_elements[".hideMobileList"] = array();




//	data_element_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "data_element_id";
	$fdata["GoodName"] = "data_element_id";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","data_element_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "data_element_id";

		$fdata["sourceSingle"] = "data_element_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_element_id";

	
	
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


	$tdatalbpmi_data_elements["data_element_id"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "data_element_id";
//	data_element_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data_element_name";
	$fdata["GoodName"] = "data_element_name";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","data_element_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_element_name";

		$fdata["sourceSingle"] = "data_element_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_element_name";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatalbpmi_data_elements["data_element_name"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "data_element_name";
//	data_element_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_element_description";
	$fdata["GoodName"] = "data_element_description";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","data_element_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "data_element_description";

		$fdata["sourceSingle"] = "data_element_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_element_description";

	
	
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


	$tdatalbpmi_data_elements["data_element_description"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "data_element_description";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","created_at");
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


	$tdatalbpmi_data_elements["created_at"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","updated_at");
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


	$tdatalbpmi_data_elements["updated_at"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "updated_at";


$tables_data["public.lbpmi_data_elements"]=&$tdatalbpmi_data_elements;
$field_labels["public_lbpmi_data_elements"] = &$fieldLabelslbpmi_data_elements;
$fieldToolTips["public_lbpmi_data_elements"] = &$fieldToolTipslbpmi_data_elements;
$placeHolders["public_lbpmi_data_elements"] = &$placeHolderslbpmi_data_elements;
$page_titles["public_lbpmi_data_elements"] = &$pageTitleslbpmi_data_elements;


changeTextControlsToDate( "public.lbpmi_data_elements" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_data_elements"] = array();
//	public.lbpmi_datasets
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbpmi_datasets";
		$detailsParam["dOriginalTable"] = "public.lbpmi_datasets";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbpmi_datasets";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbpmi_datasets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbpmi_data_elements"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbpmi_data_elements"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbpmi_data_elements"][$dIndex]["masterKeys"][]="data_element_id";

				$detailsTablesData["public.lbpmi_data_elements"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbpmi_data_elements"][$dIndex]["detailKeys"][]="data_element_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_data_elements"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_data_elements()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "data_element_id,  	data_element_name,  	data_element_description,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_data_elements";
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
	"m_strName" => "data_element_id",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto6["m_sql"] = "data_element_id";
$proto6["m_srcTableName"] = "public.lbpmi_data_elements";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data_element_name",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto8["m_sql"] = "data_element_name";
$proto8["m_srcTableName"] = "public.lbpmi_data_elements";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_element_description",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto10["m_sql"] = "data_element_description";
$proto10["m_srcTableName"] = "public.lbpmi_data_elements";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.lbpmi_data_elements";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto14["m_sql"] = "updated_at";
$proto14["m_srcTableName"] = "public.lbpmi_data_elements";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.lbpmi_data_elements";
$proto17["m_srcTableName"] = "public.lbpmi_data_elements";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "data_element_id";
$proto17["m_columns"][] = "data_element_name";
$proto17["m_columns"][] = "data_element_description";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".lbpmi_data_elements";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.lbpmi_data_elements";
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
$proto0["m_srcTableName"]="public.lbpmi_data_elements";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_data_elements = createSqlQuery_lbpmi_data_elements();


	
				;

					

$tdatalbpmi_data_elements[".sqlquery"] = $queryData_lbpmi_data_elements;



$tdatalbpmi_data_elements[".hasEvents"] = false;

?>