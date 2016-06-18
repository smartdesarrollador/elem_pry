<?php

function trimInteger($targetNumber,$newLength) {

    $digits = pow(10,$newLength);

    $s = ($targetNumber/ $digits); //make the last X digits the                  decimal part

    $t = floor($targetNumber / $digits); //drop the last X digits (the decimal part)

    $h = $s - $t; //remove all  but the decimal part

    $newInteger = ($h*$digits); //make the everything after the decimal point the new number

    return $newInteger;
}

$cadena_numeros=12345;

echo trimInteger($cadena_numeros,3);

?>