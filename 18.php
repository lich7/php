<?php
echo "<table border=0 align='center'>";
echo "<tr><td>";
if(isset($_GET['foldername']))
{
	$path=$_GET['foldername'];
}
else
{
	$path="files/";
}
if(is_dir($path))
{
}
else
{
	@mkdir($path);
}
if(isset($_FILES['upfile']))
{
	$filename=$_FILES['upfile']['name'];
	$tmp_name=$_FILES['upfile']['tmp_name'];
	move_uploaded_file($tmp_name,$path.$filename);
}

$dir_res=opendir($path);
while($filename=readdir($dir_res))
{
	if(is_dir($path.$filename))
	{
		if($filename==".")
		{
			echo "<br><a href='?foldername=$path'>ˢ��</a>";
		}
		elseif($filename=="..")
		{
			if($path<>"files/")
			{
				echo "<br><a href='?foldername=".dirname($path)."/'>�ϼ��ļ���</a>";
			}
		}
		else
		{
			echo "<br><a href='?foldername=$path$filename/'>".$filename."</a>";
			echo " <a href='18-3.php?delfn=$path$filename/'>ɾ��</a>";
		}
	}
	else
	{
		echo "<br>".$filename." <a href='$path$filename'>����</a> <a href='18-3.php?delfn=$path$filename'>ɾ��</a>";
	}
}
echo "</td></tr>";

?>
<html>
<body>
<form name='frm1' method='post' action='' enctype='multipart/form-data'>
	<tr><td><input type='file' name='upfile' required></td></tr>
	<tr><td align='center'><input type='submit' value='�ϴ�' name='sub1'></td></tr>
</form>
</table>
</body>
</html>
