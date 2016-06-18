<?php
require_once DIRECTORIO_RAIZ.'/clases/dao/CategoriaDAO.class.php';
class CategoriaDAOFactory{
    static private $instancia=NULL;
    private function  __construct() {
    }
    static public function getInstancia(){
        if(self::$instancia==NULL){
           self::$instancia=new CategoriaDAO();
        }
        return self::$instancia;
    }
}
?>
