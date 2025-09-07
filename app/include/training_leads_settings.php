<?php
$tdatatraining_leads = array();
$tdatatraining_leads[".searchableFields"] = array();
$tdatatraining_leads[".ShortName"] = "training_leads";
$tdatatraining_leads[".OwnerID"] = "";
$tdatatraining_leads[".OriginalTable"] = "public.training_leads";


$tdatatraining_leads[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_leads[".originalPagesByType"] = $tdatatraining_leads[".pagesByType"];
$tdatatraining_leads[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_leads[".originalPages"] = $tdatatraining_leads[".pages"];
$tdatatraining_leads[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_leads[".originalDefaultPages"] = $tdatatraining_leads[".defaultPages"];

//	field labels
$fieldLabelstraining_leads = array();
$fieldToolTipstraining_leads = array();
$pageTitlestraining_leads = array();
$placeHolderstraining_leads = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_leads["English"] = array();
	$fieldToolTipstraining_leads["English"] = array();
	$placeHolderstraining_leads["English"] = array();
	$pageTitlestraining_leads["English"] = array();
	$fieldLabelstraining_leads["English"]["training_lead_id"] = "Training Lead Id";
	$fieldToolTipstraining_leads["English"]["training_lead_id"] = "";
	$placeHolderstraining_leads["English"]["training_lead_id"] = "";
	$fieldLabelstraining_leads["English"]["training_id"] = "Training Session";
	$fieldToolTipstraining_leads["English"]["training_id"] = "";
	$placeHolderstraining_leads["English"]["training_id"] = "";
	$fieldLabelstraining_leads["English"]["staff_id"] = "Lifebox Staff";
	$fieldToolTipstraining_leads["English"]["staff_id"] = "";
	$placeHolderstraining_leads["English"]["staff_id"] = "";
	$fieldLabelstraining_leads["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_leads["English"]["created_at"] = "";
	$placeHolderstraining_leads["English"]["created_at"] = "";
	if (count($fieldToolTipstraining_leads["English"]))
		$tdatatraining_leads[".isUseToolTips"] = true;
}


	$tdatatraining_leads[".NCSearch"] = true;



$tdatatraining_leads[".shortTableName"] = "training_leads";
$tdatatraining_leads[".nSecOptions"] = 0;

$tdatatraining_leads[".mainTableOwnerID"] = "";
$tdatatraining_leads[".entityType"] = 0;
$tdatatraining_leads[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_leads[".strOriginalTableName"] = "public.training_leads";

	



$tdatatraining_leads[".showAddInPopup"] = false;

$tdatatraining_leads[".showEditInPopup"] = false;

$tdatatraining_leads[".showViewInPopup"] = false;

$tdatatraining_leads[".listAjax"] = false;
//	temporary
//$tdatatraining_leads[".listAjax"] = false;

	$tdatatraining_leads[".audit"] = true;

	$tdatatraining_leads[".locking"] = false;


$pages = $tdatatraining_leads[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_leads[".edit"] = true;
	$tdatatraining_leads[".afterEditAction"] = 1;
	$tdatatraining_leads[".closePopupAfterEdit"] = 1;
	$tdatatraining_leads[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_leads[".add"] = true;
$tdatatraining_leads[".afterAddAction"] = 1;
$tdatatraining_leads[".closePopupAfterAdd"] = 1;
$tdatatraining_leads[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_leads[".list"] = true;
}



$tdatatraining_leads[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_leads[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_leads[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_leads[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_leads[".printFriendly"] = true;
}



$tdatatraining_leads[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_leads[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_leads[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_leads[".isUseAjaxSuggest"] = true;





$tdatatraining_leads[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_leads[".buttonsAdded"] = false;

$tdatatraining_leads[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_leads[".isUseTimeForSearch"] = false;


$tdatatraining_leads[".badgeColor"] = "4169E1";


$tdatatraining_leads[".allSearchFields"] = array();
$tdatatraining_leads[".filterFields"] = array();
$tdatatraining_leads[".requiredSearchFields"] = array();

$tdatatraining_leads[".googleLikeFields"] = array();
$tdatatraining_leads[".googleLikeFields"][] = "training_lead_id";
$tdatatraining_leads[".googleLikeFields"][] = "training_id";
$tdatatraining_leads[".googleLikeFields"][] = "staff_id";
$tdatatraining_leads[".googleLikeFields"][] = "created_at";



$tdatatraining_leads[".tableType"] = "list";

$tdatatraining_leads[".printerPageOrientation"] = 0;
$tdatatraining_leads[".nPrinterPageScale"] = 100;

$tdatatraining_leads[".nPrinterSplitRecords"] = 40;

$tdatatraining_leads[".geocodingEnabled"] = false;










$tdatatraining_leads[".pageSize"] = 20;

$tdatatraining_leads[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_leads[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_leads[".orderindexes"] = array();


$tdatatraining_leads[".sqlHead"] = "SELECT training_lead_id,  	training_id,  	staff_id,  	created_at";
$tdatatraining_leads[".sqlFrom"] = "FROM \"public\".training_leads";
$tdatatraining_leads[".sqlWhereExpr"] = "";
$tdatatraining_leads[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_leads[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_leads[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_leads[".highlightSearchResults"] = true;

$tableKeystraining_leads = array();
$tableKeystraining_leads[] = "training_lead_id";
$tdatatraining_leads[".Keys"] = $tableKeystraining_leads;


$tdatatraining_leads[".hideMobileList"] = array();




//	training_lead_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_lead_id";
	$fdata["GoodName"] = "training_lead_id";
	$fdata["ownerTable"] = "public.training_leads";
	$fdata["Label"] = GetFieldLabel("public_training_leads","training_lead_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "training_lead_id";

		$fdata["sourceSingle"] = "training_lead_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_lead_id";

	
	
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


	$tdatatraining_leads["training_lead_id"] = $fdata;
		$tdatatraining_leads[".searchableFields"][] = "training_lead_id";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_leads";
	$fdata["Label"] = GetFieldLabel("public_training_leads","training_id");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "training_details";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatatraining_leads["training_id"] = $fdata;
		$tdatatraining_leads[".searchableFields"][] = "training_id";
//	staff_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "staff_id";
	$fdata["GoodName"] = "staff_id";
	$fdata["ownerTable"] = "public.training_leads";
	$fdata["Label"] = GetFieldLabel("public_training_leads","staff_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "staff_id";

		$fdata["sourceSingle"] = "staff_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staff_id";

	
	
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
	$edata["LookupTable"] = "public.lifebox_staff";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "lifebox_staff_details";

	

	
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


	$tdatatraining_leads["staff_id"] = $fdata;
		$tdatatraining_leads[".searchableFields"][] = "staff_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_leads";
	$fdata["Label"] = GetFieldLabel("public_training_leads","created_at");
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


	$tdatatraining_leads["created_at"] = $fdata;
		$tdatatraining_leads[".searchableFields"][] = "created_at";


$tables_data["public.training_leads"]=&$tdatatraining_leads;
$field_labels["public_training_leads"] = &$fieldLabelstraining_leads;
$fieldToolTips["public_training_leads"] = &$fieldToolTipstraining_leads;
$placeHolders["public_training_leads"] = &$placeHolderstraining_leads;
$page_titles["public_training_leads"] = &$pageTitlestraining_leads;


changeTextControlsToDate( "public.training_leads" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_leads"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_leads"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.lifebox_staff";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.lifebox_staff";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lifebox_staff";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_leads"][0] = $masterParams;
				$masterTablesData["public.training_leads"][0]["masterKeys"] = array();
	$masterTablesData["public.training_leads"][0]["masterKeys"][]="staff_id";
				$masterTablesData["public.training_leads"][0]["detailKeys"] = array();
	$masterTablesData["public.training_leads"][0]["detailKeys"][]="staff_id";
		
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
					$masterTablesData["public.training_leads"][1] = $masterParams;
				$masterTablesData["public.training_leads"][1]["masterKeys"] = array();
	$masterTablesData["public.training_leads"][1]["masterKeys"][]="training_id";
				$masterTablesData["public.training_leads"][1]["detailKeys"] = array();
	$masterTablesData["public.training_leads"][1]["detailKeys"][]="training_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_leads()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "training_lead_id,  	training_id,  	staff_id,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".training_leads";
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
	"m_strName" => "training_lead_id",
	"m_strTable" => "public.training_leads",
	"m_srcTableName" => "public.training_leads"
));

$proto6["m_sql"] = "training_lead_id";
$proto6["m_srcTableName"] = "public.training_leads";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.training_leads",
	"m_srcTableName" => "public.training_leads"
));

$proto8["m_sql"] = "training_id";
$proto8["m_srcTableName"] = "public.training_leads";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "staff_id",
	"m_strTable" => "public.training_leads",
	"m_srcTableName" => "public.training_leads"
));

$proto10["m_sql"] = "staff_id";
$proto10["m_srcTableName"] = "public.training_leads";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_leads",
	"m_srcTableName" => "public.training_leads"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.training_leads";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.training_leads";
$proto15["m_srcTableName"] = "public.training_leads";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "training_lead_id";
$proto15["m_columns"][] = "training_id";
$proto15["m_columns"][] = "staff_id";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".training_leads";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.training_leads";
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
$proto0["m_srcTableName"]="public.training_leads";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_leads = createSqlQuery_training_leads();


	
				;

				

$tdatatraining_leads[".sqlquery"] = $queryData_training_leads;



$tdatatraining_leads[".hasEvents"] = false;

?>