<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lifeboxme_uggroups'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'GroupID',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'"lifeboxme_uggroups_GroupID_seq"\'::regclass)',
			'defaultValue' => 'nextval(\'"lifeboxme_uggroups_GroupID_seq"\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'Label',
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
			'name' => 'Provider',
			'typeName' => 'character varying',
			'size' => null,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'::character varying',
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'Comment',
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
		 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lifeboxme_uggroups',
	'schema' => 'public' 
);
?>