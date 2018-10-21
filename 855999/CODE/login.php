<?php
session_start();

header("content-type:text/html;charset:gbk");

error_reporting(0); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>login</title>
</head>

<body background="login.jpg" text="#FF00FF">
<?php
if(isset($_SESSION['user']))
{
	header("Location:index.php");
}
else {
?>
<form action="decide.php" method="post">
用户名：
<input name="logname" type="text" />
密码：
<input name="password" type="password" />
<input name="submit" type="submit" value="登录" />
</form>
<?php
}
?>
</body>
</html>