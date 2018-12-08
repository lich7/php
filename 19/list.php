<html>
<head>
	<meta http-equiv="refresh" content="5">
<head>
<body>
	<h2 align="center">在线用户</h2>
<?php
$dir="users/";
$dir_res=opendir($dir);
while($filen=readdir($dir_res))
{
	if($filen !="." and $filen !="..")
	{
		$file=fopen($dir.$filen,"r");
		$btime=fgets($file);
		fclose($file);
		$ntime=time();
		if($ntime-$btime<12)
		{
			echo $filen."<br>";
		}
		else
		{
			unlink($dir.$filen);
		}
	}

}
?>
</body>
</html>