<?php
class Chart
{
	protected $header;
	protected $footer;

	protected $y_axis_label;
	protected $strLabel;

	protected $arrDataLabels = array();
	protected $arrDataSeries = array();

	public $webchart;
	protected $cname;

	protected $tableType;

	protected $cipherer = null;
	protected $pSet = null;
	protected $searchClauseObj = null;

	protected $sessionPrefix = "";

	protected $pageId;

	/**
	 * A flag helping to detect if to apply
	 * 'details' functionality to the chart
	 */
	protected $showDetails = true;

	/**
	 *	Flag if the chart in master or details preview mode
	 *	@type Boolean
	 */
	protected $chartPreview = false;

	/**
	 * It indicates if chart is shown on a dashboard
	 */
	protected $dashChart = false;

	/**
	 * It indicates if first point selected
	 */
	protected $dashChartFirstPointSelected = false;

	protected $detailMasterKeys = "";

	/**
	 * Dashboard table name
	 * It's set up if chart is shown on a dashboard only
	 */
	protected $dashTName = "";

	/**
	 * Dashboard element name
	 * It's set up if chart is shown on a dashboard only
	 */
	protected $dashElementName = "";

	/**
	 * @type Connection
	 */
	protected $connection;

	/**
	 *
	 */
	protected $_2d;

	/**
	 *
	 */
	protected $noRecordsFound = false;

	/**
	 *
	 */
	protected $singleSeries = false;

	protected $masterKeysReq;
	protected $masterTable;

	/**
	 * DataSource
	 */
	protected $dataSource = null;
	protected $tName = "";

	protected $chartSettings;

	protected $webChartColors = array();

	function __construct( $param, &$chartSettings ) {
		$this->chartSettings = $chartSettings;
		
		$this->webchart = $param["webchart"];
		if( $this->webchart ) {
			$this->webChartColors = $chartSettings["webColors"];
		}

		$this->tName = $param["tName"];
		$this->tableType = $param["tableType"]; // db, project, custom
		
		$this->sessionPrefix = $param["tName"];
		$this->pSet = new ProjectSettings( $this->tName, PAGE_CHART );

		// #10461, $this->setConnection(); needs to be called after value is assigned to $this->webchart
		$this->setConnection();


		if( $this->tableType == "project" ) {
			//	project table
			$this->dataSource = getDataSource( $this->tName, $this->pSet, $this->connection );
		} else {
			//	db-table-based webchart
			$this->dataSource = getWebDataSource( $chartSettings["webSql"], $this->tableType, $this->tName );
		}

		$this->showDetails = $param["showDetails"];
		
		$this->pageId = $param["pageId"];
		$this->cname = $param["cname"];

		$this->masterTable = $param["masterTable"];
		$this->masterKeysReq = $param["masterKeysReq"];

		// true if chart has master
		$this->chartPreview = $param["chartPreview"];
		$this->dashChart = $param["dashChart"];

		if( $this->dashChart ) {
			$this->dashTName = $param["dashTName"];
			$this->dashElementName = $param["dashElementName"];
			$this->sessionPrefix = $this->dashTName."_".$this->sessionPrefix;
		}

		if( !$this->webchart && !$this->chartPreview && isset( $_SESSION[ $this->sessionPrefix.'_advsearch' ] ) )
			$this->searchClauseObj = SearchClause::UnserializeObject( $_SESSION[ $this->sessionPrefix.'_advsearch' ] );

		if( $this->searchClauseObj )
			RunnerContext::pushSearchContext( $this->searchClauseObj );

		if( $this->isProjectDB() ) {
			$this->cipherer = new RunnerCipherer( $this->tName );
		}

		$this->setBasicChartProp();

		$eventObj = getEventObject( $this->pSet );
		if( $eventObj->exists( 'UpdateChartSettings' ) ) {
			$eventObj->UpdateChartSettings( $this );
		}
	}

	/**
	 *
	 */
	protected function setBasicChartProp() {
		$this->header = GetMLString( $this->chartSettings['header'] );
		$this->footer = GetMLString( $this->chartSettings['footer'] );

		$this->arrDataSeries = $this->chartSettings["dataSeries"];

		foreach( $this->arrDataSeries as $series ) {
			if( !$this->webchart ) {
				$fieldName = $series["dataField"];
				if( $this->chartSettings["type"] == "Candle" || $this->chartSettings["type"] == "OHLC" )
					$fieldName = $series["open"];
				
				$this->arrDataLabels[] = GetFieldLabel( GoodFieldName( $this->tName ), GoodFieldName( $fieldName ) );
			} else {
				// add webchart series settings
				if(  $series["label"] )
					$this->arrDataLabels[] = $series["label"];
				
				if( $this->chartSettings["type"] == "Candle" || $this->chartSettings["type"] == "OHLC" )
					$fieldName = $series["open"];
			}
		}		
		
		$this->strLabel = $this->chartSettings["labelField"]; // GetFieldLabel?

		if( count( $this->arrDataLabels ) == 1 ) {
			$this->y_axis_label = $this->arrDataLabels[0];
		} else {
			$this->y_axis_label = GetMLString( $this->chartSettings["yAxisLabel"] );
		}
	}


	protected function getMasterCondition() {
		if( $this->dashChart )
			return null;

		$detailKeys = $this->pSet->getMasterKeys( $this->masterTable );
		if( !$detailKeys['detailsKeys'] )
			return null;

		$conditions = array();

		foreach( $detailKeys['detailsKeys'] as $i => $field ) {
			$conditions[] = DataCondition::FieldEquals( $field, $this->masterKeysReq[ $i + 1 ] );
		}

		return DataCondition::_And( $conditions );
	}

	/**
	 * Get datasource command
	 */
	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = new DsCommand();

		$dc->filter = DataCondition::_And( array(
				Security::SelectCondition( "S", $this->pSet ),
				$this->getMasterCondition()
			));

		if( !$this->chartPreview && $this->searchClauseObj ) {
			$search = $this->searchClauseObj->getSearchDataCondition();
			$filter = $this->searchClauseObj->getFilterCondition( $this->pSet );

			$dc->filter = DataCondition::_And( array( $dc->filter, $search, $filter ) );
		}

		// where tabs
		if( $_SESSION[ $this->sessionPrefix . "_chartTabWhere" ] ) {
			$dc->filter = DataCondition::_And( array(
				$dc->filter,
				DataCondition::SQLCondition( $_SESSION[ $this->sessionPrefix . "_chartTabWhere" ] )
			));
		}

		require_once( getabspath('classes/orderclause.php') );
		$orderObject = new OrderClause( $this->pSet, $this->cipherer, $this->sessionPrefix, $this->connection );
		$dc->order = $orderObject->getOrderFields();

		if( $this->pSet->getRecordsLimit() )
			$dc->reccount = $this->pSet->getRecordsLimit();

		if( $this->pSet->groupChart() )
			$dc->totals = $this->getGroupChartCommandTotals();

		return $dc;
	}

	/**
	 * Get ds command totals
	 * total fields appear in the same order
	   they do in an original orderby clause
	 * @return array
	 */
	protected function getGroupChartCommandTotals() {
		$totals = array();
		//	label field
		$totals[] = array(
			"alias" => $this->pSet->chartLabelField(),
			"field" => $this->pSet->chartLabelField(),
			"modifier" => $this->pSet->chartLabelInterval()
		);

		$series = $this->pSet->chartSeries();
		foreach( $series as $s ) {
			$totals[] = array(
				"alias" => $s["dataField"],
				"field" => $s["dataField"],
				"total" => strtolower( $s["total"] )
			);
		}

		$orderInfo = $this->pSet->getOrderIndexes();
		if( !$orderInfo )
			return $totals;

		$fields = array();
		foreach( $orderInfo as $o ) {
			$fields[] = $this->pSet->GetFieldByIndex( $o[0] );
		}

		foreach( $totals as $idx => $t ) {
			if( !in_array( $t["field"], $fields ) )
				$fields[] = $t["field"];

			foreach( $orderInfo as $o ) {
				$fieldIdx = $this->pSet->getFieldIndex( $t["field"] );
				if( $fieldIdx  == $o[0] ) {
					$totals[ $idx ]["direction"] = $o[1];
					break;
				}
			}
		}

		$_totals = array();
		foreach( $fields as $field ) {
			foreach( $totals as $t ) {
				if( $t["field"] == $field ) {
					$_totals[] = $t;
				}
			}
		}

		return $_totals;
	}

	/**
	 * Check for a web chart if it's based on the project table
	 * @return Boolean
	 */
	protected function isProjectDB()
	{
		if( !$this->webchart )
			return true;
		
		foreach( ProjectSettings::getProjectTables() as $t ) {
			if( $t[ 'originalTable' ] == $this->tName ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * Set the 'connection' property #9875
	 */
	protected function setConnection() {
		global $cman;

		if($this->isProjectDB())
			$this->connection = $cman->byTable( $this->tName );
		else
			$this->connection = $cman->getDefault();
	}

	public function setFooter($name)
	{
		$this->footer = $name;
	}

	public function getFooter()
	{
		return $this->footer;
	}

	public function setHeader($name)
	{
		$this->header = $name;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setLabelField($name)
	{
		$this->strLabel = $name;
	}

	public function getLabelField()
	{
		return $this->strLabel;
	}

	/**
	 * @return String
	 */
	protected function getDetailedTooltipMessage()
	{
		if( !$this->showDetails )
			return "";

		$showClickHere = true;

		if( $this->dashChart )
		{
			$showClickHere = false;

			$pDSet = new ProjectSettings( $this->dashTName );
			$arrDElem = $pDSet->getDashboardElements();
			foreach($arrDElem as $elem)
			{
				if( $elem["table"] == $this->tName && !!$elem["details"] )
					$showClickHere = true;
			}
		}

		$details = $this->pSet->getAvailableDetailsTables();
		if( $showClickHere && count($details) )
		{
			$tableCaption = Labels::getTableCaption( $details[0] );
			$tableCaption = $tableCaption ? $tableCaption : $details[0];

			 return "\nClick here to see " . $tableCaption . " details";
		}

		return "";
	}

	/**
	 * @return String
	 */
	protected function getNoDataMessage()
	{
		if( !$this->noRecordsFound )
			return "";

		if( !$this->searchClauseObj )
			return mlang_message('NO_DATA_YET');

		if( $this->searchClauseObj->isSearchFunctionalityActivated() )
			return mlang_message('NO_RECORDS');

		return mlang_message('NO_DATA_YET');
	}

	/**
	 *
	 */
	public function write()
	{
		$data = array();
		$chart = array();

		$this->setTypeSpecChartSettings( $chart );
		
		if ( $this->webChartColors["color71"] != "" || $this->webChartColors["color91"] != "" )
			$chart["background"] = array();
		
		if ( $this->webChartColors["color71"] != "" )
			$chart["background"]["fill"] = "#".$this->webChartColors["color71"];

		if ( $this->webChartColors["color91"] != "" )
			$chart["background"]["stroke"] = "#".$this->webChartColors["color91"];

		if( $this->noRecordsFound ) {
			$data["noDataMessage"] = $this->getNoDataMessage();
			echo runner_json_encode( $data );
			return;
		}

		// animation
		if( $this->chartSettings["animation"] )
			$chart["animation"] = array("enabled" => "true", "duration" => 1000);

		// legend
		if( $this->chartSettings["legend"] == "true" && !$this->chartPreview )
			$chart["legend"] = array("enabled" => "true");
		else
			$chart["legend"] = array("enabled" => false);

		$chart["credits"] = false;
		// title/header
		$chart["title"]	= array("enabled" => "true", "text" => $this->header);
		if( $this->webChartColors["color101"] != "" )
			$chart["title"]["fontColor"] = "#".$this->webChartColors["color101"];

		// assign and display
		$data["chart"] = $chart;
		echo runner_json_encode( $data );
	}

	/**
	 * A stub
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
	}

	/**
	 * @return Array
	 */
	protected function getGrids()
	{
		$grids = array();

		if( $this->chartSettings["grid"] ) {
			$stroke = $this->webChartColors["color121"] != "" 
				? "#" . $this->webChartColors["color121"] 
				: "#ddd";

			$grid0 = array(
				"enabled" => true,
				"drawLastLine" => false,
				"stroke" => $stroke,
				"scale" => 0,
				"axis" => 0
			);

			if ( $this->webChartColors["color81"] != "" ) {
				$grid0["oddFill"] = "#".$this->webChartColors["color81"];
				$grid0["evenFill"] = "#".$this->webChartColors["color81"];
			}

			$grids[] = $grid0;
			$grids[] = array(
				"enabled" => true,
				"drawLastLine" => false,
				"stroke" => $stroke,
				"axis" => 1
			);
		}

		return $grids;
	}

	/**
	 * @param String fieldName
	 * @param Array data
	 * @return String
	 */
	protected function labelFormat($fieldName, $data, $truncated = true) {
		if( !$fieldName )
			return "";
		
		if( $this->tableType == "db" && !!$this->chartSettings["webCustomLabels"] )
			$fieldName = $this->chartSettings["webCustomLabels"][ $fieldName ];

		include_once getabspath('classes/controls/ViewControlsContainer.php');
		$viewControls = new ViewControlsContainer( $this->pSet, PAGE_CHART );
		if( $this->pSet->groupChart() ) {
			$interval = $this->pSet->chartLabelInterval();
			if( $interval ) {
				$fType = $this->pSet->getFieldType( $fieldName );
				return RunnerPage::formatGroupValueStatic( $fieldName, $interval, $data[ $fieldName ], $this->pSet, $viewControls, false );
			}
		}
		$value = $viewControls->showDBValue( $fieldName, $data, "", "", false );

		if( $truncated && strlen($value) > 50 )
			$value = runner_substr($value, 0, 47)."...";

		return $value;
	}

	protected function beforeQueryEvent( &$dc ) {
		$eventsObject = getEventObject( $this->pSet );

		//	ASP conversion requires these checks be separate
		if( !$eventsObject )
			return;
		if( !$eventsObject->exists("BeforeQueryChart") ) {
			return;
		}

		$prep = $this->dataSource->prepareSQL( $dc );
		$where = $prep["where"];
		$sql = $prep["sql"];
		$order = $prep["order"];

		// call Before Query event
		$eventsObject->BeforeQueryChart( $sql, $where, $order );

		if( $sql != $prep["sql"] )
			$this->dataSource->overrideSQL( $dc, $sql );
		else {
			if( $where != $prep["where"] )
				$this->dataSource->overrideWhere( $dc, $where );
			if( $order != $prep["order"] )
				$this->dataSource->overrideOrder( $dc, $order );
		}
	}

	/**
	 * @return Array
	 */
	public function get_data()
	{
		$data = array();
		$clickdata = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
		{
			$data[$i] = array();
			$clickdata[$i] = array();
		}

		$dc = $this->getSubsetDataCommand();
		$this->beforeQueryEvent( $dc );

		if( $this->pSet->groupChart() ) {
			$rs = $this->dataSource->getTotals( $dc );
		} else {
			$rs = $this->dataSource->getList( $dc );
		}
		if( !$rs ) {
			showError( $this->dataSource->lastError() );
		}

		$row = $rs->fetchAssoc();
		if( $this->cipherer )
			$row = $this->cipherer->DecryptFetchedArray( $row );

		if( !$row )
			$this->noRecordsFound = true;

		while ($row)
		{
			for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
			{
				$data[$i][] = $this->getPoint($i, $row);

				$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
				$clickdata[$i][] = $this->getActions( $row , $this->arrDataSeries[$i], $strLabelFormat );
			}

			$row = $rs->fetchAssoc();
			if( $this->cipherer )
				$row = $this->cipherer->DecryptFetchedArray( $row );
		}

		$series = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i, count($this->arrDataSeries) > 1 );
		}

		return $series;
	}

	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row ) {
		$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
		
		include_once getabspath('classes/controls/ViewControlsContainer.php');
		$viewControls = new ViewControlsContainer( $this->pSet, PAGE_CHART );

		$strDataSeries = $row[ $this->arrDataSeries[ $seriesNumber ]["dataField"] ];
		$fieldName = $this->arrDataSeries[ $seriesNumber ]["dataField"];
		$formattedValue = $viewControls->showDBValue( $fieldName, $row, "", "", false );
		
		if( $this->tableType != "db" || !$this->chartSettings["webCustomLabels"] ) {
			$strDataSeries = $row[ $this->arrDataSeries[ $seriesNumber ]["dataField"] ];
			$fieldName = $this->arrDataSeries[ $seriesNumber ]["dataField"];
			$formattedValue = $viewControls->showDBValue( $fieldName, $row, "", "", false );
		} else {
			$strDataSeries = $row[ $this->chartSettings["webCustomLabels"][ $this->arrDataSeries[ $seriesNumber ]["dataField"] ] ];
			$fieldName = $this->chartSettings["webCustomLabels"][ $this->arrDataSeries[ $seriesNumber ]["dataField"] ];
			$formattedValue = $viewControls->showDBValue( $fieldName, $row, "", "", false );
		}
		
		return array( 
				"x" => $strLabelFormat, 
				"value" => (double)str_replace(",", ".", $strDataSeries),
				"viewAsValue" => $formattedValue
			);
	}

	/**
	 * @param String name
	 * @param Array pointsData
	 * @param Array clickData
	 * @param Number seriesNumber
	 * @param Boolean multiSeries (optional)
	 * @return Array
	 */
	protected function getSeriesData( $name, $pointsData, $clickData, $seriesNumber, $multiSeries = true )
	{
		$data = array(
			"name" => $name,
			"data" => $pointsData,
			"xScale" => "0",
			"yScale" => "1",
			"seriesType" => $this->getSeriesType($seriesNumber)
		);

		$data["labels"] = array( 
			"enabled" => $this->chartSettings["values"], 
			"format" => "{%viewAsValue}"  
		);

		if ( $this->webChartColors["color61"] != "" )
			$data["labels"]["fontColor"] = "#".$this->webChartColors["color61"];

		if( $clickData && $this->pSet->getDetailsTables() )
			$data["clickData"] = $clickData;

		$data["tooltip"] = $this->getSeriesTooltip( $multiSeries );

		return $data;
	}

	/**
	 * @param Boolean $multiSeries
	 * @return Array
	 */
	protected function getSeriesTooltip( $multiSeries ) {
		return array(
			"enabled" => true,
			"format" => "{%seriesName}: {%viewAsValue}".  $this->getDetailedTooltipMessage(),
		);
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		return "column";
	}

	/**
	 * Get a 'point click' action data
	 * @param Array data
	 * @param Number seriesId
	 * @param Number pointId
	 * @return Array
	 */
	protected function getActions( $data, $seriesId, $pointId )
	{
		global $strTableName;

		$detailsTables = $this->pSet->getAvailableDetailsTables();
		if( !count( $detailsTables ) )
			return null;

		if ( $this->dashChart )
		{
			$masterKeysArr = array();
			foreach ( $detailsTables as $details )
			{
				$detailsKeys = $this->pSet->getDetailsKeys( $details );
				foreach( $detailsKeys['masterKeys'] as $idx => $mk )
				{
					$masterKeysArr[ $details ] = array( 'masterkey'.($idx + 1) => $data[ $mk ] );
				}
			}

			if (!$this->dashChartFirstPointSelected)
			{
				$this->dashChartFirstPointSelected = true;
				$this->detailMasterKeys = runner_json_encode( $masterKeysArr );
			}

			return array( "masterKeys" => $masterKeysArr, "seriesId" => $seriesId, "pointId" => $pointId );
		}

		// The one detail table is allowed for a chart page only
		$details = $detailsTables[0];
		$detailsKeys = $this->pSet->getDetailsKeys( $details );
		$masterquery = "mastertable=".rawurlencode( $strTableName );
		foreach( $detailsKeys['masterKeys'] as $idx => $mk )
		{
			$masterquery.= "&masterkey".($idx + 1)."=".rawurlencode( $data[ $mk ] );
		}

		return array( "url" => GetTableLink( GetTableUrl( $details ), ProjectSettings::defaultPageType( GetEntityType( $details ) ), $masterquery ) );
	}
}


class Chart_Bar extends Chart
{
	protected $stacked;
	protected $bar;

	function __construct( $param, $chartSettings )
	{
		parent::__construct( $param, $chartSettings );

		$this->stacked = $param["stacked"];
		$this->_2d = $param["2d"];
		$this->bar = $param["bar"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType( $seriesNumber )
	{
		if($this->bar)
			return "bar";
		else
			return "column";
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();

		$chart["scales"] = $this->getScales();
		$chart["logarithm"] = $this->chartSettings["logarithm"];

		if( $this->bar )
			$chart["type"] = "bar";
		else
			$chart["type"] = "column";

		if( !$this->_2d )
			$chart["type"] .= "-3d";

		$chart["xScale"] = 0;
		$chart["yScale"] = 1;

		// grid
		$chart["grids"] = $this->getGrids();


		// Y-axis label
		$chart["yAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => $this->y_axis_label
			));

		// X-axis label
		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chartSettings["names"] )
			));

		if ( $this->webChartColors["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color51"];

		if ( $this->webChartColors["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->webChartColors["color111"];

		if ( $this->webChartColors["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->webChartColors["color131"];

		if ( $this->webChartColors["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->webChartColors["color141"];
	}

	/**
	 * "scales"
	 * @return Array
	 */
	protected function getScales()
	{
		if( $this->stacked || $this->chartSettings["logarithmic"] ) {
			$arr = array();
			if( $this->stacked )
				$arr["stackMode"] = "value";

			if( $this->chartSettings["logarithmic"] ) {
				$arr["logBase"] = 10;
				$arr["type"] = "log";
			};

			return array(
				array("names" => array()),
				$arr
			);
		}

		return array();
	}
}

class Chart_Line extends Chart
{
	protected $type_line;


	function __construct( $param, $chartSettings )
	{
		parent::__construct( $param, $chartSettings );

		if( $chartSettings["linestyle"] == 0 )
			$this->type_line = "line";
		elseif( $chartSettings["linestyle"] == 2 )
			$this->type_line = "step_line";
		else
			$this->type_line = "spline";

		$this->type_line = $param["type_line"];
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "line";

		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["grids"] = $this->getGrids();
		$chart["logarithm"] = $this->chartSettings["logarithm"];
		$chart["tooltip"] = array("displayMode" => "single");

		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chartSettings["names"] )
			));

		if ( $this->webChartColors["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color51"];

		if ( $this->webChartColors["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->webChartColors["color111"];

		if ( $this->webChartColors["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->webChartColors["color131"];

		if ( $this->webChartColors["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->webChartColors["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		switch( $this->type_line )
		{
			case "line":
				return "line";
			case "spline":
				return "spline";
			case "step_line":
				return "stepLine";
			default:
				return "line";
		}
	}
}

class Chart_Area extends Chart
{
	protected $stacked;


	function __construct( $param, $chartSettings )
	{
		parent::__construct( $param, $chartSettings );

		$this->stacked = $param["stacked"];
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();

		if( $this->stacked )
			$chart["scales"] = $this->getScales();
		$chart["type"] = "area";
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["logarithm"] = $this->chartSettings["logarithm"];
		$chart["grids"] = $this->getGrids();

		$chart["tooltip"] = array("displayMode" => "single");

		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( "text" => $this->footer ),
				"labels" => array( "enabled" => $this->chartSettings["appearance"]["names"]  )
			));

		if ( $this->webChartColors["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color51"];

		if ( $this->webChartColors["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->webChartColors["color111"];

		if ( $this->webChartColors["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->webChartColors["color131"];

		if ( $this->webChartColors["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->webChartColors["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		return "area";
	}

	/**
	 * "scales"
	 * @return Array
	 */
	protected function getScales()
	{
		if( $this->stacked ) {
			$arr = array();
			$arr["stackMode"] = "value";

			if( $this->chartSettings["stacked"] ) {
				$arr["stackMode"] = "percent";
				$arr["maximumGap"] = "10";
				$arr["maximum"] = "100";
			};

			return array(
				array( "names"=> array() ),
				$arr
			);
		}

		return array();
	}
}

/**
 * A single series chart
 */
class Chart_Pie extends Chart
{
	protected $pie;


	function __construct( $param, $chartSettings )
	{
		parent::__construct( $param, $chartSettings );

		$this->pie = $param["pie"];
		$this->_2d = $param["2d"];
		$this->singleSeries = true;
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$series = $this->get_data();

		$chart["data"] = $series[0]["data"];
		$chart["clickData"] = $series[0]["clickData"];
		$chart["singleSeries"] = true;
		$chart["tooltip"] = $series[0]["tooltip"];
		$chart["logarithm"] = false;
		if( $this->_2d )
			$chart["type"] = "pie";
		else
			$chart["type"] = "pie-3d";

		if( !$this->pie )
			$chart["innerRadius"] = "30%";

		if( $this->chartSettings["legend"] && !$this->chartPreview ) {
			$chart["legend"] = array("enabled" => "true");
		}

		$chart["labels"] = array( "enabled" => $this->chartSettings["values"] || $this->chartSettings["names"] );

		if ( $this->webChartColors["color51"] != "" ) {
			if ( $this->chartSettings["values"] ) {
				$chart["labels"]["fontColor"] = "#".$this->webChartColors["color61"];
			} else if ( $this->chartSettings["names"] ) {
				$chart["labels"]["fontColor"] = "#".$this->webChartColors["color51"];
			}
		}

	}
}

class Chart_Combined extends Chart
{
	function __construct( $param, $chartSettings )
	{
		parent::__construct( $param, $chartSettings );
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "column";
		$chart["logarithm"] = $this->chartSettings["logarithm"];
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["grids"] = $this->getGrids();
		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chartSettings["names"] )
			));

		if ( $this->webChartColors["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color51"];

		if ( $this->webChartColors["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->webChartColors["color111"];

		if ( $this->webChartColors["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->webChartColors["color131"];

		if ( $this->webChartColors["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->webChartColors["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		switch( $seriesNumber ) {
			case 0:
				return "spline";
				break;
			case 1:
				return "splineArea";
				break;
			default:
				return "column";
		}
	}
}

/**
 * A single series chart
 */
class Chart_Funnel extends Chart
{
	protected $inver;


	function __construct( $param, $chartSettings )
	{
		parent::__construct( $param, $chartSettings );

		$this->inver = $param["funnel_inv"];
		$this->singleSeries = true;
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$series = $this->get_data();
		$chart["type"] = "pyramid";

		$chart["data"] = $series[0]["data"];
		$chart["clickData"] = $series[0]["clickData"];
		$chart["singleSeries"] = true;
		$chart["tooltip"] = $series[0]["tooltip"];
		$chart["logarithm"] = false;
		if( $this->inver )
			$chart["reversed"] = true;

		$chart["labels"] = array( "enabled" => $this->chartSettings["names"] );

		if( $this->webChartColors["color51"] != "" )
			$chart["labels"]["fontColor"] = "#".$this->webChartColors["color51"];
	}
}

class Chart_Bubble extends Chart {

	function __construct( $param, $chartSettings ) {
		parent::__construct( $param, $chartSettings );

		$this->_2d = $param["2d"];
	}


	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "cartesian";
		$chart["grids"] = $this->getGrids();
		$chart["logarithm"] = $this->chartSettings["logarithm"];
		$chart["yAxes"]	= array(
			array(
				"enabled" => true,
				"title" => $this->y_axis_label,
				"labels" => array( "enabled" => $this->chartSettings["values"] )
			));

		if ( $this->webChartColors["color61"] != "" )
			$chart["yAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color61"];

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( "text" => $this->footer ),
				"labels" => array( "enabled" => $this->chartSettings["names"] )
			));

		if ( $this->webChartColors["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color51"];

		if ( $this->webChartColors["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->webChartColors["color111"];

		if ( $this->webChartColors["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->webChartColors["color131"];

		if ( $this->webChartColors["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->webChartColors["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType( $seriesNumber ) {
		return "bubble";
	}

	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row ) {
		$pointData = parent::getPoint( $seriesNumber, $row );
		$pointData["size"] = (double)str_replace(",", ".", $row[ $this->arrDataSeries[ $seriesNumber ]["bubbleSize"] ]);

		return $pointData;
	}
}

class Chart_Gauge extends Chart {

	protected $gaugeType = "";
	protected $layout = "";

	function __construct( $param, $chartSettings ) {
		parent::__construct( $param, $chartSettings );

		$this->gaugeType = $param["gaugeType"];
		$this->layout = $param["layout"];
	}

	/**
	 *
	 */
	public function write()
	{
		$data = array();

		for($i = count( $this->arrDataSeries ) - 1; $i >= 0 ; --$i)
		{
			$chart = array();

			if( $this->chartSettings["animation"] )
				$chart["animation"] = array("enabled" => "true", "duration" => 1000);

			$this->setGaugeSpecChartSettings( $chart, $i );

			if( $this->webChartColors["color71"] != "" || $this->webChartColors["color91"] != "" )
				$chart["background"] = array();
			
			if( $this->webChartColors["color71"] != "" )
				$chart["background"]["fill"] = "#".$this->webChartColors["color71"];

			if( $this->webChartColors["color91"] != "" )
				$chart["background"]["stroke"] = "#".$this->webChartColors["color91"];

			if( $this->noRecordsFound ) {
				$data["noDataMessage"] = $this->getNoDataMessage();
				echo runner_json_encode( $data );
				return;
			}

			$data[] = array( "gauge" => $chart );
		}

		echo runner_json_encode( array( "gauge" => $data, "header" => $this->header, "footer" => $this->footer ) );
	}

	/**
	 * @param &Array chart
	 * @param Number seriesNumber
	 */
	protected function setGaugeSpecChartSettings( &$chart, $seriesNumber )
	{
		$series = $this->get_data();
		$chart["data"] = $series[ $seriesNumber ]["data"];

		$chart["type"] = $this->gaugeType;
		$chart["layout"] = $this->layout;
		$chart["axes"] = array( $this->getAxesSettings( $seriesNumber ) );
		$chart["credits"] = false;
		$chart["chartLabels"] = $this->getCircularGaugeLabel( $seriesNumber, $chart["data"][0] );
		
		if( $this->gaugeType == "circular-gauge" ) {
			$chart["needles"] = array( array("enabled" => true) );
			
			$chart["ranges"] = array();
			foreach( $this->arrDataSeries[ $seriesNumber ]["gaugeColorZones"] as $ind => $colorZone ) {
				$chart["ranges"][] = array(
					"radius" => 70,
					"from" => $colorZone["begin"],
					"to" => $colorZone["end"],
					"fill" => '#' . $colorZone["color"],
					"endSize" => "10%",
					"startSize" => "10%"
				);
			}
			
		} else {
			$chart["pointers"] = array(
				array(
					"enabled" => true,
					"pointerType" => "marker",
					"type" => $this->layout == "horizontal" ? "triangleUp" : "triangleLeft",
					"name" => "",
					"offset" => $hasColorZones ? "20%" : "10%",
					"dataIndex" => 0,
				)
			);

			foreach(  $this->arrDataSeries[ $seriesNumber ]["gaugeColorZones"] as $ind => $colorZone ) {
				$chart["pointers"][] = array(
					"enabled" => true,
					"pointerType" => "rangeBar",
					"name" => "",
					"offset" => "10%",
					"dataIndex" => $ind + 1, // 0 is an index of the db point then range bars coords go
					"color" => '#' . $colorZone["color"]
				);
			}
		
			$scalesData = $this->getGaugeScales( $seriesNumber );

			$chart["scale"] = 0;
			$chart["scales"] = array(
				array(
					"maximum" => $scalesData["max"],
					"minimum" => $scalesData["min"],
					"ticks" => array( "interval"=> $scalesData["interval"] ),
					"minorTicks" => array( "interval"=> $scalesData["interval"] / 2 )
				)
			);
		}
	}

	/**
	 * @param Number seriesNumber
	 * @param Array pointData
	 * @return Array
	 */
	protected function getCircularGaugeLabel( $seriesNumber, $pointData )
	{
		$label = array(
			"enabled" => true,
			"vAlign" => "center",
			"hAlign" => "center",
			"text" => $this->getChartLabelText( $seriesNumber, $pointData["value"] )
		);

		if( $this->gaugeType == "circular-gauge" )
		{
			$label["offsetY"] = -150; //fix it
			$label["anchor"] = "center";

			$label["background"] = array(
				"enabled" => true,
				"fill" => "#fff",
				"cornerType" => "round",
				"corner" => 0
			);

			$label["padding"] = array(
				"top" => 15,
				"right" => 20,
				"bottom" => 15,
				"left" => 20
			);
		}

		return array( $label );
	}


	/**
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getAxesSettings( $seriesNumber )
	{
		$axes = array();

		if( $this->gaugeType == "circular-gauge" )
		{
			$axes["startAngle"] = -150;
			$axes["sweepAngle"] = 300;

			$scalesData = $this->getGaugeScales( $seriesNumber );

			$axes["scale"] = array(
				"maximum" => $scalesData["max"],
				"minimum" => $scalesData["min"],
				"ticks" => array( "interval"=> $scalesData["interval"] ),
				"minorTicks" => array( "interval" => $scalesData["interval"] / 2 )
			);

			$axes["ticks"] = array(
				"type" => "trapezoid",
				"interval" => $scalesData["interval"]
			);

			$axes["minorTicks"] = array(
				"enabled" => true,
				"length" => 2
			);

			if( $this->webChartColors["color131"] != "" )
				$axes["fill"] = "#".$this->webChartColors["color131"];
		}

		$axes["enabled"] = true;
		$axes["labels"] = array( "enabled" => $this->chartSettings["values"] );

		if( $this->webChartColors["color61"] != "" )
			$axes["labels"]["fontColor"] = "#".$this->webChartColors["color61"];

		return $axes;
	}

	/**
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getGaugeScales( $seriesNumber )
	{
		$min = $this->arrDataSeries[ $seriesNumber ]["minValue"];
		$max = $this->arrDataSeries[ $seriesNumber ]["maxValue"];

		if( !is_numeric( $min ) )
			$min = 0;

		if( !is_numeric( $max ) )
			$max = 100;

		$diff = $max - $min;
		$slog = floor( log10( $diff ) );
		$interval = pow(10, $slog - 2);
		$muls = array(1,2,3,5,10);

		while(true)
		{
			foreach($muls as $m)
			{
				if( $diff / ($interval * $m) <= 10 )
				{
					$interval*= $m;
					break;
				}
			}
			if( $diff / ($interval) <= 10 )
				break;

			$interval*= 10;
		}

		return array(
			"min" => $min,
			"max" => $max,
			"interval" => $interval
		);
	}


	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = parent::getSubsetDataCommand();

		if( $this->tableType == "project" ) {
			require_once( getabspath('classes/orderclause.php') );

			$orderObject = new OrderClause( $this->pSet, $this->cipherer, $this->sessionPrefix, $this->connection );
			$order = $orderObject->getOrderFields();
			$revertedOrder = array();

			foreach( $order as $o ) {
				$ro = $o;
				$ro['dir'] = $ro['dir'] == "ASC" ? "DESC" : "ASC";

				$revertedOrder[] = $ro;
			}

			$dc->order = $revertedOrder;
		}

		return $dc;
	}

	/**
	 *
	 */
	public function get_data()
	{
		$data = array();

		$dc = $this->getSubsetDataCommand();
		$this->beforeQueryEvent( $dc );

		$rs = $this->dataSource->getList( $dc );
		if( !$rs ) {
			showError( $this->dataSource->lastError() );
		}

		$row = $rs->fetchAssoc();
		if( $this->cipherer )
			$row = $this->cipherer->DecryptFetchedArray( $row );

		if( !$row )
			$this->noRecordsFound = true;

		for($i = 0; $i < count($this->arrDataSeries); $i++)
		{
			if( $row )
			{
				$data[$i] = array();
				$data[$i][] = $this->getPoint($i, $row);
			}
		}

		$series = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i, count($this->arrDataSeries) > 1 );
		}

		return $series;
	}

	/**
	 * @param String name
	 * @param Array pointsData
	 * @param Array clickData
	 * @param Number seriesNumber
	 * @param Boolean multiSeries (optional)
	 * @return Array
	 */
	protected function getSeriesData( $name, $pointsData, $clickData, $seriesNumber, $multiSeries = true )
	{
		if( $this->gaugeType == "linearGauge" ) {
			foreach( $this->arrDataSeries[ $seriesNumber ]["gaugeColorZones"] as $ind => $colorZone ) {
				$pointsData[] = array(
					"low" => $colorZone["begin"],
					"high" => $colorZone["end"]
				);
			}
		}

		return array(
			"data" => $pointsData,
			"labelText" => $this->getChartLabelText( $seriesNumber, $pointsData[0]["value"] )
		);
	}

	/**
	 * @param Number seriesNumber
	 * @param String value
	 * @return String
	 */
	protected function getChartLabelText( $seriesNumber, $value ) {
		if( $this->tableType == "project" && !$this->webchart ) {
			$fieldName = $this->arrDataSeries[ $seriesNumber ]["dataField"];

			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer($this->pSet, PAGE_CHART);

			$data = array( $fieldName => $value );
			$viewValue = $viewControls->showDBValue( $fieldName, $data, "", "", false );

			return $this->arrDataLabels[ $seriesNumber ].": ". $viewValue;
		}

		return $this->arrDataLabels[ $seriesNumber ].": ". $value;
	}
}

class Chart_Ohlc extends Chart
{
	protected $ohcl_type;

	function __construct( $param, $chartSettings ) {
		parent::__construct( $param, $chartSettings );

		$this->ohcl_type = $param["ohcl_type"];
	}

	/**
	 *
	 */
	public function write()
	{
		$data = array();
		$chart = array();

		$this->setTypeSpecChartSettings( $chart );
		if( $this->webChartColors["color71"] != "" || $this->webChartColors["color91"] != "" )
			$chart["background"] = array();
		
		if( $this->webChartColors["color71"] != "" )
			$chart["background"]["fill"] = "#".$this->webChartColors["color71"];

		if( $this->webChartColors["color91"] != "" )
			$chart["background"]["stroke"] = "#".$this->webChartColors["color91"];
		
		$chart["credits"] = false;
		
		$chart["title"]	= array("enabled" => "true", "text" => $this->header);
		if ( $this->webChartColors["color101"] != "" )
			$chart["title"]["fontColor"] = "#".$this->webChartColors["color101"];

		if( $this->chartSettings['legend'] && !$this->chartPreview )
			$chart["legend"] = array("enabled" => "true");

		$data["chart"] = $chart;
		echo runner_json_encode( $data );
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		
		if( $this->webchart ) {
			foreach( $this->arrDataSeries as $seriesNum => $series ) {
				if ( $series["ohlcColor"] != "" ) {
					$chart["series"][$seriesNum]["fallingStroke"] = "#".$series["ohlcColor"];
					$chart["series"][$seriesNum]["fallingFill"] = "#".$series["ohlcColor"];
				
					if ( $this->ohcl_type == "ohcl" ) {
						$chart["series"][$seriesNum]["risingStroke"] = "#".$series["ohlcColor"];
						$chart["series"][$seriesNum]["risingFill"] = "#".$series["ohlcColor"];
					}
				}
				if ( $series["ohlcCandleColor"] != "" && $this->ohcl_type == "candlestick" ) {
					$chart["series"][$seriesNum]["risingStroke"] = "#".$series["ohlcCandleColor"];
					$chart["series"][$seriesNum]["risingFill"] = "#".$series["ohlcCandleColor"];
				}
			}
		}

		$chart["grids"] = $this->getGrids();
		$chart["logarithm"] = $this->chartSettings["logarithm"];
		$chart["type"] = "financial";
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;

		$chart["yAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => $this->y_axis_label,
				"labels" => array("enabled" => $this->chartSettings["values"])
			));

		if( $this->webChartColors["color61"] != "" )
			$chart["yAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color61"];

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array("enabled" => $this->chartSettings["names"] )
			));

		if( $this->webChartColors["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->webChartColors["color51"];

		if( $this->webChartColors["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->webChartColors["color111"];

		if( $this->webChartColors["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->webChartColors["color131"];

		if( $this->webChartColors["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->webChartColors["color141"];

		if( $this->chartSettings["logarithm"] ) {
			$chart["scales"] = array(
				array( "names" => array() ),
				array( "logBase" => 10, "type" => "log" )
			);
		}
	}

	/**
	 * @return Array
	 */
	public function get_data()
	{
		$data = array();
		$clickdata = array();

		for ( $i = 0; $i < count( $this->arrDataSeries ); $i++ )
		{
			$data[$i] = array();
			$clickdata[$i] = array();
		}

		$dc = $this->getSubsetDataCommand();
		$this->beforeQueryEvent( $dc );

		$rs = $this->dataSource->getList( $dc );
		if( !$rs ) {
			showError( $this->dataSource->lastError() );
		}

		$row = $rs->fetchAssoc();
		if( $this->cipherer )
			$row = $this->cipherer->DecryptFetchedArray( $row );

		if( !$row )
			$this->noRecordsFound = true;

		while( $row )
		{
			for ( $i = 0; $i < count( $this->arrDataSeries ); $i++ )
			{
				$data[$i][] = $this->getPoint( $i, $row );

				$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
				$clickdata[$i][] = $this->getActions( $row , $this->arrDataSeries[$i], $strLabelFormat );
			}

			$row = $rs->fetchAssoc();
			if( $this->cipherer )
				$row = $this->cipherer->DecryptFetchedArray( $row );
		}

		$series = array();
		for ( $i = 0; $i < count( $this->arrDataSeries ); $i++ )
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i );
		}

		return $series;
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		if( $this->ohcl_type == "ohcl" )
			return "ohlc";

		return "candlestick";
	}

	/**
	 * @param Boolean $multiSeries 
	 * @return Array
	 */
	protected function getSeriesTooltip( $multiSeries ) {
		$tooltipSettings = array(
			"enabled" => true
		);

		return $tooltipSettings;
	}

	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row ) {
		$dataSeries = $this->arrDataSeries[ $seriesNumber ];
		
		$high = $row[ $dataSeries["high"] ];
		$low = $row[ $dataSeries["low"] ];
		$open = $row[ $dataSeries["open"] ];
		$close = $row[ $dataSeries["close"] ];
		
		if( $this->tableType!="db" || !$this->chartSettings["webCustomLabels"] ) {
			$high = $row[ $dataSeries["high"] ];
			$low = $row[ $dataSeries["low"] ];
			$open = $row[ $dataSeries["open"] ];
			$close = $row[ $dataSeries["close"] ];
		} else {
			$high = $row[ $this->chartSettings["webCustomLabels"][ $dataSeries["high"] ] ];
			$low = $row[ $this->chartSettings["webCustomLabels"][ $dataSeries["low"] ] ];
			$open = $row[ $this->chartSettings["webCustomLabels"][ $dataSeries["open"] ] ];
			$close = $row[ $this->chartSettings["webCustomLabels"][ $dataSeries["close"] ] ];
		}

		return array(
			"x" => $this->labelFormat( $this->strLabel, $row ),
			"open" => (double)$open,
			"high" => (double)$high,
			"low" => (double)$low,
			"close" => (double)str_replace(",", ".", $close)
		);
	}
}
?>