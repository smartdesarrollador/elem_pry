<?php

public function conectar($servidor,$usuario,$contraseņa,$basededatos){
	


	if(!($link=mysql_connect("$servidor","$usuario","contraseņa"))){
		echo "Error al conectarse al servidor";
		exit();
	}

	if(!mysql_select_db("$basededatos",$link)){
		echo "Error al seleccionar la Base de Datos";
		exit();
	}
	return $link;
}







?>