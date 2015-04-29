<?php
/**
 * An integer N (> 0) is given. Using one loop-statement compute the sum
1 + 1/(1!) + 1/(2!) + 1/(3!) + … + 1/(N!),
where N! (N–factorial) is the product of all integers in the range 1 to N:    N! = 1·2·…·N. The result is an approximate value of the constant e = exp(1).
*/
$sum = 1;
$a = 1;
$n = 3;
for ( $x = 1; $x <= $n ; $x++){
    $sum = 1;
    for ( $s =  1; $s <= $x; $s++){
        $sum =  $sum * $s;
    }
    $a += 1 / ( $a + $sum);
}
var_dump ($a);