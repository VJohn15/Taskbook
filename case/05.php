<?php
/**
 * Арифметические действия над числами пронумерованы следующим образом: 1 — сложение, 2 — вычитание, 3 — умножение, 4 — деление.
 * Дан номер действия N (целое число в диапазоне 1–4) и вещественные числа A и B (B не равно 0).
 * Выполнить над числами указанное действие и вывести результат.
 */
$n = 0 ;
$a = 5 ;
$b = 7 ;
switch ( '+'){
    case '+' : {
        echo 'addition &nbsp';
     $n = $a + $b ;
                 echo $n ;
    } break ;
    case '-' : {
        echo 'subtraction &nbsp';
                 $n = $a - $b ;
    } break ;
    case '*' : {
        echo 'multiplication &nbsp';
                 $n = $a *$b ;
                 echo $n ;
    } break ;
    case '/' : {
        echo 'division &nbsp';
                 $n = $a / $b ;
                 echo $n ;
    } break ;
    default :{
        echo ' tralivali';
    }
}
$a = new \DateTime('now');
var_dump($a->format('y-m-d  H-m-s'));