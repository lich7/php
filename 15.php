<html>
<body>
<h1 align='center'>�û���¼</h1>
<table  align='center' border=1>
<form name='frmlogin' method='post' action=''>
	<tr>
		<td>�˺ţ�</td>
		<td><input type='text' name='txtUserid' size=16 value=<?php echo $_COOKIE["userid"] ?>></td>
	</tr>
	<tr>
		<td>��&nbsp;&nbsp;�룺</td>
		<td><input type='password' name='pw' size=16 value=<?php echo $_COOKIE["password"] ?>></td>
	</tr>
	<tr>
		<td><input type='checkbox' name='ckauto' value='1'>�Զ���¼</td>
		<td align='center'><input type='submit' value='ȷ��'>&nbsp;&nbsp;<input type='reset' value='ȡ��'></td>
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
			echo "<p align='center'>�˺Ż�����������������롣";
		}
	}
	else
	{
		echo "<p align='center'>�˺Ż����벻��Ϊ�գ����������롣";
	}
}
?>

</body>


</html>