<?php

include '../helper.php';

$allGamesQuery = "SELECT *";

$allGames = connectAndRead($allGamesQuery);

// get the word array
for($i=0; $i<=count($allGames); $i++){
	echo "going through all games"+i;
	if($allGames[i][game_over] == 1){
		echo "game is over";
		$wordsArray=$allGames[i][words];
		$drawsArray=$allGames[i][draws];
		//display connect to index.html
		for($j=0; $j<=count($wordsArray); $j++){
			echo "wordsArray[$j]: " . wordsArray[j] . "<br />";
			echo "drawssArray[$j]: " . drawsArray[j] . "<br />";
		}
	}
}

$phrase_json = json_encode(array(0 => $phrase));
echo $phrase_json;*/

?>
