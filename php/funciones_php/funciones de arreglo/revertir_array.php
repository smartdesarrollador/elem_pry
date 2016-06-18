<?php 
      function revertir_array($arreglo){
      	$arregloRevertido=array_reverse($arreglo);
      	return $arregloRevertido;
      }  
?>

<?php 
      $arreglo=array("uno","dos","tres");

      $arregloRevertido=revertir_array($arreglo);

      foreach ($arregloRevertido as $key => $value) {
        	echo $value."<br>";
        }  
?>