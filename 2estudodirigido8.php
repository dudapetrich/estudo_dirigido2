<?php

//8. Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato.

print "Qual o preço do 1° produto? \n";
$produto1= fgets (STDIN);

print "Qual o preço do 2° produto? \n";
$produto2= fgets (STDIN);

print "Qual o preço do 3° produto? \n";
$produto3= fgets (STDIN);

if ($produto1<$produto3 or  $produto2<$produto3){
    if ($produto1>$produto2)
    print "Você deve comprar o 2° produto, pois ele é o mais barato \n";

    elseif($produto2>$produto1)
    print "Você deve comprar o 1° produto, pois ele é o mais barato \n";
}

else
print "Você deve comprar o 3° produto, pois ele é o mais barato \n";

