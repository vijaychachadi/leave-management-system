<?php
session_start();
$cookie_name=$_SESSION["tfname"];
$Fid=$_SESSION["uid"];


if(isset($_COOKIE[$cookie_name])) {
	require 'db.php';
		$check="select S.fname,S.lname,S.usn,S.email,S.phno from STUDENT S, TEACHER T where S.sem=T.sem and T.Fid='$Fid'";
		$result= mysqli_query($con2,$check);
		$num=mysqli_num_rows($result);
		if($num>0)
		{	echo '<!DOCTYPE html>
				<html>
<head>
<meta charset="ISO-8859-1">
<title>Student List</title>
<style type="text/css">
table {
	padding-top: 0%;
	padding-bottom: 10%;
	padding-left: 10%;
	padding-RIGHT: 10%;
	width: 100%;
}

tr {
	text-align: center;
}

tr:nth-child(odd) {
	background-color: #f2f2f2;
	text-align: center;
}

td {
	width: 20%;
}

th {
	background-color: blue;
	color: white;
	width: 20%;
}
</style>
</head>
<body background="jce.jpg">
	<br>
	<br>
	<h2 style="text-align: center;">LEAVE MANAGEMENT SYSTEM</h2>
	<br>
		<h2 style="text-align: center;">List of Students</h2>
	<br>

	<table>
		<tr>
			<th><h4>USN</h4></th>
			<th><h4>First name</h4></th>
			<th><h4>Last Name</h4></th>
			<th><h4>Email id</h4></th>
			<th><h4>Phone no</h4></th>
		</tr>
		';




			while($row=$result->fetch_assoc()){
				echo '<tr><td><h4>'.$row["usn"].'</h4></td>
				<td><h4>'.$row["fname"].'</h4></td>
				<td><h4>'.$row["lname"].'</h4></td>
				<td><h4>'.$row["email"].'</h4></td>
				<td><h4>'.$row["phno"].'</h4></td>';
			}	
			echo '</tr></table></body></html>';
		}
		else
		{
			echo "no data";
		}
	}
	else
	{
		echo "error loading...";
	}
?>