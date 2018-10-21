<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
session_start();
header("content-type:text/html;charset:gbk");
error_reporting(0);
?>
<?php 	
	require_once("PDO.php"); 
	if($_GET['f2']==2)
	{
			$sid=$_GET['sid'];
			$xm=$_GET['xm'];
			$zy=$_GET['zy'];
			$kcmc=$_GET['kcmc'];
			$xn=$_GET['xn'];
			$xq=$_GET['xq'];
			$zp=$_GET['zp'];
	}
?><body background="kill.jpg" text="#FF0000">
<form action="" method="post">
将要：
<input name="kill" type="submit" value="进行注销操作">
<input name="pure" type="submit" value="放弃注销操作">
</form>

<?php
//var_dump($_POST[kill]);
$sql="delete from cj where xh='$sid' and kcmc='$kcmc' and xn='$xn' and xq='$xq' and zp='$zp'";
if(!empty($_POST[kill]))
	{
	$db->query($sql);
	header("Location:index.php");
	}
else if(!empty($_POST[pure]))
	header("Location:index.php");
?>
