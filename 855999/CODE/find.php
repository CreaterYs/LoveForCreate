<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��׼��ѯ</title>
</head>
<?php
session_start();

header("content-type:text/html;charset:gbk");

error_reporting(0);

require_once("PDO.php");
//GetPDO();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>��ȷ��ѯ����</title>
</head>
<?php






$rs=$db->query("select DISTINCT kcmc from cj");
$rs2=$db->query("select DISTINCT xn from cj");
$rs3=$db->query("select DISTINCT xq from cj");
$foo=$db->query("select zp from cj where xh='$_POST[sid]' and kcmc='$_POST[classlist]' and xn='$_POST[xn]' and '$_POST[xq]'");

	
?>
<form action="" method="post">

����ѧ�ţ�<input name="sid" type="text" />
����ѧ�꣺
<select name="xn">
<?php
while($xn=$rs2->fetch()){
?>
  <option value="<?php echo $xn[0];?>"><?php echo $xn[0];?></option>
<?php
}
?>
</select>
����ѧ�ڣ�
<select name="xq">
<?php
while($xq=$rs3->fetch()){
?>
  <option value="<?php echo $xq[0];?>"><?php echo $xq[0];?></option>
<?php
}
?>
</select>
ѡ��γ̣�<select name="classlist">
<?php
while($row=$rs->fetch()){
?>
  <option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php
}
?>
</select>
<input name="submit" type="submit" value="��ѯ" />
<?php
$fo2=$foo->fetch();
if(!empty($_POST[submit])){
?>

<?php
	echo "��������Ϊ�� $fo2[0] ��";
?>
<br>
<?php 
if(empty($fo2[0]))
	header("Location:IfError.php");
}
?>
<a href="./index.php" title="������ҳ">������ҳ</a>
</form>
<body>
</body>
</html>