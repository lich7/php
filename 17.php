<html>
<body leftmargin="60">
<br><br>
	<h1 align="center">�û���¼</h1>
	<form name="frm1" method="post" action="15.php">
		<p align="center">
		�˺ţ�<input type="text" name="txtID"
			 <?php if(isset($_COOKIE['userid'])) {echo "value=$_COOKIE[userid]";} ?>
		><br><br>
		���룺<input type="password" name="pwd" maxlength="8"
			 <?php if(isset($_COOKIE['password'])) {echo "value=$_COOKIE[password]";} ?>
		><br><br>
		<input type="checkbox" name="cksave" value="1" checked>��������
		<input type="submit" name="sub1" value="��¼">
		<input type="reset" name="re2" value="ȡ��">
	</form>
	<p align="center"><a href="2.htm">���û�ע��</a>
</body>
</html>
		
		