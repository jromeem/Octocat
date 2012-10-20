<?php

function connectAndQuery($query) {
	include 'config.php';
	
	mysql_connect($host, $user, $pass);
	mysql_select_db($dbname);
	
	$result = mysql_query($query);
	
	$array = array();
	while($row = mysql_fetch_array($result)) {
		array_push($array, $row);
	}
	
	return $array;
}

?>
