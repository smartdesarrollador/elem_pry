<?php
$cadena="hola";

$cant_letras= strlen($cadena);

echo "la cantidad de letras de $cadena es $cant_letras";

for ($contador=0;$contador<=$cant_letras;$contador++) {
	echo "<br><h".($contador+1).">$cadena[$contador]</h".($contador+1).">";
}

$frase="conjunto de palabras";
$separador=split(" ",$frase);
for ($contador=0;$separador[$contador];$contador++) {
	echo $separador[$contador]."<br>";
}

$resultado=sprintf("4x5 = %f <br> ",4*5);
 echo $resultado."<br>";
 
 $obtenerSubcadena=substr($frase,9,2);
 echo $obtenerSubcadena."<br>";
 
 $posicion=strpos($frase,"de");
 echo $posicion."<br>";
 
 $remplazar=str_replace("amarillo","azul","el carro es de color amarillo");
 echo $remplazar;
 
 


?>