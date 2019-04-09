<?php

//18. Faça um programa que peça 10 números inteiros, calcule e mostre a quantidade de números pares e a quantidade de números impares.

$numeropar=0;
$numeroimpar=0;
$contagemvezes=1;

do {print "Digite um número: ";
    $num = (float) fgets(STDIN);
    
    if ($num%2==0)
    {$numeropar++;}
    if ($num%2!=0)
    {$numeroimpar++;}  
    $contagemvezes++;}  while($contagemvezes<=10);
    
print "Quantidade de número(s) impar(es): $numeroimpar \nQuantidade de número(s) par(es): $numeropar \n";