<?php 
      $samples=array("1","10","5","4","30");

      $sample_count = count($samples);

for ($current_sample = 0; $sample_count > $current_sample; ++$current_sample){
	$sample_square[$current_sample] = pow($samples[$current_sample], 2);
} 
	

echo $standard_deviation = sqrt(array_sum($sample_square) / $sample_count - pow((array_sum($samples) / $sample_count), 2));  
?>