<?php
  function media_aritmetica($a,$b)
  {  $media = ($a + $b )/2;
   return $media; }
  function imprime($texto) 
  { echo $texto . "\n<br>";	}
  function imprimeNegrilla($texto)
  {	echo "<B>$texto</B>\n<br>"; }

echo media_aritmetica(5,3)."<br>";
echo media_aritmetica(125,23.45)."<br>";
//utilizacion del nombre de la funcion
$MiFunc = "imprime";
$MiFunc("Hola");  //imprimirá Hola
$MiFunc = "imprimeNegrilla";
$MiFunc("Hola");  //imprimirá Hola
?>