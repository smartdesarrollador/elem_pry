<?php 



     function lcm_arr($items){
    //Input: An Array of numbers
    //Output: The LCM of the numbers
    while(2 <= count($items)){
        array_push($items, lcm(array_shift($items), array_shift($items)));
    }
    return reset($items);
}

//His Code below with $'s added for vars

function gcd($n, $m) {
   $n=abs($n); $m=abs($m);
   if ($n==0 and $m==0)
       return 1; //avoid infinite recursion
   if ($n==$m and $n>=1)
       return $n;
   return $m<$n?gcd($n-$m,$n):gcd($n,$m-$n);
}

function lcm($n, $m) {
   return $m * ($n/gcd($n,$m));
}

//------------------------------------------------------------------------------------------ 


$items= array("2","10","4");

echo lcm_arr($items);

?>
