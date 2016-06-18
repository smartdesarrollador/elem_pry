<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 3</title>
</head>

<body>
<?php

include("libreria_conexion.php");
$link=conectarse();
$result=mysql_query("select * from personal",$link);
?>

<table border="1" cellspacing="1" cellpadding="1">
<tr><td>nombre</td><td>direccion</td></tr>


<?php
while($row=mysql_fetch_array($result)){
	printf("<tr><td>%s</td><td>%s</td></tr>",$row["nombre"],$row["direccion"]);
	}
	
	mysql_free_result($result);
	mysql_close($link);
	


?>
</table>
</body>
</html>
