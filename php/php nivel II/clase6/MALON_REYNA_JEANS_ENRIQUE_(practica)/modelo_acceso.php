<?php
include_once('modelo_abstraccion.php');

function alumnos_listado(){
    bd_conectar('mysql','localhost','root','','php_mvc');
    $sql="select id,alupat,alumat,alunom from alumnos";
    $datos=bd_consultar('mysql',$sql);
    return $datos;
    unset($datos); #Liberando memoria
}
?>