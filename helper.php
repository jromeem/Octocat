<?php
function test(){
	return "daowzadsfaf";
}

function databaseAccess(){
	
	$mysql_host = "mysql6.000webhost.com";
	$mysql_database = "a4259366_octo";
	$mysql_user = "a4259366_octo";
	$mysql_password = "asdf1234";

	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$result = mysql_query("SELECT * FROM users");
	
	echo var_dump($result);

	return $result;
}

?>
