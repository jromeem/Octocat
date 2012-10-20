<?php

include '../helper.php';

$gameId = $_SESSION['game_id'];

$drawing = $_POST['drawing'];

$drawJson = json_encode(array($drawing));

$drawQuery = "UPDATE games SET draws='$drawJson' WHERE id=$gameId";

connectAndWrite($drawQuery);

?>
