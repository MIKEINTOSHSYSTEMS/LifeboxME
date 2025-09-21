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
	$fieldLabelslbpmi_indicators["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipslbpmi_indicators["English"]["indicator_name"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_name"] = "";
	$fieldLabelslbpmi_indicators["English"]["indicator_description"] = "Indicator Description";
	$fieldToolTipslbpmi_indicators["English"]["indicator_description"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_description"] = "";
	$fieldLabelslbpmi_indicators["English"]["indicator_type"] = "Indicator Type";
	$fieldToolTipslbpmi_indicators["English"]["indicator_type"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_type"] = "";
	$fieldLabelslbpmi_indicators["English"]["formula"] = "Formula";
	$fieldToolTipslbpmi_indicators["English"]["formula"] = "";
	$placeHolderslbpmi_indicators["English"]["formula"] = "";
	$fieldLabelslbpmi_indicators["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_indicators["English"]["created_at"] = "";
	$placeHolderslbpmi_indicators["English"]["created_at"] = "";
	$fieldLabelslbpmi_indicators["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbpmi_indicators["English"]["updated_at"] = "";
	$placeHolderslbpmi_indicators["English"]["updated_at"] = "";
	$fieldLabelslbpmi_indicators["English"]["indicator_code"] = "Indicator Code";
	$fieldToolTipslbpmi_indicators["English"]["indicator_code"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_code"] = "";
	$fieldLabelslbpmi_indicators["English"]["numerator_description"] = "Numerator Description";
	$fieldToolTipslbpmi_indicators["English"]["numerator_description"] = "";
	$placeHolderslbpmi_indicators["English"]["numerator_description"] = "";
	$fieldLabelslbpmi_indicators["English"]["denominator_description"] = "Denominator Description";
	$fieldToolTipslbpmi_indicators["English"]["denominator_description"] = "";
	$placeHolderslbpmi_indicators["English"]["denominator_description"] = "";
	$fieldLabelslbpmi_indicators["English"]["annualized"] = "Annualized";
	$fieldToolTipslbpmi_indicators["English"]["annualized"] = "";
	$placeHolderslbpmi_indicators["English"]["annualized"] = "";
	$fieldLabelslbpmi_indicators["English"]["decimals"] = "Decimals";
	$fieldToolTipslbpmi_indicators["English"]["decimals"] = "";
	$placeHolderslbpmi_indicators["English"]["decimals"] = "";
	$fieldLabelslbpmi_indicators["English"]["is_active"] = "Is Active";
	$fieldToolTipslbpmi_indicators["English"]["is_active"] = "";
	$placeHolderslbpmi_indicators["English"]["is_active"] = "";
	$fieldLabelslbpmi_indicators["English"]["created_by"] = "Created By";
	$fieldToolTipslbpmi_indicators["English"]["created_by"] = "";
	$placeHolderslbpmi_indicators["English"]["created_by"] = "";
	$fieldLabelslbpmi_indicators["English"]["indicator_group_id"] = "Indicator Group";
	$fieldToolTipslbpmi_indicators["English"]["indicator_group_id"] = "";
	$placeHolderslbpmi_indicators["English"]["indicator_group_id"] = "";
	$fieldLabelslbpmi_indicators["English"]["dataset_id"] = "Dataset";
	$fieldToolTipslbpmi_indicators["English"]["dataset_id"] = "";
	$placeHolderslbpmi_indicators["English"]["dataset_id"] = "";
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


$tdatalbpmi_indicators[".badgeColor"] = "80ff80";


$tdatalbpmi_indicators[".allSearchFields"] = array();
$tdatalbpmi_indicators[".filterFields"] = array();
$tdatalbpmi_indicators[".requiredSearchFields"] = array();

$tdatalbpmi_indicators[".googleLikeFields"] = array();
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_indicators[".googleLikeFields"][] = "dataset_id";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_group_id";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_name";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_description";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_code";
$tdatalbpmi_indicators[".googleLikeFields"][] = "indicator_type";
$tdatalbpmi_indicators[".googleLikeFields"][] = "numerator_description";
$tdatalbpmi_indicators[".googleLikeFields"][] = "denominator_description";
$tdatalbpmi_indicators[".googleLikeFields"][] = "formula";
$tdatalbpmi_indicators[".googleLikeFields"][] = "annualized";
$tdatalbpmi_indicators[".googleLikeFields"][] = "decimals";
$tdatalbpmi_indicators[".googleLikeFields"][] = "is_active";
$tdatalbpmi_indicators[".googleLikeFields"][] = "created_by";
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


$tdatalbpmi_indicators[".sqlHead"] = "SELECT indicator_id,  dataset_id,  indicator_group_id,  indicator_name,  indicator_description,  indicator_code,  indicator_type,  numerator_description,  denominator_description,  formula,  annualized,  decimals,  is_active,  created_by,  created_at,  updated_at";
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
//	dataset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dataset_id";
	$fdata["GoodName"] = "dataset_id";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","dataset_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dataset_id";

		$fdata["sourceSingle"] = "dataset_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_id";

	
	
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
	$edata["LookupTable"] = "public.lbpmi_datasets";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dataset_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dataset_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatalbpmi_indicators["dataset_id"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "dataset_id";
//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","indicator_group_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lbpmi_indicator_groups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_group_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatalbpmi_indicators["indicator_group_id"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "indicator_group_id";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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
	$fdata["Index"] = 5;
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
//	indicator_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "indicator_code";
	$fdata["GoodName"] = "indicator_code";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","indicator_code");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatalbpmi_indicators["indicator_code"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "indicator_code";
//	indicator_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lbpmi_indicator_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_type";

	

	
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


	$tdatalbpmi_indicators["indicator_type"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "indicator_type";
//	numerator_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "numerator_description";
	$fdata["GoodName"] = "numerator_description";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","numerator_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "numerator_description";

		$fdata["sourceSingle"] = "numerator_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numerator_description";

	
	
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


	$tdatalbpmi_indicators["numerator_description"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "numerator_description";
//	denominator_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "denominator_description";
	$fdata["GoodName"] = "denominator_description";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","denominator_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "denominator_description";

		$fdata["sourceSingle"] = "denominator_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "denominator_description";

	
	
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


	$tdatalbpmi_indicators["denominator_description"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "denominator_description";
//	formula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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
//	annualized
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "annualized";
	$fdata["GoodName"] = "annualized";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","annualized");
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


	$tdatalbpmi_indicators["annualized"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "annualized";
//	decimals
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "decimals";
	$fdata["GoodName"] = "decimals";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","decimals");
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


	$tdatalbpmi_indicators["decimals"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "decimals";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","is_active");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatalbpmi_indicators["is_active"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "is_active";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.lbpmi_indicators";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicators","created_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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


	$tdatalbpmi_indicators["created_by"] = $fdata;
		$tdatalbpmi_indicators[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
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
	$fdata["Index"] = 16;
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



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbpmi_indicator_groups";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbpmi_indicator_groups";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbpmi_indicator_groups";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbpmi_indicators"][0] = $masterParams;
				$masterTablesData["public.lbpmi_indicators"][0]["masterKeys"] = array();
	$masterTablesData["public.lbpmi_indicators"][0]["masterKeys"][]="indicator_group_id";
				$masterTablesData["public.lbpmi_indicators"][0]["detailKeys"] = array();
	$masterTablesData["public.lbpmi_indicators"][0]["detailKeys"][]="indicator_group_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbpmi_datasets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbpmi_datasets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbpmi_datasets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbpmi_indicators"][1] = $masterParams;
				$masterTablesData["public.lbpmi_indicators"][1]["masterKeys"] = array();
	$masterTablesData["public.lbpmi_indicators"][1]["masterKeys"][]="dataset_id";
				$masterTablesData["public.lbpmi_indicators"][1]["detailKeys"] = array();
	$masterTablesData["public.lbpmi_indicators"][1]["detailKeys"][]="dataset_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_indicators()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indicator_id,  dataset_id,  indicator_group_id,  indicator_name,  indicator_description,  indicator_code,  indicator_type,  numerator_description,  denominator_description,  formula,  annualized,  decimals,  is_active,  created_by,  created_at,  updated_at";
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
	"m_strName" => "dataset_id",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto8["m_sql"] = "dataset_id";
$proto8["m_srcTableName"] = "public.lbpmi_indicators";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_id",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto10["m_sql"] = "indicator_group_id";
$proto10["m_srcTableName"] = "public.lbpmi_indicators";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto12["m_sql"] = "indicator_name";
$proto12["m_srcTableName"] = "public.lbpmi_indicators";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_description",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto14["m_sql"] = "indicator_description";
$proto14["m_srcTableName"] = "public.lbpmi_indicators";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_code",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto16["m_sql"] = "indicator_code";
$proto16["m_srcTableName"] = "public.lbpmi_indicators";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_type",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto18["m_sql"] = "indicator_type";
$proto18["m_srcTableName"] = "public.lbpmi_indicators";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "numerator_description",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto20["m_sql"] = "numerator_description";
$proto20["m_srcTableName"] = "public.lbpmi_indicators";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "denominator_description",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto22["m_sql"] = "denominator_description";
$proto22["m_srcTableName"] = "public.lbpmi_indicators";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "formula",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto24["m_sql"] = "formula";
$proto24["m_srcTableName"] = "public.lbpmi_indicators";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "annualized",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto26["m_sql"] = "annualized";
$proto26["m_srcTableName"] = "public.lbpmi_indicators";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "decimals",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto28["m_sql"] = "decimals";
$proto28["m_srcTableName"] = "public.lbpmi_indicators";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto30["m_sql"] = "is_active";
$proto30["m_srcTableName"] = "public.lbpmi_indicators";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto32["m_sql"] = "created_by";
$proto32["m_srcTableName"] = "public.lbpmi_indicators";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto34["m_sql"] = "created_at";
$proto34["m_srcTableName"] = "public.lbpmi_indicators";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_indicators",
	"m_srcTableName" => "public.lbpmi_indicators"
));

$proto36["m_sql"] = "updated_at";
$proto36["m_srcTableName"] = "public.lbpmi_indicators";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "public.lbpmi_indicators";
$proto39["m_srcTableName"] = "public.lbpmi_indicators";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "indicator_id";
$proto39["m_columns"][] = "indicator_name";
$proto39["m_columns"][] = "indicator_description";
$proto39["m_columns"][] = "indicator_code";
$proto39["m_columns"][] = "indicator_type";
$proto39["m_columns"][] = "numerator_description";
$proto39["m_columns"][] = "denominator_description";
$proto39["m_columns"][] = "formula";
$proto39["m_columns"][] = "annualized";
$proto39["m_columns"][] = "decimals";
$proto39["m_columns"][] = "is_active";
$proto39["m_columns"][] = "created_by";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "updated_at";
$proto39["m_columns"][] = "indicator_group_id";
$proto39["m_columns"][] = "dataset_id";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "\"public\".lbpmi_indicators";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "public.lbpmi_indicators";
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
$proto0["m_srcTableName"]="public.lbpmi_indicators";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_indicators = createSqlQuery_lbpmi_indicators();


	
				;

																

$tdatalbpmi_indicators[".sqlquery"] = $queryData_lbpmi_indicators;



include_once(getabspath("include/lbpmi_indicators_events.php"));
$tdatalbpmi_indicators[".hasEvents"] = true;

?>