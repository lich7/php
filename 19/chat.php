<html>
<?php
session_start();
if(isset($_POST['txtID']))						//�ж��Ƿ��login.htm��¼
{
	$_SESSION['ID']=$_POST['txtID'];				//�û�����SESSION��
}
if(isset($_SESSION['ID']))						//�жϵ�¼״̬
{
	echo "<frameset cols='250,*'>";
		echo "<frame name='list' src='list.php'>";
		echo "<frameset rows='*,220'>";
			echo "<frame name='message' src='message.php'>";
			echo "<frame name='speak' src='speak.php'>";
		echo "</framset>";
	echo "</frameset>";
}
else
{
	header("location:login.htm");					//û��¼��ת��login.htmҳ��
}
?>
</html>
