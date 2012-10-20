<?php

include '../helper.php';

$game_id = $_SESSION['game_id'];

$phrase = $_POST['phrase'];

$phrase_json = json_encode(array($phrase));

$phraseQuery = "UPDATE games SET words='$phrase_json' WHERE id=$game_id";

connectAndWrite($phraseQuery);

?>
