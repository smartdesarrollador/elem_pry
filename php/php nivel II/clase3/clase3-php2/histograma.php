<?php

class histograma{
	var $datos;
	function ingresar_datos($entrada){
		  $this->datos=$entrada;
	}
	function graficar(){
		$barra=25; $alto=200;
		$ancho =100 + $barra * count($this->datos);
		$figura=imagecreate($ancho,$alto);
		$fondo=imagecolorallocate($figura,100,150,230);
		imagefill($figura,0,0,$fondo);
		$blanco=imagecolorallocate($figura,255,255,255);
		
		foreach($this->datos as $m=$n){
			if ($i%2==0) {
				$color=imagecolorallocate($figura,10,120,120);}
				else{
					$color=imagecolorallocate($figura,120,50,10);
					
				$x1=50+$i*$barra; $y1=$alto-10*$n;
				
				$x2=50+($i+1)*$barra; $y2=$alto;
				imagefilledrectangle($figura,$x1,$y1,$x2,$y2,$color);
				imagettftext($figura,9,90,$x1+15,$alto-5,$blanco,"arial.ttf" ,"$m ($n)");
				$i++;
				
				}
	header('content-type:image/png');
	imagepng($figura);
	imagedestroy($figura);
   }
}
	
}		
		
		
	

$alumnos=array('jose_martinez'=>12,'luis_carrera'=>15,'moises_almeyda'=>18,'angel_paz'=>5,'cisar_ferrua'=>19),
	$grafico=new histograma();
	$grafico->ingresar_datos($alumnos);
	$grafico->graficar();
		


?>