<?php

function conectarse(){
	if(!($link=mysql_connect("localhost","root","root"))){
		echo "error al conectarse al servidor";
		exit();
	}
	
	if(!mysql_select_db("bdsistemas",$link)){
		echo "error al seleccionar la base de datos";
		exit();
	}
	
	
}

$link=conectarse();
	echo " la conexion fue un exito";
	fclose();
?>