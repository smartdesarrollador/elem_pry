<?php

 include('conexion.php');
$query = "select * from alumno";
$resultado = $mysqli->query($query);
$arr=array();
if($resultado->num_rows > 0){
	while($row=$resultado->fetch_assoc()){
		$arr[]=$row;
	}
}

$json_respon = json_encode($arr);

echo $json_respon; 

/*

include('conexion.php');

$link=conectarse();
     //cargamos la inofrmacion del select en la variable result
     $result=mysql_query("select * from alumno",$link);
     $arr=array();
  
      while($row=mysql_fetch_array($result)){
		  $arr[] = $row;
	}


$json_respon = json_encode($arr);

echo $json_respon;

	mysql_free_result($result);//libera de memoria la variable $result
	mysql_close($link);//cierra la conexion a la base de datos
	*/

?>