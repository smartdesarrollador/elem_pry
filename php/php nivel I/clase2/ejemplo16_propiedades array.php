<?php
$semana = array("lunes","martes","mi�rcoles","jueves","viernes", "s�bado", "domindo");
echo "cant de items: ".count($semana)."<br>"; //7
//situamos el puntero en el primer elemento
reset($semana);
echo "Primer elemento: ".current($semana)."<br>"; //lunes
next($semana);
echo "Siguiente elemento: ".pos($semana)."<br>"; //martes
end($semana);//al final del arrays
echo "Elemento Final: ".pos($semana)."<br>"; //domingo
prev($semana);
echo "Elemento Anterior: ".current($semana)."<br>"; //s�bado
?>