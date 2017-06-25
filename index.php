<?php 

/*
Skeleton MVC
Isael Anjos
isael.r.anjos@gmail.com
 */

session_start();

require_once './config/config.php';
require_once './vendor/autoload.php';
require_once './functions/globals.php';

if(!defined('DEBUG')) {
	error_reporting(0);
	ini_set("display_erros",0);
} else {
	error_reporting(E_ALL);
	ini_set("display_erros",1);
}

$App = new MainClass();

if(DEBUG) {
	echo '<pre>';
	print_r( $App);
	echo '</pre>';
}

?>