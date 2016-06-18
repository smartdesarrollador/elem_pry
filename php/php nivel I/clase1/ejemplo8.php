<?php
$sueldo = 3500; //ingreso del sueldo
echo "Sueldo es ".$sueldo."<br>";
echo "===============================<br>";
echo "<b>D E S C U E N T O S</b><br>";
$desc1 = 0.12 * $sueldo; 
$desc2 = 0.14 * $sueldo;
$desc3 = 0.2 * $sueldo; 
$desc4 = 150; //dinero a su mama
$desc5 = 250; //dinero al banco
echo "Pago Ripley,Saga, Metros = ".$desc1."<br>";
echo "Pago Luz,Agua,Fono = ".$desc2."<br>";
echo "Pago Comida y Pasaje = ".$desc3."<br>";
echo "Pago Mama = ".$desc4."<br>";
echo "Pago Credito Bco. = ".$desc5."<br>";
$sn = $sueldo -($desc1 + $desc2 + $desc3 + $desc4 +$desc5);
echo "----------------------------------<br>";
echo " <b>Sub Saldo = ".$sn."</b><br>";
echo "----------------------------------<br>";
$apoyo = 0;
if ($sn < 450)  $apoyo=300;//verifica si la da el apoyo a helen
echo " Apoyo Roberto : ".$apoyo."<br>"; 
$saldo = $sn + $apoyo;
echo "----------------------------------<br>";
echo "<b>Saldo Final = ".$saldo."</b><br>";
echo "----------------------------------<br>";




?>