<?php
@mysql_connect("localhost","root","root");
@mysql_select_db("educ");
if(isset($_GET['txtsid']))
	{$sid=$_GET['txtsid'];}
else
{
	$sid=$_POST['txtsid'];
}
session_start();
$_SESSION['sid']=$sid;
if(isset($_POST['subupdate']))
	{$update=1;}
else
	{$update=0;}
$query=@mysql_query("select * from student where Sid=$sid");
$row=mysql_fetch_array($query);
$sid=$row['Sid'];
$sname=$row['sname'];
$sex=$row['sex'];
$birthday=$row['birthday'];
$specialty=$row['specialty'];
$Ascores=$row['Ascores'];
echo "<h1 align='center'>ѧ����Ϣ</h1>";
echo "<table align='center' border=1>
		<form method='post' name='frm1' action='";
			if($update==0)
				{echo "select.php";}
			else
				{echo "update.php";}
			 echo "'>	
			<tr valign='baseline'>
				<td nowrap align='right'>ѧ�ţ�</td>
				<td colspan='2'><input type='text' name='txtsid' size='32' value='$sid'"; 
					if($update==0) {echo " readonly";}
				echo "></td>
			</tr>
			<tr valign='baseline'>
				<td nowrap align='right'>������</td>
				<td colspan='2'><input type='text' name='txtsname' size='32' value='$sname'";
					if($update==0) {echo " readonly";}
				echo "></td>
			</tr>
			<tr valign='baseline'>
				<td nowrap align='right'>�Ա�</td>
				<td colspan='2'><input type='radio' name='rdosex' value='1'";
				if($sex==1)
					{echo " checked";}
				if($update==0) {echo " readonly";}
				echo ">��
				    <input type='radio' name='rdosex' value='0'";
				if($sex==0)
					{echo " checked";}
				if($update==0)
					{echo " disabled";}
				echo ">Ů
				</td>
			</tr>
			<tr valign='baseline'>
				<td nowrap align='right'>�������ڣ�</td>
				<td colspan='2'><input type='text' name='txtbirth' size='32' value='$birthday'";
					if($update==0) {echo " readonly";}
				echo "></td>
			</tr>
			<tr valign='baseline'>
				<td nowrap align='right'>רҵ��</td>
				<td colspan='2'><input type='text' name='txtsp' size='32' value='$specialty'";
					if($update==0) {echo " readonly";}
				echo "></td>
			</tr>
			<tr valign='baseline'>
				<td nowrap align='right'>��ѧ�ɼ���</td>
				<td colspan='2'><input type='text' name='txtAscores' size='32' value='$Ascores'";
					if($update==0) {echo " readonly";}
				echo "></td>
			</tr>
			<tr>
				<td><input type='submit' name='subupdate' value='�޸�'";
 				if($update==1)
					{echo " disabled";}				
				echo "></td>
				<td><input type='submit' name='subsave' value='����'";
 				if($update==0)
					{echo " disabled";}
				echo "></td>
			</tr>
		</form>
	</table>";
?>

