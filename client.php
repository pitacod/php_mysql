<?php
session_start();
if (!$_SESSION['nom'])
header('location: login.php');

?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h3>Welcome!</h3>
			<br />
			<p><?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?>
			</p>
			
			<a href = "logout.php">Logout</a>
		</div>
	</div>
</body>
</html>
