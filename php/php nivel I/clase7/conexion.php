<?php

function conectarse()
{
	if(!($link=mysql_connect("localhost","root","root"))){
		echo "error al conectarme al servidor";
		exit();
	}
	//verificacion y conexion a la base de datos
	if(!mysql_select_db("bdsistemas",$link))
	{
		echo "error la seleccionar la base de datos";
		exit();
	}
	return $link;
	
	
}

$link=conectarse();
echo "la conexion con la base de datos se efectuo correctamente";
mysql_close($link);//cierra la conexion a la base de datos



?>