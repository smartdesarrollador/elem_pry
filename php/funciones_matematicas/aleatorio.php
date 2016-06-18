<?php
$r = array(0,0,0,0,0,0,0,0,0,0,0);
for ($i=0;$i<1000000;$i++) {
  $n = rand(0,100000);
  if ($n<=10) {
    $r[$n]++;
  }
}

foreach ($r as $key => $value) {
	echo $value."<br>";
}
?>