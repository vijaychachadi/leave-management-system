<?php
session_start();
$cookie_name=$_SESSION["fname"];

if(isset($_COOKIE[$cookie_name])) {
    echo '<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>home</title>
</head>
<body background="jce.jpg">
<br>

	<br>
	<h2 style="text-align: center;" >LEAVE MANAGEMENT SYSTEM</h2>
	<br>
	<div align="center">
	<a href="apply.php">APPLY NEW</a><br> 
	<a href="Status.php">CHECK STATUS </a><br>
	<a href="logout.php">Logout </a><br>
	</div> 
</body>
</html>
';
}
else {
    header("Location: http://localhost");

   
}
?>