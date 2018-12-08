<html>
<body>
<h1 align='center'>用户登录</h1>
<table  align='center' border=1>
<form name='frmlogin' method='post' action=''>
	<tr>
		<td>账号：</td>
		<td><input type='text' name='txtUserid' size=16 value=<?php echo $_COOKIE["userid"] ?>></td>
	</tr>
	<tr>
		<td>密&nbsp;&nbsp;码：</td>
		<td><input type='password' name='pw' size=16 value=<?php echo $_COOKIE["password"] ?>></td>
	</tr>
	<tr>
		<td><input type='checkbox' name='ckauto' value='1'>自动登录</td>
		<td align='center'><input type='submit' value='确定'>&nbsp;&nbsp;<input type='reset' value='取消'></td>
	</tr>

</form>
</table>
<?php
if(isset($_POST['txtUserid']))
{
	if($_POST['txtUserid']<>"" and $_POST['pw']<>"")
	{
		$userid=$_POST['txtUserid'];
		$password=$_POST['pw'];
		@mysql_connect("localhost","root","root");
		@mysql_select_db("mydb");
		@mysql_query("set names utf8");
		$sql="select password from usertb where userid='$userid'";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
		$pw=$row["password"];
		if($password==$pw)
		{
			session_start();
			$_SESSION["userid"]=$userid;
			$_SESSION["password"]=$pw;
			if($_POST["ckauto"]==1)
			{
				setcookie("userid",$userid,time()+86400*7);
				setcookie("password",$pw,time()+86400*7);
			}		
			header("location:14.php");
		}
		else
		{
			echo "<p align='center'>账号或密码错误，请重新输入。";
		}
	}
	else
	{
		echo "<p align='center'>账号或密码不能为空，请重新输入。";
	}
}
?>

</body>


</html>