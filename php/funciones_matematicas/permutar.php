<?php
function rand_permute($size, $min, $max)
{
    $retval = array();
    //initialize an array of integers from $min to $max
    for($i = $min;$i <= $max;$i++)
    {
        $retval[$i] = $i;
    }
    //start with the the first index ($min).
    //randomly swap this number with any other number in the array.
    //this way we guarantee all numbers are permuted in the array,
    //and we assure no number is used more than once (technically reiterating prev line).
    //therefore we don't have to do the random checking each time we put something into the array.
    for($i=$min; $i < $size; $i++)
    {
        $tmp = $retval[$i];
        $retval[$i] = $retval[$tmpkey = rand($min, $max)];
        $retval[$tmpkey] = $tmp;
    }
    return array_slice($retval, 2, $size);
}

$arreglo=rand_permute(10,12,30);

foreach ($arreglo as $key => $value) {
    echo $value."<br>";
}
?>