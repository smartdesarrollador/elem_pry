<?php

$palabras=array("uno","dos","tres","cuatro","cinco");

echo count($palabras)."<br>";

end($palabras);
echo current($palabras)."<br>";

prev($palabras);
echo pos($palabras)."<br>";

reset($palabras);
echo pos($palabras)."<br>";

next($palabras);
echo pos($palabras)."<br>";


?>