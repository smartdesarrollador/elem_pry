<html>
<head>
</head>
<body>
<table>
<tr>
	<td>mundo</td>
	<td>mundo</td>
</tr>
<tr>
	<td>mundo</td>
	<td>mundo</td>
</tr>
</table>




<?php
echo "<table>\n";
for ($i=1;$i<=3;$i++) {
$primero="<tr>\n";
echo $primero;
	for ($j=1;$j<=5;$j++) {
		
		 $a[$i][$j]="<td>hola</td>\n";
	echo $a[$i][$j];
}
$segundo="</tr>\n";
echo $segundo; 
}
echo "</table>\n";
?>

</body>
</html>