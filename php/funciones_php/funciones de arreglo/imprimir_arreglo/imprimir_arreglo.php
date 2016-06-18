<?php 

function imprimir_arreglo($arreglo){

	$vertical=false;
	$horizontal=true;
	$simboloInicial="*"; //solo para la impresion en horizontal
	$simboloIntermedio=", "; //solo para la impresion en horizontal
	$simboloFinal="."; //solo para la impresion en horizontal


if($vertical){
       foreach ($arreglo as $value) {
 	        $valor=$value."<br>";

 	         echo $valor;
        }

}

if ($horizontal) {
	foreach ($arreglo as $key => $value) {
 	        

 	       $longitud=count($arreglo);
           $key=$key+1;

           if($key==1){
           	   $valor=$simboloInicial."".$value."".$simboloIntermedio;
           	  echo $valor;
           }

           if ($key<$longitud and $key!=1) {
           	$valor=$value."".$simboloIntermedio;
           	echo $valor;
           }

           if ($key==$longitud) {
           	$valor=$value."".$simboloFinal;
           	echo $valor;
           }
 	         

        }
} 




	

}

$arr=array("fresa","naranja","uva");

imprimir_arreglo($arr);

 
    
?>