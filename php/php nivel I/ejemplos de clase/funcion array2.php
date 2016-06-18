<?php

$semana = array("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domindo");
echo count($semana)."<br>"; //7
//situamos el puntero en el primer elemento
reset($semana);
echo current($semana)."<br>"; //lunes
next($semana);
echo pos($semana)."<br>"; //martes
end($semana);
echo pos($semana)."<br>"; //domingo
prev($semana);
echo current($semana)."<br>"; //sábado



?>