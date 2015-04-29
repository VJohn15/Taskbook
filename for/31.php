<?php
/**
 *  Given positive integers N and K, find the sum
1K + 2K + … + NK.
To avoid the integer overflow, compute the sum using real variables and output the result as a real number.
 */
$n = 5;
for ( $x = 1; $x < $n; $x++){
    $sum =  pow($x,$n);
}
echo $sum;