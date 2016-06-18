<?php
$cnx=mysql_connect('localhost','root','root');
mysql_select_db('php_mvc');
$sql="select id,alupat,alumat,alunom from alumnos";
$datos=mysql_query($sql);
if(mysql_num_rows($datos)>0){
	while($fila=mysql_fetch_row($datos)){
		$rpta[]=$fila;
	}
}
?>