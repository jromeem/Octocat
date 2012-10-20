<?php

include '../helper.php';

$gameId = $_SESSION['game_id'];

$drawing = $_POST['drawing'];

// find if there were previous draws already
$gameStackQuery = "SELECT draws FROM games WHERE id=$game_id";
$gameStack = connectAndRead($gameStackQuery);

// if there were previous draws
if (!empty($gameStack)) {
	$stackArr = json_decode($gameStack[0]);
	$newStack = array_push($stackJson, $drawing);
	$newStackJson = json_encode($newStack);
	
	$drawQuery = "UPDATE games SET draws='$newStackJson' WHERE id=$gameId";
	connectAndWrite($drawQuery);
	
// this is the first draw
} else {
	$drawJson = json_encode(array($drawing));
	$drawQuery = "UPDATE games SET draws='$drawJson' WHERE id=$gameId";
	connectAndWrite($drawQuery);
}

?>
