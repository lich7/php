<?php
@mysql_connect("localhost","root","root");
@mysql_select_db("educ");
session_start();
$xh=$_SESSION['sid'];
$sid=$_POST['txtsid'];
$sname=$_POST['txtsname'];
$sex=$_POST['rdosex'];
$birthday=$_POST['txtbirth'];
$specialty=$_POST['txtsp'];
$Ascores=$_POST['txtAscores'];
$query=mysql_query("update student set sid='$sid',sname='$sname',sex=$sex,birthday='$birthday',specialty='$specialty',Ascores=$Ascores where Sid=$xh");
if($query)
{
	echo "<h1 align='center'>数据更新成功</h1>";
}
else
{
	echo "<h1 align='center'>数据更新失败</h1>";
}
mysql_close();
echo "<p align='center'><a href='select.php?txtsid=$sid'>返回</a>";
?>