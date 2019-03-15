<?php
    print "\n----------------------------------------------------------------------------\n";
    print "Digite o preço da mercadoria: ";
    $preco = (float) fgets (STDIN);
    print "\n----------------------------------------------------------------------------\n";
    print "Digite a porcentagem para efetuar o desconto: ";
    $desconto = (float) fgets (STDIN);
    print "\n----------------------------------------------------------------------------\n";
    $novo_desconto = $desconto/100;
    $valor_real_porcentagem = $preco*$novo_desconto;
    $novo_preco = $preco-$valor_real_porcentagem;

    print "O preço da mercadoria reajustado é: $novo_preco, e o desconto foi de: $valor_real_porcentagem ";   
    print "\n----------------------------------------------------------------------------\n";