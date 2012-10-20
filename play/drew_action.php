<?php

include '../helper.php';

$game_id = $_SESSION['game_id'];

$drawing = $_POST['drawing'];

$draw_json = json_encode(array($drawing));

$drawQuery = "INSERT INTO games (id, draws) VALUES (". $game_id .",'". $draw_json ."')";
connectAndWrite($drawQuery);

?>