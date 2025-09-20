<?php
$tdatalbpmi_calculation_jobs = array();
$tdatalbpmi_calculation_jobs[".searchableFields"] = array();
$tdatalbpmi_calculation_jobs[".ShortName"] = "lbpmi_calculation_jobs";
$tdatalbpmi_calculation_jobs[".OwnerID"] = "";
$tdatalbpmi_calculation_jobs[".OriginalTable"] = "public.lbpmi_calculation_jobs";


$tdatalbpmi_calculation_jobs[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_calculation_jobs[".originalPagesByType"] = $tdatalbpmi_calculation_jobs[".pagesByType"];
$tdatalbpmi_calculation_jobs[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_calculation_jobs[".originalPages"] = $tdatalbpmi_calculation_jobs[".pages"];
$tdatalbpmi_calculation_jobs[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_calculation_jobs[".originalDefaultPages"] = $tdatalbpmi_calculation_jobs[".defaultPages"];

//	field labels
$fieldLabelslbpmi_calculation_jobs = array();
$fieldToolTipslbpmi_calculation_jobs = array();
$pageTitleslbpmi_calculation_jobs = array();
$placeHolderslbpmi_calculation_jobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_calculation_jobs["English"] = array();
	$fieldToolTipslbpmi_calculation_jobs["English"] = array();
	$placeHolderslbpmi_calculation_jobs["English"] = array();
	$pageTitleslbpmi_calculation_jobs["English"] = array();
	$fieldLabelslbpmi_calculation_jobs["English"]["job_id"] = "Job Id";
	$fieldToolTipslbpmi_calculation_jobs["English"]["job_id"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["job_id"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipslbpmi_calculation_jobs["English"]["indicator_id"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["indicator_id"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["status"] = "Status";
	$fieldToolTipslbpmi_calculation_jobs["English"]["status"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["status"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_calculation_jobs["English"]["created_at"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["created_at"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["processed_at"] = "Processed At";
	$fieldToolTipslbpmi_calculation_jobs["English"]["processed_at"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["processed_at"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["error_message"] = "Error Message";
	$fieldToolTipslbpmi_calculation_jobs["English"]["error_message"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["error_message"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["data_element_id"] = "Data Element Id";
	$fieldToolTipslbpmi_calculation_jobs["English"]["data_element_id"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["data_element_id"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["period_type"] = "Period Type";
	$fieldToolTipslbpmi_calculation_jobs["English"]["period_type"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["period_type"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["period_year"] = "Period Year";
	$fieldToolTipslbpmi_calculation_jobs["English"]["period_year"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["period_year"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["period_quarter"] = "Period Quarter";
	$fieldToolTipslbpmi_calculation_jobs["English"]["period_quarter"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["period_quarter"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["period_month"] = "Period Month";
	$fieldToolTipslbpmi_calculation_jobs["English"]["period_month"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["period_month"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["region_id"] = "Region Id";
	$fieldToolTipslbpmi_calculation_jobs["English"]["region_id"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["region_id"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["country_id"] = "Country Id";
	$fieldToolTipslbpmi_calculation_jobs["English"]["country_id"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["country_id"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["facility_id"] = "Facility Id";
	$fieldToolTipslbpmi_calculation_jobs["English"]["facility_id"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["facility_id"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["priority"] = "Priority";
	$fieldToolTipslbpmi_calculation_jobs["English"]["priority"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["priority"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["attempts"] = "Attempts";
	$fieldToolTipslbpmi_calculation_jobs["English"]["attempts"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["attempts"] = "";
	$fieldLabelslbpmi_calculation_jobs["English"]["next_retry"] = "Next Retry";
	$fieldToolTipslbpmi_calculation_jobs["English"]["next_retry"] = "";
	$placeHolderslbpmi_calculation_jobs["English"]["next_retry"] = "";
	if (count($fieldToolTipslbpmi_calculation_jobs["English"]))
		$tdatalbpmi_calculation_jobs[".isUseToolTips"] = true;
}


	$tdatalbpmi_calculation_jobs[".NCSearch"] = true;



$tdatalbpmi_calculation_jobs[".shortTableName"] = "lbpmi_calculation_jobs";
$tdatalbpmi_calculation_jobs[".nSecOptions"] = 0;

$tdatalbpmi_calculation_jobs[".mainTableOwnerID"] = "";
$tdatalbpmi_calculation_jobs[".entityType"] = 0;
$tdatalbpmi_calculation_jobs[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_calculation_jobs[".strOriginalTableName"] = "public.lbpmi_calculation_jobs";

	



$tdatalbpmi_calculation_jobs[".showAddInPopup"] = false;

$tdatalbpmi_calculation_jobs[".showEditInPopup"] = false;

$tdatalbpmi_calculation_jobs[".showViewInPopup"] = false;

$tdatalbpmi_calculation_jobs[".listAjax"] = false;
//	temporary
//$tdatalbpmi_calculation_jobs[".listAjax"] = false;

	$tdatalbpmi_calculation_jobs[".audit"] = false;

	$tdatalbpmi_calculation_jobs[".locking"] = false;


$pages = $tdatalbpmi_calculation_jobs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_calculation_jobs[".edit"] = true;
	$tdatalbpmi_calculation_jobs[".afterEditAction"] = 1;
	$tdatalbpmi_calculation_jobs[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_calculation_jobs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_calculation_jobs[".add"] = true;
$tdatalbpmi_calculation_jobs[".afterAddAction"] = 1;
$tdatalbpmi_calculation_jobs[".closePopupAfterAdd"] = 1;
$tdatalbpmi_calculation_jobs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_calculation_jobs[".list"] = true;
}



$tdatalbpmi_calculation_jobs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_calculation_jobs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_calculation_jobs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_calculation_jobs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_calculation_jobs[".printFriendly"] = true;
}



$tdatalbpmi_calculation_jobs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_calculation_jobs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_calculation_jobs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_calculation_jobs[".isUseAjaxSuggest"] = true;



			

$tdatalbpmi_calculation_jobs[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_calculation_jobs[".buttonsAdded"] = false;

$tdatalbpmi_calculation_jobs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_calculation_jobs[".isUseTimeForSearch"] = false;


$tdatalbpmi_calculation_jobs[".badgeColor"] = "6493EA";


$tdatalbpmi_calculation_jobs[".allSearchFields"] = array();
$tdatalbpmi_calculation_jobs[".filterFields"] = array();
$tdatalbpmi_calculation_jobs[".requiredSearchFields"] = array();

$tdatalbpmi_calculation_jobs[".googleLikeFields"] = array();
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "job_id";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "data_element_id";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "period_type";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "period_year";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "period_quarter";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "period_month";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "region_id";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "country_id";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "facility_id";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "priority";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "status";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "created_at";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "processed_at";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "error_message";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "attempts";
$tdatalbpmi_calculation_jobs[".googleLikeFields"][] = "next_retry";



$tdatalbpmi_calculation_jobs[".tableType"] = "list";

$tdatalbpmi_calculation_jobs[".printerPageOrientation"] = 0;
$tdatalbpmi_calculation_jobs[".nPrinterPageScale"] = 100;

$tdatalbpmi_calculation_jobs[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_calculation_jobs[".geocodingEnabled"] = false;




$tdatalbpmi_calculation_jobs[".isDisplayLoading"] = true;






$tdatalbpmi_calculation_jobs[".pageSize"] = 20;

$tdatalbpmi_calculation_jobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_calculation_jobs[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_calculation_jobs[".orderindexes"] = array();


$tdatalbpmi_calculation_jobs[".sqlHead"] = "SELECT job_id,  	indicator_id,  	data_element_id,  	period_type,  	period_year,  	period_quarter,  	period_month,  	region_id,  	country_id,  	facility_id,  	priority,  	status,  	created_at,  	processed_at,  	error_message,  	attempts,  	next_retry";
$tdatalbpmi_calculation_jobs[".sqlFrom"] = "FROM \"public\".lbpmi_calculation_jobs";
$tdatalbpmi_calculation_jobs[".sqlWhereExpr"] = "";
$tdatalbpmi_calculation_jobs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_calculation_jobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_calculation_jobs[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_calculation_jobs[".highlightSearchResults"] = true;

$tableKeyslbpmi_calculation_jobs = array();
$tableKeyslbpmi_calculation_jobs[] = "job_id";
$tdatalbpmi_calculation_jobs[".Keys"] = $tableKeyslbpmi_calculation_jobs;


$tdatalbpmi_calculation_jobs[".hideMobileList"] = array();




//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","job_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "job_id";

		$fdata["sourceSingle"] = "job_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_id";

	
	
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


	$tdatalbpmi_calculation_jobs["job_id"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "job_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","indicator_id");
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
	$edata["LinkFieldType"] = 0;
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "job_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbpmi_calculation_jobs["indicator_id"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "indicator_id";
//	data_element_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_element_id";
	$fdata["GoodName"] = "data_element_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","data_element_id");
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


	$tdatalbpmi_calculation_jobs["data_element_id"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "data_element_id";
//	period_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "period_type";
	$fdata["GoodName"] = "period_type";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","period_type");
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


	$tdatalbpmi_calculation_jobs["period_type"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "period_type";
//	period_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "period_year";
	$fdata["GoodName"] = "period_year";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","period_year");
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


	$tdatalbpmi_calculation_jobs["period_year"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "period_year";
//	period_quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "period_quarter";
	$fdata["GoodName"] = "period_quarter";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","period_quarter");
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


	$tdatalbpmi_calculation_jobs["period_quarter"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "period_quarter";
//	period_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "period_month";
	$fdata["GoodName"] = "period_month";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","period_month");
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


	$tdatalbpmi_calculation_jobs["period_month"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "period_month";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","region_id");
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


	$tdatalbpmi_calculation_jobs["region_id"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "region_id";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","country_id");
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


	$tdatalbpmi_calculation_jobs["country_id"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "country_id";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","facility_id");
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


	$tdatalbpmi_calculation_jobs["facility_id"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "facility_id";
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","priority");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "priority";

		$fdata["sourceSingle"] = "priority";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priority";

	
	
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


	$tdatalbpmi_calculation_jobs["priority"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "priority";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","status");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "job_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalbpmi_calculation_jobs["status"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "status";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","created_at");
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


	$tdatalbpmi_calculation_jobs["created_at"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "created_at";
//	processed_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "processed_at";
	$fdata["GoodName"] = "processed_at";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","processed_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "processed_at";

		$fdata["sourceSingle"] = "processed_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "processed_at";

	
	
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


	$tdatalbpmi_calculation_jobs["processed_at"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "processed_at";
//	error_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "error_message";
	$fdata["GoodName"] = "error_message";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","error_message");
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


	$tdatalbpmi_calculation_jobs["error_message"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "error_message";
//	attempts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "attempts";
	$fdata["GoodName"] = "attempts";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","attempts");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "attempts";

		$fdata["sourceSingle"] = "attempts";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attempts";

	
	
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


	$tdatalbpmi_calculation_jobs["attempts"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "attempts";
//	next_retry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "next_retry";
	$fdata["GoodName"] = "next_retry";
	$fdata["ownerTable"] = "public.lbpmi_calculation_jobs";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_calculation_jobs","next_retry");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "next_retry";

		$fdata["sourceSingle"] = "next_retry";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "next_retry";

	
	
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


	$tdatalbpmi_calculation_jobs["next_retry"] = $fdata;
		$tdatalbpmi_calculation_jobs[".searchableFields"][] = "next_retry";


$tables_data["public.lbpmi_calculation_jobs"]=&$tdatalbpmi_calculation_jobs;
$field_labels["public_lbpmi_calculation_jobs"] = &$fieldLabelslbpmi_calculation_jobs;
$fieldToolTips["public_lbpmi_calculation_jobs"] = &$fieldToolTipslbpmi_calculation_jobs;
$placeHolders["public_lbpmi_calculation_jobs"] = &$placeHolderslbpmi_calculation_jobs;
$page_titles["public_lbpmi_calculation_jobs"] = &$pageTitleslbpmi_calculation_jobs;


changeTextControlsToDate( "public.lbpmi_calculation_jobs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_calculation_jobs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_calculation_jobs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_calculation_jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "job_id,  	indicator_id,  	data_element_id,  	period_type,  	period_year,  	period_quarter,  	period_month,  	region_id,  	country_id,  	facility_id,  	priority,  	status,  	created_at,  	processed_at,  	error_message,  	attempts,  	next_retry";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_calculation_jobs";
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
	"m_strName" => "job_id",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto6["m_sql"] = "job_id";
$proto6["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_element_id",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto10["m_sql"] = "data_element_id";
$proto10["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "period_type",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto12["m_sql"] = "period_type";
$proto12["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "period_year",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto14["m_sql"] = "period_year";
$proto14["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "period_quarter",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto16["m_sql"] = "period_quarter";
$proto16["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "period_month",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto18["m_sql"] = "period_month";
$proto18["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto20["m_sql"] = "region_id";
$proto20["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto22["m_sql"] = "country_id";
$proto22["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto24["m_sql"] = "facility_id";
$proto24["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto26["m_sql"] = "priority";
$proto26["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto28["m_sql"] = "status";
$proto28["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto30["m_sql"] = "created_at";
$proto30["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "processed_at",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto32["m_sql"] = "processed_at";
$proto32["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "error_message",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto34["m_sql"] = "error_message";
$proto34["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "attempts",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto36["m_sql"] = "attempts";
$proto36["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "next_retry",
	"m_strTable" => "public.lbpmi_calculation_jobs",
	"m_srcTableName" => "public.lbpmi_calculation_jobs"
));

$proto38["m_sql"] = "next_retry";
$proto38["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "public.lbpmi_calculation_jobs";
$proto41["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "job_id";
$proto41["m_columns"][] = "indicator_id";
$proto41["m_columns"][] = "data_element_id";
$proto41["m_columns"][] = "period_type";
$proto41["m_columns"][] = "period_year";
$proto41["m_columns"][] = "period_quarter";
$proto41["m_columns"][] = "period_month";
$proto41["m_columns"][] = "region_id";
$proto41["m_columns"][] = "country_id";
$proto41["m_columns"][] = "facility_id";
$proto41["m_columns"][] = "priority";
$proto41["m_columns"][] = "status";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "processed_at";
$proto41["m_columns"][] = "error_message";
$proto41["m_columns"][] = "attempts";
$proto41["m_columns"][] = "next_retry";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "\"public\".lbpmi_calculation_jobs";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "public.lbpmi_calculation_jobs";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbpmi_calculation_jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_calculation_jobs = createSqlQuery_lbpmi_calculation_jobs();


	
				;

																	

$tdatalbpmi_calculation_jobs[".sqlquery"] = $queryData_lbpmi_calculation_jobs;



include_once(getabspath("include/lbpmi_calculation_jobs_events.php"));
$tdatalbpmi_calculation_jobs[".hasEvents"] = true;

?>