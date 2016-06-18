<?php
function factorial($in) {
    // 0! = 1! = 1
    $out = 1;

    // Only if $in is >= 2
    for ($i = 2; $i <= $in; $i++) {
        $out *= $i;
    }

    return $out;
}

echo factorial(4);
?>