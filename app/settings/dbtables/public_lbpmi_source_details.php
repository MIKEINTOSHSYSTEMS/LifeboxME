<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbpmi_source_details'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'fk_source_details_source',
			'refSchema' => 'public',
			'refTable' => 'lbpmi_data_sources',
			'del_rule' => 0,
			'upd_rule' => 0,
			'columns' => array( 
				array(
					'column' => 'source_id',
					'ref_column' => 'source_id' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'detail_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbpmi_source_details_detail_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbpmi_source_details_detail_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'source_id',
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
			'name' => 'source_detail',
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
		'detail_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbpmi_source_details',
	'schema' => 'public' 
);
?>