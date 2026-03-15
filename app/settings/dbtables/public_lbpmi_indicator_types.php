<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_indicator_types'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'indtype_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_indicator_types_indtype_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_indicator_types_indtype_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'indicator_type',
			'typeName' => 'character varying',
			'size' => null,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'indicator_factor',
			'typeName' => 'numeric',
			'size' => 12,
			'scale' => 4,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'indicator_type_description',
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
		'indtype_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_indicator_types',
	'schema' => 'public' 
);
?>