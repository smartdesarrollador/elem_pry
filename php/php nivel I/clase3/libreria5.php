<?php


define("uit",2300);

function des_afp($sueldo){
	if ($sueldo>uit) 
		return $sueldo*0.12;
	
else if($sueldo==uit)
      return $sueldo*0.10;
else
   return $sueldo*0.09;
 }
 
 
 function des_4tacat($sueldo){
	if ($sueldo>uit)
	   return $sueldo*0.15;
	else if ($sueldo==uit)
	return $sueldo*0.13;
	else
	    return $sueldo*0.10; 
	}  
	
function des_descuentos($suma){	
	$suma= des_afp($sueldo)+des_4tacat($sueldo);
	
	if($suma<(uit/2))
	   return $sueldo*0.10;
	else
	    return $sueldo*0.09;
}

function des_aport_nav($sueldo){
	if($sueldo>2000)
	    return $sueldo*0.17;
	else if ($sueldo<1000)
	    return $sueldo*0.08;
     else   
        return $sueldo*0.13;
}
function bon_mov($sueldo){
	$sum=des_4tacat($sueldo)+des_afp($sueldo)+des_aport_nav($sueldo)+des_descuentos($sueldo);
	$tot=$sueldo-$sum;
	if($tot<($sueldo/2))
	   return $sueldo*0.10;
	else 
	return $sueldo*0.05;
	
	
}

function bon_refrigerio($sueldo){
	if($sueldo<1500)
	return $sueldo*0.04;
	else if($sueldo>3000)
	  return 0;
	  else
	     return $sueldo*0.02;
}

function bon_reintegro($sueldo)
{
	$nav=des_aport_nav($sueldo);
	
	if($nav>300)
	 return 20;
	 else
	 return 0;
}

function imprimir($texto,$func,$var){
	
	function imprimir($texto,$func,$var){
	
	if($func!="")
	 echo "<tr><td>".$texto." --> s/</td><td>".number_format($func($var),2,".",",")."</td></tr>";
	 else
	 echo "<tr><td>".$texto." --> s/</td><td>".number_format($var,2,".",",")."</td></tr>";
}



	   
	   
   



?>