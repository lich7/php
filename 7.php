<html>
<body>
<br><h1 align="center">��������</h1>

<form name="frmsave" method="post" action="" align="center">
	<br><br>ÿ�´��
	<input tpye="text" name="txtsave">
	<br><br>�����ϢΪ��
	<input tpye="text" name="txtrate">
	<br><br>���մ��
	<input tpye="text" name="txtmoney">
	<br><br><input type="submit" name="sub1" value="����">
</form>
<?php
if(isset($_POST["sub1"]))
{
	$save=$_POST["txtsave"];
	$rate=$_POST["txtrate"];
	$money=$_POST["txtmoney"];
	$a=0;
	$month=0;
	while($a<$money)
	{
		$a=($a+$save)*(1+$rate);
		$month++;
	}
	echo "<p align='center'>ÿ�´�".$save."Ԫ,����".$money."Ԫ��Ҫ".$month."�¡�";
}
?>
</body>
</html>