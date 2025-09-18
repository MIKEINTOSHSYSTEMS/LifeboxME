<?php
$tdataprocedures = array();
$tdataprocedures[".searchableFields"] = array();
$tdataprocedures[".ShortName"] = "procedures";
$tdataprocedures[".OwnerID"] = "";
$tdataprocedures[".OriginalTable"] = "public.procedures";


$tdataprocedures[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprocedures[".originalPagesByType"] = $tdataprocedures[".pagesByType"];
$tdataprocedures[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprocedures[".originalPages"] = $tdataprocedures[".pages"];
$tdataprocedures[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprocedures[".originalDefaultPages"] = $tdataprocedures[".defaultPages"];

//	field labels
$fieldLabelsprocedures = array();
$fieldToolTipsprocedures = array();
$pageTitlesprocedures = array();
$placeHoldersprocedures = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprocedures["English"] = array();
	$fieldToolTipsprocedures["English"] = array();
	$placeHoldersprocedures["English"] = array();
	$pageTitlesprocedures["English"] = array();
	$fieldLabelsprocedures["English"]["procedure_id"] = "Procedure Id";
	$fieldToolTipsprocedures["English"]["procedure_id"] = "";
	$placeHoldersprocedures["English"]["procedure_id"] = "";
	$fieldLabelsprocedures["English"]["procedure_name"] = "Procedure Name";
	$fieldToolTipsprocedures["English"]["procedure_name"] = "";
	$placeHoldersprocedures["English"]["procedure_name"] = "";
	$fieldLabelsprocedures["English"]["procedure_category"] = "Procedure Category";
	$fieldToolTipsprocedures["English"]["procedure_category"] = "";
	$placeHoldersprocedures["English"]["procedure_category"] = "";
	$fieldLabelsprocedures["English"]["description"] = "Description";
	$fieldToolTipsprocedures["English"]["description"] = "";
	$placeHoldersprocedures["English"]["description"] = "";
	$fieldLabelsprocedures["English"]["created_at"] = "Created At";
	$fieldToolTipsprocedures["English"]["created_at"] = "";
	$placeHoldersprocedures["English"]["created_at"] = "";
	if (count($fieldToolTipsprocedures["English"]))
		$tdataprocedures[".isUseToolTips"] = true;
}


	$tdataprocedures[".NCSearch"] = true;



$tdataprocedures[".shortTableName"] = "procedures";
$tdataprocedures[".nSecOptions"] = 0;

$tdataprocedures[".mainTableOwnerID"] = "";
$tdataprocedures[".entityType"] = 0;
$tdataprocedures[".connId"] = "lifebox_mesystem_at_localhost";


$tdataprocedures[".strOriginalTableName"] = "public.procedures";

	



$tdataprocedures[".showAddInPopup"] = false;

$tdataprocedures[".showEditInPopup"] = false;

$tdataprocedures[".showViewInPopup"] = false;

$tdataprocedures[".listAjax"] = false;
//	temporary
//$tdataprocedures[".listAjax"] = false;

	$tdataprocedures[".audit"] = true;

	$tdataprocedures[".locking"] = false;


$pages = $tdataprocedures[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocedures[".edit"] = true;
	$tdataprocedures[".afterEditAction"] = 1;
	$tdataprocedures[".closePopupAfterEdit"] = 1;
	$tdataprocedures[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocedures[".add"] = true;
$tdataprocedures[".afterAddAction"] = 1;
$tdataprocedures[".closePopupAfterAdd"] = 1;
$tdataprocedures[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocedures[".list"] = true;
}



$tdataprocedures[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocedures[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocedures[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocedures[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocedures[".printFriendly"] = true;
}



$tdataprocedures[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocedures[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocedures[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocedures[".isUseAjaxSuggest"] = true;



			

$tdataprocedures[".ajaxCodeSnippetAdded"] = false;

$tdataprocedures[".buttonsAdded"] = false;

$tdataprocedures[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocedures[".isUseTimeForSearch"] = false;


$tdataprocedures[".badgeColor"] = "EDCA00";


$tdataprocedures[".allSearchFields"] = array();
$tdataprocedures[".filterFields"] = array();
$tdataprocedures[".requiredSearchFields"] = array();

$tdataprocedures[".googleLikeFields"] = array();
$tdataprocedures[".googleLikeFields"][] = "procedure_id";
$tdataprocedures[".googleLikeFields"][] = "procedure_name";
$tdataprocedures[".googleLikeFields"][] = "procedure_category";
$tdataprocedures[".googleLikeFields"][] = "description";
$tdataprocedures[".googleLikeFields"][] = "created_at";



$tdataprocedures[".tableType"] = "list";

$tdataprocedures[".printerPageOrientation"] = 0;
$tdataprocedures[".nPrinterPageScale"] = 100;

$tdataprocedures[".nPrinterSplitRecords"] = 40;

$tdataprocedures[".geocodingEnabled"] = false;










$tdataprocedures[".pageSize"] = 20;

$tdataprocedures[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprocedures[".strOrderBy"] = $tstrOrderBy;

$tdataprocedures[".orderindexes"] = array();


$tdataprocedures[".sqlHead"] = "SELECT procedure_id,  	procedure_name,  	procedure_category,  	description,  	created_at";
$tdataprocedures[".sqlFrom"] = "FROM \"public\".procedures";
$tdataprocedures[".sqlWhereExpr"] = "";
$tdataprocedures[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocedures[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocedures[".arrGroupsPerPage"] = $arrGPP;

$tdataprocedures[".highlightSearchResults"] = true;

$tableKeysprocedures = array();
$tableKeysprocedures[] = "procedure_id";
$tdataprocedures[".Keys"] = $tableKeysprocedures;


$tdataprocedures[".hideMobileList"] = array();




//	procedure_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "procedure_id";
	$fdata["GoodName"] = "procedure_id";
	$fdata["ownerTable"] = "public.procedures";
	$fdata["Label"] = GetFieldLabel("public_procedures","procedure_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "procedure_id";

		$fdata["sourceSingle"] = "procedure_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedure_id";

	
	
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


	$tdataprocedures["procedure_id"] = $fdata;
		$tdataprocedures[".searchableFields"][] = "procedure_id";
//	procedure_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "procedure_name";
	$fdata["GoodName"] = "procedure_name";
	$fdata["ownerTable"] = "public.procedures";
	$fdata["Label"] = GetFieldLabel("public_procedures","procedure_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "procedure_name";

		$fdata["sourceSingle"] = "procedure_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedure_name";

	
	
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


	$tdataprocedures["procedure_name"] = $fdata;
		$tdataprocedures[".searchableFields"][] = "procedure_name";
//	procedure_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "procedure_category";
	$fdata["GoodName"] = "procedure_category";
	$fdata["ownerTable"] = "public.procedures";
	$fdata["Label"] = GetFieldLabel("public_procedures","procedure_category");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "procedure_category";

		$fdata["sourceSingle"] = "procedure_category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedure_category";

	
	
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


	$tdataprocedures["procedure_category"] = $fdata;
		$tdataprocedures[".searchableFields"][] = "procedure_category";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.procedures";
	$fdata["Label"] = GetFieldLabel("public_procedures","description");
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


	$tdataprocedures["description"] = $fdata;
		$tdataprocedures[".searchableFields"][] = "description";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.procedures";
	$fdata["Label"] = GetFieldLabel("public_procedures","created_at");
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


	$tdataprocedures["created_at"] = $fdata;
		$tdataprocedures[".searchableFields"][] = "created_at";


$tables_data["public.procedures"]=&$tdataprocedures;
$field_labels["public_procedures"] = &$fieldLabelsprocedures;
$fieldToolTips["public_procedures"] = &$fieldToolTipsprocedures;
$placeHolders["public_procedures"] = &$placeHoldersprocedures;
$page_titles["public_procedures"] = &$pageTitlesprocedures;


changeTextControlsToDate( "public.procedures" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.procedures"] = array();
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


		
	$detailsTablesData["public.procedures"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.procedures"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.procedures"][$dIndex]["masterKeys"][]="procedure_id";

				$detailsTablesData["public.procedures"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.procedures"][$dIndex]["detailKeys"][]="procedure_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.procedures"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_procedures()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "procedure_id,  	procedure_name,  	procedure_category,  	description,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".procedures";
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
	"m_strName" => "procedure_id",
	"m_strTable" => "public.procedures",
	"m_srcTableName" => "public.procedures"
));

$proto6["m_sql"] = "procedure_id";
$proto6["m_srcTableName"] = "public.procedures";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "procedure_name",
	"m_strTable" => "public.procedures",
	"m_srcTableName" => "public.procedures"
));

$proto8["m_sql"] = "procedure_name";
$proto8["m_srcTableName"] = "public.procedures";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "procedure_category",
	"m_strTable" => "public.procedures",
	"m_srcTableName" => "public.procedures"
));

$proto10["m_sql"] = "procedure_category";
$proto10["m_srcTableName"] = "public.procedures";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.procedures",
	"m_srcTableName" => "public.procedures"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "public.procedures";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.procedures",
	"m_srcTableName" => "public.procedures"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.procedures";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.procedures";
$proto17["m_srcTableName"] = "public.procedures";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "procedure_id";
$proto17["m_columns"][] = "procedure_name";
$proto17["m_columns"][] = "procedure_category";
$proto17["m_columns"][] = "description";
$proto17["m_columns"][] = "created_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".procedures";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.procedures";
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
$proto0["m_srcTableName"]="public.procedures";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_procedures = createSqlQuery_procedures();


	
				;

					

$tdataprocedures[".sqlquery"] = $queryData_procedures;



$tdataprocedures[".hasEvents"] = false;

?>