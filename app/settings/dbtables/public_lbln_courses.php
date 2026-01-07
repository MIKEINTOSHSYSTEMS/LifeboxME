<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbln_courses'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'data_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbln_courses_data_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbln_courses_data_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'course_id',
			'typeName' => 'character varying',
			'size' => 255,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'course_title',
			'typeName' => 'text',
			'size' => null,
			'scale' => null,
			'type' => 201,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'type',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => '\'course\'::character varying',
			'defaultValue' => 'course',
			'nullable' => true 
		),
		array(
			'name' => 'categories',
			'typeName' => 'jsonb',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'description',
			'typeName' => 'text',
			'size' => null,
			'scale' => null,
			'type' => 201,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'name',
			'typeName' => 'character varying',
			'size' => 100,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'image',
			'typeName' => 'text',
			'size' => null,
			'scale' => null,
			'type' => 201,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'course_image',
			'typeName' => 'text',
			'size' => null,
			'scale' => null,
			'type' => 201,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'original_price',
			'typeName' => 'numeric',
			'size' => 10,
			'scale' => 2,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'discount_price',
			'typeName' => 'numeric',
			'size' => 10,
			'scale' => 2,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'final_price',
			'typeName' => 'numeric',
			'size' => 10,
			'scale' => 2,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'access',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => '\'free\'::character varying',
			'defaultValue' => 'free',
			'nullable' => true 
		),
		array(
			'name' => 'expires',
			'typeName' => 'timestamp without time zone',
			'size' => null,
			'scale' => null,
			'type' => 135,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'expires_type',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'drip_feed',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => '\'none\'::character varying',
			'defaultValue' => 'none',
			'nullable' => true 
		),
		array(
			'name' => 'identifiers',
			'typeName' => 'jsonb',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'after_purchase',
			'typeName' => 'jsonb',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'author',
			'typeName' => 'jsonb',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'created',
			'typeName' => 'bigint',
			'size' => 64,
			'scale' => 0,
			'type' => 20,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'modified',
			'typeName' => 'bigint',
			'size' => 64,
			'scale' => 0,
			'type' => 20,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'fetched_at',
			'typeName' => 'timestamp without time zone',
			'size' => null,
			'scale' => null,
			'type' => 135,
			'autoinc' => false,
			'defaultValueSQL' => 'CURRENT_TIMESTAMP',
			'defaultValue' => 'CURRENT_TIMESTAMP',
			'nullable' => true 
		),
		array(
			'name' => 'last_updated',
			'typeName' => 'timestamp without time zone',
			'size' => null,
			'scale' => null,
			'type' => 135,
			'autoinc' => false,
			'defaultValueSQL' => 'CURRENT_TIMESTAMP',
			'defaultValue' => 'CURRENT_TIMESTAMP',
			'nullable' => true 
		),
		array(
			'name' => 'is_active',
			'typeName' => 'boolean',
			'size' => null,
			'scale' => null,
			'type' => 11,
			'autoinc' => false,
			'defaultValueSQL' => 'true',
			'defaultValue' => '1',
			'nullable' => true 
		) 
	),
	'primaryKeys' => array( 
		'data_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbln_courses',
	'schema' => 'public' 
);
?>