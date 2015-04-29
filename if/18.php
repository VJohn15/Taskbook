<?php
/**
 *  Даны три целых числа, одно из которых отлично от двух других, равных между собой.
 * Определить порядковый номер числа, отличного от остальных.
 */
$a=4;
$b=5;
$c=5;
if ($a>$b || $a<$b && $a==$c){
    echo $b. ' to have element position 2 <br/>';
} elseif ($b>$a || $b<$a && $b==$c){
    echo $a. '  to have element position 1 <br/>';
} elseif($a>$c || $a<$c && $a==$b){
    echo $c.'  to have element position 3 <br/>';
}