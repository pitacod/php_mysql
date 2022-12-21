<?php
$dsn = "mysql:dbname=test;host=localhost";
$user="root";
$password="password";
$cn = new PDO($dsn,$user,$password);
if (!$cn)
	die("erreur connexion base de données");

?>