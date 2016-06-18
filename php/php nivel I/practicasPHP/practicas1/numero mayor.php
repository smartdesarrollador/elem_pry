<?php

$a=2;
$b=4;
$c=7;

if($a<$b)
{
	$mayor=$b;
}else{
	$mayor=$a;
}


if($mayor<$c)
{
	$mayor=$c;
}else{
	$mayor=$mayor;
	
}


echo $mayor;



?>