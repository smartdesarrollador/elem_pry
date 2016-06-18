<html>

<head>
	

	<title>contrabando auto parts - resultado de la orden</title>
</head>

<body>

<?php
$llantascan=$_POST["llantascan"];
$aceitecan=$_POST["aceitecan"];
$aroscan=$_POST["aroscan"];
$buscar=$_POST["buscar"];
//DECLARACION DE CONSTANTES
define("LLANTASPRECIO",180);
define("ACEITEPRECIO",15);
define("AROSPRECIO",70);



?>
<h1>contrabando auto parts</h1>
<h2>resultado de la orden</h2>



<?php

$totalcan= 0;

echo '<p> orden procesada';
echo date( 'H:i,js , F');
echo "<hr>";

echo "su orden es la siguiente<br><br>";

$totalcan = $llantascan + $aceitecan + $aroscan;

if( $totalcan==0){
	echo "usted no a escogido ninguna cantidad ....! <br>";
	
}
else{
	if($llantascan>0) echo $llantascan."llantas <br>";
	if($aceitecan>0) echo $aceitecan."botellas de aceite <br>";
	if($aroscan>0) echo $aroscan."aros <br><br>";
	
	if($buscar == "a")echo "<p>cliente regular.</p>";
	elseif($buscar=="b")echo "<p>cliente se entero por tv.</p>";
	elseif($buscar=="c") echo "<p>cliente se entero por telefono</p>";
	elseif($buscar=="d") echo "<p>cliente se entero por amigo </p>";
	else echo "<p>no conocemos como este cliente se ha enterado.</p>";
	
	echo "items ordenadas".$totalcan."<br>";
	echo "<hr>";
	$total= 0.00;
	$total=$llantascan * LLANTASPRECIO + $aceitecan * ACEITEPRECIO + $aroscan * AROSPRECIO;
	
	echo "subtotal: s/.".number_format($total,2)."<br>";
	$IGV=0.19 * $total;//impuestos  a la venta 19%
	echo "IGV : S/. ".number_format($IGV,2)."<br>";
	$total=$total+$IGV;
	echo "total incluido IGV: S/.".number_format($total,2)."<br>";
	echo "<hr>";
	
}













?>
</body>
</html>