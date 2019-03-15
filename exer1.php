<?php
    print "\n----------------------------------------------------------------\n";
    print  "Digite um valor em metros para converter para milímetros: ";
    $metros  = ( float ) fgets ( STDIN );

    $milimetro =  $metros * 1000 ;
    print "\n----------------------------------------------------------------\n";
    print  " são $milimetro milimetros" ;
    print "\n----------------------------------------------------------------\n";