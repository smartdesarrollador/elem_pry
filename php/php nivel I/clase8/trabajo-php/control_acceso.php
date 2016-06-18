<?php

$usuario=$_POST["usuario"];
$password=$_POST["password"];
if($usuario=="sist" && $password=="ho"){
	header("location:formulario_datos.php");
}
else{
	header("location:acceso.php");
}


?>