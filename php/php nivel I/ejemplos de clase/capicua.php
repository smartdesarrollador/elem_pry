<?php

$num = 1221;
echo $num."<br>";
  if ($num>=1000 && $num<=9999){
	$mil = floor($num / 1000);
	$res = $num%1000;
	
	$cen = floor($res / 100);// floor (345/100) = 3
	$res = $num % 100;// 345 % 100 = 45 --> residuo
	$dec = floor($res / 10);
	$unid = $res % 10;
	
	if($mil==$unid && $cen==$dec)
	    echo "es un numero capicua";
      else
	       echo "no es numero capicua";
}
  else 
      echo "no es un numero de cuatro cifras";
	
	




?>