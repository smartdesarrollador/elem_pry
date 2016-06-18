<?php

for($n=100;$n<=999;$n++){
	
	$cen=floor($n/100);
	$res=$n%100;
	
	$des=floor($res/10);
	$res=$n%10;
	
	$uni=$res;
	
	if(($cen %2==0)  && ($des %3==0)  && ($cen!=$des) && ($uni!=$des)&& ($cen!=$uni) ){
		echo "$n <br>";
	}
	
	
	
	
	
	
	
	
}


?>