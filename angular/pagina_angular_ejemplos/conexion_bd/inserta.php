<?php

$data = json_decode(file_get_contents("php://input"));
$nombre = mysql_real_escape_string($data->nombre);
$apellido = mysql_real_escape_string($data->apellido);
$nota = mysql_real_escape_string($data->nota);



$con=mysql_connect("localhost", "root", "");
mysql_select_db("colegio");
mysql_query("INSERT INTO alumno(nombre, apellido) VALUES ('".$nombre ."', '".$apellido."')");
mysql_close($con);
?>