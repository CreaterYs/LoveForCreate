<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<style type="text/css">
body,td,th {
	color: #00F;
	font-weight: bold;
}
body {
	background-image: url(add.jpg);
	background-repeat: repeat;
}
</style>
</head>
<?php
session_start();
header("content-type:text/html;charset:gbk");
error_reporting(0);
?>
<?php 	
	require_once("PDO.php"); 
?>
<form action="" method="post">
将要添加新记录：<br>
学号:<input name="id" type="text" /><br>
姓名:<input name="name" type="text" /><br>
专业:<input name="zy" type="text" /><br>
课程:<input name="major" type="text" /><br>
学年:<input name="year" type="text" /><br>
学期:<input name="xq" type="text" /><br>
总评:<input name="degree" type="text" /><br>
<input name="add" type="submit" value="添加">
<input name="noadd" type="submit" value="取消添加">
</form>

<?php
$sql1="INSERT INTO cj (xh,kcmc,xn,xq,zp) VALUES ('$_POST[id]','$_POST[major]','$_POST[year]','$_POST[xq]','$_POST[degree]')";
$sql2="INSERT INTO xj (sid,xm,zy) VALUES ('$_POST[id]','$_POST[name]','$_POST[zy]')";
if(!empty($_POST[add]))
	{
	$db->query($sql1);
	$db->query($sql2);
	header("Location:index.php");
	}
else if(!empty($_POST[noadd]))
	header("Location:index.php");
?>

</body>
</html>
