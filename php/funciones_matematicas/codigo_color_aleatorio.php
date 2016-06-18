<?php
function get_random_color()
{
    for ($i = 0; $i<6; $i++)
    {

    	if($i==0){
    		$c =  dechex(rand(0,15));
    	}else {
    		$c .=  dechex(rand(0,15));
    	}
        
    }
    return "#$c";
}

echo get_random_color();
?>