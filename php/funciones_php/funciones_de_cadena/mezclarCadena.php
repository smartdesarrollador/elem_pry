<?php 
      function mezclarCadena($cadena){
      	     $mezclaCadena=str_shuffle($cadena);

      	     return $mezclaCadena;
      }  



?>

<?php 
      $cadena="mundo";

      echo mezclarCadena($cadena);  
?>