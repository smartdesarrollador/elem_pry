<?php

class histograma{
	var $datos;
	function ingresar_datos($entrada){
		$this->datos=$entrada;
	}
	function graficar(){
	$barra=25; $alto=200;
	$ancho=100+$barra*count($this->datos);
	$figura=imagecreate($ancho,$alto);//crea la imagen de la figura 
	$fondo=imagecolorallocate($figura,100,150,230);
	imagefill($figura,0,0,$fondo); //rellena la figura con el fondo
	$blanco=imagecolorallocate($figura,255,255,255);
	foreach($this->datos as $m=>$n){
		if($i%2==0){
			$color=imagecolorallocate($figura,10,120,120);
		}
		else{
			$color=imagecolorallocate($figura,120,50,10);
		}
		//esquina inicial
		$x1=20+$i*$barra; $y1=$alto-10*$n;
		//esquina final
		$x2=50+($i+1)*$barra; $y2=$alto;
		imagefilledrectangle($figura,$x1,$y1,$x2,$y2,$color);
		imagettftext($figura,9,90,$x1+15,$alto-5,$blanco,"arial.ttf","$m ($n)"); 
		$i++;
	}
	Header('content-type: image/png');
	imagepng($figura);imagedestroy($figura);
	}
	}
	//usando nuestra clase
	$alumno=array('Jose_Martinez'=>2,'Luis_Carrera'=>15,'Moises_Almeyda'=>18,'Angel_Paz'=>15,'Cesar_Ferrua'=>3);
	$grafico=new histograma();
	$grafico->ingresar_datos($alumno);
	$grafico->graficar();


?>