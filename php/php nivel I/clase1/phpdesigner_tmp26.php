<?php
//concatenacion de cadenas
    $cadena1="Perro";
	$cadena2=" muerde";
	$cadena3=$cadena1.$cadena2;
	echo $cadena3."<br>";
	$cadena = "Bienvenidos al PHP"; 
	//recorro la cadena hasta encontrar una "m" 
	$i=0; 
	while ($cadena[$i]!="s" && $i< strlen($cadena)){ 
	    $i++; 
	} 
//cuando lo encuentra o termina el recogido
	if ($i==strlen($cadena)) //si llego al final
	    echo "No se encuentra la letra m"; 
	else //no llego al final
	    echo "Está en la posición $i"; 


?>