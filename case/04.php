<?php
/**
 *  Дан номер месяца — целое число в диапазоне 1–12 (1 — январь, 2 — февраль и т. д.).
 * Определить количество дней в этом месяце для невисокосного года.
 */
$a = 0 ;
switch ( 4){
    case 1 : {
        echo 'January -31';
    }break ;
    case 2 : {
        echo 'February-28';
    } break ;
    case 3 :{
        echo ' Martch-31';
    } break ;
    case 4 :{
        echo 'April-30';
    } break ;
    case 5 :{
        echo 'May-31';
    } break ;
    case 6 :{
        echo 'June-30';
    } break ;
    case 7 :{
        echo 'July-31';
    } break ;
    case 8 :{
        echo 'August-31';
    } break ;
    case 9 :{
        echo 'September-30';
    } break ;
    case 10 :{
        echo 'October-31';
    } break ;
    case 11 :{
        echo 'November-30';
    } break ;
    case 12 :{
        echo 'December-31';
    }
}