<?php
session_start();
if(isset($_SESSION['userid']))
{
	if($_SESSION['usertype']==1)
	{
		echo "<p align='center'>管理员".$_SESSION['userid']."欢迎光临";
	}
	else
	{
		echo "<p align='center'>用户".$_SESSION['userid']."欢迎光临";
	}
}
else
{
	echo "<p align='center'>请先<a href='1.htm'>登录</a>";
	echo "< meta http-equiv='refresh' content='3;url=1.php'/>";

}


?>
