<?php
global $runnerMenus;
$runnerMenus['adminarea'] = array(
	'name' => 'main',
	'id' => 'adminarea',
	'treeLike' => true,
	'root' => array(
		'id' => 'main',
		'parent' => '',
		'children' => array( 
			array(
				'id' => 'admin_rights_list',
				'parent' => 'main',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'tag' => 'AA_PERMISSIONS',
						'type' => 2 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'table' => -1,
					'pageType' => 'admin_rights_list' 
				) 
			),
			array(
				'id' => 'admin_members_list',
				'parent' => 'main',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'tag' => 'AA_ASSIGN_USERS',
						'type' => 2 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'table' => -1,
					'pageType' => 'admin_members_list' 
				) 
			),
			array(
				'id' => 'list',
				'parent' => 'main',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'tag' => 'AA_ADDEDIT_USERS',
						'type' => 2 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'table' => 4681,
					'pageType' => 'list' 
				) 
			) 
		),
		'data' => array(
			'name' => array(
				'text' => '',
				'type' => 0 
			),
			'comments' => array(
				'text' => '',
				'type' => 0 
			),
			'style' => '',
			'href' => '',
			'params' => '',
			'pageId' => '',
			'itemType' => 0,
			'linkType' => 2,
			'openType' => 0,
			'iconType' => 0,
			'iconName' => '',
			'iconStyle' => 0,
			'showIconType' => 1,
			'linkToAnotherApp' => false 
		) 
	) 
);
?>