<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once DIRECTORIO_RAIZ.'/clases/dao/CategoriaDAO.class.php';

class CategoriaDAOFactory{
    static private $instancia=null;
    private function  __construct() {

    }

    static public function getInstancia(){
        if(self::$instancia==null){
            self::$instancia=new CategoriaDAOFactory();
        }
        return self::$instancia;

    }
}

?>
