<?php
$tdatatraining_courses = array();
$tdatatraining_courses[".searchableFields"] = array();
$tdatatraining_courses[".ShortName"] = "training_courses";
$tdatatraining_courses[".OwnerID"] = "";
$tdatatraining_courses[".OriginalTable"] = "public.training_courses";


$tdatatraining_courses[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_courses[".originalPagesByType"] = $tdatatraining_courses[".pagesByType"];
$tdatatraining_courses[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_courses[".originalPages"] = $tdatatraining_courses[".pages"];
$tdatatraining_courses[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_courses[".originalDefaultPages"] = $tdatatraining_courses[".defaultPages"];

//	field labels
$fieldLabelstraining_courses = array();
$fieldToolTipstraining_courses = array();
$pageTitlestraining_courses = array();
$placeHolderstraining_courses = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_courses["English"] = array();
	$fieldToolTipstraining_courses["English"] = array();
	$placeHolderstraining_courses["English"] = array();
	$pageTitlestraining_courses["English"] = array();
	$fieldLabelstraining_courses["English"]["course_id"] = "Course Id";
	$fieldToolTipstraining_courses["English"]["course_id"] = "";
	$placeHolderstraining_courses["English"]["course_id"] = "";
	$fieldLabelstraining_courses["English"]["course_name"] = "Course Name";
	$fieldToolTipstraining_courses["English"]["course_name"] = "";
	$placeHolderstraining_courses["English"]["course_name"] = "";
	$fieldLabelstraining_courses["English"]["description"] = "Description";
	$fieldToolTipstraining_courses["English"]["description"] = "";
	$placeHolderstraining_courses["English"]["description"] = "";
	$fieldLabelstraining_courses["English"]["duration_hours"] = "Duration Hours";
	$fieldToolTipstraining_courses["English"]["duration_hours"] = "";
	$placeHolderstraining_courses["English"]["duration_hours"] = "";
	$fieldLabelstraining_courses["English"]["is_active"] = "Is Active";
	$fieldToolTipstraining_courses["English"]["is_active"] = "";
	$placeHolderstraining_courses["English"]["is_active"] = "";
	$fieldLabelstraining_courses["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_courses["English"]["created_at"] = "";
	$placeHolderstraining_courses["English"]["created_at"] = "";
	$fieldLabelstraining_courses["English"]["updated_at"] = "Updated At";
	$fieldToolTipstraining_courses["English"]["updated_at"] = "";
	$placeHolderstraining_courses["English"]["updated_at"] = "";
	if (count($fieldToolTipstraining_courses["English"]))
		$tdatatraining_courses[".isUseToolTips"] = true;
}


	$tdatatraining_courses[".NCSearch"] = true;



$tdatatraining_courses[".shortTableName"] = "training_courses";
$tdatatraining_courses[".nSecOptions"] = 0;

$tdatatraining_courses[".mainTableOwnerID"] = "";
$tdatatraining_courses[".entityType"] = 0;
$tdatatraining_courses[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_courses[".strOriginalTableName"] = "public.training_courses";

	



$tdatatraining_courses[".showAddInPopup"] = false;

$tdatatraining_courses[".showEditInPopup"] = false;

$tdatatraining_courses[".showViewInPopup"] = false;

$tdatatraining_courses[".listAjax"] = false;
//	temporary
//$tdatatraining_courses[".listAjax"] = false;

	$tdatatraining_courses[".audit"] = true;

	$tdatatraining_courses[".locking"] = false;


$pages = $tdatatraining_courses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_courses[".edit"] = true;
	$tdatatraining_courses[".afterEditAction"] = 1;
	$tdatatraining_courses[".closePopupAfterEdit"] = 1;
	$tdatatraining_courses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_courses[".add"] = true;
$tdatatraining_courses[".afterAddAction"] = 1;
$tdatatraining_courses[".closePopupAfterAdd"] = 1;
$tdatatraining_courses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_courses[".list"] = true;
}



$tdatatraining_courses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_courses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_courses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_courses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_courses[".printFriendly"] = true;
}



$tdatatraining_courses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_courses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_courses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_courses[".isUseAjaxSuggest"] = true;



			

$tdatatraining_courses[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_courses[".buttonsAdded"] = false;

$tdatatraining_courses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_courses[".isUseTimeForSearch"] = false;


$tdatatraining_courses[".badgeColor"] = "3cb371";


$tdatatraining_courses[".allSearchFields"] = array();
$tdatatraining_courses[".filterFields"] = array();
$tdatatraining_courses[".requiredSearchFields"] = array();

$tdatatraining_courses[".googleLikeFields"] = array();
$tdatatraining_courses[".googleLikeFields"][] = "course_id";
$tdatatraining_courses[".googleLikeFields"][] = "course_name";
$tdatatraining_courses[".googleLikeFields"][] = "description";
$tdatatraining_courses[".googleLikeFields"][] = "duration_hours";
$tdatatraining_courses[".googleLikeFields"][] = "is_active";
$tdatatraining_courses[".googleLikeFields"][] = "created_at";
$tdatatraining_courses[".googleLikeFields"][] = "updated_at";



$tdatatraining_courses[".tableType"] = "list";

$tdatatraining_courses[".printerPageOrientation"] = 0;
$tdatatraining_courses[".nPrinterPageScale"] = 100;

$tdatatraining_courses[".nPrinterSplitRecords"] = 40;

$tdatatraining_courses[".geocodingEnabled"] = false;










$tdatatraining_courses[".pageSize"] = 20;

$tdatatraining_courses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_courses[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_courses[".orderindexes"] = array();


$tdatatraining_courses[".sqlHead"] = "SELECT course_id,  	course_name,  	description,  	duration_hours,  	is_active,  	created_at,  	updated_at";
$tdatatraining_courses[".sqlFrom"] = "FROM \"public\".training_courses";
$tdatatraining_courses[".sqlWhereExpr"] = "";
$tdatatraining_courses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_courses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_courses[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_courses[".highlightSearchResults"] = true;

$tableKeystraining_courses = array();
$tableKeystraining_courses[] = "course_id";
$tdatatraining_courses[".Keys"] = $tableKeystraining_courses;


$tdatatraining_courses[".hideMobileList"] = array();




//	course_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "course_id";
	$fdata["GoodName"] = "course_id";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_courses","course_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "course_id";

		$fdata["sourceSingle"] = "course_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course_id";

	
	
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


	$tdatatraining_courses["course_id"] = $fdata;
		$tdatatraining_courses[".searchableFields"][] = "course_id";
//	course_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "course_name";
	$fdata["GoodName"] = "course_name";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_courses","course_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "course_name";

		$fdata["sourceSingle"] = "course_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course_name";

	
	
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


	$tdatatraining_courses["course_name"] = $fdata;
		$tdatatraining_courses[".searchableFields"][] = "course_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_courses","description");
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


	$tdatatraining_courses["description"] = $fdata;
		$tdatatraining_courses[".searchableFields"][] = "description";
//	duration_hours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "duration_hours";
	$fdata["GoodName"] = "duration_hours";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_courses","duration_hours");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "duration_hours";

		$fdata["sourceSingle"] = "duration_hours";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "duration_hours";

	
	
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


	$tdatatraining_courses["duration_hours"] = $fdata;
		$tdatatraining_courses[".searchableFields"][] = "duration_hours";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_courses","is_active");
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


	$tdatatraining_courses["is_active"] = $fdata;
		$tdatatraining_courses[".searchableFields"][] = "is_active";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_courses","created_at");
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


	$tdatatraining_courses["created_at"] = $fdata;
		$tdatatraining_courses[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_courses","updated_at");
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


	$tdatatraining_courses["updated_at"] = $fdata;
		$tdatatraining_courses[".searchableFields"][] = "updated_at";


$tables_data["public.training_courses"]=&$tdatatraining_courses;
$field_labels["public_training_courses"] = &$fieldLabelstraining_courses;
$fieldToolTips["public_training_courses"] = &$fieldToolTipstraining_courses;
$placeHolders["public_training_courses"] = &$placeHolderstraining_courses;
$page_titles["public_training_courses"] = &$pageTitlestraining_courses;


changeTextControlsToDate( "public.training_courses" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_courses"] = array();
//	public.training_sessions
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_sessions";
		$detailsParam["dOriginalTable"] = "public.training_sessions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_sessions";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_sessions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.training_courses"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_courses"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_courses"][$dIndex]["masterKeys"][]="course_id";

				$detailsTablesData["public.training_courses"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_courses"][$dIndex]["detailKeys"][]="course_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_courses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_courses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "course_id,  	course_name,  	description,  	duration_hours,  	is_active,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".training_courses";
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
	"m_strName" => "course_id",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_courses"
));

$proto6["m_sql"] = "course_id";
$proto6["m_srcTableName"] = "public.training_courses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "course_name",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_courses"
));

$proto8["m_sql"] = "course_name";
$proto8["m_srcTableName"] = "public.training_courses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_courses"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "public.training_courses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "duration_hours",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_courses"
));

$proto12["m_sql"] = "duration_hours";
$proto12["m_srcTableName"] = "public.training_courses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_courses"
));

$proto14["m_sql"] = "is_active";
$proto14["m_srcTableName"] = "public.training_courses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_courses"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "public.training_courses";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_courses"
));

$proto18["m_sql"] = "updated_at";
$proto18["m_srcTableName"] = "public.training_courses";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.training_courses";
$proto21["m_srcTableName"] = "public.training_courses";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "course_id";
$proto21["m_columns"][] = "course_name";
$proto21["m_columns"][] = "description";
$proto21["m_columns"][] = "duration_hours";
$proto21["m_columns"][] = "is_active";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "updated_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".training_courses";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.training_courses";
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
$proto0["m_srcTableName"]="public.training_courses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_courses = createSqlQuery_training_courses();


	
				;

							

$tdatatraining_courses[".sqlquery"] = $queryData_training_courses;



$tdatatraining_courses[".hasEvents"] = false;

?>