<?php

function bin_rand($min = null, $max = null)
{
    $min = ($min) ? (int) $min : 0;
    $max = ($max) ? (int) $max : PHP_INT_MAX;
   
    $range = range($min, $max);
    $average = array_sum($range) / count($range);
   
    $dist = array();
    for ($x = $min; $x <= $max; $x++) {
        $dist[$x] = -abs($average - $x) + $average + 1;
    }
   
    $map = array();
    foreach ($dist as $int => $quantity) {
        for ($x = 0; $x < $quantity; $x++) {
            $map[] = $int;
        }
    }
   
    shuffle($map);
    return current($map);
}

echo bin_rand(15,30);

?>