<html>
<body>
<p><br>
<h1 align='center'>用户注册</h1>
<table border=0 align='center'>

<form name='frm1' method='post' action='12.php'>
<tr>
	<td>请输入账号：</td>
	<td><input type='text' name='txtID' ></td>
</tr>
<tr>
	<td>请输入密码：</td>
	<td><input type='password' name='pw1'></td>
</tr>
<tr>
	<td>请确认密码：</td>
	<td><input type='password' name='pw2'></td>
</tr>
<tr>
	<td>请输入姓名：</td>
	<td><input type='text' name='txtUserName'></td>
</tr>
<tr>
	<td>请输入性别：</td>
	<td>
	<input type='radio' name='rdoSex' value=1>男
	<input type='radio' name='rdoSex' value=0 checked>女
	</td>
</tr>
<tr>
	<td>请输入生日：</td>
	<td><input type='date' name='datBirthday'></td>
</tr>
<tr>
	<td>请输入学历：</td>
	<td>
	<select name='sltEducation'>
		<option value='初中'>初中
		<option value='高中'>高中
		<option value='大专' selected>大专
		<option value='本科'>本科
		<option value='研究生'>研究生
	</select>
	</td>
</tr>
<tr>
	<td>请选择爱好：</td>
	<td><font size='1'>
	<input type='checkbox' name='ckHobby1' value="读书">读书
	<input type='checkbox' name='ckHobby2' value="看电影">看电影<br>
	<input type='checkbox' name='ckHobby3' value="旅游">旅游
	<input type='checkbox' name='ckHobby4' value="其他">其他
	</font></td>
</tr>
<tr>
	<td colspan=2>你有什么意见？<br>
	<textarea cols=34 rows=8 name='txaSuggestion'></textarea></td>
</tr>
<tr>
	<td colspan=2 align='center'>
	<input type='submit' name='subRegister' value='注册'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='reset' name='reset' value='重填'>
	</td>
</tr>
</table>
</body>
</html>