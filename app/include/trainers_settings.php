<?php
$tdatatrainers = array();
$tdatatrainers[".searchableFields"] = array();
$tdatatrainers[".ShortName"] = "trainers";
$tdatatrainers[".OwnerID"] = "";
$tdatatrainers[".OriginalTable"] = "public.trainers";


$tdatatrainers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatrainers[".originalPagesByType"] = $tdatatrainers[".pagesByType"];
$tdatatrainers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatrainers[".originalPages"] = $tdatatrainers[".pages"];
$tdatatrainers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatrainers[".originalDefaultPages"] = $tdatatrainers[".defaultPages"];

//	field labels
$fieldLabelstrainers = array();
$fieldToolTipstrainers = array();
$pageTitlestrainers = array();
$placeHolderstrainers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrainers["English"] = array();
	$fieldToolTipstrainers["English"] = array();
	$placeHolderstrainers["English"] = array();
	$pageTitlestrainers["English"] = array();
	$fieldLabelstrainers["English"]["trainer_id"] = "Trainer Id";
	$fieldToolTipstrainers["English"]["trainer_id"] = "";
	$placeHolderstrainers["English"]["trainer_id"] = "";
	$fieldLabelstrainers["English"]["first_name"] = "First Name";
	$fieldToolTipstrainers["English"]["first_name"] = "";
	$placeHolderstrainers["English"]["first_name"] = "";
	$fieldLabelstrainers["English"]["last_name"] = "Last Name";
	$fieldToolTipstrainers["English"]["last_name"] = "";
	$placeHolderstrainers["English"]["last_name"] = "";
	$fieldLabelstrainers["English"]["email"] = "Email";
	$fieldToolTipstrainers["English"]["email"] = "";
	$placeHolderstrainers["English"]["email"] = "";
	$fieldLabelstrainers["English"]["organization"] = "Organization";
	$fieldToolTipstrainers["English"]["organization"] = "";
	$placeHolderstrainers["English"]["organization"] = "";
	$fieldLabelstrainers["English"]["is_active"] = "Is Active";
	$fieldToolTipstrainers["English"]["is_active"] = "";
	$placeHolderstrainers["English"]["is_active"] = "";
	$fieldLabelstrainers["English"]["created_at"] = "Created At";
	$fieldToolTipstrainers["English"]["created_at"] = "";
	$placeHolderstrainers["English"]["created_at"] = "";
	$fieldLabelstrainers["English"]["updated_at"] = "Updated At";
	$fieldToolTipstrainers["English"]["updated_at"] = "";
	$placeHolderstrainers["English"]["updated_at"] = "";
	$fieldLabelstrainers["English"]["trainer_details"] = "Trainer Details";
	$fieldToolTipstrainers["English"]["trainer_details"] = "";
	$placeHolderstrainers["English"]["trainer_details"] = "";
	if (count($fieldToolTipstrainers["English"]))
		$tdatatrainers[".isUseToolTips"] = true;
}


	$tdatatrainers[".NCSearch"] = true;



$tdatatrainers[".shortTableName"] = "trainers";
$tdatatrainers[".nSecOptions"] = 0;

$tdatatrainers[".mainTableOwnerID"] = "";
$tdatatrainers[".entityType"] = 0;
$tdatatrainers[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatrainers[".strOriginalTableName"] = "public.trainers";

	



$tdatatrainers[".showAddInPopup"] = false;

$tdatatrainers[".showEditInPopup"] = false;

$tdatatrainers[".showViewInPopup"] = false;

$tdatatrainers[".listAjax"] = false;
//	temporary
//$tdatatrainers[".listAjax"] = false;

	$tdatatrainers[".audit"] = true;

	$tdatatrainers[".locking"] = false;


$pages = $tdatatrainers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrainers[".edit"] = true;
	$tdatatrainers[".afterEditAction"] = 1;
	$tdatatrainers[".closePopupAfterEdit"] = 1;
	$tdatatrainers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrainers[".add"] = true;
$tdatatrainers[".afterAddAction"] = 1;
$tdatatrainers[".closePopupAfterAdd"] = 1;
$tdatatrainers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrainers[".list"] = true;
}



$tdatatrainers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrainers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrainers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrainers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrainers[".printFriendly"] = true;
}



$tdatatrainers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrainers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrainers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrainers[".isUseAjaxSuggest"] = true;



			

$tdatatrainers[".ajaxCodeSnippetAdded"] = false;

$tdatatrainers[".buttonsAdded"] = false;

$tdatatrainers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrainers[".isUseTimeForSearch"] = false;


$tdatatrainers[".badgeColor"] = "D2691E";


$tdatatrainers[".allSearchFields"] = array();
$tdatatrainers[".filterFields"] = array();
$tdatatrainers[".requiredSearchFields"] = array();

$tdatatrainers[".googleLikeFields"] = array();
$tdatatrainers[".googleLikeFields"][] = "trainer_id";
$tdatatrainers[".googleLikeFields"][] = "first_name";
$tdatatrainers[".googleLikeFields"][] = "last_name";
$tdatatrainers[".googleLikeFields"][] = "email";
$tdatatrainers[".googleLikeFields"][] = "organization";
$tdatatrainers[".googleLikeFields"][] = "trainer_details";
$tdatatrainers[".googleLikeFields"][] = "is_active";
$tdatatrainers[".googleLikeFields"][] = "created_at";
$tdatatrainers[".googleLikeFields"][] = "updated_at";



$tdatatrainers[".tableType"] = "list";

$tdatatrainers[".printerPageOrientation"] = 0;
$tdatatrainers[".nPrinterPageScale"] = 100;

$tdatatrainers[".nPrinterSplitRecords"] = 40;

$tdatatrainers[".geocodingEnabled"] = false;










$tdatatrainers[".pageSize"] = 20;

$tdatatrainers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatrainers[".strOrderBy"] = $tstrOrderBy;

$tdatatrainers[".orderindexes"] = array();


$tdatatrainers[".sqlHead"] = "SELECT trainer_id,      first_name,      last_name,      email,      \"organization\",      -- Add the concatenated trainer details as a new column      CONCAT(first_name, ' ', last_name, ' | ', email, ' | ', \"organization\") AS trainer_details,      is_active,      created_at,      updated_at";
$tdatatrainers[".sqlFrom"] = "FROM      \"public\".trainers";
$tdatatrainers[".sqlWhereExpr"] = "";
$tdatatrainers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrainers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrainers[".arrGroupsPerPage"] = $arrGPP;

$tdatatrainers[".highlightSearchResults"] = true;

$tableKeystrainers = array();
$tableKeystrainers[] = "trainer_id";
$tdatatrainers[".Keys"] = $tableKeystrainers;


$tdatatrainers[".hideMobileList"] = array();




//	trainer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "trainer_id";
	$fdata["GoodName"] = "trainer_id";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","trainer_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "trainer_id";

		$fdata["sourceSingle"] = "trainer_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trainer_id";

	
	
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


	$tdatatrainers["trainer_id"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "trainer_id";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","first_name");
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


	$tdatatrainers["first_name"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","last_name");
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


	$tdatatrainers["last_name"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "last_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","email");
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


	$tdatatrainers["email"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "email";
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","organization");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organization";

		$fdata["sourceSingle"] = "organization";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"organization\"";

	
	
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


	$tdatatrainers["organization"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "organization";
//	trainer_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "trainer_details";
	$fdata["GoodName"] = "trainer_details";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_trainers","trainer_details");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "trainer_details";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(first_name, ' ', last_name, ' | ', email, ' | ', \"organization\")";

	
	
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


	$tdatatrainers["trainer_details"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "trainer_details";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","is_active");
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


	$tdatatrainers["is_active"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","created_at");
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


	$tdatatrainers["created_at"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.trainers";
	$fdata["Label"] = GetFieldLabel("public_trainers","updated_at");
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


	$tdatatrainers["updated_at"] = $fdata;
		$tdatatrainers[".searchableFields"][] = "updated_at";


$tables_data["public.trainers"]=&$tdatatrainers;
$field_labels["public_trainers"] = &$fieldLabelstrainers;
$fieldToolTips["public_trainers"] = &$fieldToolTipstrainers;
$placeHolders["public_trainers"] = &$placeHolderstrainers;
$page_titles["public_trainers"] = &$pageTitlestrainers;


changeTextControlsToDate( "public.trainers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.trainers"] = array();
//	public.training_trainers
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_trainers";
		$detailsParam["dOriginalTable"] = "public.training_trainers";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_trainers";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_trainers");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.trainers"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.trainers"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.trainers"][$dIndex]["masterKeys"][]="trainer_id";

				$detailsTablesData["public.trainers"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.trainers"][$dIndex]["detailKeys"][]="trainer_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.trainers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_trainers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "trainer_id,      first_name,      last_name,      email,      \"organization\",      -- Add the concatenated trainer details as a new column      CONCAT(first_name, ' ', last_name, ' | ', email, ' | ', \"organization\") AS trainer_details,      is_active,      created_at,      updated_at";
$proto0["m_strFrom"] = "FROM      \"public\".trainers";
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
	"m_strName" => "trainer_id",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto6["m_sql"] = "trainer_id";
$proto6["m_srcTableName"] = "public.trainers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto8["m_sql"] = "first_name";
$proto8["m_srcTableName"] = "public.trainers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "public.trainers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "public.trainers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto14["m_sql"] = "\"organization\"";
$proto14["m_srcTableName"] = "public.trainers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "first_name"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "last_name"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "email"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"organization\""
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "CONCAT(first_name, ' ', last_name, ' | ', email, ' | ', \"organization\")";
$proto16["m_srcTableName"] = "public.trainers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "trainer_details";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto25["m_sql"] = "is_active";
$proto25["m_srcTableName"] = "public.trainers";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto27["m_sql"] = "created_at";
$proto27["m_srcTableName"] = "public.trainers";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.trainers",
	"m_srcTableName" => "public.trainers"
));

$proto29["m_sql"] = "updated_at";
$proto29["m_srcTableName"] = "public.trainers";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "public.trainers";
$proto32["m_srcTableName"] = "public.trainers";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "trainer_id";
$proto32["m_columns"][] = "first_name";
$proto32["m_columns"][] = "last_name";
$proto32["m_columns"][] = "email";
$proto32["m_columns"][] = "organization";
$proto32["m_columns"][] = "is_active";
$proto32["m_columns"][] = "created_at";
$proto32["m_columns"][] = "updated_at";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "\"public\".trainers";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "public.trainers";
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
$proto0["m_srcTableName"]="public.trainers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trainers = createSqlQuery_trainers();


	
				;

									

$tdatatrainers[".sqlquery"] = $queryData_trainers;



$tdatatrainers[".hasEvents"] = false;

?>