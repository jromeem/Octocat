<?php
	session_start();

	if (empty($_SESSION['username']))
		header('Location: http://octocat.comyr.com/logout.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<script src="../js/jquery-1.8.2.min.js"></script>
		
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
                        	<li><img src="../img/logout.png" id="menulogout"/></li>
                    	</ul>
            		</div>
                </td>
                </tr>
           </table>
		</div>
        	<div id="centerButtons">
        		<div id="play"><img src="../img/play.png" /></div>
                <br />
            	<div id="create"><img src="../img/create.png" /></div>
       		</div>
	</div><!--container end div-->
	</body>
	<script>
		$(document).ready(function(){
			$('#create, #play').hover(
				function(){
					var imgName = $(this).attr('id');
					$(this).children().attr('src', '../img/' + imgName + '_dp.png');
				},
				function(){
					var imgName = $(this).attr('id');
					$(this).children().attr('src', '../img/' + imgName + '.png');
				}
			);
			
			$('#create').click( function(){
					window.location = '../create/';
			});
			
			$('#play').click( function(){
					window.location = '../play/';
			});
		});
	</script>
		<script>
			$('#menulogout').click(function(){
				window.location = "http://octocat.comyr.com/logout.php";
			});

			$('#logo').click(function(){
				window.location = "http://octocat.comyr.com/menu";
			});
		</script>
</html>
