<?php
    include 'helper.php';
	
    $con = databaseAccess();
	if (empty($con))
		echo "con is empty";

	$creator = '';
	$word[0] = $_POST["wordInput"];	
	
	
	echo $word[0];
	
	echo $con;
	
	mysql_select_db("my_db", $con);
	
	mysql_query("INSERT INTO User (ID, Name, Email Address)
VALUES (1, 'test','test@')");

	//go int ocreat row in db of table 

?>
