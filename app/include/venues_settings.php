<?php
$tdatavenues = array();
$tdatavenues[".searchableFields"] = array();
$tdatavenues[".ShortName"] = "venues";
$tdatavenues[".OwnerID"] = "";
$tdatavenues[".OriginalTable"] = "public.venues";


$tdatavenues[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavenues[".originalPagesByType"] = $tdatavenues[".pagesByType"];
$tdatavenues[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavenues[".originalPages"] = $tdatavenues[".pages"];
$tdatavenues[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavenues[".originalDefaultPages"] = $tdatavenues[".defaultPages"];

//	field labels
$fieldLabelsvenues = array();
$fieldToolTipsvenues = array();
$pageTitlesvenues = array();
$placeHoldersvenues = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvenues["English"] = array();
	$fieldToolTipsvenues["English"] = array();
	$placeHoldersvenues["English"] = array();
	$pageTitlesvenues["English"] = array();
	$fieldLabelsvenues["English"]["venue_id"] = "Venue Id";
	$fieldToolTipsvenues["English"]["venue_id"] = "";
	$placeHoldersvenues["English"]["venue_id"] = "";
	$fieldLabelsvenues["English"]["venue_name"] = "Venue Name";
	$fieldToolTipsvenues["English"]["venue_name"] = "";
	$placeHoldersvenues["English"]["venue_name"] = "";
	$fieldLabelsvenues["English"]["facility_id"] = "Facility";
	$fieldToolTipsvenues["English"]["facility_id"] = "";
	$placeHoldersvenues["English"]["facility_id"] = "";
	$fieldLabelsvenues["English"]["address_line1"] = "Address Line1";
	$fieldToolTipsvenues["English"]["address_line1"] = "";
	$placeHoldersvenues["English"]["address_line1"] = "";
	$fieldLabelsvenues["English"]["address_line2"] = "Address Line2";
	$fieldToolTipsvenues["English"]["address_line2"] = "";
	$placeHoldersvenues["English"]["address_line2"] = "";
	$fieldLabelsvenues["English"]["city"] = "City";
	$fieldToolTipsvenues["English"]["city"] = "";
	$placeHoldersvenues["English"]["city"] = "";
	$fieldLabelsvenues["English"]["state_province"] = "State Province";
	$fieldToolTipsvenues["English"]["state_province"] = "";
	$placeHoldersvenues["English"]["state_province"] = "";
	$fieldLabelsvenues["English"]["postal_code"] = "Postal Code";
	$fieldToolTipsvenues["English"]["postal_code"] = "";
	$placeHoldersvenues["English"]["postal_code"] = "";
	$fieldLabelsvenues["English"]["country_id"] = "Country";
	$fieldToolTipsvenues["English"]["country_id"] = "";
	$placeHoldersvenues["English"]["country_id"] = "";
	$fieldLabelsvenues["English"]["capacity"] = "Capacity";
	$fieldToolTipsvenues["English"]["capacity"] = "";
	$placeHoldersvenues["English"]["capacity"] = "";
	$fieldLabelsvenues["English"]["room_type"] = "Room Type";
	$fieldToolTipsvenues["English"]["room_type"] = "";
	$placeHoldersvenues["English"]["room_type"] = "";
	$fieldLabelsvenues["English"]["amenities"] = "Amenities";
	$fieldToolTipsvenues["English"]["amenities"] = "";
	$placeHoldersvenues["English"]["amenities"] = "";
	$fieldLabelsvenues["English"]["is_active"] = "Is Active";
	$fieldToolTipsvenues["English"]["is_active"] = "";
	$placeHoldersvenues["English"]["is_active"] = "";
	$fieldLabelsvenues["English"]["created_at"] = "Created At";
	$fieldToolTipsvenues["English"]["created_at"] = "";
	$placeHoldersvenues["English"]["created_at"] = "";
	$fieldLabelsvenues["English"]["updated_at"] = "Updated At";
	$fieldToolTipsvenues["English"]["updated_at"] = "";
	$placeHoldersvenues["English"]["updated_at"] = "";
	if (count($fieldToolTipsvenues["English"]))
		$tdatavenues[".isUseToolTips"] = true;
}


	$tdatavenues[".NCSearch"] = true;



$tdatavenues[".shortTableName"] = "venues";
$tdatavenues[".nSecOptions"] = 0;

$tdatavenues[".mainTableOwnerID"] = "";
$tdatavenues[".entityType"] = 0;
$tdatavenues[".connId"] = "lifebox_mesystem_at_localhost";


$tdatavenues[".strOriginalTableName"] = "public.venues";

	



$tdatavenues[".showAddInPopup"] = false;

$tdatavenues[".showEditInPopup"] = false;

$tdatavenues[".showViewInPopup"] = false;

$tdatavenues[".listAjax"] = false;
//	temporary
//$tdatavenues[".listAjax"] = false;

	$tdatavenues[".audit"] = true;

	$tdatavenues[".locking"] = false;


$pages = $tdatavenues[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavenues[".edit"] = true;
	$tdatavenues[".afterEditAction"] = 1;
	$tdatavenues[".closePopupAfterEdit"] = 1;
	$tdatavenues[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavenues[".add"] = true;
$tdatavenues[".afterAddAction"] = 1;
$tdatavenues[".closePopupAfterAdd"] = 1;
$tdatavenues[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavenues[".list"] = true;
}



$tdatavenues[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavenues[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavenues[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavenues[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavenues[".printFriendly"] = true;
}



$tdatavenues[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavenues[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavenues[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavenues[".isUseAjaxSuggest"] = true;





$tdatavenues[".ajaxCodeSnippetAdded"] = false;

$tdatavenues[".buttonsAdded"] = false;

$tdatavenues[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavenues[".isUseTimeForSearch"] = false;


$tdatavenues[".badgeColor"] = "008B8B";


$tdatavenues[".allSearchFields"] = array();
$tdatavenues[".filterFields"] = array();
$tdatavenues[".requiredSearchFields"] = array();

$tdatavenues[".googleLikeFields"] = array();
$tdatavenues[".googleLikeFields"][] = "venue_id";
$tdatavenues[".googleLikeFields"][] = "venue_name";
$tdatavenues[".googleLikeFields"][] = "facility_id";
$tdatavenues[".googleLikeFields"][] = "address_line1";
$tdatavenues[".googleLikeFields"][] = "address_line2";
$tdatavenues[".googleLikeFields"][] = "city";
$tdatavenues[".googleLikeFields"][] = "state_province";
$tdatavenues[".googleLikeFields"][] = "postal_code";
$tdatavenues[".googleLikeFields"][] = "country_id";
$tdatavenues[".googleLikeFields"][] = "capacity";
$tdatavenues[".googleLikeFields"][] = "room_type";
$tdatavenues[".googleLikeFields"][] = "amenities";
$tdatavenues[".googleLikeFields"][] = "is_active";
$tdatavenues[".googleLikeFields"][] = "created_at";
$tdatavenues[".googleLikeFields"][] = "updated_at";



$tdatavenues[".tableType"] = "list";

$tdatavenues[".printerPageOrientation"] = 0;
$tdatavenues[".nPrinterPageScale"] = 100;

$tdatavenues[".nPrinterSplitRecords"] = 40;

$tdatavenues[".geocodingEnabled"] = false;










$tdatavenues[".pageSize"] = 20;

$tdatavenues[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavenues[".strOrderBy"] = $tstrOrderBy;

$tdatavenues[".orderindexes"] = array();


$tdatavenues[".sqlHead"] = "SELECT venue_id,  	venue_name,  	facility_id,  	address_line1,  	address_line2,  	city,  	state_province,  	postal_code,  	country_id,  	capacity,  	room_type,  	amenities,  	is_active,  	created_at,  	updated_at";
$tdatavenues[".sqlFrom"] = "FROM \"public\".venues";
$tdatavenues[".sqlWhereExpr"] = "";
$tdatavenues[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavenues[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavenues[".arrGroupsPerPage"] = $arrGPP;

$tdatavenues[".highlightSearchResults"] = true;

$tableKeysvenues = array();
$tableKeysvenues[] = "venue_id";
$tdatavenues[".Keys"] = $tableKeysvenues;


$tdatavenues[".hideMobileList"] = array();




//	venue_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "venue_id";
	$fdata["GoodName"] = "venue_id";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","venue_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "venue_id";

		$fdata["sourceSingle"] = "venue_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "venue_id";

	
	
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


	$tdatavenues["venue_id"] = $fdata;
		$tdatavenues[".searchableFields"][] = "venue_id";
//	venue_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "venue_name";
	$fdata["GoodName"] = "venue_name";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","venue_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "venue_name";

		$fdata["sourceSingle"] = "venue_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "venue_name";

	
	
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


	$tdatavenues["venue_name"] = $fdata;
		$tdatavenues[".searchableFields"][] = "venue_name";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","facility_id");
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


	$tdatavenues["facility_id"] = $fdata;
		$tdatavenues[".searchableFields"][] = "facility_id";
//	address_line1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "address_line1";
	$fdata["GoodName"] = "address_line1";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","address_line1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_line1";

		$fdata["sourceSingle"] = "address_line1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_line1";

	
	
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


	$tdatavenues["address_line1"] = $fdata;
		$tdatavenues[".searchableFields"][] = "address_line1";
//	address_line2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "address_line2";
	$fdata["GoodName"] = "address_line2";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","address_line2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_line2";

		$fdata["sourceSingle"] = "address_line2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_line2";

	
	
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


	$tdatavenues["address_line2"] = $fdata;
		$tdatavenues[".searchableFields"][] = "address_line2";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","city");
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


	$tdatavenues["city"] = $fdata;
		$tdatavenues[".searchableFields"][] = "city";
//	state_province
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "state_province";
	$fdata["GoodName"] = "state_province";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","state_province");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "state_province";

		$fdata["sourceSingle"] = "state_province";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "state_province";

	
	
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


	$tdatavenues["state_province"] = $fdata;
		$tdatavenues[".searchableFields"][] = "state_province";
//	postal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "postal_code";
	$fdata["GoodName"] = "postal_code";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","postal_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "postal_code";

		$fdata["sourceSingle"] = "postal_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postal_code";

	
	
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


	$tdatavenues["postal_code"] = $fdata;
		$tdatavenues[".searchableFields"][] = "postal_code";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","country_id");
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


	$tdatavenues["country_id"] = $fdata;
		$tdatavenues[".searchableFields"][] = "country_id";
//	capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "capacity";
	$fdata["GoodName"] = "capacity";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","capacity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "capacity";

		$fdata["sourceSingle"] = "capacity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capacity";

	
	
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


	$tdatavenues["capacity"] = $fdata;
		$tdatavenues[".searchableFields"][] = "capacity";
//	room_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "room_type";
	$fdata["GoodName"] = "room_type";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","room_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "room_type";

		$fdata["sourceSingle"] = "room_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "room_type";

	
	
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


	$tdatavenues["room_type"] = $fdata;
		$tdatavenues[".searchableFields"][] = "room_type";
//	amenities
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "amenities";
	$fdata["GoodName"] = "amenities";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","amenities");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "amenities";

		$fdata["sourceSingle"] = "amenities";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "amenities";

	
	
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


	$tdatavenues["amenities"] = $fdata;
		$tdatavenues[".searchableFields"][] = "amenities";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","is_active");
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


	$tdatavenues["is_active"] = $fdata;
		$tdatavenues[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","created_at");
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


	$tdatavenues["created_at"] = $fdata;
		$tdatavenues[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_venues","updated_at");
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


	$tdatavenues["updated_at"] = $fdata;
		$tdatavenues[".searchableFields"][] = "updated_at";


$tables_data["public.venues"]=&$tdatavenues;
$field_labels["public_venues"] = &$fieldLabelsvenues;
$fieldToolTips["public_venues"] = &$fieldToolTipsvenues;
$placeHolders["public_venues"] = &$placeHoldersvenues;
$page_titles["public_venues"] = &$pageTitlesvenues;


changeTextControlsToDate( "public.venues" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.venues"] = array();
//	public.training_participants
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_participants";
		$detailsParam["dOriginalTable"] = "public.training_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.venues"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.venues"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.venues"][$dIndex]["masterKeys"][]="venue_id";

				$detailsTablesData["public.venues"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.venues"][$dIndex]["detailKeys"][]="venue_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.venues"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.facilities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.facilities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facilities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.venues"][0] = $masterParams;
				$masterTablesData["public.venues"][0]["masterKeys"] = array();
	$masterTablesData["public.venues"][0]["masterKeys"][]="facility_id";
				$masterTablesData["public.venues"][0]["detailKeys"] = array();
	$masterTablesData["public.venues"][0]["detailKeys"][]="facility_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.countries";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.countries";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "countries";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.venues"][1] = $masterParams;
				$masterTablesData["public.venues"][1]["masterKeys"] = array();
	$masterTablesData["public.venues"][1]["masterKeys"][]="country_id";
				$masterTablesData["public.venues"][1]["detailKeys"] = array();
	$masterTablesData["public.venues"][1]["detailKeys"][]="country_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_venues()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "venue_id,  	venue_name,  	facility_id,  	address_line1,  	address_line2,  	city,  	state_province,  	postal_code,  	country_id,  	capacity,  	room_type,  	amenities,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".venues";
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
	"m_strName" => "venue_id",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto6["m_sql"] = "venue_id";
$proto6["m_srcTableName"] = "public.venues";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "venue_name",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto8["m_sql"] = "venue_name";
$proto8["m_srcTableName"] = "public.venues";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto10["m_sql"] = "facility_id";
$proto10["m_srcTableName"] = "public.venues";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "address_line1",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto12["m_sql"] = "address_line1";
$proto12["m_srcTableName"] = "public.venues";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "address_line2",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto14["m_sql"] = "address_line2";
$proto14["m_srcTableName"] = "public.venues";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto16["m_sql"] = "city";
$proto16["m_srcTableName"] = "public.venues";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "state_province",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto18["m_sql"] = "state_province";
$proto18["m_srcTableName"] = "public.venues";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "postal_code",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto20["m_sql"] = "postal_code";
$proto20["m_srcTableName"] = "public.venues";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto22["m_sql"] = "country_id";
$proto22["m_srcTableName"] = "public.venues";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto24["m_sql"] = "capacity";
$proto24["m_srcTableName"] = "public.venues";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "room_type",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto26["m_sql"] = "room_type";
$proto26["m_srcTableName"] = "public.venues";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "amenities",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto28["m_sql"] = "amenities";
$proto28["m_srcTableName"] = "public.venues";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto30["m_sql"] = "is_active";
$proto30["m_srcTableName"] = "public.venues";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto32["m_sql"] = "created_at";
$proto32["m_srcTableName"] = "public.venues";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.venues",
	"m_srcTableName" => "public.venues"
));

$proto34["m_sql"] = "updated_at";
$proto34["m_srcTableName"] = "public.venues";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "public.venues";
$proto37["m_srcTableName"] = "public.venues";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "venue_id";
$proto37["m_columns"][] = "venue_name";
$proto37["m_columns"][] = "facility_id";
$proto37["m_columns"][] = "address_line1";
$proto37["m_columns"][] = "address_line2";
$proto37["m_columns"][] = "city";
$proto37["m_columns"][] = "state_province";
$proto37["m_columns"][] = "postal_code";
$proto37["m_columns"][] = "country_id";
$proto37["m_columns"][] = "capacity";
$proto37["m_columns"][] = "room_type";
$proto37["m_columns"][] = "amenities";
$proto37["m_columns"][] = "is_active";
$proto37["m_columns"][] = "created_at";
$proto37["m_columns"][] = "updated_at";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "\"public\".venues";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "public.venues";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.venues";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_venues = createSqlQuery_venues();


	
				;

															

$tdatavenues[".sqlquery"] = $queryData_venues;



$tdatavenues[".hasEvents"] = false;

?>