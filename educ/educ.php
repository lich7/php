<?php
@mysql_connect("localhost","root","root");
@mysql_select_db("educ");
$query=@mysql_query("select * from student");
$pagesize=5;
$sum=mysql_numrows($query);
$total=ceil($sum/$pagesize);
if(isset($_GET['page']))
{
	$p=(int)$_GET['page'];
}
else
{
	$p=1;
}
$start=$pagesize*($p-1);
mysql_query("set names 'utf8'");
$query=@mysql_query("select * from student limit $start,$pagesize");
echo "<h1 align='center'>学生管理系统</h1>";
echo "<table border=1 align='center' width='500'>";
	echo "<tr>";
	echo "<td>学号</td>";
	echo "<td>姓名</td>";
	echo "<td>性别</td>";
	echo "<td>出生日期</td>";
	echo "<td>专业</td>";
	echo "<td>入学成绩</td>";
	echo "</tr>";
while($row=mysql_fetch_array($query))
{
	$sid=$row['Sid'];
	$sname=$row['sname'];
	$sex=$row['sex'];
	$birthday=$row['birthday'];
	$specialty=$row['specialty'];
	$Ascores=$row['Ascores'];
	echo "<tr>";
	echo "<td>$sid</td>";
	echo "<td>$sname</td>";
	echo "<td>$sex</td>";
	echo "<td>$birthday</td>";
	echo "<td>$specialty</td>";
	echo "<td>$Ascores</td>";
	echo "</tr>";
}
echo "</table>";
echo "<table align='center' width='500' border=0>";
	echo "<tr valign='top'>";
		echo "<td align='left' width='25%'>";
		echo "<a href='register.htm'>新生注册</a>";
		echo "</td>";
		echo "<td align='right' width='25%'>";
			if($p>1)
			{
				$prev=$p-1;
				echo "<a href='?page=$prev'>上一页</a>";
			}
			else
			{
				echo "第一页";
			}
		echo "</td>";
		echo "<td align='left' width='15%'>";
			if($p<$total)
			{
				$next=$p+1;
				echo "<a href='?page=$next'>下一页</a>";
			}
			else
			{
				echo "最后一页";
			}		
		echo "</td>";
		echo "<td align='right' width='35%'>";
		echo "<form name='frm2' method='get' action='select.php'>
			<input type='text' name='txtsid' size=12>
			<input type='submit' name='sub1' value='查找'>
                      </form>";
		echo "</td>";
	echo "</tr>";
echo "</table>";

?>


