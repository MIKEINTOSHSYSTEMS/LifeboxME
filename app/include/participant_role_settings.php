<?php
$tdataparticipant_role = array();
$tdataparticipant_role[".searchableFields"] = array();
$tdataparticipant_role[".ShortName"] = "participant_role";
$tdataparticipant_role[".OwnerID"] = "";
$tdataparticipant_role[".OriginalTable"] = "public.participant_role";


$tdataparticipant_role[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataparticipant_role[".originalPagesByType"] = $tdataparticipant_role[".pagesByType"];
$tdataparticipant_role[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataparticipant_role[".originalPages"] = $tdataparticipant_role[".pages"];
$tdataparticipant_role[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataparticipant_role[".originalDefaultPages"] = $tdataparticipant_role[".defaultPages"];

//	field labels
$fieldLabelsparticipant_role = array();
$fieldToolTipsparticipant_role = array();
$pageTitlesparticipant_role = array();
$placeHoldersparticipant_role = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparticipant_role["English"] = array();
	$fieldToolTipsparticipant_role["English"] = array();
	$placeHoldersparticipant_role["English"] = array();
	$pageTitlesparticipant_role["English"] = array();
	$fieldLabelsparticipant_role["English"]["role_id"] = "Role Id";
	$fieldToolTipsparticipant_role["English"]["role_id"] = "";
	$placeHoldersparticipant_role["English"]["role_id"] = "";
	$fieldLabelsparticipant_role["English"]["role_name"] = "Role Name";
	$fieldToolTipsparticipant_role["English"]["role_name"] = "";
	$placeHoldersparticipant_role["English"]["role_name"] = "";
	$fieldLabelsparticipant_role["English"]["description"] = "Description";
	$fieldToolTipsparticipant_role["English"]["description"] = "";
	$placeHoldersparticipant_role["English"]["description"] = "";
	$fieldLabelsparticipant_role["English"]["is_active"] = "Is Active";
	$fieldToolTipsparticipant_role["English"]["is_active"] = "";
	$placeHoldersparticipant_role["English"]["is_active"] = "";
	$fieldLabelsparticipant_role["English"]["created_at"] = "Created At";
	$fieldToolTipsparticipant_role["English"]["created_at"] = "";
	$placeHoldersparticipant_role["English"]["created_at"] = "";
	$fieldLabelsparticipant_role["English"]["updated_at"] = "Updated At";
	$fieldToolTipsparticipant_role["English"]["updated_at"] = "";
	$placeHoldersparticipant_role["English"]["updated_at"] = "";
	if (count($fieldToolTipsparticipant_role["English"]))
		$tdataparticipant_role[".isUseToolTips"] = true;
}


	$tdataparticipant_role[".NCSearch"] = true;



$tdataparticipant_role[".shortTableName"] = "participant_role";
$tdataparticipant_role[".nSecOptions"] = 0;

$tdataparticipant_role[".mainTableOwnerID"] = "";
$tdataparticipant_role[".entityType"] = 0;
$tdataparticipant_role[".connId"] = "lifebox_mesystem_at_localhost";


$tdataparticipant_role[".strOriginalTableName"] = "public.participant_role";

	



$tdataparticipant_role[".showAddInPopup"] = false;

$tdataparticipant_role[".showEditInPopup"] = false;

$tdataparticipant_role[".showViewInPopup"] = false;

$tdataparticipant_role[".listAjax"] = false;
//	temporary
//$tdataparticipant_role[".listAjax"] = false;

	$tdataparticipant_role[".audit"] = true;

	$tdataparticipant_role[".locking"] = false;


$pages = $tdataparticipant_role[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataparticipant_role[".edit"] = true;
	$tdataparticipant_role[".afterEditAction"] = 1;
	$tdataparticipant_role[".closePopupAfterEdit"] = 1;
	$tdataparticipant_role[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataparticipant_role[".add"] = true;
$tdataparticipant_role[".afterAddAction"] = 1;
$tdataparticipant_role[".closePopupAfterAdd"] = 1;
$tdataparticipant_role[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataparticipant_role[".list"] = true;
}



$tdataparticipant_role[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataparticipant_role[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataparticipant_role[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataparticipant_role[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataparticipant_role[".printFriendly"] = true;
}



$tdataparticipant_role[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataparticipant_role[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataparticipant_role[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataparticipant_role[".isUseAjaxSuggest"] = true;





$tdataparticipant_role[".ajaxCodeSnippetAdded"] = false;

$tdataparticipant_role[".buttonsAdded"] = false;

$tdataparticipant_role[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparticipant_role[".isUseTimeForSearch"] = false;


$tdataparticipant_role[".badgeColor"] = "B22222";


$tdataparticipant_role[".allSearchFields"] = array();
$tdataparticipant_role[".filterFields"] = array();
$tdataparticipant_role[".requiredSearchFields"] = array();

$tdataparticipant_role[".googleLikeFields"] = array();
$tdataparticipant_role[".googleLikeFields"][] = "role_id";
$tdataparticipant_role[".googleLikeFields"][] = "role_name";
$tdataparticipant_role[".googleLikeFields"][] = "description";
$tdataparticipant_role[".googleLikeFields"][] = "is_active";
$tdataparticipant_role[".googleLikeFields"][] = "created_at";
$tdataparticipant_role[".googleLikeFields"][] = "updated_at";



$tdataparticipant_role[".tableType"] = "list";

$tdataparticipant_role[".printerPageOrientation"] = 0;
$tdataparticipant_role[".nPrinterPageScale"] = 100;

$tdataparticipant_role[".nPrinterSplitRecords"] = 40;

$tdataparticipant_role[".geocodingEnabled"] = false;










$tdataparticipant_role[".pageSize"] = 20;

$tdataparticipant_role[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataparticipant_role[".strOrderBy"] = $tstrOrderBy;

$tdataparticipant_role[".orderindexes"] = array();


$tdataparticipant_role[".sqlHead"] = "SELECT role_id,  	role_name,  	description,  	is_active,  	created_at,  	updated_at";
$tdataparticipant_role[".sqlFrom"] = "FROM \"public\".participant_role";
$tdataparticipant_role[".sqlWhereExpr"] = "";
$tdataparticipant_role[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparticipant_role[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparticipant_role[".arrGroupsPerPage"] = $arrGPP;

$tdataparticipant_role[".highlightSearchResults"] = true;

$tableKeysparticipant_role = array();
$tableKeysparticipant_role[] = "role_id";
$tdataparticipant_role[".Keys"] = $tableKeysparticipant_role;


$tdataparticipant_role[".hideMobileList"] = array();




//	role_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "role_id";
	$fdata["GoodName"] = "role_id";
	$fdata["ownerTable"] = "public.participant_role";
	$fdata["Label"] = GetFieldLabel("public_participant_role","role_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataparticipant_role["role_id"] = $fdata;
		$tdataparticipant_role[".searchableFields"][] = "role_id";
//	role_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "role_name";
	$fdata["GoodName"] = "role_name";
	$fdata["ownerTable"] = "public.participant_role";
	$fdata["Label"] = GetFieldLabel("public_participant_role","role_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "role_name";

		$fdata["sourceSingle"] = "role_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "role_name";

	
	
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


	$tdataparticipant_role["role_name"] = $fdata;
		$tdataparticipant_role[".searchableFields"][] = "role_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.participant_role";
	$fdata["Label"] = GetFieldLabel("public_participant_role","description");
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


	$tdataparticipant_role["description"] = $fdata;
		$tdataparticipant_role[".searchableFields"][] = "description";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.participant_role";
	$fdata["Label"] = GetFieldLabel("public_participant_role","is_active");
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


	$tdataparticipant_role["is_active"] = $fdata;
		$tdataparticipant_role[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.participant_role";
	$fdata["Label"] = GetFieldLabel("public_participant_role","created_at");
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


	$tdataparticipant_role["created_at"] = $fdata;
		$tdataparticipant_role[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.participant_role";
	$fdata["Label"] = GetFieldLabel("public_participant_role","updated_at");
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


	$tdataparticipant_role["updated_at"] = $fdata;
		$tdataparticipant_role[".searchableFields"][] = "updated_at";


$tables_data["public.participant_role"]=&$tdataparticipant_role;
$field_labels["public_participant_role"] = &$fieldLabelsparticipant_role;
$fieldToolTips["public_participant_role"] = &$fieldToolTipsparticipant_role;
$placeHolders["public_participant_role"] = &$placeHoldersparticipant_role;
$page_titles["public_participant_role"] = &$pageTitlesparticipant_role;


changeTextControlsToDate( "public.participant_role" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.participant_role"] = array();
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


		
	$detailsTablesData["public.participant_role"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.participant_role"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.participant_role"][$dIndex]["masterKeys"][]="role_id";

				$detailsTablesData["public.participant_role"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.participant_role"][$dIndex]["detailKeys"][]="role_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.participant_role"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_participant_role()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "role_id,  	role_name,  	description,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".participant_role";
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
	"m_strName" => "role_id",
	"m_strTable" => "public.participant_role",
	"m_srcTableName" => "public.participant_role"
));

$proto6["m_sql"] = "role_id";
$proto6["m_srcTableName"] = "public.participant_role";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "role_name",
	"m_strTable" => "public.participant_role",
	"m_srcTableName" => "public.participant_role"
));

$proto8["m_sql"] = "role_name";
$proto8["m_srcTableName"] = "public.participant_role";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.participant_role",
	"m_srcTableName" => "public.participant_role"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.participant_role";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.participant_role",
	"m_srcTableName" => "public.participant_role"
));

$proto12["m_sql"] = "is_active";
$proto12["m_srcTableName"] = "public.participant_role";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.participant_role",
	"m_srcTableName" => "public.participant_role"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.participant_role";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.participant_role",
	"m_srcTableName" => "public.participant_role"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.participant_role";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.participant_role";
$proto19["m_srcTableName"] = "public.participant_role";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "role_id";
$proto19["m_columns"][] = "role_name";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "is_active";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "updated_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".participant_role";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.participant_role";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.participant_role";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_participant_role = createSqlQuery_participant_role();


	
				;

						

$tdataparticipant_role[".sqlquery"] = $queryData_participant_role;



$tdataparticipant_role[".hasEvents"] = false;

?>