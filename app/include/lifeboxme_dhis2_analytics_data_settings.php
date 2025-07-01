<?php
$tdatalifeboxme_dhis2_analytics_data = array();
$tdatalifeboxme_dhis2_analytics_data[".searchableFields"] = array();
$tdatalifeboxme_dhis2_analytics_data[".ShortName"] = "lifeboxme_dhis2_analytics_data";
$tdatalifeboxme_dhis2_analytics_data[".OwnerID"] = "";
$tdatalifeboxme_dhis2_analytics_data[".OriginalTable"] = "public.lifeboxme_dhis2_analytics_data";


$tdatalifeboxme_dhis2_analytics_data[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalifeboxme_dhis2_analytics_data[".originalPagesByType"] = $tdatalifeboxme_dhis2_analytics_data[".pagesByType"];
$tdatalifeboxme_dhis2_analytics_data[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalifeboxme_dhis2_analytics_data[".originalPages"] = $tdatalifeboxme_dhis2_analytics_data[".pages"];
$tdatalifeboxme_dhis2_analytics_data[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalifeboxme_dhis2_analytics_data[".originalDefaultPages"] = $tdatalifeboxme_dhis2_analytics_data[".defaultPages"];

//	field labels
$fieldLabelslifeboxme_dhis2_analytics_data = array();
$fieldToolTipslifeboxme_dhis2_analytics_data = array();
$pageTitleslifeboxme_dhis2_analytics_data = array();
$placeHolderslifeboxme_dhis2_analytics_data = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifeboxme_dhis2_analytics_data["English"] = array();
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"] = array();
	$placeHolderslifeboxme_dhis2_analytics_data["English"] = array();
	$pageTitleslifeboxme_dhis2_analytics_data["English"] = array();
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["id"] = "Id";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["id"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["id"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["setting_id"] = "Setting Id";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["setting_id"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["setting_id"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["dx_id"] = "Dx Id";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["dx_id"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["dx_id"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["dx_name"] = "Dx Name";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["dx_name"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["dx_name"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["dx_shortname"] = "Dx Shortname";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["dx_shortname"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["dx_shortname"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["dx_displayname"] = "Dx Displayname";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["dx_displayname"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["dx_displayname"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["dx_dimensiontype"] = "Dx Dimensiontype";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["dx_dimensiontype"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["dx_dimensiontype"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["ou_id"] = "Ou Id";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["ou_id"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["ou_id"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["ou_name"] = "Ou Name";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["ou_name"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["ou_name"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["pe_id"] = "Pe Id";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["pe_id"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["pe_id"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["pe_name"] = "Pe Name";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["pe_name"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["pe_name"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["pe_relativeperiod"] = "Pe Relativeperiod";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["pe_relativeperiod"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["pe_relativeperiod"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["value"] = "Value";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["value"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["value"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["stored_by"] = "Stored By";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["stored_by"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["stored_by"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["created"] = "Created";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["created"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["created"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["last_updated"] = "Last Updated";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["last_updated"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["last_updated"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["fetched_at"] = "Fetched At";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["fetched_at"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["fetched_at"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["ou_parent_id"] = "Ou Parent Id";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["ou_parent_id"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["ou_parent_id"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["ou_parent_name"] = "Ou Parent Name";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["ou_parent_name"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["ou_parent_name"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["ou_level_id"] = "Ou Level Id";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["ou_level_id"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["ou_level_id"] = "";
	$fieldLabelslifeboxme_dhis2_analytics_data["English"]["ou_level_name"] = "Ou Level Name";
	$fieldToolTipslifeboxme_dhis2_analytics_data["English"]["ou_level_name"] = "";
	$placeHolderslifeboxme_dhis2_analytics_data["English"]["ou_level_name"] = "";
	if (count($fieldToolTipslifeboxme_dhis2_analytics_data["English"]))
		$tdatalifeboxme_dhis2_analytics_data[".isUseToolTips"] = true;
}


	$tdatalifeboxme_dhis2_analytics_data[".NCSearch"] = true;



$tdatalifeboxme_dhis2_analytics_data[".shortTableName"] = "lifeboxme_dhis2_analytics_data";
$tdatalifeboxme_dhis2_analytics_data[".nSecOptions"] = 0;

$tdatalifeboxme_dhis2_analytics_data[".mainTableOwnerID"] = "";
$tdatalifeboxme_dhis2_analytics_data[".entityType"] = 0;
$tdatalifeboxme_dhis2_analytics_data[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalifeboxme_dhis2_analytics_data[".strOriginalTableName"] = "public.lifeboxme_dhis2_analytics_data";

	



$tdatalifeboxme_dhis2_analytics_data[".showAddInPopup"] = false;

$tdatalifeboxme_dhis2_analytics_data[".showEditInPopup"] = false;

$tdatalifeboxme_dhis2_analytics_data[".showViewInPopup"] = false;

$tdatalifeboxme_dhis2_analytics_data[".listAjax"] = false;
//	temporary
//$tdatalifeboxme_dhis2_analytics_data[".listAjax"] = false;

	$tdatalifeboxme_dhis2_analytics_data[".audit"] = false;

	$tdatalifeboxme_dhis2_analytics_data[".locking"] = false;


$pages = $tdatalifeboxme_dhis2_analytics_data[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifeboxme_dhis2_analytics_data[".edit"] = true;
	$tdatalifeboxme_dhis2_analytics_data[".afterEditAction"] = 1;
	$tdatalifeboxme_dhis2_analytics_data[".closePopupAfterEdit"] = 1;
	$tdatalifeboxme_dhis2_analytics_data[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifeboxme_dhis2_analytics_data[".add"] = true;
$tdatalifeboxme_dhis2_analytics_data[".afterAddAction"] = 1;
$tdatalifeboxme_dhis2_analytics_data[".closePopupAfterAdd"] = 1;
$tdatalifeboxme_dhis2_analytics_data[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifeboxme_dhis2_analytics_data[".list"] = true;
}



$tdatalifeboxme_dhis2_analytics_data[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifeboxme_dhis2_analytics_data[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifeboxme_dhis2_analytics_data[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifeboxme_dhis2_analytics_data[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifeboxme_dhis2_analytics_data[".printFriendly"] = true;
}



$tdatalifeboxme_dhis2_analytics_data[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifeboxme_dhis2_analytics_data[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifeboxme_dhis2_analytics_data[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifeboxme_dhis2_analytics_data[".isUseAjaxSuggest"] = true;





$tdatalifeboxme_dhis2_analytics_data[".ajaxCodeSnippetAdded"] = false;

$tdatalifeboxme_dhis2_analytics_data[".buttonsAdded"] = false;

$tdatalifeboxme_dhis2_analytics_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifeboxme_dhis2_analytics_data[".isUseTimeForSearch"] = false;


$tdatalifeboxme_dhis2_analytics_data[".badgeColor"] = "E67349";


$tdatalifeboxme_dhis2_analytics_data[".allSearchFields"] = array();
$tdatalifeboxme_dhis2_analytics_data[".filterFields"] = array();
$tdatalifeboxme_dhis2_analytics_data[".requiredSearchFields"] = array();

$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"] = array();
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "id";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "setting_id";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "dx_id";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "dx_name";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "dx_shortname";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "dx_displayname";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "dx_dimensiontype";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "ou_id";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "ou_name";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "ou_parent_id";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "ou_parent_name";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "ou_level_id";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "ou_level_name";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "pe_id";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "pe_name";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "pe_relativeperiod";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "value";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "stored_by";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "created";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "last_updated";
$tdatalifeboxme_dhis2_analytics_data[".googleLikeFields"][] = "fetched_at";



$tdatalifeboxme_dhis2_analytics_data[".tableType"] = "list";

$tdatalifeboxme_dhis2_analytics_data[".printerPageOrientation"] = 0;
$tdatalifeboxme_dhis2_analytics_data[".nPrinterPageScale"] = 100;

$tdatalifeboxme_dhis2_analytics_data[".nPrinterSplitRecords"] = 40;

$tdatalifeboxme_dhis2_analytics_data[".geocodingEnabled"] = false;




$tdatalifeboxme_dhis2_analytics_data[".isDisplayLoading"] = true;






$tdatalifeboxme_dhis2_analytics_data[".pageSize"] = 20;

$tdatalifeboxme_dhis2_analytics_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifeboxme_dhis2_analytics_data[".strOrderBy"] = $tstrOrderBy;

$tdatalifeboxme_dhis2_analytics_data[".orderindexes"] = array();


$tdatalifeboxme_dhis2_analytics_data[".sqlHead"] = "SELECT id,  	setting_id,  	dx_id,  	dx_name,  	dx_shortname,  	dx_displayname,  	dx_dimensiontype,  	ou_id,  	ou_name,  	ou_parent_id,  	ou_parent_name,  	ou_level_id,  	ou_level_name,  	pe_id,  	pe_name,  	pe_relativeperiod,  	\"value\",  	stored_by,  	created,  	last_updated,  	fetched_at";
$tdatalifeboxme_dhis2_analytics_data[".sqlFrom"] = "FROM \"public\".lifeboxme_dhis2_analytics_data";
$tdatalifeboxme_dhis2_analytics_data[".sqlWhereExpr"] = "";
$tdatalifeboxme_dhis2_analytics_data[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifeboxme_dhis2_analytics_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifeboxme_dhis2_analytics_data[".arrGroupsPerPage"] = $arrGPP;

$tdatalifeboxme_dhis2_analytics_data[".highlightSearchResults"] = true;

$tableKeyslifeboxme_dhis2_analytics_data = array();
$tableKeyslifeboxme_dhis2_analytics_data[] = "id";
$tdatalifeboxme_dhis2_analytics_data[".Keys"] = $tableKeyslifeboxme_dhis2_analytics_data;


$tdatalifeboxme_dhis2_analytics_data[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["id"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "id";
//	setting_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "setting_id";
	$fdata["GoodName"] = "setting_id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","setting_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "setting_id";

		$fdata["sourceSingle"] = "setting_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "setting_id";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_settings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
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


	$tdatalifeboxme_dhis2_analytics_data["setting_id"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "setting_id";
//	dx_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dx_id";
	$fdata["GoodName"] = "dx_id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","dx_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dx_id";

		$fdata["sourceSingle"] = "dx_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dx_id";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["dx_id"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "dx_id";
//	dx_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dx_name";
	$fdata["GoodName"] = "dx_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","dx_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dx_name";

		$fdata["sourceSingle"] = "dx_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dx_name";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "dx_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dx_name";

	

	
	$edata["LookupOrderBy"] = "dx_name";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatalifeboxme_dhis2_analytics_data["dx_name"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "dx_name";
//	dx_shortname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dx_shortname";
	$fdata["GoodName"] = "dx_shortname";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","dx_shortname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dx_shortname";

		$fdata["sourceSingle"] = "dx_shortname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dx_shortname";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["dx_shortname"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "dx_shortname";
//	dx_displayname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dx_displayname";
	$fdata["GoodName"] = "dx_displayname";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","dx_displayname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dx_displayname";

		$fdata["sourceSingle"] = "dx_displayname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dx_displayname";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["dx_displayname"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "dx_displayname";
//	dx_dimensiontype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dx_dimensiontype";
	$fdata["GoodName"] = "dx_dimensiontype";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","dx_dimensiontype");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dx_dimensiontype";

		$fdata["sourceSingle"] = "dx_dimensiontype";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dx_dimensiontype";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "dx_dimensiontype";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dx_dimensiontype";

	

	
	$edata["LookupOrderBy"] = "dx_dimensiontype";

	
	
	
	

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme_dhis2_analytics_data["dx_dimensiontype"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "dx_dimensiontype";
//	ou_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ou_id";
	$fdata["GoodName"] = "ou_id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","ou_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ou_id";

		$fdata["sourceSingle"] = "ou_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ou_id";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["ou_id"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "ou_id";
//	ou_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ou_name";
	$fdata["GoodName"] = "ou_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","ou_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ou_name";

		$fdata["sourceSingle"] = "ou_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ou_name";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ou_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ou_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme_dhis2_analytics_data["ou_name"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "ou_name";
//	ou_parent_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ou_parent_id";
	$fdata["GoodName"] = "ou_parent_id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","ou_parent_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ou_parent_id";

		$fdata["sourceSingle"] = "ou_parent_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ou_parent_id";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["ou_parent_id"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "ou_parent_id";
//	ou_parent_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ou_parent_name";
	$fdata["GoodName"] = "ou_parent_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","ou_parent_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ou_parent_name";

		$fdata["sourceSingle"] = "ou_parent_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ou_parent_name";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ou_parent_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ou_parent_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme_dhis2_analytics_data["ou_parent_name"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "ou_parent_name";
//	ou_level_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ou_level_id";
	$fdata["GoodName"] = "ou_level_id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","ou_level_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ou_level_id";

		$fdata["sourceSingle"] = "ou_level_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ou_level_id";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["ou_level_id"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "ou_level_id";
//	ou_level_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ou_level_name";
	$fdata["GoodName"] = "ou_level_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","ou_level_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ou_level_name";

		$fdata["sourceSingle"] = "ou_level_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ou_level_name";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ou_level_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ou_level_name";

	

	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme_dhis2_analytics_data["ou_level_name"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "ou_level_name";
//	pe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pe_id";
	$fdata["GoodName"] = "pe_id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","pe_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pe_id";

		$fdata["sourceSingle"] = "pe_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pe_id";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["pe_id"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "pe_id";
//	pe_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "pe_name";
	$fdata["GoodName"] = "pe_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","pe_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pe_name";

		$fdata["sourceSingle"] = "pe_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pe_name";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "pe_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pe_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme_dhis2_analytics_data["pe_name"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "pe_name";
//	pe_relativeperiod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "pe_relativeperiod";
	$fdata["GoodName"] = "pe_relativeperiod";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","pe_relativeperiod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pe_relativeperiod";

		$fdata["sourceSingle"] = "pe_relativeperiod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pe_relativeperiod";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_analytics_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "pe_relativeperiod";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pe_relativeperiod";

	

	
	$edata["LookupOrderBy"] = "pe_relativeperiod";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme_dhis2_analytics_data["pe_relativeperiod"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "pe_relativeperiod";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "value";

		$fdata["sourceSingle"] = "value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"value\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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


	$tdatalifeboxme_dhis2_analytics_data["value"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "value";
//	stored_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "stored_by";
	$fdata["GoodName"] = "stored_by";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","stored_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stored_by";

		$fdata["sourceSingle"] = "stored_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stored_by";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["stored_by"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "stored_by";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

		$fdata["sourceSingle"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["created"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "created";
//	last_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "last_updated";
	$fdata["GoodName"] = "last_updated";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","last_updated");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_updated";

		$fdata["sourceSingle"] = "last_updated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_updated";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["last_updated"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "last_updated";
//	fetched_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "fetched_at";
	$fdata["GoodName"] = "fetched_at";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_analytics_data";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_analytics_data","fetched_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fetched_at";

		$fdata["sourceSingle"] = "fetched_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fetched_at";

	
	
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


	$tdatalifeboxme_dhis2_analytics_data["fetched_at"] = $fdata;
		$tdatalifeboxme_dhis2_analytics_data[".searchableFields"][] = "fetched_at";


$tables_data["public.lifeboxme_dhis2_analytics_data"]=&$tdatalifeboxme_dhis2_analytics_data;
$field_labels["public_lifeboxme_dhis2_analytics_data"] = &$fieldLabelslifeboxme_dhis2_analytics_data;
$fieldToolTips["public_lifeboxme_dhis2_analytics_data"] = &$fieldToolTipslifeboxme_dhis2_analytics_data;
$placeHolders["public_lifeboxme_dhis2_analytics_data"] = &$placeHolderslifeboxme_dhis2_analytics_data;
$page_titles["public_lifeboxme_dhis2_analytics_data"] = &$pageTitleslifeboxme_dhis2_analytics_data;


changeTextControlsToDate( "public.lifeboxme_dhis2_analytics_data" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lifeboxme_dhis2_analytics_data"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lifeboxme_dhis2_analytics_data"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lifeboxme_dhis2_analytics_settings";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lifeboxme_dhis2_analytics_settings";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lifeboxme_dhis2_analytics_settings";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lifeboxme_dhis2_analytics_data"][0] = $masterParams;
				$masterTablesData["public.lifeboxme_dhis2_analytics_data"][0]["masterKeys"] = array();
	$masterTablesData["public.lifeboxme_dhis2_analytics_data"][0]["masterKeys"][]="id";
				$masterTablesData["public.lifeboxme_dhis2_analytics_data"][0]["detailKeys"] = array();
	$masterTablesData["public.lifeboxme_dhis2_analytics_data"][0]["detailKeys"][]="setting_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lifeboxme_dhis2_analytics_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	setting_id,  	dx_id,  	dx_name,  	dx_shortname,  	dx_displayname,  	dx_dimensiontype,  	ou_id,  	ou_name,  	ou_parent_id,  	ou_parent_name,  	ou_level_id,  	ou_level_name,  	pe_id,  	pe_name,  	pe_relativeperiod,  	\"value\",  	stored_by,  	created,  	last_updated,  	fetched_at";
$proto0["m_strFrom"] = "FROM \"public\".lifeboxme_dhis2_analytics_data";
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
	"m_strName" => "id",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "setting_id",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto8["m_sql"] = "setting_id";
$proto8["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dx_id",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto10["m_sql"] = "dx_id";
$proto10["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dx_name",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto12["m_sql"] = "dx_name";
$proto12["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dx_shortname",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto14["m_sql"] = "dx_shortname";
$proto14["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dx_displayname",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto16["m_sql"] = "dx_displayname";
$proto16["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dx_dimensiontype",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto18["m_sql"] = "dx_dimensiontype";
$proto18["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ou_id",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto20["m_sql"] = "ou_id";
$proto20["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ou_name",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto22["m_sql"] = "ou_name";
$proto22["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ou_parent_id",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto24["m_sql"] = "ou_parent_id";
$proto24["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ou_parent_name",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto26["m_sql"] = "ou_parent_name";
$proto26["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ou_level_id",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto28["m_sql"] = "ou_level_id";
$proto28["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ou_level_name",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto30["m_sql"] = "ou_level_name";
$proto30["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pe_id",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto32["m_sql"] = "pe_id";
$proto32["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "pe_name",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto34["m_sql"] = "pe_name";
$proto34["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "pe_relativeperiod",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto36["m_sql"] = "pe_relativeperiod";
$proto36["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto38["m_sql"] = "\"value\"";
$proto38["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "stored_by",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto40["m_sql"] = "stored_by";
$proto40["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto42["m_sql"] = "created";
$proto42["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "last_updated",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto44["m_sql"] = "last_updated";
$proto44["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "fetched_at",
	"m_strTable" => "public.lifeboxme_dhis2_analytics_data",
	"m_srcTableName" => "public.lifeboxme_dhis2_analytics_data"
));

$proto46["m_sql"] = "fetched_at";
$proto46["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "public.lifeboxme_dhis2_analytics_data";
$proto49["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "setting_id";
$proto49["m_columns"][] = "dx_id";
$proto49["m_columns"][] = "dx_name";
$proto49["m_columns"][] = "dx_shortname";
$proto49["m_columns"][] = "dx_displayname";
$proto49["m_columns"][] = "dx_dimensiontype";
$proto49["m_columns"][] = "ou_id";
$proto49["m_columns"][] = "ou_name";
$proto49["m_columns"][] = "ou_parent_id";
$proto49["m_columns"][] = "ou_parent_name";
$proto49["m_columns"][] = "ou_level_id";
$proto49["m_columns"][] = "ou_level_name";
$proto49["m_columns"][] = "pe_id";
$proto49["m_columns"][] = "pe_name";
$proto49["m_columns"][] = "pe_relativeperiod";
$proto49["m_columns"][] = "value";
$proto49["m_columns"][] = "stored_by";
$proto49["m_columns"][] = "created";
$proto49["m_columns"][] = "last_updated";
$proto49["m_columns"][] = "fetched_at";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "\"public\".lifeboxme_dhis2_analytics_data";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "public.lifeboxme_dhis2_analytics_data";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lifeboxme_dhis2_analytics_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lifeboxme_dhis2_analytics_data = createSqlQuery_lifeboxme_dhis2_analytics_data();


	
				;

																					

$tdatalifeboxme_dhis2_analytics_data[".sqlquery"] = $queryData_lifeboxme_dhis2_analytics_data;



$tdatalifeboxme_dhis2_analytics_data[".hasEvents"] = false;

?>