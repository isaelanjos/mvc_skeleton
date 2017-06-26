<?php 

/*
Skeleton MVC
Isael Anjos
isael.r.anjos@gmail.com
 */

session_start();

require_once './config/config.php';
require_once './functions/globals.php';
require_once './vendor/autoload.php';

if(DEBUG == true) {
	error_reporting(E_ALL);
	ini_set("display_erros",1);
} else {
	error_reporting(0);
	ini_set("display_erros",0);
}

$Application = new \app\base\Application();

if(isset($Application) && DEBUG == true) {
	echo '<pre>';
	print_r($Application);
	echo '</pre>';
}
