<?php

$destinario="fatima@localhost.com";
$titulo="correo de chismes";
$responder="enrique_sistema_5000@hotmail.com";
$remite="fantasma@virtual.com";
$remitente="un mail fantasma";
$mensaje="<html><head></head><body bgcolor='#ff0000'>";
$mensaje.="<font face='arial' size='6'>prueba html</font>";
$mensaje.="</body></html>";
$cabecera="date:".date("1 j F Y,G:i")."\n";
$cabecera.="MIME-version:1.0\n";
$cabecera.="from:".$remitente."<".$remite.">\n";
$cabecera.="return-path:".$remite."\n";
$cabecera.="Reply-To:".$responder."\n";
$cabecera.="Content-Type:text/html; charset=\"ISO-8859-1\"\n";
if (mail($destinario,$titulo,$mensaje,$cabecera)){
	echo "mensaje enviado";
}
?>