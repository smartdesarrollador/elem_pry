<?php

$nombre="\n\t".$_POST[nombre]."\n\t";

@ $abrir=fopen("C:\colocar.txt","ab");

if(!$abrir){
	echo "no se puede abrir por favor intentelo mas tarde....";
	exit;
}

fwrite($abrir,$nombre,strlen($nombre));

fclose($nombre);

echo "nombre fue enviado;"

?>