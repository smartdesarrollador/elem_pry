<html>
	<head>
	  <title>Contrabando Auto Parts - Resultado de la Orden</title>
	</head>
	<body>
	<h1>Contrabando Auto Parts</h1>
	<h2>Ordenes de los Clientes</h2>
<?php
	// Abrir archivo
	@ $fp = fopen("c:\orders.txt", 'r');
	// si No puede Abrir
	if (!$fp)  {
	  echo '<p><strong> Su Proceso de de Abrir Archivo no lo puede Hacer....'
	       .'Por Favor Intentelo Luego.....</strong></p></body></html>';
	  exit;   } 
	while (!feof($fp))   {
	     $orden = fgets($fp, 999);
	     echo $orden.'<br />' ;   }
	fclose($fp);
?>
	</body>
</html>
