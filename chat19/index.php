<html>
<?php
if(isset($_POST['txtID']))
{
session_start();
$_SESSION['ID']=$_POST['txtID'];
$dir="users/";
$filen=$dir.$_SESSION['ID'].".txt";
$file=fopen($filen,"w+");
fwrite($file,time());
}
else
{
header("location:login.htm");
}
?>
<frameset cols="300,*" frameborder="1" border=2 bordercolor="#ffff00">
	<frame name="list" src="list.php">
	<frameset rows="*,220">
		<frame name="message" src="message.php">
		<frame name="speak" src="speak.php">
	</frameset>
</frameset>
</html>