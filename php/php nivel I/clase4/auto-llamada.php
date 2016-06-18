<html> 
	<head> 
	    <title>Me llamo a mi mismo...</title> 
	</head> 
	<body>
	 
	<?php
	if (!$_GET){ //si no existen datos de envio, si esta vacio
	?> 
	    <form action="auto-llamada.php" method="get"> 
	    Nombre: <input type="text" name="nombre" size="30">     <br> 
	    Empresa: <input type="text" name="empresa" size="30">   <br> 
	    Telefono: <input type="text" name="telefono" size=14 value="01 " >   <br> 
	    <input type="submit" value="Enviar"> 
	    </form> 
	<?php 
	} else { 
	    echo "<br>Su nombre: " . $_GET["nombre"]; 
	    echo "<br>Su empresa: " . $_GET["empresa"]; 
	    echo "<br>Su Teléfono: " . $_GET["telefono"]; 
	} 
	?> 
	</body> 
</html> 
