<?php
/**
 * Единицы длины пронумерованы следующим образом: 1 — дециметр, 2 — километр, 3 — метр, 4 — миллиметр, 5 — сантиметр.
 * Дан номер единицы длины (целое число в диапазоне 1–5) и длина отрезка в этих единицах (вещественное число).
 * Найти длину отрезка в метрах.
*/
$b = 0;
$a  = 5;
switch (5 ) {
    case 1 : {
        $b = $a / 10 ;
                 echo $b. ' m' ;
    } break ;
    case 2 : {
        $b = $a * 1000;
                 echo $b. ' m' ;
    } break ;
    case 3 : {
        $b = $a ;
                 echo $b. ' m' ;
    } break ;
    case 4 : {
        $b = $a / 1000 ;
                 echo $b. ' m';
    } break ;
    case 5 : {
        $b = $a / 100 ;
                 echo $b. ' m' ;
    } break;
    default : {
        echo 'error';
    }
}