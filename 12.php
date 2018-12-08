<html>
<body>
<?php
if($_POST["pw1"]==$_POST["pw2"])
{
	$userid=$_POST["txtID"];
	$password=$_POST["pw1"];
	$username=$_POST["txtUserName"];
	$sex=$_POST["rdoSex"];
	if($_POST["datBirthday"]=="")
	{
		$birthday="null";
	}
	else
	{
		$birthday=$_POST["datBirthday"];
		$birthday="'$birthday'";
	}
	$education=$_POST["sltEducation"];
	$hobby="";
	if(isset($_POST["ckHobby1"]))
	{
		$hobby=$_POST["ckHobby1"];
	}
	if(isset($_POST["ckHobby2"]))
	{
		$hobby=$hobby." ".$_POST["ckHobby2"];
	}
	if(isset($_POST["ckHobby3"]))
	{
		$hobby=$hobby." ".$_POST["ckHobby3"];
	}
	if(isset($_POST["ckHobby4"]))
	{
		$hobby=$hobby." ".$_POST["ckHobby4"];
	}
	$suggestion=$_POST["txaSuggestion"];
	echo $sex;
	@mysql_connect("localhost","root","root") or die("服务器连接失败");
	@mysql_select_db("mydb") or die("数据库选择失败");
	$query=mysql_query("insert into usertb(userid,password,username,sex,birthday,education,hobby,suggestion) values('$userid','$password',n'$username',$sex,".$birthday.",n'$education',n'$hobby',n'$suggestion')");
	if($query)
	{
		echo "<h2 align='center'>数据插入成功</h2>";
	}
	else
	{
		echo "<h2 align='center'>数据插入失败</h2>";
	}
	echo "<p align='center'><a href='educ.php'>返回主页面</a> ";
	echo "<a href='2.htm'>重新注册</a>";
	mysql_close();
}
else
{
	echo "两次密码不一致请<a href='2.htm'>重新注册</a>";
}
?>
</body>
</html>