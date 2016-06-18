<?php

$a=array('a','b','c','d');
$n=count($a);
for($i=0;$i<($n-1);$i++) {
  for($j=($i+1);$j<$n;$j++) {
    echo $a[$i].' - '.$a[$j].'<br>';
  }
} 
?> 