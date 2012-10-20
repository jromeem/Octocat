<?php

include '../helpers.php';

$guess = $_POST['guess'];

$query = "INSERT INTO users () VALUES ('".$username."')";
connectAndWrite($query);
