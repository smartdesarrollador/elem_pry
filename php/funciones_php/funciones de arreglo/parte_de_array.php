<?php 
      function parte_de_array($arreglo,$numeroDeComienzo,$numeroDeCantidad){
      	$parteDeArreglo=array_slice($arreglo, $numeroDeComienzo,$numeroDeCantidad);

      	return $parteDeArreglo;
      }  
?>

<?php 
      $arreglo=array("uno","dos","tres");

      $nuevoArreglo=parte_de_array($arreglo,1,2);

      foreach ($nuevoArreglo as $key => $value) {
      	echo $value."<br>";
      }
?>