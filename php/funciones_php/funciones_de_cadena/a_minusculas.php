<?php 
      function a_minusculas($cadena){
      	$minusculas=strtolower($cadena);
      	return $minusculas;
      }  
?>

<?php 
      $cadena="HOLA MUNDO";

      echo a_minusculas($cadena);

      //en el navegador se mostrara:
      
      //hola mundo  
?>