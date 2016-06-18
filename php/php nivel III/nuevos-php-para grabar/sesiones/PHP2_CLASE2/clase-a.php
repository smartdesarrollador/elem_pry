<?php

class a{
	public $var = 'a default value';
	
	public function displayVar(){
		echo $this->var;
	}
}

$b=new a();
$b->displayVar();


?>