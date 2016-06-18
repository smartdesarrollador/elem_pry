<?php

$nota = 21;


if(($nota>=0) && ($nota<=20)){
	if($nota>=0 && $nota<=5)
	   echo "su nota es muy mala";
	   
	else if($nota>=6 && $nota<=10)
	   echo "su nota es mala";
	else if($nota>=11 && $nota<=15)
	   echo "su nota es buena";
	else if($nota>=16 && $nota<=20)
	   echo "su nota es muy buena";
	
}
else
    echo "la nota  ".$nota." ingresada esta fuera de rango";



?>