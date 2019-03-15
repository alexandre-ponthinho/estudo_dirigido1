<?php
    print "\n----------------------------------------------------------------\n";
    print "Qual o tamanho da área você deseja pintar (metros): ";
    $area = (int)fgets(STDIN);
    
    print "\n----------------------------------------------------------------\n";
    #lata
    $lata_rendimendo = 108; #18*6
    $lata_preco = 80;

    #a  compra apenas de latas de 18 litros

    $qtd_latas = ceil($area / $lata_rendimendo);
    $latas_custo = $qtd_latas * $lata_preco;
    print "Serão necessárias $qtd_latas lata(s) no valor de R$$latas_custo";
    print "\n----------------------------------------------------------------\n";