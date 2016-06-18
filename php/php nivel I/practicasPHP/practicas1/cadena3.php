<html>
<head>
<title>
</title>

</head>
<body>



<?php

$cadena="hola que tal como les va en su recorrido";

$c=0;
$d=strlen($cadena);
$f=0;

while($c<$d){
	$f=$f+1;
	
	
	echo "<p style='font-size:".$f."px;'>".$cadena[$c]."</p>";
	
	
	
	
	
	$c++;
}


?>
</body>
</html>
