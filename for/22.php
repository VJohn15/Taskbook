<?php
/**
 *  A real number X and an integer N (> 0) are given. Compute the expression
1 + X + X2/(2!) + … + XN/(N!)
(N! = 1·2·…·N). The result is an approximate value of exp(X).
 */
$sum = 1;
$a = 1;
const n = 3;
define('var' , 5);
for ( $x = 1; $x <= n ; $x++){
    $sum = 1;
    for ( $s = 1; $s <= $x; $s++){
        $sum =  $sum * $s;
    }
    $a += n + pow( n,$x ) / ( $a + $sum);
}
var_dump ($a );