<?php
/**
 * Дан номер месяца — целое число в диапазоне 1–12 (1 — январь, 2 — февраль и т. д.).
 * Вывести название соответствующего времени года («зима», «весна», «лето», «осень»).
 */
$a = 3;
switch ( 9) {
    case 12 :
    case 1 :
        case 2 :{
        echo 'winter';
    } break ;
    case 3 :
    case 4 :
    case 5 :{
        echo 'spring';
    } break ;
    case 6:
    case 7:
    case 8:   {
        echo ' summer';
    } break ;
    case 9 :
    case 10 :
    case 11 :   {
        echo 'autumn';
    } break ;

}