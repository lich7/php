<html>
<body leftmargin="60">
<br><br>
	<h1 align="center">用户登录</h1>
	<form name="frm1" method="post" action="15.php">
		<p align="center">
		账号：<input type="text" name="txtID"
			 <?php if(isset($_COOKIE['userid'])) {echo "value=$_COOKIE[userid]";} ?>
		><br><br>
		密码：<input type="password" name="pwd" maxlength="8"
			 <?php if(isset($_COOKIE['password'])) {echo "value=$_COOKIE[password]";} ?>
		><br><br>
		<input type="checkbox" name="cksave" value="1" checked>保存密码
		<input type="submit" name="sub1" value="登录">
		<input type="reset" name="re2" value="取消">
	</form>
	<p align="center"><a href="2.htm">新用户注册</a>
</body>
</html>
		
		