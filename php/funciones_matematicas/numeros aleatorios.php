<?php
 function uniqueRand($n, $min = 0, $max = null)
 {
  if($max === null)
   $max = getrandmax();
  $array = range($min, $max);
  $return = array();
  $keys = array_rand($array, $n);
  foreach($keys as $key)
   $return[] = $array[$key];
  return $return;
 }

 $arreglo=uniqueRand(5,1,10);

 foreach ($arreglo as $key => $value) {
 	echo $value."<br>";
 }
?>