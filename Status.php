<?php
session_start();
$cookie_name=$_SESSION["fname"];
$usn=$_SESSION["usn"];
if(isset($_COOKIE[$cookie_name])) {
	require 'db.php';

	$check="SELECT App_id,Approval,fdate,todate,remarks FROM status1 where usn='$usn' order by App_id DESC";
		$result= mysqli_query($con2,$check);
		$num=mysqli_num_rows($result);
if($num>0)
		{	echo'<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Leave Status</title>
<style type="text/css">

table{
 
 padding-top: 0%;
 padding-bottom: 10%;
 padding-left: 10%;
 padding-RIGHT: 10%;
 width:100%;

}
tr
{
text-align:center;
}
tr:nth-child(odd) 
{

background-color:#f2f2f2;
text-align:center;


}
td
{

}
th
{
background-color:blue;
color:white;
}
</style>

</head>
<body background="jce.jpg">
 	<br>
	<br>
	<h2 style="text-align: center;" >LEAVE MANAGEMENT SYSTEM</h2>
	<br>
	<h4 style="text-align: center;" >STATUS OF LATEST APPLICATION </h4>
	<br>
	
	<table >
	<tr >
		 <th><h4> Application id</h4></th>
		 <th><h4> FROM </h4></th>
		 <th><h4> TO </h4></th>
		<th><h4>Teacher Remarks</h4></th>
		<th><h4> Application Status</h4></th>
	</tr>
	';
	while($row=$result->fetch_assoc()){
				echo '<tr><td><h4>'.$row["App_id"].'</h4></td>
				<td><h4>'.$row["fdate"].'</h4></td>
				<td><h4>'.$row["todate"].'</h4></td>
				<td><h4>'.$row["remarks"].'</h4></td>
				<td><h4>'.$row["Approval"].'</h4></td>';
				
	}	
			echo '</tr></table></body></html>';

}
else
	echo "NO APPLICATIONS FOUND";
}
else
{
	echo "login agin";
}
?>