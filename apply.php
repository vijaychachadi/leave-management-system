



<?php
session_start();
$cookie_name=$_SESSION["fname"];

if(isset($_COOKIE[$cookie_name])) {
    echo '<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Apply Leave</title>
</head>
<body background="jce.jpg">
<br>
	<br>
	<h2 style="text-align: center;" >LEAVE MANAGEMENT SYSTEM</h2>
	<br>
	<div class="Boxed">
		<form action="Lvapply.php" method="post">
		<div align="center">
		<table style="text-align:Right;">
		<tr>
					<td>from:</td>
					<td><input type="date" name="fdate" min=date() required ; ></td>

		</tr>
		<tr>
					<td>To:</td>
					<td><input type="date" name="todate" min=date() required ;></td>

		</tr>
		<tr>
					<td>Reason for LEAVE:</td>
					<td><textarea name="reason" rows="10" cols="17" required ;></textarea></td>

		</tr>
		
		
		
		</table>
		
		<input type="submit" value="Apply">
		</div>
		</form>
	</div>
</body>
</html>


';
}
else {
    echo "please login again";

   
}
?>