<?php
session_start();

header("content-type:text/html;charset:gbk");

error_reporting(0);

require_once("PDO.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>INDEX</title>
</head>
<?php echo "����".$_SESSION['user'].",�ܱ�Ǹ���������������ע������ѧ��ʱ�������пո�"; ?><br>
<body background="IfError.jpg" text="#000000">

<form action="" method="post">
<input name="ISee" type="submit" value="���˽���" />
<?php 
if(!empty($_POST[ISee]))
	header("Location:find.php");
?>
</form>