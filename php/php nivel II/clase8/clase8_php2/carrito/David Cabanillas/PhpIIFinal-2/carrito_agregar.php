<?php
session_start();
$isbn=$_GET[isbn];
$articulos=$_SESSION[carrito];
if(is_array($articulos)){
	if($articulos[$isbn]!=""){
//            echo "<br>isbn = ".$isbn;
		$articulos[$isbn]=$articulos[$isbn]+1;
	}else{
		$articulos[$isbn]=1;
	}
}else{
	$articulos[$isbn]=1;
}
$_SESSION[carrito]=$articulos;
header('location:carrito_contenido.php');
?>