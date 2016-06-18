<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 3</title>
<style type="text/css">
td{
	color: blue;
	width: 100px;
	
}

body{
	background: green;
}
</style>
</head>

<body>
<?php

$conexion=mysql_connect("localhost","root","root");
mysql_select_db("bdsistemas",$conexion) or die ("no se puede conectar a la bd");
$sql="select * from personal";
$result=mysql_query($sql,$conexion);
if($row=mysql_fetch_array($result))
{
	echo "<table  border=1 style='background-color:yellow';  >";
	echo "<tr><td>nombre</td><td>direccion</td></tr>";
	do {
		echo "<tr><td>".$row["nombre"]."</td><td>".$row["sueldo"]."</td></tr>";
	}
	while($row=mysql_fetch_array($result));
	echo "</table>";
}



?>
</body>
</html>