<?php

$usuario=$_POST["usuario"];
$password=$_POST["password"];
if($usuario=="a" && $password=="h"){
	header("location:verOrden.php");
}
else{
	header("location:acceso2.php");
}


?>