

<html> 
	<head> 
	   <title>Ejemplo de PHP</title> 
	</head> 	
	<body> 
	<?php 
	   echo strlen("12345"),"<br>";   
	   $palabras=split(" ","Esto es una prueba"); 
	   for($i=0;$palabras[$i];$i++) 
	      echo $palabras[$i],"<br>";        
	   $resultado=sprintf("3x5 = %f <br>",8*5); 
	   echo $resultado,"<br>";    
	   echo substr("Devuelve una subcadena de otra",9,3),"<br><br>"; 
	   if (chop("Cadena \n\n ") == "Caena") 
	      echo "Iguales<br><br>"; 
	   echo strpos("Busca la palabra dentro de la frase", "palabra"),"<br><br>";    
	   echo str_replace("verde","rojo","Un pez de color verde, como verde es la hierba."),"<br>"; 
	?> 
	</body> 
	</html> 




