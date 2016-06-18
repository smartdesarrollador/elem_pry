<?php
//todos los numeros de 3 cifras
for($num=100;$num<1000;$num++)
{  //proceso de descomponer
    $c=floor($num/100);
    $resto = $num % 100;
    $d = floor($resto/10);
    $u = floor($resto%10);
    if (($c%2==0) && ($d %3==0)&&($c!=$d) && ($c!=$u)&& ($u !=$d))
        echo "Numero es ".$num."<br>";
}
?>