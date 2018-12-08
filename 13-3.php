<html>
<body>
<?php
@mysql_connect("localhost","root","root");
@mysql_select_db("mydb");
@mysql_query("SET NAMES utf8");
$sql="select userid,password,username,sex,birthday,education,hobby,suggestion from usertb";
$query=mysql_query($sql);
$num=mysql_numrows($query);
echo "usertb表中有".$num."条记录。";


echo "<table border=1 align='center' width='500'>";
echo "<th>编号</th>";
echo "<th>姓名</th>";
echo "<th>性别</th>";
echo "<th>出生日期</th>";
echo "<th>学历</th>";
echo "<th>兴趣爱好</th>";
echo "<th>备注</th>";


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
echo "</tr>";
}

echo "</table>";
?>
</body>
</html>