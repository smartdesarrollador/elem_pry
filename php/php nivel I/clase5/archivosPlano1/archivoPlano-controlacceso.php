<?php

$usuario2=$_POST["usuario2"];
$contraseņa=$_POST["contraseņa"];

if( $usuario2=="kike5000" && $contraseņa=="lucuma"){
	header("location:archivoPlano-principal.html");
}
  else{
	header("location:archivoPlano-acceso.php");
}


?>