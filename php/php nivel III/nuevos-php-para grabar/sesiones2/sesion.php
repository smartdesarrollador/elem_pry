


<?php
session_start();
echo session_id()."<br>";
$dato="primer valor";
$_SESSION['var_01']=$dato;
$_SESSION['var_02']="segundo valor";
$_SESSION['entero']=15;
$_SESSION['decimal']=18.456;
$arreglo=array('peru'=>'lima','chile'=>'santiago');
$_SESSION['arreglo']=$arreglo;
$_SESSION['boleano']=true;

?>
<html>

<head>
	

	<title>Untitled 2</title>
</head>

<body>
ir hacia la pagina donde se imprime algunos datos de las sesion    <a href="imprimir_sesion.php">enlace</a>
</body>
</html>