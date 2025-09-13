<?php
$tdatalbpmi_datasets = array();
$tdatalbpmi_datasets[".searchableFields"] = array();
$tdatalbpmi_datasets[".ShortName"] = "lbpmi_datasets";
$tdatalbpmi_datasets[".OwnerID"] = "";
$tdatalbpmi_datasets[".OriginalTable"] = "public.lbpmi_datasets";


$tdatalbpmi_datasets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_datasets[".originalPagesByType"] = $tdatalbpmi_datasets[".pagesByType"];
$tdatalbpmi_datasets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_datasets[".originalPages"] = $tdatalbpmi_datasets[".pages"];
$tdatalbpmi_datasets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_datasets[".originalDefaultPages"] = $tdatalbpmi_datasets[".defaultPages"];

//	field labels
$fieldLabelslbpmi_datasets = array();
$fieldToolTipslbpmi_datasets = array();
$pageTitleslbpmi_datasets = array();
$placeHolderslbpmi_datasets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_datasets["English"] = array();
	$fieldToolTipslbpmi_datasets["English"] = array();
	$placeHolderslbpmi_datasets["English"] = array();
	$pageTitleslbpmi_datasets["English"] = array();
	$fieldLabelslbpmi_datasets["English"]["dataset_id"] = "Dataset Id";
	$fieldToolTipslbpmi_datasets["English"]["dataset_id"] = "";
	$placeHolderslbpmi_datasets["English"]["dataset_id"] = "";
	$fieldLabelslbpmi_datasets["English"]["data_element_id"] = "Data Element";
	$fieldToolTipslbpmi_datasets["English"]["data_element_id"] = "";
	$placeHolderslbpmi_datasets["English"]["data_element_id"] = "";
	$fieldLabelslbpmi_datasets["English"]["dataset_period_type"] = "Dataset Period Type";
	$fieldToolTipslbpmi_datasets["English"]["dataset_period_type"] = "";
	$placeHolderslbpmi_datasets["English"]["dataset_period_type"] = "";
	$fieldLabelslbpmi_datasets["English"]["dataset_month"] = "Dataset Month";
	$fieldToolTipslbpmi_datasets["English"]["dataset_month"] = "";
	$placeHolderslbpmi_datasets["English"]["dataset_month"] = "";
	$fieldLabelslbpmi_datasets["English"]["dataset_quarter"] = "Dataset Quarter";
	$fieldToolTipslbpmi_datasets["English"]["dataset_quarter"] = "";
	$placeHolderslbpmi_datasets["English"]["dataset_quarter"] = "";
	$fieldLabelslbpmi_datasets["English"]["dataset_year"] = "Dataset Year";
	$fieldToolTipslbpmi_datasets["English"]["dataset_year"] = "";
	$placeHolderslbpmi_datasets["English"]["dataset_year"] = "";
	$fieldLabelslbpmi_datasets["English"]["dataset_query"] = "Dataset Query";
	$fieldToolTipslbpmi_datasets["English"]["dataset_query"] = "";
	$placeHolderslbpmi_datasets["English"]["dataset_query"] = "";
	$fieldLabelslbpmi_datasets["English"]["dataset_value"] = "Dataset Value";
	$fieldToolTipslbpmi_datasets["English"]["dataset_value"] = "";
	$placeHolderslbpmi_datasets["English"]["dataset_value"] = "";
	$fieldLabelslbpmi_datasets["English"]["notes"] = "Notes";
	$fieldToolTipslbpmi_datasets["English"]["notes"] = "";
	$placeHolderslbpmi_datasets["English"]["notes"] = "";
	$fieldLabelslbpmi_datasets["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_datasets["English"]["created_at"] = "";
	$placeHolderslbpmi_datasets["English"]["created_at"] = "";
	$fieldLabelslbpmi_datasets["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbpmi_datasets["English"]["updated_at"] = "";
	$placeHolderslbpmi_datasets["English"]["updated_at"] = "";
	if (count($fieldToolTipslbpmi_datasets["English"]))
		$tdatalbpmi_datasets[".isUseToolTips"] = true;
}


	$tdatalbpmi_datasets[".NCSearch"] = true;



$tdatalbpmi_datasets[".shortTableName"] = "lbpmi_datasets";
$tdatalbpmi_datasets[".nSecOptions"] = 0;

$tdatalbpmi_datasets[".mainTableOwnerID"] = "";
$tdatalbpmi_datasets[".entityType"] = 0;
$tdatalbpmi_datasets[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_datasets[".strOriginalTableName"] = "public.lbpmi_datasets";

	



$tdatalbpmi_datasets[".showAddInPopup"] = false;

$tdatalbpmi_datasets[".showEditInPopup"] = false;

$tdatalbpmi_datasets[".showViewInPopup"] = false;

$tdatalbpmi_datasets[".listAjax"] = false;
//	temporary
//$tdatalbpmi_datasets[".listAjax"] = false;

	$tdatalbpmi_datasets[".audit"] = false;

	$tdatalbpmi_datasets[".locking"] = false;


$pages = $tdatalbpmi_datasets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_datasets[".edit"] = true;
	$tdatalbpmi_datasets[".afterEditAction"] = 1;
	$tdatalbpmi_datasets[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_datasets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_datasets[".add"] = true;
$tdatalbpmi_datasets[".afterAddAction"] = 1;
$tdatalbpmi_datasets[".closePopupAfterAdd"] = 1;
$tdatalbpmi_datasets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_datasets[".list"] = true;
}



$tdatalbpmi_datasets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_datasets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_datasets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_datasets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_datasets[".printFriendly"] = true;
}



$tdatalbpmi_datasets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_datasets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_datasets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_datasets[".isUseAjaxSuggest"] = true;





$tdatalbpmi_datasets[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_datasets[".buttonsAdded"] = false;

$tdatalbpmi_datasets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_datasets[".isUseTimeForSearch"] = false;


$tdatalbpmi_datasets[".badgeColor"] = "6B8E23";


$tdatalbpmi_datasets[".allSearchFields"] = array();
$tdatalbpmi_datasets[".filterFields"] = array();
$tdatalbpmi_datasets[".requiredSearchFields"] = array();

$tdatalbpmi_datasets[".googleLikeFields"] = array();
$tdatalbpmi_datasets[".googleLikeFields"][] = "dataset_id";
$tdatalbpmi_datasets[".googleLikeFields"][] = "data_element_id";
$tdatalbpmi_datasets[".googleLikeFields"][] = "dataset_period_type";
$tdatalbpmi_datasets[".googleLikeFields"][] = "dataset_month";
$tdatalbpmi_datasets[".googleLikeFields"][] = "dataset_quarter";
$tdatalbpmi_datasets[".googleLikeFields"][] = "dataset_year";
$tdatalbpmi_datasets[".googleLikeFields"][] = "dataset_query";
$tdatalbpmi_datasets[".googleLikeFields"][] = "dataset_value";
$tdatalbpmi_datasets[".googleLikeFields"][] = "notes";
$tdatalbpmi_datasets[".googleLikeFields"][] = "created_at";
$tdatalbpmi_datasets[".googleLikeFields"][] = "updated_at";



$tdatalbpmi_datasets[".tableType"] = "list";

$tdatalbpmi_datasets[".printerPageOrientation"] = 0;
$tdatalbpmi_datasets[".nPrinterPageScale"] = 100;

$tdatalbpmi_datasets[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_datasets[".geocodingEnabled"] = false;










$tdatalbpmi_datasets[".pageSize"] = 20;

$tdatalbpmi_datasets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_datasets[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_datasets[".orderindexes"] = array();


$tdatalbpmi_datasets[".sqlHead"] = "SELECT dataset_id,  	data_element_id,  	dataset_period_type,  	dataset_month,  	dataset_quarter,  	dataset_year,  	dataset_query,  	dataset_value,  	notes,  	created_at,  	updated_at";
$tdatalbpmi_datasets[".sqlFrom"] = "FROM \"public\".lbpmi_datasets";
$tdatalbpmi_datasets[".sqlWhereExpr"] = "";
$tdatalbpmi_datasets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_datasets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_datasets[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_datasets[".highlightSearchResults"] = true;

$tableKeyslbpmi_datasets = array();
$tableKeyslbpmi_datasets[] = "dataset_id";
$tdatalbpmi_datasets[".Keys"] = $tableKeyslbpmi_datasets;


$tdatalbpmi_datasets[".hideMobileList"] = array();




//	dataset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dataset_id";
	$fdata["GoodName"] = "dataset_id";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","dataset_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatalbpmi_datasets["dataset_id"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "dataset_id";
//	data_element_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data_element_id";
	$fdata["GoodName"] = "data_element_id";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","data_element_id");
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


	$tdatalbpmi_datasets["data_element_id"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "data_element_id";
//	dataset_period_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dataset_period_type";
	$fdata["GoodName"] = "dataset_period_type";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","dataset_period_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dataset_period_type";

		$fdata["sourceSingle"] = "dataset_period_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_period_type";

	
	
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


	$tdatalbpmi_datasets["dataset_period_type"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "dataset_period_type";
//	dataset_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dataset_month";
	$fdata["GoodName"] = "dataset_month";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","dataset_month");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dataset_month";

		$fdata["sourceSingle"] = "dataset_month";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_month";

	
	
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
	$edata["LookupTable"] = "public.months";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "month";

	

	
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


	$tdatalbpmi_datasets["dataset_month"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "dataset_month";
//	dataset_quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dataset_quarter";
	$fdata["GoodName"] = "dataset_quarter";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","dataset_quarter");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dataset_quarter";

		$fdata["sourceSingle"] = "dataset_quarter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_quarter";

	
	
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
	$edata["LookupTable"] = "public.quarters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "quarter_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "quarter_name";

	

	
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


	$tdatalbpmi_datasets["dataset_quarter"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "dataset_quarter";
//	dataset_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dataset_year";
	$fdata["GoodName"] = "dataset_year";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","dataset_year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dataset_year";

		$fdata["sourceSingle"] = "dataset_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_year";

	
	
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
	$edata["LookupTable"] = "public.years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
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


	$tdatalbpmi_datasets["dataset_year"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "dataset_year";
//	dataset_query
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dataset_query";
	$fdata["GoodName"] = "dataset_query";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","dataset_query");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "dataset_query";

		$fdata["sourceSingle"] = "dataset_query";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_query";

	
	
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


	$tdatalbpmi_datasets["dataset_query"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "dataset_query";
//	dataset_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dataset_value";
	$fdata["GoodName"] = "dataset_value";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","dataset_value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "dataset_value";

		$fdata["sourceSingle"] = "dataset_value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_value";

	
	
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


	$tdatalbpmi_datasets["dataset_value"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "dataset_value";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","notes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "notes";

		$fdata["sourceSingle"] = "notes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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


	$tdatalbpmi_datasets["notes"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "notes";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","created_at");
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


	$tdatalbpmi_datasets["created_at"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbpmi_datasets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_datasets","updated_at");
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


	$tdatalbpmi_datasets["updated_at"] = $fdata;
		$tdatalbpmi_datasets[".searchableFields"][] = "updated_at";


$tables_data["public.lbpmi_datasets"]=&$tdatalbpmi_datasets;
$field_labels["public_lbpmi_datasets"] = &$fieldLabelslbpmi_datasets;
$fieldToolTips["public_lbpmi_datasets"] = &$fieldToolTipslbpmi_datasets;
$placeHolders["public_lbpmi_datasets"] = &$placeHolderslbpmi_datasets;
$page_titles["public_lbpmi_datasets"] = &$pageTitleslbpmi_datasets;


changeTextControlsToDate( "public.lbpmi_datasets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_datasets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_datasets"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbpmi_data_elements";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbpmi_data_elements";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbpmi_data_elements";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbpmi_datasets"][0] = $masterParams;
				$masterTablesData["public.lbpmi_datasets"][0]["masterKeys"] = array();
	$masterTablesData["public.lbpmi_datasets"][0]["masterKeys"][]="data_element_id";
				$masterTablesData["public.lbpmi_datasets"][0]["detailKeys"] = array();
	$masterTablesData["public.lbpmi_datasets"][0]["detailKeys"][]="data_element_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_datasets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dataset_id,  	data_element_id,  	dataset_period_type,  	dataset_month,  	dataset_quarter,  	dataset_year,  	dataset_query,  	dataset_value,  	notes,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_datasets";
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
	"m_strName" => "dataset_id",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto6["m_sql"] = "dataset_id";
$proto6["m_srcTableName"] = "public.lbpmi_datasets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data_element_id",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto8["m_sql"] = "data_element_id";
$proto8["m_srcTableName"] = "public.lbpmi_datasets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_period_type",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto10["m_sql"] = "dataset_period_type";
$proto10["m_srcTableName"] = "public.lbpmi_datasets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_month",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto12["m_sql"] = "dataset_month";
$proto12["m_srcTableName"] = "public.lbpmi_datasets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_quarter",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto14["m_sql"] = "dataset_quarter";
$proto14["m_srcTableName"] = "public.lbpmi_datasets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_year",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto16["m_sql"] = "dataset_year";
$proto16["m_srcTableName"] = "public.lbpmi_datasets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_query",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto18["m_sql"] = "dataset_query";
$proto18["m_srcTableName"] = "public.lbpmi_datasets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_value",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto20["m_sql"] = "dataset_value";
$proto20["m_srcTableName"] = "public.lbpmi_datasets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto22["m_sql"] = "notes";
$proto22["m_srcTableName"] = "public.lbpmi_datasets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto24["m_sql"] = "created_at";
$proto24["m_srcTableName"] = "public.lbpmi_datasets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_datasets",
	"m_srcTableName" => "public.lbpmi_datasets"
));

$proto26["m_sql"] = "updated_at";
$proto26["m_srcTableName"] = "public.lbpmi_datasets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "public.lbpmi_datasets";
$proto29["m_srcTableName"] = "public.lbpmi_datasets";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "dataset_id";
$proto29["m_columns"][] = "data_element_id";
$proto29["m_columns"][] = "dataset_period_type";
$proto29["m_columns"][] = "dataset_month";
$proto29["m_columns"][] = "dataset_quarter";
$proto29["m_columns"][] = "dataset_year";
$proto29["m_columns"][] = "dataset_query";
$proto29["m_columns"][] = "dataset_value";
$proto29["m_columns"][] = "notes";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "updated_at";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "\"public\".lbpmi_datasets";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "public.lbpmi_datasets";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lbpmi_datasets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_datasets = createSqlQuery_lbpmi_datasets();


	
				;

											

$tdatalbpmi_datasets[".sqlquery"] = $queryData_lbpmi_datasets;



$tdatalbpmi_datasets[".hasEvents"] = false;

?>