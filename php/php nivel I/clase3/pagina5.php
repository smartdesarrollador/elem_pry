<?php


function promedio($n1,$n2,$n3){
	
	
	
	if($n1<$n2){
		$menor=$n1;
	}
	else
	     $menor=$n2;
	     
	     if($menor<$n3){
			$menor=$menor;
		}
		else
		   $menor=$n3;
		   
		   
		   $total=$n1+$n2+$n3;
		   
		   $promedio=($total-$menor)/2;
		   return $promedio;
		
}

function notas($n1,$n2,$n3){
	
	echo "<td>$n1</td><td>$n2</td><td>$n3</td><td>";
	
}






?>