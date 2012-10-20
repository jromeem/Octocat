<?php

include '../helper.php';

// desired username for registrant
$phrase = $_POST['phrase'];
$user_id = $_SESSION['user_id'];

$phrase_json = json_encode(array(0 => $phrase));
echo $phrase_json;

$query = "INSERT INTO games (creator_id, words) VALUES (" .user_id. ", '" .$phrase_json. "')";
$query = "INSERT INTO games (creator_id, words) VALUES ($user_id, '$phrase_json')";
connectAndWrite($query);

?>
