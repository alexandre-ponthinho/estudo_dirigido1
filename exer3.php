<?php
print "\n-------------------------------------------------------\n";
print "Digite o salário atual: ";
$salario = (float) fgets (STDIN);
print "\n-------------------------------------------------------\n";
print "Digite a porcentagem de aumento: ";
$porc = (float) fgets (STDIN);
print "\n-------------------------------------------------------\n";
$nova_porc = $porc/100;
$valor_aumento = $salario*$nova_porc;
$novo_salario = $salario+$valor_aumento;

print "O salário atualizado é: $novo_salario e o aumento foi :$valor_aumento";
print "\n-------------------------------------------------------\n";