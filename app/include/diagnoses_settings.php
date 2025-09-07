<?php
$tdatadiagnoses = array();
$tdatadiagnoses[".searchableFields"] = array();
$tdatadiagnoses[".ShortName"] = "diagnoses";
$tdatadiagnoses[".OwnerID"] = "";
$tdatadiagnoses[".OriginalTable"] = "public.diagnoses";


$tdatadiagnoses[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadiagnoses[".originalPagesByType"] = $tdatadiagnoses[".pagesByType"];
$tdatadiagnoses[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadiagnoses[".originalPages"] = $tdatadiagnoses[".pages"];
$tdatadiagnoses[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadiagnoses[".originalDefaultPages"] = $tdatadiagnoses[".defaultPages"];

//	field labels
$fieldLabelsdiagnoses = array();
$fieldToolTipsdiagnoses = array();
$pageTitlesdiagnoses = array();
$placeHoldersdiagnoses = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdiagnoses["English"] = array();
	$fieldToolTipsdiagnoses["English"] = array();
	$placeHoldersdiagnoses["English"] = array();
	$pageTitlesdiagnoses["English"] = array();
	$fieldLabelsdiagnoses["English"]["diagnosis_id"] = "Diagnosis Id";
	$fieldToolTipsdiagnoses["English"]["diagnosis_id"] = "";
	$placeHoldersdiagnoses["English"]["diagnosis_id"] = "";
	$fieldLabelsdiagnoses["English"]["diagnosis_name"] = "Diagnosis Name";
	$fieldToolTipsdiagnoses["English"]["diagnosis_name"] = "";
	$placeHoldersdiagnoses["English"]["diagnosis_name"] = "";
	$fieldLabelsdiagnoses["English"]["diagnosis_category"] = "Diagnosis Category";
	$fieldToolTipsdiagnoses["English"]["diagnosis_category"] = "";
	$placeHoldersdiagnoses["English"]["diagnosis_category"] = "";
	$fieldLabelsdiagnoses["English"]["description"] = "Description";
	$fieldToolTipsdiagnoses["English"]["description"] = "";
	$placeHoldersdiagnoses["English"]["description"] = "";
	$fieldLabelsdiagnoses["English"]["created_at"] = "Created At";
	$fieldToolTipsdiagnoses["English"]["created_at"] = "";
	$placeHoldersdiagnoses["English"]["created_at"] = "";
	if (count($fieldToolTipsdiagnoses["English"]))
		$tdatadiagnoses[".isUseToolTips"] = true;
}


	$tdatadiagnoses[".NCSearch"] = true;



$tdatadiagnoses[".shortTableName"] = "diagnoses";
$tdatadiagnoses[".nSecOptions"] = 0;

$tdatadiagnoses[".mainTableOwnerID"] = "";
$tdatadiagnoses[".entityType"] = 0;
$tdatadiagnoses[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadiagnoses[".strOriginalTableName"] = "public.diagnoses";

	



$tdatadiagnoses[".showAddInPopup"] = false;

$tdatadiagnoses[".showEditInPopup"] = false;

$tdatadiagnoses[".showViewInPopup"] = false;

$tdatadiagnoses[".listAjax"] = false;
//	temporary
//$tdatadiagnoses[".listAjax"] = false;

	$tdatadiagnoses[".audit"] = true;

	$tdatadiagnoses[".locking"] = false;


$pages = $tdatadiagnoses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadiagnoses[".edit"] = true;
	$tdatadiagnoses[".afterEditAction"] = 1;
	$tdatadiagnoses[".closePopupAfterEdit"] = 1;
	$tdatadiagnoses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadiagnoses[".add"] = true;
$tdatadiagnoses[".afterAddAction"] = 1;
$tdatadiagnoses[".closePopupAfterAdd"] = 1;
$tdatadiagnoses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadiagnoses[".list"] = true;
}



$tdatadiagnoses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadiagnoses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadiagnoses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadiagnoses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadiagnoses[".printFriendly"] = true;
}



$tdatadiagnoses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadiagnoses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadiagnoses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadiagnoses[".isUseAjaxSuggest"] = true;





$tdatadiagnoses[".ajaxCodeSnippetAdded"] = false;

$tdatadiagnoses[".buttonsAdded"] = false;

$tdatadiagnoses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadiagnoses[".isUseTimeForSearch"] = false;


$tdatadiagnoses[".badgeColor"] = "B22222";


$tdatadiagnoses[".allSearchFields"] = array();
$tdatadiagnoses[".filterFields"] = array();
$tdatadiagnoses[".requiredSearchFields"] = array();

$tdatadiagnoses[".googleLikeFields"] = array();
$tdatadiagnoses[".googleLikeFields"][] = "diagnosis_id";
$tdatadiagnoses[".googleLikeFields"][] = "diagnosis_name";
$tdatadiagnoses[".googleLikeFields"][] = "diagnosis_category";
$tdatadiagnoses[".googleLikeFields"][] = "description";
$tdatadiagnoses[".googleLikeFields"][] = "created_at";



$tdatadiagnoses[".tableType"] = "list";

$tdatadiagnoses[".printerPageOrientation"] = 0;
$tdatadiagnoses[".nPrinterPageScale"] = 100;

$tdatadiagnoses[".nPrinterSplitRecords"] = 40;

$tdatadiagnoses[".geocodingEnabled"] = false;










$tdatadiagnoses[".pageSize"] = 20;

$tdatadiagnoses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadiagnoses[".strOrderBy"] = $tstrOrderBy;

$tdatadiagnoses[".orderindexes"] = array();


$tdatadiagnoses[".sqlHead"] = "SELECT diagnosis_id,  	diagnosis_name,  	diagnosis_category,  	description,  	created_at";
$tdatadiagnoses[".sqlFrom"] = "FROM \"public\".diagnoses";
$tdatadiagnoses[".sqlWhereExpr"] = "";
$tdatadiagnoses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadiagnoses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadiagnoses[".arrGroupsPerPage"] = $arrGPP;

$tdatadiagnoses[".highlightSearchResults"] = true;

$tableKeysdiagnoses = array();
$tableKeysdiagnoses[] = "diagnosis_id";
$tdatadiagnoses[".Keys"] = $tableKeysdiagnoses;


$tdatadiagnoses[".hideMobileList"] = array();




//	diagnosis_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "diagnosis_id";
	$fdata["GoodName"] = "diagnosis_id";
	$fdata["ownerTable"] = "public.diagnoses";
	$fdata["Label"] = GetFieldLabel("public_diagnoses","diagnosis_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "diagnosis_id";

		$fdata["sourceSingle"] = "diagnosis_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosis_id";

	
	
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


	$tdatadiagnoses["diagnosis_id"] = $fdata;
		$tdatadiagnoses[".searchableFields"][] = "diagnosis_id";
//	diagnosis_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "diagnosis_name";
	$fdata["GoodName"] = "diagnosis_name";
	$fdata["ownerTable"] = "public.diagnoses";
	$fdata["Label"] = GetFieldLabel("public_diagnoses","diagnosis_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "diagnosis_name";

		$fdata["sourceSingle"] = "diagnosis_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosis_name";

	
	
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


	$tdatadiagnoses["diagnosis_name"] = $fdata;
		$tdatadiagnoses[".searchableFields"][] = "diagnosis_name";
//	diagnosis_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "diagnosis_category";
	$fdata["GoodName"] = "diagnosis_category";
	$fdata["ownerTable"] = "public.diagnoses";
	$fdata["Label"] = GetFieldLabel("public_diagnoses","diagnosis_category");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "diagnosis_category";

		$fdata["sourceSingle"] = "diagnosis_category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosis_category";

	
	
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


	$tdatadiagnoses["diagnosis_category"] = $fdata;
		$tdatadiagnoses[".searchableFields"][] = "diagnosis_category";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.diagnoses";
	$fdata["Label"] = GetFieldLabel("public_diagnoses","description");
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


	$tdatadiagnoses["description"] = $fdata;
		$tdatadiagnoses[".searchableFields"][] = "description";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.diagnoses";
	$fdata["Label"] = GetFieldLabel("public_diagnoses","created_at");
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


	$tdatadiagnoses["created_at"] = $fdata;
		$tdatadiagnoses[".searchableFields"][] = "created_at";


$tables_data["public.diagnoses"]=&$tdatadiagnoses;
$field_labels["public_diagnoses"] = &$fieldLabelsdiagnoses;
$fieldToolTips["public_diagnoses"] = &$fieldToolTipsdiagnoses;
$placeHolders["public_diagnoses"] = &$placeHoldersdiagnoses;
$page_titles["public_diagnoses"] = &$pageTitlesdiagnoses;


changeTextControlsToDate( "public.diagnoses" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.diagnoses"] = array();
//	public.surgical_cases
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.surgical_cases";
		$detailsParam["dOriginalTable"] = "public.surgical_cases";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "surgical_cases";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_surgical_cases");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.diagnoses"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.diagnoses"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.diagnoses"][$dIndex]["masterKeys"][]="diagnosis_id";

				$detailsTablesData["public.diagnoses"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.diagnoses"][$dIndex]["detailKeys"][]="preoperative_diagnosis_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.diagnoses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_diagnoses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "diagnosis_id,  	diagnosis_name,  	diagnosis_category,  	description,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".diagnoses";
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
	"m_strName" => "diagnosis_id",
	"m_strTable" => "public.diagnoses",
	"m_srcTableName" => "public.diagnoses"
));

$proto6["m_sql"] = "diagnosis_id";
$proto6["m_srcTableName"] = "public.diagnoses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosis_name",
	"m_strTable" => "public.diagnoses",
	"m_srcTableName" => "public.diagnoses"
));

$proto8["m_sql"] = "diagnosis_name";
$proto8["m_srcTableName"] = "public.diagnoses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosis_category",
	"m_strTable" => "public.diagnoses",
	"m_srcTableName" => "public.diagnoses"
));

$proto10["m_sql"] = "diagnosis_category";
$proto10["m_srcTableName"] = "public.diagnoses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.diagnoses",
	"m_srcTableName" => "public.diagnoses"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "public.diagnoses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.diagnoses",
	"m_srcTableName" => "public.diagnoses"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.diagnoses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.diagnoses";
$proto17["m_srcTableName"] = "public.diagnoses";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "diagnosis_id";
$proto17["m_columns"][] = "diagnosis_name";
$proto17["m_columns"][] = "diagnosis_category";
$proto17["m_columns"][] = "description";
$proto17["m_columns"][] = "created_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".diagnoses";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.diagnoses";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.diagnoses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_diagnoses = createSqlQuery_diagnoses();


	
				;

					

$tdatadiagnoses[".sqlquery"] = $queryData_diagnoses;



$tdatadiagnoses[".hasEvents"] = false;

?>