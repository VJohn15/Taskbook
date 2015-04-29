<?php
/**
 *  Даны координаты точки, не лежащей на координатных осях OX и OY.
 * Определить номер координатной четверти, в которой находится данная точка.
*/
$x=1;
$y=2;
if ($x>0 && $y>0){
    echo ' point is in quadrant 1 <br/>';
} elseif($x<0 && $y>0){
    echo ' point is in quadrant 2 <br/>';
} elseif ($x<0 && $y<0){
    echo ' point is in quadrant 3 <br/>';
} elseif ($x>0 && $y<0) {
    echo ' point is in quadrant 4 <br/>';
}