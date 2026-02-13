<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_facilities'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'facilities_country_id_fkey',
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
			'name' => 'facilities_region_id_fkey',
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
			'name' => 'facility_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'facilities_facility_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'facilities_facility_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'facility_name',
			'typeName' => 'character varying',
			'size' => 500,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
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
			'name' => 'facility_type',
			'typeName' => 'character varying',
			'size' => 100,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'address',
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
			'name' => 'city',
			'typeName' => 'character varying',
			'size' => 100,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'latitude',
			'typeName' => 'numeric',
			'size' => 10,
			'scale' => 8,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'longitude',
			'typeName' => 'numeric',
			'size' => 11,
			'scale' => 8,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'is_active',
			'typeName' => 'boolean',
			'size' => null,
			'scale' => null,
			'type' => 11,
			'autoinc' => false,
			'defaultValueSQL' => 'true',
			'defaultValue' => '1',
			'nullable' => true 
		),
		array(
			'name' => 'created_at',
			'typeName' => 'timestamp with time zone',
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
			'typeName' => 'timestamp with time zone',
			'size' => null,
			'scale' => null,
			'type' => 135,
			'autoinc' => false,
			'defaultValueSQL' => 'CURRENT_TIMESTAMP',
			'defaultValue' => 'CURRENT_TIMESTAMP',
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
		) 
	),
	'primaryKeys' => array( 
		'facility_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'facilities',
	'schema' => 'public' 
);
?>