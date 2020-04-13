<?php
session_start();
$cookie_name=$_SESSION["tfname"];
$Fid=$_SESSION["uid"];


if(isset($_COOKIE[$cookie_name])) {
	require 'db.php';
		$check="SELECT l.App_id,l.usn,l.fdate,l.tdate,l.Description FROM leaves l,status1 s where l.App_id=s.App_id and s.Approval = 'pending' ";
		$result= mysqli_query($con2,$check);
		$num=mysqli_num_rows($result);
		if($num>0)
		{	echo'<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>New application</title>
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
		 <th><h4> USN</h4></th>
		 <th><h4> From date</h4></th>
		 <th><h4> To date</h4></th>
		<th><h4> description</h4></th>
		<th><h4> REMARKS</h4></th>
		<th>Approval</th>
		<th>UPDATE</th>
		
	</tr>';

	while($row=$result->fetch_assoc()){
				echo '<tr><td><h4>'.$row["App_id"].'</h4></td>
				<td><h4>'.$row["usn"].'</h4></td>
				<td><h4>'.$row["fdate"].'</h4></td>
				<td><h4>'.$row["tdate"].'</h4></td>
				<td><h4>'.$row["Description"].'</h4></td>
				<td><form action="update.php" method="post">
					
				<textarea name="remarks" rows="3" cols="25";></textarea></td>
				<td>
				<select name="approval">
 						 <option value="Pending">Pending</option>
 						 <option value="Approve">Approve</option>
 						 <option value="Reject">Reject</option>
						</select>
						<input type="hidden" name=app_no value='.$row["App_id"].'>
				</td>
				
				<td><input type="submit" value="submit">
			
				</form>
				</td>';
	
						 
					


			}	
			echo '</tr></table></body></html>';

}
else
	echo "NO NEW APPLICATIONS FOUND
	<br> <a href='thome.php'>CLICK HERE TO GO BACK</a> </br>";
}
else
{
	echo "login agin";
}
?>