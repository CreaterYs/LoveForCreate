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
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>INDEX</title>
</head>
<?php echo "����".$_SESSION['user'].",��ӭʹ�ñ�ϵͳ��"; ?><br>
<body background="index.jpg" text="#FFFF00">
<?php
if(!isset($_SESSION['user']))
{
?>
<?php echo "���ȵ�¼���ο�û��Ȩ�ޣ�";?><br>
<?php 
if(!empty($_POST[getlogin]))
	header("Location:login.php");
?>
<form action="" method="post">
<input name="getlogin" type="submit" value="�õģ������ҵ�¼" />
</form>
<?php 
}
else {
 ?>
<form action="" method="post">
<input name="add" type="submit" value="����¼�¼" />
<?php 
if(!empty($_POST[add]))
	header("Location:add.php");
?>
<input name="find" type="submit" value="��׼��ѯ" />
<?php 
if(!empty($_POST[find]))
	header("Location:find.php");
?>
<input name="logout" type="submit" value="�ǳ�" />
<?php 
if(!empty($_POST[logout]))
  header("Location:logout.php");
?>
</form>
  <?php
$sql="select sid,xm,zy,kcmc,xn,xq,zp from cj,xj where cj.xh=xj.sid order by zp,xn,xq,sid,kcmc";
//echo $sql;
$rs=$db->query($sql);
//echo gettype($rs);
?>
</div>
<div align="center">
  <table width="972" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <th width="118" height="31" align="center" valign="middle" scope="col">ѧ��</th>
      <th width="86" height="31" align="center" valign="middle" scope="col">����</th>
      <th width="231" height="31" align="center" valign="middle" scope="col">רҵ</th>
      <th width="142" height="31" align="center" valign="middle" scope="col">�γ�</th>
      <th width="169" height="31" align="center" valign="middle" scope="col">ѧ��</th>
      <th width="98" height="31" align="center" valign="middle" scope="col">����</th>
      <th width="98" height="31" align="center" valign="middle" scope="col">����</th>
  </tr>
    </tr>
    
  <?php
	while($row=$rs->fetch())
	{
?>
    <tr>
      <td align="center" valign="middle"><?php echo $row['sid'];?></td>
      <td align="center" valign="middle"><?php echo $row['xm'];?></td>
      <td align="center" valign="middle"><?php echo $row['zy'];?></td>
      <td align="center" valign="middle"><?php echo $row['kcmc'];?></td>
      <td align="center" valign="middle"><?php echo $row['xn']."-".($row['xn']+1)."ѧ���".$row['xq']."ѧ��";?></td>
      <td align="center" valign="middle"><?php echo $row['zp'];?></td>
      <td align="center" valign="middle">
<?php
      	$fo1="f1=1&sid=".$row['sid']."&xm=".$row['xm']."&zy=".$row['zy']."&kcmc=".$row['kcmc']."&xn=".$row['xn']."&xq=".$row['xq']."&zp=".$row['zp'];
		//echo $foo;
		$fo2="f2=2&sid=".$row['sid']."&xm=".$row['xm']."&zy=".$row['zy']."&kcmc=".$row['kcmc']."&xn=".$row['xn']."&xq=".$row['xq']."&zp=".$row['zp'];
	 ?>
    	<a href="update.php?<?php echo $fo1 ?>">���޸�������</a>
        <a href="kill.php?<?php echo $fo2 ?>">��ע����¼��</a>
       </td>
    </tr>
    <?php
	}
 ?>
   </table>
<?php } ?>
</div>
</body>
</html>