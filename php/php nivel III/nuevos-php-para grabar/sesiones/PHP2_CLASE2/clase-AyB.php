<?php

class AL{
	function foo(){
		if (isset($this)) {
	        echo '$this esta definida (';
	        echo get_class($this);
	        echo ")\n";
        }else{
			echo "\$this no esta definida \n";
		}
        
	}
}

class B{
	function bar(){
		AL::foo();
	}
}

$a=new AL();
$a->foo();
echo "<br>";
AL::foo();
echo "<br>";
$b=new B();
$b->bar();
echo "<br>";
B::bar();


?>