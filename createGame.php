<?php
    include 'helper.php';
	
    $con = databaseAccess();
	if (empty($con))
		echo "con is empty";

	$creator = '';
	$word[0] = $_POST["wordInput"];	
	
	echo $word[0];
	
	echo $con;
	//go int ocreat row in db of table 

?>
