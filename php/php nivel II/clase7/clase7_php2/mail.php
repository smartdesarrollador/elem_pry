<?php

function validaLongitud($valor,$permiteVacio,$minimo,$maximo){
   $cantCar=strlen($valor);
     if(empty($valor)){
		
		if($permiteVacio)return true;
		else return false;
	}
	else
	{
		if($cantCar>=$minimo && $cantCar<=$maximo)return true;
		else return false;
	}
}

function validacion($valor){
	if(eregi("([a-zA-Z0-9._-]{1,3})@ ([a-zA-Z0-9.-]{1,30})",$valor))return true;
	else return false;
}

//MAIN
if($_POST){
	
	foreach($_POST as $clave => $valor) $$clave=addslashes(trim(utf8_decode($valor)));
	sleep(5);
	if(!validaLongitud($nombre,0,4,50)) $error=1;
	if(!validaLongitud($empresa,1,4,50)) $error=1;
	if(!validaLongitud($telefono,1,4,50)) $error=1;
	if(!validaCorreo($correo)) $error=1;
	if(!validaLongitud($comentarios,0,5,500)) $error=1;
	    if($error==1) echo "Error";
	else
	{
		$fecha=date("d/m/y - H:i");
		$mensaje="Nuevo mensaje desde el Sitio:
		Fecha:$fecha
		Nombre:$nombre
		Empresa:$empresa
		Telefono:$telefono
		Correo electronico:$correo
		Comentarios : $comentarios";
		
		mail("edanps@gmail.com","Comentarios desde la web",$mensaje,"Form: sitio web <servicios@formatoweb.com.ar>");
		echo  "ok";
		
	}
}

?>