<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_months'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'months_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'months_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'month',
			'typeName' => 'character varying',
			'size' => null,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		) 
	),
	'primaryKeys' => array( 
		 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'months',
	'schema' => 'public' 
);
?>