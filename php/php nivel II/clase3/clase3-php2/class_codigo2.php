<?php
#generando codigo de validacion
class codigo{
	var $codigo;

function generar(){
	session_start();
	$patron=session_id();
#rand() lento mt_rand() rapido
	
    $d1=substr($patron,mt_rand(1,strlen($patron)-1),1);
    $d2=substr($patron,mt_rand(1,strlen($patron)-1),1);
    $d3=substr($patron,mt_rand(1,strlen($patron)-1),1);
    $d4=substr($patron,mt_rand(1,strlen($patron)-1),1);
    $this->codigo="$d1$d2$d3$d4";
}

function graficar(){
    $figura	=imagecreate(80,35);
    $fondo=imagecolorallocate($figura,0,225);
    $blanco=imagecolorallocate($figura,255,255,255);
    imagefill($figura,0,0,$fondo);
    imagestring($figura,0,0,$fondo);
// imagestring($figura,5,40,25,$_SESSION['codigo'],$blanco);
    header("content-type:image/png");
    imagepng($figura);
    imagedestroy($figura);
    $_SESSION['codigo']=$this->codigo;
}
}


$imagen=new codigo();
$imagen->generar();
$imagen->graficar();



?>