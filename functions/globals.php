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
