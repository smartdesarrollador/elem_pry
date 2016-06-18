
<?php
/*
If you need to deal with polar co-ordinates for somereason you will need to convert to and from x,y for input and output in most situations: here are some functions to convert cartesian to polar and polar to cartesian

returns array of r, theta in the range of 0-2*pi (in radians)
*/

function rect2polar($x,$y)
{
     if(is_numeric($x)&&is_numeric($y))
    {
        $r=sqrt(pow($x,2)+pow($y,2));
        if($x==0)
        {
             if($y>0) $theta=pi()/2;
            else $theta=3*pi()/2;
        }
        else if($x<0) $theta=atan($y/$x)+pi();
        else if($y<0) $theta=atan($y/$x)+2*pi();
        else $theta=atan($y/$x);
        $polar=array("r"=>$r,"theta"=>$theta);
        return $polar;
    }
    else return false;
}

//r must be in radians, returns array of x,y
function polar2rect($r,$theta)
{
 if(is_numeric($r)&&is_numeric($theta))
 {
        $x=$r*cos($theta);
    $y=$r*sin($theta);
    $rect=array("x"=>$x,"y"=>$y);
 }
 else
 {
   return false;
 }
}


//---------------------------------------------------------------------------------------------------------

$arreglos=rect2polar(7,17);

foreach ($arreglos as $key => $value) {
    echo $value."<br>";
}



?>