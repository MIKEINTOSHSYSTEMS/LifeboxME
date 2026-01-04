<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_period_types'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'period_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'period_types_period_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'period_types_period_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'period_name',
			'typeName' => 'character varying',
			'size' => null,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		) 
	),
	'primaryKeys' => array( 
		'period_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'period_types',
	'schema' => 'public' 
);
?>