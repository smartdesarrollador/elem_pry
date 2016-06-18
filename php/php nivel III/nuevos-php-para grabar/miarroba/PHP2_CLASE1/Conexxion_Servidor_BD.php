<?php

function conectarse(){
	//verificarcion del acceso al servidor
	if(!($link=mysql_connect("mysql.webcindario.com","mundoweb5","a1sistemab2web"))){
		echo "Error al conectarse al servidor";
		exit();
	}
	//verificación de la base de datos
	if(!mysql_select_db("mundoweb5",$link)){
		echo "Error al seleccionar la Base de Datos";
		exit();
	}
	return $link;//retorna la variable tipo conexión.
}


?>