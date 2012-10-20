<?php

session_start();

function connectAndRead($query) {
	include 'config.php';
	
	mysql_connect($host, $user, $pass);
	mysql_select_db($dbname);
	
	$result = mysql_query($query);
	
	$array = array();
	try {
		while($row = mysql_fetch_array($result)) {
			array_push($array, $row);
		}
	}
	catch (Exception $e) {}
	
	mysql_close();
	
	return $array;
}

function connectAndWrite($query) {
	include 'config.php';
	
	mysql_connect($host, $user, $pass);
	mysql_select_db($dbname);
	
	$result = mysql_query($query);
	
	mysql_close();
}

?>
