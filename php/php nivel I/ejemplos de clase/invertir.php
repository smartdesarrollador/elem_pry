<?php
$num = 345;

echo $num."<br>";
  if ($num>=100 && $num<=999){
	$cen = floor($num / 100);// floor (345/100) = 3
	$res = $num % 100;// 345 % 100 = 45 --> residuo
	$dec = floor($res / 10);
	$unid = $res % 10;
	$res = ($unid * 100) + ($dec * 10) + $cen;
	
	
	echo "el numero a la inversa es: ".$res;	
	
	
	
	
}
else
  echo "numero no es de tres cifras";




?>