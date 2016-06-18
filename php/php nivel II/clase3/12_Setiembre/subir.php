<?php

$llega_name=$_FILES['archivo']['name'];
$llega_size=$_FILES['archivo']['size'];
$llega_type=$_FILES['archivo']['type'];
$llega=$_FILES['archivo']['tmp_name'];
$tope=$_POST['lim_tamaño'];
#mostrando los datos llegados
echo "archivo:  $llega <br>";
echo "nombre:  $llega_name <br>";
echo "tamaño:  $llega_size <br>";
echo "tipo:  $llega_type <br>";
echo "tope:  $tope <br>";
if($llega !="none" AND $llega_size != 0 AND $llega_size<=$tope){
	if(copy($llega,"img/$llega_name")){
		echo "<h2> Se ha transferido el archivo $llega_name</h2>";
		echo "<br>Su tamaño es: $llega_size bytes<br>";
		echo "<br>El ficheero es tipo: $llega_type<br>";
		//seleccionamos segun tipo de archivo
		if($llega_type=="image/pjpeg"){
			echo "img src=img/$llega_name><br>";
		}
	}
} else{
	echo "<h2>No ha podido transferirse el fichero</h2>";
	echo"<h3>su tamaño no puede exceder de $tope bytes</h3>";
}
echo "<br><a href=subir.html>Regresar</a>";

?>