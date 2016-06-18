<?php

function conectarse()
{
	if(!($link=mysql_connect("localhost","root","root"))){
		echo "error al conectarme al servidor";
		exit();
	}
	
	if(!mysql_select_db("bdsistemas",$link)){
		echo "error al seleccionar  la base de datos";
		exit();
	}
	   return $link;
	
}

$link=conectarse();

echo "la conexion fue un exito";
mysql_close($link);



?>