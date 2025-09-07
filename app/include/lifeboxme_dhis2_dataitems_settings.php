<?php
$tdatalifeboxme_dhis2_dataitems = array();
$tdatalifeboxme_dhis2_dataitems[".searchableFields"] = array();
$tdatalifeboxme_dhis2_dataitems[".ShortName"] = "lifeboxme_dhis2_dataitems";
$tdatalifeboxme_dhis2_dataitems[".OwnerID"] = "";
$tdatalifeboxme_dhis2_dataitems[".OriginalTable"] = "public.lifeboxme_dhis2_dataitems";


$tdatalifeboxme_dhis2_dataitems[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalifeboxme_dhis2_dataitems[".originalPagesByType"] = $tdatalifeboxme_dhis2_dataitems[".pagesByType"];
$tdatalifeboxme_dhis2_dataitems[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalifeboxme_dhis2_dataitems[".originalPages"] = $tdatalifeboxme_dhis2_dataitems[".pages"];
$tdatalifeboxme_dhis2_dataitems[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalifeboxme_dhis2_dataitems[".originalDefaultPages"] = $tdatalifeboxme_dhis2_dataitems[".defaultPages"];

//	field labels
$fieldLabelslifeboxme_dhis2_dataitems = array();
$fieldToolTipslifeboxme_dhis2_dataitems = array();
$pageTitleslifeboxme_dhis2_dataitems = array();
$placeHolderslifeboxme_dhis2_dataitems = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifeboxme_dhis2_dataitems["English"] = array();
	$fieldToolTipslifeboxme_dhis2_dataitems["English"] = array();
	$placeHolderslifeboxme_dhis2_dataitems["English"] = array();
	$pageTitleslifeboxme_dhis2_dataitems["English"] = array();
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["id"] = "Id";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["id"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["id"] = "";
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["item_id"] = "Item Id";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["item_id"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["item_id"] = "";
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["display_name"] = "Data Item";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["display_name"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["display_name"] = "";
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["name"] = "Name";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["name"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["name"] = "";
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["short_name"] = "Short Name";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["short_name"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["short_name"] = "";
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["display_short_name"] = "Display Short Name";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["display_short_name"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["display_short_name"] = "";
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["dimension_item_type"] = "Dimension Type";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["dimension_item_type"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["dimension_item_type"] = "";
	$fieldLabelslifeboxme_dhis2_dataitems["English"]["last_updated"] = "Last Updated";
	$fieldToolTipslifeboxme_dhis2_dataitems["English"]["last_updated"] = "";
	$placeHolderslifeboxme_dhis2_dataitems["English"]["last_updated"] = "";
	if (count($fieldToolTipslifeboxme_dhis2_dataitems["English"]))
		$tdatalifeboxme_dhis2_dataitems[".isUseToolTips"] = true;
}


	$tdatalifeboxme_dhis2_dataitems[".NCSearch"] = true;



$tdatalifeboxme_dhis2_dataitems[".shortTableName"] = "lifeboxme_dhis2_dataitems";
$tdatalifeboxme_dhis2_dataitems[".nSecOptions"] = 0;

$tdatalifeboxme_dhis2_dataitems[".mainTableOwnerID"] = "";
$tdatalifeboxme_dhis2_dataitems[".entityType"] = 0;
$tdatalifeboxme_dhis2_dataitems[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalifeboxme_dhis2_dataitems[".strOriginalTableName"] = "public.lifeboxme_dhis2_dataitems";

	



$tdatalifeboxme_dhis2_dataitems[".showAddInPopup"] = false;

$tdatalifeboxme_dhis2_dataitems[".showEditInPopup"] = false;

$tdatalifeboxme_dhis2_dataitems[".showViewInPopup"] = false;

$tdatalifeboxme_dhis2_dataitems[".listAjax"] = false;
//	temporary
//$tdatalifeboxme_dhis2_dataitems[".listAjax"] = false;

	$tdatalifeboxme_dhis2_dataitems[".audit"] = true;

	$tdatalifeboxme_dhis2_dataitems[".locking"] = false;


$pages = $tdatalifeboxme_dhis2_dataitems[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifeboxme_dhis2_dataitems[".edit"] = true;
	$tdatalifeboxme_dhis2_dataitems[".afterEditAction"] = 1;
	$tdatalifeboxme_dhis2_dataitems[".closePopupAfterEdit"] = 1;
	$tdatalifeboxme_dhis2_dataitems[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifeboxme_dhis2_dataitems[".add"] = true;
$tdatalifeboxme_dhis2_dataitems[".afterAddAction"] = 1;
$tdatalifeboxme_dhis2_dataitems[".closePopupAfterAdd"] = 1;
$tdatalifeboxme_dhis2_dataitems[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifeboxme_dhis2_dataitems[".list"] = true;
}



$tdatalifeboxme_dhis2_dataitems[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifeboxme_dhis2_dataitems[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifeboxme_dhis2_dataitems[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifeboxme_dhis2_dataitems[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifeboxme_dhis2_dataitems[".printFriendly"] = true;
}



$tdatalifeboxme_dhis2_dataitems[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifeboxme_dhis2_dataitems[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifeboxme_dhis2_dataitems[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifeboxme_dhis2_dataitems[".isUseAjaxSuggest"] = true;





$tdatalifeboxme_dhis2_dataitems[".ajaxCodeSnippetAdded"] = false;

$tdatalifeboxme_dhis2_dataitems[".buttonsAdded"] = false;

$tdatalifeboxme_dhis2_dataitems[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifeboxme_dhis2_dataitems[".isUseTimeForSearch"] = false;


$tdatalifeboxme_dhis2_dataitems[".badgeColor"] = "DB7093";


$tdatalifeboxme_dhis2_dataitems[".allSearchFields"] = array();
$tdatalifeboxme_dhis2_dataitems[".filterFields"] = array();
$tdatalifeboxme_dhis2_dataitems[".requiredSearchFields"] = array();

$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"] = array();
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "id";
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "item_id";
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "display_name";
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "name";
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "short_name";
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "display_short_name";
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "dimension_item_type";
$tdatalifeboxme_dhis2_dataitems[".googleLikeFields"][] = "last_updated";



$tdatalifeboxme_dhis2_dataitems[".tableType"] = "list";

$tdatalifeboxme_dhis2_dataitems[".printerPageOrientation"] = 0;
$tdatalifeboxme_dhis2_dataitems[".nPrinterPageScale"] = 100;

$tdatalifeboxme_dhis2_dataitems[".nPrinterSplitRecords"] = 40;

$tdatalifeboxme_dhis2_dataitems[".geocodingEnabled"] = false;




$tdatalifeboxme_dhis2_dataitems[".isDisplayLoading"] = true;






$tdatalifeboxme_dhis2_dataitems[".pageSize"] = 20;

$tdatalifeboxme_dhis2_dataitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifeboxme_dhis2_dataitems[".strOrderBy"] = $tstrOrderBy;

$tdatalifeboxme_dhis2_dataitems[".orderindexes"] = array();


$tdatalifeboxme_dhis2_dataitems[".sqlHead"] = "SELECT id,  	item_id,  	display_name,  	name,  	short_name,  	display_short_name,  	dimension_item_type,  	last_updated";
$tdatalifeboxme_dhis2_dataitems[".sqlFrom"] = "FROM \"public\".lifeboxme_dhis2_dataitems";
$tdatalifeboxme_dhis2_dataitems[".sqlWhereExpr"] = "";
$tdatalifeboxme_dhis2_dataitems[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifeboxme_dhis2_dataitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifeboxme_dhis2_dataitems[".arrGroupsPerPage"] = $arrGPP;

$tdatalifeboxme_dhis2_dataitems[".highlightSearchResults"] = true;

$tableKeyslifeboxme_dhis2_dataitems = array();
$tableKeyslifeboxme_dhis2_dataitems[] = "id";
$tdatalifeboxme_dhis2_dataitems[".Keys"] = $tableKeyslifeboxme_dhis2_dataitems;


$tdatalifeboxme_dhis2_dataitems[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","id");
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


	$tdatalifeboxme_dhis2_dataitems["id"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "id";
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","item_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "item_id";

		$fdata["sourceSingle"] = "item_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_id";

	
	
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


	$tdatalifeboxme_dhis2_dataitems["item_id"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "item_id";
//	display_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "display_name";
	$fdata["GoodName"] = "display_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","display_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "display_name";

		$fdata["sourceSingle"] = "display_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "display_name";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_dataitems";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "display_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "display_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "dimension_item_type", "lookup" => "dimension_item_type" );

	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 4;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme_dhis2_dataitems["display_name"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "display_name";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatalifeboxme_dhis2_dataitems["name"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "name";
//	short_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "short_name";
	$fdata["GoodName"] = "short_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","short_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "short_name";

		$fdata["sourceSingle"] = "short_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "short_name";

	
	
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


	$tdatalifeboxme_dhis2_dataitems["short_name"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "short_name";
//	display_short_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "display_short_name";
	$fdata["GoodName"] = "display_short_name";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","display_short_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "display_short_name";

		$fdata["sourceSingle"] = "display_short_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "display_short_name";

	
	
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


	$tdatalifeboxme_dhis2_dataitems["display_short_name"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "display_short_name";
//	dimension_item_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dimension_item_type";
	$fdata["GoodName"] = "dimension_item_type";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","dimension_item_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dimension_item_type";

		$fdata["sourceSingle"] = "dimension_item_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dimension_item_type";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme_dhis2_dataitems";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "dimension_item_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dimension_item_type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "display_name";

	
	
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


	$tdatalifeboxme_dhis2_dataitems["dimension_item_type"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "dimension_item_type";
//	last_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "last_updated";
	$fdata["GoodName"] = "last_updated";
	$fdata["ownerTable"] = "public.lifeboxme_dhis2_dataitems";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme_dhis2_dataitems","last_updated");
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


	$tdatalifeboxme_dhis2_dataitems["last_updated"] = $fdata;
		$tdatalifeboxme_dhis2_dataitems[".searchableFields"][] = "last_updated";


$tables_data["public.lifeboxme_dhis2_dataitems"]=&$tdatalifeboxme_dhis2_dataitems;
$field_labels["public_lifeboxme_dhis2_dataitems"] = &$fieldLabelslifeboxme_dhis2_dataitems;
$fieldToolTips["public_lifeboxme_dhis2_dataitems"] = &$fieldToolTipslifeboxme_dhis2_dataitems;
$placeHolders["public_lifeboxme_dhis2_dataitems"] = &$placeHolderslifeboxme_dhis2_dataitems;
$page_titles["public_lifeboxme_dhis2_dataitems"] = &$pageTitleslifeboxme_dhis2_dataitems;


changeTextControlsToDate( "public.lifeboxme_dhis2_dataitems" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lifeboxme_dhis2_dataitems"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lifeboxme_dhis2_dataitems"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lifeboxme_dhis2_dataitems()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	item_id,  	display_name,  	name,  	short_name,  	display_short_name,  	dimension_item_type,  	last_updated";
$proto0["m_strFrom"] = "FROM \"public\".lifeboxme_dhis2_dataitems";
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
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto8["m_sql"] = "item_id";
$proto8["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "display_name",
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto10["m_sql"] = "display_name";
$proto10["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto12["m_sql"] = "name";
$proto12["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "short_name",
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto14["m_sql"] = "short_name";
$proto14["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "display_short_name",
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto16["m_sql"] = "display_short_name";
$proto16["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dimension_item_type",
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto18["m_sql"] = "dimension_item_type";
$proto18["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "last_updated",
	"m_strTable" => "public.lifeboxme_dhis2_dataitems",
	"m_srcTableName" => "public.lifeboxme_dhis2_dataitems"
));

$proto20["m_sql"] = "last_updated";
$proto20["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.lifeboxme_dhis2_dataitems";
$proto23["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "item_id";
$proto23["m_columns"][] = "display_name";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "short_name";
$proto23["m_columns"][] = "display_short_name";
$proto23["m_columns"][] = "dimension_item_type";
$proto23["m_columns"][] = "last_updated";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".lifeboxme_dhis2_dataitems";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.lifeboxme_dhis2_dataitems";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lifeboxme_dhis2_dataitems";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lifeboxme_dhis2_dataitems = createSqlQuery_lifeboxme_dhis2_dataitems();


	
				;

								

$tdatalifeboxme_dhis2_dataitems[".sqlquery"] = $queryData_lifeboxme_dhis2_dataitems;



$tdatalifeboxme_dhis2_dataitems[".hasEvents"] = false;

?>