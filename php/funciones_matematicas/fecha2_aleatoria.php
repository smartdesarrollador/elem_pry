<?php
function makeRandomDateInclusive($startDate,$endDate){   
    return date("Y-m-d",strtotime("$startDate + ".rand(0,round((strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24)))." days"));
}
?>

<?php
echo makeRandomDateInclusive('2009-04-01','2009-04-03');
?>