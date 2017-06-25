<?php 

function check_array($array, $key) 
{
	if(isset($array[$key]) && !empty($array[$key])) {
		return $array[$key];
	}
	return null;
}

function write_log() 
{
	return;
}

function check_session_login()
{
	if (isset($_SESSION['key']) && !empty($_SESSION['key']) && is_array($_SESSION['key']) && ($_SESSION['key'] === KEY)) {
		header('location: ./home.php');
	}
}

?>