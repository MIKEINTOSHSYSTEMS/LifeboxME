<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'addInPopup' => null,
		'editInPopup' => null,
		'viewInPopup' => null,
		'clickSort' => false,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => false,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'text' 
				),
				'below-grid' => array( 
					 
				),
				'left' => array( 
					'logo',
					'menu' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'breadcrumb',
					'loginform_login',
					'username_button' 
				),
				'top' => array( 
					 
				),
				'grid' => array( 
					'grid_checkbox_head',
					'grid_checkbox' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'text' => 'above-grid',
				'logo' => 'left',
				'menu' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'breadcrumb' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid' 
			),
			'itemLocations' => array(
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				) 
			),
			'itemVisiblity' => array(
				'breadcrumb' => 5,
				'expand_menu_button' => 2 
			) 
		),
		'itemsByType' => array(
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'adminarea_link' => array( 
				'adminarea_link' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'-' => array( 
				'-',
				'-1' 
			),
			'text' => array( 
				'text' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox_head' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 3 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'gridType' => 0,
		'recsPerRow' => 1,
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'list',
		'breadcrumb' => true 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'lbln_api_tester',
	'type' => 'list',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => -2,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
			'grid' => array( 
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c6',
							'colspan' => 1 
						) 
					) 
				) 
			),
			'cells' => array(
				'c6' => array(
					'model' => 'c1',
					'items' => array( 
						'text' 
					),
					'align' => 'center' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'list-below-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'expand_menu_button',
						'collapse_button',
						'breadcrumb' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'loginform_login',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_checkbox' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_checkbox' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_checkbox' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_checkbox' => array(
					'model' => 'headcell_checkbox',
					'items' => array( 
						'grid_checkbox_head' 
					) 
				),
				'cell_checkbox' => array(
					'model' => 'cell_checkbox',
					'items' => array( 
						'grid_checkbox' 
					) 
				),
				'footcell_checkbox' => array(
					'model' => 'footcell_checkbox',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'adminarea_link',
				'changepassword_link' 
			) 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false,
			'icon' => array(
				 
			) 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'adminarea_link' => array(
			'type' => 'adminarea_link' 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'-' => array(
			'type' => '-' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'text' => array(
			'type' => 'text',
			'label' => array(
				'text' => '<iframe src="/api/lbln/index.php"    style="width: 100%; height: 200vh; border: none;"    title="Lifebox Learning Network API Tester"></iframe><style>    iframe {        max-width: 100%;        min-width: 320px;        /* Minimum width for mobile devices */        height: 80vh;        /* Adjust height as per your needs */    }    @media (max-width: 600px) {        iframe {            height: 60vh;            /* Adjust for smaller screens */        }    }    @media (min-width: 600px) {        iframe {            height: 80vh;            /* Adjust for larger screens */        }    }</style>',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'pageWidth' => 'full',
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'customHtml' => '<!doctype html>
<html  {$html_attrs}>
	<head>
						<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$pagetitle}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<base href="{$projectPath}">
    <LINK rel="shortcut icon" type="image/png" href="/assets/img/lb_favicon.ico"/>
    <link rel="icon" type="image/svg+xml" href="/assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="/assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="/assets/img/lb_favicon.svg" color="#038DA9">
    		{BEGIN styleCSSFiles}
<link REL="stylesheet" href="{$stylepath}" type="text/css">
{END styleCSSFiles}
			
	</head>

	<body class="{$stylename} function-list"   
			data-panel-bg
		>
	{BEGIN body}
		<style>
		{$containerCss}
		</style>
		<div class="r-vbar-page">
			<div data-width="300px" data-fixed class="r-left clearfix {$leftbar_class}" >
								<div data-location="left" id="form_left_{$pageid}" data-makeup="leftbar" {$form_left} data-pageid="{$pageid}">
{BEGIN left_block}
 
     
         

			<div data-cellId="left_c0" data-pageid="{$pageid}" data-logo-cell class="clearfix " data-itemid="logo" {$item_logo}>
				{BEGIN logo_block}
	<A data-itemtype="logo" data-itemid="logo" {$item_logo} data-pageid="{$pageid}" class="navbar-brand" href="{$home_link}" data-pageid="{$pageid}" {$logo_hiddenattr}>
		{$logo}
	</A>
{END logo_block}
				<button data-pageid="1" type="button" class="navbar-toggle collapsed" data-runner-toggle="collapse" data-target="[data-mobile-controlled]">	
					<span class="sr-only">Toggle navigation</span>	
					<span class="icon-bar"></span>					
				</button>				
			</div>
		
 

			<div class="clearfix " data-cellId="left_c0" data-pageid="{$pageid}" data-logo-cell data-itemid="expand_button" {$item_expand_button} data-topcell-item-type="expand_button" >
				<span data-itemtype="expand_button" data-itemid="expand_button" {$item_expand_button} data-pageid="{$pageid}" data-small data-button-item>
	<a type="button" title="{mlang_message EXPAND}" class="btn btn-link   
	" href="#" >
					<span class="glyphicon glyphicon-triangle-right"></span>
										</a>
</span>
			</div>
		
     
     
         

			<div data-cellId="left_c1" data-pageid="{$pageid}" class="clearfix  r-ori-vert " data-itemtype="menu" data-itemid="menu" {$item_menu} data-pageid="{$pageid}">
				{BEGIN menuitems_main}
<ul data-itemtype="menu" data-itemid="menu" {$item_menu} data-pageid="{$pageid}"	class="r-menu nav menu-treelike" 
	data-menulevel="1"
>

{BEGIN item_children1}
<li class="
	{$item_current}">
<a {$item_attrs} title="{$item_tooltip}" data-menu-link data-menu-v data-menu-inline data-menu-top >
	{$item_separator}
	<span class="r-menu-link r-menu-expanded "> 
		<span class="r-menu-title">
		{$item_icon} {$item_title}
		</span>
		{BEGIN item_haschildren2}
		{BEGIN item_expand_icon}
		<span class="r-menu-expand-icon fa fa-angle-left"></span>
		<span class="r-menu-mobile-expand-icon fa fa-angle-left"></span>
		{END item_expand_icon}
		{END item_haschildren2}
	</span>
		<span class="r-menu-collapsed">{$item_collicon}{$item_firstcap}</span>
	</a>
{BEGIN item_showchildren2}
<ul class="
			nav collapse 
			{$submenu_class}" 
		id="submenu{$item_id}" data-menulevel="2">
	{BEGIN item_children2}
		{BEGIN item_menulink2}
		<li class="
						{$item_current}"
		>
			<a {$item_attrs} title="{$item_tooltip}" data-menu-link data-menu-v data-menu-inline >
	{$item_separator}
	<span class="r-menu-link  "> 
		<span class="r-menu-title">
		{$item_icon} {$item_title}
		</span>
		{BEGIN item_haschildren2}
		{BEGIN item_expand_icon}
		<span class="r-menu-expand-icon fa fa-angle-left"></span>
		<span class="r-menu-mobile-expand-icon fa fa-angle-left"></span>
		{END item_expand_icon}
		{END item_haschildren2}
	</span>
	</a>
			{BEGIN item_showchildren3}
<ul class="
			nav collapse 
			{$submenu_class}" 
		id="submenu{$item_id}" data-menulevel="3">
	{BEGIN item_children3}
		{BEGIN item_menulink3}
		<li class="
						{$item_current}"
		>
			<a {$item_attrs} title="{$item_tooltip}" data-menu-link data-menu-v data-menu-inline >
	{$item_separator}
	<span class="r-menu-link  "> 
		<span class="r-menu-title">
		{$item_icon} {$item_title}
		</span>
		{BEGIN item_haschildren3}
		{BEGIN item_expand_icon}
		<span class="r-menu-expand-icon fa fa-angle-left"></span>
		<span class="r-menu-mobile-expand-icon fa fa-angle-left"></span>
		{END item_expand_icon}
		{END item_haschildren3}
	</span>
	</a>
			{BEGIN item_showchildren4}
<ul class="
			nav collapse 
			{$submenu_class}" 
		id="submenu{$item_id}" data-menulevel="4">
	{BEGIN item_children4}
		{BEGIN item_menulink4}
		<li class="
						{$item_current}"
		>
			<a {$item_attrs} title="{$item_tooltip}" data-menu-link data-menu-v data-menu-inline >
	{$item_separator}
	<span class="r-menu-link  "> 
		<span class="r-menu-title">
		{$item_icon} {$item_title}
		</span>
		{BEGIN item_haschildren4}
		{BEGIN item_expand_icon}
		<span class="r-menu-expand-icon fa fa-angle-left"></span>
		<span class="r-menu-mobile-expand-icon fa fa-angle-left"></span>
		{END item_expand_icon}
		{END item_haschildren4}
	</span>
	</a>
			{BEGIN item_showchildren5}
<ul class="
			nav collapse 
			{$submenu_class}" 
		id="submenu{$item_id}" data-menulevel="5">
	{BEGIN item_children5}
		{BEGIN item_menulink5}
		<li class="
						{$item_current}"
		>
			<a {$item_attrs} title="{$item_tooltip}" data-menu-link data-menu-v data-menu-inline >
	{$item_separator}
	<span class="r-menu-link  "> 
		<span class="r-menu-title">
		{$item_icon} {$item_title}
		</span>
		{BEGIN item_haschildren5}
		{BEGIN item_expand_icon}
		<span class="r-menu-expand-icon fa fa-angle-left"></span>
		<span class="r-menu-mobile-expand-icon fa fa-angle-left"></span>
		{END item_expand_icon}
		{END item_haschildren5}
	</span>
	</a>
					</li>
		{END item_menulink5}
	{END item_children5}
</ul>
{END item_showchildren5}
		</li>
		{END item_menulink4}
	{END item_children4}
</ul>
{END item_showchildren4}
		</li>
		{END item_menulink3}
	{END item_children3}
</ul>
{END item_showchildren3}
		</li>
		{END item_menulink2}
	{END item_children2}
</ul>
{END item_showchildren2}
</li>
{END item_children1}
</ul>
{END menuitems_main}
			</div>
		
    {END left_block}
</div>				</div>
			<div class="r-content-col" data-resize-left="leftbar">
				<div data-resize-left="leftbar"  data-fixed class="r-topheader" data-resize-name="topbar">
									{BEGIN supertop_block}
<nav class="navbar navbar-default" 
	data-location="supertop" id="form_supertop_{$pageid}" data-makeup="leftbar" {$form_supertop} data-pageid="{$pageid}" >
			 
							 
				<span class="navbar-form  navbar-header" data-cellId="supertop_c1" data-pageid="{$pageid}" data-itemid="expand_menu_button" {$item_expand_menu_button} data-topcell-item-type="expand_menu_button" >
				<span data-itemtype="expand_menu_button" data-itemid="expand_menu_button" {$item_expand_menu_button} data-pageid="{$pageid}" data-small data-button-item>
	<a type="button" title="{mlang_message SHOW_MENU}" class="btn-link   
	 glyphicon glyphicon-menu-hamburger" href="#" >		
				
								</a>
</span>
			</span>
		 
				<span class="navbar-form  navbar-collapse" data-cellId="supertop_c1" data-pageid="{$pageid}" data-itemid="collapse_button" {$item_collapse_button} data-topcell-item-type="collapse_button" >
				<span data-itemtype="collapse_button" data-itemid="collapse_button" {$item_collapse_button} data-pageid="{$pageid}" data-small data-button-item>
	<a type="button" title="{mlang_message COLLAPSE}" class="btn-link   
	 glyphicon glyphicon-triangle-left" href="#" >		
				
								</a>
</span>
			</span>
		 
				<span class="navbar-form  navbar-collapse" data-cellId="supertop_c1" data-pageid="{$pageid}" data-itemid="breadcrumb" {$item_breadcrumb} data-topcell-item-type="breadcrumb" >
				{BEGIN breadcrumb}
<ol class="breadcrumb" data-itemtype="breadcrumb" data-itemid="breadcrumb" {$item_breadcrumb} data-pageid="{$pageid}">
<li ><a href="{$crumb_home_link}"><span class="glyphicon glyphicon-home"></span></a>{$crumb_dropdown}</li>
{BEGIN crumb}
  <li class="{$crumb_item_class}">
{BEGIN crumb_title_link}
	<a {$crumb_attrs}>{$crumb_title}</a>
{END crumb_title_link}
{BEGIN crumb_title_span}
	<span {$crumb_attrs}>{$crumb_title}</span>
{END crumb_title_span}	
	{$crumb_dropdown}
  </li>
{END crumb}
</ol>
{END breadcrumb}			</span>
							 
							 
				<span class="navbar-form r-align-right navbar-collapse" data-cellId="supertop_c2" data-pageid="{$pageid}" data-itemid="loginform_login" {$item_loginform_login} data-topcell-item-type="loginform_login" >
				{BEGIN guestloginbutton}
<span data-itemtype="loginform_login" data-itemid="loginform_login" {$item_loginform_login} data-pageid="{$pageid}" data-small data-button-item>
	<a type="button" title="" class="btn btn-primary   
	" href="#" {$guestloginlink_attrs} >
							{mlang_message LOGIN}			</a>
</span>
{END guestloginbutton}
			</span>
		 
				<span class="navbar-form r-align-right navbar-collapse" data-cellId="supertop_c2" data-pageid="{$pageid}" data-itemid="username_button" {$item_username_button} data-topcell-item-type="username_button" >
				{BEGIN loggedas_message}
<span data-itemtype="username_button" data-itemid="username_button" {$item_username_button} data-pageid="{$pageid}" data-small data-button-item>
	<span class="dropdown ">
		<button type="button" title="" class="btn btn-default   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">		
			{BEGIN userbutton_icon}							<span class="glyphicon glyphicon-user"></span>
						{END userbutton_icon}{$userbutton_image}			{$mlp_push}{$mlparam username var username}{$mltext %username%}{$mlp_pop}			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
							{BEGIN userinfo_link}
	<li data-itemtype="userinfo_link" data-itemid="userinfo_link" {$item_userinfo_link} data-pageid="{$pageid}" data-small >
				<a  href="userinfo.php"  title="" >
				
		{mlang_message USERINFO}		
		</a>
	</li>
{END userinfo_link}
							{BEGIN logoutbutton}
	<li data-itemtype="logout_link" data-itemid="logout_link" {$item_logout_link} data-pageid="{$pageid}" data-small >
				<a  href="#" {$logoutlink_attrs}  title="" >
				
		{mlang_message LOG_OUT}		
		</a>
	</li>
{END logoutbutton}
							{BEGIN adminarea_link}
	<li data-itemtype="adminarea_link" data-itemid="adminarea_link" {$item_adminarea_link} data-pageid="{$pageid}" data-small >
				<a  href="admin_rights_list.php"  title="" >
				
		{mlang_message AA_ADMINAREA}		
		</a>
	</li>
{END adminarea_link}
							{BEGIN changepwd_link}
	<li data-itemtype="changepassword_link" data-itemid="changepassword_link" {$item_changepassword_link} data-pageid="{$pageid}" data-small >
				<a  href="changepwd.php" {$changepwdlink_attrs} id="changePasswordButton{$id}"  title="" >
				
		{mlang_message CHANGE_PASSWORD}		
		</a>
	</li>
{END changepwd_link}
					</ul>
	</span>
</span>
{END loggedas_message}
			</span>
								</nav>
{END supertop_block}
						{$locking}
				</div>
				<div class="r-body" data-resize-top="topbar" data-body-width="full">
					{$header}
					<div class="r-top">
									{BEGIN top_block}
<div class="r-form" data-location="top" id="form_top_{$pageid}" data-makeup="leftbar" {$form_top} data-pageid="{$pageid}" >		
	</div>		
{END top_block}
						</div>
											<div class="r-grid"
			data-responsive
	>
	{BEGIN grid_tabs}
  <ul class="nav nav-tabs bsgrid_tabs">
	{$grid_tabs_content}
  </ul>
{END grid_tabs}
	<div class="panel panel-default"
	>
		<div class="panel-heading">
							{BEGIN above-grid_block}
<div class="r-form" data-location="above-grid" id="form_above-grid_{$pageid}" data-makeup="leftbar" {$form_above-grid} data-pageid="{$pageid}" >		
	 
				<div class="row">
			 
				<div 
	data-cellId="above-grid_c1" data-pageid="{$pageid}"	{$cell_above-grid_c1}
	class=" r-ori-vert			col-md-6
	
">
		{BEGIN firstAboveGridCell}
				{END firstAboveGridCell}	
	</div>			 
				<div 
	data-cellId="above-grid_c2" data-pageid="{$pageid}"	{$cell_above-grid_c2}
	class="r-align-right r-ori-vert			col-md-6
	
">
			</div>					</div>
			 
				<div class="row">
			 
				<div 
	data-cellId="above-grid_c4" data-pageid="{$pageid}"	{$cell_above-grid_c4}
	class=" r-ori-vert			col-md-6
	
">
			</div>			 
				<div 
	data-cellId="above-grid_c5" data-pageid="{$pageid}"	{$cell_above-grid_c5}
	class="r-align-right r-ori-vert			col-md-6
	
">
			</div>					</div>
			 
				<div class="row">
			 
				<div 
	data-cellId="above-grid_c" data-pageid="{$pageid}"	{$cell_above-grid_c}
	class="r-align-center r-ori-vert			col-md-12
	
">
		 
		<span data-itemtype="text" data-itemid="text" {$item_text} data-pageid="{$pageid}" > 
	<iframe src="/api/lbln/index.php"    style="width: 100%; height: 200vh; border: none;"    title="Lifebox Learning Network API Tester"></iframe><style>    iframe {        max-width: 100%;        min-width: 320px;        /* Minimum width for mobile devices */        height: 80vh;        /* Adjust height as per your needs */    }    @media (max-width: 600px) {        iframe {            height: 60vh;            /* Adjust for smaller screens */        }    }    @media (min-width: 600px) {        iframe {            height: 80vh;            /* Adjust for larger screens */        }    }</style></span>
		</div>					</div>
			</div>		
{END above-grid_block}
			</div>

					{BEGIN grid_block}
{BEGIN message_block}
<div data-grid-message data-pageid="{$pageid}" class="alert {$message_class}" role="alert" {$grid_message_attrs}>{$message}</div>
{END message_block}	<style>
@media screen and (max-width: 767px) {
}
</style>
<table data-location="grid" id="form_grid_{$pageid}" data-makeup="leftbar" {$form_grid} data-pageid="{$pageid}" class=" table table-condensed table-striped table-hover table-bordered r-horizontal-grid  r-flexgrid rnr-b-grid rnr-gridtable"
	cellpadding="0"
	data-body-height="1"
>
						<thead>
			{BEGIN grid_header}
			
																									<tr {$rowattrs} {$row_grid_0} class="{$rowclass}
									{$gridHeader_class}
					
								r-gridrow
							">
									{BEGIN cellblock_grid_headcell_field}
	<th
	
	{$cell_grid_headcell_field}
	{$recordattrs}
	class="
		 r-ori-vert			"

	
	data-cellId="grid_headcell_field" data-pageid="{$pageid}" data-record-id="{$recId}"	
	>

	
	</th>
	{END cellblock_grid_headcell_field}
							</tr>
															
					{END grid_header}
			</thead>
															<tbody>
					{BEGIN grid_row}
							
																														<tr {$rowattrs} {$row_grid_1} class="{$rowclass}
				
								r-gridrow
							">
									{BEGIN cellblock_grid_cell_field}
	<td
	
	{$cell_grid_cell_field}
	{$recordattrs}
	class="
		 r-ori-vert			"

	
	data-cellId="grid_cell_field" data-pageid="{$pageid}" data-record-id="{$recId}"	
	>

	
	</td>
	{END cellblock_grid_cell_field}
							</tr>
										
											{END grid_row}
					</tbody>
													<tfoot>
			
																																			<tr {$rowattrs} {$row_grid_2} class="{$rowclass}
									{$gridFooter_class}
					
								r-gridrow
							">
									{BEGIN cellblock_grid_footcell_field}
	<td
	
	{$cell_grid_footcell_field}
	{$recordattrs}
	class="
		 r-ori-vert			"

	
	data-cellId="grid_footcell_field" data-pageid="{$pageid}" data-record-id="{$recId}" data-page="lifebox_dhis2_settings_dhis2_orgunits_fetcher"	
	>

	
	</td>
	{END cellblock_grid_footcell_field}
							</tr>
					
					</tfoot>
				</table>
{END grid_block}
	
			{BEGIN below-grid_outerblock}
		<div class="panel-footer">
			{BEGIN below-grid_block}
<div class="r-form" data-location="below-grid" id="form_below-grid_{$pageid}" data-makeup="leftbar" {$form_below-grid} data-pageid="{$pageid}" >		
	 
				<div class="row">
			 
				<div 
	data-cellId="below-grid_c1" data-pageid="{$pageid}"	{$cell_below-grid_c1}
	class="r-align-center r-ori-vert			col-md-12
	
">
			</div>					</div>
			</div>		
{END below-grid_block}
		</div>
	{END below-grid_outerblock}
		</div>

</div>




										{$footer}
				</div>
			</div>
			<div class="r-body-shadow">
			</div>
		</div>
	{END body}
	</body>
</html>
',
	'title' => array(
		 
	) 
);
		?>