<?php
@mysql_connect("localhost","root","root");
@mysql_select_db("educ");
$sid=$_POST['txtsid'];
$sname=$_POST['txtsname'];
$sex=$_POST['rdosex'];
$birthday=$_POST['txtbirth'];
$specialty=$_POST['txtsp'];
$Ascores=$_POST['txtAscores'];
$query=mysql_query("insert into student values('$sid','$sname',$sex,'$birthday','$specialty',$Ascores)");
if($query)
{
	echo "<h2 align='center'>���ݲ���ɹ�</h2>";
}
else
{
	echo "<h2 align='center'>���ݲ���ʧ��</h2>";
}
echo "<p align='center'><a href='educ.php'>������ҳ��</a> ";
echo "<a href='register.htm'>��ע��һ��</a>";
mysql_close();
?>


