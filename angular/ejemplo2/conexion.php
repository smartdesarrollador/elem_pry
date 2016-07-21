<?php

  $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db   = 'ajax';

 $mysqli = new mysqli($host,$user,$pass,$db); 


/*

function conectarse(){
	//verificarcion del acceso al servidor
	if(!($link=mysql_connect("localhost","root",""))){
		echo "Error al conectarse al servidor";
		exit();
	}
	//verificación de la base de datos
	if(!mysql_select_db("colegio",$link)){
		echo "Error al seleccionar la Base de Datos";
		exit();
	}
	return $link;//retorna la variable tipo conexión.
}
*/



 ?>