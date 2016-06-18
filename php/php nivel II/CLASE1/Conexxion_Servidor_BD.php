<?php

function conectarse(){
	//verificarcion del acceso al servidor
	if(!($link=mysql_connect("localhost","root","root"))){
		echo "Error al conectarse al servidor";
		exit();
	}
	//verificación de la base de datos
	if(!mysql_select_db("bdsistemas",$link)){
		echo "Error al seleccionar la Base de Datos";
		exit();
	}
	return $link;//retorna la variable tipo conexión.
}


?>