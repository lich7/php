<html>
<?php
session_start();
if(isset($_POST['txtID']))						//判断是否从login.htm登录
{
	$_SESSION['ID']=$_POST['txtID'];				//用户名存SESSION中
}
if(isset($_SESSION['ID']))						//判断登录状态
{
	echo "<frameset cols='250,*'>";
		echo "<frame name='list' src='list.php'>";
		echo "<frameset rows='*,220'>";
			echo "<frame name='message' src='message.php'>";
			echo "<frame name='speak' src='speak.php'>";
		echo "</framset>";
	echo "</frameset>";
}
else
{
	header("location:login.htm");					//没登录就转到login.htm页面
}
?>
</html>
