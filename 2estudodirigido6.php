<?php

//6. Faça um algoritmo que leia três números e mostre o maior deles.

print "Digite o 1° número: ";
$numero1= fgets (STDIN); 

print "Digite o 2° número: ";
$numero2= fgets (STDIN); 

print "Digite o 3° número: ";
$numero3= fgets (STDIN);

if ($numero1>$numero3 or  $numero2>$numero3){
    if ($numero1>$numero2)
    print "Número  maior:$numero1 \n";

    elseif($numero2>$numero1)
    print "Número  maior:$numero2 \n";
}

else
print "Número  maior:$numero3 \n";

