<?php

$usuario2=$_POST["usuario2"];
$contrase�a=$_POST["contrase�a"];

if( $usuario2=="kike5000" && $contrase�a=="lucuma"){
	header("location:archivoPlano-principal.html");
}
  else{
	header("location:archivoPlano-acceso.php");
}


?>