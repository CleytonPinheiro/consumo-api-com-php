<?php
require 'environment.php';

global $config;
$config = array();

define('DEBUG', true);

if(ENVIRONMENT == 'development') {
	define("BASE_URL", "https://www.replicade.com.br/api");
	$config['dbname'] = 'pedido';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
	$config['token'] ='BasicaXdPMzVLZ09EZnRvOHY3M1I6';

} else {
	define("BASE_URL", "http://localhost/api/");
	$config['dbname'] = 'pedido';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
	$config['token'] = 'Basic'.'aXdPMzVLZ09EZnRvOHY3M1I6';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ". var_dump($e);
	exit;
}