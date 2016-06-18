<?php
//Clases no se pueden instanciar, solo pueden ser heredadas
abstract class Vehiculo{
	protected $numruedas; //solamente sea visible en esta clase y en las heredadas
	public function getNumruedas(){
		return $this->numruedas;
	}
}

class Coche extends Vehiculo{
	protected $numruedas = 4;
}
 
class Bici extends Vehiculo{
	protected $numruedas = 2;
} 
class VehiculoFactory{
	public static function crearVehiculo($tipo){
		$clasebase = 'Vehiculo';
		if(class_exists($tipo) && is_subclass_of($tipo, $clasebase))
			return new $tipo;
		else
			throw new Exception("No se reconoce el tipo de vehiculo $tipo");
	}
}
 
$vehiculo = Array('Bici','Coche');
 
foreach ($vehiculo as $v) {
	echo "El vehiculo $v tiene ".VehiculoFactory::crearVehiculo($v)->getNumruedas()." ruedas<br />";
}
?>