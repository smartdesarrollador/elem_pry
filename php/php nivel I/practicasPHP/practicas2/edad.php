<html> 
	<head> 
	   <title>Restringir por edad</title> 
	</head> 
	<body> 
	<?php
		$edad = $_POST["edad"]; 
		echo "Tu edad: $edad<p>"; 
			if ($edad < 18) { 
			   echo "No puedes entrar"; 
			} else { 
				   echo "Bienvenido"; 
				} 
	?> 
	</body> 
</html> 
