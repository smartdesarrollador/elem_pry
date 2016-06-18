<?php
  include("Conexxion_Servidor_BD.php");
  $link = conectarse();
  $codigo = $_POST["codigo"];
  $nombre = $_POST["nombre"];
  $direccion = $_POST["direccion"];
  $edad = $_POST["edad"];
  $sueldo = $_POST["sueldo"];
  
  mysql_query("insert into personal(codigo,nombre,direccion,edad,sueldo) values($codigo,'$nombre','$direccion',$edad,'$sueldo')",$link);
  header("location:insertar.php");
  

?>