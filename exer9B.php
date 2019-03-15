<?php
print "\n----------------------------------------------------------------\n";
print "Qual o tamanho da área você deseja pintar: ";
$area = (int)fgets(STDIN);

    #galao
    $galao_rendimento = 21.6; #3.6*6
    $galao_preco = 25;

    #a  compra apenas de galaoes de 3,6 litors
    print "\n----------------------------------------------------------------\n";
    $qtd_galao = ceil($area / $galao_rendimento);
    $galao_custo = $qtd_galao * $galao_preco;
     print "Serão necessárias $qtd_galao lata(s) no valor de R$$galao_custo";
     print "\n----------------------------------------------------------------\n";