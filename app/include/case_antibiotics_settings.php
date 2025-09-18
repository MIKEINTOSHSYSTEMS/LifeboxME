<?php
$tdatacase_antibiotics = array();
$tdatacase_antibiotics[".searchableFields"] = array();
$tdatacase_antibiotics[".ShortName"] = "case_antibiotics";
$tdatacase_antibiotics[".OwnerID"] = "";
$tdatacase_antibiotics[".OriginalTable"] = "public.case_antibiotics";


$tdatacase_antibiotics[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacase_antibiotics[".originalPagesByType"] = $tdatacase_antibiotics[".pagesByType"];
$tdatacase_antibiotics[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacase_antibiotics[".originalPages"] = $tdatacase_antibiotics[".pages"];
$tdatacase_antibiotics[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacase_antibiotics[".originalDefaultPages"] = $tdatacase_antibiotics[".defaultPages"];

//	field labels
$fieldLabelscase_antibiotics = array();
$fieldToolTipscase_antibiotics = array();
$pageTitlescase_antibiotics = array();
$placeHolderscase_antibiotics = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscase_antibiotics["English"] = array();
	$fieldToolTipscase_antibiotics["English"] = array();
	$placeHolderscase_antibiotics["English"] = array();
	$pageTitlescase_antibiotics["English"] = array();
	$fieldLabelscase_antibiotics["English"]["case_antibiotic_id"] = "Case Antibiotic Id";
	$fieldToolTipscase_antibiotics["English"]["case_antibiotic_id"] = "";
	$placeHolderscase_antibiotics["English"]["case_antibiotic_id"] = "";
	$fieldLabelscase_antibiotics["English"]["case_id"] = "Case Id";
	$fieldToolTipscase_antibiotics["English"]["case_id"] = "";
	$placeHolderscase_antibiotics["English"]["case_id"] = "";
	$fieldLabelscase_antibiotics["English"]["antibiotic_id"] = "Antibiotic Id";
	$fieldToolTipscase_antibiotics["English"]["antibiotic_id"] = "";
	$placeHolderscase_antibiotics["English"]["antibiotic_id"] = "";
	$fieldLabelscase_antibiotics["English"]["created_at"] = "Created At";
	$fieldToolTipscase_antibiotics["English"]["created_at"] = "";
	$placeHolderscase_antibiotics["English"]["created_at"] = "";
	if (count($fieldToolTipscase_antibiotics["English"]))
		$tdatacase_antibiotics[".isUseToolTips"] = true;
}


	$tdatacase_antibiotics[".NCSearch"] = true;



$tdatacase_antibiotics[".shortTableName"] = "case_antibiotics";
$tdatacase_antibiotics[".nSecOptions"] = 0;

$tdatacase_antibiotics[".mainTableOwnerID"] = "";
$tdatacase_antibiotics[".entityType"] = 0;
$tdatacase_antibiotics[".connId"] = "lifebox_mesystem_at_localhost";


$tdatacase_antibiotics[".strOriginalTableName"] = "public.case_antibiotics";

	



$tdatacase_antibiotics[".showAddInPopup"] = false;

$tdatacase_antibiotics[".showEditInPopup"] = false;

$tdatacase_antibiotics[".showViewInPopup"] = false;

$tdatacase_antibiotics[".listAjax"] = false;
//	temporary
//$tdatacase_antibiotics[".listAjax"] = false;

	$tdatacase_antibiotics[".audit"] = true;

	$tdatacase_antibiotics[".locking"] = false;


$pages = $tdatacase_antibiotics[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacase_antibiotics[".edit"] = true;
	$tdatacase_antibiotics[".afterEditAction"] = 1;
	$tdatacase_antibiotics[".closePopupAfterEdit"] = 1;
	$tdatacase_antibiotics[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacase_antibiotics[".add"] = true;
$tdatacase_antibiotics[".afterAddAction"] = 1;
$tdatacase_antibiotics[".closePopupAfterAdd"] = 1;
$tdatacase_antibiotics[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacase_antibiotics[".list"] = true;
}



$tdatacase_antibiotics[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacase_antibiotics[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacase_antibiotics[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacase_antibiotics[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacase_antibiotics[".printFriendly"] = true;
}



$tdatacase_antibiotics[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacase_antibiotics[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacase_antibiotics[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacase_antibiotics[".isUseAjaxSuggest"] = true;



									

$tdatacase_antibiotics[".ajaxCodeSnippetAdded"] = false;

$tdatacase_antibiotics[".buttonsAdded"] = false;

$tdatacase_antibiotics[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacase_antibiotics[".isUseTimeForSearch"] = false;


$tdatacase_antibiotics[".badgeColor"] = "CFAE83";


$tdatacase_antibiotics[".allSearchFields"] = array();
$tdatacase_antibiotics[".filterFields"] = array();
$tdatacase_antibiotics[".requiredSearchFields"] = array();

$tdatacase_antibiotics[".googleLikeFields"] = array();
$tdatacase_antibiotics[".googleLikeFields"][] = "case_antibiotic_id";
$tdatacase_antibiotics[".googleLikeFields"][] = "case_id";
$tdatacase_antibiotics[".googleLikeFields"][] = "antibiotic_id";
$tdatacase_antibiotics[".googleLikeFields"][] = "created_at";



$tdatacase_antibiotics[".tableType"] = "list";

$tdatacase_antibiotics[".printerPageOrientation"] = 0;
$tdatacase_antibiotics[".nPrinterPageScale"] = 100;

$tdatacase_antibiotics[".nPrinterSplitRecords"] = 40;

$tdatacase_antibiotics[".geocodingEnabled"] = false;










$tdatacase_antibiotics[".pageSize"] = 20;

$tdatacase_antibiotics[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacase_antibiotics[".strOrderBy"] = $tstrOrderBy;

$tdatacase_antibiotics[".orderindexes"] = array();


$tdatacase_antibiotics[".sqlHead"] = "SELECT case_antibiotic_id,  	case_id,  	antibiotic_id,  	created_at";
$tdatacase_antibiotics[".sqlFrom"] = "FROM \"public\".case_antibiotics";
$tdatacase_antibiotics[".sqlWhereExpr"] = "";
$tdatacase_antibiotics[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacase_antibiotics[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacase_antibiotics[".arrGroupsPerPage"] = $arrGPP;

$tdatacase_antibiotics[".highlightSearchResults"] = true;

$tableKeyscase_antibiotics = array();
$tableKeyscase_antibiotics[] = "case_antibiotic_id";
$tdatacase_antibiotics[".Keys"] = $tableKeyscase_antibiotics;


$tdatacase_antibiotics[".hideMobileList"] = array();




//	case_antibiotic_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "case_antibiotic_id";
	$fdata["GoodName"] = "case_antibiotic_id";
	$fdata["ownerTable"] = "public.case_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_case_antibiotics","case_antibiotic_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "case_antibiotic_id";

		$fdata["sourceSingle"] = "case_antibiotic_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case_antibiotic_id";

	
	
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


	$tdatacase_antibiotics["case_antibiotic_id"] = $fdata;
		$tdatacase_antibiotics[".searchableFields"][] = "case_antibiotic_id";
//	case_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "case_id";
	$fdata["GoodName"] = "case_id";
	$fdata["ownerTable"] = "public.case_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_case_antibiotics","case_id");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "case_id";

		$fdata["sourceSingle"] = "case_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case_id";

	
	
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
	$edata["LookupTable"] = "public.surgical_cases";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "case_id";
	$edata["LinkFieldType"] = 13;
	$edata["DisplayField"] = "case_id";

	

	
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


	$tdatacase_antibiotics["case_id"] = $fdata;
		$tdatacase_antibiotics[".searchableFields"][] = "case_id";
//	antibiotic_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "antibiotic_id";
	$fdata["GoodName"] = "antibiotic_id";
	$fdata["ownerTable"] = "public.case_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_case_antibiotics","antibiotic_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "antibiotic_id";

		$fdata["sourceSingle"] = "antibiotic_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotic_id";

	
	
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
	$edata["LookupTable"] = "public.antibiotics";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "antibiotic_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "antibiotic_name";

	

	
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


	$tdatacase_antibiotics["antibiotic_id"] = $fdata;
		$tdatacase_antibiotics[".searchableFields"][] = "antibiotic_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.case_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_case_antibiotics","created_at");
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


	$tdatacase_antibiotics["created_at"] = $fdata;
		$tdatacase_antibiotics[".searchableFields"][] = "created_at";


$tables_data["public.case_antibiotics"]=&$tdatacase_antibiotics;
$field_labels["public_case_antibiotics"] = &$fieldLabelscase_antibiotics;
$fieldToolTips["public_case_antibiotics"] = &$fieldToolTipscase_antibiotics;
$placeHolders["public_case_antibiotics"] = &$placeHolderscase_antibiotics;
$page_titles["public_case_antibiotics"] = &$pageTitlescase_antibiotics;


changeTextControlsToDate( "public.case_antibiotics" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.case_antibiotics"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.case_antibiotics"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.antibiotics";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.antibiotics";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "antibiotics";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.case_antibiotics"][0] = $masterParams;
				$masterTablesData["public.case_antibiotics"][0]["masterKeys"] = array();
	$masterTablesData["public.case_antibiotics"][0]["masterKeys"][]="antibiotic_id";
				$masterTablesData["public.case_antibiotics"][0]["detailKeys"] = array();
	$masterTablesData["public.case_antibiotics"][0]["detailKeys"][]="antibiotic_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.surgical_cases";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.surgical_cases";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "surgical_cases";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.case_antibiotics"][1] = $masterParams;
				$masterTablesData["public.case_antibiotics"][1]["masterKeys"] = array();
	$masterTablesData["public.case_antibiotics"][1]["masterKeys"][]="case_id";
				$masterTablesData["public.case_antibiotics"][1]["detailKeys"] = array();
	$masterTablesData["public.case_antibiotics"][1]["detailKeys"][]="case_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_case_antibiotics()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "case_antibiotic_id,  	case_id,  	antibiotic_id,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".case_antibiotics";
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
	"m_strName" => "case_antibiotic_id",
	"m_strTable" => "public.case_antibiotics",
	"m_srcTableName" => "public.case_antibiotics"
));

$proto6["m_sql"] = "case_antibiotic_id";
$proto6["m_srcTableName"] = "public.case_antibiotics";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "case_id",
	"m_strTable" => "public.case_antibiotics",
	"m_srcTableName" => "public.case_antibiotics"
));

$proto8["m_sql"] = "case_id";
$proto8["m_srcTableName"] = "public.case_antibiotics";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotic_id",
	"m_strTable" => "public.case_antibiotics",
	"m_srcTableName" => "public.case_antibiotics"
));

$proto10["m_sql"] = "antibiotic_id";
$proto10["m_srcTableName"] = "public.case_antibiotics";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.case_antibiotics",
	"m_srcTableName" => "public.case_antibiotics"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.case_antibiotics";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.case_antibiotics";
$proto15["m_srcTableName"] = "public.case_antibiotics";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "case_antibiotic_id";
$proto15["m_columns"][] = "case_id";
$proto15["m_columns"][] = "antibiotic_id";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".case_antibiotics";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.case_antibiotics";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.case_antibiotics";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_case_antibiotics = createSqlQuery_case_antibiotics();


	
				;

				

$tdatacase_antibiotics[".sqlquery"] = $queryData_case_antibiotics;



$tdatacase_antibiotics[".hasEvents"] = false;

?>