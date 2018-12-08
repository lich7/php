<?php
echo "<br><h1 align='center'>³Ë·¨¿Ú¾÷±í</h1>";
echo "<table border=1 cellspacing=0 align='center' frame='void'>";
for($x=1;$x<=9;$x++)
{
	echo "<tr>";
	for($y=1;$y<=9;$y++)
	{
		if($x>=$y)
		{
			echo "<td>".$x."¡Á".$y."=".$x*$y."</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>

