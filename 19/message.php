<html>
<head>
	<meta http-equiv="refresh" content="5">
</head>
<body onload='window.scrollTo(0,document.body.scrollHeight)'>
<?php
session_start();
$dir="users/";							//�����û��ļ���
$filen=$dir.$_SESSION['ID'].".txt";				//���û�����Ϊ�ļ���
$file=fopen($filen,"w");					//�����û������ļ�
fwrite($file,time());
$path="chat_log/";
if(isset($_POST["record"]))
{
	$filename="C".date("Ymd").".txt";
	$fp=fopen($path.$filename,"a");
	fwrite($fp,$_SESSION['ID'].":".date("Y-m-d H:i:s")."\n");
	fwrite($fp,$_POST["record"]."\n");
	fwrite($fp,"\n");
	fclose($fp);
}
$dr=opendir($path);
while($filen=readdir($dr))
{
	if($filen !="." and $filen !="..")
	{
		$fs=fopen($path.$filen,"r");
		echo fgets($fs)."<BR>";
		echo "<PRE>".fread($fs,filesize($path.$filen))."</PRE>";
		fclose($fs);
	}
}
closedir($dr);
?>
</body>
</html>