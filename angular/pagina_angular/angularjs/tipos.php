<?php
$con = mysql_connect("localhost", "root", "");
if (!$con) 
{
	die("No se puede conectar: " . mysql_error());
}
mysql_select_db("crud_angular", $con);
$sql = mysql_query("SELECT nombre_tipo FROM tipo_usuario");
if (mysql_num_rows($sql)) 
{
	$data = array();
	while ($row = mysql_fetch_array($sql))
	{
		$data[] = array(
			'nombre' => $row['nombre_tipo']
		);
	}
	header('Context-type: application/json');
	echo json_encode($data);
}
mysql_close($con);
?>