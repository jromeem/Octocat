<?php

include 'helper.php';

// login username
$username = $_POST['username'];

$query = "SELECT * FROM users WHERE username='$username'";
$array = connectAndRead($query);

header('Content-Type: application/json');
if (!empty($array)) {
	$_SESSION['username'] = $username;
	$_SESSION['user_id']  = $array[0]['id'];
	$_SESSION['turn']  = 'draw';
	echo '{"status":"success"}';
} else {
	echo '{"status":"failure"}';
}

?>
