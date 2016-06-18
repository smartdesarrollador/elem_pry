<?php
#subbiendo archivo al servidor
$llega_name=$_FILES['archivo']['name'];
$llega_size=$_FILES['archivo']['size'];
$llega_type=$_FILES['archivo']['type'];
$llega=$_FILES['archivo']['tmp_name'];
$tope=$_POST['linm_tamaño'];
#MNOSTRANFO LOS DATOS LLEGADOS
echo "archivo : $llega <br>";
echo "nombre : $llega_name <br>";
echo "tamaño : $llega_size <br>";
echo "tipo : $llega_type <br>";
echo "tope : $tope <br>";

if($llega !="none" AND $llega_size !=0 AND $llega_size<=$tope){
	if (copy ($llega,"img/$llega_name")){
		echo "<h2>Se ha transferido el archivo $llega_name</h2>";
		echo "<br>su tamaño es:  $llega_size bytes<br>";
		echo "<br>El fichero es tipo:  $llega_type <br>";
		#seleccionando segun tipo de archivos
		if($llega_type=="image/pjpeg"){
			echo "<img src=img/$llega_name><br>"; }
	}
	
}else{
	echo "<h2>no se ha transferido el archivo </h2>";
	echo "<h3>Su tamaño no puede exeder de $tope bytes </h2>";}
	echo "<br><a href=subir.html>Regresar</a>";
?>