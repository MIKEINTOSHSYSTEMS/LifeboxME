<?php
$tdataclean_cut_implementation_summary_view = array();
$tdataclean_cut_implementation_summary_view[".searchableFields"] = array();
$tdataclean_cut_implementation_summary_view[".ShortName"] = "clean_cut_implementation_summary_view";
$tdataclean_cut_implementation_summary_view[".OwnerID"] = "";
$tdataclean_cut_implementation_summary_view[".OriginalTable"] = "public.clean_cut_implementation_summary_view";


$tdataclean_cut_implementation_summary_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataclean_cut_implementation_summary_view[".originalPagesByType"] = $tdataclean_cut_implementation_summary_view[".pagesByType"];
$tdataclean_cut_implementation_summary_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataclean_cut_implementation_summary_view[".originalPages"] = $tdataclean_cut_implementation_summary_view[".pages"];
$tdataclean_cut_implementation_summary_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataclean_cut_implementation_summary_view[".originalDefaultPages"] = $tdataclean_cut_implementation_summary_view[".defaultPages"];

//	field labels
$fieldLabelsclean_cut_implementation_summary_view = array();
$fieldToolTipsclean_cut_implementation_summary_view = array();
$pageTitlesclean_cut_implementation_summary_view = array();
$placeHoldersclean_cut_implementation_summary_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclean_cut_implementation_summary_view["English"] = array();
	$fieldToolTipsclean_cut_implementation_summary_view["English"] = array();
	$placeHoldersclean_cut_implementation_summary_view["English"] = array();
	$pageTitlesclean_cut_implementation_summary_view["English"] = array();
	$fieldLabelsclean_cut_implementation_summary_view["English"]["implementation_id"] = "Implementation Id";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["implementation_id"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["implementation_id"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["facility_name"] = "Facility Name";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["facility_name"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["facility_name"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["country_name"] = "Country Name";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["country_name"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["country_name"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["region_name"] = "Region Name";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["region_name"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["region_name"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["implementation_year"] = "Implementation Year";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["implementation_year"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["implementation_year"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["start_date"] = "Start Date";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["start_date"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["start_date"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["end_date"] = "End Date";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["end_date"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["end_date"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["implementation_months"] = "Implementation Months";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["implementation_months"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["implementation_months"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["avg_monthly_surgical_volume"] = "Avg Monthly Surgical Volume";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["avg_monthly_surgical_volume"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["avg_monthly_surgical_volume"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["estimated_operations_impacted"] = "Estimated Operations Impacted";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["estimated_operations_impacted"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["estimated_operations_impacted"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["general_surgery_volume"] = "General Surgery Volume";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["general_surgery_volume"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["general_surgery_volume"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["ob_gyn_volume"] = "Ob Gyn Volume";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["ob_gyn_volume"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["ob_gyn_volume"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["pediatrics_volume"] = "Pediatrics Volume";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["pediatrics_volume"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["pediatrics_volume"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["ortho_volume"] = "Ortho Volume";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["ortho_volume"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["ortho_volume"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["total_volume"] = "Total Volume";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["total_volume"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["total_volume"] = "";
	$fieldLabelsclean_cut_implementation_summary_view["English"]["remarks"] = "Remarks";
	$fieldToolTipsclean_cut_implementation_summary_view["English"]["remarks"] = "";
	$placeHoldersclean_cut_implementation_summary_view["English"]["remarks"] = "";
	if (count($fieldToolTipsclean_cut_implementation_summary_view["English"]))
		$tdataclean_cut_implementation_summary_view[".isUseToolTips"] = true;
}


	$tdataclean_cut_implementation_summary_view[".NCSearch"] = true;



$tdataclean_cut_implementation_summary_view[".shortTableName"] = "clean_cut_implementation_summary_view";
$tdataclean_cut_implementation_summary_view[".nSecOptions"] = 0;

$tdataclean_cut_implementation_summary_view[".mainTableOwnerID"] = "";
$tdataclean_cut_implementation_summary_view[".entityType"] = 0;
$tdataclean_cut_implementation_summary_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdataclean_cut_implementation_summary_view[".strOriginalTableName"] = "public.clean_cut_implementation_summary_view";

	



$tdataclean_cut_implementation_summary_view[".showAddInPopup"] = false;

$tdataclean_cut_implementation_summary_view[".showEditInPopup"] = false;

$tdataclean_cut_implementation_summary_view[".showViewInPopup"] = false;

$tdataclean_cut_implementation_summary_view[".listAjax"] = false;
//	temporary
//$tdataclean_cut_implementation_summary_view[".listAjax"] = false;

	$tdataclean_cut_implementation_summary_view[".audit"] = false;

	$tdataclean_cut_implementation_summary_view[".locking"] = false;


$pages = $tdataclean_cut_implementation_summary_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataclean_cut_implementation_summary_view[".edit"] = true;
	$tdataclean_cut_implementation_summary_view[".afterEditAction"] = 1;
	$tdataclean_cut_implementation_summary_view[".closePopupAfterEdit"] = 1;
	$tdataclean_cut_implementation_summary_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataclean_cut_implementation_summary_view[".add"] = true;
$tdataclean_cut_implementation_summary_view[".afterAddAction"] = 1;
$tdataclean_cut_implementation_summary_view[".closePopupAfterAdd"] = 1;
$tdataclean_cut_implementation_summary_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataclean_cut_implementation_summary_view[".list"] = true;
}



$tdataclean_cut_implementation_summary_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataclean_cut_implementation_summary_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataclean_cut_implementation_summary_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataclean_cut_implementation_summary_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataclean_cut_implementation_summary_view[".printFriendly"] = true;
}



$tdataclean_cut_implementation_summary_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataclean_cut_implementation_summary_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataclean_cut_implementation_summary_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataclean_cut_implementation_summary_view[".isUseAjaxSuggest"] = true;





$tdataclean_cut_implementation_summary_view[".ajaxCodeSnippetAdded"] = false;

$tdataclean_cut_implementation_summary_view[".buttonsAdded"] = false;

$tdataclean_cut_implementation_summary_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclean_cut_implementation_summary_view[".isUseTimeForSearch"] = false;


$tdataclean_cut_implementation_summary_view[".badgeColor"] = "DAA520";


$tdataclean_cut_implementation_summary_view[".allSearchFields"] = array();
$tdataclean_cut_implementation_summary_view[".filterFields"] = array();
$tdataclean_cut_implementation_summary_view[".requiredSearchFields"] = array();

$tdataclean_cut_implementation_summary_view[".googleLikeFields"] = array();
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "implementation_id";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "facility_name";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "country_name";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "region_name";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "implementation_year";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "start_date";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "end_date";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "implementation_months";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "avg_monthly_surgical_volume";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "estimated_operations_impacted";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "general_surgery_volume";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "ob_gyn_volume";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "pediatrics_volume";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "ortho_volume";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "total_volume";
$tdataclean_cut_implementation_summary_view[".googleLikeFields"][] = "remarks";



$tdataclean_cut_implementation_summary_view[".tableType"] = "list";

$tdataclean_cut_implementation_summary_view[".printerPageOrientation"] = 0;
$tdataclean_cut_implementation_summary_view[".nPrinterPageScale"] = 100;

$tdataclean_cut_implementation_summary_view[".nPrinterSplitRecords"] = 40;

$tdataclean_cut_implementation_summary_view[".geocodingEnabled"] = false;










$tdataclean_cut_implementation_summary_view[".pageSize"] = 20;

$tdataclean_cut_implementation_summary_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataclean_cut_implementation_summary_view[".strOrderBy"] = $tstrOrderBy;

$tdataclean_cut_implementation_summary_view[".orderindexes"] = array();


$tdataclean_cut_implementation_summary_view[".sqlHead"] = "SELECT implementation_id,  	facility_name,  	country_name,  	region_name,  	implementation_year,  	start_date,  	end_date,  	implementation_months,  	avg_monthly_surgical_volume,  	estimated_operations_impacted,  	general_surgery_volume,  	ob_gyn_volume,  	pediatrics_volume,  	ortho_volume,  	total_volume,  	remarks";
$tdataclean_cut_implementation_summary_view[".sqlFrom"] = "FROM \"public\".clean_cut_implementation_summary_view";
$tdataclean_cut_implementation_summary_view[".sqlWhereExpr"] = "";
$tdataclean_cut_implementation_summary_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclean_cut_implementation_summary_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclean_cut_implementation_summary_view[".arrGroupsPerPage"] = $arrGPP;

$tdataclean_cut_implementation_summary_view[".highlightSearchResults"] = true;

$tableKeysclean_cut_implementation_summary_view = array();
$tdataclean_cut_implementation_summary_view[".Keys"] = $tableKeysclean_cut_implementation_summary_view;


$tdataclean_cut_implementation_summary_view[".hideMobileList"] = array();




//	implementation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "implementation_id";
	$fdata["GoodName"] = "implementation_id";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","implementation_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "implementation_id";

		$fdata["sourceSingle"] = "implementation_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "implementation_id";

	
	
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


	$tdataclean_cut_implementation_summary_view["implementation_id"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "implementation_id";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","facility_name");
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


	$tdataclean_cut_implementation_summary_view["facility_name"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "facility_name";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","country_name");
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


	$tdataclean_cut_implementation_summary_view["country_name"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "country_name";
//	region_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "region_name";
	$fdata["GoodName"] = "region_name";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","region_name");
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


	$tdataclean_cut_implementation_summary_view["region_name"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "region_name";
//	implementation_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "implementation_year";
	$fdata["GoodName"] = "implementation_year";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","implementation_year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "implementation_year";

		$fdata["sourceSingle"] = "implementation_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "implementation_year";

	
	
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


	$tdataclean_cut_implementation_summary_view["implementation_year"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "implementation_year";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

		$fdata["sourceSingle"] = "start_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_date";

	
	
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


	$tdataclean_cut_implementation_summary_view["start_date"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

		$fdata["sourceSingle"] = "end_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";

	
	
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


	$tdataclean_cut_implementation_summary_view["end_date"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "end_date";
//	implementation_months
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "implementation_months";
	$fdata["GoodName"] = "implementation_months";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","implementation_months");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "implementation_months";

		$fdata["sourceSingle"] = "implementation_months";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "implementation_months";

	
	
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


	$tdataclean_cut_implementation_summary_view["implementation_months"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "implementation_months";
//	avg_monthly_surgical_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "avg_monthly_surgical_volume";
	$fdata["GoodName"] = "avg_monthly_surgical_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","avg_monthly_surgical_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "avg_monthly_surgical_volume";

		$fdata["sourceSingle"] = "avg_monthly_surgical_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avg_monthly_surgical_volume";

	
	
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


	$tdataclean_cut_implementation_summary_view["avg_monthly_surgical_volume"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "avg_monthly_surgical_volume";
//	estimated_operations_impacted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "estimated_operations_impacted";
	$fdata["GoodName"] = "estimated_operations_impacted";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","estimated_operations_impacted");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estimated_operations_impacted";

		$fdata["sourceSingle"] = "estimated_operations_impacted";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estimated_operations_impacted";

	
	
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


	$tdataclean_cut_implementation_summary_view["estimated_operations_impacted"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "estimated_operations_impacted";
//	general_surgery_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "general_surgery_volume";
	$fdata["GoodName"] = "general_surgery_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","general_surgery_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "general_surgery_volume";

		$fdata["sourceSingle"] = "general_surgery_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "general_surgery_volume";

	
	
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


	$tdataclean_cut_implementation_summary_view["general_surgery_volume"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "general_surgery_volume";
//	ob_gyn_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ob_gyn_volume";
	$fdata["GoodName"] = "ob_gyn_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","ob_gyn_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ob_gyn_volume";

		$fdata["sourceSingle"] = "ob_gyn_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ob_gyn_volume";

	
	
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


	$tdataclean_cut_implementation_summary_view["ob_gyn_volume"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "ob_gyn_volume";
//	pediatrics_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "pediatrics_volume";
	$fdata["GoodName"] = "pediatrics_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","pediatrics_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pediatrics_volume";

		$fdata["sourceSingle"] = "pediatrics_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pediatrics_volume";

	
	
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


	$tdataclean_cut_implementation_summary_view["pediatrics_volume"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "pediatrics_volume";
//	ortho_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ortho_volume";
	$fdata["GoodName"] = "ortho_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","ortho_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ortho_volume";

		$fdata["sourceSingle"] = "ortho_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ortho_volume";

	
	
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


	$tdataclean_cut_implementation_summary_view["ortho_volume"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "ortho_volume";
//	total_volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "total_volume";
	$fdata["GoodName"] = "total_volume";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","total_volume");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_volume";

		$fdata["sourceSingle"] = "total_volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_volume";

	
	
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


	$tdataclean_cut_implementation_summary_view["total_volume"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "total_volume";
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "public.clean_cut_implementation_summary_view";
	$fdata["Label"] = GetFieldLabel("public_clean_cut_implementation_summary_view","remarks");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "remarks";

		$fdata["sourceSingle"] = "remarks";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarks";

	
	
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


	$tdataclean_cut_implementation_summary_view["remarks"] = $fdata;
		$tdataclean_cut_implementation_summary_view[".searchableFields"][] = "remarks";


$tables_data["public.clean_cut_implementation_summary_view"]=&$tdataclean_cut_implementation_summary_view;
$field_labels["public_clean_cut_implementation_summary_view"] = &$fieldLabelsclean_cut_implementation_summary_view;
$fieldToolTips["public_clean_cut_implementation_summary_view"] = &$fieldToolTipsclean_cut_implementation_summary_view;
$placeHolders["public_clean_cut_implementation_summary_view"] = &$placeHoldersclean_cut_implementation_summary_view;
$page_titles["public_clean_cut_implementation_summary_view"] = &$pageTitlesclean_cut_implementation_summary_view;


changeTextControlsToDate( "public.clean_cut_implementation_summary_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.clean_cut_implementation_summary_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.clean_cut_implementation_summary_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_clean_cut_implementation_summary_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "implementation_id,  	facility_name,  	country_name,  	region_name,  	implementation_year,  	start_date,  	end_date,  	implementation_months,  	avg_monthly_surgical_volume,  	estimated_operations_impacted,  	general_surgery_volume,  	ob_gyn_volume,  	pediatrics_volume,  	ortho_volume,  	total_volume,  	remarks";
$proto0["m_strFrom"] = "FROM \"public\".clean_cut_implementation_summary_view";
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
	"m_strName" => "implementation_id",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto6["m_sql"] = "implementation_id";
$proto6["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto8["m_sql"] = "facility_name";
$proto8["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto10["m_sql"] = "country_name";
$proto10["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto12["m_sql"] = "region_name";
$proto12["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "implementation_year",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto14["m_sql"] = "implementation_year";
$proto14["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto16["m_sql"] = "start_date";
$proto16["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto18["m_sql"] = "end_date";
$proto18["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "implementation_months",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto20["m_sql"] = "implementation_months";
$proto20["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_monthly_surgical_volume",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto22["m_sql"] = "avg_monthly_surgical_volume";
$proto22["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "estimated_operations_impacted",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto24["m_sql"] = "estimated_operations_impacted";
$proto24["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "general_surgery_volume",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto26["m_sql"] = "general_surgery_volume";
$proto26["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ob_gyn_volume",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto28["m_sql"] = "ob_gyn_volume";
$proto28["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "pediatrics_volume",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto30["m_sql"] = "pediatrics_volume";
$proto30["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ortho_volume",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto32["m_sql"] = "ortho_volume";
$proto32["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "total_volume",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto34["m_sql"] = "total_volume";
$proto34["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "public.clean_cut_implementation_summary_view",
	"m_srcTableName" => "public.clean_cut_implementation_summary_view"
));

$proto36["m_sql"] = "remarks";
$proto36["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "public.clean_cut_implementation_summary_view";
$proto39["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "implementation_id";
$proto39["m_columns"][] = "facility_name";
$proto39["m_columns"][] = "country_name";
$proto39["m_columns"][] = "region_name";
$proto39["m_columns"][] = "implementation_year";
$proto39["m_columns"][] = "start_date";
$proto39["m_columns"][] = "end_date";
$proto39["m_columns"][] = "implementation_months";
$proto39["m_columns"][] = "avg_monthly_surgical_volume";
$proto39["m_columns"][] = "estimated_operations_impacted";
$proto39["m_columns"][] = "general_surgery_volume";
$proto39["m_columns"][] = "ob_gyn_volume";
$proto39["m_columns"][] = "pediatrics_volume";
$proto39["m_columns"][] = "ortho_volume";
$proto39["m_columns"][] = "total_volume";
$proto39["m_columns"][] = "remarks";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "\"public\".clean_cut_implementation_summary_view";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "public.clean_cut_implementation_summary_view";
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
$proto0["m_srcTableName"]="public.clean_cut_implementation_summary_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clean_cut_implementation_summary_view = createSqlQuery_clean_cut_implementation_summary_view();


	
		;

																

$tdataclean_cut_implementation_summary_view[".sqlquery"] = $queryData_clean_cut_implementation_summary_view;



$tdataclean_cut_implementation_summary_view[".hasEvents"] = false;

?>