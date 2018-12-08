<html>
<body>
<table height="80%" width="100%" border="0">		<!--一个全屏table-->
<tr align="center"><td valign="middle">			<!--上下左右正中对齐-->
<table>							<!--居中的table-->
<tr><td>
<?php
//获得文件夹路径
if(isset($_GET["foldername"]))				//检查$_GET["foldername"]是否存在，即是否从超链接跳转过来
{
	$dir=$_GET["foldername"];
}
else
{
	$dir="test/";					//设置初始目录为test/
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
				echo "<a href='fm.php?foldername=".$dir."'>当前文件夹</a><br>";
			}
			elseif($filen=="..")
			{
				echo "<a href='fm.php?foldername=".dirname($dir)."/'>上级文件夹</a><br>";
			}
			else
			{
				echo "<a href='fm.php?foldername=".$dir.$filen."/'>".$filen."</a> ";
				echo " <a href='delete.php?filename=".$dir.$filen."/'>删除</a><br>";
			}
		}
		else
		{
				echo $filen." <a href='".$dir.$filen."'>下载</a> ";
				echo " <a href='delete.php?filename=".$dir.$filen."'>删除</a><br>";
		}
	}
	closedir($dir_res);
}
else
{
	mkdir($dir);
}
?>
<!--下面是文件上传的代码-->
</td></tr>
<tr align="center"><td>文件上传</td></tr>
<tr align="center"><td>
<form enctype="multipart/form-data" action="upload.php" method="post">
	<input name="hdtxt" type="hidden" value=<?php echo $dir; ?>>
	<input name="upfile" type="file"><br>
	<p align="center"><input type="submit" value="上传">
</form>
</td></tr></table>
</td></tr></table>
</body>
</html>