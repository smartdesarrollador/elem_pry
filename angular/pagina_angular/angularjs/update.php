<?php

$data = json_decode(file_get_contents("php://input"));
$email = mysql_real_escape_string($data->email);
$nombres = mysql_real_escape_string($data->nombres);
$apellidos = mysql_real_escape_string($data->apellidos);
$genero = mysql_real_escape_string($data->genero);
$pass = mysql_real_escape_string($data->pass);
$tipo = mysql_real_escape_string($data->tipo);

$con = mysql_connect("localhost", "root", "");
mysql_select_db("crud_angular", $con);
mysql_query("UPDATE usuario set nombres = '".$nombres."', apellidos = '".$apellidos."', genero = '".$genero."', pass = '".$pass."', id_tipousuario = (SELECT id FROM tipo_usuario WHERE nombre_tipo = '".$tipo."') WHERE email = '".$email."'");
mysql_close($con);
?>