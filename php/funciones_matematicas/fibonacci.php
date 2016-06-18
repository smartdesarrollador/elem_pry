<?php
function fib($int){
    static $fibTable=array();
    return empty($fibTable[$int])?$fibTable[$int] = $int>1?fib($int-2)+fib($int-1):1:$fibTable[$int];
};

echo $arreglo=fib(5);


?>