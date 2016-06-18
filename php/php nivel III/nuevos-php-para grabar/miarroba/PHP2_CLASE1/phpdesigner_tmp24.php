<html>
 <head><title>Ejemplo PHP - Insertar Registros</title></head>
 <body>
  <h3>Ingreso de Personal</h3>
  <form action="procesar.php" method="POST">
   <table>
    <tr><td>Codigo:</td><td><input type="text" name="codigo" size="10"></td></tr>
    <tr><td>Nombre:</td><td><input type="text" name="nombre" size="20"></td></tr>
    <tr><td>Direccion:</td><td><input type="text" name="direccion" size="20"></td></tr>
	<tr><td>Edad:</td><td><input type="text" name="edad" size="5"></td></tr>    
	<tr><td>Sueldo.:</td><td><input type="text" name="sueldo" size="10"></td></tr>
    <tr><td></td><td><input type="submit" name="accion" value="Grabar" size="10"></td>
    </tr>
   </table>
  </form> <hr>
   <?php
     include("Conexxion_Servidor_BD.php");
     $link=conectarse();
     $result=mysql_query("select * from personal",$link);
   ?>
   <h3>Listado de PERSONAL</h3>
   <table border="1" cellspacing="1" cellpadding="1">
         <tr><td>Codigo</td><td>Nombre</td><td>Sueldo</td></tr>
        
   <?php
      while($row=mysql_fetch_array($result)){
		printf("<tr><td>%d</td><td>%s</td><td>%d</td></tr>",$row["codigo"],$row["nombre"],$row["sueldo"]);
	    }
	    mysql_free_result($result);
	    mysql_close($link);
	 ?> 
	 </table>   
 </body>
</html>







