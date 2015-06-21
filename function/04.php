<?php
/**
 * Write a real-valued function CircleS(R) that returns the area of a circle of radius R (R is a real number).
 * Using this function, find the areas of three circles of given radiuses.
 * Note that the area of a circle of radius R can be found by formula S = π·R2. Use 3.14 for a value of π.
 */
const pi = 3.14;
function CircleS($R1, $R2, $R3, $test = false)
{
    $s1 = pi * pow($R1, 2);
    $s2 = pi * pow($R2, 2);
    $s3 = pi * pow($R3, 2);

    return $s1 & $s2 & $s3;

}
$R1 = 5;
$R2 = 15;
$R3 = 10;
$result = CircleS($R1, $R2, $R3, 5);
echo 'The areas of three circles ', $result;