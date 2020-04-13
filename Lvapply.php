<?php
require 'db.php';

	$stmt = $con2->prepare("INSERT INTO `leaves`(`usn`, `fdate`, `tdate`, `Description`) VALUES (?,?,?,?)");

	$stmt->bind_param("ssss",$usn,$fdate,$todate,$reason);
	$stmt->execute();
	
?>
