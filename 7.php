<html>
<body>
<br><h1 align="center">存款计算器</h1>

<form name="frmsave" method="post" action="" align="center">
	<br><br>每月存款额：
	<input tpye="text" name="txtsave">
	<br><br>存款利息为：
	<input tpye="text" name="txtrate">
	<br><br>最终存款额：
	<input tpye="text" name="txtmoney">
	<br><br><input type="submit" name="sub1" value="计算">
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
	echo "<p align='center'>每月存".$save."元,存满".$money."元需要".$month."月。";
}
?>
</body>
</html>