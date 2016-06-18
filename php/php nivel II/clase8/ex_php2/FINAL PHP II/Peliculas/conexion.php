<?php
    function conectar(){
	if(!($SQLid = mysql_connect("localhost","root","root"))){
		echo "Error al coenctarse a la BD.";
		exit;
	}
	if(!mysql_select_db("datos",$SQLid)){
		echo "Error al seleccionar la BD.";
		exit;
	}
        return $SQLid;
    }
?>
