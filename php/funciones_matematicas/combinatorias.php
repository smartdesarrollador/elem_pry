<?php 
      $combinatorics = new Math_Combinatorics;

$words_arr = array(
    'one'   => 'a',
    'two'   => 'b',
    'three' => 'c',
    'four'  => 'd',
    );

for ($i=count($words_arr)-1;$i>=1;$i--) {
    echo '<br><br>' . $i . ':<br>';
    $combinations_arr = $combinatorics->combinations($words_arr, $i);
    foreach ($combinations_arr as $combinations_arr_item) {
        echo implode(', ', $combinations_arr_item) . '<br>';
    }
}  
?>