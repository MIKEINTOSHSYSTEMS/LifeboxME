<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_countries'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'countries_region_id_fkey',
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
			'name' => 'country_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'countries_country_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'countries_country_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'country_name',
			'typeName' => 'character varying',
			'size' => 100,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
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
			'name' => 'iso_code',
			'typeName' => 'character varying',
			'size' => 3,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
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
		) 
	),
	'primaryKeys' => array( 
		'country_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'countries',
	'schema' => 'public' 
);
?>