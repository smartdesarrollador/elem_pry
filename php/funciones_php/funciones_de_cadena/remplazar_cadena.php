<?php 
      function reemplazar_cadena($palabra_a_reemplazar,$nueva_palabra,$cadena_total){
      	$cadenaReemplazada=str_replace($palabra_a_reemplazar, $nueva_palabra, $cadena_total);

      	return $cadenaReemplazada;
      }  
?>

<?php 
      $cadena="hola mundo";

      echo reemplazar_cadena("mundo","tierra",$cadena);

      //se mostrara en el navegador:

      //hola tierra  
?>