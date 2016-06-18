<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 5</title>
</head>

<body>
<h3>ingreso personal</h3>
<form action="procesar.php" method="POST" >
<table>
<tr>
	<td>codigo: </td>
	<td><input type="text" size="4" name="codigo" /></td>
</tr>
<tr>
	<td>nombre :</td>
	<td><input type="text" size="20" name="nombre" /></td>
</tr>
<tr>
	<td>direccion: </td>
	<td><input type="text" size="20" name="direccion" /></td>
</tr>
<tr>
	<td>edad :</td>
	<td><input type="text" size="2" name="edad" /></td>
</tr>
<tr>
	<td>sueldo:</td>
	<td><input type="text" size="5" name="sueldo" /></td>
</tr>
<tr><td colspan="2"><input type="submit" value="grabar" /></td></tr>
</table>

</form><hr>
<?php
include("conex.php");
$link=conectarse();
$result=mysql_query("select * from personal",$link);
?>

<table border="1">
<tr><td>codigo</td><td>nombre</td><td>direccion</td></tr>


<?php
    while($row=mysql_fetch_array($result)){
		printf("<tr><td>%d</td><td>%s</td><td>%s</td></tr>",$row["codigo"],$row["nombre"],$row["direccion"]);
		
	}
	
	mysql_free_result($result);
	mysql_close();


?>
</table>








</body>
</html>