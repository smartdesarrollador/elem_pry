<html>
<head><title>Cálculo de Sueldo</title> </head>
<body style='font: 8pt Verdana'>
<?php
include("libreriaSueldo.php");
$sue = 3000;//sueldo a ingresar
$desc = Desc_AFP($su)+Desc_4taCat($sue)+ Desc_AporteNav($sue);
$desc = $desc +Desc_Descuentos($sue);
$bon = bon_Movilidad($sue)+bon_Refrigerio($sue)+ bon_Reintegro($sue);
echo "<table border=1>";
imprimir("Sueldo Bruto","",$sue);
echo "<tr><td colspan=2 align=center>Descuentos</td></tr>";
imprimir("AFP","desc_AFP",$sue);
imprimir("4ta Categoria","desc_4taCat",$sue);
imprimir("Descuentos","desc_Descuentos",$sue);
imprimir("Navidad","desc_AporteNav",$sue);
imprimir("Total Descuento","",$desc);
echo "<tr><td colspan=2>Bonificaciones</td></tr>";
imprimir("Movilidad","bon_Movilidad",$sue);
imprimir("Refrigerio","bon_Refrigerio",$sue);
imprimir("Reintegro","bon_Reintegro",$sue);
imprimir("Total Bonificacion","",$bon);
$sueneto = $sue - $desc + $bon;
imprimir("Sueldo Neto","",$sueneto);
echo "</table>"
?>
</body></html>
