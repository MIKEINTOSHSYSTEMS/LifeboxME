<?php
$tdatafacilities = array();
$tdatafacilities[".searchableFields"] = array();
$tdatafacilities[".ShortName"] = "facilities";
$tdatafacilities[".OwnerID"] = "";
$tdatafacilities[".OriginalTable"] = "public.facilities";


$tdatafacilities[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafacilities[".originalPagesByType"] = $tdatafacilities[".pagesByType"];
$tdatafacilities[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafacilities[".originalPages"] = $tdatafacilities[".pages"];
$tdatafacilities[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafacilities[".originalDefaultPages"] = $tdatafacilities[".defaultPages"];

//	field labels
$fieldLabelsfacilities = array();
$fieldToolTipsfacilities = array();
$pageTitlesfacilities = array();
$placeHoldersfacilities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfacilities["English"] = array();
	$fieldToolTipsfacilities["English"] = array();
	$placeHoldersfacilities["English"] = array();
	$pageTitlesfacilities["English"] = array();
	$fieldLabelsfacilities["English"]["facility_id"] = "Facility Id";
	$fieldToolTipsfacilities["English"]["facility_id"] = "";
	$placeHoldersfacilities["English"]["facility_id"] = "";
	$fieldLabelsfacilities["English"]["facility_name"] = "Facility Name";
	$fieldToolTipsfacilities["English"]["facility_name"] = "";
	$placeHoldersfacilities["English"]["facility_name"] = "";
	$fieldLabelsfacilities["English"]["country_id"] = "Country Id";
	$fieldToolTipsfacilities["English"]["country_id"] = "";
	$placeHoldersfacilities["English"]["country_id"] = "";
	$fieldLabelsfacilities["English"]["facility_type"] = "Facility Type";
	$fieldToolTipsfacilities["English"]["facility_type"] = "";
	$placeHoldersfacilities["English"]["facility_type"] = "";
	$fieldLabelsfacilities["English"]["address"] = "Address";
	$fieldToolTipsfacilities["English"]["address"] = "";
	$placeHoldersfacilities["English"]["address"] = "";
	$fieldLabelsfacilities["English"]["city"] = "City";
	$fieldToolTipsfacilities["English"]["city"] = "";
	$placeHoldersfacilities["English"]["city"] = "";
	$fieldLabelsfacilities["English"]["latitude"] = "Latitude";
	$fieldToolTipsfacilities["English"]["latitude"] = "";
	$placeHoldersfacilities["English"]["latitude"] = "";
	$fieldLabelsfacilities["English"]["longitude"] = "Longitude";
	$fieldToolTipsfacilities["English"]["longitude"] = "";
	$placeHoldersfacilities["English"]["longitude"] = "";
	$fieldLabelsfacilities["English"]["is_active"] = "Is Active";
	$fieldToolTipsfacilities["English"]["is_active"] = "";
	$placeHoldersfacilities["English"]["is_active"] = "";
	$fieldLabelsfacilities["English"]["created_at"] = "Created At";
	$fieldToolTipsfacilities["English"]["created_at"] = "";
	$placeHoldersfacilities["English"]["created_at"] = "";
	$fieldLabelsfacilities["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfacilities["English"]["updated_at"] = "";
	$placeHoldersfacilities["English"]["updated_at"] = "";
	if (count($fieldToolTipsfacilities["English"]))
		$tdatafacilities[".isUseToolTips"] = true;
}


	$tdatafacilities[".NCSearch"] = true;



$tdatafacilities[".shortTableName"] = "facilities";
$tdatafacilities[".nSecOptions"] = 0;

$tdatafacilities[".mainTableOwnerID"] = "";
$tdatafacilities[".entityType"] = 0;
$tdatafacilities[".connId"] = "lifebox_mesystem_at_localhost";


$tdatafacilities[".strOriginalTableName"] = "public.facilities";

	



$tdatafacilities[".showAddInPopup"] = false;

$tdatafacilities[".showEditInPopup"] = false;

$tdatafacilities[".showViewInPopup"] = false;

$tdatafacilities[".listAjax"] = false;
//	temporary
//$tdatafacilities[".listAjax"] = false;

	$tdatafacilities[".audit"] = false;

	$tdatafacilities[".locking"] = false;


$pages = $tdatafacilities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafacilities[".edit"] = true;
	$tdatafacilities[".afterEditAction"] = 1;
	$tdatafacilities[".closePopupAfterEdit"] = 1;
	$tdatafacilities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafacilities[".add"] = true;
$tdatafacilities[".afterAddAction"] = 1;
$tdatafacilities[".closePopupAfterAdd"] = 1;
$tdatafacilities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafacilities[".list"] = true;
}



$tdatafacilities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafacilities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafacilities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafacilities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafacilities[".printFriendly"] = true;
}



$tdatafacilities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafacilities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafacilities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafacilities[".isUseAjaxSuggest"] = true;





$tdatafacilities[".ajaxCodeSnippetAdded"] = false;

$tdatafacilities[".buttonsAdded"] = false;

$tdatafacilities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafacilities[".isUseTimeForSearch"] = false;


$tdatafacilities[".badgeColor"] = "6493EA";


$tdatafacilities[".allSearchFields"] = array();
$tdatafacilities[".filterFields"] = array();
$tdatafacilities[".requiredSearchFields"] = array();

$tdatafacilities[".googleLikeFields"] = array();
$tdatafacilities[".googleLikeFields"][] = "facility_id";
$tdatafacilities[".googleLikeFields"][] = "facility_name";
$tdatafacilities[".googleLikeFields"][] = "country_id";
$tdatafacilities[".googleLikeFields"][] = "facility_type";
$tdatafacilities[".googleLikeFields"][] = "address";
$tdatafacilities[".googleLikeFields"][] = "city";
$tdatafacilities[".googleLikeFields"][] = "latitude";
$tdatafacilities[".googleLikeFields"][] = "longitude";
$tdatafacilities[".googleLikeFields"][] = "is_active";
$tdatafacilities[".googleLikeFields"][] = "created_at";
$tdatafacilities[".googleLikeFields"][] = "updated_at";



$tdatafacilities[".tableType"] = "list";

$tdatafacilities[".printerPageOrientation"] = 0;
$tdatafacilities[".nPrinterPageScale"] = 100;

$tdatafacilities[".nPrinterSplitRecords"] = 40;

$tdatafacilities[".geocodingEnabled"] = false;










$tdatafacilities[".pageSize"] = 20;

$tdatafacilities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafacilities[".strOrderBy"] = $tstrOrderBy;

$tdatafacilities[".orderindexes"] = array();


$tdatafacilities[".sqlHead"] = "SELECT facility_id,  	facility_name,  	country_id,  	facility_type,  	address,  	city,  	latitude,  	longitude,  	is_active,  	created_at,  	updated_at";
$tdatafacilities[".sqlFrom"] = "FROM \"public\".facilities";
$tdatafacilities[".sqlWhereExpr"] = "";
$tdatafacilities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafacilities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafacilities[".arrGroupsPerPage"] = $arrGPP;

$tdatafacilities[".highlightSearchResults"] = true;

$tableKeysfacilities = array();
$tableKeysfacilities[] = "facility_id";
$tdatafacilities[".Keys"] = $tableKeysfacilities;


$tdatafacilities[".hideMobileList"] = array();




//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","facility_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatafacilities["facility_id"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "facility_id";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","facility_name");
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


	$tdatafacilities["facility_name"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "facility_name";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","country_id");
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


	$tdatafacilities["country_id"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "country_id";
//	facility_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "facility_type";
	$fdata["GoodName"] = "facility_type";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","facility_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "facility_type";

		$fdata["sourceSingle"] = "facility_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_type";

	
	
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


	$tdatafacilities["facility_type"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "facility_type";
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","address");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "address";

		$fdata["sourceSingle"] = "address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
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


	$tdatafacilities["address"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "address";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","city");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "city";

		$fdata["sourceSingle"] = "city";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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


	$tdatafacilities["city"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "city";
//	latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "latitude";
	$fdata["GoodName"] = "latitude";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","latitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "latitude";

		$fdata["sourceSingle"] = "latitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
	
	
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


	$tdatafacilities["latitude"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "latitude";
//	longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "longitude";
	$fdata["GoodName"] = "longitude";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","longitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "longitude";

		$fdata["sourceSingle"] = "longitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
	
	
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


	$tdatafacilities["longitude"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "longitude";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","is_active");
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


	$tdatafacilities["is_active"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","created_at");
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


	$tdatafacilities["created_at"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_facilities","updated_at");
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


	$tdatafacilities["updated_at"] = $fdata;
		$tdatafacilities[".searchableFields"][] = "updated_at";


$tables_data["public.facilities"]=&$tdatafacilities;
$field_labels["public_facilities"] = &$fieldLabelsfacilities;
$fieldToolTips["public_facilities"] = &$fieldToolTipsfacilities;
$placeHolders["public_facilities"] = &$placeHoldersfacilities;
$page_titles["public_facilities"] = &$pageTitlesfacilities;


changeTextControlsToDate( "public.facilities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.facilities"] = array();
//	public.clean_cut_implementations
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.clean_cut_implementations";
		$detailsParam["dOriginalTable"] = "public.clean_cut_implementations";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "clean_cut_implementations";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_clean_cut_implementations");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.facilities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.facilities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["masterKeys"][]="facility_id";

				$detailsTablesData["public.facilities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["detailKeys"][]="facility_id";
//	public.device_distributions
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.device_distributions";
		$detailsParam["dOriginalTable"] = "public.device_distributions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "device_distributions";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_device_distributions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.facilities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.facilities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["masterKeys"][]="facility_id";

				$detailsTablesData["public.facilities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["detailKeys"][]="facility_id";
//	public.follow_ups
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.follow_ups";
		$detailsParam["dOriginalTable"] = "public.follow_ups";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "follow_ups";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_follow_ups");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.facilities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.facilities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["masterKeys"][]="facility_id";

				$detailsTablesData["public.facilities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["detailKeys"][]="facility_id";
//	public.surgical_cases
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.surgical_cases";
		$detailsParam["dOriginalTable"] = "public.surgical_cases";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "surgical_cases";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_surgical_cases");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.facilities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.facilities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["masterKeys"][]="facility_id";

				$detailsTablesData["public.facilities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["detailKeys"][]="facility_id";
//	public.training_sessions
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_sessions";
		$detailsParam["dOriginalTable"] = "public.training_sessions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_sessions";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_sessions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.facilities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.facilities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["masterKeys"][]="facility_id";

				$detailsTablesData["public.facilities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["detailKeys"][]="facility_id";
//	public.ward_rounds
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ward_rounds";
		$detailsParam["dOriginalTable"] = "public.ward_rounds";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ward_rounds";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ward_rounds");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.facilities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.facilities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["masterKeys"][]="facility_id";

				$detailsTablesData["public.facilities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.facilities"][$dIndex]["detailKeys"][]="facility_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.facilities"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.countries";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.countries";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "countries";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.facilities"][0] = $masterParams;
				$masterTablesData["public.facilities"][0]["masterKeys"] = array();
	$masterTablesData["public.facilities"][0]["masterKeys"][]="country_id";
				$masterTablesData["public.facilities"][0]["detailKeys"] = array();
	$masterTablesData["public.facilities"][0]["detailKeys"][]="country_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_facilities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "facility_id,  	facility_name,  	country_id,  	facility_type,  	address,  	city,  	latitude,  	longitude,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".facilities";
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
	"m_strName" => "facility_id",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto6["m_sql"] = "facility_id";
$proto6["m_srcTableName"] = "public.facilities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto8["m_sql"] = "facility_name";
$proto8["m_srcTableName"] = "public.facilities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto10["m_sql"] = "country_id";
$proto10["m_srcTableName"] = "public.facilities";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto12["m_sql"] = "facility_type";
$proto12["m_srcTableName"] = "public.facilities";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto14["m_sql"] = "address";
$proto14["m_srcTableName"] = "public.facilities";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto16["m_sql"] = "city";
$proto16["m_srcTableName"] = "public.facilities";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "latitude",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto18["m_sql"] = "latitude";
$proto18["m_srcTableName"] = "public.facilities";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "longitude",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto20["m_sql"] = "longitude";
$proto20["m_srcTableName"] = "public.facilities";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto22["m_sql"] = "is_active";
$proto22["m_srcTableName"] = "public.facilities";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto24["m_sql"] = "created_at";
$proto24["m_srcTableName"] = "public.facilities";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.facilities",
	"m_srcTableName" => "public.facilities"
));

$proto26["m_sql"] = "updated_at";
$proto26["m_srcTableName"] = "public.facilities";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "public.facilities";
$proto29["m_srcTableName"] = "public.facilities";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "facility_id";
$proto29["m_columns"][] = "facility_name";
$proto29["m_columns"][] = "country_id";
$proto29["m_columns"][] = "facility_type";
$proto29["m_columns"][] = "address";
$proto29["m_columns"][] = "city";
$proto29["m_columns"][] = "latitude";
$proto29["m_columns"][] = "longitude";
$proto29["m_columns"][] = "is_active";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "updated_at";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "\"public\".facilities";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "public.facilities";
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
$proto0["m_srcTableName"]="public.facilities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_facilities = createSqlQuery_facilities();


	
		;

											

$tdatafacilities[".sqlquery"] = $queryData_facilities;



$tdatafacilities[".hasEvents"] = false;

?>