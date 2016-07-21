<?php



$data = json_decode(file_get_contents("php://input"));
$id = mysql_real_escape_string($data->id);
$nombre = mysql_real_escape_string($data->nombre);
$apellido = mysql_real_escape_string($data->apellido);


$con = mysql_connect("localhost", "root", "");
mysql_select_db("colegio", $con);
mysql_query("UPDATE alumno set nombre = '".$nombre."', apellido = '".$apellido."'  WHERE id = '".$id."'");
mysql_close($con);
?>