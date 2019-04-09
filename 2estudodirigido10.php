<?php

//10. Faça um algoritmo que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário
//nas seguintes situações:
//Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve pedir os demais valores, sendo encerrado;
//Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o programa;
//Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
//Se o delta for positivo, a equação possui duas raízes reais; informe-as ao usuário;

print "Digite a: ";
$a= (float) fgets(STDIN);
if ($a==0)
  {print "A equação nã é d 2º grau\n";
   print "Adio! ou Arrivederci!(Respectivamente, Adeus e Até Logo)\n";
   exit;}
print "Digite b: ";
$b= (float) fgets(STDIN);
print "Digite c: ";
$c= (float) fgets(STDIN);
$delta= ($b**2)-(4*$a*$c);
$x1 = (-$b-sqrt($delta))/(2*$a);
$x2 = (-$b+sqrt($delta))/(2*$a);
$xsemdelta=(-$b)/(2*$a);
if ($delta==0)
  {print "A equação possui apenas uma raíz real, o resultado é: $xsemdelta\n";}
if ($delta<0)
  {print "A equação não possui raízes reais, pois o delta é negativo\n";}
if ($delta>0)
  {print "A equação possuis duas raízes:\nX'=$x1\nX''=$x2\n";}
