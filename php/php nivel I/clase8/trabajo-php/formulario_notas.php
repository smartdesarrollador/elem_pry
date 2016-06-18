<html> 
	<head> 
	    <title>Me llamo a mi mismo...</title> 
	</head> 
	<body>
	 
	<?php
	if (!$_POST){ //si no existen datos de envio, si esta vacio
	?> 
	    <h1>ingresar notas</h1>
	    <form action="formulario_notas.php" method="POST"> 
	    <table border=1>
	    <tr> <td>DE MATEMATICA:</td> <td><input type="text" name="matematica" size="5"> </td> </tr>   <br> 
	    <tr> <td>NOTA DE LENGUAJE:</td><td> <input type="text" name="lenguaje" size="5">  </td> </tr> <br> 
	    <tr> <td>NOTA DE HISTORIA:</td> <td><input type="text" name="historia" size=5  > </td> </tr>  <br> 
	  <tr> <td> NOTA DE INGLES: </td><td><input type="text" name="ingles" size="5"> </td> </tr>  <br>
	  <tr> <td> CODIGO: </td> <td><input type="text" name="codigo" size="20">  </td> </tr>   <br> 
	    <tr> <td colspan="2"><input type="submit" value="Enviar"> </td> </tr>
		</table>
	    </form> 
	    <hr>
	    
	    
	<?php 
	} else { 
	    $matematica=$_POST["matematica"];
	    $lenguaje=$_POST["lenguaje"];
	    $historia=$_POST["historia"];
	    $ingles=$_POST["ingles"];
	    $codigo=$_POST["codigo"];
	    
	    
		
		$cad="\n\t".$matematica."\t".$lenguaje."\t".$historia."\t".$ingles."\t\n";
	//abrir archivo
	
	for ($i=0;$i<1;$i++) {
	

	@ $fp = fopen("c:\grabar".$codigo.".txt" , "ab");
	// si no puede abrir
	}
	

	if(!$fp)
	   {
		echo "<p><strong>proceso de abrir archivo no lo puede hacer...."."por favor intentelo luego.....</strong></html>";
		exit;
	}
	//en caso de que todo sea correcto
	fwrite($fp,$cad,strlen($cad));
	//cerrar el archivo
	echo "<b>notas grabadas.";
	
	} 
	?> 
	
	</body> 
</html> 