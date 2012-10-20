<?php

include 'helper.php'

session_start();

// desired username for registrant
$username = $_POST['username'];

$query = "SELECT * FROM users WHERE username='" . $username . "'";
$array = connectAndQuery($query);

if (!empty($array)) {
	$_SESSION['username'] = $username;
} else {
	header('Location:index.html');
}

?>