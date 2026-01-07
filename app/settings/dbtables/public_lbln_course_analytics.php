<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_lbln_course_analytics'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'fk_course_analytics',
			'refSchema' => 'public',
			'refTable' => 'lbln_courses',
			'del_rule' => 1,
			'upd_rule' => 0,
			'columns' => array( 
				array(
					'column' => 'course_id',
					'ref_column' => 'course_id' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'data_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'lbln_course_analytics_data_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'lbln_course_analytics_data_id_seq\'::regclass)',
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
			'name' => 'students',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'videos',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'learning_units',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'video_time',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'avg_score_rate',
			'typeName' => 'numeric',
			'size' => 7,
			'scale' => 3,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'success_rate',
			'typeName' => 'numeric',
			'size' => 7,
			'scale' => 3,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'total_study_time',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'avg_time_to_finish',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'social_interactions',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'certificates_issued',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
			'nullable' => true 
		),
		array(
			'name' => 'video_viewing_time',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0',
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
			'name' => 'analytics_date',
			'typeName' => 'date',
			'size' => null,
			'scale' => null,
			'type' => 7,
			'autoinc' => false,
			'defaultValueSQL' => 'CURRENT_DATE',
			'defaultValue' => '',
			'nullable' => true 
		) 
	),
	'primaryKeys' => array( 
		'data_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'lbln_course_analytics',
	'schema' => 'public' 
);
?>