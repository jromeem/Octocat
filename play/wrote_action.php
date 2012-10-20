<?php

include '../helper.php';

$gameId = $_SESSION['game_id'];

$phrase = $_POST['phrase'];

$phraseJson = json_encode(array($phrase));

$phraseQuery = "UPDATE games SET words='$phraseJson' WHERE id=$gameId";

connectAndWrite($phraseQuery);

?>
