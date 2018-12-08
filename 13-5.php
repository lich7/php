<?php
@mysql_connect("localhost","root","root") or die("服务器连接失败");
@mysql_select_db("mydb") or die("数据库选择失败");
@mysql_query("set names utf8");
$result=mysql_query("select count(*) from usertb");
$num=mysql_result($result,0,0);
$pagesize=5;
$maxpage=ceil($num/$pagesize);
if(isset($_GET['p']))
{$page=$_GET['p'];}
else
{$page=1;}
$start=($page-1)*5;

$sql="select userid,password,username,sex,birthday,education,hobby,suggestion from usertb limit $start,$pagesize";
$query=mysql_query($sql);
echo "<h1 align='center'>用户信息</h1>";
echo "<table border=1 align='center'>";
echo "<tr>";
echo "<td>账号</td>";
echo "<td>密码</td>";
echo "<td>姓名</td>";
echo "<td>性别</td>";
echo "<td>生日</td>";
echo "<td>学历</td>";
echo "<td>爱好</td>";
echo "<td>意见</td>";
echo "</tr>";
while($row=mysql_fetch_array($query))
{
	$userid=$row['userid'];
	$password=$row['password'];
	$username=$row['username'];
	if($row['sex']==1)
	{$sex='男';}
	else
	{$sex='女';}
	$birthday=$row['birthday'];
	$education=$row['education'];
	$hobby=$row['hobby'];
	$suggestion=$row['suggestion'];
	echo "<tr>";
	echo "<td>".$userid."</td>";
	echo "<td>".$password."</td>";
	echo "<td>".$username."</td>";
	echo "<td>".$sex."</td>";
	echo "<td>".$birthday."</td>";
	echo "<td>".$education."</td>";
	echo "<td>".$hobby."</td>";
	echo "<td>".$suggestion."</td>";
	echo "</tr>";
}
echo "</table>";

echo "<table align='center'>";
echo "<tr>";
echo "<td><a href='2.php'>注册</a></td>";
$prew=$page-1;
$next=$page+1;
if($page<=1)
{
	echo "<td>首页</td>";
}
else
{
	echo "<td><a href='?p=$prew'>上一页</a></td>";
}
if($page>=$maxpage)
{
	echo "<td>尾页</td>";
}
else
{
	echo "<td><a href='?p=$next'>下一页</a></td>";
}
echo "<td>查询</td>";
echo "</tr>";
echo "</table>"




?>