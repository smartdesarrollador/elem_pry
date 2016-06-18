<?php

$dato=$_POST['codigo'];
session_start();
echo "Valor escrito por usuario: $dato<br>";
echo "valor en session: ".$_SESSION['codigo']."<br>";
if($dato==$_SESSION['codigo']){
	echo "<br><h1>Felicitaciones validación correcta</h1>";
}else{
	echo "<br><h1>Eror de Validacio´n</h1>";
}
echo "<a href=uso_codigo.html>Regresar<br>";

?>