<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_indicator_targets'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'lbpmi_indicator_targets_country_id_fkey',
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
			'name' => 'lbpmi_indicator_targets_facility_id_fkey',
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
			'name' => 'lbpmi_indicator_targets_indicator_id_fkey',
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
			'name' => 'lbpmi_indicator_targets_region_id_fkey',
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
			'name' => 'target_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_indicator_targets_target_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_indicator_targets_target_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'indicator_id',
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
			'name' => 'target_value',
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
			'name' => 'is_annual_target',
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
			'name' => 'created_by',
			'typeName' => 'character varying',
			'size' => 250,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'created_at',
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
			'name' => 'updated_at',
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
			'name' => 'baseline_period',
			'typeName' => 'character varying',
			'size' => 255,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'baseline_value',
			'typeName' => 'character varying',
			'size' => 255,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		) 
	),
	'primaryKeys' => array( 
		'target_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_indicator_targets',
	'schema' => 'public' 
);
?>