<?php

$id = $_GET["id"];

include('conexion.php');
$query = "select * from alumno where id = ".$id;
$resultado = $mysqli->query($query);
$arr=array();


if($resultado->num_rows > 0){
	while($row=$resultado->fetch_assoc()){
		$arr[]=$row;
	}
}




$json_respon = json_encode($arr);

echo $json_respon; 






?>