<?php
/**
 * An integer N (> 1) and two points A, B (A < B) on the real axis are given. The segment [A, B] is divided into N sub-segments of equal length.
 * Output the length H of each sub-segment and then output the sequence of points
A,    A + H,    A + 2·H,    A + 3·H,    …,    B,
which forms a partition of the segment [A, B].
*/
$n = 10;
$a = 5;
$x = 0;
$res = 0;

$res = $n / $a ;
for ( $res ; $res < $n ; $res++ ){
   echo $x.',';
    echo $x + $res.',';
    echo $n.'.';
}