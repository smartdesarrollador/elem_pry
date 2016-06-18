<?php
  $ciudad[] = "Arequipa";  $ciudad[] = "Piura";
  $ciudad[] = "Lima";  $ciudad[] = "Ica";
  $ciudad[] = "Tacna";  $ciudad[] = "Puno";
  $ciudad[] = "Chiclayo";
  $i=0;
  while($i<7)
  {  print ("La Ciudad de  " . $ciudad[$i] . "<BR>\n");
  	 $i++;  }
echo "Con la Funcion Arrays<br>";
 $ciudad1 = array("Arequipa","Piura","Lima","Ica","Tacna","Puno");
 //contamos el número de elementos de la tabla
 $numElem = count($ciudad1);
//imprimir todos los elementos de la tabla
 for ($i=0; $i < $numElem; $i++)
	{ print ("La ciudad $i es $ciudad1[$i] <BR>\n");}
?>