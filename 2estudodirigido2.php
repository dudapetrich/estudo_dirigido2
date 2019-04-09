<?php 

//2. Faça um algoritmo que peça um valor e mostre na tela se o valor é positivo ou negativo.

print"Digite um valor: ";
$valor= fgets (STDIN);

if ($valor<0 or $valor>0){
    if($valor<0)
    print "O número é negativo \n";

    if ($valor>0)
    print "O número é positivo \n";
    }

    elseif($valor==0)
    print "O número é nulo \n";
