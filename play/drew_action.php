<?php

include '../helpers.php';

$game_id = $_SESSION['game_id'];

$drawing = $_POST['drawing'];

$draw_json = json_encode(array($drawing));

$drawQuery = "INSERT INTO games (id, draws) VALUES (". $id .",'". $draw_json ."')";
connectAndWrite($query);

?>