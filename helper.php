<?php
function test(){
	return "daowzadsfaf";
}

function databaseAccess(){

	$host = "http://www.texaswushu.org/";
	$user = "drupal_kxuj";
	$pass = "bel502a";
	$dbname = "drupal_kxuj";
	$encpass = md5("bel502a");

	mysql_connect($host, $user, $pass);
	mysql_select_db($dbname);
	$result = mysql_query("SELECT * FROM teletub_users");
	
	echo var_dump($result);

	return $conn;
}

?>
