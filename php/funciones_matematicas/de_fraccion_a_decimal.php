<?php
/*Some example values of $q
$q = "2.5";
$q = "2 1/2";
$q = "5/2";
*/
function Deci_Con($q){
//check for a space, signifying a whole number with a fraction
    if(strstr($q, ' ')){
        $wa = strrev($q);
        $wb = strrev(strstr($wa, ' '));
        $whole = true;//this is a whole number
    }
//now check the fraction part
    if(strstr($q, '/')){
        if($whole==true){//if whole number, then remove the whole number and space from the calculations
              $q = strstr($q, ' ');
        }
$b = str_replace("/","",strstr($q, '/'));//this is the divisor
//isolate the numerator
$c = strrev($q);
$d = strstr($c, '/');
$e = strrev($d);
$a = str_replace("/","",$e);//the pre-final numerator
        if($whole==true){//add the whole number to the calculations
            $a = $a+($wb*$b);//new numerator is whole number multiplied by denominator plus original numerator   
        }
$q = $a/$b;//this is now your decimal
return $q;
    }else{
        return $q;//not a fraction, just return the decimal
    }
}

echo Deci_Con(1/2);

?>