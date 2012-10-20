<?php

include '../helper.php';

$allGamesQuery = "SELECT * FROM games WHERE game_over='1'";

$allGames = connectAndRead($allGamesQuery);
echo "size: " + count($allGames);

// get the word array
for($i=0; $i<=count($allGames); $i++){
		echo "game is over";
		$wordsArray=$allGames[i][words];
		$drawsArray=$allGames[i][draws];
		//display connect to index.html
		for($j=0; $j<=count($wordsArray); $j++){
			echo wordsArray[$j];
			echo drawsArray[$j];//canvas
		}
}

$phrase_json = json_encode(array(0 => $phrase));
header(content-type:application/json);
echo $phrase_json;

?>
