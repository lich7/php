<html>
<body>
<table height="80%" width="100%" border="0">		<!--һ��ȫ��table-->
<tr align="center"><td valign="middle">			<!--�����������ж���-->
<table>							<!--���е�table-->
<tr><td>
<?php
//����ļ���·��
if(isset($_GET["foldername"]))				//���$_GET["foldername"]�Ƿ���ڣ����Ƿ�ӳ�������ת����
{
	$dir=$_GET["foldername"];
}
else
{
	$dir="test/";					//���ó�ʼĿ¼Ϊtest/
}
if(is_dir($dir))
{
	$dir_res=opendir($dir);
	while($filen=readdir($dir_res))
	{
		if(is_dir($dir.$filen))
		{
			if($filen==".")
			{
				echo "<a href='fm.php?foldername=".$dir."'>��ǰ�ļ���</a><br>";
			}
			elseif($filen=="..")
			{
				echo "<a href='fm.php?foldername=".dirname($dir)."/'>�ϼ��ļ���</a><br>";
			}
			else
			{
				echo "<a href='fm.php?foldername=".$dir.$filen."/'>".$filen."</a> ";
				echo " <a href='delete.php?filename=".$dir.$filen."/'>ɾ��</a><br>";
			}
		}
		else
		{
				echo $filen." <a href='".$dir.$filen."'>����</a> ";
				echo " <a href='delete.php?filename=".$dir.$filen."'>ɾ��</a><br>";
		}
	}
	closedir($dir_res);
}
else
{
	mkdir($dir);
}
?>
<!--�������ļ��ϴ��Ĵ���-->
</td></tr>
<tr align="center"><td>�ļ��ϴ�</td></tr>
<tr align="center"><td>
<form enctype="multipart/form-data" action="upload.php" method="post">
	<input name="hdtxt" type="hidden" value=<?php echo $dir; ?>>
	<input name="upfile" type="file"><br>
	<p align="center"><input type="submit" value="�ϴ�">
</form>
</td></tr></table>
</td></tr></table>
</body>
</html>