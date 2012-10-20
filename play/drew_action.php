<?php

include '../helper.php';

$game_id = $_SESSION['game_id'];

$drawing = $_POST['drawing'];

$draw_json = json_encode(array($drawing));

echo $draw_json;
echo gettype($draw_json);
echo

$drawQuery = "INSERT INTO games (id, draws) VALUES ($game_id,'$draw_json')";
connectAndWrite($drawQuery);

?>
