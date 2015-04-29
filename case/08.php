<?php
/**
 * Даны два целых числа: D (день) и M (месяц), определяющие правильную дату невисокосного года.
 * Вывести значения D и M для даты, предшествующей указанной.
*/
$d = 1 ;
if ($d <1 || $d >31){
    echo 'This day not exist.';
}
$m = 12 ;
if ($m <1 || $m >12){
    echo ' This month not exist.';
}
switch (12 ){
    case 1 : {
        $d = 31;
        echo 'The previous date of January is 31';
    } break ;
    case 2 : {
        $d = 28;
        echo 'The previous date of February is 28';
    } break ;
    case 3 : {
        $d = 31;
        echo 'The previous date of March is 31';
    } break ;
    case 4 : {
        $d = 30;
        echo 'The previous date of April is 30 ';
    } break ;
    case 5 :{
        $d = 31;
        echo 'The previous date of May is 31';
    } break ;
    case 6 : {
        $d = 30;
        echo 'The previous date of June is 30';
    } break ;
    case 7 : {
        $d = 31;
        echo 'The previous date of July is 31';
    } break ;
    case 8 : {
        $d = 31;
        echo 'The previous date of August is 31';
    } break ;
    case 9: {
        $d = 30;
        echo 'The previous date of September is 30';
    } break ;
    case 10 : {
        $d =31;
        echo 'The previous date of October is 31';
    } break ;
    case 11 : {
        $d = 30;
        echo ' The previous date of November is 30';
    } break ;
    case 12 : {
        $d = 31;
        echo ' The previous date of December is 31';
    } break ;
    default : {
        echo 'Error';
    }
}