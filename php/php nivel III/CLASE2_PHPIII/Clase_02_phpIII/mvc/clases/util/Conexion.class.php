<?php
class Conexion{
    static private  $instancia=NULL;
    public  $enlace=NULL;
    private function __construct($server=DB_SERVER,$database=DB_DATABASE,$username=DB_SERVER_USERNAME,$password=DB_SERVER_PASSWORD){
        $this->enlace=@mysql_pconnect($server,$username,$password);
        if(!$this->enlace){
            throw  new ConexionExcepcion("No se pudo conectar al Servidor".mysql_error());
        }
        if(!mysql_select_db($database, $this->enlace)){
            throw  new ConexionExcepcion("No se pudo conectar ala BD ".mysql_error());
        }
    }

    static public function  getInstancia(){
       if(self::$instancia==NULL){
           self::$instancia=new Conexion();
       }
       return self::$instancia;
    }
}
?>