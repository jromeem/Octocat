<?php

include '../helper.php';

$game_id = $_SESSION['game_id'];

$phrase = $_POST['phrase'];

$phrase_json = json_encode(array($phrase));

$phraseQuery = "INSERT INTO games (id, draws) VALUES (". $game_id .",'". $phrase_json ."')";
connectAndWrite($phraseQuery);

?>