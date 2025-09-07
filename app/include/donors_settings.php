<?php
$tdatadonors = array();
$tdatadonors[".searchableFields"] = array();
$tdatadonors[".ShortName"] = "donors";
$tdatadonors[".OwnerID"] = "";
$tdatadonors[".OriginalTable"] = "public.donors";


$tdatadonors[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadonors[".originalPagesByType"] = $tdatadonors[".pagesByType"];
$tdatadonors[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadonors[".originalPages"] = $tdatadonors[".pages"];
$tdatadonors[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadonors[".originalDefaultPages"] = $tdatadonors[".defaultPages"];

//	field labels
$fieldLabelsdonors = array();
$fieldToolTipsdonors = array();
$pageTitlesdonors = array();
$placeHoldersdonors = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdonors["English"] = array();
	$fieldToolTipsdonors["English"] = array();
	$placeHoldersdonors["English"] = array();
	$pageTitlesdonors["English"] = array();
	$fieldLabelsdonors["English"]["id"] = "Id";
	$fieldToolTipsdonors["English"]["id"] = "";
	$placeHoldersdonors["English"]["id"] = "";
	$fieldLabelsdonors["English"]["organization_name"] = "Organization Name";
	$fieldToolTipsdonors["English"]["organization_name"] = "";
	$placeHoldersdonors["English"]["organization_name"] = "";
	$fieldLabelsdonors["English"]["country_id"] = "Country";
	$fieldToolTipsdonors["English"]["country_id"] = "";
	$placeHoldersdonors["English"]["country_id"] = "";
	$fieldLabelsdonors["English"]["email"] = "Email";
	$fieldToolTipsdonors["English"]["email"] = "";
	$placeHoldersdonors["English"]["email"] = "";
	$fieldLabelsdonors["English"]["phone"] = "Phone";
	$fieldToolTipsdonors["English"]["phone"] = "";
	$placeHoldersdonors["English"]["phone"] = "";
	$fieldLabelsdonors["English"]["address_information"] = "Address Information";
	$fieldToolTipsdonors["English"]["address_information"] = "";
	$placeHoldersdonors["English"]["address_information"] = "";
	$fieldLabelsdonors["English"]["contact_person"] = "Contact Person";
	$fieldToolTipsdonors["English"]["contact_person"] = "";
	$placeHoldersdonors["English"]["contact_person"] = "";
	$fieldLabelsdonors["English"]["donor_status"] = "Donor Status";
	$fieldToolTipsdonors["English"]["donor_status"] = "";
	$placeHoldersdonors["English"]["donor_status"] = "";
	$fieldLabelsdonors["English"]["donor_type"] = "Donor Type";
	$fieldToolTipsdonors["English"]["donor_type"] = "";
	$placeHoldersdonors["English"]["donor_type"] = "";
	$fieldLabelsdonors["English"]["notes"] = "Notes";
	$fieldToolTipsdonors["English"]["notes"] = "";
	$placeHoldersdonors["English"]["notes"] = "";
	if (count($fieldToolTipsdonors["English"]))
		$tdatadonors[".isUseToolTips"] = true;
}


	$tdatadonors[".NCSearch"] = true;



$tdatadonors[".shortTableName"] = "donors";
$tdatadonors[".nSecOptions"] = 0;

$tdatadonors[".mainTableOwnerID"] = "";
$tdatadonors[".entityType"] = 0;
$tdatadonors[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadonors[".strOriginalTableName"] = "public.donors";

	



$tdatadonors[".showAddInPopup"] = false;

$tdatadonors[".showEditInPopup"] = false;

$tdatadonors[".showViewInPopup"] = false;

$tdatadonors[".listAjax"] = false;
//	temporary
//$tdatadonors[".listAjax"] = false;

	$tdatadonors[".audit"] = true;

	$tdatadonors[".locking"] = false;


$pages = $tdatadonors[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadonors[".edit"] = true;
	$tdatadonors[".afterEditAction"] = 1;
	$tdatadonors[".closePopupAfterEdit"] = 1;
	$tdatadonors[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadonors[".add"] = true;
$tdatadonors[".afterAddAction"] = 1;
$tdatadonors[".closePopupAfterAdd"] = 1;
$tdatadonors[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadonors[".list"] = true;
}



$tdatadonors[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadonors[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadonors[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadonors[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadonors[".printFriendly"] = true;
}



$tdatadonors[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadonors[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadonors[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadonors[".isUseAjaxSuggest"] = true;





$tdatadonors[".ajaxCodeSnippetAdded"] = false;

$tdatadonors[".buttonsAdded"] = false;

$tdatadonors[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadonors[".isUseTimeForSearch"] = false;


$tdatadonors[".badgeColor"] = "DAA520";


$tdatadonors[".allSearchFields"] = array();
$tdatadonors[".filterFields"] = array();
$tdatadonors[".requiredSearchFields"] = array();

$tdatadonors[".googleLikeFields"] = array();
$tdatadonors[".googleLikeFields"][] = "id";
$tdatadonors[".googleLikeFields"][] = "organization_name";
$tdatadonors[".googleLikeFields"][] = "country_id";
$tdatadonors[".googleLikeFields"][] = "email";
$tdatadonors[".googleLikeFields"][] = "phone";
$tdatadonors[".googleLikeFields"][] = "address_information";
$tdatadonors[".googleLikeFields"][] = "contact_person";
$tdatadonors[".googleLikeFields"][] = "donor_status";
$tdatadonors[".googleLikeFields"][] = "donor_type";
$tdatadonors[".googleLikeFields"][] = "notes";



$tdatadonors[".tableType"] = "list";

$tdatadonors[".printerPageOrientation"] = 0;
$tdatadonors[".nPrinterPageScale"] = 100;

$tdatadonors[".nPrinterSplitRecords"] = 40;

$tdatadonors[".geocodingEnabled"] = false;










$tdatadonors[".pageSize"] = 20;

$tdatadonors[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadonors[".strOrderBy"] = $tstrOrderBy;

$tdatadonors[".orderindexes"] = array();


$tdatadonors[".sqlHead"] = "SELECT id,  	organization_name,  	country_id,  	email,  	phone,  	address_information,  	contact_person,  	donor_status,  	donor_type,  	notes";
$tdatadonors[".sqlFrom"] = "FROM \"public\".donors";
$tdatadonors[".sqlWhereExpr"] = "";
$tdatadonors[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadonors[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadonors[".arrGroupsPerPage"] = $arrGPP;

$tdatadonors[".highlightSearchResults"] = true;

$tableKeysdonors = array();
$tableKeysdonors[] = "id";
$tdatadonors[".Keys"] = $tableKeysdonors;


$tdatadonors[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","id");
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


	$tdatadonors["id"] = $fdata;
		$tdatadonors[".searchableFields"][] = "id";
//	organization_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organization_name";
	$fdata["GoodName"] = "organization_name";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","organization_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organization_name";

		$fdata["sourceSingle"] = "organization_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organization_name";

	
	
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


	$tdatadonors["organization_name"] = $fdata;
		$tdatadonors[".searchableFields"][] = "organization_name";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","country_id");
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
	$edata["LinkFieldType"] = 0;
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


	$tdatadonors["country_id"] = $fdata;
		$tdatadonors[".searchableFields"][] = "country_id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","email");
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdatadonors["email"] = $fdata;
		$tdatadonors[".searchableFields"][] = "email";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

		$fdata["sourceSingle"] = "phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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

	$edata = array("EditFormat" => "Telephone");

	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadonors["phone"] = $fdata;
		$tdatadonors[".searchableFields"][] = "phone";
//	address_information
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address_information";
	$fdata["GoodName"] = "address_information";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","address_information");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_information";

		$fdata["sourceSingle"] = "address_information";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_information";

	
	
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


	$tdatadonors["address_information"] = $fdata;
		$tdatadonors[".searchableFields"][] = "address_information";
//	contact_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contact_person";
	$fdata["GoodName"] = "contact_person";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","contact_person");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact_person";

		$fdata["sourceSingle"] = "contact_person";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_person";

	
	
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


	$tdatadonors["contact_person"] = $fdata;
		$tdatadonors[".searchableFields"][] = "contact_person";
//	donor_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "donor_status";
	$fdata["GoodName"] = "donor_status";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","donor_status");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "donor_status";

		$fdata["sourceSingle"] = "donor_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "donor_status";

	
	
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


	$tdatadonors["donor_status"] = $fdata;
		$tdatadonors[".searchableFields"][] = "donor_status";
//	donor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "donor_type";
	$fdata["GoodName"] = "donor_type";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","donor_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "donor_type";

		$fdata["sourceSingle"] = "donor_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "donor_type";

	
	
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


	$tdatadonors["donor_type"] = $fdata;
		$tdatadonors[".searchableFields"][] = "donor_type";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.donors";
	$fdata["Label"] = GetFieldLabel("public_donors","notes");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatadonors["notes"] = $fdata;
		$tdatadonors[".searchableFields"][] = "notes";


$tables_data["public.donors"]=&$tdatadonors;
$field_labels["public_donors"] = &$fieldLabelsdonors;
$fieldToolTips["public_donors"] = &$fieldToolTipsdonors;
$placeHolders["public_donors"] = &$placeHoldersdonors;
$page_titles["public_donors"] = &$pageTitlesdonors;


changeTextControlsToDate( "public.donors" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.donors"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.donors"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_donors()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	organization_name,  	country_id,  	email,  	phone,  	address_information,  	contact_person,  	donor_status,  	donor_type,  	notes";
$proto0["m_strFrom"] = "FROM \"public\".donors";
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
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.donors";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_name",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto8["m_sql"] = "organization_name";
$proto8["m_srcTableName"] = "public.donors";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto10["m_sql"] = "country_id";
$proto10["m_srcTableName"] = "public.donors";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "public.donors";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto14["m_sql"] = "phone";
$proto14["m_srcTableName"] = "public.donors";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "address_information",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto16["m_sql"] = "address_information";
$proto16["m_srcTableName"] = "public.donors";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_person",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto18["m_sql"] = "contact_person";
$proto18["m_srcTableName"] = "public.donors";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "donor_status",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto20["m_sql"] = "donor_status";
$proto20["m_srcTableName"] = "public.donors";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "donor_type",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto22["m_sql"] = "donor_type";
$proto22["m_srcTableName"] = "public.donors";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.donors",
	"m_srcTableName" => "public.donors"
));

$proto24["m_sql"] = "notes";
$proto24["m_srcTableName"] = "public.donors";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.donors";
$proto27["m_srcTableName"] = "public.donors";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "organization_name";
$proto27["m_columns"][] = "country_id";
$proto27["m_columns"][] = "email";
$proto27["m_columns"][] = "phone";
$proto27["m_columns"][] = "address_information";
$proto27["m_columns"][] = "contact_person";
$proto27["m_columns"][] = "donor_status";
$proto27["m_columns"][] = "donor_type";
$proto27["m_columns"][] = "notes";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".donors";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.donors";
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
$proto0["m_srcTableName"]="public.donors";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_donors = createSqlQuery_donors();


	
				;

										

$tdatadonors[".sqlquery"] = $queryData_donors;



$tdatadonors[".hasEvents"] = false;

?>