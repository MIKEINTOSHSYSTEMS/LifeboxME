<?php
$tdatalbpmi_indicator_targets = array();
$tdatalbpmi_indicator_targets[".searchableFields"] = array();
$tdatalbpmi_indicator_targets[".ShortName"] = "lbpmi_indicator_targets";
$tdatalbpmi_indicator_targets[".OwnerID"] = "";
$tdatalbpmi_indicator_targets[".OriginalTable"] = "public.lbpmi_indicator_targets";


$tdatalbpmi_indicator_targets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalbpmi_indicator_targets[".originalPagesByType"] = $tdatalbpmi_indicator_targets[".pagesByType"];
$tdatalbpmi_indicator_targets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalbpmi_indicator_targets[".originalPages"] = $tdatalbpmi_indicator_targets[".pages"];
$tdatalbpmi_indicator_targets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalbpmi_indicator_targets[".originalDefaultPages"] = $tdatalbpmi_indicator_targets[".defaultPages"];

//	field labels
$fieldLabelslbpmi_indicator_targets = array();
$fieldToolTipslbpmi_indicator_targets = array();
$pageTitleslbpmi_indicator_targets = array();
$placeHolderslbpmi_indicator_targets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslbpmi_indicator_targets["English"] = array();
	$fieldToolTipslbpmi_indicator_targets["English"] = array();
	$placeHolderslbpmi_indicator_targets["English"] = array();
	$pageTitleslbpmi_indicator_targets["English"] = array();
	$fieldLabelslbpmi_indicator_targets["English"]["target_id"] = "Target Id";
	$fieldToolTipslbpmi_indicator_targets["English"]["target_id"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["target_id"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["indicator_id"] = "Indicator";
	$fieldToolTipslbpmi_indicator_targets["English"]["indicator_id"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["indicator_id"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["year"] = "Year";
	$fieldToolTipslbpmi_indicator_targets["English"]["year"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["year"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["baseline"] = "Baseline";
	$fieldToolTipslbpmi_indicator_targets["English"]["baseline"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["baseline"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["q1_target"] = "Q1 Target";
	$fieldToolTipslbpmi_indicator_targets["English"]["q1_target"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["q1_target"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["q2_target"] = "Q2 Target";
	$fieldToolTipslbpmi_indicator_targets["English"]["q2_target"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["q2_target"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["q3_target"] = "Q3 Target";
	$fieldToolTipslbpmi_indicator_targets["English"]["q3_target"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["q3_target"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["q4_target"] = "Q4 Target";
	$fieldToolTipslbpmi_indicator_targets["English"]["q4_target"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["q4_target"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["created_at"] = "Created At";
	$fieldToolTipslbpmi_indicator_targets["English"]["created_at"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["created_at"] = "";
	$fieldLabelslbpmi_indicator_targets["English"]["updated_at"] = "Updated At";
	$fieldToolTipslbpmi_indicator_targets["English"]["updated_at"] = "";
	$placeHolderslbpmi_indicator_targets["English"]["updated_at"] = "";
	if (count($fieldToolTipslbpmi_indicator_targets["English"]))
		$tdatalbpmi_indicator_targets[".isUseToolTips"] = true;
}


	$tdatalbpmi_indicator_targets[".NCSearch"] = true;



$tdatalbpmi_indicator_targets[".shortTableName"] = "lbpmi_indicator_targets";
$tdatalbpmi_indicator_targets[".nSecOptions"] = 0;

$tdatalbpmi_indicator_targets[".mainTableOwnerID"] = "";
$tdatalbpmi_indicator_targets[".entityType"] = 0;
$tdatalbpmi_indicator_targets[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalbpmi_indicator_targets[".strOriginalTableName"] = "public.lbpmi_indicator_targets";

	



$tdatalbpmi_indicator_targets[".showAddInPopup"] = false;

$tdatalbpmi_indicator_targets[".showEditInPopup"] = false;

$tdatalbpmi_indicator_targets[".showViewInPopup"] = false;

$tdatalbpmi_indicator_targets[".listAjax"] = false;
//	temporary
//$tdatalbpmi_indicator_targets[".listAjax"] = false;

	$tdatalbpmi_indicator_targets[".audit"] = false;

	$tdatalbpmi_indicator_targets[".locking"] = false;


$pages = $tdatalbpmi_indicator_targets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalbpmi_indicator_targets[".edit"] = true;
	$tdatalbpmi_indicator_targets[".afterEditAction"] = 1;
	$tdatalbpmi_indicator_targets[".closePopupAfterEdit"] = 1;
	$tdatalbpmi_indicator_targets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalbpmi_indicator_targets[".add"] = true;
$tdatalbpmi_indicator_targets[".afterAddAction"] = 1;
$tdatalbpmi_indicator_targets[".closePopupAfterAdd"] = 1;
$tdatalbpmi_indicator_targets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalbpmi_indicator_targets[".list"] = true;
}



$tdatalbpmi_indicator_targets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalbpmi_indicator_targets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalbpmi_indicator_targets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalbpmi_indicator_targets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalbpmi_indicator_targets[".printFriendly"] = true;
}



$tdatalbpmi_indicator_targets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalbpmi_indicator_targets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalbpmi_indicator_targets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalbpmi_indicator_targets[".isUseAjaxSuggest"] = true;





$tdatalbpmi_indicator_targets[".ajaxCodeSnippetAdded"] = false;

$tdatalbpmi_indicator_targets[".buttonsAdded"] = false;

$tdatalbpmi_indicator_targets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalbpmi_indicator_targets[".isUseTimeForSearch"] = false;


$tdatalbpmi_indicator_targets[".badgeColor"] = "6493EA";


$tdatalbpmi_indicator_targets[".allSearchFields"] = array();
$tdatalbpmi_indicator_targets[".filterFields"] = array();
$tdatalbpmi_indicator_targets[".requiredSearchFields"] = array();

$tdatalbpmi_indicator_targets[".googleLikeFields"] = array();
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "target_id";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "indicator_id";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "year";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "baseline";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "q1_target";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "q2_target";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "q3_target";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "q4_target";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "created_at";
$tdatalbpmi_indicator_targets[".googleLikeFields"][] = "updated_at";



$tdatalbpmi_indicator_targets[".tableType"] = "list";

$tdatalbpmi_indicator_targets[".printerPageOrientation"] = 0;
$tdatalbpmi_indicator_targets[".nPrinterPageScale"] = 100;

$tdatalbpmi_indicator_targets[".nPrinterSplitRecords"] = 40;

$tdatalbpmi_indicator_targets[".geocodingEnabled"] = false;










$tdatalbpmi_indicator_targets[".pageSize"] = 20;

$tdatalbpmi_indicator_targets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalbpmi_indicator_targets[".strOrderBy"] = $tstrOrderBy;

$tdatalbpmi_indicator_targets[".orderindexes"] = array();


$tdatalbpmi_indicator_targets[".sqlHead"] = "SELECT target_id,  	indicator_id,  	\"year\",  	baseline,  	q1_target,  	q2_target,  	q3_target,  	q4_target,  	created_at,  	updated_at";
$tdatalbpmi_indicator_targets[".sqlFrom"] = "FROM \"public\".lbpmi_indicator_targets";
$tdatalbpmi_indicator_targets[".sqlWhereExpr"] = "";
$tdatalbpmi_indicator_targets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalbpmi_indicator_targets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalbpmi_indicator_targets[".arrGroupsPerPage"] = $arrGPP;

$tdatalbpmi_indicator_targets[".highlightSearchResults"] = true;

$tableKeyslbpmi_indicator_targets = array();
$tableKeyslbpmi_indicator_targets[] = "target_id";
$tdatalbpmi_indicator_targets[".Keys"] = $tableKeyslbpmi_indicator_targets;


$tdatalbpmi_indicator_targets[".hideMobileList"] = array();




//	target_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "target_id";
	$fdata["GoodName"] = "target_id";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","target_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "target_id";

		$fdata["sourceSingle"] = "target_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "target_id";

	
	
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


	$tdatalbpmi_indicator_targets["target_id"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "target_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","indicator_id");
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


	$tdatalbpmi_indicator_targets["indicator_id"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "indicator_id";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","year");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "year";
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


	$tdatalbpmi_indicator_targets["year"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "year";
//	baseline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "baseline";
	$fdata["GoodName"] = "baseline";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","baseline");
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


	$tdatalbpmi_indicator_targets["baseline"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "baseline";
//	q1_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "q1_target";
	$fdata["GoodName"] = "q1_target";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","q1_target");
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


	$tdatalbpmi_indicator_targets["q1_target"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "q1_target";
//	q2_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "q2_target";
	$fdata["GoodName"] = "q2_target";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","q2_target");
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


	$tdatalbpmi_indicator_targets["q2_target"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "q2_target";
//	q3_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "q3_target";
	$fdata["GoodName"] = "q3_target";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","q3_target");
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


	$tdatalbpmi_indicator_targets["q3_target"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "q3_target";
//	q4_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "q4_target";
	$fdata["GoodName"] = "q4_target";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","q4_target");
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


	$tdatalbpmi_indicator_targets["q4_target"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "q4_target";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","created_at");
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


	$tdatalbpmi_indicator_targets["created_at"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lbpmi_indicator_targets";
	$fdata["Label"] = GetFieldLabel("public_lbpmi_indicator_targets","updated_at");
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


	$tdatalbpmi_indicator_targets["updated_at"] = $fdata;
		$tdatalbpmi_indicator_targets[".searchableFields"][] = "updated_at";


$tables_data["public.lbpmi_indicator_targets"]=&$tdatalbpmi_indicator_targets;
$field_labels["public_lbpmi_indicator_targets"] = &$fieldLabelslbpmi_indicator_targets;
$fieldToolTips["public_lbpmi_indicator_targets"] = &$fieldToolTipslbpmi_indicator_targets;
$placeHolders["public_lbpmi_indicator_targets"] = &$placeHolderslbpmi_indicator_targets;
$page_titles["public_lbpmi_indicator_targets"] = &$pageTitleslbpmi_indicator_targets;


changeTextControlsToDate( "public.lbpmi_indicator_targets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lbpmi_indicator_targets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lbpmi_indicator_targets"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lbpmi_indicators";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lbpmi_indicators";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lbpmi_indicators";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lbpmi_indicator_targets"][0] = $masterParams;
				$masterTablesData["public.lbpmi_indicator_targets"][0]["masterKeys"] = array();
	$masterTablesData["public.lbpmi_indicator_targets"][0]["masterKeys"][]="indicator_id";
				$masterTablesData["public.lbpmi_indicator_targets"][0]["detailKeys"] = array();
	$masterTablesData["public.lbpmi_indicator_targets"][0]["detailKeys"][]="indicator_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lbpmi_indicator_targets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "target_id,  	indicator_id,  	\"year\",  	baseline,  	q1_target,  	q2_target,  	q3_target,  	q4_target,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".lbpmi_indicator_targets";
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
	"m_strName" => "target_id",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto6["m_sql"] = "target_id";
$proto6["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto10["m_sql"] = "\"year\"";
$proto10["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto12["m_sql"] = "baseline";
$proto12["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_target",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto14["m_sql"] = "q1_target";
$proto14["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_target",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto16["m_sql"] = "q2_target";
$proto16["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_target",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto18["m_sql"] = "q3_target";
$proto18["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_target",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto20["m_sql"] = "q4_target";
$proto20["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto22["m_sql"] = "created_at";
$proto22["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lbpmi_indicator_targets",
	"m_srcTableName" => "public.lbpmi_indicator_targets"
));

$proto24["m_sql"] = "updated_at";
$proto24["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.lbpmi_indicator_targets";
$proto27["m_srcTableName"] = "public.lbpmi_indicator_targets";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "target_id";
$proto27["m_columns"][] = "indicator_id";
$proto27["m_columns"][] = "year";
$proto27["m_columns"][] = "baseline";
$proto27["m_columns"][] = "q1_target";
$proto27["m_columns"][] = "q2_target";
$proto27["m_columns"][] = "q3_target";
$proto27["m_columns"][] = "q4_target";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "updated_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".lbpmi_indicator_targets";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.lbpmi_indicator_targets";
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
$proto0["m_srcTableName"]="public.lbpmi_indicator_targets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lbpmi_indicator_targets = createSqlQuery_lbpmi_indicator_targets();


	
				;

										

$tdatalbpmi_indicator_targets[".sqlquery"] = $queryData_lbpmi_indicator_targets;



$tdatalbpmi_indicator_targets[".hasEvents"] = false;

?>