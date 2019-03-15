<?php
    print "\n----------------------------------------------------------------\n";
    print "Quanto tempo o carro ficou alugado? (em dias):";
    $dias = (int) fgets (STDIN);
    print "\n----------------------------------------------------------------\n";
    print "Quantos quilômetros o carro percorreu ?:";
    $km_percorridos = (float) fgets (STDIN);
    print "\n----------------------------------------------------------------\n"; 
    $custo_dias = 60 * $dias;
    $custo_km = 0.15 * $km_percorridos;
    $resultado = $custo_dias + $custo_km;

    print "O preço final ficou por: R$$resultado";
    print "\n----------------------------------------------------------------\n";