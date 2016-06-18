<?php

include("conex.php");
$link=conectarse();
$codigo=$_POST["codigo"];
$nombre=$_POST["direccion"];
$edad=$_POST["edad"];
$sueldo=$_POST["sueldo"];

mysql_query("Insert into personal(codigo,nombre,direccion,edad,sueldo) values ($codigo,'$nombre','$direccion',$edad,$sueldo)",$link);
header("location:insertar.php");





?>