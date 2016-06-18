<?php
function makeRandomDateInclusive($startDate,$endDate){
    $days = round((strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24));
    $n = rand(0,$days);
    return date("Y-m-d",strtotime("$startDate + $n days"));   
}
?>

<?php
echo makeRandomDateInclusive('2009-04-01','2009-04-03');
?>



