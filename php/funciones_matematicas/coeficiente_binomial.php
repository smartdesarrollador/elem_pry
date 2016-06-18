<?php
/*
If you compiled php with --enable-bcmath, you can get full integer values of extremely large numbers by replacing:

$res *= $n--;
$res /= $j++;

with:

$res = bcmul($res, $n--);
$res = bcdiv($res, $j++);
*/



   // calculate binomial coefficient
   function binomial_coeff($n, $k) {

      $j = $res = 1;

      if($k < 0 || $k > $n)
         return 0;
      if(($n - $k) < $k)
         $k = $n - $k;

      while($j <= $k) {
         $res *= $n--;
         $res /= $j++;
      }

      return $res;

   }

   //--------------------------------------

   echo binomial_coeff(10,5);
?>