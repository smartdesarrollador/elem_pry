<?php
require_once 'conf.php';
require_once DIRECTORIO_RAIZ.'/clases/dao/CategoriaDAOFactory.class.php';
try{
    $dao=CategoriaDAOFactory::getInstancia();
    $listado=$dao->listar();
    include DIRECTORIO_RAIZ.'/templates/categoria_listar.tpl.php';
}catch(Exception $e){
    $msg=$e->getMessage();
    include DIRECTORIO_RAIZ.'/templates/error.tpl.php';
}
?>
