<html>
	<head>
		<title>calculo de sueldo</title>
	</head>
	<body>
	
	<?php 
include("libreria5.php");
	
	
	$s=3000;
	
	$d=des_4tacat($s)+des_afp($s)+des_aport_nav($s)+des_descuentos($s);
	$b=bon_refrigerio($s)+bon_reintegro($s)+bon_mov($s);
	
echo "<table border=1 >";	
echo "<tr><td colspan=2>sueldo bruto</td></tr>";	
	
	imprimir("sueldo bruto","",$s);

echo "<tr><td colspan=2>descuentos</td></tr>";
	
	                             imprimir("afp","des_afp",$s);
	                             imprimir("4tacat","des_4tacat",$s);
	                             imprimir("descuentos","des_descuentos",$s);
	                             imprimir("navidad","des_aport_nav",$s);
	                             
	
	
echo "<tr><td colspan=2>bonificaciones</td></tr>";

imprimir("movilidad","bon_mov",$s);	
imprimir("refrigerio","bon_refrigerio",$s);
imprimir("reintegro","bon_reintegro",$s);
imprimir("total bonificacion","",$b);

$sneto=$s-$d-$b;



imprimir("sueldo neto","",$sneto);	
	
echo "</table>"	;
	
	
	?>
	
    </body>
	</html>