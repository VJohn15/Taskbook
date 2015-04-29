<?php
/**
 * Даны три числа. Найти наименьшее из них.
 */
$a=1;
$b=2;
$c=3;
if ($a>$b){
    echo $b. ' the smoller number';
} elseif ($a > $c){
    echo $c.' the smoller number <br/>';
} elseif ($b>$a){
    echo $a. ' the smoller number <br/>';
} elseif ($b>$c){
    echo $c. ' the smoller number <br/>';
} elseif ($c>$b){
    echo $b. ' the smoller number <br/>';
} elseif ($c>$a){
    echo $a.' the smoller number <br/>';
}