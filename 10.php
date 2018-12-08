<html>
<body>
<h1 align="center">日期计算程序</h1>
<table border="0" align="center"><tr><td>
	<form name="frm1" method="post" action="">
		日期<input type="text" name="txtdate">("1999-09-08")<br>
		天数<input type="text" name="txtdays">(整数)
		<p align="center"><input type="submit" name="sub1" value="计 算">
	</form>
</td></tr></table>
<?php
if(isset($_POST["sub1"]))
	if($_POST["txtdate"]<>"" & $_POST["txtdays"]<>"")
	{
		function datadd($days,$date)
		{
			$y=substr($date,0,4);
			$m=substr($date,5,2);
			$d=substr($date,8,2);
			$dat=date("Y-m-d",mktime(0,0,0,$m,$d+$days,$y));
			return $dat;
		}
		$days=$_POST["txtdays"];
		$date=$_POST["txtdate"];
		echo "<p align='center'>计算日期结果为：".datadd($days,$date);
	}
?>
</body>
</html>