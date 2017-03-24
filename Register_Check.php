<?php
$con=mysqli_connect("localhost","root","","QuickFurni");
	$fname=$_POST["txtFname"];
	$lname=$_POST["txtLname"];
	$mobno=$_POST["txtMobNo"];
	$mail=$_POST["txtEmail"];
	$password=$_POST["txtPassword"];
	$add=$_POST['txtAdd'];
	$city=$_POST['txtCity'];
	$zip=$_POST['txtZip'];

	$statement=mysqli_prepare($con,"INSERT INTO tbluser VALUES(null,?,?,?,?,?,?,?,?)");
	mysqli_stmt_bind_param($statement,"sssssssi",$fname,$lname,$mobno,$mail,$password,$add,$city,$zip);
	mysqli_stmt_execute($statement);
	mysqli_stmt_close($statement);
mysqli_close($con);
?>