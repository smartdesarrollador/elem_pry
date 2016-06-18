<html>
<head><title>Cálculo de Sueldo</title> </head>
<body style='font: 8pt Verdana'>
<?php
include("libreriaSueldo.php");
$sue = 3000;//sueldo a ingresar
$desc = Desc_AFP($su)+Desc_4taCat($sue)+ Desc_AporteNav($sue);
$desc = $desc +Desc_Descuentos($sue);
$bon = bon_Movilidad($sue)+bon_Refrigerio($sue)+ bon_Reintegro($sue);
//echo"<b>Sueldo Bruto->s/.".number_format($sue,2,".",",")."<br><br>";
imprimir("Sueldo Bruto","",$sue);
echo "<b>Descuentos</b>----------------------------------------<br><br>";
echo "AFP -> s/. ".number_format(Desc_AFP($sue),2,".",",")."<br>";
echo "4ta Cat.-> s/. ".number_format(Desc_4taCat($sue),2,".",",")."<br>";
echo "Desc-> s/. ".number_format(Desc_Descuentos($sue),2,".",",")."<br>";
echo "Navidad->s/.".number_format(Desc_AporteNav($sue),2,".",",")."<br>";
echo "<b>Total Descu->s/.</b>".number_format($desc,2,".",",")."<br><br>";
echo "<b>Bonificaciones</b>------------------------------------<br><br>";
//echo "Movi->s/. ".number_format(bon_Movilidad($sue),2,".",",")."<br>";
imprimir("Movilidad","bon_Movilidad",$sue);
echo "Refrige->s/.".number_format(bon_Refrigerio($sue),2,".",",")."<br>";
echo "Reinte->s/.".number_format(bon_Reintegro($sue),2,".",",")."<br>";
echo "<b>Total Bonifi->s/.</b>".number_format($bon,2,".",",")."<br><br>";
$sueneto = $sue - $desc + $bon;
echo "--------------------------------------------------<br>";
echo "--------------------------------------------------<br>";
echo "<b>Sueldo Neto -> s/.".number_format($sueneto,2,".",",")."</b>";
?>
</body></html>







