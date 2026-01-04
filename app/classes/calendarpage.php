<?php
require_once( getabspath('classes/chartpage.php' ) );
require_once( getabspath('classes/controls/CheckboxField.php' ) );
require_once( getabspath('classes/controls/ViewTimeField.php') );

class CalendarPage extends ChartPage
{
	public $action = '';

	public $availableViews = array( 'year', 'month', 'week', 'list' );

	function __construct(&$params = "") {
		parent::__construct($params);
	}

	/**
	 * Process the page 
	 */
	public function process()
	{

		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessCalendar") )
			$this->eventsObject->BeforeProcessCalendar( $this );
					
		
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
			$this->prepareCalendarData();
		}

		if( $this->mode != CALENDAR_DASHBOARD ) {
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
		if( $this->addAvailable() && ( !$this->pSet->noRecordsOnFirstPage() || $this->isSearchFunctionalityActivated() ) )
		{
			$this->xt->assign("add_link", true);
			$add_attrs = 'id="addButton'.$this->id.'"';

			$this->xt->assign("addlink_attrs", $add_attrs);

			if ( $this->dashTName )
			{
				$this->xt->assign("addlink_getparams", "?fromDashboard=" . $this->dashTName);
			}
		}

		if( $this->exportAvailable() ) {
			$this->xt->assign("export_link", true );
			$this->xt->assign("exportlink_attrs", "id=\"export_".$this->id."\"");
		}
		if( $this->importAvailable() ) {
			$this->xt->assign("import_link", true );
			$this->xt->assign("importlink_attrs", "id=\"import_".$this->id."\" name=\"import_".$this->id."\"");
		}

	}

	protected function prepareEventData() {
		$rs = $this->dataSource->getList( $this->queryCommand );
		$calendarEvents = array();
		$recordLimit = $this->pSet->getRecordsLimit();
		while( !$recordLimit || count( $calendarEvents ) < $recordLimit ) {
			$data = $rs->fetchAssoc();
			if( !$data ) {
				break;
			}
			$event = CalendarPage::makeEvent( $data, $this );
			
			$calendarEvents[] = $event;			
		}
		return $calendarEvents;
	}

	public static function makeEvent( $data, $pageObject ) {
		$pSet = new ProjectSettings( $pageObject->tName, PAGE_CALENDAR, $pageObject->pageName );
		$dateField = $pSet->getCalendarValue( 'dateField' );
		$subjectField = $pSet->getCalendarValue( 'subjectField' );
		$descriptionField = $pSet->getCalendarValue( 'descriptionField' );
		$categoryField = $pSet->getCalendarValue( 'categoryField' );
		$fullDayField = $pSet->getCalendarValue( 'fullDayField' );
		$timeField = $pSet->getCalendarValue( 'timeField' );
		$endDateField = $pSet->getCalendarValue( 'endDateField' );
		$endTimeField = $pSet->getCalendarValue( 'endTimeField' );

		$categoryColors = $pSet->getCalendarValue( 'categoryColors' );

		$container = new ViewControlsContainer( $pSet, PAGE_CALENDAR, null );
		$subjectControl = $container->getControl( $subjectField );


		$timeFieldType = $pSet->getFieldType( $timeField );
		$endTimeFieldType = $pSet->getFieldType( $endTimeField );

		$keyFields = $pSet->getTableKeys();
		$keyValues = array();
		foreach( $keyFields as $k ) {
			$keyValues[] = $data[ $k ];
		}
		$event = array();
		$event[ 'keys' ] = $keyValues;
		$event[ 'id' ] = implode( '~', $keyValues );
		if( $fullDayField ) {
			$event[ 'allDay' ] = CheckboxField::checkedValue( $data[ $fullDayField ] );
		} 
		if( !$timeField || !$data[ $timeField ] ) {
			$event[ 'allDay' ] = true;
		}

		$startDate = format_datetime_custom( db2time( $data[ $dateField ] ), "yyyy-MM-dd" );
		$startTime = $timeField ? CalendarPage::formatTime( $timeFieldType, $data[ $timeField ] ) : '';
		$endDate = $endDateField && $data[ $endDateField ] 
			? format_datetime_custom( db2time( $data[ $endDateField ] ), "yyyy-MM-dd" ) : $startDate;
		$endTime = $endTimeField ? CalendarPage::formatTime( $endTimeFieldType, $data[ $endTimeField ] ) : $startTime;
		
		if( $event[ 'allDay' ] || !$startTime ) {
			$event[ 'start' ] = $startDate;
		} else {
			$event[ 'start' ] = $startDate . 'T' . $startTime;
		}
		
		if( $event[ 'allDay' ] || !$endTime ) {
			$event[ 'end' ] = $endDate;
		} else {
			$event[ 'end' ] = $endDate . 'T' . $endTime;
		}

		//$event['title'] = $data[ $subjectField ];
		$event['title'] = $subjectControl->getTextValue( $data );

		if( $categoryField ) {
			$category = $data[ $categoryField ];
			foreach( $categoryColors as $cc ) {
				if( $cc['value'] == $category ) {
					$event[ 'backgroundColor' ] = '#' . $cc['color'];
					$event[ 'textColor' ] = fgColorBlack( $cc['color'] )
						? '#000000'
						: '#ffffff';
				}
			}
		}
		$editable = $pageObject->editAvailable() && $pageObject->recordEditable( $data, 'E' );
		$event['startEditable'] = $editable;
		$event['durationEditable'] = $editable;
		return $event;
	}
	/**
	 * @param Int fieldType
	 * @param String fieldValue
	 */
	public static function formatTime( $fieldType, $fieldValue ) {
		$arr = ViewTimeField::splitStringValue( $fieldType, $fieldValue );
		if( !$arr ) {
			return '';
		}
		return format_datetime_custom( array( 0, 0, 0, $arr[0], $arr[1], $arr[2] ), "HH:mm:ss" );
	}

	protected function prepareCalendarData() {
		global $locale_info;
		$calendarData = array( 'events' => $this->prepareEventData() );
		$initialView = postvalue('view');
		if( array_search( $initialView, $this->availableViews ) === false ) {
			$initialView = '';
		}
		if( !$initialView ) {
			$initialView = $this->searchClauseObj->searchStarted()
				? 'list'
				: 'month';
		}
		$calendarData['initialView'] = $initialView;
		$calendarData['canEdit'] = $this->editAvailable();
		$calendarData['canAdd'] = $this->addAvailable();
		$calendarData['hasEndDate'] = !!$this->pSet->getCalendarValue( 'endDateField' );
		$calendarData['firstWeekDay'] = ($locale_info["LOCALE_IFIRSTDAYOFWEEK"] + 1) % 7;
		
		$calendarData['locale'] = currentLocale();
		$this->pageData['calendarData'] = $calendarData;

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
		if( !$this->eventsObject->exists("BeforeQueryCalendar") ) {
			return;
		}
		$prep = $this->dataSource->prepareSQL( $dc );
		$where = $prep["where"];
		$order = $prep["order"];
		$sql = $prep["sql"];
		$this->eventsObject->BeforeQueryCalendar($sql, $where, $order, $this );

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
		if( $this->eventsObject->exists("BeforeShowCalendar") )
			$this->eventsObject->BeforeShowCalendar($this->xt, $this->templatefile, $this);	
	}
	
	public static function readCalendarModeFromRequest()
	{
		$mode = postvalue("mode");
		if( $mode == "dashcalendar" )
			return CALENDAR_DASHBOARD;
		else
			return CALENDAR_SIMPLE;
	}

	function addCommonJs()
	{
		parent::addCommonJs();
		$this->AddJSFile( 'include/calendar/index.global.min.js' );
		$this->AddJSFile( 'include/calendar/locales-all.global.min.js', 'include/calendar/index.global.min.js' );
	}

	protected function getRecordset() {
		$rs = $this->dataSource->getList( $this->queryCommand );
	}


}

?>