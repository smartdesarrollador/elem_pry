<?php

$n=20;

$c=0;
$i=0;

while($c<$n){
	if($c==0){
		echo $c." ";
		$p=$c;
	}
	if($c==1){
		echo $c." ";
		$s=$c;
	}
	if( $c>1){
	$i=$p+$s;
	echo $i." ";
	$p=$s;
	$s=$i;	
		
		
	}
	
	
	
	
	
	$c++;
}



?>