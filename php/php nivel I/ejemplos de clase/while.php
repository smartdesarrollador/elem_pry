<?php
echo "imprimir los numeros para menores a 100<br>";
$n=2;
while($n<100)
{echo "el numero es ".$n."<br>";
$n=$n+2;
}
echo "tabla de un numero<br>";
$n=5; $c=1;
while($c<=12){
echo " ".$c." * ".$n." = " .$c * $n."<br>";
$c++;	
	
}
echo "impresion de tamaños de letras<br>";
$size=1;
while($size<=6)
{
echo "<font size=$size>tamaño $size</font><br>";
$size++;	
}	
$size=1;
while($size<=6)
{
echo "<font size=$size>tamaño $size</font><br>";
if($size == 3)
{
	echo "termina en el valor 3<br>";
	break;
}
$size++;	
	
}
	
	




?>