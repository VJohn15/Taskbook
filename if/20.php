<?php
/**
 * На числовой оси расположены три точки: A, B, C.
 * Определить, какая из двух последних точек (B или C) расположена ближе к A, и вывести эту точку и ее расстояние от точки A
*/
$a=2;
$b=3;
$c=4;
if  (abs($a-$b)>abs($a-$c)) {
   echo ' point B is closer to the point A <br/>';
} else {
    echo ' point C is closer to the point A <br/>';
}