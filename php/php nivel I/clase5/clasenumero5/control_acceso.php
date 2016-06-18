<?php
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  if($usuario=='ADMIN'&& $password=='FYSH')
    {
       header("location:orden.html");
     }
  else
    {
        header("location:acceso.php");
    }
?>
