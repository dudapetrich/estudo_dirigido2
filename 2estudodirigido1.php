<?php

//1. Faça um algoritmo que peça dois números e imprima o maior deles.

print "Digite o 1° número: ";
$numero1= fgets (STDIN); 

print "Digite o 2° número: ";
$numero2= fgets (STDIN); 

if ($numero1 > $numero2  or $numero1 < $numero2 ) {

if ($numero1 > $numero2 )
print "Este é o maior número: $numero1 \n";

if ($numero1 < $numero2 )
print "Este é o maior número: $numero2 \n";
}
elseif ($numero1 == $numero2)
print "Os números tem o mesmo valor \n";
