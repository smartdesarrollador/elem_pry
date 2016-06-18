<?php
$destinatario="manuel@localhost.com";
$titulo="correo de chismes";
$responder="manuel11_9@hotmail.com";
$remite="fantasma@virtual.com";
$remitente="Un mail fantasma";
$mensaje="<html><head></head><body bgcolor='#ff0000'>";
$mensaje .="<font face='Arial' size=6>Prueba HTML</font>";
$mensaje .="</body></html>";
$cabecera="Date:".date("1 j F Y, G:i")."\n";
$cabecera .="MIME-Version: 1.0\n";
$cabecera .="From: ".$remitente."<".$remite.">\n";
$cabecera .="Return-path:".$remite."\n";
$cabecera .="Reply-To:".$responder."\n";
$cabecera .="X-Mailer:PHP".phpversion()."\n";
$cabecera .="Content-Type: text/html; charset=\"ISO-8859-1\"\n";
if(mail($destinatario,$titulo,$mensaje,$cabecera)){
	echo "mensaje enviado";
}

?>