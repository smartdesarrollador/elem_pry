<?php

class soporte{
   public $titulo;
   protected $numero;
   private $precio;
   
   function construct($tit,$num,$precio)	{
	   $this->titulo=$tit;
	   $this->numero=$num;
	   $this->precio=$precio;
   }
   
   public function dame_precio_sin_iva(){
	return $this->precio;
   }
   
   public function dame_precio_con_iva(){
	   return $this->precio*1.16;
   }
   
   public function dame_numero_identificacion(){
	return $this->numero;
   }
   
   public function imprime_caracteristicas(){
	echo $this->titulo;
	echo "<br>".$this->precio."(iva no incluido)";
}


	
	
	
	
	
}

$soporte1 = new soporte("los intocables",22,3);
echo "<br>".$soporte1->titulo."</br>";
echo "<br>precio:".$soporte1->dame_precio_sin_iva()."euros";
echo "<br>precio iva incluido:".$soporte1->dame_precio_con_iva();
	
?>