<?php

function simpsonf($x){
// returns f(x) for integral approximation with composite Simpson's rule
   return(pow((1+pow($x, (-4))), 0.5));
}
function simpsonsrule($a, $b, $n){
// approximates integral_a_b f(x) dx with composite Simpson's rule with $n intervals
// $n has to be an even number
// f(x) is defined in "function simpsonf($x)"
   if($n%2==0){
      $h=($b-$a)/$n;
      $S=simpsonf($a)+simpsonf($b);
      $i=1;
      while($i <= ($n-1)){
         $xi=$a+$h*$i;
         if($i%2==0){
            $S=$S+2*simpsonf($xi);
         }
         else{
            $S=$S+4*simpsonf($xi);
         }
         $i++;
      }
      return($h/3*$S);
      }
   else{
      return('$n has to be an even number');
   }
}

echo simpsonsrule(2,3,4);

?>