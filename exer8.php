<?php 
    print "\n----------------------------------------------------------------\n";
    print "Há quantos tempo você fuma (em anos) ? :";
    $anos_fumados = (int)fgets(STDIN);
    print "\n----------------------------------------------------------------\n";
    print "Quantos cigarros você fuma por dia? :";
    $cigarros_por_dias = (int)fgets(STDIN);
    print "\n----------------------------------------------------------------\n";
    $cigarros_fumados = $cigarros_por_dias*365*$anos_fumados;
    $minutos_perdidos = $cigarros_fumados*11;
    $horas_perdidas = $minutos_perdidos/60;
    $dias_perdidos = round($horas_perdidas/24);

    print "Você perdeu $dias_perdidos de vida:";
    print "\n----------------------------------------------------------------\n";