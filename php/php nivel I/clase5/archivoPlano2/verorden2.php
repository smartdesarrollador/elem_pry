<?php
//carga el archivo de forma de una arrays
$orden=file("c:\orders.txt");
//contabiliza la cantidad de ordenes
$num_de_orden=count($orden);
//si no existen ordenes
if($num_de_orden==0){
	echo "<p>por favor intentelo luego.....</p>";
}
else{
	//recorro los registros de la matriz
	   for ($i=0;$i<$num_de_orden;$i++){
	   	
		echo $orden[$i]."<br>";
	}
}


?>