<html>
<body>
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
<table width="100%" >
<tr><td width="720">
<B>�û���:</B>
<?php
session_start();
echo $_SESSION['ID'];
?>
<form name="frmspeak" method="post" action="message.php" target="message">
	<textarea name="txtrecord" cols="100" rows="8"></textarea>
	<p align="right"><input type="submit" name="subspeak" value="����">
</form>
</td>
<td  align="center">
<form name="frmexit" method="post" action="" onsubmit="return custom_close()">
	<input type="submit" name="subexit" value="�˳�" style="width:200px;height:80px">
</form>
</td></tr>
</table>
</body>
</html>