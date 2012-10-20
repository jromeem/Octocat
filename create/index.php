<?php
	session_start();

	if (empty($_SESSION['username']))
		header('Location: http://octocat.comyr.com/logout.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="../js/jquery-1.8.2.min.js"></script>
<script src="../js/create.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/style.css">
<title>Create</title>
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
        		<form action="create_action.php" method="post">
					<p >Type in a word</p> <br />
                    <input type="text" name="wordInput" id="wordInput"/><br />
 				</form>

                <br />
            	
       		</div>
	</div><!--container end div-->

		<script>
			$('#menulogout').click(function(){
				window.location = "http://octocat.comyr.com/logout.php";
			});
			$('#logo').click(function(){
				window.location = "http://octocat.comyr.com/menu";
			});
		</script>
</body>
</html>
