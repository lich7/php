<html>
<body>
<h1 align='center'>�û���¼</h1>
<table  align='center' border=1>
<form name='frmlogin' method='post' action=''>
	<tr>
		<td>�û�����</td>
		<td><input type='text' name='txtUserName' size=16 
			<?php if(isset($_COOKIE['userid'])) {echo "value=".$_COOKIE['userid'];} ?>
		></td>
	</tr>
	<tr>
		<td>��&nbsp;&nbsp;�룺</td>
		<td><input type='password' name='pw' size=16
				<?php if(isset($_COOKIE['password'])) {echo "value=".$_COOKIE['password'];} ?>
		></td>
	</tr>
	<tr>
		<td><input type='checkbox' name='ckauto' value='1'>�Զ���¼</td>
		<td align='center'><input type='submit' value='ȷ��'>&nbsp;&nbsp;<input type='reset' value='ȡ��'></td>
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
			if($_POST['ckauto']==1)
			{
				setcookie("userid",$userid,time()+86400*7);
				setcookie("password",$pw,time()+86400*7);
			}
			session_start();
			$_SESSION["userid"]=$userid;
			header("location:14.php");
		}
		else
		{
			echo "<p align='center'>������ˡ�";
		}
	}
	else
	{
		echo "<p align='center'>�˻������ڡ�";
	}
}

?>