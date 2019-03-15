<?php
print "\n----------------------------------------------------------------\n";
print "Qual o tamanho da área você deseja pintar: ";
$area = (int)fgets(STDIN);
    #lata
    $lata_rendimento = 108; #18*6
    $lata_preco = 80;

    #galao
    $galao_rendimento = 21.6; #3.6*6
    $galao_preco = 25;

    #a  compra apenas de latas de 18 litros

    $qtd_latas = ceil($area / $lata_rendimento);
    $latas_custo = $qtd_latas * $lata_preco;
    print "\n----------------------------------------------------------------\n";
    print "Serão necessárias $qtd_latas lata(s) no valor de R$$latas_custo";
    print "\n----------------------------------------------------------------\n";
    $qtd_latas = 0;
    $qtd_galoes= 0;
    
    $qtd_latas = (int) ($area / $lata_rendimento);
    $faltou_latas = $area % $lata_rendimento;
    $qts_galoes = ceil($faltou_latas / $galao_rendimento);

    print "$faltou_latas - $qtd_latas";
    print "\n----------------------------------------------------------------\n";