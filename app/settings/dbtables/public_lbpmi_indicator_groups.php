<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_indicator_groups'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'indicator_group_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_indicator_groups_indicator_group_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_indicator_groups_indicator_group_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'indicator_group_name',
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
			'name' => 'indicator_group_description',
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
			'name' => 'indicator_group_code',
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
		'indicator_group_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_indicator_groups',
	'schema' => 'public' 
);
?>