<?php

include 'helper.php';

// login username
$username = $_POST['username'];

$query = "SELECT * FROM users WHERE username='$username'";
$array = connectAndRead($query);

if (!empty($array)) {
	$_SESSION['username'] = $username;
	echo '{"status": "success"}';
} else {
	echo '{"status": "failure"}';
}

?>
