<?php

include 'helper.php';

// desired username for registrant
$username = $_POST['username'];

$query = 'SELECT * FROM teletub_users';
$array = connectAndQuery($query);

$usernameExists = False;
for ($i = 0; $i<sizeof($array); $i++) {
	if ($array[$i]['username'] == $username) {
		$usernameExists = True;
	}
}

header('Content-Type: application/json');
if ($usernameExists) {
	echo '{"status":"success"}';
} else {
	echo '{"status":"failure"}';
}

?>
