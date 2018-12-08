<html>
<body>
<?php
@mysql_connect("localhost","root","root");
@mysql_select_db("mydb");
@mysql_query("SET NAMES utf8");

$q=mysql_query("select count(id) from usertb");
$num=mysql_result($q,0,0);
$pagesize=5;
$maxpage=ceil($num/$pagesize);
if(isset($_GET['p']))
{$page=$_GET['p'];}
else
{$page=1;}

if(isset($_POST['txtselect']))
{
	$uid=$_POST['txtselect'];
	$sql="select userid,password,username,sex,birthday,education,hobby,suggestion from usertb where userid='".$uid."'";
}
else
{
	$start=($page-1)*5;
	$sql="select userid,password,username,sex,birthday,education,hobby,suggestion from usertb limit $start,$pagesize";
}
$query=mysql_query($sql);


echo "<h1 align='center'>用户管理系统</h1>";

echo "<table border=1 align='center' width='500'>";
echo "<th>编号</th>";
echo "<th>姓名</th>";
echo "<th>性别</th>";
echo "<th>出生日期</th>";
echo "<th>学历</th>";
echo "<th>兴趣爱好</th>";
echo "<th>备注</th>";
echo "<th>操作</th>";

while($row=mysql_fetch_array($query))
{
$id=$row['userid'];
$name=$row['username'];
if($row['sex']==1)
{$sex='男';}
else
{$sex='女';}
$birthday=$row['birthday'];
$edu=$row['education'];
$hobby=$row['hobby'];
$memo=$row['suggestion'];

echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$sex."</td>";
echo "<td>".$birthday."</td>";
echo "<td>".$edu."</td>";
echo "<td>".$hobby."</td>";
echo "<td>".$memo."</td>";
echo "<td><a href='14.php?userid=$id'>修改</a></td>";
echo "</tr>";
}
echo "</table>";
echo "<table border=0 align='center' width='500'>";
echo "<tr  valign='top'>";
echo "<td><a href='2.php' width=35%>注册</a></td>";
$prew=$page-1;
$next=$page+1;
if($page<=1)
{
	echo "<td width=15% align='right'>首页</td>";
}
else
{
	echo "<td width=15% align='right'><a href='?p=$prew'>上一页</a></td>";
}
if($page>=$maxpage)
{
	echo "<td width=15%>尾页</td>";
}
else
{
	echo "<td width=15%><a href='?p=$next'>下一页</a></td>";
}
echo "<td width=35% align='right'>";
echo "<form name='frm1' method='post' action=''>";
echo "<input type='text' name='txtselect' size=8>";
echo "<input type='submit' value='查询' name='subselect'>";
echo "</form>";
echo "</td>";
echo "</tr>";
echo "</table>";


?>
</body>
</html>












