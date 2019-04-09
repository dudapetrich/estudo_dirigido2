<?php

//1. Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas, dezenas e unidades do mesmo, observando os termos no plural a colocação do "e", da vírgula entre
//outros. Exemplo:
//326 = 3 centenas, 2 dezenas e 6 unidades
//12 = 1 dezena e 2 unidades

print"Digite um número inteiro entre 1-1000: ";
$num= fgets (STDIN);

$qtnum= $num;

if ($qtnum=3){
    $centena=(int)($num/100)%100;
    $dezena= (int)($num/10)%10;
    $unidade=(int)($num%100)%10;
    print "$num = $centena centenas , $dezena dezenas e $unidade unidades ";
  
}
 