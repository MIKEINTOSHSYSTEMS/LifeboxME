<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_data_sources'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'source_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_data_sources_source_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_data_sources_source_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'data_source_name',
			'typeName' => 'character varying',
			'size' => 250,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'data_source_description',
			'typeName' => 'text',
			'size' => null,
			'scale' => null,
			'type' => 201,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		) 
	),
	'primaryKeys' => array( 
		'source_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_data_sources',
	'schema' => 'public' 
);
?>