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
	$fieldLabelslbpmi_summary["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipslbpmi_summary["English"]["indicator_name"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_name"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_type"] = "Indicator Type";
	$fieldToolTipslbpmi_summary["English"]["indicator_type"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_type"] = "";
	$fieldLabelslbpmi_summary["English"]["formula"] = "Formula";
	$fieldToolTipslbpmi_summary["English"]["formula"] = "";
	$placeHolderslbpmi_summary["English"]["formula"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_code"] = "Indicator Code";
	$fieldToolTipslbpmi_summary["English"]["indicator_code"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_code"] = "";
	$fieldLabelslbpmi_summary["English"]["period_type"] = "Period Type";
	$fieldToolTipslbpmi_summary["English"]["period_type"] = "";
	$placeHolderslbpmi_summary["English"]["period_type"] = "";
	$fieldLabelslbpmi_summary["English"]["period_year"] = "Period Year";
	$fieldToolTipslbpmi_summary["English"]["period_year"] = "";
	$placeHolderslbpmi_summary["English"]["period_year"] = "";
	$fieldLabelslbpmi_summary["English"]["period_quarter"] = "Period Quarter";
	$fieldToolTipslbpmi_summary["English"]["period_quarter"] = "";
	$placeHolderslbpmi_summary["English"]["period_quarter"] = "";
	$fieldLabelslbpmi_summary["English"]["period_month"] = "Period Month";
	$fieldToolTipslbpmi_summary["English"]["period_month"] = "";
	$placeHolderslbpmi_summary["English"]["period_month"] = "";
	$fieldLabelslbpmi_summary["English"]["region_id"] = "Region Id";
	$fieldToolTipslbpmi_summary["English"]["region_id"] = "";
	$placeHolderslbpmi_summary["English"]["region_id"] = "";
	$fieldLabelslbpmi_summary["English"]["region_name"] = "Region Name";
	$fieldToolTipslbpmi_summary["English"]["region_name"] = "";
	$placeHolderslbpmi_summary["English"]["region_name"] = "";
	$fieldLabelslbpmi_summary["English"]["country_id"] = "Country Id";
	$fieldToolTipslbpmi_summary["English"]["country_id"] = "";
	$placeHolderslbpmi_summary["English"]["country_id"] = "";
	$fieldLabelslbpmi_summary["English"]["country_name"] = "Country Name";
	$fieldToolTipslbpmi_summary["English"]["country_name"] = "";
	$placeHolderslbpmi_summary["English"]["country_name"] = "";
	$fieldLabelslbpmi_summary["English"]["facility_id"] = "Facility Id";
	$fieldToolTipslbpmi_summary["English"]["facility_id"] = "";
	$placeHolderslbpmi_summary["English"]["facility_id"] = "";
	$fieldLabelslbpmi_summary["English"]["facility_name"] = "Facility Name";
	$fieldToolTipslbpmi_summary["English"]["facility_name"] = "";
	$placeHolderslbpmi_summary["English"]["facility_name"] = "";
	$fieldLabelslbpmi_summary["English"]["actual_value"] = "Actual Value";
	$fieldToolTipslbpmi_summary["English"]["actual_value"] = "";
	$placeHolderslbpmi_summary["English"]["actual_value"] = "";
	$fieldLabelslbpmi_summary["English"]["target_value"] = "Target Value";
	$fieldToolTipslbpmi_summary["English"]["target_value"] = "";
	$placeHolderslbpmi_summary["English"]["target_value"] = "";
	$fieldLabelslbpmi_summary["English"]["variance"] = "Variance";
	$fieldToolTipslbpmi_summary["English"]["variance"] = "";
	$placeHolderslbpmi_summary["English"]["variance"] = "";
	$fieldLabelslbpmi_summary["English"]["variance_percentage"] = "Variance Percentage";
	$fieldToolTipslbpmi_summary["English"]["variance_percentage"] = "";
	$placeHolderslbpmi_summary["English"]["variance_percentage"] = "";
	$fieldLabelslbpmi_summary["English"]["calculation_timestamp"] = "Calculation Timestamp";
	$fieldToolTipslbpmi_summary["English"]["calculation_timestamp"] = "";
	$placeHolderslbpmi_summary["English"]["calculation_timestamp"] = "";
	$fieldLabelslbpmi_summary["English"]["is_calculated"] = "Is Calculated";
	$fieldToolTipslbpmi_summary["English"]["is_calculated"] = "";
	$placeHolderslbpmi_summary["English"]["is_calculated"] = "";
	$fieldLabelslbpmi_summary["English"]["decimals"] = "Decimals";
	$fieldToolTipslbpmi_summary["English"]["decimals"] = "";
	$placeHolderslbpmi_summary["English"]["decimals"] = "";
	$fieldLabelslbpmi_summary["English"]["annualized"] = "Annualized";
	$fieldToolTipslbpmi_summary["English"]["annualized"] = "";
	$placeHolderslbpmi_summary["English"]["annualized"] = "";
	$fieldLabelslbpmi_summary["English"]["data_completeness"] = "Data Completeness";
	$fieldToolTipslbpmi_summary["English"]["data_completeness"] = "";
	$placeHolderslbpmi_summary["English"]["data_completeness"] = "";
	$fieldLabelslbpmi_summary["English"]["performance_status"] = "Performance Status";
	$fieldToolTipslbpmi_summary["English"]["performance_status"] = "";
	$placeHolderslbpmi_summary["English"]["performance_status"] = "";
	$fieldLabelslbpmi_summary["English"]["overall_completion_percentage"] = "Overall Completion Percentage";
	$fieldToolTipslbpmi_summary["English"]["overall_completion_percentage"] = "";
	$placeHolderslbpmi_summary["English"]["overall_completion_percentage"] = "";
	$fieldLabelslbpmi_summary["English"]["actual_value_completion"] = "Actual Value Completion";
	$fieldToolTipslbpmi_summary["English"]["actual_value_completion"] = "";
	$placeHolderslbpmi_summary["English"]["actual_value_completion"] = "";
	$fieldLabelslbpmi_summary["English"]["target_value_completion"] = "Target Value Completion";
	$fieldToolTipslbpmi_summary["English"]["target_value_completion"] = "";
	$placeHolderslbpmi_summary["English"]["target_value_completion"] = "";
	$fieldLabelslbpmi_summary["English"]["completion_status"] = "Completion Status";
	$fieldToolTipslbpmi_summary["English"]["completion_status"] = "";
	$placeHolderslbpmi_summary["English"]["completion_status"] = "";
	$fieldLabelslbpmi_summary["English"]["is_actual_missing"] = "Is Actual Missing";
	$fieldToolTipslbpmi_summary["English"]["is_actual_missing"] = "";
	$placeHolderslbpmi_summary["English"]["is_actual_missing"] = "";
	$fieldLabelslbpmi_summary["English"]["is_target_missing"] = "Is Target Missing";
	$fieldToolTipslbpmi_summary["English"]["is_target_missing"] = "";
	$placeHolderslbpmi_summary["English"]["is_target_missing"] = "";
	$fieldLabelslbpmi_summary["English"]["data_freshness"] = "Data Freshness";
	$fieldToolTipslbpmi_summary["English"]["data_freshness"] = "";
	$placeHolderslbpmi_summary["English"]["data_freshness"] = "";
	$fieldLabelslbpmi_summary["English"]["days_since_last_calculation"] = "Days Since Last Calculation";
	$fieldToolTipslbpmi_summary["English"]["days_since_last_calculation"] = "";
	$placeHolderslbpmi_summary["English"]["days_since_last_calculation"] = "";
	$fieldLabelslbpmi_summary["English"]["performance_percentage"] = "Performance Percentage";
	$fieldToolTipslbpmi_summary["English"]["performance_percentage"] = "";
	$placeHolderslbpmi_summary["English"]["performance_percentage"] = "";
	$fieldLabelslbpmi_summary["English"]["data_quality_flag"] = "Data Quality Flag";
	$fieldToolTipslbpmi_summary["English"]["data_quality_flag"] = "";
	$placeHolderslbpmi_summary["English"]["data_quality_flag"] = "";
	$fieldLabelslbpmi_summary["English"]["data_hierarchy_level"] = "Data Hierarchy Level";
	$fieldToolTipslbpmi_summary["English"]["data_hierarchy_level"] = "";
	$placeHolderslbpmi_summary["English"]["data_hierarchy_level"] = "";
	$fieldLabelslbpmi_summary["English"]["period_completeness"] = "Period Completeness";
	$fieldToolTipslbpmi_summary["English"]["period_completeness"] = "";
	$placeHolderslbpmi_summary["English"]["period_completeness"] = "";
	$fieldLabelslbpmi_summary["English"]["calculation_method"] = "Calculation Method";
	$fieldToolTipslbpmi_summary["English"]["calculation_method"] = "";
	$placeHolderslbpmi_summary["English"]["calculation_method"] = "";
	$fieldLabelslbpmi_summary["English"]["formula_type"] = "Formula Type";
	$fieldToolTipslbpmi_summary["English"]["formula_type"] = "";
	$placeHolderslbpmi_summary["English"]["formula_type"] = "";
	$fieldLabelslbpmi_summary["English"]["org_unit_validity"] = "Org Unit Validity";
	$fieldToolTipslbpmi_summary["English"]["org_unit_validity"] = "";
	$placeHolderslbpmi_summary["English"]["org_unit_validity"] = "";
	$fieldLabelslbpmi_summary["English"]["period_validity"] = "Period Validity";
	$fieldToolTipslbpmi_summary["English"]["period_validity"] = "";
	$placeHolderslbpmi_summary["English"]["period_validity"] = "";
	$fieldLabelslbpmi_summary["English"]["legacy_performance_status"] = "Legacy Performance Status";
	$fieldToolTipslbpmi_summary["English"]["legacy_performance_status"] = "";
	$placeHolderslbpmi_summary["English"]["legacy_performance_status"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_group_id"] = "Indicator Group Id";
	$fieldToolTipslbpmi_summary["English"]["indicator_group_id"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_group_id"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_group_code"] = "Indicator Group Code";
	$fieldToolTipslbpmi_summary["English"]["indicator_group_code"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_group_code"] = "";
	$fieldLabelslbpmi_summary["English"]["indicator_group_name"] = "Indicator Group Name";
	$fieldToolTipslbpmi_summary["English"]["indicator_group_name"] = "";
	$placeHolderslbpmi_summary["English"]["indicator_group_name"] = "";
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
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_group_id";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_group_name";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_group_code";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_name";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_code";
$tdatalbpmi_summary[".googleLikeFields"][] = "indicator_type";
$tdatalbpmi_summary[".googleLikeFields"][] = "formula";
$tdatalbpmi_summary[".googleLikeFields"][] = "period_type";
$tdatalbpmi_summary[".googleLikeFields"][] = "period_year";
$tdatalbpmi_summary[".googleLikeFields"][] = "period_quarter";
$tdatalbpmi_summary[".googleLikeFields"][] = "period_month";
$tdatalbpmi_summary[".googleLikeFields"][] = "region_id";
$tdatalbpmi_summary[".googleLikeFields"][] = "region_name";
$tdatalbpmi_summary[".googleLikeFields"][] = "country_id";
$tdatalbpmi_summary[".googleLikeFields"][] = "country_name";
$tdatalbpmi_summary[".googleLikeFields"][] = "facility_id";
$tdatalbpmi_summary[".googleLikeFields"][] = "facility_name";
$tdatalbpmi_summary[".googleLikeFields"][] = "actual_value";
$tdatalbpmi_summary[".googleLikeFields"][] = "target_value";
$tdatalbpmi_summary[".googleLikeFields"][] = "variance";
$tdatalbpmi_summary[".googleLikeFields"][] = "variance_percentage";
$tdatalbpmi_summary[".googleLikeFields"][] = "calculation_timestamp";
$tdatalbpmi_summary[".googleLikeFields"][] = "is_calculated";
$tdatalbpmi_summary[".googleLikeFields"][] = "decimals";
$tdatalbpmi_summary[".googleLikeFields"][] = "annualized";
$tdatalbpmi_summary[".googleLikeFields"][] = "data_completeness";
$tdatalbpmi_summary[".googleLikeFields"][] = "overall_completion_percentage";
$tdatalbpmi_summary[".googleLikeFields"][] = "actual_value_completion";
$tdatalbpmi_summary[".googleLikeFields"][] = "target_value_completion";
$tdatalbpmi_summary[".googleLikeFields"][] = "completion_status";
$tdatalbpmi_summary[".googleLikeFields"][] = "is_actual_missing";
$tdatalbpmi_summary[".googleLikeFields"][] = "is_target_missing";
$tdatalbpmi_summary[".googleLikeFields"][] = "data_freshness";
$tdatalbpmi_summary[".googleLikeFields"][] = "days_since_last_calculation";
$tdatalbpmi_summary[".googleLikeFields"][] = "performance_status";
$tdatalbpmi_summary[".googleLikeFields"][] = "performance_percentage";
$tdatalbpmi_summary[".googleLikeFields"][] = "data_quality_flag";
$tdatalbpmi_summary[".googleLikeFields"][] = "data_hierarchy_level";
$tdatalbpmi_summary[".googleLikeFields"][] = "period_completeness";
$tdatalbpmi_summary[".googleLikeFields"][] = "calculation_method";
$tdatalbpmi_summary[".googleLikeFields"][] = "formula_type";
$tdatalbpmi_summary[".googleLikeFields"][] = "org_unit_validity";
$tdatalbpmi_summary[".googleLikeFields"][] = "period_validity";
$tdatalbpmi_summary[".googleLikeFields"][] = "legacy_performance_status";



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


$tdatalbpmi_summary[".sqlHead"] = "SELECT indicator_group_id,  	indicator_group_name,  	indicator_group_code,  	indicator_id,  	indicator_name,  	indicator_code,  	indicator_type,  	formula,  	period_type,  	period_year,  	period_quarter,  	period_month,  	region_id,  	region_name,  	country_id,  	country_name,  	facility_id,  	facility_name,  	actual_value,  	target_value,  	\"variance\",  	variance_percentage,  	calculation_timestamp,  	is_calculated,  	decimals,  	annualized,  	data_completeness,  	overall_completion_percentage,  	actual_value_completion,  	target_value_completion,  	completion_status,  	is_actual_missing,  	is_target_missing,  	data_freshness,  	days_since_last_calculation,  	performance_status,  	performance_percentage,  	data_quality_flag,  	data_hierarchy_level,  	period_completeness,  	calculation_method,  	formula_type,  	org_unit_validity,  	period_validity,  	legacy_performance_status";
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




//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_group_id";

		$fdata["sourceSingle"] = "indicator_group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_id";

	
	
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


	$tdatalbpmi_summary["indicator_group_id"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_group_id";
//	indicator_group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_group_name";
	$fdata["GoodName"] = "indicator_group_name";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_group_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_group_name";

		$fdata["sourceSingle"] = "indicator_group_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_name";

	
	
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


	$tdatalbpmi_summary["indicator_group_name"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_group_name";
//	indicator_group_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "indicator_group_code";
	$fdata["GoodName"] = "indicator_group_code";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_group_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_group_code";

		$fdata["sourceSingle"] = "indicator_group_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_code";

	
	
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


	$tdatalbpmi_summary["indicator_group_code"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_group_code";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
//	indicator_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "indicator_code";
	$fdata["GoodName"] = "indicator_code";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","indicator_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_code";

		$fdata["sourceSingle"] = "indicator_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_code";

	
	
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


	$tdatalbpmi_summary["indicator_code"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "indicator_code";
//	indicator_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
//	formula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
//	period_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "period_type";
	$fdata["GoodName"] = "period_type";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","period_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "period_type";

		$fdata["sourceSingle"] = "period_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_type";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatalbpmi_summary["period_type"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "period_type";
//	period_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "period_year";
	$fdata["GoodName"] = "period_year";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","period_year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "period_year";

		$fdata["sourceSingle"] = "period_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_year";

	
	
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


	$tdatalbpmi_summary["period_year"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "period_year";
//	period_quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "period_quarter";
	$fdata["GoodName"] = "period_quarter";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","period_quarter");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "period_quarter";

		$fdata["sourceSingle"] = "period_quarter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_quarter";

	
	
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


	$tdatalbpmi_summary["period_quarter"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "period_quarter";
//	period_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "period_month";
	$fdata["GoodName"] = "period_month";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","period_month");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "period_month";

		$fdata["sourceSingle"] = "period_month";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_month";

	
	
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


	$tdatalbpmi_summary["period_month"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "period_month";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","region_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "region_id";

		$fdata["sourceSingle"] = "region_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_id";

	
	
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


	$tdatalbpmi_summary["region_id"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "region_id";
//	region_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "region_name";
	$fdata["GoodName"] = "region_name";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","region_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "region_name";

		$fdata["sourceSingle"] = "region_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_name";

	
	
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


	$tdatalbpmi_summary["region_name"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "region_name";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","country_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "country_id";

		$fdata["sourceSingle"] = "country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";

	
	
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


	$tdatalbpmi_summary["country_id"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "country_id";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","country_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "country_name";

		$fdata["sourceSingle"] = "country_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_name";

	
	
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


	$tdatalbpmi_summary["country_name"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "country_name";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","facility_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "facility_id";

		$fdata["sourceSingle"] = "facility_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_id";

	
	
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


	$tdatalbpmi_summary["facility_id"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "facility_id";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","facility_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "facility_name";

		$fdata["sourceSingle"] = "facility_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatalbpmi_summary["facility_name"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "facility_name";
//	actual_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "actual_value";
	$fdata["GoodName"] = "actual_value";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","actual_value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "actual_value";

		$fdata["sourceSingle"] = "actual_value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actual_value";

	
	
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


	$tdatalbpmi_summary["actual_value"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "actual_value";
//	target_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "target_value";
	$fdata["GoodName"] = "target_value";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","target_value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "target_value";

		$fdata["sourceSingle"] = "target_value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "target_value";

	
	
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


	$tdatalbpmi_summary["target_value"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "target_value";
//	variance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "variance";
	$fdata["GoodName"] = "variance";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","variance");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "variance";

		$fdata["sourceSingle"] = "variance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"variance\"";

	
	
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


	$tdatalbpmi_summary["variance"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "variance";
//	variance_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "variance_percentage";
	$fdata["GoodName"] = "variance_percentage";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","variance_percentage");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "variance_percentage";

		$fdata["sourceSingle"] = "variance_percentage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "variance_percentage";

	
	
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


	$tdatalbpmi_summary["variance_percentage"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "variance_percentage";
//	calculation_timestamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "calculation_timestamp";
	$fdata["GoodName"] = "calculation_timestamp";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","calculation_timestamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "calculation_timestamp";

		$fdata["sourceSingle"] = "calculation_timestamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calculation_timestamp";

	
	
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


	$tdatalbpmi_summary["calculation_timestamp"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "calculation_timestamp";
//	is_calculated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "is_calculated";
	$fdata["GoodName"] = "is_calculated";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","is_calculated");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "is_calculated";

		$fdata["sourceSingle"] = "is_calculated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_calculated";

	
	
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


	$tdatalbpmi_summary["is_calculated"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "is_calculated";
//	decimals
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "decimals";
	$fdata["GoodName"] = "decimals";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","decimals");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "decimals";

		$fdata["sourceSingle"] = "decimals";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "decimals";

	
	
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


	$tdatalbpmi_summary["decimals"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "decimals";
//	annualized
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "annualized";
	$fdata["GoodName"] = "annualized";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","annualized");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "annualized";

		$fdata["sourceSingle"] = "annualized";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "annualized";

	
	
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


	$tdatalbpmi_summary["annualized"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "annualized";
//	data_completeness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "data_completeness";
	$fdata["GoodName"] = "data_completeness";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","data_completeness");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data_completeness";

		$fdata["sourceSingle"] = "data_completeness";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_completeness";

	
	
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


	$tdatalbpmi_summary["data_completeness"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "data_completeness";
//	overall_completion_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "overall_completion_percentage";
	$fdata["GoodName"] = "overall_completion_percentage";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","overall_completion_percentage");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "overall_completion_percentage";

		$fdata["sourceSingle"] = "overall_completion_percentage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "overall_completion_percentage";

	
	
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


	$tdatalbpmi_summary["overall_completion_percentage"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "overall_completion_percentage";
//	actual_value_completion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "actual_value_completion";
	$fdata["GoodName"] = "actual_value_completion";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","actual_value_completion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "actual_value_completion";

		$fdata["sourceSingle"] = "actual_value_completion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actual_value_completion";

	
	
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


	$tdatalbpmi_summary["actual_value_completion"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "actual_value_completion";
//	target_value_completion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "target_value_completion";
	$fdata["GoodName"] = "target_value_completion";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","target_value_completion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "target_value_completion";

		$fdata["sourceSingle"] = "target_value_completion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "target_value_completion";

	
	
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


	$tdatalbpmi_summary["target_value_completion"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "target_value_completion";
//	completion_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "completion_status";
	$fdata["GoodName"] = "completion_status";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","completion_status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "completion_status";

		$fdata["sourceSingle"] = "completion_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "completion_status";

	
	
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


	$tdatalbpmi_summary["completion_status"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "completion_status";
//	is_actual_missing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "is_actual_missing";
	$fdata["GoodName"] = "is_actual_missing";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","is_actual_missing");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "is_actual_missing";

		$fdata["sourceSingle"] = "is_actual_missing";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_actual_missing";

	
	
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


	$tdatalbpmi_summary["is_actual_missing"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "is_actual_missing";
//	is_target_missing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "is_target_missing";
	$fdata["GoodName"] = "is_target_missing";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","is_target_missing");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "is_target_missing";

		$fdata["sourceSingle"] = "is_target_missing";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_target_missing";

	
	
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


	$tdatalbpmi_summary["is_target_missing"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "is_target_missing";
//	data_freshness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "data_freshness";
	$fdata["GoodName"] = "data_freshness";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","data_freshness");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "data_freshness";

		$fdata["sourceSingle"] = "data_freshness";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_freshness";

	
	
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


	$tdatalbpmi_summary["data_freshness"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "data_freshness";
//	days_since_last_calculation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "days_since_last_calculation";
	$fdata["GoodName"] = "days_since_last_calculation";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","days_since_last_calculation");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "days_since_last_calculation";

		$fdata["sourceSingle"] = "days_since_last_calculation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "days_since_last_calculation";

	
	
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


	$tdatalbpmi_summary["days_since_last_calculation"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "days_since_last_calculation";
//	performance_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "performance_status";
	$fdata["GoodName"] = "performance_status";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","performance_status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "performance_status";

		$fdata["sourceSingle"] = "performance_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "performance_status";

	
	
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


	$tdatalbpmi_summary["performance_status"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "performance_status";
//	performance_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "performance_percentage";
	$fdata["GoodName"] = "performance_percentage";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","performance_percentage");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "performance_percentage";

		$fdata["sourceSingle"] = "performance_percentage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "performance_percentage";

	
	
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


	$tdatalbpmi_summary["performance_percentage"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "performance_percentage";
//	data_quality_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "data_quality_flag";
	$fdata["GoodName"] = "data_quality_flag";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","data_quality_flag");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "data_quality_flag";

		$fdata["sourceSingle"] = "data_quality_flag";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_quality_flag";

	
	
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


	$tdatalbpmi_summary["data_quality_flag"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "data_quality_flag";
//	data_hierarchy_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "data_hierarchy_level";
	$fdata["GoodName"] = "data_hierarchy_level";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","data_hierarchy_level");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "data_hierarchy_level";

		$fdata["sourceSingle"] = "data_hierarchy_level";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_hierarchy_level";

	
	
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


	$tdatalbpmi_summary["data_hierarchy_level"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "data_hierarchy_level";
//	period_completeness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "period_completeness";
	$fdata["GoodName"] = "period_completeness";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","period_completeness");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "period_completeness";

		$fdata["sourceSingle"] = "period_completeness";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_completeness";

	
	
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


	$tdatalbpmi_summary["period_completeness"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "period_completeness";
//	calculation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "calculation_method";
	$fdata["GoodName"] = "calculation_method";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","calculation_method");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "calculation_method";

		$fdata["sourceSingle"] = "calculation_method";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calculation_method";

	
	
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


	$tdatalbpmi_summary["calculation_method"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "calculation_method";
//	formula_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "formula_type";
	$fdata["GoodName"] = "formula_type";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","formula_type");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "formula_type";

		$fdata["sourceSingle"] = "formula_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formula_type";

	
	
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


	$tdatalbpmi_summary["formula_type"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "formula_type";
//	org_unit_validity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "org_unit_validity";
	$fdata["GoodName"] = "org_unit_validity";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","org_unit_validity");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "org_unit_validity";

		$fdata["sourceSingle"] = "org_unit_validity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_unit_validity";

	
	
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


	$tdatalbpmi_summary["org_unit_validity"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "org_unit_validity";
//	period_validity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "period_validity";
	$fdata["GoodName"] = "period_validity";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","period_validity");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "period_validity";

		$fdata["sourceSingle"] = "period_validity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_validity";

	
	
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


	$tdatalbpmi_summary["period_validity"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "period_validity";
//	legacy_performance_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "legacy_performance_status";
	$fdata["GoodName"] = "legacy_performance_status";
	$fdata["ownerTable"] = "public.lbpmi_summary";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_summary","legacy_performance_status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "legacy_performance_status";

		$fdata["sourceSingle"] = "legacy_performance_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legacy_performance_status";

	
	
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


	$tdatalbpmi_summary["legacy_performance_status"] = $fdata;
		$tdatalbpmi_summary[".searchableFields"][] = "legacy_performance_status";


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
$proto0["m_strFieldList"] = "indicator_group_id,  	indicator_group_name,  	indicator_group_code,  	indicator_id,  	indicator_name,  	indicator_code,  	indicator_type,  	formula,  	period_type,  	period_year,  	period_quarter,  	period_month,  	region_id,  	region_name,  	country_id,  	country_name,  	facility_id,  	facility_name,  	actual_value,  	target_value,  	\"variance\",  	variance_percentage,  	calculation_timestamp,  	is_calculated,  	decimals,  	annualized,  	data_completeness,  	overall_completion_percentage,  	actual_value_completion,  	target_value_completion,  	completion_status,  	is_actual_missing,  	is_target_missing,  	data_freshness,  	days_since_last_calculation,  	performance_status,  	performance_percentage,  	data_quality_flag,  	data_hierarchy_level,  	period_completeness,  	calculation_method,  	formula_type,  	org_unit_validity,  	period_validity,  	legacy_performance_status";
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
	"m_strName" => "indicator_group_id",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto6["m_sql"] = "indicator_group_id";
$proto6["m_srcTableName"] = "public.lbpmi_summary";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_name",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto8["m_sql"] = "indicator_group_name";
$proto8["m_srcTableName"] = "public.lbpmi_summary";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_code",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto10["m_sql"] = "indicator_group_code";
$proto10["m_srcTableName"] = "public.lbpmi_summary";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto12["m_sql"] = "indicator_id";
$proto12["m_srcTableName"] = "public.lbpmi_summary";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto14["m_sql"] = "indicator_name";
$proto14["m_srcTableName"] = "public.lbpmi_summary";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_code",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto16["m_sql"] = "indicator_code";
$proto16["m_srcTableName"] = "public.lbpmi_summary";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_type",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto18["m_sql"] = "indicator_type";
$proto18["m_srcTableName"] = "public.lbpmi_summary";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "formula",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto20["m_sql"] = "formula";
$proto20["m_srcTableName"] = "public.lbpmi_summary";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "period_type",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto22["m_sql"] = "period_type";
$proto22["m_srcTableName"] = "public.lbpmi_summary";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "period_year",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto24["m_sql"] = "period_year";
$proto24["m_srcTableName"] = "public.lbpmi_summary";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "period_quarter",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto26["m_sql"] = "period_quarter";
$proto26["m_srcTableName"] = "public.lbpmi_summary";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "period_month",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto28["m_sql"] = "period_month";
$proto28["m_srcTableName"] = "public.lbpmi_summary";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto30["m_sql"] = "region_id";
$proto30["m_srcTableName"] = "public.lbpmi_summary";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto32["m_sql"] = "region_name";
$proto32["m_srcTableName"] = "public.lbpmi_summary";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto34["m_sql"] = "country_id";
$proto34["m_srcTableName"] = "public.lbpmi_summary";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto36["m_sql"] = "country_name";
$proto36["m_srcTableName"] = "public.lbpmi_summary";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto38["m_sql"] = "facility_id";
$proto38["m_srcTableName"] = "public.lbpmi_summary";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto40["m_sql"] = "facility_name";
$proto40["m_srcTableName"] = "public.lbpmi_summary";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "actual_value",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto42["m_sql"] = "actual_value";
$proto42["m_srcTableName"] = "public.lbpmi_summary";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "target_value",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto44["m_sql"] = "target_value";
$proto44["m_srcTableName"] = "public.lbpmi_summary";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "variance",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto46["m_sql"] = "\"variance\"";
$proto46["m_srcTableName"] = "public.lbpmi_summary";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "variance_percentage",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto48["m_sql"] = "variance_percentage";
$proto48["m_srcTableName"] = "public.lbpmi_summary";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "calculation_timestamp",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto50["m_sql"] = "calculation_timestamp";
$proto50["m_srcTableName"] = "public.lbpmi_summary";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "is_calculated",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto52["m_sql"] = "is_calculated";
$proto52["m_srcTableName"] = "public.lbpmi_summary";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "decimals",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto54["m_sql"] = "decimals";
$proto54["m_srcTableName"] = "public.lbpmi_summary";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "annualized",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto56["m_sql"] = "annualized";
$proto56["m_srcTableName"] = "public.lbpmi_summary";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "data_completeness",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto58["m_sql"] = "data_completeness";
$proto58["m_srcTableName"] = "public.lbpmi_summary";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "overall_completion_percentage",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto60["m_sql"] = "overall_completion_percentage";
$proto60["m_srcTableName"] = "public.lbpmi_summary";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "actual_value_completion",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto62["m_sql"] = "actual_value_completion";
$proto62["m_srcTableName"] = "public.lbpmi_summary";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "target_value_completion",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto64["m_sql"] = "target_value_completion";
$proto64["m_srcTableName"] = "public.lbpmi_summary";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "completion_status",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto66["m_sql"] = "completion_status";
$proto66["m_srcTableName"] = "public.lbpmi_summary";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "is_actual_missing",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto68["m_sql"] = "is_actual_missing";
$proto68["m_srcTableName"] = "public.lbpmi_summary";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "is_target_missing",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto70["m_sql"] = "is_target_missing";
$proto70["m_srcTableName"] = "public.lbpmi_summary";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "data_freshness",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto72["m_sql"] = "data_freshness";
$proto72["m_srcTableName"] = "public.lbpmi_summary";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "days_since_last_calculation",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto74["m_sql"] = "days_since_last_calculation";
$proto74["m_srcTableName"] = "public.lbpmi_summary";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "performance_status",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto76["m_sql"] = "performance_status";
$proto76["m_srcTableName"] = "public.lbpmi_summary";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "performance_percentage",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto78["m_sql"] = "performance_percentage";
$proto78["m_srcTableName"] = "public.lbpmi_summary";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "data_quality_flag",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto80["m_sql"] = "data_quality_flag";
$proto80["m_srcTableName"] = "public.lbpmi_summary";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "data_hierarchy_level",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto82["m_sql"] = "data_hierarchy_level";
$proto82["m_srcTableName"] = "public.lbpmi_summary";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "period_completeness",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto84["m_sql"] = "period_completeness";
$proto84["m_srcTableName"] = "public.lbpmi_summary";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "calculation_method",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto86["m_sql"] = "calculation_method";
$proto86["m_srcTableName"] = "public.lbpmi_summary";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "formula_type",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto88["m_sql"] = "formula_type";
$proto88["m_srcTableName"] = "public.lbpmi_summary";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "org_unit_validity",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto90["m_sql"] = "org_unit_validity";
$proto90["m_srcTableName"] = "public.lbpmi_summary";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "period_validity",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto92["m_sql"] = "period_validity";
$proto92["m_srcTableName"] = "public.lbpmi_summary";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "legacy_performance_status",
	"m_strTable" => "public.lbpmi_summary",
	"m_srcTableName" => "public.lbpmi_summary"
));

$proto94["m_sql"] = "legacy_performance_status";
$proto94["m_srcTableName"] = "public.lbpmi_summary";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto96=array();
$proto96["m_link"] = "SQLL_MAIN";
			$proto97=array();
$proto97["m_strName"] = "public.lbpmi_summary";
$proto97["m_srcTableName"] = "public.lbpmi_summary";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "indicator_group_id";
$proto97["m_columns"][] = "indicator_group_name";
$proto97["m_columns"][] = "indicator_group_code";
$proto97["m_columns"][] = "indicator_id";
$proto97["m_columns"][] = "indicator_name";
$proto97["m_columns"][] = "indicator_code";
$proto97["m_columns"][] = "indicator_type";
$proto97["m_columns"][] = "formula";
$proto97["m_columns"][] = "period_type";
$proto97["m_columns"][] = "period_year";
$proto97["m_columns"][] = "period_quarter";
$proto97["m_columns"][] = "period_month";
$proto97["m_columns"][] = "region_id";
$proto97["m_columns"][] = "region_name";
$proto97["m_columns"][] = "country_id";
$proto97["m_columns"][] = "country_name";
$proto97["m_columns"][] = "facility_id";
$proto97["m_columns"][] = "facility_name";
$proto97["m_columns"][] = "actual_value";
$proto97["m_columns"][] = "target_value";
$proto97["m_columns"][] = "variance";
$proto97["m_columns"][] = "variance_percentage";
$proto97["m_columns"][] = "calculation_timestamp";
$proto97["m_columns"][] = "is_calculated";
$proto97["m_columns"][] = "decimals";
$proto97["m_columns"][] = "annualized";
$proto97["m_columns"][] = "data_completeness";
$proto97["m_columns"][] = "overall_completion_percentage";
$proto97["m_columns"][] = "actual_value_completion";
$proto97["m_columns"][] = "target_value_completion";
$proto97["m_columns"][] = "completion_status";
$proto97["m_columns"][] = "is_actual_missing";
$proto97["m_columns"][] = "is_target_missing";
$proto97["m_columns"][] = "data_freshness";
$proto97["m_columns"][] = "days_since_last_calculation";
$proto97["m_columns"][] = "performance_status";
$proto97["m_columns"][] = "performance_percentage";
$proto97["m_columns"][] = "data_quality_flag";
$proto97["m_columns"][] = "data_hierarchy_level";
$proto97["m_columns"][] = "period_completeness";
$proto97["m_columns"][] = "calculation_method";
$proto97["m_columns"][] = "formula_type";
$proto97["m_columns"][] = "org_unit_validity";
$proto97["m_columns"][] = "period_validity";
$proto97["m_columns"][] = "legacy_performance_status";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "\"public\".lbpmi_summary";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "public.lbpmi_summary";
$proto98=array();
$proto98["m_sql"] = "";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

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