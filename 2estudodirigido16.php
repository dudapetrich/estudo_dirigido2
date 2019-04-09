<?php

//16. Faça um programa que leia 5 números e informe a soma e a média dos números.

print "Digite o 1° número: ";
$Num1= fgets (STDIN);
print "Digite o 2° número: ";
$Num2= fgets (STDIN);
print "Digite o 3° número: ";
$Num3= fgets (STDIN);
print "Digite o 4° número: ";
$Num4= fgets (STDIN);
print "Digite o 5° número: ";
$Num5= fgets (STDIN);

$Soma=$Num1+$Num2+$Num3+$Num4+$Num5;
$Media= $Soma/5;

print "A soma dos números:
  $Num1  $Num2  $Num3  $Num4 e $Num5 deu $Soma \n";
print "E a média foi de $Media \n";