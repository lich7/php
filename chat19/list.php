<html>
<head>
	<meta http-equiv="refresh" content="5">
</head>
<body>
<h1 align="center">�����û�</h1>

<?php
//�������û�
$dir="users/";
$dir_res=opendir($dir);
while($filen=readdir($dir_res))
{
	if($filen !="." and $filen !="..")
	{
		$file=fopen($dir.$filen,"r");
		$time=fgets($file);
		fclose($file);
		if(time()-$time>60)
		{
			unlink($dir.$filen);
		}
		else
		{
			echo substr($filen,0,strlen($filen)-4)."<br>";
		}
	}
}
?>
</body>
</html>