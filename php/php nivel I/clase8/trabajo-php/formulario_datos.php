<html> 
	<head> 
	    <title>Me llamo a mi mismo...</title> 
	</head> 
	<body>
	 
	<?php
	if (!$_POST){ //si no existen datos de envio, si esta vacio
	?> 
	    <h1>ingresar datos</h1>
	    <form action="formulario_datos.php" method="POST"> 
	    <table border="1">
	     
	   <tr> <td> Nombre: </td> <td><input type="text" name="nombre" size="20">  </td> </tr>   <br> 
	    <tr> <td>apellido: </td> <td><input type="text" name="apellido" size="20"></td> </tr>   <br> 
	    <tr> <td>direccion: </td> <td><input type="text" name="direccion" size="30"  > </td> </tr>  <br> 
	    <tr> <td>edad: </td> <td><input type="text" name="edad" size="5">  </td> </tr> <br> 
	    <tr> <td> codigo: </td> <td><input type="text" name="codigo" size="20">  </td> </tr>   <br>
	    <tr> <td colspan="2"><input type="submit" value="Enviar"></td> </tr> 
	    </table>
	    </form> 
	    <hr>
	    
	    <h2><a href="formulario_notas.php">ir a formulario de notas</a></h2>
	<?php 
	} else { 
	    $nombre=$_POST["nombre"];
	    $apellido=$_POST["apellido"];
	    $direccion=$_POST["direccion"];
	    $edad=$_POST["edad"];
	    $codigo=$_POST["codigo"];
	    
	    
		
		$cad="\n\t".$nombre."\t".$apellido."\t".$direccion."\t".$edad."\t\n";
	//abrir archivo

	

	@ $fp = fopen("c:\grabar".$codigo.".txt" , "ab");
	// si no puede abrir

	
	if(!$fp)
	   {
		echo "<p><strong>proceso de abrir archivo no lo puede hacer...."."por favor intentelo luego.....</strong></html>";
		exit;
	}
	//en caso de que todo sea correcto
	fwrite($fp,$cad,strlen($cad));
	//cerrar el archivo
	echo "<b>datos grabados.";
	
	} 
	?> 
	</body> 
</html> 