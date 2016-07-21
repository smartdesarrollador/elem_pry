<?php
$con = mysql_connect("localhost", "root", "");
if (!$con) 
{
	die("No se puede conectar: " . mysql_error());
}
mysql_select_db("crud_angular", $con);
$sql = mysql_query("SELECT email, nombres, apellidos, genero, pass, nombre_tipo FROM usuario INNER JOIN tipo_usuario ON id_tipousuario = id");
if (mysql_num_rows($sql)) 
{
	$data = array();
	while ($row = mysql_fetch_array($sql))
	{
		$data[] = array(
			'email' => $row['email'],
			'nombre' => $row['nombres'],
			'apellido' => $row['apellidos'],
			'genero' => $row['genero'],
			'pass' => $row['pass'],
			'tipo_usuario' => $row['nombre_tipo']
		);
	}
	header('Context-type: application/json');
	echo json_encode($data);
}
mysql_close($con);
?>