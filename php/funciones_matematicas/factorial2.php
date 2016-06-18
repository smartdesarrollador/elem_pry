<?php
function mathFact( $s )
{
  $r = (int) $s;

  if ( $r < 2 )
    $r = 1;
  else {
    for ( $i = $r-1; $i > 1; $i-- )
      $r = $r * $i;
  }

  return( $r );
}

echo mathFact(4);
?>