<?php
define("UIT", 2300);//definicion de constante
function Desc_AFP($sueldo){
	if ($sueldo > UIT)  
	   return $sueldo*0.12;
	else if ($sueldo == UIT) 
	   return $sueldo*0.10;
	else//si es menor
	  return $sueldo*0.09; }
function Desc_4taCat($sueldo){
	if ($sueldo > UIT) 
	  return $sueldo*0.15;
	else if ($sueldo == UIT) 
	  return $sueldo*0.13;
	else  
	  return $sueldo*0.10; }
function Desc_Descuentos($sueldo){
	$sumaDesc = Desc_AFP($sueldo) + Desc_4taCat($sueldo);
	if ($sumaDesc < (UIT/2)) 	
	  return $sueldo*0.10;
	else//si es mayor o igual
	  return $sueldo*0.09; }
function Desc_AporteNav($sueldo){
	if ($sueldo > 2000)
	  return $sueldo*0.17;
	else if ($sueldo < 1000) 
	  return $sueldo*0.08;
	else 
	  return $sueldo*0.13; }
function bon_Movilidad($sueldo){
$suma = Desc_AFP($sueldo)+Desc_4taCat($sueldo) +Desc_Descuentos($sueldo);
  $suma = $suma+Desc_AporteNav($sueldo);
  $Tot  = $sueldo - $suma;
	if ($Tot<($sueldo/2)) 
	  return $sueldo*0.10;
	else
	  return $sueldo*0.05; }
function bon_Refrigerio($sueldo){
	if ($sueldo < 1500) 
	  return $sueldo*0.04;
	else if ($sueldo > 3000) 
	  return 0;
	else //si esta entre 1500 y 3000
	  return $sueldo*0.02; }
function bon_Reintegro($sueldo){
	$nav = Desc_AporteNav($sueldo);
	if ($nav > 300) 
	  return 20;
	else 
	  return 0; }
 function imprimir($texto,$func,$var)
 {
 if ($func!="")	 
  echo"<tr><td>".$texto." -> s/.</td><td>".number_format($func($var),2,".",",")."</td>";	
 else
  echo"<tr><td><b>".$texto." ->s/.</b></td><td>".number_format($var,2,".",",")."</td>";  }

?>








