<html>
  <head><title>Ejemplo de Elimnacion</title></head>
  <body>
    <h2>Eliminacion de Empleados</h2>
    <?php
       include("Conexxion_Servidor_BD.php");
       $link=conectarse();
       $result=mysql_query("select * from personal",$link);
    ?>
	<table border=1 cellspacing="1" cellpadding="1">
	  <tr><td><b>Nombre</b></td><td><b>Dirección</b></td><td><b>Borrar</b></td></tr>  
	<?php
	  while($row=mysql_fetch_array($result)){
		printf("<tr><td>%s</td><td>%s</td><td><a href=\"Pborrar.php?id=%d\">Borrar</a> </td></tr>",$row["nombre"],$row["direccion"],$row["codigo"]);
	}
	mysql_free_result($result);
	mysql_close($link);
	?>  
	</table> 
      </body>
</html>