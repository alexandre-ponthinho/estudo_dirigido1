<?php
    print "\n----------------------------------------------------------------\n";
    print "Digite a distância da viagem (em km): ";
    $km = (float) fgets (STDIN);
    print "\n----------------------------------------------------------------\n";
    print "Digite a velocidade média do veiculo: ";
    $vm = (float) fgets (STDIN);
    print "\n----------------------------------------------------------------\n";
    $tempo = $km/$vm;

    print "a duração de viagem é de $tempo horas";
    print "\n----------------------------------------------------------------\n";