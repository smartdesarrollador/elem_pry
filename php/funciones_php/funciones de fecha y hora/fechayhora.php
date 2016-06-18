<?php 
      function fechayhora(){
      	$time=time();

      	 return date("d-m-Y (H:i:s)",$time);
      }  
?>

<?php 
      echo fechayhora();

      //se mostrara en el navegador:

      //02-06-2014 (03:07:15)
?>