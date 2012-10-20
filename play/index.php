<?php session_start(); 

	include '../helper.php';
	
	$countQuery = 'SELECT COUNT(*) FROM games';
	$countResult = connectAndRead($countQuery);
	$count = $countResult[0];
	
	$rand_val = rand(1, $count);
	$query = 'SELECT * FROM games WHERE id='.$rand_val;
	$result = connectAndRead($query);
	
	$play = '';
	if ($_SESSION['turn'] == 'words') {
		$play = json_decode($result[0]['words']);
	} else {
		$play = json_decode($result[0]['draws']);
	}
	$play = $play[0];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<script src="../js/jquery-1.8.2.min.js"></script>
		<script src="../js/game.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body>
        <div class="container">
		<div id="header">
            <table>
            	<tr>
                <td>
        			<div id = "logo">
						<img src="../img/octomom_logo.png" id="logo"/>
        			</div>
                </td>
                <td>   
           			<div class = "topbar">
                    <ul>
                    		<li><img src="../img/archive.png" id="menuIcon"/></li>
                        	<li><img src="../img/logout.png" id="menulogout"/></li>
                    	</ul>
            		</div>
                </td>
                </tr>
           </table>
		</div>
		<div >
			<div id="gameDiv">
				<?php
					if ($_SESSION['turn'] == 'words') {
						echo "<h1>turn is words; here is play: $play</h1>";
						$_SESSION['turn'] = 'draws';
					} else {
						echo '<div id="canvasDiv">
							  <button id="clear">Clear!</button>
							  <button id="save">Save!</button></div>';
						$_SESSION['turn'] = 'words';
					}
				?>
				<div id="wordDiv">
					WAT IS THIS, <?= $_SESSION['username']; ?>?????? YOUR USER ID IS <?= $_SESSION['user_id']; ?>
					<input type="text" id="wordInput" />
				</div>
			</div>
			<!-- <a href="next page"><img src="trashhhh" id="createButton" /></a>
			<a href="other next page"><img src="other trash" id="playButton" /></a> -->
		</div>
        </div>
		<script>
			$('#menulogout').click(function(){
				window.location = "http://octocat.comyr.com/logout.php";
			});
		</script>
	</body>
</html>
