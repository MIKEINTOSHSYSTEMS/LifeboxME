<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_aggregation_type'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'agg_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_aggregation_type_agg_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_aggregation_type_agg_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'aggregation_type',
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
		'agg_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_aggregation_type',
	'schema' => 'public' 
);
?>