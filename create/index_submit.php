<?php
    include '../helper.php';
	
	$query = 'SELECT * FROM users';
    $result = connectAndQuery($query);
	
	//print_r($result);
	echo $result[0]['username'];
	
	$creator = '';
	$word[0] = $_POST["wordInput"];	
	
	echo $word[0];
	
	print_r($con)
	//go int ocreat row in db of table 

?>
