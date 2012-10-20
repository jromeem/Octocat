<?php
function test(){
	return "daowzadsfaf";
}

function databaseAccess(){
	
	mysql_connect($host, $user, $pass);
	mysql_select_db($dbname);
	
	$result = mysql_query("SELECT * FROM teletub_users");
	
	while($row = mysql_fetch_array($con)) {
		echo $row['username'];
		echo "<br/>";
	}

	return $result;
}

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
