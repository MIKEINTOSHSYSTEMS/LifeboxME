<?php
$tdatatraining_participants = array();
$tdatatraining_participants[".searchableFields"] = array();
$tdatatraining_participants[".ShortName"] = "training_participants";
$tdatatraining_participants[".OwnerID"] = "";
$tdatatraining_participants[".OriginalTable"] = "public.training_participants";


$tdatatraining_participants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_participants[".originalPagesByType"] = $tdatatraining_participants[".pagesByType"];
$tdatatraining_participants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_participants[".originalPages"] = $tdatatraining_participants[".pages"];
$tdatatraining_participants[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_participants[".originalDefaultPages"] = $tdatatraining_participants[".defaultPages"];

//	field labels
$fieldLabelstraining_participants = array();
$fieldToolTipstraining_participants = array();
$pageTitlestraining_participants = array();
$placeHolderstraining_participants = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_participants["English"] = array();
	$fieldToolTipstraining_participants["English"] = array();
	$placeHolderstraining_participants["English"] = array();
	$pageTitlestraining_participants["English"] = array();
	$fieldLabelstraining_participants["English"]["participant_id"] = "Participant Id";
	$fieldToolTipstraining_participants["English"]["participant_id"] = "";
	$placeHolderstraining_participants["English"]["participant_id"] = "";
	$fieldLabelstraining_participants["English"]["training_id"] = "Training Session";
	$fieldToolTipstraining_participants["English"]["training_id"] = "";
	$placeHolderstraining_participants["English"]["training_id"] = "";
	$fieldLabelstraining_participants["English"]["first_name"] = "First Name";
	$fieldToolTipstraining_participants["English"]["first_name"] = "";
	$placeHolderstraining_participants["English"]["first_name"] = "";
	$fieldLabelstraining_participants["English"]["last_name"] = "Last Name";
	$fieldToolTipstraining_participants["English"]["last_name"] = "";
	$placeHolderstraining_participants["English"]["last_name"] = "";
	$fieldLabelstraining_participants["English"]["sex_id"] = "Sex";
	$fieldToolTipstraining_participants["English"]["sex_id"] = "";
	$placeHolderstraining_participants["English"]["sex_id"] = "";
	$fieldLabelstraining_participants["English"]["role_id"] = "Role";
	$fieldToolTipstraining_participants["English"]["role_id"] = "";
	$placeHolderstraining_participants["English"]["role_id"] = "";
	$fieldLabelstraining_participants["English"]["facility_id"] = "Facility";
	$fieldToolTipstraining_participants["English"]["facility_id"] = "";
	$placeHolderstraining_participants["English"]["facility_id"] = "";
	$fieldLabelstraining_participants["English"]["phone"] = "Phone";
	$fieldToolTipstraining_participants["English"]["phone"] = "";
	$placeHolderstraining_participants["English"]["phone"] = "";
	$fieldLabelstraining_participants["English"]["email"] = "Email";
	$fieldToolTipstraining_participants["English"]["email"] = "";
	$placeHolderstraining_participants["English"]["email"] = "";
	$fieldLabelstraining_participants["English"]["country_id"] = "Country";
	$fieldToolTipstraining_participants["English"]["country_id"] = "";
	$placeHolderstraining_participants["English"]["country_id"] = "";
	$fieldLabelstraining_participants["English"]["training_date"] = "Training Date";
	$fieldToolTipstraining_participants["English"]["training_date"] = "";
	$placeHolderstraining_participants["English"]["training_date"] = "";
	$fieldLabelstraining_participants["English"]["day_number"] = "Day Number";
	$fieldToolTipstraining_participants["English"]["day_number"] = "";
	$placeHolderstraining_participants["English"]["day_number"] = "";
	$fieldLabelstraining_participants["English"]["ceu_points"] = "Ceu Points";
	$fieldToolTipstraining_participants["English"]["ceu_points"] = "";
	$placeHolderstraining_participants["English"]["ceu_points"] = "";
	$fieldLabelstraining_participants["English"]["pre_test_score"] = "Pre Test Score";
	$fieldToolTipstraining_participants["English"]["pre_test_score"] = "";
	$placeHolderstraining_participants["English"]["pre_test_score"] = "";
	$fieldLabelstraining_participants["English"]["post_test_score"] = "Post Test Score";
	$fieldToolTipstraining_participants["English"]["post_test_score"] = "";
	$placeHolderstraining_participants["English"]["post_test_score"] = "";
	$fieldLabelstraining_participants["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_participants["English"]["created_at"] = "";
	$placeHolderstraining_participants["English"]["created_at"] = "";
	$fieldLabelstraining_participants["English"]["updated_at"] = "Updated At";
	$fieldToolTipstraining_participants["English"]["updated_at"] = "";
	$placeHolderstraining_participants["English"]["updated_at"] = "";
	$fieldLabelstraining_participants["English"]["venue_id"] = "Venue";
	$fieldToolTipstraining_participants["English"]["venue_id"] = "";
	$placeHolderstraining_participants["English"]["venue_id"] = "";
	if (count($fieldToolTipstraining_participants["English"]))
		$tdatatraining_participants[".isUseToolTips"] = true;
}


	$tdatatraining_participants[".NCSearch"] = true;



$tdatatraining_participants[".shortTableName"] = "training_participants";
$tdatatraining_participants[".nSecOptions"] = 0;

$tdatatraining_participants[".mainTableOwnerID"] = "";
$tdatatraining_participants[".entityType"] = 0;
$tdatatraining_participants[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_participants[".strOriginalTableName"] = "public.training_participants";

	



$tdatatraining_participants[".showAddInPopup"] = false;

$tdatatraining_participants[".showEditInPopup"] = false;

$tdatatraining_participants[".showViewInPopup"] = false;

$tdatatraining_participants[".listAjax"] = false;
//	temporary
//$tdatatraining_participants[".listAjax"] = false;

	$tdatatraining_participants[".audit"] = false;

	$tdatatraining_participants[".locking"] = false;


$pages = $tdatatraining_participants[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_participants[".edit"] = true;
	$tdatatraining_participants[".afterEditAction"] = 1;
	$tdatatraining_participants[".closePopupAfterEdit"] = 1;
	$tdatatraining_participants[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_participants[".add"] = true;
$tdatatraining_participants[".afterAddAction"] = 1;
$tdatatraining_participants[".closePopupAfterAdd"] = 1;
$tdatatraining_participants[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_participants[".list"] = true;
}



$tdatatraining_participants[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_participants[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_participants[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_participants[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_participants[".printFriendly"] = true;
}



$tdatatraining_participants[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_participants[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_participants[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_participants[".isUseAjaxSuggest"] = true;





$tdatatraining_participants[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participants[".buttonsAdded"] = false;

$tdatatraining_participants[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participants[".isUseTimeForSearch"] = false;


$tdatatraining_participants[".badgeColor"] = "DB7093";


$tdatatraining_participants[".allSearchFields"] = array();
$tdatatraining_participants[".filterFields"] = array();
$tdatatraining_participants[".requiredSearchFields"] = array();

$tdatatraining_participants[".googleLikeFields"] = array();
$tdatatraining_participants[".googleLikeFields"][] = "participant_id";
$tdatatraining_participants[".googleLikeFields"][] = "training_id";
$tdatatraining_participants[".googleLikeFields"][] = "first_name";
$tdatatraining_participants[".googleLikeFields"][] = "last_name";
$tdatatraining_participants[".googleLikeFields"][] = "sex_id";
$tdatatraining_participants[".googleLikeFields"][] = "role_id";
$tdatatraining_participants[".googleLikeFields"][] = "facility_id";
$tdatatraining_participants[".googleLikeFields"][] = "phone";
$tdatatraining_participants[".googleLikeFields"][] = "email";
$tdatatraining_participants[".googleLikeFields"][] = "country_id";
$tdatatraining_participants[".googleLikeFields"][] = "training_date";
$tdatatraining_participants[".googleLikeFields"][] = "day_number";
$tdatatraining_participants[".googleLikeFields"][] = "ceu_points";
$tdatatraining_participants[".googleLikeFields"][] = "pre_test_score";
$tdatatraining_participants[".googleLikeFields"][] = "post_test_score";
$tdatatraining_participants[".googleLikeFields"][] = "created_at";
$tdatatraining_participants[".googleLikeFields"][] = "updated_at";
$tdatatraining_participants[".googleLikeFields"][] = "venue_id";



$tdatatraining_participants[".tableType"] = "list";

$tdatatraining_participants[".printerPageOrientation"] = 0;
$tdatatraining_participants[".nPrinterPageScale"] = 100;

$tdatatraining_participants[".nPrinterSplitRecords"] = 40;

$tdatatraining_participants[".geocodingEnabled"] = false;










$tdatatraining_participants[".pageSize"] = 20;

$tdatatraining_participants[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_participants[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participants[".orderindexes"] = array();


$tdatatraining_participants[".sqlHead"] = "SELECT participant_id,  	training_id,  	first_name,  	last_name,  	sex_id,  	role_id,  	facility_id,  	phone,  	email,  	country_id,  	training_date,  	day_number,  	ceu_points,  	pre_test_score,  	post_test_score,  	created_at,  	updated_at,  	venue_id";
$tdatatraining_participants[".sqlFrom"] = "FROM \"public\".training_participants";
$tdatatraining_participants[".sqlWhereExpr"] = "";
$tdatatraining_participants[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_participants[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_participants[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_participants[".highlightSearchResults"] = true;

$tableKeystraining_participants = array();
$tableKeystraining_participants[] = "participant_id";
$tdatatraining_participants[".Keys"] = $tableKeystraining_participants;


$tdatatraining_participants[".hideMobileList"] = array();




//	participant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "participant_id";
	$fdata["GoodName"] = "participant_id";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","participant_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "participant_id";

		$fdata["sourceSingle"] = "participant_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participant_id";

	
	
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


	$tdatatraining_participants["participant_id"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "participant_id";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","training_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training_id";

		$fdata["sourceSingle"] = "training_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_id";

	
	
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
	$edata["LookupTable"] = "public.training_sessions";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"training_date", 'lookupF'=>"start_date");
	$edata["autoCompleteFields"][] = array('masterF'=>"venue_id", 'lookupF'=>"venue_id");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "training_details";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "training_date";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "day_number";

	
	
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


	$tdatatraining_participants["training_id"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "training_id";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","first_name");
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


	$tdatatraining_participants["first_name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","last_name");
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


	$tdatatraining_participants["last_name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "last_name";
//	sex_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sex_id";
	$fdata["GoodName"] = "sex_id";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","sex_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sex_id";

		$fdata["sourceSingle"] = "sex_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_id";

	
	
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
	$edata["LookupTable"] = "public.sex";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sex_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sex_name";

	

	
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


	$tdatatraining_participants["sex_id"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "sex_id";
//	role_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "role_id";
	$fdata["GoodName"] = "role_id";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","role_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "role_id";

		$fdata["sourceSingle"] = "role_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "role_id";

	
	
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
	$edata["LookupTable"] = "public.participant_role";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "role_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "role_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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


	$tdatatraining_participants["role_id"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "role_id";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","facility_id");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "facility_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "facility_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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


	$tdatatraining_participants["facility_id"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "facility_id";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

		$fdata["sourceSingle"] = "phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Phone Number");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatraining_participants["phone"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "phone";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

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


	$tdatatraining_participants["email"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "email";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","country_id");
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


	$tdatatraining_participants["country_id"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "country_id";
//	training_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "training_date";
	$fdata["GoodName"] = "training_date";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","training_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "training_date";

		$fdata["sourceSingle"] = "training_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_date";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.training_sessions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "start_date";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "training_id", "lookup" => "training_id" );

	
	

	
	
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


	$tdatatraining_participants["training_date"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "training_date";
//	day_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "day_number";
	$fdata["GoodName"] = "day_number";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","day_number");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "day_number";

		$fdata["sourceSingle"] = "day_number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "day_number";

	
	
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
	$edata["LookupTable"] = "public.daily_attendance_view";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "total_days";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "training_id", "lookup" => "training_id" );

	
	

	
	
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


	$tdatatraining_participants["day_number"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "day_number";
//	ceu_points
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ceu_points";
	$fdata["GoodName"] = "ceu_points";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","ceu_points");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ceu_points";

		$fdata["sourceSingle"] = "ceu_points";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ceu_points";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatatraining_participants["ceu_points"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "ceu_points";
//	pre_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pre_test_score";
	$fdata["GoodName"] = "pre_test_score";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","pre_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "pre_test_score";

		$fdata["sourceSingle"] = "pre_test_score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pre_test_score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatatraining_participants["pre_test_score"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "pre_test_score";
//	post_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "post_test_score";
	$fdata["GoodName"] = "post_test_score";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","post_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "post_test_score";

		$fdata["sourceSingle"] = "post_test_score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_test_score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatatraining_participants["post_test_score"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "post_test_score";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","created_at");
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


	$tdatatraining_participants["created_at"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","updated_at");
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


	$tdatatraining_participants["updated_at"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "updated_at";
//	venue_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "venue_id";
	$fdata["GoodName"] = "venue_id";
	$fdata["ownerTable"] = "public.training_participants";
	$fdata["Label"] = GetFieldLabel("public_training_participants","venue_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.venues";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "venue_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "venue_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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


	$tdatatraining_participants["venue_id"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "venue_id";


$tables_data["public.training_participants"]=&$tdatatraining_participants;
$field_labels["public_training_participants"] = &$fieldLabelstraining_participants;
$fieldToolTips["public_training_participants"] = &$fieldToolTipstraining_participants;
$placeHolders["public_training_participants"] = &$placeHolderstraining_participants;
$page_titles["public_training_participants"] = &$pageTitlestraining_participants;


changeTextControlsToDate( "public.training_participants" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_participants"] = array();
//	public.training_attendance
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_attendance";
		$detailsParam["dOriginalTable"] = "public.training_attendance";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_attendance";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_attendance");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.training_participants"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_participants"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_participants"][$dIndex]["masterKeys"][]="participant_id";

				$detailsTablesData["public.training_participants"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_participants"][$dIndex]["detailKeys"][]="participant_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_participants"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.sex";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.sex";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sex";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_participants"][0] = $masterParams;
				$masterTablesData["public.training_participants"][0]["masterKeys"] = array();
	$masterTablesData["public.training_participants"][0]["masterKeys"][]="sex_id";
				$masterTablesData["public.training_participants"][0]["detailKeys"] = array();
	$masterTablesData["public.training_participants"][0]["detailKeys"][]="sex_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.participant_role";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.participant_role";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "participant_role";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_participants"][1] = $masterParams;
				$masterTablesData["public.training_participants"][1]["masterKeys"] = array();
	$masterTablesData["public.training_participants"][1]["masterKeys"][]="role_id";
				$masterTablesData["public.training_participants"][1]["detailKeys"] = array();
	$masterTablesData["public.training_participants"][1]["detailKeys"][]="role_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_sessions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_sessions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_sessions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_participants"][2] = $masterParams;
				$masterTablesData["public.training_participants"][2]["masterKeys"] = array();
	$masterTablesData["public.training_participants"][2]["masterKeys"][]="training_id";
				$masterTablesData["public.training_participants"][2]["detailKeys"] = array();
	$masterTablesData["public.training_participants"][2]["detailKeys"][]="training_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.facilities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.facilities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facilities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_participants"][3] = $masterParams;
				$masterTablesData["public.training_participants"][3]["masterKeys"] = array();
	$masterTablesData["public.training_participants"][3]["masterKeys"][]="facility_id";
				$masterTablesData["public.training_participants"][3]["detailKeys"] = array();
	$masterTablesData["public.training_participants"][3]["detailKeys"][]="facility_id";
		
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
					$masterTablesData["public.training_participants"][4] = $masterParams;
				$masterTablesData["public.training_participants"][4]["masterKeys"] = array();
	$masterTablesData["public.training_participants"][4]["masterKeys"][]="country_id";
				$masterTablesData["public.training_participants"][4]["detailKeys"] = array();
	$masterTablesData["public.training_participants"][4]["detailKeys"][]="country_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.venues";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.venues";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "venues";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_participants"][5] = $masterParams;
				$masterTablesData["public.training_participants"][5]["masterKeys"] = array();
	$masterTablesData["public.training_participants"][5]["masterKeys"][]="venue_id";
				$masterTablesData["public.training_participants"][5]["detailKeys"] = array();
	$masterTablesData["public.training_participants"][5]["detailKeys"][]="venue_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participant_id,  	training_id,  	first_name,  	last_name,  	sex_id,  	role_id,  	facility_id,  	phone,  	email,  	country_id,  	training_date,  	day_number,  	ceu_points,  	pre_test_score,  	post_test_score,  	created_at,  	updated_at,  	venue_id";
$proto0["m_strFrom"] = "FROM \"public\".training_participants";
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
	"m_strName" => "participant_id",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto6["m_sql"] = "participant_id";
$proto6["m_srcTableName"] = "public.training_participants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto8["m_sql"] = "training_id";
$proto8["m_srcTableName"] = "public.training_participants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto10["m_sql"] = "first_name";
$proto10["m_srcTableName"] = "public.training_participants";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto12["m_sql"] = "last_name";
$proto12["m_srcTableName"] = "public.training_participants";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sex_id",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto14["m_sql"] = "sex_id";
$proto14["m_srcTableName"] = "public.training_participants";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "role_id",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto16["m_sql"] = "role_id";
$proto16["m_srcTableName"] = "public.training_participants";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto18["m_sql"] = "facility_id";
$proto18["m_srcTableName"] = "public.training_participants";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto20["m_sql"] = "phone";
$proto20["m_srcTableName"] = "public.training_participants";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto22["m_sql"] = "email";
$proto22["m_srcTableName"] = "public.training_participants";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto24["m_sql"] = "country_id";
$proto24["m_srcTableName"] = "public.training_participants";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "training_date",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto26["m_sql"] = "training_date";
$proto26["m_srcTableName"] = "public.training_participants";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "day_number",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto28["m_sql"] = "day_number";
$proto28["m_srcTableName"] = "public.training_participants";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ceu_points",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto30["m_sql"] = "ceu_points";
$proto30["m_srcTableName"] = "public.training_participants";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_test_score",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto32["m_sql"] = "pre_test_score";
$proto32["m_srcTableName"] = "public.training_participants";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "post_test_score",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto34["m_sql"] = "post_test_score";
$proto34["m_srcTableName"] = "public.training_participants";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto36["m_sql"] = "created_at";
$proto36["m_srcTableName"] = "public.training_participants";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto38["m_sql"] = "updated_at";
$proto38["m_srcTableName"] = "public.training_participants";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "venue_id",
	"m_strTable" => "public.training_participants",
	"m_srcTableName" => "public.training_participants"
));

$proto40["m_sql"] = "venue_id";
$proto40["m_srcTableName"] = "public.training_participants";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "public.training_participants";
$proto43["m_srcTableName"] = "public.training_participants";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "participant_id";
$proto43["m_columns"][] = "training_id";
$proto43["m_columns"][] = "first_name";
$proto43["m_columns"][] = "last_name";
$proto43["m_columns"][] = "sex_id";
$proto43["m_columns"][] = "role_id";
$proto43["m_columns"][] = "facility_id";
$proto43["m_columns"][] = "phone";
$proto43["m_columns"][] = "email";
$proto43["m_columns"][] = "country_id";
$proto43["m_columns"][] = "training_date";
$proto43["m_columns"][] = "day_number";
$proto43["m_columns"][] = "ceu_points";
$proto43["m_columns"][] = "pre_test_score";
$proto43["m_columns"][] = "post_test_score";
$proto43["m_columns"][] = "created_at";
$proto43["m_columns"][] = "updated_at";
$proto43["m_columns"][] = "venue_id";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "\"public\".training_participants";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "public.training_participants";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.training_participants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participants = createSqlQuery_training_participants();


	
		;

																		

$tdatatraining_participants[".sqlquery"] = $queryData_training_participants;



$tdatatraining_participants[".hasEvents"] = false;

?>