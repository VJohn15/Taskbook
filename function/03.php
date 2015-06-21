<?php
/**
 * Write a real-valued function RingS(R1, R2)
 * that returns the area of a ring bounded by a concentric circles of radiuses R1 and R2 (R1 and R2 are real numbers, R1 > R2).
 * Using this function, find the areas of three rings with given outer and inner radiuses.
 * Note that the area of a circle of radius R can be found by formula S = π·R2.
 * Use 3.14 for a value of π.
 */
const pi = 3.14;
function  RingS($R1, $R2)
{
    $s1 = pi * pow($R1,2);
    $s2 = pi * pow($R2,2);

    return abs($s2 - $s1);
}

$R1 = 5;
$R2 = 10;
$result = RingS($R1, $R2) ;
echo'The area of a ring bounded by a concentric circles of radiuses R1 and R2 ',($result);
