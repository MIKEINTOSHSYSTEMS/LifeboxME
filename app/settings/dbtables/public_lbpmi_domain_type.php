<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_domain_type'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'dom_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_domain_type_dom_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_domain_type_dom_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'domain_type',
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
		'dom_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_domain_type',
	'schema' => 'public' 
);
?>