<?php
/**
 * Write a real-valued function CircleS(R) that returns the area of a circle of radius R (R is a real number).
 * Using this function, find the areas of three circles of given radiuses.
 * Note that the area of a circle of radius R can be found by formula S = π·R2. Use 3.14 for a value of π.
 */
const pi = 3.14;
function CircleS($R)
{
    $s = pi * pow($R, 2);


    return $s;

}
$R = 5;
$result = CircleS($R);
echo 'The areas of three circles ', $result ;
echo'<br/>';

$R = 7;
$result = CircleS($R);
echo 'The areas of three circles ', $result;
echo'<br/>';

$R = 10;
$result = CircleS($R);
echo 'The areas of three circles ', $result;