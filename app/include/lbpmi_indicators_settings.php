<?php
$tdatalbpmi_indicators = array();
$tdatalbpmi_indicators[".searchableFields"] = array();
$tdatalbpmi_indicators[".ShortName"] = "lbpmi_indicators";
$tdatalbpmi_indicators[".OwnerID"] = "";
$tdatalbpmi_indicators[".OriginalTable"] = "public.lbpmi_indicators";


$tdatalbpmi_indicators[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_indicators[".originalPagesByType"] = $tdatalbpmi_indicators[".pagesByType"];
$tdatalbpmi_indicators[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_indicators[".originalPages"] = $tdatalbpmi_indicators[".pages"];
$tdatalbpmi_indicators[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_indicators[".originalDefaultPages"] = $tdatalbpmi_indicators[".defaultPages"];

//	field labels
$fieldLabelslbpmi_indicators = array();
$fieldToolTipslbpmi_indicators = array();
$pageTitleslbpmi_indicators = array();
$placeHolderslbpmi_indicators = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_indicators["English"] = array();
	$fieldToolTipslbpmi_indicators["English"] = array();
	$placeHolderslbpmi_indicators["English"] = array();
	$pageTitleslbpmi_indicators["English"] = array();
	$fieldLabelslbpmi_indicators["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipslbpmi_indicators["English"]["indicator_id"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_id"] = "";
	$fieldLabelslbpmi_indicators["English"]["result_area"] = "Result Area";
	$fieldToolTipslbpmi_indicators["English"]["result_area"] = "";
	$placeHolderslbpmi_indicators["English"]["result_area"] = "";
	$fieldLabelslbpmi_indicators["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipslbpmi_indicators["English"]["indicator_name"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_name"] = "";
	$fieldLabelslbpmi_indicators["English"]["indicator_description"] = "Indicator Description";
	$fieldToolTipslbpmi_indicators["English"]["indicator_description"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_description"] = "";
	$fieldLabelslbpmi_indicators["English"]["indicator_type"] = "Indicator Type";
	$fieldToolTipslbpmi_indicators["English"]["indicator_type"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_type"] = "";
	$fieldLabelslbpmi_indicators["English"]["unit_of_measurement"] = "Unit Of Measurement";
	$fieldToolTipslbpmi_indicators["English"]["unit_of_measurement"] = "";
	$placeHolderslbpmi_indicators["English"]["unit_of_measurement"] = "";
	$fieldLabelslbpmi_indicators["English"]["formula"] = "Formula";
	$fieldToolTipslbpmi_indicators["English"]["formula"] = "";
	$placeHolderslbpmi_indicators["English"]["formula"] = "";
	$fieldLabelslbpmi_indicators["English"]["reporting_frequency"] = "Reporting Frequency";
	$fieldToolTipslbpmi_indicators["English"]["reporting_frequency"] = "";
	$placeHolderslbpmi_indicators["English"]["reporting_frequency"] = "";
	$fieldLabelslbpmi_indicators["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_indicators["English"]["created_at"] = "";
	$placeHolderslbpmi_indicators["English"]["created_at"] = "";
	$fieldLabelslbpmi_indicators["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbpmi_indicators["English"]["updated_at"] = "";
	$placeHolderslbpmi_indicators["English"]["updated_at"] = "";
	if (count($fieldToolTipslbpmi_indicators["English"]))
		$tdatalbpmi_indicators[".isUseToolTips"] = true;
}


	$tdatalbpmi_indicators[".NCSearch"] = true;



$tdatalbpmi_indicators[".shortTableName"] = "lbpmi_indicators";
$tdatalbpmi_indicators[".nSecOptions"] = 0;

$tdatalbpmi_indicators[".mainTableOwnerID"] = "";
$tdatalbpmi_indicators[".entityType"] = 0;
$tdatalbpmi_indicators[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_indicators[".strOriginalTableName"] = "public.lbpmi_indicators";

	



$tdatalbpmi_indicators[".showAddInPopup"] = false;

$tdatalbpmi_indicators[".showEditInPopup"] = false;

$tdatalbpmi_indicators[".showViewInPopup"] = false;

$tdatalbpmi_indicators[".listAjax"] = false;
//	temporary
//$tdatalbpmi_indicators[".listAjax"] = false;

	$tdatalbpmi_indicators[".audit"] = false;

	$tdatalbpmi_indicators[".locking"] = false;


$pages = $tdatalbpmi_indicators[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_indicators[".edit"] = true;
	$tdatalbpmi_indicators[".afterEditAction"] = 1;
	$tdatalbpmi_indicators[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_indicators[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_indicators[".add"] = true;
$tdatalbpmi_indicators[".afterAddAction"] = 1;
$tdatalbpmi_indicators[".closePopupAfterAdd"] = 1;
$tdatalbpmi_indicators[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_indicators[".list"] = true;
}



$tdatalbpmi_indicators[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_indicators[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_indicators[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_indicators[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_indicators[".printFriendly"] = true;
}



$tdatalbpmi_indicators[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_indicators[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_indicators[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_indicators[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_indicators[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_indicators[".buttonsAdded"] = false;

$tdatalbpmi_indicators[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_indicators[".isUseTimeForSearch"] = false;


$tdatalbpmi_indicators[".badgeColor"] = "6DA5C8";


$tdatalbpmi_indicators[".allSearchFields"] = array();
$tdatalbpmi_indicators[".filterFields"] = array();
$tdatalbpmi_indicators[".requiredSearchFields"] = array();

$tdatalbpmi_indicators[".googleLikeFields"] = array();
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_indicators[".googleLikeFields"][] = "result_area";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_name";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_description";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_type";
$tdatalbpmi_indicators[".googleLikeFields"][] = "unit_of_measurement";
$tdatalbpmi_indicators[".googleLikeFields"][] = "formula";
$tdatalbpmi_indicators[".googleLikeFields"][] = "reporting_frequency";
$tdatalbpmi_indicators[".googleLikeFields"][] = "created_at";
$tdatalbpmi_indicators[".googleLikeFields"][] = "updated_at";



$tdatalbpmi_indicators[".tableType"] = "list";

$tdatalbpmi_indicators[".printerPageOrientation"] = 0;
$tdatalbpmi_indicators[".nPrinterPageScale"] = 100;

$tdatalbpmi_indicators[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_indicators[".geocodingEnabled"] = false;










$tdatalbpmi_indicators[".pageSize"] = 20;

$tdatalbpmi_indicators[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_indicators[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_indicators[".orderindexes"] = array();


$tdatalbpmi_indicators[".sqlHead"] = "SELECT indicator_id,  	result_area,  	indicator_name,  	indicator_description,  	indicator_type,  	unit_of_measurement,  	formula,  	reporting_frequency,  	created_at,  	updated_at";
$tdatalbpmi_indicators[".sqlFrom"] = "FROM \"public\".lbpmi_indicators";
$tdatalbpmi_indicators[".sqlWhereExpr"] = "";
$tdatalbpmi_indicators[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_indicators[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_indicators[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_indicators[".highlightSearchResults"] = true;

$tableKeyslbpmi_indicators = array();
$tableKeyslbpmi_indicators[] = "indicator_id";
$tdatalbpmi_indicators[".Keys"] = $tableKeyslbpmi_indicators;


$tdatalbpmi_indicators[".hideMobileList"] = array();




//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","indicator_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_id";

	
	
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


	$tdatalbpmi_indicators["indicator_id"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "indicator_id";
//	result_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "result_area";
	$fdata["GoodName"] = "result_area";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","result_area");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "result_area";

		$fdata["sourceSingle"] = "result_area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "result_area";

	
	
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


	$tdatalbpmi_indicators["result_area"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "result_area";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","indicator_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_name";

		$fdata["sourceSingle"] = "indicator_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_name";

	
	
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


	$tdatalbpmi_indicators["indicator_name"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "indicator_name";
//	indicator_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "indicator_description";
	$fdata["GoodName"] = "indicator_description";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","indicator_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "indicator_description";

		$fdata["sourceSingle"] = "indicator_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_description";

	
	
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


	$tdatalbpmi_indicators["indicator_description"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "indicator_description";
//	indicator_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "indicator_type";
	$fdata["GoodName"] = "indicator_type";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","indicator_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_type";

		$fdata["sourceSingle"] = "indicator_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_type";

	
	
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


	$tdatalbpmi_indicators["indicator_type"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "indicator_type";
//	unit_of_measurement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit_of_measurement";
	$fdata["GoodName"] = "unit_of_measurement";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","unit_of_measurement");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unit_of_measurement";

		$fdata["sourceSingle"] = "unit_of_measurement";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit_of_measurement";

	
	
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
	$edata["LookupTable"] = "public.unit_of_measurement";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "uom_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "uom_name";

	

	
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


	$tdatalbpmi_indicators["unit_of_measurement"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "unit_of_measurement";
//	formula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "formula";
	$fdata["GoodName"] = "formula";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","formula");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "formula";

		$fdata["sourceSingle"] = "formula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formula";

	
	
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


	$tdatalbpmi_indicators["formula"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "formula";
//	reporting_frequency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reporting_frequency";
	$fdata["GoodName"] = "reporting_frequency";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","reporting_frequency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reporting_frequency";

		$fdata["sourceSingle"] = "reporting_frequency";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reporting_frequency";

	
	
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
	$edata["LookupTable"] = "public.period_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "period_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "period_name";

	

	
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


	$tdatalbpmi_indicators["reporting_frequency"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "reporting_frequency";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","created_at");
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


	$tdatalbpmi_indicators["created_at"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","updated_at");
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


	$tdatalbpmi_indicators["updated_at"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "updated_at";


$tables_data["public.lbpmi_indicators"]=&$tdatalbpmi_indicators;
$field_labels["public_lbpmi_indicators"] = &$fieldLabelslbpmi_indicators;
$fieldToolTips["public_lbpmi_indicators"] = &$fieldToolTipslbpmi_indicators;
$placeHolders["public_lbpmi_indicators"] = &$placeHolderslbpmi_indicators;
$page_titles["public_lbpmi_indicators"] = &$pageTitleslbpmi_indicators;


changeTextControlsToDate( "public.lbpmi_indicators" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_indicators"] = array();
//	public.lbpmi_calculation_log
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbpmi_calculation_log";
		$detailsParam["dOriginalTable"] = "public.lbpmi_calculation_log";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbpmi_calculation_log";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbpmi_calculation_log");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbpmi_indicators"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbpmi_indicators"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbpmi_indicators"][$dIndex]["masterKeys"][]="indicator_id";

				$detailsTablesData["public.lbpmi_indicators"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbpmi_indicators"][$dIndex]["detailKeys"][]="indicator_id";
//	public.lbpmi_indicator_actuals
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbpmi_indicator_actuals";
		$detailsParam["dOriginalTable"] = "public.lbpmi_indicator_actuals";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbpmi_indicator_actuals";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbpmi_indicator_actuals");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbpmi_indicators"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbpmi_indicators"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbpmi_indicators"][$dIndex]["masterKeys"][]="indicator_id";

				$detailsTablesData["public.lbpmi_indicators"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbpmi_indicators"][$dIndex]["detailKeys"][]="indicator_id";
//	public.lbpmi_indicator_targets
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbpmi_indicator_targets";
		$detailsParam["dOriginalTable"] = "public.lbpmi_indicator_targets";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbpmi_indicator_targets";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbpmi_indicator_targets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lbpmi_indicators"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lbpmi_indicators"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lbpmi_indicators"][$dIndex]["masterKeys"][]="indicator_id";

				$detailsTablesData["public.lbpmi_indicators"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lbpmi_indicators"][$dIndex]["detailKeys"][]="indicator_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_indicators"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_indicators()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indicator_id,  	result_area,  	indicator_name,  	indicator_description,  	indicator_type,  	unit_of_measurement,  	formula,  	reporting_frequency,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_indicators";
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
	"m_strName" => "indicator_id",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto6["m_sql"] = "indicator_id";
$proto6["m_srcTableName"] = "public.lbpmi_indicators";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "result_area",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto8["m_sql"] = "result_area";
$proto8["m_srcTableName"] = "public.lbpmi_indicators";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto10["m_sql"] = "indicator_name";
$proto10["m_srcTableName"] = "public.lbpmi_indicators";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_description",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto12["m_sql"] = "indicator_description";
$proto12["m_srcTableName"] = "public.lbpmi_indicators";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_type",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto14["m_sql"] = "indicator_type";
$proto14["m_srcTableName"] = "public.lbpmi_indicators";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_of_measurement",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto16["m_sql"] = "unit_of_measurement";
$proto16["m_srcTableName"] = "public.lbpmi_indicators";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "formula",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto18["m_sql"] = "formula";
$proto18["m_srcTableName"] = "public.lbpmi_indicators";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_frequency",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto20["m_sql"] = "reporting_frequency";
$proto20["m_srcTableName"] = "public.lbpmi_indicators";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto22["m_sql"] = "created_at";
$proto22["m_srcTableName"] = "public.lbpmi_indicators";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto24["m_sql"] = "updated_at";
$proto24["m_srcTableName"] = "public.lbpmi_indicators";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.lbpmi_indicators";
$proto27["m_srcTableName"] = "public.lbpmi_indicators";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "indicator_id";
$proto27["m_columns"][] = "result_area";
$proto27["m_columns"][] = "indicator_name";
$proto27["m_columns"][] = "indicator_description";
$proto27["m_columns"][] = "indicator_type";
$proto27["m_columns"][] = "unit_of_measurement";
$proto27["m_columns"][] = "formula";
$proto27["m_columns"][] = "reporting_frequency";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "updated_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".lbpmi_indicators";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.lbpmi_indicators";
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
$proto0["m_srcTableName"]="public.lbpmi_indicators";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_indicators = createSqlQuery_lbpmi_indicators();


	
				;

										

$tdatalbpmi_indicators[".sqlquery"] = $queryData_lbpmi_indicators;



$tdatalbpmi_indicators[".hasEvents"] = false;

?>