<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_calculation_log'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'lbpmi_calculation_log_country_id_fkey',
			'refSchema' => 'public',
			'refTable' => 'countries',
			'del_rule' => 0,
			'upd_rule' => 0,
			'columns' => array( 
				array(
					'column' => 'country_id',
					'ref_column' => 'country_id' 
				) 
			) 
		),
		array(
			'name' => 'lbpmi_calculation_log_data_element_id_fkey',
			'refSchema' => 'public',
			'refTable' => 'lbpmi_data_elements',
			'del_rule' => 0,
			'upd_rule' => 0,
			'columns' => array( 
				array(
					'column' => 'data_element_id',
					'ref_column' => 'data_element_id' 
				) 
			) 
		),
		array(
			'name' => 'lbpmi_calculation_log_facility_id_fkey',
			'refSchema' => 'public',
			'refTable' => 'facilities',
			'del_rule' => 0,
			'upd_rule' => 0,
			'columns' => array( 
				array(
					'column' => 'facility_id',
					'ref_column' => 'facility_id' 
				) 
			) 
		),
		array(
			'name' => 'lbpmi_calculation_log_indicator_id_fkey',
			'refSchema' => 'public',
			'refTable' => 'lbpmi_indicators',
			'del_rule' => 0,
			'upd_rule' => 0,
			'columns' => array( 
				array(
					'column' => 'indicator_id',
					'ref_column' => 'indicator_id' 
				) 
			) 
		),
		array(
			'name' => 'lbpmi_calculation_log_region_id_fkey',
			'refSchema' => 'public',
			'refTable' => 'regions',
			'del_rule' => 0,
			'upd_rule' => 0,
			'columns' => array( 
				array(
					'column' => 'region_id',
					'ref_column' => 'region_id' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'log_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_calculation_log_log_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_calculation_log_log_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'indicator_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'data_element_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'calculation_type',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'period_type',
			'typeName' => 'character varying',
			'size' => 20,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'period_year',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'period_quarter',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'period_month',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'region_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'country_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'facility_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'calculated_value',
			'typeName' => 'numeric',
			'size' => null,
			'scale' => null,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'calculation_timestamp',
			'typeName' => 'timestamp without time zone',
			'size' => null,
			'scale' => null,
			'type' => 135,
			'autoinc' => false,
			'defaultValueSQL' => 'CURRENT_TIMESTAMP',
			'defaultValue' => 'CURRENT_TIMESTAMP',
			'nullable' => true 
		),
		array(
			'name' => 'status',
			'typeName' => 'character varying',
			'size' => 20,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'error_message',
			'typeName' => 'text',
			'size' => null,
			'scale' => null,
			'type' => 201,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'execution_time_ms',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		) 
	),
	'primaryKeys' => array( 
		'log_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_calculation_log',
	'schema' => 'public' 
);
?>