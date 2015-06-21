<?php
/**
 * A real number X (|X| < 1) and an integer N (> 0) are given. Compute the expression
1 + X/2 − 1·X2/(2·4) + 1·3·X3/(2·4·6) − … +
+ (−1)N−1·1·3·…·(2·N−3)·XN/(2·4·…·(2·N)).
The result is an approximate value of the square root of 1 + X.
 */
$sum = 0;
$z = 1;
$a = 1;
const n = 5;
for ($x = 2 ; $x < n ; $x+=2){
    $z = $z * $x;
    for ( $y = 2 ; $y < n; $y +=1){
        $a = $a * $y ;
    }
    $sum = n + $a * pow( n , $y) / $z ;
}
var_dump( $sum );