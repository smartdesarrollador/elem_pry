<?php

$data = json_decode(file_get_contents("php://input"));
$email = mysql_real_escape_string($data->email);
$nombres = mysql_real_escape_string($data->nombres);
$apellidos = mysql_real_escape_string($data->apellidos);
$genero = mysql_real_escape_string($data->genero);
$pass = mysql_real_escape_string($data->pass);
$tipo = mysql_real_escape_string($data->tipo);

mysql_connect("localhost", "root", "");
mysql_select_db("crud_angular");
mysql_query("INSERT INTO usuario(email, nombres, apellidos, genero, pass, id_tipousuario) VALUES ('".$email ."', '".$nombres."','".$apellidos."','".$genero."','".$pass."', (SELECT id FROM tipo_usuario WHERE nombre_tipo = '".$tipo."'))");
mysql_close($con);
?>