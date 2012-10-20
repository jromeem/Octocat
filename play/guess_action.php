<?php

include '../helpers.php';

$phrase = $_POST['phrase'];
$drawing = $_POST['drawing'];

$draw_json = json_encode(array($drawing));
$phrase_json = json_encode(array($phrase));

$drawQuery = "INSERT INTO games (draws) VALUES ('" . $draw_json . "')";
connectAndWrite($query);

$wordsQuery = "INSERT INTO games (words) VALUES ('" . $phrase_json . "')";
connectAndWrite($query);



?>