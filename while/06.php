<?php
/**
 *  Given an integer N (> 0), compute the double factorial of N:
N!! = N·(N−2)·(N−4)·…,
 */
$sum = 1;
$n = 1;
$x = 2;
$y = 10;
while( $y >= $n && $y >= $x ){
      $n += 2;
      $x += 2;
    echo $n;
    if (is_integer ($y / 2)){
        $sum = $sum * $x;
        echo $sum. ' is double factorial of number '. $y;
    } elseif (! is_integer($y / 2)){
        $sum = $sum * $n;
        echo $sum.' is double factorial of number '.$y;
    } break;
}