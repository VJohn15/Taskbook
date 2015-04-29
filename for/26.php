<?php
/**
 * A real number X (|X| < 1) and an integer N (> 0) are given. Compute the expression
X + 1·X3/(2·3) + 1·3·X5/(2·4·5) + … +
+ 1·3·…·(2·N−1)·X2·N+1/(2·4·…·(2·N)·(2·N+1)).
The result is an approximate value of asin(X
 */
$sum = 0;
$z = 1;
$a = 1;
const n = 5;
for ($x = 1 ; $x < n ; $x+=1){
    $z = $z * $x;
    for ( $y = 3 ; $y < n; $y +=2){
        $a = $a * $y ;
    }
    $sum = n + $a * pow( n , $y) / $z ;
}
var_dump( $sum );