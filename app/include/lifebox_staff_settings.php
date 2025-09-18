<?php
$tdatalifebox_staff = array();
$tdatalifebox_staff[".searchableFields"] = array();
$tdatalifebox_staff[".ShortName"] = "lifebox_staff";
$tdatalifebox_staff[".OwnerID"] = "";
$tdatalifebox_staff[".OriginalTable"] = "public.lifebox_staff";


$tdatalifebox_staff[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalifebox_staff[".originalPagesByType"] = $tdatalifebox_staff[".pagesByType"];
$tdatalifebox_staff[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalifebox_staff[".originalPages"] = $tdatalifebox_staff[".pages"];
$tdatalifebox_staff[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalifebox_staff[".originalDefaultPages"] = $tdatalifebox_staff[".defaultPages"];

//	field labels
$fieldLabelslifebox_staff = array();
$fieldToolTipslifebox_staff = array();
$pageTitleslifebox_staff = array();
$placeHolderslifebox_staff = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifebox_staff["English"] = array();
	$fieldToolTipslifebox_staff["English"] = array();
	$placeHolderslifebox_staff["English"] = array();
	$pageTitleslifebox_staff["English"] = array();
	$fieldLabelslifebox_staff["English"]["staff_id"] = "Staff Id";
	$fieldToolTipslifebox_staff["English"]["staff_id"] = "";
	$placeHolderslifebox_staff["English"]["staff_id"] = "";
	$fieldLabelslifebox_staff["English"]["first_name"] = "First Name";
	$fieldToolTipslifebox_staff["English"]["first_name"] = "";
	$placeHolderslifebox_staff["English"]["first_name"] = "";
	$fieldLabelslifebox_staff["English"]["last_name"] = "Last Name";
	$fieldToolTipslifebox_staff["English"]["last_name"] = "";
	$placeHolderslifebox_staff["English"]["last_name"] = "";
	$fieldLabelslifebox_staff["English"]["email"] = "Email";
	$fieldToolTipslifebox_staff["English"]["email"] = "";
	$placeHolderslifebox_staff["English"]["email"] = "";
	$fieldLabelslifebox_staff["English"]["role"] = "Role";
	$fieldToolTipslifebox_staff["English"]["role"] = "";
	$placeHolderslifebox_staff["English"]["role"] = "";
	$fieldLabelslifebox_staff["English"]["region_id"] = "Region";
	$fieldToolTipslifebox_staff["English"]["region_id"] = "";
	$placeHolderslifebox_staff["English"]["region_id"] = "";
	$fieldLabelslifebox_staff["English"]["is_active"] = "Is Active";
	$fieldToolTipslifebox_staff["English"]["is_active"] = "";
	$placeHolderslifebox_staff["English"]["is_active"] = "";
	$fieldLabelslifebox_staff["English"]["created_at"] = "Created At";
	$fieldToolTipslifebox_staff["English"]["created_at"] = "";
	$placeHolderslifebox_staff["English"]["created_at"] = "";
	$fieldLabelslifebox_staff["English"]["updated_at"] = "Updated At";
	$fieldToolTipslifebox_staff["English"]["updated_at"] = "";
	$placeHolderslifebox_staff["English"]["updated_at"] = "";
	$fieldLabelslifebox_staff["English"]["lifebox_staff_details"] = "Lifebox Staff Details";
	$fieldToolTipslifebox_staff["English"]["lifebox_staff_details"] = "";
	$placeHolderslifebox_staff["English"]["lifebox_staff_details"] = "";
	if (count($fieldToolTipslifebox_staff["English"]))
		$tdatalifebox_staff[".isUseToolTips"] = true;
}


	$tdatalifebox_staff[".NCSearch"] = true;



$tdatalifebox_staff[".shortTableName"] = "lifebox_staff";
$tdatalifebox_staff[".nSecOptions"] = 0;

$tdatalifebox_staff[".mainTableOwnerID"] = "";
$tdatalifebox_staff[".entityType"] = 0;
$tdatalifebox_staff[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalifebox_staff[".strOriginalTableName"] = "public.lifebox_staff";

	



$tdatalifebox_staff[".showAddInPopup"] = false;

$tdatalifebox_staff[".showEditInPopup"] = false;

$tdatalifebox_staff[".showViewInPopup"] = false;

$tdatalifebox_staff[".listAjax"] = false;
//	temporary
//$tdatalifebox_staff[".listAjax"] = false;

	$tdatalifebox_staff[".audit"] = true;

	$tdatalifebox_staff[".locking"] = false;


$pages = $tdatalifebox_staff[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifebox_staff[".edit"] = true;
	$tdatalifebox_staff[".afterEditAction"] = 1;
	$tdatalifebox_staff[".closePopupAfterEdit"] = 1;
	$tdatalifebox_staff[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifebox_staff[".add"] = true;
$tdatalifebox_staff[".afterAddAction"] = 1;
$tdatalifebox_staff[".closePopupAfterAdd"] = 1;
$tdatalifebox_staff[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifebox_staff[".list"] = true;
}



$tdatalifebox_staff[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifebox_staff[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifebox_staff[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifebox_staff[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifebox_staff[".printFriendly"] = true;
}



$tdatalifebox_staff[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifebox_staff[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifebox_staff[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifebox_staff[".isUseAjaxSuggest"] = true;



						

$tdatalifebox_staff[".ajaxCodeSnippetAdded"] = false;

$tdatalifebox_staff[".buttonsAdded"] = false;

$tdatalifebox_staff[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifebox_staff[".isUseTimeForSearch"] = false;


$tdatalifebox_staff[".badgeColor"] = "00C2C5";


$tdatalifebox_staff[".allSearchFields"] = array();
$tdatalifebox_staff[".filterFields"] = array();
$tdatalifebox_staff[".requiredSearchFields"] = array();

$tdatalifebox_staff[".googleLikeFields"] = array();
$tdatalifebox_staff[".googleLikeFields"][] = "staff_id";
$tdatalifebox_staff[".googleLikeFields"][] = "first_name";
$tdatalifebox_staff[".googleLikeFields"][] = "last_name";
$tdatalifebox_staff[".googleLikeFields"][] = "email";
$tdatalifebox_staff[".googleLikeFields"][] = "role";
$tdatalifebox_staff[".googleLikeFields"][] = "region_id";
$tdatalifebox_staff[".googleLikeFields"][] = "is_active";
$tdatalifebox_staff[".googleLikeFields"][] = "lifebox_staff_details";
$tdatalifebox_staff[".googleLikeFields"][] = "created_at";
$tdatalifebox_staff[".googleLikeFields"][] = "updated_at";



$tdatalifebox_staff[".tableType"] = "list";

$tdatalifebox_staff[".printerPageOrientation"] = 0;
$tdatalifebox_staff[".nPrinterPageScale"] = 100;

$tdatalifebox_staff[".nPrinterSplitRecords"] = 40;

$tdatalifebox_staff[".geocodingEnabled"] = false;










$tdatalifebox_staff[".pageSize"] = 20;

$tdatalifebox_staff[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifebox_staff[".strOrderBy"] = $tstrOrderBy;

$tdatalifebox_staff[".orderindexes"] = array();


$tdatalifebox_staff[".sqlHead"] = "SELECT staff_id,      first_name,      last_name,      email,      \"role\",      region_id,      is_active,      CONCAT(          first_name, ' ', last_name, ' | ', email      ) AS lifebox_staff_details,  -- Concatenating first name, last name, and email      created_at,      updated_at";
$tdatalifebox_staff[".sqlFrom"] = "FROM       \"public\".lifebox_staff";
$tdatalifebox_staff[".sqlWhereExpr"] = "";
$tdatalifebox_staff[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifebox_staff[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifebox_staff[".arrGroupsPerPage"] = $arrGPP;

$tdatalifebox_staff[".highlightSearchResults"] = true;

$tableKeyslifebox_staff = array();
$tableKeyslifebox_staff[] = "staff_id";
$tdatalifebox_staff[".Keys"] = $tableKeyslifebox_staff;


$tdatalifebox_staff[".hideMobileList"] = array();




//	staff_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "staff_id";
	$fdata["GoodName"] = "staff_id";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","staff_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "staff_id";

		$fdata["sourceSingle"] = "staff_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staff_id";

	
	
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


	$tdatalifebox_staff["staff_id"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "staff_id";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","first_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "first_name";

		$fdata["sourceSingle"] = "first_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
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


	$tdatalifebox_staff["first_name"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

		$fdata["sourceSingle"] = "last_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
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


	$tdatalifebox_staff["last_name"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "last_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatalifebox_staff["email"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "email";
//	role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "role";
	$fdata["GoodName"] = "role";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","role");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "role";

		$fdata["sourceSingle"] = "role";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"role\"";

	
	
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


	$tdatalifebox_staff["role"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "role";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","region_id");
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


	$tdatalifebox_staff["region_id"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "region_id";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","is_active");
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


	$tdatalifebox_staff["is_active"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "is_active";
//	lifebox_staff_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lifebox_staff_details";
	$fdata["GoodName"] = "lifebox_staff_details";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","lifebox_staff_details");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "lifebox_staff_details";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(          first_name, ' ', last_name, ' | ', email      )";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatalifebox_staff["lifebox_staff_details"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "lifebox_staff_details";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","created_at");
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


	$tdatalifebox_staff["created_at"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.lifebox_staff";
	$fdata["Label"] = GetFieldLabel("public_lifebox_staff","updated_at");
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


	$tdatalifebox_staff["updated_at"] = $fdata;
		$tdatalifebox_staff[".searchableFields"][] = "updated_at";


$tables_data["public.lifebox_staff"]=&$tdatalifebox_staff;
$field_labels["public_lifebox_staff"] = &$fieldLabelslifebox_staff;
$fieldToolTips["public_lifebox_staff"] = &$fieldToolTipslifebox_staff;
$placeHolders["public_lifebox_staff"] = &$placeHolderslifebox_staff;
$page_titles["public_lifebox_staff"] = &$pageTitleslifebox_staff;


changeTextControlsToDate( "public.lifebox_staff" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lifebox_staff"] = array();
//	public.training_leads
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_leads";
		$detailsParam["dOriginalTable"] = "public.training_leads";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_leads";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_leads");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.lifebox_staff"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.lifebox_staff"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.lifebox_staff"][$dIndex]["masterKeys"][]="staff_id";

				$detailsTablesData["public.lifebox_staff"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.lifebox_staff"][$dIndex]["detailKeys"][]="staff_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lifebox_staff"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.lifebox_staff"][0] = $masterParams;
				$masterTablesData["public.lifebox_staff"][0]["masterKeys"] = array();
	$masterTablesData["public.lifebox_staff"][0]["masterKeys"][]="region_id";
				$masterTablesData["public.lifebox_staff"][0]["detailKeys"] = array();
	$masterTablesData["public.lifebox_staff"][0]["detailKeys"][]="region_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lifebox_staff()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "staff_id,      first_name,      last_name,      email,      \"role\",      region_id,      is_active,      CONCAT(          first_name, ' ', last_name, ' | ', email      ) AS lifebox_staff_details,  -- Concatenating first name, last name, and email      created_at,      updated_at";
$proto0["m_strFrom"] = "FROM       \"public\".lifebox_staff";
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
	"m_strName" => "staff_id",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto6["m_sql"] = "staff_id";
$proto6["m_srcTableName"] = "public.lifebox_staff";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto8["m_sql"] = "first_name";
$proto8["m_srcTableName"] = "public.lifebox_staff";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "public.lifebox_staff";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "public.lifebox_staff";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "role",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto14["m_sql"] = "\"role\"";
$proto14["m_srcTableName"] = "public.lifebox_staff";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto16["m_sql"] = "region_id";
$proto16["m_srcTableName"] = "public.lifebox_staff";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto18["m_sql"] = "is_active";
$proto18["m_srcTableName"] = "public.lifebox_staff";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "first_name"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "last_name"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "email"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "CONCAT(          first_name, ' ', last_name, ' | ', email      )";
$proto20["m_srcTableName"] = "public.lifebox_staff";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "lifebox_staff_details";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto27["m_sql"] = "created_at";
$proto27["m_srcTableName"] = "public.lifebox_staff";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.lifebox_staff",
	"m_srcTableName" => "public.lifebox_staff"
));

$proto29["m_sql"] = "updated_at";
$proto29["m_srcTableName"] = "public.lifebox_staff";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "public.lifebox_staff";
$proto32["m_srcTableName"] = "public.lifebox_staff";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "staff_id";
$proto32["m_columns"][] = "first_name";
$proto32["m_columns"][] = "last_name";
$proto32["m_columns"][] = "email";
$proto32["m_columns"][] = "role";
$proto32["m_columns"][] = "region_id";
$proto32["m_columns"][] = "is_active";
$proto32["m_columns"][] = "created_at";
$proto32["m_columns"][] = "updated_at";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "\"public\".lifebox_staff";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "public.lifebox_staff";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lifebox_staff";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lifebox_staff = createSqlQuery_lifebox_staff();


	
				;

										

$tdatalifebox_staff[".sqlquery"] = $queryData_lifebox_staff;



$tdatalifebox_staff[".hasEvents"] = false;

?>