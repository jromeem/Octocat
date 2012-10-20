<?php

include '../helper.php';

$game_id = $_SESSION['game_id'];

$drawing = $_POST['drawing'];

$draw_json = json_encode(array($drawing));

$drawQuery = "UPDATE games SET draws='$draw_json' WHERE id=$game_id";

connectAndWrite($drawQuery);

?>
