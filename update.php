<?php
session_start();
$cookie_name=$_SESSION["tfname"];
$Fid=$_SESSION["uid"];
$remarks=$_POST["remarks"];

if(isset($_COOKIE[$cookie_name])) {
	require 'db.php';
	$App_id=$_POST["app_no"];
	$Apruval=$_POST["approval"];
	if($Apruval=="Approve"){
		$Apruval="Approved";
	}
	elseif ($Apruval=="Reject") {
		$Apruval="Rejected";
	}
	$check="UPDATE status1 set Approval='$Apruval',remarks='$remarks' WHERE App_id='$App_id'";

	$result= mysqli_query($con2,$check);
	echo "UPDATED SUCCESSFULY
	<br> <a href='check.php'>CLICK HERE TO GO BACK</a> </br>";

}
else
{
	echo " please login again";
}
?>