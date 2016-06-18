<?php

$dato=$_POST['codigo'];
session_start();
echo "valor escrito por usuario: $dato<br>";
echo "valor en session :".$_SESSION['codigo']."<br>";
if($dato==$_SESSION['codigo']){
	echo "<br><h1>felicitacion validacion correcta</h1>";
	
}else{
echo "<br><h1>error de validacion</h1>";
}

echo "<a href=uso_codigo.php>regresar<br>";

?>