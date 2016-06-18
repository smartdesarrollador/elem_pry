<html>

<head>
	

	<title>Untitled 2</title>
	<style type="text/css">
	
	
	</style>
</head>
<h1>contrabando auto parts</h1>
<h2>ordenes de los clientes</h2>

<body>
<?php
//abrir archivo
@ $fp = fopen("c:\orders.txt","r");
//si no puede abrir
if(!$fp){
	echo "<p><strong>proceso de abrir archivo no lo puede hacer...."."por favor intentelo luego.....</strong></html>";
	exit;
}
while(!feof($fp)){
	$orden = fgets($fp,999);
	echo $orden."<br>";
}
fclose($fp);



?>
</body>
</html>