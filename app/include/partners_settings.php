<?php
$tdatapartners = array();
$tdatapartners[".searchableFields"] = array();
$tdatapartners[".ShortName"] = "partners";
$tdatapartners[".OwnerID"] = "";
$tdatapartners[".OriginalTable"] = "public.partners";


$tdatapartners[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapartners[".originalPagesByType"] = $tdatapartners[".pagesByType"];
$tdatapartners[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapartners[".originalPages"] = $tdatapartners[".pages"];
$tdatapartners[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapartners[".originalDefaultPages"] = $tdatapartners[".defaultPages"];

//	field labels
$fieldLabelspartners = array();
$fieldToolTipspartners = array();
$pageTitlespartners = array();
$placeHolderspartners = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspartners["English"] = array();
	$fieldToolTipspartners["English"] = array();
	$placeHolderspartners["English"] = array();
	$pageTitlespartners["English"] = array();
	$fieldLabelspartners["English"]["partner_id"] = "Partner Id";
	$fieldToolTipspartners["English"]["partner_id"] = "";
	$placeHolderspartners["English"]["partner_id"] = "";
	$fieldLabelspartners["English"]["partner_name"] = "Partner Name";
	$fieldToolTipspartners["English"]["partner_name"] = "";
	$placeHolderspartners["English"]["partner_name"] = "";
	$fieldLabelspartners["English"]["description"] = "Description";
	$fieldToolTipspartners["English"]["description"] = "";
	$placeHolderspartners["English"]["description"] = "";
	$fieldLabelspartners["English"]["website"] = "Website";
	$fieldToolTipspartners["English"]["website"] = "";
	$placeHolderspartners["English"]["website"] = "";
	$fieldLabelspartners["English"]["contact_email"] = "Contact Email";
	$fieldToolTipspartners["English"]["contact_email"] = "";
	$placeHolderspartners["English"]["contact_email"] = "";
	$fieldLabelspartners["English"]["is_active"] = "Is Active";
	$fieldToolTipspartners["English"]["is_active"] = "";
	$placeHolderspartners["English"]["is_active"] = "";
	$fieldLabelspartners["English"]["created_at"] = "Created At";
	$fieldToolTipspartners["English"]["created_at"] = "";
	$placeHolderspartners["English"]["created_at"] = "";
	$fieldLabelspartners["English"]["updated_at"] = "Updated At";
	$fieldToolTipspartners["English"]["updated_at"] = "";
	$placeHolderspartners["English"]["updated_at"] = "";
	if (count($fieldToolTipspartners["English"]))
		$tdatapartners[".isUseToolTips"] = true;
}


	$tdatapartners[".NCSearch"] = true;



$tdatapartners[".shortTableName"] = "partners";
$tdatapartners[".nSecOptions"] = 0;

$tdatapartners[".mainTableOwnerID"] = "";
$tdatapartners[".entityType"] = 0;
$tdatapartners[".connId"] = "lifebox_mesystem_at_localhost";


$tdatapartners[".strOriginalTableName"] = "public.partners";

	



$tdatapartners[".showAddInPopup"] = false;

$tdatapartners[".showEditInPopup"] = false;

$tdatapartners[".showViewInPopup"] = false;

$tdatapartners[".listAjax"] = false;
//	temporary
//$tdatapartners[".listAjax"] = false;

	$tdatapartners[".audit"] = true;

	$tdatapartners[".locking"] = false;


$pages = $tdatapartners[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapartners[".edit"] = true;
	$tdatapartners[".afterEditAction"] = 1;
	$tdatapartners[".closePopupAfterEdit"] = 1;
	$tdatapartners[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapartners[".add"] = true;
$tdatapartners[".afterAddAction"] = 1;
$tdatapartners[".closePopupAfterAdd"] = 1;
$tdatapartners[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapartners[".list"] = true;
}



$tdatapartners[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapartners[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapartners[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapartners[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapartners[".printFriendly"] = true;
}



$tdatapartners[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapartners[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapartners[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapartners[".isUseAjaxSuggest"] = true;



			

$tdatapartners[".ajaxCodeSnippetAdded"] = false;

$tdatapartners[".buttonsAdded"] = false;

$tdatapartners[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapartners[".isUseTimeForSearch"] = false;


$tdatapartners[".badgeColor"] = "4682B4";


$tdatapartners[".allSearchFields"] = array();
$tdatapartners[".filterFields"] = array();
$tdatapartners[".requiredSearchFields"] = array();

$tdatapartners[".googleLikeFields"] = array();
$tdatapartners[".googleLikeFields"][] = "partner_id";
$tdatapartners[".googleLikeFields"][] = "partner_name";
$tdatapartners[".googleLikeFields"][] = "description";
$tdatapartners[".googleLikeFields"][] = "website";
$tdatapartners[".googleLikeFields"][] = "contact_email";
$tdatapartners[".googleLikeFields"][] = "is_active";
$tdatapartners[".googleLikeFields"][] = "created_at";
$tdatapartners[".googleLikeFields"][] = "updated_at";



$tdatapartners[".tableType"] = "list";

$tdatapartners[".printerPageOrientation"] = 0;
$tdatapartners[".nPrinterPageScale"] = 100;

$tdatapartners[".nPrinterSplitRecords"] = 40;

$tdatapartners[".geocodingEnabled"] = false;










$tdatapartners[".pageSize"] = 20;

$tdatapartners[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapartners[".strOrderBy"] = $tstrOrderBy;

$tdatapartners[".orderindexes"] = array();


$tdatapartners[".sqlHead"] = "SELECT partner_id,  	partner_name,  	description,  	website,  	contact_email,  	is_active,  	created_at,  	updated_at";
$tdatapartners[".sqlFrom"] = "FROM \"public\".partners";
$tdatapartners[".sqlWhereExpr"] = "";
$tdatapartners[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapartners[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapartners[".arrGroupsPerPage"] = $arrGPP;

$tdatapartners[".highlightSearchResults"] = true;

$tableKeyspartners = array();
$tableKeyspartners[] = "partner_id";
$tdatapartners[".Keys"] = $tableKeyspartners;


$tdatapartners[".hideMobileList"] = array();




//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","partner_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "partner_id";

		$fdata["sourceSingle"] = "partner_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "partner_id";

	
	
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


	$tdatapartners["partner_id"] = $fdata;
		$tdatapartners[".searchableFields"][] = "partner_id";
//	partner_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "partner_name";
	$fdata["GoodName"] = "partner_name";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","partner_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "partner_name";

		$fdata["sourceSingle"] = "partner_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "partner_name";

	
	
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


	$tdatapartners["partner_name"] = $fdata;
		$tdatapartners[".searchableFields"][] = "partner_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatapartners["description"] = $fdata;
		$tdatapartners[".searchableFields"][] = "description";
//	website
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "website";
	$fdata["GoodName"] = "website";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","website");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "website";

		$fdata["sourceSingle"] = "website";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "website";

	
	
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


	$tdatapartners["website"] = $fdata;
		$tdatapartners[".searchableFields"][] = "website";
//	contact_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contact_email";
	$fdata["GoodName"] = "contact_email";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","contact_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact_email";

		$fdata["sourceSingle"] = "contact_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_email";

	
	
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


	$tdatapartners["contact_email"] = $fdata;
		$tdatapartners[".searchableFields"][] = "contact_email";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","is_active");
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


	$tdatapartners["is_active"] = $fdata;
		$tdatapartners[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","created_at");
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


	$tdatapartners["created_at"] = $fdata;
		$tdatapartners[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_partners","updated_at");
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


	$tdatapartners["updated_at"] = $fdata;
		$tdatapartners[".searchableFields"][] = "updated_at";


$tables_data["public.partners"]=&$tdatapartners;
$field_labels["public_partners"] = &$fieldLabelspartners;
$fieldToolTips["public_partners"] = &$fieldToolTipspartners;
$placeHolders["public_partners"] = &$placeHolderspartners;
$page_titles["public_partners"] = &$pageTitlespartners;


changeTextControlsToDate( "public.partners" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.partners"] = array();
//	public.training_partners
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_partners";
		$detailsParam["dOriginalTable"] = "public.training_partners";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_partners";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_partners");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.partners"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.partners"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.partners"][$dIndex]["masterKeys"][]="partner_id";

				$detailsTablesData["public.partners"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.partners"][$dIndex]["detailKeys"][]="partner_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.partners"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_partners()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "partner_id,  	partner_name,  	description,  	website,  	contact_email,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".partners";
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
	"m_strName" => "partner_id",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto6["m_sql"] = "partner_id";
$proto6["m_srcTableName"] = "public.partners";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_name",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto8["m_sql"] = "partner_name";
$proto8["m_srcTableName"] = "public.partners";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.partners";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "website",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto12["m_sql"] = "website";
$proto12["m_srcTableName"] = "public.partners";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_email",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto14["m_sql"] = "contact_email";
$proto14["m_srcTableName"] = "public.partners";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto16["m_sql"] = "is_active";
$proto16["m_srcTableName"] = "public.partners";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto18["m_sql"] = "created_at";
$proto18["m_srcTableName"] = "public.partners";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.partners",
	"m_srcTableName" => "public.partners"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "public.partners";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.partners";
$proto23["m_srcTableName"] = "public.partners";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "partner_id";
$proto23["m_columns"][] = "partner_name";
$proto23["m_columns"][] = "description";
$proto23["m_columns"][] = "website";
$proto23["m_columns"][] = "contact_email";
$proto23["m_columns"][] = "is_active";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "updated_at";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".partners";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.partners";
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
$proto0["m_srcTableName"]="public.partners";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_partners = createSqlQuery_partners();


	
				;

								

$tdatapartners[".sqlquery"] = $queryData_partners;



$tdatapartners[".hasEvents"] = false;

?>