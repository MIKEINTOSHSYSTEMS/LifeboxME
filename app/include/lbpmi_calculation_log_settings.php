<?php
$tdatalbpmi_calculation_log = array();
$tdatalbpmi_calculation_log[".searchableFields"] = array();
$tdatalbpmi_calculation_log[".ShortName"] = "lbpmi_calculation_log";
$tdatalbpmi_calculation_log[".OwnerID"] = "";
$tdatalbpmi_calculation_log[".OriginalTable"] = "public.lbpmi_calculation_log";


$tdatalbpmi_calculation_log[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_calculation_log[".originalPagesByType"] = $tdatalbpmi_calculation_log[".pagesByType"];
$tdatalbpmi_calculation_log[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_calculation_log[".originalPages"] = $tdatalbpmi_calculation_log[".pages"];
$tdatalbpmi_calculation_log[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_calculation_log[".originalDefaultPages"] = $tdatalbpmi_calculation_log[".defaultPages"];

//	field labels
$fieldLabelslbpmi_calculation_log = array();
$fieldToolTipslbpmi_calculation_log = array();
$pageTitleslbpmi_calculation_log = array();
$placeHolderslbpmi_calculation_log = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_calculation_log["English"] = array();
	$fieldToolTipslbpmi_calculation_log["English"] = array();
	$placeHolderslbpmi_calculation_log["English"] = array();
	$pageTitleslbpmi_calculation_log["English"] = array();
	$fieldLabelslbpmi_calculation_log["English"]["log_id"] = "Log Id";
	$fieldToolTipslbpmi_calculation_log["English"]["log_id"] = "";
	$placeHolderslbpmi_calculation_log["English"]["log_id"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["indicator_id"] = "Indicator";
	$fieldToolTipslbpmi_calculation_log["English"]["indicator_id"] = "";
	$placeHolderslbpmi_calculation_log["English"]["indicator_id"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["calculation_type"] = "Calculation Type";
	$fieldToolTipslbpmi_calculation_log["English"]["calculation_type"] = "";
	$placeHolderslbpmi_calculation_log["English"]["calculation_type"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["period_type"] = "Period Type";
	$fieldToolTipslbpmi_calculation_log["English"]["period_type"] = "";
	$placeHolderslbpmi_calculation_log["English"]["period_type"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["calculated_value"] = "Calculated Value";
	$fieldToolTipslbpmi_calculation_log["English"]["calculated_value"] = "";
	$placeHolderslbpmi_calculation_log["English"]["calculated_value"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["calculation_timestamp"] = "Calculation Timestamp";
	$fieldToolTipslbpmi_calculation_log["English"]["calculation_timestamp"] = "";
	$placeHolderslbpmi_calculation_log["English"]["calculation_timestamp"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["status"] = "Status";
	$fieldToolTipslbpmi_calculation_log["English"]["status"] = "";
	$placeHolderslbpmi_calculation_log["English"]["status"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["error_message"] = "Error Message";
	$fieldToolTipslbpmi_calculation_log["English"]["error_message"] = "";
	$placeHolderslbpmi_calculation_log["English"]["error_message"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["data_element_id"] = "Data Element Id";
	$fieldToolTipslbpmi_calculation_log["English"]["data_element_id"] = "";
	$placeHolderslbpmi_calculation_log["English"]["data_element_id"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["period_year"] = "Period Year";
	$fieldToolTipslbpmi_calculation_log["English"]["period_year"] = "";
	$placeHolderslbpmi_calculation_log["English"]["period_year"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["period_quarter"] = "Period Quarter";
	$fieldToolTipslbpmi_calculation_log["English"]["period_quarter"] = "";
	$placeHolderslbpmi_calculation_log["English"]["period_quarter"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["period_month"] = "Period Month";
	$fieldToolTipslbpmi_calculation_log["English"]["period_month"] = "";
	$placeHolderslbpmi_calculation_log["English"]["period_month"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["region_id"] = "Region Id";
	$fieldToolTipslbpmi_calculation_log["English"]["region_id"] = "";
	$placeHolderslbpmi_calculation_log["English"]["region_id"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["country_id"] = "Country Id";
	$fieldToolTipslbpmi_calculation_log["English"]["country_id"] = "";
	$placeHolderslbpmi_calculation_log["English"]["country_id"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["facility_id"] = "Facility Id";
	$fieldToolTipslbpmi_calculation_log["English"]["facility_id"] = "";
	$placeHolderslbpmi_calculation_log["English"]["facility_id"] = "";
	$fieldLabelslbpmi_calculation_log["English"]["execution_time_ms"] = "Execution Time Ms";
	$fieldToolTipslbpmi_calculation_log["English"]["execution_time_ms"] = "";
	$placeHolderslbpmi_calculation_log["English"]["execution_time_ms"] = "";
	if (count($fieldToolTipslbpmi_calculation_log["English"]))
		$tdatalbpmi_calculation_log[".isUseToolTips"] = true;
}


	$tdatalbpmi_calculation_log[".NCSearch"] = true;



$tdatalbpmi_calculation_log[".shortTableName"] = "lbpmi_calculation_log";
$tdatalbpmi_calculation_log[".nSecOptions"] = 0;

$tdatalbpmi_calculation_log[".mainTableOwnerID"] = "";
$tdatalbpmi_calculation_log[".entityType"] = 0;
$tdatalbpmi_calculation_log[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_calculation_log[".strOriginalTableName"] = "public.lbpmi_calculation_log";

	



$tdatalbpmi_calculation_log[".showAddInPopup"] = false;

$tdatalbpmi_calculation_log[".showEditInPopup"] = false;

$tdatalbpmi_calculation_log[".showViewInPopup"] = false;

$tdatalbpmi_calculation_log[".listAjax"] = false;
//	temporary
//$tdatalbpmi_calculation_log[".listAjax"] = false;

	$tdatalbpmi_calculation_log[".audit"] = false;

	$tdatalbpmi_calculation_log[".locking"] = false;


$pages = $tdatalbpmi_calculation_log[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_calculation_log[".edit"] = true;
	$tdatalbpmi_calculation_log[".afterEditAction"] = 1;
	$tdatalbpmi_calculation_log[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_calculation_log[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_calculation_log[".add"] = true;
$tdatalbpmi_calculation_log[".afterAddAction"] = 1;
$tdatalbpmi_calculation_log[".closePopupAfterAdd"] = 1;
$tdatalbpmi_calculation_log[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_calculation_log[".list"] = true;
}



$tdatalbpmi_calculation_log[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_calculation_log[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_calculation_log[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_calculation_log[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_calculation_log[".printFriendly"] = true;
}



$tdatalbpmi_calculation_log[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_calculation_log[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_calculation_log[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_calculation_log[".isUseAjaxSuggest"] = true;



						

$tdatalbpmi_calculation_log[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_calculation_log[".buttonsAdded"] = false;

$tdatalbpmi_calculation_log[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_calculation_log[".isUseTimeForSearch"] = false;


$tdatalbpmi_calculation_log[".badgeColor"] = "6B8E23";


$tdatalbpmi_calculation_log[".allSearchFields"] = array();
$tdatalbpmi_calculation_log[".filterFields"] = array();
$tdatalbpmi_calculation_log[".requiredSearchFields"] = array();

$tdatalbpmi_calculation_log[".googleLikeFields"] = array();
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "log_id";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "data_element_id";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "calculation_type";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "period_type";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "period_year";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "period_quarter";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "period_month";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "region_id";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "country_id";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "facility_id";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "calculated_value";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "calculation_timestamp";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "status";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "error_message";
$tdatalbpmi_calculation_log[".googleLikeFields"][] = "execution_time_ms";



$tdatalbpmi_calculation_log[".tableType"] = "list";

$tdatalbpmi_calculation_log[".printerPageOrientation"] = 0;
$tdatalbpmi_calculation_log[".nPrinterPageScale"] = 100;

$tdatalbpmi_calculation_log[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_calculation_log[".geocodingEnabled"] = false;




$tdatalbpmi_calculation_log[".isDisplayLoading"] = true;






$tdatalbpmi_calculation_log[".pageSize"] = 20;

$tdatalbpmi_calculation_log[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_calculation_log[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_calculation_log[".orderindexes"] = array();


$tdatalbpmi_calculation_log[".sqlHead"] = "SELECT log_id,  	indicator_id,  	data_element_id,  	calculation_type,  	period_type,  	period_year,  	period_quarter,  	period_month,  	region_id,  	country_id,  	facility_id,  	calculated_value,  	calculation_timestamp,  	status,  	error_message,  	execution_time_ms";
$tdatalbpmi_calculation_log[".sqlFrom"] = "FROM \"public\".lbpmi_calculation_log";
$tdatalbpmi_calculation_log[".sqlWhereExpr"] = "";
$tdatalbpmi_calculation_log[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_calculation_log[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_calculation_log[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_calculation_log[".highlightSearchResults"] = true;

$tableKeyslbpmi_calculation_log = array();
$tableKeyslbpmi_calculation_log[] = "log_id";
$tdatalbpmi_calculation_log[".Keys"] = $tableKeyslbpmi_calculation_log;


$tdatalbpmi_calculation_log[".hideMobileList"] = array();




//	log_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_id";
	$fdata["GoodName"] = "log_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","log_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "log_id";

		$fdata["sourceSingle"] = "log_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "log_id";

	
	
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


	$tdatalbpmi_calculation_log["log_id"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "log_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","indicator_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lbpmi_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "indicator_name";

	

	
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


	$tdatalbpmi_calculation_log["indicator_id"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "indicator_id";
//	data_element_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_element_id";
	$fdata["GoodName"] = "data_element_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","data_element_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lbpmi_data_elements";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "data_element_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "data_element_name";

	

	
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


	$tdatalbpmi_calculation_log["data_element_id"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "data_element_id";
//	calculation_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "calculation_type";
	$fdata["GoodName"] = "calculation_type";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","calculation_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "calculation_type";

		$fdata["sourceSingle"] = "calculation_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calculation_type";

	
	
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


	$tdatalbpmi_calculation_log["calculation_type"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "calculation_type";
//	period_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "period_type";
	$fdata["GoodName"] = "period_type";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","period_type");
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


	$tdatalbpmi_calculation_log["period_type"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "period_type";
//	period_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "period_year";
	$fdata["GoodName"] = "period_year";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","period_year");
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


	$tdatalbpmi_calculation_log["period_year"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "period_year";
//	period_quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "period_quarter";
	$fdata["GoodName"] = "period_quarter";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","period_quarter");
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


	$tdatalbpmi_calculation_log["period_quarter"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "period_quarter";
//	period_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "period_month";
	$fdata["GoodName"] = "period_month";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","period_month");
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


	$tdatalbpmi_calculation_log["period_month"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "period_month";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","region_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "region_name";

	

	
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


	$tdatalbpmi_calculation_log["region_id"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "region_id";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","country_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.countries";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "country_name";

	

	
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


	$tdatalbpmi_calculation_log["country_id"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "country_id";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","facility_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.facilities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "facility_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "facility_name";

	

	
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


	$tdatalbpmi_calculation_log["facility_id"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "facility_id";
//	calculated_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "calculated_value";
	$fdata["GoodName"] = "calculated_value";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","calculated_value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "calculated_value";

		$fdata["sourceSingle"] = "calculated_value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calculated_value";

	
	
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


	$tdatalbpmi_calculation_log["calculated_value"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "calculated_value";
//	calculation_timestamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "calculation_timestamp";
	$fdata["GoodName"] = "calculation_timestamp";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","calculation_timestamp");
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


	$tdatalbpmi_calculation_log["calculation_timestamp"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "calculation_timestamp";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","status");
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


	$tdatalbpmi_calculation_log["status"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "status";
//	error_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "error_message";
	$fdata["GoodName"] = "error_message";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","error_message");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "error_message";

		$fdata["sourceSingle"] = "error_message";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "error_message";

	
	
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


	$tdatalbpmi_calculation_log["error_message"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "error_message";
//	execution_time_ms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "execution_time_ms";
	$fdata["GoodName"] = "execution_time_ms";
	$fdata["ownerTable"] = "public.lbpmi_calculation_log";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_log","execution_time_ms");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "execution_time_ms";

		$fdata["sourceSingle"] = "execution_time_ms";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "execution_time_ms";

	
	
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


	$tdatalbpmi_calculation_log["execution_time_ms"] = $fdata;
		$tdatalbpmi_calculation_log[".searchableFields"][] = "execution_time_ms";


$tables_data["public.lbpmi_calculation_log"]=&$tdatalbpmi_calculation_log;
$field_labels["public_lbpmi_calculation_log"] = &$fieldLabelslbpmi_calculation_log;
$fieldToolTips["public_lbpmi_calculation_log"] = &$fieldToolTipslbpmi_calculation_log;
$placeHolders["public_lbpmi_calculation_log"] = &$placeHolderslbpmi_calculation_log;
$page_titles["public_lbpmi_calculation_log"] = &$pageTitleslbpmi_calculation_log;


changeTextControlsToDate( "public.lbpmi_calculation_log" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_calculation_log"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_calculation_log"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbpmi_indicators";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbpmi_indicators";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbpmi_indicators";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbpmi_calculation_log"][0] = $masterParams;
				$masterTablesData["public.lbpmi_calculation_log"][0]["masterKeys"] = array();
	$masterTablesData["public.lbpmi_calculation_log"][0]["masterKeys"][]="indicator_id";
				$masterTablesData["public.lbpmi_calculation_log"][0]["detailKeys"] = array();
	$masterTablesData["public.lbpmi_calculation_log"][0]["detailKeys"][]="indicator_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_calculation_log()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "log_id,  	indicator_id,  	data_element_id,  	calculation_type,  	period_type,  	period_year,  	period_quarter,  	period_month,  	region_id,  	country_id,  	facility_id,  	calculated_value,  	calculation_timestamp,  	status,  	error_message,  	execution_time_ms";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_calculation_log";
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
	"m_strName" => "log_id",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto6["m_sql"] = "log_id";
$proto6["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_element_id",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto10["m_sql"] = "data_element_id";
$proto10["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "calculation_type",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto12["m_sql"] = "calculation_type";
$proto12["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "period_type",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto14["m_sql"] = "period_type";
$proto14["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "period_year",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto16["m_sql"] = "period_year";
$proto16["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "period_quarter",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto18["m_sql"] = "period_quarter";
$proto18["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "period_month",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto20["m_sql"] = "period_month";
$proto20["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto22["m_sql"] = "region_id";
$proto22["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto24["m_sql"] = "country_id";
$proto24["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto26["m_sql"] = "facility_id";
$proto26["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "calculated_value",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto28["m_sql"] = "calculated_value";
$proto28["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "calculation_timestamp",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto30["m_sql"] = "calculation_timestamp";
$proto30["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto32["m_sql"] = "status";
$proto32["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "error_message",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto34["m_sql"] = "error_message";
$proto34["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "execution_time_ms",
	"m_strTable" => "public.lbpmi_calculation_log",
	"m_srcTableName" => "public.lbpmi_calculation_log"
));

$proto36["m_sql"] = "execution_time_ms";
$proto36["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "public.lbpmi_calculation_log";
$proto39["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "log_id";
$proto39["m_columns"][] = "indicator_id";
$proto39["m_columns"][] = "data_element_id";
$proto39["m_columns"][] = "calculation_type";
$proto39["m_columns"][] = "period_type";
$proto39["m_columns"][] = "period_year";
$proto39["m_columns"][] = "period_quarter";
$proto39["m_columns"][] = "period_month";
$proto39["m_columns"][] = "region_id";
$proto39["m_columns"][] = "country_id";
$proto39["m_columns"][] = "facility_id";
$proto39["m_columns"][] = "calculated_value";
$proto39["m_columns"][] = "calculation_timestamp";
$proto39["m_columns"][] = "status";
$proto39["m_columns"][] = "error_message";
$proto39["m_columns"][] = "execution_time_ms";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "\"public\".lbpmi_calculation_log";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "public.lbpmi_calculation_log";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbpmi_calculation_log";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_calculation_log = createSqlQuery_lbpmi_calculation_log();


	
				;

																

$tdatalbpmi_calculation_log[".sqlquery"] = $queryData_lbpmi_calculation_log;



$tdatalbpmi_calculation_log[".hasEvents"] = false;

?>