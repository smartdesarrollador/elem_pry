<html>
<head>Lista de Empleados</head>
<body>
  <h3><b>Ejemplo de BD MySql con PHP</b></h3>
  <?php
     include("Conexxion_Servidor_BD.php");//invocamos la libreria
     $link=conectarse();
     //cargamos la inofrmacion del select en la variable result
     $result=mysql_query("select * from personal",$link);
  ?>
  <table border="1" cellspacing="1" cellpadding="1">
      <tr><td>Nombre</td><td>Direccion</td></tr>
    <?php
    //recorre linea por linea el resultado obtenido
      while($row=mysql_fetch_array($result)){
		printf("<tr><td>%s</td><td>%s</td></tr>",$row["nombre"],$row["direccion"]);
	}
	mysql_free_result($result);//libera de memoria la variable $result
	mysql_close($link);//cierra la conexion a la base de datos
	?>
  </table>
</body>
</html>