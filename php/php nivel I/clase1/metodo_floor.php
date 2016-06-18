<?php
//Invertir un numero de 3 cifras
$num = 2332;
echo $num."<br>";
if($num>=1000 && $num<=9999)
{
	$mil = floor($num/1000);//floor(1345/1000) = 1
	$resto = $num % 1000;//1345%1000 =  345 -->residuo
	$cent = floor($resto / 100);//floor(345 / 100) = 3
    $resto1 = $resto % 100; // 345 % 100 = 45 -->residuo
    $dece = floor($resto1/10);//floor(45/10) = 4
    $unid = $resto1 % 10; //45 % 10 = 5  --> residuo
    if($mil==$unid && $cent == $dece)
       echo "El numero ".$num." es Capicua";
    else
       echo "El numero ".$num." NO es Capicua";
}
else
    echo "El numero esta fuera de Rango";
?>