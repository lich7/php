<html>
<body>
<h1 align='center'>用户登录</h1>
<table  align='center' border=1>
<form name='frmlogin' method='post' action=''>
	<tr>
		<td>用户名：</td>
		<td><input type='text' name='txtUserName' size=16 ></td>
	</tr>
	<tr>
		<td>密&nbsp;&nbsp;码：</td>
		<td><input type='password' name='pw' size=16></td>
	</tr>
	<tr>
		<td><input type='checkbox' value='1'>自动登录</td>
		<td align='center'><input type='submit' value='确定'>&nbsp;&nbsp;<input type='reset' value='取消'></td>
	</tr>

</form>
</table>
</body>
</html>
<?php
if(isset($_POST['txtUserName']) and isset($_POST['pw']))
{
	$userid=$_POST['txtUserName'];
	$password=$_POST['pw'];
	@mysql_connect("localhost","root","root");
	@mysql_select_db("mydb");
	@mysql_query("set name utf8");
	$sql="select password from usertb where userid='$userid'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	$pw=$row["password"];
	if(isset($pw))
	{
		if($password==$pw)
		{
			session_start();
			$_SESSION["userid"]=$userid;
			header("location:14.php");
		}
		else
		{
			echo "<p align='center'>密码错了。";
		}
	}
	else
	{
		echo "<p align='center'>账户不存在。";
	}
}

?>