<?php
//concatenacion de cadenas
$cadena1="Perro";
	$cadena2=" muerde";
	$cadena3=$cadena1.$cadena2;
	echo $cadena3."<BR>";
	
	$cadena = "Bienvenidos al PHP"; 

	//recorro la cadena hasta encontrar una "m" 
 
	
	$i=0; 
	while ($cadena[$i]!="m" && $i< strlen($cadena)){ 
	    $i++; 
	} 

	if ($i==strlen($cadena)) 
	    echo "No se encuentra la letra s"; 
	else 
	    echo "Está en la posición $i"; 





?>