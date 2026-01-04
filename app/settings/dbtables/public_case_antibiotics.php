<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_case_antibiotics'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'case_antibiotic_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'case_antibiotics_case_antibiotic_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'case_antibiotics_case_antibiotic_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'case_id',
			'typeName' => 'uuid',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'antibiotic_id',
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
			'name' => 'created_at',
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
		'case_antibiotic_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'case_antibiotics',
	'schema' => 'public' 
);
?>