<?php
$tdatatraining_trainers = array();
$tdatatraining_trainers[".searchableFields"] = array();
$tdatatraining_trainers[".ShortName"] = "training_trainers";
$tdatatraining_trainers[".OwnerID"] = "";
$tdatatraining_trainers[".OriginalTable"] = "public.training_trainers";


$tdatatraining_trainers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_trainers[".originalPagesByType"] = $tdatatraining_trainers[".pagesByType"];
$tdatatraining_trainers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_trainers[".originalPages"] = $tdatatraining_trainers[".pages"];
$tdatatraining_trainers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_trainers[".originalDefaultPages"] = $tdatatraining_trainers[".defaultPages"];

//	field labels
$fieldLabelstraining_trainers = array();
$fieldToolTipstraining_trainers = array();
$pageTitlestraining_trainers = array();
$placeHolderstraining_trainers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_trainers["English"] = array();
	$fieldToolTipstraining_trainers["English"] = array();
	$placeHolderstraining_trainers["English"] = array();
	$pageTitlestraining_trainers["English"] = array();
	$fieldLabelstraining_trainers["English"]["training_trainer_id"] = "Training Trainer Id";
	$fieldToolTipstraining_trainers["English"]["training_trainer_id"] = "";
	$placeHolderstraining_trainers["English"]["training_trainer_id"] = "";
	$fieldLabelstraining_trainers["English"]["training_id"] = "Training Session";
	$fieldToolTipstraining_trainers["English"]["training_id"] = "";
	$placeHolderstraining_trainers["English"]["training_id"] = "";
	$fieldLabelstraining_trainers["English"]["trainer_id"] = "Assigned Trainer";
	$fieldToolTipstraining_trainers["English"]["trainer_id"] = "";
	$placeHolderstraining_trainers["English"]["trainer_id"] = "";
	$fieldLabelstraining_trainers["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_trainers["English"]["created_at"] = "";
	$placeHolderstraining_trainers["English"]["created_at"] = "";
	if (count($fieldToolTipstraining_trainers["English"]))
		$tdatatraining_trainers[".isUseToolTips"] = true;
}


	$tdatatraining_trainers[".NCSearch"] = true;



$tdatatraining_trainers[".shortTableName"] = "training_trainers";
$tdatatraining_trainers[".nSecOptions"] = 0;

$tdatatraining_trainers[".mainTableOwnerID"] = "";
$tdatatraining_trainers[".entityType"] = 0;
$tdatatraining_trainers[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_trainers[".strOriginalTableName"] = "public.training_trainers";

	



$tdatatraining_trainers[".showAddInPopup"] = false;

$tdatatraining_trainers[".showEditInPopup"] = false;

$tdatatraining_trainers[".showViewInPopup"] = false;

$tdatatraining_trainers[".listAjax"] = false;
//	temporary
//$tdatatraining_trainers[".listAjax"] = false;

	$tdatatraining_trainers[".audit"] = false;

	$tdatatraining_trainers[".locking"] = false;


$pages = $tdatatraining_trainers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_trainers[".edit"] = true;
	$tdatatraining_trainers[".afterEditAction"] = 1;
	$tdatatraining_trainers[".closePopupAfterEdit"] = 1;
	$tdatatraining_trainers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_trainers[".add"] = true;
$tdatatraining_trainers[".afterAddAction"] = 1;
$tdatatraining_trainers[".closePopupAfterAdd"] = 1;
$tdatatraining_trainers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_trainers[".list"] = true;
}



$tdatatraining_trainers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_trainers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_trainers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_trainers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_trainers[".printFriendly"] = true;
}



$tdatatraining_trainers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_trainers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_trainers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_trainers[".isUseAjaxSuggest"] = true;





$tdatatraining_trainers[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_trainers[".buttonsAdded"] = false;

$tdatatraining_trainers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_trainers[".isUseTimeForSearch"] = false;


$tdatatraining_trainers[".badgeColor"] = "008B8B";


$tdatatraining_trainers[".allSearchFields"] = array();
$tdatatraining_trainers[".filterFields"] = array();
$tdatatraining_trainers[".requiredSearchFields"] = array();

$tdatatraining_trainers[".googleLikeFields"] = array();
$tdatatraining_trainers[".googleLikeFields"][] = "training_trainer_id";
$tdatatraining_trainers[".googleLikeFields"][] = "training_id";
$tdatatraining_trainers[".googleLikeFields"][] = "trainer_id";
$tdatatraining_trainers[".googleLikeFields"][] = "created_at";



$tdatatraining_trainers[".tableType"] = "list";

$tdatatraining_trainers[".printerPageOrientation"] = 0;
$tdatatraining_trainers[".nPrinterPageScale"] = 100;

$tdatatraining_trainers[".nPrinterSplitRecords"] = 40;

$tdatatraining_trainers[".geocodingEnabled"] = false;










$tdatatraining_trainers[".pageSize"] = 20;

$tdatatraining_trainers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_trainers[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_trainers[".orderindexes"] = array();


$tdatatraining_trainers[".sqlHead"] = "SELECT training_trainer_id,  	training_id,  	trainer_id,  	created_at";
$tdatatraining_trainers[".sqlFrom"] = "FROM \"public\".training_trainers";
$tdatatraining_trainers[".sqlWhereExpr"] = "";
$tdatatraining_trainers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_trainers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_trainers[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_trainers[".highlightSearchResults"] = true;

$tableKeystraining_trainers = array();
$tableKeystraining_trainers[] = "training_trainer_id";
$tdatatraining_trainers[".Keys"] = $tableKeystraining_trainers;


$tdatatraining_trainers[".hideMobileList"] = array();




//	training_trainer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_trainer_id";
	$fdata["GoodName"] = "training_trainer_id";
	$fdata["ownerTable"] = "public.training_trainers";
	$fdata["Label"] = GetFieldLabel("public_training_trainers","training_trainer_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "training_trainer_id";

		$fdata["sourceSingle"] = "training_trainer_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_trainer_id";

	
	
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


	$tdatatraining_trainers["training_trainer_id"] = $fdata;
		$tdatatraining_trainers[".searchableFields"][] = "training_trainer_id";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_trainers";
	$fdata["Label"] = GetFieldLabel("public_training_trainers","training_id");
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


	$tdatatraining_trainers["training_id"] = $fdata;
		$tdatatraining_trainers[".searchableFields"][] = "training_id";
//	trainer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trainer_id";
	$fdata["GoodName"] = "trainer_id";
	$fdata["ownerTable"] = "public.training_trainers";
	$fdata["Label"] = GetFieldLabel("public_training_trainers","trainer_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "trainer_id";

		$fdata["sourceSingle"] = "trainer_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trainer_id";

	
	
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
	$edata["LookupTable"] = "public.trainers";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "trainer_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "trainer_details";

	

	
	$edata["LookupOrderBy"] = "first_name";

		$edata["LookupDesc"] = true;

	
	
	

	
	
	
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


	$tdatatraining_trainers["trainer_id"] = $fdata;
		$tdatatraining_trainers[".searchableFields"][] = "trainer_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_trainers";
	$fdata["Label"] = GetFieldLabel("public_training_trainers","created_at");
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


	$tdatatraining_trainers["created_at"] = $fdata;
		$tdatatraining_trainers[".searchableFields"][] = "created_at";


$tables_data["public.training_trainers"]=&$tdatatraining_trainers;
$field_labels["public_training_trainers"] = &$fieldLabelstraining_trainers;
$fieldToolTips["public_training_trainers"] = &$fieldToolTipstraining_trainers;
$placeHolders["public_training_trainers"] = &$placeHolderstraining_trainers;
$page_titles["public_training_trainers"] = &$pageTitlestraining_trainers;


changeTextControlsToDate( "public.training_trainers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_trainers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_trainers"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_sessions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_sessions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_sessions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_trainers"][0] = $masterParams;
				$masterTablesData["public.training_trainers"][0]["masterKeys"] = array();
	$masterTablesData["public.training_trainers"][0]["masterKeys"][]="training_id";
				$masterTablesData["public.training_trainers"][0]["detailKeys"] = array();
	$masterTablesData["public.training_trainers"][0]["detailKeys"][]="training_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.trainers";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.trainers";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "trainers";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_trainers"][1] = $masterParams;
				$masterTablesData["public.training_trainers"][1]["masterKeys"] = array();
	$masterTablesData["public.training_trainers"][1]["masterKeys"][]="trainer_id";
				$masterTablesData["public.training_trainers"][1]["detailKeys"] = array();
	$masterTablesData["public.training_trainers"][1]["detailKeys"][]="trainer_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_trainers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "training_trainer_id,  	training_id,  	trainer_id,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".training_trainers";
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
	"m_strName" => "training_trainer_id",
	"m_strTable" => "public.training_trainers",
	"m_srcTableName" => "public.training_trainers"
));

$proto6["m_sql"] = "training_trainer_id";
$proto6["m_srcTableName"] = "public.training_trainers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.training_trainers",
	"m_srcTableName" => "public.training_trainers"
));

$proto8["m_sql"] = "training_id";
$proto8["m_srcTableName"] = "public.training_trainers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "trainer_id",
	"m_strTable" => "public.training_trainers",
	"m_srcTableName" => "public.training_trainers"
));

$proto10["m_sql"] = "trainer_id";
$proto10["m_srcTableName"] = "public.training_trainers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_trainers",
	"m_srcTableName" => "public.training_trainers"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.training_trainers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.training_trainers";
$proto15["m_srcTableName"] = "public.training_trainers";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "training_trainer_id";
$proto15["m_columns"][] = "training_id";
$proto15["m_columns"][] = "trainer_id";
$proto15["m_columns"][] = "created_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".training_trainers";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.training_trainers";
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
$proto0["m_srcTableName"]="public.training_trainers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_trainers = createSqlQuery_training_trainers();


	
		;

				

$tdatatraining_trainers[".sqlquery"] = $queryData_training_trainers;



$tdatatraining_trainers[".hasEvents"] = false;

?>