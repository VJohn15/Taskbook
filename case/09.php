<?php
/**
 *Given two integers D (day) and M (month) representing a correct date of a non-leap year,
 * output values D and M for the next date.
 */
$d = 5 ;
if ( $d <1 || $d >31){
    echo 'This day not exist.';
    $m = 5;
    if ($m <1 || $m > 12){
        echo 'This month not exist.';
    }
}


switch ( 1) {
    case 1 : {
        $local = 31;
        if ($d == $local){
            $m = 2;
            $d = 1;
        }

    } break ;

    case 2 : {
        $local = 28;
        if ($d == $local){
            $m = 3;
            $d = 1;
        } break ;
    }
    case 3 : {
            $local = 31;
            if ($d == $local){
                $m = 4;
                $d = 1;
            } break ;
    }
        case 4 : {
                $local = 30;
                if ($d == $local){
                    $m = 5;
                    $d = 1;
                } break ;
        }
            case 5 : {
                    $local = 31;
                    if ($d == $local){
                        $m = 6;
                        $d = 1;
                    } break ;
            }
            case 6 : {
                    $local = 30;
                    if ($d == $local){
                        $m = 7;
                        $d = 1;
                } break ;
    }
             case 7 : {
                     $local = 31;
                     if ($d == $local){
                        $m = 8;
                        $d = 1;
        } break;
    }
    case 8 :{
        $local = 31;
        if ($d == $local){
            $m = 9;
            $d = 1;
        } break;
    }
    case 9 :{
        $local = 30;
        if ($d == $local){
            $m = 10;
            $d = 1;
        } break;
    }
    case 10: {
        $local = 31;
        if ($d == $local){
            $m = 11;
            $d = 1;
        } break ;
    }
    case 11 : {
        $local = 30;
        if ($d == $local){
            $m = 12;
            $d = 1;
        } break;
    }
    case 12 : {
        $local = 31;
        if ($d == $local){
            $m = 1;
            $d = 1;
        } break ;
    }
    default : {
                        echo 'Error';
                    }
}