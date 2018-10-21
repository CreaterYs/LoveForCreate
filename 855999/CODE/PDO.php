<?php
//function GetPDO()
//{
	$dsn = "mysql:host=127.0.0.1;dbname=ysdb";
	$user='ys';
	$pwd='ys123';
	$db = new PDO($dsn, $user, $pwd);
	$db->exec("SET NAMES GBK");
	return $db;
//}
?>