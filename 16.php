<?php
session_start();
if(isset($_SESSION['userid']))
{
	if($_SESSION['usertype']==1)
	{
		echo "<p align='center'>����Ա".$_SESSION['userid']."��ӭ����";
	}
	else
	{
		echo "<p align='center'>�û�".$_SESSION['userid']."��ӭ����";
	}
}
else
{
	echo "<p align='center'>����<a href='1.htm'>��¼</a>";
	echo "< meta http-equiv='refresh' content='3;url=1.php'/>";

}


?>
