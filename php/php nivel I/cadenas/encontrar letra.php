<?php

$cadena = "hola a todo el mundo"; 

	//recorro la cadena hasta encontrar una "m" 
	 
	for($i=0;$cadena[$i]!="m" && $i< strlen($cadena);$i++){ 
	    echo $cadena[$i]." ";
	    
	} 
echo "<br>";
	if ($i==strlen($cadena)) 
	    echo "No se encuentra..."; 
	else 
	    echo "Está en la posición $i"; 



?>