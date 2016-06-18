<?php





for ($n = 3; $n <= 100; $n++)
{
    $d = 2;

    $p = 0;

    do
    {
        $pr = $n % $d;

        if ($pr == 0)
        {
            $p = $p + 1;
            $d = $d + 1;
        }
        else
        {

            $d = $d + 1;
        }



    } while ($n != $d);

    if ($p == 0)
    {
        echo $n . " <br>";
    }



}




?>