<html>
<body>
<h1 align="center">���ڼ������</h1>
<table border="0" align="center"><tr><td>
	<form name="frm1" method="post" action="">
		����<input type="text" name="txtdate">("1999-09-08")<br>
		����<input type="text" name="txtdays">(����)
		<p align="center"><input type="submit" name="sub1" value="�� ��">
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
		echo "<p align='center'>�������ڽ��Ϊ��".datadd($days,$date);
	}
?>
</body>
</html>