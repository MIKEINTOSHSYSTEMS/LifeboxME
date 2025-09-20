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
	$fieldLabelslbpmi_data_elements["English"]["data_element_code"] = "Data Element Code";
	$fieldToolTipslbpmi_data_elements["English"]["data_element_code"] = "";
	$placeHolderslbpmi_data_elements["English"]["data_element_code"] = "";
	$fieldLabelslbpmi_data_elements["English"]["value_type"] = "Value Type";
	$fieldToolTipslbpmi_data_elements["English"]["value_type"] = "";
	$placeHolderslbpmi_data_elements["English"]["value_type"] = "";
	$fieldLabelslbpmi_data_elements["English"]["aggregation_type"] = "Aggregation Type";
	$fieldToolTipslbpmi_data_elements["English"]["aggregation_type"] = "";
	$placeHolderslbpmi_data_elements["English"]["aggregation_type"] = "";
	$fieldLabelslbpmi_data_elements["English"]["domain_type"] = "Domain Type";
	$fieldToolTipslbpmi_data_elements["English"]["domain_type"] = "";
	$placeHolderslbpmi_data_elements["English"]["domain_type"] = "";
	$fieldLabelslbpmi_data_elements["English"]["category_combo_id"] = "Category Combo Id";
	$fieldToolTipslbpmi_data_elements["English"]["category_combo_id"] = "";
	$placeHolderslbpmi_data_elements["English"]["category_combo_id"] = "";
	$fieldLabelslbpmi_data_elements["English"]["is_active"] = "Is Active";
	$fieldToolTipslbpmi_data_elements["English"]["is_active"] = "";
	$placeHolderslbpmi_data_elements["English"]["is_active"] = "";
	$fieldLabelslbpmi_data_elements["English"]["created_by"] = "Created By";
	$fieldToolTipslbpmi_data_elements["English"]["created_by"] = "";
	$placeHolderslbpmi_data_elements["English"]["created_by"] = "";
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
$tdatalbpmi_data_elements[".googleLikeFields"][] = "data_element_code";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "value_type";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "aggregation_type";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "domain_type";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "category_combo_id";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "is_active";
$tdatalbpmi_data_elements[".googleLikeFields"][] = "created_by";
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


$tdatalbpmi_data_elements[".sqlHead"] = "SELECT data_element_id,  	data_element_name,  	data_element_description,  	data_element_code,  	value_type,  	aggregation_type,  	domain_type,  	category_combo_id,  	is_active,  	created_by,  	created_at,  	updated_at";
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
//	data_element_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "data_element_code";
	$fdata["GoodName"] = "data_element_code";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","data_element_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_element_code";

		$fdata["sourceSingle"] = "data_element_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_element_code";

	
	
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


	$tdatalbpmi_data_elements["data_element_code"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "data_element_code";
//	value_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "value_type";
	$fdata["GoodName"] = "value_type";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","value_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "value_type";

		$fdata["sourceSingle"] = "value_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "value_type";

	
	
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


	$tdatalbpmi_data_elements["value_type"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "value_type";
//	aggregation_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "aggregation_type";
	$fdata["GoodName"] = "aggregation_type";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","aggregation_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "aggregation_type";

		$fdata["sourceSingle"] = "aggregation_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aggregation_type";

	
	
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
	$edata["LookupTable"] = "public.lbpmi_aggregation_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "aggregation_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aggregation_type";

	

	
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


	$tdatalbpmi_data_elements["aggregation_type"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "aggregation_type";
//	domain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "domain_type";
	$fdata["GoodName"] = "domain_type";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","domain_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "domain_type";

		$fdata["sourceSingle"] = "domain_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domain_type";

	
	
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
	$edata["LookupTable"] = "public.lbpmi_domain_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "domain_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "domain_type";

	

	
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


	$tdatalbpmi_data_elements["domain_type"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "domain_type";
//	category_combo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "category_combo_id";
	$fdata["GoodName"] = "category_combo_id";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","category_combo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "category_combo_id";

		$fdata["sourceSingle"] = "category_combo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_combo_id";

	
	
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


	$tdatalbpmi_data_elements["category_combo_id"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "category_combo_id";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","is_active");
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


	$tdatalbpmi_data_elements["is_active"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "is_active";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.lbpmi_data_elements";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_data_elements","created_by");
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


	$tdatalbpmi_data_elements["created_by"] = $fdata;
		$tdatalbpmi_data_elements[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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
	$fdata["Index"] = 12;
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
//	public.lbpmi_data_values
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.lbpmi_data_values";
		$detailsParam["dOriginalTable"] = "public.lbpmi_data_values";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lbpmi_data_values";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_lbpmi_data_values");
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
$proto0["m_strFieldList"] = "data_element_id,  	data_element_name,  	data_element_description,  	data_element_code,  	value_type,  	aggregation_type,  	domain_type,  	category_combo_id,  	is_active,  	created_by,  	created_at,  	updated_at";
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
	"m_strName" => "data_element_code",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto12["m_sql"] = "data_element_code";
$proto12["m_srcTableName"] = "public.lbpmi_data_elements";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "value_type",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto14["m_sql"] = "value_type";
$proto14["m_srcTableName"] = "public.lbpmi_data_elements";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "aggregation_type",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto16["m_sql"] = "aggregation_type";
$proto16["m_srcTableName"] = "public.lbpmi_data_elements";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "domain_type",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto18["m_sql"] = "domain_type";
$proto18["m_srcTableName"] = "public.lbpmi_data_elements";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "category_combo_id",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto20["m_sql"] = "category_combo_id";
$proto20["m_srcTableName"] = "public.lbpmi_data_elements";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto22["m_sql"] = "is_active";
$proto22["m_srcTableName"] = "public.lbpmi_data_elements";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto24["m_sql"] = "created_by";
$proto24["m_srcTableName"] = "public.lbpmi_data_elements";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto26["m_sql"] = "created_at";
$proto26["m_srcTableName"] = "public.lbpmi_data_elements";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_data_elements",
	"m_srcTableName" => "public.lbpmi_data_elements"
));

$proto28["m_sql"] = "updated_at";
$proto28["m_srcTableName"] = "public.lbpmi_data_elements";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "public.lbpmi_data_elements";
$proto31["m_srcTableName"] = "public.lbpmi_data_elements";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "data_element_id";
$proto31["m_columns"][] = "data_element_name";
$proto31["m_columns"][] = "data_element_description";
$proto31["m_columns"][] = "data_element_code";
$proto31["m_columns"][] = "value_type";
$proto31["m_columns"][] = "aggregation_type";
$proto31["m_columns"][] = "domain_type";
$proto31["m_columns"][] = "category_combo_id";
$proto31["m_columns"][] = "is_active";
$proto31["m_columns"][] = "created_by";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "updated_at";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "\"public\".lbpmi_data_elements";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "public.lbpmi_data_elements";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

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