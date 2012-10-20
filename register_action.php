<?php

include 'helper.php';

// desired username for registrant
$username = $_POST['username'];

$query = "SELECT * FROM users WHERE username='".$username."'";
$array = connectAndRead($query);

header('Content-Type: application/json');
if (!empty($array)) {
	echo '{"status":"failure"}';
} else {
	$query = "INSERT INTO users (username) VALUES ('".$username."')";
	connectAndWrite($query);
	echo '{"status":"success"}';	
}

?>
