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
	echo "<br><h1 align='center'>�û�ע����Ϣ</h1>";
	echo "<table border='1' align='center'>";
	echo "<tr>";
	echo "<td>�û���:</td>";
	echo "<td>".$_POST["txtUserId"]."</td>";		
	echo "</tr>";
	echo "<tr>";
	echo "<td>����:</td>";
	echo "<td>".$_POST["txtUserName"]."</td>";		
	echo "</tr>";
	echo "<tr>";
	echo "<td>�Ա�:</td>";
	if($_POST["rdoSex"]==1)
	{
		echo "<td>��</td>";
	}
	else
	{
		echo "<td>Ů</td>";
	}
	echo "</tr>";
	echo "<tr>";
	echo "<td>��������:</td>";
	echo "<td>".$_POST["txtYear"]."-".$_POST["txtMonth"]."-".$_POST["txtDay"]."</td>";	
	echo "</tr>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>���ѧ��:</td>";
	echo "<td>".$_POST["sltEducation"]."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>��Ȥ����:</td>";
	echo "<td>".$love."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>�û����:</td>";
	echo "<td>".$_POST["txtMemo"]."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>ע��ʱ��:</td>";
	echo "<td>".date("Y-m-d",$today[0])."</td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td>�û�����:</td>";
	echo "<td>".$age."</td>";	
	echo "</tr>";
	echo "</table>";
?>
</body>
</html>