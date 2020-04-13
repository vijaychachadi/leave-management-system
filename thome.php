


<?php
session_start();
$cookie_name=$_SESSION["tfname"];

if(isset($_COOKIE[$cookie_name])) {
    echo '<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home</title>
</head>
<body background="jce.jpg">
	<br>
	<h2 style="text-align: center;" >LEAVE MANAGEMENT SYSTEM</h2>
	<br>
	<h1 style="text-align: center;"> WELCOME</h1>
	<div align="center">
	<a href="check.php"> Check NEW application </a><br><br>
	<a href="apphist.php">Check Application History of a student</a><br><br>
	<a href="lists.php">List Student Details</a>
	<br><br>
	<a href="tlogout.php">Logout </a><br>
	</div>
</body>
</html>';
}
else {
    echo "please login again";

   
}
?>