<?php
$tdatatraining_participation = array();
$tdatatraining_participation[".searchableFields"] = array();
$tdatatraining_participation[".ShortName"] = "training_participation";
$tdatatraining_participation[".OwnerID"] = "";
$tdatatraining_participation[".OriginalTable"] = "public.training_participation";


$tdatatraining_participation[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_participation[".originalPagesByType"] = $tdatatraining_participation[".pagesByType"];
$tdatatraining_participation[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_participation[".originalPages"] = $tdatatraining_participation[".pages"];
$tdatatraining_participation[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_participation[".originalDefaultPages"] = $tdatatraining_participation[".defaultPages"];

//	field labels
$fieldLabelstraining_participation = array();
$fieldToolTipstraining_participation = array();
$pageTitlestraining_participation = array();
$placeHolderstraining_participation = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_participation["English"] = array();
	$fieldToolTipstraining_participation["English"] = array();
	$placeHolderstraining_participation["English"] = array();
	$pageTitlestraining_participation["English"] = array();
	$fieldLabelstraining_participation["English"]["participation_id"] = "Participation Id";
	$fieldToolTipstraining_participation["English"]["participation_id"] = "";
	$placeHolderstraining_participation["English"]["participation_id"] = "";
	$fieldLabelstraining_participation["English"]["participant_id"] = "Participant";
	$fieldToolTipstraining_participation["English"]["participant_id"] = "";
	$placeHolderstraining_participation["English"]["participant_id"] = "";
	$fieldLabelstraining_participation["English"]["training_id"] = "Training Session";
	$fieldToolTipstraining_participation["English"]["training_id"] = "";
	$placeHolderstraining_participation["English"]["training_id"] = "";
	$fieldLabelstraining_participation["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_participation["English"]["created_at"] = "";
	$placeHolderstraining_participation["English"]["created_at"] = "";
	$fieldLabelstraining_participation["English"]["pre_test_score"] = "Pre Test Score";
	$fieldToolTipstraining_participation["English"]["pre_test_score"] = "";
	$placeHolderstraining_participation["English"]["pre_test_score"] = "";
	$fieldLabelstraining_participation["English"]["post_test_score"] = "Post Test Score";
	$fieldToolTipstraining_participation["English"]["post_test_score"] = "";
	$placeHolderstraining_participation["English"]["post_test_score"] = "";
	$fieldLabelstraining_participation["English"]["ceu_points"] = "Ceu Points";
	$fieldToolTipstraining_participation["English"]["ceu_points"] = "";
	$placeHolderstraining_participation["English"]["ceu_points"] = "";
	if (count($fieldToolTipstraining_participation["English"]))
		$tdatatraining_participation[".isUseToolTips"] = true;
}


	$tdatatraining_participation[".NCSearch"] = true;



$tdatatraining_participation[".shortTableName"] = "training_participation";
$tdatatraining_participation[".nSecOptions"] = 0;

$tdatatraining_participation[".mainTableOwnerID"] = "";
$tdatatraining_participation[".entityType"] = 0;
$tdatatraining_participation[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_participation[".strOriginalTableName"] = "public.training_participation";

	



$tdatatraining_participation[".showAddInPopup"] = false;

$tdatatraining_participation[".showEditInPopup"] = false;

$tdatatraining_participation[".showViewInPopup"] = false;

$tdatatraining_participation[".listAjax"] = false;
//	temporary
//$tdatatraining_participation[".listAjax"] = false;

	$tdatatraining_participation[".audit"] = false;

	$tdatatraining_participation[".locking"] = false;


$pages = $tdatatraining_participation[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_participation[".edit"] = true;
	$tdatatraining_participation[".afterEditAction"] = 1;
	$tdatatraining_participation[".closePopupAfterEdit"] = 1;
	$tdatatraining_participation[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_participation[".add"] = true;
$tdatatraining_participation[".afterAddAction"] = 1;
$tdatatraining_participation[".closePopupAfterAdd"] = 1;
$tdatatraining_participation[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_participation[".list"] = true;
}



$tdatatraining_participation[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_participation[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_participation[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_participation[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_participation[".printFriendly"] = true;
}



$tdatatraining_participation[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_participation[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_participation[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_participation[".isUseAjaxSuggest"] = true;





$tdatatraining_participation[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participation[".buttonsAdded"] = false;

$tdatatraining_participation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participation[".isUseTimeForSearch"] = false;


$tdatatraining_participation[".badgeColor"] = "D2AF80";


$tdatatraining_participation[".allSearchFields"] = array();
$tdatatraining_participation[".filterFields"] = array();
$tdatatraining_participation[".requiredSearchFields"] = array();

$tdatatraining_participation[".googleLikeFields"] = array();
$tdatatraining_participation[".googleLikeFields"][] = "participation_id";
$tdatatraining_participation[".googleLikeFields"][] = "participant_id";
$tdatatraining_participation[".googleLikeFields"][] = "training_id";
$tdatatraining_participation[".googleLikeFields"][] = "created_at";
$tdatatraining_participation[".googleLikeFields"][] = "pre_test_score";
$tdatatraining_participation[".googleLikeFields"][] = "post_test_score";
$tdatatraining_participation[".googleLikeFields"][] = "ceu_points";



$tdatatraining_participation[".tableType"] = "list";

$tdatatraining_participation[".printerPageOrientation"] = 0;
$tdatatraining_participation[".nPrinterPageScale"] = 100;

$tdatatraining_participation[".nPrinterSplitRecords"] = 40;

$tdatatraining_participation[".geocodingEnabled"] = false;




$tdatatraining_participation[".isDisplayLoading"] = true;






$tdatatraining_participation[".pageSize"] = 20;

$tdatatraining_participation[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_participation[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participation[".orderindexes"] = array();


$tdatatraining_participation[".sqlHead"] = "SELECT participation_id,  	participant_id,  	training_id,  	created_at,  	pre_test_score,  	post_test_score,  	ceu_points";
$tdatatraining_participation[".sqlFrom"] = "FROM \"public\".training_participation";
$tdatatraining_participation[".sqlWhereExpr"] = "";
$tdatatraining_participation[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_participation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_participation[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_participation[".highlightSearchResults"] = true;

$tableKeystraining_participation = array();
$tableKeystraining_participation[] = "participation_id";
$tdatatraining_participation[".Keys"] = $tableKeystraining_participation;


$tdatatraining_participation[".hideMobileList"] = array();




//	participation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "participation_id";
	$fdata["GoodName"] = "participation_id";
	$fdata["ownerTable"] = "public.training_participation";
	$fdata["Label"] = GetFieldLabel("public_training_participation","participation_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "participation_id";

		$fdata["sourceSingle"] = "participation_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participation_id";

	
	
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


	$tdatatraining_participation["participation_id"] = $fdata;
		$tdatatraining_participation[".searchableFields"][] = "participation_id";
//	participant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "participant_id";
	$fdata["GoodName"] = "participant_id";
	$fdata["ownerTable"] = "public.training_participation";
	$fdata["Label"] = GetFieldLabel("public_training_participation","participant_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.training_participants";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "participant_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
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


	$tdatatraining_participation["participant_id"] = $fdata;
		$tdatatraining_participation[".searchableFields"][] = "participant_id";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_participation";
	$fdata["Label"] = GetFieldLabel("public_training_participation","training_id");
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
	$vdata["NumberOfChars"] = 170;

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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "training_details";

	

	
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


	$tdatatraining_participation["training_id"] = $fdata;
		$tdatatraining_participation[".searchableFields"][] = "training_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_participation";
	$fdata["Label"] = GetFieldLabel("public_training_participation","created_at");
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


	$tdatatraining_participation["created_at"] = $fdata;
		$tdatatraining_participation[".searchableFields"][] = "created_at";
//	pre_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pre_test_score";
	$fdata["GoodName"] = "pre_test_score";
	$fdata["ownerTable"] = "public.training_participation";
	$fdata["Label"] = GetFieldLabel("public_training_participation","pre_test_score");
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


	$tdatatraining_participation["pre_test_score"] = $fdata;
		$tdatatraining_participation[".searchableFields"][] = "pre_test_score";
//	post_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "post_test_score";
	$fdata["GoodName"] = "post_test_score";
	$fdata["ownerTable"] = "public.training_participation";
	$fdata["Label"] = GetFieldLabel("public_training_participation","post_test_score");
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


	$tdatatraining_participation["post_test_score"] = $fdata;
		$tdatatraining_participation[".searchableFields"][] = "post_test_score";
//	ceu_points
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ceu_points";
	$fdata["GoodName"] = "ceu_points";
	$fdata["ownerTable"] = "public.training_participation";
	$fdata["Label"] = GetFieldLabel("public_training_participation","ceu_points");
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


	$tdatatraining_participation["ceu_points"] = $fdata;
		$tdatatraining_participation[".searchableFields"][] = "ceu_points";


$tables_data["public.training_participation"]=&$tdatatraining_participation;
$field_labels["public_training_participation"] = &$fieldLabelstraining_participation;
$fieldToolTips["public_training_participation"] = &$fieldToolTipstraining_participation;
$placeHolders["public_training_participation"] = &$placeHolderstraining_participation;
$page_titles["public_training_participation"] = &$pageTitlestraining_participation;


changeTextControlsToDate( "public.training_participation" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_participation"] = array();
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


		
	$detailsTablesData["public.training_participation"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_participation"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_participation"][$dIndex]["masterKeys"][]="participation_id";

				$detailsTablesData["public.training_participation"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_participation"][$dIndex]["detailKeys"][]="participation_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_participation"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_participants";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_participants";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_participants";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_participation"][0] = $masterParams;
				$masterTablesData["public.training_participation"][0]["masterKeys"] = array();
	$masterTablesData["public.training_participation"][0]["masterKeys"][]="participant_id";
				$masterTablesData["public.training_participation"][0]["detailKeys"] = array();
	$masterTablesData["public.training_participation"][0]["detailKeys"][]="participant_id";
		
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
					$masterTablesData["public.training_participation"][1] = $masterParams;
				$masterTablesData["public.training_participation"][1]["masterKeys"] = array();
	$masterTablesData["public.training_participation"][1]["masterKeys"][]="training_id";
				$masterTablesData["public.training_participation"][1]["detailKeys"] = array();
	$masterTablesData["public.training_participation"][1]["detailKeys"][]="training_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participation_id,  	participant_id,  	training_id,  	created_at,  	pre_test_score,  	post_test_score,  	ceu_points";
$proto0["m_strFrom"] = "FROM \"public\".training_participation";
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
	"m_strName" => "participation_id",
	"m_strTable" => "public.training_participation",
	"m_srcTableName" => "public.training_participation"
));

$proto6["m_sql"] = "participation_id";
$proto6["m_srcTableName"] = "public.training_participation";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "participant_id",
	"m_strTable" => "public.training_participation",
	"m_srcTableName" => "public.training_participation"
));

$proto8["m_sql"] = "participant_id";
$proto8["m_srcTableName"] = "public.training_participation";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.training_participation",
	"m_srcTableName" => "public.training_participation"
));

$proto10["m_sql"] = "training_id";
$proto10["m_srcTableName"] = "public.training_participation";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_participation",
	"m_srcTableName" => "public.training_participation"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.training_participation";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_test_score",
	"m_strTable" => "public.training_participation",
	"m_srcTableName" => "public.training_participation"
));

$proto14["m_sql"] = "pre_test_score";
$proto14["m_srcTableName"] = "public.training_participation";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "post_test_score",
	"m_strTable" => "public.training_participation",
	"m_srcTableName" => "public.training_participation"
));

$proto16["m_sql"] = "post_test_score";
$proto16["m_srcTableName"] = "public.training_participation";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ceu_points",
	"m_strTable" => "public.training_participation",
	"m_srcTableName" => "public.training_participation"
));

$proto18["m_sql"] = "ceu_points";
$proto18["m_srcTableName"] = "public.training_participation";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.training_participation";
$proto21["m_srcTableName"] = "public.training_participation";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "participation_id";
$proto21["m_columns"][] = "participant_id";
$proto21["m_columns"][] = "training_id";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "pre_test_score";
$proto21["m_columns"][] = "post_test_score";
$proto21["m_columns"][] = "ceu_points";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".training_participation";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.training_participation";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.training_participation";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participation = createSqlQuery_training_participation();


	
		;

							

$tdatatraining_participation[".sqlquery"] = $queryData_training_participation;



$tdatatraining_participation[".hasEvents"] = false;

?>