<?php
    print "\n----------------------------------------------------------------\n";
    print "Temperatura em graus Celsius(°C): ";
    $celsius = (float) fgets (STDIN);
    print "\n----------------------------------------------------------------\n";
    $fahrenheit = (float)(9*$celsius)/(5)+32;

    print "A temperatura em fahrenheit(F) é de: $fahrenheit(F)";   
    print "\n----------------------------------------------------------------\n";