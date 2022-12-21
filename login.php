<?php
session_start();
require 'connexion.php';
if (isset($_POST['username']) && isset($_POST['password'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "select * from users where username='$user' and password='$pass' ";
	$result = $cn->query($sql)->fetch();
	if($result)
	{
		$_SESSION['nom'] = $result['nom'];
		$_SESSION['prenom'] = $result['prenom'];

		header('location:client.php');
	}
	else $_SESSION['message']="login ou password incorrect";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
		<div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="#">Catagori</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            </div>
                        </div>
                    </div>
               </div>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form  method="POST">	
				<h4 class="text-success">Login here...</h4>
				<hr style="border-top:1px groovy #000;">
				<?php if(isset($_SESSION['message']))

				 echo "<div class='text-danger'>".$_SESSION['message'] ."</div>" ;
				 unset($_SESSION['message']);
				 ?>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="login">Login</button>
				</div>
				<a href="register.php">Registration</a>
			</form>
		</div>
	</div>
</body>
</html>
