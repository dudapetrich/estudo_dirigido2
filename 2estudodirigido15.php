<?php

//15. Faça um programa que leia 5 números e informe o maior número.

print "Digite o 1° número: ";
$numero1= fgets (STDIN); 

print "Digite o 2° número: ";
$numero2= fgets (STDIN); 

print "Digite o terceiro número: ";
$numero3= fgets (STDIN);

print "Digite o 4° número: ";
$numero4= fgets (STDIN); 

print "Digite o 5° número: ";
$numero5= fgets (STDIN); 

if ($numero5>= $numero1 and $numero5>= $numero2 and $numero5>= $numero3 and $numero5>= $numero4){
    print "O maior Número é $numero5";
}
if ($numero4>= $numero1 and $numero4>= $numero2 and $numero4>=  $numero3 and $numero4>= $numero5){
    print "O maior Número é $numero4";
}
if ( $numero3 >= $numero1 and  $numero3 >= $numero2 and $numero3 >= $numero4 and  $numero3>= $numero5){
    print "O maior Número é $numero3";
}
if ($numero2 >= $numero1 and $numero2 >=  $numero3 and $numero2>= $numero4 and $numero2>= $numero5){
    print "O maior Número é $numero2";
}
if ($numero1 >= $numero2 and $numero1 >=$numero3 and $numero1>= $numero4 and $numero1>= $numero5){
    print "O maior Número é $numero1";
}