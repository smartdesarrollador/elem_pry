<?php
include("Conexxion_Servidor_BD.php");
$link=conectarse();
$id=$_GET['id'];
echo "El codigo a Eliminar ",$id;
mysql_query("delete from personal where codigo = $id",$link);
header("location:borrar.php");

?>