<?php 
      function primeras_letras_a_mayusculas($cadena){
      	$primerasMayusculas=ucwords($cadena);

      	return $primerasMayusculas;
      }  
?>

<?php 
      $cadena="hola mundo";

      echo primeras_letras_a_mayusculas($cadena);

      //se mostrara en el navegador:

      //Hola Mundo  
?>