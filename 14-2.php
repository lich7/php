<?php
if(isset($_GET['userid']))
{
	$userid=$_GET['userid'];
	$link=mysql_connect("localhost","root","root");
	$db=mysql_select_db("mydb",$link);
	@mysql_query("set names utf8");
	$sql="select userid,password,username,sex,birthday,education,hobby,suggestion from usertb where userid='".$userid."'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);

	$userid=$row['userid'];
	$password=$row['password'];
	$name=$row['username'];
	$sex=$row['sex'];
	$birthday=$row['birthday'];
	$edu=$row['education'];
	$hobby=$row['hobby'];
	$suggestion=$row['suggestion'];
	
	echo "<h1 align='center'>用户信息修改</h1>";
	echo "<table border=1 align='center'>";
	echo "<form name='frm1' method='post' action=''>";
	echo "<tr>";
	echo "<td>账户:</td>";
	echo "<td><input type='text' name='txtid' value=$userid disabled></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>密码:</td>";
	echo "<td><input type='password' name='txtid' value=$password disabled></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>姓名:</td>";
	echo "<td><input type='text' name='txtid' value=$name disabled></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>性别:</td>";
	echo "<td><input type='radio' name='txtid' ";
	if($sex==1) {echo "checked";} 
	echo " disabled>男";
	echo "<input type='radio' name='txtid' ";
	if($sex==0) {echo "checked";} 
	echo " disabled>女</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>生日:</td>";
	echo "<td><input type='date' name='txtid' value=$birthday disabled></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>学历:</td>";
	echo "<td>";
	echo "<select name='sltEducation' disabled>";
	echo "<option value='初中'";
	if($edu=='初中') {echo " selected";} 
	echo ">初中";
	echo "<option value='高中'"; 
	if($edu=='高中') {echo " selected";} 
	echo ">高中";
	echo "<option value='大专'";
	if($edu=='大专') {echo " selected";} 
	echo ">大专";
	echo "<option value='本科'";
	if($edu=='本科') {echo " selected";} 
	echo ">本科";
	echo "<option value='研究生'";
	if($edu=='研究生') {echo " selected";} 
	echo ">研究生";
	echo "</select>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>爱好:</td>";
	echo "<td><input type='text' name='txtid' value=$hobby disabled></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>意见:</td>";
	echo "<td><textarea cols=34 rows=8 name='txaSuggestion' disabled>".$suggestion."</textarea></td>";
	echo "</tr>";
 	echo "</form>";
	echo "</table>";
}
else
{
	echo "<a href='13-6.php'>返回</a>";
}




?>