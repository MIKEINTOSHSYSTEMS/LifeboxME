<?php
$tdatatraining_summary_view = array();
$tdatatraining_summary_view[".searchableFields"] = array();
$tdatatraining_summary_view[".ShortName"] = "training_summary_view";
$tdatatraining_summary_view[".OwnerID"] = "";
$tdatatraining_summary_view[".OriginalTable"] = "public.training_summary_view";


$tdatatraining_summary_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatraining_summary_view[".originalPagesByType"] = $tdatatraining_summary_view[".pagesByType"];
$tdatatraining_summary_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatraining_summary_view[".originalPages"] = $tdatatraining_summary_view[".pages"];
$tdatatraining_summary_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatraining_summary_view[".originalDefaultPages"] = $tdatatraining_summary_view[".defaultPages"];

//	field labels
$fieldLabelstraining_summary_view = array();
$fieldToolTipstraining_summary_view = array();
$pageTitlestraining_summary_view = array();
$placeHolderstraining_summary_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_summary_view["English"] = array();
	$fieldToolTipstraining_summary_view["English"] = array();
	$placeHolderstraining_summary_view["English"] = array();
	$pageTitlestraining_summary_view["English"] = array();
	$fieldLabelstraining_summary_view["English"]["training_id"] = "Training Id";
	$fieldToolTipstraining_summary_view["English"]["training_id"] = "";
	$placeHolderstraining_summary_view["English"]["training_id"] = "";
	$fieldLabelstraining_summary_view["English"]["course_name"] = "Course Name";
	$fieldToolTipstraining_summary_view["English"]["course_name"] = "";
	$placeHolderstraining_summary_view["English"]["course_name"] = "";
	$fieldLabelstraining_summary_view["English"]["training_type"] = "Training Type";
	$fieldToolTipstraining_summary_view["English"]["training_type"] = "";
	$placeHolderstraining_summary_view["English"]["training_type"] = "";
	$fieldLabelstraining_summary_view["English"]["training_approach"] = "Training Approach";
	$fieldToolTipstraining_summary_view["English"]["training_approach"] = "";
	$placeHolderstraining_summary_view["English"]["training_approach"] = "";
	$fieldLabelstraining_summary_view["English"]["program"] = "Program";
	$fieldToolTipstraining_summary_view["English"]["program"] = "";
	$placeHolderstraining_summary_view["English"]["program"] = "";
	$fieldLabelstraining_summary_view["English"]["quarter"] = "Quarter";
	$fieldToolTipstraining_summary_view["English"]["quarter"] = "";
	$placeHolderstraining_summary_view["English"]["quarter"] = "";
	$fieldLabelstraining_summary_view["English"]["start_date"] = "Start Date";
	$fieldToolTipstraining_summary_view["English"]["start_date"] = "";
	$placeHolderstraining_summary_view["English"]["start_date"] = "";
	$fieldLabelstraining_summary_view["English"]["end_date"] = "End Date";
	$fieldToolTipstraining_summary_view["English"]["end_date"] = "";
	$placeHolderstraining_summary_view["English"]["end_date"] = "";
	$fieldLabelstraining_summary_view["English"]["facility_name"] = "Facility Name";
	$fieldToolTipstraining_summary_view["English"]["facility_name"] = "";
	$placeHolderstraining_summary_view["English"]["facility_name"] = "";
	$fieldLabelstraining_summary_view["English"]["country_name"] = "Country Name";
	$fieldToolTipstraining_summary_view["English"]["country_name"] = "";
	$placeHolderstraining_summary_view["English"]["country_name"] = "";
	$fieldLabelstraining_summary_view["English"]["region_name"] = "Region Name";
	$fieldToolTipstraining_summary_view["English"]["region_name"] = "";
	$placeHolderstraining_summary_view["English"]["region_name"] = "";
	$fieldLabelstraining_summary_view["English"]["ceu_points"] = "Ceu Points";
	$fieldToolTipstraining_summary_view["English"]["ceu_points"] = "";
	$placeHolderstraining_summary_view["English"]["ceu_points"] = "";
	$fieldLabelstraining_summary_view["English"]["num_participants"] = "Num Participants";
	$fieldToolTipstraining_summary_view["English"]["num_participants"] = "";
	$placeHolderstraining_summary_view["English"]["num_participants"] = "";
	$fieldLabelstraining_summary_view["English"]["avg_pre_test_score"] = "Avg Pre Test Score";
	$fieldToolTipstraining_summary_view["English"]["avg_pre_test_score"] = "";
	$placeHolderstraining_summary_view["English"]["avg_pre_test_score"] = "";
	$fieldLabelstraining_summary_view["English"]["avg_post_test_score"] = "Avg Post Test Score";
	$fieldToolTipstraining_summary_view["English"]["avg_post_test_score"] = "";
	$placeHolderstraining_summary_view["English"]["avg_post_test_score"] = "";
	$fieldLabelstraining_summary_view["English"]["trainers"] = "Trainers";
	$fieldToolTipstraining_summary_view["English"]["trainers"] = "";
	$placeHolderstraining_summary_view["English"]["trainers"] = "";
	$fieldLabelstraining_summary_view["English"]["partners"] = "Partners";
	$fieldToolTipstraining_summary_view["English"]["partners"] = "";
	$placeHolderstraining_summary_view["English"]["partners"] = "";
	$fieldLabelstraining_summary_view["English"]["languages"] = "Languages";
	$fieldToolTipstraining_summary_view["English"]["languages"] = "";
	$placeHolderstraining_summary_view["English"]["languages"] = "";
	$fieldLabelstraining_summary_view["English"]["remarks"] = "Remarks";
	$fieldToolTipstraining_summary_view["English"]["remarks"] = "";
	$placeHolderstraining_summary_view["English"]["remarks"] = "";
	if (count($fieldToolTipstraining_summary_view["English"]))
		$tdatatraining_summary_view[".isUseToolTips"] = true;
}


	$tdatatraining_summary_view[".NCSearch"] = true;



$tdatatraining_summary_view[".shortTableName"] = "training_summary_view";
$tdatatraining_summary_view[".nSecOptions"] = 0;

$tdatatraining_summary_view[".mainTableOwnerID"] = "";
$tdatatraining_summary_view[".entityType"] = 0;
$tdatatraining_summary_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_summary_view[".strOriginalTableName"] = "public.training_summary_view";

	



$tdatatraining_summary_view[".showAddInPopup"] = false;

$tdatatraining_summary_view[".showEditInPopup"] = false;

$tdatatraining_summary_view[".showViewInPopup"] = false;

$tdatatraining_summary_view[".listAjax"] = false;
//	temporary
//$tdatatraining_summary_view[".listAjax"] = false;

	$tdatatraining_summary_view[".audit"] = false;

	$tdatatraining_summary_view[".locking"] = false;


$pages = $tdatatraining_summary_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_summary_view[".edit"] = true;
	$tdatatraining_summary_view[".afterEditAction"] = 1;
	$tdatatraining_summary_view[".closePopupAfterEdit"] = 1;
	$tdatatraining_summary_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_summary_view[".add"] = true;
$tdatatraining_summary_view[".afterAddAction"] = 1;
$tdatatraining_summary_view[".closePopupAfterAdd"] = 1;
$tdatatraining_summary_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_summary_view[".list"] = true;
}



$tdatatraining_summary_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_summary_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_summary_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_summary_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_summary_view[".printFriendly"] = true;
}



$tdatatraining_summary_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_summary_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_summary_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_summary_view[".isUseAjaxSuggest"] = true;





$tdatatraining_summary_view[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_summary_view[".buttonsAdded"] = false;

$tdatatraining_summary_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_summary_view[".isUseTimeForSearch"] = false;


$tdatatraining_summary_view[".badgeColor"] = "E8926F";


$tdatatraining_summary_view[".allSearchFields"] = array();
$tdatatraining_summary_view[".filterFields"] = array();
$tdatatraining_summary_view[".requiredSearchFields"] = array();

$tdatatraining_summary_view[".googleLikeFields"] = array();
$tdatatraining_summary_view[".googleLikeFields"][] = "training_id";
$tdatatraining_summary_view[".googleLikeFields"][] = "course_name";
$tdatatraining_summary_view[".googleLikeFields"][] = "training_type";
$tdatatraining_summary_view[".googleLikeFields"][] = "training_approach";
$tdatatraining_summary_view[".googleLikeFields"][] = "program";
$tdatatraining_summary_view[".googleLikeFields"][] = "quarter";
$tdatatraining_summary_view[".googleLikeFields"][] = "start_date";
$tdatatraining_summary_view[".googleLikeFields"][] = "end_date";
$tdatatraining_summary_view[".googleLikeFields"][] = "facility_name";
$tdatatraining_summary_view[".googleLikeFields"][] = "country_name";
$tdatatraining_summary_view[".googleLikeFields"][] = "region_name";
$tdatatraining_summary_view[".googleLikeFields"][] = "ceu_points";
$tdatatraining_summary_view[".googleLikeFields"][] = "num_participants";
$tdatatraining_summary_view[".googleLikeFields"][] = "avg_pre_test_score";
$tdatatraining_summary_view[".googleLikeFields"][] = "avg_post_test_score";
$tdatatraining_summary_view[".googleLikeFields"][] = "trainers";
$tdatatraining_summary_view[".googleLikeFields"][] = "partners";
$tdatatraining_summary_view[".googleLikeFields"][] = "languages";
$tdatatraining_summary_view[".googleLikeFields"][] = "remarks";



$tdatatraining_summary_view[".tableType"] = "list";

$tdatatraining_summary_view[".printerPageOrientation"] = 0;
$tdatatraining_summary_view[".nPrinterPageScale"] = 100;

$tdatatraining_summary_view[".nPrinterSplitRecords"] = 40;

$tdatatraining_summary_view[".geocodingEnabled"] = false;










$tdatatraining_summary_view[".pageSize"] = 20;

$tdatatraining_summary_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_summary_view[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_summary_view[".orderindexes"] = array();


$tdatatraining_summary_view[".sqlHead"] = "SELECT training_id,  	course_name,  	training_type,  	training_approach,  	program,  	quarter,  	start_date,  	end_date,  	facility_name,  	country_name,  	region_name,  	ceu_points,  	num_participants,  	avg_pre_test_score,  	avg_post_test_score,  	trainers,  	partners,  	languages,  	remarks";
$tdatatraining_summary_view[".sqlFrom"] = "FROM \"public\".training_summary_view";
$tdatatraining_summary_view[".sqlWhereExpr"] = "";
$tdatatraining_summary_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_summary_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_summary_view[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_summary_view[".highlightSearchResults"] = true;

$tableKeystraining_summary_view = array();
$tdatatraining_summary_view[".Keys"] = $tableKeystraining_summary_view;


$tdatatraining_summary_view[".hideMobileList"] = array();




//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","training_id");
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


	$tdatatraining_summary_view["training_id"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "training_id";
//	course_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "course_name";
	$fdata["GoodName"] = "course_name";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","course_name");
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


	$tdatatraining_summary_view["course_name"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "course_name";
//	training_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "training_type";
	$fdata["GoodName"] = "training_type";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","training_type");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "training_type";

		$fdata["sourceSingle"] = "training_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_type";

	
	
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


	$tdatatraining_summary_view["training_type"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "training_type";
//	training_approach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "training_approach";
	$fdata["GoodName"] = "training_approach";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","training_approach");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "training_approach";

		$fdata["sourceSingle"] = "training_approach";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_approach";

	
	
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


	$tdatatraining_summary_view["training_approach"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "training_approach";
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "program";
	$fdata["GoodName"] = "program";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","program");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "program";

		$fdata["sourceSingle"] = "program";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "program";

	
	
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


	$tdatatraining_summary_view["program"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "program";
//	quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "quarter";
	$fdata["GoodName"] = "quarter";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","quarter");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "quarter";

		$fdata["sourceSingle"] = "quarter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quarter";

	
	
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


	$tdatatraining_summary_view["quarter"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "quarter";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

		$fdata["sourceSingle"] = "start_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatatraining_summary_view["start_date"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

		$fdata["sourceSingle"] = "end_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatatraining_summary_view["end_date"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "end_date";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","facility_name");
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


	$tdatatraining_summary_view["facility_name"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "facility_name";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","country_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "country_name";

		$fdata["sourceSingle"] = "country_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_name";

	
	
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


	$tdatatraining_summary_view["country_name"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "country_name";
//	region_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "region_name";
	$fdata["GoodName"] = "region_name";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","region_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "region_name";

		$fdata["sourceSingle"] = "region_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_name";

	
	
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


	$tdatatraining_summary_view["region_name"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "region_name";
//	ceu_points
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ceu_points";
	$fdata["GoodName"] = "ceu_points";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","ceu_points");
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


	$tdatatraining_summary_view["ceu_points"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "ceu_points";
//	num_participants
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "num_participants";
	$fdata["GoodName"] = "num_participants";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","num_participants");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "num_participants";

		$fdata["sourceSingle"] = "num_participants";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_participants";

	
	
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


	$tdatatraining_summary_view["num_participants"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "num_participants";
//	avg_pre_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "avg_pre_test_score";
	$fdata["GoodName"] = "avg_pre_test_score";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","avg_pre_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "avg_pre_test_score";

		$fdata["sourceSingle"] = "avg_pre_test_score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avg_pre_test_score";

	
	
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


	$tdatatraining_summary_view["avg_pre_test_score"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "avg_pre_test_score";
//	avg_post_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "avg_post_test_score";
	$fdata["GoodName"] = "avg_post_test_score";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","avg_post_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "avg_post_test_score";

		$fdata["sourceSingle"] = "avg_post_test_score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avg_post_test_score";

	
	
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


	$tdatatraining_summary_view["avg_post_test_score"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "avg_post_test_score";
//	trainers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "trainers";
	$fdata["GoodName"] = "trainers";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","trainers");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "trainers";

		$fdata["sourceSingle"] = "trainers";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trainers";

	
	
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


	$tdatatraining_summary_view["trainers"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "trainers";
//	partners
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "partners";
	$fdata["GoodName"] = "partners";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","partners");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "partners";

		$fdata["sourceSingle"] = "partners";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "partners";

	
	
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


	$tdatatraining_summary_view["partners"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "partners";
//	languages
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "languages";
	$fdata["GoodName"] = "languages";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","languages");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "languages";

		$fdata["sourceSingle"] = "languages";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "languages";

	
	
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


	$tdatatraining_summary_view["languages"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "languages";
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "public.training_summary_view";
	$fdata["Label"] = GetFieldLabel("public_training_summary_view","remarks");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "remarks";

		$fdata["sourceSingle"] = "remarks";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarks";

	
	
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


	$tdatatraining_summary_view["remarks"] = $fdata;
		$tdatatraining_summary_view[".searchableFields"][] = "remarks";


$tables_data["public.training_summary_view"]=&$tdatatraining_summary_view;
$field_labels["public_training_summary_view"] = &$fieldLabelstraining_summary_view;
$fieldToolTips["public_training_summary_view"] = &$fieldToolTipstraining_summary_view;
$placeHolders["public_training_summary_view"] = &$placeHolderstraining_summary_view;
$page_titles["public_training_summary_view"] = &$pageTitlestraining_summary_view;


changeTextControlsToDate( "public.training_summary_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_summary_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_summary_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_summary_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "training_id,  	course_name,  	training_type,  	training_approach,  	program,  	quarter,  	start_date,  	end_date,  	facility_name,  	country_name,  	region_name,  	ceu_points,  	num_participants,  	avg_pre_test_score,  	avg_post_test_score,  	trainers,  	partners,  	languages,  	remarks";
$proto0["m_strFrom"] = "FROM \"public\".training_summary_view";
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
	"m_strName" => "training_id",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto6["m_sql"] = "training_id";
$proto6["m_srcTableName"] = "public.training_summary_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "course_name",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto8["m_sql"] = "course_name";
$proto8["m_srcTableName"] = "public.training_summary_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "training_type",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto10["m_sql"] = "training_type";
$proto10["m_srcTableName"] = "public.training_summary_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "training_approach",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto12["m_sql"] = "training_approach";
$proto12["m_srcTableName"] = "public.training_summary_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "program",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto14["m_sql"] = "program";
$proto14["m_srcTableName"] = "public.training_summary_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto16["m_sql"] = "quarter";
$proto16["m_srcTableName"] = "public.training_summary_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto18["m_sql"] = "start_date";
$proto18["m_srcTableName"] = "public.training_summary_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto20["m_sql"] = "end_date";
$proto20["m_srcTableName"] = "public.training_summary_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto22["m_sql"] = "facility_name";
$proto22["m_srcTableName"] = "public.training_summary_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto24["m_sql"] = "country_name";
$proto24["m_srcTableName"] = "public.training_summary_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto26["m_sql"] = "region_name";
$proto26["m_srcTableName"] = "public.training_summary_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ceu_points",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto28["m_sql"] = "ceu_points";
$proto28["m_srcTableName"] = "public.training_summary_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "num_participants",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto30["m_sql"] = "num_participants";
$proto30["m_srcTableName"] = "public.training_summary_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_pre_test_score",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto32["m_sql"] = "avg_pre_test_score";
$proto32["m_srcTableName"] = "public.training_summary_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_post_test_score",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto34["m_sql"] = "avg_post_test_score";
$proto34["m_srcTableName"] = "public.training_summary_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "trainers",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto36["m_sql"] = "trainers";
$proto36["m_srcTableName"] = "public.training_summary_view";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "partners",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto38["m_sql"] = "partners";
$proto38["m_srcTableName"] = "public.training_summary_view";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "languages",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto40["m_sql"] = "languages";
$proto40["m_srcTableName"] = "public.training_summary_view";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_summary_view"
));

$proto42["m_sql"] = "remarks";
$proto42["m_srcTableName"] = "public.training_summary_view";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "public.training_summary_view";
$proto45["m_srcTableName"] = "public.training_summary_view";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "training_id";
$proto45["m_columns"][] = "course_name";
$proto45["m_columns"][] = "training_type";
$proto45["m_columns"][] = "training_approach";
$proto45["m_columns"][] = "program";
$proto45["m_columns"][] = "quarter";
$proto45["m_columns"][] = "start_date";
$proto45["m_columns"][] = "end_date";
$proto45["m_columns"][] = "facility_name";
$proto45["m_columns"][] = "country_name";
$proto45["m_columns"][] = "region_name";
$proto45["m_columns"][] = "ceu_points";
$proto45["m_columns"][] = "num_participants";
$proto45["m_columns"][] = "avg_pre_test_score";
$proto45["m_columns"][] = "avg_post_test_score";
$proto45["m_columns"][] = "trainers";
$proto45["m_columns"][] = "partners";
$proto45["m_columns"][] = "languages";
$proto45["m_columns"][] = "remarks";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "\"public\".training_summary_view";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "public.training_summary_view";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.training_summary_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_summary_view = createSqlQuery_training_summary_view();


	
		;

																			

$tdatatraining_summary_view[".sqlquery"] = $queryData_training_summary_view;



$tdatatraining_summary_view[".hasEvents"] = false;

?>