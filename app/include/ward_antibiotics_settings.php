<?php
$tdataward_antibiotics = array();
$tdataward_antibiotics[".searchableFields"] = array();
$tdataward_antibiotics[".ShortName"] = "ward_antibiotics";
$tdataward_antibiotics[".OwnerID"] = "";
$tdataward_antibiotics[".OriginalTable"] = "public.ward_antibiotics";


$tdataward_antibiotics[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataward_antibiotics[".originalPagesByType"] = $tdataward_antibiotics[".pagesByType"];
$tdataward_antibiotics[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataward_antibiotics[".originalPages"] = $tdataward_antibiotics[".pages"];
$tdataward_antibiotics[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataward_antibiotics[".originalDefaultPages"] = $tdataward_antibiotics[".defaultPages"];

//	field labels
$fieldLabelsward_antibiotics = array();
$fieldToolTipsward_antibiotics = array();
$pageTitlesward_antibiotics = array();
$placeHoldersward_antibiotics = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsward_antibiotics["English"] = array();
	$fieldToolTipsward_antibiotics["English"] = array();
	$placeHoldersward_antibiotics["English"] = array();
	$pageTitlesward_antibiotics["English"] = array();
	$fieldLabelsward_antibiotics["English"]["ward_antibiotic_id"] = "Ward Antibiotic Id";
	$fieldToolTipsward_antibiotics["English"]["ward_antibiotic_id"] = "";
	$placeHoldersward_antibiotics["English"]["ward_antibiotic_id"] = "";
	$fieldLabelsward_antibiotics["English"]["ward_round_id"] = "Ward Round Id";
	$fieldToolTipsward_antibiotics["English"]["ward_round_id"] = "";
	$placeHoldersward_antibiotics["English"]["ward_round_id"] = "";
	$fieldLabelsward_antibiotics["English"]["antibiotic_id"] = "Antibiotic Id";
	$fieldToolTipsward_antibiotics["English"]["antibiotic_id"] = "";
	$placeHoldersward_antibiotics["English"]["antibiotic_id"] = "";
	$fieldLabelsward_antibiotics["English"]["created_at"] = "Created At";
	$fieldToolTipsward_antibiotics["English"]["created_at"] = "";
	$placeHoldersward_antibiotics["English"]["created_at"] = "";
	if (count($fieldToolTipsward_antibiotics["English"]))
		$tdataward_antibiotics[".isUseToolTips"] = true;
}


	$tdataward_antibiotics[".NCSearch"] = true;



$tdataward_antibiotics[".shortTableName"] = "ward_antibiotics";
$tdataward_antibiotics[".nSecOptions"] = 0;

$tdataward_antibiotics[".mainTableOwnerID"] = "";
$tdataward_antibiotics[".entityType"] = 0;
$tdataward_antibiotics[".connId"] = "lifebox_mesystem_at_localhost";


$tdataward_antibiotics[".strOriginalTableName"] = "public.ward_antibiotics";

	



$tdataward_antibiotics[".showAddInPopup"] = false;

$tdataward_antibiotics[".showEditInPopup"] = false;

$tdataward_antibiotics[".showViewInPopup"] = false;

$tdataward_antibiotics[".listAjax"] = false;
//	temporary
//$tdataward_antibiotics[".listAjax"] = false;

	$tdataward_antibiotics[".audit"] = true;

	$tdataward_antibiotics[".locking"] = false;


$pages = $tdataward_antibiotics[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataward_antibiotics[".edit"] = true;
	$tdataward_antibiotics[".afterEditAction"] = 1;
	$tdataward_antibiotics[".closePopupAfterEdit"] = 1;
	$tdataward_antibiotics[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataward_antibiotics[".add"] = true;
$tdataward_antibiotics[".afterAddAction"] = 1;
$tdataward_antibiotics[".closePopupAfterAdd"] = 1;
$tdataward_antibiotics[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataward_antibiotics[".list"] = true;
}



$tdataward_antibiotics[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataward_antibiotics[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataward_antibiotics[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataward_antibiotics[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataward_antibiotics[".printFriendly"] = true;
}



$tdataward_antibiotics[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataward_antibiotics[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataward_antibiotics[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataward_antibiotics[".isUseAjaxSuggest"] = true;





$tdataward_antibiotics[".ajaxCodeSnippetAdded"] = false;

$tdataward_antibiotics[".buttonsAdded"] = false;

$tdataward_antibiotics[".addPageEvents"] = false;

// use timepicker for search panel
$tdataward_antibiotics[".isUseTimeForSearch"] = false;


$tdataward_antibiotics[".badgeColor"] = "D2691E";


$tdataward_antibiotics[".allSearchFields"] = array();
$tdataward_antibiotics[".filterFields"] = array();
$tdataward_antibiotics[".requiredSearchFields"] = array();

$tdataward_antibiotics[".googleLikeFields"] = array();
$tdataward_antibiotics[".googleLikeFields"][] = "ward_antibiotic_id";
$tdataward_antibiotics[".googleLikeFields"][] = "ward_round_id";
$tdataward_antibiotics[".googleLikeFields"][] = "antibiotic_id";
$tdataward_antibiotics[".googleLikeFields"][] = "created_at";



$tdataward_antibiotics[".tableType"] = "list";

$tdataward_antibiotics[".printerPageOrientation"] = 0;
$tdataward_antibiotics[".nPrinterPageScale"] = 100;

$tdataward_antibiotics[".nPrinterSplitRecords"] = 40;

$tdataward_antibiotics[".geocodingEnabled"] = false;










$tdataward_antibiotics[".pageSize"] = 20;

$tdataward_antibiotics[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataward_antibiotics[".strOrderBy"] = $tstrOrderBy;

$tdataward_antibiotics[".orderindexes"] = array();


$tdataward_antibiotics[".sqlHead"] = "SELECT ward_antibiotic_id,  	ward_round_id,  	antibiotic_id,  	created_at";
$tdataward_antibiotics[".sqlFrom"] = "FROM \"public\".ward_antibiotics";
$tdataward_antibiotics[".sqlWhereExpr"] = "";
$tdataward_antibiotics[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataward_antibiotics[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataward_antibiotics[".arrGroupsPerPage"] = $arrGPP;

$tdataward_antibiotics[".highlightSearchResults"] = true;

$tableKeysward_antibiotics = array();
$tableKeysward_antibiotics[] = "ward_antibiotic_id";
$tdataward_antibiotics[".Keys"] = $tableKeysward_antibiotics;


$tdataward_antibiotics[".hideMobileList"] = array();




//	ward_antibiotic_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ward_antibiotic_id";
	$fdata["GoodName"] = "ward_antibiotic_id";
	$fdata["ownerTable"] = "public.ward_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_ward_antibiotics","ward_antibiotic_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ward_antibiotic_id";

		$fdata["sourceSingle"] = "ward_antibiotic_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ward_antibiotic_id";

	
	
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


	$tdataward_antibiotics["ward_antibiotic_id"] = $fdata;
		$tdataward_antibiotics[".searchableFields"][] = "ward_antibiotic_id";
//	ward_round_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ward_round_id";
	$fdata["GoodName"] = "ward_round_id";
	$fdata["ownerTable"] = "public.ward_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_ward_antibiotics","ward_round_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ward_round_id";

		$fdata["sourceSingle"] = "ward_round_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ward_round_id";

	
	
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
	$edata["LookupTable"] = "public.ward_rounds";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ward_round_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "data_collector_name";

	

	
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


	$tdataward_antibiotics["ward_round_id"] = $fdata;
		$tdataward_antibiotics[".searchableFields"][] = "ward_round_id";
//	antibiotic_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "antibiotic_id";
	$fdata["GoodName"] = "antibiotic_id";
	$fdata["ownerTable"] = "public.ward_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_ward_antibiotics","antibiotic_id");
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


	$tdataward_antibiotics["antibiotic_id"] = $fdata;
		$tdataward_antibiotics[".searchableFields"][] = "antibiotic_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.ward_antibiotics";
	$fdata["Label"] = GetFieldLabel("public_ward_antibiotics","created_at");
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


	$tdataward_antibiotics["created_at"] = $fdata;
		$tdataward_antibiotics[".searchableFields"][] = "created_at";


$tables_data["public.ward_antibiotics"]=&$tdataward_antibiotics;
$field_labels["public_ward_antibiotics"] = &$fieldLabelsward_antibiotics;
$fieldToolTips["public_ward_antibiotics"] = &$fieldToolTipsward_antibiotics;
$placeHolders["public_ward_antibiotics"] = &$placeHoldersward_antibiotics;
$page_titles["public_ward_antibiotics"] = &$pageTitlesward_antibiotics;


changeTextControlsToDate( "public.ward_antibiotics" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ward_antibiotics"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ward_antibiotics"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.antibiotics";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.antibiotics";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "antibiotics";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ward_antibiotics"][0] = $masterParams;
				$masterTablesData["public.ward_antibiotics"][0]["masterKeys"] = array();
	$masterTablesData["public.ward_antibiotics"][0]["masterKeys"][]="antibiotic_id";
				$masterTablesData["public.ward_antibiotics"][0]["detailKeys"] = array();
	$masterTablesData["public.ward_antibiotics"][0]["detailKeys"][]="antibiotic_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.ward_rounds";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.ward_rounds";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ward_rounds";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ward_antibiotics"][1] = $masterParams;
				$masterTablesData["public.ward_antibiotics"][1]["masterKeys"] = array();
	$masterTablesData["public.ward_antibiotics"][1]["masterKeys"][]="ward_round_id";
				$masterTablesData["public.ward_antibiotics"][1]["detailKeys"] = array();
	$masterTablesData["public.ward_antibiotics"][1]["detailKeys"][]="ward_round_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ward_antibiotics()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ward_antibiotic_id,  	ward_round_id,  	antibiotic_id,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".ward_antibiotics";
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
	"m_strName" => "ward_antibiotic_id",
	"m_strTable" => "public.ward_antibiotics",
	"m_srcTableName" => "public.ward_antibiotics"
));

$proto6["m_sql"] = "ward_antibiotic_id";
$proto6["m_srcTableName"] = "public.ward_antibiotics";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ward_round_id",
	"m_strTable" => "public.ward_antibiotics",
	"m_srcTableName" => "public.ward_antibiotics"
));

$proto8["m_sql"] = "ward_round_id";
$proto8["m_srcTableName"] = "public.ward_antibiotics";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotic_id",
	"m_strTable" => "public.ward_antibiotics",
	"m_srcTableName" => "public.ward_antibiotics"
));

$proto10["m_sql"] = "antibiotic_id";
$proto10["m_srcTableName"] = "public.ward_antibiotics";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.ward_antibiotics",
	"m_srcTableName" => "public.ward_antibiotics"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.ward_antibiotics";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.ward_antibiotics";
$proto15["m_srcTableName"] = "public.ward_antibiotics";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ward_antibiotic_id";
$proto15["m_columns"][] = "ward_round_id";
$proto15["m_columns"][] = "antibiotic_id";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".ward_antibiotics";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.ward_antibiotics";
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
$proto0["m_srcTableName"]="public.ward_antibiotics";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ward_antibiotics = createSqlQuery_ward_antibiotics();


	
				;

				

$tdataward_antibiotics[".sqlquery"] = $queryData_ward_antibiotics;



$tdataward_antibiotics[".hasEvents"] = false;

?>