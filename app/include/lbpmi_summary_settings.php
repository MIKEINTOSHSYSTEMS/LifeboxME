<?php
$tdatalbpmi_summary = array();
$tdatalbpmi_summary[".searchableFields"] = array();
$tdatalbpmi_summary[".ShortName"] = "lbpmi_summary";
$tdatalbpmi_summary[".OwnerID"] = "";
$tdatalbpmi_summary[".OriginalTable"] = "public.lbpmi_summary";


$tdatalbpmi_summary[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalbpmi_summary[".originalPagesByType"] = $tdatalbpmi_summary[".pagesByType"];
$tdatalbpmi_summary[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalbpmi_summary[".originalPages"] = $tdatalbpmi_summary[".pages"];
$tdatalbpmi_summary[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalbpmi_summary[".originalDefaultPages"] = $tdatalbpmi_summary[".defaultPages"];

//	field labels
$fieldLabelslbpmi_summary = array();
$fieldToolTipslbpmi_summary = array();
$pageTitleslbpmi_summary = array();
$placeHolderslbpmi_summary = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_summary["English"] = array();
	$fieldToolTipslbpmi_summary["English"] = array();
	$placeHolderslbpmi_summary["English"] = array();
	$pageTitleslbpmi_summary["English"] = array();
	$fieldLabelslbpmi_summary["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipslbpmi_summary["English"]["indicator_id"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_id"] = "";
	$fieldLabelslbpmi_summary["English"]["result_area"] = "Result Area";
	$fieldToolTipslbpmi_summary["English"]["result_area"] = "";
	$placeHolderslbpmi_summary["English"]["result_area"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipslbpmi_summary["English"]["indicator_name"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_name"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_description"] = "Indicator Description";
	$fieldToolTipslbpmi_summary["English"]["indicator_description"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_description"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_type"] = "Indicator Type";
	$fieldToolTipslbpmi_summary["English"]["indicator_type"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_type"] = "";
	$fieldLabelslbpmi_summary["English"]["unit_of_measurement"] = "Unit Of Measurement";
	$fieldToolTipslbpmi_summary["English"]["unit_of_measurement"] = "";
	$placeHolderslbpmi_summary["English"]["unit_of_measurement"] = "";
	$fieldLabelslbpmi_summary["English"]["formula"] = "Formula";
	$fieldToolTipslbpmi_summary["English"]["formula"] = "";
	$placeHolderslbpmi_summary["English"]["formula"] = "";
	$fieldLabelslbpmi_summary["English"]["reporting_frequency"] = "Reporting Frequency";
	$fieldToolTipslbpmi_summary["English"]["reporting_frequency"] = "";
	$placeHolderslbpmi_summary["English"]["reporting_frequency"] = "";
	$fieldLabelslbpmi_summary["English"]["year"] = "Year";
	$fieldToolTipslbpmi_summary["English"]["year"] = "";
	$placeHolderslbpmi_summary["English"]["year"] = "";
	$fieldLabelslbpmi_summary["English"]["baseline"] = "Baseline";
	$fieldToolTipslbpmi_summary["English"]["baseline"] = "";
	$placeHolderslbpmi_summary["English"]["baseline"] = "";
	$fieldLabelslbpmi_summary["English"]["q1_target"] = "Q1 Target";
	$fieldToolTipslbpmi_summary["English"]["q1_target"] = "";
	$placeHolderslbpmi_summary["English"]["q1_target"] = "";
	$fieldLabelslbpmi_summary["English"]["q2_target"] = "Q2 Target";
	$fieldToolTipslbpmi_summary["English"]["q2_target"] = "";
	$placeHolderslbpmi_summary["English"]["q2_target"] = "";
	$fieldLabelslbpmi_summary["English"]["q3_target"] = "Q3 Target";
	$fieldToolTipslbpmi_summary["English"]["q3_target"] = "";
	$placeHolderslbpmi_summary["English"]["q3_target"] = "";
	$fieldLabelslbpmi_summary["English"]["q4_target"] = "Q4 Target";
	$fieldToolTipslbpmi_summary["English"]["q4_target"] = "";
	$placeHolderslbpmi_summary["English"]["q4_target"] = "";
	$fieldLabelslbpmi_summary["English"]["q1_actual"] = "Q1 Actual";
	$fieldToolTipslbpmi_summary["English"]["q1_actual"] = "";
	$placeHolderslbpmi_summary["English"]["q1_actual"] = "";
	$fieldLabelslbpmi_summary["English"]["q2_actual"] = "Q2 Actual";
	$fieldToolTipslbpmi_summary["English"]["q2_actual"] = "";
	$placeHolderslbpmi_summary["English"]["q2_actual"] = "";
	$fieldLabelslbpmi_summary["English"]["q3_actual"] = "Q3 Actual";
	$fieldToolTipslbpmi_summary["English"]["q3_actual"] = "";
	$placeHolderslbpmi_summary["English"]["q3_actual"] = "";
	$fieldLabelslbpmi_summary["English"]["q4_actual"] = "Q4 Actual";
	$fieldToolTipslbpmi_summary["English"]["q4_actual"] = "";
	$placeHolderslbpmi_summary["English"]["q4_actual"] = "";
	$fieldLabelslbpmi_summary["English"]["q1_calculated"] = "Q1 Calculated";
	$fieldToolTipslbpmi_summary["English"]["q1_calculated"] = "";
	$placeHolderslbpmi_summary["English"]["q1_calculated"] = "";
	$fieldLabelslbpmi_summary["English"]["q2_calculated"] = "Q2 Calculated";
	$fieldToolTipslbpmi_summary["English"]["q2_calculated"] = "";
	$placeHolderslbpmi_summary["English"]["q2_calculated"] = "";
	$fieldLabelslbpmi_summary["English"]["q3_calculated"] = "Q3 Calculated";
	$fieldToolTipslbpmi_summary["English"]["q3_calculated"] = "";
	$placeHolderslbpmi_summary["English"]["q3_calculated"] = "";
	$fieldLabelslbpmi_summary["English"]["q4_calculated"] = "Q4 Calculated";
	$fieldToolTipslbpmi_summary["English"]["q4_calculated"] = "";
	$placeHolderslbpmi_summary["English"]["q4_calculated"] = "";
	$fieldLabelslbpmi_summary["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_summary["English"]["created_at"] = "";
	$placeHolderslbpmi_summary["English"]["created_at"] = "";
	$fieldLabelslbpmi_summary["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbpmi_summary["English"]["updated_at"] = "";
	$placeHolderslbpmi_summary["English"]["updated_at"] = "";
	$fieldLabelslbpmi_summary["English"]["q1_combined"] = "Q1 Combined";
	$fieldToolTipslbpmi_summary["English"]["q1_combined"] = "";
	$placeHolderslbpmi_summary["English"]["q1_combined"] = "";
	$fieldLabelslbpmi_summary["English"]["q2_combined"] = "Q2 Combined";
	$fieldToolTipslbpmi_summary["English"]["q2_combined"] = "";
	$placeHolderslbpmi_summary["English"]["q2_combined"] = "";
	$fieldLabelslbpmi_summary["English"]["q3_combined"] = "Q3 Combined";
	$fieldToolTipslbpmi_summary["English"]["q3_combined"] = "";
	$placeHolderslbpmi_summary["English"]["q3_combined"] = "";
	$fieldLabelslbpmi_summary["English"]["q4_combined"] = "Q4 Combined";
	$fieldToolTipslbpmi_summary["English"]["q4_combined"] = "";
	$placeHolderslbpmi_summary["English"]["q4_combined"] = "";
	$fieldLabelslbpmi_summary["English"]["actuals_updated_at"] = "Actuals Updated At";
	$fieldToolTipslbpmi_summary["English"]["actuals_updated_at"] = "";
	$placeHolderslbpmi_summary["English"]["actuals_updated_at"] = "";
	if (count($fieldToolTipslbpmi_summary["English"]))
		$tdatalbpmi_summary[".isUseToolTips"] = true;
}


	$tdatalbpmi_summary[".NCSearch"] = true;



$tdatalbpmi_summary[".shortTableName"] = "lbpmi_summary";
$tdatalbpmi_summary[".nSecOptions"] = 0;

$tdatalbpmi_summary[".mainTableOwnerID"] = "";
$tdatalbpmi_summary[".entityType"] = 0;
$tdatalbpmi_summary[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_summary[".strOriginalTableName"] = "public.lbpmi_summary";

	



$tdatalbpmi_summary[".showAddInPopup"] = false;

$tdatalbpmi_summary[".showEditInPopup"] = false;

$tdatalbpmi_summary[".showViewInPopup"] = false;

$tdatalbpmi_summary[".listAjax"] = false;
//	temporary
//$tdatalbpmi_summary[".listAjax"] = false;

	$tdatalbpmi_summary[".audit"] = false;

	$tdatalbpmi_summary[".locking"] = false;


$pages = $tdatalbpmi_summary[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_summary[".edit"] = true;
	$tdatalbpmi_summary[".afterEditAction"] = 1;
	$tdatalbpmi_summary[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_summary[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_summary[".add"] = true;
$tdatalbpmi_summary[".afterAddAction"] = 1;
$tdatalbpmi_summary[".closePopupAfterAdd"] = 1;
$tdatalbpmi_summary[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_summary[".list"] = true;
}



$tdatalbpmi_summary[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_summary[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_summary[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_summary[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_summary[".printFriendly"] = true;
}



$tdatalbpmi_summary[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_summary[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_summary[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_summary[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_summary[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_summary[".buttonsAdded"] = false;

$tdatalbpmi_summary[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_summary[".isUseTimeForSearch"] = false;


$tdatalbpmi_summary[".badgeColor"] = "BC8F8F";


$tdatalbpmi_summary[".allSearchFields"] = array();
$tdatalbpmi_summary[".filterFields"] = array();
$tdatalbpmi_summary[".requiredSearchFields"] = array();

$tdatalbpmi_summary[".googleLikeFields"] = array();
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_summary[".googleLikeFields"][] = "result_area";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_name";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_description";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_type";
$tdatalbpmi_summary[".googleLikeFields"][] = "unit_of_measurement";
$tdatalbpmi_summary[".googleLikeFields"][] = "formula";
$tdatalbpmi_summary[".googleLikeFields"][] = "reporting_frequency";
$tdatalbpmi_summary[".googleLikeFields"][] = "year";
$tdatalbpmi_summary[".googleLikeFields"][] = "baseline";
$tdatalbpmi_summary[".googleLikeFields"][] = "q1_target";
$tdatalbpmi_summary[".googleLikeFields"][] = "q2_target";
$tdatalbpmi_summary[".googleLikeFields"][] = "q3_target";
$tdatalbpmi_summary[".googleLikeFields"][] = "q4_target";
$tdatalbpmi_summary[".googleLikeFields"][] = "q1_actual";
$tdatalbpmi_summary[".googleLikeFields"][] = "q2_actual";
$tdatalbpmi_summary[".googleLikeFields"][] = "q3_actual";
$tdatalbpmi_summary[".googleLikeFields"][] = "q4_actual";
$tdatalbpmi_summary[".googleLikeFields"][] = "q1_calculated";
$tdatalbpmi_summary[".googleLikeFields"][] = "q2_calculated";
$tdatalbpmi_summary[".googleLikeFields"][] = "q3_calculated";
$tdatalbpmi_summary[".googleLikeFields"][] = "q4_calculated";
$tdatalbpmi_summary[".googleLikeFields"][] = "q1_combined";
$tdatalbpmi_summary[".googleLikeFields"][] = "q2_combined";
$tdatalbpmi_summary[".googleLikeFields"][] = "q3_combined";
$tdatalbpmi_summary[".googleLikeFields"][] = "q4_combined";
$tdatalbpmi_summary[".googleLikeFields"][] = "created_at";
$tdatalbpmi_summary[".googleLikeFields"][] = "updated_at";
$tdatalbpmi_summary[".googleLikeFields"][] = "actuals_updated_at";



$tdatalbpmi_summary[".tableType"] = "list";

$tdatalbpmi_summary[".printerPageOrientation"] = 0;
$tdatalbpmi_summary[".nPrinterPageScale"] = 100;

$tdatalbpmi_summary[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_summary[".geocodingEnabled"] = false;










$tdatalbpmi_summary[".pageSize"] = 20;

$tdatalbpmi_summary[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_summary[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_summary[".orderindexes"] = array();


$tdatalbpmi_summary[".sqlHead"] = "SELECT indicator_id,  	result_area,  	indicator_name,  	indicator_description,  	indicator_type,  	unit_of_measurement,  	formula,  	reporting_frequency,  	\"year\",  	baseline,  	q1_target,  	q2_target,  	q3_target,  	q4_target,  	q1_actual,  	q2_actual,  	q3_actual,  	q4_actual,  	q1_calculated,  	q2_calculated,  	q3_calculated,  	q4_calculated,  	q1_combined,  	q2_combined,  	q3_combined,  	q4_combined,  	created_at,  	updated_at,  	actuals_updated_at";
$tdatalbpmi_summary[".sqlFrom"] = "FROM \"public\".lbpmi_summary";
$tdatalbpmi_summary[".sqlWhereExpr"] = "";
$tdatalbpmi_summary[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_summary[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_summary[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_summary[".highlightSearchResults"] = true;

$tableKeyslbpmi_summary = array();
$tdatalbpmi_summary[".Keys"] = $tableKeyslbpmi_summary;


$tdatalbpmi_summary[".hideMobileList"] = array();




//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatalbpmi_summary["indicator_id"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_id";
//	result_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "result_area";
	$fdata["GoodName"] = "result_area";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","result_area");
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


	$tdatalbpmi_summary["result_area"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "result_area";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_name");
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


	$tdatalbpmi_summary["indicator_name"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_name";
//	indicator_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "indicator_description";
	$fdata["GoodName"] = "indicator_description";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_description");
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


	$tdatalbpmi_summary["indicator_description"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_description";
//	indicator_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "indicator_type";
	$fdata["GoodName"] = "indicator_type";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_type");
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


	$tdatalbpmi_summary["indicator_type"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_type";
//	unit_of_measurement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit_of_measurement";
	$fdata["GoodName"] = "unit_of_measurement";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","unit_of_measurement");
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


	$tdatalbpmi_summary["unit_of_measurement"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "unit_of_measurement";
//	formula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "formula";
	$fdata["GoodName"] = "formula";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","formula");
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


	$tdatalbpmi_summary["formula"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "formula";
//	reporting_frequency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reporting_frequency";
	$fdata["GoodName"] = "reporting_frequency";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","reporting_frequency");
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


	$tdatalbpmi_summary["reporting_frequency"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "reporting_frequency";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"year\"";

	
	
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


	$tdatalbpmi_summary["year"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "year";
//	baseline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "baseline";
	$fdata["GoodName"] = "baseline";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","baseline");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "baseline";

		$fdata["sourceSingle"] = "baseline";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "baseline";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["baseline"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "baseline";
//	q1_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "q1_target";
	$fdata["GoodName"] = "q1_target";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q1_target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q1_target";

		$fdata["sourceSingle"] = "q1_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q1_target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q1_target"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q1_target";
//	q2_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "q2_target";
	$fdata["GoodName"] = "q2_target";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q2_target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q2_target";

		$fdata["sourceSingle"] = "q2_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q2_target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q2_target"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q2_target";
//	q3_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "q3_target";
	$fdata["GoodName"] = "q3_target";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q3_target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q3_target";

		$fdata["sourceSingle"] = "q3_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q3_target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q3_target"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q3_target";
//	q4_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "q4_target";
	$fdata["GoodName"] = "q4_target";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q4_target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q4_target";

		$fdata["sourceSingle"] = "q4_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q4_target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q4_target"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q4_target";
//	q1_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "q1_actual";
	$fdata["GoodName"] = "q1_actual";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q1_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q1_actual";

		$fdata["sourceSingle"] = "q1_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q1_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q1_actual"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q1_actual";
//	q2_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "q2_actual";
	$fdata["GoodName"] = "q2_actual";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q2_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q2_actual";

		$fdata["sourceSingle"] = "q2_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q2_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q2_actual"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q2_actual";
//	q3_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "q3_actual";
	$fdata["GoodName"] = "q3_actual";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q3_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q3_actual";

		$fdata["sourceSingle"] = "q3_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q3_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q3_actual"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q3_actual";
//	q4_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "q4_actual";
	$fdata["GoodName"] = "q4_actual";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q4_actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q4_actual";

		$fdata["sourceSingle"] = "q4_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q4_actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q4_actual"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q4_actual";
//	q1_calculated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "q1_calculated";
	$fdata["GoodName"] = "q1_calculated";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q1_calculated");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q1_calculated";

		$fdata["sourceSingle"] = "q1_calculated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q1_calculated";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q1_calculated"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q1_calculated";
//	q2_calculated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "q2_calculated";
	$fdata["GoodName"] = "q2_calculated";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q2_calculated");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q2_calculated";

		$fdata["sourceSingle"] = "q2_calculated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q2_calculated";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q2_calculated"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q2_calculated";
//	q3_calculated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "q3_calculated";
	$fdata["GoodName"] = "q3_calculated";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q3_calculated");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q3_calculated";

		$fdata["sourceSingle"] = "q3_calculated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q3_calculated";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q3_calculated"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q3_calculated";
//	q4_calculated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "q4_calculated";
	$fdata["GoodName"] = "q4_calculated";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q4_calculated");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q4_calculated";

		$fdata["sourceSingle"] = "q4_calculated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q4_calculated";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q4_calculated"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q4_calculated";
//	q1_combined
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "q1_combined";
	$fdata["GoodName"] = "q1_combined";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q1_combined");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q1_combined";

		$fdata["sourceSingle"] = "q1_combined";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q1_combined";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q1_combined"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q1_combined";
//	q2_combined
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "q2_combined";
	$fdata["GoodName"] = "q2_combined";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q2_combined");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q2_combined";

		$fdata["sourceSingle"] = "q2_combined";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q2_combined";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q2_combined"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q2_combined";
//	q3_combined
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "q3_combined";
	$fdata["GoodName"] = "q3_combined";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q3_combined");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q3_combined";

		$fdata["sourceSingle"] = "q3_combined";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q3_combined";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q3_combined"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q3_combined";
//	q4_combined
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "q4_combined";
	$fdata["GoodName"] = "q4_combined";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","q4_combined");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "q4_combined";

		$fdata["sourceSingle"] = "q4_combined";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "q4_combined";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalbpmi_summary["q4_combined"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "q4_combined";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","created_at");
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


	$tdatalbpmi_summary["created_at"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","updated_at");
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


	$tdatalbpmi_summary["updated_at"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "updated_at";
//	actuals_updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "actuals_updated_at";
	$fdata["GoodName"] = "actuals_updated_at";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","actuals_updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "actuals_updated_at";

		$fdata["sourceSingle"] = "actuals_updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actuals_updated_at";

	
	
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


	$tdatalbpmi_summary["actuals_updated_at"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "actuals_updated_at";


$tables_data["public.lbpmi_summary"]=&$tdatalbpmi_summary;
$field_labels["public_lbpmi_summary"] = &$fieldLabelslbpmi_summary;
$fieldToolTips["public_lbpmi_summary"] = &$fieldToolTipslbpmi_summary;
$placeHolders["public_lbpmi_summary"] = &$placeHolderslbpmi_summary;
$page_titles["public_lbpmi_summary"] = &$pageTitleslbpmi_summary;


changeTextControlsToDate( "public.lbpmi_summary" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_summary"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_summary"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_summary()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indicator_id,  	result_area,  	indicator_name,  	indicator_description,  	indicator_type,  	unit_of_measurement,  	formula,  	reporting_frequency,  	\"year\",  	baseline,  	q1_target,  	q2_target,  	q3_target,  	q4_target,  	q1_actual,  	q2_actual,  	q3_actual,  	q4_actual,  	q1_calculated,  	q2_calculated,  	q3_calculated,  	q4_calculated,  	q1_combined,  	q2_combined,  	q3_combined,  	q4_combined,  	created_at,  	updated_at,  	actuals_updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_summary";
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
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto6["m_sql"] = "indicator_id";
$proto6["m_srcTableName"] = "public.lbpmi_summary";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "result_area",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto8["m_sql"] = "result_area";
$proto8["m_srcTableName"] = "public.lbpmi_summary";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto10["m_sql"] = "indicator_name";
$proto10["m_srcTableName"] = "public.lbpmi_summary";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_description",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto12["m_sql"] = "indicator_description";
$proto12["m_srcTableName"] = "public.lbpmi_summary";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_type",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto14["m_sql"] = "indicator_type";
$proto14["m_srcTableName"] = "public.lbpmi_summary";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_of_measurement",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto16["m_sql"] = "unit_of_measurement";
$proto16["m_srcTableName"] = "public.lbpmi_summary";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "formula",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto18["m_sql"] = "formula";
$proto18["m_srcTableName"] = "public.lbpmi_summary";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_frequency",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto20["m_sql"] = "reporting_frequency";
$proto20["m_srcTableName"] = "public.lbpmi_summary";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto22["m_sql"] = "\"year\"";
$proto22["m_srcTableName"] = "public.lbpmi_summary";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto24["m_sql"] = "baseline";
$proto24["m_srcTableName"] = "public.lbpmi_summary";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_target",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto26["m_sql"] = "q1_target";
$proto26["m_srcTableName"] = "public.lbpmi_summary";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_target",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto28["m_sql"] = "q2_target";
$proto28["m_srcTableName"] = "public.lbpmi_summary";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_target",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto30["m_sql"] = "q3_target";
$proto30["m_srcTableName"] = "public.lbpmi_summary";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_target",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto32["m_sql"] = "q4_target";
$proto32["m_srcTableName"] = "public.lbpmi_summary";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_actual",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto34["m_sql"] = "q1_actual";
$proto34["m_srcTableName"] = "public.lbpmi_summary";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_actual",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto36["m_sql"] = "q2_actual";
$proto36["m_srcTableName"] = "public.lbpmi_summary";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_actual",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto38["m_sql"] = "q3_actual";
$proto38["m_srcTableName"] = "public.lbpmi_summary";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_actual",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto40["m_sql"] = "q4_actual";
$proto40["m_srcTableName"] = "public.lbpmi_summary";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_calculated",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto42["m_sql"] = "q1_calculated";
$proto42["m_srcTableName"] = "public.lbpmi_summary";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_calculated",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto44["m_sql"] = "q2_calculated";
$proto44["m_srcTableName"] = "public.lbpmi_summary";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_calculated",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto46["m_sql"] = "q3_calculated";
$proto46["m_srcTableName"] = "public.lbpmi_summary";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_calculated",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto48["m_sql"] = "q4_calculated";
$proto48["m_srcTableName"] = "public.lbpmi_summary";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_combined",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto50["m_sql"] = "q1_combined";
$proto50["m_srcTableName"] = "public.lbpmi_summary";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_combined",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto52["m_sql"] = "q2_combined";
$proto52["m_srcTableName"] = "public.lbpmi_summary";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_combined",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto54["m_sql"] = "q3_combined";
$proto54["m_srcTableName"] = "public.lbpmi_summary";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_combined",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto56["m_sql"] = "q4_combined";
$proto56["m_srcTableName"] = "public.lbpmi_summary";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto58["m_sql"] = "created_at";
$proto58["m_srcTableName"] = "public.lbpmi_summary";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto60["m_sql"] = "updated_at";
$proto60["m_srcTableName"] = "public.lbpmi_summary";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "actuals_updated_at",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto62["m_sql"] = "actuals_updated_at";
$proto62["m_srcTableName"] = "public.lbpmi_summary";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "public.lbpmi_summary";
$proto65["m_srcTableName"] = "public.lbpmi_summary";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "indicator_id";
$proto65["m_columns"][] = "result_area";
$proto65["m_columns"][] = "indicator_name";
$proto65["m_columns"][] = "indicator_description";
$proto65["m_columns"][] = "indicator_type";
$proto65["m_columns"][] = "unit_of_measurement";
$proto65["m_columns"][] = "formula";
$proto65["m_columns"][] = "reporting_frequency";
$proto65["m_columns"][] = "year";
$proto65["m_columns"][] = "baseline";
$proto65["m_columns"][] = "q1_target";
$proto65["m_columns"][] = "q2_target";
$proto65["m_columns"][] = "q3_target";
$proto65["m_columns"][] = "q4_target";
$proto65["m_columns"][] = "q1_actual";
$proto65["m_columns"][] = "q2_actual";
$proto65["m_columns"][] = "q3_actual";
$proto65["m_columns"][] = "q4_actual";
$proto65["m_columns"][] = "q1_calculated";
$proto65["m_columns"][] = "q2_calculated";
$proto65["m_columns"][] = "q3_calculated";
$proto65["m_columns"][] = "q4_calculated";
$proto65["m_columns"][] = "q1_combined";
$proto65["m_columns"][] = "q2_combined";
$proto65["m_columns"][] = "q3_combined";
$proto65["m_columns"][] = "q4_combined";
$proto65["m_columns"][] = "created_at";
$proto65["m_columns"][] = "updated_at";
$proto65["m_columns"][] = "actuals_updated_at";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "\"public\".lbpmi_summary";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "public.lbpmi_summary";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbpmi_summary";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_summary = createSqlQuery_lbpmi_summary();


	
				;

																													

$tdatalbpmi_summary[".sqlquery"] = $queryData_lbpmi_summary;



$tdatalbpmi_summary[".hasEvents"] = false;

?>