<?php
//Se pide definir un mensaje de una nota dependiendo de la sig. tabla:
// 0 - 5 --->Muy malo        6 - 10 ---> Malo
// 11 - 15 ---> Regular      16 - 20 ---> Bueno
$nota = 3;//la nota a trabajar
//validar que la nota se encuentre entre 0 y 20
if (($nota>=0) && ($nota<=20))
  { if ($nota>=0 && $nota<=5)
  	     echo "Su Nota es ".$nota." es Muy Mala";
  	elseif ($nota>=6 && $nota<=10)
  	     echo "Su Nota es ".$nota." es Mala";     
  	elseif ($nota>=11 && $nota<=15)
  	     echo "Su Nota es ".$nota." es Regular";     
  	elseif ($nota>=16 && $nota<=20)
  	     echo "Su Nota es ".$nota." es Buena";          
  }
else//la nota esta fuera de rango
   echo "la nota ".$nota." Ingresada esta fuera de Rango";
?>
