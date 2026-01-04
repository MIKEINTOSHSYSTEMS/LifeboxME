<?php
require_once( getabspath('classes/addpage.php' ) );
require_once( getabspath('classes/ganttpage.php' ) );

class AddGanttPage extends AddPage {
	
	function __construct(&$params = "") {
		parent::__construct($params);
	}

	var $parentValue = null;

	protected function prepareDefvalues() {
		parent::prepareDefvalues();
		$parentField = $this->pSet->getGanttValue( 'parentField' );
		$nameField = $this->pSet->getGanttValue( 'nameField' );
		$startDateField = $this->pSet->getGanttValue( 'startDateField' );
		$endDateField = $this->pSet->getGanttValue( 'endDateField' );

		if( !$this->defvalues[ $nameField ] ) {
			$this->defvalues[ $nameField ] = $this->parentValue && $parentField
				? mlang_message( 'GANTT_CHILD_TASK' )
				: mlang_message( 'GANTT_NEW_TASK' );
		}

		if( $this->parentValue && $parentField ) {
			$this->defvalues[ $parentField ] = $this->parentValue;
		}

		if( !$this->defvalues[ $startDateField ] ) {
			$startDate = db2time( postvalue( 'start' ) );
			if( !$startDate ) {
				$startDate = adddays( db2time( now() ), 1 );
			}
			$this->defvalues[ $startDateField ] = dbFormatDate( $startDate );
		}
		if( !$this->defvalues[ $endDateField ] ) {
			$startDate = db2time( $this->defvalues[ $startDateField ] );
			$endDate = adddays( $startDate, 1 );
			$this->defvalues[ $endDateField ] = dbFormatDate( $endDate );
		}
	}

	protected function getSaveStatusJSON() {
		$statusJson = parent::getSaveStatusJSON();
		if( !$this->insertedSuccessfully || !$this->newRecordData ) {
			return $statusJson;
		}
		$statusJson['task'] = GanttPage::makeTask( $this->newRecordData, $this );
		return $statusJson;
	}

	protected function buildNewRecordData() {
		parent::buildNewRecordData();

		$parentField = $this->pSet->getGanttValue( 'parentField' );
		if( $parentField && $this->parentValue && count( $this->pSet->getTableKeys() ) == 1 ) {
			if( !$this->newRecordData[ $parentField ] ) {
				$this->newRecordData[ $parentField ] = $this->parentValue;
			}
		}
	}


	/*
	protected function buildJsTableSettings( $table, $pSet ) {
		$settings = parent::buildJsTableSettings( $table, $pSet );
		$settings["ganttSettings"] = $pSet->getTableValue( 'ganttSettings' );
		return $settings;
	}
	*/


}
?>