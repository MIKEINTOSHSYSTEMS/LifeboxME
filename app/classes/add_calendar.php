<?php
require_once( getabspath('classes/addpage.php' ) );
require_once( getabspath('classes/calendarpage.php' ) );

class AddCalendarPage extends AddPage {

	function __construct(&$params = "") {
		parent::__construct($params);
	}
	
	protected function prepareDefvalues() {
		parent::prepareDefvalues();
		$subjectField = $this->pSet->getCalendarValue( 'subjectField' );
		$dateField = $this->pSet->getCalendarValue( 'dateField' );
		$timeField = $this->pSet->getCalendarValue( 'timeField' );
		$endDateField = $this->pSet->getCalendarValue( 'endDateField' );
		$endTimeField = $this->pSet->getCalendarValue( 'endTimeField' );

		if( !$this->defvalues[ $subjectField ] ) {
			$this->defvalues[ $subjectField ] = mlang_message('CALENDAR_NEW_EVENT');
		}

		$newDate = db2time( postvalue( 'date' ) );
		if( !$newDate ) {
			//	next hour
			$newDate = db2time( now() );
			$newDate[4] = 0;
			$newDate[5] = 0;
			$newDate = addHours( $newDate, 1 );
		} 
		if( !$timeField ) {
			$this->defvalues[ $dateField ] = format_datetime_custom( $newDate, 'yyyy-MM-dd' );
		} if( $timeField && $timeField != $dateField ) {
			$this->defvalues[ $dateField ] = format_datetime_custom( $newDate, 'yyyy-MM-dd' );
			$this->defvalues[ $timeField ] = format_datetime_custom( $newDate, 'HH:mm:ss' );
		} else {
			$this->defvalues[ $dateField ] = format_datetime_custom( $newDate, 'yyyy-MM-dd HH:mm:ss' );
		}

		$endDate = addHours( $newDate, 1 );
		if( $endDateField ) {
			if( !$endTimeField ) {
				$this->defvalues[ $endDateField ] = format_datetime_custom( $endDate, 'yyyy-MM-dd' );
			} if( $endTimeField && $endTimeField != $endDateField ) {
				$this->defvalues[ $endDateField ] = format_datetime_custom( $endDate, 'yyyy-MM-dd' );
				$this->defvalues[ $endTimeField ] = format_datetime_custom( $endDate, 'HH:mm:ss' );
			} else {
				$this->defvalues[ $endDateField ] = format_datetime_custom( $endDate, 'yyyy-MM-dd HH:mm:ss' );
			}

		}
	}

	protected function getSaveStatusJSON() {
		$statusJson = parent::getSaveStatusJSON();
		if( !$this->insertedSuccessfully || !$this->newRecordData ) {
			return $statusJson;
		}
		$statusJson['event'] = CalendarPage::makeEvent( $this->newRecordData, $this );
		return $statusJson;
	}

	protected function buildJsTableSettings( $table, $pSet ) {
		$settings = parent::buildJsTableSettings( $table, $pSet );
		$settings["calendarSettings"] = $pSet->getTableValue( 'calendarSettings' );
		return $settings;
	}


}
?>