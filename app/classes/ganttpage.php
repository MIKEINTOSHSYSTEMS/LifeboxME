<?php
require_once( getabspath('classes/chartpage.php' ) );
require_once( getabspath('classes/controls/CheckboxField.php' ) );
require_once( getabspath('classes/controls/ViewTimeField.php') );

class GanttPage extends ChartPage
{
	public $action = '';

	function __construct(&$params = "") {
		parent::__construct($params);
	}

	
	public function process()
	{
		if( $this->mode == GANTT_DASHDETAILS
			|| $this->mode == GANTT_DETAILS && ( $this->masterPageType == PAGE_LIST || $this->masterPageType == PAGE_REPORT ))
			$this->updateDetailsTabTitles();


		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessGantt") )
			$this->eventsObject->BeforeProcessGantt( $this );
					
		
		// build tabs and set current
		$this->processGridTabs();

		$this->doCommonAssignments();
		$this->addButtonHandlers();
		$this->addCommonJs();
		$this->commonAssign();

		if( $this->pSet->noRecordsOnFirstPage() && !$this->isSearchFunctionalityActivated() ) {
			$this->showNoRecordsMessage();
		} else {
			$this->prepareQueryCommand();
			$this->prepareGanttData();
		}

		if( $this->mode != GANTT_DASHBOARD ) {
			$this->buildSearchPanel();
			$this->assignSimpleSearch();
		}
		
		// to restore correctly within a chart class
		$_SESSION[ $this->sessionPrefix.'_advsearch' ] = serialize( $this->searchClauseObj );
		
		// display the 'Back to Master' link and master table info
		$this->displayMasterTableInfo();

		$this->showPage();		
	}


	public function commonAssign() {
		parent::commonAssign();
		//	don't show Add New button if 'Hode data until search'
		if( $this->addAvailable() && ( !$this->pSet->noRecordsOnFirstPage() || $this->isSearchFunctionalityActivated() ) ) {
			$this->xt->assign("add_link", true);
			$add_attrs = 'id="addButton'.$this->id.'"';

			$this->xt->assign("addlink_attrs", $add_attrs);

			if ( $this->dashTName )
			{
				$this->xt->assign("addlink_getparams", "?fromDashboard=" . $this->dashTName);
			}
		}

	}


	protected function prepareGanttData() {
		global $languages_data;
		$ganttData = array( 'tasks' => $this->prepareTaskData() );
		$ganttData['canView'] = $this->viewAvailable();
		$ganttData['canAddChild'] = $this->addChildAvailable();
		$ganttData['canEdit'] = $this->editAvailable();
		$ganttData['canEditProgress'] = $this->editAvailable() && $this->pSet->getGanttValue( 'progressField' );
		
		$langData = $languages_data[ mlang_getcurrentlang() ];
		if( $langData ) {
			$ganttData['language'] = $langData['languageCode'];	
		}
		
		$this->pageData['ganttData'] = $ganttData;

	}

	protected function prepareTaskData() {
		$rs = $this->dataSource->getList( $this->queryCommand );
		$tasks = array();
		$recordLimit = $this->pSet->getRecordsLimit();
		while( !$recordLimit || count( $tasks ) < $recordLimit ) {
			$data = $rs->fetchAssoc();
			if( !$data ) {
				break;
			}
			$task = GanttPage::makeTask( $data, $this );
			
			$tasks[] = $task;			
		}
		return $tasks;
	}

	public static function makeTask( $data, $pageObject ) {
		
		$pSet = new ProjectSettings( $pageObject->tName, PAGE_GANTT, $pageObject->pageName );
		//	$pSet = $pageObject->pSet;
		$startDateField = $pSet->getGanttValue( 'startDateField' );
		$endDateField = $pSet->getGanttValue( 'endDateField' );
		$nameField = $pSet->getGanttValue( 'nameField' );
		$parentField = $pSet->getGanttValue( 'parentField' );
		$progressField = $pSet->getGanttValue( 'progressField' );
		$categoryField = $pSet->getGanttValue( 'categoryField' );

		$categoryColors = $pSet->getGanttValue( 'categoryColors' );

		$container = new ViewControlsContainer( $pSet, PAGE_GANTT, null );
		$nameControl = $container->getControl( $nameField );



		$keyFields = $pSet->getTableKeys();
		if( count( $keyFields ) != 1 ) {
			$parentField = '';
		}
		$keyValues = array();
		$keyParams = array();
		foreach( $keyFields as $i => $k ) {
			$keyValues[] = $data[ $k ];
			$keyParams[] = "key".($i + 1)."=".runner_htmlspecialchars( rawurlencode( @$data[ $k ]) );			
		}
		$keylink = implode( "&", $keyParams);

		$task = array();
		$task[ 'id' ] = implode( '~', $keyValues );
		$task[ 'keys' ] = $keyValues;

		$startDateParts = db2time( $data[ $startDateField ] );
		$endDateParts = db2time( $data[ $endDateField ] );
		if( !$data[ $endDateField ] || comparedates( $startDateParts, $endDateParts ) > 0 ) {
			$endDateParts = $startDateParts;
		}
		$task[ 'start' ] = format_datetime_custom( $startDateParts, "yyyy-MM-dd" );
		$task[ 'end' ] = format_datetime_custom( $endDateParts, "yyyy-MM-dd 23:59" );
		
		$task['name'] = $nameControl->getTextValue( $data );


		//$task['name'] = $data[ $nameField ];

		if( $parentField && $data[ $parentField ] ) {
			$task['dependencies'] = array( (string)$data[ $parentField ] );
		}
		if( $progressField ) {
			$task['progress'] = $data[ $progressField ];
		}

		if( $categoryField ) {
			$category = $data[ $categoryField ];
			foreach( $categoryColors as $cc ) {
				if( $cc['value'] == $category ) {
					$task[ 'color' ] = '#' . $cc['color'];
					$task[ 'color_text' ] = fgColorBlack( $cc['color'] )
						? '#000000'
						: '#ffffff';
				}
			}
		}
		$task['canEdit'] = $pageObject->editAvailable() && $pageObject->recordEditable( $data, 'E' );

		return $task;
	}



	function prepareQueryCommand() {
		$this->queryCommand = $this->getSubsetDataCommand();
		$prep = $this->dataSource->prepareSQL( $this->queryCommand );
		$this->querySQL = $prep["sql"];
		$this->callBeforeQueryEvent( $this->queryCommand );
		if( !$this->pSet->hideNumberOfRecords() ) {
		
			$this->numRowsFromSQL = $this->dataSource->getCount( $this->queryCommand );
			$recordLimit = $this->pSet->getRecordsLimit();
			if( $recordLimit && $this->numRowsFromSQL > $recordLimit ) {
				$this->numRowsFromSQL = $recordLimit;
			}
		}
	}

	function callBeforeQueryEvent( $dc ) {
		if( !$this->eventsObject->exists("BeforeQueryGantt") ) {
			return;
		}
		$prep = $this->dataSource->prepareSQL( $dc );
		$where = $prep["where"];
		$order = $prep["order"];
		$sql = $prep["sql"];
		$this->eventsObject->BeforeQueryGantt($sql, $where, $order, $this );

		if( $sql != $prep["sql"] )
			$this->dataSource->overrideSQL( $dc, $sql );
		else {
			if( $where != $prep["where"] )
				$this->dataSource->overrideWhere( $dc, $where );
			if( $order != $prep["order"] ) 
				$this->dataSource->overrideOrder( $dc, $order );
		}
	} 

	public function beforeShowEvent()
	{
		if( $this->eventsObject->exists("BeforeShowGantt") )
			$this->eventsObject->BeforeShowGantt($this->xt, $this->templatefile, $this);	
	}
	
	public static function readGanttModeFromRequest()
	{
		$mode = postvalue("mode");
		if( $mode == "listdetails" )
			return GANTT_DETAILS;
		elseif( $mode == "dashgantt" )
			return GANTT_DASHBOARD;
		else
			return GANTT_SIMPLE;
	}

	function addCommonJs()
	{
		parent::addCommonJs();
		$this->AddJSFile( 'include/gantt/frappe-gantt.umd.js' );
		$this->AddCSSFile( 'include/gantt/frappe-gantt.css' );

	}



	protected function getRecordset() {
		$rs = $this->dataSource->getList( $this->queryCommand );
	}

	public function deleteAvailable() {
		return count( $this->pSet->getTableKeys() ) && $this->permis[$this->tName]["delete"];
	}

	protected function addChildAvailable() {
		return $this->addAvailable()
			&& count( $this->pSet->getTableKeys() ) == 1
			&& $this->pSet->getGanttValue( 'parentField' );
	}

}

?>