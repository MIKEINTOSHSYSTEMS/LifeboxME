<?php
global $runnerDatabases;
$runnerDatabases = array(
	'lifebox_mesystem_at_localhost' => array(
		'connId' => 'lifebox_mesystem_at_localhost',
		'connName' => 'lifebox_mesystem at localhost',
		'dbType' => 4,
		'connStringType' => 'postgre',
		'connInfo' => array( 
			'localhost',
			'postgres',
			'mikeintosh',
			'',
			'lifebox_mesystem',
			'',
			'1',
			'{}' 
		) 
	) 
);

global $runnerRestConnections;
$runnerRestConnections = array(
	'rest' => array(
		'authType' => 'none',
		'id' => 'rest',
		'name' => 'LifeboxME_REST-API',
		'url' => 'https://lifebox.merqconsultancy.org',
		'clientCredentials' => false,
		'username' => '',
		'password' => '',
		'APIkey' => '',
		'keyLocation' => 'header',
		'keyParameter' => 'X-Auth-Token',
		'authUrl' => '',
		'tokenUrl' => '',
		'clientId' => '',
		'clientSecret' => '',
		'scope' => '' 
	) 
);

?>