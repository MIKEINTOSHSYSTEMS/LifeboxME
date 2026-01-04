<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_unit_of_measurement'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'uom_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'unit_of_measurement_uom_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'unit_of_measurement_uom_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'uom_name',
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
		'uom_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'unit_of_measurement',
	'schema' => 'public' 
);
?>