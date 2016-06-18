<?php 
      function encriptar_cadena($cadena){
      $encriptado=md5($cadena);

      return $encriptado;
      }  
?>

<?php 
      $cadena="password";

      echo encriptar_cadena($cadena);

        
?>