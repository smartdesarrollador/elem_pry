<?php
abstract class Observable{
	protected $observers;
	function __construct(){
		$this->observers = array();
	}
 
	public function registrarObserver($observer){
		if(!in_array($observer, $this->observers)){
		    $this->observers[] = $observer;
		}
	}
 
	public function deregistrarObserver($observer){
		if(in_array($observer, $this->observers)){
		    $key = array_search($observer, $this->observers);
		    unset($this->observers[$key]);
		}
	}
 
	abstract public function notificarObservers();
 
}
 
interface Observer{
	public function notificar($sender, $params);
}

class MiObservable extends Observable{
 
	public function __construct(){
		parent::__construct();
	}
 
	public function notificarObservers(){
		foreach ($this->observers as $observer) {
			$observer->notificar($this, $this->param);
		}
	}
 
	public function Evento($texto){
		$this->param = $texto;
		$this->notificarObservers();
	}
}
 
class Log implements Observer{
	public function notificar($sender, $param){
		echo get_class($sender)." envio $param a las ".date('h:i:s', time())."<br />";
	}
}
 
class SalvarLog implements Observer{
	public function notificar($sender, $param){
		echo "Guardando en BD $param enviado por ".get_class($sender)."... <br /><br />";
	}
 
}

$obj = new MiObservable();
$obj->registrarObserver(new Log());
$obj->registrarObserver(new SalvarLog());
 
$obj->Evento('Test 1');
sleep(1);
$obj->Evento('Test 2');
 
$obj->deregistrarObserver(new SalvarLog());
$obj->Evento('Test 3');
?>



