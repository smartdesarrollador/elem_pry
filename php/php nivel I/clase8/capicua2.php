<?php

$num = 121;
echo $num."<br>";
  if ($num>=100 && $num<=999){
	
	
	$cen = floor($num / 100);// floor (345/100) = 3
	$res = $num % 100;// 345 % 100 = 45 --> residuo
	$dec = floor($res / 10);
	$unid = $res % 10;
	
	if($cen==$unid )
	    echo "es un numero capicua";
      else
	       echo "no es numero capicua";
}
  else 
      echo "no es un numero de cuatro cifras";
	
	


?>