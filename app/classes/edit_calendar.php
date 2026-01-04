<?php
require_once( getabspath('classes/editpage.php' ) );
require_once( getabspath('classes/calendarpage.php' ) );

class EditCalendarPage extends EditPage {

	function __construct(&$params = "") {
		parent::__construct($params);
	}

	public function process() {
		if( $this->action == 'deleteEvent' ) {
			$ret = $this->processDeleteEvent();
			echo printJSON( $ret );
			exit();
		}
		if( $this->action == 'updateEvent' ) {
			$ret = $this->processUpdateEvent();
			echo printJSON( $ret );
			exit();
		}
		parent::process();
	}

	protected function processUpdateEvent() {
		$ret = array( 'success' => true );
		if( !$this->updateEvent( postvalue( 'start' ), postvalue( 'end' ), postvalue( 'allDay' ) ) ) {
			$ret['error'] = $this->dataSource->lastError();
			$ret['success'] = false;
		}
		return $ret;
	}

	protected function updateEvent( $startStr, $endStr, $fullDay ) {

		$dateField = $this->pSet->getCalendarValue( 'dateField' );
		$timeField = $this->pSet->getCalendarValue( 'timeField' );
		$endDateField = $this->pSet->getCalendarValue( 'endDateField' );
		$endTimeField = $this->pSet->getCalendarValue( 'endTimeField' );
		$fullDayField = $this->pSet->getCalendarValue( 'fullDayField' );


		$timeFieldType = $this->pSet->getFieldType( $timeField );
		$endTimeFieldType = $this->pSet->getFieldType( $endTimeField );

		
		$dc = new DsCommand();
		$dc->filter = $this->getSecurityCondition();
		$dc->keys = $this->keys;

		$start = db2time( $startStr );
		$end = db2time( $endStr );

		if( $start ) {
			$dc->values[ $dateField ] = dbFormatDate( $start );
			if( $timeField ) {
				$dc->values[ $timeField ] = IsDateFieldType( $timeFieldType )
					? dbFormatDateTime( $start )
					: dbFormatTime( $start );
			}
		}
		if( $end ) {
			if( $endDateField ) {
				$dc->values[ $endDateField ] = dbFormatDate( $end );
			}
			if( $endTimeField ) {
				$dc->values[ $endTimeField ] = IsDateFieldType( $endTimeFieldType )
					? dbFormatDateTime( $end )
					: dbFormatTime( $end );
			}
		}
		if( $fullDayField ) {
			$dc->values[ $fullDayField ] = $fullDay;
		}

		if( !$dc->values ) {
			//	nothing to update
			return true;
		}

		if( !$this->dataSource->updateSingle( $dc ) ) {
			return false;
		}
		return true;

	}



	protected function processDeleteEvent() {
		$ret = array( 'success' => true );
		if( !$this->deleteAvailable() ) {
			$ret['error'] = 'No delete permissions';
			$ret['success'] = false;
			return $ret;
		}
		if( !$this->deleteEvent() ) {
			$ret['error'] = $this->dataSource->lastError();
			$ret['success'] = false;
		}
		return $ret;
	}

	protected function deleteEvent() {
		$dc = new DsCommand();
		$dc->filter = $this->getSecurityCondition();
		$dc->keys = $this->keys;

		if( !$this->dataSource->deleteSingle( $dc ) ) {
			return false;
		}
		return true;
	}

	protected function getSaveStatusJSON() {
		$statusJson = parent::getSaveStatusJSON();
		if( !$this->updatedSuccessfully ) {
			return $statusJson;
		}
		$newData = $this->getCurrentRecordInternal();
		if( !$newData ) {
			return $statusJson;
		}
		$statusJson['event'] = CalendarPage::makeEvent( $newData, $this );

		$keyFields = $this->pSet->getTableKeys();
		$keyValues = array();
		foreach( $keyFields as $k ) {
			$keyValues[] = $this->oldKeys[ $k ];
		}
		$statusJson['oldKeys'] = $keyValues;

		return $statusJson;
	}

	protected function prepareButtons() {
		parent::prepareButtons();
		if( $this->deleteAvailable() ) {
			$this->xt->assign("calendar_delete_attrs", 'id="deleteButton' . $this->id . '"'  );
			$this->xt->assign("calendar_delete", true);
		}
		$this->xt->assign("reset_button", false );
		$this->xt->assign("view_page_button", false );
	}

	function deleteAvailable() {
		return $this->permis[$this->tName]["delete"];
	}

	protected function buildJsTableSettings( $table, $pSet ) {
		$settings = parent::buildJsTableSettings( $table, $pSet );
		$settings["calendarSettings"] = $pSet->getTableValue( 'calendarSettings' );
		return $settings;
	}

}
?>