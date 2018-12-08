<?php
function deletedir($dir)
{
	if(is_dir($dir))
	{
		$dir_res=opendir($dir);	
		while($filename=readdir($dir_res))
		{
			if($filename<>"." and $filename<>"..")
			{
				if(is_dir($dir.$filename))
				{
					$filename=$dir.$filename."/";
					deletedir($filename);
				}
				else
				{
					unlink($dir.$filename);
				}
			}
		}
		closedir($dir_res);
		rmdir($dir);	
	}
	else
	{
		echo $dir."文件夹不存在。";
	}
}
if(isset($_GET['delfn']))
{
	if(is_dir($_GET['delfn']))
	{
		deletedir($_GET['delfn']);
	}
	else
	{
		unlink($_GET['delfn']);
	}
	$foldername=dirname($_GET['delfn']);
}
header("location: 18.php?foldername=$foldername/");

?>