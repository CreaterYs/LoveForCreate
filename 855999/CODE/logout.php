<?php 
session_start();
//echo $_SESSION['user'];
if(!empty($_SESSION['user']))
{
	session_destroy();
	//echo $_SESSION['user'];
	header("Location:login.php");
}
?>