<?php
/**
 * Write a real-valued function TriangleP(a, h)
 * that returns the perimeter of an isosceles triangle with given base a and altitude h (a and h are real numbers).
 * Using this function, find the perimeters of three triangles with given bases and altitudes.
 * Note that the leg b of an isosceles triangle can be found by the Pythagorean theorem:
b2 = (a/2)2 + h2.
 */

function  TriangleP($a,$h)
{
 $b = sqrt( ($a/2) + pow($h, 2));

    return $b ;
}

$a = 5;
$h = 7;
$result = TriangleP($a, $h);
var_dump($result);

$a = 10;
$h = 15;
$result = TriangleP($a, $h);
var_dump($result);

$a = 4;
$h = 6;
$result = TriangleP($a, $h);
var_dump($result);