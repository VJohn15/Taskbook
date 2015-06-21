<?php
/**
 *  Write an integer function RootCount(A, B, C) that returns the amount of roots of the quadratic equation
 * A·x2 + B·x + C = 0 (A, B, C are real-valued parameters, A ≠ 0).
 * Using this function, find the amount of roots for each of three quadratic equations with given coefficients.
 * Note that the amount of roots is determined by the value of a discriminant:
D = B2 − 4·A·C.
 */
function RootCount($A, $B, $C)
{
    $y = pow($B,2);
    $D =  $y - $A*4*$C;
    if ($D < 0){

        return "roots doesn't exist";
    } elseif ($D == 0 ){

        return (-$B)/($A*2);
    } else
        $x1 = ((-$B)+sqrt($D))/($A*2);
    $x2 = ((-$B)-sqrt($D))/($A*2);
    return ($x1)+($x2);
}
 $a = 5;
$b = 2;
$c = -6;
$result =  RootCount($a, $b, $c);
var_dump($result);