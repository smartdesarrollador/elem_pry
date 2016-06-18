<?php 
      function primera_letra_a_mayuscula($cadena){

      	$primeraMayuscula=ucfirst($cadena);

      	return $primeraMayuscula;
      }  
?>

<?php 
      $cadena="hola mundo";

      echo primera_letra_a_mayuscula($cadena);

      //en el navegador se mostrara:

      // Hola mundo  
?>