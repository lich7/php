<html>
<head>
	<meta http-equiv="refresh" content="5">
</head>
<body onload='window.scrollTo(0,document.body.scrollHeight)'>
<h1 align="center">������</h1>
<?php
//ˢ�µ�¼ʱ���
session_start();
$dir="users/";
$filen=$dir.$_SESSION['ID'].".txt";
$file=fopen($filen,"w+");
fwrite($file,time());

//���ܲ��洢�����¼
$path="chat_log/";
if(isset($_POST["txtrecord"]))
{
$filename=date("Ymd").".txt";
$fp=fopen($path.$filename,"a");
fwrite($fp,"<font size='4'><B>".$_SESSION['ID']."</B>&nbsp;&nbsp;<i>".date("H:i:s")."</i></font>\n");
fwrite($fp,"<pre>".$_POST["txtrecord"]."</pre>");
fwrite($fp,"\n");
fclose($fp);
}

//��ȡ����ʾ�����¼
$dr=opendir($path);
while($filen=readdir($dr))
{
	if($filen != "." and $filen != "..")
	{
		$fs=fopen($path.$filen,"r");
		while($record=fgets($fs))
		{
			echo $record."<br>";
		}
	}

}
?>
</body>
</html>