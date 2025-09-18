<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "lifebox_mesystem_at_localhost" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "lifebox_mesystem_at_localhost";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "lifebox_mesystem_at_localhost" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "lifebox_mesystem_at_localhost" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "lifebox_mesystem_at_localhost";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "lifebox_mesystem_at_localhost";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "lifebox_mesystem_at_localhost";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["public.antibiotics"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.case_antibiotics"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.clean_cut_implementations"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.countries"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.device_distributions"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.diagnoses"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.facilities"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.follow_ups"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.languages"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lifebox_staff"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.partners"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.procedures"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.regions"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.surgical_cases"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.trainers"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_courses"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_languages"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_leads"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_partners"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_sessions"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_trainers"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.ward_antibiotics"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.ward_rounds"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.clean_cut_implementation_summary_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.device_distribution_summary_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.surgical_case_summary_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_summary_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.programs"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_approaches"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_types"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.quarters"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.participant_role"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.sex"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_participants"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.venues"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_attendance"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.participant_attendance_detail"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.participant_attendance_summary"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.training_participation"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.daily_attendance_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.users"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["admin_rights"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["admin_members"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["admin_users"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lifeboxme__audit"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lifeboxme__locking"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.months"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.devices"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.payment_methods"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.transaction_types"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.donors"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.device_distribution_log"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.device_inventory_changes"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["aio_training_tracking"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["Lifebox_DHIS2_OrgUnits"] = "rest";
		$connectionsIds["public.lifeboxme_dhis2_orgunits"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["Lifebox_DHIS2_Settings"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["Lifebox_DHIS2_dataItems"] = "rest";
		$connectionsIds["public.lifeboxme_dhis2_dataitems"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lifeboxme_dhis2_analytics_settings"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lifeboxme_dhis2_analytics_data"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["aio_training_tracking Chart"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["aio_training_tracking Chart by sex"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.smtp"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_annual_plan_tracker"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_beginnings_fund"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_communications"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_cri"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_dashboard_summary"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_development"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_elma"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_governance"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_kpis_on_track"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_operations"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_programs"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_sample_workflow"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_status"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_strategic_areas"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_all_activities_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_dashboard_summary_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_kpis_tracking_view"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_unified_activities"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.years"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_finance"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_hr"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_cathedral"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_izumi"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_st"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbapt_whi"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_calculation_log"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_data_elements"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_datasets"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_indicator_actuals"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_indicator_targets"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_indicators"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_summary"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.period_types"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.unit_of_measurement"] = "lifebox_mesystem_at_localhost";
		$connectionsIds["public.lbpmi_calculation_jobs"] = "lifebox_mesystem_at_localhost";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>