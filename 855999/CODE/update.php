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
	if($_GET['f1']==1)
	{
			$sid=$_GET['sid'];
			$xm=$_GET['xm'];
			$zy=$_GET['zy'];
			$kcmc=$_GET['kcmc'];
			$xn=$_GET['xn'];
			$xq=$_GET['xq'];
			$zp=$_GET['zp'];
	}
?><body background="update.jpg" text="#00FFFF">
<form action="" method="post">
将成绩修改成：
<input name="upzp" type="text">
<input name="up" type="submit">
<input name="end" type="submit" value="结束操作">
</form>
<?php

$sql="update cj,xj set zp='$_POST[upzp]' where sid='$sid' and xm='$xm' and zy='$zy' and kcmc='$kcmc' and xn='$xn' and xq='$xq' and cj.xh=xj.sid";
if(!empty($_POST[upzp]))
	$db->query($sql);
if(!empty($_POST[end]))
	header("Location:index.php");
?>
