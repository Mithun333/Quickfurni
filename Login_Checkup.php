<?php
$con=mysqli_connect("localhost","root","","QuickFurni");
	$mail=$_POST["txtEmail"];
	$password=$_POST["txtPassword"];

	$statement=mysqli_prepare($con,"SELECT email,password FROM tbluser WHERE email=? AND password=?");
	mysqli_stmt_bind_param($statement,"ss",$mail,$password);
	mysqli_stmt_store_result($statement);
	if(mysqli_stmt_bind_result($statement,$mail,$password)>0){
		session_start();
		$_SESSION['mail']=$mail;
		header('location:index.php');
	}else{
		echo "".'<span id="error">***Invalid file Size or Type***</span><br/><br/';
	}
	mysqli_stmt_close($statement);
	mysqli_close($con);

?>