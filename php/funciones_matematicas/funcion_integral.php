
<?php 
      /******     Ejemplo de función f(x)  ********/ 

function f($x){  

    return (4 / (1 + pow($x, 2))); 

} 

 

/** 

 * Función integral 

 * @param $f: nombre de la funcón a integrar 

 * @param $a: valor de a 

 * @param $b: valor de b 

 * @param $n: numero de trapecios 

 * @return valor de la integrla  

 */ 

function integral($f,$a,$b,$n){ 

    $h = ($b - $a)/$n; 

    $partial = 0; 

    for ($k = 1; $k < $n; $k++) 

        $partial = $partial + $f($a + $k*$h); 

    return ($h*((($f($a) + $f($b))/2) + $partial)); 

         

} 

 

/******     Ejemplo de ejecución     ********/ 

echo integral('f',0,1,200); 
        
?>
