<html>
<head>
</head>
<script language="javascript"> 
function custom_close()
{ 
	if(confirm("��ȷ��Ҫ�˳���"))
	{  
		window.open('','_self');
		parent.window.close(); 
	} 
	else{} 
} 
</script>
<body>
	<table>
	<tr>
	<td>
	<form name="frmspeak" method="post" action="message.php" target="message">
		�û�����<?php session_start(); echo $_SESSION['ID'] ?>
		<p><textarea name="record" cols="100" rows="8"></textarea>
		<input type="submit" name="subspeak" value="����">
	</form>
	</td>
	<td>
	<form name="frmclose" method="post" action="" onsubmit="return custom_close()">
		<input type="submit" name="subexit" value="�˳�">
	</form>
	</td>
	</tr>
	</table>
</body>
</html>

