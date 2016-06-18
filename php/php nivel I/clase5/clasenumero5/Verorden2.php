<?php
    //carga el archivo de forma de una Arrays
	$orden= file("c:\orders.txt");
	//contabilizo la cantidad de ordenes
	$num_de_orden = count($orden);
	//si no existen ordenes
	if ($num_de_orden == 0) {
	  echo '<p>No Hay Ordenes Pendientes. Por Favor Intentelo Luego....</p>';  
	 }
	 else
	 {	//recorro los registros de la matriz
         for ($i=0; $i<$num_de_orden; $i++) {
	          echo $orden[$i].'<br />';
	        }
	  }
?>
