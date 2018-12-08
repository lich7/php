<html>
<body>


<form name="frm1" method="post" action="">
	<p align="center">
	<br>请输入两个整数：
	<br><br>第一个数：<input type="text" name="txt1">
	<br><br>第二个数：<input type="text" name="txt2">
	<br><input type="submit" name="sub1" value="提交">
	</p>
</form>
<p align='center'>
<?php
$a=isset($_POST["sub1"]);
if($a)
{
$m=$_POST["txt1"];
$n=$_POST["txt2"];
if($m>$n)
{
	$x=$n;
	$y=$m;
}
else
{
	$x=$m;
	$y=$n;
}
while($m%$x<>0 or $n%$x<>0)
{
	$x--;
}
echo $m."和".$n."的最大公约数是：".$x."<br>";
for($y=$y;$y<=$m*$n;$y++)
{
	if($y%$m==0 and $y%$n==0)
	{
		echo $m."和".$n."的最小公倍数是：".$y;
		break;
	}
}
}
?>
</body>
</html>