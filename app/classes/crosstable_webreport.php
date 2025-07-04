<?php
$group_sort_y = array();
class CrossTableWebReport
{
	var $tableName;
	var $shortTableName;
	var $col_summary = array();
	var $group_header = array();
	var $rowinfo = array();
	var $total_summary;
	var $xml_array;
	var $is_value_empty;
	var $pageType;
	
	/*
	 *	@type Array
	 *	The list of field aliases from webreports
	 */
	var $arrDBFieldsList = array();
	
	/*
	 *	@type Boolean
	 *	Webreports - true if the report is database table based.
	 */
	var $wrdb = false;
	
	var $index_field_x;
	var $index_field_y;
	
	/**
	 * @type String
	 * The possible values are: "project", "db", "custom"
	 */
	protected $table_type = "project";
	
	/**
	 * An Instance of the 'ProjectSettings' class
	 * @type Object
	 */
	protected $pSet = null;
	
	/**
	 * The selected data field settings packed in an array.
	 * @type Array
	 */
	protected $dataFieldSettings = null;

	/**
	 * The report current data field name
	 */
	protected $dataField = "";
	
	/**
	 * The report current aggregate function
	 */
	protected $dataGroupFunction = "";
	
	/**
	 * An array of table keys
	 * @type Array	 
	 */
	protected $tableKeys = null;
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	protected $sessionPrefix;
	
	/**
	 * The flag indicating if the report
	 * is show on a dashboard
	 */
	protected $dashBased = false;
	
	/**
	 * The dashboard table name
	 */	
	protected $dashTName = "";
	
	protected $groupFieldsData;
	protected $sortFields;
	
	/**
	 * @constructor
	 * @param Array rpt_array
	 * @param String strSQL
	 */
	function __construct($rpt_array, $strSQL)
	{
		global $cman;
		
		$this->xml_array = $rpt_array;

		if( $rpt_array["table_type"] )
			$this->table_type = $rpt_array["table_type"];
			
		$this->wrdb = $rpt_array["wrdb"];
		$this->arrDBFieldsList = $rpt_array["arrDBFieldsList"];
		
		$this->pageType	= $rpt_array["pageType"];
		
		$this->tableName = $this->xml_array["tables"][0];
		$this->setDbConnection();
		
		$this->shortTableName = GetTableURL($this->tableName);
		if( strlen($this->shortTableName) == 0 )
			$this->shortTableName = $this->tableName;
			
		$this->pSet = new ProjectSettings($this->tableName, PAGE_REPORT);
		
		$this->setSessionPrefix( $rpt_array["sessionPrefix"] );
		$this->fillSessionVariables();


		$this->dataField = $this->getDataField( $_SESSION[$this->sessionPrefix."_field"] );
		if( !strlen($this->dataField) )
			$this->dataField = $_SESSION['webreports']['group_fields'][0]["name"];
		
		$this->initDataFieldSettings();
		$this->initDataGroupFunction($_SESSION[$this->sessionPrefix."_group_func"]);
		
				
		// assign index_field_x, index_field_y properties
		$this->setAxisFieldsIndices();

		$fName = $this->getDBFieldName($this->CrossGoodFieldName( $this->dataField ));

		if( $fName != " " )
			$ftype = $this->getFieldType($fName);

		$group_y = array();
		$group_x = array();
		$sort_y = array();
		
		$arrdata = array();
		$arravgsum = array();
		$arravgcount = array();
		
		$avgsumx = array();
		$avgcountx = array();

		$this->groupFieldsData = $rpt_array["group_fields"];
		$this->sortFields = $rpt_array["sort_fields"];
		
		if( is_wr_project() ) {
			$dataSource = getDataSource( $this->tableName );
			$qResult = $dataSource->getTotals( $this->getProjectWRCommand() );			
		} else {
			$crtableSQL = $this->getstrSQL( $strSQL );
			$qResult = $this->connection->query( $crtableSQL );
		}
		
		while( $data = $qResult->fetchNumeric() )
		{
			if( !in_array($data[1], $group_y) )
			{
				$group_y[] = $data[1];
				$sort_y[] = pre8count($sort_y);
			}
			
			if( !in_array($data[2], $group_x) )
			{
				$group_x[] = $data[2];
				$this->col_summary["data"][ pre8count($group_x) - 1 ]["col_summary"] = "&nbsp;";
				$this->col_summary["data"][ pre8count($group_x) - 1 ]["id_col_summary"] = "total_x_".( pre8count($group_x) - 1);
			}
			
			$key_y = array_search( $data[1], $group_y );
			
			$key_x = array_search( $data[2], $group_x );
			
			$avgsumx[ $key_x ] = 0;
			$avgcountx[ $key_x ] = 0;

			if( !$this->is_value_empty )
			{
				$arrdata[ $key_y ][ $key_x ] = $data[0];
				$arravgsum[ $key_y ][ $key_x ] = $data[3];
				$arravgcount[ $key_y ][ $key_x ] = $data[4];
			}
			else
				$arrdata[ $key_y ][ $key_x ] = "&nbsp;";
		}
		
		//	sort y groups
		global $group_sort_y;
		$group_sort_y = $group_y;
		SortForCrosstable($sort_y);
		
		
		foreach($sort_y as $key_y)
		{
			$value_y = $group_y[ $key_y ];
			$this->rowinfo[ $key_y ]["row_summary"] = "&nbsp;";
			$this->rowinfo[ $key_y ]["group_y"] = $this->getAxisDisplayValue($this->index_field_y, $value_y);
			
			foreach($group_x as $key_x => $value_x)
			{
				if( array_key_exists($key_y, $arrdata) )
				{
					$rowValue = "&nbsp;";
					
					if( array_key_exists($key_x, $arrdata[ $key_y ]) && !$this->is_value_empty && !is_null($arrdata[ $key_y ][ $key_x ]) )
					{
						$rowValue = $arrdata[ $key_y ][ $key_x ];
						if( $this->dataGroupFunction == "avg" && !IsTimeType($ftype))
							$rowValue = round($rowValue, 2);
					}
					
					$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["row_value"] = $rowValue;	
					$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["id_data"] = $key_y."_".$key_x;
				}
			}
			$this->rowinfo[ $key_y ]["id_row_summary"] = "total_y_".$key_y;
		}

		foreach($group_x as $key_x => $value_x)
		{
			if($value_x != "")
				$this->group_header["data"][ $key_x ]["gr_value"] = $this->getAxisDisplayValue($this->index_field_x, $value_x);
			else
				$this->group_header["data"][ $key_x ]["gr_value"]="&nbsp;";
		}

		$sum_x = $this->xml_array["group_fields"][ pre8count($this->xml_array["group_fields"]) - 1 ]["sum_x"];
		$sum_y = $this->xml_array["group_fields"][ pre8count($this->xml_array["group_fields"]) - 1 ]["sum_y"];
		$sum_total = $this->xml_array["group_fields"][ pre8count($this->xml_array["group_fields"]) - 1 ]["sum_total"];
		
		$this->total_summary = "&nbsp;";
		foreach($this->rowinfo as $key_y => $obj_y)
		{
			$obj_x = $obj_y["row_record"]["data"];
			foreach($obj_x as $key_x => $value)
			{
				if($value["row_value"] !== "&nbsp;")
				{
					switch($this->dataGroupFunction)
					{
						case "sum":
							if(!is_null($value["row_value"]))
							{
								$this->rowinfo[$key_y]["row_summary"] += $value["row_value"];
								$this->col_summary["data"][$key_x]["col_summary"] += $value["row_value"];
								$this->total_summary += $value["row_value"];
							}
						break;
						case "min":
							if(($this->rowinfo[$key_y]["row_summary"] === "&nbsp;" || $value["row_value"]<$this->rowinfo[$key_y]["row_summary"]) && !is_null($value["row_value"]))
								$this->rowinfo[$key_y]["row_summary"] = $value["row_value"];
							if(($this->col_summary["data"][$key_x]["col_summary"] === "&nbsp;" || $this->col_summary["data"][$key_x]["col_summary"]>$value["row_value"]) && !is_null($value["row_value"]))
								$this->col_summary["data"][$key_x]["col_summary"] = $value["row_value"];
							if(($this->total_summary === "&nbsp;" || $this->total_summary>$value["row_value"]) && !is_null($value["row_value"]))
								$this->total_summary = $value["row_value"];
								
						break;
						case "max":
							if($this->rowinfo[$key_y]["row_summary"] === "&nbsp;" || $value["row_value"]>$this->rowinfo[$key_y]["row_summary"])
								$this->rowinfo[$key_y]["row_summary"] = $value["row_value"];
							if($this->col_summary["data"][$key_x]["col_summary"] === "&nbsp;" || $this->col_summary["data"][$key_x]["col_summary"]<$value["row_value"])								
								$this->col_summary["data"][$key_x]["col_summary"] = $value["row_value"];
							if($this->total_summary === "&nbsp;" || $this->total_summary<$value["row_value"])
								$this->total_summary = $value["row_value"];
						break;
						case "avg":
							$this->rowinfo[$key_y]["avgsumy"] += $arravgsum[$key_y][$key_x];
							$this->rowinfo[$key_y]["avgcounty"] += $arravgcount[$key_y][$key_x];
							$this->rowinfo[$key_y]["row_record"]["data"][$key_x]["avgsumx"] += $arravgsum[$key_y][$key_x];
							$this->rowinfo[$key_y]["row_record"]["data"][$key_x]["avgcountx"] += $arravgcount[$key_y][$key_x];
						break;
					}
					if($sum_x == true && !$this->is_value_empty && !is_null($this->col_summary["data"][$key_x]["col_summary"]))
					{
						if(is_numeric($this->col_summary["data"][$key_x]["col_summary"]))
							$this->col_summary["data"][$key_x]["col_summary"] = round($this->col_summary["data"][$key_x]["col_summary"],2);
					}
					else
						$this->col_summary["data"][$key_x]["col_summary"] = "&nbsp;";
				}
			}
			if($sum_y == true && !$this->is_value_empty && !is_null($this->rowinfo[$key_y]["row_summary"]))
			{
				if(is_numeric($this->rowinfo[$key_y]["row_summary"]))
					$this->rowinfo[$key_y]["row_summary"] = round($this->rowinfo[$key_y]["row_summary"],2);
			}
			else
				$this->rowinfo[$key_y]["row_summary"] = "&nbsp;";
		}
		
		if($this->dataGroupFunction == "avg")
		{
			$total_sum = 0;
			$total_count = 0;
			
			foreach($this->rowinfo as $key_y => $valuey)
			{
				if($valuey["avgcounty"])
				{
					$this->rowinfo[$key_y]["row_summary"] = round($valuey["avgsumy"]/$valuey["avgcounty"],2);
					$total_sum += $valuey["avgsumy"];
					$total_count += $valuey["avgcounty"];
				}
				foreach($valuey["row_record"]["data"] as $key_x => $valuex)
				{
					if($valuex["avgcountx"])
					{
						$avgsumx[$key_x] += $valuex["avgsumx"];
						$avgcountx[$key_x] += $valuex["avgcountx"];
						$total_sum += $valuex["avgsumx"];
						$total_count += $valuex["avgcountx"];
					}
				}
			}
			foreach($avgsumx as $key => $value)
			{
				if($avgcountx[$key])
					$this->col_summary["data"][$key]["col_summary"] = round($value/$avgcountx[$key],2);
			}
			if($total_count)
				$this->total_summary = $total_sum/$total_count;
		}
		
		if( $sum_total != true || $this->is_value_empty )
			$this->total_summary = "&nbsp;";
		elseif( is_numeric($this->total_summary) )
			$this->total_summary = round($this->total_summary,2);
		
		$this->updateRecordsDisplayedFields();
	}
	
	/**
	 * @return DsCommand
	 */
	protected function getProjectWRCommand() {
		$dc = getProjectWRSubsetDataCommand( $this->tableName, $this->sortFields, $this->pSet );
	
		$ftype = $this->pSet->getFieldType( $this->dataField );

		$axis_x = $_SESSION[ $this->sessionPrefix."_gr_x" ];
		$axis_y = $_SESSION[ $this->sessionPrefix."_gr_y" ];	
		
		$xFName = $this->getGroupFieldByParam( "x", $axis_x );
		$yFName = $this->getGroupFieldByParam( "y", $axis_y, $xFName );
		
		$arr = $this->xml_array["group_fields"];
		for( $i = 0; $i < pre8count($arr) - 1; $i++ ) {
			if( $xFName == $arr[$i]["name"] && $this->index_field_x == $i ) {
				$xType = $arr[$i]["int_type"];
				break;
			}
		}

		for( $i = 0; $i < pre8count($arr) - 1; $i++ ) {
			if( $yFName == $arr[$i]["name"] && $this->index_field_y == $i ) {
				$yType = $arr[$i]["int_type"];
				break;
			}
		}	
		
		$xIntervalType = $this->getIntervalTypeByParam( "x", $xFName, $xType );
		$yIntervalType = $this->getIntervalTypeByParam( "y", $yFName, $yType );		
		
		$dc->totals[] = array(
			"field" => $this->dataField,
			"total" => $this->dataGroupFunction,
			"timeToSec" => $this->pSet->getViewFormat( $this->dataField ) == FORMAT_TIME || IsTimeType($ftype)
		);

		$dc->totals[] = array(
			"field" => $yFName,
			"modifier" => $yIntervalType,
			"direction" => $this->getGroupOrderDirection( $yFName )
		);

		$dc->totals[] = array(
			"field" => $xFName,
			"modifier" => $xIntervalType
		);

		if( $this->dataGroupFunction == "avg" && !IsDateFieldType($ftype) ) {
			$dc->totals[] = array(
				"field" => $this->dataField,
				"alias" => "avg_sum",
				"total" => "sum"
			);

			$dc->totals[] = array(
				"field" => $this->dataField,
				"alias" => "avg_count",
				"total" => "count"
			);
		} else {
			$dc->totals[] = array(
				"alias" => "avg_sum",
				"total" => "count"
			);
			$dc->totals[] = array(
				"alias" => "avg_count",
				"total" => "count"
			);
		}

		$BeforeQueryReport = $this->pageType == PAGE_REPORT
			&& tableEventExists("BeforeQueryReport", $this->tableName);
		$BeforeQueryReportPrint = $this->pageType == PAGE_RPRINT
			&& tableEventExists("BeforeQueryReportPrint", $this->tableName);

		if( $BeforeQueryReport || $BeforeQueryReportPrint ) {
			$dataSource = getDataSource( $this->tableName );
			$prep = $dataSource->prepareSQL( $dc );
			$where = $prep["where"];

			$eventObj = getEventObject( $this->tableName );

			if( $BeforeQueryReport )
				$eventObj->BeforeQueryReport( $where );
			else
				$eventObj->BeforeQueryReportPrint( $where );

			if( $where != $prep["where"] )
				$dataSource->overrideWhere( $dc, $where );
		}	
		
		return $dc;	
	}
	
	protected function getGroupOrderDirection( $fName ) {
		$orderIndices =& $this->pSet->getOrderIndexes();	
		$fieldIdx = $this->pSet->getFieldIndex( $fName );
		foreach( $orderIndices as $o ) {
			if( $o[0] == $fieldIdx ) {
				return $o[1];
			}
		}
		return 'ASC';		
	}
	
	protected function getGroupFieldByParam( $axis, $paramField, $otherField = "" )
	{
		$firstField = "";
		foreach( $this->groupFieldsData as $fData )
		{
			if( $fData["group_type"] == "all" || $fData["group_type"] == $axis ) {
				if( $fData["name"] == $paramField )
				{
					return $paramField;
				}
				if( $firstField === "" && (!$otherField || $otherField !== $firstField ))
					$firstField = $fData["name"];
			}
		}
		return $firstField;
	}	
	
	/**
	 * @param String axis
	 * @param String crossName
	 * @param String userIntType
	 * @return Number
	 */
	protected function getIntervalTypeByParam( $axis, $crossName, $userIntType )
	{
		$iType = $this->getRefineIntervalType( $userIntType, $crossName );

		$int_type = -1;
		$intTypes = array();
		foreach( $this->groupFieldsData as $fData )
		{
			if( $fData["name"] == $crossName && ( $fData["group_type"] == "all" || $fData["group_type"] == $axis ) )
			{
				if( !strlen( $userIntType ) || $iType == $fData["int_type"] )
				{
					$int_type = $fData["int_type"];
					break;
				}

				$intTypes[] = $fData["int_type"];
			}
		}

		if( $int_type != -1 )
			return $int_type;

		if( pre8count( $intTypes ) > 0 )
			return $intTypes[0];

		// something went wrong
		return 0;
	}	
	
	/**
	 *
	 */
	protected function getRefineIntervalType( $intType, $fName )
	{
		if( $intType === 0 )
			return "normal";

		$ftype = $this->pSet->getFieldType( $fName );

		if( IsNumberType( $ftype ) )
			return substr( $intType, 1 );

		if( IsCharType( $ftype ) )
			return substr( $intType, strlen("first") );

		if( IsDateFieldType( $ftype ) )
		{
			switch( $intType )
			{
				case "year":
					return 1;
				case "quarter":
					return 2;
				case "month":
					return 3;
				case "week":
					return 4;
				case "day":
					return 5;
				case "hour":
					return 6;
				case "minute":
					return 7;
			}
		}

		return -1;
	}	
	
	/**
	 * Update the records and summaries data basing on 'view as' and 'total' settings 
	 */
	protected function updateRecordsDisplayedFields()
	{		
		if( !pre8count($this->rowinfo) )
			return;
		

		$this->updateWebReportRecordsDisplayedFields();
	}
	
	/**
	 * Apply currency formatting to the data field values and totals (for Web reports only)
	 */
	protected function updateWebReportRecordsDisplayedFields()
	{
		if( $this->dataFieldSettings['curr'] != true )
			return;
			
		foreach($this->rowinfo as $arrkey => $arrfield)
		{
			foreach($arrfield["row_record"]["data"] as $fieldkey => $fieldvalue)
			{
				if( is_numeric($fieldvalue["row_value"]) )
					$this->rowinfo[$arrkey]["row_record"]["data"][$fieldkey]["row_value"] = str_format_currency($fieldvalue["row_value"]);
			}
			
			if( is_numeric($arrfield["row_summary"]) )
				$this->rowinfo[$arrkey]["row_summary"] = str_format_currency($arrfield["row_summary"]);
		}
		
		if( is_numeric($this->total_summary) )
			$this->total_summary = str_format_currency($this->total_summary);
		
		foreach( $this->col_summary["data"] as $arrkey => $arrvalue )
		{
			if(is_numeric($arrvalue["col_summary"]))
				$this->col_summary["data"][$arrkey]["col_summary"] = str_format_currency($arrvalue["col_summary"]);
		}	
	}
	
	/**
	 *
	 */
	protected function setSessionPrefix( $sessionPrefix = "")
	{
		if( $sessionPrefix )
			$this->sessionPrefix = $sessionPrefix;
		else
			$this->sessionPrefix = $this->shortTableName;
	}
	
	/**
	 * Fill a cross-table report's session variable
	 */
	protected function fillSessionVariables()
	{
		if( postvalue("operation") != "" )
			$_SESSION[$this->sessionPrefix."_group_func"] = postvalue("operation");
			
		if( postvalue("field") != "" )
			$_SESSION[$this->sessionPrefix."_field"] = postvalue("field");
			
		if( postvalue("axis_x") != "" )
			$_SESSION[$this->sessionPrefix."_gr_x"] = postvalue("axis_x");
			
		if( postvalue("axis_y") != "" )
			$_SESSION[$this->sessionPrefix."_gr_y"] = postvalue("axis_y");
			
		if( postvalue("rname") != "" )
			$_SESSION[$this->sessionPrefix."_rname"] = postvalue("rname");		
	}
	
	public function getCrossTableData()
	{
		return $this->rowinfo;
	}
	
	public function getCrossTableHeader()
	{
		return $this->group_header;
	}
	
	public function getCrossTableSummary()
	{
		return $this->col_summary;
	}
	
	public function getTotalSummary()
	{
		return $this->total_summary;
	}
	
	/**
	 * Assign index_field_x, index_field_y properties
	 */
	protected function setAxisFieldsIndices()
	{
		$gr_x = $_SESSION[$this->sessionPrefix."_gr_x"];
		$gr_y = $_SESSION[$this->sessionPrefix."_gr_y"];
		
		if( $gr_x == "" )
			$this->index_field_x = $this->getFirstGroupField("x");
		else 
			$this->index_field_x = $gr_x;
		
		if( $gr_y == "" )
			$this->index_field_y = $this->getFirstGroupField("y");
		else
			$this->index_field_y = $gr_y;		
	}	
	
	/**
	 * Assign 'connection' property 
	 */
	 
	protected function setDbConnection()
	{
		global $cman;
		if($this->isProjectDB())
			$this->connection = $cman->byTable( $this->tableName ); //#9875
		else
			$this->connection = $cman->getDefault();
	}	

	/**
	 * Get a report's SQL query string
	 * @param String strSQL		The report table's SQL query
	 * @return String	
	 */
	protected function getstrSQL( $strSQL )
	{
		global $strTableName;
			
		$group_x = $this->getIntervalType( $this->index_field_x );
		$group_y = $this->getIntervalType( $this->index_field_y );

		$fName = $this->getDBFieldName($this->CrossGoodFieldName( $this->dataField ));		
		
		$select_field = "' ', ";
		$avg_func = "";
		if( $fName != " " )
		{	
			$strViewFormat = $this->pSet->getViewFormat( $this->dataField );
			$ftype = $this->getFieldType($fName);
			$isTime = $strViewFormat == FORMAT_TIME || IsTimeType($ftype);
			
			if ( $isTime )
			{
				$select_field = $this->dataGroupFunction."(".$this->connection->timeToSecWrapper($fName)."), ";
			}
			else
			{
				$select_field = $this->dataGroupFunction."(".$this->connection->addFieldWrappers($fName)."), ";
			}
			
			$this->is_value_empty = false;

			if( $this->dataGroupFunction == "avg" && !IsDateFieldType($ftype) )
			{
				$sum_for_avg = !$isTime ? "sum(".$this->connection->addFieldWrappers($fName).")" : "sum(".$this->connection->timeToSecWrapper($fName).")";
				$avg_func = ", " . $sum_for_avg . " as ".$this->connection->addFieldWrappers("avg_sum")
					.", pre8count(".$this->connection->addFieldWrappers($fName).") as ".$this->connection->addFieldWrappers("avg_count");
			}
			else
				$avg_func = ", 1 as ".$this->connection->addFieldWrappers("avg_sum").", 1 as ".$this->connection->addFieldWrappers("avg_count");	
		}
		
		$whereClause = "";

		if( $this->pageType == PAGE_REPORT ) {
			if( tableEventExists("BeforeQueryReport", $strTableName) ) 
			{
				$eventObj = getEventObject($strTableName);
				$eventObj->BeforeQueryReport($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}
		}
		else {
			if( tableEventExists("BeforeQueryReportPrint", $strTableName) ) 
			{
				$eventObj = getEventObject($strTableName);
				$eventObj->BeforeQueryReportPrint($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}
			
		}	

		$gx0 = $this->getDBFieldName($group_x[0]);
		$gx1 = $this->getDBFieldName($group_x[1]);
		$gy0 = $this->getDBFieldName($group_y[0]);
		$gy1 = $this->getDBFieldName($group_y[1]);
		
		$selectClause = "select ".$select_field.$gy0.", ".$gx0. $avg_func;
		$groupByClause = "group by ".$gx1.", ".$gy1;
		$orderByClause = "order by ".$gx1.",".$gy1;
		
		if( $this->connection->dbType != nDATABASE_Oracle )
		{
			if( $this->connection->dbType == nDATABASE_MSSQLServer )
			{
				$pos = strrpos(strtoupper($strSQL), "ORDER BY");
				if( $pos )
					$strSQL = substr($strSQL, 0, $pos);
			}
			return $selectClause." from (".$strSQL.") as cross_table".$whereClause." ".$groupByClause." ".$orderByClause;
		}

		return $selectClause." from (".$strSQL.")".$whereClause." ".$groupByClause." ".$orderByClause;
	}
	
	/**
	 * @param Number index
	 * @return Array
	 */
	protected function getIntervalType($index)
	{
		$field = $this->xml_array["group_fields"][$index]["name"];
		$ftype = $this->getFieldType($field);
		
		$arr = $this->xml_array["group_fields"];
		for($i = 0; $i < pre8count($arr) - 1; $i++)
		{
			if($field == $arr[$i]["name"] && $index == $i)
			{
				$int_type = $arr[$i]["int_type"];
				break;
			}
		}
		
		if( $int_type == 0 ) 
		{
			$wrappedGoodFieldName = $this->connection->addFieldWrappers($this->CrossGoodFieldName($field));
			return array( $wrappedGoodFieldName, $wrappedGoodFieldName );
		}
		
		if( IsNumberType($ftype) )
			return $this->getNumberTypeInterval($field, $int_type);
		
		if( IsCharType( $ftype ) )
			return $this->getCharTypeInterval($field, $int_type);
		
		if( IsDateFieldType( $ftype ) )
			return $this->getDateTypeInterval($field, $int_type);
	}
	
	protected function getDateTypeInterval($field, $int_type)
	{
		$field = $this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) );
		switch( $this->connection->dbType )
		{
			case nDATABASE_MySQL:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("year(".$field.")*10000+0101","YEAR(".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("year(".$field.")*10000+QUARTER(".$field.")*100+1","year(".$field."),QUARTER(".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("year(".$field.")*10000+month(".$field.")*100+1","year(".$field."),month(".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("year(".$field.")*10000+week(".$field.")*100+01","year(".$field."),WEEK(".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("year(".$field.")*10000+month(".$field.")*100+day(".$field.")","year(".$field."),month(".$field."),day(".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("year(".$field.")*1000000+month(".$field.")*10000+day(".$field.")*100+HOUR(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("year(".$field.")*1000000+month(".$field.")*1000000+day(".$field.")*10000+HOUR(".$field.")*100+minute(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field."),minute(".$field.")");
				break;

			case nDATABASE_Oracle:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("TO_CHAR(".$field.", 'YYYY')*10000+0101","TO_CHAR(".$field.", 'YYYY')");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'Q')*100+1","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'Q')");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.".'MM')*100+1","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.".'MM')");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'W')*100+01","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'W')");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'MM')*100+TO_CHAR(".$field.",'DD')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD')");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("TO_CHAR(".$field.", 'YYYY')*1000000+TO_CHAR(".$field.",'MM')*10000+TO_CHAR(".$field.",'DD')*100+TO_CHAR(".$field.",'HH')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD'),TO_CHAR(".$field.",'HH')");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("TO_CHAR(".$field.", 'YYYY')*1000000+TO_CHAR(".$field.",'MM')*1000000+TO_CHAR(".$field.",'DD')*10000+TO_CHAR(".$field.",'HH')*100+TO_CHAR(".$field.",'MI')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD'),TO_CHAR(".$field.",'HH'),TO_CHAR(".$field.",'MI')");
				break;

			case nDATABASE_MSSQLServer:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("datepart(yyyy,".$field.")*10000+0101","datepart(yyyy,".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("datepart(yyyy,".$field.")*10000+datepart(qq,".$field.")*100+1","datepart(yyyy,".$field."),datepart(qq,".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("datepart(yyyy,".$field.")*10000+datepart(mm,".$field.")*100+1","datepart(yyyy,".$field."),datepart(mm,".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("datepart(yyyy,".$field.")*10000+(datepart(ww,".$field.")-1)*100+01","datepart(yyyy,".$field."),datepart(ww,".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("datepart(yyyy,".$field.")*10000+datepart(mm,".$field.")*100+datepart(dd,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("datepart(yyyy,".$field.")*1000000+datepart(mm,".$field.")*10000+datepart(dd,".$field.")*100+datepart(hh,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field."),datepart(hh,".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("datepart(yyyy,".$field.")*1000000+datepart(mm,".$field.")*1000000+datepart(dd,".$field.")*10000+datepart(hh,".$field.")*100+datepart(mi,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field."),datepart(hh,".$field."),datepart(mi,".$field.")");
				break;

			case nDATABASE_Access:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("datepart('yyyy',".$field.")*10000+0101","datepart('yyyy',".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("datepart('yyyy',".$field.")*10000+datepart('q',".$field.")*100+1","datepart('yyyy',".$field."),datepart('q',".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("datepart('yyyy',".$field.")*10000+datepart('m',".$field.")*100+1","datepart('yyyy',".$field."),datepart('m',".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("datepart('yyyy',".$field.")*10000+(datepart('ww',".$field.")-1)*100+01","datepart('yyyy',".$field."),datepart('ww',".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("datepart('yyyy',".$field.")*10000+datepart('m',".$field.")*100+datepart('d',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("datepart('yyyy',".$field.")*1000000+datepart('m',".$field.")*10000+datepart('d',".$field.")*100+datepart('h',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field."),datepart('h',".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("datepart('yyyy',".$field.")*1000000+datepart('m',".$field.")*1000000+datepart('d',".$field.")*10000+datepart('h',".$field.")*100+datepart('n',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field."),datepart('h',".$field."),datepart('n',".$field.")");
				break;

			case nDATABASE_PostgreSQL: 
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("date_part('year',".$field.")*10000+0101","date_part('year',".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("date_part('year',".$field.")*10000+date_part('quarter',".$field.")*100+1","date_part('year',".$field."),date_part('quarter',".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("date_part('year',".$field.")*10000+date_part('month',".$field.")*100+1","date_part('year',".$field."),date_part('month',".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("date_part('year',".$field.")*10000+(date_part('week',".$field.")-1)*100+01","date_part('year',".$field."),date_part('week',".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("date_part('year',".$field.")*10000+date_part('month',".$field.")*100+date_part('days',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("date_part('year',".$field.")*1000000+date_part('month',".$field.")*10000+date_part('days',".$field.")*100+date_part('hour',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field."),date_part('hour',".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("date_part('year',".$field.")*1000000+date_part('month',".$field.")*1000000+date_part('days',".$field.")*10000+date_part('hour',".$field.")*100+date_part('minute',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field."),date_part('hour',".$field."),date_part('minute',".$field.")");
				break;

			case nDATABASE_Informix:
				return "substring(".$field." from 1 for ".$int_type.")"; //fix it!

			case nDATABASE_SQLite3:
				return array($field, $field);
				
			case nDATABASE_DB2: 
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("year(".$field.")*10000+0101","YEAR(".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("year(".$field.")*10000+QUARTER(".$field.")*100+1","year(".$field."),QUARTER(".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("year(".$field.")*10000+month(".$field.")*100+1","year(".$field."),month(".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("year(".$field.")*10000+week(".$field.")*100+01","year(".$field."),WEEK(".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("year(".$field.")*10000+month(".$field.")*100+day(".$field.")","year(".$field."),month(".$field."),day(".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("year(".$field.")*1000000+month(".$field.")*10000+day(".$field.")*100+HOUR(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("year(".$field.")*1000000+month(".$field.")*1000000+day(".$field.")*10000+HOUR(".$field.")*100+minute(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field."),minute(".$field.")");
				break;
		}
	}
	
	protected function getNumberTypeInterval($field, $int_type)
	{
		return array("floor(".$this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) )."/".$int_type.")*".$int_type,
			 "floor(".$this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) )."/".$int_type.")*".$int_type);
	}
	
	/**
	 * @param String field
	 * @param Number int_type
	 * @return Array
	 */
	protected function getCharTypeInterval($field, $int_type)
	{
		$field = $this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) );
		switch( $this->connection->dbType )
		{
			case nDATABASE_MySQL:
			case nDATABASE_MSSQLServer:
			case nDATABASE_Access:
				return array("left(".$field.",".$int_type.")","left(".$field.",".$int_type.")");

			case nDATABASE_PostgreSQL:
			case nDATABASE_Informix:
				return array("substring(".$field." from 1 for ".$int_type.")","substring(".$field." from 1 for ".$int_type.")");

			case nDATABASE_Oracle:
			case nDATABASE_SQLite3:
			case nDATABASE_DB2:
				return array("substr(".$field.",1,".$int_type.")","substr(".$field.",1,".$int_type.")");
		}
	}
	
	/**
	 * @return Array
	 */
	public function getSelectedValue()
	{
		$arr = array();
		$firstarr = array();
		foreach($this->xml_array["totals"] as $key => $value)
		{
			if(pre8count($firstarr) == 0)
				$firstarr[] = $this->FullFieldName($value["name"],$value["table"]);
			if($value["min"] == true || $value["max"] == true || $value["sum"] == true || $value["avg"] == true)
			{
				$arr[] = $this->FullFieldName($value["name"],$value["table"]);
			}
		}
		if(pre8count($arr) == 0)
			$arr = $firstarr;
		return $arr;
	}
	
	/**
	 * 
	 * @param {String} hostPageLocation	(optional)
	 * @param {String} hostPageId (optional)
	 */
	public function getRadioGroupFunctions( $hostPageLocation = "", $hostPageId = "" )
	{
		$arr = array();
		$arrDisplay = array();
		$res = "";
		if($this->dataFieldSettings["sum"] == true)
		{
			$arrDisplay[] = "Sum";
			$arr[] = "sum";
		}
		if($this->dataFieldSettings["max"] == true)
		{
			$arrDisplay[] = "Max";
			$arr[] = "max";
		}
		if($this->dataFieldSettings["min"] == true)
		{
			$arrDisplay[] = "Min";
			$arr[] = "min";
		}
		if($this->dataFieldSettings["avg"] == true)
		{
			$arrDisplay[] = "Average";
			$arr[] = "avg";
		}

		if(!pre8count($arr))
		{
				$arr[] = "sum";
				$arrDisplay[] = "Sum";
		}
		
		$res = "";	
		$onclick = "onclick='refresh_crosstable(\"".$hostPageLocation."\", \"".$hostPageId."\", \"".$this->dashBased."\", \"".$this->dashTName."\");'";
		for($j = 0; $j < pre8count($arr); $j++)
		{
			$s = "";
			if($res == "" || $this->dataGroupFunction == $arr[$j])
				$s = "checked";
				
			$res.= "<input type=radio value='".$arr[$j]."' name=\"group_func".$hostPageId."\" ".$s." ".$onclick."> "
				.$arrDisplay[$j]."&nbsp;&nbsp;";
		}
		return $res;
	}
	
	public function ajax_refresh_crosstable( $hostPageLocation = "", $hostPageId = "" )
	{
		$reportData = array(
			$this->rowinfo,
			$this->col_summary,
			$this->total_summary,
			$this->getTotalsName( $this->dataGroupFunction ),
			$this->getRadioGroupFunctions( $hostPageLocation, $hostPageId )
		);
	
		echo my_json_encode( $reportData );
	}
	
	public function getGroupFields($axis)
	{
		$res = "";
		$label = $this->xml_array["totals"];
		$arr = $this->xml_array["group_fields"];
		for($i = 0; $i < pre8count($arr) - 1; $i++)
		{
			$s = "";
			if($axis == "x" && $arr[$i]["group_type"] == "x" || $axis == "y" && $arr[$i]["group_type"] == "y" || $arr[$i]["group_type"] == "all")
			{
				if($axis == "x" && $this->index_field_y != $i || $axis == "y" && $this->index_field_x != $i)
				{
					if($this->index_field_x == $i && $axis == "x" || $this->index_field_y == $i && $axis == "y")
						$s = "selected";
					$strlabel = "";
					foreach($label as $val)
					{
						if($arr[$i]["name"] == $this->FullFieldName($val["name"],$val["table"]))
						{
							$strlabel = $val["label"];
							break;
						}
					}
					$res.= "<option value='".$i."' ".$s.">".$strlabel."</option>";
				}
			}
		}
		return $res;
	}
	
	protected function getFirstGroupField($axis)
	{
		$arr = $this->xml_array["group_fields"];
		$arrX = array();
		$arrY = array();
		$arrAll = array();
		
		for($i = 0; $i < pre8count($arr) - 1; $i++)
		{
			if($arr[$i]["group_type"] == "x")
				$arrX[] = $i;
				
			if($arr[$i]["group_type"] == "y")
				$arrY[] = $i;
				
			if($arr[$i]["group_type"] == "all")
				$arrAll[] = $i;
		}
		
		if(pre8count($arrX) > 0 && $axis == "x")
			return $arrX[0];
			
		if(pre8count($arrY) > 0 && $axis == "y")
			return $arrY[0];
			
		if(pre8count($arrX) == 0 && $axis == "x")
			return $arrAll[0];
			
		if(pre8count($arrY) == 0 && $axis == "y")
		{
			if(pre8count($arrX) == 0)
				return $arrAll[1];
			else
				return $arrAll[0];
		}
	}
	
	/**
	 * Get axes displyed values
	 * @param Number index
	 * @param String value
	 * @return String
	 */
	protected function getAxisDisplayValue($index, $value)
	{
		global $locale_info;
		
		if( $value == "" || is_null($value) )
			return "";
				
		$groupFieldsData = $this->xml_array["group_fields"];
		$field = $groupFieldsData[ $index ]["name"];
		$int_type = $groupFieldsData[ $index ]["int_type"];

		
		$ftype = $this->getFieldType($field);		

		if ( $int_type == 0 ) 
		{	
			// The 'Normal' interval is set
			if ( $this->table_type != "db" )
				$fieldIdentifier = $this->xml_array["tables"][0]."_".$field;
			else
				$fieldIdentifier = $this->CrossGoodFieldName($field);
			
			if( $this->xml_array['totals'][ $fieldIdentifier ]['curr'] == true )
				return str_format_currency($value);

			if( IsDateFieldType( $ftype ) )
			{
				return format_shortdate( db2time($value) );
			}
			
			return xmlencode($value);
		}
		
		
		if ( IsNumberType( $ftype ) ) 
		{
			$start = $value - ($value % $int_type);
			$end = $start + $int_type;
			
			if( $this->table_type != "db" )
				$fieldIdentifier = $this->xml_array["tables"][0]."_".$field;
			else
				$fieldIdentifier = $this->CrossGoodFieldName($field);
			
			if( $this->xml_array['totals'][ $fieldIdentifier ]['curr'] == true )
				return str_format_currency($start)." - ".str_format_currency($end);
			
			return $start." - ".$end;
		} 
		
		if ( IsCharType( $ftype ) ) 
		{
			return xmlencode(substr($value,0,$int_type));
		} 
		
		if ( IsDateFieldType( $ftype ) ) 
		{
			$dvalue = substr($value, 0, 4).'-'.substr($value, 4, 2).'-'.substr($value, 6, 2);
			
			if( strlen($value) == 10 )
				$dvalue.=" ".substr($value, 8, 2)."00:00";
			elseif( strlen($value) == 12 )
				$dvalue.=" ".substr($value, 8, 2).":".substr($value, 10, 2).":00";
			
			$tm = db2time($dvalue);
			if( !pre8count($tm) )
				return "";
		
			switch( $int_type )
			{
				case 1: // DATE_INTERVAL_YEAR
					return $tm[0];
				case 2: // DATE_INTERVAL_QUARTER
					return $tm[0]."/Q".$tm[1];
				case 3: // DATE_INTERVAL_MONTH
					return @$locale_info[ "LOCALE_SABBREVMONTHNAME".$tm[1] ]." ".$tm[0];
				case 4: // DATE_INTERVAL_WEEK
					$dates = $this->getDatesByWeek($tm[1] + 1, $tm[0]);
					return format_shortdate( db2time($dates[0]) ) . ' - ' . format_shortdate( db2time($dates[1]) );				
				case 5: // DATE_INTERVAL_DAY
					return format_shortdate($tm);
				case 6: // DATE_INTERVAL_HOUR
					$tm[4] = 0;
					$tm[5] = 0;
					return str_format_datetime($tm);
				case 7: // DATE_INTERVAL_MINUTE
					$tm[5] = 0;
					return str_format_datetime($tm);
				default:
					return str_format_datetime($tm);
			}
		}
		
		return "";
	}
	
	protected function getDatesByWeek($week, $year) 
	{
		global $locale_info;
		$startweekday = 0;
		if($locale_info["LOCALE_IFIRSTDAYOFWEEK"]>0)
			$startweekday = 7 - $locale_info["LOCALE_IFIRSTDAYOFWEEK"];	

		$L = isleapyear($year) ? 1 : 0;
		$months = array(31, 28 + $L, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$total_days = ($week - 1) * 7; 
		$i = 0;
		$sum = 0;
		while($sum <= $total_days)
		{
			$sum += $months[$i++];
		}
		$sum -= $months[$i-1];
		$month = $i;
		$day = $total_days - $sum;
		$day_of_week = getdayofweek(array($year, $month, $day));
		if ($day_of_week == 0) 
			$day_of_week = 7;
		
		$day = $day - ($day_of_week - 1) - $startweekday;
		$dates = array();
		$dates[0] = getYMDdate(mktime(0,0,0, $month, $day, $year));
		$dates[1] = getYMDdate(mktime(1,1,1, $month, $day+6, $year));
		return $dates;
	}
	
	public function getValuesControl()
	{
		$arr_list = $this->getSelectedValue();
		$arr_label = $this->xml_array["totals"];
		$res = "";
		$first_field = 0;
		$i = 0;
		if(pre8count($arr_list) != 0 )
		{
			foreach($arr_list as $value)
			{
				$s = "";
				if($i == 0 || $i == $_SESSION[$this->sessionPrefix."_field"])
				{
					$first_field = $i;
					$s = "selected";
				}
				$strlabel = "";
				foreach($arr_label as $val)
					if($value == $this->FullFieldName($val["name"],$val["table"]))
					{
						$strlabel = $val["label"];
						break;
					}
				$res.= "<option value=".$i." ".$s.">".runner_htmlspecialchars($strlabel)."</option>";
				$i++;
			}
		}
		return array($res,$first_field);
	}
	
	protected function FullFieldName($field, $table = "")
	{
		if(!$table)
			$table = $this->tableName;
		if($this->table_type == "db")
			if(strpos($field,".") === false)
				$res = $table.".".$field;
			else
				$res = $field;
		else
			$res = $field;
		return $res;
	}
	
	protected function CrossGoodFieldName($field)
	{
		if($this->table_type == "db")
			return GoodFieldName($field);
		else 
			return $field;
	}
	
	/**
	 * Get the report print header html-markup
	 * @return String
	 */
	public function getPrintCrossHeader()
	{					
		$fieldNameX = $this->xml_array["group_fields"][ $this->index_field_x ]["name"];
		$fieldNameY = $this->xml_array["group_fields"][ $this->index_field_y ]["name"];
		$fieldName = $this->dataField;
		
		$prefix = "";
		if( $this->table_type != "db" )
			$prefix = $this->xml_array["tables"][0]."_";			
		
		$fieldNameX = $prefix.GoodFieldName($fieldNameX);
		$fieldNameY = $prefix.GoodFieldName($fieldNameY);
		$fieldName = $prefix.GoodFieldName($fieldName);
		
		
		return "Group X"
			.":<b>".$this->xml_array["totals"][ $fieldNameX ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Group Y"
			.":<b>".$this->xml_array["totals"][ $fieldNameY ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Field"
			.":<b>".$this->xml_array["totals"][ $fieldName ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Group function"
			.":<b>".$this->dataGroupFunction."</b>";
	}
	
	public function getTotalsName($grfunc)
	{
		switch($grfunc)
		{
			case "sum":
				return "Sum";
				break;
			case "min":
				return "Min";
				break;
			case "max":
				return "Max";
				break;
			case "avg":
				return "Average";
				break;
		}
	}
	
	protected function getFieldType($field)
	{
		if($this->table_type == "db")
			$ftype = WRGetFieldType($this->FullFieldName($field));
		elseif($this->table_type == "project")
			$ftype = $this->pSet->getFieldType($field);
		else
		{ 
			$fields_type = WRGetAllCustomFieldType();
			$ftype = $fields_type[$field];
		}
		return $ftype;
	}
	
	protected function getDataField($idx)
	{
		$idx = 0+$idx;
		$arr_value = $this->getSelectedValue();	
		if($idx >= pre8count($arr_value))
			return "";
		return $arr_value[$idx];
	}
	
	protected function initDataFieldSettings()
	{
		foreach($this->xml_array["totals"] as $key => $value)
		{
			if($this->FullFieldName($value["name"],$value["table"]) == $this->dataField)
			{
				$this->dataFieldSettings = $this->xml_array["totals"][$key];
				break; 
			}
		}
	}

	/**
	 * Checks whether passed function name is valid
	 * @param String func
	 */
	protected function initDataGroupFunction($func)
	{
		//	good
		if( $this->dataFieldSettings[$func] == true )
		{
			$this->dataGroupFunction = $func;
			return;
		}

		//	bad, set first possible
		$gfuncs = array("sum", "max", "min", "avg");
		foreach($gfuncs as $gf)
		{
			if( $this->dataFieldSettings[$gf] == true )
			{
				$this->dataGroupFunction = $gf;
				return;
			}
		}
		
		// default
		$this->dataGroupFunction = "sum";
	}
	
	/**
	 * Get the current group function name
	 * @return String
	 */
	public function getCurrentGroupFunction()
	{
		return $this->dataGroupFunction;
	}
	public function isProjectDB()
	{			
		$isDB = false;
		if("public.antibiotics" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.case_antibiotics" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.clean_cut_implementations" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.countries" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.device_distributions" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.diagnoses" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.facilities" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.follow_ups" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.languages" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifebox_staff" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.partners" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.procedures" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.regions" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.surgical_cases" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.trainers" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_courses" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_languages" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_leads" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_partners" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_sessions" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_trainers" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.ward_antibiotics" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.ward_rounds" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.clean_cut_implementation_summary_view" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.device_distribution_summary_view" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.surgical_case_summary_view" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_summary_view" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.programs" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_approaches" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_types" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.quarters" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.participant_role" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.sex" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_participants" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.venues" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_attendance" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.participant_attendance_detail" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.participant_attendance_summary" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.training_participation" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.daily_attendance_view" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.users" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme_ugrights" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme_ugmembers" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.users" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme__audit" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme__locking" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.months" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.devices" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.payment_methods" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.transaction_types" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.donors" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.device_distribution_log" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.device_inventory_changes" == $this->xml_array['tables'][0])
			$isDB = true;
		if("" == $this->xml_array['tables'][0])
			$isDB = true;
		if("" == $this->xml_array['tables'][0])
			$isDB = true;
		if("" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme_dhis2_orgunits" == $this->xml_array['tables'][0])
			$isDB = true;
		if("" == $this->xml_array['tables'][0])
			$isDB = true;
		if("" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme_dhis2_dataitems" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme_dhis2_analytics_settings" == $this->xml_array['tables'][0])
			$isDB = true;
		if("public.lifeboxme_dhis2_analytics_data" == $this->xml_array['tables'][0])
			$isDB = true;
		return $isDB;
	}
	
	protected function getDBFieldName($name)
	{
		if( !$this->wrdb )
			return $name;
		else{
			$gname = GoodFieldName($name);
			if(substr($gname,0,1)=="_" && substr($gname,-1)=="_")
				$gname = substr($gname,1,-1);
			return $this->arrDBFieldsList[ $gname ];
		}
	}
	
}
?>