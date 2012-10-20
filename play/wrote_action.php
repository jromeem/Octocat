<?php

include '../helper.php';

$game_id = $_SESSION['game_id'];

$phrase = $_POST['phrase'];

// find if there were previous words already
$gameStackQuery = "SELECT words FROM games WHERE id=$game_id";
$gameStack = connectAndRead($gameStackQuery);

// if there were previous words
if (!empty($gameStack)) {
	echo "gameStack: ";
	echo gettype($gameStack);
	print_r($gameStack);
	echo "<br/>";

	$stackArr = json_decode($gameStack[0]);
	
	echo "stackArr: ";
	echo gettype($stackArr);
	print_r($stackArr);
	echo "<br/>";
	
	$newStack = array_push($stackArr, $phrase);
	
	echo "newStack: ";
	echo gettype($newStack);
	print_r($newStack);
	echo "<br/>";
	
	$newStackJson = json_encode($newStack);
	
	echo "newStackJson: ";
	echo gettype($newStackJson);
	print_r($newStackJson);
	echo "<br/>";
	
	$wordQuery = "UPDATE games SET words='$newStackJson' WHERE id=$gameId";
	
	echo "newStackJson: ";
	echo gettype($wordQuery);
	print_r($wordQuery);
	echo "<br/>";
	
	connectAndWrite($wordQuery);
	
// this is the first word
} else {
	echo "was the first draw";

	$phrase_json = json_encode(array($phrase));
	$phraseQuery = "UPDATE games SET words='$phrase_json' WHERE id=$game_id";
	connectAndWrite($phraseQuery);
}

?>
