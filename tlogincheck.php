<?php
	session_start();

	require 'db.php';
	$usn=$_POST["uid"];
	$pass=$_POST["pass"];

	$check="select * from TEACHER where Fid='$usn' and pass='$pass'";
	$result= mysqli_query($con2,$check);
	$num=mysqli_num_rows($result);
	$row=$result->fetch_assoc();
	
	
	if ($num>=1) 
	{ 
		
		$cookie_name = $row["tfname"];
		$cookie_value = $row["Fid"];
		$_SESSION["tfname"] = $cookie_name;
		$_SESSION["uid"] =$cookie_value;
		setcookie($cookie_name, $cookie_value, time() + (600), "/");
		header("Location: http://localhost/thome.php");
	}
	else
	{echo '<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>LvMSyslogin</title>
<STYLE type="text/css">
div.Boxed {
	width: 50%;
	border: 1px solid White;
	padding: 20px;
	margin-left: 5%;
	margin-right: 45%;
	text-align: right;
}

div.cBoxed {
	width: 60%;
	border: 1px solid White;
	padding: 20px;
	margin-left: 20%;
	margin-right: 20%;
	text-align: right;
}
</STYLE>
</head>
<body background="jce.jpg">
	<br>
	<br>
	<h2 style="text-align: center;">LEAVE
		MANAGEMENT SYSTEM</h2>
	<br>
	<h3 style="text-align: center;"> LOGIN</h3>
	<form action="tlogincheck.php" method="post">
		<div class="Boxed">
			User id:<input type="text" name="uid"><br>
			<br> Password:<input type="password" name="pass"><br>
			<div class="cBoxed">
				<input type="submit" value="LOGIN">
			</div>
		<h6>please enter valid credentials</h6>
		</div>

	</form>


</body>
</html>';
	}
?>
