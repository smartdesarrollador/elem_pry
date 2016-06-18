<?php 
      function hora(){
      	$time=time();

      	 return date("H:i:s",$time);
      }  
?>

<?php 
      echo hora();

      //se mostrara en el navegador:

       //03:11:33
?>