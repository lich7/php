<html>
<body>
<?php
	if($_POST["pwd1"]=="123456")
	{
		$username=$_POST["txtID"];
		echo "<p align='center'>".$username."��ӭ��!";
	}
	else
	{
		echo "<p align='center'>"."���������<a href='1.htm'>����</a>���";
	}


?>
<body>
</html>