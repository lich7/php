<html>
<body>
<?php
	$today=getdate();
	$age=$today["year"]-$_POST["txtYear"];
	$love="";
	if(isset($_POST["chkLove1"]))
	{
		$love=$_POST["chkLove1"];
	}
	if(isset($_POST["chkLove2"]))
	{
		$love=$love.",".$_POST["chkLove2"];
	}
	if(isset($_POST["chkLove3"]))
	{
		$love=$love.",".$_POST["chkLove3"];
	}
	if(isset($_POST["chkLove4"]))
	{
		$love=$love.",".$_POST["chkLove4"];
	}
	echo "<br><h1 align='center'>用户注册信息</h1>";
	echo "<table border='1' align='center'>";
	echo "<tr>";
	echo "<td>用户名:</td>";
	echo "<td>".$_POST["txtUserId"]."</td>";		
	echo "</tr>";
	echo "<tr>";
	echo "<td>姓名:</td>";
	echo "<td>".$_POST["txtUserName"]."</td>";		
	echo "</tr>";
	echo "<tr>";
	echo "<td>性别:</td>";
	if($_POST["rdoSex"]==1)
	{
		echo "<td>男</td>";
	}
	else
	{
		echo "<td>女</td>";
	}
	echo "</tr>";
	echo "<tr>";
	echo "<td>出生日期:</td>";
	echo "<td>".$_POST["txtYear"]."-".$_POST["txtMonth"]."-".$_POST["txtDay"]."</td>";	
	echo "</tr>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>最高学历:</td>";
	echo "<td>".$_POST["sltEducation"]."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>兴趣爱好:</td>";
	echo "<td>".$love."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>用户意见:</td>";
	echo "<td>".$_POST["txtMemo"]."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>注册时间:</td>";
	echo "<td>".date("Y-m-d",$today[0])."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>用户年龄:</td>";
	echo "<td>".$age."</td>";	
	echo "</tr>";
	echo "</table>";
?>
</body>
</html>