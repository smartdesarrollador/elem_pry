<?php
function bd_conectar($tipo='mysql',$host='',$user='',$pass='',$base=''){
    switch($tipo){
        case 'mysql':
            $cnx=mysql_connect($host,$user,$pass);
            mysql_select_db($base);
            break;
        case 'postgres':
            $cnx=pg_connect("host=$host dbname=$base user=$user password=$pass");
            break;
    }
}
function bd_consultar($tipo='mysql',$sql){
    switch($tipo){
        case 'mysql':
            $resultado=mysql_query($sql);
            while($fila=mysql_fetch_row($resultado)){
                $salida[]=$fila;
            }
            break;
        case 'postgres':
            $resultado=pg_query($sql);
            while($fila=pg_fetch_row($resultado)){
                $salida[]=$fila;
            }
            break;
    }
    return $salida;
    #Liberando memoria
    unset($resultado);
    unset($fila);
    unset($salida);
}
?>