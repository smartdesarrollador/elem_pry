
<?php
function lcd($n,$m, $maxvarianzpercent=0){
    // set $maxvarianzpercent=5 to get a small, but approx. result
    /* a better lcd function with varianz:
    for example use
    lcd(141,180,5) to get the approx. lcd '7/9' which is in fact 140/180
    */
    // ATTENTION!!! can be really slow if $m is >1000
   
    $d=$n/$m;
    $f=1;
    while($d*$f!=intval($d*$f)){
        $f++;
    }
    $r=($d*$f).'/'.$f;
    if(($d*$f)<=10 or $f<=10) return $r;
    else if($maxvarianzpercent>0){
        $f=1;
        while($d*$f!=intval($d*$f) and ($d*$f)-intval($d*$f) > $maxvarianzpercent/100){
            $f++;
        }
        return intval($d*$f).'/'.$f;
    } else return $r;
}


echo lcd(3,2,4);
?>
