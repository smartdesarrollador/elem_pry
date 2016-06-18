<html>
	<head>
		<title>calculo de sueldo</title>
	</head>
	<body>
	
	<?php 
include("pagina5.php");

echo "<table border=1>";

echo "

<tr>
	<td>alumno</td>
	<td>nota1</td>
	<td>nota2</td>
	<td>nota3</td>
	<td>promedio</td>
</tr>


";

echo "<tr><td>pedro</td>".notas(16,18,13).promedio(16,18,13)."</td></tr>";
echo "<tr><td>luis</td>".notas(17,12,15).promedio(17,12,15)."</td></tr>";	
echo "<tr><td>fatima</td>".notas(15,19,13).promedio(15,19,13)."</td></tr>";	

	
echo "</table>"	;
	?>
	
    </body>
	</html>