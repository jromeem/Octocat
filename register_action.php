<?php

include 'helper.php';

// desired username for registrant
$username = $_POST['username'];

$query = 'SELECT * FROM users WHERE username='.$username;
$array = connectAndQuery($query);

header('Content-Type: application/json');
if (empty($array)) {
	echo '{"status":"success"}';
} else {
	echo '{"status":"failure"}';
}

/*
$usernameExists = False;
for ($i = 0; $i<sizeof($array); $i++) {
	if ($array[$ii]['username'] == $username) {
		$usernameExists = True;
	}
}
*/


?>