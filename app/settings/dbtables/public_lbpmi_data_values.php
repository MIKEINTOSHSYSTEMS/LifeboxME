<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_data_values'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'lbpmi_data_values_country_id_fkey',
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
			'name' => 'lbpmi_data_values_data_element_id_fkey',
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
			'name' => 'lbpmi_data_values_facility_id_fkey',
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
			'name' => 'lbpmi_data_values_region_id_fkey',
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
			'name' => 'data_value_id',
			'typeName' => 'bigint',
			'size' => 64,
			'scale' => 0,
			'type' => 20,
			'autoinc' => false,
			'defaultValueSQL' => 'nextval(\'lbpmi_data_values_data_value_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_data_values_data_value_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'data_element_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
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
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
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
			'name' => 'period_week',
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
			'name' => 'period_day',
			'typeName' => 'date',
			'size' => null,
			'scale' => null,
			'type' => 7,
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
			'name' => 'value',
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
			'name' => 'stored_by',
			'typeName' => 'character varying',
			'size' => 255,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => '\'system\'::character varying',
			'defaultValue' => 'system',
			'nullable' => true 
		),
		array(
			'name' => 'created',
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
			'name' => 'last_updated',
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
			'name' => 'deleted',
			'typeName' => 'boolean',
			'size' => null,
			'scale' => null,
			'type' => 11,
			'autoinc' => false,
			'defaultValueSQL' => 'false',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'data_source',
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
			'name' => 'source_detail',
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
			'name' => 'value_type',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'scope_level',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		) 
	),
	'primaryKeys' => array( 
		'data_value_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_data_values',
	'schema' => 'public' 
);
?>