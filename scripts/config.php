<?php
require 'environment.php';

global $config;
$config = array();

define('DEBUG', true);

if(ENVIRONMENT == 'development') {
	define("BASE_URL", "localhost:8000/api");
	$config['dbname'] = 'db_manager';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
	
} else {
	define("BASE_URL", "http://localhost/api/");
	$config['dbname'] = 'db_manager';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ". var_dump($e);
	exit;
}