<?php
function gauss($algorithm = "polar") {
    $randmax = 9999;
   
    switch($algorithm) {
       
        //polar-methode by marsaglia
        case "polar":
            $v = 2;
            while ($v > 1) {
                $u1 = rand(0, $randmax) / $randmax;
                $u2 = rand(0, $randmax) / $randmax;

                $v = (2 * $u1 - 1) * (2 * $u1 - 1) + (2 * $u2 - 1) * (2 * $u2 - 1);
            }
           
            return (2* $u1 - 1) * (( -2 * log($v) / $v) ^ 0.5);
       
        // box-muller-method
        case "boxmuller":
            do {
                $u1 = rand(0, $randmax) / $randmax;
                $u2 = rand(0, $randmax) / $randmax;                   
               
                $x = sqrt(-2 * log($u1)) * cos(2 * pi() * $u2);
            } while (strval($x) == "1.#INF" or strval($x) == "-1.#INF");
           
            // the check has to be done cause sometimes (1:10000)
            // values such as "1.#INF" occur and i dont know why
           
            return $x;

        // twelve random numbers  
        case "zwoelfer":
            $sum = 0;
            for ($i = 0; $i < 12; $i++) {
                $sum += rand(0, $randmax) / $randmax;
            }
            return $sum;
     }      
}

echo gauss();
?>