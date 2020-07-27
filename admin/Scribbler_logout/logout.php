<?php
	session_start();
	unset($_SESSION['Scribbleradmin']);
	//session_destroy();
	header("location:../../index.php");
?>