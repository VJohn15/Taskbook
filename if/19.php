<?php
/**
 * Даны четыре целых числа, одно из которых отлично от трех других, равных между собой.
 * Определить порядковый номер числа, отличного от остальных.
 */
$a=4;
$b=4;
$c=4;
$d=5;
if  ( $a>$b || $a<$b &&  $a == $c && $a == $d ){
    echo $b. ' to have element position 2 <br/>';
} elseif ($b>$a || $b<$a && $b==$c && $b==$d ){
    echo $a. ' to have element position 1 <br/>';
} elseif ($a>$c || $a<$c && $a==$b && $a==$d){
    echo $c. ' to have element position 3 <br/>';
} elseif ($a>$d || $a<$d && $a==$b && $a==$c){
    echo $d. ' to have element position 4 <br/>';
}