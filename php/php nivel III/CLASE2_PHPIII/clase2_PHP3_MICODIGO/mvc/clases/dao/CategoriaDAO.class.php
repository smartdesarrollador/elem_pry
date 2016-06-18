<?php
require_once DIRECTORIO_RAIZ.'/clases/util/Conexion.class.php';
require_once DIRECTORIO_RAIZ.'/clases/util/ConexionException.class.php';
require_once DIRECTORIO_RAIZ.'/clases/util/DAOExcepcion.class.php';
require_once DIRECTORIO_RAIZ.'/clases/util/CategoriaVO.class.php';

class CategoriaDAO{
    public function listar(){

    $resultado=array();
    try{
         $ocnx=Conexion::getInstancia();
         $sql="SELECT idcategoria,nombre,descripcion";
         $sql.="from categoria";
         $rs=mysql_query($sql,$ocnx->enlace);
         if(!$rs){
             $msg=mysql_error($ocnx->enlace);
             throw new DAOExcepcion($msg);
         }else{
             while ($row=  mysql_fetch_array($rs)){
                 $c=$row["idcategoria"];
                 $n=$row["nombre"];
                 $d=$row["descripcion"];
                 $resultado[]=new CategoriaVO($c, $n, $d);
             }
         }
         mysql_close($ocnx->enlace);
    }catch(ConexionExcepcion $e){
        throw new ConexionExcepcion($e->getMessage());

    }catch(     DAOExcepcion $dao){
         throw new ConexionExcepcion($e->getMessage());

    }
    return $resultado;

    }

    public function ensertar(){

    }

    public function actualizar(){

    }










}
?>
