<?php
require_once( getabspath('classes/viewpage.php' ) );
require_once( getabspath('classes/calendarpage.php' ) );
require_once( getabspath('classes/controls/CheckboxField.php' ) );

class ViewCalendarPage extends ViewPage
{
	public $action = '';
	function __construct(&$params)
	{
		parent::__construct($params);
	}
	public function process() {
		if( $this->action == 'deleteEvent' ) {
			$ret = $this->processDeleteEvent();
			echo printJSON( $ret );
			exit();
		}
		parent::process();
	}

	protected function processDeleteEvent() {
		$ret = array( 'success' => true );
		if( !$this->pSet->hasEditPage() || !$this->deleteAvailable() ) {
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

	protected function prepareButtons() {
		parent::prepareButtons();

		$this->xt->assign("edit_page_button", false );

		$data = $this->getCurrentRecordInternal();
		if( $this->deleteAvailable() && $this->recordEditable( $data, 'D' ) && $this->pSet->hasEditPage() ) {
			$this->xt->assign("calendar_delete_attrs", 'id="deleteButton' . $this->id . '"'  );
			$this->xt->assign("calendar_delete", true);
		}
		if( $this->editAvailable() && $this->recordEditable( $data ) ) {
			$this->xt->assign("calendar_edit", true);
			$this->xt->assign("calendar_edit_attrs", "id=\"editPageButton".$this->id."\"");
		}
	}

	function deleteAvailable() {
		return $this->permis[$this->tName]["delete"];
	}

	protected function buildJsTableSettings( $table, $pSet ) {
		$settings = parent::buildJsTableSettings( $table, $pSet );
		$settings["calendarSettings"] = $pSet->getTableValue( 'calendarSettings' );
		return $settings;
	}

	protected function displayViewPage() {
		//	hide time if fullday
		$fullDayField = $this->pSet->getCalendarValue( 'fullDayField' );
		$timeField = $this->pSet->getCalendarValue( 'timeField' );
		$endTimeField = $this->pSet->getCalendarValue( 'endTimeField' );
		if( $fullDayField ) {
			$data = $this->getCurrentRecordInternal();
			if( CheckboxField::checkedValue( $data[ $fullDayField ] ) ) {
				$this->hideField( $timeField );
				$this->hideField( $endTimeField );
			}
		}
		return parent::displayViewPage();

	}


}
?>