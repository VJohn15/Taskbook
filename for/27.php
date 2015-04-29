<?php
/**
 * A real number X (|X| < 1) and an integer N (> 0) are given. Compute the expression
X − X3/3 + X5/5 − … + (−1)N·X2·N+1/(2·N+1).
The result is an approximate value of atan(X).
*/
$sum = 1;
$a = 1;
const n = 4;
$var = 0;
for ( $x = 3; $x <= n ; $x+= 2){
    $sum = 1;
    for ( $s =  1; $s <= $x; $s++){
        if ($var == 0) {
            $sum = n + pow( n,$x) / ( $a + $sum);
            $var = 1;
        }
        elseif ($var == 1);{
            $sum = n - pow(n ,$x) /( $a + $sum);
            $var = 0 ;
        }
        $sum =  $sum * $s;
    }
    $a += n + pow( n,$x ) / ( $a + $sum);
}
var_dump ($a )