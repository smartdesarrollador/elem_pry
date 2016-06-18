<?php
echo "<h1>resultados de la votacion</h1>";


$Acontador=0;
$Bcontador=0;
$Ccontador=0;


for($j=1;$j<=20;$j++){
	$voto=$_POST["voto".$j];
	
	
	
	if($voto=="a".$j){
		$Acontador++;
		
	}
	
	if($voto=="b".$j){
		
		$Bcontador++;
	}
	
	if($voto=="c".$j){
		
		$Ccontador++;
	}
	
}

echo " SI :".(($Acontador/20)*100)."% <br>";;
echo " NO :".(($Bcontador/20)*100)."% <br>";;
echo " NULO :".(($Ccontador/20)*100)."% <br>";;




if($Acontador<$Bcontador){
	$ganador=$Bcontador;
	
}else
 $ganador=$Acontador;

if($ganador<$Ccontador){
	$ganador=$Ccontador;
	
}else
   $ganador=$ganador;





if($ganador==$Acontador){
	echo "<h2>GANO EL SI</h2>";
}

if($ganador==$Bcontador){
	echo "<h2>GANO EL NO</h2>";
}

if($ganador==$Ccontador){
	echo "<h2>GANO EL NULO</h2>";
}


?>