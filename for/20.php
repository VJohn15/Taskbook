<?php
/**
 * An integer N (> 0) is given. Using one loop-statement compute the sum
1! + 2! + 3! + … + N!,
 */
$sum = 1;
$a = 0;
$n = 4;
for ( $x = 1; $x <= $n ; $x++){
    $sum = 1;
    for ( $s =  1; $s <= $x; $s++){
        $sum =  $sum * $s;
    }
    $a = $a + $sum;
 //   var_dump($a);
}
var_dump ($a);