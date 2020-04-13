
<!DOCTYPE html>
<html>
<head>

<title>Signup</title>
</head>
<?php
	require 'db.php';
	$fname=$_POST["tfname"];
	$lname=$_POST["tlname"];
	$gender=$_POST["tgender"];
	$usn=$_POST["Fid"];
	$sem=$_POST["sem"];
	$branch=$_POST["branch"];
	$email=$_POST["email"];
	$phno=$_POST["phno"];
	$pass=$_POST["pass"];

	$check="select * from TEACHER where Fid='$usn'";
	$result= mysqli_query($con2,$check);
	$num=mysqli_num_rows($result);
	if ($num>=1) 
	{ 
    echo '
    <body background="jce.jpg">

 	<br>
	<br>
	<h2 style="text-align: center;" >LEAVE MANAGEMENT SYSTEM</h2>
	<br>
	<h4 style="text-align: center;" >USN ALREADY REGISTERD Please Login or contact admin</h4>
	<br>
	<h5 style="text-align: center;" ><a style="text-align: center;"href="index.html">go to home </a></h5>
	<br>
	</body>
	</html>';
	}
	else
	{
	
	$stmt = $con2->prepare("INSERT INTO TEACHER VALUES (?,?,?,?,?,?,?,?,?)");

	$stmt->bind_param("sssssssss", $fname, $lname,$gender, $usn, $sem, $branch, $email, $phno, $pass);
	$stmt->execute();

		
	echo 
	'
    <body background="jce.jpg">

 	<br>
	<br>
	<h2 style="text-align: center;" >LEAVE MANAGEMENT SYSTEM</h2>
	<br>
	<h4 style="text-align: center;" >signup complited Please Login</h4>
	<br>
	<h5 style="text-align: center;" ><a style="text-align: center;"href="index.html">go to home </a></h5>
	<br>
	</body>
	</html>';
	}

?>