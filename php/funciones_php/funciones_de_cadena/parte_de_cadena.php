<?php 
      function parte_de_cadena($cadena,$numeroDeComienzo,$numeroDeCantidad){
      	$parteDeCadena=substr($cadena, $numeroDeComienzo,$numeroDeCantidad);
      	return $parteDeCadena;
      }  
?>

<?php 
      $cadena="mundo";

      echo parte_de_cadena($cadena,1,2);  
?>