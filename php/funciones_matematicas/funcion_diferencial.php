<?php

/*

For people interest in Differential Equations, I've done a function that receive a string like: x^2+x^3 and put it in
2x+3x^2 witch is the differantial of the previous equation.

In the code there is one thing missing: the $string{$i} is often going outOfBound (Uninitialized string offset: 6 in...)
if your error setting is set a little too high... I just dont know how to fix this.

So there is the code for differential equation with (+ and -) only:


*/


function differentiel($equa)
{
    $equa = strtolower($equa);
    echo "Equation de depart: ".$equa."<br>";
    $final = "";
   
    for($i = 0; $i < strlen($equa); $i++)
    {
        //Make a new string from the receive $equa
        if($equa{$i} == "x" && $equa{$i+1} == "^")
        {
            $final .= $equa{$i+2};
            $final .= "x^";
            $final .= $equa{$i+2}-1;
        }
        elseif($equa{$i} == "+" || $equa{$i} == "-")
        {
            $final .= $equa{$i};
        }
        elseif(is_numeric($equa{$i}) && $i == 0)
        {
            //gerer parenthese et autre terme generaux + gerer ^apres: 2^2
            $final .= $equa{$i}."*";
        }
        elseif(is_numeric($equa{$i}) && $i > 0 && $equa{$i-1} != "^")
        {
            //gerer ^apres: 2^2
            $final .= $equa{$i}."*";
        }
        elseif($equa{$i} == "^")
        {
            continue;
        }
        elseif(is_numeric($equa{$i}) && $equa{$i-1} == "^")
        {
            continue;
        }
        else
        {
            if($equa{$i} == "x")
            {
                $final .= 1;
            }
            else
            {
                $final .= $equa{$i};
            }
        }
    }
    //
    //Manage multiplication add in the previous string $final
    //
    $finalMul = "";
    for($i = 0; $i < strlen($final); $i++)
    {
        if(is_numeric($final{$i}) && $final{$i+1} == "*" && is_numeric($final{$i+2}))
        {
            $finalMul .= $final{$i}*$final{$i+2};
        }
        elseif($final{$i} == "*")
        {
            continue;
        }
        elseif(is_numeric($final{$i}) && $final{$i+1} != "*" && $final{$i-1} == "*")
        {
            continue;
        }
        else
        {
            $finalMul .= $final{$i};   
        }
    }
    echo "equa final: ".$finalMul;
}

$ecuacion="x^2+x^3+2x^5";

echo differentiel($ecuacion);
?>