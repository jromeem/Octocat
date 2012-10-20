<?php

include 'helper.php';

// desired username for registrant
$phrase = $_POST['phrase'];
$user_id = $_SESSION['user_id'];

$query = "INSERT INTO games (creator, words) VALUES ('" .user_id. ", " .$words. "')";
connectAndWrite($query);

?>
