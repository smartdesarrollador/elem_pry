<?php
//Invertir un numero de 3 cifras
$num = 345;
echo $num."<br>";
if($num>=100 && $num<=999)
{$cent = floor($num / 100);//floor(354 / 100) = 3
 $resto = $num % 100; // 345 % 100 = 45 -->residuo
 $dece = floor($resto/10);//floor(45/10) = 4
 $unid = $resto % 10; //45 % 10 = 5  --> residuo
 $res = ($unid * 100) + ($dece * 10)  + $cent;
echo "El numero a la Inversa es ".$res;
}
else
  echo "Numero no es de 3 cifras";
//verificar si un nmero de 4 cifras es capicua
// 1234 --> 1=4 y 2=3     1221 --> 1=1 y 2=2
?>
