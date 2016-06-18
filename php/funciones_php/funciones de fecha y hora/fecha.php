<?php 
      function fecha(){
      	$time=time();

      	 return date("d-m-Y ",$time);
      }  
?>

<?php 
      echo fecha();

      //se mostrara en el navegador:

      //02-06-2014 

     
?>