<?php 
      function convertir_a_array($cadena){
      	$arregloCadena=str_split($cadena);

      	return $arregloCadena;
      }
?>

<?php 
      $cadena="hola mundo";

      $arregloCadena=convertir_a_array($cadena);  

      foreach ($arregloCadena as $key => $value) {
      	echo $value."<br>";
      }
?>