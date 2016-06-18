<?php
function revertir($cadena){
      $palabra=strrev($cadena);

      return $palabra;

}


?>



<?php // ejemplo
     $cadena="hola";

     echo revertir($cadena);   
?>