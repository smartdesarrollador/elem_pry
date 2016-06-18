<?php

$a=5;
$b=30;


 if($a && $b)
  { $ax=$a; $bx=$b;
   $r=fmod($a,$b);
  if(!$r){$rx=$r;}
   while($r){
    $rx=$r;
    $a=$b;
    $b=$r;
    $r=fmod($a,$b);
    }
   }

echo 'PGCD ('.$ax.' , '.$bx.' ) = '.$rx;
?>