<?php

if (!defined('HOSTNAME')) exit;

session_start();

if(!defined('DEBUG'))
{
	error_reporting(0);
	ini_set("display_erros",0);
} else 
{
	error_reporting(E_ALL);
	ini_set("display_erros",1);
}

require_once './functions/global.php';

$App = new MainClass();
