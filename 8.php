<html>
<body>


<form name="frm1" method="post" action="">
	<p align="center">
	<br>����������������
	<br><br>��һ������<input type="text" name="txt1">
	<br><br>�ڶ�������<input type="text" name="txt2">
	<br><input type="submit" name="sub1" value="�ύ">
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
echo $m."��".$n."�����Լ���ǣ�".$x."<br>";
for($y=$y;$y<=$m*$n;$y++)
{
	if($y%$m==0 and $y%$n==0)
	{
		echo $m."��".$n."����С�������ǣ�".$y;
		break;
	}
}
}
?>
</body>
</html>