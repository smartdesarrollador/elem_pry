<?php
    $x=mail('manuel@localhost.com','Bienvenido','Probando envio de mails...');
  if($x==1)
    echo 'Correo se envio en forma correcta...';
  else
    echo 'Lo sentimos...';

?>