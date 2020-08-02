<?php
	session_start();
	error_reporting(1);
	$user=$_SESSION['Scribbleruser'];
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"Scribbler");
	$query1=mysqli_query($link,"select * from users where Email='$user'");
	$rec1=mysqli_fetch_array($query1);
	$userid=$rec1[0];
	mysqli_query($link,"update user_status set status='Offline' where user_id='$userid'");
	unset($_SESSION['Scribbleruser']);
	//session_destroy();
	header("location:../../index.php");
?>