<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	

	<title>Untitled 2</title>
</head>

<body>
<h1>numeros capicuas de 3 cifras</h1>
<?php
$num=100;
function capicua($n){

while($n<999){	
	$num=$n;
	if ($num>=100 && $num<=999){
	
	
	$cen = floor($num / 100);
	$res = $num % 100;
	$dec = floor($res / 10);
	$unid = $res % 10;
	
	if($cen==$unid ){
		echo $num."<br>";
	}//fin de if
	
	}//fin de if
	$n++;
	}//fin de while
	
	}//fin de funcion
	
	
echo capicua();
	
	
	

?>
</body>
</html>