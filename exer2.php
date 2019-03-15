<?php
    print "\n---------------------------------------\n";
    print  " Digite a quantia de dias: " ;
    $dias  = ( int ) fgets ( STDIN );
    print "\n---------------------------------------\n";
    print  " Digite a quantia de horas: " ;
    $horas  = ( int ) fgets ( STDIN );
    print "\n---------------------------------------\n";
    print  " Digite a quantia de minutos: " ;
    $minutos  = ( int ) fgets ( STDIN );
    print "\n---------------------------------------\n";
    print  " Digite a quantia de segundos: " ;
    $segundos  = ( int ) fgets ( STDIN );
    print "\n---------------------------------------\n";
    $segundos_dias  =  $dias  *  86400 ;
    $segundos_horas  =  $horas  *  3600 ;
    $segundos_minutos  =  $minutos  *  60 ;
    $total_segundos  =  $segundos_dias  +  $segundos_horas  +  $segundos_minutos  +  $segundos ;

    print  " O total de todos juntos: $total_segundos " ;
    print "\n---------------------------------------\n";