<?php
$link=mysql_connect("localhost","root","root");
$result=mysql_select_db("mydb",$link);
@mysql_query("set names utf8");
if(isset($_POST['subcommit']))
{
	$userid=$_POST['txtid'];
	$username=$_POST['txtname'];
	$sex=$_POST['rdosex'];
	$birthday=$_POST['datbirthday'];
	$education=$_POST['slteducation'];
	$hobby=$_POST['txthobby'];
	$suggestion=$_POST['txaSuggestion'];
	$sql="update usertb set username='$username',sex=$sex,birthday='$birthday',education='$education',hobby='$hobby',suggestion='$suggestion' where userid='$userid'";
	$result=mysql_query($sql);
	if($result) {echo "成功$sex";} else {echo "失败";}
}




if(isset($_GET['userid']))
{
	$userid=$_GET['userid'];
	$sql="select userid,password,username,sex,birthday,education,hobby,suggestion from usertb where userid='$userid'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	$userid=$row['userid'];
	$password=$row['password'];
	$username=$row['username'];
	$sex=$row['sex'];
	$birthday=$row['birthday'];
	$education=$row['education'];
	$hobby=$row['hobby'];
	$suggestion=$row['suggestion'];
	$update=0;
	if(isset($_POST['subupdate']))
	{	$update=1;	}
	if(isset($_POST['subcommit']))
	{	$update=0;	}

	echo "<h1 align='center'>用户信息修改</h1>";
	echo "<table border=1 align='center'>";
	echo "<form name='frm1' method='post' action=''>";
	echo "<tr>";
	echo "<td>账号:</td>";
	echo "<td><input type='text' name='txtid' value=$userid readonly></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>密码:</td>";
	echo "<td><input type='password' name='txtpw' value=$password readonly></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>姓名:</td>";
	echo "<td><input type='text' name='txtname' value=$username";
	if($update==0) {echo " readonly";}
	echo "></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>性别:</td>";
	echo "<td><input type='radio' name='rdosex' value=1";
	if($sex==1) {echo " checked";} 
	if($update==0) {echo " disabled";}
	echo ">男";
	echo "<input type='radio' name='rdosex' readonly value=0";
	if($sex==0) {echo " checked";} 
	if($update==0) {echo " disabled";}
	echo ">女</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>生日:</td>";
	echo "<td><input type='date' name='datbirthday' value=$birthday";
	if($update==0) {echo " readonly";}
	echo "></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>学历:</td>";
	echo "<td><select name='slteducation'";
	if($update==0) {echo " disabled";}
	echo ">";
	echo "<option value='初中' ";
	if($education=='初中') {echo "selected";}
	echo ">初中";
	echo "<option value='高中' ";
	if($education=='高中') {echo "selected";}
	echo ">高中";
	echo "<option value='大专' ";
	if($education=='大专') {echo "selected";}
	echo ">大专";
	echo "<option value='本科' ";
	if($education=='本科') {echo "selected";}
	echo ">本科";
	echo "<option value='研究生' ";
	if($education=='研究生') {echo "selected";}
	echo ">研究生";
	echo "</select></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>爱好:</td>";
	echo "<td><input type='text' name='txthobby' value=$hobby";
	if($update==0) {echo " readonly";}
	echo "></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>意见:</td>";
	echo "<td><textarea cols=34 rows=8 name='txaSuggestion'";
	if($update==0) {echo " readonly";}
	echo ">$suggestion</textarea></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><input type='submit' name='subcommit' value='提交'";
	if($update==0) {echo " disabled";}
	echo "></td>";
	echo "<td align='right'><input type='submit' name='subupdate' value='修改'";
	if($update==1) {echo " disabled";}
	echo "></td>";
	echo "</tr>";
}
else
{
	echo "<a href='13-6.php'>返回</a>";
}





?>