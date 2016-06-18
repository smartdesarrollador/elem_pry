<?php 
      function a_mayusculas($cadena){
      	$mayusculas=strtoupper($cadena);

      	return $mayusculas;
      }  
?>

<?php 
      $cadena="hola mundo";

      echo a_mayusculas($cadena);  

      //en el navegador se mostrara:

      //HOLA MUNDO
?>