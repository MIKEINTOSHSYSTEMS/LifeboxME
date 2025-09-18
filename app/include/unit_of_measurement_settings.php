<?php
$tdataunit_of_measurement = array();
$tdataunit_of_measurement[".searchableFields"] = array();
$tdataunit_of_measurement[".ShortName"] = "unit_of_measurement";
$tdataunit_of_measurement[".OwnerID"] = "";
$tdataunit_of_measurement[".OriginalTable"] = "public.unit_of_measurement";


$tdataunit_of_measurement[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataunit_of_measurement[".originalPagesByType"] = $tdataunit_of_measurement[".pagesByType"];
$tdataunit_of_measurement[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataunit_of_measurement[".originalPages"] = $tdataunit_of_measurement[".pages"];
$tdataunit_of_measurement[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataunit_of_measurement[".originalDefaultPages"] = $tdataunit_of_measurement[".defaultPages"];

//	field labels
$fieldLabelsunit_of_measurement = array();
$fieldToolTipsunit_of_measurement = array();
$pageTitlesunit_of_measurement = array();
$placeHoldersunit_of_measurement = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsunit_of_measurement["English"] = array();
	$fieldToolTipsunit_of_measurement["English"] = array();
	$placeHoldersunit_of_measurement["English"] = array();
	$pageTitlesunit_of_measurement["English"] = array();
	$fieldLabelsunit_of_measurement["English"]["uom_id"] = "Uom Id";
	$fieldToolTipsunit_of_measurement["English"]["uom_id"] = "";
	$placeHoldersunit_of_measurement["English"]["uom_id"] = "";
	$fieldLabelsunit_of_measurement["English"]["uom_name"] = "Uom Name";
	$fieldToolTipsunit_of_measurement["English"]["uom_name"] = "";
	$placeHoldersunit_of_measurement["English"]["uom_name"] = "";
	if (count($fieldToolTipsunit_of_measurement["English"]))
		$tdataunit_of_measurement[".isUseToolTips"] = true;
}


	$tdataunit_of_measurement[".NCSearch"] = true;



$tdataunit_of_measurement[".shortTableName"] = "unit_of_measurement";
$tdataunit_of_measurement[".nSecOptions"] = 0;

$tdataunit_of_measurement[".mainTableOwnerID"] = "";
$tdataunit_of_measurement[".entityType"] = 0;
$tdataunit_of_measurement[".connId"] = "lifebox_mesystem_at_localhost";


$tdataunit_of_measurement[".strOriginalTableName"] = "public.unit_of_measurement";

	



$tdataunit_of_measurement[".showAddInPopup"] = false;

$tdataunit_of_measurement[".showEditInPopup"] = false;

$tdataunit_of_measurement[".showViewInPopup"] = false;

$tdataunit_of_measurement[".listAjax"] = false;
//	temporary
//$tdataunit_of_measurement[".listAjax"] = false;

	$tdataunit_of_measurement[".audit"] = false;

	$tdataunit_of_measurement[".locking"] = false;


$pages = $tdataunit_of_measurement[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataunit_of_measurement[".edit"] = true;
	$tdataunit_of_measurement[".afterEditAction"] = 1;
	$tdataunit_of_measurement[".closePopupAfterEdit"] = 1;
	$tdataunit_of_measurement[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataunit_of_measurement[".add"] = true;
$tdataunit_of_measurement[".afterAddAction"] = 1;
$tdataunit_of_measurement[".closePopupAfterAdd"] = 1;
$tdataunit_of_measurement[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataunit_of_measurement[".list"] = true;
}



$tdataunit_of_measurement[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataunit_of_measurement[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataunit_of_measurement[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataunit_of_measurement[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataunit_of_measurement[".printFriendly"] = true;
}



$tdataunit_of_measurement[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataunit_of_measurement[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataunit_of_measurement[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataunit_of_measurement[".isUseAjaxSuggest"] = true;



			

$tdataunit_of_measurement[".ajaxCodeSnippetAdded"] = false;

$tdataunit_of_measurement[".buttonsAdded"] = false;

$tdataunit_of_measurement[".addPageEvents"] = false;

// use timepicker for search panel
$tdataunit_of_measurement[".isUseTimeForSearch"] = false;


$tdataunit_of_measurement[".badgeColor"] = "D2AF80";


$tdataunit_of_measurement[".allSearchFields"] = array();
$tdataunit_of_measurement[".filterFields"] = array();
$tdataunit_of_measurement[".requiredSearchFields"] = array();

$tdataunit_of_measurement[".googleLikeFields"] = array();
$tdataunit_of_measurement[".googleLikeFields"][] = "uom_id";
$tdataunit_of_measurement[".googleLikeFields"][] = "uom_name";



$tdataunit_of_measurement[".tableType"] = "list";

$tdataunit_of_measurement[".printerPageOrientation"] = 0;
$tdataunit_of_measurement[".nPrinterPageScale"] = 100;

$tdataunit_of_measurement[".nPrinterSplitRecords"] = 40;

$tdataunit_of_measurement[".geocodingEnabled"] = false;










$tdataunit_of_measurement[".pageSize"] = 20;

$tdataunit_of_measurement[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataunit_of_measurement[".strOrderBy"] = $tstrOrderBy;

$tdataunit_of_measurement[".orderindexes"] = array();


$tdataunit_of_measurement[".sqlHead"] = "SELECT uom_id,  	uom_name";
$tdataunit_of_measurement[".sqlFrom"] = "FROM \"public\".unit_of_measurement";
$tdataunit_of_measurement[".sqlWhereExpr"] = "";
$tdataunit_of_measurement[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataunit_of_measurement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataunit_of_measurement[".arrGroupsPerPage"] = $arrGPP;

$tdataunit_of_measurement[".highlightSearchResults"] = true;

$tableKeysunit_of_measurement = array();
$tableKeysunit_of_measurement[] = "uom_id";
$tdataunit_of_measurement[".Keys"] = $tableKeysunit_of_measurement;


$tdataunit_of_measurement[".hideMobileList"] = array();




//	uom_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "uom_id";
	$fdata["GoodName"] = "uom_id";
	$fdata["ownerTable"] = "public.unit_of_measurement";
	$fdata["Label"] = GetFieldLabel("public_unit_of_measurement","uom_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "uom_id";

		$fdata["sourceSingle"] = "uom_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uom_id";

	
	
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


	$tdataunit_of_measurement["uom_id"] = $fdata;
		$tdataunit_of_measurement[".searchableFields"][] = "uom_id";
//	uom_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "uom_name";
	$fdata["GoodName"] = "uom_name";
	$fdata["ownerTable"] = "public.unit_of_measurement";
	$fdata["Label"] = GetFieldLabel("public_unit_of_measurement","uom_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uom_name";

		$fdata["sourceSingle"] = "uom_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uom_name";

	
	
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


	$tdataunit_of_measurement["uom_name"] = $fdata;
		$tdataunit_of_measurement[".searchableFields"][] = "uom_name";


$tables_data["public.unit_of_measurement"]=&$tdataunit_of_measurement;
$field_labels["public_unit_of_measurement"] = &$fieldLabelsunit_of_measurement;
$fieldToolTips["public_unit_of_measurement"] = &$fieldToolTipsunit_of_measurement;
$placeHolders["public_unit_of_measurement"] = &$placeHoldersunit_of_measurement;
$page_titles["public_unit_of_measurement"] = &$pageTitlesunit_of_measurement;


changeTextControlsToDate( "public.unit_of_measurement" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.unit_of_measurement"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.unit_of_measurement"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_unit_of_measurement()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "uom_id,  	uom_name";
$proto0["m_strFrom"] = "FROM \"public\".unit_of_measurement";
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
	"m_strName" => "uom_id",
	"m_strTable" => "public.unit_of_measurement",
	"m_srcTableName" => "public.unit_of_measurement"
));

$proto6["m_sql"] = "uom_id";
$proto6["m_srcTableName"] = "public.unit_of_measurement";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "uom_name",
	"m_strTable" => "public.unit_of_measurement",
	"m_srcTableName" => "public.unit_of_measurement"
));

$proto8["m_sql"] = "uom_name";
$proto8["m_srcTableName"] = "public.unit_of_measurement";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.unit_of_measurement";
$proto11["m_srcTableName"] = "public.unit_of_measurement";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "uom_id";
$proto11["m_columns"][] = "uom_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".unit_of_measurement";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.unit_of_measurement";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.unit_of_measurement";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_unit_of_measurement = createSqlQuery_unit_of_measurement();


	
				;

		

$tdataunit_of_measurement[".sqlquery"] = $queryData_unit_of_measurement;



$tdataunit_of_measurement[".hasEvents"] = false;

?>