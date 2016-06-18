<?php
echo "Imprimir los numeros para menores a 100<br>";
$num=2; //p1
while($num<100)//p2
{ echo "EL numero es ".$num."<br>";
  $num=$num+2;//p3   
 }
 echo "Tabla de un Numero<br>";
 $num = 5; $cont=1;//p1
 while($cont<=12)//p2
 { echo " ".$cont." * ".$num." = ".$cont * $num."<br>";	
   $cont ++;//$cont=$cont +1  p3
  } echo "Impresion de tamaños de letras<br>";
  $size=1;
  While ($size<=6)
	{ echo "<font size=$size>Tamaño $size</font><br>\n";
      $size++; }
   echo "Contar la sentencia repetitiva en el valor 3<br>";
   $size=1;
  While ($size<=6)
	{ echo "<font size=$size>Tamaño $size</font><br>\n";
	   if ($size == 3)
	      {echo "Termina en el valor 3<br>";
		  break;}
      $size++; 
   }   
      
?>