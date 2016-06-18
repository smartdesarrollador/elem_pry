<?php
	//trataremos de guardar XD
	function grabar(){
		//declaramos variables
		$codigo=recuest('codigo');
		//almacenar la cadena para grabar
		$outputstring="/n".$codigo;
		$codig=$_POST['codigo'];
		//abri el archivo
		@$fp=fopen("c:\alumnos".$codig.".txt",ab);
		fwrite($fp,$outputstring,strlen($outputstring));
		fclose($fp);
	}
?>
<html>
<body>
<form action="notas.php" method="post">
	<p><b>Ingreso de Alumnos</b></p>
	<table border="0">
	 <tr>  <td>Codigo :</td>
	    <td align="left"><input type="text" name="codigo" size="4" maxlength="4"></td></tr>
	  <tr> <td>Nombres :</td>
	    <td align="left"><input type="text" name="nombre" size="20" maxlength="20"></td></tr>
	  <tr><td>Apellidos :</td>
	    <td align="left"><input type="text" name="apellido" size="20" maxlength="20"></td></tr>
 	   <tr> <td>Direccion :</td>
	    <td align="left"><input type="text" name="direccion" size="20" maxlength="20"></td></tr>
	   <tr>  <td>Telefono :</td>
	    <td align="left"><input type="text" name="telfono" size="7" maxlength="7"></td></tr>
	   <tr> <td colspan="2" align="left">
	         Edad : <input type="text" name="edad" size="2" maxlength="2">
	         Sexo :<input type="text" name="sexo" size="1" maxlength="1"></td> </tr>
  	    <tr>
 	         <td align="center"><input type="submit" value="Grabar" onclick="grabar()"></td>
	         <td align="center"><input type="submit" value="Ingreso de Notas"></td> </tr>
	</table>
</form>
</body>
</html>
