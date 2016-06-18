<html>
<head>
<title>
</title>

</head>
<body>



<?php

$cadena="hola";

$c=0;
$d=strlen($cadena);
$f=$d+1;

while($c<$d){
	$f=$f-1;
	
	if($c<($d-1)){
	echo "<h".$f.">".$cadena[$c]."</h".$f.">"." - ";
	
	
	}
	else
	echo "<h".$f.">".$cadena[$c]."</h".$f.">";
	
	
	$c++;
}


?>
</body>
</html>
