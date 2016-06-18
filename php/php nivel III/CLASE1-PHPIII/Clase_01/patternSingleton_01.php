<?php
class Singleton{
	private static $singleInstancia;
 
	private function __construct(){ 
	
	} 
	public static function getInstancia(){
		if(!self::$singleInstancia){
			self::$singleInstancia = new self();
		}
		return self::$singleInstancia;
	}
    /* A partir de aqu� vamos a�adiendo los m�todos la clase */
	function Metodo(){
		var_dump(self::$singleInstancia);
	}
}
//implementando
$mysingleton = Singleton::getInstancia();
$mysingleton->Metodo();

$mysingleton2 = Singleton::getInstancia();
$mysingleton2->Metodo();
?>

