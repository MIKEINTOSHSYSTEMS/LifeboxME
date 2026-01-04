<?php
require_once( getabspath('classes/editpage.php' ) );
require_once( getabspath('classes/ganttpage.php' ) );

class EditGanttPage extends EditPage {
	
	function __construct(&$params = "") {
		parent::__construct($params);
	}

	public function process() {
		if( $this->action == 'deleteTask' ) {
			$ret = $this->processDeleteTask();
			echo printJSON( $ret );
			exit();
		}
		if( $this->action == 'updateTask' ) {
			$ret = $this->processUpdateTask();
			echo printJSON( $ret );
			exit();
		}
		parent::process();
	}

	protected function processDeleteTask() {
		$ret = array( 'success' => true );
		if( !$this->deleteAvailable() ) {
			$ret['error'] = 'No delete permissions';
			$ret['success'] = false;
			return $ret;
		}
		if( !$this->deleteTask() ) {
			$ret['error'] = $this->dataSource->lastError();
			$ret['success'] = false;
		}
		return $ret;
	}

	protected function processUpdateTask() {
		$ret = array( 'success' => true );
		$ret[ 'task' ] = $this->updateTask( array(
			'startDate' => postvalue( 'startDate' ),
			'endDate' => postvalue( 'endDate' ),
			'progress' => postvalue( 'progress' ),
		) );
		if( !$ret['task'] ) {
			$ret['error'] = $this->dataSource->lastError();
			$ret['success'] = false;
		}
		return $ret;
	}

	protected function deleteTask() {
		$dc = new DsCommand();
		$dc->filter = $this->getSecurityCondition();
		$dc->keys = $this->keys;

		return !!$this->dataSource->deleteSingle( $dc );
	}

	protected function updateTask( $data ) {
		$startDateField = $this->pSet->getGanttValue( 'startDateField' );
		$endDateField = $this->pSet->getGanttValue( 'endDateField' );
		$progressField = $this->pSet->getGanttValue( 'progressField' );

		$dc = new DsCommand();
		$dc->filter = $this->getSecurityCondition();
		$dc->keys = $this->keys;

		if( $data['startDate'] ) {
			$dc->values[ $startDateField ] = $data['startDate'];
		}
		if( $data['endDate'] ) {
			$dc->values[ $endDateField ] = $data['endDate'];
		}
		if( $data['progress'] ) {
			$dc->values[ $progressField ] = $data['progress'];
		}

		if( !$this->dataSource->updateSingle( $dc ) ) {
			return false;
		}
		$newData = $this->getCurrentRecordInternal();
		if( !$newData ) {
			return array();
		}
		return GanttPage::makeTask( $newData, $this );

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
		$statusJson['task'] = GanttPage::makeTask( $newData, $this );

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
			$this->xt->assign("gantt_delete_attrs", 'id="deleteButton' . $this->id . '"'  );
			$this->xt->assign("gantt_delete", true);
		}
		if( $this->addChildAvailable() ) {
			$this->xt->assign("gantt_add_child_attrs", 'id="addChildButton' . $this->id . '"'  );
			$this->xt->assign("gantt_add_child", true);
		}
		$this->xt->assign("reset_button", false );
		$this->xt->assign("view_page_button", false );
	}

	function deleteAvailable() {
		return $this->permis[$this->tName]["delete"];
	}

	protected function addChildAvailable() {
		return $this->addAvailable()
			&& count( $this->pSet->getTableKeys() ) == 1
			&& $this->pSet->getGanttValue( 'parentField' );
	}

}
?>