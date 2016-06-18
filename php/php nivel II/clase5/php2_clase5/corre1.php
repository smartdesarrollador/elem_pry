<?php
      $x=mail('fatima@localhost.com','bienvenidos','provando envio de mails...');
      if ($x==1){
		echo 'correo se envio en forma correcta';
	}else
	  echo 'lo sentimos';



?>