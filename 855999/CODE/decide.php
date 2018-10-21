<?php
	session_start();
	
	$logname=$_POST['logname'];
	$password=$_POST['password'];
	
	if($logname=='ys' && $password=='123')
		$_SESSION['user']=$logname;
		
	header("Location:login.php");
?>	