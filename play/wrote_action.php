<?php

include '../helper.php';

$game_id = $_SESSION['game_id'];

$phrase = $_POST['phrase'];

// find if there were previous words already
$gameStackQuery = "SELECT words FROM games WHERE id=$game_id";
$gameStack = connectAndRead($gameStackQuery);

// if there were previous words
if (!empty($gameStack)) {
	$stackArr = json_decode($gameStack[0]);
	$newStack = array_push($stackJson, $phrase);
	$newStackJson = json_encode($newStack);
	
	$wordQuery = "UPDATE games SET words='$newStackJson' WHERE id=$gameId";
	connectAndWrite($wordQuery);
	
// this is the first word
} else {
	$phrase_json = json_encode(array($phrase));
	$phraseQuery = "UPDATE games SET words='$phrase_json' WHERE id=$game_id";
	connectAndWrite($phraseQuery);
}

?>
