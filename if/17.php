<?php
/**
 *Даны три переменные вещественного типа: A, B, C.
 * Если их значения упорядочены по возрастанию или убыванию,
 * то удвоить их; в противном случае заменить значение каждой переменной на противоположное.
 * Вывести новые значения переменных A, B, C.
 */
$a=1;
$b=2;
$c=3;
if ($a>$b && $b>$c) {
    $a=$a*2;
    $b=$b*2;
    $c=$c*2;
    echo $a.','.$b.','.$c.','.' numbers are ordonated descendent <br/>';
} elseif ($a<$b && $b<$c){
    $a=$a*2;
    $b=$b*2;
    $c=$c*2;
    echo $a.','.$b.','.$c.','.' numbers are ordonated ascendent <br/>';
} else {
    $a=-$a;
    $b=-$b;
    $c=-$c;
    echo  $a.','.$b.','.$c.','.' numbers are not ordonated ,br/>';
}