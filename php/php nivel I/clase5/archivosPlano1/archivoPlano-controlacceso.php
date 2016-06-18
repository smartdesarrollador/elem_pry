<?php

$usuario2=$_POST["usuario2"];
$contraseña=$_POST["contraseña"];

if( $usuario2=="kike5000" && $contraseña=="lucuma"){
	header("location:archivoPlano-principal.html");
}
  else{
	header("location:archivoPlano-acceso.php");
}


?>