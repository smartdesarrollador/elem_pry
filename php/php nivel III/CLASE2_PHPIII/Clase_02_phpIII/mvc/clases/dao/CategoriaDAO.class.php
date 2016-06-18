<?php
require_once DIRECTORIO_RAIZ.'/clases/util/Conexion.class.php';
require_once DIRECTORIO_RAIZ.'/clases/util/ConexionExcepcion.class.php';
require_once DIRECTORIO_RAIZ.'/clases/util/DAOExcepcion.class.php';
require_once DIRECTORIO_RAIZ.'/clases/vo/CategoriaVO.class.php';
class CategoriaDAO{
public function listar(){
    $resultado=array();
    try{
        $ocnx=Conexion::getInstancia();
        $sql="SELECT idcategoria,nombre,descripcion ";
        $sql.="FROM categoria";
        $rs=mysql_query($sql,$ocnx->enlace);
        if(!$rs){
            $msg=mysql_error($ocnx->enlace);
            throw new DAOExcepcion($msg);
        }else{//mysql_fectch_object(); optimizacion
            while ($row=mysql_fetch_array($rs)){
                $c=$row["idcategoria"];
                $n=$row["nombre"];
                $d=$row["descripcion"];
                $resultado[]=new CategoriaVO($c,$n,$d);
            }
        }
        mysql_close($ocnx->enlace);
    }catch(ConexionExcepcion $e){
        throw new ConexionExcepcion($e->getMessage());
    }catch(DAOExcepcion $dao){
        throw new DAOExcepcion($e->getMessage());
    }
    return $resultado;
}
public function insertar(){}
public function actualizar(){}
}
?>
